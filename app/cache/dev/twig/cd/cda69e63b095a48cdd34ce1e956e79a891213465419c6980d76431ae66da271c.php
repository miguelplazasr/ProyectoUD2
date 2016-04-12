<?php

/* DeportesBundle:InventarioDeportes:new.html.twig */
class __TwigTemplate_4e9b2241fc0da32b1fbd899c2459b8c42af897aee2f5adadba90a68a6055e314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DeportesBundle:InventarioDeportes:new.html.twig", 1);
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
        $__internal_bd93c2a2bcd717d39faa61d87f1593436a0b2bbc412c5d6c309ab07cd43c17a2 = $this->env->getExtension("native_profiler");
        $__internal_bd93c2a2bcd717d39faa61d87f1593436a0b2bbc412c5d6c309ab07cd43c17a2->enter($__internal_bd93c2a2bcd717d39faa61d87f1593436a0b2bbc412c5d6c309ab07cd43c17a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DeportesBundle:InventarioDeportes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd93c2a2bcd717d39faa61d87f1593436a0b2bbc412c5d6c309ab07cd43c17a2->leave($__internal_bd93c2a2bcd717d39faa61d87f1593436a0b2bbc412c5d6c309ab07cd43c17a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac1003e1d8a882ee693ae4b7b5f62e3c2b16dc668f7097466b0ce621271b651a = $this->env->getExtension("native_profiler");
        $__internal_ac1003e1d8a882ee693ae4b7b5f62e3c2b16dc668f7097466b0ce621271b651a->enter($__internal_ac1003e1d8a882ee693ae4b7b5f62e3c2b16dc668f7097466b0ce621271b651a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h1>A&ntildeadir un nuevo elemento</h1>
                </div>

                ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "new-form")) : ("new-form")))));
        echo "
                <div class=\"form-group\">
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'label');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'label');
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'label');
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite la cantidad")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "elemendepor", array()), 'label');
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "elemendepor", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <p>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "Agregar al inventario", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("ud_deportes_inventario");
        echo "\" class=\"btn btn-sm btn-link\">
                    Volver
                </a>
            </div>
        </div>
    </div>
";
        
        $__internal_ac1003e1d8a882ee693ae4b7b5f62e3c2b16dc668f7097466b0ce621271b651a->leave($__internal_ac1003e1d8a882ee693ae4b7b5f62e3c2b16dc668f7097466b0ce621271b651a_prof);

    }

    public function getTemplateName()
    {
        return "DeportesBundle:InventarioDeportes:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  99 => 30,  95 => 29,  90 => 27,  86 => 26,  80 => 23,  76 => 22,  70 => 19,  66 => 18,  60 => 15,  56 => 14,  51 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h1>A&ntildeadir un nuevo elemento</h1>*/
/*                 </div>*/
/* */
/*                 {{ form_start(form, { 'attr' :{ 'id' : id|default('new-form')} }) }}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.id) }}*/
/*                     {{ form_widget(form.id, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.estado) }}*/
/*                     {{ form_widget(form.estado, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.cantidad) }}*/
/*                     {{ form_widget(form.cantidad, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite la cantidad'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.elemendepor) }}*/
/*                     {{ form_widget(form.elemendepor, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                 </div>*/
/*                 <p>{{ form_widget(form.submit, { 'label': 'Agregar al inventario', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 {{ form_end(form) }}*/
/*                 <a href="{{ path('ud_deportes_inventario') }}" class="btn btn-sm btn-link">*/
/*                     Volver*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
