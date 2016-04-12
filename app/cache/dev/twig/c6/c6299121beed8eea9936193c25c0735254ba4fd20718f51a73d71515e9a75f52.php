<?php

/* EnfermeriaBundle:Default:index.html.twig */
class __TwigTemplate_b34e19cff1ffc68ca45e40a8eb1d1dd45ed6a05d1731594d36c846f4d61e683b extends Twig_Template
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
        $__internal_171a501690630ae6c9ad7099fb087770b18c65c0d414af91cee5b279536659c7 = $this->env->getExtension("native_profiler");
        $__internal_171a501690630ae6c9ad7099fb087770b18c65c0d414af91cee5b279536659c7->enter($__internal_171a501690630ae6c9ad7099fb087770b18c65c0d414af91cee5b279536659c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnfermeriaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_171a501690630ae6c9ad7099fb087770b18c65c0d414af91cee5b279536659c7->leave($__internal_171a501690630ae6c9ad7099fb087770b18c65c0d414af91cee5b279536659c7_prof);

    }

    public function getTemplateName()
    {
        return "EnfermeriaBundle:Default:index.html.twig";
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
