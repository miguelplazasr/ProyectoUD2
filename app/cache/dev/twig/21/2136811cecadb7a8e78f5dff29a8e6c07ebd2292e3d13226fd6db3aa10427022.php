<?php

/* layout.html.twig */
class __TwigTemplate_6c8a1b9d3dd3db4f85d767262d9a2f4ab8cde942ee40a8456e852a0103ee4734 extends Twig_Template
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
        $__internal_29f910705ec59318bcbedc27b46238c732bf3ba21a88d2a563633f01dd0b9852 = $this->env->getExtension("native_profiler");
        $__internal_29f910705ec59318bcbedc27b46238c732bf3ba21a88d2a563633f01dd0b9852->enter($__internal_29f910705ec59318bcbedc27b46238c732bf3ba21a88d2a563633f01dd0b9852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 10
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "</body>
</html>";
        
        $__internal_29f910705ec59318bcbedc27b46238c732bf3ba21a88d2a563633f01dd0b9852->leave($__internal_29f910705ec59318bcbedc27b46238c732bf3ba21a88d2a563633f01dd0b9852_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f091fdc70070cd1d0dd5d21994904fdeadce120b16400e28ec06871f4453fd94 = $this->env->getExtension("native_profiler");
        $__internal_f091fdc70070cd1d0dd5d21994904fdeadce120b16400e28ec06871f4453fd94->enter($__internal_f091fdc70070cd1d0dd5d21994904fdeadce120b16400e28ec06871f4453fd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Proyecto UD";
        
        $__internal_f091fdc70070cd1d0dd5d21994904fdeadce120b16400e28ec06871f4453fd94->leave($__internal_f091fdc70070cd1d0dd5d21994904fdeadce120b16400e28ec06871f4453fd94_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3ae44d1508f51fb3a4d52b20769824615ea54f3e1cf47efa225ef04e636be3a = $this->env->getExtension("native_profiler");
        $__internal_c3ae44d1508f51fb3a4d52b20769824615ea54f3e1cf47efa225ef04e636be3a->enter($__internal_c3ae44d1508f51fb3a4d52b20769824615ea54f3e1cf47efa225ef04e636be3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_c3ae44d1508f51fb3a4d52b20769824615ea54f3e1cf47efa225ef04e636be3a->leave($__internal_c3ae44d1508f51fb3a4d52b20769824615ea54f3e1cf47efa225ef04e636be3a_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1c475630e469e0287d083f67d9dbbd1e4695fc1a196bfcfa26f0bc2d5af7456 = $this->env->getExtension("native_profiler");
        $__internal_c1c475630e469e0287d083f67d9dbbd1e4695fc1a196bfcfa26f0bc2d5af7456->enter($__internal_c1c475630e469e0287d083f67d9dbbd1e4695fc1a196bfcfa26f0bc2d5af7456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1c475630e469e0287d083f67d9dbbd1e4695fc1a196bfcfa26f0bc2d5af7456->leave($__internal_c1c475630e469e0287d083f67d9dbbd1e4695fc1a196bfcfa26f0bc2d5af7456_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31a3dd7a2d8f94b162babbcd8f29871c87d583bf69f280dc0aad17dbff5a911f = $this->env->getExtension("native_profiler");
        $__internal_31a3dd7a2d8f94b162babbcd8f29871c87d583bf69f280dc0aad17dbff5a911f->enter($__internal_31a3dd7a2d8f94b162babbcd8f29871c87d583bf69f280dc0aad17dbff5a911f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
        
        $__internal_31a3dd7a2d8f94b162babbcd8f29871c87d583bf69f280dc0aad17dbff5a911f->leave($__internal_31a3dd7a2d8f94b162babbcd8f29871c87d583bf69f280dc0aad17dbff5a911f_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 18,  115 => 17,  111 => 16,  106 => 15,  100 => 14,  89 => 13,  80 => 8,  75 => 7,  69 => 6,  57 => 5,  49 => 20,  47 => 14,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Proyecto UD{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('public/js/jquery-1.12.0.min.js') }}"></script>*/
/*     <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
