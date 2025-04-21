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

/* Destinations/destination/_form.html.twig */
class __TwigTemplate_73616fe0cb4b25ccacd31ea4e89613dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Destinations/destination/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Destinations/destination/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        // line 6
        yield "

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 9
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9) != "token")) {
                // line 10
                yield "        <div class=\"form-group mb-3\">
            ";
                // line 11
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
                yield "

            ";
                // line 14
                yield "            ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14) == "image") &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14)))) {
                    // line 15
                    yield "                <div class=\"mb-2\">
                    <img src=\"";
                    // line 16
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/destinations/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["destination"]) || array_key_exists("destination", $context) ? $context["destination"] : (function () { throw new RuntimeError('Variable "destination" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16))), "html", null, true);
                    yield "\" alt=\"Current Image\" style=\"max-height: 200px;\">
                </div>
            ";
                }
                // line 19
                yield "
            ";
                // line 20
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control"]]);
                yield "

            ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 22), "errors", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 23
                    yield "                <div class=\"text-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 23), "html", null, true);
                    yield "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                yield "        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "

    <button class=\"btn btn-primary\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 30, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>

";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        yield "
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
        return "Destinations/destination/_form.html.twig";
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
        return array (  119 => 32,  114 => 30,  110 => 28,  102 => 25,  93 => 23,  89 => 22,  84 => 20,  81 => 19,  75 => 16,  72 => 15,  69 => 14,  64 => 11,  61 => 10,  58 => 9,  54 => 8,  50 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {
    'attr': {
        'novalidate': 'novalidate',
        'enctype': 'multipart/form-data'
    }
}) }}

    {% for field in form %}
    {% if field.vars.name != 'token' %}
        <div class=\"form-group mb-3\">
            {{ form_label(field) }}

            {# Show current image if editing and it's the image field #}
            {% if field.vars.name == 'image' and destination.image is not empty %}
                <div class=\"mb-2\">
                    <img src=\"{{ asset('uploads/destinations/' ~ destination.image) }}\" alt=\"Current Image\" style=\"max-height: 200px;\">
                </div>
            {% endif %}

            {{ form_widget(field, {'attr': {'class': 'form-control'}}) }}

            {% for error in field.vars.errors %}
                <div class=\"text-danger\">{{ error.message }}</div>
            {% endfor %}
        </div>
    {% endif %}
{% endfor %}


    <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>

{{ form_end(form) }}
", "Destinations/destination/_form.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\Destinations\\destination\\_form.html.twig");
    }
}
