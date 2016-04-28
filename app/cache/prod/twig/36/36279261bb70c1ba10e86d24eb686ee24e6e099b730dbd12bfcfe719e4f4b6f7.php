<?php

/* EnfermeriaBundle:SeguridadSocial:index.html.twig */
class __TwigTemplate_65c43468f2686943738111ff23bd4281a85752284d8183209f4a562e030fac94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Enfermeria/Default/index.html.twig", "EnfermeriaBundle:SeguridadSocial:index.html.twig", 1);
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
        echo "<div class=\"col-md-12\">
            <div class=\"page-header\">
                 <h1>Listado de Seguridad Social</h1>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Eps</th>
                        <th>Rh</th>
                        <th>Telefono contacto</th>
                        <th>Nombre Usuario</th>
                        <th>Accciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "                        <tr>
                            <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_enfermeria_ssocial_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "eps", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rh", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telefonoContacto", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "users", array()), "nombres", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "users", array()), "apellidos", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_enfermeria_ssocial_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_enfermeria_ssocial_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Editar</a>
                                ";
            // line 31
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo?')\">Eliminar</button>
                                ";
            // line 33
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : null), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ud_enfermeria_ssocial_new");
        echo "\" class=\"btn btn-sm btn-link\">
                Nuevo registro
            </a>
        </div>
";
    }

    public function getTemplateName()
    {
        return "EnfermeriaBundle:SeguridadSocial:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  105 => 37,  95 => 33,  90 => 31,  86 => 30,  82 => 29,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  57 => 23,  54 => 22,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Enfermeria/Default/index.html.twig'%}*/
/* */
/* {% block content -%}*/
/*         <div class="col-md-12">*/
/*             <div class="page-header">*/
/*                  <h1>Listado de Seguridad Social</h1>*/
/*             </div>*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Eps</th>*/
/*                         <th>Rh</th>*/
/*                         <th>Telefono contacto</th>*/
/*                         <th>Nombre Usuario</th>*/
/*                         <th>Accciones</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('ud_enfermeria_ssocial_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                             <td>{{ entity.eps }}</td>*/
/*                             <td>{{ entity.rh }}</td>*/
/*                             <td>{{ entity.telefonoContacto }}</td>*/
/*                             <td>{{ entity.users.nombres }} {{ entity.users.apellidos }}</td>*/
/*                             <td class="actions">*/
/*                                 <a href="{{ path('ud_enfermeria_ssocial_show', { 'id': entity.id }) }}" class="btn btn-sm btn-info">Mostrar</a>*/
/*                                 <a href="{{ path('ud_enfermeria_ssocial_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-primary">Editar</a>*/
/*                                 {{ form_start(delete_forms[entity.id]) }}*/
/*                                 <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de borrar este prestamo?')">Eliminar</button>*/
/*                                 {{ form_end(delete_forms[entity.id]) }}*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <a href="{{ path('ud_enfermeria_ssocial_new') }}" class="btn btn-sm btn-link">*/
/*                 Nuevo registro*/
/*             </a>*/
/*         </div>*/
/* {% endblock %}*/
