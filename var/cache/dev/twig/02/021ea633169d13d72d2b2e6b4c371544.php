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

/* doctrine/productos_where_in.html.twig */
class __TwigTemplate_728ffd1a180273984e3478e46b0d050b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctrine/productos_where_in.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctrine/productos_where_in.html.twig"));

        $this->parent = $this->loadTemplate("frontend.html.twig", "doctrine/productos_where_in.html.twig", 1);
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Productos where in</li>
        </ol>
    </nav>

    <h1>Productos where in</h1>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["mensaje"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["css"], "method", false, false, false, 18), 0, [], "array", false, false, false, 18), "html", null, true);
            echo " alert-dismissible fade show\" role=\"alert\">
                ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    
    <p class=\"d-flex justify-content-end\">
        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_categorias_add");
        echo "\" class=\"btn btn-success\"><i class=\"fas fa-check\"></i>Crear</a>
    </p>

    ";
        // line 29
        echo "    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-sttriped table-hover\">
            <thead>
                <tr>
                ";
        // line 34
        echo "                <th>ID</th>
                <th>Categoria</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Descripcion</th>
                <th>Foto</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 46
            echo "                    <tr>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 50
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_productos_categoria", ["categoria_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dato"], "getCategoria", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" title=\"Productos de la categoria ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dato"], "getCategoria", [], "any", false, false, false, 50), "nombre", [], "any", false, false, false, 50), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dato"], "getCategoria", [], "any", false, false, false, 50), "nombre", [], "any", false, false, false, 50), "html", null, true);
            echo "</a>
                        </td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "nombre", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                        <td>\$";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "precio", [], "any", false, false, false, 53), 0, "", "."), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "stock", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "descripcion", [], "any", false, false, false, 55), 0, 100), "html", null, true);
            echo ".....</td>
                        <td style=\"text-align:center;\">
                            <a href=\"\"><i class=\"fas fa-camera\"></i></a>
                        </td>
                        <td style=\"text-align:center;\">
                            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_categorias_editar", ["id" => twig_get_attribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                            <a href=\"javascript:void(0);\" onclick=\"confirmarSweet('Realmente desea eliminar este registro?','";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_categorias_eliminar", ["id" => twig_get_attribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "')\"><i class=\"fas fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "doctrine/productos_where_in.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 65,  205 => 61,  201 => 60,  193 => 55,  189 => 54,  185 => 53,  181 => 52,  171 => 50,  166 => 47,  163 => 46,  159 => 45,  146 => 34,  140 => 29,  134 => 25,  130 => 23,  120 => 19,  115 => 18,  111 => 17,  102 => 11,  98 => 10,  94 => 9,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Productos where in</li>
        </ol>
    </nav>

    <h1>Productos where in</h1>
        {% for message in app.flashes('mensaje') %}
            <div class=\"alert alert-{{ app.flashes('css')[0] }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
    
    <p class=\"d-flex justify-content-end\">
        <a href=\"{{path('doctrine_categorias_add')}}\" class=\"btn btn-success\"><i class=\"fas fa-check\"></i>Crear</a>
    </p>

    {# Aca estoy armando la tabla para poder mostrar los datos de la BDD#}
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-sttriped table-hover\">
            <thead>
                <tr>
                {# Con esto estoy armando los encabezados de la tabla que estoy mostrando como lista#}
                <th>ID</th>
                <th>Categoria</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Descripcion</th>
                <th>Foto</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {% for dato in datos %}
                    <tr>
                        <td>{{dato.id}}</td>
                        <td>
                            {# Esto lo tengo que traer de la Producto pero desde el metodo#}
                            <a href=\"{{ path('doctrine_productos_categoria', {categoria_id:dato.getCategoria.id})}}\" title=\"Productos de la categoria {{dato.getCategoria.nombre}}\">{{dato.getCategoria.nombre}}</a>
                        </td>
                        <td>{{dato.nombre}}</td>
                        <td>\${{dato.precio|number_format(0,'','.')}}</td>
                        <td>{{dato.stock}}</td>
                        <td>{{dato.descripcion|slice(0,100)}}.....</td>
                        <td style=\"text-align:center;\">
                            <a href=\"\"><i class=\"fas fa-camera\"></i></a>
                        </td>
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
", "doctrine/productos_where_in.html.twig", "/var/www/html/latitur/templates/doctrine/productos_where_in.html.twig");
    }
}
