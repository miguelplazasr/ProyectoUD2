<?php

/* ActivosBundle:StockActivo:edit.html.twig */
class __TwigTemplate_d944cc6b8d2ae7efdb1c3c36425e24a18c434b571c931255d9d1afff444288ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ActivosBundle:StockActivo:edit.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h1>Editar Stock</h1>
                </div>

                ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), "new-form")) : ("new-form")))));
        echo "
                <div class=\"form-group\">
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "id", array()), 'label');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "id", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id", "readonly" => "readonly")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "cantidad", array()), 'label');
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "cantidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite cantidad")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "eactivo", array()), 'label');
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "eactivo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <p>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "submit", array()), 'widget', array("label" => "Editar Activo", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
                <p>
                    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
                </p>
                <p>
                    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("ud_activos_stock");
        echo "\" class=\"btn btn-bg btn-link\">
                        Volver
                    </a>
                </p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ActivosBundle:StockActivo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  90 => 30,  85 => 28,  80 => 26,  76 => 25,  71 => 23,  67 => 22,  61 => 19,  57 => 18,  51 => 15,  47 => 14,  42 => 12,  31 => 4,  28 => 3,  11 => 1,);
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
/*                     <h1>Editar Stock</h1>*/
/*                 </div>*/
/* */
/*                 {{ form_start(edit_form, { 'attr' :{ 'id' : id|default('new-form')} }) }}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.id) }}*/
/*                     {{ form_widget(edit_form.id, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id', 'readonly': 'readonly'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.cantidad) }}*/
/*                     {{ form_widget(edit_form.cantidad, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite cantidad'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.eactivo) }}*/
/*                     {{ form_widget(edit_form.eactivo, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                 </div>*/
/*                 <p>{{ form_widget(edit_form.submit, { 'label': 'Editar Activo', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 {{ form_end(edit_form) }}*/
/*                 <p>*/
/*                     {{ form_start(delete_form) }}*/
/*                     <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                     {{ form_end(delete_form) }}*/
/*                 </p>*/
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
