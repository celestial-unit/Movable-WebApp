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

/* driver/new.html.twig */
class __TwigTemplate_e2ccde5a5f516f069ea15d6e16b604d2 extends Template
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
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "driver/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "driver/new.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "driver/new.html.twig", 1);
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

        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) ? ("Edit") : ("New"));
        yield " Driver";
        
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
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <h4 class=\"fw-bold py-3 mb-4\">
        <span class=\"text-muted fw-light\">Driver /</span> ";
        // line 8
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)) ? ("Edit") : ("Create"));
        yield "
    </h4>

    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        yield "
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control"], "label_attr" => ["class" => "form-label"]]);
        // line 21
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "licenseNumber", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control"], "label_attr" => ["class" => "form-label"]]);
        // line 27
        yield "
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "transport", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-select"], "label_attr" => ["class" => "form-label"], "placeholder" => "Select a vehicle"]);
        // line 35
        yield "
                        </div>
                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">
                                <i class=\"bx bx-save\"></i> ";
        // line 39
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)) ? ("Update") : ("Save"));
        yield "
                            </button>
                            <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_driver_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                Cancel
                            </a>
                        </div>
                    ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "driver/new.html.twig";
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
        return array (  156 => 45,  149 => 41,  144 => 39,  138 => 35,  136 => 31,  130 => 27,  128 => 24,  123 => 21,  121 => 18,  115 => 15,  105 => 8,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}{{ driver.id ? 'Edit' : 'New' }} Driver{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <h4 class=\"fw-bold py-3 mb-4\">
        <span class=\"text-muted fw-light\">Driver /</span> {{ driver.id ? 'Edit' : 'Create' }}
    </h4>

    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    {{ form_start(form) }}
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                {{ form_row(form.name, {
                                    'attr': {'class': 'form-control'},
                                    'label_attr': {'class': 'form-label'}
                                }) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(form.licenseNumber, {
                                    'attr': {'class': 'form-control'},
                                    'label_attr': {'class': 'form-label'}
                                }) }}
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            {{ form_row(form.transport, {
                                'attr': {'class': 'form-select'},
                                'label_attr': {'class': 'form-label'},
                                'placeholder': 'Select a vehicle'
                            }) }}
                        </div>
                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">
                                <i class=\"bx bx-save\"></i> {{ driver.id ? 'Update' : 'Save' }}
                            </button>
                            <a href=\"{{ path('app_driver_index') }}\" class=\"btn btn-outline-secondary\">
                                Cancel
                            </a>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "driver/new.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\driver\\new.html.twig");
    }
}
