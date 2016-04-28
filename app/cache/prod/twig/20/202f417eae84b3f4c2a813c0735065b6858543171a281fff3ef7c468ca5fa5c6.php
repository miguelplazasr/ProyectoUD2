<?php

/* DeportesBundle:PrestamoDeportes:index.html.twig */
class __TwigTemplate_ffe6fbab699c3f93e4aef82bd12e217ee9bdeb0b36b4f8f23452e2a966e1a052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Deportes/Default/index.html.twig", "DeportesBundle:PrestamoDeportes:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Deportes/Default/index.html.twig";
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "        <div class=\"alert-success\">
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
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"alert-danger\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "            <div class=\"alert-warning\">
                ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        <div class=\"col-md-12\">
            <div class=\"page-header\">
                <h1>Listado de Prestamos</h1>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha Entrega</th>
                        <th>Fecha Devolucion</th>
                        <th>Usuario</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 40
            echo "                        <tr>
                            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_deportes_prestamo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "users", array()), "id", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_deportes_prestamo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                                <br>
                                ";
            // line 48
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo?')\">Eliminar</button>
                                ";
            // line 50
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("ud_deportes_prestamo_new");
        echo "\" class=\"btn btn-sm btn-link\">
                Nuevo Prestamo
            </a>
        </div>
";
    }

    public function getTemplateName()
    {
        return "DeportesBundle:PrestamoDeportes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 57,  155 => 54,  145 => 50,  140 => 48,  135 => 46,  130 => 44,  124 => 43,  118 => 42,  112 => 41,  109 => 40,  105 => 39,  86 => 22,  77 => 19,  74 => 18,  69 => 17,  60 => 14,  57 => 13,  52 => 12,  43 => 9,  40 => 8,  36 => 7,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Deportes/Default/index.html.twig'%}*/
/* */
/* {% block content -%}*/
/* */
/*     {{ parent() }}*/
/* */
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
/*         <div class="col-md-12">*/
/*             <div class="page-header">*/
/*                 <h1>Listado de Prestamos</h1>*/
/*             </div>*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Fecha Entrega</th>*/
/*                         <th>Fecha Devolucion</th>*/
/*                         <th>Usuario</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('ud_deportes_prestamo_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                             <td>{% if entity.fechaEntrega %}{{ entity.fechaEntrega|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                             <td>{% if entity.fechaDevolucion %}{{ entity.fechaDevolucion|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                             <td>{{ entity.users.id }}</td>*/
/*                             <td class="actions">*/
/*                                 <a href="{{ path('ud_deportes_prestamo_show', { 'id': entity.id }) }}" class="btn btn-sm btn-info">Mostrar</a>*/
/*                                 <br>*/
/*                                 {{ form_start(delete_forms[entity.id]) }}*/
/*                                 <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de borrar este prestamo?')">Eliminar</button>*/
/*                                 {{ form_end(delete_forms[entity.id]) }}*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <a href="{{ path('ud_deportes_prestamo_new') }}" class="btn btn-sm btn-link">*/
/*                 Nuevo Prestamo*/
/*             </a>*/
/*         </div>*/
/* {% endblock %}*/
/* */
