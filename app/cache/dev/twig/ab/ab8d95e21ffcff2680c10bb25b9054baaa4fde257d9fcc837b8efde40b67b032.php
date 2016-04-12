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
        $__internal_b7294c7e9cdc15df97dd7af4b7aab68e62e381b9eb9600ef2f7ce07100fb7cfd = $this->env->getExtension("native_profiler");
        $__internal_b7294c7e9cdc15df97dd7af4b7aab68e62e381b9eb9600ef2f7ce07100fb7cfd->enter($__internal_b7294c7e9cdc15df97dd7af4b7aab68e62e381b9eb9600ef2f7ce07100fb7cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b7294c7e9cdc15df97dd7af4b7aab68e62e381b9eb9600ef2f7ce07100fb7cfd->leave($__internal_b7294c7e9cdc15df97dd7af4b7aab68e62e381b9eb9600ef2f7ce07100fb7cfd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7eb60f8dba6644a99580316f10b90773fc8920f81c8d276f67b715c0dd5c38da = $this->env->getExtension("native_profiler");
        $__internal_7eb60f8dba6644a99580316f10b90773fc8920f81c8d276f67b715c0dd5c38da->enter($__internal_7eb60f8dba6644a99580316f10b90773fc8920f81c8d276f67b715c0dd5c38da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7eb60f8dba6644a99580316f10b90773fc8920f81c8d276f67b715c0dd5c38da->leave($__internal_7eb60f8dba6644a99580316f10b90773fc8920f81c8d276f67b715c0dd5c38da_prof);

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
