<?php

/* SalonesBundle:Salones:index.html.twig */
class __TwigTemplate_c00243b095518fe8b69914c54714d87238a7f62274ef3eecd722665082483053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SalonesBundle:Salones:index.html.twig", 1);
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
        $__internal_60ccb18dba74fe96b8e2bbf659c1c83ad76cee2a6cecc2b428e10f234adc663c = $this->env->getExtension("native_profiler");
        $__internal_60ccb18dba74fe96b8e2bbf659c1c83ad76cee2a6cecc2b428e10f234adc663c->enter($__internal_60ccb18dba74fe96b8e2bbf659c1c83ad76cee2a6cecc2b428e10f234adc663c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalonesBundle:Salones:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60ccb18dba74fe96b8e2bbf659c1c83ad76cee2a6cecc2b428e10f234adc663c->leave($__internal_60ccb18dba74fe96b8e2bbf659c1c83ad76cee2a6cecc2b428e10f234adc663c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_032ec932f7a6acda30d1bd7d5a86d7605b34591ba5fead54e4a53a13a45d03a4 = $this->env->getExtension("native_profiler");
        $__internal_032ec932f7a6acda30d1bd7d5a86d7605b34591ba5fead54e4a53a13a45d03a4->enter($__internal_032ec932f7a6acda30d1bd7d5a86d7605b34591ba5fead54e4a53a13a45d03a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
    <div class=\"col-md-12\">
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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "                    <tr>
                        <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_salon_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreSala", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
                        <td class=\"actions\">
                                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_salon_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Mostrar</a>
                                <br>
                                <a href=\"";
            // line 29
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
        // line 34
        echo "                </tbody>
            </table>
        </div>
                <p>
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ud_salones_salon_new");
        echo "\" class=\"btn btn-sm btn-link\">
                        Nuevo salon
                    </a>
                </p>
        </div>
    </div>
    ";
        
        $__internal_032ec932f7a6acda30d1bd7d5a86d7605b34591ba5fead54e4a53a13a45d03a4->leave($__internal_032ec932f7a6acda30d1bd7d5a86d7605b34591ba5fead54e4a53a13a45d03a4_prof);

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
        return array (  102 => 38,  96 => 34,  85 => 29,  80 => 27,  75 => 25,  71 => 24,  65 => 23,  62 => 22,  58 => 21,  40 => 5,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/* */
/* <div class="container">*/
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
/*     </div>*/
/*     {% endblock %}*/
/* */
