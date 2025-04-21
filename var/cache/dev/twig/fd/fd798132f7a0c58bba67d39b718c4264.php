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

/* admin/reservation/_filters.html.twig */
class __TwigTemplate_e058c0dfc680d1c43a53d2e724799bc1 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/_filters.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/_filters.html.twig"));

        // line 1
        yield "<div class=\"card mb-4\">
    <div class=\"card-header\">
        <h5 class=\"mb-0\">Search & Filter Reservations</h5>
    </div>
    <div class=\"card-body\">
        <form method=\"get\" action=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target_path"]) || array_key_exists("target_path", $context) ? $context["target_path"] : (function () { throw new RuntimeError('Variable "target_path" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\">
            <div class=\"row g-3\">
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Date Range</label>
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control date-picker\" placeholder=\"From\" name=\"date_from\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", ["date_from"], "method", false, false, false, 11), "html", null, true);
        yield "\">
                        <input type=\"text\" class=\"form-control date-picker\" placeholder=\"To\" name=\"date_to\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "query", [], "any", false, false, false, 12), "get", ["date_to"], "method", false, false, false, 12), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label\">Destination</label>
                    <select class=\"form-select\" name=\"destination\">
                        <option value=\"\">All Destinations</option>
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["destinations"]) || array_key_exists("destinations", $context) ? $context["destinations"] : (function () { throw new RuntimeError('Variable "destinations" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["destination"]) {
            // line 20
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "iddestination", [], "any", false, false, false, 20), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "query", [], "any", false, false, false, 20), "get", ["destination"], "method", false, false, false, 20) == CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "iddestination", [], "any", false, false, false, 20))) ? ("selected") : (""));
            yield ">
                                ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "name", [], "any", false, false, false, 21), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['destination'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label\">Transport Type</label>
                    <select class=\"form-select\" name=\"transport\">
                        <option value=\"\">All Types</option>
                        <option value=\"bus\" ";
        // line 30
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "query", [], "any", false, false, false, 30), "get", ["transport"], "method", false, false, false, 30) == "bus")) ? ("selected") : (""));
        yield ">Bus</option>
                        <option value=\"train\" ";
        // line 31
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "query", [], "any", false, false, false, 31), "get", ["transport"], "method", false, false, false, 31) == "train")) ? ("selected") : (""));
        yield ">Train</option>
                        <option value=\"plane\" ";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "query", [], "any", false, false, false, 32), "get", ["transport"], "method", false, false, false, 32) == "plane")) ? ("selected") : (""));
        yield ">Plane</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label\">Agent Type</label>
                    <select class=\"form-select\" name=\"agent_type\">
                        <option value=\"\">All Agents</option>
                        <option value=\"regular\" ";
        // line 39
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "query", [], "any", false, false, false, 39), "get", ["agent_type"], "method", false, false, false, 39) == "regular")) ? ("selected") : (""));
        yield ">Regular</option>
                        <option value=\"premium\" ";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "query", [], "any", false, false, false, 40), "get", ["agent_type"], "method", false, false, false, 40) == "premium")) ? ("selected") : (""));
        yield ">Premium</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label\">Sort By</label>
                    <select class=\"form-select\" name=\"sort\">
                        <option value=\"price_asc\" ";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "query", [], "any", false, false, false, 46), "get", ["sort"], "method", false, false, false, 46) == "price_asc")) ? ("selected") : (""));
        yield ">Price (Low to High)</option>
                        <option value=\"price_desc\" ";
        // line 47
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "query", [], "any", false, false, false, 47), "get", ["sort"], "method", false, false, false, 47) == "price_desc")) ? ("selected") : (""));
        yield ">Price (High to Low)</option>
                        <option value=\"date_asc\" ";
        // line 48
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "query", [], "any", false, false, false, 48), "get", ["sort"], "method", false, false, false, 48) == "date_asc")) ? ("selected") : (""));
        yield ">Date (Oldest First)</option>
                        <option value=\"date_desc\" ";
        // line 49
        yield ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "query", [], "any", false, false, false, 49), "get", ["sort"], "method", false, false, false, 49) == "date_desc") || (null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "query", [], "any", false, false, false, 49), "get", ["sort"], "method", false, false, false, 49)))) ? ("selected") : (""));
        yield ">Date (Newest First)</option>
                    </select>
                </div>
                <div class=\"col-md-1 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                        <i class=\"bx bx-search\"></i> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/reservation/_filters.html.twig";
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
        return array (  148 => 49,  144 => 48,  140 => 47,  136 => 46,  127 => 40,  123 => 39,  113 => 32,  109 => 31,  105 => 30,  97 => 24,  88 => 21,  81 => 20,  77 => 19,  67 => 12,  63 => 11,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card mb-4\">
    <div class=\"card-header\">
        <h5 class=\"mb-0\">Search & Filter Reservations</h5>
    </div>
    <div class=\"card-body\">
        <form method=\"get\" action=\"{{ target_path }}\">
            <div class=\"row g-3\">
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Date Range</label>
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control date-picker\" placeholder=\"From\" name=\"date_from\" value=\"{{ app.request.query.get('date_from') }}\">
                        <input type=\"text\" class=\"form-control date-picker\" placeholder=\"To\" name=\"date_to\" value=\"{{ app.request.query.get('date_to') }}\">
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label\">Destination</label>
                    <select class=\"form-select\" name=\"destination\">
                        <option value=\"\">All Destinations</option>
                        {% for destination in destinations %}
                            <option value=\"{{ destination.iddestination }}\" {{ app.request.query.get('destination') == destination.iddestination ? 'selected' : '' }}>
                                {{ destination.name }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label\">Transport Type</label>
                    <select class=\"form-select\" name=\"transport\">
                        <option value=\"\">All Types</option>
                        <option value=\"bus\" {{ app.request.query.get('transport') == 'bus' ? 'selected' : '' }}>Bus</option>
                        <option value=\"train\" {{ app.request.query.get('transport') == 'train' ? 'selected' : '' }}>Train</option>
                        <option value=\"plane\" {{ app.request.query.get('transport') == 'plane' ? 'selected' : '' }}>Plane</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label\">Agent Type</label>
                    <select class=\"form-select\" name=\"agent_type\">
                        <option value=\"\">All Agents</option>
                        <option value=\"regular\" {{ app.request.query.get('agent_type') == 'regular' ? 'selected' : '' }}>Regular</option>
                        <option value=\"premium\" {{ app.request.query.get('agent_type') == 'premium' ? 'selected' : '' }}>Premium</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label\">Sort By</label>
                    <select class=\"form-select\" name=\"sort\">
                        <option value=\"price_asc\" {{ app.request.query.get('sort') == 'price_asc' ? 'selected' : '' }}>Price (Low to High)</option>
                        <option value=\"price_desc\" {{ app.request.query.get('sort') == 'price_desc' ? 'selected' : '' }}>Price (High to Low)</option>
                        <option value=\"date_asc\" {{ app.request.query.get('sort') == 'date_asc' ? 'selected' : '' }}>Date (Oldest First)</option>
                        <option value=\"date_desc\" {{ app.request.query.get('sort') == 'date_desc' or app.request.query.get('sort') is null ? 'selected' : '' }}>Date (Newest First)</option>
                    </select>
                </div>
                <div class=\"col-md-1 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                        <i class=\"bx bx-search\"></i> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>", "admin/reservation/_filters.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\reservation\\_filters.html.twig");
    }
}
