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
        $__internal_221535a412fdce03bddb434185018fcb25643fbb8214d4fb780f685fa24c1a46 = $this->env->getExtension("native_profiler");
        $__internal_221535a412fdce03bddb434185018fcb25643fbb8214d4fb780f685fa24c1a46->enter($__internal_221535a412fdce03bddb434185018fcb25643fbb8214d4fb780f685fa24c1a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_221535a412fdce03bddb434185018fcb25643fbb8214d4fb780f685fa24c1a46->leave($__internal_221535a412fdce03bddb434185018fcb25643fbb8214d4fb780f685fa24c1a46_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46abf4b3ac198dcb5260fedd988fcf8f7f8e9c99b9a14d2ac3b4f0b2a18f005c = $this->env->getExtension("native_profiler");
        $__internal_46abf4b3ac198dcb5260fedd988fcf8f7f8e9c99b9a14d2ac3b4f0b2a18f005c->enter($__internal_46abf4b3ac198dcb5260fedd988fcf8f7f8e9c99b9a14d2ac3b4f0b2a18f005c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_46abf4b3ac198dcb5260fedd988fcf8f7f8e9c99b9a14d2ac3b4f0b2a18f005c->leave($__internal_46abf4b3ac198dcb5260fedd988fcf8f7f8e9c99b9a14d2ac3b4f0b2a18f005c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_46435cb73ce964a838dba4c53d976c16092749baf7548414a80e35f82cd8591a = $this->env->getExtension("native_profiler");
        $__internal_46435cb73ce964a838dba4c53d976c16092749baf7548414a80e35f82cd8591a->enter($__internal_46435cb73ce964a838dba4c53d976c16092749baf7548414a80e35f82cd8591a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_46435cb73ce964a838dba4c53d976c16092749baf7548414a80e35f82cd8591a->leave($__internal_46435cb73ce964a838dba4c53d976c16092749baf7548414a80e35f82cd8591a_prof);

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
