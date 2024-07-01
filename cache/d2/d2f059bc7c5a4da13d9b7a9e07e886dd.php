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

/* view_items.twig */
class __TwigTemplate_7384ed68b5405a572b73f3238890ace5 extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "view_items.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "

<div class=\"container-fluid p-5\">
    <div id=\"accordion\">
        <!-- Back to main view button -->
        <button class=\"svg-button\" onclick=\"window.location.href='mainview'\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
            <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/></svg>
        </button>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingOne\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                    View your techniques.
                    </button>
                </h5>
            </div>
            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                <table class=\"table table-hover\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Position</th>
                            <th>Difficulty</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 33
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["techniques"] ?? null))) {
            // line 34
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["techniques"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["technique"]) {
                // line 35
                yield "                                <tr>
                                    <td>";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueName", [], "any", false, false, false, 36), "html", null, true);
                yield "</td>
                                    <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueDescription", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>
                                    <td>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "categoryName", [], "any", false, false, false, 38), "html", null, true);
                yield "</td>
                                    <td>";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "positionName", [], "any", false, false, false, 39), "html", null, true);
                yield "</td>
                                    <td>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "difficulty", [], "any", false, false, false, 40), "html", null, true);
                yield "</td>
                                    <td>
                                        <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueID", [], "any", false, false, false, 42), "html", null, true);
                yield "\">
                                            <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                        </button>
                                    </td>
                                </tr>

                                <!-- Modal for deletion confirmation -->
                                <div class=\"modal fade\" id=\"modal";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueID", [], "any", false, false, false, 49), "html", null, true);
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
                                                Are you sure you want to delete the technique \"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueName", [], "any", false, false, false, 59), "html", null, true);
                yield "\"?
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                                <!-- Form for deletion -->
                                                <form method=\"POST\" action=\"\">
                                                    <input type=\"hidden\" name=\"techniqueID\" value=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueID", [], "any", false, false, false, 65), "html", null, true);
                yield "\">
                                                    <button type=\"submit\" name=\"deleteTechnique\" class=\"btn btn-danger\">Delete technique</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "                    ";
        } else {
            // line 74
            yield "                        <p>No techniques found.</p>
                    ";
        }
        // line 75
        yield "  
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingTwo\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                    View your categories.
                    </button>
                </h5>
            </div>
            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
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
        // line 99
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["categories"] ?? null))) {
            // line 100
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 101
                yield "                                <tr>
                                    <td>";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryName", [], "any", false, false, false, 102), "html", null, true);
                yield "</td>
                                    <td>";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryDescription", [], "any", false, false, false, 103), "html", null, true);
                yield "</td>
                                    <!-- Only show delete button if user is admin -->
                                    ";
                // line 105
                if ((($context["roleID"] ?? null) == 1)) {
                    yield "                                   
                                    <td>
                                        <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal";
                    // line 107
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryID", [], "any", false, false, false, 107), "html", null, true);
                    yield "\">
                                            <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                        </button>
                                    </td>
                                    ";
                }
                // line 112
                yield "                                </tr>

                                <!-- Modal for deletion confirmation -->
                                <div class=\"modal fade\" id=\"modal";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryID", [], "any", false, false, false, 115), "html", null, true);
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
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryName", [], "any", false, false, false, 125), "html", null, true);
                yield "\"?
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                                <!-- Form for deletion -->
                                                <form method=\"POST\" action=\"\">
                                                    <input type=\"hidden\" name=\"categoryID\" value=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryID", [], "any", false, false, false, 131), "html", null, true);
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
            // line 139
            yield "                    ";
        } else {
            // line 140
            yield "                        <p>No positions found.</p>
                    ";
        }
        // line 141
        yield "  
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingThree\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                    View your positions.
                    </button>
                </h5>
            </div>
            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\">
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
        // line 165
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["positions"] ?? null))) {
            // line 166
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["positions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                // line 167
                yield "                                <tr>
                                    <td>";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionName", [], "any", false, false, false, 168), "html", null, true);
                yield "</td>
                                    <td>";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionDescription", [], "any", false, false, false, 169), "html", null, true);
                yield "</td>

                                    <!-- Only show delete button if user is admin -->
                                    ";
                // line 172
                if ((($context["roleID"] ?? null) == 1)) {
                    // line 173
                    yield "                                    <td>
                                        <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal";
                    // line 174
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionID", [], "any", false, false, false, 174), "html", null, true);
                    yield "\">
                                            <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                        </button>
                                    </td>
                                    ";
                }
                // line 179
                yield "
                                </tr>

                                <!-- Modal for deletion confirmation -->
                                <div class=\"modal fade\" id=\"modal";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionID", [], "any", false, false, false, 183), "html", null, true);
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
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionName", [], "any", false, false, false, 193), "html", null, true);
                yield "\"?
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                                <!-- Form for deletion -->
                                                <form method=\"POST\" action=\"\">
                                                    <input type=\"hidden\" name=\"positionID\" value=\"";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionID", [], "any", false, false, false, 199), "html", null, true);
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
            // line 207
            yield "                    ";
        } else {
            // line 208
            yield "                        <p>No positions found.</p>
                    ";
        }
        // line 209
        yield "   
                    </tbody>
                </table>    
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingFour\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"true\" aria-controls=\"collapseFour\">
                    View your classes.
                    </button>
                </h5>
            </div>
            <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordion\">
                <table class=\"table table-hover\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>Instructor</th>
                            <th>Location</th>
                            <th>Duration</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 236
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["classes"] ?? null))) {
            // line 237
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 238
                yield "                            <tr>
                                <td>";
                // line 239
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "instructor", [], "any", false, false, false, 239), "html", null, true);
                yield "</td>
                                <td>";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "location", [], "any", false, false, false, 240), "html", null, true);
                yield "</td>
                                <td>";
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "classDuration", [], "any", false, false, false, 241), "html", null, true);
                yield " min</td>
                                <td>";
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "classDate", [], "any", false, false, false, 242), "html", null, true);
                yield "</td>
                                <td>";
                // line 243
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "classDescription", [], "any", false, false, false, 243), "html", null, true);
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
            // line 275
            yield "                    ";
        } else {
            // line 276
            yield "                        <p>No classes found for this user.</p>
                    ";
        }
        // line 277
        yield "   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

";
        // line 285
        yield from         $this->loadTemplate("footer.twig", "view_items.twig", 285)->unwrap()->yield($context);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "view_items.twig";
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
        return array (  481 => 285,  471 => 277,  467 => 276,  464 => 275,  426 => 243,  422 => 242,  418 => 241,  414 => 240,  410 => 239,  407 => 238,  402 => 237,  400 => 236,  371 => 209,  367 => 208,  364 => 207,  350 => 199,  341 => 193,  328 => 183,  322 => 179,  314 => 174,  311 => 173,  309 => 172,  303 => 169,  299 => 168,  296 => 167,  291 => 166,  289 => 165,  263 => 141,  259 => 140,  256 => 139,  242 => 131,  233 => 125,  220 => 115,  215 => 112,  207 => 107,  202 => 105,  197 => 103,  193 => 102,  190 => 101,  185 => 100,  183 => 99,  157 => 75,  153 => 74,  150 => 73,  136 => 65,  127 => 59,  114 => 49,  104 => 42,  99 => 40,  95 => 39,  91 => 38,  87 => 37,  83 => 36,  80 => 35,  75 => 34,  73 => 33,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}


<div class=\"container-fluid p-5\">
    <div id=\"accordion\">
        <!-- Back to main view button -->
        <button class=\"svg-button\" onclick=\"window.location.href='mainview'\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
            <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/></svg>
        </button>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingOne\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                    View your techniques.
                    </button>
                </h5>
            </div>
            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                <table class=\"table table-hover\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Position</th>
                            <th>Difficulty</th>
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
                                    <td>{{ technique.difficulty }}</td>
                                    <td>
                                        <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal{{ technique.techniqueID }}\">
                                            <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                        </button>
                                    </td>
                                </tr>

                                <!-- Modal for deletion confirmation -->
                                <div class=\"modal fade\" id=\"modal{{ technique.techniqueID }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Confirmation</h5>
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>
                                            <div class=\"modal-body\">
                                                Are you sure you want to delete the technique \"{{ technique.techniqueName }}\"?
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                                <!-- Form for deletion -->
                                                <form method=\"POST\" action=\"\">
                                                    <input type=\"hidden\" name=\"techniqueID\" value=\"{{ technique.techniqueID }}\">
                                                    <button type=\"submit\" name=\"deleteTechnique\" class=\"btn btn-danger\">Delete technique</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                    {% else %}
                        <p>No techniques found.</p>
                    {% endif %}  
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingTwo\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                    View your categories.
                    </button>
                </h5>
            </div>
            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
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

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingThree\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                    View your positions.
                    </button>
                </h5>
            </div>
            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\">
                <table class=\"table table-hover\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    {% if positions is not empty %}
                        {% for position in positions %}
                                <tr>
                                    <td>{{ position.positionName}}</td>
                                    <td>{{ position.positionDescription }}</td>

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

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingFour\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"true\" aria-controls=\"collapseFour\">
                    View your classes.
                    </button>
                </h5>
            </div>
            <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordion\">
                <table class=\"table table-hover\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>Instructor</th>
                            <th>Location</th>
                            <th>Duration</th>
                            <th>Date</th>
                            <th>Description</th>
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
</div>

{% include 'footer.twig' %}", "view_items.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/view_items.twig");
    }
}
