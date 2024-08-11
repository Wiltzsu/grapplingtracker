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

/* reset_password.twig */
class __TwigTemplate_f9c2bc15267251f3e812c4f3a3085bbd extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Welcome</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
</head>
<body>

<form method=\"POST\" action=\"send-password-reset\">
    <div class=\"form-group\">
        <label for=\"email\">Enter your email address:</label>
        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Send Reset Link</button>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reset_password.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
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
<body>

<form method=\"POST\" action=\"send-password-reset\">
    <div class=\"form-group\">
        <label for=\"email\">Enter your email address:</label>
        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Send Reset Link</button>
</form>
", "reset_password.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/reset_password.twig");
    }
}
