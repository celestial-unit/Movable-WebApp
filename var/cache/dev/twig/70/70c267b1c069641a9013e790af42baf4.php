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

/* Destinations/destination/show.html.twig */
class __TwigTemplate_440b891e0b1e43e84c06c16a4b82b052 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Destinations/destination/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Destinations/destination/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "Destinations/destination/show.html.twig", 1);
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

        yield "Destination";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <h1>Destination</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdDestination</th>
                <td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 13, $this->source); })()), "idDestination", [], "any", false, false, false, 13), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 21, $this->source); })()), "location", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 25, $this->source); })()), "category", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 29, $this->source); })()), "status", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Routes</th>
                <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 33, $this->source); })()), "routes", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>ContactInformation</th>
                <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 37, $this->source); })()), "contactInformation", [], "any", false, false, false, 37), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 41, $this->source); })()), "image", [], "any", false, false, false, 41), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Rating</th>
                <td>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 45, $this->source); })()), "rating", [], "any", false, false, false, 45), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

        <div style=\"display: flex; gap: 10px;\">
        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Destinations_page");
        yield "\" class=\"btn btn-secondary\">Back to list</a>
        <a href=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_destination_edit", ["idDestination" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 56, $this->source); })()), "idDestination", [], "any", false, false, false, 56)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Edit</a>
        ";
        // line 57
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Destinations/destination/_delete_form.html.twig");
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
        return "Destinations/destination/show.html.twig";
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
        return array (  188 => 57,  184 => 56,  180 => 55,  171 => 49,  164 => 45,  157 => 41,  150 => 37,  143 => 33,  136 => 29,  129 => 25,  122 => 21,  115 => 17,  108 => 13,  100 => 7,  87 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block title %}Destination{% endblock %}


{% block body %}
    <h1>Destination</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdDestination</th>
                <td>{{ destination.idDestination }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ destination.name }}</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>{{ destination.location }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ destination.category }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ destination.status }}</td>
            </tr>
            <tr>
                <th>Routes</th>
                <td>{{ destination.routes }}</td>
            </tr>
            <tr>
                <th>ContactInformation</th>
                <td>{{ destination.contactInformation }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ destination.image }}</td>
            </tr>
            <tr>
                <th>Rating</th>
                <td>{{ destination.rating }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ destination.description }}</td>
            </tr>
        </tbody>
    </table>

        <div style=\"display: flex; gap: 10px;\">
        <a href=\"{{ path('Destinations_page') }}\" class=\"btn btn-secondary\">Back to list</a>
        <a href=\"{{ path('app_destination_edit', {'idDestination': destination.idDestination}) }}\" class=\"btn btn-primary\">Edit</a>
        {{ include('Destinations/destination/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "Destinations/destination/show.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\Destinations\\destination\\show.html.twig");
    }
}
