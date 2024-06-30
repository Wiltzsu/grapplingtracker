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

/* @Header/header.twig */
class __TwigTemplate_4c08075eab426a6f83997fab37ea2630 extends Template
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
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</head>
<body>


<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top\">
    <a class=\"navbar-brand\" href=\"/technique-db-mvc/mainview\">Grappling Tracker</a>

    <div class=\"collapse navbar-collapse\" id=\"navbarText\">
      <!-- Navbar links go here -->
    </div>
    <div class=\"collapse navbar-collapse\" id=\"navbarText\">
    <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"mainview\">Journal <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"addnew\">Add new</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"viewitems\">View items</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"profile\">Belt progression</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"profile\">Guide</a>
          </li>
        </ul>
      <span class=\"navbar-text\">
            ";
        // line 42
        if (($context["username"] ?? null)) {
            // line 43
            yield "                <a href=\"logout\" class=\"btn btn-danger btn1\">Logout</a>
            ";
        }
        // line 45
        yield "      </span>
    </div>
</nav>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Header/header.twig";
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
        return array (  87 => 45,  83 => 43,  81 => 42,  38 => 1,);
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
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</head>
<body>


<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top\">
    <a class=\"navbar-brand\" href=\"/technique-db-mvc/mainview\">Grappling Tracker</a>

    <div class=\"collapse navbar-collapse\" id=\"navbarText\">
      <!-- Navbar links go here -->
    </div>
    <div class=\"collapse navbar-collapse\" id=\"navbarText\">
    <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"mainview\">Journal <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"addnew\">Add new</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"viewitems\">View items</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"profile\">Belt progression</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"profile\">Guide</a>
          </li>
        </ul>
      <span class=\"navbar-text\">
            {% if username %}
                <a href=\"logout\" class=\"btn btn-danger btn1\">Logout</a>
            {% endif %}
      </span>
    </div>
</nav>", "@Header/header.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/header.twig");
    }
}
