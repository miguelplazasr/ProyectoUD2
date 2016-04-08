<?php

/* SalonesBundle:Salones:edit.html.twig */
class __TwigTemplate_ad7e953e015b3dcdcdf4a42934ed45f01d33b48b4d1a92923504a64a3d313402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SalonesBundle:Salones:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09be4e1332d18ed13240ae9df4f84f3495d16e1bb003c1511ebe1f23f07c8d87 = $this->env->getExtension("native_profiler");
        $__internal_09be4e1332d18ed13240ae9df4f84f3495d16e1bb003c1511ebe1f23f07c8d87->enter($__internal_09be4e1332d18ed13240ae9df4f84f3495d16e1bb003c1511ebe1f23f07c8d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalonesBundle:Salones:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09be4e1332d18ed13240ae9df4f84f3495d16e1bb003c1511ebe1f23f07c8d87->leave($__internal_09be4e1332d18ed13240ae9df4f84f3495d16e1bb003c1511ebe1f23f07c8d87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e1feff15f274571d3139da02d184988d2940c9dc41aad23838944410aea3318 = $this->env->getExtension("native_profiler");
        $__internal_8e1feff15f274571d3139da02d184988d2940c9dc41aad23838944410aea3318->enter($__internal_8e1feff15f274571d3139da02d184988d2940c9dc41aad23838944410aea3318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h1>Editar un salon</h1>
                </div>
                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "new-form")) : ("new-form")))));
        echo "
                <div class=\"form-group\">
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "id", array()), 'label');
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "id", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreSala", array()), 'label');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreSala", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite nombre")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'label');
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite un rol")));
        echo "
                </div>

                <p>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("label" => "Agregar Rol", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                <p>
                    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </p>
                <p>
                    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("ud_salones_salon");
        echo "\" class=\"btn btn-sm btn-link\">
                        Volver
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_8e1feff15f274571d3139da02d184988d2940c9dc41aad23838944410aea3318->leave($__internal_8e1feff15f274571d3139da02d184988d2940c9dc41aad23838944410aea3318_prof);

    }

    public function getTemplateName()
    {
        return "SalonesBundle:Salones:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  99 => 30,  94 => 28,  89 => 26,  85 => 25,  79 => 22,  75 => 21,  69 => 18,  65 => 17,  59 => 14,  55 => 13,  50 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ('layout.html.twig') %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="main container">*/
/*         <div class="row well">*/
/*             <div class="col-md-6">*/
/*                 <div class="page-header">*/
/*                     <h1>Editar un salon</h1>*/
/*                 </div>*/
/*                 {{ form_start(edit_form, { 'attr' :{ 'id' : id|default('new-form')} }) }}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.id) }}*/
/*                     {{ form_widget(edit_form.id, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.nombreSala) }}*/
/*                     {{ form_widget(edit_form.nombreSala, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite nombre'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.descripcion) }}*/
/*                     {{ form_widget(edit_form.descripcion, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite un rol'}}) }}*/
/*                 </div>*/
/* */
/*                 <p>{{ form_widget(edit_form.submit, { 'label': 'Agregar Rol', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 {{ form_end(edit_form) }}*/
/*                 <p>*/
/*                     {{ form_start(delete_form) }}*/
/*                     <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                     {{ form_end(delete_form) }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a href="{{ path('ud_salones_salon') }}" class="btn btn-sm btn-link">*/
/*                         Volver*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
