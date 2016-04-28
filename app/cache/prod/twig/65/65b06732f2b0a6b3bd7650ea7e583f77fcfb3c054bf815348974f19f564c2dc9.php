<?php

/* SalonesBundle:Salones:new.html.twig */
class __TwigTemplate_50e8ec4c15b89035fce7d36975532fd4e8aeff239d11776f84dac844331ebde2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalonesBundle:Default:index.html.twig", "SalonesBundle:Salones:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SalonesBundle:Default:index.html.twig";
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
                <h1>A&ntildeadir un salon</h1>
            </div>
            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), "new-form")) : ("new-form")))));
        echo "
            <div class=\"form-group\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'label');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreSala", array()), 'label');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreSala", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite un nombre")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'label');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite descripcion")));
        echo "
            </div>
            <p>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("label" => "Agregar Sala", "attr" => array("class" => "btn btn-success")));
        echo "</p>
            ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            <p>
                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("ud_salones_salon");
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
        return "SalonesBundle:Salones:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  78 => 24,  74 => 23,  69 => 21,  65 => 20,  59 => 17,  55 => 16,  49 => 13,  45 => 12,  40 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SalonesBundle:Default:index.html.twig'%}*/
/* */
/* {% block content -%}*/
/* {{ parent() }}*/
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
/* {% endblock %}*/
/* */
