<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b36516e8cb3b4bcb8c0808a643221cf059afc88c8c0f85321d6dbb34d23e3e76 extends Twig_Template
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
        $__internal_3f4e7df225dc7eb37b55afe10b0865706b1385ca2e2517e99eaf46648affe854 = $this->env->getExtension("native_profiler");
        $__internal_3f4e7df225dc7eb37b55afe10b0865706b1385ca2e2517e99eaf46648affe854->enter($__internal_3f4e7df225dc7eb37b55afe10b0865706b1385ca2e2517e99eaf46648affe854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3f4e7df225dc7eb37b55afe10b0865706b1385ca2e2517e99eaf46648affe854->leave($__internal_3f4e7df225dc7eb37b55afe10b0865706b1385ca2e2517e99eaf46648affe854_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
