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

/* admin/reservation/index.html.twig */
class __TwigTemplate_2cd8c88d385ef6e6251bff6ec14973bf extends Template
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
        // line 1
        return "admin/layouts/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/reservation/index.html.twig", 1);
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

        yield "Manage Reservations";
        
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
        yield "    <div class=\"container-fluid px-4\">
        <h1 class=\"mt-4\">Manage Reservations</h1>
        
        <div class=\"row mt-4\">
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card bg-primary text-white mb-4\">
                    <div class=\"card-body\">
                        Total Reservations
                        <h2>";
        // line 14
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), "total", [], "any", true, true, false, 14) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), "total", [], "any", false, false, false, 14)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), "total", [], "any", false, false, false, 14), "html", null, true)) : (yield 0));
        yield "</h2>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card bg-warning text-white mb-4\">
                    <div class=\"card-body\">
                        Pending
                        <h2>";
        // line 22
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), "pending", [], "any", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), "pending", [], "any", false, false, false, 22)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), "pending", [], "any", false, false, false, 22), "html", null, true)) : (yield 0));
        yield "</h2>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card bg-success text-white mb-4\">
                    <div class=\"card-body\">
                        Approved
                        <h2>";
        // line 30
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), "approved", [], "any", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), "approved", [], "any", false, false, false, 30)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), "approved", [], "any", false, false, false, 30), "html", null, true)) : (yield 0));
        yield "</h2>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card bg-danger text-white mb-4\">
                    <div class=\"card-body\">
                        Rejected
                        <h2>";
        // line 38
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), "rejected", [], "any", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), "rejected", [], "any", false, false, false, 38)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["status_counts"] ?? null), "rejected", [], "any", false, false, false, 38), "html", null, true)) : (yield 0));
        yield "</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"fas fa-table me-1\"></i>
                Reservations List
            </div>
            <div class=\"card-body\">
                <table id=\"reservationsTable\" class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Location</th>
                            <th>Seats</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 64
            yield "                            <tr>
                                <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                                <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "firstName", [], "any", false, false, false, 66), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lastName", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                                <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 67), "Y-m-d H:i"), "html", null, true);
            yield "</td>
                                <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "location", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                                <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "seats", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
                                <td>
                                    <span class=\"badge bg-";
            // line 71
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 71) == "approved")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 71) == "rejected")) ? ("danger") : ("warning"))));
            yield "\">
                                        ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 72), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-info\">View</a>
                                        ";
            // line 79
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 79) == "pending")) {
                // line 80
                yield "                                            <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                yield "\" 
                                                  style=\"display: inline;\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-success\">Approve</button>
                                            </form>
                                            <form method=\"post\" action=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                yield "\" 
                                                  style=\"display: inline;\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Reject</button>
                                            </form>
                                        ";
            }
            // line 89
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
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

        // line 101
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        \$(document).ready(function() {
            \$('#reservationsTable').DataTable({
                order: [[0, 'desc']]
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
        return "admin/reservation/index.html.twig";
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
        return array (  275 => 101,  262 => 100,  246 => 93,  237 => 89,  229 => 84,  221 => 80,  219 => 79,  214 => 77,  206 => 72,  202 => 71,  197 => 69,  193 => 68,  189 => 67,  183 => 66,  179 => 65,  176 => 64,  172 => 63,  144 => 38,  133 => 30,  122 => 22,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layouts/admin.html.twig' %}

{% block title %}Manage Reservations{% endblock %}

{% block body %}
    <div class=\"container-fluid px-4\">
        <h1 class=\"mt-4\">Manage Reservations</h1>
        
        <div class=\"row mt-4\">
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card bg-primary text-white mb-4\">
                    <div class=\"card-body\">
                        Total Reservations
                        <h2>{{ status_counts.total ?? 0 }}</h2>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card bg-warning text-white mb-4\">
                    <div class=\"card-body\">
                        Pending
                        <h2>{{ status_counts.pending ?? 0 }}</h2>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card bg-success text-white mb-4\">
                    <div class=\"card-body\">
                        Approved
                        <h2>{{ status_counts.approved ?? 0 }}</h2>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-6\">
                <div class=\"card bg-danger text-white mb-4\">
                    <div class=\"card-body\">
                        Rejected
                        <h2>{{ status_counts.rejected ?? 0 }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"fas fa-table me-1\"></i>
                Reservations List
            </div>
            <div class=\"card-body\">
                <table id=\"reservationsTable\" class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Location</th>
                            <th>Seats</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for reservation in reservations %}
                            <tr>
                                <td>{{ reservation.id }}</td>
                                <td>{{ reservation.firstName }} {{ reservation.lastName }}</td>
                                <td>{{ reservation.date|date('Y-m-d H:i') }}</td>
                                <td>{{ reservation.location }}</td>
                                <td>{{ reservation.seats }}</td>
                                <td>
                                    <span class=\"badge bg-{{ reservation.status == 'approved' ? 'success' : (reservation.status == 'rejected' ? 'danger' : 'warning') }}\">
                                        {{ reservation.status }}
                                    </span>
                                </td>
                                <td>
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"{{ path('admin_reservation_show', {'id': reservation.id}) }}\" 
                                           class=\"btn btn-sm btn-info\">View</a>
                                        {% if reservation.status == 'pending' %}
                                            <form method=\"post\" action=\"{{ path('admin_reservation_approve', {'id': reservation.id}) }}\" 
                                                  style=\"display: inline;\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-success\">Approve</button>
                                            </form>
                                            <form method=\"post\" action=\"{{ path('admin_reservation_reject', {'id': reservation.id}) }}\" 
                                                  style=\"display: inline;\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Reject</button>
                                            </form>
                                        {% endif %}
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
        \$(document).ready(function() {
            \$('#reservationsTable').DataTable({
                order: [[0, 'desc']]
            });
        });
    </script>
{% endblock %}
", "admin/reservation/index.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\reservation\\index.html.twig");
    }
}
