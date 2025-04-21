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

/* layouts/default.html.twig */
class __TwigTemplate_9dc1f9d0ed98d52ca6142ecc255e0232 extends Template
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

        $this->parent = false;

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

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/default.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\" />

    <!-- Icons -->
    <link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/boxicons/css/boxicons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/core.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/theme-default.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/demo.css"), "html", null, true);
        yield "\" />

    ";
        // line 25
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 26
        yield "</head>

<body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Menu -->
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
                ";
        // line 34
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 44
        yield "            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                <nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
                    ";
        // line 51
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 139
        yield "                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        ";
        // line 146
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 147
        yield "                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        ";
        // line 152
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 159
        yield "                    </footer>
                    <!-- / Footer -->
                </div>
                <!-- / Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 176
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 177
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "Movable";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
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

        // line 35
        yield "                <div class=\"app-brand demo\">
                    <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"app-brand-link\">
                        <span class=\"app-brand-logo demo\">
                            <i class=\"bx bx-car text-primary fs-2\"></i>
                        </span>
                        <span class=\"app-brand-text demo menu-text fw-bold ms-2\">Movable</span>
                    </a>
                </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 51
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

        // line 52
        yield "                    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
                        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                            <!-- User -->
                            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                                    <div class=\"avatar avatar-online\">
                                        ";
        // line 58
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)) {
            // line 59
            yield "                                            <span class=\"avatar-initial rounded-circle bg-primary\">
                                                ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "firstName", [], "any", false, false, false, 60)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "lastName", [], "any", false, false, false, 60)), "html", null, true);
            yield "
                                            </span>
                                        ";
        } else {
            // line 63
            yield "                                            <span class=\"avatar-initial rounded-circle bg-primary\">
                                                <i class=\"bx bx-user\"></i>
                                            </span>
                                        ";
        }
        // line 67
        yield "                                    </div>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) {
            // line 71
            yield "                                        <li>
                                            <a class=\"dropdown-item\" href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\">
                                                <div class=\"d-flex\">
                                                    <div class=\"flex-shrink-0 me-3\">
                                                        <div class=\"avatar\">
                                                            <span class=\"avatar-initial rounded-circle bg-primary\">
                                                                ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "firstName", [], "any", false, false, false, 77)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "lastName", [], "any", false, false, false, 77)), "html", null, true);
            yield "
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class=\"flex-grow-1\">
                                                        <span class=\"fw-semibold d-block\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "fullName", [], "any", false, false, false, 82), "html", null, true);
            yield "</span>
                                                        <small class=\"text-muted\">
                                                            ";
            // line 84
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "role", [], "any", false, false, false, 84) == "ADMIN")) {
                yield "Administrator
                                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 85
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "role", [], "any", false, false, false, 85) == "DRIVER")) {
                yield "Driver
                                                            ";
            } else {
                // line 86
                yield "User";
            }
            // line 87
            yield "                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li><div class=\"dropdown-divider\"></div></li>
                                        ";
            // line 93
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 94
                yield "                                            <li>
                                                <a class=\"dropdown-item\" href=\"";
                // line 95
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                yield "\">
                                                    <i class=\"bx bx-command me-2\"></i>
                                                    <span class=\"align-middle\">Admin Dashboard</span>
                                                </a>
                                            </li>
                                        ";
            }
            // line 101
            yield "                                        <li>
                                            <a class=\"dropdown-item\" href=\"";
            // line 102
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\">
                                                <i class=\"bx bx-user me-2\"></i>
                                                <span class=\"align-middle\">My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"dropdown-item\" href=\"";
            // line 108
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_settings");
            yield "\">
                                                <i class=\"bx bx-cog me-2\"></i>
                                                <span class=\"align-middle\">Settings</span>
                                            </a>
                                        </li>
                                        <li><div class=\"dropdown-divider\"></div></li>
                                        <li>
                                            <a class=\"dropdown-item\" href=\"";
            // line 115
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                                <i class=\"bx bx-power-off me-2\"></i>
                                                <span class=\"align-middle\">Log Out</span>
                                            </a>
                                        </li>
                                    ";
        } else {
            // line 121
            yield "                                        <li>
                                            <a class=\"dropdown-item\" href=\"";
            // line 122
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                                                <i class=\"bx bx-log-in me-2\"></i>
                                                <span class=\"align-middle\">Login</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class=\"dropdown-item\" href=\"";
            // line 128
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">
                                                <i class=\"bx bx-user-plus me-2\"></i>
                                                <span class=\"align-middle\">Register</span>
                                            </a>
                                        </li>
                                    ";
        }
        // line 134
        yield "                                </ul>
                            </li>
                        </ul>
                    </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 146
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 152
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

        // line 153
        yield "                        <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
                            <div class=\"mb-2 mb-md-0\">
                                © ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Movable, All rights reserved.
                            </div>
                        </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 176
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/default.html.twig";
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
        return array (  499 => 176,  484 => 155,  480 => 153,  467 => 152,  445 => 146,  430 => 134,  421 => 128,  412 => 122,  409 => 121,  400 => 115,  390 => 108,  381 => 102,  378 => 101,  369 => 95,  366 => 94,  364 => 93,  356 => 87,  353 => 86,  348 => 85,  344 => 84,  339 => 82,  330 => 77,  322 => 72,  319 => 71,  317 => 70,  312 => 67,  306 => 63,  299 => 60,  296 => 59,  294 => 58,  286 => 52,  273 => 51,  254 => 36,  251 => 35,  238 => 34,  216 => 25,  193 => 7,  180 => 177,  178 => 176,  173 => 174,  169 => 173,  165 => 172,  161 => 171,  157 => 170,  144 => 159,  142 => 152,  135 => 147,  133 => 146,  124 => 139,  122 => 51,  113 => 44,  111 => 34,  101 => 26,  99 => 25,  94 => 23,  90 => 22,  86 => 21,  80 => 18,  69 => 10,  63 => 7,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"light-style layout-menu-fixed\" dir=\"ltr\" data-theme=\"theme-default\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>{% block title %}Movable{% endblock %}</title>

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon/favicon.ico') }}\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\" />

    <!-- Icons -->
    <link href=\"{{ asset('vendor/libs/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/core.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/theme-default.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/demo.css') }}\" />

    {% block stylesheets %}{% endblock %}
</head>

<body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Menu -->
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
                {% block sidebar %}
                <div class=\"app-brand demo\">
                    <a href=\"{{ path('app_front_home') }}\" class=\"app-brand-link\">
                        <span class=\"app-brand-logo demo\">
                            <i class=\"bx bx-car text-primary fs-2\"></i>
                        </span>
                        <span class=\"app-brand-text demo menu-text fw-bold ms-2\">Movable</span>
                    </a>
                </div>
                {% endblock %}
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                <nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
                    {% block navbar %}
                    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
                        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                            <!-- User -->
                            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                                    <div class=\"avatar avatar-online\">
                                        {% if app.user %}
                                            <span class=\"avatar-initial rounded-circle bg-primary\">
                                                {{ app.user.firstName|first }}{{ app.user.lastName|first }}
                                            </span>
                                        {% else %}
                                            <span class=\"avatar-initial rounded-circle bg-primary\">
                                                <i class=\"bx bx-user\"></i>
                                            </span>
                                        {% endif %}
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
                                                        <small class=\"text-muted\">
                                                            {% if app.user.role == 'ADMIN' %}Administrator
                                                            {% elseif app.user.role == 'DRIVER' %}Driver
                                                            {% else %}User{% endif %}
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li><div class=\"dropdown-divider\"></div></li>
                                        {% if is_granted('ROLE_ADMIN') %}
                                            <li>
                                                <a class=\"dropdown-item\" href=\"{{ path('app_admin_dashboard') }}\">
                                                    <i class=\"bx bx-command me-2\"></i>
                                                    <span class=\"align-middle\">Admin Dashboard</span>
                                                </a>
                                            </li>
                                        {% endif %}
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
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        {% block body %}{% endblock %}
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        {% block footer %}
                        <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
                            <div class=\"mb-2 mb-md-0\">
                                © {{ \"now\"|date(\"Y\") }} Movable, All rights reserved.
                            </div>
                        </div>
                        {% endblock %}
                    </footer>
                    <!-- / Footer -->
                </div>
                <!-- / Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src=\"{{ asset('vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>

    {% block javascripts %}{% endblock %}
</body>
</html>
", "layouts/default.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\layouts\\default.html.twig");
    }
}
