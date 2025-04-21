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

/* event_registration/_form.html.twig */
class __TwigTemplate_2e21500854162e19116b2a6bc7887fea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "

";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 5
            yield "    <div class=\"mb-3\">
        ";
            // line 7
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "form-label"]]);
            // line 9
            yield "

        ";
            // line 12
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 12), "block_prefixes", [], "any", false, false, false, 12), 1, [], "any", false, false, false, 12) == "checkbox")) {
                // line 13
                yield "            <div class=\"form-check\">
                ";
                // line 14
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-check-input"]]);
                yield "
                ";
                // line 15
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "form-check-label"]]);
                yield "
            </div>
        ";
            } else {
                // line 18
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => ("form-control" . ((                // line 20
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors')) ? (" is-invalid") : (""))), "placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 21
$context["field"], "vars", [], "any", false, false, false, 21), "label", [], "any", false, false, false, 21)]]);
                // line 23
                yield "
        ";
            }
            // line 25
            yield "
        ";
            // line 27
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors', ["attr" => ["class" => "invalid-feedback"]]);
            // line 29
            yield "

        ";
            // line 32
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 32), "help", [], "any", false, false, false, 32)) {
                // line 33
                yield "            <small class=\"form-text text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 33), "help", [], "any", false, false, false, 33), "html", null, true);
                yield "</small>
        ";
            }
            // line 35
            yield "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "
<div class=\"mt-4\">
    <button type=\"submit\" class=\"btn btn-primary me-3\">
        ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 40, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
    </button>
    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eventback_registration_index");
        yield "\" class=\"btn btn-outline-secondary\">
        Cancel
    </a>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "event_registration/_form.html.twig";
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
        return array (  128 => 42,  123 => 40,  118 => 37,  111 => 35,  105 => 33,  102 => 32,  98 => 29,  95 => 27,  92 => 25,  88 => 23,  86 => 21,  85 => 20,  83 => 18,  77 => 15,  73 => 14,  70 => 13,  67 => 12,  63 => 9,  60 => 7,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}

{# Loop through and render each form field individually #}
{% for field in form %}
    <div class=\"mb-3\">
        {# Label #}
        {{ form_label(field, null, {
            'label_attr': {'class': 'form-label'}
        }) }}

        {# Input/Widget #}
        {% if field.vars.block_prefixes.1 == 'checkbox' %}
            <div class=\"form-check\">
                {{ form_widget(field, {'attr': {'class': 'form-check-input'}}) }}
                {{ form_label(field, null, {'label_attr': {'class': 'form-check-label'}}) }}
            </div>
        {% else %}
            {{ form_widget(field, {
                'attr': {
                    'class': 'form-control' ~ (form_errors(field) ? ' is-invalid' : ''),
                    'placeholder': field.vars.label
                }
            }) }}
        {% endif %}

        {# Error messages #}
        {{ form_errors(field, {
            'attr': {'class': 'invalid-feedback'}
        }) }}

        {# Help text #}
        {% if field.vars.help %}
            <small class=\"form-text text-muted\">{{ field.vars.help }}</small>
        {% endif %}
    </div>
{% endfor %}

<div class=\"mt-4\">
    <button type=\"submit\" class=\"btn btn-primary me-3\">
        {{ button_label|default('Save') }}
    </button>
    <a href=\"{{ path('app_eventback_registration_index') }}\" class=\"btn btn-outline-secondary\">
        Cancel
    </a>
</div>

", "event_registration/_form.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event_registration\\_form.html.twig");
    }
}
