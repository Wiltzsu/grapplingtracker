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

/* add_new.twig */
class __TwigTemplate_50edc791f1622b0b84eef7e35ce00079 extends Template
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
        // line 42
        if (($context["username"] ?? null)) {
            // line 43
            yield "                <a href=\"logout\" class=\"btn btn-danger btn1\">Logout</a>
            ";
        }
        // line 45
        yield "      </span>
    </div>
</nav>


<div class=\"container-fluid p-5\">

<ul class=\"list-group list-group-flush\">
  <li class=\"list-group-item\">An item</li>
  <li class=\"list-group-item\">A second item</li>
  <li class=\"list-group-item\">A third item</li>
  <li class=\"list-group-item\">A fourth item</li>
  <li class=\"list-group-item\">And a fifth one</li>
</ul>

    <div id=\"accordion\">
        <button class=\"svg-button\" onclick=\"window.location.href='mainview'\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
            <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/>
        </svg>
        </button>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingOne\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                    Add a technique to the database.
                    </button>
                </h5>
            </div>
            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                <div class=\"card-body\">
                    <!-- Technique Form Column -->
                    <form method=\"POST\" action=\"\">
                        <h4>Add a New Technique</h4>
                        
                        <!-- User ID -->
                        <div class=\"form-group\">
                            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"<?php echo \$_SESSION['userID']?>\">

                        </div>

                        <!-- Name -->
                        <div class=\"form-group\">
                            <label for=\"techniqueName\">Technique Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"techniqueName\" name=\"techniqueName\" required>

                        </div>

                        <!-- Description -->
                        <div class=\"form-group\">
                            <label for=\"techniqueDescription\">Description:</label>
                            <textarea class=\"form-control\" id=\"techniqueDescription\" name=\"techniqueDescription\" required></textarea>

                        </div>

                        <!-- Category -->
                        <div class=\"form-group\">
                            <label for=\"techniqueCategory\">Category:</label>
                            <select class=\"form-control\" id=\"categoryID\" name=\"categoryID\" required>
                                <option value=\"\">Select a Category</option>

                            </select>

                        </div>

                        <!-- Position -->
                        <div class=\"form-group\">
                            <label for=\"techniquePosition\">Position:</label>
                            <select class=\"form-control\" id=\"positionID\" name=\"positionID\" required>
                                <option value=\"\">Select a Position</option>

                            </select>

                        </div>

                        <!-- Difficulty -->
                        <div class=\"form-group\">
                            <label for=\"techniqueDifficulty\">Difficulty:</label>
                            <select class=\"form-control\" id=\"difficultyID\" name=\"difficultyID\" required>
                                <option value=\"\">Select a Difficulty</option>

                            </select>

                        </div>

                        <button type=\"submit\" name=\"submitTechnique\" class=\"btn btn-primary btn2\">Add Technique</button>
                    </form>
                </div>
            </div>
        </div>


        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingTwo\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                    Add a category to the database.
                    </button>
                </h5>
            </div>

            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
                <div class=\"card-body\">

                    <!-- Category Form Column -->
                    <form method=\"POST\" action=\"\">
                        <h4>Add a New Category</h4>
                        <!-- Category name -->
                        <div class=\"form-group\">
                            <label for=\"categoryName\">Category Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"categoryName\" name=\"categoryName\" required>
                        </div>

                        <!-- Description -->
                        <div class=\"form-group\">
                            <label for=\"categoryDescription\">Description:</label>
                            <textarea class=\"form-control\" id=\"categoryDescription\" name=\"categoryDescription\" required></textarea>
                        </div>

                        <button type=\"submit\" name=\"submitCategory\" class=\"btn btn-primary btn2\">Add Category</button>
                    </form>
                </div>
            </div>
        </div>



        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingThree\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                    Add a position to the database.
                    </button>
                </h5>
            </div>

            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\">
                <div class=\"card-body\">

                    <!-- Position Form Column -->
                    <form method=\"POST\" action=\"\" >
                        <!-- Position name -->
                        <h4>Add a New Position</h4>
                        <div class=\"form-group\">
                                <label for=\"positionName\">Position Name:</label>
                                <input type=\"text\" class=\"form-control\" id=\"positionName\" name=\"positionName\" required>
                            </div>

                            <!-- Description -->
                            <div class=\"form-group\">
                                <label for=\"positionDescription\">Description:</label>
                                <textarea class=\"form-control\" id=\"positionDescription\" name=\"positionDescription\" required></textarea>
                            </div>
                        <button type=\"submit\" name=\"submitPosition\" class=\"btn btn-primary btn2\">Add Position</button>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingFour\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                    Add a class to the database.
                    </button>
                </h5>
            </div>

            <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordion\">
                <div class=\"card-body\">

                    <!-- Training Class Form Column -->
                    <form method=\"POST\" action=\"/technique-db-mvc/public/addnew\" >
                        <!-- User ID -->
                        <div class=\"form-group\">
                            <input type=\"\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["userID"] ?? null), "html", null, true);
        yield "\">
                        </div>

                        <!-- Instructor name -->
                        <h4>Add a New Training Class</h4>
                            <div class=\"form-group";
        // line 226
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emptyfield", [], "any", false, false, false, 226) || CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 226))) ? (" has-error") : (""));
        yield "\">
                                <label for=\"instructor\">Instructor:</label>
                                <input type=\"text\" class=\"form-control\" id=\"instructor\" name=\"instructor\" value=\"";
        // line 228
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", true, true, false, 228) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", false, false, false, 228)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "instructor", [], "any", false, false, false, 228), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Instructor name\">
                                ";
        // line 229
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emptyfield", [], "any", false, false, false, 229)) {
            // line 230
            yield "                                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emptyfield", [], "any", false, false, false, 230), "html", null, true);
            yield "</span>
                                ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 231
($context["errors"] ?? null), "instructor", [], "any", false, false, false, 231)) {
            // line 232
            yield "                                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "instructor", [], "any", false, false, false, 232), "html", null, true);
            yield "</span>
                                ";
        }
        // line 234
        yield "                            </div>


                            <!-- Location -->
                            <div class=\"form-group";
        // line 238
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 238)) ? (" has-error") : (""));
        yield "\">
                                <label for=\"location\">Location:</label>
                                <input type=\"textarea\" class=\"form-control\" id=\"location\" name=\"location\" value=\"";
        // line 240
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", true, true, false, 240) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", false, false, false, 240)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "location", [], "any", false, false, false, 240), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Class location\" >
                                ";
        // line 241
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 241)) {
            // line 242
            yield "                                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "location", [], "any", false, false, false, 242), "html", null, true);
            yield "</span>
                                ";
        }
        // line 244
        yield "                            </div>

                            <!-- Duration -->
                            <div class=\"form-group";
        // line 247
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 247)) ? (" has-error") : (""));
        yield "\">
                                <label for=\"duration\">Duration (minutes):</label>
                                <input type=\"number\" class=\"form-control\" id=\"duration\" name=\"duration\" value=\"";
        // line 249
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", true, true, false, 249) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", false, false, false, 249)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "duration", [], "any", false, false, false, 249), "html", null, true)) : (yield ""));
        yield "\" placeholder=\"Class duration\" >
                                ";
        // line 250
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 250)) {
            // line 251
            yield "                                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "duration", [], "any", false, false, false, 251), "html", null, true);
            yield "</span>
                                ";
        }
        // line 253
        yield "                            </div>

                            <!-- Date -->
                            <div class=\"form-group";
        // line 256
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emptyfield", [], "any", false, false, false, 256)) ? (" has-error") : (""));
        yield "\">
                                <label for=\"date\">Date:</label>
                                <input type=\"date\" class=\"form-control\" id=\"date\" name=\"classDate\" value=\"";
        // line 258
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "date", [], "any", true, true, false, 258) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "date", [], "any", false, false, false, 258)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "date", [], "any", false, false, false, 258), "html", null, true)) : (yield ""));
        yield "\" >
                                ";
        // line 259
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emptyfield", [], "any", false, false, false, 259)) {
            // line 260
            yield "                                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emptyfield", [], "any", false, false, false, 260), "html", null, true);
            yield "</span>
                                ";
        }
        // line 262
        yield "                            </div>

                            <!-- classDescription -->
                            <div class=\"form-group";
        // line 265
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 265)) ? (" has-error") : (""));
        yield "\">
                                <label for=\"classDescription\">Description / type:</label>
                                <textarea class=\"form-control\" id=\"classDescription\" name=\"classDescription\" value=\"";
        // line 267
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", true, true, false, 267) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", false, false, false, 267)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "classDescription", [], "any", false, false, false, 267), "html", null, true)) : (yield ""));
        yield "\"></textarea>
                                ";
        // line 268
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 268)) {
            // line 269
            yield "                                    <span class=\"help-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "classDescription", [], "any", false, false, false, 269), "html", null, true);
            yield "</span>
                                ";
        }
        // line 271
        yield "                            </div>
                            
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn2\">Add Class</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 281
        yield from         $this->loadTemplate("footer.twig", "add_new.twig", 281)->unwrap()->yield($context);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "add_new.twig";
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
        return array (  398 => 281,  386 => 271,  380 => 269,  378 => 268,  374 => 267,  369 => 265,  364 => 262,  358 => 260,  356 => 259,  352 => 258,  347 => 256,  342 => 253,  336 => 251,  334 => 250,  330 => 249,  325 => 247,  320 => 244,  314 => 242,  312 => 241,  308 => 240,  303 => 238,  297 => 234,  291 => 232,  289 => 231,  284 => 230,  282 => 229,  278 => 228,  273 => 226,  265 => 221,  87 => 45,  83 => 43,  81 => 42,  38 => 1,);
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

<ul class=\"list-group list-group-flush\">
  <li class=\"list-group-item\">An item</li>
  <li class=\"list-group-item\">A second item</li>
  <li class=\"list-group-item\">A third item</li>
  <li class=\"list-group-item\">A fourth item</li>
  <li class=\"list-group-item\">And a fifth one</li>
</ul>

    <div id=\"accordion\">
        <button class=\"svg-button\" onclick=\"window.location.href='mainview'\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-arrow-return-left\" viewBox=\"0 0 16 16\">
            <path fill-rule=\"evenodd\" d=\"M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5\"/>
        </svg>
        </button>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingOne\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                    Add a technique to the database.
                    </button>
                </h5>
            </div>
            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                <div class=\"card-body\">
                    <!-- Technique Form Column -->
                    <form method=\"POST\" action=\"\">
                        <h4>Add a New Technique</h4>
                        
                        <!-- User ID -->
                        <div class=\"form-group\">
                            <input type=\"hidden\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"<?php echo \$_SESSION['userID']?>\">

                        </div>

                        <!-- Name -->
                        <div class=\"form-group\">
                            <label for=\"techniqueName\">Technique Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"techniqueName\" name=\"techniqueName\" required>

                        </div>

                        <!-- Description -->
                        <div class=\"form-group\">
                            <label for=\"techniqueDescription\">Description:</label>
                            <textarea class=\"form-control\" id=\"techniqueDescription\" name=\"techniqueDescription\" required></textarea>

                        </div>

                        <!-- Category -->
                        <div class=\"form-group\">
                            <label for=\"techniqueCategory\">Category:</label>
                            <select class=\"form-control\" id=\"categoryID\" name=\"categoryID\" required>
                                <option value=\"\">Select a Category</option>

                            </select>

                        </div>

                        <!-- Position -->
                        <div class=\"form-group\">
                            <label for=\"techniquePosition\">Position:</label>
                            <select class=\"form-control\" id=\"positionID\" name=\"positionID\" required>
                                <option value=\"\">Select a Position</option>

                            </select>

                        </div>

                        <!-- Difficulty -->
                        <div class=\"form-group\">
                            <label for=\"techniqueDifficulty\">Difficulty:</label>
                            <select class=\"form-control\" id=\"difficultyID\" name=\"difficultyID\" required>
                                <option value=\"\">Select a Difficulty</option>

                            </select>

                        </div>

                        <button type=\"submit\" name=\"submitTechnique\" class=\"btn btn-primary btn2\">Add Technique</button>
                    </form>
                </div>
            </div>
        </div>


        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingTwo\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                    Add a category to the database.
                    </button>
                </h5>
            </div>

            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
                <div class=\"card-body\">

                    <!-- Category Form Column -->
                    <form method=\"POST\" action=\"\">
                        <h4>Add a New Category</h4>
                        <!-- Category name -->
                        <div class=\"form-group\">
                            <label for=\"categoryName\">Category Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"categoryName\" name=\"categoryName\" required>
                        </div>

                        <!-- Description -->
                        <div class=\"form-group\">
                            <label for=\"categoryDescription\">Description:</label>
                            <textarea class=\"form-control\" id=\"categoryDescription\" name=\"categoryDescription\" required></textarea>
                        </div>

                        <button type=\"submit\" name=\"submitCategory\" class=\"btn btn-primary btn2\">Add Category</button>
                    </form>
                </div>
            </div>
        </div>



        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingThree\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                    Add a position to the database.
                    </button>
                </h5>
            </div>

            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\">
                <div class=\"card-body\">

                    <!-- Position Form Column -->
                    <form method=\"POST\" action=\"\" >
                        <!-- Position name -->
                        <h4>Add a New Position</h4>
                        <div class=\"form-group\">
                                <label for=\"positionName\">Position Name:</label>
                                <input type=\"text\" class=\"form-control\" id=\"positionName\" name=\"positionName\" required>
                            </div>

                            <!-- Description -->
                            <div class=\"form-group\">
                                <label for=\"positionDescription\">Description:</label>
                                <textarea class=\"form-control\" id=\"positionDescription\" name=\"positionDescription\" required></textarea>
                            </div>
                        <button type=\"submit\" name=\"submitPosition\" class=\"btn btn-primary btn2\">Add Position</button>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header journalCardStyle\" id=\"headingFour\">
                <h5 class=\"mb-0\">
                    <button class=\"btn btn-link journalButton\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                    Add a class to the database.
                    </button>
                </h5>
            </div>

            <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\" data-parent=\"#accordion\">
                <div class=\"card-body\">

                    <!-- Training Class Form Column -->
                    <form method=\"POST\" action=\"/technique-db-mvc/public/addnew\" >
                        <!-- User ID -->
                        <div class=\"form-group\">
                            <input type=\"\" class=\"form-control\" id=\"userID\" name=\"userID\" required value=\"{{ userID }}\">
                        </div>

                        <!-- Instructor name -->
                        <h4>Add a New Training Class</h4>
                            <div class=\"form-group{{ errors.emptyfield or errors.instructor ? ' has-error' : '' }}\">
                                <label for=\"instructor\">Instructor:</label>
                                <input type=\"text\" class=\"form-control\" id=\"instructor\" name=\"instructor\" value=\"{{ input.instructor ?? '' }}\" placeholder=\"Instructor name\">
                                {% if errors.emptyfield %}
                                    <span class=\"help-block\">{{ errors.emptyfield }}</span>
                                {% elseif errors.instructor %}
                                    <span class=\"help-block\">{{ errors.instructor }}</span>
                                {% endif %}
                            </div>


                            <!-- Location -->
                            <div class=\"form-group{{ errors.location ? ' has-error' : '' }}\">
                                <label for=\"location\">Location:</label>
                                <input type=\"textarea\" class=\"form-control\" id=\"location\" name=\"location\" value=\"{{ input.location ?? '' }}\" placeholder=\"Class location\" >
                                {% if errors.location %}
                                    <span class=\"help-block\">{{ errors.location }}</span>
                                {% endif %}
                            </div>

                            <!-- Duration -->
                            <div class=\"form-group{{ errors.duration ? ' has-error' : '' }}\">
                                <label for=\"duration\">Duration (minutes):</label>
                                <input type=\"number\" class=\"form-control\" id=\"duration\" name=\"duration\" value=\"{{ input.duration  ?? '' }}\" placeholder=\"Class duration\" >
                                {% if errors.duration %}
                                    <span class=\"help-block\">{{ errors.duration }}</span>
                                {% endif %}
                            </div>

                            <!-- Date -->
                            <div class=\"form-group{{ errors.emptyfield ? ' has-error' : '' }}\">
                                <label for=\"date\">Date:</label>
                                <input type=\"date\" class=\"form-control\" id=\"date\" name=\"classDate\" value=\"{{ input.date  ?? '' }}\" >
                                {% if errors.emptyfield %}
                                    <span class=\"help-block\">{{ errors.emptyfield }}</span>
                                {% endif %}
                            </div>

                            <!-- classDescription -->
                            <div class=\"form-group{{ errors.classDescription ? ' has-error' : '' }}\">
                                <label for=\"classDescription\">Description / type:</label>
                                <textarea class=\"form-control\" id=\"classDescription\" name=\"classDescription\" value=\"{{ input.classDescription  ?? '' }}\"></textarea>
                                {% if errors.classDescription %}
                                    <span class=\"help-block\">{{ errors.classDescription }}</span>
                                {% endif %}
                            </div>
                            
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn2\">Add Class</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{% include 'footer.twig' %}", "add_new.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/add_new.twig");
    }
}
