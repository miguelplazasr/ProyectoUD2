<?php

/* ActivosBundle:StockActivo:show.html.twig */
class __TwigTemplate_789f9aef41c06a4296c65d110c6abc919f3e0705562aa3defd16b308fd6bca48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Activos/Default/index.html.twig", "ActivosBundle:StockActivo:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Activos/Default/index.html.twig";
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
            <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</h1>
            <dl>
                <dt>Id</dt>
                <dd>
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Elemento</dt>
                <dd>
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "eactivo", array()), "nombre", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>cantidad</dt>
                <dd>
                    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cantidad", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_activos_stock_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-warning\">
                    Editar
                </a>
            </p>
            <p>
                ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
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
        return array (  94 => 43,  88 => 40,  83 => 38,  75 => 33,  62 => 23,  53 => 17,  44 => 11,  37 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Activos/Default/index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     {{ parent() }}*/
/*     <div class="row well">*/
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
