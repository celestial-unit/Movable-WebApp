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

/* admin_transport/list.html.twig */
class __TwigTemplate_0db18ba9ceb8ab6de76c522f66824488 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_transport/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_transport/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin_transport/list.html.twig", 1);
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
        yield "    <div class=\"container\">
        <div class=\"row\">
            <!-- Form section (left side) -->
            <div class=\"col-lg-6 col-md-12 mb-4 form-container\">
                <h2>Add or Edit Means of Transportation</h2>
                ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        yield "
                    <div class=\"form-group\">
                        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "type", [], "any", false, false, false, 11), 'label');
        yield "
                        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "capacity", [], "any", false, false, false, 16), 'label');
        yield "
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "capacity", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "disponibility", [], "any", false, false, false, 21), 'label');
        yield "
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "disponibility", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "destination", [], "any", false, false, false, 26), 'label');
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "destination", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>

                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "submit", [], "any", false, false, false, 30), 'row');
        yield "
                ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        yield "
            </div>

            <!-- Table section (right side) -->
            <div class=\"col-lg-6 col-md-12 table-container\">
                <h2>Available Means of Transportation</h2>
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Capacity</th>
                            <th>Availability</th>
                            <th>Destination</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 49
            yield "                            <tr>
                                <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                                <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "capacity", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                                <td>";
            // line 52
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "disponibility", [], "any", false, false, false, 52)) ? ("Available") : ("Not Available"));
            yield "</td>
                                <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "destination", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                <td>
                                    <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transport_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Edit</a>
                                    <a href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transport_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            yield "\" class=\"btn btn-danger\" 
                                       onclick=\"return confirm('Are you sure you want to delete this transport?');\">Delete</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            yield "                            <tr>
                                <td colspan=\"5\">No transport entries found.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Button to navigate to the drivers list -->
        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("driver_index");
        yield "\" class=\"btn btn-info\">Show Drivers List</a>
        </div>
    </div>

    <!-- Custom CSS for your page -->
    <link href=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/css_halimaa.css"), "html", null, true);
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
        return "admin_transport/list.html.twig";
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
        return array (  220 => 77,  212 => 72,  203 => 65,  194 => 61,  184 => 56,  180 => 55,  175 => 53,  171 => 52,  167 => 51,  163 => 50,  160 => 49,  155 => 48,  135 => 31,  131 => 30,  125 => 27,  121 => 26,  114 => 22,  110 => 21,  103 => 17,  99 => 16,  92 => 12,  88 => 11,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <!-- Form section (left side) -->
            <div class=\"col-lg-6 col-md-12 mb-4 form-container\">
                <h2>Add or Edit Means of Transportation</h2>
                {{ form_start(form) }}
                    <div class=\"form-group\">
                        {{ form_label(form.type) }}
                        {{ form_widget(form.type, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.capacity) }}
                        {{ form_widget(form.capacity, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.disponibility) }}
                        {{ form_widget(form.disponibility, {'attr': {'class': 'form-check-input'}}) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.destination) }}
                        {{ form_widget(form.destination, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    {{ form_row(form.submit) }}
                {{ form_end(form) }}
            </div>

            <!-- Table section (right side) -->
            <div class=\"col-lg-6 col-md-12 table-container\">
                <h2>Available Means of Transportation</h2>
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
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
                                <td>{{ transport.type }}</td>
                                <td>{{ transport.capacity }}</td>
                                <td>{{ transport.disponibility ? 'Available' : 'Not Available' }}</td>
                                <td>{{ transport.destination }}</td>
                                <td>
                                    <a href=\"{{ path('transport_edit', {'id': transport.id}) }}\" class=\"btn btn-warning\">Edit</a>
                                    <a href=\"{{ path('transport_delete', {'id': transport.id}) }}\" class=\"btn btn-danger\" 
                                       onclick=\"return confirm('Are you sure you want to delete this transport?');\">Delete</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\">No transport entries found.</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Button to navigate to the drivers list -->
        <div class=\"text-center mt-4\">
            <a href=\"{{ path('driver_index') }}\" class=\"btn btn-info\">Show Drivers List</a>
        </div>
    </div>

    <!-- Custom CSS for your page -->
    <link href=\"{{ asset('css/css_halimaa.css') }}\" rel=\"stylesheet\">
{% endblock %}
", "admin_transport/list.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin_transport\\list.html.twig");
    }
}
