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
        $__internal_a107c1bfaff57aaa70891c8971d12fad8672afc4ea8a1acc5ea9abfd7a85b142 = $this->env->getExtension("native_profiler");
        $__internal_a107c1bfaff57aaa70891c8971d12fad8672afc4ea8a1acc5ea9abfd7a85b142->enter($__internal_a107c1bfaff57aaa70891c8971d12fad8672afc4ea8a1acc5ea9abfd7a85b142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnfermeriaBundle:ReporteEmergencia:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a107c1bfaff57aaa70891c8971d12fad8672afc4ea8a1acc5ea9abfd7a85b142->leave($__internal_a107c1bfaff57aaa70891c8971d12fad8672afc4ea8a1acc5ea9abfd7a85b142_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_271b3ac602c3c86ff8ab6a5b924b70da6e7e942448504a4d0b743c9973e3c8ce = $this->env->getExtension("native_profiler");
        $__internal_271b3ac602c3c86ff8ab6a5b924b70da6e7e942448504a4d0b743c9973e3c8ce->enter($__internal_271b3ac602c3c86ff8ab6a5b924b70da6e7e942448504a4d0b743c9973e3c8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_271b3ac602c3c86ff8ab6a5b924b70da6e7e942448504a4d0b743c9973e3c8ce->leave($__internal_271b3ac602c3c86ff8ab6a5b924b70da6e7e942448504a4d0b743c9973e3c8ce_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_192de29713437ac847377225e385627cc7f8042b44ae21f6e8b9f3a02d89e7b7 = $this->env->getExtension("native_profiler");
        $__internal_192de29713437ac847377225e385627cc7f8042b44ae21f6e8b9f3a02d89e7b7->enter($__internal_192de29713437ac847377225e385627cc7f8042b44ae21f6e8b9f3a02d89e7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_192de29713437ac847377225e385627cc7f8042b44ae21f6e8b9f3a02d89e7b7->leave($__internal_192de29713437ac847377225e385627cc7f8042b44ae21f6e8b9f3a02d89e7b7_prof);

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
