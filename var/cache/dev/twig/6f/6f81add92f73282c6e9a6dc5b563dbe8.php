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

/* template/trabajo.html.twig */
class __TwigTemplate_2d0a4e316472e6427e56b7607429ae89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template/trabajo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template/trabajo.html.twig"));

        $this->parent = $this->loadTemplate("frontend.html.twig", "template/trabajo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Template trabajo";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<h1>hola ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>

";
        // line 9
        $context["edad"] = 38;
        // line 10
        echo "<p> Mi edad es ";
        echo twig_escape_filter($this->env, (isset($context["edad"]) || array_key_exists("edad", $context) ? $context["edad"] : (function () { throw new RuntimeError('Variable "edad" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " </p>

";
        // line 13
        echo "
<p>
    ";
        // line 15
        if (((isset($context["edad"]) || array_key_exists("edad", $context) ? $context["edad"] : (function () { throw new RuntimeError('Variable "edad" does not exist.', 15, $this->source); })()) >= 18)) {
            // line 16
            echo "        es mayo de edad
    ";
        } else {
            // line 18
            echo "        es menor de edad
    ";
        }
        // line 20
        echo "</p>

<p>
<h3>Paises</h3>
<ul>
    ";
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paises"]) || array_key_exists("paises", $context) ? $context["paises"] : (function () { throw new RuntimeError('Variable "paises" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pais"]) {
            // line 27
            echo "        <li>Nombre: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pais"], "nombre", [], "any", false, false, false, 27), "html", null, true);
            echo " | ID: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pais"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</ul>
</p>

";
        // line 33
        echo "<p>";
        echo twig_include($this->env, $context, "include.html");
        echo "</p>

<p>";
        // line 35
        $context["html"] = "<b>Hola soy un texto en negrita</b>";
        // line 36
        echo (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 36, $this->source); })());
        echo "
</p>

";
        // line 40
        echo "<p>
Variable Custom: ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["tamila"]) || array_key_exists("tamila", $context) ? $context["tamila"] : (function () { throw new RuntimeError('Variable "tamila" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "
</p>

<p>
";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["paises"]) || array_key_exists("paises", $context) ? $context["paises"] : (function () { throw new RuntimeError('Variable "paises" does not exist.', 46, $this->source); })()));
        echo "
</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "template/trabajo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  165 => 41,  162 => 40,  156 => 36,  154 => 35,  148 => 33,  143 => 29,  132 => 27,  127 => 26,  120 => 20,  116 => 18,  112 => 16,  110 => 15,  106 => 13,  100 => 10,  98 => 9,  91 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend.html.twig' %}
{%block title %} Template trabajo{%endblock%}

{%block body %}

<h1>hola {{name}} {{lastName}}</h1>

{# esto me sirve si no quiero mostrar nada en pantalla #}
{% set edad = 38 %}
<p> Mi edad es {{edad}} </p>

{# De esta manera puedo hacer una validacion de una variable que declare anteriormente #}

<p>
    {% if edad >= 18%}
        es mayo de edad
    {% else %}
        es menor de edad
    {% endif%}
</p>

<p>
<h3>Paises</h3>
<ul>
    {# De esta manera estoy iterando el Array que declare desde la plantilla PHP#}
    {% for pais in paises%}
        <li>Nombre: {{pais.nombre}} | ID: {{pais.id}}</li>
    {%endfor%}
</ul>
</p>

{# De esta manera estoy importando dentro de esta plantilla los datos de otro archivo #}
<p>{{include('include.html')}}</p>

<p>{% set html = '<b>Hola soy un texto en negrita</b>' %}
{{html|raw}}
</p>

{# Variables gobales #}
<p>
Variable Custom: {{tamila}}
</p>

<p>
{#Funcion dentro del motor de plantillas#}
{{dump(paises)}}
</p>
{%endblock%}


", "template/trabajo.html.twig", "/var/www/html/latitur/templates/template/trabajo.html.twig");
    }
}
