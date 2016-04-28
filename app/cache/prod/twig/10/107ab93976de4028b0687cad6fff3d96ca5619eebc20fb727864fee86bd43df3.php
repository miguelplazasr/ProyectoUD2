<?php

/* SalonesBundle:Salones:index.html.twig */
class __TwigTemplate_8093a0f75ed8a5d63516bfdc8dad1166a68a8857ff06bb662d3d20fdc92b4e6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalonesBundle:Default:index.html.twig", "SalonesBundle:Salones:index.html.twig", 1);
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
        echo "<div class=\"col-md-12\">
        <div class=\"page-header\">
            <h1>Lista de Salones</h1>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre Sala</th>
                        <th>Descripcion</th>
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
            echo "                    <tr>
                        <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_salon_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreSala", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
                        <td class=\"actions\">
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_salon_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Mostrar</a>
                                <br>
                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_salon_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">Editar</a>
                                <br>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </tbody>
            </table>
        </div>
                <p>
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ud_salones_salon_new");
        echo "\" class=\"btn btn-sm btn-link\">
                        Nuevo salon
                    </a>
                </p>
        </div>
";
    }

    public function getTemplateName()
    {
        return "SalonesBundle:Salones:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 37,  86 => 33,  75 => 28,  70 => 26,  65 => 24,  61 => 23,  55 => 22,  52 => 21,  48 => 20,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SalonesBundle:Default:index.html.twig'%}*/
/* */
/* {% block content -%}*/
/* */
/*     <div class="col-md-12">*/
/*         <div class="page-header">*/
/*             <h1>Lista de Salones</h1>*/
/*         </div>*/
/*         <div class="table-responsive">*/
/*             <table class="table table-striped table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Nombre Sala</th>*/
/*                         <th>Descripcion</th>*/
/*                         <th>Acciones</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for entity in entities %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('ud_salones_salon_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                         <td>{{ entity.nombreSala }}</td>*/
/*                         <td>{{ entity.descripcion }}</td>*/
/*                         <td class="actions">*/
/*                                 <a href="{{ path('ud_salones_salon_show', { 'id': entity.id }) }}" class="btn btn-sm btn-primary">Mostrar</a>*/
/*                                 <br>*/
/*                                 <a href="{{ path('ud_salones_salon_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-warning">Editar</a>*/
/*                                 <br>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*                 <p>*/
/*                     <a href="{{ path('ud_salones_salon_new') }}" class="btn btn-sm btn-link">*/
/*                         Nuevo salon*/
/*                     </a>*/
/*                 </p>*/
/*         </div>*/
/* {% endblock %}*/
/* */
