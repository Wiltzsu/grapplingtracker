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

/* register.twig */
class __TwigTemplate_3fef4f2e0a1213ef6bc86b2895472391 extends Template
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
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Welcome</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
    <style>
        body, html {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class=\"centered-container\">
            <div class=\"card p-4\">
                <h2 class=\"text-center mb-4\">Register</h2>

                <form method=\"POST\" action=\"/technique-db-mvc/public/register\">

                    <div class=\"form-group";
        // line 29
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 29)) ? (" has-error") : (""));
        yield "\">
                    <label for=\"username\">Username</label>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 31
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 31)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 31), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Enter username\">
                        ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 32)) {
            // line 33
            yield "                            <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 33), "html", null, true);
            yield "</span>
                        ";
        }
        // line 35
        yield "                    </div>

                    <div class=\"form-group";
        // line 37
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 37)) ? (" has-error") : (""));
        yield "\">
                    <label for=\"email\">Email</label>
                        <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 39
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "email", [], "any", true, true, false, 39) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "email", [], "any", false, false, false, 39)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "email", [], "any", false, false, false, 39), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Enter email\">
                        ";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 40)) {
            // line 41
            yield "                            <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 41), "html", null, true);
            yield "</span>
                        ";
        }
        // line 43
        yield "                    </div>

                    <div class=\"form-group";
        // line 45
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 45)) ? (" has-error") : (""));
        yield "\">
                        <label for=\"password1\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password1\" name=\"password\" placeholder=\"Enter password\">
                        ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 48)) {
            // line 49
            yield "                            <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 49), "html", null, true);
            yield "</span>
                        ";
        }
        // line 51
        yield "                    </div>

                    <div class=\"form-group";
        // line 53
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 53)) ? (" has-error") : (""));
        yield "\">
                        <label for=\"password2\">Re-enter password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password2\" name=\"password_confirm\" placeholder=\"Enter password\">
                        ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 56)) {
            // line 57
            yield "                            <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 57), "html", null, true);
            yield "</span>
                        ";
        }
        // line 59
        yield "                    </div>

                    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block loginbutton\">Register</button>
                    <a href=\"login\"><p>Login</p></a>
                </form>
            </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "register.twig";
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
        return array (  142 => 59,  136 => 57,  134 => 56,  128 => 53,  124 => 51,  118 => 49,  116 => 48,  110 => 45,  106 => 43,  100 => 41,  98 => 40,  94 => 39,  89 => 37,  85 => 35,  79 => 33,  77 => 32,  73 => 31,  68 => 29,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Welcome</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
    <style>
        body, html {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class=\"centered-container\">
            <div class=\"card p-4\">
                <h2 class=\"text-center mb-4\">Register</h2>

                <form method=\"POST\" action=\"/technique-db-mvc/public/register\">

                    <div class=\"form-group{{ errors.username ? ' has-error' : '' }}\">
                    <label for=\"username\">Username</label>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"{{ input.username ?? '' }}\" placeholder=\"Enter username\">
                        {% if errors.username %}
                            <span class=\"form-text error-message\">{{ errors.username }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group{{ errors.email ? ' has-error' : '' }}\">
                    <label for=\"email\">Email</label>
                        <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ input.email ?? '' }}\" placeholder=\"Enter email\">
                        {% if errors.email %}
                            <span class=\"form-text error-message\">{{ errors.email }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">
                        <label for=\"password1\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password1\" name=\"password\" placeholder=\"Enter password\">
                        {% if errors.password %}
                            <span class=\"form-text error-message\">{{ errors.password }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">
                        <label for=\"password2\">Re-enter password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password2\" name=\"password_confirm\" placeholder=\"Enter password\">
                        {% if errors.password %}
                            <span class=\"form-text error-message\">{{ errors.password }}</span>
                        {% endif %}
                    </div>

                    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block loginbutton\">Register</button>
                    <a href=\"login\"><p>Login</p></a>
                </form>
            </div>
    </div>
", "register.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/register.twig");
    }
}
