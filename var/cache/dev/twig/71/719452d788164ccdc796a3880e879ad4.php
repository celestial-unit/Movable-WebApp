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

/* user/dashboard.html.twig */
class __TwigTemplate_3d220679058ac38cc0535f6aaf16f4bb extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "user/dashboard.html.twig", 1);
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

        yield "My Dashboard - Movable";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"app-brand demo\">
        <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <i class=\"bx bx-car fs-3 text-primary\"></i>
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Movable</span>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <li class=\"menu-item active\">
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-message-square-detail\"></i>
                <div>My Claims</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div>My Profile</div>
            </a>
        </li>
        
        <li class=\"menu-item\">
            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-world\"></i>
                <div>Visit Website</div>
            </a>
        </li>
    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
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

        // line 49
        yield "    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- User -->
            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                        <span class=\"avatar-initial rounded-circle bg-primary\">
                            ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "firstName", [], "any", false, false, false, 56)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "lastName", [], "any", false, false, false, 56)), "html", null, true);
        yield "
                        </span>
                    </div>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"#\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0 me-3\">
                                    <div class=\"avatar avatar-online\">
                                        <span class=\"avatar-initial rounded-circle bg-primary\">
                                            ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "firstName", [], "any", false, false, false, 67)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "lastName", [], "any", false, false, false, 67)), "html", null, true);
        yield "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <span class=\"fw-semibold d-block\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "fullName", [], "any", false, false, false, 72), "html", null, true);
        yield "</span>
                                    <small class=\"text-muted\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "email", [], "any", false, false, false, 73), "html", null, true);
        yield "</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li><div class=\"dropdown-divider\"></div></li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\">
                            <i class=\"bx bx-user me-2\"></i>
                            <span class=\"align-middle\">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_settings");
        yield "\">
                            <i class=\"bx bx-cog me-2\"></i>
                            <span class=\"align-middle\">Settings</span>
                        </a>
                    </li>
                    <li><div class=\"dropdown-divider\"></div></li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                            <i class=\"bx bx-power-off me-2\"></i>
                            <span class=\"align-middle\">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
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

        // line 105
        yield "<div class=\"row\">
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">Welcome back, ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "firstName", [], "any", false, false, false, 111), "html", null, true);
        yield "! 🎉</h5>
                        <p class=\"mb-4\">Here's what's happening with your claims...</p>
                        <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-primary\">Submit New Claim</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/illustrations/man-with-laptop-light.png"), "html", null, true);
        yield "\" height=\"140\" alt=\"View Profile\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-lg-4 col-md-4 order-1\">
        <div class=\"row\">
            <div class=\"col-lg-12 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between flex-sm-row flex-column gap-3\">
                            <div class=\"d-flex flex-sm-column flex-row align-items-start justify-content-between\">
                                <div class=\"card-title\">
                                    <h5 class=\"text-nowrap mb-2\">Claims Overview</h5>
                                    <span class=\"badge bg-label-warning rounded-pill\">Year ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"mt-sm-auto\">
                                    <h3 class=\"mb-0\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 137, $this->source); })()), "my_claims", [], "any", false, false, false, 137), "html", null, true);
        yield "</h3>
                                    <small class=\"text-success text-nowrap fw-semibold\">
                                        <i class=\"bx bx-check-circle\"></i> ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 139, $this->source); })()), "resolved_claims", [], "any", false, false, false, 139), "html", null, true);
        yield " Resolved
                                    </small>
                                </div>
                            </div>
                            <div id=\"profileReportChart\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Claims Status Cards -->
    <div class=\"col-12 col-md-8 col-lg-4 order-3 order-md-2\">
        <div class=\"row\">
            <div class=\"col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-warning\">
                                    <i class=\"bx bx-time\"></i>
                                </span>
                            </div>
                        </div>
                        <span class=\"d-block mb-1\">Pending Claims</span>
                        <h3 class=\"card-title text-nowrap mb-2\">";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 165, $this->source); })()), "pending_claims", [], "any", false, false, false, 165), "html", null, true);
        yield "</h3>
                        <small class=\"text-muted\">Awaiting Response</small>
                    </div>
                </div>
            </div>
            <div class=\"col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-success\">
                                    <i class=\"bx bx-check-circle\"></i>
                                </span>
                            </div>
                        </div>
                        <span class=\"d-block mb-1\">Resolved Claims</span>
                        <h3 class=\"card-title text-nowrap mb-2\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 181, $this->source); })()), "resolved_claims", [], "any", false, false, false, 181), "html", null, true);
        yield "</h3>
                        <small class=\"text-muted\">Successfully Completed</small>
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

    // line 191
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

        // line 192
        yield "    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
        <div class=\"mb-2 mb-md-0\">
            © ";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Movable, All rights reserved.
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 199
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

        // line 200
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize charts and any other dashboard-specific JavaScript
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
        return "user/dashboard.html.twig";
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
        return array (  447 => 200,  434 => 199,  419 => 194,  415 => 192,  402 => 191,  382 => 181,  363 => 165,  334 => 139,  329 => 137,  323 => 134,  304 => 118,  296 => 113,  291 => 111,  283 => 105,  270 => 104,  249 => 93,  239 => 86,  230 => 80,  220 => 73,  216 => 72,  207 => 67,  192 => 56,  183 => 49,  170 => 48,  152 => 40,  142 => 33,  132 => 26,  122 => 19,  107 => 7,  104 => 6,  91 => 5,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base1.html.twig\" %}

{% block title %}My Dashboard - Movable{% endblock %}

{% block sidebar %}
    <div class=\"app-brand demo\">
        <a href=\"{{ path('app_front_home') }}\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <i class=\"bx bx-car fs-3 text-primary\"></i>
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Movable</span>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <li class=\"menu-item active\">
            <a href=\"{{ path('app_dashboard') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"{{ path('app_reclamation_index') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-message-square-detail\"></i>
                <div>My Claims</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"{{ path('app_user_profile') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div>My Profile</div>
            </a>
        </li>
        
        <li class=\"menu-item\">
            <a href=\"{{ path('app_front_home') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-world\"></i>
                <div>Visit Website</div>
            </a>
        </li>
    </ul>
{% endblock %}

{% block navbar %}
    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- User -->
            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                        <span class=\"avatar-initial rounded-circle bg-primary\">
                            {{ app.user.firstName|first }}{{ app.user.lastName|first }}
                        </span>
                    </div>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"#\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0 me-3\">
                                    <div class=\"avatar avatar-online\">
                                        <span class=\"avatar-initial rounded-circle bg-primary\">
                                            {{ app.user.firstName|first }}{{ app.user.lastName|first }}
                                        </span>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <span class=\"fw-semibold d-block\">{{ app.user.fullName }}</span>
                                    <small class=\"text-muted\">{{ app.user.email }}</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li><div class=\"dropdown-divider\"></div></li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_user_profile') }}\">
                            <i class=\"bx bx-user me-2\"></i>
                            <span class=\"align-middle\">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_user_settings') }}\">
                            <i class=\"bx bx-cog me-2\"></i>
                            <span class=\"align-middle\">Settings</span>
                        </a>
                    </li>
                    <li><div class=\"dropdown-divider\"></div></li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                            <i class=\"bx bx-power-off me-2\"></i>
                            <span class=\"align-middle\">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">Welcome back, {{ app.user.firstName }}! 🎉</h5>
                        <p class=\"mb-4\">Here's what's happening with your claims...</p>
                        <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary\">Submit New Claim</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img src=\"{{ asset('img/illustrations/man-with-laptop-light.png') }}\" height=\"140\" alt=\"View Profile\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-lg-4 col-md-4 order-1\">
        <div class=\"row\">
            <div class=\"col-lg-12 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between flex-sm-row flex-column gap-3\">
                            <div class=\"d-flex flex-sm-column flex-row align-items-start justify-content-between\">
                                <div class=\"card-title\">
                                    <h5 class=\"text-nowrap mb-2\">Claims Overview</h5>
                                    <span class=\"badge bg-label-warning rounded-pill\">Year {{ \"now\"|date(\"Y\") }}</span>
                                </div>
                                <div class=\"mt-sm-auto\">
                                    <h3 class=\"mb-0\">{{ stats.my_claims }}</h3>
                                    <small class=\"text-success text-nowrap fw-semibold\">
                                        <i class=\"bx bx-check-circle\"></i> {{ stats.resolved_claims }} Resolved
                                    </small>
                                </div>
                            </div>
                            <div id=\"profileReportChart\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Claims Status Cards -->
    <div class=\"col-12 col-md-8 col-lg-4 order-3 order-md-2\">
        <div class=\"row\">
            <div class=\"col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-warning\">
                                    <i class=\"bx bx-time\"></i>
                                </span>
                            </div>
                        </div>
                        <span class=\"d-block mb-1\">Pending Claims</span>
                        <h3 class=\"card-title text-nowrap mb-2\">{{ stats.pending_claims }}</h3>
                        <small class=\"text-muted\">Awaiting Response</small>
                    </div>
                </div>
            </div>
            <div class=\"col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-success\">
                                    <i class=\"bx bx-check-circle\"></i>
                                </span>
                            </div>
                        </div>
                        <span class=\"d-block mb-1\">Resolved Claims</span>
                        <h3 class=\"card-title text-nowrap mb-2\">{{ stats.resolved_claims }}</h3>
                        <small class=\"text-muted\">Successfully Completed</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block footer %}
    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
        <div class=\"mb-2 mb-md-0\">
            © {{ \"now\"|date(\"Y\") }} Movable, All rights reserved.
        </div>
    </div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize charts and any other dashboard-specific JavaScript
});
</script>
{% endblock %}

", "user/dashboard.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\user\\dashboard.html.twig");
    }
}
