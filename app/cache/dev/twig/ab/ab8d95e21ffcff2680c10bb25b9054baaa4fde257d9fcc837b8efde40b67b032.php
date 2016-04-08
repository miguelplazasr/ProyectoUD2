<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a8579593dedf79894ce9f21546e01989747f1f91e27eb284ecbdbaab4832de8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_679e3e65657fe74f5be18b961d8a5abb3777d122b2dea5d7d4894f69e3f159f2 = $this->env->getExtension("native_profiler");
        $__internal_679e3e65657fe74f5be18b961d8a5abb3777d122b2dea5d7d4894f69e3f159f2->enter($__internal_679e3e65657fe74f5be18b961d8a5abb3777d122b2dea5d7d4894f69e3f159f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_679e3e65657fe74f5be18b961d8a5abb3777d122b2dea5d7d4894f69e3f159f2->leave($__internal_679e3e65657fe74f5be18b961d8a5abb3777d122b2dea5d7d4894f69e3f159f2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1dd9f6a5d1b49ad6b7e66b6f97e65348eb23e30a78dc7c2e8d289344ee944cb4 = $this->env->getExtension("native_profiler");
        $__internal_1dd9f6a5d1b49ad6b7e66b6f97e65348eb23e30a78dc7c2e8d289344ee944cb4->enter($__internal_1dd9f6a5d1b49ad6b7e66b6f97e65348eb23e30a78dc7c2e8d289344ee944cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1dd9f6a5d1b49ad6b7e66b6f97e65348eb23e30a78dc7c2e8d289344ee944cb4->leave($__internal_1dd9f6a5d1b49ad6b7e66b6f97e65348eb23e30a78dc7c2e8d289344ee944cb4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
