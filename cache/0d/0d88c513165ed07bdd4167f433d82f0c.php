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
<div class=\"container\">
    <div class=\"row stats\">
        <div class=\"col-md-4 text-center\">
            ";
        // line 6
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["totalMatTime"] ?? null))) {
            // line 7
            yield "                <p>Total mat time: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalMatTime"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 9
        yield "        </div>
        <div class=\"col-md-4 text-center\">
            ";
        // line 11
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["totalRounds"] ?? null))) {
            // line 12
            yield "                <p>Total rounds rolled: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalRounds"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 14
        yield "        </div>
        <div class=\"col-md-4 text-center\">
            ";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["totalRoundDuration"] ?? null))) {
            // line 17
            yield "                <p>Total time spent rolling: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalRoundDuration"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 19
        yield "        </div>
    </div>

    <div class=\"row p-5\">
        <h3 class=\"col-12\">Dashboard</h3>
        <div class=\"col-md-12\">
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
        // line 35
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["techniquesClasses"] ?? null))) {
            // line 36
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["techniquesClasses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["techniqueClass"]) {
                // line 37
                yield "                        <tr>
                            <td>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["techniqueClass"], "techniqueName", [], "any", false, false, false, 38), "html", null, true);
                yield "</td>
                            <td>";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["techniqueClass"], "techniqueDescription", [], "any", false, false, false, 39), "html", null, true);
                yield "</td>
                            <td>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["techniqueClass"], "categoryName", [], "any", false, false, false, 40), "html", null, true);
                yield "</td>
                            <td>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["techniqueClass"], "positionName", [], "any", false, false, false, 41), "html", null, true);
                yield "</td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['techniqueClass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "                    ";
        } else {
            // line 45
            yield "                        <tr>
                            <td colspan=\"4\">No entries found.</td>
                        </tr>
                    ";
        }
        // line 49
        yield "                </tbody>
            </table>
        </div>

        <div class=\"col-md-12\">
            <form method=\"POST\" action=\"\">
                <!-- User ID -->
                <h4>Make a note</h4>
                <div class=\"form-group\">
                    <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userID"] ?? null), "html", null, true);
        yield "\">
                </div>
                <!-- Content -->
                <div class=\"form-group";
        // line 61
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 61)) ? (" has-error") : (""));
        yield "\">
                    <textarea class=\"form-control\" id=\"quicknote\" name=\"quicknote\" value=\"";
        // line 62
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "content", [], "any", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "content", [], "any", false, false, false, 62)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "content", [], "any", false, false, false, 62), "html", null, true)) : (yield ""));
        yield "\"></textarea>
                    ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 63)) {
            // line 64
            yield "                        <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 64), "html", null, true);
            yield "</span>
                    ";
        }
        // line 66
        yield "                </div>
                <button type=\"submit\" name=\"submit\" class=\"btn btn-primary mb-2\">Submit</button>
            </form>

            ";
        // line 70
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["quickNotes"] ?? null))) {
            // line 71
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["quickNotes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["quickNote"]) {
                // line 72
                yield "                <div class=\"card mb-2\">
                    <div class=\"card-body d-flex justify-content-between align-items-center\">
                        <p class=\"card-text mb-0\">";
                // line 74
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickNote"], "content", [], "any", false, false, false, 74), "html", null, true));
                yield "</p>
                        <form method=\"POST\" action=\"mainview\"> <!-- Specify the correct path -->
                            <input type=\"hidden\" name=\"delete\" value=\"1\">
                            <input type=\"hidden\" name=\"quicknoteID\" value=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickNote"], "quicknoteID", [], "any", false, false, false, 77), "html", null, true);
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
            // line 85
            yield "            ";
        } else {
            // line 86
            yield "                <p>No notes found.</p>
            ";
        }
        // line 88
        yield "        </div>
    </div>

        <div class=\"row px-5\">
            <div class=\"col-md-12\">
                <nav>
                    <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                        <button class=\"nav-link active\" id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-home\" type=\"button\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Techniques Studied</button>
                        <button class=\"nav-link\" id=\"nav-profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-profile\" type=\"button\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Mat Time</button>
                    </div>
                </nav>
                <div class=\"tab-content\" id=\"nav-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                        <canvas id=\"techniquesLearnedChart\"></canvas>
                    </div>
                    <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                        <canvas id=\"matTimeChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var totalMatTimeData = ";
        // line 113
        yield json_encode(($context["totalMatTimeMonthly"] ?? null));
        yield ";
    var techniquesLearnedData = ";
        // line 114
        yield json_encode(($context["totalTechniquesLearnedMonthly"] ?? null));
        yield ";
    var techniquesPerPositionData = ";
        // line 115
        yield json_encode(($context["techniquesPerPosition"] ?? null));
        yield ";
</script>

<script src=\"/technique-db-mvc/public/js/techniquesPerPosition.js\"></script>
<script src=\"/technique-db-mvc/public/js/techniqueMatTimeChart.js\"></script>

<script src=\"/technique-db-mvc/public/js/totalMatTime.js\"></script>
<script src=\"/technique-db-mvc/public/js/techniquesLearned.js\"></script>
<script src=\"/technique-db-mvc/public/js/beltChart.js\"></script>";
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
        return array (  248 => 115,  244 => 114,  240 => 113,  213 => 88,  209 => 86,  206 => 85,  192 => 77,  186 => 74,  182 => 72,  177 => 71,  175 => 70,  169 => 66,  163 => 64,  161 => 63,  157 => 62,  153 => 61,  147 => 58,  136 => 49,  130 => 45,  127 => 44,  118 => 41,  114 => 40,  110 => 39,  106 => 38,  103 => 37,  98 => 36,  96 => 35,  78 => 19,  72 => 17,  70 => 16,  66 => 14,  60 => 12,  58 => 11,  54 => 9,  48 => 7,  46 => 6,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}

<div class=\"container\">
    <div class=\"row stats\">
        <div class=\"col-md-4 text-center\">
            {% if totalMatTime is not empty %}
                <p>Total mat time: {{ totalMatTime }}</p>
            {% endif %}
        </div>
        <div class=\"col-md-4 text-center\">
            {% if totalRounds is not empty %}
                <p>Total rounds rolled: {{ totalRounds }}</p>
            {% endif %}
        </div>
        <div class=\"col-md-4 text-center\">
            {% if totalRoundDuration is not empty %}
                <p>Total time spent rolling: {{ totalRoundDuration }}</p>
            {% endif %}
        </div>
    </div>

    <div class=\"row p-5\">
        <h3 class=\"col-12\">Dashboard</h3>
        <div class=\"col-md-12\">
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

        <div class=\"col-md-12\">
            <form method=\"POST\" action=\"\">
                <!-- User ID -->
                <h4>Make a note</h4>
                <div class=\"form-group\">
                    <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"{{ userID }}\">
                </div>
                <!-- Content -->
                <div class=\"form-group{{ errors.content ? ' has-error' : '' }}\">
                    <textarea class=\"form-control\" id=\"quicknote\" name=\"quicknote\" value=\"{{ input.content ?? '' }}\"></textarea>
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

        <div class=\"row px-5\">
            <div class=\"col-md-12\">
                <nav>
                    <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                        <button class=\"nav-link active\" id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-home\" type=\"button\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Techniques Studied</button>
                        <button class=\"nav-link\" id=\"nav-profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-profile\" type=\"button\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Mat Time</button>
                    </div>
                </nav>
                <div class=\"tab-content\" id=\"nav-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                        <canvas id=\"techniquesLearnedChart\"></canvas>
                    </div>
                    <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                        <canvas id=\"matTimeChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var totalMatTimeData = {{ totalMatTimeMonthly|json_encode|raw }};
    var techniquesLearnedData = {{ totalTechniquesLearnedMonthly|json_encode|raw }};
    var techniquesPerPositionData = {{ techniquesPerPosition|json_encode|raw }};
</script>

<script src=\"/technique-db-mvc/public/js/techniquesPerPosition.js\"></script>
<script src=\"/technique-db-mvc/public/js/techniqueMatTimeChart.js\"></script>

<script src=\"/technique-db-mvc/public/js/totalMatTime.js\"></script>
<script src=\"/technique-db-mvc/public/js/techniquesLearned.js\"></script>
<script src=\"/technique-db-mvc/public/js/beltChart.js\"></script>", "mainview/main_view.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/mainview/main_view.twig");
    }
}
