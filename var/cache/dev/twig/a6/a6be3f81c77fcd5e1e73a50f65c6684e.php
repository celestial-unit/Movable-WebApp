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

/* event_registration/back/index.html.twig */
class __TwigTemplate_95d93ed7b4a946b6152c489e0bfe4d8e extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'navbar' => [$this, 'block_navbar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/back/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "event_registration/back/index.html.twig", 1);
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

        yield "Event Registrations Management";
        
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
        yield "    <div class=\"container mt-4\">
        <h1>Event Registrations Management</h1>
        
        <div class=\"mb-3\">
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"btn btn-secondary\">Back to Dashboard</a>
        </div>
        
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["success"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "            <div class=\"alert alert-success\">
                ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "        
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["error"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "        
        <div class=\"card\">
            <div class=\"card-header\">
                <h5>All Registrations</h5>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Event</th>
                            <th>User</th>
                            <th>Registration Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["event_registrations"]) || array_key_exists("event_registrations", $context) ? $context["event_registrations"] : (function () { throw new RuntimeError('Variable "event_registrations" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["registration"]) {
            // line 43
            yield "                            <tr>
                                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                                
                                <td>
                                    ";
            // line 47
            if (CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "user", [], "any", false, false, false, 47)) {
                // line 48
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "user", [], "any", false, false, false, 48), "email", [], "any", false, false, false, 48), "html", null, true);
                yield "
                                    ";
            } else {
                // line 50
                yield "                                        <span class=\"text-muted\">Manual registration</span>
                                    ";
            }
            // line 52
            yield "                                </td>
                                <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "registrationDate", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                <td>
                                    <span class=\"badge ";
            // line 55
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "status", [], "any", false, false, false, 55) == "Confirmed")) {
                yield "bg-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "status", [], "any", false, false, false, 55) == "Pending")) {
                yield "bg-warning";
            } else {
                yield "bg-danger";
            }
            yield "\">
                                        ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "status", [], "any", false, false, false, 56), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <div class=\"btn-group\">
                                        <a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_registration_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">View</a>
                                        <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_registration_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Edit</a>
                                        <a href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_registration_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["registration"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-secondary\" target=\"_blank\">PDF</a>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center\">No registrations found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['registration'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        // line 80
        yield "    <div class=\"app-brand demo\">
        <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <i class=\"bx bx-car fs-3 text-primary\"></i>
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Movable Admin</span>
        </a>

        <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
            <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <!-- Dashboard -->
        <li class=\"menu-item ";
        // line 97
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "get", ["_route"], "method", false, false, false, 97) == "app_dashboard")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"menu-link front-website-link\">
                <i class=\"menu-icon tf-icons bx bx-world\"></i>
                <div>Visit Website</div>
            </a>
        </li>
        
        <li class=\"menu-item ";
        // line 111
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "request", [], "any", false, false, false, 111), "get", ["_route"], "method", false, false, false, 111) == "app_admin_users")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user-circle\"></i>
                <div>Users</div>
            </a>
        </li>

        <!-- Claims Management -->
        <li class=\"menu-item ";
        // line 119
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "request", [], "any", false, false, false, 119), "get", ["_route"], "method", false, false, false, 119) == "app_reclamation_dashboard")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_dashboard");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-message-square-detail\"></i>
                <div>Claims</div>
            </a>
        </li>

        <!-- Banned Users -->
        <li class=\"menu-item ";
        // line 127
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, false, 127), "get", ["_route"], "method", false, false, false, 127) == "app_admin_banned_users")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_banned_users");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-block\"></i>
                <div>Banned Users</div>
            </a>
        </li>

        <!-- Events Management -->
        <li class=\"menu-item ";
        // line 135
        yield (((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "request", [], "any", false, false, false, 135), "get", ["_route"], "method", false, false, false, 135)) && is_string($__internal_compile_1 = "app_event") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar\"></i>
                <div>Events</div>
            </a>
        </li>
         

        <!-- Reservation Management -->
        <li class=\"menu-item ";
        // line 144
        yield (((is_string($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "request", [], "any", false, false, false, 144), "get", ["route"], "method", false, false, false, 144)) && is_string($__internal_compile_3 = "admin_waitlist") && str_starts_with($__internal_compile_2, $__internal_compile_3))) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar-check\"></i>
                <div>Reservations</div>
            </a>
        </li>

        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">System</span>
        </li>
    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 157
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

        // line 158
        yield "    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <div class=\"navbar-nav align-items-center\">
            <div class=\"nav-item d-flex align-items-center\">
                <i class=\"bx bx-search fs-4 lh-0\"></i>
                <input type=\"text\" class=\"form-control border-0 shadow-none ps-1\" placeholder=\"Search...\" aria-label=\"Search...\">
            </div>
        </div>

        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- Admin User Dropdown -->
            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                        <span class=\"avatar-initial rounded-circle bg-primary\">
                            ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "user", [], "any", false, false, false, 172), "firstName", [], "any", false, false, false, 172)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "user", [], "any", false, false, false, 172), "lastName", [], "any", false, false, false, 172)), "html", null, true);
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
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 183, $this->source); })()), "user", [], "any", false, false, false, 183), "firstName", [], "any", false, false, false, 183)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 183, $this->source); })()), "user", [], "any", false, false, false, 183), "lastName", [], "any", false, false, false, 183)), "html", null, true);
        yield "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <span class=\"fw-semibold d-block\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188), "fullName", [], "any", false, false, false, 188), "html", null, true);
        yield "</span>
                                    <small class=\"text-muted\">Administrator</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\">
                            <i class=\"bx bx-user me-2\"></i>
                            <span class=\"align-middle\">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 204
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_settings");
        yield "\">
                            <i class=\"bx bx-cog me-2\"></i>
                            <span class=\"align-middle\">Settings</span>
                        </a>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 213
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                            <i class=\"bx bx-power-off me-2\"></i>
                            <span class=\"align-middle\">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <!-- Visible Logout Button -->
            <li class=\"nav-item ms-3\">
                <a href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-danger d-flex align-items-center\">
                    <i class=\"bx bx-power-off me-2\"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
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
        return "event_registration/back/index.html.twig";
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
        return array (  505 => 223,  492 => 213,  480 => 204,  471 => 198,  458 => 188,  449 => 183,  434 => 172,  418 => 158,  405 => 157,  383 => 145,  379 => 144,  368 => 136,  364 => 135,  354 => 128,  350 => 127,  340 => 120,  336 => 119,  326 => 112,  322 => 111,  313 => 105,  303 => 98,  299 => 97,  280 => 81,  277 => 80,  264 => 79,  248 => 72,  239 => 68,  229 => 63,  225 => 62,  221 => 61,  213 => 56,  203 => 55,  198 => 53,  195 => 52,  191 => 50,  185 => 48,  183 => 47,  177 => 44,  174 => 43,  169 => 42,  149 => 24,  140 => 21,  137 => 20,  133 => 19,  130 => 18,  121 => 15,  118 => 14,  114 => 13,  108 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Event Registrations Management{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Event Registrations Management</h1>
        
        <div class=\"mb-3\">
            <a href=\"{{ path('app_admin_dashboard') }}\" class=\"btn btn-secondary\">Back to Dashboard</a>
        </div>
        
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
        
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}
        
        <div class=\"card\">
            <div class=\"card-header\">
                <h5>All Registrations</h5>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Event</th>
                            <th>User</th>
                            <th>Registration Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for registration in event_registrations %}
                            <tr>
                                <td>{{ registration.id }}</td>
                                
                                <td>
                                    {% if registration.user %}
                                        {{ registration.user.email }}
                                    {% else %}
                                        <span class=\"text-muted\">Manual registration</span>
                                    {% endif %}
                                </td>
                                <td>{{ registration.registrationDate }}</td>
                                <td>
                                    <span class=\"badge {% if registration.status == 'Confirmed' %}bg-success{% elseif registration.status == 'Pending' %}bg-warning{% else %}bg-danger{% endif %}\">
                                        {{ registration.status }}
                                    </span>
                                </td>
                                <td>
                                    <div class=\"btn-group\">
                                        <a href=\"{{ path('app_event_registration_show', {'id': registration.id}) }}\" class=\"btn btn-sm btn-info\">View</a>
                                        <a href=\"{{ path('app_event_registration_edit', {'id': registration.id}) }}\" class=\"btn btn-sm btn-primary\">Edit</a>
                                        <a href=\"{{ path('app_event_registration_pdf', {'id': registration.id}) }}\" class=\"btn btn-sm btn-secondary\" target=\"_blank\">PDF</a>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center\">No registrations found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}

{% block sidebar %}
    <div class=\"app-brand demo\">
        <a href=\"{{ path('app_dashboard') }}\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <i class=\"bx bx-car fs-3 text-primary\"></i>
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Movable Admin</span>
        </a>

        <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
            <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <!-- Dashboard -->
        <li class=\"menu-item {{ app.request.get('_route') == 'app_dashboard' ? 'active' : '' }}\">
            <a href=\"{{ path('app_dashboard') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"{{ path('app_front_home') }}\" class=\"menu-link front-website-link\">
                <i class=\"menu-icon tf-icons bx bx-world\"></i>
                <div>Visit Website</div>
            </a>
        </li>
        
        <li class=\"menu-item {{ app.request.get('_route') == 'app_admin_users' ? 'active' : '' }}\">
            <a href=\"{{ path('app_admin_users') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user-circle\"></i>
                <div>Users</div>
            </a>
        </li>

        <!-- Claims Management -->
        <li class=\"menu-item {{ app.request.get('_route') == 'app_reclamation_dashboard' ? 'active' : '' }}\">
            <a href=\"{{ path('app_reclamation_dashboard') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-message-square-detail\"></i>
                <div>Claims</div>
            </a>
        </li>

        <!-- Banned Users -->
        <li class=\"menu-item {{ app.request.get('_route') == 'app_admin_banned_users' ? 'active' : '' }}\">
            <a href=\"{{ path('app_admin_banned_users') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-block\"></i>
                <div>Banned Users</div>
            </a>
        </li>

        <!-- Events Management -->
        <li class=\"menu-item {{ app.request.get('_route') starts with 'app_event' ? 'active' : '' }}\">
            <a href=\"{{ path('app_eventback_index') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar\"></i>
                <div>Events</div>
            </a>
        </li>
         

        <!-- Reservation Management -->
        <li class=\"menu-item {{ app.request.get('route') starts with 'admin_waitlist' ? 'active' : '' }}\">
            <a href=\"{{ path('admin_waitlist_index') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar-check\"></i>
                <div>Reservations</div>
            </a>
        </li>

        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">System</span>
        </li>
    </ul>
{% endblock %}

{% block navbar %}
    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <div class=\"navbar-nav align-items-center\">
            <div class=\"nav-item d-flex align-items-center\">
                <i class=\"bx bx-search fs-4 lh-0\"></i>
                <input type=\"text\" class=\"form-control border-0 shadow-none ps-1\" placeholder=\"Search...\" aria-label=\"Search...\">
            </div>
        </div>

        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- Admin User Dropdown -->
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
                                    <small class=\"text-muted\">Administrator</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
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
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                            <i class=\"bx bx-power-off me-2\"></i>
                            <span class=\"align-middle\">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <!-- Visible Logout Button -->
            <li class=\"nav-item ms-3\">
                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger d-flex align-items-center\">
                    <i class=\"bx bx-power-off me-2\"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
{% endblock %}", "event_registration/back/index.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event_registration\\back\\index.html.twig");
    }
}
