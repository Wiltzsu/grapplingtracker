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

/* stats.twig */
class __TwigTemplate_28f14557d62b4edc1e4841d8f3db2e2a extends Template
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
        yield from         $this->loadTemplate("@Header/header.twig", "stats.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<div class=\"container px-5 mb-5\">
    <div class=\"row text-center\">
        <div class=\"col-md-12\">
            <h3>7 days</h3>
        </div>
        <div class=\"col-md-12\">
            ";
        // line 9
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["weeklyMatTime"] ?? null))) {
            // line 10
            yield "                <p>Mat time: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["weeklyMatTime"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 12
        yield "        </div>
        <div class=\"col-md-12\">
            ";
        // line 14
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["weeklyRoundDuration"] ?? null))) {
            // line 15
            yield "                <p>Time spent rolling: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["weeklyRoundDuration"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 17
        yield "        </div>
        <div class=\"col-md-12\">
            ";
        // line 19
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["totalRoundsWeekly"] ?? null))) {
            // line 20
            yield "                <p>Rounds rolled: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalRoundsWeekly"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 22
        yield "        </div>
    </div>

  <div class=\"row text-center\">
        <div class=\"col-md-12\">
            <h3>1 month</h3>
        </div>
        <div class=\"col-md-12\">
            ";
        // line 30
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["monthlyMatTime"] ?? null))) {
            // line 31
            yield "                <p>Mat time: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["monthlyMatTime"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 33
        yield "        </div>
        <div class=\"col-md-12\">
            ";
        // line 35
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["monthlyRoundDuration"] ?? null))) {
            // line 36
            yield "                <p>Time spent rolling: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["monthlyRoundDuration"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 38
        yield "        </div>
        <div class=\"col-md-12\">
            ";
        // line 40
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["totalRoundsMonthly"] ?? null))) {
            // line 41
            yield "                <p>Rounds rolled: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalRoundsMonthly"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 43
        yield "        </div>
    </div>

    <div class=\"row text-center\">
        <div class=\"col-md-12\">
            <h3>6 months</h3>
        </div>
        <div class=\"col-md-12\">
            ";
        // line 51
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["biannualMatTime"] ?? null))) {
            // line 52
            yield "                <p>Mat time: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["biannualMatTime"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 54
        yield "        </div>
        <div class=\"col-md-12\">
            ";
        // line 56
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["biannualRoundDuration"] ?? null))) {
            // line 57
            yield "                <p>Time spent rolling: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["biannualRoundDuration"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 59
        yield "        </div>
        <div class=\"col-md-12\">
            ";
        // line 61
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["totalRoundsMonthly"] ?? null))) {
            // line 62
            yield "                <p>Rounds rolled: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalRoundsMonthly"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 64
        yield "        </div>
    </div>

    <div class=\"row text-center\">
        <div class=\"col-md-12\">
        <h3>All time</h3>
        <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
            <label class=\"form-check-label\" for=\"flexCheckDefault\">
            </label>
        </div>
        </div>
        <div class=\"col-md-12\">
            ";
        // line 77
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["totalMatTime"] ?? null))) {
            // line 78
            yield "                <p>Mat time: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalMatTime"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 80
        yield "        </div>
        <div class=\"col-md-12\">
            ";
        // line 82
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["totalRoundDuration"] ?? null))) {
            // line 83
            yield "                <p>Time spent rolling: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalRoundDuration"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 85
        yield "        </div>
        <div class=\"col-md-12\">
            ";
        // line 87
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["totalRounds"] ?? null))) {
            // line 88
            yield "                <p>Rounds rolled: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalRounds"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 90
        yield "        </div>
    </div>
</div>

// if checkbox is clicked
// send data to database table

<script>
    document.getElementById('flexCheckDefault').addEventListener('click', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/technique-db-mvc/public/stats', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.send(JSON.stringify({totalMatTime: ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalMatTime"] ?? null), "html", null, true);
        yield ", totalRoundDuration: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalRoundDuration"] ?? null), "html", null, true);
        yield ", totalRounds: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalRounds"] ?? null), "html", null, true);
        yield " }));
    });
</script>

<?php
public function updateUserPreferences(\$userID, \$preferences)
{
    foreach (\$preferences as \$key => \$value) {
        \$sql = \"SELECT count(*) FROM user_preferences WHERE userID = :userID AND preference_key = :key\";
        \$stmt = \$this->db->prepare(\$sql);
        \$stmt->execute(['userID' => \$userID, 'key' => \$key]);
        \$exists = \$stmt->fetchColumn();

        if (\$exists) {
            // Update existing preference
            \$sql = \"UPDATE user_preferences SET preference_value = :value WHERE userID = :userID AND preference_key = :key\";
        } else {
            // Insert new preference
            \$sql = \"INSERT INTO user_preferences (userID, preference_key, preference_value) VALUES (:userID, :key, :value)\";
        }

        \$stmt = \$this->db->prepare(\$sql);
        \$stmt->execute(['userID' => \$userID, 'key' => \$key, 'value' => \$value]);
    }
}
?>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "stats.twig";
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
        return array (  226 => 102,  212 => 90,  206 => 88,  204 => 87,  200 => 85,  194 => 83,  192 => 82,  188 => 80,  182 => 78,  180 => 77,  165 => 64,  159 => 62,  157 => 61,  153 => 59,  147 => 57,  145 => 56,  141 => 54,  135 => 52,  133 => 51,  123 => 43,  117 => 41,  115 => 40,  111 => 38,  105 => 36,  103 => 35,  99 => 33,  93 => 31,  91 => 30,  81 => 22,  75 => 20,  73 => 19,  69 => 17,  63 => 15,  61 => 14,  57 => 12,  51 => 10,  49 => 9,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Header/header.twig' %}

<div class=\"container px-5 mb-5\">
    <div class=\"row text-center\">
        <div class=\"col-md-12\">
            <h3>7 days</h3>
        </div>
        <div class=\"col-md-12\">
            {% if weeklyMatTime is not empty %}
                <p>Mat time: {{ weeklyMatTime }}</p>
            {% endif %}
        </div>
        <div class=\"col-md-12\">
            {% if weeklyRoundDuration is not empty %}
                <p>Time spent rolling: {{ weeklyRoundDuration }}</p>
            {% endif %}
        </div>
        <div class=\"col-md-12\">
            {% if totalRoundsWeekly is not empty %}
                <p>Rounds rolled: {{ totalRoundsWeekly }}</p>
            {% endif %}
        </div>
    </div>

  <div class=\"row text-center\">
        <div class=\"col-md-12\">
            <h3>1 month</h3>
        </div>
        <div class=\"col-md-12\">
            {% if monthlyMatTime is not empty %}
                <p>Mat time: {{ monthlyMatTime }}</p>
            {% endif %}
        </div>
        <div class=\"col-md-12\">
            {% if monthlyRoundDuration is not empty %}
                <p>Time spent rolling: {{ monthlyRoundDuration }}</p>
            {% endif %}
        </div>
        <div class=\"col-md-12\">
            {% if totalRoundsMonthly is not empty %}
                <p>Rounds rolled: {{ totalRoundsMonthly }}</p>
            {% endif %}
        </div>
    </div>

    <div class=\"row text-center\">
        <div class=\"col-md-12\">
            <h3>6 months</h3>
        </div>
        <div class=\"col-md-12\">
            {% if biannualMatTime is not empty %}
                <p>Mat time: {{ biannualMatTime }}</p>
            {% endif %}
        </div>
        <div class=\"col-md-12\">
            {% if biannualRoundDuration is not empty %}
                <p>Time spent rolling: {{ biannualRoundDuration }}</p>
            {% endif %}
        </div>
        <div class=\"col-md-12\">
            {% if totalRoundsMonthly is not empty %}
                <p>Rounds rolled: {{ totalRoundsMonthly }}</p>
            {% endif %}
        </div>
    </div>

    <div class=\"row text-center\">
        <div class=\"col-md-12\">
        <h3>All time</h3>
        <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
            <label class=\"form-check-label\" for=\"flexCheckDefault\">
            </label>
        </div>
        </div>
        <div class=\"col-md-12\">
            {% if totalMatTime is not empty %}
                <p>Mat time: {{ totalMatTime }}</p>
            {% endif %}
        </div>
        <div class=\"col-md-12\">
            {% if totalRoundDuration is not empty %}
                <p>Time spent rolling: {{ totalRoundDuration }}</p>
            {% endif %}
        </div>
        <div class=\"col-md-12\">
            {% if totalRounds is not empty %}
                <p>Rounds rolled: {{ totalRounds }}</p>
            {% endif %}
        </div>
    </div>
</div>

// if checkbox is clicked
// send data to database table

<script>
    document.getElementById('flexCheckDefault').addEventListener('click', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/technique-db-mvc/public/stats', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.send(JSON.stringify({totalMatTime: {{ totalMatTime }}, totalRoundDuration: {{ totalRoundDuration }}, totalRounds: {{ totalRounds }} }));
    });
</script>

<?php
public function updateUserPreferences(\$userID, \$preferences)
{
    foreach (\$preferences as \$key => \$value) {
        \$sql = \"SELECT count(*) FROM user_preferences WHERE userID = :userID AND preference_key = :key\";
        \$stmt = \$this->db->prepare(\$sql);
        \$stmt->execute(['userID' => \$userID, 'key' => \$key]);
        \$exists = \$stmt->fetchColumn();

        if (\$exists) {
            // Update existing preference
            \$sql = \"UPDATE user_preferences SET preference_value = :value WHERE userID = :userID AND preference_key = :key\";
        } else {
            // Insert new preference
            \$sql = \"INSERT INTO user_preferences (userID, preference_key, preference_value) VALUES (:userID, :key, :value)\";
        }

        \$stmt = \$this->db->prepare(\$sql);
        \$stmt->execute(['userID' => \$userID, 'key' => \$key, 'value' => \$value]);
    }
}
?>

", "stats.twig", "/opt/lampp/htdocs/technique-db-mvc/resources/views/stats.twig");
    }
}
