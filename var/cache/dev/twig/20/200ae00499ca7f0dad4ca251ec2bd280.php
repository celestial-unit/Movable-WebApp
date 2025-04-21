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

/* event/coordinates.html.twig */
class __TwigTemplate_5676e392ec7ac1eb8115459558303702 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/coordinates.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/coordinates.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/coordinates.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Event Coordinates";
        
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
        yield "<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2 class=\"mb-0\">Location Coordinates</h2>
                </div>
                <div class=\"card-body\">
                    <div id=\"coordinates-container\" class=\"text-center\">
                        <div class=\"spinner-border text-primary\" role=\"status\">
                            <span class=\"visually-hidden\">Loading...</span>
                        </div>
                        <p class=\"mt-2\">Fetching coordinates...</p>
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

    // line 28
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

        // line 29
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const city = urlParams.get('city');
    
    if (city) {
        fetch(`/event/coordinates/\${encodeURIComponent(city)}`)
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('coordinates-container');
                container.innerHTML = `
                    <h4 class=\"mb-3\">\${data.city}</h4>
                    <div class=\"list-group\">
                        <div class=\"list-group-item\">
                            <i class=\"bi bi-globe me-2\"></i>
                            Latitude: <strong>\${data.coordinates.latitude}</strong>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"bi bi-globe me-2\"></i>
                            Longitude: <strong>\${data.coordinates.longitude}</strong>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"bi bi-flag me-2\"></i>
                            Country: <strong>\${data.coordinates.country}</strong>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"bi bi-pin-map me-2\"></i>
                            State/Region: <strong>\${data.coordinates.state}</strong>
                        </div>
                    </div>
                    <div class=\"mt-3\">
                        <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn btn-primary\">
                            <i class=\"bi bi-arrow-left me-2\"></i>Back to Events
                        </a>
                    </div>
                `;
            })
            .catch(error => {
                const container = document.getElementById('coordinates-container');
                container.innerHTML = `
                    <div class=\"alert alert-danger\">
                        Error fetching coordinates: \${error.message}
                    </div>
                `;
            });
    }
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
        return "event/coordinates.html.twig";
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
        return array (  179 => 61,  144 => 29,  131 => 28,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/event/coordinates.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Event Coordinates{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2 class=\"mb-0\">Location Coordinates</h2>
                </div>
                <div class=\"card-body\">
                    <div id=\"coordinates-container\" class=\"text-center\">
                        <div class=\"spinner-border text-primary\" role=\"status\">
                            <span class=\"visually-hidden\">Loading...</span>
                        </div>
                        <p class=\"mt-2\">Fetching coordinates...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const city = urlParams.get('city');
    
    if (city) {
        fetch(`/event/coordinates/\${encodeURIComponent(city)}`)
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('coordinates-container');
                container.innerHTML = `
                    <h4 class=\"mb-3\">\${data.city}</h4>
                    <div class=\"list-group\">
                        <div class=\"list-group-item\">
                            <i class=\"bi bi-globe me-2\"></i>
                            Latitude: <strong>\${data.coordinates.latitude}</strong>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"bi bi-globe me-2\"></i>
                            Longitude: <strong>\${data.coordinates.longitude}</strong>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"bi bi-flag me-2\"></i>
                            Country: <strong>\${data.coordinates.country}</strong>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"bi bi-pin-map me-2\"></i>
                            State/Region: <strong>\${data.coordinates.state}</strong>
                        </div>
                    </div>
                    <div class=\"mt-3\">
                        <a href=\"{{ path('app_event_index') }}\" class=\"btn btn-primary\">
                            <i class=\"bi bi-arrow-left me-2\"></i>Back to Events
                        </a>
                    </div>
                `;
            })
            .catch(error => {
                const container = document.getElementById('coordinates-container');
                container.innerHTML = `
                    <div class=\"alert alert-danger\">
                        Error fetching coordinates: \${error.message}
                    </div>
                `;
            });
    }
});
</script>
{% endblock %}", "event/coordinates.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event\\coordinates.html.twig");
    }
}
