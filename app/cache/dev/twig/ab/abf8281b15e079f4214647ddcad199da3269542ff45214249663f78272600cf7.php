<?php

/* DeportesBundle:InventarioDeportes:show.html.twig */
class __TwigTemplate_1400d8ca1048a4f1ab10b395d49e5574db762b8d7a2defd119732821c3e19a17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DeportesBundle:InventarioDeportes:show.html.twig", 1);
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
        $__internal_3dfb5d2a8f86048fd255b1775b5562a9a8dbb4de38c5d2842756fe6f1dfb44d0 = $this->env->getExtension("native_profiler");
        $__internal_3dfb5d2a8f86048fd255b1775b5562a9a8dbb4de38c5d2842756fe6f1dfb44d0->enter($__internal_3dfb5d2a8f86048fd255b1775b5562a9a8dbb4de38c5d2842756fe6f1dfb44d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DeportesBundle:InventarioDeportes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dfb5d2a8f86048fd255b1775b5562a9a8dbb4de38c5d2842756fe6f1dfb44d0->leave($__internal_3dfb5d2a8f86048fd255b1775b5562a9a8dbb4de38c5d2842756fe6f1dfb44d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_80d1280ae0082d7abfbb2e3193b06a9c3bd3e784b527293b16ac5471a95eafeb = $this->env->getExtension("native_profiler");
        $__internal_80d1280ae0082d7abfbb2e3193b06a9c3bd3e784b527293b16ac5471a95eafeb->enter($__internal_80d1280ae0082d7abfbb2e3193b06a9c3bd3e784b527293b16ac5471a95eafeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
            <h1>Inventario: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
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
                <dt>Fecha</dt>
                <dd>
                    ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Estado</dt>
                <dd>
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Cantidad</dt>
                <dd>
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cantidad", array()), "html", null, true);
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
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_deportes_inventario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-warning\">
                    Editar
                </a>
            </p>
            <p>
                ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </p>
            <p>
                <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("ud_deportes_inventario");
        echo "\" class=\"btn btn-sm btn-link\">
                    Volver
                </a>
            </p>
        </div>
    </div>
";
        
        $__internal_80d1280ae0082d7abfbb2e3193b06a9c3bd3e784b527293b16ac5471a95eafeb->leave($__internal_80d1280ae0082d7abfbb2e3193b06a9c3bd3e784b527293b16ac5471a95eafeb_prof);

    }

    public function getTemplateName()
    {
        return "DeportesBundle:InventarioDeportes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 49,  106 => 46,  101 => 44,  93 => 39,  81 => 30,  72 => 24,  63 => 18,  54 => 12,  46 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="container well">*/
/*         <div class="col-lg-9">*/
/*             <h1>Inventario: {{ entity.id }}</h1>*/
/*             <br>*/
/*             <dl>*/
/*                 <dt>Id</dt>*/
/*                 <dd>*/
/*                     {{ entity.id }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Fecha</dt>*/
/*                 <dd>*/
/*                     {{ entity.fecha|date('Y-m-d H:i:s') }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Estado</dt>*/
/*                 <dd>*/
/*                     {{ entity.estado }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Cantidad</dt>*/
/*                 <dd>*/
/*                     {{ entity.cantidad }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*             </dl>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <h2>Acciones</h2>*/
/*             <p>*/
/*                 <a href="{{ path('ud_deportes_inventario_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-warning">*/
/*                     Editar*/
/*                 </a>*/
/*             </p>*/
/*             <p>*/
/*                 {{ form_start(delete_form) }}*/
/*                 <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                 {{ form_end(delete_form) }}*/
/*             </p>*/
/*             <p>*/
/*                 <a href="{{ path('ud_deportes_inventario') }}" class="btn btn-sm btn-link">*/
/*                     Volver*/
/*                 </a>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
