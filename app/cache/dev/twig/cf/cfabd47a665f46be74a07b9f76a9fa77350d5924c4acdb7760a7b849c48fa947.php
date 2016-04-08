<?php

/* AdminBundle:Usuarios:show.html.twig */
class __TwigTemplate_b274f9242bfb813c684c0af9675061d588f39f1c79800b5800aed4a38fc2a5d4 extends Twig_Template
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
        $__internal_336b554d8fed617593817f73901aa280e07853180bcdf6e679bc6437ad49ad5e = $this->env->getExtension("native_profiler");
        $__internal_336b554d8fed617593817f73901aa280e07853180bcdf6e679bc6437ad49ad5e->enter($__internal_336b554d8fed617593817f73901aa280e07853180bcdf6e679bc6437ad49ad5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Usuarios:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_336b554d8fed617593817f73901aa280e07853180bcdf6e679bc6437ad49ad5e->leave($__internal_336b554d8fed617593817f73901aa280e07853180bcdf6e679bc6437ad49ad5e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9136769a097cef8e96cf0afc71da8ec35e216940bff3902690a1e7eb252fa6e5 = $this->env->getExtension("native_profiler");
        $__internal_9136769a097cef8e96cf0afc71da8ec35e216940bff3902690a1e7eb252fa6e5->enter($__internal_9136769a097cef8e96cf0afc71da8ec35e216940bff3902690a1e7eb252fa6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
            <h1>Usuario: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos", array()), "html", null, true);
        echo "</h1>
            <br>
            <dl>
                <dt>Id</dt>
                <dd>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Codigo</dt>
                <dd>
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Id de carnet</dt>
                <dd>
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idCarnet", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Nombres</dt>
                <dd>
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombres", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Apellidos</dt>
                <dd>
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Password</dt>
                <dd>
                    ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "password", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Salt</dt>
                <dd>
                    ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salt", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Estado</dt>
                <dd>
                    ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Foto</dt>
                <dd>
                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Esta activo</dt>
                <dd>
                    ";
        // line 66
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive", array()) == 1)) {
            // line 67
            echo "                        <span class =\"text-success\">Habilitado</span>
                    ";
        } elseif (($this->getAttribute(        // line 68
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive", array()) == 0)) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "webPath", array())), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_admin_usuarios_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-warning\">
                    Editar
                </a>
            </p>
            <p>
                ";
        // line 94
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                ";
        // line 96
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </p>
        </div>
    </div>
";
        
        $__internal_9136769a097cef8e96cf0afc71da8ec35e216940bff3902690a1e7eb252fa6e5->leave($__internal_9136769a097cef8e96cf0afc71da8ec35e216940bff3902690a1e7eb252fa6e5_prof);

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
        return array (  187 => 96,  182 => 94,  174 => 89,  165 => 83,  158 => 79,  148 => 71,  144 => 69,  142 => 68,  139 => 67,  137 => 66,  128 => 60,  119 => 54,  110 => 48,  101 => 42,  92 => 36,  83 => 30,  74 => 24,  65 => 18,  56 => 12,  46 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
