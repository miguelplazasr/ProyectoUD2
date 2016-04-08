<?php

/* AdminBundle:Usuarios:edit.html.twig */
class __TwigTemplate_500930e32e2170d9871ad94994fefe537a2833420d91469b97cd952e4132ad52 extends Twig_Template
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
        $__internal_39df4fe013fbe518ee110bc02b6adec2e2d992028885fb85d456b714896cc481 = $this->env->getExtension("native_profiler");
        $__internal_39df4fe013fbe518ee110bc02b6adec2e2d992028885fb85d456b714896cc481->enter($__internal_39df4fe013fbe518ee110bc02b6adec2e2d992028885fb85d456b714896cc481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Usuarios:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39df4fe013fbe518ee110bc02b6adec2e2d992028885fb85d456b714896cc481->leave($__internal_39df4fe013fbe518ee110bc02b6adec2e2d992028885fb85d456b714896cc481_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3bbc7741abf899fe813b3c47efadafafe78c1ae0555870fac36f72c1d4b3465 = $this->env->getExtension("native_profiler");
        $__internal_c3bbc7741abf899fe813b3c47efadafafe78c1ae0555870fac36f72c1d4b3465->enter($__internal_c3bbc7741abf899fe813b3c47efadafafe78c1ae0555870fac36f72c1d4b3465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "edit-form")) : ("edit-form")))));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'label');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite codigo")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idCarnet", array()), 'label');
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idCarnet", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id del carnet")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombres", array()), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombres", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite nombres")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellidos", array()), 'label');
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellidos", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite apellidos")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), 'label');
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite password")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite email")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estado", array()), 'label');
        echo "
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estado", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite estado")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'label');
        echo "
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isActive", array()), 'label');
        echo "
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isActive", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'label');
        echo "
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite email")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dependencia", array()), 'label');
        echo "
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dependencia", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite estado")));
        echo "
                </div>

                <p>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("label" => "Editar Usuario", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                <p>
                    ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
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
        
        $__internal_c3bbc7741abf899fe813b3c47efadafafe78c1ae0555870fac36f72c1d4b3465->leave($__internal_c3bbc7741abf899fe813b3c47efadafafe78c1ae0555870fac36f72c1d4b3465_prof);

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
        return array (  196 => 70,  190 => 67,  185 => 65,  179 => 62,  175 => 61,  169 => 58,  165 => 57,  159 => 54,  155 => 53,  149 => 50,  145 => 49,  139 => 46,  135 => 45,  129 => 42,  125 => 41,  119 => 38,  115 => 37,  109 => 34,  105 => 33,  99 => 30,  95 => 29,  89 => 26,  85 => 25,  79 => 22,  75 => 21,  69 => 18,  65 => 17,  59 => 14,  55 => 13,  50 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
