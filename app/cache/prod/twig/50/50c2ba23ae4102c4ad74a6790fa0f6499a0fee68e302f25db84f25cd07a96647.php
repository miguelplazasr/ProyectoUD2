<?php

/* EnfermeriaBundle:ReporteEmergencia:new.html.twig */
class __TwigTemplate_3fdb637b880f06f3fd9247399bcf79afd565a6e535ab0908ddfdaa7500571931 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), "new-form")) : ("new-form")))));
        echo "

                <div class=\"form-group\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "detalle", array()), 'label');
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "detalle", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite detalles")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "users", array()), 'label');
        echo "
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "users", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Seleccione un usuario")));
        echo "
                </div>

                <p>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("label" => "Crear Reporte", "attr" => array("class" => "btn btn-success")));
        echo "</p>

                ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  134 => 63,  130 => 62,  125 => 61,  122 => 60,  110 => 51,  102 => 46,  97 => 44,  91 => 41,  87 => 40,  80 => 36,  76 => 35,  70 => 32,  59 => 24,  50 => 18,  32 => 4,  29 => 3,  11 => 1,);
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
