<?php

/* ActivosBundle:Default:index.html.twig */
class __TwigTemplate_94ce94ddd22212f6d6e577a40a01703b6d7d578ad2e8f0337153a45275fdc07c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ActivosBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo " ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
 <div class=\"row\">
  <div class=\"col-sm-3\">
   <div class=\"sidebar-nav\">
    <div class=\"navbar navbar-default blue\" role=\"navigation\">
      <div class=\"navbar-header blue-nav\">
       <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
       </button>
       <span class=\"visible-xs navbar-brand\">Menu de Activos</span>
      </div>
     <div class=\"navbar-collapse collapse sidebar-navbar-collapse\">
        <ul class=\"nav navbar-nav\">
              <li class=\"active\"><a href=\"#\">Menu</a></li>
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("activos_homepage");
        echo "\">Inicio</a></li>
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("ud_activos_elementos");
        echo "\">Elementos</a> </li>
              <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ud_activos_stock");
        echo "\">Stock</a></li>
              <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ud_activos_prestamo");
        echo "\">Prestamo</a></li>
              <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("ud_activos_multas");
        echo "\">Multas</a></li>
        </ul>
     </div>
    </div>
   </div>
  </div>
  <div class=\"col-sm-9\">
   ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "  </div>
 </div>
";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "   ";
    }

    public function getTemplateName()
    {
        return "ActivosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 33,  87 => 32,  81 => 34,  79 => 32,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*  {{ parent() }}*/
/*  <div class="row">*/
/*   <div class="col-sm-3">*/
/*    <div class="sidebar-nav">*/
/*     <div class="navbar navbar-default blue" role="navigation">*/
/*       <div class="navbar-header blue-nav">*/
/*        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*        </button>*/
/*        <span class="visible-xs navbar-brand">Menu de Activos</span>*/
/*       </div>*/
/*      <div class="navbar-collapse collapse sidebar-navbar-collapse">*/
/*         <ul class="nav navbar-nav">*/
/*               <li class="active"><a href="#">Menu</a></li>*/
/*               <li><a href="{{ path('activos_homepage') }}">Inicio</a></li>*/
/*               <li><a href="{{ path('ud_activos_elementos') }}">Elementos</a> </li>*/
/*               <li><a href="{{ path('ud_activos_stock') }}">Stock</a></li>*/
/*               <li><a href="{{ path('ud_activos_prestamo') }}">Prestamo</a></li>*/
/*               <li><a href="{{ path('ud_activos_multas') }}">Multas</a></li>*/
/*         </ul>*/
/*      </div>*/
/*     </div>*/
/*    </div>*/
/*   </div>*/
/*   <div class="col-sm-9">*/
/*    {% block content %}*/
/*    {% endblock %}*/
/*   </div>*/
/*  </div>*/
/* {% endblock %}*/
/* */
