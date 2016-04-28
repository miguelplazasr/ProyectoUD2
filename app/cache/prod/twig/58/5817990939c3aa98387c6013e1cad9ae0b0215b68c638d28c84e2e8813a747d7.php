<?php

/* SalonesBundle:PrestamoSalon:index.html.twig */
class __TwigTemplate_60b5d3fb21fcd8e7599ed4fef505de9d4078a79cf9f51c9d08e3004dc7174d9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalonesBundle:Default:index.html.twig", "SalonesBundle:PrestamoSalon:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SalonesBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "        <div class=\"alert-danger\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <div class=\"col-md-12\">
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "                    <tr>
                        <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_prestamo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 33
            if ($this->getAttribute($context["entity"], "fechaInicio", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaInicio", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 34
            if ($this->getAttribute($context["entity"], "fechaFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaFin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observaciones", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "sala", array()), "nombreSala", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "users", array()), "id", array()), "html", null, true);
            echo "</td>
                        <td class=\"actions\">
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_prestamo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Mostrar</a>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_prestamo_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">Editar</a>
                            <br>
                            ";
            // line 42
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                            <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo?')\">Eliminar</button>
                            ";
            // line 44
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
            </table>
        </div>
                <p>
                    <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("ud_salones_prestamo_new");
        echo "\" class=\"btn btn-sm btn-link\">
                        Nuevo Prestamo
                    </a>
                </p>
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
        return array (  140 => 52,  134 => 48,  124 => 44,  119 => 42,  114 => 40,  110 => 39,  105 => 37,  101 => 36,  97 => 35,  91 => 34,  85 => 33,  79 => 32,  76 => 31,  72 => 30,  52 => 12,  43 => 9,  40 => 8,  36 => 7,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SalonesBundle:Default:index.html.twig'%}*/
/* */
/* {% block content -%}*/
/* */
/*     {{ parent() }}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class="alert-danger">*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
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
/* {% endblock %}*/
/* */
