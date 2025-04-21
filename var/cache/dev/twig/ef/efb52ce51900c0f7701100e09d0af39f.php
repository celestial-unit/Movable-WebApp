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

/* office/officeAdmin.html.twig */
class __TwigTemplate_32cb3ab4a0e223d09c969d9b274979e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "office/officeAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "office/officeAdmin.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "office/officeAdmin.html.twig", 1);
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

        yield "Offices";
        
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
        yield "    <h1 class=\"mb-4\">Manage Offices</h1>

    <div class=\"mb-3 text-end\">
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("office_new");
        yield "\" class=\"btn btn-success\">+ Add Office</a>
    </div>

    <div class=\"row\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offices"]) || array_key_exists("offices", $context) ? $context["offices"] : (function () { throw new RuntimeError('Variable "offices" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
            // line 14
            yield "            <div class=\"col-md-4\">
                <div class=\"card mb-4 shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["office"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield "</h5>
                        <p><strong>Location:</strong> ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["office"], "location", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                        <p><strong>Phone Number:</strong> ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["office"], "phone", [], "any", false, false, false, 19), "html", null, true);
            yield "</p>
                        <p><strong>Number of Agents:</strong> ";
            // line 20
            (((CoreExtension::getAttribute($this->env, $this->source, $context["office"], "agents", [], "any", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["office"], "agents", [], "any", false, false, false, 20)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["office"], "agents", [], "any", false, false, false, 20), "html", null, true)) : (yield "N/A"));
            yield "</p>

                        <div class=\"d-flex justify-content-between mt-3\">
                            <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("office_edit_admin", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Edit</a>
                            <a href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("office_delete_admin", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure?')\">Delete</a>
                            <a href=\"https://www.google.com/maps/search/?api=1&query=";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["office"], "location", [], "any", false, false, false, 25)), "html", null, true);
            yield "\" 
                               class=\"btn btn-info btn-sm\" target=\"_blank\">
                                View on Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            yield "            <p>No offices found.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['office'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "    </div>
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
        return "office/officeAdmin.html.twig";
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
        return array (  169 => 36,  162 => 34,  148 => 25,  144 => 24,  140 => 23,  134 => 20,  130 => 19,  126 => 18,  122 => 17,  117 => 14,  112 => 13,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block title %}Offices{% endblock %}

{% block body %}
    <h1 class=\"mb-4\">Manage Offices</h1>

    <div class=\"mb-3 text-end\">
        <a href=\"{{ path('office_new') }}\" class=\"btn btn-success\">+ Add Office</a>
    </div>

    <div class=\"row\">
        {% for office in offices %}
            <div class=\"col-md-4\">
                <div class=\"card mb-4 shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ office.name }}</h5>
                        <p><strong>Location:</strong> {{ office.location }}</p>
                        <p><strong>Phone Number:</strong> {{ office.phone }}</p>
                        <p><strong>Number of Agents:</strong> {{ office.agents ?? 'N/A' }}</p>

                        <div class=\"d-flex justify-content-between mt-3\">
                            <a href=\"{{ path('office_edit_admin', { id: office.id }) }}\" class=\"btn btn-primary btn-sm\">Edit</a>
                            <a href=\"{{ path('office_delete_admin', { id: office.id }) }}\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure?')\">Delete</a>
                            <a href=\"https://www.google.com/maps/search/?api=1&query={{ office.location | url_encode }}\" 
                               class=\"btn btn-info btn-sm\" target=\"_blank\">
                                View on Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <p>No offices found.</p>
        {% endfor %}
    </div>
{% endblock %}

", "office/officeAdmin.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\office\\officeAdmin.html.twig");
    }
}
