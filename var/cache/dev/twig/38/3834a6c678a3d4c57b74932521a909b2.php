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
use Twig\TemplateWrapper;

/* agent/statisticsAgent.html.twig */
class __TwigTemplate_20d2e4c2f46cf2992c33ce2723a5b4be extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/layouts/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/statisticsAgent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/statisticsAgent.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "agent/statisticsAgent.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Agent Statistics";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container py-5\">
    <h3 class=\"text-center mb-4\">Sentiment Statistics</h3>

    <!-- Raw Data Stats -->
    <div class=\"text-center mb-4\">
        <p><strong>Happy Clients:</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sentiment_statistics"]) || array_key_exists("sentiment_statistics", $context) ? $context["sentiment_statistics"] : (function () { throw new RuntimeError('Variable "sentiment_statistics" does not exist.', 11, $this->source); })()), "happy_count", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
        <p><strong>Neutral Clients:</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sentiment_statistics"]) || array_key_exists("sentiment_statistics", $context) ? $context["sentiment_statistics"] : (function () { throw new RuntimeError('Variable "sentiment_statistics" does not exist.', 12, $this->source); })()), "neutral_count", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
        <p><strong>Angry Clients:</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sentiment_statistics"]) || array_key_exists("sentiment_statistics", $context) ? $context["sentiment_statistics"] : (function () { throw new RuntimeError('Variable "sentiment_statistics" does not exist.', 13, $this->source); })()), "angry_count", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
        <p><strong>Total Ratings:</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sentiment_statistics"]) || array_key_exists("sentiment_statistics", $context) ? $context["sentiment_statistics"] : (function () { throw new RuntimeError('Variable "sentiment_statistics" does not exist.', 14, $this->source); })()), "total_ratings", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
    </div>

    <!-- Chart Container with Custom Size -->
    <div class=\"d-flex justify-content-center\">
        <div style=\"width: 300px; height: 300px;\">
            <canvas id=\"sentimentChart\"></canvas>
        </div>
    </div>
</div>

<!-- Chart.js Library -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<!-- Chart Setup Script -->
<script>
    const ctx = document.getElementById('sentimentChart').getContext('2d');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Happy', 'Neutral', 'Angry'],
            datasets: [{
                data: [
                    ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sentiment_statistics"]) || array_key_exists("sentiment_statistics", $context) ? $context["sentiment_statistics"] : (function () { throw new RuntimeError('Variable "sentiment_statistics" does not exist.', 38, $this->source); })()), "happy_count", [], "any", false, false, false, 38), "html", null, true);
        yield ",
                    ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sentiment_statistics"]) || array_key_exists("sentiment_statistics", $context) ? $context["sentiment_statistics"] : (function () { throw new RuntimeError('Variable "sentiment_statistics" does not exist.', 39, $this->source); })()), "neutral_count", [], "any", false, false, false, 39), "html", null, true);
        yield ",
                    ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sentiment_statistics"]) || array_key_exists("sentiment_statistics", $context) ? $context["sentiment_statistics"] : (function () { throw new RuntimeError('Variable "sentiment_statistics" does not exist.', 40, $this->source); })()), "angry_count", [], "any", false, false, false, 40), "html", null, true);
        yield "
                ],
                backgroundColor: [
                    '#4CAF50', // Green
                    '#FFC107', // Yellow
                    '#F44336'  // Red
                ],
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let total = ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sentiment_statistics"]) || array_key_exists("sentiment_statistics", $context) ? $context["sentiment_statistics"] : (function () { throw new RuntimeError('Variable "sentiment_statistics" does not exist.', 61, $this->source); })()), "total_ratings", [], "any", false, false, false, 61), "html", null, true);
        yield ";
                            let value = context.parsed;
                            let percentage = total ? (value / total * 100).toFixed(1) : 0;
                            return `\${context.label}: \${value} (\${percentage}%)`;
                        }
                    }
                }
            }
        }
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "agent/statisticsAgent.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  178 => 61,  154 => 40,  150 => 39,  146 => 38,  119 => 14,  115 => 13,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block title %}Agent Statistics{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <h3 class=\"text-center mb-4\">Sentiment Statistics</h3>

    <!-- Raw Data Stats -->
    <div class=\"text-center mb-4\">
        <p><strong>Happy Clients:</strong> {{ sentiment_statistics.happy_count }}</p>
        <p><strong>Neutral Clients:</strong> {{ sentiment_statistics.neutral_count }}</p>
        <p><strong>Angry Clients:</strong> {{ sentiment_statistics.angry_count }}</p>
        <p><strong>Total Ratings:</strong> {{ sentiment_statistics.total_ratings }}</p>
    </div>

    <!-- Chart Container with Custom Size -->
    <div class=\"d-flex justify-content-center\">
        <div style=\"width: 300px; height: 300px;\">
            <canvas id=\"sentimentChart\"></canvas>
        </div>
    </div>
</div>

<!-- Chart.js Library -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<!-- Chart Setup Script -->
<script>
    const ctx = document.getElementById('sentimentChart').getContext('2d');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Happy', 'Neutral', 'Angry'],
            datasets: [{
                data: [
                    {{ sentiment_statistics.happy_count }},
                    {{ sentiment_statistics.neutral_count }},
                    {{ sentiment_statistics.angry_count }}
                ],
                backgroundColor: [
                    '#4CAF50', // Green
                    '#FFC107', // Yellow
                    '#F44336'  // Red
                ],
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let total = {{ sentiment_statistics.total_ratings }};
                            let value = context.parsed;
                            let percentage = total ? (value / total * 100).toFixed(1) : 0;
                            return `\${context.label}: \${value} (\${percentage}%)`;
                        }
                    }
                }
            }
        }
    });
</script>
{% endblock %}



", "agent/statisticsAgent.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\agent\\statisticsAgent.html.twig");
    }
}
