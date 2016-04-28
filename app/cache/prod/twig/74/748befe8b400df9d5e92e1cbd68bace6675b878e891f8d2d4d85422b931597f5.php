<?php

/* EnfermeriaBundle:Default:index.html.twig */
class __TwigTemplate_355f7092d006edab94e0e0157006c7ccc01624c38c4232d64e44f52816035f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EnfermeriaBundle:Default:index.html.twig", 1);
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
                <div class=\"navbar navbar-default violet\" role=\"navigation\">
                    <div class=\"navbar-header vio-nav\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <span class=\"visible-xs navbar-brand\">Menu Enfermeria</span>
                    </div>
                    <div class=\"navbar-collapse collapse sidebar-navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active violeta\"><a href=\"#\">Menu</a></li>
                            <li class=\"violetli\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("enfermeria_homepage");
        echo "\">Inicio</a></li>
                            <li class=\"violetli\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("ud_enfermeria_ssocial");
        echo "\">Seguridad Social</a> </li>
                            <li class=\"violetli\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ud_enfermeria_reporte");
        echo "\">Reporte</a></li>
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
        return "EnfermeriaBundle:Default:index.html.twig";
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
/*                 <div class="navbar navbar-default violet" role="navigation">*/
/*                     <div class="navbar-header vio-nav">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <span class="visible-xs navbar-brand">Menu Enfermeria</span>*/
/*                     </div>*/
/*                     <div class="navbar-collapse collapse sidebar-navbar-collapse">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="active violeta"><a href="#">Menu</a></li>*/
/*                             <li class="violetli"><a href="{{ path('enfermeria_homepage') }}">Inicio</a></li>*/
/*                             <li class="violetli"><a href="{{ path('ud_enfermeria_ssocial') }}">Seguridad Social</a> </li>*/
/*                             <li class="violetli"><a href="{{ path('ud_enfermeria_reporte') }}">Reporte</a></li>*/
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
