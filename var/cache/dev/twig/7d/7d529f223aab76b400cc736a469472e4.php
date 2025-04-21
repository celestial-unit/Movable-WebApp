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

/* transport/index.html.twig */
class __TwigTemplate_17dad037adc17ec1d657a90eb49aa840 extends Template
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
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "transport/index.html.twig", 1);
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

        yield "Transport List";
        
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
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"card shadow-sm rounded-4 border-0 p-4\">
        <h3 class=\"mb-4 text-center\">Transport List</h3>

        <div class=\"table-responsive\">
            <table class=\"table table-hover align-middle text-center\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Type</th>
                        <th>Capacity</th>
                        <th>Disponibility</th>
                        <th>Destination</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 23
            yield "                        <tr>
                            <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                            <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "capacity", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 27
            if (CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "disponibility", [], "any", false, false, false, 27)) {
                // line 28
                yield "                                    <span class=\"badge bg-success\">Available</span>
                                ";
            } else {
                // line 30
                yield "                                    <span class=\"badge bg-secondary\">Not Available</span>
                                ";
            }
            // line 32
            yield "                            </td>
                            <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "destination", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transport_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\"
                                   class=\"btn btn-sm btn-warning rounded-pill me-2\">
                                   <i class=\"bx bx-edit-alt\"></i> Edit
                                </a>
                                <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transport_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\"
                                   class=\"btn btn-sm btn-danger rounded-pill\"
                                   onclick=\"return confirm('Are you sure you want to delete this transport?');\">
                                   <i class=\"bx bx-trash\"></i> Delete
                                </a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-muted\">No transport entries found.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "transport/index.html.twig";
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
        return array (  182 => 51,  173 => 47,  160 => 39,  153 => 35,  148 => 33,  145 => 32,  141 => 30,  137 => 28,  135 => 27,  130 => 25,  126 => 24,  123 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Transport List{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"card shadow-sm rounded-4 border-0 p-4\">
        <h3 class=\"mb-4 text-center\">Transport List</h3>

        <div class=\"table-responsive\">
            <table class=\"table table-hover align-middle text-center\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Type</th>
                        <th>Capacity</th>
                        <th>Disponibility</th>
                        <th>Destination</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for transport in transports %}
                        <tr>
                            <td>{{ transport.type }}</td>
                            <td>{{ transport.capacity }}</td>
                            <td>
                                {% if transport.disponibility %}
                                    <span class=\"badge bg-success\">Available</span>
                                {% else %}
                                    <span class=\"badge bg-secondary\">Not Available</span>
                                {% endif %}
                            </td>
                            <td>{{ transport.destination }}</td>
                            <td>
                                <a href=\"{{ path('transport_edit', {'id': transport.id}) }}\"
                                   class=\"btn btn-sm btn-warning rounded-pill me-2\">
                                   <i class=\"bx bx-edit-alt\"></i> Edit
                                </a>
                                <a href=\"{{ path('transport_delete', {'id': transport.id}) }}\"
                                   class=\"btn btn-sm btn-danger rounded-pill\"
                                   onclick=\"return confirm('Are you sure you want to delete this transport?');\">
                                   <i class=\"bx bx-trash\"></i> Delete
                                </a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\" class=\"text-muted\">No transport entries found.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}
", "transport/index.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\transport\\index.html.twig");
    }
}
