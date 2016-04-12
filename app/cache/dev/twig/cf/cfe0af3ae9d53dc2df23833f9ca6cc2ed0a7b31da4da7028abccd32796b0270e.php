<?php

/* EnfermeriaBundle:ReporteEmergencia:new.html.twig */
class __TwigTemplate_f4c32a57bea03624d44c0d35f5eada63c61dc0eadc4d37ee3f59fa82662ea6df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EnfermeriaBundle:ReporteEmergencia:new.html.twig", 1);
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
        $__internal_8d34ca12ec4e9d6b0e6294ffd815270a5aeb45ac55bd5101917e128157dd6283 = $this->env->getExtension("native_profiler");
        $__internal_8d34ca12ec4e9d6b0e6294ffd815270a5aeb45ac55bd5101917e128157dd6283->enter($__internal_8d34ca12ec4e9d6b0e6294ffd815270a5aeb45ac55bd5101917e128157dd6283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnfermeriaBundle:ReporteEmergencia:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d34ca12ec4e9d6b0e6294ffd815270a5aeb45ac55bd5101917e128157dd6283->leave($__internal_8d34ca12ec4e9d6b0e6294ffd815270a5aeb45ac55bd5101917e128157dd6283_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28618c6d94393c21f924e022573b300478462819daed317dbafd635ab3b25eb0 = $this->env->getExtension("native_profiler");
        $__internal_28618c6d94393c21f924e022573b300478462819daed317dbafd635ab3b25eb0->enter($__internal_28618c6d94393c21f924e022573b300478462819daed317dbafd635ab3b25eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div id=\"warning\">
    </div>
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>A&ntildeadir un nuevo reporte</h2>
                </div>
                <div class=\"search\">
                    <form id=\"search-form\">
                        <label for=\"searchbox\">Busqueda</label>
                        <input id=\"searchbox\" type=\"text\" placeholder=\"Ingrese el id del usuario\" class=\"form-control\" required/>
                        <br>
                        <input type=\"submit\" value=\"";
        // line 18
        echo "Buscar Usuario";
        echo "\" class=\"btn btn-default btn-search\" />
                    </form>
                </div>
                <br>
                <div class=\"searchx\">
                    <form id=\"searchxml-form\">
                        <input type=\"submit\" value=\"";
        // line 24
        echo "Buscar un tag";
        echo "\" class=\"btn btn-default btn-xml\" />
                    </form>
                </div>
                <br>
                <div class=\"detalles\" id=\"detalles\">
                    <textarea class=\"form-control\"></textarea>
                </div>
                <br>
                ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "new-form")) : ("new-form")))));
        echo "

                <div class=\"form-group\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "detalle", array()), 'label');
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "detalle", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite detalles")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'label');
        echo "
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Seleccione un usuario")));
        echo "
                </div>

                <p>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "Crear Reporte", "attr" => array("class" => "btn btn-success")));
        echo "</p>

                ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <ul>
            <li>
                <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("ud_enfermeria_reporte");
        echo "\">
                    volver
                </a>
            </li>
        </ul>
    </div>

";
        
        $__internal_28618c6d94393c21f924e022573b300478462819daed317dbafd635ab3b25eb0->leave($__internal_28618c6d94393c21f924e022573b300478462819daed317dbafd635ab3b25eb0_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_205fd768cca214ccf36c9c04754a44b395d2d4dbd1e39e249b24201ec25e52ce = $this->env->getExtension("native_profiler");
        $__internal_205fd768cca214ccf36c9c04754a44b395d2d4dbd1e39e249b24201ec25e52ce->enter($__internal_205fd768cca214ccf36c9c04754a44b395d2d4dbd1e39e249b24201ec25e52ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enfermeria/js/searchuser.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enfermeria/js/xml.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_205fd768cca214ccf36c9c04754a44b395d2d4dbd1e39e249b24201ec25e52ce->leave($__internal_205fd768cca214ccf36c9c04754a44b395d2d4dbd1e39e249b24201ec25e52ce_prof);

    }

    public function getTemplateName()
    {
        return "EnfermeriaBundle:ReporteEmergencia:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 63,  145 => 62,  140 => 61,  134 => 60,  119 => 51,  111 => 46,  106 => 44,  100 => 41,  96 => 40,  89 => 36,  85 => 35,  79 => 32,  68 => 24,  59 => 18,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends ('layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <div id="warning">*/
/*     </div>*/
/*     <div class="main container">*/
/*         <div class="row well">*/
/*             <div class="col-md-6">*/
/*                 <div class="page-header">*/
/*                     <h2>A&ntildeadir un nuevo reporte</h2>*/
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
/*                 <div class="searchx">*/
/*                     <form id="searchxml-form">*/
/*                         <input type="submit" value="{{ 'Buscar un tag' }}" class="btn btn-default btn-xml" />*/
/*                     </form>*/
/*                 </div>*/
/*                 <br>*/
/*                 <div class="detalles" id="detalles">*/
/*                     <textarea class="form-control"></textarea>*/
/*                 </div>*/
/*                 <br>*/
/*                 {{ form_start(form, { 'attr' : {'novalidate': 'novalidate', 'id': id|default('new-form') }}) }}*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.detalle) }}*/
/*                     {{ form_widget(form.detalle, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite detalles'}}) }}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.users) }}*/
/*                     {{ form_widget(form.users, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Seleccione un usuario'}}) }}*/
/*                 </div>*/
/* */
/*                 <p>{{ form_widget(form.submit, { 'label': 'Crear Reporte', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/* */
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*         <ul>*/
/*             <li>*/
/*                 <a href="{{ path('ud_enfermeria_reporte') }}">*/
/*                     volver*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/enfermeria/js/searchuser.js') }}"></script>*/
/*     <script src="{{ asset('bundles/enfermeria/js/xml.js') }}"></script>*/
/* {% endblock %}*/
