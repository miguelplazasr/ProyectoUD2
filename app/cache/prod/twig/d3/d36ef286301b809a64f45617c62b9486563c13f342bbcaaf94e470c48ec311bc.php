<?php

/* ActivosBundle:PrestamoActivo:new.html.twig */
class __TwigTemplate_b29a0f9599440f3defb2191399cafa045b9e70d97bba98ea6d34489fda3b6306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Activos/Default/index.html.twig", "ActivosBundle:PrestamoActivo:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Activos/Default/index.html.twig";
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
                    <h1>Nuevo Prestamo</h1>
                </div>
                <div class=\"search\">
                    <form id=\"search-form\">
                        <label for=\"searchbox\">Busqueda</label>
                        <input id=\"searchbox\" type=\"text\" placeholder=\"Ingrese el id del usuario\" class=\"form-control\" required/>
                        <br>
                        <input type=\"submit\" value=\"";
        // line 15
        echo "Buscar Usuario";
        echo "\" class=\"btn btn-default btn-search\" />
                    </form>
                </div>
                ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), "new-form")) : ("new-form")))));
        echo "
                <div id=\"elementos\">
                    <div class=\"form-group\">
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sactivo", array()), 'label');
        echo "
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sactivo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"success\">
                    <span class=\"alert-success\">De este elemento existen: </span>
                </div>
                <div class=\"danger\">
                    <span class=\"alert-danger\">No hay existencias</span>
                </div>
                <div id=\"form-rest\">
                    <div class=\"form-group\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "users", array()), 'label');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "users", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cantidad", array()), 'label');
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cantidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite un cantidad", "min" => 0)));
        echo "
                    </div>
                    <p>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("label" => "Agregar Prestamo", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                </div>
                ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("ud_activos_prestamo");
        echo "\" class=\"btn btn-bg btn-link\">
                    Volver
                </a>
            </div>
        </div>
";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/activos/js/searchcantidad.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/activos/js/searchuser.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ActivosBundle:PrestamoActivo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  122 => 52,  117 => 51,  114 => 50,  104 => 43,  100 => 42,  95 => 40,  90 => 38,  86 => 37,  80 => 34,  76 => 33,  62 => 22,  58 => 21,  52 => 18,  46 => 15,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@Activos/Default/index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     {{ parent() }}*/
/*         <div class="row well">*/
/*             <div class="col-md-6">*/
/*                 <div class="page-header">*/
/*                     <h1>Nuevo Prestamo</h1>*/
/*                 </div>*/
/*                 <div class="search">*/
/*                     <form id="search-form">*/
/*                         <label for="searchbox">Busqueda</label>*/
/*                         <input id="searchbox" type="text" placeholder="Ingrese el id del usuario" class="form-control" required/>*/
/*                         <br>*/
/*                         <input type="submit" value="{{ 'Buscar Usuario' }}" class="btn btn-default btn-search" />*/
/*                     </form>*/
/*                 </div>*/
/*                 {{ form_start(form, { 'attr' :{ 'id' : id|default('new-form')} }) }}*/
/*                 <div id="elementos">*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.sactivo) }}*/
/*                         {{ form_widget(form.sactivo, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="success">*/
/*                     <span class="alert-success">De este elemento existen: </span>*/
/*                 </div>*/
/*                 <div class="danger">*/
/*                     <span class="alert-danger">No hay existencias</span>*/
/*                 </div>*/
/*                 <div id="form-rest">*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.users) }}*/
/*                         {{ form_widget(form.users, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.cantidad) }}*/
/*                         {{ form_widget(form.cantidad, { 'attr' : {'class' : 'form-control', 'placeholder': 'Digite un cantidad', 'min': 0 }}) }}*/
/*                     </div>*/
/*                     <p>{{ form_widget(form.submit, { 'label': 'Agregar Prestamo', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 </div>*/
/*                 {{ form_end(form) }}*/
/*                 <a href="{{ path('ud_activos_prestamo') }}" class="btn btn-bg btn-link">*/
/*                     Volver*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/activos/js/searchcantidad.js') }}"></script>*/
/*     <script src="{{ asset('bundles/activos/js/searchuser.js') }}"></script>*/
/* {% endblock %}*/
/* */
