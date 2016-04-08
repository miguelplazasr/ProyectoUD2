<?php

/* SalonesBundle:PrestamoSalon:show.html.twig */
class __TwigTemplate_2f92672be717f83ef8e36f54d75fcb736cc1c4f5f53f23ff9e294b9e1d5ad708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SalonesBundle:PrestamoSalon:show.html.twig", 1);
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
        $__internal_3d9edb44acb0a6e228f8e2b0ca8e7b9844458c9a81e3dda50005c09e170d5d4a = $this->env->getExtension("native_profiler");
        $__internal_3d9edb44acb0a6e228f8e2b0ca8e7b9844458c9a81e3dda50005c09e170d5d4a->enter($__internal_3d9edb44acb0a6e228f8e2b0ca8e7b9844458c9a81e3dda50005c09e170d5d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalonesBundle:PrestamoSalon:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d9edb44acb0a6e228f8e2b0ca8e7b9844458c9a81e3dda50005c09e170d5d4a->leave($__internal_3d9edb44acb0a6e228f8e2b0ca8e7b9844458c9a81e3dda50005c09e170d5d4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81ba3066ed3c8daafa0ae32c5767d5ab8e68d63fcf72b6140cee167af80648b4 = $this->env->getExtension("native_profiler");
        $__internal_81ba3066ed3c8daafa0ae32c5767d5ab8e68d63fcf72b6140cee167af80648b4->enter($__internal_81ba3066ed3c8daafa0ae32c5767d5ab8e68d63fcf72b6140cee167af80648b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
            <h1>Prestamo Numero: ";
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
                <dt>Fecha inicio</dt>
                <dd>
                    ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaInicio", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Fecha Fin</dt>
                <dd>
                    ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaFin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Observaciones</dt>
                <dd>
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observaciones", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Sala</dt>
                <dd>
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sala", array()), "nombreSala", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Observaciones</dt>
                <dd>
                    ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "users", array()), "id", array()), "html", null, true);
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
        // line 51
        echo $this->env->getExtension('routing')->getPath("ud_salones_prestamo");
        echo "\" class=\"btn btn-sm btn-default\">
                    Volver
                </a>
            </p>
            <p>
                <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_prestamo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-warning\">
                    Editar
                </a>
            </p>
            <p>
                ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </p>
        </div>
    </div>
";
        
        $__internal_81ba3066ed3c8daafa0ae32c5767d5ab8e68d63fcf72b6140cee167af80648b4->leave($__internal_81ba3066ed3c8daafa0ae32c5767d5ab8e68d63fcf72b6140cee167af80648b4_prof);

    }

    public function getTemplateName()
    {
        return "SalonesBundle:PrestamoSalon:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 63,  127 => 61,  119 => 56,  111 => 51,  99 => 42,  90 => 36,  81 => 30,  72 => 24,  63 => 18,  54 => 12,  46 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="container well">*/
/*         <div class="col-lg-9">*/
/*             <h1>Prestamo Numero: {{ entity.id }}</h1>*/
/*             <br>*/
/*             <dl>*/
/*                 <dt>Id</dt>*/
/*                 <dd>*/
/*                     {{ entity.id }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Fecha inicio</dt>*/
/*                 <dd>*/
/*                     {{ entity.fechaInicio|date('Y-m-d H:i:s') }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Fecha Fin</dt>*/
/*                 <dd>*/
/*                     {{ entity.fechaFin|date('Y-m-d H:i:s') }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Observaciones</dt>*/
/*                 <dd>*/
/*                     {{ entity.observaciones }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Sala</dt>*/
/*                 <dd>*/
/*                     {{ entity.sala.nombreSala }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Observaciones</dt>*/
/*                 <dd>*/
/*                     {{ entity.users.id }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*             </dl>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <h1>Acciones</h1>*/
/*             <p>*/
/*                 <a href="{{ path('ud_salones_prestamo') }}" class="btn btn-sm btn-default">*/
/*                     Volver*/
/*                 </a>*/
/*             </p>*/
/*             <p>*/
/*                 <a href="{{ path('ud_salones_prestamo_edit', {'id': entity.id }) }}" class="btn btn-sm btn-warning">*/
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
