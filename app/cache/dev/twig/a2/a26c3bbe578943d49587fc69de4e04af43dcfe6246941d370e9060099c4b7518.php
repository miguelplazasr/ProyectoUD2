<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5e89407a6e2c2d3b46c72761b54bf49c7d1b39fef16b25a4d1ea61219535244a extends Twig_Template
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
        $__internal_9bd7ba88123b6d5a25f7c0d087a07a7a7b880d85d12e6552f4bfb8811f646099 = $this->env->getExtension("native_profiler");
        $__internal_9bd7ba88123b6d5a25f7c0d087a07a7a7b880d85d12e6552f4bfb8811f646099->enter($__internal_9bd7ba88123b6d5a25f7c0d087a07a7a7b880d85d12e6552f4bfb8811f646099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9bd7ba88123b6d5a25f7c0d087a07a7a7b880d85d12e6552f4bfb8811f646099->leave($__internal_9bd7ba88123b6d5a25f7c0d087a07a7a7b880d85d12e6552f4bfb8811f646099_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
