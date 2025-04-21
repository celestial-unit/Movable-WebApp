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

/* emails/reservation_approved.html.twig */
class __TwigTemplate_6a7524470ae66a8585bbcc0a54c65fa0 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "emails/base_email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reservation_approved.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reservation_approved.html.twig"));

        $this->parent = $this->loadTemplate("emails/base_email.html.twig", "emails/reservation_approved.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <h1>Reservation Approved</h1>
    <p>Dear ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "firstName", [], "any", false, false, false, 5), "html", null, true);
        yield ",</p>
    
    <p>We're pleased to inform you that your reservation has been approved. Below are your ticket details:</p>
    
    <div style=\"background: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px 0;\">
        <h3>Ticket #";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 10, $this->source); })()), "ticketNumber", [], "any", false, false, false, 10), "html", null, true);
        yield "</h3>
        <p><strong>Destination:</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 11, $this->source); })()), "destination", [], "any", false, false, false, 11)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 11, $this->source); })()), "destination", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 11, $this->source); })()), "location", [], "any", false, false, false, 11))), "html", null, true);
        yield "</p>
        <p><strong>Date:</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 12, $this->source); })()), "date", [], "any", false, false, false, 12), "F j, Y H:i"), "html", null, true);
        yield "</p>
        <p><strong>Seats:</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 13, $this->source); })()), "seats", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
        <p><strong>Transport:</strong> ";
        // line 14
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "transport", [], "any", false, false, false, 14)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "transport", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14), "html", null, true)) : (yield "Not specified"));
        yield "</p>
        <p><strong>Payment Mode:</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 15, $this->source); })()), "paymentMode", [], "any", false, false, false, 15), "html", null, true);
        yield "</p>
    </div>
    
    <p>Thank you for choosing our service!</p>
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
        return "emails/reservation_approved.html.twig";
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
        return array (  107 => 15,  103 => 14,  99 => 13,  95 => 12,  91 => 11,  87 => 10,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'emails/base_email.html.twig' %}

{% block content %}
    <h1>Reservation Approved</h1>
    <p>Dear {{ user.firstName }},</p>
    
    <p>We're pleased to inform you that your reservation has been approved. Below are your ticket details:</p>
    
    <div style=\"background: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px 0;\">
        <h3>Ticket #{{ ticket.ticketNumber }}</h3>
        <p><strong>Destination:</strong> {{ reservation.destination ? reservation.destination.name : reservation.location }}</p>
        <p><strong>Date:</strong> {{ reservation.date|date('F j, Y H:i') }}</p>
        <p><strong>Seats:</strong> {{ reservation.seats }}</p>
        <p><strong>Transport:</strong> {{ reservation.transport ? reservation.transport.type : 'Not specified' }}</p>
        <p><strong>Payment Mode:</strong> {{ reservation.paymentMode }}</p>
    </div>
    
    <p>Thank you for choosing our service!</p>
{% endblock %}", "emails/reservation_approved.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\emails\\reservation_approved.html.twig");
    }
}
