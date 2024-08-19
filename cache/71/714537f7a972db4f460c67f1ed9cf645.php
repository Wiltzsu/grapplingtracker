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

/* viewitems/view_positions.twig */
class __TwigTemplate_4ba147a2a33766395f4417f278272d30 extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "viewitems/view_positions.twig", 1)->unwrap()->yield($context);
        // line 2
        yield from         $this->loadTemplate("@HeaderViewItems/header_viewitems.twig", "viewitems/view_positions.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "
<div class=\"container mb-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table table-hover test\" style=\"table-layout: fixed\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        ";
        // line 12
        if ((($context["roleID"] ?? null) == 1)) {
            // line 13
            yield "                        <th></th>
                        ";
        }
        // line 15
        yield "                    </tr>
                </thead>
                <tbody>
                ";
        // line 18
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["positions"] ?? null))) {
            // line 19
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["positions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                // line 20
                yield "                            <tr>
                                <td style=\"white-space: normal; word-wrap: break-word;\">";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionName", [], "any", false, false, false, 21), "html", null, true);
                yield "</td>
                                <td style=\"white-space: normal; word-wrap: break-word;\">";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionDescription", [], "any", false, false, false, 22), "html", null, true);
                yield "</td>

                                <!-- Only show delete button if user is admin -->
                                ";
                // line 25
                if ((($context["roleID"] ?? null) == 1)) {
                    // line 26
                    yield "                                <td>
                                    <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal";
                    // line 27
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionID", [], "any", false, false, false, 27), "html", null, true);
                    yield "\">
                                        <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                    </button>
                                </td>
                                ";
                }
                // line 32
                yield "
                            </tr>

                            <!-- Modal for deletion confirmation -->
                            <div class=\"modal fade\" id=\"modal";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionID", [], "any", false, false, false, 36), "html", null, true);
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
                                            Are you sure you want to delete the position \"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionName", [], "any", false, false, false, 46), "html", null, true);
                yield "\"?
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                            <!-- Form for deletion -->
                                            <form method=\"POST\" action=\"\">
                                                <input type=\"hidden\" name=\"positionID\" value=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionID", [], "any", false, false, false, 52), "html", null, true);
                yield "\">
                                                <button type=\"submit\" name=\"deletePosition\" class=\"btn btn-danger\">Delete position</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                ";
        } else {
            // line 61
            yield "                    <p>No positions found.</p>
                ";
        }
        // line 62
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
        return "viewitems/view_positions.twig";
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
        return array (  146 => 62,  142 => 61,  139 => 60,  125 => 52,  116 => 46,  103 => 36,  97 => 32,  89 => 27,  86 => 26,  84 => 25,  78 => 22,  74 => 21,  71 => 20,  66 => 19,  64 => 18,  59 => 15,  55 => 13,  53 => 12,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}
{% include '@HeaderViewItems/header_viewitems.twig' %}

<div class=\"container mb-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table table-hover test\" style=\"table-layout: fixed\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        {% if roleID == 1 %}
                        <th></th>
                        {% endif %}
                    </tr>
                </thead>
                <tbody>
                {% if positions is not empty %}
                    {% for position in positions %}
                            <tr>
                                <td style=\"white-space: normal; word-wrap: break-word;\">{{ position.positionName }}</td>
                                <td style=\"white-space: normal; word-wrap: break-word;\">{{ position.positionDescription }}</td>

                                <!-- Only show delete button if user is admin -->
                                {% if roleID == 1 %}
                                <td>
                                    <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal{{ position.positionID }}\">
                                        <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                    </button>
                                </td>
                                {% endif %}

                            </tr>

                            <!-- Modal for deletion confirmation -->
                            <div class=\"modal fade\" id=\"modal{{ position.positionID }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Confirmation</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            Are you sure you want to delete the position \"{{ position.positionName }}\"?
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                            <!-- Form for deletion -->
                                            <form method=\"POST\" action=\"\">
                                                <input type=\"hidden\" name=\"positionID\" value=\"{{ position.positionID }}\">
                                                <button type=\"submit\" name=\"deletePosition\" class=\"btn btn-danger\">Delete position</button>
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
", "viewitems/view_positions.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/viewitems/view_positions.twig");
    }
}
