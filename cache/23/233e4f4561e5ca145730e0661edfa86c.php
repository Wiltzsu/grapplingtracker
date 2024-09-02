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
</head>
<body class=\"login-body\">
    <div class=\"custom-login-form\">
        <h2 class=\"text-center mb-4\">Sign up</h2>

        <form method=\"POST\" action=\"register\">

            <div class=\"form-group";
        // line 16
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 16)) ? (" has-error") : (""));
        yield "\">
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 17
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 17)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 17), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Enter username\">
                ";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 18)) {
            // line 19
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 19), "html", null, true);
            yield "</span>
                ";
        }
        // line 21
        yield "            </div>

            <div class=\"form-group";
        // line 23
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 23)) ? (" has-error") : (""));
        yield "\">
                <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 24
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "email", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "email", [], "any", false, false, false, 24)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "email", [], "any", false, false, false, 24), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Enter email\">
                ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 25)) {
            // line 26
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 26), "html", null, true);
            yield "</span>
                ";
        }
        // line 28
        yield "            </div>

            <div class=\"form-group";
        // line 30
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 30)) ? (" has-error") : (""));
        yield "\">
                <input type=\"password\" class=\"form-control\" id=\"password1\" name=\"password\" placeholder=\"Enter password\">
                ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 32)) {
            // line 33
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 33), "html", null, true);
            yield "</span>
                ";
        }
        // line 35
        yield "            </div>

            <div class=\"form-group";
        // line 37
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 37)) ? (" has-error") : (""));
        yield "\">
                <input type=\"password\" class=\"form-control\" id=\"password2\" name=\"password_confirm\" placeholder=\"Enter password\">
                ";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 39)) {
            // line 40
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 40), "html", null, true);
            yield "</span>
                ";
        }
        // line 42
        yield "            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block mt-3\">Sign up</button>
            <div class=\"text-center mt-2\">
                <a href=\"login\" class=\"login-bold\">Login</a>
            </div>    
        </form>
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
        return array (  125 => 42,  119 => 40,  117 => 39,  112 => 37,  108 => 35,  102 => 33,  100 => 32,  95 => 30,  91 => 28,  85 => 26,  83 => 25,  79 => 24,  75 => 23,  71 => 21,  65 => 19,  63 => 18,  59 => 17,  55 => 16,  38 => 1,);
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
</head>
<body class=\"login-body\">
    <div class=\"custom-login-form\">
        <h2 class=\"text-center mb-4\">Sign up</h2>

        <form method=\"POST\" action=\"register\">

            <div class=\"form-group{{ errors.username ? ' has-error' : '' }}\">
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"{{ input.username ?? '' }}\" placeholder=\"Enter username\">
                {% if errors.username %}
                    <span class=\"form-text error-message\">{{ errors.username }}</span>
                {% endif %}
            </div>

            <div class=\"form-group{{ errors.email ? ' has-error' : '' }}\">
                <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ input.email ?? '' }}\" placeholder=\"Enter email\">
                {% if errors.email %}
                    <span class=\"form-text error-message\">{{ errors.email }}</span>
                {% endif %}
            </div>

            <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">
                <input type=\"password\" class=\"form-control\" id=\"password1\" name=\"password\" placeholder=\"Enter password\">
                {% if errors.password %}
                    <span class=\"form-text error-message\">{{ errors.password }}</span>
                {% endif %}
            </div>

            <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">
                <input type=\"password\" class=\"form-control\" id=\"password2\" name=\"password_confirm\" placeholder=\"Enter password\">
                {% if errors.password %}
                    <span class=\"form-text error-message\">{{ errors.password }}</span>
                {% endif %}
            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block mt-3\">Sign up</button>
            <div class=\"text-center mt-2\">
                <a href=\"login\" class=\"login-bold\">Login</a>
            </div>    
        </form>
    </div>
", "register.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/register.twig");
    }
}
