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

/* admin_driver/list.html.twig */
class __TwigTemplate_01636784057d8189ada94f4dbfa17a53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_driver/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_driver/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin_driver/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <h1>List of Drivers</h1>

    <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_driver_new");
        yield "\" class=\"btn btn-success\">+ Add a driver</a>

    <table border=\"1\" cellspacing=\"0\" cellpadding=\"5\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Licence Number</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["drivers"]) || array_key_exists("drivers", $context) ? $context["drivers"] : (function () { throw new RuntimeError('Variable "drivers" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["driver"]) {
            // line 18
            yield "                <tr>
                    <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "id", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                    <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "name", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                    <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "licenceNumber", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                    <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "transportId", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_driver_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Edit</a>

                        <form method=\"post\" action=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_driver_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Are you sure you want to delete this driver?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "id", [], "any", false, false, false, 27))), "html", null, true);
            yield "\">
                            <button class=\"btn btn-danger\">Delete</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            yield "                <tr>
                    <td colspan=\"5\">No driver found.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['driver'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "        </tbody>
    </table>
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
        return "admin_driver/list.html.twig";
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
        return array (  148 => 37,  139 => 33,  128 => 27,  124 => 26,  119 => 24,  114 => 22,  110 => 21,  106 => 20,  102 => 19,  99 => 18,  94 => 17,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block body %}
    <h1>List of Drivers</h1>

    <a href=\"{{ path('admin_driver_new') }}\" class=\"btn btn-success\">+ Add a driver</a>

    <table border=\"1\" cellspacing=\"0\" cellpadding=\"5\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Licence Number</th>
            </tr>
        </thead>
        <tbody>
            {% for driver in drivers %}
                <tr>
                    <td>{{ driver.id }}</td>
                    <td>{{ driver.name }}</td>
                    <td>{{ driver.licenceNumber }}</td>
                    <td>{{ driver.transportId }}</td>
                    <td>
                        <a href=\"{{ path('admin_driver_edit', {id: driver.id}) }}\" class=\"btn btn-primary\">Edit</a>

                        <form method=\"post\" action=\"{{ path('admin_driver_delete', {'id': driver.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Are you sure you want to delete this driver?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ driver.id) }}\">
                            <button class=\"btn btn-danger\">Delete</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">No driver found.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "admin_driver/list.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin_driver\\list.html.twig");
    }
}
