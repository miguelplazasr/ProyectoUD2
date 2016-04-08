<?php

/* EnfermeriaBundle:ReporteEmergencia:show.html.twig */
class __TwigTemplate_99d870e1c54906096c9f923f586cc340749bd95882721c5bf457d6f9e92e6a25 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container well\">
        <div class=\"col-md-9\">
            <h1>Reporte Numero: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</h1>
            <br>
            <dl>
                <dt>Id</dt>
                <dd>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</dd>
            </dl>
            <dl>
                <dt>Detalle</dt>
                <dd>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "detalle", array()), "html", null, true);
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
        return array (  54 => 16,  49 => 14,  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
