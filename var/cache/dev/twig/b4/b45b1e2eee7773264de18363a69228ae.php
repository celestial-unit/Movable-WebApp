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

/* admin/users/create.html.twig */
class __TwigTemplate_3483dccb43dc1760cfd5faa5da83a07c extends Template
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
        return "admin/layouts/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/create.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/users/create.html.twig", 1);
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

        yield "Create New User - Admin Dashboard";
        
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
        yield "<h4 class=\"fw-bold py-3 mb-4\">
    <span class=\"text-muted fw-light\">Admin / Users /</span> Create New User
</h4>

<!-- Flash Messages -->
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 12
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible\" role=\"alert\">
            ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
<div class=\"row\">
    <div class=\"col-xl-12\">
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Create New User</h5>
                <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"bx bx-arrow-back me-1\"></i> Back to Users
                </a>
            </div>
            <div class=\"card-body\">
                ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        yield "
                    <div class=\"mb-3\">
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "firstName", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label"], "label" => "First Name"]);
        yield "
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "firstName", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter first name"]]);
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "firstName", [], "any", false, false, false, 34), 'errors');
        yield "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lastName", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Last Name"]);
        yield "
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "lastName", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter last name"]]);
        yield "
                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "lastName", [], "any", false, false, false, 39), 'errors');
        yield "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter email address"]]);
        yield "
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'errors');
        yield "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "plainPassword", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Password"]);
        yield "
                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "plainPassword", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter password"]]);
        yield "
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "plainPassword", [], "any", false, false, false, 49), 'errors');
        yield "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "role", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Role"]);
        yield "
                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "role", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "role", [], "any", false, false, false, 54), 'errors');
        yield "
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Create User</button>
                ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
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
        return "admin/users/create.html.twig";
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
        return array (  226 => 57,  220 => 54,  216 => 53,  212 => 52,  206 => 49,  202 => 48,  198 => 47,  192 => 44,  188 => 43,  184 => 42,  178 => 39,  174 => 38,  170 => 37,  164 => 34,  160 => 33,  156 => 32,  151 => 30,  143 => 25,  135 => 19,  121 => 14,  116 => 13,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layouts/admin.html.twig' %}

{% block title %}Create New User - Admin Dashboard{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">
    <span class=\"text-muted fw-light\">Admin / Users /</span> Create New User
</h4>

<!-- Flash Messages -->
{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }} alert-dismissible\" role=\"alert\">
            {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}
{% endfor %}

<div class=\"row\">
    <div class=\"col-xl-12\">
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Create New User</h5>
                <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-secondary\">
                    <i class=\"bx bx-arrow-back me-1\"></i> Back to Users
                </a>
            </div>
            <div class=\"card-body\">
                {{ form_start(form) }}
                    <div class=\"mb-3\">
                        {{ form_label(form.firstName, 'First Name', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.firstName, {'attr': {'class': 'form-control', 'placeholder': 'Enter first name'}}) }}
                        {{ form_errors(form.firstName) }}
                    </div>
                    <div class=\"mb-3\">
                        {{ form_label(form.lastName, 'Last Name', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.lastName, {'attr': {'class': 'form-control', 'placeholder': 'Enter last name'}}) }}
                        {{ form_errors(form.lastName) }}
                    </div>
                    <div class=\"mb-3\">
                        {{ form_label(form.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Enter email address'}}) }}
                        {{ form_errors(form.email) }}
                    </div>
                    <div class=\"mb-3\">
                        {{ form_label(form.plainPassword, 'Password', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Enter password'}}) }}
                        {{ form_errors(form.plainPassword) }}
                    </div>
                    <div class=\"mb-3\">
                        {{ form_label(form.role, 'Role', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.role, {'attr': {'class': 'form-select'}}) }}
                        {{ form_errors(form.role) }}
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Create User</button>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}

", "admin/users/create.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\users\\create.html.twig");
    }
}
