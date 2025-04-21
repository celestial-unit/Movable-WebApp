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

/* event_registration/new1.html.twig */
class __TwigTemplate_fed6f03adf4a0920119cafb737963f3e extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'navbar' => [$this, 'block_navbar'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/new1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/new1.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "event_registration/new1.html.twig", 1);
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

        yield "New Event Registration";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <!-- Sidebar Content -->
    <div class=\"menu-inner-shadow\"></div>
    <ul class=\"menu-inner py-1\">
        <li class=\"menu-item active\">
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar-event\"></i>
                <div data-i18n=\"Events\">Events</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_new");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-plus-circle\"></i>
                <div data-i18n=\"Create Event\">Create Event</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-list-ul\"></i>
                <div data-i18n=\"View Registrations\">View Registrations</div>
            </a>
        </li>
    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
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

        // line 31
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css/pages/form-validation.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
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

        // line 36
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            <!-- Header Section -->
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h4 class=\"fw-bold mb-0\">
                    <span class=\"text-muted fw-light\">Registrations /</span> New Registration
                </h4>
                <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_index");
        yield "\" class=\"btn btn-label-secondary\">
                    <i class=\"bx bx-chevron-left scaleX-n1-rtl me-2\"></i>
                    Back to List
                </a>
            </div>

            <!-- Event Info Card -->
            <div class=\"card mb-4\">
                <div class=\"card-header bg-info text-white\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"bx bx-calendar-event me-2\"></i>
                        Event Details
                    </h5>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row mb-0\">
                        <dt class=\"col-sm-3\">Event Title:</dt>
                        <dd class=\"col-sm-9\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 61, $this->source); })()), "title", [], "any", false, false, false, 61), "html", null, true);
        yield "</dd>
                        
                        <dt class=\"col-sm-3\">Event Date:</dt>
                        <dd class=\"col-sm-9\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 64, $this->source); })()), "getFormattedDate", [], "method", false, false, false, 64), "html", null, true);
        yield "</dd>
                        
                        <dt class=\"col-sm-3\">Event Type:</dt>
                        <dd class=\"col-sm-9 \">
                            <span class=\"badge bg-label-primary\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 68, $this->source); })()), "type", [], "any", false, false, false, 68), "html", null, true);
        yield "</span>
                        </dd>
                    </dl>
                </div>
            </div>

            <!-- Registration Form Card -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"card-title mb-0\">Registration Information</h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
                        
                        <!-- Registration Date -->
                        <div class=\"mb-4\">
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "registration_date", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "form-label"]]);
        // line 86
        yield "
                            <div class=\"input-group\">
                                <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "registration_date", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control flatpickr-date", "placeholder" => "Select registration date"]]);
        // line 94
        yield "
                            </div>
                            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "registration_date", [], "any", false, false, false, 96), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        // line 98
        yield "
                        </div>
                        
                        <!-- Status Field -->
                        <div class=\"mb-4\">
                            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "status", [], "any", false, false, false, 103), 'label', ["label_attr" => ["class" => "form-label"]]);
        // line 105
        yield "
                            <div class=\"input-group\">
                                <span class=\"input-group-text\"><i class=\"bx bx-check-circle\"></i></span>
                                ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "status", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 112
        yield "
                            </div>
                            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "status", [], "any", false, false, false, 114), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        // line 116
        yield "
                        </div>
                        
                        ";
        // line 119
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", true, true, false, 119)) {
            // line 120
            yield "                        <!-- User Field (Admin only) -->
                        <div class=\"mb-4\">
                            ";
            // line 122
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), 'label', ["label_attr" => ["class" => "form-label"]]);
            // line 124
            yield "
                            <div class=\"input-group\">
                                <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                ";
            // line 127
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-select"]]);
            // line 131
            yield "
                            </div>
                            ";
            // line 133
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
            // line 135
            yield "
                            <small class=\"form-text text-muted\">Select a user or leave empty for manual registration</small>
                        </div>
                        ";
        }
        // line 139
        yield "
                        <!-- Form Actions -->
                        <!-- Form Actions -->
                        <div class=\"d-flex justify-content-between align-items-center mt-5\">
                            <button type=\"reset\" class=\"btn btn-label-secondary\">
                                <i class=\"bx bx-reset me-2\"></i>
                                Reset
                            </button>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bx bx-save me-2\"></i>
                                ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 149, $this->source); })()), "Create Registration")) : ("Create Registration")), "html", null, true);
        yield "
                            </button>
                        </div>

                    ";
        // line 153
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 160
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

        // line 161
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Removed flatpickr initialization as registration_date is now read-only -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 165
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

        // line 166
        yield "    ";
        yield from $this->yieldParentBlock("navbar", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 169
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

        // line 170
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
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
        return "event_registration/new1.html.twig";
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
        return array (  430 => 170,  417 => 169,  403 => 166,  390 => 165,  375 => 161,  362 => 160,  344 => 153,  337 => 149,  325 => 139,  319 => 135,  317 => 133,  313 => 131,  311 => 127,  306 => 124,  304 => 122,  300 => 120,  298 => 119,  293 => 116,  291 => 114,  287 => 112,  285 => 108,  280 => 105,  278 => 103,  271 => 98,  269 => 96,  265 => 94,  263 => 89,  258 => 86,  256 => 84,  249 => 80,  234 => 68,  227 => 64,  221 => 61,  201 => 44,  191 => 36,  178 => 35,  165 => 32,  160 => 31,  147 => 30,  129 => 22,  120 => 16,  111 => 10,  105 => 6,  92 => 5,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}New Event Registration{% endblock %}

{% block sidebar %}
    <!-- Sidebar Content -->
    <div class=\"menu-inner-shadow\"></div>
    <ul class=\"menu-inner py-1\">
        <li class=\"menu-item active\">
            <a href=\"{{ path('app_eventback_index') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar-event\"></i>
                <div data-i18n=\"Events\">Events</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"{{ path('app_eventback_new') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-plus-circle\"></i>
                <div data-i18n=\"Create Event\">Create Event</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"{{ path('app_eventback_registration_index') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-list-ul\"></i>
                <div data-i18n=\"View Registrations\">View Registrations</div>
            </a>
        </li>
    </ul>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/css/pages/form-validation.css') }}\">
{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            <!-- Header Section -->
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h4 class=\"fw-bold mb-0\">
                    <span class=\"text-muted fw-light\">Registrations /</span> New Registration
                </h4>
                <a href=\"{{ path('app_eventback_registration_index') }}\" class=\"btn btn-label-secondary\">
                    <i class=\"bx bx-chevron-left scaleX-n1-rtl me-2\"></i>
                    Back to List
                </a>
            </div>

            <!-- Event Info Card -->
            <div class=\"card mb-4\">
                <div class=\"card-header bg-info text-white\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"bx bx-calendar-event me-2\"></i>
                        Event Details
                    </h5>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row mb-0\">
                        <dt class=\"col-sm-3\">Event Title:</dt>
                        <dd class=\"col-sm-9\">{{ event.title }}</dd>
                        
                        <dt class=\"col-sm-3\">Event Date:</dt>
                        <dd class=\"col-sm-9\">{{ event.getFormattedDate() }}</dd>
                        
                        <dt class=\"col-sm-3\">Event Type:</dt>
                        <dd class=\"col-sm-9 \">
                            <span class=\"badge bg-label-primary\">{{ event.type }}</span>
                        </dd>
                    </dl>
                </div>
            </div>

            <!-- Registration Form Card -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"card-title mb-0\">Registration Information</h5>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
                        
                        <!-- Registration Date -->
                        <div class=\"mb-4\">
                            {{ form_label(form.registration_date, null, {
                                'label_attr': {'class': 'form-label'}
                            }) }}
                            <div class=\"input-group\">
                                <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                {{ form_widget(form.registration_date, {
                                    'attr': {
                                        'class': 'form-control flatpickr-date',
                                        'placeholder': 'Select registration date'
                                    }
                                }) }}
                            </div>
                            {{ form_errors(form.registration_date, {
                                'attr': {'class': 'invalid-feedback'}
                            }) }}
                        </div>
                        
                        <!-- Status Field -->
                        <div class=\"mb-4\">
                            {{ form_label(form.status, null, {
                                'label_attr': {'class': 'form-label'}
                            }) }}
                            <div class=\"input-group\">
                                <span class=\"input-group-text\"><i class=\"bx bx-check-circle\"></i></span>
                                {{ form_widget(form.status, {
                                    'attr': {
                                        'class': 'form-select'
                                    }
                                }) }}
                            </div>
                            {{ form_errors(form.status, {
                                'attr': {'class': 'invalid-feedback'}
                            }) }}
                        </div>
                        
                        {% if form.user is defined %}
                        <!-- User Field (Admin only) -->
                        <div class=\"mb-4\">
                            {{ form_label(form.user, null, {
                                'label_attr': {'class': 'form-label'}
                            }) }}
                            <div class=\"input-group\">
                                <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                {{ form_widget(form.user, {
                                    'attr': {
                                        'class': 'form-select'
                                    }
                                }) }}
                            </div>
                            {{ form_errors(form.user, {
                                'attr': {'class': 'invalid-feedback'}
                            }) }}
                            <small class=\"form-text text-muted\">Select a user or leave empty for manual registration</small>
                        </div>
                        {% endif %}

                        <!-- Form Actions -->
                        <!-- Form Actions -->
                        <div class=\"d-flex justify-content-between align-items-center mt-5\">
                            <button type=\"reset\" class=\"btn btn-label-secondary\">
                                <i class=\"bx bx-reset me-2\"></i>
                                Reset
                            </button>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bx bx-save me-2\"></i>
                                {{ button_label|default('Create Registration') }}
                            </button>
                        </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <!-- Removed flatpickr initialization as registration_date is now read-only -->
{% endblock %}

{% block navbar %}
    {{ parent() }}
{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}
", "event_registration/new1.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event_registration\\new1.html.twig");
    }
}
