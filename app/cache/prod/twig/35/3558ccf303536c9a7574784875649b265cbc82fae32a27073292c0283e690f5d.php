<?php

/* ::layout.html.twig */
class __TwigTemplate_e576b08724dd220e127c69059eac9a03cd49d2abbd18212879799069be5c03d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'messages' => array($this, 'block_messages'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Proyecto UD";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/css/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayBlock('messages', $context, $blocks);
        // line 17
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-sm btn-link\">Cerrar Sesion</a>
    ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    // line 16
    public function block_messages($context, array $blocks = array())
    {
    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
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
        return array (  127 => 26,  123 => 25,  119 => 24,  115 => 23,  111 => 22,  106 => 21,  103 => 20,  98 => 18,  93 => 16,  89 => 18,  84 => 17,  81 => 16,  78 => 15,  72 => 10,  68 => 9,  63 => 8,  60 => 7,  54 => 6,  49 => 28,  47 => 20,  45 => 15,  38 => 12,  36 => 7,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/*     <title>{% block title %}Proyecto UD{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/adesignscalendar/css/fullcalendar/fullcalendar.css') }}" />*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}*/
/*     {% block messages %}{% endblock %}*/
/*     <a href="{{ path('fos_user_security_logout') }}" class="btn btn-sm btn-link">Cerrar Sesion</a>*/
/*     {% block fos_user_content %}{% endblock fos_user_content %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('public/js/jquery-1.12.0.min.js') }}"></script>*/
/*     <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('public/js/html2canvas.js') }}"></script>*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
