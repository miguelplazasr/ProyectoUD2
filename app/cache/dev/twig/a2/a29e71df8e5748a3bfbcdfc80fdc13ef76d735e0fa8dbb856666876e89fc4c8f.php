<?php

/* ActivosBundle:StockActivo:new.html.twig */
class __TwigTemplate_2c9458bacc44df3f0841ebcd7cd8efb82060851a01c0e562452c5fc8dd52ef36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ActivosBundle:StockActivo:new.html.twig", 1);
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
        $__internal_dbc6a37c280de412defdb4bfd4e7ac8e8b5b9fd3ca7d2ed4c7a8019bcab305a3 = $this->env->getExtension("native_profiler");
        $__internal_dbc6a37c280de412defdb4bfd4e7ac8e8b5b9fd3ca7d2ed4c7a8019bcab305a3->enter($__internal_dbc6a37c280de412defdb4bfd4e7ac8e8b5b9fd3ca7d2ed4c7a8019bcab305a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActivosBundle:StockActivo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbc6a37c280de412defdb4bfd4e7ac8e8b5b9fd3ca7d2ed4c7a8019bcab305a3->leave($__internal_dbc6a37c280de412defdb4bfd4e7ac8e8b5b9fd3ca7d2ed4c7a8019bcab305a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7a4a7c972c003859be81237eda86d42db6b53c91c2bb4bc526656b0bcad2e2b = $this->env->getExtension("native_profiler");
        $__internal_c7a4a7c972c003859be81237eda86d42db6b53c91c2bb4bc526656b0bcad2e2b->enter($__internal_c7a4a7c972c003859be81237eda86d42db6b53c91c2bb4bc526656b0bcad2e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h1>Nuevo Stock</h1>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'label');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite cantidad")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eactivo", array()), 'label');
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eactivo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <p>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "Agregar Stock", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <p>
                    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("ud_activos_stock");
        echo "\" class=\"btn btn-bg btn-link\">
                        Volver
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_c7a4a7c972c003859be81237eda86d42db6b53c91c2bb4bc526656b0bcad2e2b->leave($__internal_c7a4a7c972c003859be81237eda86d42db6b53c91c2bb4bc526656b0bcad2e2b_prof);

    }

    public function getTemplateName()
    {
        return "ActivosBundle:StockActivo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  88 => 25,  84 => 24,  79 => 22,  75 => 21,  69 => 18,  65 => 17,  59 => 14,  55 => 13,  50 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="main container">*/
/*         <div class="row well">*/
/*             <div class="col-md-6">*/
/*                 <div class="page-header">*/
/*                     <h1>Nuevo Stock</h1>*/
/*                 </div>*/
/*                 {{ form_start(form, { 'attr' :{ 'id' : id|default('new-form')} }) }}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.id) }}*/
/*                     {{ form_widget(form.id, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.cantidad) }}*/
/*                     {{ form_widget(form.cantidad, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite cantidad'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.eactivo) }}*/
/*                     {{ form_widget(form.eactivo, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                 </div>*/
/*                 <p>{{ form_widget(form.submit, { 'label': 'Agregar Stock', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 {{ form_end(form) }}*/
/*                 <p>*/
/*                     <a href="{{ path('ud_activos_stock') }}" class="btn btn-bg btn-link">*/
/*                         Volver*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
