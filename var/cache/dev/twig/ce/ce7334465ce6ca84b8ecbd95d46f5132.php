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

/* admin/dashboard.html.twig */
class __TwigTemplate_1afdd0705882d265bd65cf7e1308b23e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/dashboard.html.twig", 1);
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

        yield "Admin Dashboard - Movable";
        
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
        yield "<div class=\"row\">
    <!-- User Statistics -->
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"mb-4\">
                                <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-calendar\"></i> Manage Reservations
                                </a>
                            </div>
                            <div class=\"row\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Total Users</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 20, $this->source); })()), "users", [], "any", false, false, false, 20), "total", [], "any", false, false, false, 20), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-primary rounded p-2\">
                            <i class=\"bx bx-user-circle bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Administrators</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 40, $this->source); })()), "users", [], "any", false, false, false, 40), "admin", [], "any", false, false, false, 40), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-success rounded p-2\">
                            <i class=\"bx bx-shield-quarter bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Drivers</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 60, $this->source); })()), "users", [], "any", false, false, false, 60), "driver", [], "any", false, false, false, 60), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-info rounded p-2\">
                            <i class=\"bx bx-car bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Banned Users</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 80, $this->source); })()), "users", [], "any", false, false, false, 80), "banned", [], "any", false, false, false, 80), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-danger rounded p-2\">
                            <i class=\"bx bx-block bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Claims Statistics -->
    <div class=\"col-lg-8 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"card-title mb-0\">Claims Overview</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-6 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"badge rounded-pill bg-label-primary me-3 p-2\">
                                <i class=\"bx bx-message-square-detail\"></i>
                            </div>
                            <div class=\"card-info\">
                                <h5 class=\"mb-0\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 107, $this->source); })()), "claims", [], "any", false, false, false, 107), "total", [], "any", false, false, false, 107), "html", null, true);
        yield "</h5>
                                <small>Total Claims</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-6 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"badge rounded-pill bg-label-warning me-3 p-2\">
                                <i class=\"bx bx-time\"></i>
                            </div>
                            <div class=\"card-info\">
                                <h5 class=\"mb-0\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 118, $this->source); })()), "claims", [], "any", false, false, false, 118), "pending", [], "any", false, false, false, 118), "html", null, true);
        yield "</h5>
                                <small>Pending</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-6 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"badge rounded-pill bg-label-success me-3 p-2\">
                                <i class=\"bx bx-check-circle\"></i>
                            </div>
                            <div class=\"card-info\">
                                <h5 class=\"mb-0\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 129, $this->source); })()), "claims", [], "any", false, false, false, 129), "resolved", [], "any", false, false, false, 129), "html", null, true);
        yield "</h5>
                                <small>Resolved</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-6 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"badge rounded-pill bg-label-danger me-3 p-2\">
                                <i class=\"bx bx-x-circle\"></i>
                            </div>
                            <div class=\"card-info\">
                                <h5 class=\"mb-0\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 140, $this->source); })()), "claims", [], "any", false, false, false, 140), "rejected", [], "any", false, false, false, 140), "html", null, true);
        yield "</h5>
                                <small>Rejected</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class=\"col-lg-4 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"card-title mb-0\">Quick Actions</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row g-3\">
                    <div class=\"col-sm-6\">
                        <div class=\"d-grid\">
                            <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-outline-primary\">
                                <i class=\"bx bx-user-circle mb-1 d-block fs-4\"></i>
                                Manage Users
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"d-grid\">
                            <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_dashboard");
        yield "\" class=\"btn btn-outline-primary\">
                                <i class=\"bx bx-message-square-detail mb-1 d-block fs-4\"></i>
                                View Claims
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"d-grid\">
                            <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_banned_users");
        yield "\" class=\"btn btn-outline-primary\">
                                <i class=\"bx bx-block mb-1 d-block fs-4\"></i>
                                Banned Users
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"d-grid\">
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"d-grid\">
                            <a href=\"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_index");
        yield "\" class=\"btn btn-outline-primary\">
                                <i class=\"bx bx-calendar mb-1 d-block fs-4\"></i>
                                Manage Events
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"d-grid\">
                            <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"btn btn-outline-primary\">
                                <i class=\"bx bx-world mb-1 d-block fs-4\"></i>
                                View Website
                            </a>
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
        return "admin/dashboard.html.twig";
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
        return array (  331 => 196,  320 => 188,  305 => 176,  294 => 168,  283 => 160,  260 => 140,  246 => 129,  232 => 118,  218 => 107,  188 => 80,  165 => 60,  142 => 40,  119 => 20,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block title %}Admin Dashboard - Movable{% endblock %}

{% block body %}
<div class=\"row\">
    <!-- User Statistics -->
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"mb-4\">
                                <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-calendar\"></i> Manage Reservations
                                </a>
                            </div>
                            <div class=\"row\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Total Users</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">{{ stats.users.total }}</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-primary rounded p-2\">
                            <i class=\"bx bx-user-circle bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Administrators</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">{{ stats.users.admin }}</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-success rounded p-2\">
                            <i class=\"bx bx-shield-quarter bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Drivers</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">{{ stats.users.driver }}</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-info rounded p-2\">
                            <i class=\"bx bx-car bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Banned Users</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">{{ stats.users.banned }}</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-danger rounded p-2\">
                            <i class=\"bx bx-block bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Claims Statistics -->
    <div class=\"col-lg-8 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"card-title mb-0\">Claims Overview</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-6 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"badge rounded-pill bg-label-primary me-3 p-2\">
                                <i class=\"bx bx-message-square-detail\"></i>
                            </div>
                            <div class=\"card-info\">
                                <h5 class=\"mb-0\">{{ stats.claims.total }}</h5>
                                <small>Total Claims</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-6 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"badge rounded-pill bg-label-warning me-3 p-2\">
                                <i class=\"bx bx-time\"></i>
                            </div>
                            <div class=\"card-info\">
                                <h5 class=\"mb-0\">{{ stats.claims.pending }}</h5>
                                <small>Pending</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-6 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"badge rounded-pill bg-label-success me-3 p-2\">
                                <i class=\"bx bx-check-circle\"></i>
                            </div>
                            <div class=\"card-info\">
                                <h5 class=\"mb-0\">{{ stats.claims.resolved }}</h5>
                                <small>Resolved</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-6 mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"badge rounded-pill bg-label-danger me-3 p-2\">
                                <i class=\"bx bx-x-circle\"></i>
                            </div>
                            <div class=\"card-info\">
                                <h5 class=\"mb-0\">{{ stats.claims.rejected }}</h5>
                                <small>Rejected</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class=\"col-lg-4 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"card-title mb-0\">Quick Actions</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row g-3\">
                    <div class=\"col-sm-6\">
                        <div class=\"d-grid\">
                            <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-outline-primary\">
                                <i class=\"bx bx-user-circle mb-1 d-block fs-4\"></i>
                                Manage Users
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"d-grid\">
                            <a href=\"{{ path('app_reclamation_dashboard') }}\" class=\"btn btn-outline-primary\">
                                <i class=\"bx bx-message-square-detail mb-1 d-block fs-4\"></i>
                                View Claims
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"d-grid\">
                            <a href=\"{{ path('app_admin_banned_users') }}\" class=\"btn btn-outline-primary\">
                                <i class=\"bx bx-block mb-1 d-block fs-4\"></i>
                                Banned Users
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"d-grid\">
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"d-grid\">
                            <a href=\"{{ path('app_eventback_index') }}\" class=\"btn btn-outline-primary\">
                                <i class=\"bx bx-calendar mb-1 d-block fs-4\"></i>
                                Manage Events
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"d-grid\">
                            <a href=\"{{ path('app_front_home') }}\" class=\"btn btn-outline-primary\">
                                <i class=\"bx bx-world mb-1 d-block fs-4\"></i>
                                View Website
                            </a>
                        </div>
                    </div>
</div>
{% endblock %}
", "admin/dashboard.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\dashboard.html.twig");
    }
}
