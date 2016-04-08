<?php

/* DeportesBundle:ElementosDeportes:edit.html.twig */
class __TwigTemplate_09797234ceacf551f8b35ee150b8f033f8a009b0dd95cffacd0a4cb6d13cc4fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DeportesBundle:ElementosDeportes:edit.html.twig", 1);
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
        $__internal_25e95a1b87893a60c2edd91c76241998ef15c618952ee88488be1cc941f47ff4 = $this->env->getExtension("native_profiler");
        $__internal_25e95a1b87893a60c2edd91c76241998ef15c618952ee88488be1cc941f47ff4->enter($__internal_25e95a1b87893a60c2edd91c76241998ef15c618952ee88488be1cc941f47ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DeportesBundle:ElementosDeportes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25e95a1b87893a60c2edd91c76241998ef15c618952ee88488be1cc941f47ff4->leave($__internal_25e95a1b87893a60c2edd91c76241998ef15c618952ee88488be1cc941f47ff4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b92875bba46d9b9403294504436cde49fec1e1d8ffd5d60260e55e6b8e68126 = $this->env->getExtension("native_profiler");
        $__internal_9b92875bba46d9b9403294504436cde49fec1e1d8ffd5d60260e55e6b8e68126->enter($__internal_9b92875bba46d9b9403294504436cde49fec1e1d8ffd5d60260e55e6b8e68126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <h1>Editar un Elemento</h1>
                ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "edit-form")) : ("edit-form")))));
        echo "
                <div class=\"form-group\">
                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "id", array()), 'label');
        echo "
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "id", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'label');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite el nombre")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'label');
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite detalles")));
        echo "
                </div>

                <p>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("label" => "Editar Elemento", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ud_deportes_elementos");
        echo "\" class=\"btn btn-sm btn-default\">
                    Volver
                </a>
                <p>
                    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </p>
            </div>
        </div>
    </div>

";
        
        $__internal_9b92875bba46d9b9403294504436cde49fec1e1d8ffd5d60260e55e6b8e68126->leave($__internal_9b92875bba46d9b9403294504436cde49fec1e1d8ffd5d60260e55e6b8e68126_prof);

    }

    public function getTemplateName()
    {
        return "DeportesBundle:ElementosDeportes:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  96 => 28,  89 => 24,  85 => 23,  81 => 22,  75 => 19,  71 => 18,  65 => 15,  61 => 14,  55 => 11,  51 => 10,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <div class="main container">*/
/*         <div class="row well">*/
/*             <div class="col-md-6">*/
/*                 <h1>Editar un Elemento</h1>*/
/*                 {{ form_start(edit_form, { 'attr' :{ 'id' : id|default('edit-form')} }) }}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.id) }}*/
/*                     {{ form_widget(edit_form.id, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.nombre) }}*/
/*                     {{ form_widget(edit_form.nombre, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite el nombre'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.descripcion) }}*/
/*                     {{ form_widget(edit_form.descripcion, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite detalles'}}) }}*/
/*                 </div>*/
/* */
/*                 <p>{{ form_widget(edit_form.submit, { 'label': 'Editar Elemento', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 {{ form_end(edit_form) }}*/
/*                 <a href="{{ path('ud_deportes_elementos') }}" class="btn btn-sm btn-default">*/
/*                     Volver*/
/*                 </a>*/
/*                 <p>*/
/*                     {{ form_start(delete_form) }}*/
/*                     <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                     {{ form_end(delete_form) }}*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
