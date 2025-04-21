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

/* Destinations/parkingspot/show.html.twig */
class __TwigTemplate_7c0a2bc5fd2b1f90c5dd7167e500c839 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Destinations/parkingspot/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Destinations/parkingspot/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "Destinations/parkingspot/show.html.twig", 1);
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

        yield "Parkingspot";
        
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
        yield "    <h1>Parkingspot</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id_parking</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parkingspot"]) || array_key_exists("parkingspot", $context) ? $context["parkingspot"] : (function () { throw new RuntimeError('Variable "parkingspot" does not exist.', 12, $this->source); })()), "id_Parking", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Is_accessible</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parkingspot"]) || array_key_exists("parkingspot", $context) ? $context["parkingspot"] : (function () { throw new RuntimeError('Variable "parkingspot" does not exist.', 16, $this->source); })()), "isAccessible", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Is_available</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parkingspot"]) || array_key_exists("parkingspot", $context) ? $context["parkingspot"] : (function () { throw new RuntimeError('Variable "parkingspot" does not exist.', 20, $this->source); })()), "isAvailable", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Spot_number</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parkingspot"]) || array_key_exists("parkingspot", $context) ? $context["parkingspot"] : (function () { throw new RuntimeError('Variable "parkingspot" does not exist.', 24, $this->source); })()), "spotNumber", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Parking_fees</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parkingspot"]) || array_key_exists("parkingspot", $context) ? $context["parkingspot"] : (function () { throw new RuntimeError('Variable "parkingspot" does not exist.', 28, $this->source); })()), "parkingFees", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Size</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parkingspot"]) || array_key_exists("parkingspot", $context) ? $context["parkingspot"] : (function () { throw new RuntimeError('Variable "parkingspot" does not exist.', 32, $this->source); })()), "size", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Notes</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parkingspot"]) || array_key_exists("parkingspot", $context) ? $context["parkingspot"] : (function () { throw new RuntimeError('Variable "parkingspot" does not exist.', 36, $this->source); })()), "notes", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <div style=\"display: flex; gap: 10px;\">
        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parkingspot_index");
        yield "\" class=\"btn btn-secondary\">Back to list</a>
        <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parkingspot_edit", ["id_parking" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["parkingspot"]) || array_key_exists("parkingspot", $context) ? $context["parkingspot"] : (function () { throw new RuntimeError('Variable "parkingspot" does not exist.', 43, $this->source); })()), "id_parking", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Edit</a>
        ";
        // line 44
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Destinations/parkingspot/_delete_form.html.twig");
        yield "
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
        return "Destinations/parkingspot/show.html.twig";
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
        return array (  167 => 44,  163 => 43,  159 => 42,  150 => 36,  143 => 32,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block title %}Parkingspot{% endblock %}

{% block body %}
    <h1>Parkingspot</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id_parking</th>
                <td>{{ parkingspot.id_Parking }}</td>
            </tr>
            <tr>
                <th>Is_accessible</th>
                <td>{{ parkingspot.isAccessible }}</td>
            </tr>
            <tr>
                <th>Is_available</th>
                <td>{{ parkingspot.isAvailable }}</td>
            </tr>
            <tr>
                <th>Spot_number</th>
                <td>{{ parkingspot.spotNumber }}</td>
            </tr>
            <tr>
                <th>Parking_fees</th>
                <td>{{ parkingspot.parkingFees }}</td>
            </tr>
            <tr>
                <th>Size</th>
                <td>{{ parkingspot.size }}</td>
            </tr>
            <tr>
                <th>Notes</th>
                <td>{{ parkingspot.notes }}</td>
            </tr>
        </tbody>
    </table>

    <div style=\"display: flex; gap: 10px;\">
        <a href=\"{{ path('app_parkingspot_index') }}\" class=\"btn btn-secondary\">Back to list</a>
        <a href=\"{{ path('app_parkingspot_edit', {'id_parking': parkingspot.id_parking}) }}\" class=\"btn btn-primary\">Edit</a>
        {{ include('Destinations/parkingspot/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "Destinations/parkingspot/show.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\Destinations\\parkingspot\\show.html.twig");
    }
}
