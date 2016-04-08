<?php

/* SalonesBundle:PrestamoSalon:index.html.twig */
class __TwigTemplate_60b5d3fb21fcd8e7599ed4fef505de9d4078a79cf9f51c9d08e3004dc7174d9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SalonesBundle:PrestamoSalon:index.html.twig", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "        <div class=\"alert-danger\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    <div class=\"container\">
    <div class=\"col-md-12\">
        <div class=\"page-header\">
            <h1>Lista de prestamos</h1>
        </div>
    <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha inicio</th>
                        <th>Fecha fin</th>
                        <th>Observaciones</th>
                        <th>Sala</th>
                        <th>Usuario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "                    <tr>
                        <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_prestamo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 31
            if ($this->getAttribute($context["entity"], "fechaInicio", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaInicio", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 32
            if ($this->getAttribute($context["entity"], "fechaFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaFin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observaciones", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "sala", array()), "nombreSala", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "users", array()), "id", array()), "html", null, true);
            echo "</td>
                        <td class=\"actions\">
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_prestamo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Mostrar</a>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_prestamo_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">Editar</a>
                            <br>
                            ";
            // line 40
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                            <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo?')\">Eliminar</button>
                            ";
            // line 42
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
            </table>
        </div>
                <p>
                    <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("ud_salones_prestamo_new");
        echo "\" class=\"btn btn-sm btn-link\">
                        Nuevo Prestamo
                    </a>
                </p>
    </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "SalonesBundle:PrestamoSalon:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  130 => 46,  120 => 42,  115 => 40,  110 => 38,  106 => 37,  101 => 35,  97 => 34,  93 => 33,  87 => 32,  81 => 31,  75 => 30,  72 => 29,  68 => 28,  47 => 9,  38 => 6,  35 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class="alert-danger">*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="container">*/
/*     <div class="col-md-12">*/
/*         <div class="page-header">*/
/*             <h1>Lista de prestamos</h1>*/
/*         </div>*/
/*     <div class="table-responsive">*/
/*             <table class="table table-striped table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Fecha inicio</th>*/
/*                         <th>Fecha fin</th>*/
/*                         <th>Observaciones</th>*/
/*                         <th>Sala</th>*/
/*                         <th>Usuario</th>*/
/*                         <th>Acciones</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for entity in entities %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('ud_salones_prestamo_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                         <td>{% if entity.fechaInicio %}{{ entity.fechaInicio|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                         <td>{% if entity.fechaFin %}{{ entity.fechaFin|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                         <td>{{ entity.observaciones }}</td>*/
/*                         <td>{{ entity.sala.nombreSala }}</td>*/
/*                         <td>{{ entity.users.id }}</td>*/
/*                         <td class="actions">*/
/*                             <a href="{{ path('ud_salones_prestamo_show', { 'id': entity.id }) }}" class="btn btn-sm btn-primary">Mostrar</a>*/
/*                             <a href="{{ path('ud_salones_prestamo_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-warning">Editar</a>*/
/*                             <br>*/
/*                             {{ form_start(delete_forms[entity.id]) }}*/
/*                             <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de borrar este prestamo?')">Eliminar</button>*/
/*                             {{ form_end(delete_forms[entity.id]) }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*                 <p>*/
/*                     <a href="{{ path('ud_salones_prestamo_new') }}" class="btn btn-sm btn-link">*/
/*                         Nuevo Prestamo*/
/*                     </a>*/
/*                 </p>*/
/*     </div>*/
/* </div>*/
/*     {% endblock %}*/
/* */
