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

/* admin/banned_users.html.twig */
class __TwigTemplate_2c6edfd8ce10e9b4e41431ef07a70d11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/banned_users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/banned_users.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/banned_users.html.twig", 1);
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

        yield "Banned Users - Movable";
        
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
                <h5 class=\"mb-0\">Banned Users</h5>
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"bx bx-arrow-back me-1\"></i> Back to Users
                </a>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Ban Reason</th>
                            <th>Ban Date</th>
                            <th>Ban Expiry</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            yield "                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar avatar-sm me-3\">
                                            <span class=\"avatar-initial rounded-circle bg-primary\">
                                                ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 33)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 33)), "html", null, true);
            yield "
                                            </span>
                                        </div>
                                        <div>
                                            ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 37), "html", null, true);
            yield "
                                            <div class=\"small text-muted\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 38), "html", null, true);
            yield "</div>
                                        </div>
                                    </div>
                                </td>
                                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "banReason", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                <td>";
            // line 43
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "banExpiryDate", [], "any", false, false, false, 43)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "banExpiryDate", [], "any", false, false, false, 43), "Y-m-d H:i"), "html", null, true)) : (yield "Permanent"));
            yield "</td>
                                <td>
                                    ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "banExpiryDate", [], "any", false, false, false, 45)) {
                // line 46
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "banExpiryDate", [], "any", false, false, false, 46) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    // line 47
                    yield "                                            <span class=\"badge bg-label-success\">Expired</span>
                                        ";
                } else {
                    // line 49
                    yield "                                            <span class=\"badge bg-label-danger\">Active</span>
                                        ";
                }
                // line 51
                yield "                                    ";
            } else {
                // line 52
                yield "                                        <span class=\"badge bg-label-danger\">Permanent</span>
                                    ";
            }
            // line 54
            yield "                                </td>
                                <td>
                                    <a href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_unban", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\">
                                        <i class=\"bx bx-check-circle me-1\"></i> Unban User
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center\">No banned users found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "                    </tbody>
                </table>
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
        return "admin/banned_users.html.twig";
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
        return array (  210 => 66,  201 => 62,  190 => 56,  186 => 54,  182 => 52,  179 => 51,  175 => 49,  171 => 47,  168 => 46,  166 => 45,  161 => 43,  157 => 42,  150 => 38,  146 => 37,  138 => 33,  131 => 28,  126 => 27,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block title %}Banned Users - Movable{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Banned Users</h5>
                <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-secondary\">
                    <i class=\"bx bx-arrow-back me-1\"></i> Back to Users
                </a>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Ban Reason</th>
                            <th>Ban Date</th>
                            <th>Ban Expiry</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in users %}
                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar avatar-sm me-3\">
                                            <span class=\"avatar-initial rounded-circle bg-primary\">
                                                {{ user.firstName|first }}{{ user.lastName|first }}
                                            </span>
                                        </div>
                                        <div>
                                            {{ user.fullName }}
                                            <div class=\"small text-muted\">{{ user.email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ user.banReason }}</td>
                                <td>{{ user.banExpiryDate ? user.banExpiryDate|date('Y-m-d H:i') : 'Permanent' }}</td>
                                <td>
                                    {% if user.banExpiryDate %}
                                        {% if user.banExpiryDate < date() %}
                                            <span class=\"badge bg-label-success\">Expired</span>
                                        {% else %}
                                            <span class=\"badge bg-label-danger\">Active</span>
                                        {% endif %}
                                    {% else %}
                                        <span class=\"badge bg-label-danger\">Permanent</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <a href=\"{{ path('app_admin_user_unban', {'id': user.id}) }}\" class=\"btn btn-sm btn-success\">
                                        <i class=\"bx bx-check-circle me-1\"></i> Unban User
                                    </a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center\">No banned users found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/banned_users.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\banned_users.html.twig");
    }
}
