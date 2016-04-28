<?php

/* DeportesBundle:ElementosDeportes:edit.html.twig */
class __TwigTemplate_b805ab4f4d62225a6e7da8de95a890cdbdafcbfc7c5e7abfdccdcd75926c19e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Deportes/Default/index.html.twig", "DeportesBundle:ElementosDeportes:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Deportes/Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row well\">
            <div class=\"col-md-6\">
                <h1>Editar un Elemento</h1>
                ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), "edit-form")) : ("edit-form")))));
        echo "
                <div class=\"form-group\">
                    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "id", array()), 'label');
        echo "
                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "id", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombre", array()), 'label');
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite el nombre")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "descripcion", array()), 'label');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite detalles")));
        echo "
                </div>

                <p>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "submit", array()), 'widget', array("label" => "Editar Elemento", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
                <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ud_deportes_elementos");
        echo "\" class=\"btn btn-sm btn-default\">
                    Volver
                </a>
                <p>
                    ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
                </p>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "DeportesBundle:ElementosDeportes:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  79 => 23,  75 => 22,  71 => 21,  65 => 18,  61 => 17,  55 => 14,  51 => 13,  45 => 10,  41 => 9,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@Deportes/Default/index.html.twig'%}*/
/* */
/* {% block content -%}*/
/*         <div class="row well">*/
/*             <div class="col-md-6">*/
/*                 <h1>Editar un Elemento</h1>*/
/*                 {{ form_start(edit_form, { 'attr' :{ 'id' : id|default('edit-form')} }) }}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.id) }}*/
/*                     {{ form_widget(edit_form.id, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.nombre) }}*/
/*                     {{ form_widget(edit_form.nombre, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite el nombre'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.descripcion) }}*/
/*                     {{ form_widget(edit_form.descripcion, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite detalles'}}) }}*/
/*                 </div>*/
/* */
/*                 <p>{{ form_widget(edit_form.submit, { 'label': 'Editar Elemento', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 {{ form_end(edit_form) }}*/
/*                 <a href="{{ path('ud_deportes_elementos') }}" class="btn btn-sm btn-default">*/
/*                     Volver*/
/*                 </a>*/
/*                 <p>*/
/*                     {{ form_start(delete_form) }}*/
/*                     <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                     {{ form_end(delete_form) }}*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
