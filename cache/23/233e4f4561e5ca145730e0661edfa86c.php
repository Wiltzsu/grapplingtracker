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
        <h2 class=\"text-center mb-4 login-bold\">Register</h2>

        <form method=\"POST\" action=\"register\">

            <div class=\"form-group";
        // line 16
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 16)) ? (" has-error") : (""));
        yield "\">
            <label for=\"username\" class=\"login-bold\">Username</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 18
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", true, true, false, 18) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 18)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 18), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Enter username\">
                ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 19)) {
            // line 20
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 20), "html", null, true);
            yield "</span>
                ";
        }
        // line 22
        yield "            </div>

            <div class=\"form-group";
        // line 24
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 24)) ? (" has-error") : (""));
        yield "\">
            <label for=\"email\" class=\"login-bold\">Email</label>
                <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 26
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "email", [], "any", true, true, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "email", [], "any", false, false, false, 26)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "email", [], "any", false, false, false, 26), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Enter email\">
                ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 27)) {
            // line 28
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 28), "html", null, true);
            yield "</span>
                ";
        }
        // line 30
        yield "            </div>

            <div class=\"form-group";
        // line 32
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 32)) ? (" has-error") : (""));
        yield "\">
                <label for=\"password1\" class=\"login-bold\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"password1\" name=\"password\" placeholder=\"Enter password\">
                ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 35)) {
            // line 36
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                ";
        }
        // line 38
        yield "            </div>

            <div class=\"form-group";
        // line 40
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 40)) ? (" has-error") : (""));
        yield "\">
                <label for=\"password2\" class=\"login-bold\">Re-enter password</label>
                <input type=\"password\" class=\"form-control\" id=\"password2\" name=\"password_confirm\" placeholder=\"Enter password\">
                ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 43)) {
            // line 44
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 44), "html", null, true);
            yield "</span>
                ";
        }
        // line 46
        yield "            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block mt-3\">Register</button>
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
        return array (  129 => 46,  123 => 44,  121 => 43,  115 => 40,  111 => 38,  105 => 36,  103 => 35,  97 => 32,  93 => 30,  87 => 28,  85 => 27,  81 => 26,  76 => 24,  72 => 22,  66 => 20,  64 => 19,  60 => 18,  55 => 16,  38 => 1,);
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
        <h2 class=\"text-center mb-4 login-bold\">Register</h2>

        <form method=\"POST\" action=\"register\">

            <div class=\"form-group{{ errors.username ? ' has-error' : '' }}\">
            <label for=\"username\" class=\"login-bold\">Username</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"{{ input.username ?? '' }}\" placeholder=\"Enter username\">
                {% if errors.username %}
                    <span class=\"form-text error-message\">{{ errors.username }}</span>
                {% endif %}
            </div>

            <div class=\"form-group{{ errors.email ? ' has-error' : '' }}\">
            <label for=\"email\" class=\"login-bold\">Email</label>
                <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ input.email ?? '' }}\" placeholder=\"Enter email\">
                {% if errors.email %}
                    <span class=\"form-text error-message\">{{ errors.email }}</span>
                {% endif %}
            </div>

            <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">
                <label for=\"password1\" class=\"login-bold\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"password1\" name=\"password\" placeholder=\"Enter password\">
                {% if errors.password %}
                    <span class=\"form-text error-message\">{{ errors.password }}</span>
                {% endif %}
            </div>

            <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">
                <label for=\"password2\" class=\"login-bold\">Re-enter password</label>
                <input type=\"password\" class=\"form-control\" id=\"password2\" name=\"password_confirm\" placeholder=\"Enter password\">
                {% if errors.password %}
                    <span class=\"form-text error-message\">{{ errors.password }}</span>
                {% endif %}
            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block mt-3\">Register</button>
            <div class=\"text-center mt-2\">
                <a href=\"login\" class=\"login-bold\">Login</a>
            </div>    
        </form>
    </div>
", "register.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/register.twig");
    }
}
