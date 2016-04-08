<?php

/* DeportesBundle:PrestamoDeportes:new.html.twig */
class __TwigTemplate_522b97a06bf3e690d73c61dc933cc7a0cd507682f38edfe407e49bdac8d731d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DeportesBundle:PrestamoDeportes:new.html.twig", 1);
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
        $__internal_fa1aa03d0856752abafff362e41b9452b30afdc183baa524aa4c2efc85ea461e = $this->env->getExtension("native_profiler");
        $__internal_fa1aa03d0856752abafff362e41b9452b30afdc183baa524aa4c2efc85ea461e->enter($__internal_fa1aa03d0856752abafff362e41b9452b30afdc183baa524aa4c2efc85ea461e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DeportesBundle:PrestamoDeportes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1aa03d0856752abafff362e41b9452b30afdc183baa524aa4c2efc85ea461e->leave($__internal_fa1aa03d0856752abafff362e41b9452b30afdc183baa524aa4c2efc85ea461e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d16d205f51feb6d78c325c1412703a8eea91fd1f3a3bf4644122f14024be2332 = $this->env->getExtension("native_profiler");
        $__internal_d16d205f51feb6d78c325c1412703a8eea91fd1f3a3bf4644122f14024be2332->enter($__internal_d16d205f51feb6d78c325c1412703a8eea91fd1f3a3bf4644122f14024be2332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <br>
                ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "new-form")) : ("new-form")))));
        echo "
                <div id=\"elementos\">
                    <div class=\"form-group\">
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ideportes", array()), 'label');
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ideportes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"success\">
                    <span class=\"alert-success\">De este elemento existen: </span>
                </div>
                <div class=\"danger\">
                    <span class=\"alert-danger\">No hay existencias</span>
                </div>
                <br>
                <div id=\"form-rest\">
                    <div class=\"form-group\">
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'label');
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <p>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "Crear Prestamo", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                </div>
                ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>

        </div>
    </div>
";
        
        $__internal_d16d205f51feb6d78c325c1412703a8eea91fd1f3a3bf4644122f14024be2332->leave($__internal_d16d205f51feb6d78c325c1412703a8eea91fd1f3a3bf4644122f14024be2332_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c9956abb0b3e3c3e608d32189b01adb62d69b401c0b9a035946196dd6f3197c = $this->env->getExtension("native_profiler");
        $__internal_7c9956abb0b3e3c3e608d32189b01adb62d69b401c0b9a035946196dd6f3197c->enter($__internal_7c9956abb0b3e3c3e608d32189b01adb62d69b401c0b9a035946196dd6f3197c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/deportes/js/searchcantidad.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/deportes/js/searchuser.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7c9956abb0b3e3c3e608d32189b01adb62d69b401c0b9a035946196dd6f3197c->leave($__internal_7c9956abb0b3e3c3e608d32189b01adb62d69b401c0b9a035946196dd6f3197c_prof);

    }

    public function getTemplateName()
    {
        return "DeportesBundle:PrestamoDeportes:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 51,  126 => 50,  121 => 49,  115 => 48,  102 => 41,  97 => 39,  92 => 37,  88 => 36,  73 => 24,  69 => 23,  63 => 20,  56 => 16,  41 => 4,  35 => 3,  11 => 1,);
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
/*                 <br>*/
/*                 {{ form_start(form, { 'attr' :{ 'id' : id|default('new-form')} }) }}*/
/*                 <div id="elementos">*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.ideportes) }}*/
/*                         {{ form_widget(form.ideportes, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="success">*/
/*                     <span class="alert-success">De este elemento existen: </span>*/
/*                 </div>*/
/*                 <div class="danger">*/
/*                     <span class="alert-danger">No hay existencias</span>*/
/*                 </div>*/
/*                 <br>*/
/*                 <div id="form-rest">*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.users) }}*/
/*                         {{ form_widget(form.users, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                     </div>*/
/*                     <p>{{ form_widget(form.submit, { 'label': 'Crear Prestamo', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 </div>*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/deportes/js/searchcantidad.js') }}"></script>*/
/*     <script src="{{ asset('bundles/deportes/js/searchuser.js') }}"></script>*/
/* {% endblock %}*/
