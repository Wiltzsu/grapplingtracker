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

/* viewitems/view_techniques.twig */
class __TwigTemplate_b822501e073814de2bf6711662366dff extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "viewitems/view_techniques.twig", 1)->unwrap()->yield($context);
        // line 2
        yield from         $this->loadTemplate("@HeaderViewItems/header_viewitems.twig", "viewitems/view_techniques.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "
<div class=\"container mb-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table table-hover\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Position</th>
                        <th>Class</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 19
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["techniques"] ?? null))) {
            // line 20
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["techniques"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["technique"]) {
                // line 21
                yield "                        <tr>
                            <td>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueName", [], "any", false, false, false, 22), "html", null, true);
                yield "</td>
                            <td>";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueDescription", [], "any", false, false, false, 23), "html", null, true);
                yield "</td>
                            <td>";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "categoryName", [], "any", false, false, false, 24), "html", null, true);
                yield "</td>
                            <td>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "positionName", [], "any", false, false, false, 25), "html", null, true);
                yield "</td>
                            <td>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "location", [], "any", false, false, false, 26), "html", null, true);
                yield "</td>
                            <td>
                                <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueID", [], "any", false, false, false, 28), "html", null, true);
                yield "\">
                                    <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                </button>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "                ";
        } else {
            // line 35
            yield "                    <p>No techniques found.</p>
                ";
        }
        // line 36
        yield "  
                </tbody>
            </table>
            <nav aria-label=\"...\">
  <ul class=\"pagination pagination-sm\">
    <li class=\"page-item active\" aria-current=\"page\">
      <span class=\"page-link\">1</span>
    </li>
    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
  </ul>
</nav>
        </div>
        
    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "viewitems/view_techniques.twig";
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
        return array (  110 => 36,  106 => 35,  103 => 34,  91 => 28,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  67 => 21,  62 => 20,  60 => 19,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}
{% include '@HeaderViewItems/header_viewitems.twig' %}

<div class=\"container mb-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table table-hover\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Position</th>
                        <th>Class</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                {% if techniques is not empty %}
                    {% for technique in techniques %}
                        <tr>
                            <td>{{ technique.techniqueName }}</td>
                            <td>{{ technique.techniqueDescription }}</td>
                            <td>{{ technique.categoryName }}</td>
                            <td>{{ technique.positionName }}</td>
                            <td>{{ technique.location }}</td>
                            <td>
                                <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal{{ technique.techniqueID }}\">
                                    <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                </button>
                            </td>
                        </tr>
                    {% endfor %}
                {% else %}
                    <p>No techniques found.</p>
                {% endif %}  
                </tbody>
            </table>
            <nav aria-label=\"...\">
  <ul class=\"pagination pagination-sm\">
    <li class=\"page-item active\" aria-current=\"page\">
      <span class=\"page-link\">1</span>
    </li>
    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
  </ul>
</nav>
        </div>
        
    </div>
</div>", "viewitems/view_techniques.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/viewitems/view_techniques.twig");
    }
}
