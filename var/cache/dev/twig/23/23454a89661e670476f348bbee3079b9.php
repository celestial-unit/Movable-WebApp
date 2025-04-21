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

/* admin/statistics.html.twig */
class __TwigTemplate_5e7dc3bc6172727d3ed77d82465e2a43 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/statistics.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/statistics.html.twig", 1);
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

        yield "Reservation Statistics";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Bookings per day chart
            const bookingsCtx = document.getElementById('bookingsChart').getContext('2d');
            new Chart(bookingsCtx, {
                type: 'line',
                data: {
                    labels: ";
        // line 15
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["bookingsPerDay"]) || array_key_exists("bookingsPerDay", $context) ? $context["bookingsPerDay"] : (function () { throw new RuntimeError('Variable "bookingsPerDay" does not exist.', 15, $this->source); })()), function ($__b__) use ($context, $macros) { $context["b"] = $__b__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 15, $this->source); })()), "day", [], "any", false, false, false, 15); }));
        yield ",
                    datasets: [{
                        label: 'Bookings per Day',
                        data: ";
        // line 18
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["bookingsPerDay"]) || array_key_exists("bookingsPerDay", $context) ? $context["bookingsPerDay"] : (function () { throw new RuntimeError('Variable "bookingsPerDay" does not exist.', 18, $this->source); })()), function ($__b__) use ($context, $macros) { $context["b"] = $__b__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 18, $this->source); })()), "count", [], "any", false, false, false, 18); }));
        yield ",
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Popular routes chart
            const routesCtx = document.getElementById('routesChart').getContext('2d');
            new Chart(routesCtx, {
                type: 'bar',
                data: {
                    labels: ";
        // line 39
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["popularRoutes"]) || array_key_exists("popularRoutes", $context) ? $context["popularRoutes"] : (function () { throw new RuntimeError('Variable "popularRoutes" does not exist.', 39, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 39, $this->source); })()), "destination", [], "any", false, false, false, 39); }));
        yield ",
                    datasets: [{
                        label: 'Popular Routes',
                        data: ";
        // line 42
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["popularRoutes"]) || array_key_exists("popularRoutes", $context) ? $context["popularRoutes"] : (function () { throw new RuntimeError('Variable "popularRoutes" does not exist.', 42, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 42, $this->source); })()), "count", [], "any", false, false, false, 42); }));
        yield ",
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Transport distribution chart
            const transportCtx = document.getElementById('transportChart').getContext('2d');
            new Chart(transportCtx, {
                type: 'pie',
                data: {
                    labels: ";
        // line 63
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["transportDistribution"]) || array_key_exists("transportDistribution", $context) ? $context["transportDistribution"] : (function () { throw new RuntimeError('Variable "transportDistribution" does not exist.', 63, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 63, $this->source); })()), "transport", [], "any", false, false, false, 63); }));
        yield ",
                    datasets: [{
                        data: ";
        // line 65
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["transportDistribution"]) || array_key_exists("transportDistribution", $context) ? $context["transportDistribution"] : (function () { throw new RuntimeError('Variable "transportDistribution" does not exist.', 65, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 65, $this->source); })()), "count", [], "any", false, false, false, 65); }));
        yield ",
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h4 class=\"fw-bold py-3 mb-0\">
            <span class=\"text-muted fw-light\">Admin /</span> Reservation Statistics
        </h4>
        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"bx bx-arrow-back me-1\"></i> Back to Reservations
        </a>
    </div>

    <!-- Summary Cards -->
    <div class=\"row mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Total Reservations</h5>
                    <h2 class=\"mb-0\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalReservations"]) || array_key_exists("totalReservations", $context) ? $context["totalReservations"] : (function () { throw new RuntimeError('Variable "totalReservations" does not exist.', 106, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Approved</h5>
                    <h2 class=\"mb-0\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["approvedCount"]) || array_key_exists("approvedCount", $context) ? $context["approvedCount"] : (function () { throw new RuntimeError('Variable "approvedCount" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Rejected</h5>
                    <h2 class=\"mb-0\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rejectedCount"]) || array_key_exists("rejectedCount", $context) ? $context["rejectedCount"] : (function () { throw new RuntimeError('Variable "rejectedCount" does not exist.', 122, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Pending</h5>
                    <h2 class=\"mb-0\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 130, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts -->
    <div class=\"row\">
        <div class=\"col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Bookings Per Day (Last 30 Days)</h5>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"bookingsChart\" height=\"300\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Top 5 Popular Routes</h5>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"routesChart\" height=\"300\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Transport Type Distribution</h5>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"transportChart\" height=\"300\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Additional Statistics</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"card mb-3\">
                                <div class=\"card-body\">
                                    <h6 class=\"card-title\">Average Seats per Booking</h6>
                                    <h4 class=\"mb-0\">";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("averageSeats", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["averageSeats"]) || array_key_exists("averageSeats", $context) ? $context["averageSeats"] : (function () { throw new RuntimeError('Variable "averageSeats" does not exist.', 179, $this->source); })()), "N/A")) : ("N/A")), "html", null, true);
        yield "</h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card mb-3\">
                                <div class=\"card-body\">
                                    <h6 class=\"card-title\">Most Active User</h6>
                                    <h4 class=\"mb-0\">";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("mostActiveUser", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mostActiveUser"]) || array_key_exists("mostActiveUser", $context) ? $context["mostActiveUser"] : (function () { throw new RuntimeError('Variable "mostActiveUser" does not exist.', 187, $this->source); })()), "N/A")) : ("N/A")), "html", null, true);
        yield "</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"additionalStats\"></div>
                    <button class=\"btn btn-primary mt-3\" id=\"loadMoreStats\">
                        <i class=\"bx bx-plus me-1\"></i> Load More Statistics
                    </button>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/statistics.html.twig";
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
        return array (  343 => 187,  332 => 179,  280 => 130,  269 => 122,  258 => 114,  247 => 106,  233 => 95,  226 => 90,  213 => 89,  179 => 65,  174 => 63,  150 => 42,  144 => 39,  120 => 18,  114 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layouts/admin.html.twig' %}

{% block title %}Reservation Statistics{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Bookings per day chart
            const bookingsCtx = document.getElementById('bookingsChart').getContext('2d');
            new Chart(bookingsCtx, {
                type: 'line',
                data: {
                    labels: {{ bookingsPerDay|map(b => b.day)|json_encode|raw }},
                    datasets: [{
                        label: 'Bookings per Day',
                        data: {{ bookingsPerDay|map(b => b.count)|json_encode|raw }},
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Popular routes chart
            const routesCtx = document.getElementById('routesChart').getContext('2d');
            new Chart(routesCtx, {
                type: 'bar',
                data: {
                    labels: {{ popularRoutes|map(r => r.destination)|json_encode|raw }},
                    datasets: [{
                        label: 'Popular Routes',
                        data: {{ popularRoutes|map(r => r.count)|json_encode|raw }},
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Transport distribution chart
            const transportCtx = document.getElementById('transportChart').getContext('2d');
            new Chart(transportCtx, {
                type: 'pie',
                data: {
                    labels: {{ transportDistribution|map(t => t.transport)|json_encode|raw }},
                    datasets: [{
                        data: {{ transportDistribution|map(t => t.count)|json_encode|raw }},
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true
                }
            });
        });
    </script>
{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h4 class=\"fw-bold py-3 mb-0\">
            <span class=\"text-muted fw-light\">Admin /</span> Reservation Statistics
        </h4>
        <a href=\"{{ path('admin_waitlist_index') }}\" class=\"btn btn-secondary\">
            <i class=\"bx bx-arrow-back me-1\"></i> Back to Reservations
        </a>
    </div>

    <!-- Summary Cards -->
    <div class=\"row mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Total Reservations</h5>
                    <h2 class=\"mb-0\">{{ totalReservations }}</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Approved</h5>
                    <h2 class=\"mb-0\">{{ approvedCount }}</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Rejected</h5>
                    <h2 class=\"mb-0\">{{ rejectedCount }}</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Pending</h5>
                    <h2 class=\"mb-0\">{{ pendingCount }}</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts -->
    <div class=\"row\">
        <div class=\"col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Bookings Per Day (Last 30 Days)</h5>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"bookingsChart\" height=\"300\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Top 5 Popular Routes</h5>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"routesChart\" height=\"300\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Transport Type Distribution</h5>
                </div>
                <div class=\"card-body\">
                    <canvas id=\"transportChart\" height=\"300\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Additional Statistics</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"card mb-3\">
                                <div class=\"card-body\">
                                    <h6 class=\"card-title\">Average Seats per Booking</h6>
                                    <h4 class=\"mb-0\">{{ averageSeats|default('N/A') }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card mb-3\">
                                <div class=\"card-body\">
                                    <h6 class=\"card-title\">Most Active User</h6>
                                    <h4 class=\"mb-0\">{{ mostActiveUser|default('N/A') }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"additionalStats\"></div>
                    <button class=\"btn btn-primary mt-3\" id=\"loadMoreStats\">
                        <i class=\"bx bx-plus me-1\"></i> Load More Statistics
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/statistics.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\statistics.html.twig");
    }
}
