<?php

/* EnfermeriaBundle:ReporteEmergencia:index.html.twig */
class __TwigTemplate_770cb6a4f1ddefb63d61c0a7f10c1e58963cceca41b5c29c8ddf94e06677b286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Enfermeria/Default/index.html.twig", "EnfermeriaBundle:ReporteEmergencia:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Enfermeria/Default/index.html.twig";
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
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "                        <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">
                            <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_enfermeria_reporte_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "detalle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "users", array()), "id", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_enfermeria_reporte_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("ud_enfermeria_reporte_new");
        echo "\" class=\"btn btn-sm btn-primary\">
                Nuevo Reporte
            </a>
        </div>

";
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
        return array (  89 => 33,  84 => 30,  74 => 26,  69 => 24,  65 => 23,  59 => 22,  54 => 21,  50 => 20,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Enfermeria/Default/index.html.twig'%}*/
/* */
/* {% block content -%}*/
/*     {{ parent() }}*/
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
/* */
/* {% endblock %}*/
