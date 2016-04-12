<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2c1bce4bf4f8f6b82707882f78fdb8c8df360b0d0fa3f5155b6f8aca18044628 extends Twig_Template
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
        $__internal_a173d773cf06e641d55f80fb07d7ea2520330539b8eddc7a7b1fcd905b7ba49c = $this->env->getExtension("native_profiler");
        $__internal_a173d773cf06e641d55f80fb07d7ea2520330539b8eddc7a7b1fcd905b7ba49c->enter($__internal_a173d773cf06e641d55f80fb07d7ea2520330539b8eddc7a7b1fcd905b7ba49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a173d773cf06e641d55f80fb07d7ea2520330539b8eddc7a7b1fcd905b7ba49c->leave($__internal_a173d773cf06e641d55f80fb07d7ea2520330539b8eddc7a7b1fcd905b7ba49c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
