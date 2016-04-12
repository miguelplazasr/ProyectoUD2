<?php

/* EnfermeriaBundle:ReporteEmergencia:show.html.twig */
class __TwigTemplate_fa350b85bb965fb6988c029d3db42a204f34dd1c96e98c3d52e4b1a50858775b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EnfermeriaBundle:ReporteEmergencia:show.html.twig", 1);
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
        $__internal_39ef8f3dda6f3da305c39ea2cb47dd28af99a9fd9b180ebdab2f5c5c7802f767 = $this->env->getExtension("native_profiler");
        $__internal_39ef8f3dda6f3da305c39ea2cb47dd28af99a9fd9b180ebdab2f5c5c7802f767->enter($__internal_39ef8f3dda6f3da305c39ea2cb47dd28af99a9fd9b180ebdab2f5c5c7802f767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnfermeriaBundle:ReporteEmergencia:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ef8f3dda6f3da305c39ea2cb47dd28af99a9fd9b180ebdab2f5c5c7802f767->leave($__internal_39ef8f3dda6f3da305c39ea2cb47dd28af99a9fd9b180ebdab2f5c5c7802f767_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8da1d5955c46180819a82a93b9d3bd06f80b756b0ac3939a4e3d6700668f4f9 = $this->env->getExtension("native_profiler");
        $__internal_a8da1d5955c46180819a82a93b9d3bd06f80b756b0ac3939a4e3d6700668f4f9->enter($__internal_a8da1d5955c46180819a82a93b9d3bd06f80b756b0ac3939a4e3d6700668f4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container well\">
        <div class=\"col-md-9\">
            <h1>Reporte Numero: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</h1>
            <br>
            <dl>
                <dt>Id</dt>
                <dd>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</dd>
            </dl>
            <dl>
                <dt>Detalle</dt>
                <dd>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "detalle", array()), "html", null, true);
        echo "</dd>
            </dl>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("ud_enfermeria_reporte");
        echo "\" class=\"btn btn-sm btn-default\">
                Volver al listado
            </a>
        </div>
    </div>
";
        
        $__internal_a8da1d5955c46180819a82a93b9d3bd06f80b756b0ac3939a4e3d6700668f4f9->leave($__internal_a8da1d5955c46180819a82a93b9d3bd06f80b756b0ac3939a4e3d6700668f4f9_prof);

    }

    public function getTemplateName()
    {
        return "EnfermeriaBundle:ReporteEmergencia:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ('layout.html.twig') %}*/
/* */
/* {% block body -%}*/
/*     <div class="container well">*/
/*         <div class="col-md-9">*/
/*             <h1>Reporte Numero: {{ entity.id }}</h1>*/
/*             <br>*/
/*             <dl>*/
/*                 <dt>Id</dt>*/
/*                 <dd>{{ entity.id }}</dd>*/
/*             </dl>*/
/*             <dl>*/
/*                 <dt>Detalle</dt>*/
/*                 <dd>{{ entity.detalle }}</dd>*/
/*             </dl>*/
/*             <a href="{{ path('ud_enfermeria_reporte') }}" class="btn btn-sm btn-default">*/
/*                 Volver al listado*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
