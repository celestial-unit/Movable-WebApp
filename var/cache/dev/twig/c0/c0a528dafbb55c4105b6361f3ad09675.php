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

/* index1.html.twig */
class __TwigTemplate_33a654f0d54b174cedc8f38a5c247c96 extends Template
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
            'page_css' => [$this, 'block_page_css'],
            'sidebar' => [$this, 'block_sidebar'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index1.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "index1.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_css"));

        // line 4
        yield "<style>
    .timeline {
        margin: 0;
        padding: 0;
        list-style: none;
        position: relative;
    }

    .timeline:before {
        content: '';
        position: absolute;
        left: 0.75rem;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e9ecef;
    }

    .timeline-item {
        position: relative;
        padding-left: 2.5rem;
        padding-bottom: 1.5rem;
    }

    .timeline-point {
        position: absolute;
        left: 0;
        top: 0;
        width: 1.5rem;
        height: 1.5rem;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #e9ecef;
    }

    .timeline-point-primary {
        border-color: #696cff;
    }

    .timeline-point-success {
        border-color: #71dd37;
    }

    .timeline-point-warning {
        border-color: #ffab00;
    }

    .avatar-initial {
        background-color: #696cff;
    }

    .card {
        transition: transform 0.2s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 64
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

        // line 65
        yield "    <div class=\"app-brand demo\">
        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <i class=\"bx bx-car fs-3 text-primary\"></i>
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Movable</span>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <!-- Dashboard -->
        <li class=\"menu-item active\">
            <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <!-- Claims Management -->
        <li class=\"menu-item\">
            <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-message-square-detail\"></i>
                <div>Claims</div>
            </a>
        </li>

        ";
        // line 93
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 94
            yield "            <!-- User Management -->
            <li class=\"menu-item\">
                <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                    <i class=\"menu-icon tf-icons bx bx-user-circle\"></i>
                    <div>User Management</div>
                </a>
                <ul class=\"menu-sub\">
                    <li class=\"menu-item\">
                        <a href=\"";
            // line 102
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\" class=\"menu-link\">
                            <div>All Users</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"";
            // line 107
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_dashboard");
            yield "\" class=\"menu-link\">
                            <div>Claims Dashboard</div>
                        </a>
                    </li>
                </ul>
            </li>
        ";
        }
        // line 114
        yield "
        <!-- Profile -->
        <li class=\"menu-item\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div>My Account</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item\">
                    <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\" class=\"menu-link\">
                        <div>Profile</div>
                    </a>
                </li>
                <li class=\"menu-item\">
                    <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_settings");
        yield "\" class=\"menu-link\">
                        <div>Settings</div>
                    </a>
                </li>
                ";
        // line 132
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 133
            yield "                    <li class=\"menu-item\">
                        <a href=\"";
            // line 134
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"menu-link\">
                            <div>Logout</div>
                        </a>
                    </li>
                ";
        }
        // line 139
        yield "            </ul>
        </li>
        
        <!-- Link to Front Office -->
        <li class=\"menu-item\">
            <a href=\"";
        // line 144
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

    // line 151
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

        // line 152
        yield "    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <!-- Search -->
        <div class=\"navbar-nav align-items-center\">
            <div class=\"nav-item d-flex align-items-center\">
                <i class=\"bx bx-search fs-4 lh-0\"></i>
                <input type=\"text\" class=\"form-control border-0 shadow-none\" placeholder=\"Search...\" />
            </div>
        </div>

        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- User -->
            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                        <span class=\"avatar-initial rounded-circle bg-primary\">
                            ";
        // line 167
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167)) {
            // line 168
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "firstName", [], "any", false, false, false, 168)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "lastName", [], "any", false, false, false, 168)), "html", null, true);
            yield "
                            ";
        } else {
            // line 170
            yield "                                G
                            ";
        }
        // line 172
        yield "                        </span>
                    </div>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    ";
        // line 176
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176)) {
            // line 177
            yield "                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 178
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\">
                                <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0 me-3\">
                                        <div class=\"avatar\">
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
                                        <small class=\"text-muted\">";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "user", [], "any", false, false, false, 189), "email", [], "any", false, false, false, 189), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><div class=\"dropdown-divider\"></div></li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 196
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\">
                                <i class=\"bx bx-user me-2\"></i>
                                <span class=\"align-middle\">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 202
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_settings");
            yield "\">
                                <i class=\"bx bx-cog me-2\"></i>
                                <span class=\"align-middle\">Settings</span>
                            </a>
                        </li>
                        <li><div class=\"dropdown-divider\"></div></li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 209
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                <i class=\"bx bx-power-off me-2\"></i>
                                <span class=\"align-middle\">Log Out</span>
                            </a>
                        </li>
                    ";
        } else {
            // line 215
            yield "                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 216
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                                <i class=\"bx bx-log-in me-2\"></i>
                                <span class=\"align-middle\">Login</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 222
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">
                                <i class=\"bx bx-user-plus me-2\"></i>
                                <span class=\"align-middle\">Register</span>
                            </a>
                        </li>
                    ";
        }
        // line 228
        yield "                </ul>
            </li>
        </ul>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 233
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

        // line 234
        yield "    <div class=\"row\">
        <div class=\"col-lg-8 mb-4 order-0\">
            <div class=\"card\">
                <div class=\"d-flex align-items-end row\">
                    <div class=\"col-sm-7\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-primary\">Welcome ";
        // line 240
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 240, $this->source); })()), "user", [], "any", false, false, false, 240)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 240, $this->source); })()), "user", [], "any", false, false, false, 240), "firstName", [], "any", false, false, false, 240), "html", null, true);
        } else {
            yield "to Movable";
        }
        yield "! 🎉</h5>
                            <p class=\"mb-4\">
                                Your transportation platform for accessible and convenient travel.
                                ";
        // line 243
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "user", [], "any", false, false, false, 243)) {
            // line 244
            yield "                                    Access your dashboard to manage your account and claims.
                                ";
        } else {
            // line 246
            yield "                                    Join us today to access all features.
                                ";
        }
        // line 248
        yield "                            </p>
                            ";
        // line 249
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "user", [], "any", false, false, false, 249)) {
            // line 250
            yield "                                <div class=\"d-flex gap-2\">
                                    <a href=\"";
            // line 251
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\" class=\"btn btn-sm btn-primary\">
                                        <i class=\"bx bx-user me-1\"></i> My Profile
                                    </a>
                                    <a href=\"";
            // line 254
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"bx bx-plus me-1\"></i> New Claim
                                    </a>
                                </div>
                            ";
        } else {
            // line 259
            yield "                                <div class=\"d-flex gap-2\">
                                    <a href=\"";
            // line 260
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-sm btn-primary\">
                                        <i class=\"bx bx-log-in me-1\"></i> Login
                                    </a>
                                    <a href=\"";
            // line 263
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"bx bx-user-plus me-1\"></i> Register
                                    </a>
                                </div>
                            ";
        }
        // line 268
        yield "                        </div>
                    </div>
                    <div class=\"col-sm-5 text-center text-sm-left\">
                        <div class=\"card-body pb-0 px-0 px-md-4\">
                            <img src=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/illustrations/man-with-laptop-light.png"), "html", null, true);
        yield "\"
                                 height=\"140\"
                                 alt=\"View Badge User\"
                                 data-app-light-img=\"illustrations/man-with-laptop-light.png\"
                                 data-app-dark-img=\"illustrations/man-with-laptop-dark.png\">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class=\"col-lg-4 col-md-4 order-1\">
            <div class=\"row\">
                ";
        // line 286
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 287
            yield "                    <div class=\"col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-start justify-content-between\">
                                    <div class=\"content-left\">
                                        <span class=\"fw-semibold d-block mb-1\">Users</span>
                                        <h3 class=\"card-title mb-0\">";
            // line 293
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_users", [], "any", true, true, false, 293) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_users", [], "any", false, false, false, 293)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_users", [], "any", false, false, false, 293), "html", null, true)) : (yield "0"));
            yield "</h3>
                                    </div>
                                    <div class=\"avatar flex-shrink-0\">
                                        <span class=\"avatar-initial rounded bg-label-primary\">
                                            <i class=\"bx bx-user\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-start justify-content-between\">
                                    <div class=\"content-left\">
                                        <span class=\"fw-semibold d-block mb-1\">Claims</span>
                                        <h3 class=\"card-title mb-0\">";
            // line 310
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_claims", [], "any", true, true, false, 310) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_claims", [], "any", false, false, false, 310)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_claims", [], "any", false, false, false, 310), "html", null, true)) : (yield "0"));
            yield "</h3>
                                    </div>
                                    <div class=\"avatar flex-shrink-0\">
                                        <span class=\"avatar-initial rounded bg-label-warning\">
                                            <i class=\"bx bx-message-square-detail\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 322
            yield "                    <div class=\"col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-start justify-content-between\">
                                    <div class=\"content-left\">
                                        <span class=\"fw-semibold d-block mb-1\">My Claims</span>
                                        <h3 class=\"card-title mb-0\">";
            // line 328
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 328, $this->source); })()), "user", [], "any", false, false, false, 328)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "my_claims", [], "any", true, true, false, 328) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "my_claims", [], "any", false, false, false, 328)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "my_claims", [], "any", false, false, false, 328), "html", null, true)) : (yield "0"))) : (yield "0"));
            yield "</h3>
                                    </div>
                                    <div class=\"avatar flex-shrink-0\">
                                        <span class=\"avatar-initial rounded bg-label-warning\">
                                            <i class=\"bx bx-message-square-detail\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-start justify-content-between\">
                                    <div class=\"content-left\">
                                        <span class=\"fw-semibold d-block mb-1\">Status</span>
                                        <h3 class=\"card-title mb-0\">Active</h3>
                                    </div>
                                    <div class=\"avatar flex-shrink-0\">
                                        <span class=\"avatar-initial rounded bg-label-success\">
                                            <i class=\"bx bx-check-circle\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 357
        yield "            </div>
        </div>
    </div>

    <div class=\"row g-3\">
        <div class=\"col-6\">
            <div class=\"d-grid\">
                <a href=\"";
        // line 364
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-outline-primary\">
                    <i class=\"bx bx-plus-circle mb-1 d-block fs-4\"></i>
                    New Claim
                </a>
            </div>
        </div>
        <div class=\"col-6\">
            <div class=\"d-grid\">
                <a href=\"";
        // line 372
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\" class=\"btn btn-outline-primary\">
                    <i class=\"bx bx-user mb-1 d-block fs-4\"></i>
                    Profile
                </a>
            </div>
        </div>
        ";
        // line 378
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 379
            yield "        <div class=\"col-6\">
            <div class=\"d-grid\">
                <a href=\"";
            // line 381
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\" class=\"btn btn-outline-primary\">
                    <i class=\"bx bx-group mb-1 d-block fs-4\"></i>
                    Users
                </a>
            </div>
        </div>
        <div class=\"col-6\">
            <div class=\"d-grid\">
                <a href=\"";
            // line 389
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_dashboard");
            yield "\" class=\"btn btn-outline-primary\">
                    <i class=\"bx bx-dashboard mb-1 d-block fs-4\"></i>
                    Dashboard
                </a>
            </div>
        </div>
        ";
        }
        // line 396
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 399
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

        // line 400
        yield "<script>
    // Initialize any charts or widgets here
    document.addEventListener('DOMContentLoaded', function() {
        // Add animation classes to cards
        document.querySelectorAll('.card').forEach(card => {
            card.classList.add('animate__animated', 'animate__fadeInUp');
        });
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 411
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

        // line 412
        yield "    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
        <div class=\"mb-2 mb-md-0\">
            © ";
        // line 414
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Movable. All rights reserved.
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
        return "index1.html.twig";
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
        return array (  752 => 414,  748 => 412,  735 => 411,  715 => 400,  702 => 399,  690 => 396,  680 => 389,  669 => 381,  665 => 379,  663 => 378,  654 => 372,  643 => 364,  634 => 357,  602 => 328,  594 => 322,  579 => 310,  559 => 293,  551 => 287,  549 => 286,  532 => 272,  526 => 268,  518 => 263,  512 => 260,  509 => 259,  501 => 254,  495 => 251,  492 => 250,  490 => 249,  487 => 248,  483 => 246,  479 => 244,  477 => 243,  467 => 240,  459 => 234,  446 => 233,  431 => 228,  422 => 222,  413 => 216,  410 => 215,  401 => 209,  391 => 202,  382 => 196,  372 => 189,  368 => 188,  359 => 183,  351 => 178,  348 => 177,  346 => 176,  340 => 172,  336 => 170,  329 => 168,  327 => 167,  310 => 152,  297 => 151,  279 => 144,  272 => 139,  264 => 134,  261 => 133,  259 => 132,  252 => 128,  244 => 123,  233 => 114,  223 => 107,  215 => 102,  205 => 94,  203 => 93,  194 => 87,  183 => 79,  167 => 66,  164 => 65,  151 => 64,  81 => 4,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block page_css %}
<style>
    .timeline {
        margin: 0;
        padding: 0;
        list-style: none;
        position: relative;
    }

    .timeline:before {
        content: '';
        position: absolute;
        left: 0.75rem;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e9ecef;
    }

    .timeline-item {
        position: relative;
        padding-left: 2.5rem;
        padding-bottom: 1.5rem;
    }

    .timeline-point {
        position: absolute;
        left: 0;
        top: 0;
        width: 1.5rem;
        height: 1.5rem;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #e9ecef;
    }

    .timeline-point-primary {
        border-color: #696cff;
    }

    .timeline-point-success {
        border-color: #71dd37;
    }

    .timeline-point-warning {
        border-color: #ffab00;
    }

    .avatar-initial {
        background-color: #696cff;
    }

    .card {
        transition: transform 0.2s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
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
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <!-- Dashboard -->
        <li class=\"menu-item active\">
            <a href=\"{{ path('app_dashboard') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <!-- Claims Management -->
        <li class=\"menu-item\">
            <a href=\"{{ path('app_reclamation_index') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-message-square-detail\"></i>
                <div>Claims</div>
            </a>
        </li>

        {% if is_granted('ROLE_ADMIN') %}
            <!-- User Management -->
            <li class=\"menu-item\">
                <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                    <i class=\"menu-icon tf-icons bx bx-user-circle\"></i>
                    <div>User Management</div>
                </a>
                <ul class=\"menu-sub\">
                    <li class=\"menu-item\">
                        <a href=\"{{ path('app_admin_users') }}\" class=\"menu-link\">
                            <div>All Users</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"{{ path('app_reclamation_dashboard') }}\" class=\"menu-link\">
                            <div>Claims Dashboard</div>
                        </a>
                    </li>
                </ul>
            </li>
        {% endif %}

        <!-- Profile -->
        <li class=\"menu-item\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div>My Account</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item\">
                    <a href=\"{{ path('app_user_profile') }}\" class=\"menu-link\">
                        <div>Profile</div>
                    </a>
                </li>
                <li class=\"menu-item\">
                    <a href=\"{{ path('app_user_settings') }}\" class=\"menu-link\">
                        <div>Settings</div>
                    </a>
                </li>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li class=\"menu-item\">
                        <a href=\"{{ path('app_logout') }}\" class=\"menu-link\">
                            <div>Logout</div>
                        </a>
                    </li>
                {% endif %}
            </ul>
        </li>
        
        <!-- Link to Front Office -->
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
        <!-- Search -->
        <div class=\"navbar-nav align-items-center\">
            <div class=\"nav-item d-flex align-items-center\">
                <i class=\"bx bx-search fs-4 lh-0\"></i>
                <input type=\"text\" class=\"form-control border-0 shadow-none\" placeholder=\"Search...\" />
            </div>
        </div>

        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- User -->
            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                        <span class=\"avatar-initial rounded-circle bg-primary\">
                            {% if app.user %}
                                {{ app.user.firstName|first }}{{ app.user.lastName|first }}
                            {% else %}
                                G
                            {% endif %}
                        </span>
                    </div>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    {% if app.user %}
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('app_user_profile') }}\">
                                <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0 me-3\">
                                        <div class=\"avatar\">
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
                    {% else %}
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('app_login') }}\">
                                <i class=\"bx bx-log-in me-2\"></i>
                                <span class=\"align-middle\">Login</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('app_register') }}\">
                                <i class=\"bx bx-user-plus me-2\"></i>
                                <span class=\"align-middle\">Register</span>
                            </a>
                        </li>
                    {% endif %}
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
                            <h5 class=\"card-title text-primary\">Welcome {% if app.user %}{{ app.user.firstName }}{% else %}to Movable{% endif %}! 🎉</h5>
                            <p class=\"mb-4\">
                                Your transportation platform for accessible and convenient travel.
                                {% if app.user %}
                                    Access your dashboard to manage your account and claims.
                                {% else %}
                                    Join us today to access all features.
                                {% endif %}
                            </p>
                            {% if app.user %}
                                <div class=\"d-flex gap-2\">
                                    <a href=\"{{ path('app_user_profile') }}\" class=\"btn btn-sm btn-primary\">
                                        <i class=\"bx bx-user me-1\"></i> My Profile
                                    </a>
                                    <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"bx bx-plus me-1\"></i> New Claim
                                    </a>
                                </div>
                            {% else %}
                                <div class=\"d-flex gap-2\">
                                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-sm btn-primary\">
                                        <i class=\"bx bx-log-in me-1\"></i> Login
                                    </a>
                                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"bx bx-user-plus me-1\"></i> Register
                                    </a>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-sm-5 text-center text-sm-left\">
                        <div class=\"card-body pb-0 px-0 px-md-4\">
                            <img src=\"{{ asset('img/illustrations/man-with-laptop-light.png') }}\"
                                 height=\"140\"
                                 alt=\"View Badge User\"
                                 data-app-light-img=\"illustrations/man-with-laptop-light.png\"
                                 data-app-dark-img=\"illustrations/man-with-laptop-dark.png\">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class=\"col-lg-4 col-md-4 order-1\">
            <div class=\"row\">
                {% if is_granted('ROLE_ADMIN') %}
                    <div class=\"col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-start justify-content-between\">
                                    <div class=\"content-left\">
                                        <span class=\"fw-semibold d-block mb-1\">Users</span>
                                        <h3 class=\"card-title mb-0\">{{ stats.total_users ?? '0' }}</h3>
                                    </div>
                                    <div class=\"avatar flex-shrink-0\">
                                        <span class=\"avatar-initial rounded bg-label-primary\">
                                            <i class=\"bx bx-user\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-start justify-content-between\">
                                    <div class=\"content-left\">
                                        <span class=\"fw-semibold d-block mb-1\">Claims</span>
                                        <h3 class=\"card-title mb-0\">{{ stats.total_claims ?? '0' }}</h3>
                                    </div>
                                    <div class=\"avatar flex-shrink-0\">
                                        <span class=\"avatar-initial rounded bg-label-warning\">
                                            <i class=\"bx bx-message-square-detail\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-start justify-content-between\">
                                    <div class=\"content-left\">
                                        <span class=\"fw-semibold d-block mb-1\">My Claims</span>
                                        <h3 class=\"card-title mb-0\">{{ app.user ? stats.my_claims ?? '0' : '0' }}</h3>
                                    </div>
                                    <div class=\"avatar flex-shrink-0\">
                                        <span class=\"avatar-initial rounded bg-label-warning\">
                                            <i class=\"bx bx-message-square-detail\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-start justify-content-between\">
                                    <div class=\"content-left\">
                                        <span class=\"fw-semibold d-block mb-1\">Status</span>
                                        <h3 class=\"card-title mb-0\">Active</h3>
                                    </div>
                                    <div class=\"avatar flex-shrink-0\">
                                        <span class=\"avatar-initial rounded bg-label-success\">
                                            <i class=\"bx bx-check-circle\"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"row g-3\">
        <div class=\"col-6\">
            <div class=\"d-grid\">
                <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-outline-primary\">
                    <i class=\"bx bx-plus-circle mb-1 d-block fs-4\"></i>
                    New Claim
                </a>
            </div>
        </div>
        <div class=\"col-6\">
            <div class=\"d-grid\">
                <a href=\"{{ path('app_user_profile') }}\" class=\"btn btn-outline-primary\">
                    <i class=\"bx bx-user mb-1 d-block fs-4\"></i>
                    Profile
                </a>
            </div>
        </div>
        {% if is_granted('ROLE_ADMIN') %}
        <div class=\"col-6\">
            <div class=\"d-grid\">
                <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-outline-primary\">
                    <i class=\"bx bx-group mb-1 d-block fs-4\"></i>
                    Users
                </a>
            </div>
        </div>
        <div class=\"col-6\">
            <div class=\"d-grid\">
                <a href=\"{{ path('app_reclamation_dashboard') }}\" class=\"btn btn-outline-primary\">
                    <i class=\"bx bx-dashboard mb-1 d-block fs-4\"></i>
                    Dashboard
                </a>
            </div>
        </div>
        {% endif %}
    </div>
{% endblock %}

{% block javascripts %}
<script>
    // Initialize any charts or widgets here
    document.addEventListener('DOMContentLoaded', function() {
        // Add animation classes to cards
        document.querySelectorAll('.card').forEach(card => {
            card.classList.add('animate__animated', 'animate__fadeInUp');
        });
    });
</script>
{% endblock %}

{% block footer %}
    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
        <div class=\"mb-2 mb-md-0\">
            © {{ \"now\"|date(\"Y\") }} Movable. All rights reserved.
        </div>
    </div>
{% endblock %}
", "index1.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\index1.html.twig");
    }
}
