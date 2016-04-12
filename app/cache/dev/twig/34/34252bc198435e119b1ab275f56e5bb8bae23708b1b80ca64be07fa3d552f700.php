<?php

/* SalonesBundle:Salones:new.html.twig */
class __TwigTemplate_69c34f0c689122acd289976177c2cdb6553967834acf9179e1edc149b9fc7225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SalonesBundle:Salones:new.html.twig", 1);
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
        $__internal_c4557423ac31256f3f619aeba7c69b0ea7dd6d4f0aab3ac08326f4d2389b9c1f = $this->env->getExtension("native_profiler");
        $__internal_c4557423ac31256f3f619aeba7c69b0ea7dd6d4f0aab3ac08326f4d2389b9c1f->enter($__internal_c4557423ac31256f3f619aeba7c69b0ea7dd6d4f0aab3ac08326f4d2389b9c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalonesBundle:Salones:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4557423ac31256f3f619aeba7c69b0ea7dd6d4f0aab3ac08326f4d2389b9c1f->leave($__internal_c4557423ac31256f3f619aeba7c69b0ea7dd6d4f0aab3ac08326f4d2389b9c1f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fab87fc09292d08718684313696ba632fbe6659ed9b7a2810d6b81055c128ce = $this->env->getExtension("native_profiler");
        $__internal_7fab87fc09292d08718684313696ba632fbe6659ed9b7a2810d6b81055c128ce->enter($__internal_7fab87fc09292d08718684313696ba632fbe6659ed9b7a2810d6b81055c128ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"main container\">
    <div class=\"row well\">
        <div class=\"col-md-6\">
            <div class=\"page-header\">
                <h1>A&ntildeadir un salon</h1>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreSala", array()), 'label');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreSala", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite un nombre")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite descripcion")));
        echo "
            </div>
            <p>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "Agregar Sala", "attr" => array("class" => "btn btn-success")));
        echo "</p>
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <p>
                <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("ud_salones_salon");
        echo "\" class=\"btn btn-sm btn-link\">
                   Volver
                </a>
            </p>
        </div>
    </div>
</div>
";
        
        $__internal_7fab87fc09292d08718684313696ba632fbe6659ed9b7a2810d6b81055c128ce->leave($__internal_7fab87fc09292d08718684313696ba632fbe6659ed9b7a2810d6b81055c128ce_prof);

    }

    public function getTemplateName()
    {
        return "SalonesBundle:Salones:new.html.twig";
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
/* {{ parent() }}*/
/* <div class="main container">*/
/*     <div class="row well">*/
/*         <div class="col-md-6">*/
/*             <div class="page-header">*/
/*                 <h1>A&ntildeadir un salon</h1>*/
/*             </div>*/
/*             {{ form_start(form, { 'attr' :{ 'id' : id|default('new-form')} }) }}*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.id) }}*/
/*                 {{ form_widget(form.id, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id'}}) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.nombreSala) }}*/
/*                 {{ form_widget(form.nombreSala, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite un nombre'}}) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.descripcion) }}*/
/*                 {{ form_widget(form.descripcion, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite descripcion'}}) }}*/
/*             </div>*/
/*             <p>{{ form_widget(form.submit, { 'label': 'Agregar Sala', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*             {{ form_end(form) }}*/
/*             <p>*/
/*                 <a href="{{ path('ud_salones_salon') }}" class="btn btn-sm btn-link">*/
/*                    Volver*/
/*                 </a>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
