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

/* frontend.html.twig */
class __TwigTemplate_d50a12c6445d62cdacafd4a067b317cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, inictial-scale=1\" />
        <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Imagenes/logo.png"), "html", null, true);
        echo "\" />
        <title>Curso Symfony - ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilos.css")), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    
        <!-- Custom styles for this template -->
        <link href=\"https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/blog.css")), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.alerts.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fontawesome-5-8/css/all.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sweetalert2.css")), "html", null, true);
        echo "\"/>

    </head>

    <body>
    <div class=\"container\">
        <header class=\"blog-header py-3\">
            <div class=\"row flex-nowrap justify-content-between align-items-center\">
                <div class=\"col-4 pt-1\">
                    <a class=\"link-secondary\" href=\"#\">Subscribe</a>
                </div>
                <div class=\"col-4 text-center\">
                    <a class=\"blog-header-logo text-dark\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_inicio");
        echo "\">
                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Imagenes/logo.png"), "html", null, true);
        echo "\" />
                    </a>
                </div>
                <div class=\"col-4 d-flex justify-content-end align-items-center\">
                    <a class=\"link-secondary\" href=\"#\" aria-label=\"Search\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"mx-3\" role=\"img\" viewbox=\"0 0 24 24\">
                        <title>Search</title><circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"/><path d=\"M21 21l-5.2-5.2\"/></svg>
                    </a>
                    <a class=\"btn btn-sm btn-outline-secondary\" href=\"#\">Sign up</a>
                </div>
            </div>
        </header>

        <div class=\"nav-scroller py-1 mb-2\">
            <nav class=\"nav d-flex justify-content-between\">
                <a class=\"p-2 link-secondary\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_inicio");
        echo "\">Home</a>
                <a class=\"p-2 link-secondary\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("template_layout");
        echo "\">Template</a>
                <a class=\"p-2 link-secondary\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formularios_inicio");
        echo "\">Formularios</a>
                <a class=\"p-2 link-secondary\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilidades_inicio");
        echo "\">Utilidades</a>
                <a class=\"p-2 link-secondary\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helper_inicio");
        echo "\">Helper</a>
                <a class=\"p-2 link-secondary\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_inicio");
        echo "\">Doctrine</a>
                ";
        // line 50
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 51
            echo "                <a class=\"p-2 link-secondary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_inicio");
            echo "\">Doctrine</a>
                ";
        }
        // line 53
        echo "                ";
        // line 54
        echo "                ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 55
            echo "                <a class=\"p-2 link-secondary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceso_login");
            echo "\">Login</a>
                <a class=\"p-2 link-secondary\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceso_registro");
            echo "\">Registro</a>
                ";
        }
        // line 58
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 59
            echo "                <a class=\"p-2 link-secondary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restringido_inicio");
            echo "\">Restringido</a>
                <a class=\"p-2 link-secondary\" href=\"javascript:void(0);\" onclick=\"cerrarSesion('";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceso_logout");
            echo "');\">Salir</a>
                ";
        }
        // line 62
        echo "                ";
        // line 63
        echo "            </nav>
        </div>
    </div>
    <main class=\"container\">
        <!--Contenido--->
            ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "        <!--//Contenido--->
    </main>

    <footer class=\"blog-footer\">
        <p>Todos los derechos reservados - Desarrollado por
            <a href=\"https://www.latitur.com\" target=\"_blank\">Latitur</a>
        </p>
    </footer>

    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-2.0.0.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.alerts.min.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sweetalert2.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/funciones.js")), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 68,  233 => 7,  218 => 82,  214 => 81,  210 => 80,  206 => 79,  202 => 78,  191 => 69,  189 => 68,  182 => 63,  180 => 62,  175 => 60,  170 => 59,  167 => 58,  162 => 56,  157 => 55,  154 => 54,  152 => 53,  146 => 51,  144 => 50,  140 => 49,  136 => 48,  132 => 47,  128 => 46,  124 => 45,  120 => 44,  102 => 29,  98 => 28,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, inictial-scale=1\" />
        <link rel=\"icon\" href=\"{{asset('Imagenes/logo.png')}}\" />
        <title>Curso Symfony - {% block title%}{%endblock%}</title>
        <link rel=\"stylesheet\" href=\"{{absolute_url(asset('css/estilos.css'))}}\" />
        <link href=\"{{absolute_url(asset('css/bootstrap.min.css'))}}\" rel=\"stylesheet\" />
    
        <!-- Custom styles for this template -->
        <link href=\"https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap\" rel=\"stylesheet\">
        <link href=\"{{absolute_url(asset('css/blog.css'))}}\" rel=\"stylesheet\"  />
        <link href=\"{{absolute_url(asset('css/jquery.alerts.min.css'))}}\" rel=\"stylesheet\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{absolute_url(asset('fontawesome-5-8/css/all.css'))}}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{absolute_url(asset('css/sweetalert2.css'))}}\"/>

    </head>

    <body>
    <div class=\"container\">
        <header class=\"blog-header py-3\">
            <div class=\"row flex-nowrap justify-content-between align-items-center\">
                <div class=\"col-4 pt-1\">
                    <a class=\"link-secondary\" href=\"#\">Subscribe</a>
                </div>
                <div class=\"col-4 text-center\">
                    <a class=\"blog-header-logo text-dark\" href=\"{{path('home_inicio')}}\">
                        <img src=\"{{asset('Imagenes/logo.png')}}\" />
                    </a>
                </div>
                <div class=\"col-4 d-flex justify-content-end align-items-center\">
                    <a class=\"link-secondary\" href=\"#\" aria-label=\"Search\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"mx-3\" role=\"img\" viewbox=\"0 0 24 24\">
                        <title>Search</title><circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"/><path d=\"M21 21l-5.2-5.2\"/></svg>
                    </a>
                    <a class=\"btn btn-sm btn-outline-secondary\" href=\"#\">Sign up</a>
                </div>
            </div>
        </header>

        <div class=\"nav-scroller py-1 mb-2\">
            <nav class=\"nav d-flex justify-content-between\">
                <a class=\"p-2 link-secondary\" href=\"{{ path('home_inicio') }}\">Home</a>
                <a class=\"p-2 link-secondary\" href=\"{{ path('template_layout') }}\">Template</a>
                <a class=\"p-2 link-secondary\" href=\"{{ path('formularios_inicio') }}\">Formularios</a>
                <a class=\"p-2 link-secondary\" href=\"{{ path('utilidades_inicio') }}\">Utilidades</a>
                <a class=\"p-2 link-secondary\" href=\"{{ path('helper_inicio') }}\">Helper</a>
                <a class=\"p-2 link-secondary\" href=\"{{ path('doctrine_inicio') }}\">Doctrine</a>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <a class=\"p-2 link-secondary\" href=\"{{ path('doctrine_inicio') }}\">Doctrine</a>
                {% endif %}
                {# Con esto estoy asumiendo el rol y para poder mostra los enlaces en la barra o no#}
                {% if is_granted('IS_AUTHENTICATED_FULLY')==false %}
                <a class=\"p-2 link-secondary\" href=\"{{ path('acceso_login') }}\">Login</a>
                <a class=\"p-2 link-secondary\" href=\"{{ path('acceso_registro') }}\">Registro</a>
                {% endif %}
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <a class=\"p-2 link-secondary\" href=\"{{ path('restringido_inicio') }}\">Restringido</a>
                <a class=\"p-2 link-secondary\" href=\"javascript:void(0);\" onclick=\"cerrarSesion('{{path('acceso_logout')}}');\">Salir</a>
                {% endif %}
                {#<a class=\"p-2 link-secondary\" href=\"{{ path('pasarelas_inicio') }}\">Pasarelas</a>#}
            </nav>
        </div>
    </div>
    <main class=\"container\">
        <!--Contenido--->
            {%block body%}{%endblock%}
        <!--//Contenido--->
    </main>

    <footer class=\"blog-footer\">
        <p>Todos los derechos reservados - Desarrollado por
            <a href=\"https://www.latitur.com\" target=\"_blank\">Latitur</a>
        </p>
    </footer>

    <script src=\"{{absolute_url(asset('js/jquery-2.0.0.min.js'))}}\"></script>
    <script src=\"{{absolute_url(asset('js/bootstrap.js'))}}\"></script>
    <script src=\"{{absolute_url(asset('js/jquery.alerts.min.js'))}}\"></script>
    <script type=\"text/javascript\" src=\"{{absolute_url(asset('js/sweetalert2.js'))}}\"></script>
    <script type=\"text/javascript\" src=\"{{absolute_url(asset('js/funciones.js'))}}\"></script>

    </body>
</html>
", "frontend.html.twig", "/var/www/html/latitur/templates/frontend.html.twig");
    }
}
