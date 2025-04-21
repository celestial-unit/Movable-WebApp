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

/* event/edit1.html.twig */
class __TwigTemplate_55e67594cebe74b4a54a7ceabac3837f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/edit1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/edit1.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "event/edit1.html.twig", 1);
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

        yield "Edit Event";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/pages/form-validation.css"), "html", null, true);
        yield "\">
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-hover: #4f46e5;
            --danger-color: #dc3545;
            --success-color: #28a745;
            --transition-timing: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .menu-link {
            transition: all var(--transition-timing);
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            margin: 0.25rem 1rem;
        }

        .menu-link:hover {
            background: rgba(99, 102, 241, 0.1);
            transform: translateX(5px);
        }

        .menu-item.active .menu-link {
            background: rgba(99, 102, 241, 0.1);
            position: relative;
        }

        .menu-item.active .menu-link::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--primary-color);
            border-radius: 2px 0 0 2px;
        }

        .card-header-gradient {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-hover) 100%);
            border-bottom: none;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }

        .profanity-warning {
            animation: slideIn 0.3s ease-out;
        }

        @keyframes slideIn {
            from { transform: translateY(-10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .hover-scale {
            transition: transform 0.2s ease;
        }

        .hover-scale:hover {
            transform: translateY(-2px);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "    <!-- Enhanced Sidebar -->
    <div class=\"menu-inner-shadow\"></div>
    <ul class=\"menu-inner py-3\">
        <li class=\"menu-item active\">
            <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_index");
        yield "\" class=\"menu-link d-flex align-items-center\">
                <i class=\"menu-icon tf-icons bx bx-calendar-event me-3\"></i>
                <div class=\"fw-medium\" data-i18n=\"Events\">Events</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_new");
        yield "\" class=\"menu-link d-flex align-items-center\">
                <i class=\"menu-icon tf-icons bx bx-plus-circle me-3\"></i>
                <div class=\"fw-medium\" data-i18n=\"Create Event\">Create Event</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_index");
        yield "\" class=\"menu-link d-flex align-items-center\">
                <i class=\"menu-icon tf-icons bx bx-list-ul me-3\"></i>
                <div class=\"fw-medium\" data-i18n=\"View Registrations\">View Registrations</div>
            </a>
        </li>
    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
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

        // line 100
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"row\">
        <div class=\"col-12\">
            <!-- Page Header -->
            <div class=\"d-flex justify-content-between align-items-center mb-5\">
                <div>
                    <h4 class=\"fw-bold mb-1\">Edit Event</h4>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_index");
        yield "\">Events</a></li>
                            <li class=\"breadcrumb-item active\">Edit</li>
                        </ol>
                    </nav>
                </div>
                <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_index");
        yield "\" class=\"btn btn-label-secondary hover-scale\">
                    <i class=\"bx bx-chevron-left scaleX-n1-rtl me-2\"></i>
                    Back to List
                </a>
            </div>

            <!-- Edit Form Card -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header card-header-gradient text-white py-3\">
                    <h5 class=\"card-title mb-0 d-flex align-items-center\">
                        <i class=\"bx bx-edit me-2\"></i>
                        Event Details
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 129
        yield Twig\Extension\CoreExtension::include($this->env, $context, "event/_form.html.twig", ["button_label" => "Update Event", "button_class" => "btn-primary hover-scale", "include_delete" => true, "delete_btn_class" => "btn-danger hover-scale"]);
        // line 134
        yield "
                </div>
            </div>

            <!-- Registrations Card -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0 d-flex align-items-center\">
                        <i class=\"bx bx-user-circle me-2\"></i>
                        Event Registrations
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    <div class=\"alert alert-info d-flex align-items-center\">
                        <i class=\"bx bx-info-circle me-3\"></i>
                        <div>
                            Manage registrations through the 
                            <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_index");
        yield "\" class=\"alert-link fw-medium\">
                                Registrations Dashboard
                            </a>. You can view, edit, and manage attendee information there.
                        </div>
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

    // line 163
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

        // line 164
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/flatpickr/flatpickr.js"), "html", null, true);
        yield "\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced Date/Time Pickers
    const dateConfig = {
        dateFormat: 'Y-m-d',
        minDate: 'today',
        allowInput: true
    };

    const timeConfig = {
        enableTime: true,
        noCalendar: true,
        dateFormat: 'H:i',
        time_24hr: true
    };

    document.querySelectorAll('.flatpickr-date').forEach(fp => flatpickr(fp, dateConfig));
    document.querySelectorAll('.flatpickr-time').forEach(fp => flatpickr(fp, timeConfig));

    // Enhanced Profanity Filter
    function showProfanityWarning(field) {
        const existingWarning = field.parentNode.querySelector('.profanity-warning');
        if (!existingWarning) {
            const warning = document.createElement('div');
            warning.className = 'profanity-warning text-danger mt-2 small d-flex align-items-center';
            warning.innerHTML = `
                <i class=\"bx bx-shield-x me-2\"></i>
                Inappropriate content detected and modified
            `;
            field.parentNode.insertBefore(warning, field.nextElementSibling);
        }
    }

    function checkProfanity(text, callback, field) {
        fetch('";
        // line 200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_check_profanity");
        yield "', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({ text: text })
        })
        .then(response => response.json())
        .then(data => {
            if (data.censoredText && data.censoredText !== text) {
                callback(data.censoredText);
                showProfanityWarning(field);
                field.classList.add('is-invalid');
            } else {
                field.classList.remove('is-invalid');
            }
        });
    }

    function setupProfanityListener(inputField) {
        let previousValue = inputField.value;
        
        inputField.addEventListener('input', function(e) {
            clearTimeout(this.timer);
            this.timer = setTimeout(() => {
                checkProfanity(e.target.value, (censoredText) => {
                    if (e.target.value === this.value) {
                        e.target.value = censoredText;
                        previousValue = censoredText;
                    }
                }, inputField);
            }, 500);
        });
    }

    // Initialize for relevant fields
    const monitoredFields = ['#event_title', '#event_description'];
    monitoredFields.forEach(selector => {
        const field = document.querySelector(selector);
        if (field) setupProfanityListener(field);
    });

    // Form Submission Handling
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('[type=\"submit\"]');
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <span class=\"spinner-border spinner-border-sm\" role=\"status\"></span>
                Updating...
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
        return "event/edit1.html.twig";
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
        return array (  388 => 200,  350 => 165,  346 => 164,  333 => 163,  311 => 151,  292 => 134,  290 => 129,  272 => 114,  264 => 109,  253 => 100,  240 => 99,  222 => 91,  213 => 85,  204 => 79,  198 => 75,  185 => 74,  108 => 7,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Edit Event{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/pages/form-validation.css') }}\">
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-hover: #4f46e5;
            --danger-color: #dc3545;
            --success-color: #28a745;
            --transition-timing: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .menu-link {
            transition: all var(--transition-timing);
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            margin: 0.25rem 1rem;
        }

        .menu-link:hover {
            background: rgba(99, 102, 241, 0.1);
            transform: translateX(5px);
        }

        .menu-item.active .menu-link {
            background: rgba(99, 102, 241, 0.1);
            position: relative;
        }

        .menu-item.active .menu-link::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--primary-color);
            border-radius: 2px 0 0 2px;
        }

        .card-header-gradient {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-hover) 100%);
            border-bottom: none;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }

        .profanity-warning {
            animation: slideIn 0.3s ease-out;
        }

        @keyframes slideIn {
            from { transform: translateY(-10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .hover-scale {
            transition: transform 0.2s ease;
        }

        .hover-scale:hover {
            transform: translateY(-2px);
        }
    </style>
{% endblock %}

{% block sidebar %}
    <!-- Enhanced Sidebar -->
    <div class=\"menu-inner-shadow\"></div>
    <ul class=\"menu-inner py-3\">
        <li class=\"menu-item active\">
            <a href=\"{{ path('app_eventback_index') }}\" class=\"menu-link d-flex align-items-center\">
                <i class=\"menu-icon tf-icons bx bx-calendar-event me-3\"></i>
                <div class=\"fw-medium\" data-i18n=\"Events\">Events</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"{{ path('app_eventback_new') }}\" class=\"menu-link d-flex align-items-center\">
                <i class=\"menu-icon tf-icons bx bx-plus-circle me-3\"></i>
                <div class=\"fw-medium\" data-i18n=\"Create Event\">Create Event</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"{{ path('app_eventback_registration_index') }}\" class=\"menu-link d-flex align-items-center\">
                <i class=\"menu-icon tf-icons bx bx-list-ul me-3\"></i>
                <div class=\"fw-medium\" data-i18n=\"View Registrations\">View Registrations</div>
            </a>
        </li>
    </ul>
{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"row\">
        <div class=\"col-12\">
            <!-- Page Header -->
            <div class=\"d-flex justify-content-between align-items-center mb-5\">
                <div>
                    <h4 class=\"fw-bold mb-1\">Edit Event</h4>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_eventback_index') }}\">Events</a></li>
                            <li class=\"breadcrumb-item active\">Edit</li>
                        </ol>
                    </nav>
                </div>
                <a href=\"{{ path('app_eventback_index') }}\" class=\"btn btn-label-secondary hover-scale\">
                    <i class=\"bx bx-chevron-left scaleX-n1-rtl me-2\"></i>
                    Back to List
                </a>
            </div>

            <!-- Edit Form Card -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header card-header-gradient text-white py-3\">
                    <h5 class=\"card-title mb-0 d-flex align-items-center\">
                        <i class=\"bx bx-edit me-2\"></i>
                        Event Details
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    {{ include('event/_form.html.twig', {
                        'button_label': 'Update Event',
                        'button_class': 'btn-primary hover-scale',
                        'include_delete': true,
                        'delete_btn_class': 'btn-danger hover-scale'
                    }) }}
                </div>
            </div>

            <!-- Registrations Card -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0 d-flex align-items-center\">
                        <i class=\"bx bx-user-circle me-2\"></i>
                        Event Registrations
                    </h5>
                </div>
                <div class=\"card-body p-4\">
                    <div class=\"alert alert-info d-flex align-items-center\">
                        <i class=\"bx bx-info-circle me-3\"></i>
                        <div>
                            Manage registrations through the 
                            <a href=\"{{ path('app_eventback_registration_index') }}\" class=\"alert-link fw-medium\">
                                Registrations Dashboard
                            </a>. You can view, edit, and manage attendee information there.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"{{ asset('vendor/libs/flatpickr/flatpickr.js') }}\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced Date/Time Pickers
    const dateConfig = {
        dateFormat: 'Y-m-d',
        minDate: 'today',
        allowInput: true
    };

    const timeConfig = {
        enableTime: true,
        noCalendar: true,
        dateFormat: 'H:i',
        time_24hr: true
    };

    document.querySelectorAll('.flatpickr-date').forEach(fp => flatpickr(fp, dateConfig));
    document.querySelectorAll('.flatpickr-time').forEach(fp => flatpickr(fp, timeConfig));

    // Enhanced Profanity Filter
    function showProfanityWarning(field) {
        const existingWarning = field.parentNode.querySelector('.profanity-warning');
        if (!existingWarning) {
            const warning = document.createElement('div');
            warning.className = 'profanity-warning text-danger mt-2 small d-flex align-items-center';
            warning.innerHTML = `
                <i class=\"bx bx-shield-x me-2\"></i>
                Inappropriate content detected and modified
            `;
            field.parentNode.insertBefore(warning, field.nextElementSibling);
        }
    }

    function checkProfanity(text, callback, field) {
        fetch('{{ path('app_eventback_check_profanity') }}', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({ text: text })
        })
        .then(response => response.json())
        .then(data => {
            if (data.censoredText && data.censoredText !== text) {
                callback(data.censoredText);
                showProfanityWarning(field);
                field.classList.add('is-invalid');
            } else {
                field.classList.remove('is-invalid');
            }
        });
    }

    function setupProfanityListener(inputField) {
        let previousValue = inputField.value;
        
        inputField.addEventListener('input', function(e) {
            clearTimeout(this.timer);
            this.timer = setTimeout(() => {
                checkProfanity(e.target.value, (censoredText) => {
                    if (e.target.value === this.value) {
                        e.target.value = censoredText;
                        previousValue = censoredText;
                    }
                }, inputField);
            }, 500);
        });
    }

    // Initialize for relevant fields
    const monitoredFields = ['#event_title', '#event_description'];
    monitoredFields.forEach(selector => {
        const field = document.querySelector(selector);
        if (field) setupProfanityListener(field);
    });

    // Form Submission Handling
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('[type=\"submit\"]');
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <span class=\"spinner-border spinner-border-sm\" role=\"status\"></span>
                Updating...
            `;
        });
    }
});
</script>
{% endblock %}", "event/edit1.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event\\edit1.html.twig");
    }
}
