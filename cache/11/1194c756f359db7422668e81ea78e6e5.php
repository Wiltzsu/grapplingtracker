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
        yield "
<div class=\"container-fluid p-5\">
    <!-- Back button -->
    <button class=\"svg-button\" onclick=\"window.location.href='addnew'\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
        <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/>
    </svg>
    </button>

    <form method=\"POST\" action=\"\">
        <h4>Add a New Technique</h4>
        
        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"<?php echo \$_SESSION['userID']?>\">

        </div>

        <!-- Name -->
        <div class=\"form-group\">
            <label for=\"techniqueName\">Technique Name:</label>
            <input type=\"text\" class=\"form-control\" id=\"techniqueName\" name=\"techniqueName\" required>

        </div>

        <!-- Description -->
        <div class=\"form-group\">
            <label for=\"techniqueDescription\">Description:</label>
            <textarea class=\"form-control\" id=\"techniqueDescription\" name=\"techniqueDescription\" required></textarea>

        </div>

        <!-- Category -->
        <div class=\"form-group\">
            <label for=\"techniqueCategory\">Category:</label>
            <select class=\"form-control\" id=\"categoryID\" name=\"categoryID\" required>
                <option value=\"\">Select a Category</option> 
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 40
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryID", [], "any", false, false, false, 40), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryName", [], "any", false, false, false, 40), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            </select>
        </div>

        <!-- Position -->
        <div class=\"form-group\">
            <label for=\"techniquePosition\">Position:</label>
            <select class=\"form-control\" id=\"positionID\" name=\"positionID\" required>
                <option value=\"\">Select a Position</option>
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
        yield "            </select>
        </div>

        <button type=\"submit\" name=\"submitTechnique\" class=\"btn btn-primary btn2\">Add Technique</button>
    </form>
</div>

";
        // line 60
        yield from         $this->loadTemplate("footer.twig", "addnew/add_technique.twig", 60)->unwrap()->yield($context);
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
        return array (  128 => 60,  119 => 53,  108 => 51,  104 => 50,  94 => 42,  83 => 40,  79 => 39,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}

<div class=\"container-fluid p-5\">
    <!-- Back button -->
    <button class=\"svg-button\" onclick=\"window.location.href='addnew'\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
        <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/>
    </svg>
    </button>

    <form method=\"POST\" action=\"\">
        <h4>Add a New Technique</h4>
        
        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"<?php echo \$_SESSION['userID']?>\">

        </div>

        <!-- Name -->
        <div class=\"form-group\">
            <label for=\"techniqueName\">Technique Name:</label>
            <input type=\"text\" class=\"form-control\" id=\"techniqueName\" name=\"techniqueName\" required>

        </div>

        <!-- Description -->
        <div class=\"form-group\">
            <label for=\"techniqueDescription\">Description:</label>
            <textarea class=\"form-control\" id=\"techniqueDescription\" name=\"techniqueDescription\" required></textarea>

        </div>

        <!-- Category -->
        <div class=\"form-group\">
            <label for=\"techniqueCategory\">Category:</label>
            <select class=\"form-control\" id=\"categoryID\" name=\"categoryID\" required>
                <option value=\"\">Select a Category</option> 
                {% for category in categories %}
                    <option value=\"{{ category.categoryID }}\">{{ category.categoryName }}</option>
                {% endfor %}
            </select>
        </div>

        <!-- Position -->
        <div class=\"form-group\">
            <label for=\"techniquePosition\">Position:</label>
            <select class=\"form-control\" id=\"positionID\" name=\"positionID\" required>
                <option value=\"\">Select a Position</option>
                {% for position in positions %}
                    <option value=\"{{ position.positionID }}\">{{ position.positionName }}</option>
                {% endfor %}
            </select>
        </div>

        <button type=\"submit\" name=\"submitTechnique\" class=\"btn btn-primary btn2\">Add Technique</button>
    </form>
</div>

{% include 'footer.twig' %}", "addnew/add_technique.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/addnew/add_technique.twig");
    }
}
