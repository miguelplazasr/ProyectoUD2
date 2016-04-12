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
        $__internal_84646f4c7b4005b6e75ac8d5e849d1cd4e504da15cd6720b146bffd632bee1d7 = $this->env->getExtension("native_profiler");
        $__internal_84646f4c7b4005b6e75ac8d5e849d1cd4e504da15cd6720b146bffd632bee1d7->enter($__internal_84646f4c7b4005b6e75ac8d5e849d1cd4e504da15cd6720b146bffd632bee1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_84646f4c7b4005b6e75ac8d5e849d1cd4e504da15cd6720b146bffd632bee1d7->leave($__internal_84646f4c7b4005b6e75ac8d5e849d1cd4e504da15cd6720b146bffd632bee1d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30dd6408af79fc0fa293fb445b44f8e9b2284a159232739db14dff5ba5b9b70f = $this->env->getExtension("native_profiler");
        $__internal_30dd6408af79fc0fa293fb445b44f8e9b2284a159232739db14dff5ba5b9b70f->enter($__internal_30dd6408af79fc0fa293fb445b44f8e9b2284a159232739db14dff5ba5b9b70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_30dd6408af79fc0fa293fb445b44f8e9b2284a159232739db14dff5ba5b9b70f->leave($__internal_30dd6408af79fc0fa293fb445b44f8e9b2284a159232739db14dff5ba5b9b70f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cbaadbc7eb02da59726f3833e0faac6141c4865c57ea2268184c4e902179b43 = $this->env->getExtension("native_profiler");
        $__internal_5cbaadbc7eb02da59726f3833e0faac6141c4865c57ea2268184c4e902179b43->enter($__internal_5cbaadbc7eb02da59726f3833e0faac6141c4865c57ea2268184c4e902179b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5cbaadbc7eb02da59726f3833e0faac6141c4865c57ea2268184c4e902179b43->leave($__internal_5cbaadbc7eb02da59726f3833e0faac6141c4865c57ea2268184c4e902179b43_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8691f3429afbe184c236b223ec11093a0607c2b0d710062d7ee545675a2ab1d = $this->env->getExtension("native_profiler");
        $__internal_a8691f3429afbe184c236b223ec11093a0607c2b0d710062d7ee545675a2ab1d->enter($__internal_a8691f3429afbe184c236b223ec11093a0607c2b0d710062d7ee545675a2ab1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8691f3429afbe184c236b223ec11093a0607c2b0d710062d7ee545675a2ab1d->leave($__internal_a8691f3429afbe184c236b223ec11093a0607c2b0d710062d7ee545675a2ab1d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5cb57b88c0342752b6e79389921ce30750f842e74bd18df65344ca5648844aa = $this->env->getExtension("native_profiler");
        $__internal_e5cb57b88c0342752b6e79389921ce30750f842e74bd18df65344ca5648844aa->enter($__internal_e5cb57b88c0342752b6e79389921ce30750f842e74bd18df65344ca5648844aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5cb57b88c0342752b6e79389921ce30750f842e74bd18df65344ca5648844aa->leave($__internal_e5cb57b88c0342752b6e79389921ce30750f842e74bd18df65344ca5648844aa_prof);

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
