<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_db6f77d718d9dbb7d65adff40d759e808917d3f598dd423d27e792415e096a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator:check.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93b433a430a415ae7f977691170de92c0950aa1408b0a2c30964e7f8104dba5e = $this->env->getExtension("native_profiler");
        $__internal_93b433a430a415ae7f977691170de92c0950aa1408b0a2c30964e7f8104dba5e->enter($__internal_93b433a430a415ae7f977691170de92c0950aa1408b0a2c30964e7f8104dba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93b433a430a415ae7f977691170de92c0950aa1408b0a2c30964e7f8104dba5e->leave($__internal_93b433a430a415ae7f977691170de92c0950aa1408b0a2c30964e7f8104dba5e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9495c98d113709112ab8b23720b91eec13a7018851bbe2ac944914ca7ddf2c3 = $this->env->getExtension("native_profiler");
        $__internal_c9495c98d113709112ab8b23720b91eec13a7018851bbe2ac944914ca7ddf2c3->enter($__internal_c9495c98d113709112ab8b23720b91eec13a7018851bbe2ac944914ca7ddf2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ( !twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
        
        $__internal_c9495c98d113709112ab8b23720b91eec13a7018851bbe2ac944914ca7ddf2c3->leave($__internal_c9495c98d113709112ab8b23720b91eec13a7018851bbe2ac944914ca7ddf2c3_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  121 => 39,  119 => 38,  116 => 37,  110 => 33,  101 => 31,  97 => 30,  91 => 26,  87 => 24,  83 => 22,  81 => 21,  76 => 18,  74 => 17,  71 => 16,  67 => 14,  58 => 12,  54 => 11,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     {% if majors|length %}*/
/*         <h1>Major Problems that need to be fixed now</h1>*/
/*         <p>*/
/*             We have detected <strong>{{ majors|length }}</strong> major problems.*/
/*             You <em>must</em> fix them before continuing:*/
/*         </p>*/
/*         <ol>*/
/*             {% for message in majors %}*/
/*                 <li>{{ message }}</li>*/
/*             {% endfor %}*/
/*         </ol>*/
/*     {% endif %}*/
/* */
/*     {% if minors|length %}*/
/*         <h1>Some Recommendations</h1>*/
/* */
/*         <p>*/
/*             {% if majors|length %}*/
/*             Additionally, we*/
/*             {% else %}*/
/*             We*/
/*             {% endif %}*/
/*             have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony*/
/*             experience:*/
/* */
/*             <ol>*/
/*                 {% for message in minors %}*/
/*                     <li>{{ message }}</li>*/
/*                 {% endfor %}*/
/*             </ol>*/
/*         </p>*/
/* */
/*     {% endif %}*/
/* */
/*     {% if not majors|length %}*/
/*         <ul class="symfony_list">*/
/*             <li><a href="{{ url }}">Configure your Symfony Application online</a></li>*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
