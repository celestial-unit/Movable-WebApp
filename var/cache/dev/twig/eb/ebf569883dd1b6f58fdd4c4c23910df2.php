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

/* agent/rate.html.twig */
class __TwigTemplate_a384a5cee743f708d62c15d0d97a78b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/rate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/rate.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "agent/rate.html.twig", 1);
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

        yield "Rate Agent";
        
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
        yield "<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Rate Our Agent</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_list");
        yield "\">Agents</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Rate Agent</li>
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

    // line 25
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

        // line 26
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 32, $this->source); })()), "pictureP", [], "any", false, false, false, 32)), "html", null, true);
        yield "\" class=\"rounded-circle me-3\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
        yield "\" style=\"width: 60px; height: 60px; object-fit: cover;\">
                        <h5 class=\"mb-0\">Rate ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
        yield "</h5>
                    </div>
                </div>
                <div class=\"card-body\">
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 38
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 39
                yield "                            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                                ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "
                    ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                    
                    <div class=\"mb-4 text-center\">
                        <div class=\"rating-stars\">
                            <label class=\"star-label\">Rating:</label>
                            <div class=\"stars\">
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 53
            yield "                                    <input type=\"radio\" id=\"star";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "rating", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "full_name", [], "any", false, false, false, 53), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "rating", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "value", [], "any", false, false, false, 53) == $context["i"])) {
                yield "checked";
            }
            yield " class=\"star-input\">
                                    <label for=\"star";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" class=\"star\"><i class=\"bi bi-star-fill\"></i></label>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                            </div>
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "rating", [], "any", false, false, false, 57), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "comment", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Your Review"]);
        yield "
                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "comment", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "rows" => "5", "placeholder" => "Tell us about your experience with this agent...", "required" => "required"]]);
        yield "
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "comment", [], "any", false, false, false, 64), 'errors');
        yield "
                    </div>

                    <div class=\"text-center mt-4\">
                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "submit", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "btn btn-primary px-4"]]);
        yield "
                        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_list");
        yield "\" class=\"btn btn-outline-secondary px-4 ms-2\">Cancel</a>
                    </div>

                    ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .rating-stars {
        margin: 20px 0;
    }
    
    .star-label {
        display: block;
        margin-bottom: 10px;
        font-weight: 500;
    }
    
    .stars {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center;
    }
    
    .star-input {
        display: none;
    }
    
    .star {
        cursor: pointer;
        font-size: 30px;
        padding: 0 5px;
        color: #ccc;
        transition: color 0.2s;
    }
    
    .star:hover,
    .star:hover ~ .star,
    .star-input:checked ~ .star {
        color: #FFD700;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form validation
        const form = document.querySelector('.needs-validation');
        
        form.addEventListener('submit', function(event) {
            const ratingInputs = document.querySelectorAll('input[name=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "rating", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "full_name", [], "any", false, false, false, 121), "html", null, true);
        yield "\"]');
            const commentInput = document.querySelector('textarea[name=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "comment", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "full_name", [], "any", false, false, false, 122), "html", null, true);
        yield "\"]');
            let ratingSelected = false;
            
            ratingInputs.forEach(input => {
                if (input.checked) {
                    ratingSelected = true;
                }
            });
            
            if (!ratingSelected) {
                event.preventDefault();
                event.stopPropagation();
                alert('Please select a rating before submitting.');
            }
            
            if (!commentInput.value.trim()) {
                event.preventDefault();
                event.stopPropagation();
                alert('Please provide a comment before submitting.');
            }
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
        return "agent/rate.html.twig";
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
        return array (  328 => 122,  324 => 121,  272 => 72,  266 => 69,  262 => 68,  255 => 64,  251 => 63,  247 => 62,  239 => 57,  236 => 56,  228 => 54,  215 => 53,  211 => 52,  202 => 46,  199 => 45,  193 => 44,  183 => 40,  178 => 39,  173 => 38,  169 => 37,  162 => 33,  156 => 32,  148 => 26,  135 => 25,  115 => 15,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Rate Agent{% endblock %}

{% block hero_banner %}
<div class=\"container-xxl py-5 bg-primary hero-header mb-5\">
    <div class=\"container my-5 py-5 px-lg-5\">
        <div class=\"row g-5 py-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"text-white animated zoomIn\">Rate Our Agent</h1>
                <hr class=\"bg-white mx-auto mt-0\" style=\"width: 90px;\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb justify-content-center\">
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('agent_list') }}\">Agents</a></li>
                        <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Rate Agent</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block content %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"{{ asset(agent.pictureP) }}\" class=\"rounded-circle me-3\" alt=\"{{ agent.name }}\" style=\"width: 60px; height: 60px; object-fit: cover;\">
                        <h5 class=\"mb-0\">Rate {{ agent.name }}</h5>
                    </div>
                </div>
                <div class=\"card-body\">
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                    {% endfor %}

                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                    
                    <div class=\"mb-4 text-center\">
                        <div class=\"rating-stars\">
                            <label class=\"star-label\">Rating:</label>
                            <div class=\"stars\">
                                {% for i in 1..5 %}
                                    <input type=\"radio\" id=\"star{{ i }}\" name=\"{{ form.rating.vars.full_name }}\" value=\"{{ i }}\" {% if form.rating.vars.value == i %}checked{% endif %} class=\"star-input\">
                                    <label for=\"star{{ i }}\" class=\"star\"><i class=\"bi bi-star-fill\"></i></label>
                                {% endfor %}
                            </div>
                            {{ form_errors(form.rating) }}
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.comment, 'Your Review', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.comment, {'attr': {'class': 'form-control', 'rows': '5', 'placeholder': 'Tell us about your experience with this agent...', 'required': 'required'}}) }}
                        {{ form_errors(form.comment) }}
                    </div>

                    <div class=\"text-center mt-4\">
                        {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary px-4'}}) }}
                        <a href=\"{{ path('agent_list') }}\" class=\"btn btn-outline-secondary px-4 ms-2\">Cancel</a>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .rating-stars {
        margin: 20px 0;
    }
    
    .star-label {
        display: block;
        margin-bottom: 10px;
        font-weight: 500;
    }
    
    .stars {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center;
    }
    
    .star-input {
        display: none;
    }
    
    .star {
        cursor: pointer;
        font-size: 30px;
        padding: 0 5px;
        color: #ccc;
        transition: color 0.2s;
    }
    
    .star:hover,
    .star:hover ~ .star,
    .star-input:checked ~ .star {
        color: #FFD700;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form validation
        const form = document.querySelector('.needs-validation');
        
        form.addEventListener('submit', function(event) {
            const ratingInputs = document.querySelectorAll('input[name=\"{{ form.rating.vars.full_name }}\"]');
            const commentInput = document.querySelector('textarea[name=\"{{ form.comment.vars.full_name }}\"]');
            let ratingSelected = false;
            
            ratingInputs.forEach(input => {
                if (input.checked) {
                    ratingSelected = true;
                }
            });
            
            if (!ratingSelected) {
                event.preventDefault();
                event.stopPropagation();
                alert('Please select a rating before submitting.');
            }
            
            if (!commentInput.value.trim()) {
                event.preventDefault();
                event.stopPropagation();
                alert('Please provide a comment before submitting.');
            }
        });
    });
</script>
{% endblock %}", "agent/rate.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\agent\\rate.html.twig");
    }
}
