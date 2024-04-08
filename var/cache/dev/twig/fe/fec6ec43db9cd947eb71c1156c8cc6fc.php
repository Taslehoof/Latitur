<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* formularios/type_form.html.twig */
class __TwigTemplate_940c74cb0ae0d0800136eeae1a1fc908 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formularios/type_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formularios/type_form.html.twig"));

        $this->parent = $this->loadTemplate("frontend.html.twig", "formularios/type_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Formularios";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_inicio");
        echo "\">Home</a></li>
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formularios_inicio");
        echo "\">Formularios</a></li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">Formularios TypeForm</li>
    </ol>
</nav>

<h1>Formulario TypeForm</h1>
   ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["mensaje"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 17
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["css"], "method", false, false, false, 17), 0, [], "array", false, false, false, 17), "html", null, true);
            echo " alert-dismissible fade show\" role=\"alert\">
        ";
            // line 18
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo " 

<form method=\"POST\" action=\"\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("formularios_type_form");
        echo ">
    <div class=\"form-group\">
        <label for=\"form_nombre\">Nombre:</label>
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nombre", [], "any", false, false, false, 26), 'widget', ["required" => false, "attr" => ["placeholder" => "Nombre"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"form_correo\">E-Mail:</label>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "correo", [], "any", false, false, false, 30), 'widget', ["required" => false, "attr" => ["placeholder" => "E-Mail"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"form_telefono\">Telefono:</label>
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "telefono", [], "any", false, false, false, 34), 'widget', ["required" => false, "attr" => ["placeholder" => "Telefono"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"form_pais\">Pais:</label>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "pais", [], "any", false, false, false, 38), 'widget');
        echo "
    </div>
    <hr />
    <input type=\"hidden\" name=\"token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("generico"), "html", null, true);
        echo "\" />
    <button type=\"submit\" title=\"Enviar\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Enviar</button>
</form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "formularios/type_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 41,  156 => 38,  149 => 34,  142 => 30,  135 => 26,  129 => 23,  125 => 21,  115 => 18,  110 => 17,  106 => 16,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend.html.twig' %}

{% block title %}Formularios{% endblock %}

{% block body %}

<nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{path('home_inicio')}}\">Home</a></li>
        <li class=\"breadcrumb-item\"><a href=\"{{path('formularios_inicio')}}\">Formularios</a></li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">Formularios TypeForm</li>
    </ol>
</nav>

<h1>Formulario TypeForm</h1>
   {% for mensaje in app.flashes('mensaje') %}
        <div class=\"alert alert-{{ app.flashes('css')[0] }} alert-dismissible fade show\" role=\"alert\">
        {{mensaje}}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %} 

<form method=\"POST\" action=\"\"{{url('formularios_type_form')}}>
    <div class=\"form-group\">
        <label for=\"form_nombre\">Nombre:</label>
        {{form_widget(form.nombre,{\"required\":false,\"attr\":{\"placeholder\":\"Nombre\"}})}}
    </div>
    <div class=\"form-group\">
        <label for=\"form_correo\">E-Mail:</label>
        {{form_widget(form.correo,{\"required\":false,\"attr\":{\"placeholder\":\"E-Mail\"}})}}
    </div>
    <div class=\"form-group\">
        <label for=\"form_telefono\">Telefono:</label>
        {{form_widget(form.telefono,{\"required\":false,\"attr\":{\"placeholder\":\"Telefono\"}})}}
    </div>
    <div class=\"form-group\">
        <label for=\"form_pais\">Pais:</label>
        {{form_widget(form.pais)}}
    </div>
    <hr />
    <input type=\"hidden\" name=\"token\" value=\"{{csrf_token('generico')}}\" />
    <button type=\"submit\" title=\"Enviar\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Enviar</button>
</form>

{% endblock %}
", "formularios/type_form.html.twig", "/var/www/html/latitur/templates/formularios/type_form.html.twig");
    }
}
