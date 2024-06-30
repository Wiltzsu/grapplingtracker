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
    <button type=\"button\" class=\"btn btn-primary\" id=\"liveToastBtn\">Show live toast</button>

<div class=\"position-fixed bottom-0 right-0 p-3\" style=\"z-index: 5; right: 0; bottom: 0;\">
  <div id=\"liveToast\" class=\"toast hide\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"2000\">
    <div class=\"toast-header\">
      <img src=\"...\" class=\"rounded mr-2\" alt=\"...\">
      <strong class=\"mr-auto\">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
    <div class=\"toast-body\">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
    <!-- Training Class Form Column -->
    <form method=\"POST\" action=\"/technique-db-mvc/public/addclass\" >
        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userID"] ?? null), "html", null, true);
        yield "\">
        </div>

        <!-- Instructor name -->
        <h4>Add a New Training Class</h4>
            <div class=\"form-group";
        // line 36
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 36)) ? (" has-error") : (""));
        yield "\">
                <label for=\"instructor\">Instructor:</label>
                <input type=\"text\" class=\"form-control\" id=\"instructor\" name=\"instructor\" value=\"";
        // line 38
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", false, false, false, 38)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", false, false, false, 38), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Instructor name\">
                ";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 39)) {
            // line 40
            yield "                    <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 40), "html", null, true);
            yield "</span>
                ";
        }
        // line 42
        yield "            </div>

            <!-- Location -->
            <div class=\"form-group";
        // line 45
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 45)) ? (" has-error") : (""));
        yield "\">
                <label for=\"location\">Location:</label>
                <input type=\"textarea\" class=\"form-control\" id=\"location\" name=\"location\" value=\"";
        // line 47
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", false, false, false, 47)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", false, false, false, 47), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Class location\" >
                ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 48)) {
            // line 49
            yield "                    <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 49), "html", null, true);
            yield "</span>
                ";
        }
        // line 51
        yield "            </div>

            <!-- Duration -->
            <div class=\"form-group";
        // line 54
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 54)) ? (" has-error") : (""));
        yield "\">
                <label for=\"duration\">Duration (minutes):</label>
                <input type=\"number\" class=\"form-control\" id=\"duration\" name=\"duration\" value=\"";
        // line 56
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", false, false, false, 56)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", false, false, false, 56), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Class duration\">
                ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 57)) {
            // line 58
            yield "                    <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 58), "html", null, true);
            yield "</span>
                ";
        }
        // line 60
        yield "            </div>

            <!-- Date -->
            <div class=\"form-group";
        // line 63
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDate", [], "any", false, false, false, 63)) ? (" has-error") : (""));
        yield "\">
                <label for=\"date\">Date:</label>
                <input type=\"date\" class=\"form-control\" id=\"date\" name=\"classDate\" value=\"";
        // line 65
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDate", [], "any", true, true, false, 65) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDate", [], "any", false, false, false, 65)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDate", [], "any", false, false, false, 65), "html", null, true)) : (yield ""));
        yield "\" >
                ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDate", [], "any", false, false, false, 66)) {
            // line 67
            yield "                    <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDate", [], "any", false, false, false, 67), "html", null, true);
            yield "</span>
                ";
        }
        // line 69
        yield "            </div>

            <!-- classDescription -->
            <div class=\"form-group";
        // line 72
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 72)) ? (" has-error") : (""));
        yield "\">
                <label for=\"classDescription\">Description:</label>
                <textarea class=\"form-control\" id=\"classDescription\" name=\"classDescription\" value=\"";
        // line 74
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", true, true, false, 74) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", false, false, false, 74)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", false, false, false, 74), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Gi/nogi/wrestling etc.\"></textarea>
                ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 75)) {
            // line 76
            yield "                    <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 76), "html", null, true);
            yield "</span>
                ";
        }
        // line 78
        yield "            </div>
            
        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn2\">Add Class</button>
    </form>
</div>

";
        // line 84
        yield from         $this->loadTemplate("footer.twig", "addnew/add_class.twig", 84)->unwrap()->yield($context);
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
        return array (  192 => 84,  184 => 78,  178 => 76,  176 => 75,  172 => 74,  167 => 72,  162 => 69,  156 => 67,  154 => 66,  150 => 65,  145 => 63,  140 => 60,  134 => 58,  132 => 57,  128 => 56,  123 => 54,  118 => 51,  112 => 49,  110 => 48,  106 => 47,  101 => 45,  96 => 42,  90 => 40,  88 => 39,  84 => 38,  79 => 36,  71 => 31,  40 => 2,  38 => 1,);
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
    <button type=\"button\" class=\"btn btn-primary\" id=\"liveToastBtn\">Show live toast</button>

<div class=\"position-fixed bottom-0 right-0 p-3\" style=\"z-index: 5; right: 0; bottom: 0;\">
  <div id=\"liveToast\" class=\"toast hide\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"2000\">
    <div class=\"toast-header\">
      <img src=\"...\" class=\"rounded mr-2\" alt=\"...\">
      <strong class=\"mr-auto\">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
    <div class=\"toast-body\">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
    <!-- Training Class Form Column -->
    <form method=\"POST\" action=\"/technique-db-mvc/public/addclass\" >
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
