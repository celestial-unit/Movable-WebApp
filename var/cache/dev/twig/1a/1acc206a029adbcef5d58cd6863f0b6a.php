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

/* registration/reservation/show.html.twig */
class __TwigTemplate_934ce1e84b85e4b65401740bc4747d85 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/reservation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/reservation/show.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "registration/reservation/show.html.twig", 1);
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

        yield "Reservation Details";
        
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
        yield "<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Reservation Details</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Reservation #";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</li>
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
    <div class=\"container\">
        <div class=\"row g-5\">
            <div class=\"col-lg-8 mx-auto\">
                <div class=\"card shadow-sm border-0 rounded-4\">
                    <div class=\"card-header bg-primary text-white rounded-top-4\">
                        <h4 class=\"mb-0\">Reservation #";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        yield "</h4>
                        <span class=\"badge bg-";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32) == "approved")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32) == "rejected")) ? ("danger") : ("warning"))));
        yield "\">
                            ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33)), "html", null, true);
        yield "
                        </span>
                    </div>
                    <div class=\"card-body p-4\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <dl class=\"row mb-4\">
                                    <dt class=\"col-sm-5\">User</dt>
";
        // line 41
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "html", null, true)) : (yield "N/A"));
        yield "
                                    <dt class=\"col-sm-5\">Date & Time</dt>
                                    <dd class=\"col-sm-7\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 43, $this->source); })()), "date", [], "any", false, false, false, 43), "Y-m-d H:i"), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-5\">Location</dt>
                                    <dd class=\"col-sm-7\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "location", [], "any", false, false, false, 46), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-5\">Destination</dt>
                                    <dd class=\"col-sm-7\">";
        // line 49
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 49, $this->source); })()), "destination", [], "any", false, false, false, 49)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 49, $this->source); })()), "destination", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true)) : (yield "N/A"));
        yield "</dd>
                                </dl>
                            </div>
                            <div class=\"col-md-6\">
                                <dl class=\"row mb-4\">
                                    <dt class=\"col-sm-5\">Seats</dt>
                                    <dd class=\"col-sm-7\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 55, $this->source); })()), "seats", [], "any", false, false, false, 55), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-5\">Payment Mode</dt>
                                    <dd class=\"col-sm-7\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "paymentMode", [], "any", false, false, false, 58)), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-5\">Agent</dt>
                                    <dd class=\"col-sm-7\">";
        // line 61
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 61, $this->source); })()), "agent", [], "any", false, false, false, 61)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 61, $this->source); })()), "agent", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true)) : (yield "N/A"));
        yield "</dd>

                                    <dt class=\"col-sm-5\">Driver</dt>
                                    <dd class=\"col-sm-7\">";
        // line 64
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 64, $this->source); })()), "driver", [], "any", false, false, false, 64)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 64, $this->source); })()), "driver", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true)) : (yield "N/A"));
        yield "</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <dl class=\"row\">
                                    <dt class=\"col-sm-5\">Transport</dt>
                                    <dd class=\"col-sm-7\">
                                        ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 74, $this->source); })()), "transport", [], "any", false, false, false, 74)) {
            // line 75
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 75, $this->source); })()), "transport", [], "any", false, false, false, 75), "type", [], "any", false, false, false, 75), "html", null, true);
            yield " 
                                        ";
        } else {
            // line 77
            yield "                                            N/A
                                        ";
        }
        // line 79
        yield "                                    </dd>
                                </dl>
                            </div>
                            <div class=\"col-md-6\">
                                <dl class=\"row\">
                                    <dt class=\"col-sm-5\">Created At</dt>
                                    <dd class=\"col-sm-7\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 85, $this->source); })()), "createdAt", [], "any", false, false, false, 85), "Y-m-d H:i"), "html", null, true);
        yield "</dd>

                                    <dt class=\"col-sm-5\">Last Updated</dt>
                                    <dd class=\"col-sm-7\">";
        // line 88
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 88, $this->source); })()), "updatedAt", [], "any", false, false, false, 88)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 88, $this->source); })()), "updatedAt", [], "any", false, false, false, 88), "Y-m-d H:i"), "html", null, true)) : (yield "Never"));
        yield "</dd>
                                </dl>
                            </div>
                        </div>
s

                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"fas fa-arrow-left me-2\"></i> Back to list
                            </a>
                            <div>
                                <a href=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
        yield "\" 
                                   class=\"btn btn-primary me-2\">
                                    <i class=\"fas fa-edit me-2\"></i> Edit
                                </a>
                                ";
        // line 103
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reservation/_delete_form.html.twig");
        yield "
                            </div>
                        </div>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/reservation/show.html.twig";
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
        return array (  281 => 103,  274 => 99,  267 => 95,  257 => 88,  251 => 85,  243 => 79,  239 => 77,  233 => 75,  231 => 74,  218 => 64,  212 => 61,  206 => 58,  200 => 55,  191 => 49,  185 => 46,  179 => 43,  174 => 41,  163 => 33,  159 => 32,  155 => 31,  147 => 25,  134 => 24,  115 => 15,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Reservation Details{% endblock %}

{% block hero_banner %}
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Reservation Details</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Reservation #{{ reservation.id }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block content %}
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"row g-5\">
            <div class=\"col-lg-8 mx-auto\">
                <div class=\"card shadow-sm border-0 rounded-4\">
                    <div class=\"card-header bg-primary text-white rounded-top-4\">
                        <h4 class=\"mb-0\">Reservation #{{ reservation.id }}</h4>
                        <span class=\"badge bg-{{ reservation.status == 'approved' ? 'success' : (reservation.status == 'rejected' ? 'danger' : 'warning') }}\">
                            {{ reservation.status|upper }}
                        </span>
                    </div>
                    <div class=\"card-body p-4\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <dl class=\"row mb-4\">
                                    <dt class=\"col-sm-5\">User</dt>
{{ reservation.user ? reservation.user : 'N/A' }}
                                    <dt class=\"col-sm-5\">Date & Time</dt>
                                    <dd class=\"col-sm-7\">{{ reservation.date|date('Y-m-d H:i') }}</dd>

                                    <dt class=\"col-sm-5\">Location</dt>
                                    <dd class=\"col-sm-7\">{{ reservation.location }}</dd>

                                    <dt class=\"col-sm-5\">Destination</dt>
                                    <dd class=\"col-sm-7\">{{ reservation.destination ? reservation.destination.name : 'N/A' }}</dd>
                                </dl>
                            </div>
                            <div class=\"col-md-6\">
                                <dl class=\"row mb-4\">
                                    <dt class=\"col-sm-5\">Seats</dt>
                                    <dd class=\"col-sm-7\">{{ reservation.seats }}</dd>

                                    <dt class=\"col-sm-5\">Payment Mode</dt>
                                    <dd class=\"col-sm-7\">{{ reservation.paymentMode|capitalize }}</dd>

                                    <dt class=\"col-sm-5\">Agent</dt>
                                    <dd class=\"col-sm-7\">{{ reservation.agent ? reservation.agent.name : 'N/A' }}</dd>

                                    <dt class=\"col-sm-5\">Driver</dt>
                                    <dd class=\"col-sm-7\">{{ reservation.driver ? reservation.driver.name : 'N/A' }}</dd>
                                </dl>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <dl class=\"row\">
                                    <dt class=\"col-sm-5\">Transport</dt>
                                    <dd class=\"col-sm-7\">
                                        {% if reservation.transport %}
                                            {{ reservation.transport.type }} 
                                        {% else %}
                                            N/A
                                        {% endif %}
                                    </dd>
                                </dl>
                            </div>
                            <div class=\"col-md-6\">
                                <dl class=\"row\">
                                    <dt class=\"col-sm-5\">Created At</dt>
                                    <dd class=\"col-sm-7\">{{ reservation.createdAt|date('Y-m-d H:i') }}</dd>

                                    <dt class=\"col-sm-5\">Last Updated</dt>
                                    <dd class=\"col-sm-7\">{{ reservation.updatedAt ? reservation.updatedAt|date('Y-m-d H:i') : 'Never' }}</dd>
                                </dl>
                            </div>
                        </div>
s

                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-outline-secondary\">
                                <i class=\"fas fa-arrow-left me-2\"></i> Back to list
                            </a>
                            <div>
                                <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\" 
                                   class=\"btn btn-primary me-2\">
                                    <i class=\"fas fa-edit me-2\"></i> Edit
                                </a>
                                {{ include('reservation/_delete_form.html.twig') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "registration/reservation/show.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\registration\\reservation\\show.html.twig");
    }
}
