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
    <div class=\"card p-4\">
        <form method=\"POST\" action=\"/technique-db-mvc/public/login\">
            <div class=\"form-group";
        // line 24
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 24)) ? (" has-error") : (""));
        yield "\">
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 25
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 25)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 25), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Enter username\">
                ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 26)) {
            // line 27
            yield "                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 27), "html", null, true);
            yield "</span>
                ";
        }
        // line 29
        yield "            </div>
            
            <div class=\"form-group";
        // line 31
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 31)) ? (" has-error") : (""));
        yield "\">
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Enter password\">
                ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 33)) {
            // line 34
            yield "                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 34), "html", null, true);
            yield "</span>
                ";
        }
        // line 36
        yield "            </div>

            <button type=\"submit\" class=\"btn btn-primary btn-block loginbutton\" name=\"submit\">Login</button>
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
        return array (  96 => 36,  90 => 34,  88 => 33,  83 => 31,  79 => 29,  73 => 27,  71 => 26,  67 => 25,  63 => 24,  38 => 1,);
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
    <div class=\"card p-4\">
        <form method=\"POST\" action=\"/technique-db-mvc/public/login\">
            <div class=\"form-group{{ errors.username ? ' has-error' : '' }}\">
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"{{ input.username ?? '' }}\" placeholder=\"Enter username\">
                {% if errors.username %}
                    <span class=\"help-block\">{{ errors.username }}</span>
                {% endif %}
            </div>
            
            <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Enter password\">
                {% if errors.password %}
                    <span class=\"help-block\">{{ errors.password }}</span>
                {% endif %}
            </div>

            <button type=\"submit\" class=\"btn btn-primary btn-block loginbutton\" name=\"submit\">Login</button>
        </form>
    </div>
</body>
</html>
", "login.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/login.twig");
    }
}
