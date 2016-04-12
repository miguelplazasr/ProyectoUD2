<?php

/* ActivosBundle:Default:index.html.twig */
class __TwigTemplate_e066926560d7768280443667edd9c1da52e2d4c52da5ae4e11bda949445f38d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e80d1e10b71f6b9c9d5eb20d7496a7936b1b7eda6502b2b0ad777e5faae61e69 = $this->env->getExtension("native_profiler");
        $__internal_e80d1e10b71f6b9c9d5eb20d7496a7936b1b7eda6502b2b0ad777e5faae61e69->enter($__internal_e80d1e10b71f6b9c9d5eb20d7496a7936b1b7eda6502b2b0ad777e5faae61e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActivosBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_e80d1e10b71f6b9c9d5eb20d7496a7936b1b7eda6502b2b0ad777e5faae61e69->leave($__internal_e80d1e10b71f6b9c9d5eb20d7496a7936b1b7eda6502b2b0ad777e5faae61e69_prof);

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
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
