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

/* reclamation/edit.html.twig */
class __TwigTemplate_b24ca5b69efcdbdabadd2dea0ec96467 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/edit.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "reclamation/edit.html.twig", 1);
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

        yield "Edit Claim - Movable";
        
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
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Edit Claim #";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 156, $this->source); })()), "id", [], "any", false, false, false, 156), "html", null, true);
        yield "</h5>
                <div>
                    <a href=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158)]), "html", null, true);
        yield "\" class=\"btn btn-secondary me-2\">
                        <i class=\"bx bx-show-alt me-1\"></i> View Claim
                    </a>
                    <a href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"bx bx-arrow-back me-1\"></i> Back to List
                    </a>
                </div>
            </div>
            <div class=\"card-body\">
                ";
        // line 167
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), 'form_start');
        yield "
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "title", [], "any", false, false, false, 170), 'label');
        yield "
                            ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "title", [], "any", false, false, false, 171), 'widget');
        yield "
                            ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "title", [], "any", false, false, false, 172), 'errors');
        yield "
                            <div class=\"form-text\">Enter a clear and concise title for your claim.</div>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "category", [], "any", false, false, false, 176), 'label');
        yield "
                            ";
        // line 177
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "category", [], "any", false, false, false, 177), 'widget');
        yield "
                            ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "category", [], "any", false, false, false, 178), 'errors');
        yield "
                            <div class=\"form-text\">Select the most appropriate category for your claim.</div>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "description", [], "any", false, false, false, 184), 'label');
        yield "
                        ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "description", [], "any", false, false, false, 185), 'widget');
        yield "
                        ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "description", [], "any", false, false, false, 186), 'errors');
        yield "
                        <div class=\"form-text\">Please provide detailed information about your claim.</div>
                    </div>

                    ";
        // line 190
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", true, true, false, 190))) {
            // line 191
            yield "                        <div class=\"mb-3\">
                            ";
            // line 192
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "status", [], "any", false, false, false, 192), 'label');
            yield "
                            ";
            // line 193
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "status", [], "any", false, false, false, 193), 'widget');
            yield "
                            ";
            // line 194
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "status", [], "any", false, false, false, 194), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 197
        yield "
                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-save me-1\"></i> Save Changes
                        </button>
                        ";
        // line 202
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 202, $this->source); })()), "status", [], "any", false, false, false, 202) == "Pending"))) {
            // line 203
            yield "                            <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                <i class=\"bx bx-trash me-1\"></i> Delete Claim
                            </button>
                        ";
        }
        // line 207
        yield "                    </div>
                ";
        // line 208
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirm Deletion</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                Are you sure you want to delete this claim? This action cannot be undone.
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                <form action=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 227, $this->source); })()), "id", [], "any", false, false, false, 227)]), "html", null, true);
        yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 228, $this->source); })()), "id", [], "any", false, false, false, 228))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 237
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

        // line 238
        yield "    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
        <div class=\"mb-2 mb-md-0\">
            © ";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Movable, All rights reserved.
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
        return "reclamation/edit.html.twig";
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
        return array (  537 => 240,  533 => 238,  520 => 237,  501 => 228,  497 => 227,  475 => 208,  472 => 207,  466 => 203,  464 => 202,  457 => 197,  451 => 194,  447 => 193,  443 => 192,  440 => 191,  438 => 190,  431 => 186,  427 => 185,  423 => 184,  414 => 178,  410 => 177,  406 => 176,  399 => 172,  395 => 171,  391 => 170,  385 => 167,  376 => 161,  370 => 158,  365 => 156,  359 => 152,  346 => 151,  331 => 145,  322 => 139,  319 => 138,  310 => 132,  300 => 125,  291 => 119,  281 => 112,  277 => 111,  268 => 106,  260 => 101,  257 => 100,  255 => 99,  249 => 95,  245 => 93,  238 => 91,  236 => 90,  219 => 75,  206 => 74,  188 => 66,  177 => 58,  172 => 55,  162 => 48,  154 => 43,  144 => 35,  142 => 34,  133 => 28,  122 => 20,  106 => 7,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base1.html.twig\" %}

{% block title %}Edit Claim - Movable{% endblock %}

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
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Edit Claim #{{ reclamation.id }}</h5>
                <div>
                    <a href=\"{{ path('app_reclamation_show', {'id': reclamation.id}) }}\" class=\"btn btn-secondary me-2\">
                        <i class=\"bx bx-show-alt me-1\"></i> View Claim
                    </a>
                    <a href=\"{{ path('app_reclamation_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"bx bx-arrow-back me-1\"></i> Back to List
                    </a>
                </div>
            </div>
            <div class=\"card-body\">
                {{ form_start(form) }}
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            {{ form_label(form.title) }}
                            {{ form_widget(form.title) }}
                            {{ form_errors(form.title) }}
                            <div class=\"form-text\">Enter a clear and concise title for your claim.</div>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            {{ form_label(form.category) }}
                            {{ form_widget(form.category) }}
                            {{ form_errors(form.category) }}
                            <div class=\"form-text\">Select the most appropriate category for your claim.</div>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.description) }}
                        {{ form_widget(form.description) }}
                        {{ form_errors(form.description) }}
                        <div class=\"form-text\">Please provide detailed information about your claim.</div>
                    </div>

                    {% if is_granted('ROLE_ADMIN') and form.status is defined %}
                        <div class=\"mb-3\">
                            {{ form_label(form.status) }}
                            {{ form_widget(form.status) }}
                            {{ form_errors(form.status) }}
                        </div>
                    {% endif %}

                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-save me-1\"></i> Save Changes
                        </button>
                        {% if is_granted('ROLE_ADMIN') or reclamation.status == 'Pending' %}
                            <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                <i class=\"bx bx-trash me-1\"></i> Delete Claim
                            </button>
                        {% endif %}
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirm Deletion</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                Are you sure you want to delete this claim? This action cannot be undone.
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                <form action=\"{{ path('app_reclamation_delete', {'id': reclamation.id}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                </form>
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
", "reclamation/edit.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\reclamation\\edit.html.twig");
    }
}
