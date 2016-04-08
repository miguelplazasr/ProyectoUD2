<?php

/* AdminBundle:Usuarios:show.html.twig */
class __TwigTemplate_93db0128542933b8f78d30d0aa140d2978d8184585ab5e9f283b96498d11528b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AdminBundle:Usuarios:show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
            <h1>Usuario: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "apellidos", array()), "html", null, true);
        echo "</h1>
            <br>
            <dl>
                <dt>Id</dt>
                <dd>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Codigo</dt>
                <dd>
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "username", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Id de carnet</dt>
                <dd>
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "idCarnet", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Nombres</dt>
                <dd>
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombres", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Apellidos</dt>
                <dd>
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "apellidos", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Password</dt>
                <dd>
                    ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "password", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Salt</dt>
                <dd>
                    ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salt", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Estado</dt>
                <dd>
                    ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estado", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Foto</dt>
                <dd>
                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "foto", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Esta activo</dt>
                <dd>
                    ";
        // line 66
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "isActive", array()) == 1)) {
            // line 67
            echo "                        <span class =\"text-success\">Habilitado</span>
                    ";
        } elseif (($this->getAttribute(        // line 68
(isset($context["entity"]) ? $context["entity"] : null), "isActive", array()) == 0)) {
            // line 69
            echo "                        <span class=\"text-warning\">Deshabilitado</span>
                    ";
        }
        // line 71
        echo "                    &nbsp;
                </dd>

            </dl>
        </div>
        <div class=\"col-md-3\">
            <h1>Imagen</h1>
            <p>
                <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "webPath", array())), "html", null, true);
        echo "\" width=\"113px\" height=\"151px\" border=\"0\"/>
            </p>
            <h1>Acciones</h1>
            <p>
                <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("ud_admin_usuarios");
        echo "\" class=\"btn btn-sm btn-default\">
                    Volver
                </a>
            </p>

            <p>
                <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_admin_usuarios_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-warning\">
                    Editar
                </a>
            </p>
            <p>
                ";
        // line 94
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                ";
        // line 96
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Usuarios:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 96,  173 => 94,  165 => 89,  156 => 83,  149 => 79,  139 => 71,  135 => 69,  133 => 68,  130 => 67,  128 => 66,  119 => 60,  110 => 54,  101 => 48,  92 => 42,  83 => 36,  74 => 30,  65 => 24,  56 => 18,  47 => 12,  37 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends ('layout.html.twig') %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="container well">*/
/*         <div class="col-lg-9">*/
/*             <h1>Usuario: {{ entity.nombres }} {{ entity.apellidos }}</h1>*/
/*             <br>*/
/*             <dl>*/
/*                 <dt>Id</dt>*/
/*                 <dd>*/
/*                     {{ entity.id }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Codigo</dt>*/
/*                 <dd>*/
/*                     {{ entity.username }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Id de carnet</dt>*/
/*                 <dd>*/
/*                     {{ entity.idCarnet }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Nombres</dt>*/
/*                 <dd>*/
/*                     {{ entity.nombres }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Apellidos</dt>*/
/*                 <dd>*/
/*                     {{ entity.apellidos }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Password</dt>*/
/*                 <dd>*/
/*                     {{ entity.password }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Salt</dt>*/
/*                 <dd>*/
/*                     {{ entity.salt }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Estado</dt>*/
/*                 <dd>*/
/*                     {{ entity.estado }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Foto</dt>*/
/*                 <dd>*/
/*                     {{ entity.foto }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Esta activo</dt>*/
/*                 <dd>*/
/*                     {% if entity.isActive == 1 %}*/
/*                         <span class ="text-success">Habilitado</span>*/
/*                     {% elseif entity.isActive == 0 %}*/
/*                         <span class="text-warning">Deshabilitado</span>*/
/*                     {% endif %}*/
/*                     &nbsp;*/
/*                 </dd>*/
/* */
/*             </dl>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <h1>Imagen</h1>*/
/*             <p>*/
/*                 <img src="{{ asset(entity.webPath) }}" width="113px" height="151px" border="0"/>*/
/*             </p>*/
/*             <h1>Acciones</h1>*/
/*             <p>*/
/*                 <a href="{{ path('ud_admin_usuarios') }}" class="btn btn-sm btn-default">*/
/*                     Volver*/
/*                 </a>*/
/*             </p>*/
/* */
/*             <p>*/
/*                 <a href="{{ path('ud_admin_usuarios_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-warning">*/
/*                     Editar*/
/*                 </a>*/
/*             </p>*/
/*             <p>*/
/*                 {{ form_start(delete_form) }}*/
/*                 <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                 {{ form_end(delete_form) }}*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
