<?php

/* ActivosBundle:PrestamoActivo:index.html.twig */
class __TwigTemplate_c5f0834f838e46a85ff80e9b4656f02d2624f16c115097b48640dd3ab28722da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ActivosBundle:PrestamoActivo:index.html.twig", 1);
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
        $__internal_6387472f6791e0898148581bcc37d25d7c1ef68a2427b824048f2c3da6555ee3 = $this->env->getExtension("native_profiler");
        $__internal_6387472f6791e0898148581bcc37d25d7c1ef68a2427b824048f2c3da6555ee3->enter($__internal_6387472f6791e0898148581bcc37d25d7c1ef68a2427b824048f2c3da6555ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActivosBundle:PrestamoActivo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6387472f6791e0898148581bcc37d25d7c1ef68a2427b824048f2c3da6555ee3->leave($__internal_6387472f6791e0898148581bcc37d25d7c1ef68a2427b824048f2c3da6555ee3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3538025757140861e81aef56665d6b478f79fc562c7d226e53a91f40dbd60c1 = $this->env->getExtension("native_profiler");
        $__internal_c3538025757140861e81aef56665d6b478f79fc562c7d226e53a91f40dbd60c1->enter($__internal_c3538025757140861e81aef56665d6b478f79fc562c7d226e53a91f40dbd60c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "        <div class=\"alert-danger\">
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "                    <tr>
                        <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_prestamo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 33
            if ($this->getAttribute($context["entity"], "fechaEntrega", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaEntrega", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 34
            if ($this->getAttribute($context["entity"], "fechaDevolucion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaDevolucion", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "sactivo", array()), "eactivo", array()), "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "users", array()), "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cantidad", array()), "html", null, true);
            echo "</td>
                        <td class=\"actions\">
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_prestamo_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                            <br>
                            <a href=\"#\" class=\"btn- btn-sm btn-warning\">Editar</a>
                            <br>
                            ";
            // line 43
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                             <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo?')\">Eliminar</button>
                            ";
            // line 45
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </tbody>
            </table>
        </div>
                <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("ud_activos_prestamo_new");
        echo "\" class=\"btn btn-sm btn-default\">
                        Nuevo Prestamo
                </a>
        </div>
    </div>
 </div>
";
        
        $__internal_c3538025757140861e81aef56665d6b478f79fc562c7d226e53a91f40dbd60c1->leave($__internal_c3538025757140861e81aef56665d6b478f79fc562c7d226e53a91f40dbd60c1_prof);

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
        return array (  146 => 52,  141 => 49,  131 => 45,  126 => 43,  119 => 39,  114 => 37,  110 => 36,  106 => 35,  100 => 34,  94 => 33,  88 => 32,  85 => 31,  81 => 30,  60 => 11,  51 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="container">*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class="alert-danger">*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
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
/*     </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
