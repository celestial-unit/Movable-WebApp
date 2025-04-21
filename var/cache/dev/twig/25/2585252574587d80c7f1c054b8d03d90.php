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

/* user/profile.html.twig */
class __TwigTemplate_ad0bc35ea8350ca6142e7fe3ccd10e80 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "user/profile.html.twig", 1);
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

        yield "My Profile - Movable";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.avatar-xl {
    width: 6rem;
    height: 6rem;
}
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
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
}
.timeline-point-primary {
    background-color: #696cff;
}
.timeline-point-success {
    background-color: #71dd37;
}
.cursor-pointer {
    cursor: pointer;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 56
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

        // line 57
        yield "    <div class=\"app-brand demo\">
        <a href=\"";
        // line 58
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        } else {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        }
        yield "\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <i class=\"bx bx-car fs-3 text-primary\"></i>
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Movable</span>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <li class=\"menu-item\">
            <a href=\"";
        // line 70
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        } else {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        }
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>";
        // line 72
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            yield "Dashboard";
        } else {
            yield "Home";
        }
        yield "</div>
            </a>
        </li>

        <li class=\"menu-item active\">
            <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div>My Profile</div>
            </a>
        </li>

        ";
        // line 83
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 84
            yield "            <li class=\"menu-item\">
                <a href=\"";
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\" class=\"menu-link\">
                    <i class=\"menu-icon tf-icons bx bx-user-circle\"></i>
                    <div>Users Management</div>
                </a>
            </li>
        ";
        }
        // line 91
        yield "    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 94
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

        // line 95
        yield "    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- User -->
            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                        <span class=\"avatar-initial rounded-circle bg-primary\">
                            ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "firstName", [], "any", false, false, false, 102)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "lastName", [], "any", false, false, false, 102)), "html", null, true);
        yield "
                        </span>
                    </div>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"#\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0 me-3\">
                                    <div class=\"avatar\">
                                        <span class=\"avatar-initial rounded-circle bg-primary\">
                                            ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "firstName", [], "any", false, false, false, 113)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "lastName", [], "any", false, false, false, 113)), "html", null, true);
        yield "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <span class=\"fw-semibold d-block\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "fullName", [], "any", false, false, false, 118), "html", null, true);
        yield "</span>
                                    <small class=\"text-muted\">";
        // line 119
        yield (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("Administrator") : ("User"));
        yield "</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li><div class=\"dropdown-divider\"></div></li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\">
                            <i class=\"bx bx-user me-2\"></i>
                            <span class=\"align-middle\">My Profile</span>
                        </a>
                    </li>
                    <li><div class=\"dropdown-divider\"></div></li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 133
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

    // line 144
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

        // line 145
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <h4 class=\"fw-bold py-3 mb-4\">Profile Settings</h4>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Profile Details</h5>
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-start align-items-sm-center gap-4\">
                        <div class=\"avatar avatar-xl\">
                            <span class=\"avatar-initial rounded-circle bg-primary\">
                                ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "firstName", [], "any", false, false, false, 155)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "lastName", [], "any", false, false, false, 155)), "html", null, true);
        yield "
                            </span>
                        </div>
                        <div class=\"button-wrapper\">
                            <h5 class=\"mb-2\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "firstName", [], "any", false, false, false, 159), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "lastName", [], "any", false, false, false, 159), "html", null, true);
        yield "</h5>
                            <p class=\"text-muted mb-0\">Account Type: ";
        // line 160
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            yield "Administrator";
        } else {
            yield "User";
        }
        yield "</p>
                            <p class=\"text-muted mb-0\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "user", [], "any", false, false, false, 161), "email", [], "any", false, false, false, 161), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
                <hr class=\"my-0\" />
                <div class=\"card-body\">
                    <form id=\"formAccountSettings\" method=\"POST\" action=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\">
                        <input type=\"hidden\" name=\"form\" value=\"profile\">
                        <div class=\"row\">
                            <div class=\"mb-3 col-md-6\">
                                <label for=\"firstName\" class=\"form-label\">First Name</label>
                                <input class=\"form-control\" type=\"text\" id=\"firstName\" name=\"firstName\" value=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "user", [], "any", false, false, false, 172), "firstName", [], "any", false, false, false, 172), "html", null, true);
        yield "\" />
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <label for=\"lastName\" class=\"form-label\">Last Name</label>
                                <input class=\"form-control\" type=\"text\" id=\"lastName\" name=\"lastName\" value=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "lastName", [], "any", false, false, false, 176), "html", null, true);
        yield "\" />
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <label for=\"email\" class=\"form-label\">Email</label>
                                <input class=\"form-control\" type=\"text\" id=\"email\" name=\"email\" value=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 180, $this->source); })()), "user", [], "any", false, false, false, 180), "email", [], "any", false, false, false, 180), "html", null, true);
        yield "\" />
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <label for=\"createdAt\" class=\"form-label\">Member Since</label>
                                <input class=\"form-control\" type=\"text\" id=\"createdAt\" value=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), "createdAt", [], "any", false, false, false, 184), "F Y"), "html", null, true);
        yield "\" readonly />
                            </div>
                        </div>
                        <div class=\"mt-2\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Save changes</button>
                            <button type=\"reset\" class=\"btn btn-outline-secondary\">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Activity Timeline -->
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Activity Timeline</h5>
                <div class=\"card-body\">
                    <ul class=\"timeline mb-0\">
                        <li class=\"timeline-item mb-4\">
                            <span class=\"timeline-point timeline-point-primary\">
                                <i class=\"bx bx-user\"></i>
                            </span>
                            <div class=\"timeline-event\">
                                <div class=\"timeline-header mb-1\">
                                    <h6 class=\"mb-0\">Account Created</h6>
                                    <small class=\"text-muted\">";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 207, $this->source); })()), "user", [], "any", false, false, false, 207), "createdAt", [], "any", false, false, false, 207), "F Y"), "html", null, true);
        yield "</small>
                                </div>
                                <p class=\"mb-2\">Account registration completed successfully</p>
                            </div>
                        </li>
                        <li class=\"timeline-item mb-4\">
                            <span class=\"timeline-point timeline-point-success\">
                                <i class=\"bx bx-check\"></i>
                            </span>
                            <div class=\"timeline-event\">
                                <div class=\"timeline-header mb-1\">
                                    <h6 class=\"mb-0\">Last Login</h6>
                                    <small class=\"text-muted\">";
        // line 219
        ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 219, $this->source); })()), "user", [], "any", false, false, false, 219), "lastLogin", [], "any", false, false, false, 219)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 219, $this->source); })()), "user", [], "any", false, false, false, 219), "lastLogin", [], "any", false, false, false, 219), "Y-m-d H:i"), "html", null, true)) : (yield "Never"));
        yield "</small>
                                </div>
                                <p class=\"mb-0\">Last successful login to your account</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Security Settings -->
            <div class=\"card\">
                <h5 class=\"card-header\">Change Password</h5>
                <div class=\"card-body\">
                    <form id=\"formPasswordChange\" method=\"POST\" action=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\">
                        <input type=\"hidden\" name=\"form\" value=\"password\">
                        <div class=\"row\">
                            <div class=\"mb-3 col-md-6\">
                                <label class=\"form-label\" for=\"currentPassword\">Current Password</label>
                                <div class=\"input-group input-group-merge\">
                                    <input type=\"password\" class=\"form-control\" id=\"currentPassword\" 
                                           name=\"currentPassword\" placeholder=\"••••••••\" />
                                    <span class=\"input-group-text cursor-pointer\"><i class=\"bx bx-hide\"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"mb-3 col-md-6\">
                                <label class=\"form-label\" for=\"newPassword\">New Password</label>
                                <div class=\"input-group input-group-merge\">
                                    <input type=\"password\" class=\"form-control\" id=\"newPassword\" 
                                           name=\"newPassword\" placeholder=\"••••••••\" />
                                    <span class=\"input-group-text cursor-pointer\"><i class=\"bx bx-hide\"></i></span>
                                </div>
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <label class=\"form-label\" for=\"confirmPassword\">Confirm New Password</label>
                                <div class=\"input-group input-group-merge\">
                                    <input type=\"password\" class=\"form-control\" id=\"confirmPassword\" 
                                           name=\"confirmPassword\" placeholder=\"••••••••\" />
                                    <span class=\"input-group-text cursor-pointer\"><i class=\"bx bx-hide\"></i></span>
                                </div>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary me-2\">Change Password</button>
                    </form>
                </div>
            </div>

            <!-- My Claims -->
            <div class=\"card mb-4\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <span>My Claims</span>
                    <a href=\"";
        // line 271
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-primary btn-sm\">
                        <i class=\"bx bx-plus me-1\"></i> Create New Claim
                    </a>
                </h5>
                <div class=\"card-body\">
                    ";
        // line 276
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 276, $this->source); })()), "user", [], "any", false, false, false, 276), "reclamations", [], "any", false, false, false, 276)) > 0)) {
            // line 277
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 289
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 289, $this->source); })()), "user", [], "any", false, false, false, 289), "reclamations", [], "any", false, false, false, 289));
            foreach ($context['_seq'] as $context["_key"] => $context["claim"]) {
                // line 290
                yield "                                        <tr>
                                            <td>";
                // line 291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "title", [], "any", false, false, false, 291), "html", null, true);
                yield "</td>
                                            <td><span class=\"badge bg-label-primary\">";
                // line 292
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "category", [], "any", false, false, false, 292), "html", null, true);
                yield "</span></td>
                                            <td>
                                                ";
                // line 294
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "status", [], "any", false, false, false, 294) == "Pending")) {
                    // line 295
                    yield "                                                    <span class=\"badge bg-label-warning\">Pending</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 296
$context["claim"], "status", [], "any", false, false, false, 296) == "Resolved")) {
                    // line 297
                    yield "                                                    <span class=\"badge bg-label-success\">Resolved</span>
                                                ";
                } else {
                    // line 299
                    yield "                                                    <span class=\"badge bg-label-danger\">Rejected</span>
                                                ";
                }
                // line 301
                yield "                                            </td>
                                            <td>";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "creationDate", [], "any", false, false, false, 302), "Y-m-d"), "html", null, true);
                yield "</td>
                                            <td>
                                                <div class=\"dropdown\">
                                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                    </button>
                                                    <div class=\"dropdown-menu\">
                                                        <a class=\"dropdown-item\" href=\"";
                // line 309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 309)]), "html", null, true);
                yield "\">
                                                            <i class=\"bx bx-show-alt me-1\"></i> View
                                                        </a>
                                                        ";
                // line 312
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "status", [], "any", false, false, false, 312) == "Pending")) {
                    // line 313
                    yield "                                                            <a class=\"dropdown-item\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 313)]), "html", null, true);
                    yield "\">
                                                                <i class=\"bx bx-edit-alt me-1\"></i> Edit
                                                            </a>
                                                            <form method=\"post\" action=\"";
                    // line 316
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 316)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Are you sure you want to delete this claim?');\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 317
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 317))), "html", null, true);
                    yield "\">
                                                                <button class=\"dropdown-item\">
                                                                    <i class=\"bx bx-trash me-1\"></i> Delete
                                                                </button>
                                                            </form>
                                                        ";
                }
                // line 323
                yield "                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['claim'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 332
            yield "                        <div class=\"text-center py-4\">
                            <div class=\"mb-3\">
                                <i class=\"bx bx-message-square-detail bx-lg text-primary\"></i>
                            </div>
                            <h5>No Claims Found</h5>
                            <p class=\"text-muted\">You haven't submitted any claims yet.</p>
                            <a href=\"";
            // line 338
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
            yield "\" class=\"btn btn-primary\">
                                <i class=\"bx bx-plus me-1\"></i> Submit Your First Claim
                            </a>
                        </div>
                    ";
        }
        // line 343
        yield "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 350
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

        // line 351
        yield "    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
        <div class=\"mb-2 mb-md-0\">
            © ";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Movable. All rights reserved.
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 358
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

        // line 359
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility
    document.querySelectorAll('.input-group-text').forEach(function(element) {
        element.addEventListener('click', function() {
            const input = this.parentNode.querySelector('input');
            const icon = this.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('bx-hide');
                icon.classList.add('bx-show');
            } else {
                input.type = 'password';
                icon.classList.remove('bx-show');
                icon.classList.add('bx-hide');
            }
        });
    });

    // Reset form handling
    document.querySelector('button[type=\"reset\"]').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('formAccountSettings').reset();
    });
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
        return "user/profile.html.twig";
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
        return array (  720 => 359,  707 => 358,  692 => 353,  688 => 351,  675 => 350,  659 => 343,  651 => 338,  643 => 332,  637 => 328,  627 => 323,  618 => 317,  614 => 316,  607 => 313,  605 => 312,  599 => 309,  589 => 302,  586 => 301,  582 => 299,  578 => 297,  576 => 296,  573 => 295,  571 => 294,  566 => 292,  562 => 291,  559 => 290,  555 => 289,  541 => 277,  539 => 276,  531 => 271,  489 => 232,  473 => 219,  458 => 207,  432 => 184,  425 => 180,  418 => 176,  411 => 172,  403 => 167,  394 => 161,  386 => 160,  380 => 159,  372 => 155,  360 => 145,  347 => 144,  326 => 133,  316 => 126,  306 => 119,  302 => 118,  293 => 113,  278 => 102,  269 => 95,  256 => 94,  244 => 91,  235 => 85,  232 => 84,  230 => 83,  221 => 77,  209 => 72,  200 => 70,  181 => 58,  178 => 57,  165 => 56,  105 => 6,  92 => 5,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base1.html.twig\" %}

{% block title %}My Profile - Movable{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.avatar-xl {
    width: 6rem;
    height: 6rem;
}
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
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
}
.timeline-point-primary {
    background-color: #696cff;
}
.timeline-point-success {
    background-color: #71dd37;
}
.cursor-pointer {
    cursor: pointer;
}
</style>
{% endblock %}

{% block sidebar %}
    <div class=\"app-brand demo\">
        <a href=\"{% if is_granted('ROLE_ADMIN') %}{{ path('app_dashboard') }}{% else %}{{ path('app_front_home') }}{% endif %}\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <i class=\"bx bx-car fs-3 text-primary\"></i>
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Movable</span>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <li class=\"menu-item\">
            <a href=\"{% if is_granted('ROLE_ADMIN') %}{{ path('app_dashboard') }}{% else %}{{ path('app_front_home') }}{% endif %}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>{% if is_granted('ROLE_ADMIN') %}Dashboard{% else %}Home{% endif %}</div>
            </a>
        </li>

        <li class=\"menu-item active\">
            <a href=\"{{ path('app_user_profile') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div>My Profile</div>
            </a>
        </li>

        {% if is_granted('ROLE_ADMIN') %}
            <li class=\"menu-item\">
                <a href=\"{{ path('app_admin_users') }}\" class=\"menu-link\">
                    <i class=\"menu-icon tf-icons bx bx-user-circle\"></i>
                    <div>Users Management</div>
                </a>
            </li>
        {% endif %}
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
                                    <div class=\"avatar\">
                                        <span class=\"avatar-initial rounded-circle bg-primary\">
                                            {{ app.user.firstName|first }}{{ app.user.lastName|first }}
                                        </span>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <span class=\"fw-semibold d-block\">{{ app.user.fullName }}</span>
                                    <small class=\"text-muted\">{{ is_granted('ROLE_ADMIN') ? 'Administrator' : 'User' }}</small>
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
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <h4 class=\"fw-bold py-3 mb-4\">Profile Settings</h4>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Profile Details</h5>
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-start align-items-sm-center gap-4\">
                        <div class=\"avatar avatar-xl\">
                            <span class=\"avatar-initial rounded-circle bg-primary\">
                                {{ app.user.firstName|first }}{{ app.user.lastName|first }}
                            </span>
                        </div>
                        <div class=\"button-wrapper\">
                            <h5 class=\"mb-2\">{{ app.user.firstName }} {{ app.user.lastName }}</h5>
                            <p class=\"text-muted mb-0\">Account Type: {% if is_granted(\"ROLE_ADMIN\") %}Administrator{% else %}User{% endif %}</p>
                            <p class=\"text-muted mb-0\">{{ app.user.email }}</p>
                        </div>
                    </div>
                </div>
                <hr class=\"my-0\" />
                <div class=\"card-body\">
                    <form id=\"formAccountSettings\" method=\"POST\" action=\"{{ path('app_user_profile') }}\">
                        <input type=\"hidden\" name=\"form\" value=\"profile\">
                        <div class=\"row\">
                            <div class=\"mb-3 col-md-6\">
                                <label for=\"firstName\" class=\"form-label\">First Name</label>
                                <input class=\"form-control\" type=\"text\" id=\"firstName\" name=\"firstName\" value=\"{{ app.user.firstName }}\" />
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <label for=\"lastName\" class=\"form-label\">Last Name</label>
                                <input class=\"form-control\" type=\"text\" id=\"lastName\" name=\"lastName\" value=\"{{ app.user.lastName }}\" />
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <label for=\"email\" class=\"form-label\">Email</label>
                                <input class=\"form-control\" type=\"text\" id=\"email\" name=\"email\" value=\"{{ app.user.email }}\" />
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <label for=\"createdAt\" class=\"form-label\">Member Since</label>
                                <input class=\"form-control\" type=\"text\" id=\"createdAt\" value=\"{{ app.user.createdAt|date('F Y') }}\" readonly />
                            </div>
                        </div>
                        <div class=\"mt-2\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Save changes</button>
                            <button type=\"reset\" class=\"btn btn-outline-secondary\">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Activity Timeline -->
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Activity Timeline</h5>
                <div class=\"card-body\">
                    <ul class=\"timeline mb-0\">
                        <li class=\"timeline-item mb-4\">
                            <span class=\"timeline-point timeline-point-primary\">
                                <i class=\"bx bx-user\"></i>
                            </span>
                            <div class=\"timeline-event\">
                                <div class=\"timeline-header mb-1\">
                                    <h6 class=\"mb-0\">Account Created</h6>
                                    <small class=\"text-muted\">{{ app.user.createdAt|date('F Y') }}</small>
                                </div>
                                <p class=\"mb-2\">Account registration completed successfully</p>
                            </div>
                        </li>
                        <li class=\"timeline-item mb-4\">
                            <span class=\"timeline-point timeline-point-success\">
                                <i class=\"bx bx-check\"></i>
                            </span>
                            <div class=\"timeline-event\">
                                <div class=\"timeline-header mb-1\">
                                    <h6 class=\"mb-0\">Last Login</h6>
                                    <small class=\"text-muted\">{{ app.user.lastLogin ? app.user.lastLogin|date('Y-m-d H:i') : 'Never' }}</small>
                                </div>
                                <p class=\"mb-0\">Last successful login to your account</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Security Settings -->
            <div class=\"card\">
                <h5 class=\"card-header\">Change Password</h5>
                <div class=\"card-body\">
                    <form id=\"formPasswordChange\" method=\"POST\" action=\"{{ path('app_user_profile') }}\">
                        <input type=\"hidden\" name=\"form\" value=\"password\">
                        <div class=\"row\">
                            <div class=\"mb-3 col-md-6\">
                                <label class=\"form-label\" for=\"currentPassword\">Current Password</label>
                                <div class=\"input-group input-group-merge\">
                                    <input type=\"password\" class=\"form-control\" id=\"currentPassword\" 
                                           name=\"currentPassword\" placeholder=\"••••••••\" />
                                    <span class=\"input-group-text cursor-pointer\"><i class=\"bx bx-hide\"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"mb-3 col-md-6\">
                                <label class=\"form-label\" for=\"newPassword\">New Password</label>
                                <div class=\"input-group input-group-merge\">
                                    <input type=\"password\" class=\"form-control\" id=\"newPassword\" 
                                           name=\"newPassword\" placeholder=\"••••••••\" />
                                    <span class=\"input-group-text cursor-pointer\"><i class=\"bx bx-hide\"></i></span>
                                </div>
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <label class=\"form-label\" for=\"confirmPassword\">Confirm New Password</label>
                                <div class=\"input-group input-group-merge\">
                                    <input type=\"password\" class=\"form-control\" id=\"confirmPassword\" 
                                           name=\"confirmPassword\" placeholder=\"••••••••\" />
                                    <span class=\"input-group-text cursor-pointer\"><i class=\"bx bx-hide\"></i></span>
                                </div>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary me-2\">Change Password</button>
                    </form>
                </div>
            </div>

            <!-- My Claims -->
            <div class=\"card mb-4\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    <span>My Claims</span>
                    <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary btn-sm\">
                        <i class=\"bx bx-plus me-1\"></i> Create New Claim
                    </a>
                </h5>
                <div class=\"card-body\">
                    {% if app.user.reclamations|length > 0 %}
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for claim in app.user.reclamations %}
                                        <tr>
                                            <td>{{ claim.title }}</td>
                                            <td><span class=\"badge bg-label-primary\">{{ claim.category }}</span></td>
                                            <td>
                                                {% if claim.status == 'Pending' %}
                                                    <span class=\"badge bg-label-warning\">Pending</span>
                                                {% elseif claim.status == 'Resolved' %}
                                                    <span class=\"badge bg-label-success\">Resolved</span>
                                                {% else %}
                                                    <span class=\"badge bg-label-danger\">Rejected</span>
                                                {% endif %}
                                            </td>
                                            <td>{{ claim.creationDate|date('Y-m-d') }}</td>
                                            <td>
                                                <div class=\"dropdown\">
                                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                    </button>
                                                    <div class=\"dropdown-menu\">
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_reclamation_show', {'id': claim.id}) }}\">
                                                            <i class=\"bx bx-show-alt me-1\"></i> View
                                                        </a>
                                                        {% if claim.status == 'Pending' %}
                                                            <a class=\"dropdown-item\" href=\"{{ path('app_reclamation_edit', {'id': claim.id}) }}\">
                                                                <i class=\"bx bx-edit-alt me-1\"></i> Edit
                                                            </a>
                                                            <form method=\"post\" action=\"{{ path('app_reclamation_delete', {'id': claim.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this claim?');\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ claim.id) }}\">
                                                                <button class=\"dropdown-item\">
                                                                    <i class=\"bx bx-trash me-1\"></i> Delete
                                                                </button>
                                                            </form>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        <div class=\"text-center py-4\">
                            <div class=\"mb-3\">
                                <i class=\"bx bx-message-square-detail bx-lg text-primary\"></i>
                            </div>
                            <h5>No Claims Found</h5>
                            <p class=\"text-muted\">You haven't submitted any claims yet.</p>
                            <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary\">
                                <i class=\"bx bx-plus me-1\"></i> Submit Your First Claim
                            </a>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block footer %}
    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
        <div class=\"mb-2 mb-md-0\">
            © {{ \"now\"|date(\"Y\") }} Movable. All rights reserved.
        </div>
    </div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility
    document.querySelectorAll('.input-group-text').forEach(function(element) {
        element.addEventListener('click', function() {
            const input = this.parentNode.querySelector('input');
            const icon = this.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('bx-hide');
                icon.classList.add('bx-show');
            } else {
                input.type = 'password';
                icon.classList.remove('bx-show');
                icon.classList.add('bx-hide');
            }
        });
    });

    // Reset form handling
    document.querySelector('button[type=\"reset\"]').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('formAccountSettings').reset();
    });
});
</script>
{% endblock %}
", "user/profile.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\user\\profile.html.twig");
    }
}
