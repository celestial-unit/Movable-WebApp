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

/* Destinations/destination/cards.html.twig */
class __TwigTemplate_d506d3dc96d4bb0393ebf37508eba529 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Destinations/destination/cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Destinations/destination/cards.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "Destinations/destination/cards.html.twig", 1);
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

        yield "Our Destinations";
        
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
                <h1 class=\"text-white mb-4 animated slideInDown\">Explore Our Destinations</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Destinations</li>
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

    // line 24
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

        // line 25
        yield "<!-- Destination Cards Section -->
<div class=\"container-xxl py-5\">
    <div class=\"container px-lg-5\">
        <div class=\"row g-4\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["destinations"]) || array_key_exists("destinations", $context) ? $context["destinations"] : (function () { throw new RuntimeError('Variable "destinations" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["destination"]) {
            // line 30
            yield "            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"service-item d-flex flex-column h-100 rounded overflow-hidden\">
                    <div class=\"position-relative\">
                        ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "image", [], "any", false, false, false, 33)) {
                // line 34
                yield "                        <img class=\"img-fluid\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/destinations/" . CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "image", [], "any", false, false, false, 34))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "name", [], "any", false, false, false, 35), "html", null, true);
                yield "\" 
                             style=\"height: 250px; object-fit: cover;\">
                        ";
            } else {
                // line 38
                yield "                        <img class=\"img-fluid\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-destination.jpg"), "html", null, true);
                yield "\" 
                             alt=\"Default destination image\"
                             style=\"height: 250px; object-fit: cover;\">
                        ";
            }
            // line 42
            yield "                        <div class=\"service-overlay\">
                            <div class=\"d-flex align-items-center justify-content-center\">
                                <a class=\"btn btn-square btn-light mx-1\" href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_destination_show", ["idDestination" => CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "idDestination", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\">
                                    <i class=\"fa fa-eye text-primary\"></i>
                                </a>
                                <button class=\"btn btn-square btn-light mx-1\">
                                    <i class=\"far fa-heart text-primary\"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"p-4 border-top border-primary border-3\">
                        <h5 class=\"mb-3 text-primary\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "name", [], "any", false, false, false, 54), "html", null, true);
            yield "</h5>
                        <p class=\"mb-2\">
                            <i class=\"fa fa-map-marker-alt text-primary me-2\"></i>
                            ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "location", [], "any", false, false, false, 57), "html", null, true);
            yield "
                        </p>
                        <p class=\"mb-3\">
                            ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "description", [], "any", false, false, false, 60)) > 100)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 61
$context["destination"], "description", [], "any", false, false, false, 61), 0, 100) . "...")) : (CoreExtension::getAttribute($this->env, $this->source,             // line 62
$context["destination"], "description", [], "any", false, false, false, 62))), "html", null, true);
            yield "
                        </p>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"badge bg-primary\">
                                <i class=\"fa fa-car me-2\"></i>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "parkingSpots", [], "any", false, false, false, 66)), "html", null, true);
            yield " Spots
                            </span>
                            <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_destination_show", ["idDestination" => CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "idDestination", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-sm btn-secondary px-3 rounded-pill\">
                                Explore <i class=\"fa fa-arrow-right ms-2\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            yield "            <div class=\"col-12 text-center\">
                <div class=\"alert alert-primary py-5\" role=\"alert\">
                    <h4 class=\"mb-3\">No destinations available</h4>
                    <p class=\"mb-0\">Check back later for new destinations!</p>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['destination'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// Initialize WOW animations
new WOW().init();

// Heart toggle functionality
document.querySelectorAll('.fa-heart').forEach(icon => {
    icon.addEventListener('click', function() {
        this.classList.toggle('fas');
        this.classList.toggle('far');
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
        return "Destinations/destination/cards.html.twig";
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
        return array (  278 => 90,  265 => 89,  251 => 84,  239 => 77,  225 => 68,  220 => 66,  213 => 62,  212 => 61,  211 => 60,  205 => 57,  199 => 54,  186 => 44,  182 => 42,  174 => 38,  168 => 35,  163 => 34,  161 => 33,  156 => 30,  151 => 29,  145 => 25,  132 => 24,  112 => 14,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Our Destinations{% endblock %}

{% block hero_banner %}
<!-- Hero Section -->
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white mb-4 animated slideInDown\">Explore Our Destinations</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Destinations</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block content %}
<!-- Destination Cards Section -->
<div class=\"container-xxl py-5\">
    <div class=\"container px-lg-5\">
        <div class=\"row g-4\">
            {% for destination in destinations %}
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"service-item d-flex flex-column h-100 rounded overflow-hidden\">
                    <div class=\"position-relative\">
                        {% if destination.image %}
                        <img class=\"img-fluid\" src=\"{{ asset('uploads/destinations/' ~ destination.image) }}\" 
                             alt=\"{{ destination.name }}\" 
                             style=\"height: 250px; object-fit: cover;\">
                        {% else %}
                        <img class=\"img-fluid\" src=\"{{ asset('img/default-destination.jpg') }}\" 
                             alt=\"Default destination image\"
                             style=\"height: 250px; object-fit: cover;\">
                        {% endif %}
                        <div class=\"service-overlay\">
                            <div class=\"d-flex align-items-center justify-content-center\">
                                <a class=\"btn btn-square btn-light mx-1\" href=\"{{ path('app_destination_show', {'idDestination': destination.idDestination}) }}\">
                                    <i class=\"fa fa-eye text-primary\"></i>
                                </a>
                                <button class=\"btn btn-square btn-light mx-1\">
                                    <i class=\"far fa-heart text-primary\"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"p-4 border-top border-primary border-3\">
                        <h5 class=\"mb-3 text-primary\">{{ destination.name }}</h5>
                        <p class=\"mb-2\">
                            <i class=\"fa fa-map-marker-alt text-primary me-2\"></i>
                            {{ destination.location }}
                        </p>
                        <p class=\"mb-3\">
                            {{ destination.description|length > 100 
                                ? destination.description|slice(0, 100) ~ '...' 
                                : destination.description }}
                        </p>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"badge bg-primary\">
                                <i class=\"fa fa-car me-2\"></i>{{ destination.parkingSpots|length }} Spots
                            </span>
                            <a href=\"{{ path('app_destination_show', {'idDestination': destination.idDestination}) }}\" 
                               class=\"btn btn-sm btn-secondary px-3 rounded-pill\">
                                Explore <i class=\"fa fa-arrow-right ms-2\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {% else %}
            <div class=\"col-12 text-center\">
                <div class=\"alert alert-primary py-5\" role=\"alert\">
                    <h4 class=\"mb-3\">No destinations available</h4>
                    <p class=\"mb-0\">Check back later for new destinations!</p>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
// Initialize WOW animations
new WOW().init();

// Heart toggle functionality
document.querySelectorAll('.fa-heart').forEach(icon => {
    icon.addEventListener('click', function() {
        this.classList.toggle('fas');
        this.classList.toggle('far');
    });
});
</script>
{% endblock %}", "Destinations/destination/cards.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\Destinations\\destination\\cards.html.twig");
    }
}
