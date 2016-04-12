<?php

/* ::base.html.twig */
class __TwigTemplate_1d4b7f536c86f12a33fe6c974faf743bffb6795a10c49df7f802ddc898a7f070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_899c531aff5c78b1d2330c149b64005a9048ba561dfb56b6770ca368ae62b170 = $this->env->getExtension("native_profiler");
        $__internal_899c531aff5c78b1d2330c149b64005a9048ba561dfb56b6770ca368ae62b170->enter($__internal_899c531aff5c78b1d2330c149b64005a9048ba561dfb56b6770ca368ae62b170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_899c531aff5c78b1d2330c149b64005a9048ba561dfb56b6770ca368ae62b170->leave($__internal_899c531aff5c78b1d2330c149b64005a9048ba561dfb56b6770ca368ae62b170_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_92f109fb5cb5ee7b3707c7a3f842722294e57270599599128a259fe30f0a51ed = $this->env->getExtension("native_profiler");
        $__internal_92f109fb5cb5ee7b3707c7a3f842722294e57270599599128a259fe30f0a51ed->enter($__internal_92f109fb5cb5ee7b3707c7a3f842722294e57270599599128a259fe30f0a51ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_92f109fb5cb5ee7b3707c7a3f842722294e57270599599128a259fe30f0a51ed->leave($__internal_92f109fb5cb5ee7b3707c7a3f842722294e57270599599128a259fe30f0a51ed_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b97946a4d2eac0f502c179fc51337b888f6c0cd978e24f2c3c790bd293a54db7 = $this->env->getExtension("native_profiler");
        $__internal_b97946a4d2eac0f502c179fc51337b888f6c0cd978e24f2c3c790bd293a54db7->enter($__internal_b97946a4d2eac0f502c179fc51337b888f6c0cd978e24f2c3c790bd293a54db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b97946a4d2eac0f502c179fc51337b888f6c0cd978e24f2c3c790bd293a54db7->leave($__internal_b97946a4d2eac0f502c179fc51337b888f6c0cd978e24f2c3c790bd293a54db7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2de55d1747f663b1d90817860ed6bc090cff8c954364922a10225691279ccfdd = $this->env->getExtension("native_profiler");
        $__internal_2de55d1747f663b1d90817860ed6bc090cff8c954364922a10225691279ccfdd->enter($__internal_2de55d1747f663b1d90817860ed6bc090cff8c954364922a10225691279ccfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2de55d1747f663b1d90817860ed6bc090cff8c954364922a10225691279ccfdd->leave($__internal_2de55d1747f663b1d90817860ed6bc090cff8c954364922a10225691279ccfdd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28c59138c12807ca7ac33e8a5bf5df17a307fd95d7f63deb5c203dc7d62ec152 = $this->env->getExtension("native_profiler");
        $__internal_28c59138c12807ca7ac33e8a5bf5df17a307fd95d7f63deb5c203dc7d62ec152->enter($__internal_28c59138c12807ca7ac33e8a5bf5df17a307fd95d7f63deb5c203dc7d62ec152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_28c59138c12807ca7ac33e8a5bf5df17a307fd95d7f63deb5c203dc7d62ec152->leave($__internal_28c59138c12807ca7ac33e8a5bf5df17a307fd95d7f63deb5c203dc7d62ec152_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
