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
        $__internal_c1e976683b5b0e9bdf3c075f648ff5e9428e7f1e63e0bed8cf645e0829fd91d1 = $this->env->getExtension("native_profiler");
        $__internal_c1e976683b5b0e9bdf3c075f648ff5e9428e7f1e63e0bed8cf645e0829fd91d1->enter($__internal_c1e976683b5b0e9bdf3c075f648ff5e9428e7f1e63e0bed8cf645e0829fd91d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DeportesBundle:PrestamoDeportes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1e976683b5b0e9bdf3c075f648ff5e9428e7f1e63e0bed8cf645e0829fd91d1->leave($__internal_c1e976683b5b0e9bdf3c075f648ff5e9428e7f1e63e0bed8cf645e0829fd91d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23f524e2361b4fb07d73adb479572e938ec03b422155bd3acc92158c276a67ab = $this->env->getExtension("native_profiler");
        $__internal_23f524e2361b4fb07d73adb479572e938ec03b422155bd3acc92158c276a67ab->enter($__internal_23f524e2361b4fb07d73adb479572e938ec03b422155bd3acc92158c276a67ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_23f524e2361b4fb07d73adb479572e938ec03b422155bd3acc92158c276a67ab->leave($__internal_23f524e2361b4fb07d73adb479572e938ec03b422155bd3acc92158c276a67ab_prof);

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
