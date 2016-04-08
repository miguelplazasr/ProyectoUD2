<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_db8c6fdbd48c210c8f47364ae588474e4f2f9c942168503c4b1547dcb1c5a5be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6c585d4051e27f2c9cc6cae2cf4c003a55182aba4bc421815adf245eed4f5e7 = $this->env->getExtension("native_profiler");
        $__internal_b6c585d4051e27f2c9cc6cae2cf4c003a55182aba4bc421815adf245eed4f5e7->enter($__internal_b6c585d4051e27f2c9cc6cae2cf4c003a55182aba4bc421815adf245eed4f5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6c585d4051e27f2c9cc6cae2cf4c003a55182aba4bc421815adf245eed4f5e7->leave($__internal_b6c585d4051e27f2c9cc6cae2cf4c003a55182aba4bc421815adf245eed4f5e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86bca95d026479b17594da8b28930623cf7353046bceef6e1b73996944ad2afe = $this->env->getExtension("native_profiler");
        $__internal_86bca95d026479b17594da8b28930623cf7353046bceef6e1b73996944ad2afe->enter($__internal_86bca95d026479b17594da8b28930623cf7353046bceef6e1b73996944ad2afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_86bca95d026479b17594da8b28930623cf7353046bceef6e1b73996944ad2afe->leave($__internal_86bca95d026479b17594da8b28930623cf7353046bceef6e1b73996944ad2afe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7867b6dd459ae40d9f061c6200a7e6ea1d1d405e5589ec654ddb4d02cf623c41 = $this->env->getExtension("native_profiler");
        $__internal_7867b6dd459ae40d9f061c6200a7e6ea1d1d405e5589ec654ddb4d02cf623c41->enter($__internal_7867b6dd459ae40d9f061c6200a7e6ea1d1d405e5589ec654ddb4d02cf623c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7867b6dd459ae40d9f061c6200a7e6ea1d1d405e5589ec654ddb4d02cf623c41->leave($__internal_7867b6dd459ae40d9f061c6200a7e6ea1d1d405e5589ec654ddb4d02cf623c41_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0774abddbf476231cffa0892fb57967fc358fd8d38e5cb61e92e4f50c83f29f6 = $this->env->getExtension("native_profiler");
        $__internal_0774abddbf476231cffa0892fb57967fc358fd8d38e5cb61e92e4f50c83f29f6->enter($__internal_0774abddbf476231cffa0892fb57967fc358fd8d38e5cb61e92e4f50c83f29f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0774abddbf476231cffa0892fb57967fc358fd8d38e5cb61e92e4f50c83f29f6->leave($__internal_0774abddbf476231cffa0892fb57967fc358fd8d38e5cb61e92e4f50c83f29f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
