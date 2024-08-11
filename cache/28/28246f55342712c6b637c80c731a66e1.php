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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Activation Success</title>
    <!-- Include Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/style.css\" rel=\"stylesheet\">

</head>
<body>
    <div class=\"container vh-100\">
            <div>LOGO</div>

        <div class=\"row h-100 justify-content-center align-items-center\">
            <div class=\"col-md-8 text-center\">
                <h1>Your account has been activated successfully!</h1>
                <p>You can now login to your account.</p>
                <p><a href=\"login\" class=\"btn btn-primary mt-3 login-button\">Login</a></p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper (includes jQuery) -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\"></script>
    -->
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Activation Success</title>
    <!-- Include Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/style.css\" rel=\"stylesheet\">

</head>
<body>
    <div class=\"container vh-100\">
            <div>LOGO</div>

        <div class=\"row h-100 justify-content-center align-items-center\">
            <div class=\"col-md-8 text-center\">
                <h1>Your account has been activated successfully!</h1>
                <p>You can now login to your account.</p>
                <p><a href=\"login\" class=\"btn btn-primary mt-3 login-button\">Login</a></p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper (includes jQuery) -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\"></script>
    -->
</body>
</html>
", "activation_success.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/activation_success.twig");
    }
}
