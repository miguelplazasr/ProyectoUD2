<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_5d19af7b19b01ee7580e232986f9785d4c73f5657e267277cfba546a585426e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AdminBundle:Default:index.html.twig", 1);
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
                <div class=\"navbar navbar-default yellow\" role=\"navigation\">
                    <div class=\"navbar-header nav-yel\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <span class=\"visible-xs navbar-brand\">Menu de Administracion</span>
                    </div>
                    <div class=\"navbar-collapse collapse sidebar-navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active yellowa\"><a href=\"#\">Menu</a></li>
                                <li class=\"yellowli\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\">Inicio</a></li>
                                <li class=\"yellowli\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_index");
        echo "\">Usuarios</a> </li>
                                <li class=\"yellowli\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_group_list");
        echo "\">Grupos</a></li>
                                <li class=\"yellowli\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ud_admin_dependencia");
        echo "\">Dependencias</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-9\">
            ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "        </div>
    </div>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "            ";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 32,  83 => 31,  77 => 33,  75 => 31,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <div class="row">*/
/*         <div class="col-sm-3">*/
/*             <div class="sidebar-nav">*/
/*                 <div class="navbar navbar-default yellow" role="navigation">*/
/*                     <div class="navbar-header nav-yel">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <span class="visible-xs navbar-brand">Menu de Administracion</span>*/
/*                     </div>*/
/*                     <div class="navbar-collapse collapse sidebar-navbar-collapse">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="active yellowa"><a href="#">Menu</a></li>*/
/*                                 <li class="yellowli"><a href="{{ path('admin_homepage') }}">Inicio</a></li>*/
/*                                 <li class="yellowli"><a href="{{ path('fos_user_profile_index') }}">Usuarios</a> </li>*/
/*                                 <li class="yellowli"><a href="{{ path('fos_user_group_list') }}">Grupos</a></li>*/
/*                                 <li class="yellowli"><a href="{{ path('ud_admin_dependencia') }}">Dependencias</a></li>*/
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
