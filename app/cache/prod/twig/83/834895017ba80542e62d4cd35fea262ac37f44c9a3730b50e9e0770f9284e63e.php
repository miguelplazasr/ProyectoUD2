<?php

/* DeportesBundle:Default:index.html.twig */
class __TwigTemplate_ead2459f3a7a771e1b2169b24b81c2e91de0457a4e04c76f055eb96dd188d424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "DeportesBundle:Default:index.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"sidebar-nav\">
                <div class=\"navbar navbar-default green\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <span class=\"visible-xs navbar-brand\">Sidebar menu</span>
                    </div>
                    <div class=\"navbar-collapse collapse sidebar-navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active greena\"><a href=\"#\">Menu</a></li>
                            <li class=\"greenli\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("deportes_homepage");
        echo "\">Inicio</a></li>
                            <li class=\"greenli\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("ud_deportes_elementos");
        echo "\">Elementos</a> </li>
                            <li class=\"greenli\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ud_deportes_inventario");
        echo "\">Stock</a></li>
                            <li class=\"greenli\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ud_deportes_prestamo");
        echo "\">Prestamo</a></li>
                            <li class=\"greenli\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("ud_deportes_multas");
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
        echo "        </div>
    </div>
";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "            ";
    }

    public function getTemplateName()
    {
        return "DeportesBundle:Default:index.html.twig";
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
/*     {{ parent() }}*/
/*     <div class="row">*/
/*         <div class="col-sm-3">*/
/*             <div class="sidebar-nav">*/
/*                 <div class="navbar navbar-default green" role="navigation">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <span class="visible-xs navbar-brand">Sidebar menu</span>*/
/*                     </div>*/
/*                     <div class="navbar-collapse collapse sidebar-navbar-collapse">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="active greena"><a href="#">Menu</a></li>*/
/*                             <li class="greenli"><a href="{{ path('deportes_homepage') }}">Inicio</a></li>*/
/*                             <li class="greenli"><a href="{{ path('ud_deportes_elementos') }}">Elementos</a> </li>*/
/*                             <li class="greenli"><a href="{{ path('ud_deportes_inventario') }}">Stock</a></li>*/
/*                             <li class="greenli"><a href="{{ path('ud_deportes_prestamo') }}">Prestamo</a></li>*/
/*                             <li class="greenli"><a href="{{ path('ud_deportes_multas') }}">Multas</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-9">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
