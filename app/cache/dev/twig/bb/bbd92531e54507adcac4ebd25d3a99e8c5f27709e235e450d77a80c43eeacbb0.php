<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b36516e8cb3b4bcb8c0808a643221cf059afc88c8c0f85321d6dbb34d23e3e76 extends Twig_Template
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
        $__internal_731a04bd0bb9831635bf78f117730dba1dd53c5b2c7c8c3fb1690bbfb31305d9 = $this->env->getExtension("native_profiler");
        $__internal_731a04bd0bb9831635bf78f117730dba1dd53c5b2c7c8c3fb1690bbfb31305d9->enter($__internal_731a04bd0bb9831635bf78f117730dba1dd53c5b2c7c8c3fb1690bbfb31305d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_731a04bd0bb9831635bf78f117730dba1dd53c5b2c7c8c3fb1690bbfb31305d9->leave($__internal_731a04bd0bb9831635bf78f117730dba1dd53c5b2c7c8c3fb1690bbfb31305d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
