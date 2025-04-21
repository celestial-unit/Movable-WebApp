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

/* user/layouts/user.html.twig */
class __TwigTemplate_bf9d4510428c2bb4c1ab3c22f782dcc2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/layouts/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/layouts/user.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "user/layouts/user.html.twig", 1);
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
    <style>
        .bg-menu-theme .menu-item.active > .menu-link {
            color: #696cff !important;
        }
        
        .bg-menu-theme .menu-item.active > .menu-link i {
            color: #696cff !important;
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

        .user-stats-card {
            transition: transform 0.3s ease;
        }

        .user-stats-card:hover {
            transform: translateY(-5px);
        }

        .notification-badge {
            position: absolute;
            top: 0;
            right: 0;
            padding: 0.25rem 0.5rem;
            border-radius: 50%;
            font-size: 0.75rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
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

        // line 47
        yield "    <div class=\"app-brand demo\">
        <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <i class=\"bx bx-car fs-3 text-primary\"></i>
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Movable</span>
        </a>

        <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
            <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <!-- Dashboard -->
        <li class=\"menu-item ";
        // line 64
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "get", ["_route"], "method", false, false, false, 64) == "app_dashboard")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Claims Management</span>
        </li>

        <!-- My Claims -->
        <li class=\"menu-item ";
        // line 76
        yield (((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "get", ["_route"], "method", false, false, false, 76)) && is_string($__internal_compile_1 = "app_reclamation_") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-message-square-detail\"></i>
                <div>My Claims</div>
            </a>
        </li>

        <!-- New Claim -->
        <li class=\"menu-item ";
        // line 84
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "get", ["_route"], "method", false, false, false, 84) == "app_reclamation_new")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-plus-circle\"></i>
                <div>Submit New Claim</div>
            </a>
        </li>

        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Account</span>
        </li>

        <!-- Profile -->
        <li class=\"menu-item ";
        // line 96
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "request", [], "any", false, false, false, 96), "get", ["_route"], "method", false, false, false, 96) == "app_user_profile")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div>My Profile</div>
            </a>
        </li>

        <!-- Settings -->
        <li class=\"menu-item ";
        // line 104
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "get", ["_route"], "method", false, false, false, 104) == "app_user_settings")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_settings");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-cog\"></i>
                <div>Settings</div>
            </a>
        </li>

        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Quick Links</span>
        </li>

        <!-- Help Center -->
        <li class=\"menu-item\">
            <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_help");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-help-circle\"></i>
                <div>Help Center</div>
            </a>
        </li>

        <!-- Visit Website -->
        <li class=\"menu-item\">
            <a href=\"";
        // line 125
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

    // line 133
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

        // line 134
        yield "    <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
            <i class=\"bx bx-menu bx-sm\"></i>
        </a>
    </div>

    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <!-- Search -->
        <div class=\"navbar-nav align-items-center\">
            <div class=\"nav-item d-flex align-items-center\">
                <i class=\"bx bx-search fs-4 lh-0\"></i>
                <input type=\"text\" class=\"form-control border-0 shadow-none ps-1\" placeholder=\"Search claims...\" aria-label=\"Search...\">
            </div>
        </div>

        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- Notifications -->
            <li class=\"nav-item dropdown-notifications navbar-dropdown dropdown me-3\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <i class=\"bx bx-bell bx-sm\"></i>
                    <span class=\"badge bg-danger rounded-pill badge-notifications\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("notifications", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 154, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</span>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end py-0\">
                    <li class=\"dropdown-menu-header border-bottom\">
                        <div class=\"dropdown-header d-flex align-items-center py-3\">
                            <h5 class=\"text-body mb-0 me-auto\">Notifications</h5>
                            <a href=\"javascript:void(0)\" class=\"dropdown-notifications-all text-body\">
                                <i class=\"bx fs-4 bx-envelope-open\"></i>
                            </a>
                        </div>
                    </li>
                    <li class=\"dropdown-menu-footer border-top\">
                        <a href=\"javascript:void(0);\" class=\"dropdown-item d-flex justify-content-center p-3\">
                            View all notifications
                        </a>
                    </li>
                </ul>
            </li>

            <!-- User -->
            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                        <span class=\"avatar-initial rounded-circle bg-primary\">
                            ";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "firstName", [], "any", false, false, false, 178)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "lastName", [], "any", false, false, false, 178)), "html", null, true);
        yield "
                        </span>
                    </div>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0 me-3\">
                                    <div class=\"avatar avatar-online\">
                                        <span class=\"avatar-initial rounded-circle bg-primary\">
                                            ";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "user", [], "any", false, false, false, 189), "firstName", [], "any", false, false, false, 189)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "user", [], "any", false, false, false, 189), "lastName", [], "any", false, false, false, 189)), "html", null, true);
        yield "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <span class=\"fw-semibold d-block\">";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "user", [], "any", false, false, false, 194), "fullName", [], "any", false, false, false, 194), "html", null, true);
        yield "</span>
                                    <small class=\"text-muted\">Member</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li><div class=\"dropdown-divider\"></div></li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 202
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\">
                            <i class=\"bx bx-user me-2\"></i>
                            <span class=\"align-middle\">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_settings");
        yield "\">
                            <i class=\"bx bx-cog me-2\"></i>
                            <span class=\"align-middle\">Settings</span>
                        </a>
                    </li>
                    <li><div class=\"dropdown-divider\"></div></li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 215
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

    // line 226
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

        // line 227
        yield "    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
        <div class=\"mb-2 mb-md-0\">
            © ";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Movable. All rights reserved.
        </div>
        <div>
            <a href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_help");
        yield "\" class=\"footer-link me-4\">Help Center</a>
            <a href=\"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"footer-link\">Contact</a>
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
        return "user/layouts/user.html.twig";
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
        return array (  446 => 233,  442 => 232,  436 => 229,  432 => 227,  419 => 226,  398 => 215,  388 => 208,  379 => 202,  368 => 194,  359 => 189,  351 => 184,  341 => 178,  314 => 154,  292 => 134,  279 => 133,  261 => 125,  250 => 117,  235 => 105,  231 => 104,  221 => 97,  217 => 96,  203 => 85,  199 => 84,  189 => 77,  185 => 76,  171 => 65,  167 => 64,  148 => 48,  145 => 47,  132 => 46,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base1.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .bg-menu-theme .menu-item.active > .menu-link {
            color: #696cff !important;
        }
        
        .bg-menu-theme .menu-item.active > .menu-link i {
            color: #696cff !important;
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

        .user-stats-card {
            transition: transform 0.3s ease;
        }

        .user-stats-card:hover {
            transform: translateY(-5px);
        }

        .notification-badge {
            position: absolute;
            top: 0;
            right: 0;
            padding: 0.25rem 0.5rem;
            border-radius: 50%;
            font-size: 0.75rem;
        }
    </style>
{% endblock %}

{% block sidebar %}
    <div class=\"app-brand demo\">
        <a href=\"{{ path('app_dashboard') }}\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <i class=\"bx bx-car fs-3 text-primary\"></i>
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Movable</span>
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

        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Claims Management</span>
        </li>

        <!-- My Claims -->
        <li class=\"menu-item {{ app.request.get('_route') starts with 'app_reclamation_' ? 'active' : '' }}\">
            <a href=\"{{ path('app_reclamation_index') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-message-square-detail\"></i>
                <div>My Claims</div>
            </a>
        </li>

        <!-- New Claim -->
        <li class=\"menu-item {{ app.request.get('_route') == 'app_reclamation_new' ? 'active' : '' }}\">
            <a href=\"{{ path('app_reclamation_new') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-plus-circle\"></i>
                <div>Submit New Claim</div>
            </a>
        </li>

        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Account</span>
        </li>

        <!-- Profile -->
        <li class=\"menu-item {{ app.request.get('_route') == 'app_user_profile' ? 'active' : '' }}\">
            <a href=\"{{ path('app_user_profile') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div>My Profile</div>
            </a>
        </li>

        <!-- Settings -->
        <li class=\"menu-item {{ app.request.get('_route') == 'app_user_settings' ? 'active' : '' }}\">
            <a href=\"{{ path('app_user_settings') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-cog\"></i>
                <div>Settings</div>
            </a>
        </li>

        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">Quick Links</span>
        </li>

        <!-- Help Center -->
        <li class=\"menu-item\">
            <a href=\"{{ path('app_front_help') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-help-circle\"></i>
                <div>Help Center</div>
            </a>
        </li>

        <!-- Visit Website -->
        <li class=\"menu-item\">
            <a href=\"{{ path('app_front_home') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-world\"></i>
                <div>Visit Website</div>
            </a>
        </li>
    </ul>
{% endblock %}

{% block navbar %}
    <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
            <i class=\"bx bx-menu bx-sm\"></i>
        </a>
    </div>

    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <!-- Search -->
        <div class=\"navbar-nav align-items-center\">
            <div class=\"nav-item d-flex align-items-center\">
                <i class=\"bx bx-search fs-4 lh-0\"></i>
                <input type=\"text\" class=\"form-control border-0 shadow-none ps-1\" placeholder=\"Search claims...\" aria-label=\"Search...\">
            </div>
        </div>

        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- Notifications -->
            <li class=\"nav-item dropdown-notifications navbar-dropdown dropdown me-3\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <i class=\"bx bx-bell bx-sm\"></i>
                    <span class=\"badge bg-danger rounded-pill badge-notifications\">{{ notifications|default(0) }}</span>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end py-0\">
                    <li class=\"dropdown-menu-header border-bottom\">
                        <div class=\"dropdown-header d-flex align-items-center py-3\">
                            <h5 class=\"text-body mb-0 me-auto\">Notifications</h5>
                            <a href=\"javascript:void(0)\" class=\"dropdown-notifications-all text-body\">
                                <i class=\"bx fs-4 bx-envelope-open\"></i>
                            </a>
                        </div>
                    </li>
                    <li class=\"dropdown-menu-footer border-top\">
                        <a href=\"javascript:void(0);\" class=\"dropdown-item d-flex justify-content-center p-3\">
                            View all notifications
                        </a>
                    </li>
                </ul>
            </li>

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
                        <a class=\"dropdown-item\" href=\"{{ path('app_user_profile') }}\">
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
                                    <small class=\"text-muted\">Member</small>
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

{% block footer %}
    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
        <div class=\"mb-2 mb-md-0\">
            © {{ \"now\"|date(\"Y\") }} Movable. All rights reserved.
        </div>
        <div>
            <a href=\"{{ path('app_front_help') }}\" class=\"footer-link me-4\">Help Center</a>
            <a href=\"{{ path('app_contact') }}\" class=\"footer-link\">Contact</a>
        </div>
    </div>
{% endblock %}

", "user/layouts/user.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\user\\layouts\\user.html.twig");
    }
}
