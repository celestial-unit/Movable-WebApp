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

/* transport/edit.html.twig */
class __TwigTemplate_f3216d6a3cfc866f08478b33d38e4fc1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/edit.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "transport/edit.html.twig", 1);
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

        // line 4
        yield "    ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "id", [], "any", true, true, false, 4)) ? ("Edit") : ("New"));
        yield " Transport
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"container mt-5\">
    <div class=\"card shadow-sm border-0 rounded-4 p-4\">
        <h3 class=\"mb-4 text-center\">
            ";
        // line 11
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "id", [], "any", true, true, false, 11)) ? ("Edit Transport") : ("Create New Transport"));
        yield "
        </h3>

        ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        yield "
            <div class=\"mb-3\">
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "type", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control rounded-3"], "label_attr" => ["class" => "form-label fw-semibold"]]);
        // line 19
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "capacity", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control rounded-3"], "label_attr" => ["class" => "form-label fw-semibold"]]);
        // line 26
        yield "
            </div>

            <div class=\"form-check mb-3\">
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "disponibility", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "disponibility", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "destination", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control rounded-3"], "label_attr" => ["class" => "form-label fw-semibold"]]);
        // line 38
        yield "
            </div>

            <div class=\"d-flex justify-content-end mt-4\">
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "submit", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "btn btn-primary px-4 rounded-pill"]]);
        yield "
            </div>
        ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        yield "
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
        return "transport/edit.html.twig";
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
        return array (  160 => 44,  155 => 42,  149 => 38,  147 => 35,  140 => 31,  136 => 30,  130 => 26,  128 => 23,  122 => 19,  120 => 16,  115 => 14,  109 => 11,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}
    {{ transport.id is defined ? 'Edit' : 'New' }} Transport
{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"card shadow-sm border-0 rounded-4 p-4\">
        <h3 class=\"mb-4 text-center\">
            {{ transport.id is defined ? 'Edit Transport' : 'Create New Transport' }}
        </h3>

        {{ form_start(form) }}
            <div class=\"mb-3\">
                {{ form_row(form.type, {
                    'attr': {'class': 'form-control rounded-3'},
                    'label_attr': {'class': 'form-label fw-semibold'}
                }) }}
            </div>

            <div class=\"mb-3\">
                {{ form_row(form.capacity, {
                    'attr': {'class': 'form-control rounded-3'},
                    'label_attr': {'class': 'form-label fw-semibold'}
                }) }}
            </div>

            <div class=\"form-check mb-3\">
                {{ form_widget(form.disponibility, {'attr': {'class': 'form-check-input'}}) }}
                {{ form_label(form.disponibility, null, {'label_attr': {'class': 'form-check-label'}}) }}
            </div>

            <div class=\"mb-3\">
                {{ form_row(form.destination, {
                    'attr': {'class': 'form-control rounded-3'},
                    'label_attr': {'class': 'form-label fw-semibold'}
                }) }}
            </div>

            <div class=\"d-flex justify-content-end mt-4\">
                {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary px-4 rounded-pill'}}) }}
            </div>
        {{ form_end(form) }}
    </div>
</div>
{% endblock %}
", "transport/edit.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\transport\\edit.html.twig");
    }
}
