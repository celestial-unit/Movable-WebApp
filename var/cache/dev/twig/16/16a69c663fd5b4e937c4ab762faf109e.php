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

/* admin/layouts/admin.html.twig */
class __TwigTemplate_8075adc8bd842f8709cd5568fc8cbe20 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar' => [$this, 'block_sidebar'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/admin.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "admin/layouts/admin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
     <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/main.min.css\" rel=\"stylesheet\">
    <style>
        :root {
            --primary-color: #7367f0;
            --secondary-color: #82868b;
        }
        
        .layout-menu-hover .layout-menu {
            box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
        }
        
        .menu-header {
            padding: 0.625rem 1.25rem;
            margin-top: 0.75rem;
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: 600;
            color: #a1acb8;
        }
        
        /* Front website link styling */
        .front-website-link {
            background-color: #f0f7ff;
            border-left: 3px solid var(--primary-color);
            transition: all 0.2s ease-in-out;
        }
        
        .front-website-link i {
            color: var(--primary-color) !important;
        }
        
        .front-website-link div {
            color: var(--primary-color) !important;
            font-weight: 600;
        }
        
        .front-website-link:hover {
            background-color: #e6f2ff;
            transform: translateX(3px);
        }
        
        /* Theme colors */
        .text-primary {
            color: var(--primary-color) !important;
        }
        
        .bg-primary {
            background-color: var(--primary-color) !important;
        }
        
        .btn-primary {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }
        
        /* Avatar styling */
        .avatar-online .avatar-initial {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
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

        // line 72
        yield "    <div class=\"app-brand demo\">
        <a href=\"";
        // line 73
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
        // line 89
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "get", ["_route"], "method", false, false, false, 89) == "app_dashboard")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"menu-link front-website-link\">
                <i class=\"menu-icon tf-icons bx bx-world\"></i>
                <div>Visit Website</div>
            </a>
        </li>
        
        <li class=\"menu-item ";
        // line 103
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "request", [], "any", false, false, false, 103), "get", ["_route"], "method", false, false, false, 103) == "app_admin_users")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user-circle\"></i>
                <div>Users</div>
            </a>
        </li>

        <!-- Claims Management -->
        <li class=\"menu-item ";
        // line 111
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "request", [], "any", false, false, false, 111), "get", ["_route"], "method", false, false, false, 111) == "app_reclamation_dashboard")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_dashboard");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-message-square-detail\"></i>
                <div>Claims</div>
            </a>
        </li>

        <!-- Banned Users -->
        <li class=\"menu-item ";
        // line 119
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "request", [], "any", false, false, false, 119), "get", ["_route"], "method", false, false, false, 119) == "app_admin_banned_users")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_banned_users");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-block\"></i>
                <div>Banned Users</div>
            </a>
        </li>

            <!-- Agents Management -->
<li class=\"menu-item ";
        // line 127
        yield (((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, false, 127), "get", ["_route"], "method", false, false, false, 127)) && is_string($__internal_compile_1 = "agent_list_admin") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_list_admin");
        yield "\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div>Agents</div>
    </a>
</li>
            <!-- Offices Management -->
<li class=\"menu-item ";
        // line 134
        yield (((is_string($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "get", ["_route"], "method", false, false, false, 134)) && is_string($__internal_compile_3 = "office_list_admin") && str_starts_with($__internal_compile_2, $__internal_compile_3))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("office_list_admin");
        yield "\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div>Offices</div>
    </a>
</li>

<!-- Destination Management -->
<li class=\"menu-item ";
        // line 142
        yield (((is_string($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "request", [], "any", false, false, false, 142), "get", ["_route"], "method", false, false, false, 142)) && is_string($__internal_compile_5 = "Destinations_page") && str_starts_with($__internal_compile_4, $__internal_compile_5))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Destinations_page");
        yield "\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div>Destination</div>
    </a>
</li>
            <!-- Parkingspot Management -->
<li class=\"menu-item ";
        // line 149
        yield (((is_string($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "request", [], "any", false, false, false, 149), "get", ["_route"], "method", false, false, false, 149)) && is_string($__internal_compile_7 = "Parking spot page") && str_starts_with($__internal_compile_6, $__internal_compile_7))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parkingspot_index");
        yield "\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div>Parking spot </div>
    </a>
</li>
<!-- Transport Management -->

<li class=\"menu-item ";
        // line 157
        yield (((is_string($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "request", [], "any", false, false, false, 157), "get", ["_route"], "method", false, false, false, 157)) && is_string($__internal_compile_9 = "Parking spot page") && str_starts_with($__internal_compile_8, $__internal_compile_9))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_index");
        yield "\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div>Transport </div>
    </a>
</li>

<!-- Driver Management -->
<li class=\"menu-item ";
        // line 165
        yield (((is_string($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "request", [], "any", false, false, false, 165), "get", ["_route"], "method", false, false, false, 165)) && is_string($__internal_compile_11 = "Parking spot page") && str_starts_with($__internal_compile_10, $__internal_compile_11))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_driver_index");
        yield "\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div>Driver </div>
    </a>
</li>
    


        <!-- Events Management -->
        <li class=\"menu-item ";
        // line 175
        yield (((is_string($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "request", [], "any", false, false, false, 175), "get", ["_route"], "method", false, false, false, 175)) && is_string($__internal_compile_13 = "app_event") && str_starts_with($__internal_compile_12, $__internal_compile_13))) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar\"></i>
                <div>Events</div>
            </a>
        </li>
         

        <!-- Reservation Management -->
        <li class=\"menu-item ";
        // line 184
        yield (((is_string($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "request", [], "any", false, false, false, 184), "get", ["_route"], "method", false, false, false, 184)) && is_string($__internal_compile_15 = "admin_waitlist_") && str_starts_with($__internal_compile_14, $__internal_compile_15))) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 185
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

    // line 197
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

        // line 198
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
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 212, $this->source); })()), "user", [], "any", false, false, false, 212), "firstName", [], "any", false, false, false, 212)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 212, $this->source); })()), "user", [], "any", false, false, false, 212), "lastName", [], "any", false, false, false, 212)), "html", null, true);
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
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "user", [], "any", false, false, false, 223), "firstName", [], "any", false, false, false, 223)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "user", [], "any", false, false, false, 223), "lastName", [], "any", false, false, false, 223)), "html", null, true);
        yield "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <span class=\"fw-semibold d-block\">";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "user", [], "any", false, false, false, 228), "fullName", [], "any", false, false, false, 228), "html", null, true);
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
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\">
                            <i class=\"bx bx-user me-2\"></i>
                            <span class=\"align-middle\">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 244
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
        // line 253
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
        // line 263
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

    // line 272
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

        // line 273
        yield "    <h4 class=\"fw-bold py-3 mb-4\">
        <span class=\"text-muted fw-light\">Admin /</span> Dashboard
    </h4>

    <div class=\"row\">
        <div class=\"col-lg-8 mb-4 order-0\">
            <div class=\"card\">
                <div class=\"d-flex align-items-end row\">
                    <div class=\"col-sm-7\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-primary\">Welcome, ";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 283, $this->source); })()), "user", [], "any", false, false, false, 283), "firstName", [], "any", false, false, false, 283), "html", null, true);
        yield "! 🎉</h5>
                            <p class=\"mb-4\">You have access to the admin dashboard where you can manage the Movable system.</p>
                            <a href=\"";
        // line 285
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-sm btn-outline-primary\">Manage Users</a>
                        </div>
                    </div>
                    <div class=\"col-sm-5 text-center text-sm-left\">
                        <div class=\"card-body pb-0 px-0 px-md-4\">
                            <img src=\"";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/illustrations/man-with-laptop-light.png"), "html", null, true);
        yield "\" height=\"140\" alt=\"Admin Dashboard\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Claims Management Card -->
        <div class=\"col-lg-4 mb-4 order-1\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <h5 class=\"card-title text-primary m-0\">Claims Management</h5>
                        <i class=\"bx bx-message-square-detail fs-2 text-primary\"></i>
                    </div>
                    <p class=\"mb-3\">Access the claims dashboard to manage customer submissions.</p>
                    <a href=\"";
        // line 306
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_dashboard");
        yield "\" class=\"btn btn-primary d-block\">
                        <i class=\"bx bx-right-arrow-alt me-1\"></i> Open Claims Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Action Cards -->
    <div class=\"row\">
        <!-- Pending Claims Card -->
        <div class=\"col-md-4 col-sm-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-start justify-content-between\">
                        <div class=\"content-left\">
                            <span class=\"fw-bold d-block mb-1\">Pending Claims</span>
                            <div class=\"d-flex align-items-center my-2\">
                                <span class=\"badge bg-label-warning rounded p-2 me-2\">
                                    <i class=\"bx bx-time bx-sm\"></i>
                                </span>
                                <a href=\"";
        // line 327
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index", ["status" => "Pending"]);
        yield "\" class=\"stretched-link text-decoration-none\">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Resolved Claims Card -->
        <div class=\"col-md-4 col-sm-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-start justify-content-between\">
                        <div class=\"content-left\">
                            <span class=\"fw-bold d-block mb-1\">Resolved Claims</span>
                            <div class=\"d-flex align-items-center my-2\">
                                <span class=\"badge bg-label-success rounded p-2 me-2\">
                                    <i class=\"bx bx-check-circle bx-sm\"></i>
                                </span>
                                <a href=\"";
        // line 348
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index", ["status" => "Resolved"]);
        yield "\" class=\"stretched-link text-decoration-none\">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- New Claim Button -->
        <div class=\"col-md-4 col-sm-6 mb-4\">
            <div class=\"card bg-primary\">
                <div class=\"card-body text-white\">
                    <div class=\"d-flex align-items-start justify-content-between\">
                        <div class=\"content-left\">
                            <span class=\"fw-bold d-block mb-1\">Need to Logout?</span>
                            <div class=\"d-flex align-items-center my-2\">
                                <a href=\"";
        // line 366
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-sm btn-outline-light\">
                                    <i class=\"bx bx-power-off me-1\"></i> Logout
                                </a>
                            </div>
                        </div>
                        <div>
                            <i class=\"bx bx-log-out-circle fs-3\"></i>
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

    // line 381
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

        // line 382
        yield "    <div class=\"container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3\">
        <div>
            <a href=\"https://movable.com\" target=\"_blank\" class=\"footer-text fw-bolder\">Movable</a> ©
            ";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "
        </div>
        <div>
            <a href=\"";
        // line 388
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"footer-link me-4\">Front-Office</a>
            <a href=\"javascript:void(0)\" class=\"footer-link me-4\">Help</a>
            <a href=\"javascript:void(0)\" class=\"footer-link me-4\">Contact</a>
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
        return "admin/layouts/admin.html.twig";
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
        return array (  677 => 388,  671 => 385,  666 => 382,  653 => 381,  628 => 366,  607 => 348,  583 => 327,  559 => 306,  540 => 290,  532 => 285,  527 => 283,  515 => 273,  502 => 272,  483 => 263,  470 => 253,  458 => 244,  449 => 238,  436 => 228,  427 => 223,  412 => 212,  396 => 198,  383 => 197,  361 => 185,  357 => 184,  346 => 176,  342 => 175,  330 => 166,  326 => 165,  316 => 158,  312 => 157,  302 => 150,  298 => 149,  289 => 143,  285 => 142,  275 => 135,  271 => 134,  262 => 128,  258 => 127,  248 => 120,  244 => 119,  234 => 112,  230 => 111,  220 => 104,  216 => 103,  207 => 97,  197 => 90,  193 => 89,  174 => 73,  171 => 72,  158 => 71,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base1.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
     <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/main.min.css\" rel=\"stylesheet\">
    <style>
        :root {
            --primary-color: #7367f0;
            --secondary-color: #82868b;
        }
        
        .layout-menu-hover .layout-menu {
            box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
        }
        
        .menu-header {
            padding: 0.625rem 1.25rem;
            margin-top: 0.75rem;
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: 600;
            color: #a1acb8;
        }
        
        /* Front website link styling */
        .front-website-link {
            background-color: #f0f7ff;
            border-left: 3px solid var(--primary-color);
            transition: all 0.2s ease-in-out;
        }
        
        .front-website-link i {
            color: var(--primary-color) !important;
        }
        
        .front-website-link div {
            color: var(--primary-color) !important;
            font-weight: 600;
        }
        
        .front-website-link:hover {
            background-color: #e6f2ff;
            transform: translateX(3px);
        }
        
        /* Theme colors */
        .text-primary {
            color: var(--primary-color) !important;
        }
        
        .bg-primary {
            background-color: var(--primary-color) !important;
        }
        
        .btn-primary {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }
        
        /* Avatar styling */
        .avatar-online .avatar-initial {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }
    </style>
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

            <!-- Agents Management -->
<li class=\"menu-item {{ app.request.get('_route') starts with 'agent_list_admin' ? 'active' : '' }}\">
    <a href=\"{{ path('agent_list_admin') }}\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div>Agents</div>
    </a>
</li>
            <!-- Offices Management -->
<li class=\"menu-item {{ app.request.get('_route') starts with 'office_list_admin' ? 'active' : '' }}\">
    <a href=\"{{ path('office_list_admin') }}\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div>Offices</div>
    </a>
</li>

<!-- Destination Management -->
<li class=\"menu-item {{ app.request.get('_route') starts with 'Destinations_page' ? 'active' : '' }}\">
    <a href=\"{{ path('Destinations_page') }}\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div>Destination</div>
    </a>
</li>
            <!-- Parkingspot Management -->
<li class=\"menu-item {{ app.request.get('_route') starts with 'Parking spot page' ? 'active' : '' }}\">
    <a href=\"{{ path('app_parkingspot_index') }}\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div>Parking spot </div>
    </a>
</li>
<!-- Transport Management -->

<li class=\"menu-item {{ app.request.get('_route') starts with 'Parking spot page' ? 'active' : '' }}\">
    <a href=\"{{ path('admin_transport_index') }}\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div>Transport </div>
    </a>
</li>

<!-- Driver Management -->
<li class=\"menu-item {{ app.request.get('_route') starts with 'Parking spot page' ? 'active' : '' }}\">
    <a href=\"{{ path('admin_driver_index') }}\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-user\"></i>
        <div>Driver </div>
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
        <li class=\"menu-item {{ app.request.get('_route') starts with 'admin_waitlist_' ? 'active' : '' }}\">
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
{% endblock %}

{% block body %}
    <h4 class=\"fw-bold py-3 mb-4\">
        <span class=\"text-muted fw-light\">Admin /</span> Dashboard
    </h4>

    <div class=\"row\">
        <div class=\"col-lg-8 mb-4 order-0\">
            <div class=\"card\">
                <div class=\"d-flex align-items-end row\">
                    <div class=\"col-sm-7\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-primary\">Welcome, {{ app.user.firstName }}! 🎉</h5>
                            <p class=\"mb-4\">You have access to the admin dashboard where you can manage the Movable system.</p>
                            <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-sm btn-outline-primary\">Manage Users</a>
                        </div>
                    </div>
                    <div class=\"col-sm-5 text-center text-sm-left\">
                        <div class=\"card-body pb-0 px-0 px-md-4\">
                            <img src=\"{{ asset('img/illustrations/man-with-laptop-light.png') }}\" height=\"140\" alt=\"Admin Dashboard\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Claims Management Card -->
        <div class=\"col-lg-4 mb-4 order-1\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <h5 class=\"card-title text-primary m-0\">Claims Management</h5>
                        <i class=\"bx bx-message-square-detail fs-2 text-primary\"></i>
                    </div>
                    <p class=\"mb-3\">Access the claims dashboard to manage customer submissions.</p>
                    <a href=\"{{ path('app_reclamation_dashboard') }}\" class=\"btn btn-primary d-block\">
                        <i class=\"bx bx-right-arrow-alt me-1\"></i> Open Claims Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Action Cards -->
    <div class=\"row\">
        <!-- Pending Claims Card -->
        <div class=\"col-md-4 col-sm-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-start justify-content-between\">
                        <div class=\"content-left\">
                            <span class=\"fw-bold d-block mb-1\">Pending Claims</span>
                            <div class=\"d-flex align-items-center my-2\">
                                <span class=\"badge bg-label-warning rounded p-2 me-2\">
                                    <i class=\"bx bx-time bx-sm\"></i>
                                </span>
                                <a href=\"{{ path('app_reclamation_index', {'status': 'Pending'}) }}\" class=\"stretched-link text-decoration-none\">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Resolved Claims Card -->
        <div class=\"col-md-4 col-sm-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-start justify-content-between\">
                        <div class=\"content-left\">
                            <span class=\"fw-bold d-block mb-1\">Resolved Claims</span>
                            <div class=\"d-flex align-items-center my-2\">
                                <span class=\"badge bg-label-success rounded p-2 me-2\">
                                    <i class=\"bx bx-check-circle bx-sm\"></i>
                                </span>
                                <a href=\"{{ path('app_reclamation_index', {'status': 'Resolved'}) }}\" class=\"stretched-link text-decoration-none\">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- New Claim Button -->
        <div class=\"col-md-4 col-sm-6 mb-4\">
            <div class=\"card bg-primary\">
                <div class=\"card-body text-white\">
                    <div class=\"d-flex align-items-start justify-content-between\">
                        <div class=\"content-left\">
                            <span class=\"fw-bold d-block mb-1\">Need to Logout?</span>
                            <div class=\"d-flex align-items-center my-2\">
                                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-sm btn-outline-light\">
                                    <i class=\"bx bx-power-off me-1\"></i> Logout
                                </a>
                            </div>
                        </div>
                        <div>
                            <i class=\"bx bx-log-out-circle fs-3\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block footer %}
    <div class=\"container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3\">
        <div>
            <a href=\"https://movable.com\" target=\"_blank\" class=\"footer-text fw-bolder\">Movable</a> ©
            {{ \"now\"|date(\"Y\") }}
        </div>
        <div>
            <a href=\"{{ path('app_front_home') }}\" class=\"footer-link me-4\">Front-Office</a>
            <a href=\"javascript:void(0)\" class=\"footer-link me-4\">Help</a>
            <a href=\"javascript:void(0)\" class=\"footer-link me-4\">Contact</a>
        </div>
    </div>
{% endblock %}", "admin/layouts/admin.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\layouts\\admin.html.twig");
    }
}
