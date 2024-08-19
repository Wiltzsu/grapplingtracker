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

/* front_page.twig */
class __TwigTemplate_b5253dae6b9a6a1af4cd3e7176de6030 extends Template
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
    <title>Welcome to Grappling Tracker</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
</head>
<body>

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h1 class=\"page-title position-absolute top-0 start-0 ms-4 mt-3\">Grappling Tracker</h1>
        </div>
        <!-- Ensure that dynamic text does not display on small screens -->
        <div class=\"col-lg-7 d-none d-lg-flex align-items-center justify-content-center dynamic-text-background\" style=\"min-height: 100vh;\">
            <h2 id=\"dynamicText\"></h2>
        </div>
        <!-- Center buttons vertically and horizontally on all screens -->
        <div class=\"col-12 col-lg-5 d-flex flex-column align-items-center justify-content-center get-started-background\" style=\"min-height: 100vh;\">
            <div class=\"text-center\">
                <h3 class=\"get-started mb-4\">Get started</h3>
                <a href=\"login\" class=\"btn btn-lg custom-button signup-button mb-3\">Log in</a>
                <a href=\"register\" class=\"btn btn-lg custom-button signup-button mb-3\">Sign up</a>
            </div>
        </div>
    </div>
</div>

<script src=\"/technique-db-mvc/public/js/frontPageAnimation.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
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
        return "front_page.twig";
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
    <title>Welcome to Grappling Tracker</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
</head>
<body>

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h1 class=\"page-title position-absolute top-0 start-0 ms-4 mt-3\">Grappling Tracker</h1>
        </div>
        <!-- Ensure that dynamic text does not display on small screens -->
        <div class=\"col-lg-7 d-none d-lg-flex align-items-center justify-content-center dynamic-text-background\" style=\"min-height: 100vh;\">
            <h2 id=\"dynamicText\"></h2>
        </div>
        <!-- Center buttons vertically and horizontally on all screens -->
        <div class=\"col-12 col-lg-5 d-flex flex-column align-items-center justify-content-center get-started-background\" style=\"min-height: 100vh;\">
            <div class=\"text-center\">
                <h3 class=\"get-started mb-4\">Get started</h3>
                <a href=\"login\" class=\"btn btn-lg custom-button signup-button mb-3\">Log in</a>
                <a href=\"register\" class=\"btn btn-lg custom-button signup-button mb-3\">Sign up</a>
            </div>
        </div>
    </div>
</div>

<script src=\"/technique-db-mvc/public/js/frontPageAnimation.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</body>
</html>
", "front_page.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/front_page.twig");
    }
}
