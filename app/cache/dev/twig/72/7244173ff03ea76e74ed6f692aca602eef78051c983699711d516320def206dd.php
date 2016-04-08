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
        $__internal_133a6e8a4c79024fbe58023357e270d1f643b0c67d89efe51656b1d0536329ee = $this->env->getExtension("native_profiler");
        $__internal_133a6e8a4c79024fbe58023357e270d1f643b0c67d89efe51656b1d0536329ee->enter($__internal_133a6e8a4c79024fbe58023357e270d1f643b0c67d89efe51656b1d0536329ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_133a6e8a4c79024fbe58023357e270d1f643b0c67d89efe51656b1d0536329ee->leave($__internal_133a6e8a4c79024fbe58023357e270d1f643b0c67d89efe51656b1d0536329ee_prof);

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
