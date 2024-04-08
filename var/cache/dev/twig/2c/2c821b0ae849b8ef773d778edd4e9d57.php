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

/* acceso/login.html.twig */
class __TwigTemplate_ab9f39306492775cdb06571635029de0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceso/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceso/login.html.twig"));

        $this->parent = $this->loadTemplate("frontend.html.twig", "acceso/login.html.twig", 1);
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

        // line 4
        echo "    Login
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Login </h1> 
    
    ";
        // line 10
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 10, $this->source); })())) {
            echo " 
     <div class=\"alert alert-danger alert-dismissible fade show\">
     <ul> 
";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "    <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 14), "html", null, true);
                echo "</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo " 
</ul>
<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
     </div>
    ";
        }
        // line 21
        echo "<div class=\"row\">   
<form action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("acceso_login");
        echo "\" method=\"post\">
     ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["mensaje"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["css"], "method", false, false, false, 24), 0, [], "array", false, false, false, 24), "html", null, true);
            echo " alert-dismissible fade show\" role=\"alert\">
        ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " 
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            
  
   <div class=\"form-group\">   
      <label for=\"user_form_email\">
      E-Mail  
  </label>
  ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'widget', ["required" => false, "attr" => ["placeholder" => "E-Mail"]]);
        // line 37
        echo "
  <div>
     <div class=\"form-group\">   
      <label for=\"user_form_password\">
      Contraseña   
  </label>
  ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "password", [], "any", false, false, false, 43), 'widget', ["required" => false, "attr" => ["placeholder" => "Contraseña"]]);
        // line 45
        echo "
  <div>
   
   <hr/>    
   ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "nombre", [], "any", false, false, false, 49), 'widget', ["required" => false, "attr" => ["value" => "cualquier cosa"]]);
        // line 51
        echo " 
<input type=\"hidden\" name=\"token\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("generico"), "html", null, true);
        echo "\"/>
   <input type=\"submit\" value=\"Enviar\" class=\"btn btn-primary\" />
 </form>

</div>
 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "acceso/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 52,  174 => 51,  172 => 49,  166 => 45,  164 => 43,  156 => 37,  154 => 35,  146 => 29,  136 => 25,  131 => 24,  127 => 23,  123 => 22,  120 => 21,  113 => 16,  104 => 14,  100 => 13,  94 => 10,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontend.html.twig' %}

{% block title %}
    Login
{% endblock %}

{% block body %}
    <h1>Login </h1> 
    
    {% if errors %} 
     <div class=\"alert alert-danger alert-dismissible fade show\">
     <ul> 
{% for error in errors %}
    <li>{{ error.message }}</li>
{% endfor %}
 
</ul>
<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
     </div>
    {% endif %}
<div class=\"row\">   
<form action=\"{{ url('acceso_login' ) }}\" method=\"post\">
     {% for message in app.flashes('mensaje') %}
            <div class=\"alert alert-{{ app.flashes('css')[0] }} alert-dismissible fade show\" role=\"alert\">
        {{ message }} 
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
{% endfor %}
            
  
   <div class=\"form-group\">   
      <label for=\"user_form_email\">
      E-Mail  
  </label>
  {{ form_widget(form.email, {\"required\": false, \"attr\": {
    \"placeholder\": \"E-Mail\"
  }}) }}
  <div>
     <div class=\"form-group\">   
      <label for=\"user_form_password\">
      Contraseña   
  </label>
  {{ form_widget(form.password, {\"required\": false, \"attr\": {
    \"placeholder\": \"Contraseña\"
  }}) }}
  <div>
   
   <hr/>    
   {{ form_widget(form.nombre, {\"required\": false, \"attr\": {
    \"value\": \"cualquier cosa\"
  }}) }} 
<input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('generico') }}\"/>
   <input type=\"submit\" value=\"Enviar\" class=\"btn btn-primary\" />
 </form>

</div>
 

{% endblock %}







{# {% extends 'frontend.html.twig' %}

{% block title %}Login{% endblock %}

{% block body %}
<h1>Login</h1> 

    {% if error %}
        <div class=\"alert alert-danger alert-dismissible fade show\">{{ error.messageKey|trans(error.messageData, 'security') }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endif %}

     <form action=\"{{ path('acceso_login' ) }}\" method=\"post\">
         <div class=\"form-group\">   
             <label for=\"username\">Email:</label>
             <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"  class=\"form-control\" />
        </div>

        <div class=\"form-group\">   
            <label for=\"password\">Password:</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_username\" />
        </div>
    
        <hr/>    
        <input type=\"hidden\" name=\"_target_path\" value=\"/restringido\"/>
        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('generico') }}\"/>
        <button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
    </form>


{% endblock %} #}
", "acceso/login.html.twig", "/var/www/html/latitur/templates/acceso/login.html.twig");
    }
}
