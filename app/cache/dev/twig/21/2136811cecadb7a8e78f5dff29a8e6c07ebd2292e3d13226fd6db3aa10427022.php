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
        $__internal_71a38faa45c385cce9aba416619fa5056cf7a0e333e3df7352960ff85ff60d4f = $this->env->getExtension("native_profiler");
        $__internal_71a38faa45c385cce9aba416619fa5056cf7a0e333e3df7352960ff85ff60d4f->enter($__internal_71a38faa45c385cce9aba416619fa5056cf7a0e333e3df7352960ff85ff60d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_71a38faa45c385cce9aba416619fa5056cf7a0e333e3df7352960ff85ff60d4f->leave($__internal_71a38faa45c385cce9aba416619fa5056cf7a0e333e3df7352960ff85ff60d4f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dba41346cfb72987079d672ff36e387f9f43b42a01eb859e5a47a25b155c0d4 = $this->env->getExtension("native_profiler");
        $__internal_7dba41346cfb72987079d672ff36e387f9f43b42a01eb859e5a47a25b155c0d4->enter($__internal_7dba41346cfb72987079d672ff36e387f9f43b42a01eb859e5a47a25b155c0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Proyecto UD";
        
        $__internal_7dba41346cfb72987079d672ff36e387f9f43b42a01eb859e5a47a25b155c0d4->leave($__internal_7dba41346cfb72987079d672ff36e387f9f43b42a01eb859e5a47a25b155c0d4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_252b1f02a006394c69231dd655843a48a20e751d8d35a0475aabf0dd4cda7d9c = $this->env->getExtension("native_profiler");
        $__internal_252b1f02a006394c69231dd655843a48a20e751d8d35a0475aabf0dd4cda7d9c->enter($__internal_252b1f02a006394c69231dd655843a48a20e751d8d35a0475aabf0dd4cda7d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_252b1f02a006394c69231dd655843a48a20e751d8d35a0475aabf0dd4cda7d9c->leave($__internal_252b1f02a006394c69231dd655843a48a20e751d8d35a0475aabf0dd4cda7d9c_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_da70849a92247b93fd648d3f2741c51d5044dc7af9a241359623622d706e4c10 = $this->env->getExtension("native_profiler");
        $__internal_da70849a92247b93fd648d3f2741c51d5044dc7af9a241359623622d706e4c10->enter($__internal_da70849a92247b93fd648d3f2741c51d5044dc7af9a241359623622d706e4c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da70849a92247b93fd648d3f2741c51d5044dc7af9a241359623622d706e4c10->leave($__internal_da70849a92247b93fd648d3f2741c51d5044dc7af9a241359623622d706e4c10_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7f2180d6e0b6c7b187a1623043e253745688fabd0778b711f7c183018f01c34 = $this->env->getExtension("native_profiler");
        $__internal_f7f2180d6e0b6c7b187a1623043e253745688fabd0778b711f7c183018f01c34->enter($__internal_f7f2180d6e0b6c7b187a1623043e253745688fabd0778b711f7c183018f01c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f7f2180d6e0b6c7b187a1623043e253745688fabd0778b711f7c183018f01c34->leave($__internal_f7f2180d6e0b6c7b187a1623043e253745688fabd0778b711f7c183018f01c34_prof);

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
