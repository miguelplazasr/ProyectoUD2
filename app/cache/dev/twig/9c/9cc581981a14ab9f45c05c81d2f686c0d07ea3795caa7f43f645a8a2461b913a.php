<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3a9fe1f33953ee74955e509d2daad59de99c50c497753faa964db9cd1784d2ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4e5177d5929a82886e044022f5deecfbd6cc621592a50be61c69e49d41b775bc = $this->env->getExtension("native_profiler");
        $__internal_4e5177d5929a82886e044022f5deecfbd6cc621592a50be61c69e49d41b775bc->enter($__internal_4e5177d5929a82886e044022f5deecfbd6cc621592a50be61c69e49d41b775bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e5177d5929a82886e044022f5deecfbd6cc621592a50be61c69e49d41b775bc->leave($__internal_4e5177d5929a82886e044022f5deecfbd6cc621592a50be61c69e49d41b775bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eddeee6ef8c2f92c8b4e8e07ee5977f6e6d0f43c2851e805be9f17d98a59100f = $this->env->getExtension("native_profiler");
        $__internal_eddeee6ef8c2f92c8b4e8e07ee5977f6e6d0f43c2851e805be9f17d98a59100f->enter($__internal_eddeee6ef8c2f92c8b4e8e07ee5977f6e6d0f43c2851e805be9f17d98a59100f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eddeee6ef8c2f92c8b4e8e07ee5977f6e6d0f43c2851e805be9f17d98a59100f->leave($__internal_eddeee6ef8c2f92c8b4e8e07ee5977f6e6d0f43c2851e805be9f17d98a59100f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_057de8d28d7364e7d2421d40e2e3d3350f673b4bba390be7a5a393be715a37d8 = $this->env->getExtension("native_profiler");
        $__internal_057de8d28d7364e7d2421d40e2e3d3350f673b4bba390be7a5a393be715a37d8->enter($__internal_057de8d28d7364e7d2421d40e2e3d3350f673b4bba390be7a5a393be715a37d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_057de8d28d7364e7d2421d40e2e3d3350f673b4bba390be7a5a393be715a37d8->leave($__internal_057de8d28d7364e7d2421d40e2e3d3350f673b4bba390be7a5a393be715a37d8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
