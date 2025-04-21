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

/* user/settings.html.twig */
class __TwigTemplate_45183c2caf3459e3c6365669fe80f8a0 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/settings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/settings.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "user/settings.html.twig", 1);
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

        yield "Account Settings - Movable";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.settings-card {
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

        // line 16
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <h4 class=\"fw-bold py-3 mb-4\">Account Settings</h4>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- Account Settings Card -->
            <div class=\"card settings-card mb-4\">
                <h5 class=\"card-header\">General Settings</h5>
                <div class=\"card-body\">
                    <form id=\"formAccountSettings\" method=\"POST\">
                        <div class=\"row\">
                            <div class=\"mb-3 col-md-6\">
                                <label for=\"emailNotifications\" class=\"form-label\">Email Notifications</label>
                                <select class=\"form-select\" id=\"emailNotifications\" name=\"emailNotifications\">
                                    <option value=\"all\">All Notifications</option>
                                    <option value=\"important\">Important Only</option>
                                    <option value=\"none\">None</option>
                                </select>
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <label for=\"language\" class=\"form-label\">Language</label>
                                <select class=\"form-select\" id=\"language\" name=\"language\">
                                    <option value=\"en\">English</option>
                                    <option value=\"fr\">Français</option>
                                    <option value=\"ar\">العربية</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"mt-2\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Save changes</button>
                            <button type=\"reset\" class=\"btn btn-outline-secondary\">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Security Settings Card -->
            <div class=\"card settings-card mb-4\">
                <h5 class=\"card-header\">Security Settings</h5>
                <div class=\"card-body\">
                    <form id=\"formSecuritySettings\" method=\"POST\">
                        <div class=\"row\">
                            <div class=\"mb-3 col-md-6\">
                                <div class=\"form-check form-switch mb-2\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"twoFactorAuth\">
                                    <label class=\"form-check-label\" for=\"twoFactorAuth\">Two-factor Authentication</label>
                                </div>
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <div class=\"form-check form-switch mb-2\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"loginAlerts\">
                                    <label class=\"form-check-label\" for=\"loginAlerts\">Login Alerts</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"mt-2\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Save changes</button>
                            <button type=\"reset\" class=\"btn btn-outline-secondary\">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Connected Accounts Card -->
            <div class=\"card settings-card\">
                <h5 class=\"card-header\">Connected Accounts</h5>
                <div class=\"card-body\">
                    <div class=\"d-flex mb-3\">
                        <div class=\"flex-shrink-0\">
                            <i class=\"bx bxl-google me-2 text-danger\" style=\"font-size: 2rem;\"></i>
                        </div>
                        <div class=\"flex-grow-1 row\">
                            <div class=\"col-9\">
                                <h6 class=\"mb-0\">Google</h6>
                                <small class=\"text-muted\">Calendar and Contacts</small>
                            </div>
                            <div class=\"col-3 text-end\">
                                <div class=\"form-check form-switch\">
                                    <input class=\"form-check-input float-end\" type=\"checkbox\" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex\">
                        <div class=\"flex-shrink-0\">
                            <i class=\"bx bxl-facebook-circle me-2 text-primary\" style=\"font-size: 2rem;\"></i>
                        </div>
                        <div class=\"flex-grow-1 row\">
                            <div class=\"col-9\">
                                <h6 class=\"mb-0\">Facebook</h6>
                                <small class=\"text-muted\">Social Integration</small>
                            </div>
                            <div class=\"col-3 text-end\">
                                <div class=\"form-check form-switch\">
                                    <input class=\"form-check-input float-end\" type=\"checkbox\">
                                </div>
                            </div>
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

    // line 122
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

        // line 123
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle form reset
    document.querySelectorAll('button[type=\"reset\"]').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            this.closest('form').reset();
        });
    });

    // Add form submission handlers
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your form submission logic here
            // For now, just show a success message
            alert('Settings saved successfully!');
        });
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
        return "user/settings.html.twig";
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
        return array (  262 => 123,  249 => 122,  134 => 16,  121 => 15,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base1.html.twig\" %}

{% block title %}Account Settings - Movable{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.settings-card {
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}
</style>
{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <h4 class=\"fw-bold py-3 mb-4\">Account Settings</h4>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- Account Settings Card -->
            <div class=\"card settings-card mb-4\">
                <h5 class=\"card-header\">General Settings</h5>
                <div class=\"card-body\">
                    <form id=\"formAccountSettings\" method=\"POST\">
                        <div class=\"row\">
                            <div class=\"mb-3 col-md-6\">
                                <label for=\"emailNotifications\" class=\"form-label\">Email Notifications</label>
                                <select class=\"form-select\" id=\"emailNotifications\" name=\"emailNotifications\">
                                    <option value=\"all\">All Notifications</option>
                                    <option value=\"important\">Important Only</option>
                                    <option value=\"none\">None</option>
                                </select>
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <label for=\"language\" class=\"form-label\">Language</label>
                                <select class=\"form-select\" id=\"language\" name=\"language\">
                                    <option value=\"en\">English</option>
                                    <option value=\"fr\">Français</option>
                                    <option value=\"ar\">العربية</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"mt-2\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Save changes</button>
                            <button type=\"reset\" class=\"btn btn-outline-secondary\">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Security Settings Card -->
            <div class=\"card settings-card mb-4\">
                <h5 class=\"card-header\">Security Settings</h5>
                <div class=\"card-body\">
                    <form id=\"formSecuritySettings\" method=\"POST\">
                        <div class=\"row\">
                            <div class=\"mb-3 col-md-6\">
                                <div class=\"form-check form-switch mb-2\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"twoFactorAuth\">
                                    <label class=\"form-check-label\" for=\"twoFactorAuth\">Two-factor Authentication</label>
                                </div>
                            </div>
                            <div class=\"mb-3 col-md-6\">
                                <div class=\"form-check form-switch mb-2\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"loginAlerts\">
                                    <label class=\"form-check-label\" for=\"loginAlerts\">Login Alerts</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"mt-2\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Save changes</button>
                            <button type=\"reset\" class=\"btn btn-outline-secondary\">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Connected Accounts Card -->
            <div class=\"card settings-card\">
                <h5 class=\"card-header\">Connected Accounts</h5>
                <div class=\"card-body\">
                    <div class=\"d-flex mb-3\">
                        <div class=\"flex-shrink-0\">
                            <i class=\"bx bxl-google me-2 text-danger\" style=\"font-size: 2rem;\"></i>
                        </div>
                        <div class=\"flex-grow-1 row\">
                            <div class=\"col-9\">
                                <h6 class=\"mb-0\">Google</h6>
                                <small class=\"text-muted\">Calendar and Contacts</small>
                            </div>
                            <div class=\"col-3 text-end\">
                                <div class=\"form-check form-switch\">
                                    <input class=\"form-check-input float-end\" type=\"checkbox\" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"d-flex\">
                        <div class=\"flex-shrink-0\">
                            <i class=\"bx bxl-facebook-circle me-2 text-primary\" style=\"font-size: 2rem;\"></i>
                        </div>
                        <div class=\"flex-grow-1 row\">
                            <div class=\"col-9\">
                                <h6 class=\"mb-0\">Facebook</h6>
                                <small class=\"text-muted\">Social Integration</small>
                            </div>
                            <div class=\"col-3 text-end\">
                                <div class=\"form-check form-switch\">
                                    <input class=\"form-check-input float-end\" type=\"checkbox\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle form reset
    document.querySelectorAll('button[type=\"reset\"]').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            this.closest('form').reset();
        });
    });

    // Add form submission handlers
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your form submission logic here
            // For now, just show a success message
            alert('Settings saved successfully!');
        });
    });
});
</script>
{% endblock %}
", "user/settings.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\user\\settings.html.twig");
    }
}
