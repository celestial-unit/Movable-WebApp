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

/* admin_transport/index.html.twig */
class __TwigTemplate_c083c82cdbe373cf743239d95fa61165 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_transport/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_transport/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin_transport/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "    <h1>List of Transports</h1>

    <a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_new");
        yield "\" class=\"btn btn-success\">+ Add a transport</a>

    <table border=\"1\" cellspacing=\"0\" cellpadding=\"5\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Capacity</th>
                <th>Availability</th>
                <th>Destination</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 20
            yield "                <tr>
                    <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                    <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                    <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "capacity", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                    <td>";
            // line 24
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "disponibility", [], "any", false, false, false, 24)) ? ("Available") : ("Not available"));
            yield "</td>
                    <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "destination", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Edit</a>

                        <form method=\"post\" action=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Are you sure you want to delete this transport?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 30))), "html", null, true);
            yield "\">
                            <button class=\"btn btn-danger\">Delete</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            yield "                <tr>
                    <td colspan=\"6\">No transport found.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "        </tbody>
    </table>
     <div class=\"text-center mt-4\">
            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_driver_index");
        yield "\" class=\"btn btn-info\">Show Driver List</a>
        </div>
        <link href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_css/css_halimaa.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
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
        return "admin_transport/index.html.twig";
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
        return array (  165 => 45,  160 => 43,  155 => 40,  146 => 36,  135 => 30,  131 => 29,  126 => 27,  121 => 25,  117 => 24,  113 => 23,  109 => 22,  105 => 21,  102 => 20,  97 => 19,  80 => 5,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}
{% block body %}
    <h1>List of Transports</h1>

    <a href=\"{{ path('admin_transport_new') }}\" class=\"btn btn-success\">+ Add a transport</a>

    <table border=\"1\" cellspacing=\"0\" cellpadding=\"5\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Capacity</th>
                <th>Availability</th>
                <th>Destination</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for transport in transports %}
                <tr>
                    <td>{{ transport.id }}</td>
                    <td>{{ transport.type }}</td>
                    <td>{{ transport.capacity }}</td>
                    <td>{{ transport.disponibility ? 'Available' : 'Not available' }}</td>
                    <td>{{ transport.destination }}</td>
                    <td>
                        <a href=\"{{ path('admin_transport_edit', {id: transport.id}) }}\" class=\"btn btn-primary\">Edit</a>

                        <form method=\"post\" action=\"{{ path('admin_transport_delete', {'id': transport.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Are you sure you want to delete this transport?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ transport.id) }}\">
                            <button class=\"btn btn-danger\">Delete</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\">No transport found.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
     <div class=\"text-center mt-4\">
            <a href=\"{{ path('admin_driver_index') }}\" class=\"btn btn-info\">Show Driver List</a>
        </div>
        <link href=\"{{ asset('back_css/css_halimaa.css') }}\" rel=\"stylesheet\">
{% endblock %}
", "admin_transport/index.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin_transport\\index.html.twig");
    }
}
