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

/* addnew/add_position.twig */
class __TwigTemplate_fae9ba812d77b0576fe064053a9ee66f extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "addnew/add_position.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<div class=\"container p-5\">
    <!-- Back button -->
    <button class=\"svg-button\" onclick=\"window.location.href='addnew'\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
        <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/>
    </svg>
    </button>

    <!-- Position Form Column -->
    <form method=\"POST\" action=\"\" >
        <!-- Position name -->
        <h4>Add a New Position</h4>
        <div class=\"form-group\">
                <label for=\"positionName\">Position Name:</label>
                <input type=\"text\" class=\"form-control\" id=\"positionName\" name=\"positionName\" required>
            </div>

            <!-- Description -->
            <div class=\"form-group\">
                <label for=\"positionDescription\">Description:</label>
                <textarea class=\"form-control\" id=\"positionDescription\" name=\"positionDescription\" required></textarea>
            </div>
        <button type=\"submit\" name=\"submitPosition\" class=\"btn btn-primary btn2\">Add Position</button>
    </form>
</div>

";
        // line 29
        yield from         $this->loadTemplate("footer.twig", "addnew/add_position.twig", 29)->unwrap()->yield($context);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "addnew/add_position.twig";
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
        return array (  69 => 29,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}

<div class=\"container p-5\">
    <!-- Back button -->
    <button class=\"svg-button\" onclick=\"window.location.href='addnew'\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
        <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/>
    </svg>
    </button>

    <!-- Position Form Column -->
    <form method=\"POST\" action=\"\" >
        <!-- Position name -->
        <h4>Add a New Position</h4>
        <div class=\"form-group\">
                <label for=\"positionName\">Position Name:</label>
                <input type=\"text\" class=\"form-control\" id=\"positionName\" name=\"positionName\" required>
            </div>

            <!-- Description -->
            <div class=\"form-group\">
                <label for=\"positionDescription\">Description:</label>
                <textarea class=\"form-control\" id=\"positionDescription\" name=\"positionDescription\" required></textarea>
            </div>
        <button type=\"submit\" name=\"submitPosition\" class=\"btn btn-primary btn2\">Add Position</button>
    </form>
</div>

{% include 'footer.twig' %}", "addnew/add_position.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/addnew/add_position.twig");
    }
}
