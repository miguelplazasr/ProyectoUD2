<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Proyecto\AdminBundle\Entity\Usuarios;
use Proyecto\AdminBundle\Form\RegistrationType;
use Proyecto\AdminBundle\Form\UsuariosType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Controller managing the user profile
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ProfileController extends Controller
{

    public function indexAction(){

        $users = $this->get('fos_user.user_manager')->findUsers();

        $deleteForms = array();

        foreach($users as $user){
            $deleteForms[$user->getId()] = $this->createDeleteForm($user->getId())->createView();
        }

        return $this->render('FOSUserBundle:Profile:index.html.twig', array(
              'users' => $users,
              'delete_forms' => $deleteForms
        ));

    }

    /**
     * Creates a new Usuarios entity.
     *
     * @Route("/", name="fos_user_profile_createus")
     * @Method("POST")
     * @Template("FOSUserBundle:Profile:newus.html.twig")
     */
    public function createUsAction(Request $request){
        $user = new Usuarios();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('fos_user_profile_showus', array('id' => $user->getId())));
        }

        return array(
            'user' => $user,
            'form' => $form->createView()
        );
    }


    private function createCreateForm(Usuarios $user)
    {
        $form = $this->createForm(new RegistrationType(), $user, array(
            'action' => $this->generateUrl('fos_user_profile_createus'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Usuarios entity.
     *
     * @Route("/new", name="fos_user_profile_newus")
     * @Method("GET")
     * @Template()
     */
    public function newUsAction(){
        $user = new Usuarios();
        $form = $this->createCreateForm($user);

        return array(
            'user' => $user,
            'form' => $form->createView()
        );
    }

    public function showUsAction($id){
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AdminBundle:Usuarios')->find($id);

        if(!$user){
            throw $this->createNotFoundException('unable to find user Entity');
        }

        return $this->render('FOSUserBundle:Profile:showus.html.twig', array(
               'user' => $user,
        ));
    }

    public function editUsAction($id){
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AdminBundle:Usuarios')->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Unable to find Usuarios entity.');
        }

        $editForm = $this->createEditForm($user);

        return $this->render('@FOSUser/Profile/editus.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView()
        ));
    }

    /**
     * Creates a form to edit a Usuarios entity.
     *
     * @param Usuarios $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Usuarios $user)
    {
       $form = $this->createForm(new UsuariosType(), $user, array(
               'action' => $this->generateUrl('fos_user_profile_updateus', array('id' => $user->getId())),
               'method' => 'PUT',
       ));

       $form->add('submit', 'submit', array('label' => 'Editar usuario'));

        return $form;
    }

    /**
     * Edits an existing users entity.
     *
     * @Route("/{id}", name="fos_user_profile_updateus")
     * @Method("PUT")
     * @Template("FOSUserBundle:Profile:editus.html.twig")
     */
    public function updateUsAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AdminBundle:Usuarios')->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Unable to find Usuarios entity.');
        }

        $editForm = $this->createEditForm($user);
        $editForm->handleRequest($request);

        if($editForm->isValid()){
            $em->flush();

            return $this->redirect($this->generateUrl('fos_user_profile_showus', array('id' => $id)));
        }

        return array(
            'user' => $user,
            'edit_form' => $editForm->createView()
        );
    }

    public function deleteUsAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if($form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('AdminBundle:Usuarios')->find($id);

            if(!$user){
                throw $this->createNotFoundException('Unable to find Usuarios Entity');
            }

        $em->remove($user);
        $em->flush();
        }

        return $this->redirect($this->generateUrl('fos_user_profile_index'));
    }


    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
                    ->setAction($this->generateUrl('fos_user_profile_deleteus', array('id' => $id)))
                    ->setMethod('DELETE')
                    ->getForm()
            ;
    }


    /**
     * Show the user
     */
    public function showAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('FOSUserBundle:Profile:show.html.twig', array(
            'user' => $user
        ));
    }

    /**
     * Edit the user
     */
    public function editAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('FOSUserBundle:Profile:edit.html.twig', array(
            'form' => $form->createView()
        ));
    }



}
