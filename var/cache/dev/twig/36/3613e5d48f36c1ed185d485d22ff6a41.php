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

/* event_registration/show.html.twig */
class __TwigTemplate_02ac25b7b47a0724186002c2844d44bf extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event_registration/show.html.twig", 1);
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

        yield "Event Ticket - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event_registration"] ?? null), "event", [], "any", false, true, false, 3), "title", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event_registration"] ?? null), "event", [], "any", false, true, false, 3), "title", [], "any", false, false, false, 3), "Registration")) : ("Registration")), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
    .ticket-container {
        max-width: 600px;
        margin: 2rem auto;
        position: relative;
        transform-style: preserve-3d;
        transition: transform 0.3s ease;
    }

    .ticket-container:hover {
        transform: translateY(-5px);
    }

    .ticket-design {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        position: relative;
        overflow: hidden;
        border: 2px solid #e9ecef;
    }

    .ticket-header {
        background: linear-gradient(45deg, #2c3e50, #3498db);
        color: white;
        padding: 1.5rem;
        border-radius: 13px 13px 0 0;
        position: relative;
    }

    .ticket-header::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 0;
        right: 0;
        height: 30px;
        background: linear-gradient(45deg, #3498db 30%, transparent 50%, #3498db 70%);
        opacity: 0.2;
    }

    .ticket-body {
        padding: 2rem;
        position: relative;
    }

    .ticket-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 0;
        border-bottom: 1px dashed #dee2e6;
    }

    .ticket-row:last-child {
        border-bottom: none;
    }

    .ticket-label {
        font-weight: 600;
        color: #6c757d;
        min-width: 140px;
    }

    .ticket-value {
        color: #2c3e50;
        text-align: right;
        flex-grow: 1;
        padding-left: 1rem;
    }

    .ticket-status {
        position: absolute;
        top: -15px;
        right: 20px;
        background: #e74c3c;
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 20px;
        font-weight: bold;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        text-transform: uppercase;
        font-size: 0.9rem;
    }

    .ticket-actions {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        margin-top: 2rem;
        justify-content: center;
        padding: 0 2rem 2rem;
    }

    .ticket-barcode {
        background: repeating-linear-gradient(90deg, #000 0, #000 2px, transparent 2px, transparent 10px);
        height: 40px;
        margin: 1rem 0;
        opacity: 0.3;
    }

    .ticket-perforation {
        height: 10px;
        background: repeating-linear-gradient(90deg, transparent 0, transparent 5px, #fff 5px, #fff 10px);
        margin: 0 -2px;
        border-left: 2px solid #dee2e6;
        border-right: 2px solid #dee2e6;
    }

    .ticket-event-link {
        display: block;
        background: rgba(255,255,255,0.1);
        padding: 0.5rem;
        border-radius: 8px;
        transition: background 0.3s ease;
    }

    .ticket-event-link:hover {
        background: rgba(255,255,255,0.2);
        text-decoration: none;
    }

    .ticket-id {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 0.8rem;
        color: rgba(255,255,255,0.8);
    }

    /* Button Styles */
    .ticket-btn {
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        border: 2px solid transparent;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
        cursor: pointer;
        text-decoration: none;
    }

    .btn-back {
        background: #f8f9fa;
        color: #2c3e50;
        border-color: #dee2e6;
    }

    .btn-back:hover {
        background: #e9ecef;
        transform: translateY(-2px);
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    .btn-edit {
        background: #ffc107;
        color: #2c3e50;
        border-color: #ffc107;
    }

    .btn-edit:hover {
        background: #e0a800;
        transform: translateY(-2px);
        box-shadow: 0 3px 8px rgba(255,193,7,0.3);
    }

    .btn-delete {
        background: #dc3545;
        color: white;
        border-color: #dc3545;
    }

    .btn-delete:hover {
        background: #c82333;
        transform: translateY(-2px);
        box-shadow: 0 3px 8px rgba(220,53,69,0.3);
    }

    .btn-icon {
        width: 18px;
        height: 18px;
    }

    /* Delete Form Styling */
    .delete-form {
        display: inline-block;
        margin: 0;
    }

    @media print {
        .ticket-design {
            box-shadow: none;
            border: 2px solid #ddd;
        }
        
        .ticket-actions {
            display: none;
        }
    }
</style>

<div class=\"container mt-4\">
    <div class=\"ticket-container\">
        <div class=\"ticket-design\">
            <div class=\"ticket-header\">
                <div class=\"ticket-id\">#";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 216, $this->source); })()), "id", [], "any", false, false, false, 216), "html", null, true);
        yield "</div>
                <h2 class=\"mb-0\">
                    <i class=\"bi bi-ticket-perforated\"></i>
                    Event Registration
                </h2>
            </div>
            
            <div class=\"ticket-perforation\"></div>
            
            <div class=\"ticket-body\">
                <div class=\"ticket-status bg-";
        // line 226
        yield (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 226, $this->source); })()), "status", [], "any", false, false, false, 226)) == "confirmed")) ? ("success") : ("warning"));
        yield "\">
                    ";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 227, $this->source); })()), "status", [], "any", false, false, false, 227)), "html", null, true);
        yield "
                </div>

                <div class=\"ticket-row\">
                    <span class=\"ticket-label\">
                        <i class=\"bi bi-calendar-event\"></i>
                        Registration Date
                    </span>
                    <span class=\"ticket-value\">
                        ";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 236, $this->source); })()), "registrationDate", [], "any", false, false, false, 236), "F j, Y, g:i a"), "html", null, true);
        yield "
                    </span>
                </div>

                <div class=\"ticket-row\">
                    <span class=\"ticket-label\">
                        <i class=\"bi bi-calendar-check\"></i>
                        Related Event
                    </span>
                    <span class=\"ticket-value\">
                        ";
        // line 246
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 246, $this->source); })()), "event", [], "any", false, false, false, 246)) {
            // line 247
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 247, $this->source); })()), "event", [], "any", false, false, false, 247), "id", [], "any", false, false, false, 247)]), "html", null, true);
            yield "\" 
                               class=\"ticket-event-link\">
                                ";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 249, $this->source); })()), "event", [], "any", false, false, false, 249), "title", [], "any", false, false, false, 249), "html", null, true);
            yield "
                                <small class=\"text-muted\">(ID: ";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 250, $this->source); })()), "event", [], "any", false, false, false, 250), "id", [], "any", false, false, false, 250), "html", null, true);
            yield ")</small>
                            </a>
                        ";
        } else {
            // line 253
            yield "                            <span class=\"text-danger\">Event no longer exists</span>
                        ";
        }
        // line 255
        yield "                    </span>
                </div>

                <div class=\"ticket-barcode\"></div>
            </div>

            <div class=\"ticket-perforation\"></div>
            
            <div class=\"ticket-actions\">
                <a href=\"";
        // line 264
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_registration_index");
        yield "\" 
                   class=\"ticket-btn btn-back\">
                    <svg class=\"btn-icon\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                        <path d=\"M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z\"/>
                    </svg>
                    Back to List
                </a>

                <a href=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_registration_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 272, $this->source); })()), "id", [], "any", false, false, false, 272)]), "html", null, true);
        yield "\" 
                   class=\"ticket-btn btn-edit\">
                    <svg class=\"btn-icon\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                        <path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
                    </svg>
                    Edit
                </a>

                <form class=\"delete-form\" method=\"post\" action=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_registration_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 280, $this->source); })()), "id", [], "any", false, false, false, 280)]), "html", null, true);
        yield "\" 
                      onsubmit=\"return confirm('Are you sure you want to delete this registration?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 282, $this->source); })()), "id", [], "any", false, false, false, 282))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"ticket-btn btn-delete\">
                        <svg class=\"btn-icon\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                            <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z\"/>
                            <path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z\"/>
                        </svg>
                        Delete
                    </button>
                </form>
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
        return "event_registration/show.html.twig";
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
        return array (  415 => 282,  410 => 280,  399 => 272,  388 => 264,  377 => 255,  373 => 253,  367 => 250,  363 => 249,  357 => 247,  355 => 246,  342 => 236,  330 => 227,  326 => 226,  313 => 216,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Event Ticket - {{ event_registration.event.title|default('Registration') }}{% endblock %}

{% block body %}
<style>
    .ticket-container {
        max-width: 600px;
        margin: 2rem auto;
        position: relative;
        transform-style: preserve-3d;
        transition: transform 0.3s ease;
    }

    .ticket-container:hover {
        transform: translateY(-5px);
    }

    .ticket-design {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        position: relative;
        overflow: hidden;
        border: 2px solid #e9ecef;
    }

    .ticket-header {
        background: linear-gradient(45deg, #2c3e50, #3498db);
        color: white;
        padding: 1.5rem;
        border-radius: 13px 13px 0 0;
        position: relative;
    }

    .ticket-header::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 0;
        right: 0;
        height: 30px;
        background: linear-gradient(45deg, #3498db 30%, transparent 50%, #3498db 70%);
        opacity: 0.2;
    }

    .ticket-body {
        padding: 2rem;
        position: relative;
    }

    .ticket-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 0;
        border-bottom: 1px dashed #dee2e6;
    }

    .ticket-row:last-child {
        border-bottom: none;
    }

    .ticket-label {
        font-weight: 600;
        color: #6c757d;
        min-width: 140px;
    }

    .ticket-value {
        color: #2c3e50;
        text-align: right;
        flex-grow: 1;
        padding-left: 1rem;
    }

    .ticket-status {
        position: absolute;
        top: -15px;
        right: 20px;
        background: #e74c3c;
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 20px;
        font-weight: bold;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        text-transform: uppercase;
        font-size: 0.9rem;
    }

    .ticket-actions {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        margin-top: 2rem;
        justify-content: center;
        padding: 0 2rem 2rem;
    }

    .ticket-barcode {
        background: repeating-linear-gradient(90deg, #000 0, #000 2px, transparent 2px, transparent 10px);
        height: 40px;
        margin: 1rem 0;
        opacity: 0.3;
    }

    .ticket-perforation {
        height: 10px;
        background: repeating-linear-gradient(90deg, transparent 0, transparent 5px, #fff 5px, #fff 10px);
        margin: 0 -2px;
        border-left: 2px solid #dee2e6;
        border-right: 2px solid #dee2e6;
    }

    .ticket-event-link {
        display: block;
        background: rgba(255,255,255,0.1);
        padding: 0.5rem;
        border-radius: 8px;
        transition: background 0.3s ease;
    }

    .ticket-event-link:hover {
        background: rgba(255,255,255,0.2);
        text-decoration: none;
    }

    .ticket-id {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 0.8rem;
        color: rgba(255,255,255,0.8);
    }

    /* Button Styles */
    .ticket-btn {
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        border: 2px solid transparent;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
        cursor: pointer;
        text-decoration: none;
    }

    .btn-back {
        background: #f8f9fa;
        color: #2c3e50;
        border-color: #dee2e6;
    }

    .btn-back:hover {
        background: #e9ecef;
        transform: translateY(-2px);
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    .btn-edit {
        background: #ffc107;
        color: #2c3e50;
        border-color: #ffc107;
    }

    .btn-edit:hover {
        background: #e0a800;
        transform: translateY(-2px);
        box-shadow: 0 3px 8px rgba(255,193,7,0.3);
    }

    .btn-delete {
        background: #dc3545;
        color: white;
        border-color: #dc3545;
    }

    .btn-delete:hover {
        background: #c82333;
        transform: translateY(-2px);
        box-shadow: 0 3px 8px rgba(220,53,69,0.3);
    }

    .btn-icon {
        width: 18px;
        height: 18px;
    }

    /* Delete Form Styling */
    .delete-form {
        display: inline-block;
        margin: 0;
    }

    @media print {
        .ticket-design {
            box-shadow: none;
            border: 2px solid #ddd;
        }
        
        .ticket-actions {
            display: none;
        }
    }
</style>

<div class=\"container mt-4\">
    <div class=\"ticket-container\">
        <div class=\"ticket-design\">
            <div class=\"ticket-header\">
                <div class=\"ticket-id\">#{{ event_registration.id }}</div>
                <h2 class=\"mb-0\">
                    <i class=\"bi bi-ticket-perforated\"></i>
                    Event Registration
                </h2>
            </div>
            
            <div class=\"ticket-perforation\"></div>
            
            <div class=\"ticket-body\">
                <div class=\"ticket-status bg-{{ event_registration.status|lower == 'confirmed' ? 'success' : 'warning' }}\">
                    {{ event_registration.status|upper }}
                </div>

                <div class=\"ticket-row\">
                    <span class=\"ticket-label\">
                        <i class=\"bi bi-calendar-event\"></i>
                        Registration Date
                    </span>
                    <span class=\"ticket-value\">
                        {{ event_registration.registrationDate|date('F j, Y, g:i a') }}
                    </span>
                </div>

                <div class=\"ticket-row\">
                    <span class=\"ticket-label\">
                        <i class=\"bi bi-calendar-check\"></i>
                        Related Event
                    </span>
                    <span class=\"ticket-value\">
                        {% if event_registration.event %}
                            <a href=\"{{ path('app_event_show', {'id': event_registration.event.id}) }}\" 
                               class=\"ticket-event-link\">
                                {{ event_registration.event.title }}
                                <small class=\"text-muted\">(ID: {{ event_registration.event.id }})</small>
                            </a>
                        {% else %}
                            <span class=\"text-danger\">Event no longer exists</span>
                        {% endif %}
                    </span>
                </div>

                <div class=\"ticket-barcode\"></div>
            </div>

            <div class=\"ticket-perforation\"></div>
            
            <div class=\"ticket-actions\">
                <a href=\"{{ path('app_event_registration_index') }}\" 
                   class=\"ticket-btn btn-back\">
                    <svg class=\"btn-icon\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                        <path d=\"M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z\"/>
                    </svg>
                    Back to List
                </a>

                <a href=\"{{ path('app_event_registration_edit', {'id': event_registration.id}) }}\" 
                   class=\"ticket-btn btn-edit\">
                    <svg class=\"btn-icon\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                        <path d=\"M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z\"/>
                    </svg>
                    Edit
                </a>

                <form class=\"delete-form\" method=\"post\" action=\"{{ path('app_event_registration_delete', {'id': event_registration.id}) }}\" 
                      onsubmit=\"return confirm('Are you sure you want to delete this registration?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event_registration.id) }}\">
                    <button type=\"submit\" class=\"ticket-btn btn-delete\">
                        <svg class=\"btn-icon\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                            <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z\"/>
                            <path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z\"/>
                        </svg>
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "event_registration/show.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event_registration\\show.html.twig");
    }
}
