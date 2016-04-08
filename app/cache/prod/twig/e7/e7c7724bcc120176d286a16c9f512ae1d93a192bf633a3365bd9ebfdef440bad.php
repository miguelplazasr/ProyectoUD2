<?php

/* AdminBundle:Usuarios:edit.html.twig */
class __TwigTemplate_7a4f4ef1953f9bdd6e61f8b5e36a1e9aa61c275d4a6808a05ce89ffb50e36f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AdminBundle:Usuarios:edit.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h1>Usuarios edit</h1>
                </div>
                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), "edit-form")) : ("edit-form")))));
        echo "
                <div class=\"form-group\">
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "id", array()), 'label');
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "id", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "username", array()), 'label');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite codigo")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "idCarnet", array()), 'label');
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "idCarnet", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id del carnet")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombres", array()), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombres", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite nombres")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "apellidos", array()), 'label');
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "apellidos", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite apellidos")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "password", array()), 'label');
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite password")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'label');
        echo "
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite email")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "estado", array()), 'label');
        echo "
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "estado", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite estado")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "file", array()), 'label');
        echo "
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "file", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "isActive", array()), 'label');
        echo "
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "isActive", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "roles", array()), 'label');
        echo "
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "roles", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite email")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array()), 'label');
        echo "
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite estado")));
        echo "
                </div>

                <p>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "submit", array()), 'widget', array("label" => "Editar Usuario", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "

                <p>
                    ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
                </p>
                <p>
                    <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("ud_admin_usuarios");
        echo "\" class=\"btn btn-sm btn-link\">
                        volver
                    </a>
                </p>
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Usuarios:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 70,  181 => 67,  176 => 65,  170 => 62,  166 => 61,  160 => 58,  156 => 57,  150 => 54,  146 => 53,  140 => 50,  136 => 49,  130 => 46,  126 => 45,  120 => 42,  116 => 41,  110 => 38,  106 => 37,  100 => 34,  96 => 33,  90 => 30,  86 => 29,  80 => 26,  76 => 25,  70 => 22,  66 => 21,  60 => 18,  56 => 17,  50 => 14,  46 => 13,  41 => 11,  31 => 4,  28 => 3,  11 => 1,);
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
/*                     <h1>Usuarios edit</h1>*/
/*                 </div>*/
/*                 {{ form_start(edit_form, { 'attr' :{ 'id' : id|default('edit-form')} }) }}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.id) }}*/
/*                     {{ form_widget(edit_form.id, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.username) }}*/
/*                     {{ form_widget(edit_form.username, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite codigo'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.idCarnet) }}*/
/*                     {{ form_widget(edit_form.idCarnet, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id del carnet'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.nombres) }}*/
/*                     {{ form_widget(edit_form.nombres, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite nombres'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.apellidos) }}*/
/*                     {{ form_widget(edit_form.apellidos, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite apellidos'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.password) }}*/
/*                     {{ form_widget(edit_form.password, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite password'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.email) }}*/
/*                     {{ form_widget(edit_form.email, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite email'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.estado) }}*/
/*                     {{ form_widget(edit_form.estado, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite estado'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.file) }}*/
/*                     {{ form_widget(edit_form.file) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.isActive) }}*/
/*                     {{ form_widget(edit_form.isActive) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.roles) }}*/
/*                     {{ form_widget(edit_form.roles, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite email'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.dependencia) }}*/
/*                     {{ form_widget(edit_form.dependencia, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite estado'}}) }}*/
/*                 </div>*/
/* */
/*                 <p>{{ form_widget(edit_form.submit, { 'label': 'Editar Usuario', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 {{ form_end(edit_form) }}*/
/* */
/*                 <p>*/
/*                     {{ form_start(delete_form) }}*/
/*                     <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                     {{ form_end(delete_form) }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a href="{{ path('ud_admin_usuarios') }}" class="btn btn-sm btn-link">*/
/*                         volver*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
