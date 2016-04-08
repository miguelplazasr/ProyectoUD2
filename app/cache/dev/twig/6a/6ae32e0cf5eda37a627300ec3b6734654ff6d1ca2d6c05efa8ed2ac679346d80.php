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
        $__internal_3221b58d0442f5222b4cc5d366b5e8b4a2a298aa59b6adc3cf66b5084fce115a = $this->env->getExtension("native_profiler");
        $__internal_3221b58d0442f5222b4cc5d366b5e8b4a2a298aa59b6adc3cf66b5084fce115a->enter($__internal_3221b58d0442f5222b4cc5d366b5e8b4a2a298aa59b6adc3cf66b5084fce115a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnfermeriaBundle:ReporteEmergencia:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3221b58d0442f5222b4cc5d366b5e8b4a2a298aa59b6adc3cf66b5084fce115a->leave($__internal_3221b58d0442f5222b4cc5d366b5e8b4a2a298aa59b6adc3cf66b5084fce115a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c064ab9c20c0169df80b4c0c1730a443bb2a0196e7181b7ddf5fd7434ab7f1c = $this->env->getExtension("native_profiler");
        $__internal_8c064ab9c20c0169df80b4c0c1730a443bb2a0196e7181b7ddf5fd7434ab7f1c->enter($__internal_8c064ab9c20c0169df80b4c0c1730a443bb2a0196e7181b7ddf5fd7434ab7f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8c064ab9c20c0169df80b4c0c1730a443bb2a0196e7181b7ddf5fd7434ab7f1c->leave($__internal_8c064ab9c20c0169df80b4c0c1730a443bb2a0196e7181b7ddf5fd7434ab7f1c_prof);

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
