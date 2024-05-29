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

/* read_view.twig */
class __TwigTemplate_924b87c2299e893cf11087ba4fb1207b extends Template
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
<html>
    <head>
    <title>Home</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    </head>
    <body>
        <div class=\"accordion\" id=\"accordionExample\">
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingOne\">
            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                Accordion Item #1
            </button>
            </h2>
            <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
            <div class=\"accordion-body\">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingTwo\">
            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                Accordion Item #2
            </button>
            </h2>
            <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
            <div class=\"accordion-body\">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
            </div>
        </div>
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"headingThree\">
            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                Accordion Item #3
            </button>
            </h2>
            <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
            <div class=\"accordion-body\">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
            </div>
        </div>
        </div>

    <h1>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "message", [], "any", false, false, false, 47), "html", null, true);
        yield "</h1>
    <a href=\"/technique-db-mvc/public/readview\" style=\"display: inline-block; padding: 8px 16px; background-color: blue; color: white; text-decoration: none; border-radius: 5px;\">About Us</a>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\"></script>


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
        return "read_view.twig";
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
        return array (  86 => 47,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "read_view.twig", "/opt/lampp/htdocs/technique-db-mvc/src/Views/templates/read_view.twig");
    }
}
