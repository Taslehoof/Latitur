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

/* doctrine/categorias.html.twig */
class __TwigTemplate_ae425ae219c31bc772baf77faa6331cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctrine/categorias.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctrine/categorias.html.twig"));

        $this->parent = $this->loadTemplate("frontend.html.twig", "doctrine/categorias.html.twig", 1);
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

        echo "Doctrine";
        
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
        echo "    ";
        // line 7
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_inicio");
        echo "\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_inicio");
        echo "\">Doctrine ORM</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Categorias</li>
        </ol>
    </nav>

    <h1>Categorias</h1>
    <p class=\"d-flex justify-content-end\">
        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_categorias_add");
        echo "\" class=\"btn btn-success\"><i class=\"fas fa-check\"></i>Crear</a>
    </p>


    ";
        // line 22
        echo "    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-sttriped table-hover\">
            <thead>
                <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 33
            echo "                    <tr>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "nombre", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td style=\"text-align:center;\">
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_categorias_editar", ["id" => twig_get_attribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                            <a href=\"javascript:void(0);\" onclick=\"confirmarSweet('Realmente desea eliminar este registro?','";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_categorias_eliminar", ["id" => twig_get_attribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "')\"><i class=\"fas fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "doctrine/categorias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 42,  147 => 38,  143 => 37,  138 => 35,  134 => 34,  131 => 33,  127 => 32,  115 => 22,  108 => 17,  98 => 10,  94 => 9,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend.html.twig' %}

{% block title %}Doctrine{% endblock %}

{% block body %}
    {#Con esto hago unos pequeños links debajo del navbar de la pagina para poder acceder a cualquier parte del menu #}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home_inicio') }}\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('doctrine_inicio') }}\">Doctrine ORM</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Categorias</li>
        </ol>
    </nav>

    <h1>Categorias</h1>
    <p class=\"d-flex justify-content-end\">
        <a href=\"{{path('doctrine_categorias_add')}}\" class=\"btn btn-success\"><i class=\"fas fa-check\"></i>Crear</a>
    </p>


    {# Aca estoy armando la tabla para poder mostrar los datos de la BDD#}
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-sttriped table-hover\">
            <thead>
                <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {% for dato in datos %}
                    <tr>
                        <td>{{dato.id}}</td>
                        <td>{{dato.nombre}}</td>
                        <td style=\"text-align:center;\">
                            <a href=\"{{path('doctrine_categorias_editar',{id: dato.id})}}\"><i class=\"fas fa-edit\"></i></a>
                            <a href=\"javascript:void(0);\" onclick=\"confirmarSweet('Realmente desea eliminar este registro?','{{path('doctrine_categorias_eliminar',{id:dato.id})}}')\"><i class=\"fas fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                {% endfor%}
            </tbody>
        </table>
    </div>
{% endblock %}
", "doctrine/categorias.html.twig", "/var/www/html/latitur/templates/doctrine/categorias.html.twig");
    }
}
