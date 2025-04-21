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

/* registration/reservation/status.html.twig */
class __TwigTemplate_a62493ef5c8affcc6393aac9e696a4d9 extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/reservation/status.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/reservation/status.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "registration/reservation/status.html.twig", 1);
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

        yield "Check Reservation Status";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    <div class=\"app-brand demo\">
        <a href=\"index.html\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <!-- Your logo SVG here -->
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Dashboard</span>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <li class=\"menu-item\">
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_homehome");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <li class=\"menu-item active\">
            <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-bus\"></i>
                <div>Reservation</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-id-card\"></i>
                <div>Ticket</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_check_status");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-id-card\"></i>
                <div>Check Status</div>
            </a>
        </li>
    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
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

        // line 48
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"card mb-4\" style=\"background-image: url('";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Driver.jpg"), "html", null, true);
        yield "'); background-size: cover; min-height: 600px;\">
        <div class=\"card-body d-flex align-items-center justify-content-center\">
            <div class=\"w-100\" style=\"max-width: 800px;\">
                <div class=\"text-center mb-5\">
                    <h1 class=\"display-4 fw-bold text-dark\">Reservation Status</h1>
                </div>
                
                <div class=\"card p-4\" style=\"background-color: rgba(255, 255, 255, 0.9); border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);\">
                    <h2 class=\"mb-4 fw-bold text-dark\">Check Your Reservation</h2>
                    
                    ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_start', ["attr" => ["id" => "statusForm", "class" => "mb-4"]]);
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'label');
        yield "
                            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'widget');
        yield "
                            <div class=\"invalid-feedback\" id=\"emailError\"></div>
                        </div>
                        
                        <div class=\"d-flex justify-content-center gap-3\">
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "check", [], "any", false, false, false, 67), 'widget');
        yield "
                            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-primary px-4 py-2\">
                                Back to Reservation
                            </a>
                        </div>
                    ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        yield "
                    
                    <div id=\"resultContainer\" class=\"d-none\">
                        <div class=\"alert alert-success\" id=\"statusMessage\"></div>
                        <div class=\"card mt-3\">
                            <div class=\"card-header\">
                                <h5>Reservation Details</h5>
                            </div>
                            <div class=\"card-body\">
                                <dl class=\"row\" id=\"reservationDetails\">
                                    <!-- Details will be populated by JavaScript -->
                                </dl>
                                <div class=\"d-flex justify-content-end gap-2\">
                                    <a href=\"#\" class=\"btn btn-warning\" id=\"ticketButton\">View Ticket</a>
                                    <a href=\"#\" class=\"btn btn-purple\" id=\"calendarButton\">View Calendar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-purple {
        background-color: #9b59b6;
        color: white;
    }
    #reservationDetails dt {
        font-weight: bold;
        width: 150px;
    }
    #reservationDetails dd {
        margin-left: 170px;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('statusForm');
    const resultContainer = document.getElementById('resultContainer');
    const statusMessage = document.getElementById('statusMessage');
    const reservationDetails = document.getElementById('reservationDetails');
    const ticketButton = document.getElementById('ticketButton');
    const calendarButton = document.getElementById('calendarButton');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(form);
        const email = formData.get('email');
        
        // Reset UI
        form.classList.remove('was-validated');
        document.getElementById('emailError').textContent = '';
        
        // Simple client-side validation
        if (!email) {
            document.getElementById('emailError').textContent = 'Please enter your email address';
            return;
        }

        fetch(\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_check");
        yield "\", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({email: email})
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Display reservation details
                const res = data.reservation;
                reservationDetails.innerHTML = `
                    <dt class=\"col-sm-3\">Name</dt>
                    <dd class=\"col-sm-9\">\${res.firstName} \${res.lastName}</dd>
                    <dt class=\"col-sm-3\">Email</dt>
                    <dd class=\"col-sm-9\">\${res.email}</dd>
                    <dt class=\"col-sm-3\">Date</dt>
                    <dd class=\"col-sm-9\">\${res.date}</dd>
                    <dt class=\"col-sm-3\">Status</dt>
                    <dd class=\"col-sm-9\">
                        <span class=\"badge bg-\${res.status === 'approved' ? 'success' : res.status === 'rejected' ? 'danger' : 'warning'}\">
                            \${res.status}
                        </span>
                    </dd>
                    <dt class=\"col-sm-3\">Location</dt>
                    <dd class=\"col-sm-9\">\${res.location}</dd>
                    <dt class=\"col-sm-3\">Seats</dt>
                    <dd class=\"col-sm-9\">\${res.seats}</dd>
                    <dt class=\"col-sm-3\">Agent Type</dt>
                    <dd class=\"col-sm-9\">\${res.agentType}</dd>
                    <dt class=\"col-sm-3\">Payment Mode</dt>
                    <dd class=\"col-sm-9\">\${res.paymentMode}</dd>
                `;
                
                // Update buttons
                ticketButton.href = `/ticket/\${res.id}`;
                calendarButton.href = `/calendar?date=\${res.date.split(' ')[0]}`;
                
                // Show results
                statusMessage.textContent = 'Reservation found!';
                resultContainer.classList.remove('d-none');
            } else {
                statusMessage.className = 'alert alert-danger';
                statusMessage.textContent = data.message;
                resultContainer.classList.remove('d-none');
            }
        })
        .catch(error => {
            statusMessage.className = 'alert alert-danger';
            statusMessage.textContent = 'An error occurred while checking your reservation.';
            resultContainer.classList.remove('d-none');
            console.error('Error:', error);
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
        return "registration/reservation/status.html.twig";
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
        return array (  287 => 135,  221 => 72,  214 => 68,  210 => 67,  202 => 62,  198 => 61,  193 => 59,  180 => 49,  177 => 48,  164 => 47,  146 => 39,  136 => 32,  126 => 25,  116 => 18,  101 => 5,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Check Reservation Status{% endblock %}
{% block sidebar %}
    <div class=\"app-brand demo\">
        <a href=\"index.html\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <!-- Your logo SVG here -->
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Dashboard</span>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <li class=\"menu-item\">
            <a href=\"{{ path('app_front_homehome') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <li class=\"menu-item active\">
            <a href=\"{{ path('app_reservation_index') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-bus\"></i>
                <div>Reservation</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"{{ path('app_ticket_index') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-id-card\"></i>
                <div>Ticket</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"{{ path('app_check_status') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-id-card\"></i>
                <div>Check Status</div>
            </a>
        </li>
    </ul>
{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"card mb-4\" style=\"background-image: url('{{ asset('css/Driver.jpg') }}'); background-size: cover; min-height: 600px;\">
        <div class=\"card-body d-flex align-items-center justify-content-center\">
            <div class=\"w-100\" style=\"max-width: 800px;\">
                <div class=\"text-center mb-5\">
                    <h1 class=\"display-4 fw-bold text-dark\">Reservation Status</h1>
                </div>
                
                <div class=\"card p-4\" style=\"background-color: rgba(255, 255, 255, 0.9); border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);\">
                    <h2 class=\"mb-4 fw-bold text-dark\">Check Your Reservation</h2>
                    
                    {{ form_start(form, {'attr': {'id': 'statusForm', 'class': 'mb-4'}}) }}
                        <div class=\"mb-3\">
                            {{ form_label(form.email) }}
                            {{ form_widget(form.email) }}
                            <div class=\"invalid-feedback\" id=\"emailError\"></div>
                        </div>
                        
                        <div class=\"d-flex justify-content-center gap-3\">
                            {{ form_widget(form.check) }}
                            <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-primary px-4 py-2\">
                                Back to Reservation
                            </a>
                        </div>
                    {{ form_end(form) }}
                    
                    <div id=\"resultContainer\" class=\"d-none\">
                        <div class=\"alert alert-success\" id=\"statusMessage\"></div>
                        <div class=\"card mt-3\">
                            <div class=\"card-header\">
                                <h5>Reservation Details</h5>
                            </div>
                            <div class=\"card-body\">
                                <dl class=\"row\" id=\"reservationDetails\">
                                    <!-- Details will be populated by JavaScript -->
                                </dl>
                                <div class=\"d-flex justify-content-end gap-2\">
                                    <a href=\"#\" class=\"btn btn-warning\" id=\"ticketButton\">View Ticket</a>
                                    <a href=\"#\" class=\"btn btn-purple\" id=\"calendarButton\">View Calendar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-purple {
        background-color: #9b59b6;
        color: white;
    }
    #reservationDetails dt {
        font-weight: bold;
        width: 150px;
    }
    #reservationDetails dd {
        margin-left: 170px;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('statusForm');
    const resultContainer = document.getElementById('resultContainer');
    const statusMessage = document.getElementById('statusMessage');
    const reservationDetails = document.getElementById('reservationDetails');
    const ticketButton = document.getElementById('ticketButton');
    const calendarButton = document.getElementById('calendarButton');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(form);
        const email = formData.get('email');
        
        // Reset UI
        form.classList.remove('was-validated');
        document.getElementById('emailError').textContent = '';
        
        // Simple client-side validation
        if (!email) {
            document.getElementById('emailError').textContent = 'Please enter your email address';
            return;
        }

        fetch(\"{{ path('app_reservation_check') }}\", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({email: email})
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Display reservation details
                const res = data.reservation;
                reservationDetails.innerHTML = `
                    <dt class=\"col-sm-3\">Name</dt>
                    <dd class=\"col-sm-9\">\${res.firstName} \${res.lastName}</dd>
                    <dt class=\"col-sm-3\">Email</dt>
                    <dd class=\"col-sm-9\">\${res.email}</dd>
                    <dt class=\"col-sm-3\">Date</dt>
                    <dd class=\"col-sm-9\">\${res.date}</dd>
                    <dt class=\"col-sm-3\">Status</dt>
                    <dd class=\"col-sm-9\">
                        <span class=\"badge bg-\${res.status === 'approved' ? 'success' : res.status === 'rejected' ? 'danger' : 'warning'}\">
                            \${res.status}
                        </span>
                    </dd>
                    <dt class=\"col-sm-3\">Location</dt>
                    <dd class=\"col-sm-9\">\${res.location}</dd>
                    <dt class=\"col-sm-3\">Seats</dt>
                    <dd class=\"col-sm-9\">\${res.seats}</dd>
                    <dt class=\"col-sm-3\">Agent Type</dt>
                    <dd class=\"col-sm-9\">\${res.agentType}</dd>
                    <dt class=\"col-sm-3\">Payment Mode</dt>
                    <dd class=\"col-sm-9\">\${res.paymentMode}</dd>
                `;
                
                // Update buttons
                ticketButton.href = `/ticket/\${res.id}`;
                calendarButton.href = `/calendar?date=\${res.date.split(' ')[0]}`;
                
                // Show results
                statusMessage.textContent = 'Reservation found!';
                resultContainer.classList.remove('d-none');
            } else {
                statusMessage.className = 'alert alert-danger';
                statusMessage.textContent = data.message;
                resultContainer.classList.remove('d-none');
            }
        })
        .catch(error => {
            statusMessage.className = 'alert alert-danger';
            statusMessage.textContent = 'An error occurred while checking your reservation.';
            resultContainer.classList.remove('d-none');
            console.error('Error:', error);
        });
    });
});
</script>
{% endblock %}", "registration/reservation/status.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\registration\\reservation\\status.html.twig");
    }
}
