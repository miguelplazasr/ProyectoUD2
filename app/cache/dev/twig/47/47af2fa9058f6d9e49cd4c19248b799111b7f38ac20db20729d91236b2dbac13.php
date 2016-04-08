<?php

/* ActivosBundle:PrestamoActivo:new.html.twig */
class __TwigTemplate_43243608ddc7be01f1fdde8d7a3ce868825b905f8146831c39c34e468fd3f6ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ActivosBundle:PrestamoActivo:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9b757a592ebaecf1e18587bde648c8d54f264b277ad2fd542fcf8caf5b24044 = $this->env->getExtension("native_profiler");
        $__internal_a9b757a592ebaecf1e18587bde648c8d54f264b277ad2fd542fcf8caf5b24044->enter($__internal_a9b757a592ebaecf1e18587bde648c8d54f264b277ad2fd542fcf8caf5b24044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActivosBundle:PrestamoActivo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b757a592ebaecf1e18587bde648c8d54f264b277ad2fd542fcf8caf5b24044->leave($__internal_a9b757a592ebaecf1e18587bde648c8d54f264b277ad2fd542fcf8caf5b24044_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2881ea445582c0e39512591eba38f4a7224f4a5e8dc3b865708d78de209abba = $this->env->getExtension("native_profiler");
        $__internal_c2881ea445582c0e39512591eba38f4a7224f4a5e8dc3b865708d78de209abba->enter($__internal_c2881ea445582c0e39512591eba38f4a7224f4a5e8dc3b865708d78de209abba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
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
        // line 16
        echo "Buscar Usuario";
        echo "\" class=\"btn btn-default btn-search\" />
                    </form>
                </div>
                ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "new-form")) : ("new-form")))));
        echo "
                <div id=\"elementos\">
                    <div class=\"form-group\">
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sactivo", array()), 'label');
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sactivo", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'label');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'label');
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite un cantidad")));
        echo "
                    </div>
                    <p>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "Agregar Prestamo", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                </div>
                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("ud_activos_prestamo");
        echo "\" class=\"btn btn-bg btn-link\">
                    Volver
                </a>
            </div>
        </div>
    </div>
";
        
        $__internal_c2881ea445582c0e39512591eba38f4a7224f4a5e8dc3b865708d78de209abba->leave($__internal_c2881ea445582c0e39512591eba38f4a7224f4a5e8dc3b865708d78de209abba_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2d26b9dd8dd33d84afc094ad78ab399aeed1663fc42d8b24b257878663ca716 = $this->env->getExtension("native_profiler");
        $__internal_d2d26b9dd8dd33d84afc094ad78ab399aeed1663fc42d8b24b257878663ca716->enter($__internal_d2d26b9dd8dd33d84afc094ad78ab399aeed1663fc42d8b24b257878663ca716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/activos/js/searchcantidad.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/activos/js/searchuser.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d2d26b9dd8dd33d84afc094ad78ab399aeed1663fc42d8b24b257878663ca716->leave($__internal_d2d26b9dd8dd33d84afc094ad78ab399aeed1663fc42d8b24b257878663ca716_prof);

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
        return array (  143 => 55,  139 => 54,  134 => 53,  128 => 52,  114 => 44,  110 => 43,  105 => 41,  100 => 39,  96 => 38,  90 => 35,  86 => 34,  72 => 23,  68 => 22,  62 => 19,  56 => 16,  41 => 4,  35 => 3,  11 => 1,);
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
/*                         {{ form_widget(form.cantidad, { 'attr' : {'class' : 'form-control', 'placeholder': 'Digite un cantidad'}}) }}*/
/*                     </div>*/
/*                     <p>{{ form_widget(form.submit, { 'label': 'Agregar Prestamo', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 </div>*/
/*                 {{ form_end(form) }}*/
/*                 <a href="{{ path('ud_activos_prestamo') }}" class="btn btn-bg btn-link">*/
/*                     Volver*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/activos/js/searchcantidad.js') }}"></script>*/
/*     <script src="{{ asset('bundles/activos/js/searchuser.js') }}"></script>*/
/* {% endblock %}*/
/* */