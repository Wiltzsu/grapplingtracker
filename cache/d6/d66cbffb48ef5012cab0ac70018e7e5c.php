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
    <form method=\"POST\" action=\"\" >
        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userID"] ?? null), "html", null, true);
        yield "\">
        </div>

        <!-- Instructor name -->
        <h4>Add a New Training Class</h4>
            <div class=\"form-group";
        // line 20
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 20)) ? (" has-error") : (""));
        yield "\">
                <label for=\"instructor\">Instructor:</label>
                <input type=\"text\" class=\"form-control\" id=\"instructor\" name=\"instructor\" value=\"";
        // line 22
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", false, false, false, 22)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", false, false, false, 22), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Instructor name\">
                ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 23)) {
            // line 24
            yield "                    <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 24), "html", null, true);
            yield "</span>
                ";
        }
        // line 26
        yield "            </div>

            <!-- Location -->
            <div class=\"form-group";
        // line 29
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 29)) ? (" has-error") : (""));
        yield "\">
                <label for=\"location\">Location:</label>
                <input type=\"textarea\" class=\"form-control\" id=\"location\" name=\"location\" value=\"";
        // line 31
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", false, false, false, 31)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", false, false, false, 31), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Class location\" >
                ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 32)) {
            // line 33
            yield "                    <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 33), "html", null, true);
            yield "</span>
                ";
        }
        // line 35
        yield "            </div>

            <!-- Duration -->
            <div class=\"form-group";
        // line 38
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 38)) ? (" has-error") : (""));
        yield "\">
                <label for=\"duration\">Duration (minutes):</label>
                <input type=\"number\" class=\"form-control\" id=\"duration\" name=\"duration\" value=\"";
        // line 40
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", false, false, false, 40)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", false, false, false, 40), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Class duration\">
                ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 41)) {
            // line 42
            yield "                    <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 42), "html", null, true);
            yield "</span>
                ";
        }
        // line 44
        yield "            </div>

            <!-- Date -->
            <div class=\"form-group";
        // line 47
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDate", [], "any", false, false, false, 47)) ? (" has-error") : (""));
        yield "\">
                <label for=\"date\">Date:</label>
                <input type=\"date\" class=\"form-control\" id=\"date\" name=\"classDate\" value=\"";
        // line 49
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDate", [], "any", true, true, false, 49) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDate", [], "any", false, false, false, 49)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDate", [], "any", false, false, false, 49), "html", null, true)) : (yield ""));
        yield "\" >
                ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDate", [], "any", false, false, false, 50)) {
            // line 51
            yield "                    <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDate", [], "any", false, false, false, 51), "html", null, true);
            yield "</span>
                ";
        }
        // line 53
        yield "            </div>

            <!-- classDescription -->
            <div class=\"form-group";
        // line 56
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 56)) ? (" has-error") : (""));
        yield "\">
                <label for=\"classDescription\">Description:</label>
                <textarea class=\"form-control\" id=\"classDescription\" name=\"classDescription\" value=\"";
        // line 58
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", true, true, false, 58) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", false, false, false, 58)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", false, false, false, 58), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Gi/nogi/wrestling etc.\"></textarea>
                ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 59)) {
            // line 60
            yield "                    <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 60), "html", null, true);
            yield "</span>
                ";
        }
        // line 62
        yield "            </div>
            
        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn2\">Add Class</button>
    </form>
</div>

";
        // line 68
        yield from         $this->loadTemplate("footer.twig", "addnew/add_class.twig", 68)->unwrap()->yield($context);
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
        return array (  176 => 68,  168 => 62,  162 => 60,  160 => 59,  156 => 58,  151 => 56,  146 => 53,  140 => 51,  138 => 50,  134 => 49,  129 => 47,  124 => 44,  118 => 42,  116 => 41,  112 => 40,  107 => 38,  102 => 35,  96 => 33,  94 => 32,  90 => 31,  85 => 29,  80 => 26,  74 => 24,  72 => 23,  68 => 22,  63 => 20,  55 => 15,  40 => 2,  38 => 1,);
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
    <form method=\"POST\" action=\"\" >
        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"{{ userID }}\">
        </div>

        <!-- Instructor name -->
        <h4>Add a New Training Class</h4>
            <div class=\"form-group{{ errors.instructor ? ' has-error' : '' }}\">
                <label for=\"instructor\">Instructor:</label>
                <input type=\"text\" class=\"form-control\" id=\"instructor\" name=\"instructor\" value=\"{{ input.instructor ?? '' }}\" placeholder=\"Instructor name\">
                {% if errors.instructor %}
                    <span class=\"help-block error-message\">{{ errors.instructor }}</span>
                {% endif %}
            </div>

            <!-- Location -->
            <div class=\"form-group{{ errors.location ? ' has-error' : '' }}\">
                <label for=\"location\">Location:</label>
                <input type=\"textarea\" class=\"form-control\" id=\"location\" name=\"location\" value=\"{{ input.location ?? '' }}\" placeholder=\"Class location\" >
                {% if errors.location %}
                    <span class=\"help-block error-message\">{{ errors.location }}</span>
                {% endif %}
            </div>

            <!-- Duration -->
            <div class=\"form-group{{ errors.duration ? ' has-error' : '' }}\">
                <label for=\"duration\">Duration (minutes):</label>
                <input type=\"number\" class=\"form-control\" id=\"duration\" name=\"duration\" value=\"{{ input.duration  ?? '' }}\" placeholder=\"Class duration\">
                {% if errors.duration %}
                    <span class=\"help-block error-message\">{{ errors.duration }}</span>
                {% endif %}
            </div>

            <!-- Date -->
            <div class=\"form-group{{ errors.classDate ? ' has-error' : '' }}\">
                <label for=\"date\">Date:</label>
                <input type=\"date\" class=\"form-control\" id=\"date\" name=\"classDate\" value=\"{{ input.classDate  ?? '' }}\" >
                {% if errors.classDate %}
                    <span class=\"help-block error-message\">{{ errors.classDate }}</span>
                {% endif %}
            </div>

            <!-- classDescription -->
            <div class=\"form-group{{ errors.classDescription ? ' has-error' : '' }}\">
                <label for=\"classDescription\">Description:</label>
                <textarea class=\"form-control\" id=\"classDescription\" name=\"classDescription\" value=\"{{ input.classDescription  ?? '' }}\" placeholder=\"Gi/nogi/wrestling etc.\"></textarea>
                {% if errors.classDescription %}
                    <span class=\"help-block error-message\">{{ errors.classDescription }}</span>
                {% endif %}
            </div>
            
        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn2\">Add Class</button>
    </form>
</div>

{% include 'footer.twig' %}", "addnew/add_class.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/addnew/add_class.twig");
    }
}
