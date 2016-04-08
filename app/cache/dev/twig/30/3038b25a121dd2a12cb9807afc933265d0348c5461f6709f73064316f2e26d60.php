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
        $__internal_308ffb48eb8d8e1fe3a5d4f483403b69a15f0552a51283181f41e646f0eafa22 = $this->env->getExtension("native_profiler");
        $__internal_308ffb48eb8d8e1fe3a5d4f483403b69a15f0552a51283181f41e646f0eafa22->enter($__internal_308ffb48eb8d8e1fe3a5d4f483403b69a15f0552a51283181f41e646f0eafa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_308ffb48eb8d8e1fe3a5d4f483403b69a15f0552a51283181f41e646f0eafa22->leave($__internal_308ffb48eb8d8e1fe3a5d4f483403b69a15f0552a51283181f41e646f0eafa22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d356bdfd54e91622e53b283ade76590a675888b339536a383f16b34867aff97 = $this->env->getExtension("native_profiler");
        $__internal_9d356bdfd54e91622e53b283ade76590a675888b339536a383f16b34867aff97->enter($__internal_9d356bdfd54e91622e53b283ade76590a675888b339536a383f16b34867aff97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9d356bdfd54e91622e53b283ade76590a675888b339536a383f16b34867aff97->leave($__internal_9d356bdfd54e91622e53b283ade76590a675888b339536a383f16b34867aff97_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c023d41fcd1df25ed69cc803ee4fdab31daa92c65270b6f6b0eb13a30f7e462f = $this->env->getExtension("native_profiler");
        $__internal_c023d41fcd1df25ed69cc803ee4fdab31daa92c65270b6f6b0eb13a30f7e462f->enter($__internal_c023d41fcd1df25ed69cc803ee4fdab31daa92c65270b6f6b0eb13a30f7e462f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c023d41fcd1df25ed69cc803ee4fdab31daa92c65270b6f6b0eb13a30f7e462f->leave($__internal_c023d41fcd1df25ed69cc803ee4fdab31daa92c65270b6f6b0eb13a30f7e462f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5d6f3a4b6cbc2d15d44e647fc4ad6c80121c0409c2a4923e4b30dd7bcf74fcc = $this->env->getExtension("native_profiler");
        $__internal_e5d6f3a4b6cbc2d15d44e647fc4ad6c80121c0409c2a4923e4b30dd7bcf74fcc->enter($__internal_e5d6f3a4b6cbc2d15d44e647fc4ad6c80121c0409c2a4923e4b30dd7bcf74fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e5d6f3a4b6cbc2d15d44e647fc4ad6c80121c0409c2a4923e4b30dd7bcf74fcc->leave($__internal_e5d6f3a4b6cbc2d15d44e647fc4ad6c80121c0409c2a4923e4b30dd7bcf74fcc_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_85b10e32896f8eb2a623076ca7da10969ac7c916c0f5508e519e49a40d68edb9 = $this->env->getExtension("native_profiler");
        $__internal_85b10e32896f8eb2a623076ca7da10969ac7c916c0f5508e519e49a40d68edb9->enter($__internal_85b10e32896f8eb2a623076ca7da10969ac7c916c0f5508e519e49a40d68edb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_85b10e32896f8eb2a623076ca7da10969ac7c916c0f5508e519e49a40d68edb9->leave($__internal_85b10e32896f8eb2a623076ca7da10969ac7c916c0f5508e519e49a40d68edb9_prof);

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
