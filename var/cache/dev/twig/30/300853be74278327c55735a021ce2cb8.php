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

/* event/eventback.html.twig */
class __TwigTemplate_e20e7221810ca5b72701c148071dc910 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'sidebar' => [$this, 'block_sidebar'],
            'navbar' => [$this, 'block_navbar'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/eventback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/eventback.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "event/eventback.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Event Management";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <!-- Header -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h4 class=\"fw-bold py-3 mb-0\">
            <span class=\"text-muted fw-light\">Events /</span> Management
        </h4>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_new");
        yield "\" class=\"btn btn-primary\">
            <i class=\"bx bx-plus me-1\"></i> Add Event
        </a>
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_statistics");
        yield "\" class=\"btn btn-info ms-2\">
            <i class=\"bx bx-chart me-1\"></i> View Statistics
        </a>
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar");
        yield "\" class=\"btn btn-success ms-2\">
            <i class=\"bx bx-calendar me-1\"></i> View Calendar
        </a>
         
            <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_index");
        yield "\" class=\"btn btn-info ms-2\">
                <i class=\"menu-icon tf-icons bx bx-list-ul me-3\"></i>
                <div class=\"fw-medium\" data-i18n=\"View Registrations\">View Registrations</div>
            </a>
        </li>
    </div>

    <!-- Search Section -->
    <div class=\"search-section\">
        <form method=\"get\" action=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_search");
        yield "\">
            <div class=\"filter-grid\">
                <!-- Search Inputs -->
                <div class=\"filter-group\">
                    <input type=\"text\" name=\"title\" placeholder=\"Event title...\" class=\"filter-input\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "query", [], "any", false, false, false, 36), "get", ["title"], "method", false, false, false, 36), "html", null, true);
        yield "\">
                </div>

                <div class=\"filter-group\">
                    <input type=\"text\" name=\"description\" placeholder=\"Description...\" class=\"filter-input\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "query", [], "any", false, false, false, 40), "get", ["description"], "method", false, false, false, 40), "html", null, true);
        yield "\">
                </div>

                <div class=\"filter-group\">
                    <input type=\"number\" name=\"duration\" placeholder=\"Duration (minutes)\" class=\"filter-input\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "query", [], "any", false, false, false, 44), "get", ["duration"], "method", false, false, false, 44), "html", null, true);
        yield "\">
                </div>

                <!-- Dropdowns -->
                <div class=\"filter-group\">
                    <select name=\"type\" class=\"filter-input\">
                        <option value=\"\">Price Range</option>
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([20, 30, 50, 100, 150]);
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 52
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["price"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "query", [], "any", false, false, false, 52), "get", ["type"], "method", false, false, false, 52) == $context["price"])) ? ("selected") : (""));
            yield ">
                                ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["price"], "html", null, true);
            yield " DT
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['price'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                    </select>
                </div>

                <div class=\"filter-group\">
                    <select name=\"state\" class=\"filter-input\">
                        <option value=\"\">All States</option>
                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Ariana", "Béja", "Ben Arous", "Bizerte", "Gabès", "Gafsa", "Jendouba", "Kairouan", "Kasserine", "Kébili", "Kef", "Mahdia", "Manouba", "Medenine", "Monastir", "Nabeul", "Sfax", "Sidi Bouzid", "Siliana", "Sousse", "Tataouine", "Tozeur", "Tunis", "Zaghouan"]);
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 66
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["state"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "query", [], "any", false, false, false, 66), "get", ["status"], "method", false, false, false, 66) == $context["state"])) ? ("selected") : (""));
            yield ">
                                ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["state"], "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['state'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "                    </select>
                </div>

                <!-- Date/Time Inputs -->
                <div class=\"filter-group\">
                    <input type=\"text\" name=\"dateevent\" placeholder=\"YYYY-MM-DD\" class=\"filter-input\" value=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "query", [], "any", false, false, false, 75), "get", ["dateevent"], "method", false, false, false, 75), "html", null, true);
        yield "\">
                </div>

                <div class=\"filter-group\">
                    <input type=\"time\" name=\"startEvent\" class=\"filter-input\" value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "request", [], "any", false, false, false, 79), "query", [], "any", false, false, false, 79), "get", ["startEvent"], "method", false, false, false, 79), "html", null, true);
        yield "\">
                </div>
            </div>

            <!-- Search Button -->
            <button type=\"submit\" class=\"search-button\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                    <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                </svg>
                Search Events
            </button>
        </form>
    </div>

    <!-- Events Table -->
    <div class=\"card\">
        <div class=\"table-responsive text-nowrap\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Duration</th>
                        <th>Price</th>
                        <th>State</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class=\"table-border-bottom-0\">
                    ";
        // line 111
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 111, $this->source); })()))) {
            // line 112
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 112, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 113
                yield "                            <tr>
                                <td>";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 114), "html", null, true);
                yield "</td>
                                <td><strong>";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 115), "html", null, true);
                yield "</strong></td>
                                <td>";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 116), 0, 30), "html", null, true);
                yield "...</td>
                                <td>";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "duration", [], "any", false, false, false, 117), "html", null, true);
                yield " mins</td>
                                <td>
                                    <span class=\"price-badge\">
                                        ";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 120), "html", null, true);
                yield "
                                    </span>
                                </td>
                                <td>
                                    <span class=\"status-badge status-";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 124)), "html", null, true);
                yield "\">
                                        ";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 125), "html", null, true);
                yield "
                                    </span>
                                </td>
                                <td>";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getFormattedDate", [], "method", false, false, false, 128), "html", null, true);
                yield "</td>
                                <td>";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getFormattedTime", [], "method", false, false, false, 129), "html", null, true);
                yield "</td>
                                <td>
                                    <div class=\"d-flex gap-2\">
                                        <a href=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-info btn-sm\"
                                           title=\"View\">
                                            <i class=\"bx bx-show-alt\"></i>
                                        </a>
                                        
                                        <a href=\"";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 138)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-primary btn-sm\"
                                           title=\"Edit\">
                                            <i class=\"bx bx-edit-alt\"></i>
                                        </a>
                                        
                                        <a href=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_new", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-success btn-sm\"
                                           title=\"Register\">
                                            <i class=\"bx bx-user-plus\"></i>
                                        </a>
                                        
                                        <form method=\"post\" 
                                              action=\"";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 151)]), "html", null, true);
                yield "\" 
                                              style=\"display: inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 153))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" 
                                                    class=\"btn btn-danger btn-sm\" 
                                                    title=\"Delete\"
                                                    onclick=\"return confirm('Are you sure you want to delete this event?');\">
                                                <i class=\"bx bx-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "                    ";
        } else {
            // line 166
            yield "                        <tr>
                            <td colspan=\"9\" class=\"text-center\">
                                <div class=\"no-events-message\">
                                    No events found. Create your first event!
                                </div>
                            </td>
                        </tr>
                    ";
        }
        // line 174
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

    // line 181
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 182
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .search-section {
        background: #fff;
        border-radius: 0.75rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        padding: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .filter-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 1.5rem;
    }
    
    .filter-input {
        width: 100%;
        padding: 0.675rem 1rem;
        border: 1px solid #ddd;
        border-radius: 0.5rem;
        font-size: 0.9rem;
        background-color: #f8f9fa;
        transition: all 0.3s ease;
    }
    
    .filter-input:focus {
        outline: none;
        border-color: #696cff;
        background-color: #fff;
        box-shadow: 0 0 0 2px rgba(105, 108, 255, 0.2);
    }
    
    .search-button {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 1.5rem;
        background-color: #696cff;
        color: white;
        border: none;
        border-radius: 0.5rem;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .search-button:hover {
        background-color: #5b5dff;
        transform: translateY(-1px);
        box-shadow: 0 2px 6px rgba(105, 108, 255, 0.25);
    }
    
    .price-badge {
        background-color: #e3e2ff;
        color: #696cff;
        padding: 0.35rem 0.65rem;
        border-radius: 0.375rem;
        font-size: 0.85rem;
    }
    
    .status-badge {
        padding: 0.35rem 0.65rem;
        border-radius: 0.375rem;
        font-size: 0.85rem;
    }
    
    .status-active {
        background-color: #d1fae5;
        color: #065f46;
    }
    
    .no-events-message {
        background-color: #fffbeb;
        color: #92400e;
        padding: 1rem;
        border-radius: 0.5rem;
    }
    
    /* Button styles */
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        border-radius: 0.25rem;
    }

    .gap-2 {
        gap: 0.5rem !important;
    }

    .btn i {
        font-size: 1.1rem;
    }

    .btn-info {
        background-color: #0dcaf0;
        border-color: #0dcaf0;
        color: white;
    }

    .btn-info:hover {
        background-color: #31d2f2;
        border-color: #31d2f2;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
    }

    .btn-danger:hover {
        background-color: #bb2d3b;
        border-color: #bb2d3b;
    }

    .btn-success {
        background-color: #198754;
        border-color: #198754;
        color: white;
    }

    .btn-success:hover {
        background-color: #157347;
        border-color: #157347;
    }

    .btn-primary {
        background-color: #0d6efd;
        border-color: #0d6efd;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
        border-color: #0b5ed7;
    }
    
    @media (max-width: 768px) {
        .filter-grid {
            grid-template-columns: 1fr;
        }
        
        .search-button {
            width: 100%;
            justify-content: center;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 334
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 335
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle delete confirmations - as a backup to the onclick attribute
    document.querySelectorAll('form[action*=\"delete\"]').forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!confirm('Are you sure you want to delete this event?')) {
                e.preventDefault();
                return false;
            }
        });
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 351
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 352
        yield "    <div class=\"app-brand demo\">
        <a href=\"";
        // line 353
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <i class=\"bx bx-car fs-3 text-primary\"></i>
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Movable Admin</span>
        </a>

        <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
            <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <!-- Dashboard -->
        <li class=\"menu-item ";
        // line 369
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 369, $this->source); })()), "request", [], "any", false, false, false, 369), "get", ["_route"], "method", false, false, false, 369) == "app_dashboard")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 370
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"";
        // line 377
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"menu-link front-website-link\">
                <i class=\"menu-icon tf-icons bx bx-world\"></i>
                <div>Visit Website</div>
            </a>
        </li>
        
        <li class=\"menu-item ";
        // line 383
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 383, $this->source); })()), "request", [], "any", false, false, false, 383), "get", ["_route"], "method", false, false, false, 383) == "app_admin_users")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 384
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user-circle\"></i>
                <div>Users</div>
            </a>
        </li>

        <!-- Claims Management -->
        <li class=\"menu-item ";
        // line 391
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "request", [], "any", false, false, false, 391), "get", ["_route"], "method", false, false, false, 391) == "app_reclamation_dashboard")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 392
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_dashboard");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-message-square-detail\"></i>
                <div>Claims</div>
            </a>
        </li>

        <!-- Banned Users -->
        <li class=\"menu-item ";
        // line 399
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 399, $this->source); })()), "request", [], "any", false, false, false, 399), "get", ["_route"], "method", false, false, false, 399) == "app_admin_banned_users")) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 400
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_banned_users");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-block\"></i>
                <div>Banned Users</div>
            </a>
        </li>

        <!-- Events Management -->
        <li class=\"menu-item ";
        // line 407
        yield (((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 407, $this->source); })()), "request", [], "any", false, false, false, 407), "get", ["_route"], "method", false, false, false, 407)) && is_string($__internal_compile_1 = "app_event") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 408
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar\"></i>
                <div>Events</div>
            </a>
        </li>
         

        <!-- Reservation Management -->
        <li class=\"menu-item ";
        // line 416
        yield (((is_string($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 416, $this->source); })()), "request", [], "any", false, false, false, 416), "get", ["route"], "method", false, false, false, 416)) && is_string($__internal_compile_3 = "admin_waitlist") && str_starts_with($__internal_compile_2, $__internal_compile_3))) ? ("active") : (""));
        yield "\">
            <a href=\"";
        // line 417
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar-check\"></i>
                <div>Reservations</div>
            </a>
        </li>

        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">System</span>
        </li>
    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 429
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 430
        yield "    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <div class=\"navbar-nav align-items-center\">
            <div class=\"nav-item d-flex align-items-center\">
                <i class=\"bx bx-search fs-4 lh-0\"></i>
                <input type=\"text\" class=\"form-control border-0 shadow-none ps-1\" placeholder=\"Search...\" aria-label=\"Search...\">
            </div>
        </div>

        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- Admin User Dropdown -->
            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                        <span class=\"avatar-initial rounded-circle bg-primary\">
                            ";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 444, $this->source); })()), "user", [], "any", false, false, false, 444), "firstName", [], "any", false, false, false, 444)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 444, $this->source); })()), "user", [], "any", false, false, false, 444), "lastName", [], "any", false, false, false, 444)), "html", null, true);
        yield "
                        </span>
                    </div>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"#\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0 me-3\">
                                    <div class=\"avatar avatar-online\">
                                        <span class=\"avatar-initial rounded-circle bg-primary\">
                                            ";
        // line 455
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 455, $this->source); })()), "user", [], "any", false, false, false, 455), "firstName", [], "any", false, false, false, 455)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 455, $this->source); })()), "user", [], "any", false, false, false, 455), "lastName", [], "any", false, false, false, 455)), "html", null, true);
        yield "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <span class=\"fw-semibold d-block\">";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 460, $this->source); })()), "user", [], "any", false, false, false, 460), "fullName", [], "any", false, false, false, 460), "html", null, true);
        yield "</span>
                                    <small class=\"text-muted\">Administrator</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 470
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        yield "\">
                            <i class=\"bx bx-user me-2\"></i>
                            <span class=\"align-middle\">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 476
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_settings");
        yield "\">
                            <i class=\"bx bx-cog me-2\"></i>
                            <span class=\"align-middle\">Settings</span>
                        </a>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 485
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                            <i class=\"bx bx-power-off me-2\"></i>
                            <span class=\"align-middle\">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <!-- Visible Logout Button -->
            <li class=\"nav-item ms-3\">
                <a href=\"";
        // line 495
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-danger d-flex align-items-center\">
                    <i class=\"bx bx-power-off me-2\"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 504
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 505
        yield "    <div class=\"container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3\">
        <div>
            <a href=\"https://movable.com\" target=\"_blank\" class=\"footer-text fw-bolder\">Movable</a> ©
            ";
        // line 508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "
        </div>
        <div>
            <a href=\"";
        // line 511
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"footer-link me-4\">Front-Office</a>
            <a href=\"javascript:void(0)\" class=\"footer-link me-4\">Help</a>
            <a href=\"javascript:void(0)\" class=\"footer-link me-4\">Contact</a>
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
        return "event/eventback.html.twig";
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
        return array (  905 => 511,  899 => 508,  894 => 505,  881 => 504,  862 => 495,  849 => 485,  837 => 476,  828 => 470,  815 => 460,  806 => 455,  791 => 444,  775 => 430,  762 => 429,  740 => 417,  736 => 416,  725 => 408,  721 => 407,  711 => 400,  707 => 399,  697 => 392,  693 => 391,  683 => 384,  679 => 383,  670 => 377,  660 => 370,  656 => 369,  637 => 353,  634 => 352,  621 => 351,  595 => 335,  582 => 334,  420 => 182,  407 => 181,  391 => 174,  381 => 166,  378 => 165,  360 => 153,  355 => 151,  345 => 144,  336 => 138,  327 => 132,  321 => 129,  317 => 128,  311 => 125,  307 => 124,  300 => 120,  294 => 117,  290 => 116,  286 => 115,  282 => 114,  279 => 113,  274 => 112,  272 => 111,  237 => 79,  230 => 75,  223 => 70,  214 => 67,  207 => 66,  203 => 62,  195 => 56,  186 => 53,  179 => 52,  175 => 51,  165 => 44,  158 => 40,  151 => 36,  144 => 32,  132 => 23,  125 => 19,  119 => 16,  113 => 13,  105 => 7,  92 => 6,  69 => 4,  46 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/event/eventback.html.twig #}
{% extends 'base1.html.twig' %}

{% block title %}Event Management{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <!-- Header -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h4 class=\"fw-bold py-3 mb-0\">
            <span class=\"text-muted fw-light\">Events /</span> Management
        </h4>
        <a href=\"{{ path('app_eventback_new') }}\" class=\"btn btn-primary\">
            <i class=\"bx bx-plus me-1\"></i> Add Event
        </a>
        <a href=\"{{ path('app_eventback_statistics') }}\" class=\"btn btn-info ms-2\">
            <i class=\"bx bx-chart me-1\"></i> View Statistics
        </a>
        <a href=\"{{ path('calendar') }}\" class=\"btn btn-success ms-2\">
            <i class=\"bx bx-calendar me-1\"></i> View Calendar
        </a>
         
            <a href=\"{{ path('app_eventback_registration_index') }}\" class=\"btn btn-info ms-2\">
                <i class=\"menu-icon tf-icons bx bx-list-ul me-3\"></i>
                <div class=\"fw-medium\" data-i18n=\"View Registrations\">View Registrations</div>
            </a>
        </li>
    </div>

    <!-- Search Section -->
    <div class=\"search-section\">
        <form method=\"get\" action=\"{{ path('app_eventback_search') }}\">
            <div class=\"filter-grid\">
                <!-- Search Inputs -->
                <div class=\"filter-group\">
                    <input type=\"text\" name=\"title\" placeholder=\"Event title...\" class=\"filter-input\" value=\"{{ app.request.query.get('title') }}\">
                </div>

                <div class=\"filter-group\">
                    <input type=\"text\" name=\"description\" placeholder=\"Description...\" class=\"filter-input\" value=\"{{ app.request.query.get('description') }}\">
                </div>

                <div class=\"filter-group\">
                    <input type=\"number\" name=\"duration\" placeholder=\"Duration (minutes)\" class=\"filter-input\" value=\"{{ app.request.query.get('duration') }}\">
                </div>

                <!-- Dropdowns -->
                <div class=\"filter-group\">
                    <select name=\"type\" class=\"filter-input\">
                        <option value=\"\">Price Range</option>
                        {% for price in [20, 30, 50, 100, 150] %}
                            <option value=\"{{ price }}\" {{ app.request.query.get('type') == price ? 'selected' }}>
                                {{ price }} DT
                            </option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"filter-group\">
                    <select name=\"state\" class=\"filter-input\">
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

                <!-- Date/Time Inputs -->
                <div class=\"filter-group\">
                    <input type=\"text\" name=\"dateevent\" placeholder=\"YYYY-MM-DD\" class=\"filter-input\" value=\"{{ app.request.query.get('dateevent') }}\">
                </div>

                <div class=\"filter-group\">
                    <input type=\"time\" name=\"startEvent\" class=\"filter-input\" value=\"{{ app.request.query.get('startEvent') }}\">
                </div>
            </div>

            <!-- Search Button -->
            <button type=\"submit\" class=\"search-button\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                    <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0\"/>
                </svg>
                Search Events
            </button>
        </form>
    </div>

    <!-- Events Table -->
    <div class=\"card\">
        <div class=\"table-responsive text-nowrap\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Duration</th>
                        <th>Price</th>
                        <th>State</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class=\"table-border-bottom-0\">
                    {% if events is not empty %}
                        {% for event in events %}
                            <tr>
                                <td>{{ event.id }}</td>
                                <td><strong>{{ event.title }}</strong></td>
                                <td>{{ event.description|slice(0, 30) }}...</td>
                                <td>{{ event.duration }} mins</td>
                                <td>
                                    <span class=\"price-badge\">
                                        {{ event.type }}
                                    </span>
                                </td>
                                <td>
                                    <span class=\"status-badge status-{{ event.status|lower }}\">
                                        {{ event.status }}
                                    </span>
                                </td>
                                <td>{{ event.getFormattedDate() }}</td>
                                <td>{{ event.getFormattedTime() }}</td>
                                <td>
                                    <div class=\"d-flex gap-2\">
                                        <a href=\"{{ path('app_eventback_show', {'id': event.id}) }}\" 
                                           class=\"btn btn-info btn-sm\"
                                           title=\"View\">
                                            <i class=\"bx bx-show-alt\"></i>
                                        </a>
                                        
                                        <a href=\"{{ path('app_eventback_edit', {'id': event.id}) }}\" 
                                           class=\"btn btn-primary btn-sm\"
                                           title=\"Edit\">
                                            <i class=\"bx bx-edit-alt\"></i>
                                        </a>
                                        
                                        <a href=\"{{ path('app_eventback_registration_new', {'eventId': event.id}) }}\" 
                                           class=\"btn btn-success btn-sm\"
                                           title=\"Register\">
                                            <i class=\"bx bx-user-plus\"></i>
                                        </a>
                                        
                                        <form method=\"post\" 
                                              action=\"{{ path('app_eventback_delete', {'id': event.id}) }}\" 
                                              style=\"display: inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\">
                                            <button type=\"submit\" 
                                                    class=\"btn btn-danger btn-sm\" 
                                                    title=\"Delete\"
                                                    onclick=\"return confirm('Are you sure you want to delete this event?');\">
                                                <i class=\"bx bx-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    {% else %}
                        <tr>
                            <td colspan=\"9\" class=\"text-center\">
                                <div class=\"no-events-message\">
                                    No events found. Create your first event!
                                </div>
                            </td>
                        </tr>
                    {% endif %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .search-section {
        background: #fff;
        border-radius: 0.75rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        padding: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .filter-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 1.5rem;
    }
    
    .filter-input {
        width: 100%;
        padding: 0.675rem 1rem;
        border: 1px solid #ddd;
        border-radius: 0.5rem;
        font-size: 0.9rem;
        background-color: #f8f9fa;
        transition: all 0.3s ease;
    }
    
    .filter-input:focus {
        outline: none;
        border-color: #696cff;
        background-color: #fff;
        box-shadow: 0 0 0 2px rgba(105, 108, 255, 0.2);
    }
    
    .search-button {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 1.5rem;
        background-color: #696cff;
        color: white;
        border: none;
        border-radius: 0.5rem;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .search-button:hover {
        background-color: #5b5dff;
        transform: translateY(-1px);
        box-shadow: 0 2px 6px rgba(105, 108, 255, 0.25);
    }
    
    .price-badge {
        background-color: #e3e2ff;
        color: #696cff;
        padding: 0.35rem 0.65rem;
        border-radius: 0.375rem;
        font-size: 0.85rem;
    }
    
    .status-badge {
        padding: 0.35rem 0.65rem;
        border-radius: 0.375rem;
        font-size: 0.85rem;
    }
    
    .status-active {
        background-color: #d1fae5;
        color: #065f46;
    }
    
    .no-events-message {
        background-color: #fffbeb;
        color: #92400e;
        padding: 1rem;
        border-radius: 0.5rem;
    }
    
    /* Button styles */
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        border-radius: 0.25rem;
    }

    .gap-2 {
        gap: 0.5rem !important;
    }

    .btn i {
        font-size: 1.1rem;
    }

    .btn-info {
        background-color: #0dcaf0;
        border-color: #0dcaf0;
        color: white;
    }

    .btn-info:hover {
        background-color: #31d2f2;
        border-color: #31d2f2;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
    }

    .btn-danger:hover {
        background-color: #bb2d3b;
        border-color: #bb2d3b;
    }

    .btn-success {
        background-color: #198754;
        border-color: #198754;
        color: white;
    }

    .btn-success:hover {
        background-color: #157347;
        border-color: #157347;
    }

    .btn-primary {
        background-color: #0d6efd;
        border-color: #0d6efd;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
        border-color: #0b5ed7;
    }
    
    @media (max-width: 768px) {
        .filter-grid {
            grid-template-columns: 1fr;
        }
        
        .search-button {
            width: 100%;
            justify-content: center;
        }
    }
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle delete confirmations - as a backup to the onclick attribute
    document.querySelectorAll('form[action*=\"delete\"]').forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!confirm('Are you sure you want to delete this event?')) {
                e.preventDefault();
                return false;
            }
        });
    });
});
</script>
{% endblock %}

{% block sidebar %}
    <div class=\"app-brand demo\">
        <a href=\"{{ path('app_dashboard') }}\" class=\"app-brand-link\">
            <span class=\"app-brand-logo demo\">
                <i class=\"bx bx-car fs-3 text-primary\"></i>
            </span>
            <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Movable Admin</span>
        </a>

        <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
            <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <!-- Dashboard -->
        <li class=\"menu-item {{ app.request.get('_route') == 'app_dashboard' ? 'active' : '' }}\">
            <a href=\"{{ path('app_dashboard') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <li class=\"menu-item\">
            <a href=\"{{ path('app_front_home') }}\" class=\"menu-link front-website-link\">
                <i class=\"menu-icon tf-icons bx bx-world\"></i>
                <div>Visit Website</div>
            </a>
        </li>
        
        <li class=\"menu-item {{ app.request.get('_route') == 'app_admin_users' ? 'active' : '' }}\">
            <a href=\"{{ path('app_admin_users') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-user-circle\"></i>
                <div>Users</div>
            </a>
        </li>

        <!-- Claims Management -->
        <li class=\"menu-item {{ app.request.get('_route') == 'app_reclamation_dashboard' ? 'active' : '' }}\">
            <a href=\"{{ path('app_reclamation_dashboard') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-message-square-detail\"></i>
                <div>Claims</div>
            </a>
        </li>

        <!-- Banned Users -->
        <li class=\"menu-item {{ app.request.get('_route') == 'app_admin_banned_users' ? 'active' : '' }}\">
            <a href=\"{{ path('app_admin_banned_users') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-block\"></i>
                <div>Banned Users</div>
            </a>
        </li>

        <!-- Events Management -->
        <li class=\"menu-item {{ app.request.get('_route') starts with 'app_event' ? 'active' : '' }}\">
            <a href=\"{{ path('app_eventback_index') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar\"></i>
                <div>Events</div>
            </a>
        </li>
         

        <!-- Reservation Management -->
        <li class=\"menu-item {{ app.request.get('route') starts with 'admin_waitlist' ? 'active' : '' }}\">
            <a href=\"{{ path('admin_waitlist_index') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar-check\"></i>
                <div>Reservations</div>
            </a>
        </li>

        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\">System</span>
        </li>
    </ul>
{% endblock %}

{% block navbar %}
    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <div class=\"navbar-nav align-items-center\">
            <div class=\"nav-item d-flex align-items-center\">
                <i class=\"bx bx-search fs-4 lh-0\"></i>
                <input type=\"text\" class=\"form-control border-0 shadow-none ps-1\" placeholder=\"Search...\" aria-label=\"Search...\">
            </div>
        </div>

        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
            <!-- Admin User Dropdown -->
            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                    <div class=\"avatar avatar-online\">
                        <span class=\"avatar-initial rounded-circle bg-primary\">
                            {{ app.user.firstName|first }}{{ app.user.lastName|first }}
                        </span>
                    </div>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"#\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0 me-3\">
                                    <div class=\"avatar avatar-online\">
                                        <span class=\"avatar-initial rounded-circle bg-primary\">
                                            {{ app.user.firstName|first }}{{ app.user.lastName|first }}
                                        </span>
                                    </div>
                                </div>
                                <div class=\"flex-grow-1\">
                                    <span class=\"fw-semibold d-block\">{{ app.user.fullName }}</span>
                                    <small class=\"text-muted\">Administrator</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_user_profile') }}\">
                            <i class=\"bx bx-user me-2\"></i>
                            <span class=\"align-middle\">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_user_settings') }}\">
                            <i class=\"bx bx-cog me-2\"></i>
                            <span class=\"align-middle\">Settings</span>
                        </a>
                    </li>
                    <li>
                        <div class=\"dropdown-divider\"></div>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                            <i class=\"bx bx-power-off me-2\"></i>
                            <span class=\"align-middle\">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <!-- Visible Logout Button -->
            <li class=\"nav-item ms-3\">
                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger d-flex align-items-center\">
                    <i class=\"bx bx-power-off me-2\"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
{% endblock %}

{% block footer %}
    <div class=\"container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3\">
        <div>
            <a href=\"https://movable.com\" target=\"_blank\" class=\"footer-text fw-bolder\">Movable</a> ©
            {{ \"now\"|date(\"Y\") }}
        </div>
        <div>
            <a href=\"{{ path('app_front_home') }}\" class=\"footer-link me-4\">Front-Office</a>
            <a href=\"javascript:void(0)\" class=\"footer-link me-4\">Help</a>
            <a href=\"javascript:void(0)\" class=\"footer-link me-4\">Contact</a>
        </div>
    </div>
{% endblock %}", "event/eventback.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event\\eventback.html.twig");
    }
}
