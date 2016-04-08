<?php

/* AdminBundle:Dependencia:edit.html.twig */
class __TwigTemplate_7949a511406546771b59eb32db90ee08bf7c9a133f9b072e4d532d31b57019f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AdminBundle:Dependencia:edit.html.twig", 1);
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
        $__internal_662b7d8f2188503fafefe44fe022efeb202bf39665e2624aa53fd366e866b98c = $this->env->getExtension("native_profiler");
        $__internal_662b7d8f2188503fafefe44fe022efeb202bf39665e2624aa53fd366e866b98c->enter($__internal_662b7d8f2188503fafefe44fe022efeb202bf39665e2624aa53fd366e866b98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Dependencia:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_662b7d8f2188503fafefe44fe022efeb202bf39665e2624aa53fd366e866b98c->leave($__internal_662b7d8f2188503fafefe44fe022efeb202bf39665e2624aa53fd366e866b98c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d96653a969733b1a2c5d13a186c05413cdb87408588921de2d38b002ce1ba70e = $this->env->getExtension("native_profiler");
        $__internal_d96653a969733b1a2c5d13a186c05413cdb87408588921de2d38b002ce1ba70e->enter($__internal_d96653a969733b1a2c5d13a186c05413cdb87408588921de2d38b002ce1ba70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h1>Editar una dependencia</h1>
                </div>
                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "new-form")) : ("new-form")))));
        echo "
                <div class=\"form-group\">
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "id", array()), 'label');
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "id", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'label');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite nombre")));
        echo "
                </div>
                <p>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("label" => "Agregar Dependencia", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                <p>
                    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </p>
                <p>
                    <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ud_admin_dependencia");
        echo "\" class=\"btn btn-sm btn-link\">
                        Volver
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_d96653a969733b1a2c5d13a186c05413cdb87408588921de2d38b002ce1ba70e->leave($__internal_d96653a969733b1a2c5d13a186c05413cdb87408588921de2d38b002ce1ba70e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Dependencia:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  88 => 25,  83 => 23,  78 => 21,  74 => 20,  69 => 18,  65 => 17,  59 => 14,  55 => 13,  50 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h1>Editar una dependencia</h1>*/
/*                 </div>*/
/*                 {{ form_start(edit_form, { 'attr' :{ 'id' : id|default('new-form')} }) }}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.id) }}*/
/*                     {{ form_widget(edit_form.id, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.nombre) }}*/
/*                     {{ form_widget(edit_form.nombre, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite nombre'}}) }}*/
/*                 </div>*/
/*                 <p>{{ form_widget(edit_form.submit, { 'label': 'Agregar Dependencia', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 {{ form_end(edit_form) }}*/
/*                 <p>*/
/*                     {{ form_start(delete_form) }}*/
/*                     <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                     {{ form_end(delete_form) }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a href="{{ path('ud_admin_dependencia') }}" class="btn btn-sm btn-link">*/
/*                         Volver*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
