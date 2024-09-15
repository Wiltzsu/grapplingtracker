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
    <img src=\"/technique-db-mvc/public/img/logo2.svg\" alt=\"Grappling Tracker logo\" class=\"mb-5 page-title\" style=\"width: 180px\">

    <div class=\"custom-login-form\">
        <h2 class=\"text-center mb-4\">Please sign in</h2>

        <form method=\"POST\" action=\"login\">
            ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "activation", [], "any", false, false, false, 17)) {
            // line 18
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "activation", [], "any", false, false, false, 18), "html", null, true);
            yield "</div>
            ";
        }
        // line 20
        yield "            <div class=\"form-group";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 20)) ? (" has-error") : (""));
        yield "\">
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 21
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 21)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 21), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Enter username\">
                ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 22)) {
            // line 23
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 23), "html", null, true);
            yield "</span>
                ";
        }
        // line 25
        yield "            </div>
            
            <div class=\"form-group";
        // line 27
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 27)) ? (" has-error") : (""));
        yield "\">
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

            <button type=\"submit\" class=\"btn btn-primary btn-block mt-3\" name=\"submit\">Login</button>
            <div class=\"text-center mt-2\">
                <a href=\"register\" class=\"\">Register</a>
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
        return array (  98 => 32,  92 => 30,  90 => 29,  85 => 27,  81 => 25,  75 => 23,  73 => 22,  69 => 21,  64 => 20,  58 => 18,  56 => 17,  38 => 1,);
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
    <img src=\"/technique-db-mvc/public/img/logo2.svg\" alt=\"Grappling Tracker logo\" class=\"mb-5 page-title\" style=\"width: 180px\">

    <div class=\"custom-login-form\">
        <h2 class=\"text-center mb-4\">Please sign in</h2>

        <form method=\"POST\" action=\"login\">
            {% if errors.activation %}
                <div class=\"alert alert-danger\">{{ errors.activation }}</div>
            {% endif %}
            <div class=\"form-group{{ errors.username ? ' has-error' : '' }}\">
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"{{ input.username ?? '' }}\" placeholder=\"Enter username\">
                {% if errors.username %}
                    <span class=\"form-text error-message\">{{ errors.username }}</span>
                {% endif %}
            </div>
            
            <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Enter password\">
                {% if errors.password %}
                    <span class=\"form-text error-message\">{{ errors.password }}</span>
                {% endif %}
            </div>

            <button type=\"submit\" class=\"btn btn-primary btn-block mt-3\" name=\"submit\">Login</button>
            <div class=\"text-center mt-2\">
                <a href=\"register\" class=\"\">Register</a>
            </div>    
        </form>
    </div>
</body>
</html>
", "login.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/login.twig");
    }
}
