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

/* doctrine/productos_buscador.html.twig */
class __TwigTemplate_9d63efeba34317edec4aa8b52a3b734f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctrine/productos_buscador.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctrine/productos_buscador.html.twig"));

        $this->parent = $this->loadTemplate("frontend.html.twig", "doctrine/productos_buscador.html.twig", 1);
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Resultado para el termino <strong>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</strong></li>
        </ol>
    </nav>

    <h1>Productos</h1>
    <h4>Resultado para el termino <strong>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</strong></h4>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["mensaje"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["css"], "method", false, false, false, 19), 0, [], "array", false, false, false, 19), "html", null, true);
            echo " alert-dismissible fade show\" role=\"alert\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    
    ";
        // line 26
        echo "    <div class=\"row\">
        <div class=\"col-6\">&nbsp;</div>
        <div class=\"col-6\">
            <form name=\"form_search\" action=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_productos_buscador");
        echo "\" method=\"GET\">
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Buscar.....\" name=\"b\" id=\"b\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\"/>
                    <span class=\"input-group-text\" id=\"basic-addon2\">
                        <a href=\"javascript:void(0);\" class=\"btn \" onclick=\"buscador();\"><i class=\"fas fa-search\"></i></a>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <p class=\"d-flex justify-content-end\">
        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_categorias_add");
        echo "\" class=\"btn btn-success\"><i class=\"fas fa-check\"></i>Crear</a>
    </p>

    ";
        // line 45
        echo "    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-sttriped table-hover\">
            <thead>
                <tr>
                ";
        // line 50
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
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 62
            echo "                    <tr>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 66
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_productos_categoria", ["categoria_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dato"], "getCategoria", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" title=\"Productos de la categoria ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dato"], "getCategoria", [], "any", false, false, false, 66), "nombre", [], "any", false, false, false, 66), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dato"], "getCategoria", [], "any", false, false, false, 66), "nombre", [], "any", false, false, false, 66), "html", null, true);
            echo "</a>
                        </td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "nombre", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                        <td>\$";
            // line 69
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "precio", [], "any", false, false, false, 69), 0, "", "."), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "stock", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["dato"], "descripcion", [], "any", false, false, false, 71), 0, 100), "html", null, true);
            echo ".....</td>
                        <td style=\"text-align:center;\">
                            <a href=\"\"><i class=\"fas fa-camera\"></i></a>
                        </td>
                        <td style=\"text-align:center;\">
                            <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_categorias_editar", ["id" => twig_get_attribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                            <a href=\"javascript:void(0);\" onclick=\"confirmarSweet('Realmente desea eliminar este registro?','";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_categorias_eliminar", ["id" => twig_get_attribute($this->env, $this->source, $context["dato"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "')\"><i class=\"fas fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "doctrine/productos_buscador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 81,  234 => 77,  230 => 76,  222 => 71,  218 => 70,  214 => 69,  210 => 68,  200 => 66,  195 => 63,  192 => 62,  188 => 61,  175 => 50,  169 => 45,  163 => 41,  150 => 31,  145 => 29,  140 => 26,  137 => 24,  127 => 20,  122 => 19,  118 => 18,  114 => 17,  106 => 12,  102 => 11,  98 => 10,  94 => 9,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Resultado para el termino <strong>{{b}}</strong></li>
        </ol>
    </nav>

    <h1>Productos</h1>
    <h4>Resultado para el termino <strong>{{b}}</strong></h4>
        {% for message in app.flashes('mensaje') %}
            <div class=\"alert alert-{{ app.flashes('css')[0] }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
    
    {# Con esto lo que hago es hacer el tipico buscador de objetos especificos dentro del listado#}
    <div class=\"row\">
        <div class=\"col-6\">&nbsp;</div>
        <div class=\"col-6\">
            <form name=\"form_search\" action=\"{{path('doctrine_productos_buscador')}}\" method=\"GET\">
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Buscar.....\" name=\"b\" id=\"b\" value=\"{{b}}\"/>
                    <span class=\"input-group-text\" id=\"basic-addon2\">
                        <a href=\"javascript:void(0);\" class=\"btn \" onclick=\"buscador();\"><i class=\"fas fa-search\"></i></a>
                    </span>
                </div>
            </form>
        </div>
    </div>

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
", "doctrine/productos_buscador.html.twig", "/var/www/html/latitur/templates/doctrine/productos_buscador.html.twig");
    }
}
