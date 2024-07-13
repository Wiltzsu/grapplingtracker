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

/* @HeaderAddItems/header_additems.twig */
class __TwigTemplate_674d5bf050f1439c1f1f5d38842dc248 extends Template
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
        yield "<nav class=\"navbar navbar-expand-lg bg-light mb-3\">
    <div class=\"container\">
        <div class=\"justify-content-between\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-link\" aria-current=\"page\" href=\"addtechnique\">Technique</a>
                <a class=\"nav-link\" href=\"addclass\">Class</a>
                <a class=\"nav-link\" href=\"addposition\">Position</a>
                <a class=\"nav-link\" href=\"addcategory\">Category</a>
            </div>
        </div>
    </div>
</nav>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@HeaderAddItems/header_additems.twig";
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
        return new Source("<nav class=\"navbar navbar-expand-lg bg-light mb-3\">
    <div class=\"container\">
        <div class=\"justify-content-between\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-link\" aria-current=\"page\" href=\"addtechnique\">Technique</a>
                <a class=\"nav-link\" href=\"addclass\">Class</a>
                <a class=\"nav-link\" href=\"addposition\">Position</a>
                <a class=\"nav-link\" href=\"addcategory\">Category</a>
            </div>
        </div>
    </div>
</nav>", "@HeaderAddItems/header_additems.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/header_additems.twig");
    }
}
