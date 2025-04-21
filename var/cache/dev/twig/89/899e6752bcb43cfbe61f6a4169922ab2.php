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

/* event_registration/show1.html.twig */
class __TwigTemplate_9910254946fce1f09b0b598b07c2d432 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/show1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/show1.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "event_registration/show1.html.twig", 1);
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

        yield "Event Registration Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <!-- Sidebar Content -->
    <div class=\"menu-inner-shadow\"></div>
    <ul class=\"menu-inner py-1\">
        <li class=\"menu-item active\">
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar-event\"></i>
                <div data-i18n=\"Events\">Events</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_new");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-plus-circle\"></i>
                <div data-i18n=\"Create Event\">Create Event</div>
            </a>
        </li>
        <li class=\"menu-item\">
    <a href=\"";
        // line 22
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

    // line 30
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

        // line 31
        yield "    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Registration Details</h1>

        <div class=\"card shadow\">
            <div class=\"card-body\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Registration Date</th>
                            <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 44, $this->source); })()), "registrationDate", [], "any", false, false, false, 44), "F j, Y, g:i a"), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <span class=\"badge bg-";
        // line 49
        yield (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49)) == "confirmed")) ? ("success") : ("warning"));
        yield "\">
                                    ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50)), "html", null, true);
        yield "
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Related Event</th>
                            <td>
                                ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 57, $this->source); })()), "event", [], "any", false, false, false, 57)) {
            // line 58
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 58, $this->source); })()), "event", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\">
                                        ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 59, $this->source); })()), "event", [], "any", false, false, false, 59), "title", [], "any", false, false, false, 59), "html", null, true);
            yield " (ID: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 59, $this->source); })()), "event", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
            yield ")
                                    </a>
                                ";
        } else {
            // line 62
            yield "                                    <span class=\"text-danger\">Event no longer exists</span>
                                ";
        }
        // line 64
        yield "                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"mt-4\">
                    <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left\"></i> Back to List
                    </a>

                    <a href=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-warning ms-2\">
                        <i class=\"bi bi-pencil\"></i> Edit
                    </a>

                    ";
        // line 79
        yield Twig\Extension\CoreExtension::include($this->env, $context, "event_registration/_delete_form.html.twig");
        yield "
                </div>
            </div>
        </div>
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
        return "event_registration/show1.html.twig";
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
        return array (  239 => 79,  231 => 74,  224 => 70,  216 => 64,  212 => 62,  204 => 59,  199 => 58,  197 => 57,  187 => 50,  183 => 49,  175 => 44,  168 => 40,  157 => 31,  144 => 30,  125 => 22,  116 => 16,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Event Registration Details{% endblock %}

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
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Registration Details</h1>

        <div class=\"card shadow\">
            <div class=\"card-body\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ event_registration.id }}</td>
                        </tr>
                        <tr>
                            <th>Registration Date</th>
                            <td>{{ event_registration.registrationDate|date('F j, Y, g:i a') }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <span class=\"badge bg-{{ event_registration.status|lower == 'confirmed' ? 'success' : 'warning' }}\">
                                    {{ event_registration.status|upper }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Related Event</th>
                            <td>
                                {% if event_registration.event %}
                                    <a href=\"{{ path('app_eventback_show', {'id': event_registration.event.id}) }}\">
                                        {{ event_registration.event.title }} (ID: {{ event_registration.event.id }})
                                    </a>
                                {% else %}
                                    <span class=\"text-danger\">Event no longer exists</span>
                                {% endif %}
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"mt-4\">
                    <a href=\"{{ path('app_eventback_registration_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left\"></i> Back to List
                    </a>

                    <a href=\"{{ path('app_eventback_registration_edit', {'id': event_registration.id}) }}\" 
                       class=\"btn btn-warning ms-2\">
                        <i class=\"bi bi-pencil\"></i> Edit
                    </a>

                    {{ include('event_registration/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "event_registration/show1.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event_registration\\show1.html.twig");
    }
}
