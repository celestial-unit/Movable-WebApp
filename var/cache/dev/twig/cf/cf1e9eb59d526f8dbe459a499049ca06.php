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

/* Destinations/parkingspot/destinationSpots.html.twig */
class __TwigTemplate_a124cbe7cdc2256b7dd365c9822e9c9d extends Template
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
            'hero_banner' => [$this, 'block_hero_banner'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Destinations/parkingspot/destinationSpots.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Destinations/parkingspot/destinationSpots.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "Destinations/parkingspot/destinationSpots.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " Parking Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<!-- Hero Section -->
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white mb-4 animated slideInDown\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        yield " Parking</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_destination_cards");
        yield "\">Destinations</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Parking Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

        // line 26
        yield "<!-- Parking Section -->
<div class=\"container-xxl py-5\">
    <div class=\"container px-lg-5\">
        <div class=\"row g-5\">
            <!-- Main Parking Section -->
            <div class=\"col-lg-8\">
                <div class=\"section-title mb-5\">
                    <h2 class=\"text-primary mb-4 wow fadeInUp\">
                        <i class=\"fa fa-parking me-3\"></i>Available Parking Spots
                        <span class=\"badge bg-secondary\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 35, $this->source); })()), "parkingSpots", [], "any", false, false, false, 35)), "html", null, true);
        yield "</span>
                    </h2>
                </div>

                ";
        // line 39
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 39, $this->source); })()), "parkingSpots", [], "any", false, false, false, 39))) {
            // line 40
            yield "                    <div class=\"row g-4\">
                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 41, $this->source); })()), "parkingSpots", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["spot"]) {
                // line 42
                yield "                        <div class=\"col-md-6 col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                            <div class=\"service-item h-100 rounded overflow-hidden ";
                // line 43
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["spot"], "isAvailable", [], "any", false, false, false, 43) == "no")) ? ("occupied") : (""));
                yield "\">
                                <div class=\"p-4 border-top border-primary border-3\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                        <h5 class=\"text-primary\">
                                            <i class=\"fa fa-car-side me-2\"></i>Spot #";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["spot"], "spotNumber", [], "any", false, false, false, 47), "html", null, true);
                yield "
                                        </h5>
                                        <span class=\"badge bg-";
                // line 49
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["spot"], "isAvailable", [], "any", false, false, false, 49) == "yes")) ? ("success") : ("danger"));
                yield "\">
                                            ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["spot"], "isAvailable", [], "any", false, false, false, 50)), "html", null, true);
                yield "
                                        </span>
                                    </div>

                                    <div class=\"row g-2 mb-3\">
                                        <div class=\"col-6\">
                                            <p class=\"mb-0\">
                                                <i class=\"fa fa-wheelchair text-primary me-2\"></i>
                                                ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["spot"], "isAccessible", [], "any", false, false, false, 58)), "html", null, true);
                yield "
                                            </p>
                                        </div>
                                        <div class=\"col-6\">
                                            <p class=\"mb-0\">
                                                <i class=\"fa fa-coins text-primary me-2\"></i>
                                                ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["spot"], "parkingFees", [], "any", false, false, false, 64), "html", null, true);
                yield " DT/hour
                                            </p>
                                        </div>
                                        <div class=\"col-12\">
                                            <p class=\"mb-0\">
                                                <i class=\"fa fa-ruler-combined text-primary me-2\"></i>
                                                Size: ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["spot"], "size", [], "any", false, false, false, 70)), "html", null, true);
                yield "
                                            </p>
                                        </div>
                                    </div>

                                    ";
                // line 75
                if (CoreExtension::getAttribute($this->env, $this->source, $context["spot"], "notes", [], "any", false, false, false, 75)) {
                    // line 76
                    yield "                                    <div class=\"bg-light p-3 rounded\">
                                        <small class=\"text-muted\">
                                            <i class=\"fa fa-sticky-note text-primary me-2\"></i>
                                            ";
                    // line 79
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["spot"], "notes", [], "any", false, false, false, 79), "html", null, true);
                    yield "
                                        </small>
                                    </div>
                                    ";
                }
                // line 83
                yield "                                </div>
                            </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['spot'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "                    </div>
                ";
        } else {
            // line 89
            yield "                    <div class=\"alert alert-primary py-4\" role=\"alert\">
                        <h4 class=\"mb-3\"><i class=\"fa fa-info-circle me-2\"></i>No parking available</h4>
                        <p class=\"mb-0\">Please check back later for updates</p>
                    </div>
                ";
        }
        // line 94
        yield "            </div>

            <!-- Sidebar -->
            <div class=\"col-lg-4\">
                <div class=\"card border-primary wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"card-header bg-primary text-white\">
                        <h5 class=\"mb-0\"><i class=\"fa fa-info-circle me-2\"></i>Destination Info</h5>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                <span><i class=\"fa fa-tag me-2 text-primary\"></i>Category</span>
                                <span class=\"text-primary\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 106, $this->source); })()), "category", [], "any", false, false, false, 106), "html", null, true);
        yield "</span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                <span><i class=\"fa fa-star me-2 text-primary\"></i>Rating</span>
                                <span class=\"text-primary\">";
        // line 110
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 110, $this->source); })()), "rating", [], "any", false, false, false, 110)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 110, $this->source); })()), "rating", [], "any", false, false, false, 110), "html", null, true)) : (yield "N/A"));
        yield "/5</span>
                            </li>
                            <li class=\"list-group-item\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fa fa-phone me-2 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Contact</small>
                                        <div class=\"fw-bold\">";
        // line 117
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 117, $this->source); })()), "contactInformation", [], "any", false, false, false, 117)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 117, $this->source); })()), "contactInformation", [], "any", false, false, false, 117), "html", null, true)) : (yield "N/A"));
        yield "</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"text-center mt-5 wow fadeInUp\">
            <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_destination_cards");
        yield "\" class=\"btn btn-secondary px-5 rounded-pill\">
                <i class=\"fa fa-arrow-left me-2\"></i>Back to Destinations
            </a>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
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

        // line 137
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// Initialize WOW animations
new WOW().init();
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
        return "Destinations/parkingspot/destinationSpots.html.twig";
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
        return array (  346 => 137,  333 => 136,  315 => 128,  301 => 117,  291 => 110,  284 => 106,  270 => 94,  263 => 89,  259 => 87,  250 => 83,  243 => 79,  238 => 76,  236 => 75,  228 => 70,  219 => 64,  210 => 58,  199 => 50,  195 => 49,  190 => 47,  183 => 43,  180 => 42,  176 => 41,  173 => 40,  171 => 39,  164 => 35,  153 => 26,  140 => 25,  120 => 15,  116 => 14,  110 => 11,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}{{ destination.name }} Parking Details{% endblock %}

{% block hero_banner %}
<!-- Hero Section -->
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white mb-4 animated slideInDown\">{{ destination.name }} Parking</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_destination_cards') }}\">Destinations</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Parking Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block content %}
<!-- Parking Section -->
<div class=\"container-xxl py-5\">
    <div class=\"container px-lg-5\">
        <div class=\"row g-5\">
            <!-- Main Parking Section -->
            <div class=\"col-lg-8\">
                <div class=\"section-title mb-5\">
                    <h2 class=\"text-primary mb-4 wow fadeInUp\">
                        <i class=\"fa fa-parking me-3\"></i>Available Parking Spots
                        <span class=\"badge bg-secondary\">{{ destination.parkingSpots|length }}</span>
                    </h2>
                </div>

                {% if destination.parkingSpots is not empty %}
                    <div class=\"row g-4\">
                        {% for spot in destination.parkingSpots %}
                        <div class=\"col-md-6 col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                            <div class=\"service-item h-100 rounded overflow-hidden {{ spot.isAvailable == 'no' ? 'occupied' : '' }}\">
                                <div class=\"p-4 border-top border-primary border-3\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                        <h5 class=\"text-primary\">
                                            <i class=\"fa fa-car-side me-2\"></i>Spot #{{ spot.spotNumber }}
                                        </h5>
                                        <span class=\"badge bg-{{ spot.isAvailable == 'yes' ? 'success' : 'danger' }}\">
                                            {{ spot.isAvailable|capitalize }}
                                        </span>
                                    </div>

                                    <div class=\"row g-2 mb-3\">
                                        <div class=\"col-6\">
                                            <p class=\"mb-0\">
                                                <i class=\"fa fa-wheelchair text-primary me-2\"></i>
                                                {{ spot.isAccessible|capitalize }}
                                            </p>
                                        </div>
                                        <div class=\"col-6\">
                                            <p class=\"mb-0\">
                                                <i class=\"fa fa-coins text-primary me-2\"></i>
                                                {{ spot.parkingFees }} DT/hour
                                            </p>
                                        </div>
                                        <div class=\"col-12\">
                                            <p class=\"mb-0\">
                                                <i class=\"fa fa-ruler-combined text-primary me-2\"></i>
                                                Size: {{ spot.size|upper }}
                                            </p>
                                        </div>
                                    </div>

                                    {% if spot.notes %}
                                    <div class=\"bg-light p-3 rounded\">
                                        <small class=\"text-muted\">
                                            <i class=\"fa fa-sticky-note text-primary me-2\"></i>
                                            {{ spot.notes }}
                                        </small>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                {% else %}
                    <div class=\"alert alert-primary py-4\" role=\"alert\">
                        <h4 class=\"mb-3\"><i class=\"fa fa-info-circle me-2\"></i>No parking available</h4>
                        <p class=\"mb-0\">Please check back later for updates</p>
                    </div>
                {% endif %}
            </div>

            <!-- Sidebar -->
            <div class=\"col-lg-4\">
                <div class=\"card border-primary wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"card-header bg-primary text-white\">
                        <h5 class=\"mb-0\"><i class=\"fa fa-info-circle me-2\"></i>Destination Info</h5>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                <span><i class=\"fa fa-tag me-2 text-primary\"></i>Category</span>
                                <span class=\"text-primary\">{{ destination.category }}</span>
                            </li>
                            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                <span><i class=\"fa fa-star me-2 text-primary\"></i>Rating</span>
                                <span class=\"text-primary\">{{ destination.rating ?: 'N/A' }}/5</span>
                            </li>
                            <li class=\"list-group-item\">
                                <div class=\"d-flex align-items-center\">
                                    <i class=\"fa fa-phone me-2 text-primary\"></i>
                                    <div>
                                        <small class=\"text-muted\">Contact</small>
                                        <div class=\"fw-bold\">{{ destination.contactInformation ?: 'N/A' }}</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"text-center mt-5 wow fadeInUp\">
            <a href=\"{{ path('app_destination_cards') }}\" class=\"btn btn-secondary px-5 rounded-pill\">
                <i class=\"fa fa-arrow-left me-2\"></i>Back to Destinations
            </a>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
// Initialize WOW animations
new WOW().init();
</script>
{% endblock %}", "Destinations/parkingspot/destinationSpots.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\Destinations\\parkingspot\\destinationSpots.html.twig");
    }
}
