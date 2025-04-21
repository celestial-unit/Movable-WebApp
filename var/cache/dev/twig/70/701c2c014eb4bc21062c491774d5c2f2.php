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

/* event/statistics.html.twig */
class __TwigTemplate_73387a7a82ef274e04edca66bd2440f4 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'sidebar' => [$this, 'block_sidebar'],
            'navbar' => [$this, 'block_navbar'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "event/statistics.html.twig", 1);
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

        yield "Event Statistics";
        
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
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <!-- Header -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h4 class=\"fw-bold py-3 mb-0\">
            <span class=\"text-muted fw-light\">Events /</span> Statistics
        </h4>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_index");
        yield "\" class=\"btn btn-primary\">
            <i class=\"bx bx-arrow-back me-1\"></i> Back to Events
        </a>
    </div>

    <!-- Stats Cards Row -->
    <div class=\"row mb-4\">
        <!-- Upcoming Events Card -->
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"avatar flex-shrink-0 p-3 rounded bg-primary\">
                            <i class=\"bx bx-calendar-event text-white fs-3\"></i>
                        </div>
                        <div class=\"ml-3 ms-3\">
                            <h5 class=\"mb-1\">Upcoming Events</h5>
                            <span class=\"badge bg-label-primary rounded-pill\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Registration Status Cards -->
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["registrationsByStatus"]) || array_key_exists("registrationsByStatus", $context) ? $context["registrationsByStatus"] : (function () { throw new RuntimeError('Variable "registrationsByStatus" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["regStatus"]) {
            // line 38
            yield "        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"avatar flex-shrink-0 p-3 rounded 
                            ";
            // line 43
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["regStatus"], "status", [], "any", false, false, false, 43) == "Pending")) {
                yield "bg-warning
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 44
$context["regStatus"], "status", [], "any", false, false, false, 44) == "Confirmed")) {
                yield "bg-success
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 45
$context["regStatus"], "status", [], "any", false, false, false, 45) == "Cancelled")) {
                yield "bg-danger
                            ";
            } else {
                // line 46
                yield "bg-info";
            }
            yield "\">
                            <i class=\"bx bx-user-check text-white fs-3\"></i>
                        </div>
                        <div class=\"ml-3 ms-3\">
                            <h5 class=\"mb-1\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["regStatus"], "status", [], "any", false, false, false, 50), "html", null, true);
            yield " Registrations</h5>
                            <span class=\"badge bg-label-";
            // line 51
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["regStatus"], "status", [], "any", false, false, false, 51) == "Pending")) {
                yield "warning
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 52
$context["regStatus"], "status", [], "any", false, false, false, 52) == "Confirmed")) {
                yield "success
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 53
$context["regStatus"], "status", [], "any", false, false, false, 53) == "Cancelled")) {
                yield "danger
                                ";
            } else {
                // line 54
                yield "info";
            }
            yield " rounded-pill\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["regStatus"], "count", [], "any", false, false, false, 54), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['regStatus'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "    </div>

    <!-- Chart Section -->
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Event Distribution by Type</h5>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"eventChart\" height=\"300\"></canvas>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Event Types Breakdown</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-borderless\">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventsByType"]) || array_key_exists("eventsByType", $context) ? $context["eventsByType"] : (function () { throw new RuntimeError('Variable "eventsByType" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eventType"]) {
            // line 92
            yield "                                <tr>
                                    <td>
                                        <span class=\"badge bg-primary\">Type ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["eventType"], "type", [], "any", false, false, false, 94), "html", null, true);
            yield "</span>
                                    </td>
                                    <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["eventType"], "count", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['eventType'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 110
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .bg-label-primary {
        background-color: #e7e7ff !important;
        color: #696cff !important;
    }
    
    .bg-label-success {
        background-color: #e8fadf !important;
        color: #71dd37 !important;
    }
    
    .bg-label-warning {
        background-color: #fff5e0 !important;
        color: #ffab00 !important;
    }
    
    .bg-label-danger {
        background-color: #ffe5e5 !important;
        color: #ff3e1d !important;
    }
    
    .bg-label-info {
        background-color: #d7f5fc !important;
        color: #03c3ec !important;
    }
    
    .avatar {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.375rem;
        width: 38px;
        height: 38px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 148
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 149
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('eventChart').getContext('2d');
    var eventChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ";
        // line 157
        yield (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 157, $this->source); })());
        yield ",
            datasets: [{
                label: 'Event Count by Type',
                data: ";
        // line 160
        yield (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 160, $this->source); })());
        yield ",
                backgroundColor: [
                    'rgba(105, 108, 255, 0.8)',
                    'rgba(3, 195, 236, 0.8)',
                    'rgba(113, 221, 55, 0.8)',
                    'rgba(255, 171, 0, 0.8)',
                    'rgba(255, 62, 29, 0.8)'
                ],
                borderColor: [
                    'rgba(105, 108, 255, 1)',
                    'rgba(3, 195, 236, 1)',
                    'rgba(113, 221, 55, 1)',
                    'rgba(255, 171, 0, 1)',
                    'rgba(255, 62, 29, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
    
    // Optional: Add a pie chart for event type distribution
    if (document.getElementById('eventPieChart')) {
        var ctxPie = document.getElementById('eventPieChart').getContext('2d');
        var eventPieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: ";
        // line 203
        yield (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 203, $this->source); })());
        yield ",
                datasets: [{
                    data: ";
        // line 205
        yield (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 205, $this->source); })());
        yield ",
                    backgroundColor: [
                        'rgba(105, 108, 255, 0.8)',
                        'rgba(3, 195, 236, 0.8)',
                        'rgba(113, 221, 55, 0.8)',
                        'rgba(255, 171, 0, 0.8)',
                        'rgba(255, 62, 29, 0.8)'
                    ],
                    borderColor: [
                        'rgba(105, 108, 255, 1)',
                        'rgba(3, 195, 236, 1)',
                        'rgba(113, 221, 55, 1)',
                        'rgba(255, 171, 0, 1)',
                        'rgba(255, 62, 29, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right'
                    }
                }
            }
        });
    }
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 239
        yield "    ";
        yield from $this->yieldParentBlock("sidebar", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 242
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 243
        yield "    ";
        yield from $this->yieldParentBlock("navbar", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 246
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 247
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
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
        return "event/statistics.html.twig";
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
        return array (  534 => 247,  521 => 246,  507 => 243,  494 => 242,  480 => 239,  467 => 238,  424 => 205,  419 => 203,  373 => 160,  367 => 157,  356 => 149,  343 => 148,  295 => 110,  282 => 109,  263 => 99,  254 => 96,  249 => 94,  245 => 92,  241 => 91,  209 => 61,  193 => 54,  188 => 53,  184 => 52,  180 => 51,  176 => 50,  168 => 46,  163 => 45,  159 => 44,  155 => 43,  148 => 38,  144 => 37,  133 => 29,  113 => 12,  105 => 6,  92 => 5,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Event Statistics{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <!-- Header -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h4 class=\"fw-bold py-3 mb-0\">
            <span class=\"text-muted fw-light\">Events /</span> Statistics
        </h4>
        <a href=\"{{ path('app_eventback_index') }}\" class=\"btn btn-primary\">
            <i class=\"bx bx-arrow-back me-1\"></i> Back to Events
        </a>
    </div>

    <!-- Stats Cards Row -->
    <div class=\"row mb-4\">
        <!-- Upcoming Events Card -->
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"avatar flex-shrink-0 p-3 rounded bg-primary\">
                            <i class=\"bx bx-calendar-event text-white fs-3\"></i>
                        </div>
                        <div class=\"ml-3 ms-3\">
                            <h5 class=\"mb-1\">Upcoming Events</h5>
                            <span class=\"badge bg-label-primary rounded-pill\">{{ upcomingEvents }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Registration Status Cards -->
        {% for regStatus in registrationsByStatus %}
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"avatar flex-shrink-0 p-3 rounded 
                            {% if regStatus.status == 'Pending' %}bg-warning
                            {% elseif regStatus.status == 'Confirmed' %}bg-success
                            {% elseif regStatus.status == 'Cancelled' %}bg-danger
                            {% else %}bg-info{% endif %}\">
                            <i class=\"bx bx-user-check text-white fs-3\"></i>
                        </div>
                        <div class=\"ml-3 ms-3\">
                            <h5 class=\"mb-1\">{{ regStatus.status }} Registrations</h5>
                            <span class=\"badge bg-label-{% if regStatus.status == 'Pending' %}warning
                                {% elseif regStatus.status == 'Confirmed' %}success
                                {% elseif regStatus.status == 'Cancelled' %}danger
                                {% else %}info{% endif %} rounded-pill\">{{ regStatus.count }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- Chart Section -->
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Event Distribution by Type</h5>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"eventChart\" height=\"300\"></canvas>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Event Types Breakdown</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-borderless\">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for eventType in eventsByType %}
                                <tr>
                                    <td>
                                        <span class=\"badge bg-primary\">Type {{ eventType.type }}</span>
                                    </td>
                                    <td>{{ eventType.count }}</td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .bg-label-primary {
        background-color: #e7e7ff !important;
        color: #696cff !important;
    }
    
    .bg-label-success {
        background-color: #e8fadf !important;
        color: #71dd37 !important;
    }
    
    .bg-label-warning {
        background-color: #fff5e0 !important;
        color: #ffab00 !important;
    }
    
    .bg-label-danger {
        background-color: #ffe5e5 !important;
        color: #ff3e1d !important;
    }
    
    .bg-label-info {
        background-color: #d7f5fc !important;
        color: #03c3ec !important;
    }
    
    .avatar {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.375rem;
        width: 38px;
        height: 38px;
    }
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('eventChart').getContext('2d');
    var eventChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {{ labels | raw }},
            datasets: [{
                label: 'Event Count by Type',
                data: {{ values | raw }},
                backgroundColor: [
                    'rgba(105, 108, 255, 0.8)',
                    'rgba(3, 195, 236, 0.8)',
                    'rgba(113, 221, 55, 0.8)',
                    'rgba(255, 171, 0, 0.8)',
                    'rgba(255, 62, 29, 0.8)'
                ],
                borderColor: [
                    'rgba(105, 108, 255, 1)',
                    'rgba(3, 195, 236, 1)',
                    'rgba(113, 221, 55, 1)',
                    'rgba(255, 171, 0, 1)',
                    'rgba(255, 62, 29, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
    
    // Optional: Add a pie chart for event type distribution
    if (document.getElementById('eventPieChart')) {
        var ctxPie = document.getElementById('eventPieChart').getContext('2d');
        var eventPieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: {{ labels | raw }},
                datasets: [{
                    data: {{ values | raw }},
                    backgroundColor: [
                        'rgba(105, 108, 255, 0.8)',
                        'rgba(3, 195, 236, 0.8)',
                        'rgba(113, 221, 55, 0.8)',
                        'rgba(255, 171, 0, 0.8)',
                        'rgba(255, 62, 29, 0.8)'
                    ],
                    borderColor: [
                        'rgba(105, 108, 255, 1)',
                        'rgba(3, 195, 236, 1)',
                        'rgba(113, 221, 55, 1)',
                        'rgba(255, 171, 0, 1)',
                        'rgba(255, 62, 29, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right'
                    }
                }
            }
        });
    }
});
</script>
{% endblock %}

{% block sidebar %}
    {{ parent() }}
{% endblock %}

{% block navbar %}
    {{ parent() }}
{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}
", "event/statistics.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event\\statistics.html.twig");
    }
}
