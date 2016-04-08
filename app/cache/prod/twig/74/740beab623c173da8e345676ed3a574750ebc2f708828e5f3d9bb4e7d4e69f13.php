<?php

/* SalonesBundle:Default:index.html.twig */
class __TwigTemplate_6e9dd99048d8e2c0887cbebd7a7b72e29a2ef6558efaf0043eed1079ad711ff1 extends Twig_Template
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
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "SalonesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
