<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_21c41f5146671ce582f1f9f584fc935d5eedc288ecf0492502355b64556f3e0e extends Twig_Template
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
        $__internal_2a4a4fd3cc6b8934bc0bc1e7b3e17def01ed88cddc81dd9513b3cee3735b6675 = $this->env->getExtension("native_profiler");
        $__internal_2a4a4fd3cc6b8934bc0bc1e7b3e17def01ed88cddc81dd9513b3cee3735b6675->enter($__internal_2a4a4fd3cc6b8934bc0bc1e7b3e17def01ed88cddc81dd9513b3cee3735b6675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2a4a4fd3cc6b8934bc0bc1e7b3e17def01ed88cddc81dd9513b3cee3735b6675->leave($__internal_2a4a4fd3cc6b8934bc0bc1e7b3e17def01ed88cddc81dd9513b3cee3735b6675_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
