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
        <div class=\"col-sm-8\">
            <h4>Techniques</h4>
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
        // line 18
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["techniquesClasses"] ?? null))) {
            // line 19
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["techniquesClasses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["techniqueClass"]) {
                // line 20
                yield "                        <tr>
                            <td>";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["techniqueClass"], "techniqueName", [], "any", false, false, false, 21), "html", null, true);
                yield "</td>
                            <td>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["techniqueClass"], "techniqueDescription", [], "any", false, false, false, 22), "html", null, true);
                yield "</td>
                            <td>";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["techniqueClass"], "categoryName", [], "any", false, false, false, 23), "html", null, true);
                yield "</td>
                            <td>";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["techniqueClass"], "positionName", [], "any", false, false, false, 24), "html", null, true);
                yield "</td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['techniqueClass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "                    ";
        } else {
            // line 28
            yield "                        <tr>
                            <td colspan=\"4\">No entries found.</td>
                        </tr>
                    ";
        }
        // line 32
        yield "                </tbody>
            </table>
        </div>

        <div class=\"col-sm-4\">
            <form method=\"POST\" action=\"\">
                <!-- User ID -->
                <h4>Make a note</h4>
                <div class=\"form-group\">
                    <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userID"] ?? null), "html", null, true);
        yield "\">
                </div>
                <!-- Content -->
                <div class=\"form-group";
        // line 44
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 44)) ? (" has-error") : (""));
        yield "\">
                    <textarea class=\"form-control\" id=\"quicknote\" name=\"quicknote\" value=\"";
        // line 45
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "content", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "content", [], "any", false, false, false, 45)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "content", [], "any", false, false, false, 45), "html", null, true)) : (yield ""));
        yield "\"></textarea>
                    <div class=\"form-text mb-2\">Write and delete quick notes.</div>
                    ";
        // line 47
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 47)) {
            // line 48
            yield "                        <span class=\"help-block error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 48), "html", null, true);
            yield "</span>
                    ";
        }
        // line 50
        yield "                </div>
                <button type=\"submit\" name=\"submit\" class=\"btn btn-primary mb-2\">Submit</button>
            </form>

            ";
        // line 54
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["quickNotes"] ?? null))) {
            // line 55
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["quickNotes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["quickNote"]) {
                // line 56
                yield "                <div class=\"card mb-2\">
                    <div class=\"card-body d-flex justify-content-between align-items-center\">
                        <p class=\"card-text mb-0\">";
                // line 58
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickNote"], "content", [], "any", false, false, false, 58), "html", null, true));
                yield "</p>
                        <form method=\"POST\" action=\"mainview\"> <!-- Specify the correct path -->
                            <input type=\"hidden\" name=\"delete\" value=\"1\">
                            <input type=\"hidden\" name=\"quicknoteID\" value=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickNote"], "quicknoteID", [], "any", false, false, false, 61), "html", null, true);
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
            // line 69
            yield "            ";
        } else {
            // line 70
            yield "                <p>No notes found.</p>
            ";
        }
        // line 72
        yield "        </div>
    </div>

        <div class=\"row p-5\">
            <div class=\"col-sm-7\">
                <nav>
                    <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                        <button class=\"nav-link active\" id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-home\" type=\"button\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Techniques Studied</button>
                        <button class=\"nav-link\" id=\"nav-profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-profile\" type=\"button\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Mat Time</button>
                        <button class=\"nav-link\" id=\"nav-contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-contact\" type=\"button\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Belt Progression</button>
                    </div>
                </nav>
                <div class=\"tab-content\" id=\"nav-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                        <canvas id=\"techniquesLearnedChart\"></canvas>
                    </div>
                    <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                        <canvas id=\"matTimeChart\"></canvas>
                    </div>
                    <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\">
                        <canvas id=\"beltProgressChart\"></canvas>
                        <div id=\"beltChartData\" data-labels='";
        // line 93
        yield json_encode(($context["beltTimes"] ?? null), Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_SLASHES"));
        yield "' data-values='";
        yield json_encode(($context["daysOnBelt"] ?? null), Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_SLASHES"));
        yield "'></div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-5 d-flex justify-content-center align-items-center\">
                <canvas id=\"techniquesPerPosition\"></canvas>
                <div id=\"techniquePositionChartData\" data-labels=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["techniquesPerPositionLabels"] ?? null), "html", null, true);
        yield "\" data-values=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["techniquesPerPositionValues"] ?? null), "html", null, true);
        yield "\" style=\"display: none;\"></div>
            </div>
        </div>

        <div class=\"row p-5\">
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
    </div>
</div>

<script>
    var totalMatTimeData = ";
        // line 143
        yield json_encode(($context["totalMatTimeMonthly"] ?? null));
        yield ";
    var techniquesLearnedData = ";
        // line 144
        yield json_encode(($context["totalTechniquesLearnedMonthly"] ?? null));
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
        return array (  263 => 144,  259 => 143,  211 => 100,  199 => 93,  176 => 72,  172 => 70,  169 => 69,  155 => 61,  149 => 58,  145 => 56,  140 => 55,  138 => 54,  132 => 50,  126 => 48,  124 => 47,  119 => 45,  115 => 44,  109 => 41,  98 => 32,  92 => 28,  89 => 27,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  65 => 20,  60 => 19,  58 => 18,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}

<div class=\"container-fluid\">
    <div class=\"row p-5\">
        <h3 class=\"col-12\">Dashboard</h3>
        <div class=\"col-sm-8\">
            <h4>Techniques</h4>
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

        <div class=\"row p-5\">
            <div class=\"col-sm-7\">
                <nav>
                    <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                        <button class=\"nav-link active\" id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-home\" type=\"button\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Techniques Studied</button>
                        <button class=\"nav-link\" id=\"nav-profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-profile\" type=\"button\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Mat Time</button>
                        <button class=\"nav-link\" id=\"nav-contact-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-contact\" type=\"button\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Belt Progression</button>
                    </div>
                </nav>
                <div class=\"tab-content\" id=\"nav-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                        <canvas id=\"techniquesLearnedChart\"></canvas>
                    </div>
                    <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                        <canvas id=\"matTimeChart\"></canvas>
                    </div>
                    <div class=\"tab-pane fade\" id=\"nav-contact\" role=\"tabpanel\" aria-labelledby=\"nav-contact-tab\">
                        <canvas id=\"beltProgressChart\"></canvas>
                        <div id=\"beltChartData\" data-labels='{{ beltTimes|json_encode(constant('JSON_UNESCAPED_SLASHES'))|raw }}' data-values='{{ daysOnBelt|json_encode(constant('JSON_UNESCAPED_SLASHES'))|raw }}'></div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-5 d-flex justify-content-center align-items-center\">
                <canvas id=\"techniquesPerPosition\"></canvas>
                <div id=\"techniquePositionChartData\" data-labels=\"{{ techniquesPerPositionLabels }}\" data-values=\"{{ techniquesPerPositionValues }}\" style=\"display: none;\"></div>
            </div>
        </div>

        <div class=\"row p-5\">
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
    </div>
</div>

<script>
    var totalMatTimeData = {{ totalMatTimeMonthly|json_encode|raw }};
    var techniquesLearnedData = {{ totalTechniquesLearnedMonthly|json_encode|raw }};
</script>

<script src=\"/technique-db-mvc/public/js/techniquesPerPosition.js\"></script>
<script src=\"/technique-db-mvc/public/js/techniqueMatTimeChart.js\"></script>

<script src=\"/technique-db-mvc/public/js/totalMatTime.js\"></script>
<script src=\"/technique-db-mvc/public/js/techniquesLearned.js\"></script>
<script src=\"/technique-db-mvc/public/js/beltChart.js\"></script>", "mainview/main_view.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/mainview/main_view.twig");
    }
}
