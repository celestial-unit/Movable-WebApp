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

/* event_registration/eventregistrationback.html.twig */
class __TwigTemplate_3548705e8ccbbb87c6be3d2ed6f3226e extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/eventregistrationback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/eventregistrationback.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "event_registration/eventregistrationback.html.twig", 1);
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

        yield "Registrations Management";
        
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
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
    <style>
        .registration-status {
            min-width: 100px;
            text-align: center;
        }
        .action-group {
            display: flex;
            gap: 0.5rem;
            justify-content: flex-end;
        }
        .registrations-table td:first-child {
            font-weight: 600;
            color: #697a8d;
        }
        .badge-status {
            font-size: 0.857rem;
            letter-spacing: 0.4px;
        }
        .status-pending { background-color: #fff3cd; color: #664d03; }
        .status-confirmed { background-color: #d1e7dd; color: #0a3622; }
        .status-cancelled { background-color: #f8d7da; color: #58151c; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 32
        yield "    <!-- Sidebar Content -->
    <div class=\"menu-inner-shadow\"></div>
    <ul class=\"menu-inner py-1\">
        <li class=\"menu-item active\">
            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar-event\"></i>
                <div data-i18n=\"Events\">Events</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_new");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-plus-circle\"></i>
                <div data-i18n=\"Create Event\">Create Event</div>
            </a>
        </li>
        <li class=\"menu-item\">
    <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_index");
        yield "\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-list-ul\"></i>
        <div data-i18n=\"View Registrations\">View Registrations</div>
    </a>
</li>

    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 56
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

        // line 57
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <!-- Header Section -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div class=\"d-flex flex-column\">
            <h4 class=\"fw-bold mb-0\">
                <span class=\"text-muted fw-light\">Registrations /</span> Management
            </h4>
            <small class=\"text-muted\">Manage event registrations and participant details</small>
        </div>
        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_new_no_event");
        yield "\" class=\"btn btn-primary\">
            <i class=\"bx bx-plus me-1\"></i> New Registration
        </a>
    </div>

    <!-- Registrations Table Card -->
    <div class=\"card\">
        <div class=\"card-header border-bottom\">
            <h5 class=\"card-title mb-0\">Registration Records</h5>
        </div>
        
        <div class=\"card-datatable table-responsive\">
            <table class=\"table border-top table-hover datatable-table\">
                <thead class=\"table-light\">
                    <tr>
                        <th>#ID</th>
                        <th>Event</th>
                        <th>Registration Date</th>
                        <th class=\"registration-status\">Status</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"table-border-bottom-0\">
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["event_registrations"]) || array_key_exists("event_registrations", $context) ? $context["event_registrations"] : (function () { throw new RuntimeError('Variable "event_registrations" does not exist.', 89, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event_registration"]) {
            // line 90
            yield "                    <tr>
                        <td>#";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "id", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                        <td>
    <div class=\"d-flex flex-column\">
        ";
            // line 94
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "event", [], "any", false, false, false, 94))) {
                // line 95
                yield "            <span class=\"fw-semibold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "event", [], "any", false, false, false, 95), "title", [], "any", false, false, false, 95), "html", null, true);
                yield "</span>
            <small class=\"text-muted\">";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "event", [], "any", false, false, false, 96), "getFormattedDate", [], "method", false, false, false, 96), "html", null, true);
                yield "</small>
        ";
            } else {
                // line 98
                yield "            <span class=\"text-muted\">No Event Linked</span>
        ";
            }
            // line 100
            yield "    </div>
</td>

                        <td>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "registrationDate", [], "any", false, false, false, 103), "html", null, true);
            yield "</td>
                        <td>
                            <span class=\"badge rounded-pill badge-status status-";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "status", [], "any", false, false, false, 105)), "html", null, true);
            yield "\">
                                ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "status", [], "any", false, false, false, 106), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>
                           <div class=\"action-group\">
    <a href=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\" 
       class=\"btn btn-icon btn-label-info\" 
       data-bs-toggle=\"tooltip\" 
       data-bs-placement=\"top\"
       title=\"View Details\">
        <i class=\"bx bx-show\"></i>
    </a>
    <a href=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            yield "\" 
       class=\"btn btn-icon btn-label-primary\"
       data-bs-toggle=\"tooltip\" 
       data-bs-placement=\"top\"
       title=\"Edit Registration\">
        <i class=\"bx bx-edit\"></i>
    </a>
    <form action=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "id", [], "any", false, false, false, 125)]), "html", null, true);
            yield "\" 
          method=\"post\"
          class=\"d-inline\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "id", [], "any", false, false, false, 128))), "html", null, true);
            yield "\">
        <button type=\"submit\" 
                class=\"btn btn-icon btn-label-danger\"
                data-bs-toggle=\"tooltip\" 
                data-bs-placement=\"top\"
                title=\"Delete Registration\"
                onclick=\"return confirm('Are you sure you want to delete this registration?');\">
            <i class=\"bx bx-trash\"></i>
        </button>
    </form>
    <a href=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_registration_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\" 
       class=\"btn btn-icon btn-label-secondary\"
       data-bs-toggle=\"tooltip\"
       data-bs-placement=\"top\"
       title=\"Download PDF\">
        <i class=\"bx bx-file\"></i>
    </a>
     <a href=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_registration_qrcode", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event_registration"], "id", [], "any", false, false, false, 145)]), "html", null, true);
            yield "\" 
           class=\"btn btn-icon btn-label-success\"
           data-bs-toggle=\"tooltip\" 
           data-bs-placement=\"top\"
           title=\"View QR Code\">
            <i class=\"bx bx-qr-scan\"></i>
        </a>
</div>

                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 157
            yield "                    <tr>
                        <td colspan=\"5\" class=\"text-center py-4\">
                            <div class=\"alert alert-warning mb-0\">
                                <i class=\"bx bx-info-circle me-2\"></i>
                                No registrations found. Start by creating a new registration!
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event_registration'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 173
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

        // line 174
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            const tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Add hover effects
            const tableRows = document.querySelectorAll('.datatable-table tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', () => {
                    row.style.backgroundColor = '#f9fafb';
                });
                row.addEventListener('mouseleave', () => {
                    row.style.backgroundColor = '';
                });
            });
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
        return "event_registration/eventregistrationback.html.twig";
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
        return array (  406 => 174,  393 => 173,  377 => 166,  363 => 157,  346 => 145,  336 => 138,  323 => 128,  317 => 125,  307 => 118,  297 => 111,  289 => 106,  285 => 105,  280 => 103,  275 => 100,  271 => 98,  266 => 96,  261 => 95,  259 => 94,  253 => 91,  250 => 90,  245 => 89,  219 => 66,  208 => 57,  195 => 56,  176 => 48,  167 => 42,  158 => 36,  152 => 32,  139 => 31,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Registrations Management{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <style>
        .registration-status {
            min-width: 100px;
            text-align: center;
        }
        .action-group {
            display: flex;
            gap: 0.5rem;
            justify-content: flex-end;
        }
        .registrations-table td:first-child {
            font-weight: 600;
            color: #697a8d;
        }
        .badge-status {
            font-size: 0.857rem;
            letter-spacing: 0.4px;
        }
        .status-pending { background-color: #fff3cd; color: #664d03; }
        .status-confirmed { background-color: #d1e7dd; color: #0a3622; }
        .status-cancelled { background-color: #f8d7da; color: #58151c; }
    </style>
{% endblock %}

{% block sidebar %}
    <!-- Sidebar Content -->
    <div class=\"menu-inner-shadow\"></div>
    <ul class=\"menu-inner py-1\">
        <li class=\"menu-item active\">
            <a href=\"{{ path('app_eventback_index') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar-event\"></i>
                <div data-i18n=\"Events\">Events</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"{{ path('app_eventback_new') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-plus-circle\"></i>
                <div data-i18n=\"Create Event\">Create Event</div>
            </a>
        </li>
        <li class=\"menu-item\">
    <a href=\"{{ path('app_eventback_registration_index') }}\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons bx bx-list-ul\"></i>
        <div data-i18n=\"View Registrations\">View Registrations</div>
    </a>
</li>

    </ul>
{% endblock %}
{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <!-- Header Section -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div class=\"d-flex flex-column\">
            <h4 class=\"fw-bold mb-0\">
                <span class=\"text-muted fw-light\">Registrations /</span> Management
            </h4>
            <small class=\"text-muted\">Manage event registrations and participant details</small>
        </div>
        <a href=\"{{ path('app_eventback_registration_new_no_event') }}\" class=\"btn btn-primary\">
            <i class=\"bx bx-plus me-1\"></i> New Registration
        </a>
    </div>

    <!-- Registrations Table Card -->
    <div class=\"card\">
        <div class=\"card-header border-bottom\">
            <h5 class=\"card-title mb-0\">Registration Records</h5>
        </div>
        
        <div class=\"card-datatable table-responsive\">
            <table class=\"table border-top table-hover datatable-table\">
                <thead class=\"table-light\">
                    <tr>
                        <th>#ID</th>
                        <th>Event</th>
                        <th>Registration Date</th>
                        <th class=\"registration-status\">Status</th>
                        <th class=\"text-end\">Actions</th>
                    </tr>
                </thead>
                <tbody class=\"table-border-bottom-0\">
                    {% for event_registration in event_registrations %}
                    <tr>
                        <td>#{{ event_registration.id }}</td>
                        <td>
    <div class=\"d-flex flex-column\">
        {% if event_registration.event is not null %}
            <span class=\"fw-semibold\">{{ event_registration.event.title }}</span>
            <small class=\"text-muted\">{{ event_registration.event.getFormattedDate() }}</small>
        {% else %}
            <span class=\"text-muted\">No Event Linked</span>
        {% endif %}
    </div>
</td>

                        <td>{{ event_registration.registrationDate }}</td>
                        <td>
                            <span class=\"badge rounded-pill badge-status status-{{ event_registration.status|lower }}\">
                                {{ event_registration.status }}
                            </span>
                        </td>
                        <td>
                           <div class=\"action-group\">
    <a href=\"{{ path('app_eventback_registration_show', {'id': event_registration.id}) }}\" 
       class=\"btn btn-icon btn-label-info\" 
       data-bs-toggle=\"tooltip\" 
       data-bs-placement=\"top\"
       title=\"View Details\">
        <i class=\"bx bx-show\"></i>
    </a>
    <a href=\"{{ path('app_eventback_registration_edit', {'id': event_registration.id}) }}\" 
       class=\"btn btn-icon btn-label-primary\"
       data-bs-toggle=\"tooltip\" 
       data-bs-placement=\"top\"
       title=\"Edit Registration\">
        <i class=\"bx bx-edit\"></i>
    </a>
    <form action=\"{{ path('app_eventback_registration_delete', {'id': event_registration.id}) }}\" 
          method=\"post\"
          class=\"d-inline\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event_registration.id) }}\">
        <button type=\"submit\" 
                class=\"btn btn-icon btn-label-danger\"
                data-bs-toggle=\"tooltip\" 
                data-bs-placement=\"top\"
                title=\"Delete Registration\"
                onclick=\"return confirm('Are you sure you want to delete this registration?');\">
            <i class=\"bx bx-trash\"></i>
        </button>
    </form>
    <a href=\"{{ path('app_event_registration_pdf', {'id': event_registration.id}) }}\" 
       class=\"btn btn-icon btn-label-secondary\"
       data-bs-toggle=\"tooltip\"
       data-bs-placement=\"top\"
       title=\"Download PDF\">
        <i class=\"bx bx-file\"></i>
    </a>
     <a href=\"{{ path('app_event_registration_qrcode', {'id': event_registration.id}) }}\" 
           class=\"btn btn-icon btn-label-success\"
           data-bs-toggle=\"tooltip\" 
           data-bs-placement=\"top\"
           title=\"View QR Code\">
            <i class=\"bx bx-qr-scan\"></i>
        </a>
</div>

                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"text-center py-4\">
                            <div class=\"alert alert-warning mb-0\">
                                <i class=\"bx bx-info-circle me-2\"></i>
                                No registrations found. Start by creating a new registration!
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            const tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Add hover effects
            const tableRows = document.querySelectorAll('.datatable-table tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', () => {
                    row.style.backgroundColor = '#f9fafb';
                });
                row.addEventListener('mouseleave', () => {
                    row.style.backgroundColor = '';
                });
            });
        });
    </script>
{% endblock %}
", "event_registration/eventregistrationback.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event_registration\\eventregistrationback.html.twig");
    }
}
