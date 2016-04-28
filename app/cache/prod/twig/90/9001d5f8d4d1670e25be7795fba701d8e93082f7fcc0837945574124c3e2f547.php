<?php

/* AdminBundle:Dependencia:index.html.twig */
class __TwigTemplate_1cc7fb1666d323218ab66813d1913c2f1e908c5d5e8a6b9e2c69bf2e2427e406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Admin/Default/index.html.twig", "AdminBundle:Dependencia:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Admin/Default/index.html.twig";
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
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
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
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar esta dependencia?')\">Eliminar</button>
                                ";
            // line 30
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
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
";
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
        return array (  97 => 37,  92 => 34,  82 => 30,  77 => 28,  72 => 26,  67 => 24,  62 => 22,  56 => 21,  53 => 20,  49 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends ('@Admin/Default/index.html.twig') %}*/
/* */
/* {% block content -%}*/
/*     {{ parent() }}*/
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
/* {% endblock %}*/
/* */
/* */
