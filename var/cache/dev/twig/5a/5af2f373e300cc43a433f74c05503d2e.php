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

/* agent/agentsUser.html.twig */
class __TwigTemplate_5d8e7627cb18ff7bac184dc927794619 extends Template
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
            'hero_banner' => [$this, 'block_hero_banner'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/agentsUser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/agentsUser.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "agent/agentsUser.html.twig", 1);
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

        yield "Agents";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero_banner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero_banner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero_banner"));

        // line 6
        yield "<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Our Agents</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Agents</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 25
        yield "<div class=\"container py-5\">
    <!-- Search Bar -->
    <div class=\"row mb-4\">
        <div class=\"col-md-6 mx-auto\">
            <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search agents by name...\" onkeyup=\"filterAgents()\">
        </div>
    </div>

<!-- Agents Section -->
<div id=\"agents-section\">
    <div class=\"row g-4 justify-content-center\" id=\"agents-list\">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 37
            yield "            <div class=\"col-md-6 col-lg-4 agent-card\" data-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 37)), "html", null, true);
            yield "\">
                <div class=\"card border-0 shadow rounded\">
                    <img src=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "pictureP", [], "any", false, false, false, 39)), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 39), "html", null, true);
            yield "\">
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 41), "html", null, true);
            yield "</h5>
                        <p class=\"card-text\">
                            ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 43), "html", null, true);
            yield "<br>
                            ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "phone", [], "any", false, false, false, 44), "html", null, true);
            yield "<br>
                            ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "type", [], "any", false, false, false, 45), "html", null, true);
            yield "<br>
                            <strong>Birthdate:</strong> ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "birthdate", [], "any", false, false, false, 46), "d-m-Y"), "html", null, true);
            yield "
                            
                        </p>
                        <button class=\"btn btn-info\" onclick=\"viewAgent('";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 49), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 49), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "phone", [], "any", false, false, false, 49), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "pictureP", [], "any", false, false, false, 49)), "js"), "html", null, true);
            yield "')\">
                            View Agent
                        </button>
                        <a href=\"";
            // line 52
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
            yield "\" class=\"btn btn-success mt-2\">
                            <i class=\"bi bi-calendar-check\"></i> Book
                        </a>
                        <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rate_agent", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" class=\"btn btn-warning mt-2\">
                            <i class=\"bi bi-star\"></i> Rate
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "    </div>
</div>


    <!-- Agent Detail Section -->
    <div id=\"agent-detail-section\" style=\"display: none;\">
        <div class=\"card border-0 shadow rounded mx-auto\" style=\"max-width: 500px;\">
            <img id=\"agent-picture\" src=\"\" class=\"card-img-top\" alt=\"Agent Picture\">
            <div class=\"card-body text-center\">
                <h5 id=\"agent-name\" class=\"card-title\"></h5>
                <p id=\"agent-email\" class=\"card-text\"></p>
                <p id=\"agent-phone\" class=\"card-text\"></p>
                <button class=\"btn btn-primary mt-3\" onclick=\"showSection('agents')\">Back to Agents List</button>
                <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
        yield "\" class=\"btn btn-success mt-3 ms-2\">
                    <i class=\"bi bi-calendar-check\"></i> Book
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    function viewAgent(id, name, email, phone, picture) {
        document.getElementById('agent-name').textContent = name;
        document.getElementById('agent-email').textContent = email;
        document.getElementById('agent-phone').textContent = phone;
        document.getElementById('agent-picture').src = picture;

        document.getElementById('agents-section').style.display = 'none';
        document.getElementById('agent-detail-section').style.display = 'block';
    }

    function showSection(sectionId) {
        document.getElementById('agents-section').style.display = sectionId === 'agents' ? 'block' : 'none';
        document.getElementById('agent-detail-section').style.display = sectionId === 'agents' ? 'none' : 'block';
    }

    function filterAgents() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const agentCards = document.querySelectorAll('.agent-card');

        agentCards.forEach(card => {
            const name = card.getAttribute('data-name');
            if (name.includes(input)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
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
        return "agent/agentsUser.html.twig";
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
        return array (  245 => 75,  230 => 62,  217 => 55,  211 => 52,  197 => 49,  191 => 46,  187 => 45,  183 => 44,  179 => 43,  174 => 41,  167 => 39,  161 => 37,  157 => 36,  144 => 25,  131 => 24,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Agents{% endblock %}

{% block hero_banner %}
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Our Agents</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Agents</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block content %}
<div class=\"container py-5\">
    <!-- Search Bar -->
    <div class=\"row mb-4\">
        <div class=\"col-md-6 mx-auto\">
            <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search agents by name...\" onkeyup=\"filterAgents()\">
        </div>
    </div>

<!-- Agents Section -->
<div id=\"agents-section\">
    <div class=\"row g-4 justify-content-center\" id=\"agents-list\">
        {% for agent in agents %}
            <div class=\"col-md-6 col-lg-4 agent-card\" data-name=\"{{ agent.name|lower }}\">
                <div class=\"card border-0 shadow rounded\">
                    <img src=\"{{ asset(agent.pictureP) }}\" class=\"card-img-top\" alt=\"{{ agent.name }}\">
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">{{ agent.name }}</h5>
                        <p class=\"card-text\">
                            {{ agent.email }}<br>
                            {{ agent.phone }}<br>
                            {{ agent.type }}<br>
                            <strong>Birthdate:</strong> {{ agent.birthdate|date('d-m-Y') }}
                            
                        </p>
                        <button class=\"btn btn-info\" onclick=\"viewAgent('{{ agent.id }}', '{{ agent.name }}', '{{ agent.email }}', '{{ agent.phone }}', '{{ asset(agent.pictureP)|e('js') }}')\">
                            View Agent
                        </button>
                        <a href=\"{{ path('app_reservation_new') }}\" class=\"btn btn-success mt-2\">
                            <i class=\"bi bi-calendar-check\"></i> Book
                        </a>
                        <a href=\"{{ path('rate_agent', { id: agent.id }) }}\" class=\"btn btn-warning mt-2\">
                            <i class=\"bi bi-star\"></i> Rate
                        </a>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>


    <!-- Agent Detail Section -->
    <div id=\"agent-detail-section\" style=\"display: none;\">
        <div class=\"card border-0 shadow rounded mx-auto\" style=\"max-width: 500px;\">
            <img id=\"agent-picture\" src=\"\" class=\"card-img-top\" alt=\"Agent Picture\">
            <div class=\"card-body text-center\">
                <h5 id=\"agent-name\" class=\"card-title\"></h5>
                <p id=\"agent-email\" class=\"card-text\"></p>
                <p id=\"agent-phone\" class=\"card-text\"></p>
                <button class=\"btn btn-primary mt-3\" onclick=\"showSection('agents')\">Back to Agents List</button>
                <a href=\"{{ path('app_reservation_new') }}\" class=\"btn btn-success mt-3 ms-2\">
                    <i class=\"bi bi-calendar-check\"></i> Book
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    function viewAgent(id, name, email, phone, picture) {
        document.getElementById('agent-name').textContent = name;
        document.getElementById('agent-email').textContent = email;
        document.getElementById('agent-phone').textContent = phone;
        document.getElementById('agent-picture').src = picture;

        document.getElementById('agents-section').style.display = 'none';
        document.getElementById('agent-detail-section').style.display = 'block';
    }

    function showSection(sectionId) {
        document.getElementById('agents-section').style.display = sectionId === 'agents' ? 'block' : 'none';
        document.getElementById('agent-detail-section').style.display = sectionId === 'agents' ? 'none' : 'block';
    }

    function filterAgents() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const agentCards = document.querySelectorAll('.agent-card');

        agentCards.forEach(card => {
            const name = card.getAttribute('data-name');
            if (name.includes(input)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
{% endblock %}






", "agent/agentsUser.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\agent\\agentsUser.html.twig");
    }
}
