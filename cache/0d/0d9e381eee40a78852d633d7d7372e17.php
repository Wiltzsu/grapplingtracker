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

/* addnew/add_category.twig */
class __TwigTemplate_448eb5cc1e98bb57975988b5a8fa9c6c extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "addnew/add_category.twig", 1)->unwrap()->yield($context);
        // line 2
        yield from         $this->loadTemplate("@HeaderAddItems/header_additems.twig", "addnew/add_category.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "
<div class=\"container\">
    <!-- Category Form Column -->
    <form method=\"POST\" action=\"\">
        <h5>Add a category</h5>
        <!-- Category name -->
        <div class=\"form-group";
        // line 9
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "categoryName", [], "any", false, false, false, 9)) ? (" has-error") : (""));
        yield "\">
            <label for=\"categoryName\" class=\"mt-3\">Category Name:</label>
            <input type=\"text\" class=\"form-control\" id=\"categoryName\" name=\"categoryName\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "categoryName", [], "any", false, false, false, 11), "html", null, true);
        yield "\" placeholder=\"\">
            ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "categoryName", [], "any", false, false, false, 12)) {
            // line 13
            yield "                <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "categoryName", [], "any", false, false, false, 13), "html", null, true);
            yield "</span>
            ";
        }
        // line 15
        yield "        </div>

        <!-- Description -->
        <div class=\"form-group";
        // line 18
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "categoryDescription", [], "any", false, false, false, 18)) ? (" has-error") : (""));
        yield "\">
            <label for=\"categoryDescription\" class=\"mt-3\">Description:</label>
            <textarea class=\"form-control\" id=\"categoryDescription\" name=\"categoryDescription\" value=\"";
        // line 20
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "categoryDescription", [], "any", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "categoryDescription", [], "any", false, false, false, 20)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "categoryDescription", [], "any", false, false, false, 20), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"\"></textarea>
            ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "categoryDescription", [], "any", false, false, false, 21)) {
            // line 22
            yield "                <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "categoryDescription", [], "any", false, false, false, 22), "html", null, true);
            yield "</span>
            ";
        }
        // line 24
        yield "        </div>

        <button type=\"submit\" name=\"submitCategory\" class=\"btn btn-primary mt-3\">Add Category</button>
    </form>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "addnew/add_category.twig";
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
        return array (  89 => 24,  83 => 22,  81 => 21,  77 => 20,  72 => 18,  67 => 15,  61 => 13,  59 => 12,  55 => 11,  50 => 9,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}
{% include '@HeaderAddItems/header_additems.twig' %}

<div class=\"container\">
    <!-- Category Form Column -->
    <form method=\"POST\" action=\"\">
        <h5>Add a category</h5>
        <!-- Category name -->
        <div class=\"form-group{{ errors.categoryName ? ' has-error' : '' }}\">
            <label for=\"categoryName\" class=\"mt-3\">Category Name:</label>
            <input type=\"text\" class=\"form-control\" id=\"categoryName\" name=\"categoryName\" value=\"{{ input.categoryName }}\" placeholder=\"\">
            {% if errors.categoryName %}
                <span class=\"form-text error-message\">{{ errors.categoryName }}</span>
            {% endif %}
        </div>

        <!-- Description -->
        <div class=\"form-group{{ errors.categoryDescription ? ' has-error' : '' }}\">
            <label for=\"categoryDescription\" class=\"mt-3\">Description:</label>
            <textarea class=\"form-control\" id=\"categoryDescription\" name=\"categoryDescription\" value=\"{{ input.categoryDescription  ?? '' }}\" placeholder=\"\"></textarea>
            {% if errors.categoryDescription %}
                <span class=\"form-text error-message\">{{ errors.categoryDescription }}</span>
            {% endif %}
        </div>

        <button type=\"submit\" name=\"submitCategory\" class=\"btn btn-primary mt-3\">Add Category</button>
    </form>
</div>", "addnew/add_category.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/addnew/add_category.twig");
    }
}
