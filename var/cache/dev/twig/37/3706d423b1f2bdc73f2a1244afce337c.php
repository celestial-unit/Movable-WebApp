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

/* Ticket/show.html.twig */
class __TwigTemplate_179d4221d3b4d0563274b8e9d8553cf0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Ticket/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Ticket/show.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "Ticket/show.html.twig", 1);
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

        yield "Ticket #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Make a Reservation</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">New Reservation</li>
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

    // line 22
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

        // line 23
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">Ticket Details</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <p><strong>Ticket Number:</strong> ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 33, $this->source); })()), "ticketNumber", [], "any", false, false, false, 33), "html", null, true);
        yield "</p>
                            <p><strong>Issue Date:</strong> ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 34, $this->source); })()), "issueDate", [], "any", false, false, false, 34), "Y-m-d H:i"), "html", null, true);
        yield "</p>
                            <p><strong>Status:</strong> <span class=\"badge bg-success\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35), "html", null, true);
        yield "</span></p>
                        </div>
                        <div class=\"col-md-6\">
                            <p><strong>Price:</strong> \$";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 38, $this->source); })()), "price", [], "any", false, false, false, 38), 2), "html", null, true);
        yield "</p>
                            <p><strong>Created At:</strong> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 39, $this->source); })()), "createdAt", [], "any", false, false, false, 39), "Y-m-d H:i"), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    
                    <h5 class=\"mt-4\">Reservation Details</h5>
                    <hr>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <p><strong>Date:</strong> ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 47, $this->source); })()), "reservation", [], "any", false, false, false, 47), "date", [], "any", false, false, false, 47), "Y-m-d H:i"), "html", null, true);
        yield "</p>
                            <p><strong>Location:</strong> ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 48, $this->source); })()), "reservation", [], "any", false, false, false, 48), "location", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
                            <p><strong>Seats:</strong> ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 49, $this->source); })()), "reservation", [], "any", false, false, false, 49), "seats", [], "any", false, false, false, 49), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <p><strong>Agent Type:</strong> ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 52, $this->source); })()), "reservation", [], "any", false, false, false, 52), "agent", [], "any", false, false, false, 52), "html", null, true);
        yield "</p>
                            <p><strong>Transport:</strong> ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 53, $this->source); })()), "reservation", [], "any", false, false, false, 53), "Transport", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
                            <p><strong>Driver:</strong> ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 54, $this->source); })()), "reservation", [], "any", false, false, false, 54), "driver", [], "any", false, false, false, 54), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit\"></i> Edit Ticket
                        </a>
                        <form method=\"post\" action=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Are you sure you want to delete this ticket and reservation?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63))), "html", null, true);
        yield "\">
                            <button class=\"btn btn-danger\">
                                <i class=\"fas fa-trash\"></i> Delete Ticket
                            </button>
                        </form>
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
        return "Ticket/show.html.twig";
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
        return array (  226 => 63,  222 => 62,  216 => 59,  208 => 54,  204 => 53,  200 => 52,  194 => 49,  190 => 48,  186 => 47,  175 => 39,  171 => 38,  165 => 35,  161 => 34,  157 => 33,  145 => 23,  132 => 22,  112 => 13,  102 => 5,  89 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Ticket #{{ ticket.id }}{% endblock %}
{% block hero_banner %}
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Make a Reservation</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">New Reservation</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}
{% block content %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">Ticket Details</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <p><strong>Ticket Number:</strong> {{ ticket.ticketNumber }}</p>
                            <p><strong>Issue Date:</strong> {{ ticket.issueDate|date('Y-m-d H:i') }}</p>
                            <p><strong>Status:</strong> <span class=\"badge bg-success\">{{ ticket.status }}</span></p>
                        </div>
                        <div class=\"col-md-6\">
                            <p><strong>Price:</strong> \${{ ticket.price|number_format(2) }}</p>
                            <p><strong>Created At:</strong> {{ ticket.createdAt|date('Y-m-d H:i') }}</p>
                        </div>
                    </div>
                    
                    <h5 class=\"mt-4\">Reservation Details</h5>
                    <hr>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <p><strong>Date:</strong> {{ ticket.reservation.date|date('Y-m-d H:i') }}</p>
                            <p><strong>Location:</strong> {{ ticket.reservation.location }}</p>
                            <p><strong>Seats:</strong> {{ ticket.reservation.seats }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <p><strong>Agent Type:</strong> {{ ticket.reservation.agent }}</p>
                            <p><strong>Transport:</strong> {{ ticket.reservation.Transport }}</p>
                            <p><strong>Driver:</strong> {{ ticket.reservation.driver }}</p>
                        </div>
                    </div>
                    
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"{{ path('app_ticket_edit', {'id': ticket.id}) }}\" class=\"btn btn-warning\">
                            <i class=\"fas fa-edit\"></i> Edit Ticket
                        </a>
                        <form method=\"post\" action=\"{{ path('app_ticket_delete', {'id': ticket.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this ticket and reservation?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ ticket.id) }}\">
                            <button class=\"btn btn-danger\">
                                <i class=\"fas fa-trash\"></i> Delete Ticket
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "Ticket/show.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\Ticket\\show.html.twig");
    }
}
