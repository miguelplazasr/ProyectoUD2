<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_11643f4ecf14c22f8540836a4e858ea289865c7f1852a5859d7c071f87d4f616 extends Twig_Template
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
        $__internal_d2081ef1c7119ad9ebfc621fb50cc39419c1794084231dd7df7c1b68d627bcbd = $this->env->getExtension("native_profiler");
        $__internal_d2081ef1c7119ad9ebfc621fb50cc39419c1794084231dd7df7c1b68d627bcbd->enter($__internal_d2081ef1c7119ad9ebfc621fb50cc39419c1794084231dd7df7c1b68d627bcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d2081ef1c7119ad9ebfc621fb50cc39419c1794084231dd7df7c1b68d627bcbd->leave($__internal_d2081ef1c7119ad9ebfc621fb50cc39419c1794084231dd7df7c1b68d627bcbd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
