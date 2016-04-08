<?php

/* ActivosBundle:ElementosActivos:index.html.twig */
class __TwigTemplate_2d60871746e1efb9c21cc8c16c45074340a90fcb2e024af4d2cedb977d4ffac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ActivosBundle:ElementosActivos:index.html.twig", 1);
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
        $__internal_ab9b7a046a73b7667d4d6639215f48ea1b06d0908c8858068feca933fa9c5afe = $this->env->getExtension("native_profiler");
        $__internal_ab9b7a046a73b7667d4d6639215f48ea1b06d0908c8858068feca933fa9c5afe->enter($__internal_ab9b7a046a73b7667d4d6639215f48ea1b06d0908c8858068feca933fa9c5afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActivosBundle:ElementosActivos:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab9b7a046a73b7667d4d6639215f48ea1b06d0908c8858068feca933fa9c5afe->leave($__internal_ab9b7a046a73b7667d4d6639215f48ea1b06d0908c8858068feca933fa9c5afe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89e9284c0b8b63368604cde7b2790f38750a4758b577f75f81edbbbebe6130ea = $this->env->getExtension("native_profiler");
        $__internal_89e9284c0b8b63368604cde7b2790f38750a4758b577f75f81edbbbebe6130ea->enter($__internal_89e9284c0b8b63368604cde7b2790f38750a4758b577f75f81edbbbebe6130ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header\">
                <h1>Lista de activos</h1>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_elementos_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_elementos_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                                <br>
                                <br>
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_elementos_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">Editar</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("ud_activos_elementos_new");
        echo "\" class=\"btn btn-sm btn-default\">
                Nuevo Activo
            </a>
        </div>
    </div>
";
        
        $__internal_89e9284c0b8b63368604cde7b2790f38750a4758b577f75f81edbbbebe6130ea->leave($__internal_89e9284c0b8b63368604cde7b2790f38750a4758b577f75f81edbbbebe6130ea_prof);

    }

    public function getTemplateName()
    {
        return "ActivosBundle:ElementosActivos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  96 => 33,  86 => 29,  80 => 26,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <div class="container">*/
/*         <div class="col-md-12">*/
/*             <div class="page-header">*/
/*                 <h1>Lista de activos</h1>*/
/*             </div>*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Nombre</th>*/
/*                         <th>Descripcion</th>*/
/*                         <th>Acciones</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('ud_activos_elementos_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                             <td>{{ entity.nombre }}</td>*/
/*                             <td>{{ entity.descripcion }}</td>*/
/*                             <td class="actions">*/
/*                                 <a href="{{ path('ud_activos_elementos_show', { 'id': entity.id }) }}" class="btn btn-sm btn-info">Mostrar</a>*/
/*                                 <br>*/
/*                                 <br>*/
/*                                 <a href="{{ path('ud_activos_elementos_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-warning">Editar</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <a href="{{ path('ud_activos_elementos_new') }}" class="btn btn-sm btn-default">*/
/*                 Nuevo Activo*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
