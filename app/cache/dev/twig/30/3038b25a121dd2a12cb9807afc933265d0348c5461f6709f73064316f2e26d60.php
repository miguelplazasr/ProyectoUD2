<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_6d6276fbaf654abcf9c035238ed9cfa0bb962f4a185d96d1133b83ed1caa2f61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b44c0d984b14bda5e5d5b3a3b9725e083ca97c5bffbaed3678615a3b4067324 = $this->env->getExtension("native_profiler");
        $__internal_2b44c0d984b14bda5e5d5b3a3b9725e083ca97c5bffbaed3678615a3b4067324->enter($__internal_2b44c0d984b14bda5e5d5b3a3b9725e083ca97c5bffbaed3678615a3b4067324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b44c0d984b14bda5e5d5b3a3b9725e083ca97c5bffbaed3678615a3b4067324->leave($__internal_2b44c0d984b14bda5e5d5b3a3b9725e083ca97c5bffbaed3678615a3b4067324_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d44ce52ee8c808e9d437e826f587c584ea04233763badf953d000c3ad1cf40a7 = $this->env->getExtension("native_profiler");
        $__internal_d44ce52ee8c808e9d437e826f587c584ea04233763badf953d000c3ad1cf40a7->enter($__internal_d44ce52ee8c808e9d437e826f587c584ea04233763badf953d000c3ad1cf40a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d44ce52ee8c808e9d437e826f587c584ea04233763badf953d000c3ad1cf40a7->leave($__internal_d44ce52ee8c808e9d437e826f587c584ea04233763badf953d000c3ad1cf40a7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a53abc0fc8d81d58107501e6ed3a51adbb641106d614207df4ac1a6ab466a4b = $this->env->getExtension("native_profiler");
        $__internal_9a53abc0fc8d81d58107501e6ed3a51adbb641106d614207df4ac1a6ab466a4b->enter($__internal_9a53abc0fc8d81d58107501e6ed3a51adbb641106d614207df4ac1a6ab466a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_9a53abc0fc8d81d58107501e6ed3a51adbb641106d614207df4ac1a6ab466a4b->leave($__internal_9a53abc0fc8d81d58107501e6ed3a51adbb641106d614207df4ac1a6ab466a4b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_37d5808cfb7e30795cf5d6366ff7dff6c3311c83f828709d82232212ae1d2d95 = $this->env->getExtension("native_profiler");
        $__internal_37d5808cfb7e30795cf5d6366ff7dff6c3311c83f828709d82232212ae1d2d95->enter($__internal_37d5808cfb7e30795cf5d6366ff7dff6c3311c83f828709d82232212ae1d2d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_37d5808cfb7e30795cf5d6366ff7dff6c3311c83f828709d82232212ae1d2d95->leave($__internal_37d5808cfb7e30795cf5d6366ff7dff6c3311c83f828709d82232212ae1d2d95_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8c203e7f32e9ade4bd752b269ba8d131891979da24d5d803eb865c0a3e260454 = $this->env->getExtension("native_profiler");
        $__internal_8c203e7f32e9ade4bd752b269ba8d131891979da24d5d803eb865c0a3e260454->enter($__internal_8c203e7f32e9ade4bd752b269ba8d131891979da24d5d803eb865c0a3e260454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8c203e7f32e9ade4bd752b269ba8d131891979da24d5d803eb865c0a3e260454->leave($__internal_8c203e7f32e9ade4bd752b269ba8d131891979da24d5d803eb865c0a3e260454_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
