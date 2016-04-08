<?php

/* AdminBundle:Roles:show.html.twig */
class __TwigTemplate_d1f50e9925cfe938774d6ef1bde269f53f97baeb54a0004860875889183e4b6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AdminBundle:Roles:show.html.twig", 1);
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
        $__internal_f046e30ab58a09cdbc59ace5a58c67dc98973a6bb16984107ca2274f8012bf9a = $this->env->getExtension("native_profiler");
        $__internal_f046e30ab58a09cdbc59ace5a58c67dc98973a6bb16984107ca2274f8012bf9a->enter($__internal_f046e30ab58a09cdbc59ace5a58c67dc98973a6bb16984107ca2274f8012bf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Roles:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f046e30ab58a09cdbc59ace5a58c67dc98973a6bb16984107ca2274f8012bf9a->leave($__internal_f046e30ab58a09cdbc59ace5a58c67dc98973a6bb16984107ca2274f8012bf9a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a8c002d99ee806a3cd4a5eebf98d098c41fef24d2e48dab40e3094225870c24 = $this->env->getExtension("native_profiler");
        $__internal_4a8c002d99ee806a3cd4a5eebf98d098c41fef24d2e48dab40e3094225870c24->enter($__internal_4a8c002d99ee806a3cd4a5eebf98d098c41fef24d2e48dab40e3094225870c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
                <h1>Rol: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
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
                <dt>Nombre</dt>
                <dd>
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Role</dt>
                <dd>
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "role", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        <div class=\"col-md-3\">
            <h1>Acciones</h1>
            <p>
                <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("ud_admin_roles");
        echo "\" class=\"btn btn-sm btn-default\">
                    Volver
                </a>
            </p>
            <p>
                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_admin_roles_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-warning\">
                    Editar
                </a>
            </p>
            <p>
                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </p>
        </div>
    </div>
";
        
        $__internal_4a8c002d99ee806a3cd4a5eebf98d098c41fef24d2e48dab40e3094225870c24->leave($__internal_4a8c002d99ee806a3cd4a5eebf98d098c41fef24d2e48dab40e3094225870c24_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Roles:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 45,  100 => 43,  92 => 38,  84 => 33,  72 => 24,  63 => 18,  54 => 12,  46 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/* {{ parent() }}*/
/*     <div class="container well">*/
/*         <div class="col-lg-9">*/
/*                 <h1>Rol: {{ entity.nombre }}</h1>*/
/*             <br>*/
/*             <dl>*/
/*                 <dt>Id</dt>*/
/*                 <dd>*/
/*                     {{ entity.id }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Nombre</dt>*/
/*                 <dd>*/
/*                     {{ entity.nombre }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Role</dt>*/
/*                 <dd>*/
/*                     {{ entity.role }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*             </dl>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <h1>Acciones</h1>*/
/*             <p>*/
/*                 <a href="{{ path('ud_admin_roles') }}" class="btn btn-sm btn-default">*/
/*                     Volver*/
/*                 </a>*/
/*             </p>*/
/*             <p>*/
/*                 <a href="{{ path('ud_admin_roles_edit', {'id': entity.id }) }}" class="btn btn-sm btn-warning">*/
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
/* */
