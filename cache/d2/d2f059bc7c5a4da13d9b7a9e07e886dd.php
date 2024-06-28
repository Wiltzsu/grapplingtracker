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
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Welcome</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</head>
<body>


<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top\">
    <a class=\"navbar-brand\" href=\"/technique-db-mvc/mainview\">Grappling Tracker</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <img src=\"/technique-db-mvc/public/img/grapplingtrackertransp.png\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"Menu\">
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarText\">
      <!-- Navbar links go here -->
    </div>
    <div class=\"collapse navbar-collapse\" id=\"navbarText\">
    <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"mainview\">Journal <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"addnew\">Add new</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"viewitems\">View items</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"profile\">Belt progression</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"profile\">Guide</a>
          </li>
        </ul>
        <span class=\"navbar-text\">
            ";
        // line 44
        if (($context["username"] ?? null)) {
            // line 45
            yield "                <a href=\"logout\" class=\"btn btn-danger btn1\">Logout</a>
            ";
        }
        // line 47
        yield "        </span>
    </div>
</nav>


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
        // line 81
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["techniques"] ?? null))) {
            // line 82
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["techniques"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["technique"]) {
                // line 83
                yield "                                <tr>
                                    <td>";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueName", [], "any", false, false, false, 84), "html", null, true);
                yield "</td>
                                    <td>";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueDescription", [], "any", false, false, false, 85), "html", null, true);
                yield "</td>
                                    <td>";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "categoryName", [], "any", false, false, false, 86), "html", null, true);
                yield "</td>
                                    <td>";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "positionName", [], "any", false, false, false, 87), "html", null, true);
                yield "</td>
                                    <td>";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "difficulty", [], "any", false, false, false, 88), "html", null, true);
                yield "</td>
                                    <td>
                                        <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueID", [], "any", false, false, false, 90), "html", null, true);
                yield "\">
                                            <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                        </button>
                                    </td>
                                </tr>

                                <!-- Modal for deletion confirmation -->
                                <div class=\"modal fade\" id=\"modal";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueID", [], "any", false, false, false, 97), "html", null, true);
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
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueName", [], "any", false, false, false, 107), "html", null, true);
                yield "\"?
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                                <!-- Form for deletion -->
                                                <form method=\"POST\" action=\"\">
                                                    <input type=\"hidden\" name=\"techniqueID\" value=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technique"], "techniqueID", [], "any", false, false, false, 113), "html", null, true);
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
            // line 121
            yield "                    ";
        } else {
            // line 122
            yield "                        <p>No techniques found.</p>
                    ";
        }
        // line 123
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
        // line 147
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["categories"] ?? null))) {
            // line 148
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 149
                yield "                                <tr>
                                    <td>";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryName", [], "any", false, false, false, 150), "html", null, true);
                yield "</td>
                                    <td>";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryDescription", [], "any", false, false, false, 151), "html", null, true);
                yield "</td>
                                    <!-- Only show delete button if user is admin -->
                                    ";
                // line 153
                if ((($context["roleID"] ?? null) == 1)) {
                    yield "                                   
                                    <td>
                                        <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal";
                    // line 155
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryID", [], "any", false, false, false, 155), "html", null, true);
                    yield "\">
                                            <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                        </button>
                                    </td>
                                    ";
                }
                // line 160
                yield "                                </tr>

                                <!-- Modal for deletion confirmation -->
                                <div class=\"modal fade\" id=\"modal";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryID", [], "any", false, false, false, 163), "html", null, true);
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
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryName", [], "any", false, false, false, 173), "html", null, true);
                yield "\"?
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                                <!-- Form for deletion -->
                                                <form method=\"POST\" action=\"\">
                                                    <input type=\"hidden\" name=\"categoryID\" value=\"";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "categoryID", [], "any", false, false, false, 179), "html", null, true);
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
            // line 187
            yield "                    ";
        } else {
            // line 188
            yield "                        <p>No positions found.</p>
                    ";
        }
        // line 189
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
        // line 213
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["positions"] ?? null))) {
            // line 214
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["positions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                // line 215
                yield "                                <tr>
                                    <td>";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionName", [], "any", false, false, false, 216), "html", null, true);
                yield "</td>
                                    <td>";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionDescription", [], "any", false, false, false, 217), "html", null, true);
                yield "</td>

                                    <!-- Only show delete button if user is admin -->
                                    ";
                // line 220
                if ((($context["roleID"] ?? null) == 1)) {
                    // line 221
                    yield "                                    <td>
                                        <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#modal";
                    // line 222
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionID", [], "any", false, false, false, 222), "html", null, true);
                    yield "\">
                                            <img src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/icons/trash.svg\" alt=\"Delete\">
                                        </button>
                                    </td>
                                    ";
                }
                // line 227
                yield "
                                </tr>

                                <!-- Modal for deletion confirmation -->
                                <div class=\"modal fade\" id=\"modal";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionID", [], "any", false, false, false, 231), "html", null, true);
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
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionName", [], "any", false, false, false, 241), "html", null, true);
                yield "\"?
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                                <!-- Form for deletion -->
                                                <form method=\"POST\" action=\"\">
                                                    <input type=\"hidden\" name=\"positionID\" value=\"";
                // line 247
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["position"], "positionID", [], "any", false, false, false, 247), "html", null, true);
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
            // line 255
            yield "                    ";
        } else {
            // line 256
            yield "                        <p>No positions found.</p>
                    ";
        }
        // line 257
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
        // line 284
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["classes"] ?? null))) {
            // line 285
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 286
                yield "                            <tr>
                                <td>";
                // line 287
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "instructor", [], "any", false, false, false, 287), "html", null, true);
                yield "</td>
                                <td>";
                // line 288
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "location", [], "any", false, false, false, 288), "html", null, true);
                yield "</td>
                                <td>";
                // line 289
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "classDuration", [], "any", false, false, false, 289), "html", null, true);
                yield " min</td>
                                <td>";
                // line 290
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "classDate", [], "any", false, false, false, 290), "html", null, true);
                yield "</td>
                                <td>";
                // line 291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["class"], "classDescription", [], "any", false, false, false, 291), "html", null, true);
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
            // line 323
            yield "                    ";
        } else {
            // line 324
            yield "                        <p>No classes found for this user.</p>
                    ";
        }
        // line 325
        yield "   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

";
        // line 333
        yield from         $this->loadTemplate("footer.twig", "view_items.twig", 333)->unwrap()->yield($context);
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
        return array (  533 => 333,  523 => 325,  519 => 324,  516 => 323,  478 => 291,  474 => 290,  470 => 289,  466 => 288,  462 => 287,  459 => 286,  454 => 285,  452 => 284,  423 => 257,  419 => 256,  416 => 255,  402 => 247,  393 => 241,  380 => 231,  374 => 227,  366 => 222,  363 => 221,  361 => 220,  355 => 217,  351 => 216,  348 => 215,  343 => 214,  341 => 213,  315 => 189,  311 => 188,  308 => 187,  294 => 179,  285 => 173,  272 => 163,  267 => 160,  259 => 155,  254 => 153,  249 => 151,  245 => 150,  242 => 149,  237 => 148,  235 => 147,  209 => 123,  205 => 122,  202 => 121,  188 => 113,  179 => 107,  166 => 97,  156 => 90,  151 => 88,  147 => 87,  143 => 86,  139 => 85,  135 => 84,  132 => 83,  127 => 82,  125 => 81,  89 => 47,  85 => 45,  83 => 44,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Welcome</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/technique-db-mvc/public/css/style.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</head>
<body>


<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top\">
    <a class=\"navbar-brand\" href=\"/technique-db-mvc/mainview\">Grappling Tracker</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <img src=\"/technique-db-mvc/public/img/grapplingtrackertransp.png\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"Menu\">
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarText\">
      <!-- Navbar links go here -->
    </div>
    <div class=\"collapse navbar-collapse\" id=\"navbarText\">
    <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"mainview\">Journal <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"addnew\">Add new</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"viewitems\">View items</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"profile\">Belt progression</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"profile\">Guide</a>
          </li>
        </ul>
        <span class=\"navbar-text\">
            {% if username %}
                <a href=\"logout\" class=\"btn btn-danger btn1\">Logout</a>
            {% endif %}
        </span>
    </div>
</nav>


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
