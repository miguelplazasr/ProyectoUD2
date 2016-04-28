<?php

/* AdminBundle:Dependencia:new.html.twig */
class __TwigTemplate_fa28f905f8955bf9402ac656c17b0258cc36784c8dd5ba61b0aa46379f13e69e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Admin/Default/index.html.twig", "AdminBundle:Dependencia:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Admin/Default/index.html.twig";
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
                    <h1>A&ntildeadir una dependencia</h1>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite nombre")));
        echo "
                </div>
                <p>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("label" => "Agregar Dependencia", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ud_admin_dependencia");
        echo "\" class=\"btn btn-sm btn-link\">
                    Volver
                </a>
            </div>
        </div>
";
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
        return array (  72 => 21,  68 => 20,  64 => 19,  59 => 17,  55 => 16,  49 => 13,  45 => 12,  40 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends ('@Admin/Default/index.html.twig') %}*/
/* */
/* {% block content -%}*/
/*     {{ parent() }}*/
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
/* {% endblock %}*/
