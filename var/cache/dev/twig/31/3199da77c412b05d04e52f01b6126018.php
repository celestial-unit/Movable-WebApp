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

/* event_registration/new.html.twig */
class __TwigTemplate_b25ffcafdad00188f3480fe11a052898 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event_registration/new.html.twig", 1);
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

        yield "Register for Event";
        
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
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "<div class=\"container-xxl bg-white p-0\">
    <!-- Hero banner -->
    <div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
        <div class=\"container my-5 py-5 px-lg-5\">
            <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb justify-content-center\">
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\">Events</a></li>
                    <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Register</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main content -->
<style>
    :root {
        --primary-color: #2563eb; /* Modern blue */
        --success-color: #10b981; /* Emerald green */
        --warning-color: #f59e0b; /* Amber */
        --danger-color: #ef4444; /* Red */
        --text-color: #1e293b; /* Slate 800 */
        --border-color: #e2e8f0; /* Slate 200 */
        --bg-light: #f8fafc; /* Slate 50 */
        --form-icon-size: 1.5rem;
        --card-max-width: 1400px;
        --transition-timing: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .registration-wrapper {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        padding: 4rem 0;
        min-height: 100vh;
    }

    .registration-card {
        background: white;
        border-radius: 1.5rem;
        box-shadow: var(--shadow-lg);
        margin: 0 auto;
        overflow: hidden;
        max-width: var(--card-max-width);
        transition: transform var(--transition-timing);
    }

    .card-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, #1d4ed8 100%);
        padding: 4rem 2rem;
        text-align: center;
        
        h1 {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 0.75rem;
            backdrop-filter: blur(4px);
            margin: 0 auto;
            
            i {
                font-size: 1.8em;
                transform: rotate(-5deg);
            }
        }
    }

    .event-info {
        display: flex;
        gap: 2rem;
        background: white;
        padding: 2.5rem;
        border-radius: 1.25rem;
        margin: 2rem 0;
        box-shadow: var(--shadow-md);
        border-left: 4px solid var(--primary-color);
        
        i {
            font-size: 2.5rem;
            color: var(--primary-color);
            flex-shrink: 0;
        }
        
        h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--text-color);
        }
    }

    .form-section {
        padding: 2.5rem;
        background: var(--bg-light);
        border-radius: 1.25rem;
        margin: 2rem 0;
        
        .form-label {
            font-size: 1.25rem;
            color: var(--text-color);
            padding: 1rem 1.5rem;
            background: rgba(37, 99, 235, 0.05);
            border-radius: 0.75rem;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            border-left: 4px solid var(--primary-color);
            
            i {
                font-size: 1.4em;
            }
        }
    }

    .form-group {
        margin-bottom: 2rem;
        position: relative;
        
        .input-icon {
            position: absolute;
            left: 1.5rem;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
            font-size: var(--form-icon-size);
            pointer-events: none;
        }
        
        .form-control {
            width: 100%;
            padding: 1.25rem 1.5rem 1.25rem 4rem;
            border: 2px solid var(--border-color);
            border-radius: 0.75rem;
            font-size: 1rem;
            transition: all var(--transition-timing);
            
            &:focus {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
            }
            
            &.is-invalid {
                border-color: var(--danger-color);
                padding-right: 2.5rem;
                background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23ef4444'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ef4444' stroke='none'/%3e%3c/svg%3e\");
            }
        }
    }

    .status-note {
        background: rgba(59, 130, 246, 0.05);
        color: #1e40af;
        padding: 1.25rem;
        border-radius: 0.75rem;
        border-left: 4px solid #3b82f6;
        margin: 1.5rem 0;
        display: flex;
        gap: 1rem;
        align-items: center;
        font-size: 0.95rem;
        
        &::before {
            content: \"ℹ️\";
            font-size: 1.2em;
        }
    }

    .submit-btn {
        background: var(--primary-color);
        color: white;
        padding: 1rem 2.5rem;
        border-radius: 0.75rem;
        font-weight: 600;
        transition: all var(--transition-timing);
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        
        &:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            background: #1d4ed8;
        }
    }

    @media (max-width: 768px) {
        .registration-wrapper {
            padding: 2rem 0;
        }
        
        .card-header {
            padding: 3rem 1rem;
            
            h1 {
                font-size: 1.75rem;
                flex-direction: column;
                padding: 1rem;
            }
        }
        
        .event-info {
            flex-direction: column;
            text-align: center;
            padding: 1.5rem;
            
            i {
                margin: 0 auto;
            }
        }
        
        .form-section {
            padding: 1.5rem;
            
            .form-label {
                font-size: 1.1rem;
                padding: 1rem;
            }
        }
        
        .form-group .form-control {
            padding-left: 3.5rem;
        }
    }
</style>

<div class=\"registration-wrapper\">
    <div class=\"container-fluid\">
        <div class=\"registration-card\">
            <div class=\"card-header\">
                <h1>
                    <i class=\"bi bi-pencil-square\"></i>
                    🃏New Registration🃏
                </h1>
            </div>

            <div class=\"card-body\">
                <div class=\"event-info\">
                    <i class=\"bi bi-calendar-event\" style=\"font-size: 3rem; color: var(--primary-color);\"></i>
                    <div>
                        <h3 class=\"mb-4\">";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 256, $this->source); })()), "title", [], "any", false, false, false, 256), "html", null, true);
        yield "</h3>
                        <div class=\"d-flex flex-wrap gap-3 text-muted\">
                            <div class=\"event-detail-badge\">
                                <i class=\"bi bi-clock\"></i>
                                ";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 260, $this->source); })()), "getFormattedDate", [], "method", false, false, false, 260), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 266
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "
                    <div class=\"form-section\">
                        <div class=\"form-grid\">
                            <div class=\"full-width-section\">
                                <label class=\"form-label\">
                                    <i class=\"bi bi-card-checklist\"></i>
                                    🪪 Registration Information🪪
                                </label>
                            </div>

                            <!-- Registration Date Field -->
                            <div class=\"form-group\">
                                <div class=\"position-relative\">
                                    <i class=\"bi bi-calendar2-range input-icon\"></i>
                                    ";
        // line 280
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "registration_date", [], "any", false, false, false, 280), 'widget', ["attr" => ["class" => ("form-control " . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 282
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "registration_date", [], "any", false, false, false, 282), "vars", [], "any", false, false, false, 282), "errors", [], "any", false, false, false, 282))) ? ("is-invalid") : ("")))]]);
        // line 284
        yield "
                                    ";
        // line 285
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "registration_date", [], "any", false, false, false, 285), "vars", [], "any", false, false, false, 285), "errors", [], "any", false, false, false, 285))) {
            // line 286
            yield "                                        <div class=\"invalid-feedback\">
                                            ";
            // line 287
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "registration_date", [], "any", false, false, false, 287), 'errors');
            yield "
                                        </div>
                                    ";
        }
        // line 290
        yield "                                </div>
                            </div>

                            <!-- Status Field -->
                            <p class=\"status-note\">
    You can see  current status below. If it's pending, please wait for an admin to review your registration ( you are not CHOOSING YOUR STATUS).
</p>

                            <div class=\"form-group\">
                                <div class=\"position-relative\">
                                    <i class=\"bi bi-clipboard-check input-icon\"></i>
                                    ";
        // line 301
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "status", [], "any", false, false, false, 301), 'widget', ["attr" => ["class" => ("form-control " . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 303
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "status", [], "any", false, false, false, 303), "vars", [], "any", false, false, false, 303), "errors", [], "any", false, false, false, 303))) ? ("is-invalid") : ("")))]]);
        // line 305
        yield "
                                    ";
        // line 306
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "status", [], "any", false, false, false, 306), "vars", [], "any", false, false, false, 306), "errors", [], "any", false, false, false, 306))) {
            // line 307
            yield "                                        <div class=\"invalid-feedback\">
                                            ";
            // line 308
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), "status", [], "any", false, false, false, 308), 'errors');
            yield "
                                        </div>
                                    
                                ";
        }
        // line 312
        yield "                                </div>
                            </div>
                        </div>

                        ";
        // line 316
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), 'errors')) {
            // line 317
            yield "                        <div class=\"form-error mt-4\">
                            <i class=\"bi bi-exclamation-octagon\"></i>
                            <div>
                                Please correct the following errors:
                                ";
            // line 321
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), 'errors');
            yield "
                            </div>
                        </div>
                        ";
        }
        // line 325
        yield "                    </div>

                    <div class=\"d-flex justify-content-between align-items-center mt-5 px-3\">
                        <a href=\"";
        // line 328
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_registration_index");
        yield "\" class=\"back-link text-decoration-none\">
                            <i class=\"bi bi-arrow-left\"></i>
                            Back to Registrations
                        </a>
                        <button type=\"submit\" class=\"submit-btn btn-primary\">
                            <i class=\"bi bi-check2-circle\"></i>
                            Complete Registration
                        </button>
                    </div>
                ";
        // line 337
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 337, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
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
        return "event_registration/new.html.twig";
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
        return array (  500 => 337,  488 => 328,  483 => 325,  476 => 321,  470 => 317,  468 => 316,  462 => 312,  455 => 308,  452 => 307,  450 => 306,  447 => 305,  445 => 303,  444 => 301,  431 => 290,  425 => 287,  422 => 286,  420 => 285,  417 => 284,  415 => 282,  414 => 280,  397 => 266,  388 => 260,  381 => 256,  141 => 19,  137 => 18,  128 => 11,  115 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register for Event{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Add registration-specific styles here #}
{% endblock %}

{% block body %}
<div class=\"container-xxl bg-white p-0\">
    <!-- Hero banner -->
    <div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
        <div class=\"container my-5 py-5 px-lg-5\">
            <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb justify-content-center\">
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_event_index') }}\">Events</a></li>
                    <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Register</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main content -->
<style>
    :root {
        --primary-color: #2563eb; /* Modern blue */
        --success-color: #10b981; /* Emerald green */
        --warning-color: #f59e0b; /* Amber */
        --danger-color: #ef4444; /* Red */
        --text-color: #1e293b; /* Slate 800 */
        --border-color: #e2e8f0; /* Slate 200 */
        --bg-light: #f8fafc; /* Slate 50 */
        --form-icon-size: 1.5rem;
        --card-max-width: 1400px;
        --transition-timing: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .registration-wrapper {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        padding: 4rem 0;
        min-height: 100vh;
    }

    .registration-card {
        background: white;
        border-radius: 1.5rem;
        box-shadow: var(--shadow-lg);
        margin: 0 auto;
        overflow: hidden;
        max-width: var(--card-max-width);
        transition: transform var(--transition-timing);
    }

    .card-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, #1d4ed8 100%);
        padding: 4rem 2rem;
        text-align: center;
        
        h1 {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 0.75rem;
            backdrop-filter: blur(4px);
            margin: 0 auto;
            
            i {
                font-size: 1.8em;
                transform: rotate(-5deg);
            }
        }
    }

    .event-info {
        display: flex;
        gap: 2rem;
        background: white;
        padding: 2.5rem;
        border-radius: 1.25rem;
        margin: 2rem 0;
        box-shadow: var(--shadow-md);
        border-left: 4px solid var(--primary-color);
        
        i {
            font-size: 2.5rem;
            color: var(--primary-color);
            flex-shrink: 0;
        }
        
        h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--text-color);
        }
    }

    .form-section {
        padding: 2.5rem;
        background: var(--bg-light);
        border-radius: 1.25rem;
        margin: 2rem 0;
        
        .form-label {
            font-size: 1.25rem;
            color: var(--text-color);
            padding: 1rem 1.5rem;
            background: rgba(37, 99, 235, 0.05);
            border-radius: 0.75rem;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            border-left: 4px solid var(--primary-color);
            
            i {
                font-size: 1.4em;
            }
        }
    }

    .form-group {
        margin-bottom: 2rem;
        position: relative;
        
        .input-icon {
            position: absolute;
            left: 1.5rem;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
            font-size: var(--form-icon-size);
            pointer-events: none;
        }
        
        .form-control {
            width: 100%;
            padding: 1.25rem 1.5rem 1.25rem 4rem;
            border: 2px solid var(--border-color);
            border-radius: 0.75rem;
            font-size: 1rem;
            transition: all var(--transition-timing);
            
            &:focus {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
            }
            
            &.is-invalid {
                border-color: var(--danger-color);
                padding-right: 2.5rem;
                background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23ef4444'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ef4444' stroke='none'/%3e%3c/svg%3e\");
            }
        }
    }

    .status-note {
        background: rgba(59, 130, 246, 0.05);
        color: #1e40af;
        padding: 1.25rem;
        border-radius: 0.75rem;
        border-left: 4px solid #3b82f6;
        margin: 1.5rem 0;
        display: flex;
        gap: 1rem;
        align-items: center;
        font-size: 0.95rem;
        
        &::before {
            content: \"ℹ️\";
            font-size: 1.2em;
        }
    }

    .submit-btn {
        background: var(--primary-color);
        color: white;
        padding: 1rem 2.5rem;
        border-radius: 0.75rem;
        font-weight: 600;
        transition: all var(--transition-timing);
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        
        &:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            background: #1d4ed8;
        }
    }

    @media (max-width: 768px) {
        .registration-wrapper {
            padding: 2rem 0;
        }
        
        .card-header {
            padding: 3rem 1rem;
            
            h1 {
                font-size: 1.75rem;
                flex-direction: column;
                padding: 1rem;
            }
        }
        
        .event-info {
            flex-direction: column;
            text-align: center;
            padding: 1.5rem;
            
            i {
                margin: 0 auto;
            }
        }
        
        .form-section {
            padding: 1.5rem;
            
            .form-label {
                font-size: 1.1rem;
                padding: 1rem;
            }
        }
        
        .form-group .form-control {
            padding-left: 3.5rem;
        }
    }
</style>

<div class=\"registration-wrapper\">
    <div class=\"container-fluid\">
        <div class=\"registration-card\">
            <div class=\"card-header\">
                <h1>
                    <i class=\"bi bi-pencil-square\"></i>
                    🃏New Registration🃏
                </h1>
            </div>

            <div class=\"card-body\">
                <div class=\"event-info\">
                    <i class=\"bi bi-calendar-event\" style=\"font-size: 3rem; color: var(--primary-color);\"></i>
                    <div>
                        <h3 class=\"mb-4\">{{ event.title }}</h3>
                        <div class=\"d-flex flex-wrap gap-3 text-muted\">
                            <div class=\"event-detail-badge\">
                                <i class=\"bi bi-clock\"></i>
                                {{ event.getFormattedDate() }}
                            </div>
                        </div>
                    </div>
                </div>

                {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}
                    <div class=\"form-section\">
                        <div class=\"form-grid\">
                            <div class=\"full-width-section\">
                                <label class=\"form-label\">
                                    <i class=\"bi bi-card-checklist\"></i>
                                    🪪 Registration Information🪪
                                </label>
                            </div>

                            <!-- Registration Date Field -->
                            <div class=\"form-group\">
                                <div class=\"position-relative\">
                                    <i class=\"bi bi-calendar2-range input-icon\"></i>
                                    {{ form_widget(form.registration_date, {
                                        'attr': {
                                            'class': 'form-control ' ~ (form.registration_date.vars.errors|length ? 'is-invalid' : '')
                                        }
                                    }) }}
                                    {% if form.registration_date.vars.errors|length %}
                                        <div class=\"invalid-feedback\">
                                            {{ form_errors(form.registration_date) }}
                                        </div>
                                    {% endif %}
                                </div>
                            </div>

                            <!-- Status Field -->
                            <p class=\"status-note\">
    You can see  current status below. If it's pending, please wait for an admin to review your registration ( you are not CHOOSING YOUR STATUS).
</p>

                            <div class=\"form-group\">
                                <div class=\"position-relative\">
                                    <i class=\"bi bi-clipboard-check input-icon\"></i>
                                    {{ form_widget(form.status, {
                                        'attr': {
                                            'class': 'form-control ' ~ (form.status.vars.errors|length ? 'is-invalid' : '')
                                        }
                                    }) }}
                                    {% if form.status.vars.errors|length %}
                                        <div class=\"invalid-feedback\">
                                            {{ form_errors(form.status) }}
                                        </div>
                                    
                                {% endif %}
                                </div>
                            </div>
                        </div>

                        {% if form_errors(form) %}
                        <div class=\"form-error mt-4\">
                            <i class=\"bi bi-exclamation-octagon\"></i>
                            <div>
                                Please correct the following errors:
                                {{ form_errors(form) }}
                            </div>
                        </div>
                        {% endif %}
                    </div>

                    <div class=\"d-flex justify-content-between align-items-center mt-5 px-3\">
                        <a href=\"{{ path('app_event_registration_index') }}\" class=\"back-link text-decoration-none\">
                            <i class=\"bi bi-arrow-left\"></i>
                            Back to Registrations
                        </a>
                        <button type=\"submit\" class=\"submit-btn btn-primary\">
                            <i class=\"bi bi-check2-circle\"></i>
                            Complete Registration
                        </button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

{% endblock %}", "event_registration/new.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event_registration\\new.html.twig");
    }
}
