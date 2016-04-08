<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1399103d7a165539721088a3f9d8efb066ce42957dfe8e6eb9ef2207f0e5c797 extends Twig_Template
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
        $__internal_4acd7f54f1845cc94626d6b456dda8b43ac229305f2b66573093afee00d84491 = $this->env->getExtension("native_profiler");
        $__internal_4acd7f54f1845cc94626d6b456dda8b43ac229305f2b66573093afee00d84491->enter($__internal_4acd7f54f1845cc94626d6b456dda8b43ac229305f2b66573093afee00d84491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4acd7f54f1845cc94626d6b456dda8b43ac229305f2b66573093afee00d84491->leave($__internal_4acd7f54f1845cc94626d6b456dda8b43ac229305f2b66573093afee00d84491_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
