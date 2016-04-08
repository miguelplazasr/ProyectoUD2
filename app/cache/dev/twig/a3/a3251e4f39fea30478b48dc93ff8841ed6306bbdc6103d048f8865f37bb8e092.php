<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6d16013a4bbd911cdc392b1bdb453b7f05bb9196918c390552fb99a60e3cff0a extends Twig_Template
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
        $__internal_e8fdf11b98630e1fa104d5eb1d719d2bb5d566bb0ec943ab549b6b0d671685de = $this->env->getExtension("native_profiler");
        $__internal_e8fdf11b98630e1fa104d5eb1d719d2bb5d566bb0ec943ab549b6b0d671685de->enter($__internal_e8fdf11b98630e1fa104d5eb1d719d2bb5d566bb0ec943ab549b6b0d671685de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e8fdf11b98630e1fa104d5eb1d719d2bb5d566bb0ec943ab549b6b0d671685de->leave($__internal_e8fdf11b98630e1fa104d5eb1d719d2bb5d566bb0ec943ab549b6b0d671685de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
