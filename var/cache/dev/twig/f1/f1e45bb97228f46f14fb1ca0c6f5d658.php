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

/* front/base.html.twig */
class __TwigTemplate_4787a67c222d56461068ae90f4423dfa extends Template
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
            'hero_banner' => [$this, 'block_hero_banner'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    ";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 7
        yield "    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    ";
        // line 12
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        yield "\" rel=\"icon\">

    ";
        // line 15
        yield "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap\" rel=\"stylesheet\"> 

    ";
        // line 20
        yield "    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    ";
        // line 23
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 106
        yield "</head>

<body>
    <div class=\"container-xxl bg-white p-0\">
        ";
        // line 111
        yield "        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"visually-hidden\">Loading...</span>
            </div>
        </div>
        ";
        // line 117
        yield "
        ";
        // line 119
        yield "        <div class=\"container-xxl position-relative p-0\">
            <nav class=\"navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0\">
                <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"navbar-brand p-0\">
                    <h1 class=\"m-0\">Movable</h1>
                    ";
        // line 124
        yield "                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav mx-auto py-0\">
                        <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "request", [], "any", false, false, false, 130), "attributes", [], "any", false, false, false, 130), "get", ["_route"], "method", false, false, false, 130) == "app_front_home")) ? ("active") : (""));
        yield "\">Home</a>
                        <a href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "attributes", [], "any", false, false, false, 131), "get", ["_route"], "method", false, false, false, 131) == "app_reservation_new")) ? ("active") : (""));
        yield "\">Book a Ride</a>
                        <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_list");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "attributes", [], "any", false, false, false, 132), "get", ["_route"], "method", false, false, false, 132) == "agent_list")) ? ("active") : (""));
        yield "\">
                            View Agents
                        </a>

                        <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_destination_cards");
        yield "\" class=\"nav-item nav-link\">Destinations</a>
                        <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"nav-item nav-link ";
        yield (((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "request", [], "any", false, false, false, 137), "attributes", [], "any", false, false, false, 137), "get", ["_route"], "method", false, false, false, 137)) && is_string($__internal_compile_1 = "app_event_") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? ("active") : (""));
        yield "\">Events</a>
                        <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transport_list");
        yield "\" class=\"nav-item nav-link\">Transportation</a>
                        <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_contact");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "request", [], "any", false, false, false, 139), "attributes", [], "any", false, false, false, 139), "get", ["_route"], "method", false, false, false, 139) == "app_front_contact")) ? ("active") : (""));
        yield "\">Contact</a>
                    </div>
                    
                    <div>
                        ";
        // line 143
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 144
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            yield "\" class=\"dashboard-link d-none d-lg-inline-block\">
                                <i class=\"fa fa-tachometer-alt me-1\"></i> Dashboard
                            </a>
                        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 148
            yield "                            <div class=\"dropdown d-none d-lg-inline-block\">
                                <button class=\"btn btn-primary rounded-pill py-2 px-4 dropdown-toggle\" type=\"button\" id=\"userDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fa fa-user me-1\"></i> ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "firstName", [], "any", false, false, false, 150), "html", null, true);
            yield "
                                </button>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"userDropdown\">
                                    <li><a class=\"dropdown-item\" href=\"";
            // line 153
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            yield "\"><i class=\"fa fa-id-card me-2\"></i>Profile</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
            // line 154
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_settings");
            yield "\"><i class=\"fa fa-cog me-2\"></i>Settings</a></li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li><a class=\"dropdown-item\" href=\"";
            // line 156
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"><i class=\"fa fa-sign-out-alt me-2\"></i>Logout</a></li>
                                </ul>
                            </div>
                        ";
        } else {
            // line 160
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-secondary rounded-pill py-2 px-4 d-none d-lg-inline-block\">
                                <i class=\"fa fa-sign-in-alt me-1\"></i> Login
                            </a>
                        ";
        }
        // line 164
        yield "                    </div>
                </div>
            </nav>

            ";
        // line 168
        yield from $this->unwrap()->yieldBlock('hero_banner', $context, $blocks);
        // line 171
        yield "        </div>
        ";
        // line 173
        yield "
        ";
        // line 174
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 177
        yield "
        ";
        // line 179
        yield "        <div class=\"container-fluid bg-primary text-light footer wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"container py-5 px-lg-5\">
                <div class=\"row g-5\">
                    <div class=\"col-md-6 col-lg-3\">
                        <p class=\"section-title text-white h5 mb-4\">Address<span></span></p>
                        <p><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                        <p><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                        <p><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                        <div class=\"d-flex pt-2\">
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <p class=\"section-title text-white h5 mb-4\">Quick Link<span></span></p>
                        <a class=\"btn btn-link\" href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a>
                        <a class=\"btn btn-link\" href=\"";
        // line 197
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_services");
        yield "\">Services</a>
                        <a class=\"btn btn-link\" href=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_portfolio");
        yield "\">Portfolio</a>
                        <a class=\"btn btn-link\" href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\">Events</a>
                        <a class=\"btn btn-link\" href=\"";
        // line 200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_contact");
        yield "\">Contact</a>
                        <a class=\"btn btn-link\" href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Login</a>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <p class=\"section-title text-white h5 mb-4\">Gallery<span></span></p>
                        <div class=\"row g-2\">
                            <div class=\"col-4\">
                                <img class=\"img-fluid\" src=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio-1.jpg"), "html", null, true);
        yield "\" alt=\"Image\">
                            </div>
                            <div class=\"col-4\">
                                <img class=\"img-fluid\" src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio-2.jpg"), "html", null, true);
        yield "\" alt=\"Image\">
                            </div>
                            <div class=\"col-4\">
                                <img class=\"img-fluid\" src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio-3.jpg"), "html", null, true);
        yield "\" alt=\"Image\">
                            </div>
                            <div class=\"col-4\">
                                <img class=\"img-fluid\" src=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio-4.jpg"), "html", null, true);
        yield "\" alt=\"Image\">
                            </div>
                            <div class=\"col-4\">
                                <img class=\"img-fluid\" src=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio-5.jpg"), "html", null, true);
        yield "\" alt=\"Image\">
                            </div>
                            <div class=\"col-4\">
                                <img class=\"img-fluid\" src=\"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portfolio-6.jpg"), "html", null, true);
        yield "\" alt=\"Image\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <p class=\"section-title text-white h5 mb-4\">Newsletter<span></span></p>
                        <p>Subscribe to our newsletter to receive the latest updates and news</p>
                        <div class=\"position-relative w-100 mt-3\">
                            <input class=\"form-control border-0 rounded-pill w-100 ps-4 pe-5\" type=\"text\" placeholder=\"Your Email\" style=\"height: 48px;\">
                            <button type=\"button\" class=\"btn shadow-none position-absolute top-0 end-0 mt-1 me-2\"><i class=\"fa fa-paper-plane text-primary fs-4\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container px-lg-5\">
                <div class=\"copyright\">
                    <div class=\"row\">
                        <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                            &copy; <a class=\"border-bottom\" href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Movable</a>, All Rights Reserved. 
                        </div>
                        <div class=\"col-md-6 text-center text-md-end\">
                            <div class=\"footer-menu\">
                                <a href=\"";
        // line 244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a>
                                <a href=\"\">Cookies</a>
                                <a href=\"\">Help</a>
                                <a href=\"\">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 255
        yield "
        ";
        // line 257
        yield "        <a href=\"#\" class=\"btn btn-lg btn-secondary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

";
        // line 260
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 297
        yield "</body>

</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "<title>Movable - Digital Agency</title>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        // line 24
        yield "    ";
        // line 25
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/css/lightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        // line 30
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        // line 33
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    
    ";
        // line 36
        yield "    <style>
        :root {
            --primary: #0066cc;      /* Vibrant blue */
            --primary-light: #1a75d2;
            --primary-dark: #004c99;
            --secondary: #ff7733;    /* Better balanced orange */
            --secondary-light: #ff8c4d;
            --secondary-dark: #e65c1a;
        }
        /* Primary Colors - Vibrant Blue */
        .text-primary { color: var(--primary) !important; }
        .bg-primary { background-color: var(--primary) !important; }
        .btn-primary { background-color: var(--primary); border-color: var(--primary); }
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active { 
            background-color: var(--primary-dark) !important; 
            border-color: var(--primary-dark) !important; 
        }
        
        /* Secondary Colors - Soft Orange */
        .text-secondary { color: var(--secondary) !important; }
        .bg-secondary { background-color: var(--secondary) !important; }
        .btn-secondary { background-color: var(--secondary); border-color: var(--secondary); }
        .hero-header, .page-header, .footer {
            background: linear-gradient(to bottom right, var(--primary), var(--primary-light)) !important;
        }
        
        /* Ensure text remains readable on blue backgrounds */
        .text-white, .btn-light {
            color: #ffffff !important;
        }
        
        /* Fix contrast issues */
        .btn-light {
            background-color: #ffffff;
            color: var(--primary) !important;
        }
        
        .btn-light:hover {
            background-color: #f8f9fa;
            color: var(--primary-dark) !important;
        }
        
        /* Ensure text contrast */
        .bg-light {
            background-color: #f8f9fa !important;
        }
        
        .text-light {
            color: #f8f9fa !important;
        }
        
        /* Dashboard Link Button */
        .dashboard-link {
            background-color: var(--secondary);
            color: white !important;
            border-radius: 30px;
            padding: 8px 16px;
            font-weight: 500;
            transition: all 0.3s;
            display: inline-block;
            text-decoration: none;
        }
        .dashboard-link:hover {
            background-color: var(--secondary-dark);
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 168
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_banner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero_banner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero_banner"));

        // line 169
        yield "            ";
        // line 170
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 174
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 175
        yield "        ";
        // line 176
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 260
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

        // line 261
        yield "    ";
        // line 262
        yield "    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    
    ";
        // line 266
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/isotope/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/js/lightbox.min.js"), "html", null, true);
        yield "\"></script>
    
    ";
        // line 274
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 277
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
    
    ";
        // line 280
        yield "    <script>
        // Ensure spinner is hidden
        window.addEventListener('load', function() {
            // Hide spinner after page loads
            if (document.getElementById('spinner')) {
                document.getElementById('spinner').classList.remove('show');
            }
            
            // Fail-safe: Force hide spinner after 2 seconds if still showing
            setTimeout(function() {
                if (document.getElementById('spinner')) {
                    document.getElementById('spinner').style.display = 'none';
                }
            }, 2000);
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
        return "front/base.html.twig";
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
        return array (  625 => 280,  619 => 277,  613 => 274,  608 => 271,  604 => 270,  600 => 269,  596 => 268,  592 => 267,  587 => 266,  582 => 262,  580 => 261,  567 => 260,  556 => 176,  554 => 175,  541 => 174,  530 => 170,  528 => 169,  515 => 168,  435 => 36,  429 => 33,  423 => 30,  418 => 27,  414 => 26,  409 => 25,  407 => 24,  394 => 23,  371 => 6,  356 => 297,  354 => 260,  349 => 257,  346 => 255,  333 => 244,  326 => 240,  305 => 222,  299 => 219,  293 => 216,  287 => 213,  281 => 210,  275 => 207,  266 => 201,  262 => 200,  258 => 199,  254 => 198,  250 => 197,  246 => 196,  227 => 179,  224 => 177,  222 => 174,  219 => 173,  216 => 171,  214 => 168,  208 => 164,  200 => 160,  193 => 156,  188 => 154,  184 => 153,  178 => 150,  174 => 148,  166 => 144,  164 => 143,  155 => 139,  151 => 138,  145 => 137,  141 => 136,  132 => 132,  126 => 131,  120 => 130,  112 => 124,  107 => 121,  103 => 119,  100 => 117,  93 => 111,  87 => 106,  85 => 23,  80 => 20,  74 => 15,  68 => 12,  62 => 7,  60 => 6,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    {% block title %}<title>Movable - Digital Agency</title>{% endblock %}
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    {# Favicon #}
    <link href=\"{{ asset('img/favicon.ico') }}\" rel=\"icon\">

    {# Google Web Fonts #}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap\" rel=\"stylesheet\"> 

    {# Icon Font Stylesheet #}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    {% block stylesheets %}
    {# Libraries Stylesheet #}
    <link href=\"{{ asset('lib/animate/animate.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/lightbox/css/lightbox.min.css') }}\" rel=\"stylesheet\">

    {# Customized Bootstrap Stylesheet #}
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    {# Template Stylesheet #}
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    
    {# Custom Colors - Light Blue and Soft Orange #}
    <style>
        :root {
            --primary: #0066cc;      /* Vibrant blue */
            --primary-light: #1a75d2;
            --primary-dark: #004c99;
            --secondary: #ff7733;    /* Better balanced orange */
            --secondary-light: #ff8c4d;
            --secondary-dark: #e65c1a;
        }
        /* Primary Colors - Vibrant Blue */
        .text-primary { color: var(--primary) !important; }
        .bg-primary { background-color: var(--primary) !important; }
        .btn-primary { background-color: var(--primary); border-color: var(--primary); }
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active { 
            background-color: var(--primary-dark) !important; 
            border-color: var(--primary-dark) !important; 
        }
        
        /* Secondary Colors - Soft Orange */
        .text-secondary { color: var(--secondary) !important; }
        .bg-secondary { background-color: var(--secondary) !important; }
        .btn-secondary { background-color: var(--secondary); border-color: var(--secondary); }
        .hero-header, .page-header, .footer {
            background: linear-gradient(to bottom right, var(--primary), var(--primary-light)) !important;
        }
        
        /* Ensure text remains readable on blue backgrounds */
        .text-white, .btn-light {
            color: #ffffff !important;
        }
        
        /* Fix contrast issues */
        .btn-light {
            background-color: #ffffff;
            color: var(--primary) !important;
        }
        
        .btn-light:hover {
            background-color: #f8f9fa;
            color: var(--primary-dark) !important;
        }
        
        /* Ensure text contrast */
        .bg-light {
            background-color: #f8f9fa !important;
        }
        
        .text-light {
            color: #f8f9fa !important;
        }
        
        /* Dashboard Link Button */
        .dashboard-link {
            background-color: var(--secondary);
            color: white !important;
            border-radius: 30px;
            padding: 8px 16px;
            font-weight: 500;
            transition: all 0.3s;
            display: inline-block;
            text-decoration: none;
        }
        .dashboard-link:hover {
            background-color: var(--secondary-dark);
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
    {% endblock %}
</head>

<body>
    <div class=\"container-xxl bg-white p-0\">
        {# Spinner Start #}
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"visually-hidden\">Loading...</span>
            </div>
        </div>
        {# Spinner End #}

        {# Navbar & Hero Start #}
        <div class=\"container-xxl position-relative p-0\">
            <nav class=\"navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0\">
                <a href=\"{{ path('app_front_home') }}\" class=\"navbar-brand p-0\">
                    <h1 class=\"m-0\">Movable</h1>
                    {# <img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo\"> #}
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav mx-auto py-0\">
                        <a href=\"{{ path('app_front_home') }}\" class=\"nav-item nav-link {{ app.request.attributes.get('_route') == 'app_front_home' ? 'active' : '' }}\">Home</a>
                        <a href=\"{{ path('app_reservation_new') }}\" class=\"nav-item nav-link {{ app.request.attributes.get('_route') == 'app_reservation_new' ? 'active' : '' }}\">Book a Ride</a>
                        <a href=\"{{ path('agent_list') }}\" class=\"nav-item nav-link {{ app.request.attributes.get('_route') == 'agent_list' ? 'active' : '' }}\">
                            View Agents
                        </a>

                        <a href=\"{{ path('app_destination_cards') }}\" class=\"nav-item nav-link\">Destinations</a>
                        <a href=\"{{ path('app_event_index') }}\" class=\"nav-item nav-link {{ app.request.attributes.get('_route') starts with 'app_event_' ? 'active' : '' }}\">Events</a>
                        <a href=\"{{ path('transport_list') }}\" class=\"nav-item nav-link\">Transportation</a>
                        <a href=\"{{ path('app_front_contact') }}\" class=\"nav-item nav-link {{ app.request.attributes.get('_route') == 'app_front_contact' ? 'active' : '' }}\">Contact</a>
                    </div>
                    
                    <div>
                        {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_dashboard') }}\" class=\"dashboard-link d-none d-lg-inline-block\">
                                <i class=\"fa fa-tachometer-alt me-1\"></i> Dashboard
                            </a>
                        {% elseif is_granted('ROLE_USER') %}
                            <div class=\"dropdown d-none d-lg-inline-block\">
                                <button class=\"btn btn-primary rounded-pill py-2 px-4 dropdown-toggle\" type=\"button\" id=\"userDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fa fa-user me-1\"></i> {{ app.user.firstName }}
                                </button>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"userDropdown\">
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_user_profile') }}\"><i class=\"fa fa-id-card me-2\"></i>Profile</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_user_settings') }}\"><i class=\"fa fa-cog me-2\"></i>Settings</a></li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"><i class=\"fa fa-sign-out-alt me-2\"></i>Logout</a></li>
                                </ul>
                            </div>
                        {% else %}
                            <a href=\"{{ path('app_login') }}\" class=\"btn btn-secondary rounded-pill py-2 px-4 d-none d-lg-inline-block\">
                                <i class=\"fa fa-sign-in-alt me-1\"></i> Login
                            </a>
                        {% endif %}
                    </div>
                </div>
            </nav>

            {% block hero_banner %}
            {# Hero banner will be implemented in child templates #}
            {% endblock %}
        </div>
        {# Navbar & Hero End #}

        {% block content %}
        {# Main content will be implemented in child templates #}
        {% endblock %}

        {# Footer Start #}
        <div class=\"container-fluid bg-primary text-light footer wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"container py-5 px-lg-5\">
                <div class=\"row g-5\">
                    <div class=\"col-md-6 col-lg-3\">
                        <p class=\"section-title text-white h5 mb-4\">Address<span></span></p>
                        <p><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                        <p><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                        <p><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                        <div class=\"d-flex pt-2\">
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <p class=\"section-title text-white h5 mb-4\">Quick Link<span></span></p>
                        <a class=\"btn btn-link\" href=\"{{ path('app_front_home') }}\">Home</a>
                        <a class=\"btn btn-link\" href=\"{{ path('app_front_services') }}\">Services</a>
                        <a class=\"btn btn-link\" href=\"{{ path('app_front_portfolio') }}\">Portfolio</a>
                        <a class=\"btn btn-link\" href=\"{{ path('app_event_index') }}\">Events</a>
                        <a class=\"btn btn-link\" href=\"{{ path('app_front_contact') }}\">Contact</a>
                        <a class=\"btn btn-link\" href=\"{{ path('app_login') }}\">Login</a>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <p class=\"section-title text-white h5 mb-4\">Gallery<span></span></p>
                        <div class=\"row g-2\">
                            <div class=\"col-4\">
                                <img class=\"img-fluid\" src=\"{{ asset('img/portfolio-1.jpg') }}\" alt=\"Image\">
                            </div>
                            <div class=\"col-4\">
                                <img class=\"img-fluid\" src=\"{{ asset('img/portfolio-2.jpg') }}\" alt=\"Image\">
                            </div>
                            <div class=\"col-4\">
                                <img class=\"img-fluid\" src=\"{{ asset('img/portfolio-3.jpg') }}\" alt=\"Image\">
                            </div>
                            <div class=\"col-4\">
                                <img class=\"img-fluid\" src=\"{{ asset('img/portfolio-4.jpg') }}\" alt=\"Image\">
                            </div>
                            <div class=\"col-4\">
                                <img class=\"img-fluid\" src=\"{{ asset('img/portfolio-5.jpg') }}\" alt=\"Image\">
                            </div>
                            <div class=\"col-4\">
                                <img class=\"img-fluid\" src=\"{{ asset('img/portfolio-6.jpg') }}\" alt=\"Image\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <p class=\"section-title text-white h5 mb-4\">Newsletter<span></span></p>
                        <p>Subscribe to our newsletter to receive the latest updates and news</p>
                        <div class=\"position-relative w-100 mt-3\">
                            <input class=\"form-control border-0 rounded-pill w-100 ps-4 pe-5\" type=\"text\" placeholder=\"Your Email\" style=\"height: 48px;\">
                            <button type=\"button\" class=\"btn shadow-none position-absolute top-0 end-0 mt-1 me-2\"><i class=\"fa fa-paper-plane text-primary fs-4\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container px-lg-5\">
                <div class=\"copyright\">
                    <div class=\"row\">
                        <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                            &copy; <a class=\"border-bottom\" href=\"{{ path('app_front_home') }}\">Movable</a>, All Rights Reserved. 
                        </div>
                        <div class=\"col-md-6 text-center text-md-end\">
                            <div class=\"footer-menu\">
                                <a href=\"{{ path('app_front_home') }}\">Home</a>
                                <a href=\"\">Cookies</a>
                                <a href=\"\">Help</a>
                                <a href=\"\">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {# Footer End #}

        {# Back to Top #}
        <a href=\"#\" class=\"btn btn-lg btn-secondary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

{% block javascripts %}
    {# JavaScript Libraries - Load in correct dependency order #}
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    
    {# Required libraries #}
    <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
    <script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('lib/counterup/counterup.min.js') }}\"></script>
    <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('lib/isotope/isotope.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('lib/lightbox/js/lightbox.min.js') }}\"></script>
    
    {# WOW.js should be loaded just before main.js #}
    <script src=\"{{ asset('lib/wow/wow.min.js') }}\"></script>

    {# Template Javascript #}
    <script src=\"{{ asset('js/main.js') }}\"></script>
    
    {# Emergency fix for spinner if it gets stuck #}
    <script>
        // Ensure spinner is hidden
        window.addEventListener('load', function() {
            // Hide spinner after page loads
            if (document.getElementById('spinner')) {
                document.getElementById('spinner').classList.remove('show');
            }
            
            // Fail-safe: Force hide spinner after 2 seconds if still showing
            setTimeout(function() {
                if (document.getElementById('spinner')) {
                    document.getElementById('spinner').style.display = 'none';
                }
            }, 2000);
        });
    </script>
{% endblock %}
</body>

</html>

", "front/base.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\front\\base.html.twig");
    }
}
