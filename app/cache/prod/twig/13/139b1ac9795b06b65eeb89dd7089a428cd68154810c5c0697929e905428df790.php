<?php

/* DeportesBundle:ElementosDeportes:index.html.twig */
class __TwigTemplate_c8eb4e8b2e2c840ba4c15cf2d7dbe0c6526bcb70bf39561aaa586a7812d3a46e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Deportes/Default/index.html.twig", "DeportesBundle:ElementosDeportes:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Deportes/Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"col-md-12\">
            <div class=\"page-header\">
                <h1>Lista de elementos</h1>
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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "                        <tr>
                            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_deportes_elementos_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_deportes_elementos_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                                <br>
                                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_deportes_elementos_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">Editar</a>
                                <br>
                                ";
            // line 29
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo?')\">Eliminar</button>
                                ";
            // line 31
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ud_deportes_elementos_new");
        echo "\" class=\"btn btn-sm btn-primary\">
                Nuevo Elemento
            </a>
        </div>
";
    }

    public function getTemplateName()
    {
        return "DeportesBundle:ElementosDeportes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  95 => 35,  85 => 31,  80 => 29,  75 => 27,  70 => 25,  65 => 23,  61 => 22,  55 => 21,  52 => 20,  48 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Deportes/Default/index.html.twig'%}*/
/* */
/* {% block content -%}*/
/*         <div class="col-md-12">*/
/*             <div class="page-header">*/
/*                 <h1>Lista de elementos</h1>*/
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
/*                             <td><a href="{{ path('ud_deportes_elementos_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                             <td>{{ entity.nombre }}</td>*/
/*                             <td>{{ entity.descripcion }}</td>*/
/*                             <td class="actions">*/
/*                                 <a href="{{ path('ud_deportes_elementos_show', { 'id': entity.id }) }}" class="btn btn-sm btn-info">Mostrar</a>*/
/*                                 <br>*/
/*                                 <a href="{{ path('ud_deportes_elementos_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-warning">Editar</a>*/
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
/*             <a href="{{ path('ud_deportes_elementos_new') }}" class="btn btn-sm btn-primary">*/
/*                 Nuevo Elemento*/
/*             </a>*/
/*         </div>*/
/* {% endblock %}*/
