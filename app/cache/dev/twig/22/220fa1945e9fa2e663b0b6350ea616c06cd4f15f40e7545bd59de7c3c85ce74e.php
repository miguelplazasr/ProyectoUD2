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
        $__internal_544c0f4e8694b9ecd5cc3b70bc4f063a07921ade0f2b28caa629e010dad4dfe6 = $this->env->getExtension("native_profiler");
        $__internal_544c0f4e8694b9ecd5cc3b70bc4f063a07921ade0f2b28caa629e010dad4dfe6->enter($__internal_544c0f4e8694b9ecd5cc3b70bc4f063a07921ade0f2b28caa629e010dad4dfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_544c0f4e8694b9ecd5cc3b70bc4f063a07921ade0f2b28caa629e010dad4dfe6->leave($__internal_544c0f4e8694b9ecd5cc3b70bc4f063a07921ade0f2b28caa629e010dad4dfe6_prof);

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
