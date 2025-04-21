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

/* event_registration/edit.html.twig */
class __TwigTemplate_f5bafce6d5f344c337af300942788e4e extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event_registration/edit.html.twig", 1);
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

        yield "Edit Registration";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "<style>
    .registration-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 1rem;
    }

    .management-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 2rem;
        background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
    }

    .management-header h1 {
        color: white;
        margin: 0;
        font-size: 2.25rem;
        font-weight: 600;
    }

    .form-container {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .action-group {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.2s ease;
        border: none;
        cursor: pointer;
    }

    .btn-primary {
        background: #4f46e5;
        color: white;
    }

    .btn-primary:hover {
        background: #4338ca;
        transform: translateY(-1px);
    }

    .btn-danger {
        background: #dc2626;
        color: white;
    }

    .btn-danger:hover {
        background: #b91c1c;
        transform: translateY(-1px);
    }

    .btn-secondary {
        background: #64748b;
        color: white;
    }

    .btn-secondary:hover {
        background: #475569;
        transform: translateY(-1px);
    }
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #334155;
        font-weight: 500;
        font-size: 0.875rem;
        transition: color 0.2s ease;
    }

    /* Focus state styling */
    .form-group:focus-within label {
        color: #4f46e5;
    }

    /* Required field indicator */
    label.required:after {
        content: \" *\";
        color: #dc2626;
        margin-left: 0.25rem;
    }

    /* Error message styling */
    .form-error {
        color: #dc2626;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    /* Input field styling */
    .form-control {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        transition: border-color 0.2s ease;
        font-size: 1rem;
    }

    .form-control:focus {
        outline: none;
        border-color: #4f46e5;
        box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.1);
    }

    /* Form group spacing */
    .form-group {
        margin-bottom: 1.5rem;
    }

    /* Checkbox/radio labels */
    .form-check-label {
        color: #475569;
        font-weight: 400;
        margin-left: 0.5rem;
    }

    /* Mobile adjustments */
    @media (max-width: 768px) {
        .form-group label {
            font-size: 0.875rem;
        }
        
        .form-control {
            padding: 0.625rem 0.875rem;
        }
    }
</style>

<div class=\"registration-container\">
    <div class=\"management-header\">
        <h1>✏️ Edit Registration</h1>
    </div>
 <p class=\"status-note\">
    You can see  current status below. If it's pending, please wait for an admin to review your registration ( you are not CHOOSING YOUR STATUS).
</p>
    <div class=\"form-container\">
        ";
        // line 164
        yield Twig\Extension\CoreExtension::include($this->env, $context, "event_registration/_form.html.twig", ["button_label" => "Update"]);
        yield "

        <div class=\"action-group\">
            <a href=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_registration_index");
        yield "\" class=\"btn btn-secondary\">
                Back to List
            </a>

            ";
        // line 171
        yield Twig\Extension\CoreExtension::include($this->env, $context, "event_registration/_delete_form.html.twig");
        yield "
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
        return "event_registration/edit.html.twig";
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
        return array (  300 => 171,  293 => 167,  287 => 164,  132 => 11,  119 => 10,  106 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Registration{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
{% endblock %}

{% block body %}
<style>
    .registration-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 1rem;
    }

    .management-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 2rem;
        background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
    }

    .management-header h1 {
        color: white;
        margin: 0;
        font-size: 2.25rem;
        font-weight: 600;
    }

    .form-container {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .action-group {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.2s ease;
        border: none;
        cursor: pointer;
    }

    .btn-primary {
        background: #4f46e5;
        color: white;
    }

    .btn-primary:hover {
        background: #4338ca;
        transform: translateY(-1px);
    }

    .btn-danger {
        background: #dc2626;
        color: white;
    }

    .btn-danger:hover {
        background: #b91c1c;
        transform: translateY(-1px);
    }

    .btn-secondary {
        background: #64748b;
        color: white;
    }

    .btn-secondary:hover {
        background: #475569;
        transform: translateY(-1px);
    }
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #334155;
        font-weight: 500;
        font-size: 0.875rem;
        transition: color 0.2s ease;
    }

    /* Focus state styling */
    .form-group:focus-within label {
        color: #4f46e5;
    }

    /* Required field indicator */
    label.required:after {
        content: \" *\";
        color: #dc2626;
        margin-left: 0.25rem;
    }

    /* Error message styling */
    .form-error {
        color: #dc2626;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    /* Input field styling */
    .form-control {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        transition: border-color 0.2s ease;
        font-size: 1rem;
    }

    .form-control:focus {
        outline: none;
        border-color: #4f46e5;
        box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.1);
    }

    /* Form group spacing */
    .form-group {
        margin-bottom: 1.5rem;
    }

    /* Checkbox/radio labels */
    .form-check-label {
        color: #475569;
        font-weight: 400;
        margin-left: 0.5rem;
    }

    /* Mobile adjustments */
    @media (max-width: 768px) {
        .form-group label {
            font-size: 0.875rem;
        }
        
        .form-control {
            padding: 0.625rem 0.875rem;
        }
    }
</style>

<div class=\"registration-container\">
    <div class=\"management-header\">
        <h1>✏️ Edit Registration</h1>
    </div>
 <p class=\"status-note\">
    You can see  current status below. If it's pending, please wait for an admin to review your registration ( you are not CHOOSING YOUR STATUS).
</p>
    <div class=\"form-container\">
        {{ include('event_registration/_form.html.twig', {'button_label': 'Update'}) }}

        <div class=\"action-group\">
            <a href=\"{{ path('app_event_registration_index') }}\" class=\"btn btn-secondary\">
                Back to List
            </a>

            {{ include('event_registration/_delete_form.html.twig') }}
        </div>
    </div>
</div>
{% endblock %}", "event_registration/edit.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event_registration\\edit.html.twig");
    }
}
