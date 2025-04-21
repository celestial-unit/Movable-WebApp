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

/* driver/index.html.twig */
class __TwigTemplate_8e690bd7d878be8e9bff117591d467d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "driver/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "driver/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "driver/index.html.twig", 1);
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

        yield "Driver List";
        
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
    <!-- ... (keep your existing header and card structure) ... -->
    
    <div class=\"table-responsive text-nowrap\">
        <table class=\"table table-hover\">
            <!-- ... (keep your existing table headers) ... -->
            <tbody>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["drivers"]) || array_key_exists("drivers", $context) ? $context["drivers"] : (function () { throw new RuntimeError('Variable "drivers" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["driver"]) {
            // line 14
            yield "                <tr>
                    <!-- ... (keep your existing columns) ... -->
                    <td>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                            </button>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_driver_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\">
                                    <i class=\"bx bx-show me-1\"></i> Show
                                </a>
                                <a class=\"dropdown-item\" href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_driver_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\">
                                    <i class=\"bx bx-edit-alt me-1\"></i> Edit
                                </a>
                                <form method=\"post\" action=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_driver_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"dropdown-item p-0\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "id", [], "any", false, false, false, 29))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-link p-0 text-danger\" onclick=\"return confirm('Are you sure?')\">
                                        <i class=\"bx bx-trash me-1\"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['driver'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "            </tbody>
        </table>
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
        return "driver/index.html.twig";
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
        return array (  155 => 39,  139 => 29,  135 => 28,  129 => 25,  123 => 22,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Driver List{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <!-- ... (keep your existing header and card structure) ... -->
    
    <div class=\"table-responsive text-nowrap\">
        <table class=\"table table-hover\">
            <!-- ... (keep your existing table headers) ... -->
            <tbody>
            {% for driver in drivers %}
                <tr>
                    <!-- ... (keep your existing columns) ... -->
                    <td>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                            </button>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"{{ path('app_driver_show', {'id': driver.id}) }}\">
                                    <i class=\"bx bx-show me-1\"></i> Show
                                </a>
                                <a class=\"dropdown-item\" href=\"{{ path('app_driver_edit', {'id': driver.id}) }}\">
                                    <i class=\"bx bx-edit-alt me-1\"></i> Edit
                                </a>
                                <form method=\"post\" action=\"{{ path('app_driver_delete', {'id': driver.id}) }}\" class=\"dropdown-item p-0\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ driver.id) }}\">
                                    <button class=\"btn btn-link p-0 text-danger\" onclick=\"return confirm('Are you sure?')\">
                                        <i class=\"bx bx-trash me-1\"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}", "driver/index.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\driver\\index.html.twig");
    }
}
