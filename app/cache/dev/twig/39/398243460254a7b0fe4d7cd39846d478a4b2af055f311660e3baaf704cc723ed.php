<?php

/* ::layout.html.twig */
class __TwigTemplate_2aaece0034fc38b0fe86d0ff23a76b238042d99786a0d899793935244f9d1f1c extends Twig_Template
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
        $__internal_23036eedb384eb0905226fb97f7725be699ccbaa5679ca37a0c5f8b7994c34d8 = $this->env->getExtension("native_profiler");
        $__internal_23036eedb384eb0905226fb97f7725be699ccbaa5679ca37a0c5f8b7994c34d8->enter($__internal_23036eedb384eb0905226fb97f7725be699ccbaa5679ca37a0c5f8b7994c34d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "</body>
</html>";
        
        $__internal_23036eedb384eb0905226fb97f7725be699ccbaa5679ca37a0c5f8b7994c34d8->leave($__internal_23036eedb384eb0905226fb97f7725be699ccbaa5679ca37a0c5f8b7994c34d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_95831ba894957f60f81d9fa0d53c9632f01b5a7dcabab13f823709773609a5d6 = $this->env->getExtension("native_profiler");
        $__internal_95831ba894957f60f81d9fa0d53c9632f01b5a7dcabab13f823709773609a5d6->enter($__internal_95831ba894957f60f81d9fa0d53c9632f01b5a7dcabab13f823709773609a5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Proyecto UD";
        
        $__internal_95831ba894957f60f81d9fa0d53c9632f01b5a7dcabab13f823709773609a5d6->leave($__internal_95831ba894957f60f81d9fa0d53c9632f01b5a7dcabab13f823709773609a5d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9225952882d194b7c3ece39c460d23f03f70df3d983734d9a12dc267f97db35d = $this->env->getExtension("native_profiler");
        $__internal_9225952882d194b7c3ece39c460d23f03f70df3d983734d9a12dc267f97db35d->enter($__internal_9225952882d194b7c3ece39c460d23f03f70df3d983734d9a12dc267f97db35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/css/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_9225952882d194b7c3ece39c460d23f03f70df3d983734d9a12dc267f97db35d->leave($__internal_9225952882d194b7c3ece39c460d23f03f70df3d983734d9a12dc267f97db35d_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_69498ed18d69225b9c08a17e443d05c027da884564cd5c6dd70e2cc4644bd5b0 = $this->env->getExtension("native_profiler");
        $__internal_69498ed18d69225b9c08a17e443d05c027da884564cd5c6dd70e2cc4644bd5b0->enter($__internal_69498ed18d69225b9c08a17e443d05c027da884564cd5c6dd70e2cc4644bd5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_69498ed18d69225b9c08a17e443d05c027da884564cd5c6dd70e2cc4644bd5b0->leave($__internal_69498ed18d69225b9c08a17e443d05c027da884564cd5c6dd70e2cc4644bd5b0_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0af4e91829b0d0f8b4f5b540ecd83b963f01b6baa8679a8a9e118be679ad77da = $this->env->getExtension("native_profiler");
        $__internal_0af4e91829b0d0f8b4f5b540ecd83b963f01b6baa8679a8a9e118be679ad77da->enter($__internal_0af4e91829b0d0f8b4f5b540ecd83b963f01b6baa8679a8a9e118be679ad77da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/js/fullcalendar/jquery.fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/js/calendar-settings.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
        
        $__internal_0af4e91829b0d0f8b4f5b540ecd83b963f01b6baa8679a8a9e118be679ad77da->leave($__internal_0af4e91829b0d0f8b4f5b540ecd83b963f01b6baa8679a8a9e118be679ad77da_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 23,  135 => 22,  131 => 21,  127 => 20,  123 => 19,  119 => 18,  115 => 17,  110 => 16,  104 => 15,  93 => 14,  84 => 9,  80 => 8,  75 => 7,  69 => 6,  57 => 5,  49 => 25,  47 => 15,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <link rel="stylesheet" href="{{ asset('bundles/adesignscalendar/css/fullcalendar/fullcalendar.css') }}" />*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('public/js/jquery-1.12.0.min.js') }}"></script>*/
/*     <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/adesignscalendar/js/fullcalendar/jquery.fullcalendar.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/adesignscalendar/js/calendar-settings.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('public/js/html2canvas.js') }}"></script>*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
