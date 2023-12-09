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

/* doctrine/productos_fotos.html.twig */
class __TwigTemplate_a7cab5d4ba2ad30409f77f0d89500e0c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctrine/productos_fotos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctrine/productos_fotos.html.twig"));

        $this->parent = $this->loadTemplate("frontend.html.twig", "doctrine/productos_fotos.html.twig", 1);
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
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_productos");
        echo "\">Productos</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Fotos del Producto ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 12, $this->source); })()), "nombre", [], "any", false, false, false, 12), "html", null, true);
        echo "</li>
        </ol>
    </nav>

    <h1>Fotos del Producto: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 16, $this->source); })()), "nombre", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
    <hr />
        ";
        // line 18
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-dismissible fade show\">   
                <ul>
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 22
                echo "                    <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 22), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </ul>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        // line 28
        echo "
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", ["mensaje"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 30
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", ["css"], "method", false, false, false, 30), 0, [], "array", false, false, false, 30), "html", null, true);
            echo " alert-dismissible fade show\" role=\"alert\">
                ";
            // line 31
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    <div class=\"row\">
    ";
        // line 38
        echo "        <h2>Sube una nueva foto</h2>
            <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("doctrine_productos_fotos", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <label for=\"persona_entity_form_foto\">
                        Foto (JPG|PNG)
                    </label>
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "foto", [], "any", false, false, false, 44), 'widget');
        echo "
                    <div>
                        <hr />
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("generico"), "html", null, true);
        echo "\" />
                        <input type=\"submit\"  value=\"Enviar\" class=\"btn btn-primary\" />
                    </div>
                </div>
            </form>
    </div>
    <hr />
    <div class=\"row\">
    ";
        // line 56
        echo "    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fotos"]) || array_key_exists("fotos", $context) ? $context["fotos"] : (function () { throw new RuntimeError('Variable "fotos" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["foto"]) {
            // line 65
            echo "                <tr>
                    <td>
                        <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/productos/")), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foto"], "foto", [], "any", false, false, false, 67), "html", null, true);
            echo "\" width=\"200\" height=\"200\" />
                    </td>
                    <td style=\"text-align:center;\">
                        <a href=\"javascript:void(0);\" onclick=\"confirmarSweet('Realmente desea eliminar esta foto?', '";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_productos_fotos_eliminar", ["id" => twig_get_attribute($this->env, $this->source, $context["foto"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "')\">
                        <i class=\"fas fa-trash\"></i>
                        </a>

                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>

    </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "doctrine/productos_fotos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 77,  222 => 70,  215 => 67,  211 => 65,  207 => 64,  197 => 56,  186 => 47,  180 => 44,  172 => 39,  169 => 38,  165 => 35,  155 => 31,  150 => 30,  146 => 29,  143 => 28,  137 => 24,  128 => 22,  124 => 21,  120 => 19,  118 => 18,  113 => 16,  106 => 12,  102 => 11,  98 => 10,  94 => 9,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            <li class=\"breadcrumb-item\"><a href=\"{{ path('doctrine_productos') }}\">Productos</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Fotos del Producto {{datos.nombre}}</li>
        </ol>
    </nav>

    <h1>Fotos del Producto: {{datos.nombre}}</h1>
    <hr />
        {% if errors %}
            <div class=\"alert alert-danger alert-dismissible fade show\">   
                <ul>
                {% for error in errors %}
                    <li>{{ error.message }}</li>
                {% endfor %}
                </ul>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endif%}

        {% for mensaje in app.flashes('mensaje') %}
            <div class=\"alert alert-{{ app.flashes('css')[0] }} alert-dismissible fade show\" role=\"alert\">
                {{mensaje}}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}

    <div class=\"row\">
    {# Formulario con el que cargo las fotos a la BDD #}
        <h2>Sube una nueva foto</h2>
            <form action=\"{{url('doctrine_productos_fotos', {id:datos.id})}}\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <label for=\"persona_entity_form_foto\">
                        Foto (JPG|PNG)
                    </label>
                        {{form_widget(form.foto,)}}
                    <div>
                        <hr />
                        <input type=\"hidden\" name=\"token\" value=\"{{csrf_token('generico')}}\" />
                        <input type=\"submit\"  value=\"Enviar\" class=\"btn btn-primary\" />
                    </div>
                </div>
            </form>
    </div>
    <hr />
    <div class=\"row\">
    {# Armamos la tabla con la que voy a mostrar las fotos de los productos en pantalla#}
    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {% for foto in fotos %}
                <tr>
                    <td>
                        <img src=\"{{absolute_url(asset('uploads/productos/'))}}{{foto.foto}}\" width=\"200\" height=\"200\" />
                    </td>
                    <td style=\"text-align:center;\">
                        <a href=\"javascript:void(0);\" onclick=\"confirmarSweet('Realmente desea eliminar esta foto?', '{{path('doctrine_productos_fotos_eliminar', {id:foto.id})}}')\">
                        <i class=\"fas fa-trash\"></i>
                        </a>

                    </td>
                </tr>
            {% endfor %}
        </tbody>

    </table>
    </div>
{% endblock %}
", "doctrine/productos_fotos.html.twig", "/var/www/html/latitur/templates/doctrine/productos_fotos.html.twig");
    }
}
