<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_db8c6fdbd48c210c8f47364ae588474e4f2f9c942168503c4b1547dcb1c5a5be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_833bccccc8d46e1cab47bf5f2914ad763a4262b3809cdc232dcc37a0975327be = $this->env->getExtension("native_profiler");
        $__internal_833bccccc8d46e1cab47bf5f2914ad763a4262b3809cdc232dcc37a0975327be->enter($__internal_833bccccc8d46e1cab47bf5f2914ad763a4262b3809cdc232dcc37a0975327be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_833bccccc8d46e1cab47bf5f2914ad763a4262b3809cdc232dcc37a0975327be->leave($__internal_833bccccc8d46e1cab47bf5f2914ad763a4262b3809cdc232dcc37a0975327be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1179e66ffafa560645e225041ec03b4ae57041982e15b4636bbf356c6c4611c6 = $this->env->getExtension("native_profiler");
        $__internal_1179e66ffafa560645e225041ec03b4ae57041982e15b4636bbf356c6c4611c6->enter($__internal_1179e66ffafa560645e225041ec03b4ae57041982e15b4636bbf356c6c4611c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1179e66ffafa560645e225041ec03b4ae57041982e15b4636bbf356c6c4611c6->leave($__internal_1179e66ffafa560645e225041ec03b4ae57041982e15b4636bbf356c6c4611c6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbbae217c36c4d4e5e5851a77c4a8e36d63c1a205d6c055d1ee68621d9c3316e = $this->env->getExtension("native_profiler");
        $__internal_cbbae217c36c4d4e5e5851a77c4a8e36d63c1a205d6c055d1ee68621d9c3316e->enter($__internal_cbbae217c36c4d4e5e5851a77c4a8e36d63c1a205d6c055d1ee68621d9c3316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cbbae217c36c4d4e5e5851a77c4a8e36d63c1a205d6c055d1ee68621d9c3316e->leave($__internal_cbbae217c36c4d4e5e5851a77c4a8e36d63c1a205d6c055d1ee68621d9c3316e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_62fdaa3744940660b3dd034c036d171094552b078005ed546b1de2283ff36663 = $this->env->getExtension("native_profiler");
        $__internal_62fdaa3744940660b3dd034c036d171094552b078005ed546b1de2283ff36663->enter($__internal_62fdaa3744940660b3dd034c036d171094552b078005ed546b1de2283ff36663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_62fdaa3744940660b3dd034c036d171094552b078005ed546b1de2283ff36663->leave($__internal_62fdaa3744940660b3dd034c036d171094552b078005ed546b1de2283ff36663_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
