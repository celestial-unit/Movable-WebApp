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

/* driver/driver.html.twig */
class __TwigTemplate_a6f0b537efdb8cf69b8c7439d43a6227 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "driver/driver.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "driver/driver.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "driver/driver.html.twig", 1);
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

        yield "Driver Management";
        
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
                <h1 class=\"text-white mb-4 animated slideInDown\">Our Drivers</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Drivers</li>
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
        yield "<div class=\"container-xxl py-5\">
    <div class=\"container px-lg-5\">
        <div class=\"wow fadeInUp\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\"><i class=\"fa fa-id-card-alt me-3\"></i>Certified Drivers</h4>
                </div>
                
                <div class=\"card-body\">
                    ";
        // line 34
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["drivers"]) || array_key_exists("drivers", $context) ? $context["drivers"] : (function () { throw new RuntimeError('Variable "drivers" does not exist.', 34, $this->source); })()))) {
            // line 35
            yield "                        <div class=\"row g-4\">
                            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["drivers"]) || array_key_exists("drivers", $context) ? $context["drivers"] : (function () { throw new RuntimeError('Variable "drivers" does not exist.', 36, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["driver"]) {
                // line 37
                yield "                            <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
                yield "s\">
                                <div class=\"service-item h-100 rounded overflow-hidden\">
                                    <div class=\"p-4 border-top border-primary border-3\">
                                        <div class=\"d-flex align-items-center mb-3\">
                                            <div class=\"flex-shrink-0\">
                                                <i class=\"fa fa-user-tie fa-2x text-primary\"></i>
                                            </div>
                                            <div class=\"ms-3\">
                                                <h5 class=\"text-primary mb-0\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "name", [], "any", false, false, false, 45), "html", null, true);
                yield "</h5>
                                                <small class=\"text-muted\">License #";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "licenceNumber", [], "any", false, false, false, 46), "html", null, true);
                yield "</small>
                                            </div>
                                        </div>

                                        <div class=\"row g-2\">
                                            <div class=\"col-12\">
                                                <p class=\"mb-0\">
                                                    <i class=\"fa fa-car-side text-primary me-2\"></i>
                                                    Authorized Vehicles: 5
                                                </p>
                                            </div>
                                            <div class=\"col-12\">
                                                <p class=\"mb-0\">
                                                    <i class=\"fa fa-star text-primary me-2\"></i>
                                                    Rating: 4.8/5
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['driver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "                        </div>
                    ";
        } else {
            // line 70
            yield "                        <div class=\"alert alert-primary py-4\" role=\"alert\">
                            <h4 class=\"mb-3\"><i class=\"fa fa-info-circle me-2\"></i>No Drivers Found</h4>
                            <p class=\"mb-0\">Please check back later for updates</p>
                        </div>
                    ";
        }
        // line 75
        yield "
                    <div class=\"text-center mt-5 wow fadeInUp\">
                        <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transport_list");
        yield "\" 
                           class=\"btn btn-secondary px-5 rounded-pill\">
                            <i class=\"fa fa-arrow-left me-2\"></i>Back to Transports
                        </a>
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
        return "driver/driver.html.twig";
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
        return array (  280 => 90,  267 => 89,  245 => 77,  241 => 75,  234 => 70,  230 => 68,  194 => 46,  190 => 45,  178 => 37,  161 => 36,  158 => 35,  156 => 34,  145 => 25,  132 => 24,  112 => 14,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Driver Management{% endblock %}

{% block hero_banner %}
<!-- Hero Section -->
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white mb-4 animated slideInDown\">Our Drivers</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Drivers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block content %}
<div class=\"container-xxl py-5\">
    <div class=\"container px-lg-5\">
        <div class=\"wow fadeInUp\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\"><i class=\"fa fa-id-card-alt me-3\"></i>Certified Drivers</h4>
                </div>
                
                <div class=\"card-body\">
                    {% if drivers is not empty %}
                        <div class=\"row g-4\">
                            {% for driver in drivers %}
                            <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"0.{{ loop.index }}s\">
                                <div class=\"service-item h-100 rounded overflow-hidden\">
                                    <div class=\"p-4 border-top border-primary border-3\">
                                        <div class=\"d-flex align-items-center mb-3\">
                                            <div class=\"flex-shrink-0\">
                                                <i class=\"fa fa-user-tie fa-2x text-primary\"></i>
                                            </div>
                                            <div class=\"ms-3\">
                                                <h5 class=\"text-primary mb-0\">{{ driver.name }}</h5>
                                                <small class=\"text-muted\">License #{{ driver.licenceNumber }}</small>
                                            </div>
                                        </div>

                                        <div class=\"row g-2\">
                                            <div class=\"col-12\">
                                                <p class=\"mb-0\">
                                                    <i class=\"fa fa-car-side text-primary me-2\"></i>
                                                    Authorized Vehicles: 5
                                                </p>
                                            </div>
                                            <div class=\"col-12\">
                                                <p class=\"mb-0\">
                                                    <i class=\"fa fa-star text-primary me-2\"></i>
                                                    Rating: 4.8/5
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>
                    {% else %}
                        <div class=\"alert alert-primary py-4\" role=\"alert\">
                            <h4 class=\"mb-3\"><i class=\"fa fa-info-circle me-2\"></i>No Drivers Found</h4>
                            <p class=\"mb-0\">Please check back later for updates</p>
                        </div>
                    {% endif %}

                    <div class=\"text-center mt-5 wow fadeInUp\">
                        <a href=\"{{ path('transport_list') }}\" 
                           class=\"btn btn-secondary px-5 rounded-pill\">
                            <i class=\"fa fa-arrow-left me-2\"></i>Back to Transports
                        </a>
                    </div>
                </div>
            </div>
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
{% endblock %}", "driver/driver.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\driver\\driver.html.twig");
    }
}
