<?php

/* SalonesBundle:Salones:show.html.twig */
class __TwigTemplate_60cdffe97aa55c7700b071e6bebd71a68ee4e98bf57d9193eae4e1b343449b96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalonesBundle:Default:index.html.twig", "SalonesBundle:Salones:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SalonesBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div class=\"row well\">
        <div class=\"col-lg-9\">
            <h1>Salon: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombreSala", array()), "html", null, true);
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
                <dt>Nombre</dt>
                <dd>
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombreSala", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Role</dt>
                <dd>
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcion", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_salones_salon_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-warning\">
                    Editar
                </a>
            </p>
            <p>
                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
            </p>
        </div>
    </div>
";
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
        return array (  96 => 45,  91 => 43,  83 => 38,  75 => 33,  63 => 24,  54 => 18,  45 => 12,  37 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SalonesBundle:Default:index.html.twig'%}*/
/* */
/* {% block content -%}*/
/*     {{ parent() }}*/
/*     <div class="row well">*/
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
