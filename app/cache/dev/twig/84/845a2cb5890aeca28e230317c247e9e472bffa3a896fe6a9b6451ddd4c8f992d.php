<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d04d55cced10d191b979a5191e12e24d88c1614cbe9b54e6fbc8ed14f20a41b8 extends Twig_Template
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
        $__internal_d671dfe3b707e961e513210b872381f9d3e766b2241646f930383b6fece62a2f = $this->env->getExtension("native_profiler");
        $__internal_d671dfe3b707e961e513210b872381f9d3e766b2241646f930383b6fece62a2f->enter($__internal_d671dfe3b707e961e513210b872381f9d3e766b2241646f930383b6fece62a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d671dfe3b707e961e513210b872381f9d3e766b2241646f930383b6fece62a2f->leave($__internal_d671dfe3b707e961e513210b872381f9d3e766b2241646f930383b6fece62a2f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
