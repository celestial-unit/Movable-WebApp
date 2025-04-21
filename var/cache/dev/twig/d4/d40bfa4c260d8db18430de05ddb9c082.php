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

/* registration/reservation/_form.html.twig */
class __TwigTemplate_1e61853b3374bf0ca73010c1e95365ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/reservation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/reservation/_form.html.twig"));

        // line 1
        yield "<div class=\"content-card\">
    ";
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "date", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select Date and Time"]]);
        // line 11
        yield "
                    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "date", [], "any", false, false, false, 12), 'label');
        yield "
                    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "date", [], "any", false, false, false, 13), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "destination", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Select Destination"]]);
        // line 23
        yield "
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "destination", [], "any", false, false, false, 24), 'label');
        yield "
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "destination", [], "any", false, false, false, 25), 'errors');
        yield "
                </div>
            </div>
            
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "seats", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Number of Seats", "min" => "1", "max" => "10"]]);
        // line 38
        yield "
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "seats", [], "any", false, false, false, 39), 'label');
        yield "
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "seats", [], "any", false, false, false, 40), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "transport", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Select Transport"]]);
        // line 50
        yield "
                    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "transport", [], "any", false, false, false, 51), 'label');
        yield "
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "transport", [], "any", false, false, false, 52), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "driver", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Select Driver"]]);
        // line 62
        yield "
                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "driver", [], "any", false, false, false, 63), 'label');
        yield "
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "driver", [], "any", false, false, false, 64), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "agent", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Select Agent"]]);
        // line 74
        yield "
                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "agent", [], "any", false, false, false, 75), 'label');
        yield "
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "agent", [], "any", false, false, false, 76), 'errors');
        yield "
                </div>
            </div>
        </div>
        
        <div class=\"text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-primary py-3 px-5\">
                <i class=\"bi bi-check-circle me-2\"></i>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 83, $this->source); })()), "Create Reservation")) : ("Create Reservation")), "html", null, true);
        yield "
            </button>
            ";
        // line 85
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "vars", [], "any", false, false, false, 85), "value", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85)) {
            // line 86
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\" 
                   class=\"btn btn-danger py-3 px-5 ms-2\"
                   onclick=\"return confirm('Are you sure you want to delete this reservation?')\">
                    <i class=\"bi bi-trash me-2\"></i>Delete Reservation
                </a>
            ";
        }
        // line 92
        yield "        </div>
    ";
        // line 93
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        yield "
</div>

<style>
.form-floating {
    position: relative;
    margin-bottom: 1.5rem;
}

.form-floating > label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    padding: 1rem .75rem;
    pointer-events: none;
    border: 1px solid transparent;
    transform-origin: 0 0;
    transition: opacity .1s ease-in-out,transform .1s ease-in-out;
}

.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.5rem + 2px);
    padding: 1rem .75rem;
}

.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 0.25rem rgba(0, 102, 204, 0.25);
}

.form-floating > .form-control::-webkit-calendar-picker-indicator {
    filter: invert(0.5);
}
</style>
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
        return "registration/reservation/_form.html.twig";
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
        return array (  183 => 93,  180 => 92,  170 => 86,  168 => 85,  163 => 83,  153 => 76,  149 => 75,  146 => 74,  144 => 69,  136 => 64,  132 => 63,  129 => 62,  127 => 57,  119 => 52,  115 => 51,  112 => 50,  110 => 45,  102 => 40,  98 => 39,  95 => 38,  93 => 31,  84 => 25,  80 => 24,  77 => 23,  75 => 18,  67 => 13,  63 => 12,  60 => 11,  58 => 6,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"content-card\">
    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.date, {
                        'attr': {
                            'class': 'form-control',
                            'placeholder': 'Select Date and Time'
                        }
                    }) }}
                    {{ form_label(form.date) }}
                    {{ form_errors(form.date) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.destination, {
                        'attr': {
                            'class': 'form-select',
                            'placeholder': 'Select Destination'
                        }
                    }) }}
                    {{ form_label(form.destination) }}
                    {{ form_errors(form.destination) }}
                </div>
            </div>
            
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.seats, {
                        'attr': {
                            'class': 'form-control',
                            'placeholder': 'Number of Seats',
                            'min': '1',
                            'max': '10'
                        }
                    }) }}
                    {{ form_label(form.seats) }}
                    {{ form_errors(form.seats) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.transport, {
                        'attr': {
                            'class': 'form-select',
                            'placeholder': 'Select Transport'
                        }
                    }) }}
                    {{ form_label(form.transport) }}
                    {{ form_errors(form.transport) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.driver, {
                        'attr': {
                            'class': 'form-select',
                            'placeholder': 'Select Driver'
                        }
                    }) }}
                    {{ form_label(form.driver) }}
                    {{ form_errors(form.driver) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(form.agent, {
                        'attr': {
                            'class': 'form-select',
                            'placeholder': 'Select Agent'
                        }
                    }) }}
                    {{ form_label(form.agent) }}
                    {{ form_errors(form.agent) }}
                </div>
            </div>
        </div>
        
        <div class=\"text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-primary py-3 px-5\">
                <i class=\"bi bi-check-circle me-2\"></i>{{ button_label|default('Create Reservation') }}
            </button>
            {% if form.vars.value.id %}
                <a href=\"{{ path('app_reservation_delete', {'id': form.vars.value.id}) }}\" 
                   class=\"btn btn-danger py-3 px-5 ms-2\"
                   onclick=\"return confirm('Are you sure you want to delete this reservation?')\">
                    <i class=\"bi bi-trash me-2\"></i>Delete Reservation
                </a>
            {% endif %}
        </div>
    {{ form_end(form) }}
</div>

<style>
.form-floating {
    position: relative;
    margin-bottom: 1.5rem;
}

.form-floating > label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    padding: 1rem .75rem;
    pointer-events: none;
    border: 1px solid transparent;
    transform-origin: 0 0;
    transition: opacity .1s ease-in-out,transform .1s ease-in-out;
}

.form-floating > .form-control,
.form-floating > .form-select {
    height: calc(3.5rem + 2px);
    padding: 1rem .75rem;
}

.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 0.25rem rgba(0, 102, 204, 0.25);
}

.form-floating > .form-control::-webkit-calendar-picker-indicator {
    filter: invert(0.5);
}
</style>
", "registration/reservation/_form.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\registration\\reservation\\_form.html.twig");
    }
}
