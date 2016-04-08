<?php

/* SalonesBundle:PrestamoSalon:edit.html.twig */
class __TwigTemplate_6157c877abdc4ce329b465c19097ecccd7454dd4d4c18911e4c4fdd8e35444af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SalonesBundle:PrestamoSalon:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4964fcf5add27975b5cc60e774614249ace5df5eb5b92322c2dff0defaf2cd6f = $this->env->getExtension("native_profiler");
        $__internal_4964fcf5add27975b5cc60e774614249ace5df5eb5b92322c2dff0defaf2cd6f->enter($__internal_4964fcf5add27975b5cc60e774614249ace5df5eb5b92322c2dff0defaf2cd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalonesBundle:PrestamoSalon:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4964fcf5add27975b5cc60e774614249ace5df5eb5b92322c2dff0defaf2cd6f->leave($__internal_4964fcf5add27975b5cc60e774614249ace5df5eb5b92322c2dff0defaf2cd6f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b10d0f0feadc4196023b1ff4ac005c0e5bd93d9425dfe70251b5b7b5a57265bc = $this->env->getExtension("native_profiler");
        $__internal_b10d0f0feadc4196023b1ff4ac005c0e5bd93d9425dfe70251b5b7b5a57265bc->enter($__internal_b10d0f0feadc4196023b1ff4ac005c0e5bd93d9425dfe70251b5b7b5a57265bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <label for=\"fecha\">Fecha</label>
                <input type=\"text\" class=\"date form-control\" placeholder=\"asigne una fecha\" name=\"fecha\" id=\"fecha\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["dia"]) ? $context["dia"] : $this->getContext($context, "dia")), "html", null, true);
        echo "\">
                <br>
                <div class=\"form-group\">
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horario", array()), 'label');
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horario", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite id")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "observaciones", array()), 'label');
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "observaciones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite nombre")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sala", array()), 'label');
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sala", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "users", array()), 'label');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "users", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <p>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("label" => "Editar prestamo", "attr" => array("class" => "btn btn-success")));
        echo "</p>
                ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                <p>
                    ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                    ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </p>
                <p>
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ud_salones_prestamo");
        echo "\" class=\"btn btn-sm btn-link\">
                        Volver
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_b10d0f0feadc4196023b1ff4ac005c0e5bd93d9425dfe70251b5b7b5a57265bc->leave($__internal_b10d0f0feadc4196023b1ff4ac005c0e5bd93d9425dfe70251b5b7b5a57265bc_prof);

    }

    // line 49
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d2469672c947b5d297ce2834a71fc88ac9667c3f3dc0144fd50d73bc662d30a = $this->env->getExtension("native_profiler");
        $__internal_9d2469672c947b5d297ce2834a71fc88ac9667c3f3dc0144fd50d73bc662d30a->enter($__internal_9d2469672c947b5d297ce2834a71fc88ac9667c3f3dc0144fd50d73bc662d30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 50
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/jquery-ui.css"), "html", null, true);
        echo "\">
";
        
        $__internal_9d2469672c947b5d297ce2834a71fc88ac9667c3f3dc0144fd50d73bc662d30a->leave($__internal_9d2469672c947b5d297ce2834a71fc88ac9667c3f3dc0144fd50d73bc662d30a_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de736934596d568269166a315fd5d7439bf9a77865f828175b57fad97e6eb5a7 = $this->env->getExtension("native_profiler");
        $__internal_de736934596d568269166a315fd5d7439bf9a77865f828175b57fad97e6eb5a7->enter($__internal_de736934596d568269166a315fd5d7439bf9a77865f828175b57fad97e6eb5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
            \$.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '<Ant',
                nextText: 'Sig>',
                currentText: 'Hoy',
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sabado'],
                dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
                dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
                weekHeader: 'Sm',
                dateFormat: 'yy-mm-dd',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            };
            \$.datepicker.setDefaults(\$.datepicker.regional[\"es\"]);
            \$(\".date\").datepicker({
                onSelect: function(dateText, inst){
                    var date = \$(this).val();
                    //alert(date);
                }
            })
        });
    </script>
";
        
        $__internal_de736934596d568269166a315fd5d7439bf9a77865f828175b57fad97e6eb5a7->leave($__internal_de736934596d568269166a315fd5d7439bf9a77865f828175b57fad97e6eb5a7_prof);

    }

    public function getTemplateName()
    {
        return "SalonesBundle:PrestamoSalon:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 57,  169 => 56,  164 => 55,  158 => 54,  149 => 51,  144 => 50,  138 => 49,  123 => 40,  117 => 37,  112 => 35,  107 => 33,  103 => 32,  97 => 29,  93 => 28,  87 => 25,  83 => 24,  77 => 21,  73 => 20,  67 => 17,  63 => 16,  57 => 13,  52 => 11,  42 => 4,  36 => 3,  11 => 1,);
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
/*                 <label for="fecha">Fecha</label>*/
/*                 <input type="text" class="date form-control" placeholder="asigne una fecha" name="fecha" id="fecha" value="{{ (dia) }}">*/
/*                 <br>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.horario) }}*/
/*                     {{ form_widget(edit_form.horario, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite id'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.observaciones) }}*/
/*                     {{ form_widget(edit_form.observaciones, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Digite nombre'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.sala) }}*/
/*                     {{ form_widget(edit_form.sala, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.users) }}*/
/*                     {{ form_widget(edit_form.users, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                 </div>*/
/* */
/*                 <p>{{ form_widget(edit_form.submit, { 'label': 'Editar prestamo', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*                 {{ form_end(edit_form) }}*/
/*                 <p>*/
/*                     {{ form_start(delete_form) }}*/
/*                     <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                     {{ form_end(delete_form) }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a href="{{ path('ud_salones_prestamo') }}" class="btn btn-sm btn-link">*/
/*                         Volver*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('public/css/jquery-ui.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('public/js/jquery-1.10.2.js') }}"></script>*/
/*     <script src="{{ asset('public/js/jquery-ui.js') }}"></script>*/
/*     <script>*/
/*         $(function(){*/
/*             $.datepicker.regional['es'] = {*/
/*                 closeText: 'Cerrar',*/
/*                 prevText: '<Ant',*/
/*                 nextText: 'Sig>',*/
/*                 currentText: 'Hoy',*/
/*                 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],*/
/*                 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],*/
/*                 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sabado'],*/
/*                 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],*/
/*                 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],*/
/*                 weekHeader: 'Sm',*/
/*                 dateFormat: 'yy-mm-dd',*/
/*                 firstDay: 1,*/
/*                 isRTL: false,*/
/*                 showMonthAfterYear: false,*/
/*                 yearSuffix: ''*/
/*             };*/
/*             $.datepicker.setDefaults($.datepicker.regional["es"]);*/
/*             $(".date").datepicker({*/
/*                 onSelect: function(dateText, inst){*/
/*                     var date = $(this).val();*/
/*                     //alert(date);*/
/*                 }*/
/*             })*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
