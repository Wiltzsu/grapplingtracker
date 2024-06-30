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
        yield "
<div class=\"container p-5\">
    <!-- Back button -->
    <button class=\"svg-button\" onclick=\"window.location.href='addnew'\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
        <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/>
    </svg>
    </button>
    
    <!-- Training Class Form Column -->
    <form method=\"POST\" action=\"/technique-db-mvc/public/addnew\" >
        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userID"] ?? null), "html", null, true);
        yield "\">
        </div>

        <!-- Instructor name -->
        <h4>Add a New Training Class</h4>
            <div class=\"form-group";
        // line 20
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emptyfield", [], "any", false, false, false, 20) || CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 20))) ? (" has-error") : (""));
        yield "\">
                <label for=\"instructor\">Instructor:</label>
                <input type=\"text\" class=\"form-control\" id=\"instructor\" name=\"instructor\" value=\"";
        // line 22
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", false, false, false, 22)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", false, false, false, 22), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Instructor name\">
                ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emptyfield", [], "any", false, false, false, 23)) {
            // line 24
            yield "                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emptyfield", [], "any", false, false, false, 24), "html", null, true);
            yield "</span>
                ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["errors"] ?? null), "instructor", [], "any", false, false, false, 25)) {
            // line 26
            yield "                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 26), "html", null, true);
            yield "</span>
                ";
        }
        // line 28
        yield "            </div>


            <!-- Location -->
            <div class=\"form-group";
        // line 32
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 32)) ? (" has-error") : (""));
        yield "\">
                <label for=\"location\">Location:</label>
                <input type=\"textarea\" class=\"form-control\" id=\"location\" name=\"location\" value=\"";
        // line 34
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", false, false, false, 34)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", false, false, false, 34), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Class location\" >
                ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 35)) {
            // line 36
            yield "                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                ";
        }
        // line 38
        yield "            </div>

            <!-- Duration -->
            <div class=\"form-group";
        // line 41
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 41)) ? (" has-error") : (""));
        yield "\">
                <label for=\"duration\">Duration (minutes):</label>
                <input type=\"number\" class=\"form-control\" id=\"duration\" name=\"duration\" value=\"";
        // line 43
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", false, false, false, 43)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", false, false, false, 43), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Class duration\" >
                ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 44)) {
            // line 45
            yield "                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 45), "html", null, true);
            yield "</span>
                ";
        }
        // line 47
        yield "            </div>

            <!-- Date -->
            <div class=\"form-group";
        // line 50
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emptyfield", [], "any", false, false, false, 50)) ? (" has-error") : (""));
        yield "\">
                <label for=\"date\">Date:</label>
                <input type=\"date\" class=\"form-control\" id=\"date\" name=\"classDate\" value=\"";
        // line 52
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "date", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "date", [], "any", false, false, false, 52)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "date", [], "any", false, false, false, 52), "html", null, true)) : (yield ""));
        yield "\" >
                ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emptyfield", [], "any", false, false, false, 53)) {
            // line 54
            yield "                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emptyfield", [], "any", false, false, false, 54), "html", null, true);
            yield "</span>
                ";
        }
        // line 56
        yield "            </div>

            <!-- classDescription -->
            <div class=\"form-group";
        // line 59
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 59)) ? (" has-error") : (""));
        yield "\">
                <label for=\"classDescription\">Description / type:</label>
                <textarea class=\"form-control\" id=\"classDescription\" name=\"classDescription\" value=\"";
        // line 61
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", false, false, false, 61)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", false, false, false, 61), "html", null, true)) : (yield ""));
        yield "\"></textarea>
                ";
        // line 62
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 62)) {
            // line 63
            yield "                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 63), "html", null, true);
            yield "</span>
                ";
        }
        // line 65
        yield "            </div>
            
        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn2\">Add Class</button>
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
        return array (  176 => 65,  170 => 63,  168 => 62,  164 => 61,  159 => 59,  154 => 56,  148 => 54,  146 => 53,  142 => 52,  137 => 50,  132 => 47,  126 => 45,  124 => 44,  120 => 43,  115 => 41,  110 => 38,  104 => 36,  102 => 35,  98 => 34,  93 => 32,  87 => 28,  81 => 26,  79 => 25,  74 => 24,  72 => 23,  68 => 22,  63 => 20,  55 => 15,  40 => 2,  38 => 1,);
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
    
    <!-- Training Class Form Column -->
    <form method=\"POST\" action=\"/technique-db-mvc/public/addnew\" >
        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"{{ userID }}\">
        </div>

        <!-- Instructor name -->
        <h4>Add a New Training Class</h4>
            <div class=\"form-group{{ errors.emptyfield or errors.instructor ? ' has-error' : '' }}\">
                <label for=\"instructor\">Instructor:</label>
                <input type=\"text\" class=\"form-control\" id=\"instructor\" name=\"instructor\" value=\"{{ input.instructor ?? '' }}\" placeholder=\"Instructor name\">
                {% if errors.emptyfield %}
                    <span class=\"help-block\">{{ errors.emptyfield }}</span>
                {% elseif errors.instructor %}
                    <span class=\"help-block\">{{ errors.instructor }}</span>
                {% endif %}
            </div>


            <!-- Location -->
            <div class=\"form-group{{ errors.location ? ' has-error' : '' }}\">
                <label for=\"location\">Location:</label>
                <input type=\"textarea\" class=\"form-control\" id=\"location\" name=\"location\" value=\"{{ input.location ?? '' }}\" placeholder=\"Class location\" >
                {% if errors.location %}
                    <span class=\"help-block\">{{ errors.location }}</span>
                {% endif %}
            </div>

            <!-- Duration -->
            <div class=\"form-group{{ errors.duration ? ' has-error' : '' }}\">
                <label for=\"duration\">Duration (minutes):</label>
                <input type=\"number\" class=\"form-control\" id=\"duration\" name=\"duration\" value=\"{{ input.duration  ?? '' }}\" placeholder=\"Class duration\" >
                {% if errors.duration %}
                    <span class=\"help-block\">{{ errors.duration }}</span>
                {% endif %}
            </div>

            <!-- Date -->
            <div class=\"form-group{{ errors.emptyfield ? ' has-error' : '' }}\">
                <label for=\"date\">Date:</label>
                <input type=\"date\" class=\"form-control\" id=\"date\" name=\"classDate\" value=\"{{ input.date  ?? '' }}\" >
                {% if errors.emptyfield %}
                    <span class=\"help-block\">{{ errors.emptyfield }}</span>
                {% endif %}
            </div>

            <!-- classDescription -->
            <div class=\"form-group{{ errors.classDescription ? ' has-error' : '' }}\">
                <label for=\"classDescription\">Description / type:</label>
                <textarea class=\"form-control\" id=\"classDescription\" name=\"classDescription\" value=\"{{ input.classDescription  ?? '' }}\"></textarea>
                {% if errors.classDescription %}
                    <span class=\"help-block\">{{ errors.classDescription }}</span>
                {% endif %}
            </div>
            
        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn2\">Add Class</button>
    </form>
</div>", "addnew/add_class.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/addnew/add_class.twig");
    }
}
