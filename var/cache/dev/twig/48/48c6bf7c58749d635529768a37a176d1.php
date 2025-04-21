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

/* front/portfolio/index.html.twig */
class __TwigTemplate_f33bbfd89c534e70239412ed344f441e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/portfolio/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/portfolio/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/portfolio/index.html.twig", 1);
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

        yield "<title>Movable - Our Portfolio</title>";
        
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
        yield "<div class=\"container-xxl bg-primary page-header\">
    <div class=\"container text-center py-5 px-lg-5\">
        <h1 class=\"text-white animated zoomIn\">Portfolio</h1>
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb justify-content-center\">
                <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Portfolio</li>
            </ol>
        </nav>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
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

        // line 21
        yield "<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
            <p class=\"section-title text-secondary justify-content-center\"><span></span>Our Projects<span></span></p>
            <h1 class=\"text-center mb-5\">Explore Our Latest Work</h1>
        </div>
        <div class=\"row mt-n2 wow fadeInUp\" data-wow-delay=\"0.3s\">
            <div class=\"col-12 text-center\">
                <ul class=\"list-inline mb-5\" id=\"portfolio-flters\">
                    <li class=\"mx-2 active\" data-filter=\"*\">All</li>
                    <li class=\"mx-2\" data-filter=\".first\">Web Design</li>
                    <li class=\"mx-2\" data-filter=\".second\">Graphic Design</li>
                </ul>
            </div>
        </div>
        <div class=\"row g-4 portfolio-container\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 37, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 38
            yield "                <div class=\"col-lg-4 col-md-6 portfolio-item ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "class", [], "any", false, false, false, 38), "html", null, true);
            yield " wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.1 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 38) * 0.2)), "html", null, true);
            yield "s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["project"], "image", [], "any", false, false, false, 41))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 41), "html", null, true);
            yield "\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["project"], "image", [], "any", false, false, false, 43))), "html", null, true);
            yield "\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"#\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"bg-light p-4\">
                            <p class=\"text-primary fw-medium mb-2\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "category", [], "any", false, false, false, 48), "html", null, true);
            yield "</p>
                            <h5 class=\"lh-base mb-0\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 49), "html", null, true);
            yield "</h5>
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
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "        </div>
    </div>
</div>
";
        // line 58
        yield "
";
        // line 60
        yield "<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
            <p class=\"section-title text-secondary justify-content-center\"><span></span>Testimonials<span></span></p>
            <h1 class=\"text-center mb-5\">What Our Clients Say About Our Work</h1>
        </div>
        <div class=\"owl-carousel testimonial-carousel\">
            <div class=\"testimonial-item bg-light rounded my-4\">
                <p class=\"fs-5\"><i class=\"fa fa-quote-left fa-4x text-primary mt-n4 me-3\"></i>The team at Movable delivered an exceptional e-commerce platform that exceeded our expectations. Their attention to detail and user experience focus has significantly improved our online sales.</p>
                <div class=\"d-flex align-items-center\">
                    <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-1.jpg"), "html", null, true);
        yield "\" style=\"width: 65px; height: 65px;\">
                    <div class=\"ps-4\">
                        <h5 class=\"mb-1\">Robert Johnson</h5>
                        <span>E-commerce Director</span>
                    </div>
                </div>
            </div>
            <div class=\"testimonial-item bg-light rounded my-4\">
                <p class=\"fs-5\"><i class=\"fa fa-quote-left fa-4x text-primary mt-n4 me-3\"></i>Our corporate website redesign project was handled professionally from start to finish. The modern, responsive design has received fantastic feedback from our clients and stakeholders.</p>
                <div class=\"d-flex align-items-center\">
                    <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-2.jpg"), "html", null, true);
        yield "\" style=\"width: 65px; height: 65px;\">
                    <div class=\"ps-4\">
                        <h5 class=\"mb-1\">Emily Parker</h5>
                        <span>Marketing Manager</span>
                    </div>
                </div>
            </div>
            <div class=\"testimonial-item bg-light rounded my-4\">
                <p class=\"fs-5\"><i class=\"fa fa-quote-left fa-4x text-primary mt-n4 me-3\"></i>The mobile app developed by Movable has revolutionized how we connect with our customers. Their development expertise and creative approach delivered a product that stands out in a crowded market.</p>
                <div class=\"d-flex align-items-center\">
                    <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-3.jpg"), "html", null, true);
        yield "\" style=\"width: 65px; height: 65px;\">
                    <div class=\"ps-4\">
                        <h5 class=\"mb-1\">Michael Roberts</h5>
                        <span>Technology Director</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 101
        yield "
";
        // line 103
        yield "<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
            <p class=\"section-title text-secondary justify-content-center\"><span></span>Our Process<span></span></p>
            <h1 class=\"text-center mb-5\">How We Work</h1>
        </div>
        <div class=\"row g-4\">
            <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"feature-item bg-light rounded text-center p-4\">
                    <i class=\"fa fa-3x fa-lightbulb text-primary mb-4\"></i>
                    <h5 class=\"mb-3\">1. Discovery</h5>
                    <p class=\"m-0\">We learn about your business, goals, and target audience to develop a strategic plan.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"feature-item bg-light rounded text-center p-4\">
                    <i class=\"fa fa-3x fa-drafting-compass text-primary mb-4\"></i>
                    <h5 class=\"mb-3\">2. Design</h5>
                    <p class=\"m-0\">Our designers create visually stunning concepts tailored to your brand and objectives.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"feature-item bg-light rounded text-center p-4\">
                    <i class=\"fa fa-3x fa-code text-primary mb-4\"></i>
                    <h5 class=\"mb-3\">3. Development</h5>
                    <p class=\"m-0\">Our developers bring the designs to life with clean, optimized, and responsive code.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                <div class=\"feature-item bg-light rounded text-center p-4\">
                    <i class=\"fa fa-3x fa-rocket text-primary mb-4\"></i>
                    <h5 class=\"mb-3\">4. Launch</h5>
                    <p class=\"m-0\">We thoroughly test and deploy your project, providing ongoing support and maintenance.</p>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 142
        yield "
";
        // line 144
        yield "<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
            <h1 class=\"text-center mb-5\">Ready to Discuss Your Project?</h1>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <p class=\"text-center mb-4\">Let's create something amazing together. Contact us to discuss your project requirements and get a customized solution for your business.</p>
                <div class=\"text-center\">
                    <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_contact");
        yield "\" class=\"btn btn-primary rounded-pill py-3 px-5\">Contact Us Now</a>
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

    // line 162
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

        // line 163
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize WOW.js
            new WOW().init();
            
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
        return "front/portfolio/index.html.twig";
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
        return array (  369 => 163,  356 => 162,  338 => 153,  327 => 144,  324 => 142,  284 => 103,  281 => 101,  268 => 90,  255 => 80,  242 => 70,  230 => 60,  227 => 58,  222 => 54,  203 => 49,  199 => 48,  191 => 43,  184 => 41,  175 => 38,  158 => 37,  140 => 21,  127 => 19,  109 => 11,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}<title>Movable - Our Portfolio</title>{% endblock %}

{% block hero_banner %}
<div class=\"container-xxl bg-primary page-header\">
    <div class=\"container text-center py-5 px-lg-5\">
        <h1 class=\"text-white animated zoomIn\">Portfolio</h1>
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb justify-content-center\">
                <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Portfolio</li>
            </ol>
        </nav>
    </div>
</div>
{% endblock %}

{% block content %}
{# Portfolio Start #}
<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
            <p class=\"section-title text-secondary justify-content-center\"><span></span>Our Projects<span></span></p>
            <h1 class=\"text-center mb-5\">Explore Our Latest Work</h1>
        </div>
        <div class=\"row mt-n2 wow fadeInUp\" data-wow-delay=\"0.3s\">
            <div class=\"col-12 text-center\">
                <ul class=\"list-inline mb-5\" id=\"portfolio-flters\">
                    <li class=\"mx-2 active\" data-filter=\"*\">All</li>
                    <li class=\"mx-2\" data-filter=\".first\">Web Design</li>
                    <li class=\"mx-2\" data-filter=\".second\">Graphic Design</li>
                </ul>
            </div>
        </div>
        <div class=\"row g-4 portfolio-container\">
            {% for project in projects %}
                <div class=\"col-lg-4 col-md-6 portfolio-item {{ project.class }} wow fadeInUp\" data-wow-delay=\"{{ 0.1 + (loop.index0 * 0.2) }}s\">
                    <div class=\"rounded overflow-hidden\">
                        <div class=\"position-relative overflow-hidden\">
                            <img class=\"img-fluid w-100\" src=\"{{ asset('img/' ~ project.image) }}\" alt=\"{{ project.title }}\">
                            <div class=\"portfolio-overlay\">
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"{{ asset('img/' ~ project.image) }}\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                                <a class=\"btn btn-square btn-outline-light mx-1\" href=\"#\"><i class=\"fa fa-link\"></i></a>
                            </div>
                        </div>
                        <div class=\"bg-light p-4\">
                            <p class=\"text-primary fw-medium mb-2\">{{ project.category }}</p>
                            <h5 class=\"lh-base mb-0\">{{ project.title }}</h5>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{# Portfolio End #}

{# Testimonial Start #}
<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
            <p class=\"section-title text-secondary justify-content-center\"><span></span>Testimonials<span></span></p>
            <h1 class=\"text-center mb-5\">What Our Clients Say About Our Work</h1>
        </div>
        <div class=\"owl-carousel testimonial-carousel\">
            <div class=\"testimonial-item bg-light rounded my-4\">
                <p class=\"fs-5\"><i class=\"fa fa-quote-left fa-4x text-primary mt-n4 me-3\"></i>The team at Movable delivered an exceptional e-commerce platform that exceeded our expectations. Their attention to detail and user experience focus has significantly improved our online sales.</p>
                <div class=\"d-flex align-items-center\">
                    <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"{{ asset('img/testimonial-1.jpg') }}\" style=\"width: 65px; height: 65px;\">
                    <div class=\"ps-4\">
                        <h5 class=\"mb-1\">Robert Johnson</h5>
                        <span>E-commerce Director</span>
                    </div>
                </div>
            </div>
            <div class=\"testimonial-item bg-light rounded my-4\">
                <p class=\"fs-5\"><i class=\"fa fa-quote-left fa-4x text-primary mt-n4 me-3\"></i>Our corporate website redesign project was handled professionally from start to finish. The modern, responsive design has received fantastic feedback from our clients and stakeholders.</p>
                <div class=\"d-flex align-items-center\">
                    <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"{{ asset('img/testimonial-2.jpg') }}\" style=\"width: 65px; height: 65px;\">
                    <div class=\"ps-4\">
                        <h5 class=\"mb-1\">Emily Parker</h5>
                        <span>Marketing Manager</span>
                    </div>
                </div>
            </div>
            <div class=\"testimonial-item bg-light rounded my-4\">
                <p class=\"fs-5\"><i class=\"fa fa-quote-left fa-4x text-primary mt-n4 me-3\"></i>The mobile app developed by Movable has revolutionized how we connect with our customers. Their development expertise and creative approach delivered a product that stands out in a crowded market.</p>
                <div class=\"d-flex align-items-center\">
                    <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"{{ asset('img/testimonial-3.jpg') }}\" style=\"width: 65px; height: 65px;\">
                    <div class=\"ps-4\">
                        <h5 class=\"mb-1\">Michael Roberts</h5>
                        <span>Technology Director</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{# Testimonial End #}

{# Process Start #}
<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
            <p class=\"section-title text-secondary justify-content-center\"><span></span>Our Process<span></span></p>
            <h1 class=\"text-center mb-5\">How We Work</h1>
        </div>
        <div class=\"row g-4\">
            <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"feature-item bg-light rounded text-center p-4\">
                    <i class=\"fa fa-3x fa-lightbulb text-primary mb-4\"></i>
                    <h5 class=\"mb-3\">1. Discovery</h5>
                    <p class=\"m-0\">We learn about your business, goals, and target audience to develop a strategic plan.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"feature-item bg-light rounded text-center p-4\">
                    <i class=\"fa fa-3x fa-drafting-compass text-primary mb-4\"></i>
                    <h5 class=\"mb-3\">2. Design</h5>
                    <p class=\"m-0\">Our designers create visually stunning concepts tailored to your brand and objectives.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"feature-item bg-light rounded text-center p-4\">
                    <i class=\"fa fa-3x fa-code text-primary mb-4\"></i>
                    <h5 class=\"mb-3\">3. Development</h5>
                    <p class=\"m-0\">Our developers bring the designs to life with clean, optimized, and responsive code.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                <div class=\"feature-item bg-light rounded text-center p-4\">
                    <i class=\"fa fa-3x fa-rocket text-primary mb-4\"></i>
                    <h5 class=\"mb-3\">4. Launch</h5>
                    <p class=\"m-0\">We thoroughly test and deploy your project, providing ongoing support and maintenance.</p>
                </div>
            </div>
        </div>
    </div>
</div>
{# Process End #}

{# Call to Action Start #}
<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
            <h1 class=\"text-center mb-5\">Ready to Discuss Your Project?</h1>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <p class=\"text-center mb-4\">Let's create something amazing together. Contact us to discuss your project requirements and get a customized solution for your business.</p>
                <div class=\"text-center\">
                    <a href=\"{{ path('app_front_contact') }}\" class=\"btn btn-primary rounded-pill py-3 px-5\">Contact Us Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
{# Call to Action End #}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize WOW.js
            new WOW().init();
            
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
        });
    </script>
{% endblock %}

", "front/portfolio/index.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\front\\portfolio\\index.html.twig");
    }
}
