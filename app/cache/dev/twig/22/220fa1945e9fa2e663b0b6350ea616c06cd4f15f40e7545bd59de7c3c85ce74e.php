<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0f8004ad07111917a78ec3c37a0d283efd885cb1ceadaa9c50ea94018d25e610 extends Twig_Template
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
        $__internal_b7ea97d6df549bfbd654a8e0abeb1570b7a7645f831ccb58dec453493ca38ae3 = $this->env->getExtension("native_profiler");
        $__internal_b7ea97d6df549bfbd654a8e0abeb1570b7a7645f831ccb58dec453493ca38ae3->enter($__internal_b7ea97d6df549bfbd654a8e0abeb1570b7a7645f831ccb58dec453493ca38ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b7ea97d6df549bfbd654a8e0abeb1570b7a7645f831ccb58dec453493ca38ae3->leave($__internal_b7ea97d6df549bfbd654a8e0abeb1570b7a7645f831ccb58dec453493ca38ae3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
