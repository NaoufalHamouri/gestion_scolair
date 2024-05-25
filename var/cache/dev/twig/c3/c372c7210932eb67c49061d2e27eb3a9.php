<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_aa800e80b1a6d0a2b29c3e15c079907d extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        yield "



 <body oncontextmenu='return false' class='snippet-body'>
                            <div class=\"container\">
    <div class=\"row\">
        <div class=\"offset-md-2 col-lg-5 col-md-7 offset-lg-3 offset-md-3\">
            <div class=\"panel border bg-white\">
                <div class=\"panel-heading\">
                    <h3 class=\"pt-3 font-weight-bold\">Login</h3>
                </div>
                <div class=\"panel-body p-3\">
                   <form method=\"post\">
                   <div class=\"row\">
    ";
        // line 21
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })())) {
            // line 22
            yield "        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "messageKey", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "messageData", [], "any", false, false, false, 22), "security"), "html", null, true);
            yield "</div>
    ";
        }
        // line 24
        yield "
    ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            yield "        <div class=\"mb-3\">
            You are logged in as ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "userIdentifier", [], "any", false, false, false, 27), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
        </div>
    ";
        }
        // line 30
        yield "                        <div class=\"form-group py-2\">
                            <div class=\"input-field\"> <span class=\"fa-solid fa-lock p-2\"></span> <input type=\"text\" placeholder=\"Username or Email\" required value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\"  autocomplete=\"email\" required autofocus> </div>
                        </div>
                        
                        
                        <div class=\"form-group py-2 \">
                            <div class=\"input-field\"> <span class=\"\"></span> <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\"  required autofocus placeholder=\"password\"> <button class=\"btn bg-white text-muted\"> <span class=\"far fa-eye-slash\"></span> </button> </div>
                        </div>
                         <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
    <div class=\"form-inline\"> <input type=\"checkbox\" name=\"remember\" id=\"remember\"> <label for=\"remember\" class=\"text-muted\">Remember me</label> <a href=\"#\" id=\"forgot\" class=\"font-weight-bold\">Forgot password?</a> </div>
                        <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
                        
                    </form>
                   
 </div>
                

               
            </div>
        </div>
    </div>

                            
                            </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  145 => 39,  134 => 31,  131 => 30,  123 => 27,  120 => 26,  118 => 25,  115 => 24,  109 => 22,  107 => 21,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}




 <body oncontextmenu='return false' class='snippet-body'>
                            <div class=\"container\">
    <div class=\"row\">
        <div class=\"offset-md-2 col-lg-5 col-md-7 offset-lg-3 offset-md-3\">
            <div class=\"panel border bg-white\">
                <div class=\"panel-heading\">
                    <h3 class=\"pt-3 font-weight-bold\">Login</h3>
                </div>
                <div class=\"panel-body p-3\">
                   <form method=\"post\">
                   <div class=\"row\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}
                        <div class=\"form-group py-2\">
                            <div class=\"input-field\"> <span class=\"fa-solid fa-lock p-2\"></span> <input type=\"text\" placeholder=\"Username or Email\" required value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\"  autocomplete=\"email\" required autofocus> </div>
                        </div>
                        
                        
                        <div class=\"form-group py-2 \">
                            <div class=\"input-field\"> <span class=\"\"></span> <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\"  required autofocus placeholder=\"password\"> <button class=\"btn bg-white text-muted\"> <span class=\"far fa-eye-slash\"></span> </button> </div>
                        </div>
                         <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\">
    <div class=\"form-inline\"> <input type=\"checkbox\" name=\"remember\" id=\"remember\"> <label for=\"remember\" class=\"text-muted\">Remember me</label> <a href=\"#\" id=\"forgot\" class=\"font-weight-bold\">Forgot password?</a> </div>
                        <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
                        
                    </form>
                   
 </div>
                

               
            </div>
        </div>
    </div>

                            
                            </body>
{% endblock %}

 ", "security/login.html.twig", "C:\\Users\\x\\Documents\\GitHub\\gestion_scolair\\templates\\security\\login.html.twig");
    }
}
