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

/* @HeaderViewItems/header_viewitems.twig */
class __TwigTemplate_1f314ad94ea4be36a18fb25555a81ce7 extends Template
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
        yield "<nav class=\"navbar navbar-expand-lg bg-light mb-2\">
    <div class=\"container\">
        <div class=\"justify-content-between\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-link\" aria-current=\"page\" href=\"viewtechniques\">Technique</a>
                <a class=\"nav-link\" href=\"viewclasses\">Class</a>
                <a class=\"nav-link\" href=\"viewpositions\">Position</a>
                <a class=\"nav-link\" href=\"viewcategories\">Category</a>
            </div>
        </div>
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
        return "@HeaderViewItems/header_viewitems.twig";
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
        return new Source("<nav class=\"navbar navbar-expand-lg bg-light mb-2\">
    <div class=\"container\">
        <div class=\"justify-content-between\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-link\" aria-current=\"page\" href=\"viewtechniques\">Technique</a>
                <a class=\"nav-link\" href=\"viewclasses\">Class</a>
                <a class=\"nav-link\" href=\"viewpositions\">Position</a>
                <a class=\"nav-link\" href=\"viewcategories\">Category</a>
            </div>
        </div>
    </div>
</nav>
", "@HeaderViewItems/header_viewitems.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/header_viewitems.twig");
    }
}
