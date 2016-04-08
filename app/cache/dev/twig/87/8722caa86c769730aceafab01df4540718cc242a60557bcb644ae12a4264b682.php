<?php

/* DeportesBundle:ElementosDeportes:show.html.twig */
class __TwigTemplate_7079b2d9e3f515f073c724b665304be1bb75c89b100cb6808c17bb48ec7fa29f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DeportesBundle:ElementosDeportes:show.html.twig", 1);
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
        $__internal_9c4e470520dda479031e2a2163c2175b81f8d4a7bb07d4d82e007ed1e4ef1b50 = $this->env->getExtension("native_profiler");
        $__internal_9c4e470520dda479031e2a2163c2175b81f8d4a7bb07d4d82e007ed1e4ef1b50->enter($__internal_9c4e470520dda479031e2a2163c2175b81f8d4a7bb07d4d82e007ed1e4ef1b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DeportesBundle:ElementosDeportes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c4e470520dda479031e2a2163c2175b81f8d4a7bb07d4d82e007ed1e4ef1b50->leave($__internal_9c4e470520dda479031e2a2163c2175b81f8d4a7bb07d4d82e007ed1e4ef1b50_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31bdb42fffbedffc698161432cd1d1e1826f930ac8001307e4f000a04da1f2eb = $this->env->getExtension("native_profiler");
        $__internal_31bdb42fffbedffc698161432cd1d1e1826f930ac8001307e4f000a04da1f2eb->enter($__internal_31bdb42fffbedffc698161432cd1d1e1826f930ac8001307e4f000a04da1f2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
            <h1>";
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
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>Descripcion</dt>
                <dd>
                    ";
        // line 26
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
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_deportes_elementos_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-warning\">
                    Editar
                </a>
            </p>
            <p>
                ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </p>
            <p>
                <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("ud_deportes_elementos");
        echo "\" class=\"btn btn-sm btn-default\">
                    Volver
                </a>
                <br>
            </p>
        </div>
    </div>
";
        
        $__internal_31bdb42fffbedffc698161432cd1d1e1826f930ac8001307e4f000a04da1f2eb->leave($__internal_31bdb42fffbedffc698161432cd1d1e1826f930ac8001307e4f000a04da1f2eb_prof);

    }

    public function getTemplateName()
    {
        return "DeportesBundle:ElementosDeportes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 46,  100 => 43,  95 => 41,  87 => 36,  74 => 26,  64 => 19,  54 => 12,  46 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="container well">*/
/*         <div class="col-lg-9">*/
/*             <h1>{{ entity.nombre }}</h1>*/
/*             <br>*/
/*             <dl>*/
/*                 <dt>Id</dt>*/
/*                 <dd>*/
/*                     {{ entity.id }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/* */
/*                 <dt>Nombre</dt>*/
/*                 <dd>*/
/*                     {{ entity.nombre }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/* */
/*                 <dt>Descripcion</dt>*/
/*                 <dd>*/
/*                     {{ entity.descripcion }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/* */
/*             </dl>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <h2>Acciones</h2>*/
/*             <p>*/
/*                 <a href="{{ path('ud_deportes_elementos_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-warning">*/
/*                     Editar*/
/*                 </a>*/
/*             </p>*/
/*             <p>*/
/*                 {{ form_start(delete_form) }}*/
/*                 <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                 {{ form_end(delete_form) }}*/
/*             </p>*/
/*             <p>*/
/*                 <a href="{{ path('ud_deportes_elementos') }}" class="btn btn-sm btn-default">*/
/*                     Volver*/
/*                 </a>*/
/*                 <br>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
