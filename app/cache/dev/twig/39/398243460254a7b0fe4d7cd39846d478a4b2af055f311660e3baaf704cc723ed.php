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
        $__internal_d2583b84fb847a47800a61ac2477c11775744e3fb3aebd4da6d48560fb5584e7 = $this->env->getExtension("native_profiler");
        $__internal_d2583b84fb847a47800a61ac2477c11775744e3fb3aebd4da6d48560fb5584e7->enter($__internal_d2583b84fb847a47800a61ac2477c11775744e3fb3aebd4da6d48560fb5584e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_d2583b84fb847a47800a61ac2477c11775744e3fb3aebd4da6d48560fb5584e7->leave($__internal_d2583b84fb847a47800a61ac2477c11775744e3fb3aebd4da6d48560fb5584e7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_02e6eeba2c5d01f406c3363fca73b0e6f0525a7e7eb4a0d4348904d213b5aaff = $this->env->getExtension("native_profiler");
        $__internal_02e6eeba2c5d01f406c3363fca73b0e6f0525a7e7eb4a0d4348904d213b5aaff->enter($__internal_02e6eeba2c5d01f406c3363fca73b0e6f0525a7e7eb4a0d4348904d213b5aaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Proyecto UD";
        
        $__internal_02e6eeba2c5d01f406c3363fca73b0e6f0525a7e7eb4a0d4348904d213b5aaff->leave($__internal_02e6eeba2c5d01f406c3363fca73b0e6f0525a7e7eb4a0d4348904d213b5aaff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a89681c1a69f6eb76f262a34e22a184957c246dc882e92a1997704ce83a50d45 = $this->env->getExtension("native_profiler");
        $__internal_a89681c1a69f6eb76f262a34e22a184957c246dc882e92a1997704ce83a50d45->enter($__internal_a89681c1a69f6eb76f262a34e22a184957c246dc882e92a1997704ce83a50d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_a89681c1a69f6eb76f262a34e22a184957c246dc882e92a1997704ce83a50d45->leave($__internal_a89681c1a69f6eb76f262a34e22a184957c246dc882e92a1997704ce83a50d45_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cb59949533e6021d0445d6568a444c071afc22899a4dee70441e2274bc0eebd = $this->env->getExtension("native_profiler");
        $__internal_4cb59949533e6021d0445d6568a444c071afc22899a4dee70441e2274bc0eebd->enter($__internal_4cb59949533e6021d0445d6568a444c071afc22899a4dee70441e2274bc0eebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4cb59949533e6021d0445d6568a444c071afc22899a4dee70441e2274bc0eebd->leave($__internal_4cb59949533e6021d0445d6568a444c071afc22899a4dee70441e2274bc0eebd_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_446bf12eade8646a1f1fc22f3000a6e65428dcf2c334a473806f50443471c3e8 = $this->env->getExtension("native_profiler");
        $__internal_446bf12eade8646a1f1fc22f3000a6e65428dcf2c334a473806f50443471c3e8->enter($__internal_446bf12eade8646a1f1fc22f3000a6e65428dcf2c334a473806f50443471c3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_446bf12eade8646a1f1fc22f3000a6e65428dcf2c334a473806f50443471c3e8->leave($__internal_446bf12eade8646a1f1fc22f3000a6e65428dcf2c334a473806f50443471c3e8_prof);

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
