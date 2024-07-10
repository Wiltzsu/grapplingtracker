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

/* addnew/add_class.twig */
class __TwigTemplate_b5a60d531ac90859ac940bf79ae70913 extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "addnew/add_class.twig", 1)->unwrap()->yield($context);
        // line 2
        yield from         $this->loadTemplate("@HeaderAddItems/header_additems.twig", "addnew/add_class.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "
<div class=\"container\">
    <!-- Training Class Form Column -->
    <form method=\"POST\" action=\"\" >
        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userID"] ?? null), "html", null, true);
        yield "\">
        </div>

        <!-- Instructor name -->
        <h5>Add a training class</h5>
            <div class=\"form-group";
        // line 14
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 14)) ? (" has-error") : (""));
        yield "\">
                <label for=\"instructor\" class=\"mt-3\">Instructor name:</label>
                <input type=\"text\" class=\"form-control\" id=\"instructor\" name=\"instructor\" value=\"";
        // line 16
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", false, false, false, 16)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", false, false, false, 16), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"\">
                ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 17)) {
            // line 18
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 18), "html", null, true);
            yield "</span>
                ";
        }
        // line 20
        yield "            </div>

            <!-- Location -->
            <div class=\"form-group";
        // line 23
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 23)) ? (" has-error") : (""));
        yield "\">
                <label for=\"location\" class=\"mt-3\">Location:</label>
                <input type=\"textarea\" class=\"form-control\" id=\"location\" name=\"location\" value=\"";
        // line 25
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", false, false, false, 25)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", false, false, false, 25), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"\" >
                ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 26)) {
            // line 27
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 27), "html", null, true);
            yield "</span>
                ";
        }
        // line 29
        yield "            </div>

            <!-- Duration -->
            <div class=\"form-group";
        // line 32
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 32)) ? (" has-error") : (""));
        yield "\">
                <label for=\"duration\" class=\"mt-3\">Duration (minutes):</label>
                <input type=\"number\" class=\"form-control\" id=\"duration\" name=\"duration\" value=\"";
        // line 34
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", false, false, false, 34)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", false, false, false, 34), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"\">
                ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 35)) {
            // line 36
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                ";
        }
        // line 38
        yield "            </div>

            <!-- Date -->
            <div class=\"form-group";
        // line 41
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDate", [], "any", false, false, false, 41)) ? (" has-error") : (""));
        yield "\">
                <label for=\"date\" class=\"mt-3\">Date:</label>
                <input type=\"date\" class=\"form-control\" id=\"date\" name=\"classDate\" value=\"";
        // line 43
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDate", [], "any", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDate", [], "any", false, false, false, 43)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDate", [], "any", false, false, false, 43), "html", null, true)) : (yield ""));
        yield "\" >
                ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDate", [], "any", false, false, false, 44)) {
            // line 45
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDate", [], "any", false, false, false, 45), "html", null, true);
            yield "</span>
                ";
        }
        // line 47
        yield "            </div>

            <!-- Class description -->
            <div class=\"form-group";
        // line 50
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 50)) ? (" has-error") : (""));
        yield "\">
                <label for=\"classDescription\" class=\"mt-3\">Description:</label>
                <textarea class=\"form-control\" id=\"classDescription\" name=\"classDescription\" value=\"";
        // line 52
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", false, false, false, 52)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", false, false, false, 52), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"\"></textarea>
                ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 53)) {
            // line 54
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 54), "html", null, true);
            yield "</span>
                ";
        }
        // line 56
        yield "            </div>

            <!-- Rolling rounds per class -->
            <div class=\"form-group\">
                <label for=\"rounds\" class=\"mt-3\">Amount of rounds:</label>
                <input type=\"number\" class=\"form-control\" id=\"rounds\" name=\"rounds\" value=\"";
        // line 61
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "rounds", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "rounds", [], "any", false, false, false, 61)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "rounds", [], "any", false, false, false, 61), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"\">
                <div class=\"form-text mb-2\">Optional field.</div>
            </div>

            <!-- Round duration -->
            <div class=\"form-group\">
                <label for=\"roundDuration\" class=\"mt-3\">One round duration:</label>
                <input type=\"number\" class=\"form-control\" id=\"roundDuration\" name=\"roundDuration\" value=\"";
        // line 68
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "roundDuration", [], "any", true, true, false, 68) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "roundDuration", [], "any", false, false, false, 68)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "roundDuration", [], "any", false, false, false, 68), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"\">
                <div class=\"form-text mb-2\">Optional field.</div>
            </div>
            
        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary mt-3\">Add Class</button>
    </form>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "addnew/add_class.twig";
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
        return array (  180 => 68,  170 => 61,  163 => 56,  157 => 54,  155 => 53,  151 => 52,  146 => 50,  141 => 47,  135 => 45,  133 => 44,  129 => 43,  124 => 41,  119 => 38,  113 => 36,  111 => 35,  107 => 34,  102 => 32,  97 => 29,  91 => 27,  89 => 26,  85 => 25,  80 => 23,  75 => 20,  69 => 18,  67 => 17,  63 => 16,  58 => 14,  50 => 9,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}
{% include '@HeaderAddItems/header_additems.twig' %}

<div class=\"container\">
    <!-- Training Class Form Column -->
    <form method=\"POST\" action=\"\" >
        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"{{ userID }}\">
        </div>

        <!-- Instructor name -->
        <h5>Add a training class</h5>
            <div class=\"form-group{{ errors.instructor ? ' has-error' : '' }}\">
                <label for=\"instructor\" class=\"mt-3\">Instructor name:</label>
                <input type=\"text\" class=\"form-control\" id=\"instructor\" name=\"instructor\" value=\"{{ input.instructor ?? '' }}\" placeholder=\"\">
                {% if errors.instructor %}
                    <span class=\"form-text error-message\">{{ errors.instructor }}</span>
                {% endif %}
            </div>

            <!-- Location -->
            <div class=\"form-group{{ errors.location ? ' has-error' : '' }}\">
                <label for=\"location\" class=\"mt-3\">Location:</label>
                <input type=\"textarea\" class=\"form-control\" id=\"location\" name=\"location\" value=\"{{ input.location ?? '' }}\" placeholder=\"\" >
                {% if errors.location %}
                    <span class=\"form-text error-message\">{{ errors.location }}</span>
                {% endif %}
            </div>

            <!-- Duration -->
            <div class=\"form-group{{ errors.duration ? ' has-error' : '' }}\">
                <label for=\"duration\" class=\"mt-3\">Duration (minutes):</label>
                <input type=\"number\" class=\"form-control\" id=\"duration\" name=\"duration\" value=\"{{ input.duration  ?? '' }}\" placeholder=\"\">
                {% if errors.duration %}
                    <span class=\"form-text error-message\">{{ errors.duration }}</span>
                {% endif %}
            </div>

            <!-- Date -->
            <div class=\"form-group{{ errors.classDate ? ' has-error' : '' }}\">
                <label for=\"date\" class=\"mt-3\">Date:</label>
                <input type=\"date\" class=\"form-control\" id=\"date\" name=\"classDate\" value=\"{{ input.classDate  ?? '' }}\" >
                {% if errors.classDate %}
                    <span class=\"form-text error-message\">{{ errors.classDate }}</span>
                {% endif %}
            </div>

            <!-- Class description -->
            <div class=\"form-group{{ errors.classDescription ? ' has-error' : '' }}\">
                <label for=\"classDescription\" class=\"mt-3\">Description:</label>
                <textarea class=\"form-control\" id=\"classDescription\" name=\"classDescription\" value=\"{{ input.classDescription  ?? '' }}\" placeholder=\"\"></textarea>
                {% if errors.classDescription %}
                    <span class=\"form-text error-message\">{{ errors.classDescription }}</span>
                {% endif %}
            </div>

            <!-- Rolling rounds per class -->
            <div class=\"form-group\">
                <label for=\"rounds\" class=\"mt-3\">Amount of rounds:</label>
                <input type=\"number\" class=\"form-control\" id=\"rounds\" name=\"rounds\" value=\"{{ input.rounds  ?? '' }}\" placeholder=\"\">
                <div class=\"form-text mb-2\">Optional field.</div>
            </div>

            <!-- Round duration -->
            <div class=\"form-group\">
                <label for=\"roundDuration\" class=\"mt-3\">One round duration:</label>
                <input type=\"number\" class=\"form-control\" id=\"roundDuration\" name=\"roundDuration\" value=\"{{ input.roundDuration  ?? '' }}\" placeholder=\"\">
                <div class=\"form-text mb-2\">Optional field.</div>
            </div>
            
        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary mt-3\">Add Class</button>
    </form>
</div>", "addnew/add_class.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/addnew/add_class.twig");
    }
}
