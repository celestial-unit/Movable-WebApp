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

/* transport/list.html.twig */
class __TwigTemplate_79aa6d10d329af63a02abe4580f38eeb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/list.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "transport/list.html.twig", 1);
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

        yield "Transportation Management";
        
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
        yield "<!-- Hero Section -->
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white mb-4 animated slideInDown\">Transportation Management</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Transportation</li>
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
    <div class=\"container px-lg-5\">
        <div class=\"wow fadeInUp\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\"><i class=\"fa fa-bus me-3\"></i>Available Means of Transportation</h4>
                </div>
                
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-striped align-middle\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th><i class=\"fa fa-car me-2\"></i>Type</th>
                                    <th><i class=\"fa fa-users me-2\"></i>Capacity</th>
                                    <th><i class=\"fa fa-check-circle me-2\"></i>Status</th>
                                    <th><i class=\"fa fa-map-marker me-2\"></i>Destination</th>
                                    <th><i class=\"fa fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 47
            yield "                                    <tr class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
                                        <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                                        <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "capacity", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge bg-";
            // line 51
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "disponibility", [], "any", false, false, false, 51)) ? ("success") : ("danger"));
            yield "\">
                                                ";
            // line 52
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "disponibility", [], "any", false, false, false, 52)) ? ("Available") : ("Occupied"));
            yield "
                                            </span>
                                        </td>
                                        <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "destination", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                                        <td>
                                            <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transport_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-sm btn-primary rounded-pill px-3\">
                                                <i class=\"fa fa-edit me-1\"></i>Edit
                                            </a>
                                            <a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transport_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-sm btn-danger rounded-pill px-3\" 
                                               onclick=\"return confirm('Are you sure you want to delete this transport?');\">
                                                <i class=\"fa fa-trash me-1\"></i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            yield "                                    <tr class=\"wow fadeInUp\">
                                        <td colspan=\"5\" class=\"text-center py-4\">
                                            <div class=\"alert alert-primary mb-0\">
                                                <i class=\"fa fa-info-circle me-2\"></i>No transport entries found
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "                            </tbody>
                        </table>
                    </div>

                    <div class=\"mt-4 d-flex gap-3 wow fadeInUp\">
                        <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transport_new");
        yield "\" 
                           class=\"btn btn-primary rounded-pill px-4\">
                            <i class=\"fa fa-plus me-2\"></i>Add New Transport
                        </a>
                        
                        <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("driver_index");
        yield "\" 
                           class=\"btn btn-secondary rounded-pill px-4\">
                            <i class=\"fa fa-id-card me-2\"></i>Driver List
                        </a>
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

    // line 99
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

        // line 100
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// Initialize WOW animations
new WOW().init();
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
        return "transport/list.html.twig";
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
        return array (  283 => 100,  270 => 99,  248 => 87,  240 => 82,  233 => 77,  220 => 69,  207 => 61,  200 => 57,  195 => 55,  189 => 52,  185 => 51,  180 => 49,  176 => 48,  173 => 47,  168 => 46,  145 => 25,  132 => 24,  112 => 14,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Transportation Management{% endblock %}

{% block hero_banner %}
<!-- Hero Section -->
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white mb-4 animated slideInDown\">Transportation Management</h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Transportation</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block content %}
<div class=\"container-xxl py-5\">
    <div class=\"container px-lg-5\">
        <div class=\"wow fadeInUp\">
            <div class=\"card border-0 shadow-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\"><i class=\"fa fa-bus me-3\"></i>Available Means of Transportation</h4>
                </div>
                
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-striped align-middle\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th><i class=\"fa fa-car me-2\"></i>Type</th>
                                    <th><i class=\"fa fa-users me-2\"></i>Capacity</th>
                                    <th><i class=\"fa fa-check-circle me-2\"></i>Status</th>
                                    <th><i class=\"fa fa-map-marker me-2\"></i>Destination</th>
                                    <th><i class=\"fa fa-cogs me-2\"></i>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for transport in transports %}
                                    <tr class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
                                        <td>{{ transport.type }}</td>
                                        <td>{{ transport.capacity }}</td>
                                        <td>
                                            <span class=\"badge bg-{{ transport.disponibility ? 'success' : 'danger' }}\">
                                                {{ transport.disponibility ? 'Available' : 'Occupied' }}
                                            </span>
                                        </td>
                                        <td>{{ transport.destination }}</td>
                                        <td>
                                            <a href=\"{{ path('transport_edit', {'id': transport.id}) }}\" 
                                               class=\"btn btn-sm btn-primary rounded-pill px-3\">
                                                <i class=\"fa fa-edit me-1\"></i>Edit
                                            </a>
                                            <a href=\"{{ path('transport_delete', {'id': transport.id}) }}\" 
                                               class=\"btn btn-sm btn-danger rounded-pill px-3\" 
                                               onclick=\"return confirm('Are you sure you want to delete this transport?');\">
                                                <i class=\"fa fa-trash me-1\"></i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr class=\"wow fadeInUp\">
                                        <td colspan=\"5\" class=\"text-center py-4\">
                                            <div class=\"alert alert-primary mb-0\">
                                                <i class=\"fa fa-info-circle me-2\"></i>No transport entries found
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    <div class=\"mt-4 d-flex gap-3 wow fadeInUp\">
                        <a href=\"{{ path('transport_new') }}\" 
                           class=\"btn btn-primary rounded-pill px-4\">
                            <i class=\"fa fa-plus me-2\"></i>Add New Transport
                        </a>
                        
                        <a href=\"{{ path('driver_index') }}\" 
                           class=\"btn btn-secondary rounded-pill px-4\">
                            <i class=\"fa fa-id-card me-2\"></i>Driver List
                        </a>
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
// Initialize WOW animations
new WOW().init();
</script>
{% endblock %}", "transport/list.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\transport\\list.html.twig");
    }
}
