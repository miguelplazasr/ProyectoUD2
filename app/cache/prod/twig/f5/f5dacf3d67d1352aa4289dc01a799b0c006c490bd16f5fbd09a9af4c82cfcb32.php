<?php

/* EnfermeriaBundle:SeguridadSocial:edit.html.twig */
class __TwigTemplate_f37b36600033a61aca8f4b2a5aa023bb53c0db1f79ac63202444f5614748829e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Enfermeria/Default/index.html.twig", "EnfermeriaBundle:SeguridadSocial:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Enfermeria/Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h1>Editar entrada</h1>
                </div>
                ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), "edit-form")) : ("edit-form")))));
        echo "
                <div class=\"form-group\">
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "id", array()), 'label');
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "id", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "eps", array()), 'label');
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "eps", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite eps")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "rh", array()), 'label');
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "rh", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite rh")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telefonoContacto", array()), 'label');
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telefonoContacto", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite un numero de contacto")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "users", array()), 'label');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "users", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <p>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "submit", array()), 'widget', array("label" => "Editar Entrada", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
                <p>
                    ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
                </p>
                <p>
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ud_enfermeria_ssocial");
        echo "\" class=\"btn btn-sm btn-link\">
                        Volver
                    </a>
                </p>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "EnfermeriaBundle:SeguridadSocial:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  109 => 37,  104 => 35,  99 => 33,  95 => 32,  89 => 29,  85 => 28,  79 => 25,  75 => 24,  69 => 21,  65 => 20,  59 => 17,  55 => 16,  49 => 13,  45 => 12,  40 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Enfermeria/Default/index.html.twig'%}*/
/* */
/* {% block content -%}*/
/*     {{ parent() }}*/
/*         <div class="row well">*/
/*             <div class="col-md-6">*/
/*                 <div class="page-header">*/
/*                     <h1>Editar entrada</h1>*/
/*                 </div>*/
/*                 {{ form_start(edit_form, { 'attr' :{ 'id' : id|default('edit-form')} }) }}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.id) }}*/
/*                     {{ form_widget(edit_form.id, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.eps) }}*/
/*                     {{ form_widget(edit_form.eps, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite eps'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.rh) }}*/
/*                     {{ form_widget(edit_form.rh, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite rh'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.telefonoContacto) }}*/
/*                     {{ form_widget(edit_form.telefonoContacto, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite un numero de contacto'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.users) }}*/
/*                     {{ form_widget(edit_form.users, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                 </div>*/
/* */
/*                 <p>{{ form_widget(edit_form.submit, { 'label': 'Editar Entrada', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 {{ form_end(edit_form) }}*/
/*                 <p>*/
/*                     {{ form_start(delete_form) }}*/
/*                     <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                     {{ form_end(delete_form) }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a href="{{ path('ud_enfermeria_ssocial') }}" class="btn btn-sm btn-link">*/
/*                         Volver*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* {% endblock %}*/
