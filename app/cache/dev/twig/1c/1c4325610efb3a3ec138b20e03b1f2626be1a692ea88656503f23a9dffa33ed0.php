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
        $__internal_9e58293f218f5dd134a597bc0bdc5c8c3eeda23cb29a8fbcd9da65b072192594 = $this->env->getExtension("native_profiler");
        $__internal_9e58293f218f5dd134a597bc0bdc5c8c3eeda23cb29a8fbcd9da65b072192594->enter($__internal_9e58293f218f5dd134a597bc0bdc5c8c3eeda23cb29a8fbcd9da65b072192594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9e58293f218f5dd134a597bc0bdc5c8c3eeda23cb29a8fbcd9da65b072192594->leave($__internal_9e58293f218f5dd134a597bc0bdc5c8c3eeda23cb29a8fbcd9da65b072192594_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb198e8446b554cb1286ab809485bd8f1e16e3dc6e25c8342e08d276994462a3 = $this->env->getExtension("native_profiler");
        $__internal_eb198e8446b554cb1286ab809485bd8f1e16e3dc6e25c8342e08d276994462a3->enter($__internal_eb198e8446b554cb1286ab809485bd8f1e16e3dc6e25c8342e08d276994462a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eb198e8446b554cb1286ab809485bd8f1e16e3dc6e25c8342e08d276994462a3->leave($__internal_eb198e8446b554cb1286ab809485bd8f1e16e3dc6e25c8342e08d276994462a3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31000a4d2e7c0e3ce4701ed24e77154e6d20fd2e58c7f6c2ec43e25d0ca9284e = $this->env->getExtension("native_profiler");
        $__internal_31000a4d2e7c0e3ce4701ed24e77154e6d20fd2e58c7f6c2ec43e25d0ca9284e->enter($__internal_31000a4d2e7c0e3ce4701ed24e77154e6d20fd2e58c7f6c2ec43e25d0ca9284e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_31000a4d2e7c0e3ce4701ed24e77154e6d20fd2e58c7f6c2ec43e25d0ca9284e->leave($__internal_31000a4d2e7c0e3ce4701ed24e77154e6d20fd2e58c7f6c2ec43e25d0ca9284e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_18ce1996ac41c485b2b72d658277150ee122394cb52a1a6cbfde3331a2d6cf23 = $this->env->getExtension("native_profiler");
        $__internal_18ce1996ac41c485b2b72d658277150ee122394cb52a1a6cbfde3331a2d6cf23->enter($__internal_18ce1996ac41c485b2b72d658277150ee122394cb52a1a6cbfde3331a2d6cf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_18ce1996ac41c485b2b72d658277150ee122394cb52a1a6cbfde3331a2d6cf23->leave($__internal_18ce1996ac41c485b2b72d658277150ee122394cb52a1a6cbfde3331a2d6cf23_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61f533620ff76db9761cf2b36dda59ca21d90fc702ead9297d2efd49e0f66bb7 = $this->env->getExtension("native_profiler");
        $__internal_61f533620ff76db9761cf2b36dda59ca21d90fc702ead9297d2efd49e0f66bb7->enter($__internal_61f533620ff76db9761cf2b36dda59ca21d90fc702ead9297d2efd49e0f66bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_61f533620ff76db9761cf2b36dda59ca21d90fc702ead9297d2efd49e0f66bb7->leave($__internal_61f533620ff76db9761cf2b36dda59ca21d90fc702ead9297d2efd49e0f66bb7_prof);

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
