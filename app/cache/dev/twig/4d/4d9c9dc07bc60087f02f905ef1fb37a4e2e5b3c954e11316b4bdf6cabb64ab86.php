<?php

/* DeportesBundle:Default:index.html.twig */
class __TwigTemplate_6a3776e0230b60525dc4e43036740f0784e5191efebf832f3876918337c52ee7 extends Twig_Template
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
        $__internal_fd11683add01e4bd5d16f6380284bd8cab8895aa6507994b75278b72c27cd1ca = $this->env->getExtension("native_profiler");
        $__internal_fd11683add01e4bd5d16f6380284bd8cab8895aa6507994b75278b72c27cd1ca->enter($__internal_fd11683add01e4bd5d16f6380284bd8cab8895aa6507994b75278b72c27cd1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DeportesBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_fd11683add01e4bd5d16f6380284bd8cab8895aa6507994b75278b72c27cd1ca->leave($__internal_fd11683add01e4bd5d16f6380284bd8cab8895aa6507994b75278b72c27cd1ca_prof);

    }

    public function getTemplateName()
    {
        return "DeportesBundle:Default:index.html.twig";
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
