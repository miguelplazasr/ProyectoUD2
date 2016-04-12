<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_807d8e20e17892144e304c9498b0ed3aec6e905c4c08f430fcf8afc854710264 extends Twig_Template
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
        $__internal_ad268949dc7b94cfda3656fbaf22cd370a014cd219eccc1a6e2c78586285efb3 = $this->env->getExtension("native_profiler");
        $__internal_ad268949dc7b94cfda3656fbaf22cd370a014cd219eccc1a6e2c78586285efb3->enter($__internal_ad268949dc7b94cfda3656fbaf22cd370a014cd219eccc1a6e2c78586285efb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_ad268949dc7b94cfda3656fbaf22cd370a014cd219eccc1a6e2c78586285efb3->leave($__internal_ad268949dc7b94cfda3656fbaf22cd370a014cd219eccc1a6e2c78586285efb3_prof);

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
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
