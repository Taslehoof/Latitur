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

/* pasarelas/webpay_respuesta.html.twig */
class __TwigTemplate_9a0ef7c8a2412558012faf15a11b262a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pasarelas/webpay_respuesta.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pasarelas/webpay_respuesta.html.twig"));

        $this->parent = $this->loadTemplate("frontend.html.twig", "pasarelas/webpay_respuesta.html.twig", 1);
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

        echo "Pasarelas de pago";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pasarelas_inicio");
        echo "\">Pasarelas</a></li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">Webpay respuesta</li>
    </ol>vci
</nav>
<h1>Webpay respuesta</h1>  

    <ul>
        <li>VCI: <span>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 16, $this->source); })()), "vci", [], "any", false, false, false, 16), "html", null, true);
        echo "</span></li>
        <li>amount: <span>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 17, $this->source); })()), "amount", [], "any", false, false, false, 17), "html", null, true);
        echo "</span></li>
        <li>status: <span>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 18, $this->source); })()), "status", [], "any", false, false, false, 18), "html", null, true);
        echo "</span></li>
        <li>buy_order: <span>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 19, $this->source); })()), "buy_order", [], "any", false, false, false, 19), "html", null, true);
        echo "</span></li>
        <li>session_id: <span>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 20, $this->source); })()), "session_id", [], "any", false, false, false, 20), "html", null, true);
        echo "</span></li>
        <li>card_detail: <span>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 21, $this->source); })()), "card_detail", [], "any", false, false, false, 21), "html", null, true);
        echo "</span></li>
        <li>accounting_date: <span>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 22, $this->source); })()), "accounting_date", [], "any", false, false, false, 22), "html", null, true);
        echo "</span></li>
        <li>transaction_date: <span>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 23, $this->source); })()), "transaction_date", [], "any", false, false, false, 23), "html", null, true);
        echo "</span></li>
        <li>authorization_code: <span>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 24, $this->source); })()), "authorization_code", [], "any", false, false, false, 24), "html", null, true);
        echo "</span></li>
        <li>payment_type_code: <span>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 25, $this->source); })()), "payment_type_code", [], "any", false, false, false, 25), "html", null, true);
        echo "</span></li>
        <li>response_code: <span>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 26, $this->source); })()), "response_code", [], "any", false, false, false, 26), "html", null, true);
        echo "</span></li>
        <li>installments_number: <span>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 27, $this->source); })()), "installments_number", [], "any", false, false, false, 27), "html", null, true);
        echo "</span></li>
    </ul>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pasarelas/webpay_respuesta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 27,  146 => 26,  142 => 25,  138 => 24,  134 => 23,  130 => 22,  126 => 21,  122 => 20,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend.html.twig' %}

{% block title %}Pasarelas de pago{% endblock %}

{% block body %}
<nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"{{path('home_inicio')}}\">Home</a></li>
        <li class=\"breadcrumb-item\"><a href=\"{{path('pasarelas_inicio')}}\">Pasarelas</a></li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">Webpay respuesta</li>
    </ol>vci
</nav>
<h1>Webpay respuesta</h1>  

    <ul>
        <li>VCI: <span>{{content.vci}}</span></li>
        <li>amount: <span>{{content.amount}}</span></li>
        <li>status: <span>{{content.status}}</span></li>
        <li>buy_order: <span>{{content.buy_order}}</span></li>
        <li>session_id: <span>{{content.session_id}}</span></li>
        <li>card_detail: <span>{{content.card_detail}}</span></li>
        <li>accounting_date: <span>{{content.accounting_date}}</span></li>
        <li>transaction_date: <span>{{content.transaction_date}}</span></li>
        <li>authorization_code: <span>{{content.authorization_code}}</span></li>
        <li>payment_type_code: <span>{{content.payment_type_code}}</span></li>
        <li>response_code: <span>{{content.response_code}}</span></li>
        <li>installments_number: <span>{{content.installments_number}}</span></li>
    </ul>

{% endblock %}
", "pasarelas/webpay_respuesta.html.twig", "/var/www/html/latitur/templates/pasarelas/webpay_respuesta.html.twig");
    }
}
