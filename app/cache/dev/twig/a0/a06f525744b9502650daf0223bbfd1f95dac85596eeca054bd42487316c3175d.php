<?php

/* AdminBundle:Dependencia:index.html.twig */
class __TwigTemplate_988c315c3e78274ce0175b1c48502d6d4deb23ae384c8b85f86b39b266110146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AdminBundle:Dependencia:index.html.twig", 1);
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
        $__internal_25ef2ad7c741128e8aa291e765d74678a7d3d228c1cacad4edf687dcfa0add5b = $this->env->getExtension("native_profiler");
        $__internal_25ef2ad7c741128e8aa291e765d74678a7d3d228c1cacad4edf687dcfa0add5b->enter($__internal_25ef2ad7c741128e8aa291e765d74678a7d3d228c1cacad4edf687dcfa0add5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Dependencia:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25ef2ad7c741128e8aa291e765d74678a7d3d228c1cacad4edf687dcfa0add5b->leave($__internal_25ef2ad7c741128e8aa291e765d74678a7d3d228c1cacad4edf687dcfa0add5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a061d411159c4a7d6d534b3a88c5e15b52893ed18d0cb51e6ee332cd7f994ad = $this->env->getExtension("native_profiler");
        $__internal_8a061d411159c4a7d6d534b3a88c5e15b52893ed18d0cb51e6ee332cd7f994ad->enter($__internal_8a061d411159c4a7d6d534b3a88c5e15b52893ed18d0cb51e6ee332cd7f994ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header\">
                <h1>Listado de Dependencias</h1>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "                        <tr>
                            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_admin_dependencia_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_admin_dependencia_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                                <br>
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_admin_dependencia_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Editar</a>
                                <br>
                                ";
            // line 28
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar esta dependencia?')\">Eliminar</button>
                                ";
            // line 30
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ud_admin_dependencia_new");
        echo "\" class=\"btn btn-sm btn-link\">
                Nueva Dependencia
            </a>
        </div>
    </div>
";
        
        $__internal_8a061d411159c4a7d6d534b3a88c5e15b52893ed18d0cb51e6ee332cd7f994ad->leave($__internal_8a061d411159c4a7d6d534b3a88c5e15b52893ed18d0cb51e6ee332cd7f994ad_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Dependencia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 34,  90 => 30,  85 => 28,  80 => 26,  75 => 24,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ('layout.html.twig') %}*/
/* */
/* {% block body -%}*/
/*     <div class="container">*/
/*         <div class="col-md-12">*/
/*             <div class="page-header">*/
/*                 <h1>Listado de Dependencias</h1>*/
/*             </div>*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Nombre</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('ud_admin_dependencia_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                             <td>{{ entity.nombre }}</td>*/
/*                             <td class="actions">*/
/*                                 <a href="{{ path('ud_admin_dependencia_show', { 'id': entity.id }) }}" class="btn btn-sm btn-info">Mostrar</a>*/
/*                                 <br>*/
/*                                 <a href="{{ path('ud_admin_dependencia_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-primary">Editar</a>*/
/*                                 <br>*/
/*                                 {{ form_start(delete_forms[entity.id]) }}*/
/*                                 <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de borrar esta dependencia?')">Eliminar</button>*/
/*                                 {{ form_end(delete_forms[entity.id]) }}*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <a href="{{ path('ud_admin_dependencia_new') }}" class="btn btn-sm btn-link">*/
/*                 Nueva Dependencia*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
