<?php

/* DeportesBundle:PrestamoDeportes:show.html.twig */
class __TwigTemplate_025a68a05089b1d9136c8dd897eaa24bf7c801094d43f4fbdd478c757d04ad13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DeportesBundle:PrestamoDeportes:show.html.twig", 1);
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
        $__internal_6c060844a44cb97811f3048cd0435ef251bb577914475ad9d3757a52e40f0869 = $this->env->getExtension("native_profiler");
        $__internal_6c060844a44cb97811f3048cd0435ef251bb577914475ad9d3757a52e40f0869->enter($__internal_6c060844a44cb97811f3048cd0435ef251bb577914475ad9d3757a52e40f0869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DeportesBundle:PrestamoDeportes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c060844a44cb97811f3048cd0435ef251bb577914475ad9d3757a52e40f0869->leave($__internal_6c060844a44cb97811f3048cd0435ef251bb577914475ad9d3757a52e40f0869_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2950d79a1212dac0a64fe6db7a7f67bb8a76269bce14c525ce8f5293e29b947 = $this->env->getExtension("native_profiler");
        $__internal_a2950d79a1212dac0a64fe6db7a7f67bb8a76269bce14c525ce8f5293e29b947->enter($__internal_a2950d79a1212dac0a64fe6db7a7f67bb8a76269bce14c525ce8f5293e29b947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
            <h1>Prestamo Numero: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</h1>
            <br>
            <dl>
                <dt>Id</dt>
                <dd>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Fecha de entrega</dt>
                <dd>
                    ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaEntrega", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Fecha de devolucion</dt>
                <dd>
                    ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaDevolucion", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        <div class=\"col-md-3\">
            <h2>Acciones</h2>
            <p>
                ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('¿Esta seguro de borrar este prestamo?')\">Eliminar</button>
                ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </p>
            <p>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ud_deportes_prestamo");
        echo "\" class=\"btn btn-sm btn-link\">
                    Volver
                </a>
            </p>
        </div>
    </div>
";
        
        $__internal_a2950d79a1212dac0a64fe6db7a7f67bb8a76269bce14c525ce8f5293e29b947->leave($__internal_a2950d79a1212dac0a64fe6db7a7f67bb8a76269bce14c525ce8f5293e29b947_prof);

    }

    public function getTemplateName()
    {
        return "DeportesBundle:PrestamoDeportes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 38,  89 => 35,  84 => 33,  72 => 24,  63 => 18,  54 => 12,  46 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="container well">*/
/*         <div class="col-lg-9">*/
/*             <h1>Prestamo Numero: {{ entity.id }}</h1>*/
/*             <br>*/
/*             <dl>*/
/*                 <dt>Id</dt>*/
/*                 <dd>*/
/*                     {{ entity.id }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Fecha de entrega</dt>*/
/*                 <dd>*/
/*                     {{ entity.fechaEntrega|date('Y-m-d H:i:s') }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Fecha de devolucion</dt>*/
/*                 <dd>*/
/*                     {{ entity.fechaDevolucion|date('Y-m-d H:i:s') }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*             </dl>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <h2>Acciones</h2>*/
/*             <p>*/
/*                 {{ form_start(delete_form) }}*/
/*                 <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Esta seguro de borrar este prestamo?')">Eliminar</button>*/
/*                 {{ form_end(delete_form) }}*/
/*             </p>*/
/*             <p>*/
/*                 <a href="{{ path('ud_deportes_prestamo') }}" class="btn btn-sm btn-link">*/
/*                     Volver*/
/*                 </a>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
