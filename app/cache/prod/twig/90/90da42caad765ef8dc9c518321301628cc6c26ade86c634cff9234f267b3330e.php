<?php

/* ActivosBundle:PrestamoActivo:index.html.twig */
class __TwigTemplate_81c9a2aca1d1fda2fb16a4f867d896e70eb3e1ee5add9c6287bc47592beb7e37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Activos/Default/index.html.twig", "ActivosBundle:PrestamoActivo:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Activos/Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <div class=\"alert-success\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"alert-danger\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "            <div class=\"alert-warning\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"col-md-12\">
        <div class=\"page-header\">
            <h1>Lista de prestamos</h1>
        </div>
        <div class=\"table-responsive\">
               <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha prestamo</th>
                        <th>Fecha devolucion</th>
                        <th>Elemento</th>
                        <th>Usuario</th>
                        <th>cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 40
            echo "                    <tr>
                        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_prestamo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 42
            if ($this->getAttribute($context["entity"], "fechaEntrega", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaEntrega", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 43
            if ($this->getAttribute($context["entity"], "fechaDevolucion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaDevolucion", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "sactivo", array()), "eactivo", array()), "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "users", array()), "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cantidad", array()), "html", null, true);
            echo "</td>
                        <td class=\"actions\">
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_prestamo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                            <br>
                            <a href=\"#\" class=\"btn- btn-sm btn-warning\">Editar</a>
                            <br>
                            ";
            // line 52
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                             <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo?')\">Eliminar</button>
                            ";
            // line 54
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                </tbody>
            </table>
        </div>
                <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("ud_activos_prestamo_new");
        echo "\" class=\"btn btn-sm btn-default\">
                        Nuevo Prestamo
                </a>
        </div>
";
    }

    public function getTemplateName()
    {
        return "ActivosBundle:PrestamoActivo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  166 => 58,  156 => 54,  151 => 52,  144 => 48,  139 => 46,  135 => 45,  131 => 44,  125 => 43,  119 => 42,  113 => 41,  110 => 40,  106 => 39,  85 => 20,  76 => 17,  73 => 16,  68 => 15,  59 => 12,  56 => 11,  51 => 10,  42 => 7,  39 => 6,  35 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Activos/Default/index.html.twig' %}*/
/* */
/* {% block content -%}*/
/* {{ parent() }}*/
/*         {% for flashMessage in app.session.flashbag.get('success') %}*/
/*         <div class="alert-success">*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*         {% endfor %}*/
/*         {% for flashMessage in app.session.flashbag.get('danger') %}*/
/*         <div class="alert-danger">*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*         {% endfor %}*/
/*         {% for flashMessage in app.session.flashbag.get('warning') %}*/
/*             <div class="alert-warning">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*     <div class="col-md-12">*/
/*         <div class="page-header">*/
/*             <h1>Lista de prestamos</h1>*/
/*         </div>*/
/*         <div class="table-responsive">*/
/*                <table class="table table-striped table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Fecha prestamo</th>*/
/*                         <th>Fecha devolucion</th>*/
/*                         <th>Elemento</th>*/
/*                         <th>Usuario</th>*/
/*                         <th>cantidad</th>*/
/*                         <th>Acciones</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for entity in entities %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('ud_activos_prestamo_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                         <td>{% if entity.fechaEntrega %}{{ entity.fechaEntrega|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                         <td>{% if entity.fechaDevolucion %}{{ entity.fechaDevolucion|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                         <td>{{ entity.sactivo.eactivo.nombre }}</td>*/
/*                         <td>{{ entity.users.id }}</td>*/
/*                         <td>{{ entity.cantidad }}</td>*/
/*                         <td class="actions">*/
/*                             <a href="{{ path('ud_activos_prestamo_show', { 'id': entity.id }) }}" class="btn btn-sm btn-info">Mostrar</a>*/
/*                             <br>*/
/*                             <a href="#" class="btn- btn-sm btn-warning">Editar</a>*/
/*                             <br>*/
/*                             {{ form_start(delete_forms[entity.id]) }}*/
/*                              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de borrar este prestamo?')">Eliminar</button>*/
/*                             {{ form_end(delete_forms[entity.id]) }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*                 <a href="{{ path('ud_activos_prestamo_new') }}" class="btn btn-sm btn-default">*/
/*                         Nuevo Prestamo*/
/*                 </a>*/
/*         </div>*/
/* {% endblock %}*/
/* */
