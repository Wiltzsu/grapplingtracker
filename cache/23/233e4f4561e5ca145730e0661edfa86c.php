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
        <div class=\"register-container\">
            <div class=\"card p-4\">
                <h2 class=\"text-center mb-4\">Register</h2>

                <form method=\"POST\" action=\"/technique-db-mvc/public/register\">

                    <div class=\"form-group";
        // line 30
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 30)) ? (" has-error") : (""));
        yield "\">
                    <label for=\"username\">Username</label>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 32
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", true, true, false, 32) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 32)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 32), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Enter username\">
                        ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 33)) {
            // line 34
            yield "                            <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 34), "html", null, true);
            yield "</span>
                        ";
        }
        // line 36
        yield "                    </div>

                    <div class=\"form-group";
        // line 38
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 38)) ? (" has-error") : (""));
        yield "\">
                    <label for=\"email\">Email</label>
                        <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 40
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "email", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "email", [], "any", false, false, false, 40)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "email", [], "any", false, false, false, 40), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Enter email\">
                        ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 41)) {
            // line 42
            yield "                            <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 42), "html", null, true);
            yield "</span>
                        ";
        }
        // line 44
        yield "                    </div>

                    <div class=\"form-group";
        // line 46
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 46)) ? (" has-error") : (""));
        yield "\">
                        <label for=\"password1\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password1\" name=\"password\" placeholder=\"Enter password\">
                        ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 49)) {
            // line 50
            yield "                            <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 50), "html", null, true);
            yield "</span>
                        ";
        }
        // line 52
        yield "                    </div>

                    <div class=\"form-group";
        // line 54
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 54)) ? (" has-error") : (""));
        yield "\">
                        <label for=\"password2\">Re-enter password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password2\" name=\"password_confirm\" placeholder=\"Enter password\">
                        ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 57)) {
            // line 58
            yield "                            <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 58), "html", null, true);
            yield "</span>
                        ";
        }
        // line 60
        yield "                    </div>

                    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block loginbutton\">Register</button>
                    <a href=\"login\"><p>Login</p></a>
                </form>
            </div>
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
        return array (  143 => 60,  137 => 58,  135 => 57,  129 => 54,  125 => 52,  119 => 50,  117 => 49,  111 => 46,  107 => 44,  101 => 42,  99 => 41,  95 => 40,  90 => 38,  86 => 36,  80 => 34,  78 => 33,  74 => 32,  69 => 30,  38 => 1,);
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
        <div class=\"register-container\">
            <div class=\"card p-4\">
                <h2 class=\"text-center mb-4\">Register</h2>

                <form method=\"POST\" action=\"/technique-db-mvc/public/register\">

                    <div class=\"form-group{{ errors.username ? ' has-error' : '' }}\">
                    <label for=\"username\">Username</label>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"{{ input.username ?? '' }}\" placeholder=\"Enter username\">
                        {% if errors.username %}
                            <span class=\"help-block error-message\">{{ errors.username }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group{{ errors.email ? ' has-error' : '' }}\">
                    <label for=\"email\">Email</label>
                        <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ input.email ?? '' }}\" placeholder=\"Enter email\">
                        {% if errors.email %}
                            <span class=\"help-block error-message\">{{ errors.email }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">
                        <label for=\"password1\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password1\" name=\"password\" placeholder=\"Enter password\">
                        {% if errors.password %}
                            <span class=\"help-block error-message\">{{ errors.password }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">
                        <label for=\"password2\">Re-enter password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password2\" name=\"password_confirm\" placeholder=\"Enter password\">
                        {% if errors.password %}
                            <span class=\"help-block error-message\">{{ errors.password }}</span>
                        {% endif %}
                    </div>

                    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block loginbutton\">Register</button>
                    <a href=\"login\"><p>Login</p></a>
                </form>
            </div>
        </div>
    </div>
", "register.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/register.twig");
    }
}
