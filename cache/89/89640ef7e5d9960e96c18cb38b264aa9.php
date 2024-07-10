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
        yield from         $this->loadTemplate("@HeaderAddItems/header_additems.twig", "addnew/add_position.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "
<div class=\"container\">
    <!-- Position Form Column -->
    <form method=\"POST\" action=\"\" >
        <!-- Position name -->
        <h5>Add a position</h5>
        <div class=\"form-group";
        // line 9
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "positionName", [], "any", false, false, false, 9)) ? (" has-error") : (""));
        yield "\">
                <label for=\"positionName\" class=\"mt-3\">Position name:</label>
                <input type=\"text\" class=\"form-control\" id=\"positionName\" name=\"positionName\" value=\"";
        // line 11
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "positionName", [], "any", true, true, false, 11) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "positionName", [], "any", false, false, false, 11)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "positionName", [], "any", false, false, false, 11), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"\">
                ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "positionName", [], "any", false, false, false, 12)) {
            // line 13
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "positionName", [], "any", false, false, false, 13), "html", null, true);
            yield "</span>
                ";
        }
        // line 15
        yield "            </div>

            <!-- Description -->
            <div class=\"form-group";
        // line 18
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "positionDescription", [], "any", false, false, false, 18)) ? (" has-error") : (""));
        yield "\">
                <label for=\"positionDescription\" class=\"mt-3\">Description:</label>
                <textarea class=\"form-control\" id=\"positionDescription\" name=\"positionDescription\" value=\"";
        // line 20
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "positionDescription", [], "any", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "positionDescription", [], "any", false, false, false, 20)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "positionDescription", [], "any", false, false, false, 20), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"\"></textarea>
                ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "positionDescription", [], "any", false, false, false, 21)) {
            // line 22
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "positionDescription", [], "any", false, false, false, 22), "html", null, true);
            yield "</span>
                ";
        }
        // line 24
        yield "            </div>
        <button type=\"submit\" name=\"submitPosition\" class=\"btn btn-primary mt-3\">Add Position</button>
    </form>
</div>";
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
        return array (  89 => 24,  83 => 22,  81 => 21,  77 => 20,  72 => 18,  67 => 15,  61 => 13,  59 => 12,  55 => 11,  50 => 9,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}
{% include '@HeaderAddItems/header_additems.twig' %}

<div class=\"container\">
    <!-- Position Form Column -->
    <form method=\"POST\" action=\"\" >
        <!-- Position name -->
        <h5>Add a position</h5>
        <div class=\"form-group{{ errors.positionName ? ' has-error' : '' }}\">
                <label for=\"positionName\" class=\"mt-3\">Position name:</label>
                <input type=\"text\" class=\"form-control\" id=\"positionName\" name=\"positionName\" value=\"{{ input.positionName  ?? '' }}\" placeholder=\"\">
                {% if errors.positionName %}
                    <span class=\"form-text error-message\">{{ errors.positionName }}</span>
                {% endif %}
            </div>

            <!-- Description -->
            <div class=\"form-group{{ errors.positionDescription ? ' has-error' : '' }}\">
                <label for=\"positionDescription\" class=\"mt-3\">Description:</label>
                <textarea class=\"form-control\" id=\"positionDescription\" name=\"positionDescription\" value=\"{{ input.positionDescription  ?? '' }}\" placeholder=\"\"></textarea>
                {% if errors.positionDescription %}
                    <span class=\"form-text error-message\">{{ errors.positionDescription }}</span>
                {% endif %}
            </div>
        <button type=\"submit\" name=\"submitPosition\" class=\"btn btn-primary mt-3\">Add Position</button>
    </form>
</div>", "addnew/add_position.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/addnew/add_position.twig");
    }
}
