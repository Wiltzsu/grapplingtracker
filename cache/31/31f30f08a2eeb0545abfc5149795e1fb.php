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

/* addnew/add_new.twig */
class __TwigTemplate_3d4bfb713c3e771c8bd0e72745862219 extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "addnew/add_new.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<div class=\"container-fluid p-5\">

<ul class=\"list-group list-group-flush\">
  <li class=\"list-group-item\"><a href=\"addtechnique\">Add technique</a></li>
  <li class=\"list-group-item\"><a href=\"addcategory\">Add category</a></li>
  <li class=\"list-group-item\"><a href=\"addposition\">Add position</a></li>
  <li class=\"list-group-item\"><a href=\"addclass\">Add class</a></li>
</ul>

";
        // line 12
        yield from         $this->loadTemplate("footer.twig", "addnew/add_new.twig", 12)->unwrap()->yield($context);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "addnew/add_new.twig";
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
        return array (  52 => 12,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}

<div class=\"container-fluid p-5\">

<ul class=\"list-group list-group-flush\">
  <li class=\"list-group-item\"><a href=\"addtechnique\">Add technique</a></li>
  <li class=\"list-group-item\"><a href=\"addcategory\">Add category</a></li>
  <li class=\"list-group-item\"><a href=\"addposition\">Add position</a></li>
  <li class=\"list-group-item\"><a href=\"addclass\">Add class</a></li>
</ul>

{% include 'footer.twig' %}", "addnew/add_new.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/addnew/add_new.twig");
    }
}
