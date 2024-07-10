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
    <title>Grappling Tracker</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\" integrity=\"sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy\" crossorigin=\"anonymous\"></script>
</head>
<body>


<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top p-3\">
    <a class=\"navbar-brand\" href=\"mainview\">Grappling Tracker</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav me-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"mainview\">Dashboard</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"addtechnique\">Add</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"viewtechniques\">View</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Guide</a>
            </li>
        </ul>
       <ul class=\"navbar-nav ms-auto\"> <!-- This ul is added to push the dropdown to the right -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <span class=\"navbar-text\">
            ";
        // line 40
        if (($context["username"] ?? null)) {
            // line 41
            yield "               ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
            yield " 
                
            ";
        }
        // line 44
        yield "        </span>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <li><a class=\"dropdown-item\" href=\"profile\">Profile</a></li>
                    <li><a class=\"dropdown-item\" href=\"settings\">Settings</a></li>
                    <li><a href=\"logout\" class=\"dropdown-item\">Logout</a></li>
                </ul>
            </li>
        </ul>

        
    </div>
</nav>

";
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
        return array (  88 => 44,  81 => 41,  79 => 40,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Grappling Tracker</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\" integrity=\"sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy\" crossorigin=\"anonymous\"></script>
</head>
<body>


<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top p-3\">
    <a class=\"navbar-brand\" href=\"mainview\">Grappling Tracker</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav me-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"mainview\">Dashboard</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"addtechnique\">Add</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"viewtechniques\">View</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Guide</a>
            </li>
        </ul>
       <ul class=\"navbar-nav ms-auto\"> <!-- This ul is added to push the dropdown to the right -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <span class=\"navbar-text\">
            {% if username %}
               {{ username }} 
                
            {% endif %}
        </span>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <li><a class=\"dropdown-item\" href=\"profile\">Profile</a></li>
                    <li><a class=\"dropdown-item\" href=\"settings\">Settings</a></li>
                    <li><a href=\"logout\" class=\"dropdown-item\">Logout</a></li>
                </ul>
            </li>
        </ul>

        
    </div>
</nav>

", "@Header/header.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/header.twig");
    }
}
