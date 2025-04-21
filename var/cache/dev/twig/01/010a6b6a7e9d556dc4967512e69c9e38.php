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

/* agent/agentsAdmin.html.twig */
class __TwigTemplate_729ddc3e7d68892ab4932ef812679c94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/agentsAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/agentsAdmin.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "agent/agentsAdmin.html.twig", 1);
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

        yield "Manage Agents";
        
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
        yield "<div class=\"container mt-5\">
    <h2 class=\"mb-4 text-center\">Admin – Manage Agents</h2>
    <div class=\"text-end mb-3\">
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_new");
        yield "\" class=\"btn btn-success\">+ Add New Agent</a>
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_statistics");
        yield "\" class=\"btn btn-info ms-2\">Statistics</a> <!-- Statistics Button -->
    </div>

    <div class=\"row\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 15
            yield "            <div class=\"col-md-4\">
                <div class=\"card mb-4 shadow-sm\">
                    <img src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "pictureP", [], "any", false, false, false, 17)), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield "\" style=\"height: 250px; object-fit: cover;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 19), "html", null, true);
            yield "</h5>
                        <p><strong>Email:</strong> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 20), "html", null, true);
            yield "</p>
                        <p><strong>Phone:</strong> ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "phone", [], "any", false, false, false, 21), "html", null, true);
            yield "</p>
                        <p><strong>Birthdate:</strong> ";
            // line 22
            ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "birthdate", [], "any", false, false, false, 22)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "birthdate", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true)) : (yield "N/A"));
            yield "</p>

                        <div class=\"d-flex justify-content-between mt-3\">
                            <a href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Edit</a>
                            <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\"
                               class=\"btn btn-danger btn-sm\"
                               onclick=\"return confirm('Are you sure you want to delete this agent?');\">
                               Delete
                            </a>
                        </div>

                        <div class=\"d-grid gap-2 mt-3\">
                            <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/agents/map.html") . "?agent_id=") . CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 34)), "html", null, true);
            yield "\"
                               class=\"btn btn-outline-success btn-sm\"
                               target=\"_blank\">
                                <i class=\"bi bi-geo-alt-fill me-1\"></i> Track in Real Time
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            yield "            <p class=\"text-center\">No agents found.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "    </div>
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
        return "agent/agentsAdmin.html.twig";
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
        return array (  187 => 46,  180 => 44,  165 => 34,  154 => 26,  150 => 25,  144 => 22,  140 => 21,  136 => 20,  132 => 19,  125 => 17,  121 => 15,  116 => 14,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block title %}Manage Agents{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h2 class=\"mb-4 text-center\">Admin – Manage Agents</h2>
    <div class=\"text-end mb-3\">
        <a href=\"{{ path('agent_new') }}\" class=\"btn btn-success\">+ Add New Agent</a>
        <a href=\"{{ path('agent_statistics') }}\" class=\"btn btn-info ms-2\">Statistics</a> <!-- Statistics Button -->
    </div>

    <div class=\"row\">
        {% for agent in agents %}
            <div class=\"col-md-4\">
                <div class=\"card mb-4 shadow-sm\">
                    <img src=\"{{ asset(agent.pictureP) }}\" class=\"card-img-top\" alt=\"{{ agent.name }}\" style=\"height: 250px; object-fit: cover;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ agent.name }}</h5>
                        <p><strong>Email:</strong> {{ agent.email }}</p>
                        <p><strong>Phone:</strong> {{ agent.phone }}</p>
                        <p><strong>Birthdate:</strong> {{ agent.birthdate ? agent.birthdate|date('Y-m-d') : 'N/A' }}</p>

                        <div class=\"d-flex justify-content-between mt-3\">
                            <a href=\"{{ path('agent_edit', { id: agent.id }) }}\" class=\"btn btn-primary btn-sm\">Edit</a>
                            <a href=\"{{ path('agent_delete', { id: agent.id }) }}\"
                               class=\"btn btn-danger btn-sm\"
                               onclick=\"return confirm('Are you sure you want to delete this agent?');\">
                               Delete
                            </a>
                        </div>

                        <div class=\"d-grid gap-2 mt-3\">
                            <a href=\"{{ asset('uploads/agents/map.html') ~ '?agent_id=' ~ agent.id }}\"
                               class=\"btn btn-outline-success btn-sm\"
                               target=\"_blank\">
                                <i class=\"bi bi-geo-alt-fill me-1\"></i> Track in Real Time
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <p class=\"text-center\">No agents found.</p>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "agent/agentsAdmin.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\agent\\agentsAdmin.html.twig");
    }
}
