<?php

/* AdminBundle:Usuarios:index.html.twig */
class __TwigTemplate_75b8af052a4f08f81451a373cb474f24c27874692886aa83a1751506a70b98da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AdminBundle:Usuarios:index.html.twig", 1);
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
        $__internal_e7aa6e52fd0bfd049ddecc441351241408587f7fdc60dfa542ec1d46237a49df = $this->env->getExtension("native_profiler");
        $__internal_e7aa6e52fd0bfd049ddecc441351241408587f7fdc60dfa542ec1d46237a49df->enter($__internal_e7aa6e52fd0bfd049ddecc441351241408587f7fdc60dfa542ec1d46237a49df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Usuarios:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7aa6e52fd0bfd049ddecc441351241408587f7fdc60dfa542ec1d46237a49df->leave($__internal_e7aa6e52fd0bfd049ddecc441351241408587f7fdc60dfa542ec1d46237a49df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_641d931be4df2cd8ea0172a8afab139f12b1634674abefddd08c84888c317157 = $this->env->getExtension("native_profiler");
        $__internal_641d931be4df2cd8ea0172a8afab139f12b1634674abefddd08c84888c317157->enter($__internal_641d931be4df2cd8ea0172a8afab139f12b1634674abefddd08c84888c317157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h1 class=\"padding-none\">Lista de usuarios</h1>
            </div>
            <div class=\"table-responsive\">

                <form method=\"get\" action=\"\" class=\"form-inline\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"query\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Buscar usuario\" required>
                    </div>
                    <input type=\"submit\" value=\"Buscar\" class=\"btn btn-default\">
                </form>
                <br>
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Idcarnet</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <!--<th>Password</th>-->
                        <!--<th>Salt</th>-->
                        <th>Email</th>
                        <th>Estado</th>
                        <th>Foto</th>
                        <th>Isactive</th>
                        <th>Dependencia</th>
                        <th>Rol</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
            // line 39
            echo "                        <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">
                            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_admin_usuarios_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idCarnet", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombres", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellidos", array()), "html", null, true);
            echo "</td>
                            <!--<td>";
            // line 45
            echo "</td>-->
                            <!--<td>";
            // line 46
            echo "</td>-->
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
            echo "</td>
                            <td><img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["entity"], "webPath", array())), "html", null, true);
            echo "\" width=\"30px\" height=\"30px\" border=\"0\"/></td>
                            <td>
                                ";
            // line 51
            if (($this->getAttribute($context["entity"], "isActive", array()) == 1)) {
                // line 52
                echo "                                    <strong>Activo</strong>
                                ";
            } elseif (($this->getAttribute(            // line 53
$context["entity"], "isActive", array()) == 0)) {
                // line 54
                echo "                                    <strong>No activo</strong>
                                ";
            }
            // line 56
            echo "                            </td>
                            <td>
                                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "dependencia", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["depen"]) {
                // line 59
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["depen"], "nombre", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 60
                echo "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['depen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                            </td>
                            <td>
                                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "roles", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 64
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "nombre", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 65
                echo "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                            </td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_admin_usuarios_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Mostrar</a>
                                <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_admin_usuarios_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Editar</a>
                                ";
            // line 70
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Esta seguro de borrar este prestamo?')\">Eliminar</button>
                                ";
            // line 72
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_forms"]) ? $context["delete_forms"] : $this->getContext($context, "delete_forms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form_end');
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </tbody>
                </table>
            </div>
            <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("ud_admin_usuarios_new");
        echo "\" class=\"btn btn-sm btn-link\">
                Nuevo Usuario
            </a>
        </div>
    </div>
";
        
        $__internal_641d931be4df2cd8ea0172a8afab139f12b1634674abefddd08c84888c317157->leave($__internal_641d931be4df2cd8ea0172a8afab139f12b1634674abefddd08c84888c317157_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Usuarios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 79,  249 => 76,  239 => 72,  234 => 70,  230 => 69,  226 => 68,  222 => 66,  208 => 65,  202 => 64,  185 => 63,  181 => 61,  167 => 60,  161 => 59,  144 => 58,  140 => 56,  136 => 54,  134 => 53,  131 => 52,  129 => 51,  124 => 49,  120 => 48,  116 => 47,  113 => 46,  110 => 45,  106 => 44,  102 => 43,  98 => 42,  94 => 41,  88 => 40,  83 => 39,  79 => 38,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ('layout.html.twig') %}*/
/* */
/* {% block body -%}*/
/*     <div class="container">*/
/*         <div class="col-md-12">*/
/*             <div class="page-header margin-none">*/
/*                 <h1 class="padding-none">Lista de usuarios</h1>*/
/*             </div>*/
/*             <div class="table-responsive">*/
/* */
/*                 <form method="get" action="" class="form-inline" role="search">*/
/*                     <div class="form-group">*/
/*                         <input type="text" name="query" value="{{ app.request.get('query') }}" class="form-control" placeholder="Buscar usuario" required>*/
/*                     </div>*/
/*                     <input type="submit" value="Buscar" class="btn btn-default">*/
/*                 </form>*/
/*                 <br>*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Username</th>*/
/*                         <th>Idcarnet</th>*/
/*                         <th>Nombres</th>*/
/*                         <th>Apellidos</th>*/
/*                         <!--<th>Password</th>-->*/
/*                         <!--<th>Salt</th>-->*/
/*                         <th>Email</th>*/
/*                         <th>Estado</th>*/
/*                         <th>Foto</th>*/
/*                         <th>Isactive</th>*/
/*                         <th>Dependencia</th>*/
/*                         <th>Rol</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for key, entity in entities %}*/
/*                         <tr data-id="{{ entity.id }}">*/
/*                             <td><a href="{{ path('ud_admin_usuarios_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                             <td>{{ entity.username }}</td>*/
/*                             <td>{{ entity.idCarnet }}</td>*/
/*                             <td>{{ entity.nombres }}</td>*/
/*                             <td>{{ entity.apellidos }}</td>*/
/*                             <!--<td>{#{ entity.password }#}</td>-->*/
/*                             <!--<td>{#{ entity.salt }#}</td>-->*/
/*                             <td>{{ entity.email }}</td>*/
/*                             <td>{{ entity.estado }}</td>*/
/*                             <td><img src="{{ asset(entity.webPath) }}" width="30px" height="30px" border="0"/></td>*/
/*                             <td>*/
/*                                 {% if entity.isActive == 1 %}*/
/*                                     <strong>Activo</strong>*/
/*                                 {% elseif entity.isActive == 0 %}*/
/*                                     <strong>No activo</strong>*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {% for depen in entity.dependencia %}*/
/*                                     {{ depen.nombre }}{% if not loop.last %}, {% endif %}*/
/*                                 {% endfor %}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {% for role in entity.roles %}*/
/*                                     {{ role.nombre }}{% if not loop.last %}, {% endif %}*/
/*                                 {% endfor %}*/
/*                             </td>*/
/*                             <td class="actions">*/
/*                                 <a href="{{ path('ud_admin_usuarios_show', { 'id': entity.id }) }}" class="btn btn-sm btn-info">Mostrar</a>*/
/*                                 <a href="{{ path('ud_admin_usuarios_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-primary">Editar</a>*/
/*                                 {{ form_start(delete_forms[entity.id]) }}*/
/*                                 <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de borrar este prestamo?')">Eliminar</button>*/
/*                                 {{ form_end(delete_forms[entity.id]) }}*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <a href="{{ path('ud_admin_usuarios_new') }}" class="btn btn-sm btn-link">*/
/*                 Nuevo Usuario*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
