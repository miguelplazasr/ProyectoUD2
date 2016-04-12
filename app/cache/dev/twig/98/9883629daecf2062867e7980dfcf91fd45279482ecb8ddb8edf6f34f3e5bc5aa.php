<?php

/* DeportesBundle:InventarioDeportes:index.html.twig */
class __TwigTemplate_d6cb7ee24c13509f909f2da5e4d9a8fee068fce6cac349206cea4cd307361481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DeportesBundle:InventarioDeportes:index.html.twig", 1);
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
        $__internal_ca5374bcb96779ef648bc2aa3a00272e795d37755dfc814962cbadab30ebe178 = $this->env->getExtension("native_profiler");
        $__internal_ca5374bcb96779ef648bc2aa3a00272e795d37755dfc814962cbadab30ebe178->enter($__internal_ca5374bcb96779ef648bc2aa3a00272e795d37755dfc814962cbadab30ebe178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DeportesBundle:InventarioDeportes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca5374bcb96779ef648bc2aa3a00272e795d37755dfc814962cbadab30ebe178->leave($__internal_ca5374bcb96779ef648bc2aa3a00272e795d37755dfc814962cbadab30ebe178_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_057f3ad0348027fc2be95ceac55a86cb39428ff935fcd3ac6c16648f02c9f76d = $this->env->getExtension("native_profiler");
        $__internal_057f3ad0348027fc2be95ceac55a86cb39428ff935fcd3ac6c16648f02c9f76d->enter($__internal_057f3ad0348027fc2be95ceac55a86cb39428ff935fcd3ac6c16648f02c9f76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header\">
                <h1>Lista de inventario</h1>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Cantidad</th>
                        <th>Elemento</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "                        <tr>
                            <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_deportes_inventario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 25
            if ($this->getAttribute($context["entity"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cantidad", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "elemendepor", array()), "_toString", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_deportes_inventario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                                <br>
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_deportes_inventario_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">Editar</a>
                                <br>
                                ";
            // line 34
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo?')\">Eliminar</button>
                                ";
            // line 36
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("ud_deportes_inventario_new");
        echo "\" class=\"btn btn-sm btn-link\">
                Nuevo Elemento
            </a>
        </div>
    </div>
";
        
        $__internal_057f3ad0348027fc2be95ceac55a86cb39428ff935fcd3ac6c16648f02c9f76d->leave($__internal_057f3ad0348027fc2be95ceac55a86cb39428ff935fcd3ac6c16648f02c9f76d_prof);

    }

    public function getTemplateName()
    {
        return "DeportesBundle:InventarioDeportes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 43,  117 => 40,  107 => 36,  102 => 34,  97 => 32,  92 => 30,  87 => 28,  83 => 27,  79 => 26,  73 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <div class="container">*/
/*         <div class="col-md-12">*/
/*             <div class="page-header">*/
/*                 <h1>Lista de inventario</h1>*/
/*             </div>*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Fecha</th>*/
/*                         <th>Estado</th>*/
/*                         <th>Cantidad</th>*/
/*                         <th>Elemento</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('ud_deportes_inventario_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                             <td>{% if entity.fecha %}{{ entity.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                             <td>{{ entity.estado }}</td>*/
/*                             <td>{{ entity.cantidad }}</td>*/
/*                             <td>{{ entity.elemendepor._toString }}</td>*/
/*                             <td class="actions">*/
/*                                 <a href="{{ path('ud_deportes_inventario_show', { 'id': entity.id }) }}" class="btn btn-sm btn-info">Mostrar</a>*/
/*                                 <br>*/
/*                                 <a href="{{ path('ud_deportes_inventario_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-warning">Editar</a>*/
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
/*             <a href="{{ path('ud_deportes_inventario_new') }}" class="btn btn-sm btn-link">*/
/*                 Nuevo Elemento*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
