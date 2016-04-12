<?php

/* SalonesBundle:PrestamoSalon:new.html.twig */
class __TwigTemplate_e4e189c4832abef059458a80c5f965d9b20298d1cd3b43a1a13c0a4d05c7882e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SalonesBundle:PrestamoSalon:new.html.twig", 1);
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
        $__internal_7ac20a0751dbc6d7bf8867a698279d973313dbcca7f2f84ccbc3b9f1dfa39973 = $this->env->getExtension("native_profiler");
        $__internal_7ac20a0751dbc6d7bf8867a698279d973313dbcca7f2f84ccbc3b9f1dfa39973->enter($__internal_7ac20a0751dbc6d7bf8867a698279d973313dbcca7f2f84ccbc3b9f1dfa39973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalonesBundle:PrestamoSalon:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ac20a0751dbc6d7bf8867a698279d973313dbcca7f2f84ccbc3b9f1dfa39973->leave($__internal_7ac20a0751dbc6d7bf8867a698279d973313dbcca7f2f84ccbc3b9f1dfa39973_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84872a0acc7e3d7f26c7cd3eab17a047395df78aef613cef1c48178addceece7 = $this->env->getExtension("native_profiler");
        $__internal_84872a0acc7e3d7f26c7cd3eab17a047395df78aef613cef1c48178addceece7->enter($__internal_84872a0acc7e3d7f26c7cd3eab17a047395df78aef613cef1c48178addceece7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"main container\">
    <div class=\"row well\">
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
        // line 15
        echo "Buscar Usuario";
        echo "\" class=\"btn btn-default btn-search\" />
                </form>
            </div>
            <br>
            <div id=\"elementos\">
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <label for=\"fecha\">Fecha</label>
                <input type=\"text\" class=\"date form-control\" placeholder=\"asigne una fecha\" name=\"fecha\" id=\"fecha\">
                <br>
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'label');
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Digite la observacion")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sala", array()), 'label');
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sala", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'label');
        echo "
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <p>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "Agregar prestamo", "attr" => array("class" => "btn btn-success")));
        echo "</p>
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
            <p>
                <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("ud_salones_prestamo");
        echo "\" class=\"btn btn-sm btn-link\">
                   volver
                </a>
            </p>
        </div>
    </div>
</div>
";
        
        $__internal_84872a0acc7e3d7f26c7cd3eab17a047395df78aef613cef1c48178addceece7->leave($__internal_84872a0acc7e3d7f26c7cd3eab17a047395df78aef613cef1c48178addceece7_prof);

    }

    // line 53
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb5fcac5d519c0b92318ddf532de4844e768a18295d14aee0c3fe913efe6b352 = $this->env->getExtension("native_profiler");
        $__internal_eb5fcac5d519c0b92318ddf532de4844e768a18295d14aee0c3fe913efe6b352->enter($__internal_eb5fcac5d519c0b92318ddf532de4844e768a18295d14aee0c3fe913efe6b352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 54
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/jquery-ui.css"), "html", null, true);
        echo "\">
";
        
        $__internal_eb5fcac5d519c0b92318ddf532de4844e768a18295d14aee0c3fe913efe6b352->leave($__internal_eb5fcac5d519c0b92318ddf532de4844e768a18295d14aee0c3fe913efe6b352_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_056823df7ad4ff481abbf4c73c656662a15bf59c4c178b6b94b8ddc12cd73cf3 = $this->env->getExtension("native_profiler");
        $__internal_056823df7ad4ff481abbf4c73c656662a15bf59c4c178b6b94b8ddc12cd73cf3->enter($__internal_056823df7ad4ff481abbf4c73c656662a15bf59c4c178b6b94b8ddc12cd73cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/salones/js/searchuser.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
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
        
        $__internal_056823df7ad4ff481abbf4c73c656662a15bf59c4c178b6b94b8ddc12cd73cf3->leave($__internal_056823df7ad4ff481abbf4c73c656662a15bf59c4c178b6b94b8ddc12cd73cf3_prof);

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
        return array (  174 => 62,  170 => 61,  166 => 60,  161 => 59,  155 => 58,  146 => 55,  141 => 54,  135 => 53,  120 => 44,  114 => 41,  110 => 40,  105 => 38,  101 => 37,  95 => 34,  91 => 33,  85 => 30,  81 => 29,  75 => 26,  71 => 25,  63 => 20,  55 => 15,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/* <div class="main container">*/
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
/* </div>*/
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
