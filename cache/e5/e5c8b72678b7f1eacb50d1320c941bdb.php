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

/* login.twig */
class __TwigTemplate_5e24879da76d8dd8bc217efcb91cfe8c extends Template
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
    <title>Login</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
</head>
<body class=\"login-body\">
    <div class=\"custom-login-form\">
        <h2 class=\"text-center mb-4 login-bold\">Login</h2>

        <form method=\"POST\" action=\"login\">
            ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "activation", [], "any", false, false, false, 15)) {
            // line 16
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "activation", [], "any", false, false, false, 16), "html", null, true);
            yield "</div>
            ";
        }
        // line 18
        yield "            <div class=\"form-group";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 18)) ? (" has-error") : (""));
        yield "\">
                <label for=\"username\" class=\"login-bold\">Username</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 20
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 20)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 20), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Enter username\">
                ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 21)) {
            // line 22
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 22), "html", null, true);
            yield "</span>
                ";
        }
        // line 24
        yield "            </div>
            
            <div class=\"form-group";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 26)) ? (" has-error") : (""));
        yield "\">
                <label for=\"password1\" class=\"login-bold\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Enter password\">
                ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 29)) {
            // line 30
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 30), "html", null, true);
            yield "</span>
                ";
        }
        // line 32
        yield "            </div>

            ";
        // line 45
        yield "
            <button type=\"submit\" class=\"btn btn-primary btn-block mt-3 login-bold\" name=\"submit\">Login</button>
            <div class=\"text-center mt-2\">
                <a href=\"register\" class=\"login-bold\">Register</a>
            </div>    
        </form>
    </div>
</body>
</html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login.twig";
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
        return array (  102 => 45,  98 => 32,  92 => 30,  90 => 29,  84 => 26,  80 => 24,  74 => 22,  72 => 21,  68 => 20,  62 => 18,  56 => 16,  54 => 15,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
</head>
<body class=\"login-body\">
    <div class=\"custom-login-form\">
        <h2 class=\"text-center mb-4 login-bold\">Login</h2>

        <form method=\"POST\" action=\"login\">
            {% if errors.activation %}
                <div class=\"alert alert-danger\">{{ errors.activation }}</div>
            {% endif %}
            <div class=\"form-group{{ errors.username ? ' has-error' : '' }}\">
                <label for=\"username\" class=\"login-bold\">Username</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"{{ input.username ?? '' }}\" placeholder=\"Enter username\">
                {% if errors.username %}
                    <span class=\"form-text error-message\">{{ errors.username }}</span>
                {% endif %}
            </div>
            
            <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">
                <label for=\"password1\" class=\"login-bold\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Enter password\">
                {% if errors.password %}
                    <span class=\"form-text error-message\">{{ errors.password }}</span>
                {% endif %}
            </div>

            {# <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"rememberMe\">
                    <label class=\"form-check-label\" for=\"rememberMe\">
                        Remember me
                    </label>
                </div>
                <div class=\"reset-password mb-2\">
                    <a href=\"resetpassword\">Forgot password?</a>
                </div>
            </div> #}

            <button type=\"submit\" class=\"btn btn-primary btn-block mt-3 login-bold\" name=\"submit\">Login</button>
            <div class=\"text-center mt-2\">
                <a href=\"register\" class=\"login-bold\">Register</a>
            </div>    
        </form>
    </div>
</body>
</html>
", "login.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/login.twig");
    }
}
