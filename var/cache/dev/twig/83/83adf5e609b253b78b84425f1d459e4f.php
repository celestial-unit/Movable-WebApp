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

/* transport/new.html.twig */
class __TwigTemplate_697e44ed1eb45247ea4fc4a35b3279ff extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/new.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "transport/new.html.twig", 1);
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

        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) ? ("Edit") : ("Create"));
        yield " Transport";
        
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
        yield "<!-- Hero Section -->
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white mb-4 animated slideInDown\">
                    ";
        // line 12
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)) ? ("Edit Transport") : ("New Transport"));
        yield "
                </h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transport_list");
        yield "\">Transports</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">
                            ";
        // line 19
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)) ? ("Edit") : ("Create"));
        yield "
                        </li>
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

    // line 29
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

        // line 30
        yield "<div class=\"container-xxl py-5\">
    <div class=\"container px-lg-5\">
        <div class=\"wow fadeInUp\">
            <div class=\"card border-primary shadow-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">
                        <i class=\"fa fa-bus me-3\"></i>
                        ";
        // line 37
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)) ? ("Edit Transport Details") : ("Create New Transport"));
        yield "
                    </h4>
                </div>
                
                <div class=\"card-body\">
                    ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                    
                    <div class=\"row g-4 mb-4\">
                        <!-- Type Field -->
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Transport Type"]]);
        // line 53
        yield "
                                <label for=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        yield "\">
                                    <i class=\"fa fa-car me-2\"></i>Transport Type
                                </label>
                                <div class=\"invalid-feedback\">
                                    Please enter the transport type
                                </div>
                            </div>
                        </div>

                        <!-- Capacity Field -->
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "capacity", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Passenger Capacity"]]);
        // line 71
        yield "
                                <label for=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "capacity", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        yield "\">
                                    <i class=\"fa fa-users me-2\"></i>Passenger Capacity
                                </label>
                                <div class=\"invalid-feedback\">
                                    Please enter valid capacity
                                </div>
                            </div>
                        </div>

                        <!-- Availability Field -->
                        <div class=\"col-md-6\">
                            <div class=\"form-check form-switch\">
                                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "disponibility", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-check-input", "role" => "switch"]]);
        // line 89
        yield "
                                <label class=\"form-check-label\" for=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "disponibility", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "html", null, true);
        yield "\">
                                    <i class=\"fa fa-check-circle me-2\"></i>Currently Available
                                </label>
                            </div>
                        </div>

                        <!-- Destination Field -->
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "destination", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Destination"]]);
        // line 104
        yield "
                                <label for=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "destination", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105), "html", null, true);
        yield "\">
                                    <i class=\"fa fa-map-marker-alt me-2\"></i>Destination
                                </label>
                                <div class=\"invalid-feedback\">
                                    Please select a destination
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Error Messages -->
                    ";
        // line 116
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 116, $this->source); })()))) {
            // line 117
            yield "                        <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
                            <i class=\"fa fa-exclamation-circle me-2\"></i>
                            <strong>Validation Errors:</strong>
                            <ul class=\"mb-0 mt-2\">
                                ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 121, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 122
                yield "                                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 122), "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "                            </ul>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        // line 128
        yield "
                    <!-- Form Actions -->
                    <div class=\"d-flex gap-3 justify-content-end mt-5\">
                        <button type=\"submit\" class=\"btn btn-primary rounded-pill px-4\">
                            <i class=\"fa fa-save me-2\"></i>
                            ";
        // line 133
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 133, $this->source); })()), "id", [], "any", false, false, false, 133)) ? ("Save Changes") : ("Create Transport"));
        yield "
                        </button>
                        <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transport_list");
        yield "\" class=\"btn btn-secondary rounded-pill px-4\">
                            <i class=\"fa fa-times me-2\"></i>Cancel
                        </a>
                    </div>

                    ";
        // line 140
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), 'form_end');
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

    // line 148
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

        // line 149
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// Initialize WOW animations
new WOW().init();

// Bootstrap Form Validation
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
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
        return "transport/new.html.twig";
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
        return array (  340 => 149,  327 => 148,  309 => 140,  301 => 135,  296 => 133,  289 => 128,  283 => 124,  274 => 122,  270 => 121,  264 => 117,  262 => 116,  248 => 105,  245 => 104,  243 => 99,  231 => 90,  228 => 89,  226 => 84,  211 => 72,  208 => 71,  206 => 66,  191 => 54,  188 => 53,  186 => 48,  177 => 42,  169 => 37,  160 => 30,  147 => 29,  127 => 19,  122 => 17,  118 => 16,  111 => 12,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}{{ transport.id ? 'Edit' : 'Create' }} Transport{% endblock %}

{% block hero_banner %}
<!-- Hero Section -->
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white mb-4 animated slideInDown\">
                    {{ transport.id ? 'Edit Transport' : 'New Transport' }}
                </h1>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('transport_list') }}\">Transports</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">
                            {{ transport.id ? 'Edit' : 'Create' }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block content %}
<div class=\"container-xxl py-5\">
    <div class=\"container px-lg-5\">
        <div class=\"wow fadeInUp\">
            <div class=\"card border-primary shadow-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <h4 class=\"mb-0\">
                        <i class=\"fa fa-bus me-3\"></i>
                        {{ transport.id ? 'Edit Transport Details' : 'Create New Transport' }}
                    </h4>
                </div>
                
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                    
                    <div class=\"row g-4 mb-4\">
                        <!-- Type Field -->
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.type, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Transport Type'
                                    }
                                }) }}
                                <label for=\"{{ form.type.vars.id }}\">
                                    <i class=\"fa fa-car me-2\"></i>Transport Type
                                </label>
                                <div class=\"invalid-feedback\">
                                    Please enter the transport type
                                </div>
                            </div>
                        </div>

                        <!-- Capacity Field -->
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.capacity, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Passenger Capacity'
                                    }
                                }) }}
                                <label for=\"{{ form.capacity.vars.id }}\">
                                    <i class=\"fa fa-users me-2\"></i>Passenger Capacity
                                </label>
                                <div class=\"invalid-feedback\">
                                    Please enter valid capacity
                                </div>
                            </div>
                        </div>

                        <!-- Availability Field -->
                        <div class=\"col-md-6\">
                            <div class=\"form-check form-switch\">
                                {{ form_widget(form.disponibility, {
                                    'attr': {
                                        'class': 'form-check-input',
                                        'role': 'switch'
                                    }
                                }) }}
                                <label class=\"form-check-label\" for=\"{{ form.disponibility.vars.id }}\">
                                    <i class=\"fa fa-check-circle me-2\"></i>Currently Available
                                </label>
                            </div>
                        </div>

                        <!-- Destination Field -->
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.destination, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Destination'
                                    }
                                }) }}
                                <label for=\"{{ form.destination.vars.id }}\">
                                    <i class=\"fa fa-map-marker-alt me-2\"></i>Destination
                                </label>
                                <div class=\"invalid-feedback\">
                                    Please select a destination
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Error Messages -->
                    {% if errors is not empty %}
                        <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
                            <i class=\"fa fa-exclamation-circle me-2\"></i>
                            <strong>Validation Errors:</strong>
                            <ul class=\"mb-0 mt-2\">
                                {% for error in errors %}
                                    <li>{{ error.message }}</li>
                                {% endfor %}
                            </ul>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endif %}

                    <!-- Form Actions -->
                    <div class=\"d-flex gap-3 justify-content-end mt-5\">
                        <button type=\"submit\" class=\"btn btn-primary rounded-pill px-4\">
                            <i class=\"fa fa-save me-2\"></i>
                            {{ transport.id ? 'Save Changes' : 'Create Transport' }}
                        </button>
                        <a href=\"{{ path('transport_list') }}\" class=\"btn btn-secondary rounded-pill px-4\">
                            <i class=\"fa fa-times me-2\"></i>Cancel
                        </a>
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
<script>
// Initialize WOW animations
new WOW().init();

// Bootstrap Form Validation
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
{% endblock %}", "transport/new.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\transport\\new.html.twig");
    }
}
