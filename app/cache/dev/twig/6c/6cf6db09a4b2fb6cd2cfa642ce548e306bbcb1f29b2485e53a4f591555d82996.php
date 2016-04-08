<?php

/* DeportesBundle:PrestamoDeportes:index.html.twig */
class __TwigTemplate_47d1e3cc9c3ff9aa1c8a52240208b46a194375c5d50b9085371537baa4e92aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DeportesBundle:PrestamoDeportes:index.html.twig", 1);
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
        $__internal_1db4f432d573168b3233e0068497dbd4821b3cb18887e711821acc64ee385493 = $this->env->getExtension("native_profiler");
        $__internal_1db4f432d573168b3233e0068497dbd4821b3cb18887e711821acc64ee385493->enter($__internal_1db4f432d573168b3233e0068497dbd4821b3cb18887e711821acc64ee385493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DeportesBundle:PrestamoDeportes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1db4f432d573168b3233e0068497dbd4821b3cb18887e711821acc64ee385493->leave($__internal_1db4f432d573168b3233e0068497dbd4821b3cb18887e711821acc64ee385493_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42449cb6f05c1a2db8ab55793412b859f1b37036c0e06826ffef9078903e2586 = $this->env->getExtension("native_profiler");
        $__internal_42449cb6f05c1a2db8ab55793412b859f1b37036c0e06826ffef9078903e2586->enter($__internal_42449cb6f05c1a2db8ab55793412b859f1b37036c0e06826ffef9078903e2586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">

        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "            <div class=\"alert-danger\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "                        <tr>
                            <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_deportes_prestamo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 31
            if ($this->getAttribute($context["entity"], "fechaEntrega", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaEntrega", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 32
            if ($this->getAttribute($context["entity"], "fechaDevolucion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaDevolucion", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "users", array()), "id", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_deportes_prestamo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                                <br>
                                ";
            // line 37
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo?')\">Eliminar</button>
                                ";
            // line 39
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("ud_deportes_prestamo_new");
        echo "\" class=\"btn btn-sm btn-primary\">
                Nuevo Prestamo
            </a>
        </div>
    </div>
";
        
        $__internal_42449cb6f05c1a2db8ab55793412b859f1b37036c0e06826ffef9078903e2586->leave($__internal_42449cb6f05c1a2db8ab55793412b859f1b37036c0e06826ffef9078903e2586_prof);

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
        return array (  134 => 46,  129 => 43,  119 => 39,  114 => 37,  109 => 35,  104 => 33,  98 => 32,  92 => 31,  86 => 30,  83 => 29,  79 => 28,  60 => 11,  51 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <div class="container">*/
/* */
/*         {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             <div class="alert-danger">*/
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
/*             <a href="{{ path('ud_deportes_prestamo_new') }}" class="btn btn-sm btn-primary">*/
/*                 Nuevo Prestamo*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
