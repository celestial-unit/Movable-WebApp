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

/* admin/users/edit.html.twig */
class __TwigTemplate_be4154fe1e41f8378c3164ed2555fb1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/users/edit.html.twig", 1);
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

        yield "Edit User - Movable";
        
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
                <h5 class=\"mb-0\">Edit User</h5>
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
                                    ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "role", [], "any", false, false, false, 28) == "ADMIN")) {
            // line 29
            yield "                                        <span class=\"badge bg-label-success\">Administrator</span>
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "role", [], "any", false, false, false, 30) == "DRIVER")) {
            // line 31
            yield "                                        <span class=\"badge bg-label-info\">Driver</span>
                                    ";
        } else {
            // line 33
            yield "                                        <span class=\"badge bg-label-primary\">User</span>
                                    ";
        }
        // line 35
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form method=\"post\" action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("edit" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42))), "html", null, true);
        yield "\">
                    
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\">First Name</label>
                            <input type=\"text\" name=\"firstName\" class=\"form-control\" 
                                   value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "firstName", [], "any", false, false, false, 48), "html", null, true);
        yield "\" required>
                        </div>

                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\">Last Name</label>
                            <input type=\"text\" name=\"lastName\" class=\"form-control\" 
                                   value=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "lastName", [], "any", false, false, false, 54), "html", null, true);
        yield "\" required>
                        </div>

                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\">Email</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" 
                                   value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), "html", null, true);
        yield "\" required>
                        </div>

                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\">Password</label>
                            <input type=\"password\" name=\"password\" class=\"form-control\" 
                                   placeholder=\"Leave blank to keep current password\">
                            <div class=\"form-text\">Only fill this if you want to change the user's password.</div>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label d-block\">Account Status</label>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"status\" 
                                   id=\"status-active\" value=\"active\" 
                                   ";
        // line 76
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "isBanned", [], "any", false, false, false, 76)) {
            yield "checked";
        }
        yield ">
                            <label class=\"form-check-label\" for=\"status-active\">Active</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"status\" 
                                   id=\"status-banned\" value=\"banned\" 
                                   ";
        // line 82
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })()), "isBanned", [], "any", false, false, false, 82)) {
            yield "checked";
        }
        yield ">
                            <label class=\"form-check-label\" for=\"status-banned\">Banned</label>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label\">Role</label>
                        <select name=\"role\" class=\"form-select\">
                            <option value=\"USER\" ";
        // line 90
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "role", [], "any", false, false, false, 90) == "USER")) {
            yield "selected";
        }
        yield ">Regular User</option>
                            <option value=\"DRIVER\" ";
        // line 91
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "role", [], "any", false, false, false, 91) == "DRIVER")) {
            yield "selected";
        }
        yield ">Driver</option>
                            <option value=\"ADMIN\" ";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "role", [], "any", false, false, false, 92) == "ADMIN")) {
            yield "selected";
        }
        yield ">Administrator</option>
                        </select>
                    </div>

                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-save me-1\"></i> Save Changes
                        </button>
                        <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-secondary\">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- User Activity -->
        <div class=\"card mt-4\">
            <div class=\"card-header\">
                <h5 class=\"card-title mb-0\">User Activity</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <small class=\"text-muted d-block\">Last Login</small>
                            <span>";
        // line 116
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 116, $this->source); })()), "lastLogin", [], "any", false, false, false, 116)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 116, $this->source); })()), "lastLogin", [], "any", false, false, false, 116), "Y-m-d H:i"), "html", null, true)) : (yield "Never"));
        yield "</span>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <small class=\"text-muted d-block\">Account Created</small>
                            <span>";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 122, $this->source); })()), "createdAt", [], "any", false, false, false, 122), "Y-m-d H:i"), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <small class=\"text-muted d-block\">Claims Submitted</small>
                            <span>";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "reclamations", [], "any", false, false, false, 128)), "html", null, true);
        yield "</span>
                        </div>
                    </div>
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
        return "admin/users/edit.html.twig";
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
        return array (  296 => 128,  287 => 122,  278 => 116,  259 => 100,  246 => 92,  240 => 91,  234 => 90,  221 => 82,  210 => 76,  191 => 60,  182 => 54,  173 => 48,  164 => 42,  160 => 41,  152 => 35,  148 => 33,  144 => 31,  142 => 30,  139 => 29,  137 => 28,  132 => 26,  128 => 25,  120 => 21,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block title %}Edit User - Movable{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Edit User</h5>
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

                <form method=\"post\" action=\"{{ path('app_admin_user_edit', {'id': user.id}) }}\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit' ~ user.id) }}\">
                    
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\">First Name</label>
                            <input type=\"text\" name=\"firstName\" class=\"form-control\" 
                                   value=\"{{ user.firstName }}\" required>
                        </div>

                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\">Last Name</label>
                            <input type=\"text\" name=\"lastName\" class=\"form-control\" 
                                   value=\"{{ user.lastName }}\" required>
                        </div>

                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\">Email</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" 
                                   value=\"{{ user.email }}\" required>
                        </div>

                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\">Password</label>
                            <input type=\"password\" name=\"password\" class=\"form-control\" 
                                   placeholder=\"Leave blank to keep current password\">
                            <div class=\"form-text\">Only fill this if you want to change the user's password.</div>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label d-block\">Account Status</label>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"status\" 
                                   id=\"status-active\" value=\"active\" 
                                   {% if not user.isBanned %}checked{% endif %}>
                            <label class=\"form-check-label\" for=\"status-active\">Active</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"status\" 
                                   id=\"status-banned\" value=\"banned\" 
                                   {% if user.isBanned %}checked{% endif %}>
                            <label class=\"form-check-label\" for=\"status-banned\">Banned</label>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label\">Role</label>
                        <select name=\"role\" class=\"form-select\">
                            <option value=\"USER\" {% if user.role == 'USER' %}selected{% endif %}>Regular User</option>
                            <option value=\"DRIVER\" {% if user.role == 'DRIVER' %}selected{% endif %}>Driver</option>
                            <option value=\"ADMIN\" {% if user.role == 'ADMIN' %}selected{% endif %}>Administrator</option>
                        </select>
                    </div>

                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary me-2\">
                            <i class=\"bx bx-save me-1\"></i> Save Changes
                        </button>
                        <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-secondary\">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- User Activity -->
        <div class=\"card mt-4\">
            <div class=\"card-header\">
                <h5 class=\"card-title mb-0\">User Activity</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <small class=\"text-muted d-block\">Last Login</small>
                            <span>{{ user.lastLogin ? user.lastLogin|date('Y-m-d H:i') : 'Never' }}</span>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <small class=\"text-muted d-block\">Account Created</small>
                            <span>{{ user.createdAt|date('Y-m-d H:i') }}</span>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <small class=\"text-muted d-block\">Claims Submitted</small>
                            <span>{{ user.reclamations|length }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/users/edit.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\users\\edit.html.twig");
    }
}
