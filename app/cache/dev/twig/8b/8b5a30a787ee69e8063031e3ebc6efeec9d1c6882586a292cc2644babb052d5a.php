<?php

/* EnfermeriaBundle:SeguridadSocial:show.html.twig */
class __TwigTemplate_f0838028ec6e7a8e57590f0a8345fd75b77bab2a43725fc5f8683124890ce9ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EnfermeriaBundle:SeguridadSocial:show.html.twig", 1);
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
        $__internal_0c8b655f9751b6a7892e1f7bdf27d224e1cc4800cd9eed72cd92135fc74d9708 = $this->env->getExtension("native_profiler");
        $__internal_0c8b655f9751b6a7892e1f7bdf27d224e1cc4800cd9eed72cd92135fc74d9708->enter($__internal_0c8b655f9751b6a7892e1f7bdf27d224e1cc4800cd9eed72cd92135fc74d9708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnfermeriaBundle:SeguridadSocial:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c8b655f9751b6a7892e1f7bdf27d224e1cc4800cd9eed72cd92135fc74d9708->leave($__internal_0c8b655f9751b6a7892e1f7bdf27d224e1cc4800cd9eed72cd92135fc74d9708_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e211b4b4b2f07cff02ca0193705c0102c2c95a3a2cab77dbd4ed251eda6be0b6 = $this->env->getExtension("native_profiler");
        $__internal_e211b4b4b2f07cff02ca0193705c0102c2c95a3a2cab77dbd4ed251eda6be0b6->enter($__internal_e211b4b4b2f07cff02ca0193705c0102c2c95a3a2cab77dbd4ed251eda6be0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-lg-9\">
            <h1>Usuario: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "users", array()), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "users", array()), "apellidos", array()), "html", null, true);
        echo "</h1>
            <br>
            <dl>
                <dt>Id</dt>
                <dd>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>EPS</dt>
                <dd>
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "eps", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>RH</dt>
                <dd>
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rh", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Telefono Contacto</dt>
                <dd>
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefonoContacto", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
                <dt>Nombre Usuario</dt>
                <dd>
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "users", array()), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "users", array()), "apellidos", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        <div class=\"col-md-3\">
            <h1>Acciones</h1>
            <p>
                <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ud_enfermeria_ssocial");
        echo "\" class=\"btn btn-sm btn-default\">
                    Volver
                </a>
            </p>
            <p>
                <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ud_enfermeria_ssocial_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-warning\">
                    Editar
                </a>
            </p>
            <p>
                ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Eliminar</button>
                ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </p>
        </div>
    </div>
";
        
        $__internal_e211b4b4b2f07cff02ca0193705c0102c2c95a3a2cab77dbd4ed251eda6be0b6->leave($__internal_e211b4b4b2f07cff02ca0193705c0102c2c95a3a2cab77dbd4ed251eda6be0b6_prof);

    }

    public function getTemplateName()
    {
        return "EnfermeriaBundle:SeguridadSocial:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 57,  122 => 55,  114 => 50,  106 => 45,  92 => 36,  83 => 30,  74 => 24,  65 => 18,  56 => 12,  46 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="container well">*/
/*         <div class="col-lg-9">*/
/*             <h1>Usuario: {{ entity.users.nombres }} {{ entity.users.apellidos }}</h1>*/
/*             <br>*/
/*             <dl>*/
/*                 <dt>Id</dt>*/
/*                 <dd>*/
/*                     {{ entity.id }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>EPS</dt>*/
/*                 <dd>*/
/*                     {{ entity.eps }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>RH</dt>*/
/*                 <dd>*/
/*                     {{ entity.rh }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Telefono Contacto</dt>*/
/*                 <dd>*/
/*                     {{ entity.telefonoContacto }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*                 <dt>Nombre Usuario</dt>*/
/*                 <dd>*/
/*                     {{ entity.users.nombres }} {{ entity.users.apellidos }}*/
/*                     &nbsp;*/
/*                 </dd>*/
/*                 <br>*/
/*             </dl>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <h1>Acciones</h1>*/
/*             <p>*/
/*                 <a href="{{ path('ud_enfermeria_ssocial') }}" class="btn btn-sm btn-default">*/
/*                     Volver*/
/*                 </a>*/
/*             </p>*/
/*             <p>*/
/*                 <a href="{{ path('ud_enfermeria_ssocial_edit', {'id': entity.id }) }}" class="btn btn-sm btn-warning">*/
/*                     Editar*/
/*                 </a>*/
/*             </p>*/
/*             <p>*/
/*                 {{ form_start(delete_form) }}*/
/*                 <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>*/
/*                 {{ form_end(delete_form) }}*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
