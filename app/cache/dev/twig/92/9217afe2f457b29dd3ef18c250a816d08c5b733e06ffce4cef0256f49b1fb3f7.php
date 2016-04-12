<?php

/* EnfermeriaBundle:ReporteEmergencia:index.html.twig */
class __TwigTemplate_0ae56f6113754a503fd3b31338fcf9a3bbc0ece401edfe0b74c7590e517cf39a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EnfermeriaBundle:ReporteEmergencia:index.html.twig", 1);
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
        $__internal_40909e95e4c03b82ec9261c5d475a7699cb78f619b8eea436fd29fc02c1a3531 = $this->env->getExtension("native_profiler");
        $__internal_40909e95e4c03b82ec9261c5d475a7699cb78f619b8eea436fd29fc02c1a3531->enter($__internal_40909e95e4c03b82ec9261c5d475a7699cb78f619b8eea436fd29fc02c1a3531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnfermeriaBundle:ReporteEmergencia:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40909e95e4c03b82ec9261c5d475a7699cb78f619b8eea436fd29fc02c1a3531->leave($__internal_40909e95e4c03b82ec9261c5d475a7699cb78f619b8eea436fd29fc02c1a3531_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92ee7c80035d9bb07c05d6b81a36c9b2163705b076639da15adf0c8d2bf20ada = $this->env->getExtension("native_profiler");
        $__internal_92ee7c80035d9bb07c05d6b81a36c9b2163705b076639da15adf0c8d2bf20ada->enter($__internal_92ee7c80035d9bb07c05d6b81a36c9b2163705b076639da15adf0c8d2bf20ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h1>Lista de reportes</h1>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Detalle</th>
                        <th>Usuario</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "                        <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">
                            <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_enfermeria_reporte_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "detalle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "users", array()), "id", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_enfermeria_reporte_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("ud_enfermeria_reporte_new");
        echo "\" class=\"btn btn-sm btn-primary\">
                Nuevo Reporte
            </a>
        </div>
    </div>

";
        
        $__internal_92ee7c80035d9bb07c05d6b81a36c9b2163705b076639da15adf0c8d2bf20ada->leave($__internal_92ee7c80035d9bb07c05d6b81a36c9b2163705b076639da15adf0c8d2bf20ada_prof);

    }

    public function getTemplateName()
    {
        return "EnfermeriaBundle:ReporteEmergencia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  94 => 31,  84 => 27,  79 => 25,  75 => 24,  69 => 23,  64 => 22,  60 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ('layout.html.twig') %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="container">*/
/*         <div class="col-md-12">*/
/*             <div class="page-header margin-none">*/
/*                 <h1>Lista de reportes</h1>*/
/*             </div>*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Detalle</th>*/
/*                         <th>Usuario</th>*/
/*                         <th>Acciones</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr data-id="{{ entity.id }}">*/
/*                             <td><a href="{{ path('ud_enfermeria_reporte_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                             <td>{{ entity.detalle }}</td>*/
/*                             <td>{{ entity.users.id }}</td>*/
/*                             <td>*/
/*                                 <a href="{{ path('ud_enfermeria_reporte_show', { 'id': entity.id }) }}" class="btn btn-sm btn-info">Mostrar</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <a href="{{ path('ud_enfermeria_reporte_new') }}" class="btn btn-sm btn-primary">*/
/*                 Nuevo Reporte*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
