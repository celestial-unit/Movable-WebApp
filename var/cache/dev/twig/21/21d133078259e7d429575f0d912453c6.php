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

/* admin/ban_user.html.twig */
class __TwigTemplate_60434faf3bb124d5477a9c2fb11b3508 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ban_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ban_user.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/ban_user.html.twig", 1);
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

        yield "Ban User - Movable";
        
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
                <h5 class=\"mb-0\">Ban User</h5>
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
                            </div>
                        </div>
                    </div>
                </div>

                <form method=\"post\" action=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_ban", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("ban" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33))), "html", null, true);
        yield "\">
                    
                    <div class=\"mb-3\">
                        <label for=\"banReason\" class=\"form-label\">Ban Reason</label>
                        <textarea class=\"form-control\" id=\"banReason\" name=\"banReason\" rows=\"3\" required></textarea>
                        <div class=\"form-text\">Please provide a reason for banning this user.</div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"banDuration\" class=\"form-label\">Ban Duration</label>
                        <select class=\"form-select\" id=\"banDuration\" name=\"banDuration\">
                            <option value=\"permanent\">Permanent Ban</option>
                            <option value=\"24h\">24 Hours</option>
                            <option value=\"48h\">48 Hours</option>
                            <option value=\"7d\">7 Days</option>
                            <option value=\"30d\">30 Days</option>
                            <option value=\"custom\">Custom Duration</option>
                        </select>
                    </div>

                    <div id=\"customDuration\" class=\"mb-3\" style=\"display: none;\">
                        <label for=\"customDays\" class=\"form-label\">Custom Duration (days)</label>
                        <input type=\"number\" class=\"form-control\" id=\"customDays\" name=\"customDays\" min=\"1\">
                    </div>

                    <div class=\"alert alert-warning\">
                        <div class=\"d-flex\">
                            <i class=\"bx bx-error-circle fs-4 me-2\"></i>
                            <div>
                                <h6 class=\"alert-heading mb-1\">Warning</h6>
                                <p class=\"mb-0\">
                                    Banning a user will prevent them from accessing their account and all platform features.
                                    They will be notified via email about this action.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-danger me-2\">
                            <i class=\"bx bx-block me-1\"></i> Ban User
                        </button>
                        <a href=\"";
        // line 75
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

    // line 84
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

        // line 85
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const banDuration = document.getElementById('banDuration');
    const customDuration = document.getElementById('customDuration');
    
    banDuration.addEventListener('change', function() {
        if (this.value === 'custom') {
            customDuration.style.display = 'block';
        } else {
            customDuration.style.display = 'none';
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
        return "admin/ban_user.html.twig";
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
        return array (  223 => 85,  210 => 84,  191 => 75,  146 => 33,  142 => 32,  133 => 26,  129 => 25,  121 => 21,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}

{% block title %}Ban User - Movable{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Ban User</h5>
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
                            </div>
                        </div>
                    </div>
                </div>

                <form method=\"post\" action=\"{{ path('app_admin_user_ban', {'id': user.id}) }}\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('ban' ~ user.id) }}\">
                    
                    <div class=\"mb-3\">
                        <label for=\"banReason\" class=\"form-label\">Ban Reason</label>
                        <textarea class=\"form-control\" id=\"banReason\" name=\"banReason\" rows=\"3\" required></textarea>
                        <div class=\"form-text\">Please provide a reason for banning this user.</div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"banDuration\" class=\"form-label\">Ban Duration</label>
                        <select class=\"form-select\" id=\"banDuration\" name=\"banDuration\">
                            <option value=\"permanent\">Permanent Ban</option>
                            <option value=\"24h\">24 Hours</option>
                            <option value=\"48h\">48 Hours</option>
                            <option value=\"7d\">7 Days</option>
                            <option value=\"30d\">30 Days</option>
                            <option value=\"custom\">Custom Duration</option>
                        </select>
                    </div>

                    <div id=\"customDuration\" class=\"mb-3\" style=\"display: none;\">
                        <label for=\"customDays\" class=\"form-label\">Custom Duration (days)</label>
                        <input type=\"number\" class=\"form-control\" id=\"customDays\" name=\"customDays\" min=\"1\">
                    </div>

                    <div class=\"alert alert-warning\">
                        <div class=\"d-flex\">
                            <i class=\"bx bx-error-circle fs-4 me-2\"></i>
                            <div>
                                <h6 class=\"alert-heading mb-1\">Warning</h6>
                                <p class=\"mb-0\">
                                    Banning a user will prevent them from accessing their account and all platform features.
                                    They will be notified via email about this action.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <button type=\"submit\" class=\"btn btn-danger me-2\">
                            <i class=\"bx bx-block me-1\"></i> Ban User
                        </button>
                        <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-secondary\">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const banDuration = document.getElementById('banDuration');
    const customDuration = document.getElementById('customDuration');
    
    banDuration.addEventListener('change', function() {
        if (this.value === 'custom') {
            customDuration.style.display = 'block';
        } else {
            customDuration.style.display = 'none';
        }
    });
});
</script>
{% endblock %}
", "admin/ban_user.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\ban_user.html.twig");
    }
}
