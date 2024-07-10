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

/* mainview/log_training.twig */
class __TwigTemplate_5f1bdb85119ce1336b5ccc130691318c extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "mainview/log_training.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<div class=\"container-fluid p-5\"

  <!-- Back to main view button -->
  <button class=\"svg-button\" onclick=\"window.location.href='mainview'\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
      <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/></svg>
  </button>

    <!-- Journal Form -->
    <form method=\"POST\" action=\"\">
        <h4>Add a journal note</h4>

        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userID"] ?? null), "html", null, true);
        yield "\">
        </div>

        <!-- Technique ID -->
        <div class=\"form-group";
        // line 21
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "technique", [], "any", false, false, false, 21)) ? (" has-error") : (""));
        yield "\">
            <label for=\"techniqueID\">Technique:</label>
            <select class=\"form-control\" id=\"techniqueID\" name=\"techniqueID\" value=\"";
        // line 23
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "technique", [], "any", true, true, false, 23) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "technique", [], "any", false, false, false, 23)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "technique", [], "any", false, false, false, 23), "html", null, true)) : (yield ""));
        yield "\">
                <option value=\"\">Select a technique</option>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["techniques"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["technique"]) {
            // line 26
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueID", [], "any", false, false, false, 26), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueName", [], "any", false, false, false, 26), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "            </select>
                ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "technique", [], "any", false, false, false, 29)) {
            // line 30
            yield "                    <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "technique", [], "any", false, false, false, 30), "html", null, true);
            yield "</span>
                ";
        }
        // line 32
        yield "        </div>

        <!-- Class ID -->
        <div class=\"form-group";
        // line 35
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "class", [], "any", false, false, false, 35)) ? (" has-error") : (""));
        yield "\">
            <label for=\"classID\">Class:</label>
            <select class=\"form-control\" id=\"classID\" name=\"classID\" value=\"";
        // line 37
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "class", [], "any", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "class", [], "any", false, false, false, 37)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "class", [], "any", false, false, false, 37), "html", null, true)) : (yield ""));
        yield "\">
                <option value=\"\">Select a class</option>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 40
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "classID", [], "any", false, false, false, 40), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "instructor", [], "any", false, false, false, 40), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "classDate", [], "any", false, false, false, 40), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            </select>
                ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "class", [], "any", false, false, false, 43)) {
            // line 44
            yield "                    <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "class", [], "any", false, false, false, 44), "html", null, true);
            yield "</span>
                ";
        }
        // line 46
        yield "        </div>

        <button type=\"submit\" name=\"submit\" class=\"btn btn-secondary btn2\">Add to journal</button>
    </form>
</div>

";
        // line 52
        yield from         $this->loadTemplate("@Footer/footer.twig", "mainview/log_training.twig", 52)->unwrap()->yield($context);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mainview/log_training.twig";
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
        return array (  151 => 52,  143 => 46,  137 => 44,  135 => 43,  132 => 42,  119 => 40,  115 => 39,  110 => 37,  105 => 35,  100 => 32,  94 => 30,  92 => 29,  89 => 28,  78 => 26,  74 => 25,  69 => 23,  64 => 21,  57 => 17,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}

<div class=\"container-fluid p-5\"

  <!-- Back to main view button -->
  <button class=\"svg-button\" onclick=\"window.location.href='mainview'\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
      <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/></svg>
  </button>

    <!-- Journal Form -->
    <form method=\"POST\" action=\"\">
        <h4>Add a journal note</h4>

        <!-- User ID -->
        <div class=\"form-group\">
            <input type=\"\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"{{ userID }}\">
        </div>

        <!-- Technique ID -->
        <div class=\"form-group{{ errors.technique ? ' has-error' : '' }}\">
            <label for=\"techniqueID\">Technique:</label>
            <select class=\"form-control\" id=\"techniqueID\" name=\"techniqueID\" value=\"{{ input.technique ?? '' }}\">
                <option value=\"\">Select a technique</option>
                {% for technique in techniques %}
                    <option value=\"{{ technique.techniqueID }}\">{{ technique.techniqueName }}</option>
                {% endfor %}
            </select>
                {% if errors.technique %}
                    <span class=\"help-block error-message\">{{ errors.technique }}</span>
                {% endif %}
        </div>

        <!-- Class ID -->
        <div class=\"form-group{{ errors.class ? ' has-error' : '' }}\">
            <label for=\"classID\">Class:</label>
            <select class=\"form-control\" id=\"classID\" name=\"classID\" value=\"{{ input.class ?? '' }}\">
                <option value=\"\">Select a class</option>
                {% for class in classes %}
                    <option value=\"{{ class.classID }}\">{{ class.instructor}} - {{ class.classDate }}</option>
                {% endfor %}
            </select>
                {% if errors.class %}
                    <span class=\"help-block error-message\">{{ errors.class }}</span>
                {% endif %}
        </div>

        <button type=\"submit\" name=\"submit\" class=\"btn btn-secondary btn2\">Add to journal</button>
    </form>
</div>

{% include '@Footer/footer.twig' %}", "mainview/log_training.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/mainview/log_training.twig");
    }
}
