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

/* admin_driver/index.html.twig */
class __TwigTemplate_66d118aa25dbcdb33dffd571d91baf1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_driver/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_driver/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin_driver/index.html.twig", 1);
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
        yield "  <div class=\"container\">
    <a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_driver_new");
        yield "\" class=\"btn btn-success\">+ Add a Driver</a>
    <div class=\"row\">
      <div class=\"col-lg-6 col-md-12 table-container\">
        <h2>Available Drivers</h2>
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <th>Name</th>
              <th>Licence Number</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["drivers"]) || array_key_exists("drivers", $context) ? $context["drivers"] : (function () { throw new RuntimeError('Variable "drivers" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["driver"]) {
            // line 19
            yield "              <tr>
                <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "name", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "licenceNumber", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                <td>
                  <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_driver_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\"
                     class=\"btn btn-warning\">Edit</a>

                  ";
            // line 27
            yield "                  <form
                    method=\"post\"
                    action=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_driver_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\"
                    style=\"display:inline\"
                    onsubmit=\"return confirm('Really delete driver “";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "name", [], "any", false, false, false, 31), "html", null, true);
            yield "”?');\"
                  >
                    <input
                      type=\"hidden\"
                      name=\"_token\"
                      value=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["driver"], "id", [], "any", false, false, false, 36))), "html", null, true);
            yield "\"
                    >
                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                      Delete
                    </button>
                  </form>
                </td>
              </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            yield "              <tr>
                <td colspan=\"3\">No driver entries found.</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['driver'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class=\"text-center mt-4\">
    <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_index");
        yield "\" class=\"btn btn-info\">
      Show Transports List
    </a>
  </div>

  <link href=\"";
        // line 61
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
        return "admin_driver/index.html.twig";
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
        return array (  175 => 61,  167 => 56,  158 => 49,  149 => 45,  135 => 36,  127 => 31,  122 => 29,  118 => 27,  112 => 23,  107 => 21,  103 => 20,  100 => 19,  95 => 18,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block body %}
  <div class=\"container\">
    <a href=\"{{ path('admin_driver_new') }}\" class=\"btn btn-success\">+ Add a Driver</a>
    <div class=\"row\">
      <div class=\"col-lg-6 col-md-12 table-container\">
        <h2>Available Drivers</h2>
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <th>Name</th>
              <th>Licence Number</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            {% for driver in drivers %}
              <tr>
                <td>{{ driver.name }}</td>
                <td>{{ driver.licenceNumber }}</td>
                <td>
                  <a href=\"{{ path('admin_driver_edit', { id: driver.id }) }}\"
                     class=\"btn btn-warning\">Edit</a>

                  {# ——— Inline POST form for Delete ——— #}
                  <form
                    method=\"post\"
                    action=\"{{ path('admin_driver_delete', { id: driver.id }) }}\"
                    style=\"display:inline\"
                    onsubmit=\"return confirm('Really delete driver “{{ driver.name }}”?');\"
                  >
                    <input
                      type=\"hidden\"
                      name=\"_token\"
                      value=\"{{ csrf_token('delete' ~ driver.id) }}\"
                    >
                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                      Delete
                    </button>
                  </form>
                </td>
              </tr>
            {% else %}
              <tr>
                <td colspan=\"3\">No driver entries found.</td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class=\"text-center mt-4\">
    <a href=\"{{ path('admin_transport_index') }}\" class=\"btn btn-info\">
      Show Transports List
    </a>
  </div>

  <link href=\"{{ asset('back_css/css_halimaa.css') }}\" rel=\"stylesheet\">
{% endblock %}
", "admin_driver/index.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin_driver\\index.html.twig");
    }
}
