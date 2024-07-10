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
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">

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
    <div class=\"centered-container\">
        <div class=\"register-container\">
            <div class=\"card p-4\">
                <h2 class=\"text-center mb-4\">Login</h2>

                <form method=\"POST\" action=\"/technique-db-mvc/public/login\">

                    <div class=\"form-group";
        // line 31
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 31)) ? (" has-error") : (""));
        yield "\">
                        <label for=\"username\">Username</label>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 33
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 33)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "username", [], "any", false, false, false, 33), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Enter username\">
                        ";
        // line 34
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 34)) {
            // line 35
            yield "                            <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 35), "html", null, true);
            yield "</span>
                        ";
        }
        // line 37
        yield "                    </div>
                    
                    <div class=\"form-group";
        // line 39
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 39)) ? (" has-error") : (""));
        yield "\">
                        <label for=\"password1\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Enter password\">
                        ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 42)) {
            // line 43
            yield "                            <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 43), "html", null, true);
            yield "</span>
                        ";
        }
        // line 45
        yield "                    </div>

                    <button type=\"submit\" class=\"btn btn-primary btn-block\" name=\"submit\">Login</button>
                    <a href=\"register\"><p>Register</p></a>        
                </form>
            </div>
        </div>
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
        return array (  105 => 45,  99 => 43,  97 => 42,  91 => 39,  87 => 37,  81 => 35,  79 => 34,  75 => 33,  70 => 31,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login</title>
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">

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
    <div class=\"centered-container\">
        <div class=\"register-container\">
            <div class=\"card p-4\">
                <h2 class=\"text-center mb-4\">Login</h2>

                <form method=\"POST\" action=\"/technique-db-mvc/public/login\">

                    <div class=\"form-group{{ errors.username ? ' has-error' : '' }}\">
                        <label for=\"username\">Username</label>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"{{ input.username ?? '' }}\" placeholder=\"Enter username\">
                        {% if errors.username %}
                            <span class=\"form-text error-message\">{{ errors.username }}</span>
                        {% endif %}
                    </div>
                    
                    <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">
                        <label for=\"password1\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Enter password\">
                        {% if errors.password %}
                            <span class=\"form-text error-message\">{{ errors.password }}</span>
                        {% endif %}
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary btn-block\" name=\"submit\">Login</button>
                    <a href=\"register\"><p>Register</p></a>        
                </form>
            </div>
        </div>
    </div>
</body>
</html>
", "login.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/login.twig");
    }
}
