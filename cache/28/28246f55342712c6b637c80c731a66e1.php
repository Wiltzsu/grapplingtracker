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

/* activation_success.twig */
class __TwigTemplate_23b84b41089b4072059b7d37cfe8891c extends Template
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
<html>
<head>
    <title>Activation Success</title>
</head>
<body>
    <h1>Your account has been activated successfully.</h1>
    <p><a href=\"login\">Click here to login</a></p>
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
        return "activation_success.twig";
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
<html>
<head>
    <title>Activation Success</title>
</head>
<body>
    <h1>Your account has been activated successfully.</h1>
    <p><a href=\"login\">Click here to login</a></p>
</body>
</html>
", "activation_success.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/activation_success.twig");
    }
}
