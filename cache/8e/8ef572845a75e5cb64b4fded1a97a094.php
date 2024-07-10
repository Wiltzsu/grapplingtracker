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

/* front_page.php */
class __TwigTemplate_a2ee76bb2b30dae4163eaa932e22b486 extends Template
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
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

</head>
<body>

<div class=\"container-fluid hero-section\">
    <div class=\"container\">
        <h1>Grappling Tracker</h1>
        <p>Your ultimate journal and tracker for grappling techniques.</p>
    </div>
</div>

<div class=\"d-flex justify-content-center align-items-center\">
    
    <div class=\"container-fluid features\">
    <div class=\"cta-buttons mb-3\">
    <a href=\"login\" class=\"btn btn-primary btn-lg\" role=\"button\" aria-disabled=\"true\">Login</a>
    <a href=\"register\" class=\"btn btn-warning btn-lg\" role=\"button\" aria-disabled=\"true\">Sign up</a>

  
        <h1 class=\"text-center\">Features</h1>

        <div class=\"row m-5 align-items-start\">
            <div class=\"col-md-6 feature-item text-center\">
                <h3>Log Your Practice</h3>
                <p>Keep track of your daily practice sessions and monitor your progress over time.</p>
                <img src=\"/technique-db-mvc/public/img/logPractice.png\" alt=\"Add New Technique\" style=\"max-width: 100%; height: auto;\">
            </div>
            <div class=\"col-md-6 feature-item text-center\">
                <h3>Add New Techniques</h3>
                <p>Expand your repertoire by adding and categorizing new grappling techniques.</p>
                <img src=\"/technique-db-mvc/public/img/addNew4.png\" alt=\"Add New Technique\" style=\"max-width: 100%; height: auto;\">
            </div>
        </div>

<hr>

<div class=\"row ml-5 mr-5 mt-5\">
    <div class=\"col-sm-12 feature-item text-center\">
    <h3>Track your belt progression</h3>
            
            <p>Access your techniques library anytime, anywhere, and stay on top of your game.</p>
            <img src=\"/technique-db-mvc/public/img/beltProgression.png\" alt=\"Belt Progression\" style=\"max-width: 100%; height: auto;\">


    </div>
</div>

    </div>
</div>

<?php require_once \"footer.php\" ?>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front_page.php";
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
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

</head>
<body>

<div class=\"container-fluid hero-section\">
    <div class=\"container\">
        <h1>Grappling Tracker</h1>
        <p>Your ultimate journal and tracker for grappling techniques.</p>
    </div>
</div>

<div class=\"d-flex justify-content-center align-items-center\">
    
    <div class=\"container-fluid features\">
    <div class=\"cta-buttons mb-3\">
    <a href=\"login\" class=\"btn btn-primary btn-lg\" role=\"button\" aria-disabled=\"true\">Login</a>
    <a href=\"register\" class=\"btn btn-warning btn-lg\" role=\"button\" aria-disabled=\"true\">Sign up</a>

  
        <h1 class=\"text-center\">Features</h1>

        <div class=\"row m-5 align-items-start\">
            <div class=\"col-md-6 feature-item text-center\">
                <h3>Log Your Practice</h3>
                <p>Keep track of your daily practice sessions and monitor your progress over time.</p>
                <img src=\"/technique-db-mvc/public/img/logPractice.png\" alt=\"Add New Technique\" style=\"max-width: 100%; height: auto;\">
            </div>
            <div class=\"col-md-6 feature-item text-center\">
                <h3>Add New Techniques</h3>
                <p>Expand your repertoire by adding and categorizing new grappling techniques.</p>
                <img src=\"/technique-db-mvc/public/img/addNew4.png\" alt=\"Add New Technique\" style=\"max-width: 100%; height: auto;\">
            </div>
        </div>

<hr>

<div class=\"row ml-5 mr-5 mt-5\">
    <div class=\"col-sm-12 feature-item text-center\">
    <h3>Track your belt progression</h3>
            
            <p>Access your techniques library anytime, anywhere, and stay on top of your game.</p>
            <img src=\"/technique-db-mvc/public/img/beltProgression.png\" alt=\"Belt Progression\" style=\"max-width: 100%; height: auto;\">


    </div>
</div>

    </div>
</div>

<?php require_once \"footer.php\" ?>
", "front_page.php", "/opt/lampp/htdocs/technique-db-mvc/resources/views/front_page.php");
    }
}
