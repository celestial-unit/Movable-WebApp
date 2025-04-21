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

/* admin/create_user.html.twig */
class __TwigTemplate_52623a9d37b4b0eca1e803ccf2a330dc extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/create_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/create_user.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/create_user.html.twig", 1);
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
    <div class=\"col-md-12\">
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Create New User</h5>
                <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"bx bx-arrow-back me-1\"></i> Back to Users List
                </a>
            </div>
            <div class=\"card-body\">
                <form method=\"POST\" id=\"createUserForm\">
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <label for=\"firstName\" class=\"form-label\">First Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"firstName\" required>
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"lastName\" class=\"form-label\">Last Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"lastName\" name=\"lastName\" required>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">Email</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                    </div>
                    
                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" required 
                            minlength=\"6\" placeholder=\"Minimum 6 characters\">
                    </div>
                    
                    <div class=\"mb-3\">
                        <label for=\"role\" class=\"form-label\">Role</label>
                        <select class=\"form-select\" id=\"role\" name=\"role\" required>
                            <option value=\"USER\">User</option>
                            <option value=\"DRIVER\">Driver</option>
                            <option value=\"ADMIN\">Administrator</option>
                        </select>
                    </div>
                    
                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"bx bx-user-plus me-1\"></i> Create User
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('createUserForm');
        
        form.addEventListener('submit', function(event) {
            let isValid = true;
            
            // Validate first name
            const firstName = document.getElementById('firstName');
            if (!firstName.value.trim()) {
                firstName.classList.add('is-invalid');
                isValid = false;
            } else {
                firstName.classList.remove('is-invalid');
            }
            
            // Validate last name
            const lastName = document.getElementById('lastName');
            if (!lastName.value.trim()) {
                lastName.classList.add('is-invalid');
                isValid = false;
            } else {
                lastName.classList.remove('is-invalid');
            }
            
            // Validate email
            const email = document.getElementById('email');
            const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            if (!email.value.trim() || !emailRegex.test(email.value)) {
                email.classList.add('is-invalid');
                isValid = false;
            } else {
                email.classList.remove('is-invalid');
            }
            
            // Validate password
            const password = document.getElementById('password');
            if (!password.value.trim() || password.value.length < 6) {
                password.classList.add('is-invalid');
                isValid = false;
            } else {
                password.classList.remove('is-invalid');
            }
            
            if (!isValid) {
                event.preventDefault();
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
        return "admin/create_user.html.twig";
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
        return array (  216 => 75,  203 => 74,  144 => 25,  136 => 19,  122 => 14,  117 => 13,  112 => 12,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
    <div class=\"col-md-12\">
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Create New User</h5>
                <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-secondary\">
                    <i class=\"bx bx-arrow-back me-1\"></i> Back to Users List
                </a>
            </div>
            <div class=\"card-body\">
                <form method=\"POST\" id=\"createUserForm\">
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            <label for=\"firstName\" class=\"form-label\">First Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"firstName\" required>
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"lastName\" class=\"form-label\">Last Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"lastName\" name=\"lastName\" required>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">Email</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                    </div>
                    
                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" required 
                            minlength=\"6\" placeholder=\"Minimum 6 characters\">
                    </div>
                    
                    <div class=\"mb-3\">
                        <label for=\"role\" class=\"form-label\">Role</label>
                        <select class=\"form-select\" id=\"role\" name=\"role\" required>
                            <option value=\"USER\">User</option>
                            <option value=\"DRIVER\">Driver</option>
                            <option value=\"ADMIN\">Administrator</option>
                        </select>
                    </div>
                    
                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"bx bx-user-plus me-1\"></i> Create User
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('createUserForm');
        
        form.addEventListener('submit', function(event) {
            let isValid = true;
            
            // Validate first name
            const firstName = document.getElementById('firstName');
            if (!firstName.value.trim()) {
                firstName.classList.add('is-invalid');
                isValid = false;
            } else {
                firstName.classList.remove('is-invalid');
            }
            
            // Validate last name
            const lastName = document.getElementById('lastName');
            if (!lastName.value.trim()) {
                lastName.classList.add('is-invalid');
                isValid = false;
            } else {
                lastName.classList.remove('is-invalid');
            }
            
            // Validate email
            const email = document.getElementById('email');
            const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            if (!email.value.trim() || !emailRegex.test(email.value)) {
                email.classList.add('is-invalid');
                isValid = false;
            } else {
                email.classList.remove('is-invalid');
            }
            
            // Validate password
            const password = document.getElementById('password');
            if (!password.value.trim() || password.value.length < 6) {
                password.classList.add('is-invalid');
                isValid = false;
            } else {
                password.classList.remove('is-invalid');
            }
            
            if (!isValid) {
                event.preventDefault();
            }
        });
    });
</script>
{% endblock %}

", "admin/create_user.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\create_user.html.twig");
    }
}
