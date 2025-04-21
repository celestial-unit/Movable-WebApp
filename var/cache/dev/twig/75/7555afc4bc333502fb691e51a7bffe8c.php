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

/* reclamation/index.html.twig */
class __TwigTemplate_56aca3c9db6482bcb00ca1ead8e2a61b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "reclamation/index.html.twig", 1);
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

        yield "Claims - Movable";
        
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
        <li class=\"menu-item\">
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <!-- Claims Management -->
        <li class=\"menu-item active\">
            <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-message-square-detail\"></i>
                <div>Claims</div>
            </a>
        </li>

        ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 35
            yield "            <!-- User Management -->
            <li class=\"menu-item\">
                <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                    <i class=\"menu-icon tf-icons bx bx-user-circle\"></i>
                    <div>User Management</div>
                </a>
                <ul class=\"menu-sub\">
                    <li class=\"menu-item\">
                        <a href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\" class=\"menu-link\">
                            <div>All Users</div>
                        </a>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_dashboard");
            yield "\" class=\"menu-link\">
                            <div>Claims Dashboard</div>
                        </a>
                    </li>
                </ul>
            </li>
        ";
        }
        // line 55
        yield "
        <!-- Profile -->
        <li class=\"menu-item\">
            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div>My Profile</div>
            </a>
        </li>
        
        <!-- Visit Website -->
        <li class=\"menu-item\">
            <a href=\"";
        // line 66
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

    // line 74
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

        // line 75
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
        // line 90
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90)) {
            // line 91
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "firstName", [], "any", false, false, false, 91)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "lastName", [], "any", false, false, false, 91)), "html", null, true);
            yield "
                            ";
        } else {
            // line 93
            yield "                                G
                            ";
        }
        // line 95
        yield "                        </span>
                    </div>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    ";
        // line 99
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99)) {
            // line 100
            yield "                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 101
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\">
                                <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0 me-3\">
                                        <div class=\"avatar\">
                                            <span class=\"avatar-initial rounded-circle bg-primary\">
                                                ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "firstName", [], "any", false, false, false, 106)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "lastName", [], "any", false, false, false, 106)), "html", null, true);
            yield "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"flex-grow-1\">
                                        <span class=\"fw-semibold d-block\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "fullName", [], "any", false, false, false, 111), "html", null, true);
            yield "</span>
                                        <small class=\"text-muted\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "email", [], "any", false, false, false, 112), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><div class=\"dropdown-divider\"></div></li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 119
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\">
                                <i class=\"bx bx-user me-2\"></i>
                                <span class=\"align-middle\">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 125
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_settings");
            yield "\">
                                <i class=\"bx bx-cog me-2\"></i>
                                <span class=\"align-middle\">Settings</span>
                            </a>
                        </li>
                        <li><div class=\"dropdown-divider\"></div></li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 132
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                <i class=\"bx bx-power-off me-2\"></i>
                                <span class=\"align-middle\">Log Out</span>
                            </a>
                        </li>
                    ";
        } else {
            // line 138
            yield "                        <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 139
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                                <i class=\"bx bx-log-in me-2\"></i>
                                <span class=\"align-middle\">Login</span>
                            </a>
                        </li>
                    ";
        }
        // line 145
        yield "                </ul>
            </li>
        </ul>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 151
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

        // line 152
        yield "<div class=\"row\">
    ";
        // line 154
        yield "    <div class=\"row mb-4\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-primary\">Welcome to Your Claims Dashboard</h5>
                    <p class=\"mb-4\">Here you can manage all your claims and check their status. Need help? You can create a new claim or view your existing ones below.</p>
                    <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-primary me-2\">
                        <i class=\"bx bx-plus me-1\"></i> Submit New Claim
                    </a>
                    <a href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_contact");
        yield "\" class=\"btn btn-outline-primary\">
                        <i class=\"bx bx-help-circle me-1\"></i> Need Help?
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Claims Overview</h5>
                    <div class=\"d-flex flex-column\">
                        <div class=\"mb-2\">
                            <span class=\"badge bg-label-warning me-2\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 175, $this->source); })()), "pending", [], "any", false, false, false, 175), "html", null, true);
        yield "</span> Pending Claims
                        </div>
                        <div class=\"mb-2\">
                            <span class=\"badge bg-label-success me-2\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 178, $this->source); })()), "resolved", [], "any", false, false, false, 178), "html", null, true);
        yield "</span> Resolved Claims
                        </div>
                        <div>
                            <span class=\"badge bg-label-danger me-2\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 181, $this->source); })()), "rejected", [], "any", false, false, false, 181), "html", null, true);
        yield "</span> Rejected Claims
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Claims List Card -->
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">My Claims</h5>
                <a href=\"";
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"bx bx-plus me-1\"></i> New Claim
                </a>
            </div>
            <div class=\"card-body\">
                <!-- Filters -->
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        <select class=\"form-select\" id=\"status-filter\">
                            <option value=\"\">All Statuses</option>
                            <option value=\"Pending\" ";
        // line 204
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 204, $this->source); })()) == "Pending")) {
            yield "selected";
        }
        yield ">Pending</option>
                            <option value=\"Resolved\" ";
        // line 205
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 205, $this->source); })()) == "Resolved")) {
            yield "selected";
        }
        yield ">Resolved</option>
                            <option value=\"Rejected\" ";
        // line 206
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 206, $this->source); })()) == "Rejected")) {
            yield "selected";
        }
        yield ">Rejected</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <select class=\"form-select\" id=\"category-filter\">
                            <option value=\"\">All Categories</option>
                            <option value=\"General\" ";
        // line 212
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 212, $this->source); })()) == "General")) {
            yield "selected";
        }
        yield ">General</option>
                            <option value=\"Technical\" ";
        // line 213
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 213, $this->source); })()) == "Technical")) {
            yield "selected";
        }
        yield ">Technical</option>
                            <option value=\"Billing\" ";
        // line 214
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 214, $this->source); })()) == "Billing")) {
            yield "selected";
        }
        yield ">Billing</option>
                            <option value=\"Service\" ";
        // line 215
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 215, $this->source); })()) == "Service")) {
            yield "selected";
        }
        yield ">Service</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <select class=\"form-select\" id=\"sort-filter\">
                            <option value=\"newest\" ";
        // line 220
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 220, $this->source); })()) == "newest")) {
            yield "selected";
        }
        yield ">Newest First</option>
                            <option value=\"oldest\" ";
        // line 221
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 221, $this->source); })()) == "oldest")) {
            yield "selected";
        }
        yield ">Oldest First</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"apply-filters\">
                            Apply Filters
                        </button>
                    </div>
                </div>

                <!-- Claims Table -->
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 245, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 246
            yield "                                <tr>
                                    <td>#";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 247), "html", null, true);
            yield "</td>
                                    <td>";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "title", [], "any", false, false, false, 248), "html", null, true);
            yield "</td>
                                    <td>
                                        <span class=\"badge bg-label-primary\">";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "category", [], "any", false, false, false, 250), "html", null, true);
            yield "</span>
                                    </td>
                                    <td>
                                        ";
            // line 253
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "status", [], "any", false, false, false, 253) == "Pending")) {
                // line 254
                yield "                                            <span class=\"badge bg-label-warning\">Pending</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 255
$context["reclamation"], "status", [], "any", false, false, false, 255) == "Resolved")) {
                // line 256
                yield "                                            <span class=\"badge bg-label-success\">Resolved</span>
                                        ";
            } else {
                // line 258
                yield "                                            <span class=\"badge bg-label-danger\">Rejected</span>
                                        ";
            }
            // line 260
            yield "                                    </td>
                                    <td>";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 261), "Y-m-d H:i"), "html", null, true);
            yield "</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 268)]), "html", null, true);
            yield "\">
                                                    <i class=\"bx bx-show-alt me-1\"></i> View
                                                </a>
                                                ";
            // line 271
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "status", [], "any", false, false, false, 271) == "Pending")) {
                // line 272
                yield "                                                    <a class=\"dropdown-item\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 272)]), "html", null, true);
                yield "\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Edit
                                                    </a>
                                                    <form action=\"";
                // line 275
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 275)]), "html", null, true);
                yield "\" method=\"post\" class=\"d-inline\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 276))), "html", null, true);
                yield "\">
                                                        <button type=\"submit\" class=\"dropdown-item\" onclick=\"return confirm('Are you sure you want to delete this claim?')\">
                                                            <i class=\"bx bx-trash me-1\"></i> Delete
                                                        </button>
                                                    </form>
                                                ";
            }
            // line 282
            yield "                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 287
            yield "                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">No claims found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        yield "                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                ";
        // line 296
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 296, $this->source); })())) > 0)) {
            // line 297
            yield "                    <div class=\"d-flex justify-content-between align-items-center mt-4\">
                        <div>
                            Showing ";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 299, $this->source); })())), "html", null, true);
            yield " claims
                        </div>
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination mb-0\">
                                ";
            // line 303
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 303, $this->source); })()) > 1)) {
                // line 304
                yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 305, $this->source); })()) - 1), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 305, $this->source); })()), "category" => (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 305, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 305, $this->source); })())]), "html", null, true);
                yield "\">
                                            <i class=\"bx bx-chevron-left\"></i>
                                        </a>
                                    </li>
                                ";
            }
            // line 310
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 310, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 311
                yield "                                    <li class=\"page-item ";
                yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 311, $this->source); })()) == $context["i"])) ? ("active") : (""));
                yield "\">
                                        <a class=\"page-link\" href=\"";
                // line 312
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index", ["page" => $context["i"], "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 312, $this->source); })()), "category" => (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 312, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 312, $this->source); })())]), "html", null, true);
                yield "\">
                                            ";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "
                                        </a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 317
            yield "                                ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 317, $this->source); })()) < (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 317, $this->source); })()))) {
                // line 318
                yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 319, $this->source); })()) + 1), "status" => (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 319, $this->source); })()), "category" => (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 319, $this->source); })()), "sort" => (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 319, $this->source); })())]), "html", null, true);
                yield "\">
                                            <i class=\"bx bx-chevron-right\"></i>
                                        </a>
                                    </li>
                                ";
            }
            // line 324
            yield "                            </ul>
                        </nav>
                    </div>
                ";
        }
        // line 328
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 334
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

        // line 335
        yield "    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
        <div class=\"mb-2 mb-md-0\">
            © ";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Movable, All rights reserved.
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 342
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

        // line 343
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const applyFilters = () => {
        const status = document.getElementById('status-filter').value;
        const category = document.getElementById('category-filter').value;
        const sort = document.getElementById('sort-filter').value;
        
        window.location.href = `";
        // line 351
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "?status=\${status}&category=\${category}&sort=\${sort}`;
    };

    document.getElementById('apply-filters').addEventListener('click', applyFilters);
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
        return "reclamation/index.html.twig";
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
        return array (  764 => 351,  753 => 343,  740 => 342,  725 => 337,  721 => 335,  708 => 334,  693 => 328,  687 => 324,  679 => 319,  676 => 318,  673 => 317,  663 => 313,  659 => 312,  654 => 311,  649 => 310,  641 => 305,  638 => 304,  636 => 303,  629 => 299,  625 => 297,  623 => 296,  616 => 291,  607 => 287,  598 => 282,  589 => 276,  585 => 275,  578 => 272,  576 => 271,  570 => 268,  560 => 261,  557 => 260,  553 => 258,  549 => 256,  547 => 255,  544 => 254,  542 => 253,  536 => 250,  531 => 248,  527 => 247,  524 => 246,  519 => 245,  490 => 221,  484 => 220,  474 => 215,  468 => 214,  462 => 213,  456 => 212,  445 => 206,  439 => 205,  433 => 204,  420 => 194,  404 => 181,  398 => 178,  392 => 175,  377 => 163,  371 => 160,  363 => 154,  360 => 152,  347 => 151,  332 => 145,  323 => 139,  320 => 138,  311 => 132,  301 => 125,  292 => 119,  282 => 112,  278 => 111,  269 => 106,  261 => 101,  258 => 100,  256 => 99,  250 => 95,  246 => 93,  239 => 91,  237 => 90,  220 => 75,  207 => 74,  189 => 66,  178 => 58,  173 => 55,  163 => 48,  155 => 43,  145 => 35,  143 => 34,  134 => 28,  123 => 20,  107 => 7,  104 => 6,  91 => 5,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base1.html.twig\" %}

{% block title %}Claims - Movable{% endblock %}

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
        <li class=\"menu-item\">
            <a href=\"{{ path('app_dashboard') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <!-- Claims Management -->
        <li class=\"menu-item active\">
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
            <a href=\"{{ path('app_user_profile') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div>My Profile</div>
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
                    {% endif %}
                </ul>
            </li>
        </ul>
    </div>
{% endblock %}

{% block body %}
<div class=\"row\">
    {# Welcome and Quick Actions Card #}
    <div class=\"row mb-4\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-primary\">Welcome to Your Claims Dashboard</h5>
                    <p class=\"mb-4\">Here you can manage all your claims and check their status. Need help? You can create a new claim or view your existing ones below.</p>
                    <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary me-2\">
                        <i class=\"bx bx-plus me-1\"></i> Submit New Claim
                    </a>
                    <a href=\"{{ path('app_front_contact') }}\" class=\"btn btn-outline-primary\">
                        <i class=\"bx bx-help-circle me-1\"></i> Need Help?
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Claims Overview</h5>
                    <div class=\"d-flex flex-column\">
                        <div class=\"mb-2\">
                            <span class=\"badge bg-label-warning me-2\">{{ stats.pending }}</span> Pending Claims
                        </div>
                        <div class=\"mb-2\">
                            <span class=\"badge bg-label-success me-2\">{{ stats.resolved }}</span> Resolved Claims
                        </div>
                        <div>
                            <span class=\"badge bg-label-danger me-2\">{{ stats.rejected }}</span> Rejected Claims
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Claims List Card -->
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">My Claims</h5>
                <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary\">
                    <i class=\"bx bx-plus me-1\"></i> New Claim
                </a>
            </div>
            <div class=\"card-body\">
                <!-- Filters -->
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        <select class=\"form-select\" id=\"status-filter\">
                            <option value=\"\">All Statuses</option>
                            <option value=\"Pending\" {% if status == 'Pending' %}selected{% endif %}>Pending</option>
                            <option value=\"Resolved\" {% if status == 'Resolved' %}selected{% endif %}>Resolved</option>
                            <option value=\"Rejected\" {% if status == 'Rejected' %}selected{% endif %}>Rejected</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <select class=\"form-select\" id=\"category-filter\">
                            <option value=\"\">All Categories</option>
                            <option value=\"General\" {% if category == 'General' %}selected{% endif %}>General</option>
                            <option value=\"Technical\" {% if category == 'Technical' %}selected{% endif %}>Technical</option>
                            <option value=\"Billing\" {% if category == 'Billing' %}selected{% endif %}>Billing</option>
                            <option value=\"Service\" {% if category == 'Service' %}selected{% endif %}>Service</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <select class=\"form-select\" id=\"sort-filter\">
                            <option value=\"newest\" {% if sort == 'newest' %}selected{% endif %}>Newest First</option>
                            <option value=\"oldest\" {% if sort == 'oldest' %}selected{% endif %}>Oldest First</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <button type=\"button\" class=\"btn btn-outline-primary\" id=\"apply-filters\">
                            Apply Filters
                        </button>
                    </div>
                </div>

                <!-- Claims Table -->
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for reclamation in reclamations %}
                                <tr>
                                    <td>#{{ reclamation.id }}</td>
                                    <td>{{ reclamation.title }}</td>
                                    <td>
                                        <span class=\"badge bg-label-primary\">{{ reclamation.category }}</span>
                                    </td>
                                    <td>
                                        {% if reclamation.status == 'Pending' %}
                                            <span class=\"badge bg-label-warning\">Pending</span>
                                        {% elseif reclamation.status == 'Resolved' %}
                                            <span class=\"badge bg-label-success\">Resolved</span>
                                        {% else %}
                                            <span class=\"badge bg-label-danger\">Rejected</span>
                                        {% endif %}
                                    </td>
                                    <td>{{ reclamation.createdAt|date('Y-m-d H:i') }}</td>
                                    <td>
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ path('app_reclamation_show', {'id': reclamation.id}) }}\">
                                                    <i class=\"bx bx-show-alt me-1\"></i> View
                                                </a>
                                                {% if reclamation.status == 'Pending' %}
                                                    <a class=\"dropdown-item\" href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\">
                                                        <i class=\"bx bx-edit-alt me-1\"></i> Edit
                                                    </a>
                                                    <form action=\"{{ path('app_reclamation_delete', {'id': reclamation.id}) }}\" method=\"post\" class=\"d-inline\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                                                        <button type=\"submit\" class=\"dropdown-item\" onclick=\"return confirm('Are you sure you want to delete this claim?')\">
                                                            <i class=\"bx bx-trash me-1\"></i> Delete
                                                        </button>
                                                    </form>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">No claims found</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                {% if reclamations|length > 0 %}
                    <div class=\"d-flex justify-content-between align-items-center mt-4\">
                        <div>
                            Showing {{ reclamations|length }} claims
                        </div>
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination mb-0\">
                                {% if page > 1 %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('app_reclamation_index', {'page': page-1, 'status': status, 'category': category, 'sort': sort}) }}\">
                                            <i class=\"bx bx-chevron-left\"></i>
                                        </a>
                                    </li>
                                {% endif %}
                                {% for i in 1..total_pages %}
                                    <li class=\"page-item {{ page == i ? 'active' : '' }}\">
                                        <a class=\"page-link\" href=\"{{ path('app_reclamation_index', {'page': i, 'status': status, 'category': category, 'sort': sort}) }}\">
                                            {{ i }}
                                        </a>
                                    </li>
                                {% endfor %}
                                {% if page < total_pages %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('app_reclamation_index', {'page': page+1, 'status': status, 'category': category, 'sort': sort}) }}\">
                                            <i class=\"bx bx-chevron-right\"></i>
                                        </a>
                                    </li>
                                {% endif %}
                            </ul>
                        </nav>
                    </div>
                {% endif %}
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
    const applyFilters = () => {
        const status = document.getElementById('status-filter').value;
        const category = document.getElementById('category-filter').value;
        const sort = document.getElementById('sort-filter').value;
        
        window.location.href = `{{ path('app_reclamation_index') }}?status=\${status}&category=\${category}&sort=\${sort}`;
    };

    document.getElementById('apply-filters').addEventListener('click', applyFilters);
});
</script>
{% endblock %}
", "reclamation/index.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\reclamation\\index.html.twig");
    }
}
