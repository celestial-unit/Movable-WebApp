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

/* check_status.html.twig */
class __TwigTemplate_0ade9f29f90c967fa18850d7148e07f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "check_status.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "check_status.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "check_status.html.twig", 1);
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
        yield "<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Check Reservation Status</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Check Status</li>
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
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">Check Reservation Status</h4>
                </div>
                <div class=\"card-body\">
                    ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Enter your email address"]);
        yield "
";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "your@email.com", "name" => "email"]]);
        yield "                        </div>
                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary\">Check Status</button>
                        </div>
                    ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>

            <div id=\"statusResult\" class=\"mt-4\"></div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const resultDiv = document.getElementById('statusResult');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(form);
        const email = formData.get('email');
        
        // Show loading state
        resultDiv.innerHTML = `
           <div class=\"text-center\">
                <div class=\"spinner-border text-primary\" role=\"status\">
                    <span class=\"visually-hidden\">Loading...</span>
                </div>
                <p class=\"mt-2\">Checking your reservation...</p>
            </div>
        `;
            // Create proper FormData object
        const formData = new FormData();
        formData.append('email', email);
        
        fetch('";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_check");
        yield "', {
            method: 'POST',
            body: formData  // Send as FormData instead of JSON
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // ... rest of your success handling code ...
        })
        .catch(error => {
            resultDiv.innerHTML = `
                <div class=\"alert alert-danger\">Error: \${error.message || 'An error occurred while checking your reservation'}</div>
            `;
            console.error('Error:', error);
        });
    });
});
        
        fetch('";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_check");
        yield "', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ email: email })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const reservation = data.reservation;
                let statusBadgeClass = 'bg-secondary';
                let statusText = reservation.status;
                
                // Set appropriate badge color based on status
                if (reservation.status === 'approved') {
                    statusBadgeClass = 'bg-success';
                } else if (reservation.status === 'pending') {
                    statusBadgeClass = 'bg-warning';
                } else if (reservation.status === 'rejected') {
                    statusBadgeClass = 'bg-danger';
                }
                
                let html = `
                    <div class=\"card mb-4\">
                        <div class=\"card-header \${statusBadgeClass} text-white\">
                            <h5 class=\"mb-0\">Reservation #\${reservation.id}</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h5>Reservation Details</h5>
                                    <p><strong>Status:</strong> <span class=\"badge \${statusBadgeClass}\">\${statusText.toUpperCase()}</span></p>
                                    <p><strong>Date:</strong> \${reservation.date}</p>
                                    <p><strong>Location:</strong> \${reservation.location}</p>
                                    <p><strong>Seats:</strong> \${reservation.seats}</p>
                                    <p><strong>Payment Mode:</strong> \${reservation.paymentMode}</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h5>Transport Details</h5>
                                    <p><strong>Transport:</strong> \${reservation.transport}</p>
                                    <p><strong>Driver:</strong> \${reservation.driver}</p>
                                </div>
                            </div>
                `;
                
                if (reservation.hasTicket && reservation.ticketId) {
                    html += `
                        <div class=\"mt-4\">
                            <h5>Ticket Information</h5>
                            <p><strong>Ticket Number:</strong> \${reservation.ticketNumber}</p>
                            <div class=\"d-grid gap-2 mt-3\">
                                <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_show", ["id" => "PLACEHOLDER"]);
        yield "\".replace('PLACEHOLDER', reservation.ticketId)\" class=\"btn btn-primary\">
                                    View Ticket Details
                                </a>
                            </div>
                        </div>
                    `;
                } else if (reservation.status === 'approved') {
                    html += `
                        <div class=\"mt-4\">
                            <div class=\"alert alert-info\">
                                Your ticket is being processed. Please check back later.
                            </div>
                        </div>
                    `;
                }
                
                html += `</div></div>`;
                
                resultDiv.innerHTML = html;
            } else {
                resultDiv.innerHTML = `
                    <div class=\"alert alert-danger\">\${data.message}</div>
                `;
            }
        })
        .catch(error => {
            resultDiv.innerHTML = `
                <div class=\"alert alert-danger\">An error occurred while checking your reservation. Please try again.</div>
            `;
            console.error(error);
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
        return "check_status.html.twig";
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
        return array (  286 => 147,  231 => 95,  206 => 73,  170 => 40,  163 => 36,  159 => 35,  154 => 33,  144 => 25,  131 => 24,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Check Reservation Status{% endblock %}

{% block hero_banner %}
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Check Reservation Status</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Check Status</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">Check Reservation Status</h4>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form) }}
                        <div class=\"mb-3\">
                            {{ form_label(form.email, 'Enter your email address', {'label_attr': {'class': 'form-label'}}) }}
{{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'your@email.com', 'name': 'email'}}) }}                        </div>
                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary\">Check Status</button>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>

            <div id=\"statusResult\" class=\"mt-4\"></div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const resultDiv = document.getElementById('statusResult');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(form);
        const email = formData.get('email');
        
        // Show loading state
        resultDiv.innerHTML = `
           <div class=\"text-center\">
                <div class=\"spinner-border text-primary\" role=\"status\">
                    <span class=\"visually-hidden\">Loading...</span>
                </div>
                <p class=\"mt-2\">Checking your reservation...</p>
            </div>
        `;
            // Create proper FormData object
        const formData = new FormData();
        formData.append('email', email);
        
        fetch('{{ path('app_reservation_check') }}', {
            method: 'POST',
            body: formData  // Send as FormData instead of JSON
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // ... rest of your success handling code ...
        })
        .catch(error => {
            resultDiv.innerHTML = `
                <div class=\"alert alert-danger\">Error: \${error.message || 'An error occurred while checking your reservation'}</div>
            `;
            console.error('Error:', error);
        });
    });
});
        
        fetch('{{ path('app_reservation_check') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ email: email })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const reservation = data.reservation;
                let statusBadgeClass = 'bg-secondary';
                let statusText = reservation.status;
                
                // Set appropriate badge color based on status
                if (reservation.status === 'approved') {
                    statusBadgeClass = 'bg-success';
                } else if (reservation.status === 'pending') {
                    statusBadgeClass = 'bg-warning';
                } else if (reservation.status === 'rejected') {
                    statusBadgeClass = 'bg-danger';
                }
                
                let html = `
                    <div class=\"card mb-4\">
                        <div class=\"card-header \${statusBadgeClass} text-white\">
                            <h5 class=\"mb-0\">Reservation #\${reservation.id}</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h5>Reservation Details</h5>
                                    <p><strong>Status:</strong> <span class=\"badge \${statusBadgeClass}\">\${statusText.toUpperCase()}</span></p>
                                    <p><strong>Date:</strong> \${reservation.date}</p>
                                    <p><strong>Location:</strong> \${reservation.location}</p>
                                    <p><strong>Seats:</strong> \${reservation.seats}</p>
                                    <p><strong>Payment Mode:</strong> \${reservation.paymentMode}</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h5>Transport Details</h5>
                                    <p><strong>Transport:</strong> \${reservation.transport}</p>
                                    <p><strong>Driver:</strong> \${reservation.driver}</p>
                                </div>
                            </div>
                `;
                
                if (reservation.hasTicket && reservation.ticketId) {
                    html += `
                        <div class=\"mt-4\">
                            <h5>Ticket Information</h5>
                            <p><strong>Ticket Number:</strong> \${reservation.ticketNumber}</p>
                            <div class=\"d-grid gap-2 mt-3\">
                                <a href=\"{{ path('app_ticket_show', {'id': 'PLACEHOLDER'}) }}\".replace('PLACEHOLDER', reservation.ticketId)\" class=\"btn btn-primary\">
                                    View Ticket Details
                                </a>
                            </div>
                        </div>
                    `;
                } else if (reservation.status === 'approved') {
                    html += `
                        <div class=\"mt-4\">
                            <div class=\"alert alert-info\">
                                Your ticket is being processed. Please check back later.
                            </div>
                        </div>
                    `;
                }
                
                html += `</div></div>`;
                
                resultDiv.innerHTML = html;
            } else {
                resultDiv.innerHTML = `
                    <div class=\"alert alert-danger\">\${data.message}</div>
                `;
            }
        })
        .catch(error => {
            resultDiv.innerHTML = `
                <div class=\"alert alert-danger\">An error occurred while checking your reservation. Please try again.</div>
            `;
            console.error(error);
        });
    });
});
</script>
{% endblock %}", "check_status.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\check_status.html.twig");
    }
}
