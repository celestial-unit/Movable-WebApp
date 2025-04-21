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

/* event_registration/edit1.html.twig */
class __TwigTemplate_9581d91c7525d9cb4ff7d3e39858cff8 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/edit1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/edit1.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "event_registration/edit1.html.twig", 1);
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

        yield "Edit Event Registration";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        :root {
            --primary-hover: #5b5dcc;
            --danger-color: #ff3e1d;
            --success-color: #71dd37;
            --transition-timing: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Enhanced Sidebar */
        .menu-inner {
            padding: 1.5rem 0;
        }

        .menu-link {
            transition: all var(--transition-timing);
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            margin: 0.25rem 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .menu-link:hover {
            background: rgba(105, 108, 255, 0.1);
            transform: translateX(5px);
        }

        .menu-item.active .menu-link {
            background: rgba(105, 108, 255, 0.1);
            position: relative;
        }

        .menu-item.active .menu-link::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--primary-color);
            border-radius: 2px 0 0 2px;
        }

        /* Main Content Styling */
        .edit-container {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1.5rem rgba(161, 172, 184, 0.15);
            padding: 2.5rem;
            margin: 2rem 0;
        }

        .edit-header {
            padding-bottom: 2rem;
            margin-bottom: 2.5rem;
            border-bottom: 1px solid #eceef1;
        }

        .edit-header h4 {
            font-weight: 600;
            color: #2f3651;
            margin-bottom: 0.5rem;
        }

        .form-section {
            margin-bottom: 3rem;
        }

        /* Enhanced Form Controls */
        .form-label {
            font-weight: 500;
            color: #5d596c;
            margin-bottom: 0.75rem;
        }

        .form-control {
            border-radius: 0.75rem;
            padding: 0.875rem 1.25rem;
            transition: all var(--transition-timing);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(105, 108, 255, 0.2);
        }

        .form-control.is-invalid {
            border-color: var(--danger-color);
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23ff3e1d'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ff3e1d' stroke='none'/%3e%3c/svg%3e\");
        }

        .invalid-feedback {
            font-size: 0.875em;
            margin-top: 0.5rem;
            padding-left: 0.25rem;
        }

        /* Error Display */
        .form-error {
            background: rgba(255, 62, 29, 0.08);
            border-left: 4px solid var(--danger-color);
            border-radius: 0.5rem;
            padding: 1.25rem;
            margin: 2rem 0;
        }

        /* Button Styling */
        .btn-update {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-hover) 100%);
            color: #fff;
            padding: 0.875rem 2rem;
            border-radius: 0.75rem;
            border: none;
            transition: all var(--transition-timing);
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
        }

        .btn-update:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(105, 108, 255, 0.25);
        }

        /* Delete Section */
        .delete-section {
            border-top: 1px solid rgba(255, 62, 29, 0.15);
            padding-top: 2.5rem;
            margin-top: 3rem;
        }

        .delete-section h6 {
            color: var(--danger-color);
            font-weight: 600;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        /* Back Link */
        .back-link {
            color: #6f6b7d;
            transition: all var(--transition-timing);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
        }

        .back-link:hover {
            color: var(--primary-color);
            background: rgba(105, 108, 255, 0.05);
            text-decoration: none;
        }

        /* Datepicker Customization */
        .flatpickr-input {
            background: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%235d596c' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-calendar'%3E%3Crect x='3' y='4' width='18' height='18' rx='2' ry='2'%3E%3C/rect%3E%3Cline x1='16' y1='2' x2='16' y2='6'%3E%3C/line%3E%3Cline x1='8' y1='2' x2='8' y2='6'%3E%3C/line%3E%3Cline x1='3' y1='10' x2='21' y2='10'%3E%3C/line%3E%3C/svg%3E\") 
                no-repeat right 1rem center/20px;
        }

        @media (max-width: 768px) {
            .edit-container {
                padding: 1.5rem;
                margin: 1rem 0;
            }
            
            .edit-header {
                padding-bottom: 1.5rem;
                margin-bottom: 1.5rem;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 185
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

        // line 186
        yield "    <!-- Enhanced Sidebar Content -->
    <div class=\"menu-inner-shadow\"></div>
    <ul class=\"menu-inner py-1\">
        <li class=\"menu-item active\">
            <a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_index");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-calendar-event\"></i>
                <div data-i18n=\"Events\">Events</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_new");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons bx bx-plus-circle\"></i>
                <div data-i18n=\"Create Event\">Create Event</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 202
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

    // line 210
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

        // line 211
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"edit-container\">
        <!-- Header Section -->
        <div class=\"edit-header\">
            <h4>Edit Event Registration</h4>
            <p class=\"text-muted mb-0\">Update registration details below</p>
        </div>

        <!-- Main Form Section -->
        <div class=\"form-section\">
            ";
        // line 221
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        // line 226
        yield "

            ";
        // line 228
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), 'errors')) {
            // line 229
            yield "                <div class=\"form-error\">
                    <i class=\"bx bx-error-circle text-danger me-2\"></i>
                    <div class=\"text-danger\">
                        <strong>Validation Errors:</strong>
                        ";
            // line 233
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), 'errors');
            yield "
                    </div>
                </div>
            ";
        }
        // line 237
        yield "
            <!-- Registration Date Field -->
            <div class=\"mb-4\">
                ";
        // line 240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "registration_date", [], "any", false, false, false, 240), 'label', ["label_attr" => ["class" => "form-label"]]);
        // line 242
        yield "
                <div class=\"input-group\">
                    ";
        // line 244
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "registration_date", [], "any", false, false, false, 244), 'widget', ["attr" => ["class" => ("form-control flatpickr-input " . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 246
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "registration_date", [], "any", false, false, false, 246), "vars", [], "any", false, false, false, 246), "errors", [], "any", false, false, false, 246))) ? ("is-invalid") : (""))), "placeholder" => "Select date & time"]]);
        // line 249
        yield "
                </div>
                <div class=\"invalid-feedback\">
                    ";
        // line 252
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), "registration_date", [], "any", false, false, false, 252), 'errors');
        yield "
                </div>
            </div>

            <!-- Status Field -->
            <!-- Status Field -->
            <div class=\"mb-4\">
                ";
        // line 259
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", true, true, false, 259)) {
            // line 260
            yield "                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "status", [], "any", false, false, false, 260), 'label', ["label_attr" => ["class" => "form-label"]]);
            // line 262
            yield "
                    ";
            // line 263
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "status", [], "any", false, false, false, 263), 'widget', ["attr" => ["class" => ("form-select " . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 265
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "status", [], "any", false, false, false, 265), "vars", [], "any", false, false, false, 265), "errors", [], "any", false, false, false, 265))) ? ("is-invalid") : ("")))]]);
            // line 267
            yield "
                    <div class=\"invalid-feedback\">
                        ";
            // line 269
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "status", [], "any", false, false, false, 269), 'errors');
            yield "
                    </div>
                ";
        }
        // line 272
        yield "            </div>
            <!-- Form Actions -->
            <div class=\"d-flex justify-content-between align-items-center mt-5\">
                <button type=\"submit\" class=\"btn btn-update\">
                    <i class=\"bx bx-save me-2\"></i>
                    Update Registration
                </button>
                
                <a href=\"";
        // line 280
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_index");
        yield "\" class=\"back-link\">
                    <i class=\"bx bx-chevron-left scaleX-n1-rtl\"></i>
                    Back to List
                </a>
            </div>

            ";
        // line 286
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), 'form_end');
        yield "
        </div>

        <!-- Danger Zone -->
        <div class=\"delete-section\">
            <h6 class=\"text-danger mb-3\">
                <i class=\"bx bx-trash me-2\"></i>
                Danger Zone
            </h6>
            ";
        // line 295
        yield Twig\Extension\CoreExtension::include($this->env, $context, "event_registration/_delete_form.html.twig");
        yield "
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 301
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

        // line 302
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/libs/flatpickr/flatpickr.js"), "html", null, true);
        yield "\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize datepicker
    flatpickr('.flatpickr-input', {
        enableTime: true,
        dateFormat: \"Y-m-d H:i\",
        time_24hr: true,
        minDate: \"today\"
    });

    // Enhanced form validation
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
            
            // Add loading state
            const submitBtn = form.querySelector('[type=\"submit\"]');
            if (submitBtn) {
                submitBtn.innerHTML = `
                    <span class=\"spinner-border spinner-border-sm\" role=\"status\"></span>
                    Updating...
                `;
                submitBtn.disabled = true;
            }
        }, false);
    });

    // Delete confirmation
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!confirm('Are you sure you want to delete this registration?')) {
                e.preventDefault();
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "event_registration/edit1.html.twig";
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
        return array (  508 => 303,  504 => 302,  491 => 301,  475 => 295,  463 => 286,  454 => 280,  444 => 272,  438 => 269,  434 => 267,  432 => 265,  431 => 263,  428 => 262,  425 => 260,  423 => 259,  413 => 252,  408 => 249,  406 => 246,  405 => 244,  401 => 242,  399 => 240,  394 => 237,  387 => 233,  381 => 229,  379 => 228,  375 => 226,  373 => 221,  361 => 211,  348 => 210,  330 => 202,  321 => 196,  312 => 190,  306 => 186,  293 => 185,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Edit Event Registration{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --primary-hover: #5b5dcc;
            --danger-color: #ff3e1d;
            --success-color: #71dd37;
            --transition-timing: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Enhanced Sidebar */
        .menu-inner {
            padding: 1.5rem 0;
        }

        .menu-link {
            transition: all var(--transition-timing);
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            margin: 0.25rem 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .menu-link:hover {
            background: rgba(105, 108, 255, 0.1);
            transform: translateX(5px);
        }

        .menu-item.active .menu-link {
            background: rgba(105, 108, 255, 0.1);
            position: relative;
        }

        .menu-item.active .menu-link::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--primary-color);
            border-radius: 2px 0 0 2px;
        }

        /* Main Content Styling */
        .edit-container {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1.5rem rgba(161, 172, 184, 0.15);
            padding: 2.5rem;
            margin: 2rem 0;
        }

        .edit-header {
            padding-bottom: 2rem;
            margin-bottom: 2.5rem;
            border-bottom: 1px solid #eceef1;
        }

        .edit-header h4 {
            font-weight: 600;
            color: #2f3651;
            margin-bottom: 0.5rem;
        }

        .form-section {
            margin-bottom: 3rem;
        }

        /* Enhanced Form Controls */
        .form-label {
            font-weight: 500;
            color: #5d596c;
            margin-bottom: 0.75rem;
        }

        .form-control {
            border-radius: 0.75rem;
            padding: 0.875rem 1.25rem;
            transition: all var(--transition-timing);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(105, 108, 255, 0.2);
        }

        .form-control.is-invalid {
            border-color: var(--danger-color);
            background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23ff3e1d'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ff3e1d' stroke='none'/%3e%3c/svg%3e\");
        }

        .invalid-feedback {
            font-size: 0.875em;
            margin-top: 0.5rem;
            padding-left: 0.25rem;
        }

        /* Error Display */
        .form-error {
            background: rgba(255, 62, 29, 0.08);
            border-left: 4px solid var(--danger-color);
            border-radius: 0.5rem;
            padding: 1.25rem;
            margin: 2rem 0;
        }

        /* Button Styling */
        .btn-update {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-hover) 100%);
            color: #fff;
            padding: 0.875rem 2rem;
            border-radius: 0.75rem;
            border: none;
            transition: all var(--transition-timing);
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
        }

        .btn-update:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(105, 108, 255, 0.25);
        }

        /* Delete Section */
        .delete-section {
            border-top: 1px solid rgba(255, 62, 29, 0.15);
            padding-top: 2.5rem;
            margin-top: 3rem;
        }

        .delete-section h6 {
            color: var(--danger-color);
            font-weight: 600;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        /* Back Link */
        .back-link {
            color: #6f6b7d;
            transition: all var(--transition-timing);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
        }

        .back-link:hover {
            color: var(--primary-color);
            background: rgba(105, 108, 255, 0.05);
            text-decoration: none;
        }

        /* Datepicker Customization */
        .flatpickr-input {
            background: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%235d596c' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-calendar'%3E%3Crect x='3' y='4' width='18' height='18' rx='2' ry='2'%3E%3C/rect%3E%3Cline x1='16' y1='2' x2='16' y2='6'%3E%3C/line%3E%3Cline x1='8' y1='2' x2='8' y2='6'%3E%3C/line%3E%3Cline x1='3' y1='10' x2='21' y2='10'%3E%3C/line%3E%3C/svg%3E\") 
                no-repeat right 1rem center/20px;
        }

        @media (max-width: 768px) {
            .edit-container {
                padding: 1.5rem;
                margin: 1rem 0;
            }
            
            .edit-header {
                padding-bottom: 1.5rem;
                margin-bottom: 1.5rem;
            }
        }
    </style>
{% endblock %}

{% block sidebar %}
    <!-- Enhanced Sidebar Content -->
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

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"edit-container\">
        <!-- Header Section -->
        <div class=\"edit-header\">
            <h4>Edit Event Registration</h4>
            <p class=\"text-muted mb-0\">Update registration details below</p>
        </div>

        <!-- Main Form Section -->
        <div class=\"form-section\">
            {{ form_start(form, {
                'attr': {
                    'novalidate': 'novalidate',
                    'class': 'needs-validation'
                }
            }) }}

            {% if form_errors(form) %}
                <div class=\"form-error\">
                    <i class=\"bx bx-error-circle text-danger me-2\"></i>
                    <div class=\"text-danger\">
                        <strong>Validation Errors:</strong>
                        {{ form_errors(form) }}
                    </div>
                </div>
            {% endif %}

            <!-- Registration Date Field -->
            <div class=\"mb-4\">
                {{ form_label(form.registration_date, null, {
                    'label_attr': {'class': 'form-label'}
                }) }}
                <div class=\"input-group\">
                    {{ form_widget(form.registration_date, {
                        'attr': {
                            'class': 'form-control flatpickr-input ' ~ (form.registration_date.vars.errors|length ? 'is-invalid' : ''),
                            'placeholder': 'Select date & time'
                        }
                    }) }}
                </div>
                <div class=\"invalid-feedback\">
                    {{ form_errors(form.registration_date) }}
                </div>
            </div>

            <!-- Status Field -->
            <!-- Status Field -->
            <div class=\"mb-4\">
                {% if form.status is defined %}
                    {{ form_label(form.status, null, {
                        'label_attr': {'class': 'form-label'}
                    }) }}
                    {{ form_widget(form.status, {
                        'attr': {
                            'class': 'form-select ' ~ (form.status.vars.errors|length ? 'is-invalid' : '')
                        }
                    }) }}
                    <div class=\"invalid-feedback\">
                        {{ form_errors(form.status) }}
                    </div>
                {% endif %}
            </div>
            <!-- Form Actions -->
            <div class=\"d-flex justify-content-between align-items-center mt-5\">
                <button type=\"submit\" class=\"btn btn-update\">
                    <i class=\"bx bx-save me-2\"></i>
                    Update Registration
                </button>
                
                <a href=\"{{ path('app_eventback_registration_index') }}\" class=\"back-link\">
                    <i class=\"bx bx-chevron-left scaleX-n1-rtl\"></i>
                    Back to List
                </a>
            </div>

            {{ form_end(form) }}
        </div>

        <!-- Danger Zone -->
        <div class=\"delete-section\">
            <h6 class=\"text-danger mb-3\">
                <i class=\"bx bx-trash me-2\"></i>
                Danger Zone
            </h6>
            {{ include('event_registration/_delete_form.html.twig') }}
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"{{ asset('vendor/libs/flatpickr/flatpickr.js') }}\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize datepicker
    flatpickr('.flatpickr-input', {
        enableTime: true,
        dateFormat: \"Y-m-d H:i\",
        time_24hr: true,
        minDate: \"today\"
    });

    // Enhanced form validation
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
            
            // Add loading state
            const submitBtn = form.querySelector('[type=\"submit\"]');
            if (submitBtn) {
                submitBtn.innerHTML = `
                    <span class=\"spinner-border spinner-border-sm\" role=\"status\"></span>
                    Updating...
                `;
                submitBtn.disabled = true;
            }
        }, false);
    });

    // Delete confirmation
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!confirm('Are you sure you want to delete this registration?')) {
                e.preventDefault();
            }
        });
    });
});
</script>
{% endblock %}", "event_registration/edit1.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event_registration\\edit1.html.twig");
    }
}
