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

/* event/index.html.twig */
class __TwigTemplate_4ab4ca7ab8eb97f54a1e96f2b2f78764 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "event/index.html.twig", 1);
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

        yield "Events List";
        
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
                <h1 class=\"text-white animated zoomIn\">Events</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Events</li>
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
        yield "<style>
    :root {
        --primary-color: #0066cc;  /* Match theme's primary color */
        --success-color: #2ecc71;
        --warning-color: #f1c40f;
        --danger-color: #e74c3c;
        --text-color: #2c3e50;
        --bg-light: #f8f9fa;
        --border-color: #ecf0f1;
        --recent-bg: #e8f5e9;
        --finished-bg: #fff3e0;
    }

    .event-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        padding-bottom: 2rem;
    }

    .header-section {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .page-title {
        color: var(--text-color);
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        padding-bottom: 1rem;
        border-bottom: 3px solid var(--primary-color);
    }

       .search-section {
    position: relative;
    max-width: 1500px;
    margin: 1rem auto;
}

.search-container {
    position: relative;
    z-index: 100;
}

.search-trigger {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 24px;
    background: #fff;
    border: 2px solid #e0e0e0;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 250px;
}

.search-trigger:hover {
    border-color: #3498db;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.2);
}

.search-icon {
    width: 20px;
    height: 20px;
    color: #666;
}

.search-label {
    font-weight: 1500;
    color: #333;
}

.toggle-arrow {
    margin-left: auto;
    transition: transform 0.3s ease;
}

.filters-dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.12);
    padding: 24px;
    margin-top: 8px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 1000;
}

.filters-dropdown.active {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.filter-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.filter-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.filter-input {
    padding: 10px 16px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.filter-input:focus {
    border-color: #3498db;
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
    outline: none;
}

.apply-button {
    width: 100%;
    padding: 12px 24px;
    background: #3498db;
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: 500;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.3s ease;
}

.apply-button:hover {
    background: #2980b9;
    transform: translateY(-1px);
}

@media (max-width: 768px) {
    .filter-grid {
        grid-template-columns: 1fr;
    }
    
    .search-trigger {
        width: 100%;
    }
    
    .filters-dropdown {
        position: fixed;
        left: 16px;
        right: 16px;
        width: calc(100% - 32px);
    }
}

    .event-actions {
        margin-bottom: 2rem;
    }

    .create-button {
        background: var(--primary-color);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .create-button:hover {
        background: #2980b9;
        transform: translateY(-1px);
    }

    .events-table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        margin-bottom: 2rem;
    }

    .table-header {
        background: var(--primary-color);
        color: white;
    }

    .table-header th {
        padding: 1rem;
        text-align: left;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
    }

    .table-row {
        border-bottom: 1px solid var(--border-color);
        transition: background 0.2s ease;
    }

    .table-row:nth-child(even) {
        background: var(--bg-light);
    }

    .table-row:hover {
        background: #f1f5f9;
    }

    .table-row td {
        padding: 1rem;
        color: var(--text-color);
    }

    .status-badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
        background: #e0e0e0;
    }

    /* Dropdown Actions */
    .dropdown-actions {
        position: relative;
        display: inline-block;
    }

    .dropdown-toggle {
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        right: 0;
        top: 100%;
        background: white;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        border-radius: 6px;
        min-width: 160px;
        z-index: 1;
    }

    .dropdown-actions:hover .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        padding: 0.75rem 1rem;
        text-decoration: none;
        color: var(--text-color);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        transition: background 0.2s;
    }

    .dropdown-item:hover {
        background: var(--bg-light);
    }

    .dropdown-item.delete {
        color: var(--danger-color);
    }

    /* Status Sections */
    .events-status-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 3rem 0;
    }

    .status-section {
        padding: 1.5rem;
        border-radius: 10px;
        background: white;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .status-section h2 {
        font-size: 1.25rem;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .recent-events {
        border-color: var(--success-color);
        background: var(--recent-bg);
    }

    .finished-events {
        border-color: var(--warning-color);
        background: var(--finished-bg);
    }

    .event-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .event-list li {
        padding: 0.75rem 0;
        border-bottom: 1px solid var(--border-color);
    }

    .event-list li:last-child {
        border-bottom: none;
    }

    /* Footer */
    /* Footer styles removed as they're handled by the base template */
    .no-events {
        text-align: center;
        padding: 2rem;
        color: #7f8c8d;
        font-style: italic;
        background: white;
        border-radius: 12px;
        margin: 2rem 0;
    }
    .registration-container {
    max-width: 1500px;
    margin: 2rem auto;
    padding: 0 1rem;
    padding-bottom: 2rem; /* Add padding to prevent footer overlap */
}

.management-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2rem;
    background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
}

.management-header h1 {
    color: white;
    margin: 0;
    font-size: 2.25rem;
    font-weight: 600;
}

.create-registration-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: white;
    color: #4f46e5;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.2s ease;
}

.create-registration-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.create-registration-btn i {
    font-size: 1.25rem;
}

    
</style>

<script>
function toggleSearchFilters() {
    const dropdown = document.querySelector('.filters-dropdown');
    const arrow = document.querySelector('.toggle-arrow');
    dropdown.classList.toggle('active');
    arrow.style.transform = dropdown.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0)';
}

// Close dropdown when clicking outside
document.addEventListener('click', (event) => {
    const searchContainer = document.querySelector('.search-container');
    const dropdown = document.querySelector('.filters-dropdown');
    
    if (!searchContainer.contains(event.target)) {
        dropdown.classList.remove('active');
        document.querySelector('.toggle-arrow').style.transform = 'rotate(0)';
    }
});
</script>

<div class=\"registration-container\">
    <div class=\"management-header\">
        <h1>🎉 Events</h1>
       
        
</div>
<!-- Search Section -->
        <div class=\"search-section\">
            <form method=\"get\" action=\"";
        // line 457
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_search");
        yield "\" class=\"search-form\">
                <div class=\"search-container\">
                    <!-- Search Trigger -->
                    <div class=\"search-trigger\" onclick=\"toggleSearchFilters()\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" class=\"search-icon\" viewBox=\"0 0 16 16\">
                            <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                        </svg>
                        <span class=\"search-label\">Search Events</span>
                        <i class=\"bx bx-chevron-down toggle-arrow\"></i>
                    </div>

                    <!-- Filters Dropdown -->
                    <div class=\"filters-dropdown\">
                        <div class=\"filter-grid\">
                            <div class=\"filter-group\">
                                <input type=\"text\" name=\"title\" placeholder=\"Event title...\" 
                                       class=\"filter-input\" value=\"";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 473, $this->source); })()), "request", [], "any", false, false, false, 473), "query", [], "any", false, false, false, 473), "get", ["title"], "method", false, false, false, 473), "html", null, true);
        yield "\">
                            </div>

                            <div class=\"filter-group\">
                                <input type=\"text\" name=\"description\" placeholder=\"Description...\" 
                                       class=\"filter-input\" value=\"";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 478, $this->source); })()), "request", [], "any", false, false, false, 478), "query", [], "any", false, false, false, 478), "get", ["description"], "method", false, false, false, 478), "html", null, true);
        yield "\">
                            </div>

                            <div class=\"filter-group\">
                                <input type=\"number\" name=\"duration\" placeholder=\"Duration (minutes)\" 
                                       class=\"filter-input\" value=\"";
        // line 483
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 483, $this->source); })()), "request", [], "any", false, false, false, 483), "query", [], "any", false, false, false, 483), "get", ["duration"], "method", false, false, false, 483), "html", null, true);
        yield "\">
                            </div>

                            <div class=\"filter-group\">
                                <select name=\"type\" class=\"filter-input\">
                                    <option value=\"\">Price Range</option>
                                    <option value=\"20\" ";
        // line 489
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 489, $this->source); })()), "request", [], "any", false, false, false, 489), "query", [], "any", false, false, false, 489), "get", ["type"], "method", false, false, false, 489) == "20")) ? ("selected") : (""));
        yield ">20 DT</option>
                                    <option value=\"30\" ";
        // line 490
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 490, $this->source); })()), "request", [], "any", false, false, false, 490), "query", [], "any", false, false, false, 490), "get", ["type"], "method", false, false, false, 490) == "30")) ? ("selected") : (""));
        yield ">30 DT</option>
                                    <option value=\"50\" ";
        // line 491
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 491, $this->source); })()), "request", [], "any", false, false, false, 491), "query", [], "any", false, false, false, 491), "get", ["type"], "method", false, false, false, 491) == "50")) ? ("selected") : (""));
        yield ">50 DT</option>
                                    <option value=\"100\" ";
        // line 492
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 492, $this->source); })()), "request", [], "any", false, false, false, 492), "query", [], "any", false, false, false, 492), "get", ["type"], "method", false, false, false, 492) == "100")) ? ("selected") : (""));
        yield ">100 DT</option>
                                    <option value=\"150\" ";
        // line 493
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 493, $this->source); })()), "request", [], "any", false, false, false, 493), "query", [], "any", false, false, false, 493), "get", ["type"], "method", false, false, false, 493) == "150")) ? ("selected") : (""));
        yield ">150 DT</option>
                                </select>
                            </div>

                            <div class=\"filter-group\">
                                <select name=\"status\" class=\"filter-input\">
                                    <option value=\"\">All States</option>
                                    ";
        // line 500
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Ariana", "Béja", "Ben Arous", "Bizerte", "Gabès", "Gafsa", "Jendouba", "Kairouan", "Kasserine", "Kébili", "Kef", "Mahdia", "Manouba", "Medenine", "Monastir", "Nabeul", "Sfax", "Sidi Bouzid", "Siliana", "Sousse", "Tataouine", "Tozeur", "Tunis", "Zaghouan"]);
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 504
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["state"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 504, $this->source); })()), "request", [], "any", false, false, false, 504), "query", [], "any", false, false, false, 504), "get", ["status"], "method", false, false, false, 504) == $context["state"])) ? ("selected") : (""));
            yield ">
                                            ";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["state"], "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['state'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 508
        yield "                                </select>
                            </div>

                            <div class=\"filter-group\">
                                <input type=\"date\" class=\"filter-input\" name=\"dateevent\" 
                                       placeholder=\"YYYY-MM-DD\" value=\"";
        // line 513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 513, $this->source); })()), "request", [], "any", false, false, false, 513), "query", [], "any", false, false, false, 513), "get", ["dateevent"], "method", false, false, false, 513), "html", null, true);
        yield "\">
                            </div>

                            <div class=\"filter-group\">
                                <input type=\"time\" name=\"startEvent\" 
                                       class=\"filter-input\" value=\"";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 518, $this->source); })()), "request", [], "any", false, false, false, 518), "query", [], "any", false, false, false, 518), "get", ["startEvent"], "method", false, false, false, 518), "html", null, true);
        yield "\">
                            </div>
                        </div>

                        <button type=\"submit\" class=\"apply-button\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-funnel\" viewBox=\"0 0 16 16\">
                                <path d=\"M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.808V2z\"/>
                            </svg>
                            Apply Filters
                        </button>
                    </div>
                </div>
            </form>
        </div>
    



   

    <table class=\"events-table\">
        <thead class=\"table-header\">
            <tr>
                <th>#</th>
<th>📛 Title</th>
<th>📝 Description</th>
<th>⏱ Duration</th>
<th>💰 Price</th>
<th>📍 State</th>
<th>📅 Date</th>
<th>⏰ Time</th>
<th>⚙️ Actions</th>

            </tr>
        </thead>
        <tbody>
            ";
        // line 554
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 554, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 555
            yield "                <tr class=\"table-row\">
                    <td>";
            // line 556
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 556), "html", null, true);
            yield "</td>
                    <td>";
            // line 557
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 557), "html", null, true);
            yield "</td>
                    <td>";
            // line 558
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 558), 0, 30), "html", null, true);
            yield "...</td>
                    <td>";
            // line 559
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "duration", [], "any", false, false, false, 559), "html", null, true);
            yield " mins</td>
                    <td><span class=\"status-badge\">";
            // line 560
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 560), "html", null, true);
            yield " DT</span></td>
                    <td><span class=\"status-badge\">";
            // line 561
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 561), "html", null, true);
            yield "</span></td>
                    <td>";
            // line 562
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getFormattedDate", [], "method", false, false, false, 562), "html", null, true);
            yield "</td>
                    <td>";
            // line 563
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getFormattedTime", [], "method", false, false, false, 563), "html", null, true);
            yield "</td>
                    <td>
                    
                        <div class=\"dropdown-actions\">
                            <button class=\"dropdown-toggle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-three-dots\" viewBox=\"0 0 16 16\">
                                    <path d=\"M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3\"/>
                                </svg>
                            </button>
                            <div class=\"dropdown-menu\">
                                <a href=\"";
            // line 573
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_coordinates_page", ["city" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 573)]), "html", null, true);
            yield "\" 
                                   class=\"dropdown-item\"
                                   target=\"_blank\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-geo-alt\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10\"/>
                                        <path d=\"M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6\"/>
                                    </svg>
                                    View Coordinates
                                </a>
                                <a href=\"";
            // line 582
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_registration_new", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 582)]), "html", null, true);
            yield "\" class=\"dropdown-item\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-plus\" viewBox=\"0 0 16 16\">
                                        <path d=\"M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5\"/>
                                    </svg>
                                    Register
                                </a>
                                ";
            // line 589
            if ((isset($context["is_admin"]) || array_key_exists("is_admin", $context) ? $context["is_admin"] : (function () { throw new RuntimeError('Variable "is_admin" does not exist.', 589, $this->source); })())) {
                // line 590
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 590)]), "html", null, true);
                yield "\" class=\"dropdown-item\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\">
                                            <path d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\"/>
                                        </svg>
                                        Edit
                                    </a>
                                    <form method=\"post\" action=\"";
                // line 596
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 596)]), "html", null, true);
                yield "\" 
                                          onsubmit=\"return confirm('Are you sure you want to delete this event?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 598
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 598))), "html", null, true);
                yield "\">
                                        <button class=\"dropdown-item delete\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                                                <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z\"/>
                                                <path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z\"/>
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                ";
            }
            // line 608
            yield "                                </div>
                            </div>
                        </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 613
            yield "                <tr>
                    <td colspan=\"9\" class=\"no-events\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" class=\"bi bi-calendar-x\" viewBox=\"0 0 16 16\">
                            <path d=\"M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708\"/>
                            <path d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z\"/>
                        </svg>
                        <p>No events found. Start by creating a new event! 🌟</p>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 623
        yield "        </tbody>
    </table>

    <div class=\"events-status-container\">
        <div class=\"status-section recent-events\">
            <h2>📅 Most Recent Event</h2>
            ";
        // line 629
        if ((isset($context["earliestEvent"]) || array_key_exists("earliestEvent", $context) ? $context["earliestEvent"] : (function () { throw new RuntimeError('Variable "earliestEvent" does not exist.', 629, $this->source); })())) {
            // line 630
            yield "                <ul class=\"event-list\">
                    <li>
                        <strong>";
            // line 632
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["earliestEvent"]) || array_key_exists("earliestEvent", $context) ? $context["earliestEvent"] : (function () { throw new RuntimeError('Variable "earliestEvent" does not exist.', 632, $this->source); })()), "title", [], "any", false, false, false, 632), "html", null, true);
            yield "</strong>
                        <div class=\"event-date\">";
            // line 633
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["earliestEvent"]) || array_key_exists("earliestEvent", $context) ? $context["earliestEvent"] : (function () { throw new RuntimeError('Variable "earliestEvent" does not exist.', 633, $this->source); })()), "dateevent", [], "any", false, false, false, 633), "Y-m-d"), "html", null, true);
            yield "</div>
                        <div>";
            // line 634
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["earliestEvent"]) || array_key_exists("earliestEvent", $context) ? $context["earliestEvent"] : (function () { throw new RuntimeError('Variable "earliestEvent" does not exist.', 634, $this->source); })()), "description", [], "any", false, false, false, 634), 0, 50), "html", null, true);
            yield "...</div>
                    </li>
                </ul>
            ";
        } else {
            // line 638
            yield "                <p>No upcoming events found.</p>
            ";
        }
        // line 640
        yield "        </div>

        <div class=\"status-section finished-events\">
            <h2>✅ Finished Events</h2>
            ";
        // line 644
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["finishedEvents"]) || array_key_exists("finishedEvents", $context) ? $context["finishedEvents"] : (function () { throw new RuntimeError('Variable "finishedEvents" does not exist.', 644, $this->source); })()))) {
            // line 645
            yield "                <ul class=\"event-list\">
                    ";
            // line 646
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["finishedEvents"]) || array_key_exists("finishedEvents", $context) ? $context["finishedEvents"] : (function () { throw new RuntimeError('Variable "finishedEvents" does not exist.', 646, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 647
                yield "                        <li>
                            <strong>";
                // line 648
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 648), "html", null, true);
                yield "</strong>
                            <div class=\"event-date\">";
                // line 649
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateevent", [], "any", false, false, false, 649), "Y-m-d"), "html", null, true);
                yield "</div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 652
            yield "                </ul>
            ";
        } else {
            // line 654
            yield "                <p>No finished events found.</p>
            ";
        }
        // line 656
        yield "        </div>
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
        return "event/index.html.twig";
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
        return array (  919 => 656,  915 => 654,  911 => 652,  902 => 649,  898 => 648,  895 => 647,  891 => 646,  888 => 645,  886 => 644,  880 => 640,  876 => 638,  869 => 634,  865 => 633,  861 => 632,  857 => 630,  855 => 629,  847 => 623,  832 => 613,  823 => 608,  810 => 598,  805 => 596,  795 => 590,  793 => 589,  783 => 582,  771 => 573,  758 => 563,  754 => 562,  750 => 561,  746 => 560,  742 => 559,  738 => 558,  734 => 557,  730 => 556,  727 => 555,  722 => 554,  683 => 518,  675 => 513,  668 => 508,  659 => 505,  652 => 504,  648 => 500,  638 => 493,  634 => 492,  630 => 491,  626 => 490,  622 => 489,  613 => 483,  605 => 478,  597 => 473,  578 => 457,  144 => 25,  131 => 24,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Events List{% endblock %}

{% block hero_banner %}
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Events</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Events</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block content %}
<style>
    :root {
        --primary-color: #0066cc;  /* Match theme's primary color */
        --success-color: #2ecc71;
        --warning-color: #f1c40f;
        --danger-color: #e74c3c;
        --text-color: #2c3e50;
        --bg-light: #f8f9fa;
        --border-color: #ecf0f1;
        --recent-bg: #e8f5e9;
        --finished-bg: #fff3e0;
    }

    .event-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        padding-bottom: 2rem;
    }

    .header-section {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .page-title {
        color: var(--text-color);
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        padding-bottom: 1rem;
        border-bottom: 3px solid var(--primary-color);
    }

       .search-section {
    position: relative;
    max-width: 1500px;
    margin: 1rem auto;
}

.search-container {
    position: relative;
    z-index: 100;
}

.search-trigger {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 24px;
    background: #fff;
    border: 2px solid #e0e0e0;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 250px;
}

.search-trigger:hover {
    border-color: #3498db;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.2);
}

.search-icon {
    width: 20px;
    height: 20px;
    color: #666;
}

.search-label {
    font-weight: 1500;
    color: #333;
}

.toggle-arrow {
    margin-left: auto;
    transition: transform 0.3s ease;
}

.filters-dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.12);
    padding: 24px;
    margin-top: 8px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 1000;
}

.filters-dropdown.active {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.filter-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.filter-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.filter-input {
    padding: 10px 16px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.filter-input:focus {
    border-color: #3498db;
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
    outline: none;
}

.apply-button {
    width: 100%;
    padding: 12px 24px;
    background: #3498db;
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: 500;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.3s ease;
}

.apply-button:hover {
    background: #2980b9;
    transform: translateY(-1px);
}

@media (max-width: 768px) {
    .filter-grid {
        grid-template-columns: 1fr;
    }
    
    .search-trigger {
        width: 100%;
    }
    
    .filters-dropdown {
        position: fixed;
        left: 16px;
        right: 16px;
        width: calc(100% - 32px);
    }
}

    .event-actions {
        margin-bottom: 2rem;
    }

    .create-button {
        background: var(--primary-color);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .create-button:hover {
        background: #2980b9;
        transform: translateY(-1px);
    }

    .events-table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        margin-bottom: 2rem;
    }

    .table-header {
        background: var(--primary-color);
        color: white;
    }

    .table-header th {
        padding: 1rem;
        text-align: left;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
    }

    .table-row {
        border-bottom: 1px solid var(--border-color);
        transition: background 0.2s ease;
    }

    .table-row:nth-child(even) {
        background: var(--bg-light);
    }

    .table-row:hover {
        background: #f1f5f9;
    }

    .table-row td {
        padding: 1rem;
        color: var(--text-color);
    }

    .status-badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
        background: #e0e0e0;
    }

    /* Dropdown Actions */
    .dropdown-actions {
        position: relative;
        display: inline-block;
    }

    .dropdown-toggle {
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        right: 0;
        top: 100%;
        background: white;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        border-radius: 6px;
        min-width: 160px;
        z-index: 1;
    }

    .dropdown-actions:hover .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        padding: 0.75rem 1rem;
        text-decoration: none;
        color: var(--text-color);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        transition: background 0.2s;
    }

    .dropdown-item:hover {
        background: var(--bg-light);
    }

    .dropdown-item.delete {
        color: var(--danger-color);
    }

    /* Status Sections */
    .events-status-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 3rem 0;
    }

    .status-section {
        padding: 1.5rem;
        border-radius: 10px;
        background: white;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .status-section h2 {
        font-size: 1.25rem;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .recent-events {
        border-color: var(--success-color);
        background: var(--recent-bg);
    }

    .finished-events {
        border-color: var(--warning-color);
        background: var(--finished-bg);
    }

    .event-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .event-list li {
        padding: 0.75rem 0;
        border-bottom: 1px solid var(--border-color);
    }

    .event-list li:last-child {
        border-bottom: none;
    }

    /* Footer */
    /* Footer styles removed as they're handled by the base template */
    .no-events {
        text-align: center;
        padding: 2rem;
        color: #7f8c8d;
        font-style: italic;
        background: white;
        border-radius: 12px;
        margin: 2rem 0;
    }
    .registration-container {
    max-width: 1500px;
    margin: 2rem auto;
    padding: 0 1rem;
    padding-bottom: 2rem; /* Add padding to prevent footer overlap */
}

.management-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2rem;
    background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
}

.management-header h1 {
    color: white;
    margin: 0;
    font-size: 2.25rem;
    font-weight: 600;
}

.create-registration-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: white;
    color: #4f46e5;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.2s ease;
}

.create-registration-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.create-registration-btn i {
    font-size: 1.25rem;
}

    
</style>

<script>
function toggleSearchFilters() {
    const dropdown = document.querySelector('.filters-dropdown');
    const arrow = document.querySelector('.toggle-arrow');
    dropdown.classList.toggle('active');
    arrow.style.transform = dropdown.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0)';
}

// Close dropdown when clicking outside
document.addEventListener('click', (event) => {
    const searchContainer = document.querySelector('.search-container');
    const dropdown = document.querySelector('.filters-dropdown');
    
    if (!searchContainer.contains(event.target)) {
        dropdown.classList.remove('active');
        document.querySelector('.toggle-arrow').style.transform = 'rotate(0)';
    }
});
</script>

<div class=\"registration-container\">
    <div class=\"management-header\">
        <h1>🎉 Events</h1>
       
        
</div>
<!-- Search Section -->
        <div class=\"search-section\">
            <form method=\"get\" action=\"{{ path('app_event_search') }}\" class=\"search-form\">
                <div class=\"search-container\">
                    <!-- Search Trigger -->
                    <div class=\"search-trigger\" onclick=\"toggleSearchFilters()\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" class=\"search-icon\" viewBox=\"0 0 16 16\">
                            <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                        </svg>
                        <span class=\"search-label\">Search Events</span>
                        <i class=\"bx bx-chevron-down toggle-arrow\"></i>
                    </div>

                    <!-- Filters Dropdown -->
                    <div class=\"filters-dropdown\">
                        <div class=\"filter-grid\">
                            <div class=\"filter-group\">
                                <input type=\"text\" name=\"title\" placeholder=\"Event title...\" 
                                       class=\"filter-input\" value=\"{{ app.request.query.get('title') }}\">
                            </div>

                            <div class=\"filter-group\">
                                <input type=\"text\" name=\"description\" placeholder=\"Description...\" 
                                       class=\"filter-input\" value=\"{{ app.request.query.get('description') }}\">
                            </div>

                            <div class=\"filter-group\">
                                <input type=\"number\" name=\"duration\" placeholder=\"Duration (minutes)\" 
                                       class=\"filter-input\" value=\"{{ app.request.query.get('duration') }}\">
                            </div>

                            <div class=\"filter-group\">
                                <select name=\"type\" class=\"filter-input\">
                                    <option value=\"\">Price Range</option>
                                    <option value=\"20\" {{ app.request.query.get('type') == '20' ? 'selected' }}>20 DT</option>
                                    <option value=\"30\" {{ app.request.query.get('type') == '30' ? 'selected' }}>30 DT</option>
                                    <option value=\"50\" {{ app.request.query.get('type') == '50' ? 'selected' }}>50 DT</option>
                                    <option value=\"100\" {{ app.request.query.get('type') == '100' ? 'selected' }}>100 DT</option>
                                    <option value=\"150\" {{ app.request.query.get('type') == '150' ? 'selected' }}>150 DT</option>
                                </select>
                            </div>

                            <div class=\"filter-group\">
                                <select name=\"status\" class=\"filter-input\">
                                    <option value=\"\">All States</option>
                                    {% for state in ['Ariana', 'Béja', 'Ben Arous', 'Bizerte', 'Gabès', 'Gafsa', 'Jendouba', 
                                                   'Kairouan', 'Kasserine', 'Kébili', 'Kef', 'Mahdia', 'Manouba', 'Medenine', 
                                                   'Monastir', 'Nabeul', 'Sfax', 'Sidi Bouzid', 'Siliana', 'Sousse', 
                                                   'Tataouine', 'Tozeur', 'Tunis', 'Zaghouan'] %}
                                        <option value=\"{{ state }}\" {{ app.request.query.get('status') == state ? 'selected' }}>
                                            {{ state }}
                                        </option>
                                    {% endfor %}
                                </select>
                            </div>

                            <div class=\"filter-group\">
                                <input type=\"date\" class=\"filter-input\" name=\"dateevent\" 
                                       placeholder=\"YYYY-MM-DD\" value=\"{{ app.request.query.get('dateevent') }}\">
                            </div>

                            <div class=\"filter-group\">
                                <input type=\"time\" name=\"startEvent\" 
                                       class=\"filter-input\" value=\"{{ app.request.query.get('startEvent') }}\">
                            </div>
                        </div>

                        <button type=\"submit\" class=\"apply-button\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-funnel\" viewBox=\"0 0 16 16\">
                                <path d=\"M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.808V2z\"/>
                            </svg>
                            Apply Filters
                        </button>
                    </div>
                </div>
            </form>
        </div>
    



   

    <table class=\"events-table\">
        <thead class=\"table-header\">
            <tr>
                <th>#</th>
<th>📛 Title</th>
<th>📝 Description</th>
<th>⏱ Duration</th>
<th>💰 Price</th>
<th>📍 State</th>
<th>📅 Date</th>
<th>⏰ Time</th>
<th>⚙️ Actions</th>

            </tr>
        </thead>
        <tbody>
            {% for event in events %}
                <tr class=\"table-row\">
                    <td>{{ event.id }}</td>
                    <td>{{ event.title }}</td>
                    <td>{{ event.description|slice(0, 30) }}...</td>
                    <td>{{ event.duration }} mins</td>
                    <td><span class=\"status-badge\">{{ event.type }} DT</span></td>
                    <td><span class=\"status-badge\">{{ event.status }}</span></td>
                    <td>{{ event.getFormattedDate() }}</td>
                    <td>{{ event.getFormattedTime() }}</td>
                    <td>
                    
                        <div class=\"dropdown-actions\">
                            <button class=\"dropdown-toggle\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-three-dots\" viewBox=\"0 0 16 16\">
                                    <path d=\"M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3\"/>
                                </svg>
                            </button>
                            <div class=\"dropdown-menu\">
                                <a href=\"{{ path('app_event_coordinates_page', {'city': event.status}) }}\" 
                                   class=\"dropdown-item\"
                                   target=\"_blank\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-geo-alt\" viewBox=\"0 0 16 16\">
                                        <path d=\"M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10\"/>
                                        <path d=\"M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6\"/>
                                    </svg>
                                    View Coordinates
                                </a>
                                <a href=\"{{ path('app_event_registration_new', {'eventId': event.id}) }}\" class=\"dropdown-item\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person-plus\" viewBox=\"0 0 16 16\">
                                        <path d=\"M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5\"/>
                                    </svg>
                                    Register
                                </a>
                                {% if is_admin %}
                                    <a href=\"{{ path('app_event_edit', {'id': event.id}) }}\" class=\"dropdown-item\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\">
                                            <path d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\"/>
                                        </svg>
                                        Edit
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_event_delete', {'id': event.id}) }}\" 
                                          onsubmit=\"return confirm('Are you sure you want to delete this event?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\">
                                        <button class=\"dropdown-item delete\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                                                <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z\"/>
                                                <path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z\"/>
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                {% endif %}
                                </div>
                            </div>
                        </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"9\" class=\"no-events\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" class=\"bi bi-calendar-x\" viewBox=\"0 0 16 16\">
                            <path d=\"M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708\"/>
                            <path d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z\"/>
                        </svg>
                        <p>No events found. Start by creating a new event! 🌟</p>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"events-status-container\">
        <div class=\"status-section recent-events\">
            <h2>📅 Most Recent Event</h2>
            {% if earliestEvent %}
                <ul class=\"event-list\">
                    <li>
                        <strong>{{ earliestEvent.title }}</strong>
                        <div class=\"event-date\">{{ earliestEvent.dateevent|date('Y-m-d') }}</div>
                        <div>{{ earliestEvent.description|slice(0, 50) }}...</div>
                    </li>
                </ul>
            {% else %}
                <p>No upcoming events found.</p>
            {% endif %}
        </div>

        <div class=\"status-section finished-events\">
            <h2>✅ Finished Events</h2>
            {% if finishedEvents is not empty %}
                <ul class=\"event-list\">
                    {% for event in finishedEvents %}
                        <li>
                            <strong>{{ event.title }}</strong>
                            <div class=\"event-date\">{{ event.dateevent|date('Y-m-d') }}</div>
                        </li>
                    {% endfor %}
                </ul>
            {% else %}
                <p>No finished events found.</p>
            {% endif %}
        </div>
    </div>
</div>

{% endblock %}
", "event/index.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event\\index.html.twig");
    }
}
