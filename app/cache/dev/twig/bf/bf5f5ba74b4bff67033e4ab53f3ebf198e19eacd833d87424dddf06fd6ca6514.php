<?php

/* ActivosBundle:StockActivo:index.html.twig */
class __TwigTemplate_1396c066633655509d21911f4af58308b60532155fd0c1855db1198157febced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ActivosBundle:StockActivo:index.html.twig", 1);
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
        $__internal_1464a31edf5673feceb4c02abf716d544076c2585ec2d3490086bee97cfd6fe3 = $this->env->getExtension("native_profiler");
        $__internal_1464a31edf5673feceb4c02abf716d544076c2585ec2d3490086bee97cfd6fe3->enter($__internal_1464a31edf5673feceb4c02abf716d544076c2585ec2d3490086bee97cfd6fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActivosBundle:StockActivo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1464a31edf5673feceb4c02abf716d544076c2585ec2d3490086bee97cfd6fe3->leave($__internal_1464a31edf5673feceb4c02abf716d544076c2585ec2d3490086bee97cfd6fe3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90fb3c43abcbeaeeae63770dbb945525635591d43a800aa478ddcfb526aebd10 = $this->env->getExtension("native_profiler");
        $__internal_90fb3c43abcbeaeeae63770dbb945525635591d43a800aa478ddcfb526aebd10->enter($__internal_90fb3c43abcbeaeeae63770dbb945525635591d43a800aa478ddcfb526aebd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header\">
                <h1>Stock de elementos</h1>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Elemento</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "                        <tr>
                            <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_stock_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "eactivo", array()), "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cantidad", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_stock_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                                <br>
                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_stock_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">Editar</a>
                                <br>
                                ";
            // line 30
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo?')\">Eliminar</button>
                                ";
            // line 32
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("ud_activos_stock_new");
        echo "\" class=\"btn btn-sm btn-default\">
                Nuevo Stock
            </a>
        </div>
    </div>
";
        
        $__internal_90fb3c43abcbeaeeae63770dbb945525635591d43a800aa478ddcfb526aebd10->leave($__internal_90fb3c43abcbeaeeae63770dbb945525635591d43a800aa478ddcfb526aebd10_prof);

    }

    public function getTemplateName()
    {
        return "ActivosBundle:StockActivo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  105 => 36,  95 => 32,  90 => 30,  85 => 28,  80 => 26,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <div class="container">*/
/*         <div class="col-md-12">*/
/*             <div class="page-header">*/
/*                 <h1>Stock de elementos</h1>*/
/*             </div>*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Elemento</th>*/
/*                         <th>Cantidad</th>*/
/*                         <th>Acciones</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('ud_activos_stock_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                             <td>{{ entity.eactivo.nombre }}</td>*/
/*                             <td>{{ entity.cantidad }}</td>*/
/*                             <td class="actions">*/
/*                                 <a href="{{ path('ud_activos_stock_show', { 'id': entity.id }) }}" class="btn btn-sm btn-info">Mostrar</a>*/
/*                                 <br>*/
/*                                 <a href="{{ path('ud_activos_stock_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-warning">Editar</a>*/
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
/*             <a href="{{ path('ud_activos_stock_new') }}" class="btn btn-sm btn-default">*/
/*                 Nuevo Stock*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
