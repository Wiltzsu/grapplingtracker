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

/* @Footer/footer.twig */
class __TwigTemplate_c2ccb9f3580a8caf0131452538901409 extends Template
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
        yield "</div>
<footer class=\"bg-dark text-white mt-5\">
    <div class=\"container text-center py-3\">
        <p class=\"mb-0\">&copy; 2024 Grappling Tracker. All rights reserved.</p>
        <a href=\"/privacy-policy\" class=\"text-light\">Privacy Policy</a>
    </div>
</footer>

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
        return "@Footer/footer.twig";
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
        return new Source("</div>
<footer class=\"bg-dark text-white mt-5\">
    <div class=\"container text-center py-3\">
        <p class=\"mb-0\">&copy; 2024 Grappling Tracker. All rights reserved.</p>
        <a href=\"/privacy-policy\" class=\"text-light\">Privacy Policy</a>
    </div>
</footer>

</body>
</html>
", "@Footer/footer.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/footer.twig");
    }
}
