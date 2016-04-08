<?php

/* SalonesBundle:Salones:show.html.twig */
class __TwigTemplate_dddb6ba3988ba45f86bcf54b3b74e6532b416565504a0c486982786f91c0c6e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SalonesBundle:Salones:show.html.twig", 1);
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
        $__internal_c40382eafebc9027a98c99750b2ac8ee651cb8c5df466028c4c885a12a3b836d = $this->env->getExtension("native_profiler");
        $__internal_c40382eafebc9027a98c99750b2ac8ee651cb8c5df466028c4c885a12a3b836d->enter($__internal_c40382eafebc9027a98c99750b2ac8ee651cb8c5df466028c4c885a12a3b836d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalonesBundle:Salones:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c40382eafebc9027a98c99750b2ac8ee651cb8c5df466028c4c885a12a3b836d->leave($__internal_c40382eafebc9027a98c99750b2ac8ee651cb8c5df466028c4c885a12a3b836d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d559af3e91658038a3dfbb570f7ed315cbf9ce9dbfe137747651a71945c42351 = $this->env->getExtension("native_profiler");
        $__internal_d559af3e91658038a3dfbb570f7ed315cbf9ce9dbfe137747651a71945c42351->enter($__internal_d559af3e91658038a3dfbb570f7ed315cbf9ce9dbfe137747651a71945c42351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
            <h1>Salon: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreSala", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreSala", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Role</dt>
                <dd>
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("ud_salones_salon");
        echo "\" class=\"btn btn-sm btn-default\">
                    Volver
                </a>
            </p>
            <p>
                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_salon_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_d559af3e91658038a3dfbb570f7ed315cbf9ce9dbfe137747651a71945c42351->leave($__internal_d559af3e91658038a3dfbb570f7ed315cbf9ce9dbfe137747651a71945c42351_prof);

    }

    public function getTemplateName()
    {
        return "SalonesBundle:Salones:show.html.twig";
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
/*     {{ parent() }}*/
/*     <div class="container well">*/
/*         <div class="col-lg-9">*/
/*             <h1>Salon: {{ entity.nombreSala }}</h1>*/
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
/*                     {{ entity.nombreSala }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Role</dt>*/
/*                 <dd>*/
/*                     {{ entity.descripcion }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*             </dl>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <h1>Acciones</h1>*/
/*             <p>*/
/*                 <a href="{{ path('ud_salones_salon') }}" class="btn btn-sm btn-default">*/
/*                     Volver*/
/*                 </a>*/
/*             </p>*/
/*             <p>*/
/*                 <a href="{{ path('ud_salones_salon_edit', {'id': entity.id }) }}" class="btn btn-sm btn-warning">*/
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
