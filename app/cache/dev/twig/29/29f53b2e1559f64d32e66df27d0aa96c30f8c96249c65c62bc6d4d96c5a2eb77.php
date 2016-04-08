<?php

/* ActivosBundle:PrestamoActivo:show.html.twig */
class __TwigTemplate_058188d7b3be5f611ce330478393fabce6156a898e2ff5812f9361f6740dfe11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ActivosBundle:PrestamoActivo:show.html.twig", 1);
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
        $__internal_8ca9a9fe400728352c97a4c09d08f476639d861016b14c93b84ebd21dbc1ec23 = $this->env->getExtension("native_profiler");
        $__internal_8ca9a9fe400728352c97a4c09d08f476639d861016b14c93b84ebd21dbc1ec23->enter($__internal_8ca9a9fe400728352c97a4c09d08f476639d861016b14c93b84ebd21dbc1ec23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActivosBundle:PrestamoActivo:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ca9a9fe400728352c97a4c09d08f476639d861016b14c93b84ebd21dbc1ec23->leave($__internal_8ca9a9fe400728352c97a4c09d08f476639d861016b14c93b84ebd21dbc1ec23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd3d105293b93f0bc7d2907d3fc13df1394878fdf1b5821a70f9fffa02703e61 = $this->env->getExtension("native_profiler");
        $__internal_dd3d105293b93f0bc7d2907d3fc13df1394878fdf1b5821a70f9fffa02703e61->enter($__internal_dd3d105293b93f0bc7d2907d3fc13df1394878fdf1b5821a70f9fffa02703e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
            <h1>Prestamo Numero: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</h1>
            <dl>
                <dt>Id</dt>
                <dd>
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Fecha de prestamo</dt>
                <dd>
                    ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaEntrega", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Fecha de entrega</dt>
                <dd>
                    ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaDevolucion", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Elemento</dt>
                <dd>
                    ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sactivo", array()), "eactivo", array()), "nombre", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Usuario</dt>
                <dd>
                    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "users", array()), "id", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Cantidad</dt>
                <dd>
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cantidad", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        <div class=\"col-md-3\">
            <h2>Acciones</h2>
            <p>
                <a href=\"#\" class=\"btn btn-sm btn-warning\">
                    Editar
                </a>
            </p>
            <p>
                ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo')\">Eliminar</button>
                ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </p>
            <p>
                <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("ud_activos_prestamo");
        echo "\" class=\"btn btn-sm btn-default\">
                    Volver
                </a>
                <br>
            </p>
        </div>
    </div>
";
        
        $__internal_dd3d105293b93f0bc7d2907d3fc13df1394878fdf1b5821a70f9fffa02703e61->leave($__internal_dd3d105293b93f0bc7d2907d3fc13df1394878fdf1b5821a70f9fffa02703e61_prof);

    }

    public function getTemplateName()
    {
        return "ActivosBundle:PrestamoActivo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 60,  120 => 57,  115 => 55,  98 => 41,  89 => 35,  80 => 29,  71 => 23,  62 => 17,  53 => 11,  46 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="container well">*/
/*         <div class="col-lg-9">*/
/*             <h1>Prestamo Numero: {{ entity.id }}</h1>*/
/*             <dl>*/
/*                 <dt>Id</dt>*/
/*                 <dd>*/
/*                     {{ entity.id }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Fecha de prestamo</dt>*/
/*                 <dd>*/
/*                     {{ entity.fechaEntrega|date('Y-m-d H:i:s')  }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Fecha de entrega</dt>*/
/*                 <dd>*/
/*                     {{ entity.fechaDevolucion|date('Y-m-d H:i:s')  }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Elemento</dt>*/
/*                 <dd>*/
/*                     {{ entity.sactivo.eactivo.nombre }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Usuario</dt>*/
/*                 <dd>*/
/*                     {{ entity.users.id }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Cantidad</dt>*/
/*                 <dd>*/
/*                     {{ entity.cantidad }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*             </dl>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <h2>Acciones</h2>*/
/*             <p>*/
/*                 <a href="#" class="btn btn-sm btn-warning">*/
/*                     Editar*/
/*                 </a>*/
/*             </p>*/
/*             <p>*/
/*                 {{ form_start(delete_form) }}*/
/*                 <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de borrar este prestamo')">Eliminar</button>*/
/*                 {{ form_end(delete_form) }}*/
/*             </p>*/
/*             <p>*/
/*                 <a href="{{ path('ud_activos_prestamo') }}" class="btn btn-sm btn-default">*/
/*                     Volver*/
/*                 </a>*/
/*                 <br>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
