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

/* utilidades/pdf_generar.html.twig */
class __TwigTemplate_6cf45ee26ca95634feacd4945e03f16c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilidades/pdf_generar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilidades/pdf_generar.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>PDF ejemplo</title>
    </head>

    <body>
        <div style=\"margin:0 auto; display:block; width:500px;\">
            <h1>Titulo</h1>
            <table width=\"100%\" border=\"1\">
                <tr>
                    <td colaspan=\"2\">
                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\" style=\"width:200px;\">
                    </td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>País:</td>
                    <td>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["pais"]) || array_key_exists("pais", $context) ? $context["pais"] : (function () { throw new RuntimeError('Variable "pais" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Teléfono:</td>
                    <td>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["telefono"]) || array_key_exists("telefono", $context) ? $context["telefono"] : (function () { throw new RuntimeError('Variable "telefono" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>E-Mail:</td>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["correo"]) || array_key_exists("correo", $context) ? $context["correo"] : (function () { throw new RuntimeError('Variable "correo" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</td>
                </tr>

            </table>
        </div>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "utilidades/pdf_generar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  80 => 27,  73 => 23,  66 => 19,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>PDF ejemplo</title>
    </head>

    <body>
        <div style=\"margin:0 auto; display:block; width:500px;\">
            <h1>Titulo</h1>
            <table width=\"100%\" border=\"1\">
                <tr>
                    <td colaspan=\"2\">
                        <img src=\"{{imageSrc}}\" style=\"width:200px;\">
                    </td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td>{{nombre}}</td>
                </tr>
                <tr>
                    <td>País:</td>
                    <td>{{pais}}</td>
                </tr>
                <tr>
                    <td>Teléfono:</td>
                    <td>{{telefono}}</td>
                </tr>
                <tr>
                    <td>E-Mail:</td>
                    <td>{{correo}}</td>
                </tr>

            </table>
        </div>
    </body>
</html>
", "utilidades/pdf_generar.html.twig", "/var/www/html/latitur/templates/utilidades/pdf_generar.html.twig");
    }
}
