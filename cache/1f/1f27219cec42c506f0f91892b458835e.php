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

/* viewitems/view_classes.twig */
class __TwigTemplate_679f5821db9412be53ee3850d6af843f extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "viewitems/view_classes.twig", 1)->unwrap()->yield($context);
        // line 2
        yield from         $this->loadTemplate("@HeaderViewItems/header_viewitems.twig", "viewitems/view_classes.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "
<div class=\"container p-5 mb-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table table-hover\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Instructor</th>
                        <th>Location</th>
                        <th>Duration</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Amount of rounds</th>
                        <th>Round duration (min)</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 21
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["classes"] ?? null))) {
            // line 22
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 23
                yield "                        <tr>
                            <td>";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "instructor", [], "any", false, false, false, 24), "html", null, true);
                yield "</td>
                            <td>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "location", [], "any", false, false, false, 25), "html", null, true);
                yield "</td>
                            <td>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "classDuration", [], "any", false, false, false, 26), "html", null, true);
                yield " min</td>
                            <td>";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "classDate", [], "any", false, false, false, 27), "html", null, true);
                yield "</td>
                            <td>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "classDescription", [], "any", false, false, false, 28), "html", null, true);
                yield "</td>
                            <td>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "rounds", [], "any", false, false, false, 29), "html", null, true);
                yield "</td>
                            <td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "roundDuration", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>

                            <td><button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal<?php echo \$class['classID']; ?>\">
                            <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                        </button></td>
                        </tr>

                        <!-- Modal for deletion confirmation -->
                        <div class=\"modal fade\" id=\"modal<?php echo \$class['classID']; ?>\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"trainingClassModalLongTitle\">Confirmation</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        Are you sure you want to delete the class by \"<?php echo htmlspecialchars(\$class['instructor']); ?>\"?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                        <!-- Form for deletion -->
                                        <form method=\"POST\" action=\"\">
                                            <input type=\"hidden\" name=\"classID\" value=\"<?php echo \$class['classID']; ?>\">
                                            <button type=\"submit\" name=\"deleteTrainingClass\" class=\"btn btn-danger\">Delete training class</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "                ";
        } else {
            // line 63
            yield "                    <p>No classes found for this user.</p>
                ";
        }
        // line 64
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
        return "viewitems/view_classes.twig";
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
        return array (  141 => 64,  137 => 63,  134 => 62,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  69 => 23,  64 => 22,  62 => 21,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}
{% include '@HeaderViewItems/header_viewitems.twig' %}

<div class=\"container p-5 mb-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table table-hover\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Instructor</th>
                        <th>Location</th>
                        <th>Duration</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Amount of rounds</th>
                        <th>Round duration (min)</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                {% if classes is not empty %}
                    {% for class in classes %}
                        <tr>
                            <td>{{ class.instructor }}</td>
                            <td>{{ class.location }}</td>
                            <td>{{ class.classDuration }} min</td>
                            <td>{{ class.classDate }}</td>
                            <td>{{ class.classDescription }}</td>
                            <td>{{ class.rounds }}</td>
                            <td>{{ class.roundDuration }}</td>

                            <td><button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal<?php echo \$class['classID']; ?>\">
                            <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                        </button></td>
                        </tr>

                        <!-- Modal for deletion confirmation -->
                        <div class=\"modal fade\" id=\"modal<?php echo \$class['classID']; ?>\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"trainingClassModalLongTitle\">Confirmation</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        Are you sure you want to delete the class by \"<?php echo htmlspecialchars(\$class['instructor']); ?>\"?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                        <!-- Form for deletion -->
                                        <form method=\"POST\" action=\"\">
                                            <input type=\"hidden\" name=\"classID\" value=\"<?php echo \$class['classID']; ?>\">
                                            <button type=\"submit\" name=\"deleteTrainingClass\" class=\"btn btn-danger\">Delete training class</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% else %}
                    <p>No classes found for this user.</p>
                {% endif %}   
                </tbody>
            </table>
        </div>
    </div>
</div>

", "viewitems/view_classes.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/viewitems/view_classes.twig");
    }
}
