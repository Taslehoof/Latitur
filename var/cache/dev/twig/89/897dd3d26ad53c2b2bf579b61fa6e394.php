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

/* utilidades/excel_importar.html.twig */
class __TwigTemplate_612f62721168054829355f3576311f61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilidades/excel_importar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilidades/excel_importar.html.twig"));

        $this->parent = $this->loadTemplate("frontend.html.twig", "utilidades/excel_importar.html.twig", 1);
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

        echo "Utilidades";
        
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
        echo "<nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_inicio");
        echo "\">Home</a></li>
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilidades_inicio");
        echo "\">Utilidades</a></li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">Importar Excel</li>
    </ol>
</nav>

<h1>Impotar Excel</h1>

<div class=\"row\">
    <form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("utilidades_excel_importar");
        echo "\" method=\"post\" enctype=\"multipart/orm-data\">
        <div class=\"form-group\">
            <label for=\"persona_entity_form_foto\">
                Archivo
            </label>
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "archivo", [], "any", false, false, false, 22), 'widget');
        echo "
        </div>
        <hr />
        <input type=\"hidden\" name=\"token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("generico"), "html", null, true);
        echo "\" />
        <input type=\"submit\" value=\"Enviar\" class=\"btn btn-primary\" />
    </form>
</div>
";
        // line 29
        if (((isset($context["largo"]) || array_key_exists("largo", $context) ? $context["largo"] : (function () { throw new RuntimeError('Variable "largo" does not exist.', 29, $this->source); })()) >= 1)) {
            // line 30
            echo "    <hr />
    <h3>Hay ";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["largo"]) || array_key_exists("largo", $context) ? $context["largo"] : (function () { throw new RuntimeError('Variable "largo" does not exist.', 31, $this->source); })()), "html", null, true);
            echo " registros subidos</h3>
    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data_array"]) || array_key_exists("data_array", $context) ? $context["data_array"] : (function () { throw new RuntimeError('Variable "data_array" does not exist.', 40, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 41
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 41) >= 1)) {
                    // line 42
                    echo "            <tr>
                <td>";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "array", false, false, false, 43), "html", null, true);
                    echo "</td>
                <td>";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], 1, [], "array", false, false, false, 44), "html", null, true);
                    echo "</td>
            </tr>
            ";
                }
                // line 47
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </tbody>
    </table>

";
        }
        // line 52
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilidades/excel_importar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 52,  192 => 48,  178 => 47,  172 => 44,  168 => 43,  165 => 42,  162 => 41,  145 => 40,  133 => 31,  130 => 30,  128 => 29,  121 => 25,  115 => 22,  107 => 17,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend.html.twig' %}

{% block title %}Utilidades{% endblock %}

{% block body %}
<nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{path('home_inicio')}}\">Home</a></li>
        <li class=\"breadcrumb-item\"><a href=\"{{path('utilidades_inicio')}}\">Utilidades</a></li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">Importar Excel</li>
    </ol>
</nav>

<h1>Impotar Excel</h1>

<div class=\"row\">
    <form action=\"{{ url('utilidades_excel_importar') }}\" method=\"post\" enctype=\"multipart/orm-data\">
        <div class=\"form-group\">
            <label for=\"persona_entity_form_foto\">
                Archivo
            </label>
            {{ form_widget(form.archivo, ) }}
        </div>
        <hr />
        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('generico') }}\" />
        <input type=\"submit\" value=\"Enviar\" class=\"btn btn-primary\" />
    </form>
</div>
{% if largo>=1 %}
    <hr />
    <h3>Hay {{largo}} registros subidos</h3>
    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            {% for data in data_array %}
            {% if loop.index0>=1 %}
            <tr>
                <td>{{data[0]}}</td>
                <td>{{data[1]}}</td>
            </tr>
            {% endif %}
            {% endfor %}
        </tbody>
    </table>

{% endif %}

{% endblock %}

", "utilidades/excel_importar.html.twig", "/var/www/html/latitur/templates/utilidades/excel_importar.html.twig");
    }
}
