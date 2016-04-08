<?php

/* base.html.twig */
class __TwigTemplate_cb09c8f61076e8ef81e611152937d6213e19a6e9d8b2af68feedb5a4d9519f2f extends Twig_Template
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
        $__internal_066b4959e0293482e958365fb952181912f6b61a5a62b65d89f638ee86ad4fa0 = $this->env->getExtension("native_profiler");
        $__internal_066b4959e0293482e958365fb952181912f6b61a5a62b65d89f638ee86ad4fa0->enter($__internal_066b4959e0293482e958365fb952181912f6b61a5a62b65d89f638ee86ad4fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_066b4959e0293482e958365fb952181912f6b61a5a62b65d89f638ee86ad4fa0->leave($__internal_066b4959e0293482e958365fb952181912f6b61a5a62b65d89f638ee86ad4fa0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e98f4929c79e499d404992224af2f00214fe0a174cf9496ad5dc135f36e52de = $this->env->getExtension("native_profiler");
        $__internal_1e98f4929c79e499d404992224af2f00214fe0a174cf9496ad5dc135f36e52de->enter($__internal_1e98f4929c79e499d404992224af2f00214fe0a174cf9496ad5dc135f36e52de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1e98f4929c79e499d404992224af2f00214fe0a174cf9496ad5dc135f36e52de->leave($__internal_1e98f4929c79e499d404992224af2f00214fe0a174cf9496ad5dc135f36e52de_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7db29e88600d745174283319d485fa459a34fe5bf221d1517aae5d68ec162445 = $this->env->getExtension("native_profiler");
        $__internal_7db29e88600d745174283319d485fa459a34fe5bf221d1517aae5d68ec162445->enter($__internal_7db29e88600d745174283319d485fa459a34fe5bf221d1517aae5d68ec162445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7db29e88600d745174283319d485fa459a34fe5bf221d1517aae5d68ec162445->leave($__internal_7db29e88600d745174283319d485fa459a34fe5bf221d1517aae5d68ec162445_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd8de40bf3d947861ef1d32c2921def07f943843f602f5b2abf500a4fdf85da9 = $this->env->getExtension("native_profiler");
        $__internal_bd8de40bf3d947861ef1d32c2921def07f943843f602f5b2abf500a4fdf85da9->enter($__internal_bd8de40bf3d947861ef1d32c2921def07f943843f602f5b2abf500a4fdf85da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd8de40bf3d947861ef1d32c2921def07f943843f602f5b2abf500a4fdf85da9->leave($__internal_bd8de40bf3d947861ef1d32c2921def07f943843f602f5b2abf500a4fdf85da9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e7bd4cf9eaae9d2a494b29485353c07fa5206af47bf66476620c179152c1193 = $this->env->getExtension("native_profiler");
        $__internal_3e7bd4cf9eaae9d2a494b29485353c07fa5206af47bf66476620c179152c1193->enter($__internal_3e7bd4cf9eaae9d2a494b29485353c07fa5206af47bf66476620c179152c1193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3e7bd4cf9eaae9d2a494b29485353c07fa5206af47bf66476620c179152c1193->leave($__internal_3e7bd4cf9eaae9d2a494b29485353c07fa5206af47bf66476620c179152c1193_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
