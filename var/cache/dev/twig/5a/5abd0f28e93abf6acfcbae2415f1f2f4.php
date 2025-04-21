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

/* admin/roles.html.twig */
class __TwigTemplate_dc0a0c787ccb5ff259b2a0a9018f7036 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roles.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/roles.html.twig", 1);
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

        yield "Change User Role - Movable";
        
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
        yield "<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Change User Role</h5>
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"bx bx-arrow-back me-1\"></i> Back to Users
                </a>
            </div>
            <div class=\"card-body\">
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"avatar avatar-lg me-3\">
                                <span class=\"avatar-initial rounded-circle bg-primary\">
                                    ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "firstName", [], "any", false, false, false, 21)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "lastName", [], "any", false, false, false, 21)), "html", null, true);
        yield "
                                </span>
                            </div>
                            <div>
                                <h5 class=\"mb-0\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "fullName", [], "any", false, false, false, 25), "html", null, true);
        yield "</h5>
                                <div class=\"text-muted\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
        yield "</div>
                                <div class=\"mt-1\">
                                    Current Role: 
                                    ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "role", [], "any", false, false, false, 29) == "ADMIN")) {
            // line 30
            yield "                                        <span class=\"badge bg-label-success\">Administrator</span>
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "role", [], "any", false, false, false, 31) == "DRIVER")) {
            // line 32
            yield "                                        <span class=\"badge bg-label-info\">Driver</span>
                                    ";
        } else {
            // line 34
            yield "                                        <span class=\"badge bg-label-primary\">User</span>
                                    ";
        }
        // line 36
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form method=\"post\" action=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_change_role", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("change_role" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43))), "html", null, true);
        yield "\">
                    
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-check custom-option custom-option-basic\">
                                <input name=\"role\" class=\"form-check-input\" type=\"radio\" value=\"USER\" 
                                       id=\"role-user\" ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "role", [], "any", false, false, false, 49) == "USER")) {
            yield "checked";
        }
        yield ">
                                <label class=\"form-check-label custom-option-content\" for=\"role-user\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bx bx-user fs-3 me-2\"></i>
                                        <div>
                                            <span class=\"custom-option-header\">
                                                <span class=\"h6 mb-0\">Regular User</span>
                                            </span>
                                            <span class=\"custom-option-body\">
                                                Basic access to platform features
                                            </span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-check custom-option custom-option-basic\">
                                <input name=\"role\" class=\"form-check-input\" type=\"radio\" value=\"DRIVER\" 
                                       id=\"role-driver\" ";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "role", [], "any", false, false, false, 69) == "DRIVER")) {
            yield "checked";
        }
        yield ">
                                <label class=\"form-check-label custom-option-content\" for=\"role-driver\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bx bx-car fs-3 me-2\"></i>
                                        <div>
                                            <span class=\"custom-option-header\">
                                                <span class=\"h6 mb-0\">Driver</span>
                                            </span>
                                            <span class=\"custom-option-body\">
                                                Access to driver-specific features
                                            </span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-check custom-option custom-option-basic\">
                                <input name=\"role\" class=\"form-check-input\" type=\"radio\" value=\"ADMIN\" 
                                       id=\"role-admin\" ";
        // line 89
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "role", [], "any", false, false, false, 89) == "ADMIN")) {
            yield "checked";
        }
        yield ">
                                <label class=\"form-check-label custom-option-content\" for=\"role-admin\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bx bx-shield fs-3 me-2\"></i>
                                        <div>
                                            <span class=\"custom-option-header\">
                                                <span class=\"h6 mb-0\">Administrator</span>
                                            </span>
                                            <span class=\"custom-option-body\">
                                                Full access to all platform features
                                            </span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class=\"alert alert-warning mt-4\">
                        <div class=\"d-flex\">
                            <i class=\"bx bx-error-circle fs-4 me-2\"></i>
                            <div>
                                <h6 class=\"alert-heading mb-1\">Warning</h6>
                                <p class=\"mb-0\">
                                    Changing a user's role will affect their access permissions.
                                    Make sure you understand the implications before proceeding.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-check me-1\"></i> Change Role
                        </button>
                        <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-secondary\">Cancel</a>
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

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 134
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.custom-option {
    padding: 1rem;
    border: 1px solid #d9dee3;
    border-radius: 0.375rem;
    margin-bottom: 1rem;
    cursor: pointer;
    transition: all 0.2s ease;
}

.custom-option:hover {
    background-color: rgba(67, 89, 113, 0.04);
}

.custom-option-content {
    width: 100%;
    margin-bottom: 0;
}

.custom-option-header {
    display: block;
    margin-bottom: 0.25rem;
}

.custom-option-body {
    color: #697a8d;
    font-size: 0.9375rem;
}

.form-check-input:checked + .custom-option-content {
    border-color: #696cff;
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
        return "admin/roles.html.twig";
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
        return array (  297 => 134,  284 => 133,  265 => 124,  225 => 89,  200 => 69,  175 => 49,  166 => 43,  162 => 42,  154 => 36,  150 => 34,  146 => 32,  144 => 31,  141 => 30,  139 => 29,  133 => 26,  129 => 25,  121 => 21,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block title %}Change User Role - Movable{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Change User Role</h5>
                <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-secondary\">
                    <i class=\"bx bx-arrow-back me-1\"></i> Back to Users
                </a>
            </div>
            <div class=\"card-body\">
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"avatar avatar-lg me-3\">
                                <span class=\"avatar-initial rounded-circle bg-primary\">
                                    {{ user.firstName|first }}{{ user.lastName|first }}
                                </span>
                            </div>
                            <div>
                                <h5 class=\"mb-0\">{{ user.fullName }}</h5>
                                <div class=\"text-muted\">{{ user.email }}</div>
                                <div class=\"mt-1\">
                                    Current Role: 
                                    {% if user.role == 'ADMIN' %}
                                        <span class=\"badge bg-label-success\">Administrator</span>
                                    {% elseif user.role == 'DRIVER' %}
                                        <span class=\"badge bg-label-info\">Driver</span>
                                    {% else %}
                                        <span class=\"badge bg-label-primary\">User</span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form method=\"post\" action=\"{{ path('app_admin_user_change_role', {'id': user.id}) }}\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('change_role' ~ user.id) }}\">
                    
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-check custom-option custom-option-basic\">
                                <input name=\"role\" class=\"form-check-input\" type=\"radio\" value=\"USER\" 
                                       id=\"role-user\" {% if user.role == 'USER' %}checked{% endif %}>
                                <label class=\"form-check-label custom-option-content\" for=\"role-user\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bx bx-user fs-3 me-2\"></i>
                                        <div>
                                            <span class=\"custom-option-header\">
                                                <span class=\"h6 mb-0\">Regular User</span>
                                            </span>
                                            <span class=\"custom-option-body\">
                                                Basic access to platform features
                                            </span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-check custom-option custom-option-basic\">
                                <input name=\"role\" class=\"form-check-input\" type=\"radio\" value=\"DRIVER\" 
                                       id=\"role-driver\" {% if user.role == 'DRIVER' %}checked{% endif %}>
                                <label class=\"form-check-label custom-option-content\" for=\"role-driver\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bx bx-car fs-3 me-2\"></i>
                                        <div>
                                            <span class=\"custom-option-header\">
                                                <span class=\"h6 mb-0\">Driver</span>
                                            </span>
                                            <span class=\"custom-option-body\">
                                                Access to driver-specific features
                                            </span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-check custom-option custom-option-basic\">
                                <input name=\"role\" class=\"form-check-input\" type=\"radio\" value=\"ADMIN\" 
                                       id=\"role-admin\" {% if user.role == 'ADMIN' %}checked{% endif %}>
                                <label class=\"form-check-label custom-option-content\" for=\"role-admin\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bx bx-shield fs-3 me-2\"></i>
                                        <div>
                                            <span class=\"custom-option-header\">
                                                <span class=\"h6 mb-0\">Administrator</span>
                                            </span>
                                            <span class=\"custom-option-body\">
                                                Full access to all platform features
                                            </span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class=\"alert alert-warning mt-4\">
                        <div class=\"d-flex\">
                            <i class=\"bx bx-error-circle fs-4 me-2\"></i>
                            <div>
                                <h6 class=\"alert-heading mb-1\">Warning</h6>
                                <p class=\"mb-0\">
                                    Changing a user's role will affect their access permissions.
                                    Make sure you understand the implications before proceeding.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-check me-1\"></i> Change Role
                        </button>
                        <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-secondary\">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.custom-option {
    padding: 1rem;
    border: 1px solid #d9dee3;
    border-radius: 0.375rem;
    margin-bottom: 1rem;
    cursor: pointer;
    transition: all 0.2s ease;
}

.custom-option:hover {
    background-color: rgba(67, 89, 113, 0.04);
}

.custom-option-content {
    width: 100%;
    margin-bottom: 0;
}

.custom-option-header {
    display: block;
    margin-bottom: 0.25rem;
}

.custom-option-body {
    color: #697a8d;
    font-size: 0.9375rem;
}

.form-check-input:checked + .custom-option-content {
    border-color: #696cff;
}
</style>
{% endblock %}
", "admin/roles.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\roles.html.twig");
    }
}
