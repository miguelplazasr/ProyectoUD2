<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f9c21ad87265fea54e575cf840d5dcde02599029c78cbdf13924e8d36cde889e extends Twig_Template
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
        $__internal_ef7879034dd725235841a356816d8790d0fc257942152edc0f43697b0e31596e = $this->env->getExtension("native_profiler");
        $__internal_ef7879034dd725235841a356816d8790d0fc257942152edc0f43697b0e31596e->enter($__internal_ef7879034dd725235841a356816d8790d0fc257942152edc0f43697b0e31596e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ef7879034dd725235841a356816d8790d0fc257942152edc0f43697b0e31596e->leave($__internal_ef7879034dd725235841a356816d8790d0fc257942152edc0f43697b0e31596e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
