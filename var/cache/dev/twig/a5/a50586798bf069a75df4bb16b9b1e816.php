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

/* registration/reservation/index.html.twig */
class __TwigTemplate_565c4e4a156f83e5d6ac87ad502e4ddf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "registration/reservation/index.html.twig", 1);
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

        yield "My Reservations";
        
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
                <h1 class=\"text-white animated zoomIn\">My Reservations</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">My Reservations</li>
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
    <div class=\"container\">
        <div class=\"card shadow-sm border-0 rounded-4\">
            <div class=\"card-header bg-primary text-white rounded-top-4 d-flex justify-content-between align-items-center\">
                <h4 class=\"mb-0\">My Reservation History</h4>
                <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
        yield "\" class=\"btn btn-light\">
                    <i class=\"bx bx-plus me-1\"></i> New Reservation
                </a>
            </div>
            <div class=\"card-body p-4\">
                ";
        // line 35
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 35, $this->source); })())) > 0)) {
            // line 36
            yield "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>ID</th>
                                    <th>Date & Time</th>
                                    <th>Destination</th>
                                    <th>Status</th>
                                    <th>Seats</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 50
                yield "                                <tr>
                                    <td>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 51), "html", null, true);
                yield "</td>
                                    <td>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 52), "Y-m-d H:i"), "html", null, true);
                yield "</td>
                                    <td>";
                // line 53
                ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "destination", [], "any", false, false, false, 53)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "destination", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true)) : (yield "N/A"));
                yield "</td>
                                    <td>
                                        <span class=\"badge bg-";
                // line 55
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 55) == "approved")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 55) == "rejected")) ? ("danger") : ("warning"))));
                yield "\">
                                            ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 56)), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td>";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "seats", [], "any", false, false, false, 59), "html", null, true);
                yield "</td>
                                    <td>
                                        <div class=\"d-flex gap-2\">
                                            <a href=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm btn-outline-primary\"
                                               title=\"View Details\">
                                                <i class=\"bx bx-show\"></i>
                                            </a>
                                            ";
                // line 67
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isPending", [], "method", false, false, false, 67)) {
                    // line 68
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                    yield "\" 
                                                   class=\"btn btn-sm btn-outline-secondary\"
                                                   title=\"Edit\">
                                                    <i class=\"bx bx-edit\"></i>
                                                </a>
                                                <form action=\"";
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                    yield "\" 
                                                      method=\"post\" 
                                                      onsubmit=\"return confirm('Are you sure you want to cancel this reservation?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 76
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 76))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" title=\"Cancel\">
                                                        <i class=\"bx bx-x\"></i>
                                                    </button>
                                                </form>
                                            ";
                }
                // line 82
                yield "                                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isApproved", [], "method", false, false, false, 82) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "tickets", [], "any", false, false, false, 82)) > 0))) {
                    // line 83
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "tickets", [], "any", false, false, false, 83), "first", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83)]), "html", null, true);
                    yield "\" 
                                                   class=\"btn btn-sm btn-outline-success\"
                                                   title=\"View Ticket\">
                                                    <i class=\"bx bx-ticket\"></i>
                                                </a>
                                            ";
                }
                // line 89
                yield "                                        </div>
                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        } else {
            // line 97
            yield "                    <div class=\"alert alert-info text-center\">
                        <i class=\"bx bx-info-circle me-2\"></i>
                        You don't have any reservations yet. 
                        <a href=\"";
            // line 100
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
            yield "\" class=\"alert-link\">Create your first reservation</a>.
                    </div>
                ";
        }
        // line 103
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 109
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

        // line 110
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add any JavaScript functionality you need
    // For example, confirmation dialogs or AJAX actions
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
        return "registration/reservation/index.html.twig";
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
        return array (  314 => 110,  301 => 109,  286 => 103,  280 => 100,  275 => 97,  269 => 93,  260 => 89,  250 => 83,  247 => 82,  238 => 76,  232 => 73,  223 => 68,  221 => 67,  213 => 62,  207 => 59,  201 => 56,  197 => 55,  192 => 53,  188 => 52,  184 => 51,  181 => 50,  177 => 49,  162 => 36,  160 => 35,  152 => 30,  145 => 25,  132 => 24,  112 => 14,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}My Reservations{% endblock %}

{% block hero_banner %}
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">My Reservations</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">My Reservations</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block content %}
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"card shadow-sm border-0 rounded-4\">
            <div class=\"card-header bg-primary text-white rounded-top-4 d-flex justify-content-between align-items-center\">
                <h4 class=\"mb-0\">My Reservation History</h4>
                <a href=\"{{ path('app_reservation_new') }}\" class=\"btn btn-light\">
                    <i class=\"bx bx-plus me-1\"></i> New Reservation
                </a>
            </div>
            <div class=\"card-body p-4\">
                {% if reservations|length > 0 %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>ID</th>
                                    <th>Date & Time</th>
                                    <th>Destination</th>
                                    <th>Status</th>
                                    <th>Seats</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for reservation in reservations %}
                                <tr>
                                    <td>{{ reservation.id }}</td>
                                    <td>{{ reservation.date|date('Y-m-d H:i') }}</td>
                                    <td>{{ reservation.destination ? reservation.destination.name : 'N/A' }}</td>
                                    <td>
                                        <span class=\"badge bg-{{ reservation.status == 'approved' ? 'success' : (reservation.status == 'rejected' ? 'danger' : 'warning') }}\">
                                            {{ reservation.status|upper }}
                                        </span>
                                    </td>
                                    <td>{{ reservation.seats }}</td>
                                    <td>
                                        <div class=\"d-flex gap-2\">
                                            <a href=\"{{ path('app_reservation_show', {'id': reservation.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-primary\"
                                               title=\"View Details\">
                                                <i class=\"bx bx-show\"></i>
                                            </a>
                                            {% if reservation.isPending() %}
                                                <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\" 
                                                   class=\"btn btn-sm btn-outline-secondary\"
                                                   title=\"Edit\">
                                                    <i class=\"bx bx-edit\"></i>
                                                </a>
                                                <form action=\"{{ path('app_reservation_cancel', {'id': reservation.id}) }}\" 
                                                      method=\"post\" 
                                                      onsubmit=\"return confirm('Are you sure you want to cancel this reservation?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel' ~ reservation.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" title=\"Cancel\">
                                                        <i class=\"bx bx-x\"></i>
                                                    </button>
                                                </form>
                                            {% endif %}
                                            {% if reservation.isApproved() and reservation.tickets|length > 0 %}
                                                <a href=\"{{ path('app_ticket_show', {'id': reservation.tickets.first.id}) }}\" 
                                                   class=\"btn btn-sm btn-outline-success\"
                                                   title=\"View Ticket\">
                                                    <i class=\"bx bx-ticket\"></i>
                                                </a>
                                            {% endif %}
                                        </div>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% else %}
                    <div class=\"alert alert-info text-center\">
                        <i class=\"bx bx-info-circle me-2\"></i>
                        You don't have any reservations yet. 
                        <a href=\"{{ path('app_reservation_new') }}\" class=\"alert-link\">Create your first reservation</a>.
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add any JavaScript functionality you need
    // For example, confirmation dialogs or AJAX actions
});
</script>
{% endblock %}", "registration/reservation/index.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\registration\\reservation\\index.html.twig");
    }
}
