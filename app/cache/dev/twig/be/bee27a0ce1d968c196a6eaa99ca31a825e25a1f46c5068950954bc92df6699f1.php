<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_748d2129a121ba92c4ef92a9f6517f26ee1bf7c49d49caf0cf533fde5f5b471e extends Twig_Template
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
        $__internal_5e05b63c8bb6cdd6468e6eeddf2852ed9770baea45dfea0cc8038267c7325738 = $this->env->getExtension("native_profiler");
        $__internal_5e05b63c8bb6cdd6468e6eeddf2852ed9770baea45dfea0cc8038267c7325738->enter($__internal_5e05b63c8bb6cdd6468e6eeddf2852ed9770baea45dfea0cc8038267c7325738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5e05b63c8bb6cdd6468e6eeddf2852ed9770baea45dfea0cc8038267c7325738->leave($__internal_5e05b63c8bb6cdd6468e6eeddf2852ed9770baea45dfea0cc8038267c7325738_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
