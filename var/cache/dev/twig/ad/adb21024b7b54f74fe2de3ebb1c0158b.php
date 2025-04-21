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

/* admin/reservation/show.html.twig */
class __TwigTemplate_d1d6835d9840790fa242b5a6c67a48f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/reservation/show.html.twig", 1);
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

        yield "Reservation Details";
        
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
        <h1 class=\"mt-4\">Reservation Details</h1>
        
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <h3 class=\"mb-0\">Reservation #";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "</h3>
                    </div>
                    <div>
                        <span class=\"badge bg-";
        // line 16
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 16, $this->source); })()), "status", [], "any", false, false, false, 16) == "approved")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 16, $this->source); })()), "status", [], "any", false, false, false, 16) == "rejected")) ? ("danger") : ("warning"))));
        yield "\">
                            ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 17, $this->source); })()), "status", [], "any", false, false, false, 17)), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h4>Customer Information</h4>
                        <table class=\"table\">
                            <tr>
                                <th>Name</th>
                                <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 29, $this->source); })()), "firstName", [], "any", false, false, false, 29), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 29, $this->source); })()), "lastName", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                            </tr>
                        </table>
                    </div>
                    <div class=\"col-md-6\">
                        <h4>Reservation Details</h4>
                        <table class=\"table\">
                            <tr>
                                <th>Date</th>
                                <td>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 42, $this->source); })()), "date", [], "any", false, false, false, 42), "Y-m-d H:i"), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "location", [], "any", false, false, false, 46), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Seats</th>
                                <td>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 50, $this->source); })()), "seats", [], "any", false, false, false, 50), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 54, $this->source); })()), "createdAt", [], "any", false, false, false, 54), "Y-m-d H:i:s"), "html", null, true);
        yield "</td>
                            </tr>
                            ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 56, $this->source); })()), "updatedAt", [], "any", false, false, false, 56)) {
            // line 57
            yield "                                <tr>
                                    <th>Last Updated</th>
                                    <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 59, $this->source); })()), "updatedAt", [], "any", false, false, false, 59), "Y-m-d H:i:s"), "html", null, true);
            yield "</td>
                                </tr>
                            ";
        }
        // line 62
        yield "                        </table>
                    </div>
                </div>

                ";
        // line 66
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 66, $this->source); })()), "status", [], "any", false, false, false, 66) == "pending")) {
            // line 67
            yield "                    <div class=\"mt-4\">
                        <form method=\"post\" action=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" 
                              style=\"display: inline;\">
                            <button type=\"submit\" class=\"btn btn-success me-2\">Approve Reservation</button>
                        </form>
                        <form method=\"post\" action=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\" 
                              style=\"display: inline;\">
                            <button type=\"submit\" class=\"btn btn-danger\">Reject Reservation</button>
                        </form>
                    </div>
                ";
        }
        // line 78
        yield "            </div>
        </div>

        <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
        yield "\" class=\"btn btn-secondary\">Back to List</a>
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
        return "admin/reservation/show.html.twig";
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
        return array (  225 => 81,  220 => 78,  211 => 72,  204 => 68,  201 => 67,  199 => 66,  193 => 62,  187 => 59,  183 => 57,  181 => 56,  176 => 54,  169 => 50,  162 => 46,  155 => 42,  143 => 33,  134 => 29,  119 => 17,  115 => 16,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layouts/admin.html.twig' %}

{% block title %}Reservation Details{% endblock %}

{% block body %}
    <div class=\"container-fluid px-4\">
        <h1 class=\"mt-4\">Reservation Details</h1>
        
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <h3 class=\"mb-0\">Reservation #{{ reservation.id }}</h3>
                    </div>
                    <div>
                        <span class=\"badge bg-{{ reservation.status == 'approved' ? 'success' : (reservation.status == 'rejected' ? 'danger' : 'warning') }}\">
                            {{ reservation.status|upper }}
                        </span>
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h4>Customer Information</h4>
                        <table class=\"table\">
                            <tr>
                                <th>Name</th>
                                <td>{{ reservation.firstName }} {{ reservation.lastName }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ reservation.email }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class=\"col-md-6\">
                        <h4>Reservation Details</h4>
                        <table class=\"table\">
                            <tr>
                                <th>Date</th>
                                <td>{{ reservation.date|date('Y-m-d H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>{{ reservation.location }}</td>
                            </tr>
                            <tr>
                                <th>Seats</th>
                                <td>{{ reservation.seats }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ reservation.createdAt|date('Y-m-d H:i:s') }}</td>
                            </tr>
                            {% if reservation.updatedAt %}
                                <tr>
                                    <th>Last Updated</th>
                                    <td>{{ reservation.updatedAt|date('Y-m-d H:i:s') }}</td>
                                </tr>
                            {% endif %}
                        </table>
                    </div>
                </div>

                {% if reservation.status == 'pending' %}
                    <div class=\"mt-4\">
                        <form method=\"post\" action=\"{{ path('admin_reservation_approve', {'id': reservation.id}) }}\" 
                              style=\"display: inline;\">
                            <button type=\"submit\" class=\"btn btn-success me-2\">Approve Reservation</button>
                        </form>
                        <form method=\"post\" action=\"{{ path('admin_reservation_reject', {'id': reservation.id}) }}\" 
                              style=\"display: inline;\">
                            <button type=\"submit\" class=\"btn btn-danger\">Reject Reservation</button>
                        </form>
                    </div>
                {% endif %}
            </div>
        </div>

        <a href=\"{{ path('admin_reservation_index') }}\" class=\"btn btn-secondary\">Back to List</a>
    </div>
{% endblock %}
", "admin/reservation/show.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\reservation\\show.html.twig");
    }
}
