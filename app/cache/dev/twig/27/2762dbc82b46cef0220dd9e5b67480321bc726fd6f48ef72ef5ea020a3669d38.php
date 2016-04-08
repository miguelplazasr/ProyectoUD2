<?php

/* EnfermeriaBundle:SeguridadSocial:index.html.twig */
class __TwigTemplate_bb77774b88c35ccfb6bb2e5b13061c59a8066336c3d513129b6a5f46bae12230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EnfermeriaBundle:SeguridadSocial:index.html.twig", 1);
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
        $__internal_48fd564e50f7d1bda27a116eadd9634758d39532f429978e8cd6fa97c82fc9fd = $this->env->getExtension("native_profiler");
        $__internal_48fd564e50f7d1bda27a116eadd9634758d39532f429978e8cd6fa97c82fc9fd->enter($__internal_48fd564e50f7d1bda27a116eadd9634758d39532f429978e8cd6fa97c82fc9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnfermeriaBundle:SeguridadSocial:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48fd564e50f7d1bda27a116eadd9634758d39532f429978e8cd6fa97c82fc9fd->leave($__internal_48fd564e50f7d1bda27a116eadd9634758d39532f429978e8cd6fa97c82fc9fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1b2dea7c147d46617082cb33fcabd5472fc9ca0c5e19c991874f25731a80ce8 = $this->env->getExtension("native_profiler");
        $__internal_d1b2dea7c147d46617082cb33fcabd5472fc9ca0c5e19c991874f25731a80ce8->enter($__internal_d1b2dea7c147d46617082cb33fcabd5472fc9ca0c5e19c991874f25731a80ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
        <div class=\"col-md-12\">
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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "                        <tr>
                            <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_enfermeria_ssocial_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "eps", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rh", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telefonoContacto", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "users", array()), "nombres", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "users", array()), "apellidos", array()), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_enfermeria_ssocial_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_enfermeria_ssocial_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Editar</a>
                                ";
            // line 32
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo?')\">Eliminar</button>
                                ";
            // line 34
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("ud_enfermeria_ssocial_new");
        echo "\" class=\"btn btn-sm btn-link\">
                Nuevo registro
            </a>
        </div>
    </div>
";
        
        $__internal_d1b2dea7c147d46617082cb33fcabd5472fc9ca0c5e19c991874f25731a80ce8->leave($__internal_d1b2dea7c147d46617082cb33fcabd5472fc9ca0c5e19c991874f25731a80ce8_prof);

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
        return array (  120 => 41,  115 => 38,  105 => 34,  100 => 32,  96 => 31,  92 => 30,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ('layout.html.twig') %}*/
/* */
/* {% block body -%}*/
/*     <div class="container">*/
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
/*     </div>*/
/* {% endblock %}*/
