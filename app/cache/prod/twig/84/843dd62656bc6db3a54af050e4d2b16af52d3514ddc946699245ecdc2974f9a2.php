<?php

/* SalonesBundle:PrestamoSalon:new.html.twig */
class __TwigTemplate_826f8b56ada176224026e6392ad92b6706c05f66fecb8a004453f527a695057f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalonesBundle:Default:index.html.twig", "SalonesBundle:PrestamoSalon:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SalonesBundle:Default:index.html.twig";
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
            <div class=\"page-header\">
                <h1>A&ntildeadir un prestamo</h1>
            </div>
            <div class=\"search\">
                <form id=\"search-form\">
                    <label for=\"searchbox\">Busqueda</label>
                    <input id=\"searchbox\" type=\"text\" placeholder=\"Ingrese el id del usuario\" class=\"form-control\" required/>
                    <br>
                    <input type=\"submit\" value=\"";
        // line 14
        echo "Buscar Usuario";
        echo "\" class=\"btn btn-default btn-search\" />
                </form>
            </div>
            <br>
            <div id=\"elementos\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                <label for=\"fecha\">Fecha</label>
                <input type=\"text\" class=\"date form-control\" placeholder=\"asigne una fecha\" name=\"fecha\" id=\"fecha\">
                <br>
                <div class=\"form-group\">
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "horario", array()), 'label');
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "horario", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "observaciones", array()), 'label');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "observaciones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite la observacion")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sala", array()), 'label');
        echo "
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sala", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "users", array()), 'label');
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "users", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <p>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("label" => "Agregar prestamo", "attr" => array("class" => "btn btn-success")));
        echo "</p>
            ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
            <p>
                <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("ud_salones_prestamo");
        echo "\" class=\"btn btn-sm btn-link\">
                   volver
                </a>
            </p>
        </div>
    </div>
";
    }

    // line 51
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/jquery-ui.css"), "html", null, true);
        echo "\">
";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/salones/js/searchuser.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
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
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi�rcoles', 'Jueves', 'Viernes', 'Sabado'],
                dayNamesShort: ['Dom','Lun','Mar','Mi�','Juv','Vie','S�b'],
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
    }

    public function getTemplateName()
    {
        return "SalonesBundle:PrestamoSalon:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 60,  147 => 59,  143 => 58,  138 => 57,  135 => 56,  129 => 53,  124 => 52,  121 => 51,  110 => 43,  104 => 40,  100 => 39,  95 => 37,  91 => 36,  85 => 33,  81 => 32,  75 => 29,  71 => 28,  65 => 25,  61 => 24,  53 => 19,  45 => 14,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'SalonesBundle:Default:index.html.twig'%}*/
/* */
/* {% block content -%}*/
/*     <div class="row well">*/
/*         <div class="col-md-6">*/
/*             <div class="page-header">*/
/*                 <h1>A&ntildeadir un prestamo</h1>*/
/*             </div>*/
/*             <div class="search">*/
/*                 <form id="search-form">*/
/*                     <label for="searchbox">Busqueda</label>*/
/*                     <input id="searchbox" type="text" placeholder="Ingrese el id del usuario" class="form-control" required/>*/
/*                     <br>*/
/*                     <input type="submit" value="{{ 'Buscar Usuario' }}" class="btn btn-default btn-search" />*/
/*                 </form>*/
/*             </div>*/
/*             <br>*/
/*             <div id="elementos">*/
/*             {{ form_start(form) }}*/
/*                 <label for="fecha">Fecha</label>*/
/*                 <input type="text" class="date form-control" placeholder="asigne una fecha" name="fecha" id="fecha">*/
/*                 <br>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.horario) }}*/
/*                     {{ form_widget(form.horario, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.observaciones) }}*/
/*                     {{ form_widget(form.observaciones, { 'attr' : {'class' : 'form-control', 'placeholder': 'Digite la observacion'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.sala) }}*/
/*                     {{ form_widget(form.sala, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.users) }}*/
/*                     {{ form_widget(form.users, { 'attr' : {'class' : 'form-control'}}) }}*/
/*                 </div>*/
/*                 <p>{{ form_widget(form.submit, { 'label': 'Agregar prestamo', 'attr' : {'class' : 'btn btn-success' }}) }}</p>*/
/*             {{ form_end(form) }}*/
/*             </div>*/
/*             <p>*/
/*                 <a href="{{ path('ud_salones_prestamo') }}" class="btn btn-sm btn-link">*/
/*                    volver*/
/*                 </a>*/
/*             </p>*/
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
/*     <script src="{{ asset('bundles/salones/js/searchuser.js') }}"></script>*/
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
/*                 dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi�rcoles', 'Jueves', 'Viernes', 'Sabado'],*/
/*                 dayNamesShort: ['Dom','Lun','Mar','Mi�','Juv','Vie','S�b'],*/
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
