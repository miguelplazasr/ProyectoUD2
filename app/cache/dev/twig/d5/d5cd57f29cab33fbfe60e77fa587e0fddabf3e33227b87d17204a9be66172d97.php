<?php

/* ActivosBundle:ElementosActivos:show.html.twig */
class __TwigTemplate_e70cdb5fbd8fb0ccb0c0db1c52832c3e5b546333005107c86b018bb25203f02a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ActivosBundle:ElementosActivos:show.html.twig", 1);
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
        $__internal_b86509cfa11e8b2269a83ca231c8bd0b0cd9543e8c78daa930cf851d07d94d0c = $this->env->getExtension("native_profiler");
        $__internal_b86509cfa11e8b2269a83ca231c8bd0b0cd9543e8c78daa930cf851d07d94d0c->enter($__internal_b86509cfa11e8b2269a83ca231c8bd0b0cd9543e8c78daa930cf851d07d94d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActivosBundle:ElementosActivos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b86509cfa11e8b2269a83ca231c8bd0b0cd9543e8c78daa930cf851d07d94d0c->leave($__internal_b86509cfa11e8b2269a83ca231c8bd0b0cd9543e8c78daa930cf851d07d94d0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64e155c33bab4d4bcb4501104bc39b4e4743e58aceda1f761cfbd299a87f1feb = $this->env->getExtension("native_profiler");
        $__internal_64e155c33bab4d4bcb4501104bc39b4e4743e58aceda1f761cfbd299a87f1feb->enter($__internal_64e155c33bab4d4bcb4501104bc39b4e4743e58aceda1f761cfbd299a87f1feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
            <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</h1>
            <dl>
                <dt>Id</dt>
                <dd>
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Nombre</dt>
                <dd>
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Descripcion</dt>
                <dd>
                    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        <div class=\"col-md-3\">
            <h2>Acciones</h2>
            <p>
                <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_elementos_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-warning\">
                    Editar
                </a>
            </p>
            <p>
                ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </p>
            <p>
                <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("ud_activos_elementos");
        echo "\" class=\"btn btn-sm btn-default\">
                    Volver
                </a>
                <br>
            </p>
        </div>
    </div>
";
        
        $__internal_64e155c33bab4d4bcb4501104bc39b4e4743e58aceda1f761cfbd299a87f1feb->leave($__internal_64e155c33bab4d4bcb4501104bc39b4e4743e58aceda1f761cfbd299a87f1feb_prof);

    }

    public function getTemplateName()
    {
        return "ActivosBundle:ElementosActivos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 42,  96 => 39,  91 => 37,  83 => 32,  71 => 23,  62 => 17,  53 => 11,  46 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="container well">*/
/*         <div class="col-lg-9">*/
/*             <h1>{{ entity.nombre }}</h1>*/
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
/*                 <dt>Descripcion</dt>*/
/*                 <dd>*/
/*                     {{ entity.descripcion }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*             </dl>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <h2>Acciones</h2>*/
/*             <p>*/
/*                 <a href="{{ path('ud_activos_elementos_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-warning">*/
/*                     Editar*/
/*                 </a>*/
/*             </p>*/
/*             <p>*/
/*                 {{ form_start(delete_form) }}*/
/*                 <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                 {{ form_end(delete_form) }}*/
/*             </p>*/
/*             <p>*/
/*                 <a href="{{ path('ud_activos_elementos') }}" class="btn btn-sm btn-default">*/
/*                     Volver*/
/*                 </a>*/
/*                 <br>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
