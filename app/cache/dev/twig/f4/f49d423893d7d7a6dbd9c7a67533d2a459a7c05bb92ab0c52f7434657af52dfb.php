<?php

/* AdminBundle:Dependencia:new.html.twig */
class __TwigTemplate_8b9bfe056cb33ed37e52e4a82dca720b44a3d073682ba1900af847226f244bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AdminBundle:Dependencia:new.html.twig", 1);
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
        $__internal_10222f7441452e205eea6487180f2f4356e4ec466ac78a2970ce4c9f616b13c5 = $this->env->getExtension("native_profiler");
        $__internal_10222f7441452e205eea6487180f2f4356e4ec466ac78a2970ce4c9f616b13c5->enter($__internal_10222f7441452e205eea6487180f2f4356e4ec466ac78a2970ce4c9f616b13c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Dependencia:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10222f7441452e205eea6487180f2f4356e4ec466ac78a2970ce4c9f616b13c5->leave($__internal_10222f7441452e205eea6487180f2f4356e4ec466ac78a2970ce4c9f616b13c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5127737ebdb8c31ae32f53e84e485b0b405d5336456867f63b0753b2d383335e = $this->env->getExtension("native_profiler");
        $__internal_5127737ebdb8c31ae32f53e84e485b0b405d5336456867f63b0753b2d383335e->enter($__internal_5127737ebdb8c31ae32f53e84e485b0b405d5336456867f63b0753b2d383335e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h1>A&ntildeadir una dependencia</h1>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite nombre")));
        echo "
                </div>
                <p>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "Agregar Dependencia", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("ud_admin_dependencia");
        echo "\" class=\"btn btn-sm btn-link\">
                    Volver
                </a>
            </div>
        </div>
    </div>
";
        
        $__internal_5127737ebdb8c31ae32f53e84e485b0b405d5336456867f63b0753b2d383335e->leave($__internal_5127737ebdb8c31ae32f53e84e485b0b405d5336456867f63b0753b2d383335e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Dependencia:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  78 => 21,  74 => 20,  69 => 18,  65 => 17,  59 => 14,  55 => 13,  50 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h1>A&ntildeadir una dependencia</h1>*/
/*                 </div>*/
/*                 {{ form_start(form, { 'attr' :{ 'id' : id|default('new-form')} }) }}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.id) }}*/
/*                     {{ form_widget(form.id, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.nombre) }}*/
/*                     {{ form_widget(form.nombre, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite nombre'}}) }}*/
/*                 </div>*/
/*                 <p>{{ form_widget(form.submit, { 'label': 'Agregar Dependencia', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 {{ form_end(form) }}*/
/*                 <a href="{{ path('ud_admin_dependencia') }}" class="btn btn-sm btn-link">*/
/*                     Volver*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
