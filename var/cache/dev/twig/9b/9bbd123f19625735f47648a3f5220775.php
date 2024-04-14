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

/* formularios/entity.html.twig */
class __TwigTemplate_9e2f2b439ea4b0cf1654162012fca32d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formularios/entity.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formularios/entity.html.twig"));

        $this->parent = $this->loadTemplate("frontend.html.twig", "formularios/entity.html.twig", 1);
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
        <li class=\"breadcrumb-item active\" aria-current=\"page\">Formularios Entity</li>
    </ol>
</nav>
";
        // line 15
        echo "<h1>Formulario Entity</h1>
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

";
        // line 25
        echo "
";
        // line 27
        echo "<form method=\"POST\" action=\"\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("formularios_entity");
        echo ">
    <div class=\"form-group\">
        <label for=\"form_nombre\">Nombre:</label>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nombre", [], "any", false, false, false, 30), 'widget', ["required" => false, "attr" => ["placeholder" => "Nombre"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"form_correo\">E-Mail:</label>
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "correo", [], "any", false, false, false, 34), 'widget', ["required" => false, "attr" => ["placeholder" => "E-Mail"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"form_telefono\">Telefono:</label>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "telefono", [], "any", false, false, false, 38), 'widget', ["required" => false, "attr" => ["placeholder" => "Telefono"]]);
        echo "
    </div>
    <hr />
    ";
        // line 42
        echo "    <input type=\"hidden\" name=\"token\" value=\"";
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
        return "formularios/entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 42,  154 => 38,  147 => 34,  140 => 30,  133 => 27,  130 => 25,  126 => 21,  116 => 18,  111 => 17,  107 => 16,  104 => 15,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        <li class=\"breadcrumb-item active\" aria-current=\"page\">Formularios Entity</li>
    </ol>
</nav>
{# Aqui estoy haciendo los parametros del formulario para poder tenerlos uno por uno #}
<h1>Formulario Entity</h1>
   {% for mensaje in app.flashes('mensaje') %}
        <div class=\"alert alert-{{ app.flashes('css')[0] }} alert-dismissible fade show\" role=\"alert\">
        {{mensaje}}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %} 

{# Con esto estoy generando de manera automatica lo que ponga de formulario y lo renderiza solo 
 {{form(form)}} #}

{# Con esto lo estoy rendeerizando 1a1 con cada una de sus particularidades a cada parametro del formulario #}
<form method=\"POST\" action=\"\"{{url('formularios_entity')}}>
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
    <hr />
    {# Con esta linea estoy generando un token de seguridad para poder enviar los datos demanera segura #}
    <input type=\"hidden\" name=\"token\" value=\"{{csrf_token('generico')}}\" />
    <button type=\"submit\" title=\"Enviar\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Enviar</button>
</form>


{% endblock %}
", "formularios/entity.html.twig", "/var/www/html/latitur/templates/formularios/entity.html.twig");
    }
}
