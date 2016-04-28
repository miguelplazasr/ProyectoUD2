<?php

/* SalonesBundle:Default:index.html.twig */
class __TwigTemplate_6e9dd99048d8e2c0887cbebd7a7b72e29a2ef6558efaf0043eed1079ad711ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SalonesBundle:Default:index.html.twig", 1);
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
                <div class=\"navbar navbar-default orange\" role=\"navigation\">
                    <div class=\"navbar-header org-nav\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <span class=\"visible-xs navbar-brand\">Menu de Salones</span>
                    </div>
                    <div class=\"navbar-collapse collapse sidebar-navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active orangea\"><a href=\"#\">Menu</a></li>
                            <li class=\"orangeli\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("salones_homepage");
        echo "\">Inicio</a></li>
                            <li class=\"orangeli\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("ud_salones_salon");
        echo "\">Salones</a> </li>
                            <li class=\"orangeli\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ud_salones_prestamo");
        echo "\">Prestamo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-9\">
            ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "        </div>
    </div>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "            ";
    }

    public function getTemplateName()
    {
        return "SalonesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  79 => 30,  73 => 32,  71 => 30,  61 => 23,  57 => 22,  53 => 21,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <div class="row">*/
/*         <div class="col-sm-3">*/
/*             <div class="sidebar-nav">*/
/*                 <div class="navbar navbar-default orange" role="navigation">*/
/*                     <div class="navbar-header org-nav">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <span class="visible-xs navbar-brand">Menu de Salones</span>*/
/*                     </div>*/
/*                     <div class="navbar-collapse collapse sidebar-navbar-collapse">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="active orangea"><a href="#">Menu</a></li>*/
/*                             <li class="orangeli"><a href="{{ path('salones_homepage') }}">Inicio</a></li>*/
/*                             <li class="orangeli"><a href="{{ path('ud_salones_salon') }}">Salones</a> </li>*/
/*                             <li class="orangeli"><a href="{{ path('ud_salones_prestamo') }}">Prestamo</a></li>*/
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
