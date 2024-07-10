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

/* viewitems/view_categories.twig */
class __TwigTemplate_a713d13c0162a07992648fd403a9ee91 extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "viewitems/view_categories.twig", 1)->unwrap()->yield($context);
        // line 2
        yield from         $this->loadTemplate("@HeaderViewItems/header_viewitems.twig", "viewitems/view_categories.twig", 2)->unwrap()->yield($context);
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["categories"] ?? null))) {
            // line 17
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                yield "                            <tr>
                                <td>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryName", [], "any", false, false, false, 19), "html", null, true);
                yield "</td>
                                <td>";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryDescription", [], "any", false, false, false, 20), "html", null, true);
                yield "</td>
                                <!-- Only show delete button if user is admin -->
                                ";
                // line 22
                if ((($context["roleID"] ?? null) == 1)) {
                    yield "                                   
                                <td>
                                    <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryID", [], "any", false, false, false, 24), "html", null, true);
                    yield "\">
                                        <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                    </button>
                                </td>
                                ";
                }
                // line 29
                yield "                            </tr>

                            <!-- Modal for deletion confirmation -->
                            <div class=\"modal fade\" id=\"modal";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryID", [], "any", false, false, false, 32), "html", null, true);
                yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Confirmation</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            Are you sure you want to delete the category \"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryName", [], "any", false, false, false, 42), "html", null, true);
                yield "\"?
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                            <!-- Form for deletion -->
                                            <form method=\"POST\" action=\"\">
                                                <input type=\"hidden\" name=\"categoryID\" value=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryID", [], "any", false, false, false, 48), "html", null, true);
                yield "\">
                                                <button type=\"submit\" name=\"deleteCategory\" class=\"btn btn-danger\">Delete category</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                ";
        } else {
            // line 57
            yield "                    <p>No positions found.</p>
                ";
        }
        // line 58
        yield "  
                </tbody>
            </table> 
        </div>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "viewitems/view_categories.twig";
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
        return array (  137 => 58,  133 => 57,  130 => 56,  116 => 48,  107 => 42,  94 => 32,  89 => 29,  81 => 24,  76 => 22,  71 => 20,  67 => 19,  64 => 18,  59 => 17,  57 => 16,  42 => 3,  40 => 2,  38 => 1,);
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                {% if categories is not empty %}
                    {% for category in categories %}
                            <tr>
                                <td>{{ category.categoryName }}</td>
                                <td>{{ category.categoryDescription }}</td>
                                <!-- Only show delete button if user is admin -->
                                {% if roleID == 1 %}                                   
                                <td>
                                    <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal{{ category.categoryID }}\">
                                        <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                    </button>
                                </td>
                                {% endif %}
                            </tr>

                            <!-- Modal for deletion confirmation -->
                            <div class=\"modal fade\" id=\"modal{{ category.categoryID }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Confirmation</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            Are you sure you want to delete the category \"{{ category.categoryName }}\"?
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                            <!-- Form for deletion -->
                                            <form method=\"POST\" action=\"\">
                                                <input type=\"hidden\" name=\"categoryID\" value=\"{{ category.categoryID }}\">
                                                <button type=\"submit\" name=\"deleteCategory\" class=\"btn btn-danger\">Delete category</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                {% else %}
                    <p>No positions found.</p>
                {% endif %}  
                </tbody>
            </table> 
        </div>
    </div>
</div>
", "viewitems/view_categories.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/viewitems/view_categories.twig");
    }
}
