<?php

/* EnfermeriaBundle:ReporteEmergencia:new.html.twig */
class __TwigTemplate_3fdb637b880f06f3fd9247399bcf79afd565a6e535ab0908ddfdaa7500571931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Enfermeria/Default/index.html.twig", "EnfermeriaBundle:ReporteEmergencia:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Enfermeria/Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div id=\"warning\">
    </div>
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
        // line 17
        echo "Buscar Usuario";
        echo "\" class=\"btn btn-default btn-search\" />
                    </form>
                </div>
                <br>
                <div class=\"searchx\">
                    <form id=\"searchxml-form\">
                        <input type=\"submit\" value=\"";
        // line 23
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
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), "new-form")) : ("new-form")))));
        echo "

                <div class=\"form-group\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "detalle", array()), 'label');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "detalle", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite detalles")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "users", array()), 'label');
        echo "
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "users", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Seleccione un usuario")));
        echo "
                </div>

                <p>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("label" => "Crear Reporte", "attr" => array("class" => "btn btn-success")));
        echo "</p>

                ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>
        <ul>
            <li>
                <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("ud_enfermeria_reporte");
        echo "\">
                    volver
                </a>
            </li>
        </ul>
";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/enfermeria/js/searchuser.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
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
        return array (  131 => 60,  127 => 59,  122 => 58,  119 => 57,  109 => 50,  101 => 45,  96 => 43,  90 => 40,  86 => 39,  79 => 35,  75 => 34,  69 => 31,  58 => 23,  49 => 17,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@Enfermeria/Default/index.html.twig'%}*/
/* */
/* {% block content %}*/
/*     {{ parent() }}*/
/*     <div id="warning">*/
/*     </div>*/
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
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/enfermeria/js/searchuser.js') }}"></script>*/
/*     <script src="{{ asset('bundles/enfermeria/js/xml.js') }}"></script>*/
/* {% endblock %}*/
