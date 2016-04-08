<?php

/* DeportesBundle:PrestamoDeportes:show.html.twig */
class __TwigTemplate_06504ee1f088390070d0360347c44bd9ac23ca9edc2c00896d6e5c7452995592 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
            <h1>Prestamo Numero: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</h1>
            <br>
            <dl>
                <dt>Id</dt>
                <dd>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Fecha de entrega</dt>
                <dd>
                    ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaEntrega", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Fecha de devolucion</dt>
                <dd>
                    ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaDevolucion", array()), "Y-m-d H:i:s"), "html", null, true);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('¿Esta seguro de borrar este prestamo?')\">Eliminar</button>
                ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
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
        return array (  86 => 38,  80 => 35,  75 => 33,  63 => 24,  54 => 18,  45 => 12,  37 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
