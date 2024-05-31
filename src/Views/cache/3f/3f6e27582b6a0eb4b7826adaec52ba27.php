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

/* main_view.twig */
class __TwigTemplate_1dcfb082ab6604ec2a9d3e1a28e83bd0 extends Template
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
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">

</head>
<body>
    <h1>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "message", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>

<div class=\"container centered-container\">
    <div class=\"card p-4\">
        <h2 class=\"text-center mb-4\">Grappling Technique Journal</h2>
        <p class=\"text-center\"><?php echo \$greeting; ?></p>

        <div class=\"list-group\">
            <a href=\"journal/journal.php\" class=\"list-group-item list-group-item-action\">
                <strong>Journal:</strong> View and log your daily practice.
            </a>

            <a href=\"technique/home_technique.php\" class=\"list-group-item list-group-item-action\">
                <strong>Add:</strong> Add new techniques, categories, and positions.
            </a>

            <a href=\"/technique-db-mvc/public/readview\" class=\"list-group-item list-group-item-action\">
                <strong>View:</strong> View your techniques, categories, and positions.
            </a>

            <a href=\"profile.php\" class=\"list-group-item list-group-item-action\">
                <strong>Your Profile:</strong> View and edit your personal information.
            </a>
        </div>

        ";
        // line 34
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "username", [], "any", false, false, false, 34)) {
            // line 35
            yield "            <div class=\"text-center mt-3\">
                <a href=\"users/login.php\" class=\"btn btn-primary\">Login</a>
                <a href=\"users/register.php\" class=\"btn btn-secondary btn1 ml-2\">Sign Up</a>
            </div>
        ";
        }
        // line 40
        yield "
        <?php
        if (isset(\$_SESSION['username']) && !empty(\$_SESSION['username'])) {?>
                <div class=\"text-center mt-3\">
            <a href=\"users/logout.php\" class=\"btn btn-primary btn1\">Logout</a>
        </div><?php
        }?>


</div>


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
        return "main_view.twig";
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
        return array (  85 => 40,  78 => 35,  76 => 34,  48 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main_view.twig", "/opt/lampp/htdocs/technique-db-mvc/src/Views/templates/main_view.twig");
    }
}
