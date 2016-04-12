<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_64027e149e87d39af42d900a59848f11adf9cc0343015dfa2f85eda0f15e99b8 extends Twig_Template
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
        $__internal_200a68493ee8cbedc8decfecdb1a174777aa40838b2f703c9d1c22122987f877 = $this->env->getExtension("native_profiler");
        $__internal_200a68493ee8cbedc8decfecdb1a174777aa40838b2f703c9d1c22122987f877->enter($__internal_200a68493ee8cbedc8decfecdb1a174777aa40838b2f703c9d1c22122987f877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_200a68493ee8cbedc8decfecdb1a174777aa40838b2f703c9d1c22122987f877->leave($__internal_200a68493ee8cbedc8decfecdb1a174777aa40838b2f703c9d1c22122987f877_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
