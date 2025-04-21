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

/* admin/reservation_approved.html.twig */
class __TwigTemplate_8058565f99e6ba1e514dec23f9f97b53 extends Template
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
        return "admin/layouts/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_approved.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_approved.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/reservation_approved.html.twig", 1);
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

        yield "Approved Reservations";
        
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
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h4 class=\"fw-bold py-3 mb-0\">
            <span class=\"text-muted fw-light\">Admin /</span> Approved Reservations
        </h4>
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"bx bx-arrow-back me-1\"></i> Back to Pending
        </a>
    </div>

    ";
        // line 16
        yield from         $this->loadTemplate("admin/reservation/_filters.html.twig", "admin/reservation_approved.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["target_path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservations_approved")]));
        // line 17
        yield "
    <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">Approved Reservations</h5>
            <small class=\"text-muted\">Showing ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 21, $this->source); })())), "html", null, true);
        yield " records</small>
        </div>
        <div class=\"table-responsive text-nowrap\">
            ";
        // line 24
        yield from         $this->loadTemplate("admin/reservation/_reservations_table.html.twig", "admin/reservation_approved.html.twig", 24)->unwrap()->yield(CoreExtension::merge($context, ["reservations" => (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 24, $this->source); })()), "show_actions" => false]));
        // line 25
        yield "        </div>
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
        return "admin/reservation_approved.html.twig";
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
        return array (  131 => 25,  129 => 24,  123 => 21,  117 => 17,  115 => 16,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layouts/admin.html.twig' %}

{% block title %}Approved Reservations{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h4 class=\"fw-bold py-3 mb-0\">
            <span class=\"text-muted fw-light\">Admin /</span> Approved Reservations
        </h4>
        <a href=\"{{ path('admin_waitlist_index') }}\" class=\"btn btn-secondary\">
            <i class=\"bx bx-arrow-back me-1\"></i> Back to Pending
        </a>
    </div>

    {% include 'admin/reservation/_filters.html.twig' with {'target_path': path('admin_reservations_approved')} %}

    <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">Approved Reservations</h5>
            <small class=\"text-muted\">Showing {{ reservations|length }} records</small>
        </div>
        <div class=\"table-responsive text-nowrap\">
            {% include 'admin/reservation/_reservations_table.html.twig' with {'reservations': reservations, 'show_actions': false} %}
        </div>
    </div>
</div>
{% endblock %}", "admin/reservation_approved.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\reservation_approved.html.twig");
    }
}
