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

/* front/home/index.html.twig */
class __TwigTemplate_14a73241ff1151632012c5f2d9cd9ab6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/home/index.html.twig", 1);
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

        yield "<title>Movable - Transportation for Everyone</title>";
        
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
        yield "<div class=\"container-xxl bg-primary hero-header\">
    <div class=\"container px-lg-5\">
        <div class=\"row g-5 align-items-end\">
           
            

                <div class=\"animated slideInLeft\">
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
        yield "\" class=\"btn btn-light py-2 px-4 rounded-pill\">Book a Ride</a>
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_contact");
        yield "\" class=\"btn btn-outline-light py-2 px-4 rounded-pill ms-3\">Contact Us</a>
                </div>
            </div>
            <div class=\"col-lg-6 text-center text-lg-end\">
                <img class=\"img-fluid animated zoomIn\" src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero.png"), "html", null, true);
        yield "\" alt=\"Hero Image\">
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

        // line 26
        yield "<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"row g-4\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 29, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 30
            yield "                <div class=\"col-lg-4 wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) * 0.2), "html", null, true);
            yield "s\">
                    <div class=\"feature-item bg-light rounded text-center p-4\">
                        <i class=\"fa fa-3x ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "icon", [], "any", false, false, false, 32), "html", null, true);
            yield " text-primary mb-4\"></i>
                        <h5 class=\"mb-3\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 33), "html", null, true);
            yield "</h5>
                        <p class=\"m-0\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
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
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "        </div>
    </div>
</div>
";
        // line 42
        yield "
";
        // line 44
        yield "<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"row g-5 align-items-center\">
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <p class=\"section-title text-secondary\">About Us<span></span></p>
                <h1 class=\"mb-5\">Transportation for Everyone</h1>
                <p class=\"mb-4\">Movable is dedicated to providing accessible transportation services for people with disabilities. We believe that everyone deserves the freedom to move and travel independently, regardless of physical limitations.</p>
                <div class=\"skill mb-4\">
                    <div class=\"d-flex justify-content-between\">
                        <p class=\"mb-2\">Wheelchair Accessible Vehicles</p>
                        <p class=\"mb-2\">100%</p>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\"></div>
                    </div>
                </div>
                <div class=\"skill mb-4\">
                    <div class=\"d-flex justify-content-between\">
                        <p class=\"mb-2\">Trained Drivers</p>
                        <p class=\"mb-2\">95%</p>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-secondary\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%\"></div>
                    </div>
                </div>
                <div class=\"skill mb-4\">
                    <div class=\"d-flex justify-content-between\">
                        <p class=\"mb-2\">Customer Satisfaction</p>
                        <p class=\"mb-2\">98%</p>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-dark\" role=\"progressbar\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 98%\"></div>
                    </div>
                </div>
                <a href=\"#\" class=\"btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3\">Book a Ride</a>
            </div>
            <div class=\"col-lg-6\">
                <img class=\"img-fluid wow zoomIn\" data-wow-delay=\"0.5s\" src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about.png"), "html", null, true);
        yield "\">
            </div>
        </div>
    </div>
</div>
";
        // line 87
        yield "
";
        // line 89
        yield "<div class=\"container-xxl bg-primary fact py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"row g-4\">
            <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.1s\">
                <i class=\"fa fa-car fa-3x text-secondary mb-3\"></i>
                <h1 class=\"text-white mb-2\" data-toggle=\"counter-up\">500</h1>
                <p class=\"text-white mb-0\">Accessible Vehicles</p>
            </div>
            <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.3s\">
                <i class=\"fa fa-users fa-3x text-secondary mb-3\"></i>
                <h1 class=\"text-white mb-2\" data-toggle=\"counter-up\">250</h1>
                <p class=\"text-white mb-0\">Trained Drivers</p>
            </div>
            <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.5s\">
                <i class=\"fa fa-wheelchair fa-3x text-secondary mb-3\"></i>
                <h1 class=\"text-white mb-2\" data-toggle=\"counter-up\">5000</h1>
                <p class=\"text-white mb-0\">Happy Clients</p>
            </div>
            <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.7s\">
                <i class=\"fa fa-map-marker-alt fa-3x text-secondary mb-3\"></i>
                <h1 class=\"text-white mb-2\" data-toggle=\"counter-up\">25</h1>
                <p class=\"text-white mb-0\">Cities Served</p>
            </div>
        </div>
    </div>
</div>
";
        // line 116
        yield "
";
        // line 118
        yield "<div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5 px-lg-5\">
        <p class=\"section-title text-secondary justify-content-center\"><span></span>Testimonials<span></span></p>
        <h1 class=\"text-center mb-5\">What Our Clients Say!</h1>
        <div class=\"owl-carousel testimonial-carousel\">
            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["testimonials"]) || array_key_exists("testimonials", $context) ? $context["testimonials"] : (function () { throw new RuntimeError('Variable "testimonials" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 124
            yield "                <div class=\"testimonial-item bg-light rounded my-4\">
                    <p class=\"fs-5\"><i class=\"fa fa-quote-left fa-4x text-primary mt-n4 me-3\"></i>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "content", [], "any", false, false, false, 125), "html", null, true);
            yield "</p>
                    <div class=\"d-flex align-items-center\">
                        <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 127))), "html", null, true);
            yield "\" style=\"width: 65px; height: 65px;\">
                        <div class=\"ps-4\">
                            <h5 class=\"mb-1\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 129), "html", null, true);
            yield "</h5>
                            <span>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "position", [], "any", false, false, false, 130), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['testimonial'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 141
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

        // line 142
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    
    ";
        // line 145
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/typed.js@2.0.12\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize WOW.js
            new WOW().init();
            
            // Initialize Typed.js
            var typed = new Typed('.typed-text', {
                strings: ['Professionals', 'Creatives', 'Strategists', 'Innovators'],
                typeSpeed: 100,
                backSpeed: 50,
                backDelay: 2000,
                loop: true
            });
            
            // Initialize Isotope for portfolio filtering
            var portfolioIsotope = \$('.portfolio-container').isotope({
                itemSelector: '.portfolio-item',
                layoutMode: 'fitRows'
            });
            
            \$('#portfolio-flters li').on('click', function() {
                \$(\"#portfolio-flters li\").removeClass('active');
                \$(this).addClass('active');
                
                portfolioIsotope.isotope({
                    filter: \$(this).data('filter')
                });
            });
            
            // Initialize Owl Carousel for testimonials
            \$('.testimonial-carousel').owlCarousel({
                autoplay: true,
                smartSpeed: 1000,
                margin: 25,
                dots: true,
                loop: true,
                center: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
            
            // Initialize Counter-Up
            \$('[data-toggle=\"counter-up\"]').counterUp({
                delay: 10,
                time: 2000
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
        return "front/home/index.html.twig";
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
        return array (  366 => 145,  360 => 142,  347 => 141,  333 => 135,  322 => 130,  318 => 129,  313 => 127,  308 => 125,  305 => 124,  301 => 123,  294 => 118,  291 => 116,  263 => 89,  260 => 87,  252 => 81,  213 => 44,  210 => 42,  205 => 38,  187 => 34,  183 => 33,  179 => 32,  173 => 30,  156 => 29,  151 => 26,  138 => 24,  122 => 18,  115 => 14,  111 => 13,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}<title>Movable - Transportation for Everyone</title>{% endblock %}

{% block hero_banner %}
<div class=\"container-xxl bg-primary hero-header\">
    <div class=\"container px-lg-5\">
        <div class=\"row g-5 align-items-end\">
           
            

                <div class=\"animated slideInLeft\">
                    <a href=\"{{ path('app_reservation_new') }}\" class=\"btn btn-light py-2 px-4 rounded-pill\">Book a Ride</a>
                    <a href=\"{{ path('app_front_contact') }}\" class=\"btn btn-outline-light py-2 px-4 rounded-pill ms-3\">Contact Us</a>
                </div>
            </div>
            <div class=\"col-lg-6 text-center text-lg-end\">
                <img class=\"img-fluid animated zoomIn\" src=\"{{ asset('img/hero.png') }}\" alt=\"Hero Image\">
            </div>
        </div>

{% endblock %}

{% block content %}
{# Feature/Services Preview Start #}
<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"row g-4\">
            {% for service in services %}
                <div class=\"col-lg-4 wow fadeInUp\" data-wow-delay=\"{{ loop.index * 0.2 }}s\">
                    <div class=\"feature-item bg-light rounded text-center p-4\">
                        <i class=\"fa fa-3x {{ service.icon }} text-primary mb-4\"></i>
                        <h5 class=\"mb-3\">{{ service.title }}</h5>
                        <p class=\"m-0\">{{ service.description }}</p>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{# Feature/Services Preview End #}

{# About Start #}
<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"row g-5 align-items-center\">
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <p class=\"section-title text-secondary\">About Us<span></span></p>
                <h1 class=\"mb-5\">Transportation for Everyone</h1>
                <p class=\"mb-4\">Movable is dedicated to providing accessible transportation services for people with disabilities. We believe that everyone deserves the freedom to move and travel independently, regardless of physical limitations.</p>
                <div class=\"skill mb-4\">
                    <div class=\"d-flex justify-content-between\">
                        <p class=\"mb-2\">Wheelchair Accessible Vehicles</p>
                        <p class=\"mb-2\">100%</p>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\"></div>
                    </div>
                </div>
                <div class=\"skill mb-4\">
                    <div class=\"d-flex justify-content-between\">
                        <p class=\"mb-2\">Trained Drivers</p>
                        <p class=\"mb-2\">95%</p>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-secondary\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%\"></div>
                    </div>
                </div>
                <div class=\"skill mb-4\">
                    <div class=\"d-flex justify-content-between\">
                        <p class=\"mb-2\">Customer Satisfaction</p>
                        <p class=\"mb-2\">98%</p>
                    </div>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-dark\" role=\"progressbar\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 98%\"></div>
                    </div>
                </div>
                <a href=\"#\" class=\"btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3\">Book a Ride</a>
            </div>
            <div class=\"col-lg-6\">
                <img class=\"img-fluid wow zoomIn\" data-wow-delay=\"0.5s\" src=\"{{ asset('img/about.png') }}\">
            </div>
        </div>
    </div>
</div>
{# About End #}

{# Facts Start #}
<div class=\"container-xxl bg-primary fact py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"row g-4\">
            <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.1s\">
                <i class=\"fa fa-car fa-3x text-secondary mb-3\"></i>
                <h1 class=\"text-white mb-2\" data-toggle=\"counter-up\">500</h1>
                <p class=\"text-white mb-0\">Accessible Vehicles</p>
            </div>
            <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.3s\">
                <i class=\"fa fa-users fa-3x text-secondary mb-3\"></i>
                <h1 class=\"text-white mb-2\" data-toggle=\"counter-up\">250</h1>
                <p class=\"text-white mb-0\">Trained Drivers</p>
            </div>
            <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.5s\">
                <i class=\"fa fa-wheelchair fa-3x text-secondary mb-3\"></i>
                <h1 class=\"text-white mb-2\" data-toggle=\"counter-up\">5000</h1>
                <p class=\"text-white mb-0\">Happy Clients</p>
            </div>
            <div class=\"col-md-6 col-lg-3 text-center wow fadeIn\" data-wow-delay=\"0.7s\">
                <i class=\"fa fa-map-marker-alt fa-3x text-secondary mb-3\"></i>
                <h1 class=\"text-white mb-2\" data-toggle=\"counter-up\">25</h1>
                <p class=\"text-white mb-0\">Cities Served</p>
            </div>
        </div>
    </div>
</div>
{# Facts End #}

{# Testimonials Start #}
<div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5 px-lg-5\">
        <p class=\"section-title text-secondary justify-content-center\"><span></span>Testimonials<span></span></p>
        <h1 class=\"text-center mb-5\">What Our Clients Say!</h1>
        <div class=\"owl-carousel testimonial-carousel\">
            {% for testimonial in testimonials %}
                <div class=\"testimonial-item bg-light rounded my-4\">
                    <p class=\"fs-5\"><i class=\"fa fa-quote-left fa-4x text-primary mt-n4 me-3\"></i>{{ testimonial.content }}</p>
                    <div class=\"d-flex align-items-center\">
                        <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"{{ asset('img/' ~ testimonial.image) }}\" style=\"width: 65px; height: 65px;\">
                        <div class=\"ps-4\">
                            <h5 class=\"mb-1\">{{ testimonial.name }}</h5>
                            <span>{{ testimonial.position }}</span>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{# Testimonial End #}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    {# Initialize typed.js for the hero banner #}
    <script src=\"https://cdn.jsdelivr.net/npm/typed.js@2.0.12\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize WOW.js
            new WOW().init();
            
            // Initialize Typed.js
            var typed = new Typed('.typed-text', {
                strings: ['Professionals', 'Creatives', 'Strategists', 'Innovators'],
                typeSpeed: 100,
                backSpeed: 50,
                backDelay: 2000,
                loop: true
            });
            
            // Initialize Isotope for portfolio filtering
            var portfolioIsotope = \$('.portfolio-container').isotope({
                itemSelector: '.portfolio-item',
                layoutMode: 'fitRows'
            });
            
            \$('#portfolio-flters li').on('click', function() {
                \$(\"#portfolio-flters li\").removeClass('active');
                \$(this).addClass('active');
                
                portfolioIsotope.isotope({
                    filter: \$(this).data('filter')
                });
            });
            
            // Initialize Owl Carousel for testimonials
            \$('.testimonial-carousel').owlCarousel({
                autoplay: true,
                smartSpeed: 1000,
                margin: 25,
                dots: true,
                loop: true,
                center: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
            
            // Initialize Counter-Up
            \$('[data-toggle=\"counter-up\"]').counterUp({
                delay: 10,
                time: 2000
            });
        });
    </script>
{% endblock %}

", "front/home/index.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\front\\home\\index.html.twig");
    }
}
