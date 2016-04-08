<?php

/* ActivosBundle:StockActivo:show.html.twig */
class __TwigTemplate_3cfe032d32abae457ec62520af193c0733c36c2e09153e48b13be843618df6cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ActivosBundle:StockActivo:show.html.twig", 1);
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
        $__internal_f1ed2600a82ba5020a45791f7d1d70849d007b5880fd91849325a394e9c4bdea = $this->env->getExtension("native_profiler");
        $__internal_f1ed2600a82ba5020a45791f7d1d70849d007b5880fd91849325a394e9c4bdea->enter($__internal_f1ed2600a82ba5020a45791f7d1d70849d007b5880fd91849325a394e9c4bdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActivosBundle:StockActivo:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ed2600a82ba5020a45791f7d1d70849d007b5880fd91849325a394e9c4bdea->leave($__internal_f1ed2600a82ba5020a45791f7d1d70849d007b5880fd91849325a394e9c4bdea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1af8ac256638c7e2c673b93a95b548c37855926b853b6608fa4228016a354621 = $this->env->getExtension("native_profiler");
        $__internal_1af8ac256638c7e2c673b93a95b548c37855926b853b6608fa4228016a354621->enter($__internal_1af8ac256638c7e2c673b93a95b548c37855926b853b6608fa4228016a354621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
            <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
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
                <dt>Elemento</dt>
                <dd>
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "eactivo", array()), "nombre", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>cantidad</dt>
                <dd>
                    ";
        // line 23
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
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_stock_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-warning\">
                    Editar
                </a>
            </p>
            <p>
                ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </p>
            <p>
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("ud_activos_stock");
        echo "\" class=\"btn btn-sm btn-default\">
                    Volver
                </a>
            </p>
        </div>
    </div>
";
        
        $__internal_1af8ac256638c7e2c673b93a95b548c37855926b853b6608fa4228016a354621->leave($__internal_1af8ac256638c7e2c673b93a95b548c37855926b853b6608fa4228016a354621_prof);

    }

    public function getTemplateName()
    {
        return "ActivosBundle:StockActivo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 43,  97 => 40,  92 => 38,  84 => 33,  71 => 23,  62 => 17,  53 => 11,  46 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="container well">*/
/*         <div class="col-lg-9">*/
/*             <h1>{{ entity.id }}</h1>*/
/*             <dl>*/
/*                 <dt>Id</dt>*/
/*                 <dd>*/
/*                     {{ entity.id }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Elemento</dt>*/
/*                 <dd>*/
/*                     {{ entity.eactivo.nombre }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>cantidad</dt>*/
/*                 <dd>*/
/*                     {{ entity.cantidad }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*             </dl>*/
/*         </div>*/
/* */
/*         <div class="col-md-3">*/
/*             <h2>Acciones</h2>*/
/*             <p>*/
/*                 <a href="{{ path('ud_activos_stock_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-warning">*/
/*                     Editar*/
/*                 </a>*/
/*             </p>*/
/*             <p>*/
/*                 {{ form_start(delete_form) }}*/
/*                 <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                 {{ form_end(delete_form) }}*/
/*             </p>*/
/*             <p>*/
/*                 <a href="{{ path('ud_activos_stock') }}" class="btn btn-sm btn-default">*/
/*                     Volver*/
/*                 </a>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
