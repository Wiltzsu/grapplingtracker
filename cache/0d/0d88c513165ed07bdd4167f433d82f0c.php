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

/* mainview/main_view.twig */
class __TwigTemplate_7fda2d2fb8b32e683d564435573f39af extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "mainview/main_view.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<div class=\"container-fluid\">
    <div class=\"row p-5\">
        <h3 class=\"col-12\">Dashboard</h3>
        <div class=\"col-sm-3 mb-2\">
            <div class=\"card\">
                <div class=\"card-body shadow\">
                    <h5 class=\"card-title\">Card Title 1</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3 mb-2\">
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card Title 2</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3 mb-2\">
            <div class=\"card mb-2\">
                <div class=\"card-body shadow\">
                    <h5 class=\"card-title\">Roll counter</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-body shadow\">
                    <h5 class=\"card-title\">Days since starting</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row p-5\">
        <div class=\"col-sm-7\">
            <canvas id=\"combinedChart\"></canvas>
        </div>

        <div class=\"col-sm-5 d-flex justify-content-center align-items-center\">
            <canvas id=\"techniquesPerPosition\"></canvas>
            <div id=\"techniquePositionChartData\" data-labels=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["techniquesPerPositionLabels"] ?? null), "html", null, true);
        yield "\" data-values=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["techniquesPerPositionValues"] ?? null), "html", null, true);
        yield "\" style=\"display: none;\"></div>
        </div>
    </div>

    <div class=\"row p-5\">
        <div class=\"col-sm-8\">
        <table class=\"table table-hover\">
            <thead class=\"thead-light\">
                <tr>
                    <th>Technique name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Position</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 63
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["techniquesClasses"] ?? null))) {
            // line 64
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["techniquesClasses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["techniqueClass"]) {
                // line 65
                yield "                <tr>
                    <td>";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["techniqueClass"], "techniqueName", [], "any", false, false, false, 66), "html", null, true);
                yield "</td>
                    <td>";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["techniqueClass"], "techniqueDescription", [], "any", false, false, false, 67), "html", null, true);
                yield "</td>
                    <td>";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["techniqueClass"], "categoryName", [], "any", false, false, false, 68), "html", null, true);
                yield "</td>
                    <td>";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["techniqueClass"], "positionName", [], "any", false, false, false, 69), "html", null, true);
                yield "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['techniqueClass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "            ";
        } else {
            // line 73
            yield "                <tr>
                    <td colspan=\"4\">No entries found.</td>
                </tr>
            ";
        }
        // line 77
        yield "            </tbody>
        </table>
        </div>

        <div class=\"col-sm-4\">
            <form method=\"POST\" action=\"\">
                <!-- User ID -->
                <h4>Make a note</h4>
                <div class=\"form-group\">
                    <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userID"] ?? null), "html", null, true);
        yield "\">
                </div>
                <!-- Content -->
                <div class=\"form-group";
        // line 89
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 89)) ? (" has-error") : (""));
        yield "\">
                    <textarea class=\"form-control\" id=\"quicknote\" name=\"quicknote\" value=\"";
        // line 90
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "content", [], "any", true, true, false, 90) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "content", [], "any", false, false, false, 90)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "content", [], "any", false, false, false, 90), "html", null, true)) : (yield ""));
        yield "\"></textarea>
                    <div class=\"form-text mb-2\">Write and delete quick notes.</div>
                    ";
        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 92)) {
            // line 93
            yield "                        <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 93), "html", null, true);
            yield "</span>
                    ";
        }
        // line 95
        yield "                </div>

                <button type=\"submit\" name=\"submit\" class=\"btn btn-primary mb-2\">Submit</button>
            </form>

            ";
        // line 100
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["quickNotes"] ?? null))) {
            // line 101
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["quickNotes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["quickNote"]) {
                // line 102
                yield "                <div class=\"card mb-2\">
                    <div class=\"card-body d-flex justify-content-between align-items-center\">
                        <p class=\"card-text mb-0\">";
                // line 104
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickNote"], "content", [], "any", false, false, false, 104), "html", null, true));
                yield "</p>
                        <form method=\"POST\" action=\"mainview\"> <!-- Specify the correct path -->
                            <input type=\"hidden\" name=\"delete\" value=\"1\">
                            <input type=\"hidden\" name=\"quicknoteID\" value=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickNote"], "quicknoteID", [], "any", false, false, false, 107), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn\">
                                <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                            </button>
                        </form>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickNote'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "            ";
        } else {
            // line 116
            yield "                <p>No notes found.</p>
            ";
        }
        // line 118
        yield "        </div>
    </div>
</div>

<script>
    var totalMatTimeData = ";
        // line 123
        yield json_encode(($context["totalMatTimeMonthly"] ?? null));
        yield ";
    var techniquesLearnedData = ";
        // line 124
        yield json_encode(($context["totalTechniquesLearnedMonthly"] ?? null));
        yield ";
</script>

<script src=\"/technique-db-mvc/js/techniquesPerPosition.js\"></script>
<script src=\"/technique-db-mvc/public/js/techniqueMatTimeChart.js\"></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mainview/main_view.twig";
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
        return array (  238 => 124,  234 => 123,  227 => 118,  223 => 116,  220 => 115,  206 => 107,  200 => 104,  196 => 102,  191 => 101,  189 => 100,  182 => 95,  176 => 93,  174 => 92,  169 => 90,  165 => 89,  159 => 86,  148 => 77,  142 => 73,  139 => 72,  130 => 69,  126 => 68,  122 => 67,  118 => 66,  115 => 65,  110 => 64,  108 => 63,  87 => 47,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}

<div class=\"container-fluid\">
    <div class=\"row p-5\">
        <h3 class=\"col-12\">Dashboard</h3>
        <div class=\"col-sm-3 mb-2\">
            <div class=\"card\">
                <div class=\"card-body shadow\">
                    <h5 class=\"card-title\">Card Title 1</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3 mb-2\">
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card Title 2</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3 mb-2\">
            <div class=\"card mb-2\">
                <div class=\"card-body shadow\">
                    <h5 class=\"card-title\">Roll counter</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-body shadow\">
                    <h5 class=\"card-title\">Days since starting</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row p-5\">
        <div class=\"col-sm-7\">
            <canvas id=\"combinedChart\"></canvas>
        </div>

        <div class=\"col-sm-5 d-flex justify-content-center align-items-center\">
            <canvas id=\"techniquesPerPosition\"></canvas>
            <div id=\"techniquePositionChartData\" data-labels=\"{{ techniquesPerPositionLabels }}\" data-values=\"{{ techniquesPerPositionValues }}\" style=\"display: none;\"></div>
        </div>
    </div>

    <div class=\"row p-5\">
        <div class=\"col-sm-8\">
        <table class=\"table table-hover\">
            <thead class=\"thead-light\">
                <tr>
                    <th>Technique name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Position</th>
                </tr>
            </thead>
            <tbody>
            {% if techniquesClasses is not empty %}
                {% for techniqueClass in techniquesClasses %}
                <tr>
                    <td>{{ techniqueClass.techniqueName }}</td>
                    <td>{{ techniqueClass.techniqueDescription }}</td>
                    <td>{{ techniqueClass.categoryName }}</td>
                    <td>{{ techniqueClass.positionName }}</td>
                </tr>
                {% endfor %}
            {% else %}
                <tr>
                    <td colspan=\"4\">No entries found.</td>
                </tr>
            {% endif %}
            </tbody>
        </table>
        </div>

        <div class=\"col-sm-4\">
            <form method=\"POST\" action=\"\">
                <!-- User ID -->
                <h4>Make a note</h4>
                <div class=\"form-group\">
                    <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"{{ userID }}\">
                </div>
                <!-- Content -->
                <div class=\"form-group{{ errors.content ? ' has-error' : '' }}\">
                    <textarea class=\"form-control\" id=\"quicknote\" name=\"quicknote\" value=\"{{ input.content ?? '' }}\"></textarea>
                    <div class=\"form-text mb-2\">Write and delete quick notes.</div>
                    {% if errors.content %}
                        <span class=\"help-block error-message\">{{ errors.content }}</span>
                    {% endif %}
                </div>

                <button type=\"submit\" name=\"submit\" class=\"btn btn-primary mb-2\">Submit</button>
            </form>

            {% if quickNotes is not empty %}
                {% for quickNote in quickNotes %}
                <div class=\"card mb-2\">
                    <div class=\"card-body d-flex justify-content-between align-items-center\">
                        <p class=\"card-text mb-0\">{{ quickNote.content|nl2br }}</p>
                        <form method=\"POST\" action=\"mainview\"> <!-- Specify the correct path -->
                            <input type=\"hidden\" name=\"delete\" value=\"1\">
                            <input type=\"hidden\" name=\"quicknoteID\" value=\"{{ quickNote.quicknoteID }}\">
                            <button type=\"submit\" class=\"btn\">
                                <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                            </button>
                        </form>
                    </div>
                </div>
                {% endfor %}
            {% else %}
                <p>No notes found.</p>
            {% endif %}
        </div>
    </div>
</div>

<script>
    var totalMatTimeData = {{ totalMatTimeMonthly|json_encode|raw }};
    var techniquesLearnedData = {{ totalTechniquesLearnedMonthly|json_encode|raw }};
</script>

<script src=\"/technique-db-mvc/js/techniquesPerPosition.js\"></script>
<script src=\"/technique-db-mvc/public/js/techniqueMatTimeChart.js\"></script>
", "mainview/main_view.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/mainview/main_view.twig");
    }
}
