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

/* registration/reservation/edit.html.twig */
class __TwigTemplate_6dca1e9e0973390630b989b5922121e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/reservation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/reservation/edit.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "registration/reservation/edit.html.twig", 1);
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

        yield "Edit Reservation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Make a Reservation</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">New Reservation</li>
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

    // line 22
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

        // line 23
        yield "<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
            <h1 class=\"mb-5\">Edit Reservation #";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        yield "</h1>
        </div>

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"card shadow-sm border-0 rounded-4\">
                        <div class=\"card-header bg-primary text-white rounded-top-4\">
                            <h4 class=\"mb-0\">Reservation Details</h4>
                            <span class=\"badge bg-";
        // line 35
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35) == "approved")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35) == "rejected")) ? ("danger") : ("warning"))));
        yield "\">
                                ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 36, $this->source); })()), "status", [], "any", false, false, false, 36)), "html", null, true);
        yield "
                            </span>
                        </div>
                        <div class=\"card-body p-4\">
                            ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
        yield "
                                <div class=\"row g-3\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating\">
                                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "date", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Select Date"]]);
        // line 49
        yield "
                                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "date", [], "any", false, false, false, 50), 'label');
        yield "
                                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "date", [], "any", false, false, false, 51), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating\">
                                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "destination", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Select Destination"]]);
        // line 62
        yield "
                                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "destination", [], "any", false, false, false, 63), 'label');
        yield "
                                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "destination", [], "any", false, false, false, 64), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating\">
                                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "seats", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Number of Seats", "min" => 1]]);
        // line 76
        yield "
                                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "seats", [], "any", false, false, false, 77), 'label');
        yield "
                                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "seats", [], "any", false, false, false, 78), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating\">
                                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "paymentMode", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Payment Mode"]]);
        // line 89
        yield "
                                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "paymentMode", [], "any", false, false, false, 90), 'label');
        yield "
                                            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "paymentMode", [], "any", false, false, false, 91), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating\">
                                            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "transport", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Select Transport"]]);
        // line 102
        yield "
                                            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "transport", [], "any", false, false, false, 103), 'label');
        yield "
                                            ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "transport", [], "any", false, false, false, 104), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating\">
                                            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "agent", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Select Agent"]]);
        // line 115
        yield "
                                            ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "agent", [], "any", false, false, false, 116), 'label');
        yield "
                                            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "agent", [], "any", false, false, false, 117), 'errors');
        yield "
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-12 mt-4\">
                                        <div class=\"d-flex justify-content-end gap-3\">
                                            <a href=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123)]), "html", null, true);
        yield "\" class=\"btn btn-secondary px-4\">
                                                <i class=\"fas fa-times me-2\"></i> Cancel
                                            </a>
                                            <button type=\"submit\" class=\"btn btn-primary px-4\">
                                                <i class=\"fas fa-save me-2\"></i> Save Changes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            ";
        // line 132
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border: 1px solid rgba(0,0,0,.125);
    }
    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 1.5rem;
    }
    .form-floating > label {
        padding: 1rem 0.75rem;
    }
    .form-control, .form-select {
        height: calc(3.5rem + 2px);
        padding: 1rem 0.75rem;
    }
    .form-control:focus, .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.25rem rgba(0, 102, 204, 0.25);
    }
</style>
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
        return "registration/reservation/edit.html.twig";
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
        return array (  300 => 132,  288 => 123,  279 => 117,  275 => 116,  272 => 115,  270 => 110,  261 => 104,  257 => 103,  254 => 102,  252 => 97,  243 => 91,  239 => 90,  236 => 89,  234 => 84,  225 => 78,  221 => 77,  218 => 76,  216 => 70,  207 => 64,  203 => 63,  200 => 62,  198 => 57,  189 => 51,  185 => 50,  182 => 49,  180 => 44,  173 => 40,  166 => 36,  162 => 35,  150 => 26,  145 => 23,  132 => 22,  112 => 13,  102 => 5,  89 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Edit Reservation #{{ reservation.id }}{% endblock %}
{% block hero_banner %}
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Make a Reservation</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">New Reservation</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}
{% block content %}
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
            <h1 class=\"mb-5\">Edit Reservation #{{ reservation.id }}</h1>
        </div>

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"card shadow-sm border-0 rounded-4\">
                        <div class=\"card-header bg-primary text-white rounded-top-4\">
                            <h4 class=\"mb-0\">Reservation Details</h4>
                            <span class=\"badge bg-{{ reservation.status == 'approved' ? 'success' : (reservation.status == 'rejected' ? 'danger' : 'warning') }}\">
                                {{ reservation.status|upper }}
                            </span>
                        </div>
                        <div class=\"card-body p-4\">
                            {{ form_start(form) }}
                                <div class=\"row g-3\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating\">
                                            {{ form_widget(form.date, {
                                                'attr': {
                                                    'class': 'form-control',
                                                    'placeholder': 'Select Date'
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
                                                    'min': 1
                                                }
                                            }) }}
                                            {{ form_label(form.seats) }}
                                            {{ form_errors(form.seats) }}
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-6\">
                                        <div class=\"form-floating\">
                                            {{ form_widget(form.paymentMode, {
                                                'attr': {
                                                    'class': 'form-select',
                                                    'placeholder': 'Payment Mode'
                                                }
                                            }) }}
                                            {{ form_label(form.paymentMode) }}
                                            {{ form_errors(form.paymentMode) }}
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
                                    
                                    <div class=\"col-12 mt-4\">
                                        <div class=\"d-flex justify-content-end gap-3\">
                                            <a href=\"{{ path('app_reservation_show', {'id': reservation.id}) }}\" class=\"btn btn-secondary px-4\">
                                                <i class=\"fas fa-times me-2\"></i> Cancel
                                            </a>
                                            <button type=\"submit\" class=\"btn btn-primary px-4\">
                                                <i class=\"fas fa-save me-2\"></i> Save Changes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border: 1px solid rgba(0,0,0,.125);
    }
    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 1.5rem;
    }
    .form-floating > label {
        padding: 1rem 0.75rem;
    }
    .form-control, .form-select {
        height: calc(3.5rem + 2px);
        padding: 1rem 0.75rem;
    }
    .form-control:focus, .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.25rem rgba(0, 102, 204, 0.25);
    }
</style>
{% endblock %}", "registration/reservation/edit.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\registration\\reservation\\edit.html.twig");
    }
}
