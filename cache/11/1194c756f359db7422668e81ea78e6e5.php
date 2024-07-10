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

/* addnew/add_technique.twig */
class __TwigTemplate_588a573c09652e4e67157c348c768f56 extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "addnew/add_technique.twig", 1)->unwrap()->yield($context);
        // line 2
        yield from         $this->loadTemplate("@HeaderAddItems/header_additems.twig", "addnew/add_technique.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "
<div class=\"container\">
    <form method=\"POST\" action=\"\">
        <h5>Add a technique</h5>
        
        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userID"] ?? null), "html", null, true);
        yield "\">
        </div>

        <!-- Name -->
        <div class=\"form-group";
        // line 14
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "techniqueName", [], "any", false, false, false, 14)) ? (" has-error") : (""));
        yield "\">
            <label for=\"techniqueName\" class=\"mt-3\">Technique Name:</label>
            <input type=\"text\" class=\"form-control\" id=\"techniqueName\" name=\"techniqueName\" value=\"";
        // line 16
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "techniqueName", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "techniqueName", [], "any", false, false, false, 16)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "techniqueName", [], "any", false, false, false, 16), "html", null, true)) : (yield ""));
        yield "\">
            ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "techniqueName", [], "any", false, false, false, 17)) {
            // line 18
            yield "                <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "techniqueName", [], "any", false, false, false, 18), "html", null, true);
            yield "</span>
            ";
        }
        // line 20
        yield "        </div>

        <!-- Description -->
        <div class=\"form-group";
        // line 23
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "techniqueDescription", [], "any", false, false, false, 23)) ? (" has-error") : (""));
        yield "\">
            <label for=\"techniqueDescription\" class=\"mt-3\">Description:</label>
            <textarea class=\"form-control\" id=\"techniqueDescription\" name=\"techniqueDescription\" value=\"";
        // line 25
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "techniqueDescription", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "techniqueDescription", [], "any", false, false, false, 25)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "techniqueDescription", [], "any", false, false, false, 25), "html", null, true)) : (yield ""));
        yield "\"></textarea>
            ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "techniqueDescription", [], "any", false, false, false, 26)) {
            // line 27
            yield "                <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "techniqueDescription", [], "any", false, false, false, 27), "html", null, true);
            yield "</span>
            ";
        }
        // line 29
        yield "        </div>

        <!-- Category -->
        <div class=\"form-group\">
            <label for=\"techniqueCategory\" class=\"mt-3\">Category:</label>
            <select class=\"form-control\" id=\"categoryID\" name=\"categoryID\" required>
                <option value=\"\">Select a category</option> 
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 37
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryID", [], "any", false, false, false, 37), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryName", [], "any", false, false, false, 37), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "categoryID", [], "any", false, false, false, 39)) {
            // line 40
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "categoryID", [], "any", false, false, false, 40), "html", null, true);
            yield "</span>
                ";
        }
        // line 42
        yield "            </select>
        </div>

        <!-- Position -->
        <div class=\"form-group\">
            <label for=\"techniquePosition\" class=\"mt-3\">Position:</label>
            <select class=\"form-control\" id=\"positionID\" name=\"positionID\" required>
                <option value=\"\">Select a position</option>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["positions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 51
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionID", [], "any", false, false, false, 51), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionName", [], "any", false, false, false, 51), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "positionID", [], "any", false, false, false, 53)) {
            // line 54
            yield "                    <span class=\"form-text error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "positionID", [], "any", false, false, false, 54), "html", null, true);
            yield "</span>
                ";
        }
        // line 56
        yield "            </select>
        </div>

        <!-- Class -->
        <div class=\"form-group\">
            <label for=\"classID\" class=\"mt-3\">Training class:</label>
            <select class=\"form-control\" id=\"classID\" name=\"classID\">
                <option value=\"\">Select a training class</option>
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["trainingClasses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["trainingClass"]) {
            // line 65
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trainingClass"], "classID", [], "any", false, false, false, 65), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trainingClass"], "instructor", [], "any", false, false, false, 65), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trainingClass"], "location", [], "any", false, false, false, 65), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trainingClass"], "classDate", [], "any", false, false, false, 65), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trainingClass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "            </select>
        </div>

        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary mt-3\">Add Technique</button>
    </form>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "addnew/add_technique.twig";
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
        return array (  193 => 67,  178 => 65,  174 => 64,  164 => 56,  158 => 54,  155 => 53,  144 => 51,  140 => 50,  130 => 42,  124 => 40,  121 => 39,  110 => 37,  106 => 36,  97 => 29,  91 => 27,  89 => 26,  85 => 25,  80 => 23,  75 => 20,  69 => 18,  67 => 17,  63 => 16,  58 => 14,  51 => 10,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}
{% include '@HeaderAddItems/header_additems.twig' %}

<div class=\"container\">
    <form method=\"POST\" action=\"\">
        <h5>Add a technique</h5>
        
        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"{{ userID }}\">
        </div>

        <!-- Name -->
        <div class=\"form-group{{ errors.techniqueName ? ' has-error' : '' }}\">
            <label for=\"techniqueName\" class=\"mt-3\">Technique Name:</label>
            <input type=\"text\" class=\"form-control\" id=\"techniqueName\" name=\"techniqueName\" value=\"{{ input.techniqueName ?? '' }}\">
            {% if errors.techniqueName %}
                <span class=\"form-text error-message\">{{ errors.techniqueName }}</span>
            {% endif %}
        </div>

        <!-- Description -->
        <div class=\"form-group{{ errors.techniqueDescription ? ' has-error' : '' }}\">
            <label for=\"techniqueDescription\" class=\"mt-3\">Description:</label>
            <textarea class=\"form-control\" id=\"techniqueDescription\" name=\"techniqueDescription\" value=\"{{ input.techniqueDescription ?? '' }}\"></textarea>
            {% if errors.techniqueDescription %}
                <span class=\"form-text error-message\">{{ errors.techniqueDescription }}</span>
            {% endif %}
        </div>

        <!-- Category -->
        <div class=\"form-group\">
            <label for=\"techniqueCategory\" class=\"mt-3\">Category:</label>
            <select class=\"form-control\" id=\"categoryID\" name=\"categoryID\" required>
                <option value=\"\">Select a category</option> 
                {% for category in categories %}
                    <option value=\"{{ category.categoryID }}\">{{ category.categoryName }}</option>
                {% endfor %}
                {% if errors.categoryID %}
                    <span class=\"form-text error-message\">{{ errors.categoryID }}</span>
                {% endif %}
            </select>
        </div>

        <!-- Position -->
        <div class=\"form-group\">
            <label for=\"techniquePosition\" class=\"mt-3\">Position:</label>
            <select class=\"form-control\" id=\"positionID\" name=\"positionID\" required>
                <option value=\"\">Select a position</option>
                {% for position in positions %}
                    <option value=\"{{ position.positionID }}\">{{ position.positionName }}</option>
                {% endfor %}
                {% if errors.positionID %}
                    <span class=\"form-text error-message\">{{ errors.positionID }}</span>
                {% endif %}
            </select>
        </div>

        <!-- Class -->
        <div class=\"form-group\">
            <label for=\"classID\" class=\"mt-3\">Training class:</label>
            <select class=\"form-control\" id=\"classID\" name=\"classID\">
                <option value=\"\">Select a training class</option>
                {% for trainingClass in trainingClasses %}
                    <option value=\"{{ trainingClass.classID }}\">{{ trainingClass.instructor }} {{ trainingClass.location }} {{ trainingClass.classDate }}</option>
                {% endfor %}
            </select>
        </div>

        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary mt-3\">Add Technique</button>
    </form>
</div>", "addnew/add_technique.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/addnew/add_technique.twig");
    }
}
