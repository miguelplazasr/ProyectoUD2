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
        $__internal_e5f4cad7d66af0831a57ced8337e9856a1ebc04406ffbc4fb865542d5b8c18b7 = $this->env->getExtension("native_profiler");
        $__internal_e5f4cad7d66af0831a57ced8337e9856a1ebc04406ffbc4fb865542d5b8c18b7->enter($__internal_e5f4cad7d66af0831a57ced8337e9856a1ebc04406ffbc4fb865542d5b8c18b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnfermeriaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_e5f4cad7d66af0831a57ced8337e9856a1ebc04406ffbc4fb865542d5b8c18b7->leave($__internal_e5f4cad7d66af0831a57ced8337e9856a1ebc04406ffbc4fb865542d5b8c18b7_prof);

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
