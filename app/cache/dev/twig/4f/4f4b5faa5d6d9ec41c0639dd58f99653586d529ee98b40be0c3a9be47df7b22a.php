<?php

/* EnfermeriaBundle:SeguridadSocial:new.html.twig */
class __TwigTemplate_7b1f4e8d9356fd6074f56095665a4abb5137e4811fd88270744262c777c8e764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EnfermeriaBundle:SeguridadSocial:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_940ef35da33344ff63077feb6d247a2a10962de0b29259d2fa9c060038e223b8 = $this->env->getExtension("native_profiler");
        $__internal_940ef35da33344ff63077feb6d247a2a10962de0b29259d2fa9c060038e223b8->enter($__internal_940ef35da33344ff63077feb6d247a2a10962de0b29259d2fa9c060038e223b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnfermeriaBundle:SeguridadSocial:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_940ef35da33344ff63077feb6d247a2a10962de0b29259d2fa9c060038e223b8->leave($__internal_940ef35da33344ff63077feb6d247a2a10962de0b29259d2fa9c060038e223b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_70dfa79e7d573f0b24f9c15945b8d2a209c024f510aafd8458b633c54debb4f0 = $this->env->getExtension("native_profiler");
        $__internal_70dfa79e7d573f0b24f9c15945b8d2a209c024f510aafd8458b633c54debb4f0->enter($__internal_70dfa79e7d573f0b24f9c15945b8d2a209c024f510aafd8458b633c54debb4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h1>A&ntildeadir nueva entrada</h1>
                </div>
                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "new-form")) : ("new-form")))));
        echo "
                <div class=\"form-group\">
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'label');
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eps", array()), 'label');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eps", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite eps")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rh", array()), 'label');
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rh", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite rh")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoContacto", array()), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoContacto", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite un numero de contacto")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'label');
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <p>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "Agregar Entrada", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ud_enfermeria_reporte");
        echo "\" class=\"btn btn-sm btn-link\">
                    Volver
                </a>
            </div>
        </div>
    </div>
";
        
        $__internal_70dfa79e7d573f0b24f9c15945b8d2a209c024f510aafd8458b633c54debb4f0->leave($__internal_70dfa79e7d573f0b24f9c15945b8d2a209c024f510aafd8458b633c54debb4f0_prof);

    }

    public function getTemplateName()
    {
        return "EnfermeriaBundle:SeguridadSocial:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  109 => 34,  105 => 33,  99 => 30,  95 => 29,  89 => 26,  85 => 25,  79 => 22,  75 => 21,  69 => 18,  65 => 17,  59 => 14,  55 => 13,  50 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ('layout.html.twig') %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="main container">*/
/*         <div class="row well">*/
/*             <div class="col-md-6">*/
/*                 <div class="page-header">*/
/*                     <h1>A&ntildeadir nueva entrada</h1>*/
/*                 </div>*/
/*                 {{ form_start(form, { 'attr' :{ 'id' : id|default('new-form')} }) }}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.id) }}*/
/*                     {{ form_widget(form.id, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.eps) }}*/
/*                     {{ form_widget(form.eps, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite eps'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.rh) }}*/
/*                     {{ form_widget(form.rh, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite rh'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.telefonoContacto) }}*/
/*                     {{ form_widget(form.telefonoContacto, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite un numero de contacto'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.users) }}*/
/*                     {{ form_widget(form.users, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                 </div>*/
/* */
/*                 <p>{{ form_widget(form.submit, { 'label': 'Agregar Entrada', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 {{ form_end(form) }}*/
/*                 <a href="{{ path('ud_enfermeria_reporte') }}" class="btn btn-sm btn-link">*/
/*                     Volver*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
