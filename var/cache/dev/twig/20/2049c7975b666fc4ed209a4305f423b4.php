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

/* security/login.html.twig */
class __TwigTemplate_b8684334aa5f8a3ca4ddcf36e5865c76 extends Template
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
        return "layouts/auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("layouts/auth.html.twig", "security/login.html.twig", 1);
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

        yield "Login - Movable";
        
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
        yield "<div class=\"card\">
    <div class=\"card-body\">
        <!-- Logo -->
        <div class=\"app-brand justify-content-center mb-4\">
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"app-brand-link\">
                <span class=\"app-brand-logo\">
                    <i class=\"bx bx-car text-primary fs-2\"></i>
                </span>
                <span class=\"app-brand-text fw-bold ms-2\">Movable</span>
            </a>
        </div>
        
        <h4 class=\"mb-2 text-center\">Welcome to Movable!</h4>
        <p class=\"mb-4 text-center\">Please sign in to your account</p>
        
        <!-- Flash messages -->
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 23
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\" role=\"alert\">
                    ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "        
        <!-- Error message -->
        ";
        // line 32
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })())) {
            // line 33
            yield "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })()), "messageKey", [], "any", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })()), "messageData", [], "any", false, false, false, 34), "security"), "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        // line 38
        yield "        
        <!-- Login Form -->
        <form id=\"formAuthentication\" method=\"post\" class=\"mb-3\">
            <!-- Email field -->
            <div class=\"mb-3\">
                <label for=\"inputEmail\" class=\"form-label\">Email</label>
                <input type=\"email\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" 
                       class=\"form-control form-control-lg\" 
                       placeholder=\"Enter your email\" 
                       autofocus required>
            </div>
            
            <!-- Password field -->
            <div class=\"mb-3 form-password-toggle\">
                <div class=\"d-flex justify-content-between\">
                    <label for=\"inputPassword\" class=\"form-label\">Password</label>
                    <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\" class=\"text-decoration-none\">
                        <small>Forgot Password?</small>
                    </a>
                </div>
                <div class=\"input-group\">
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" 
                           class=\"form-control form-control-lg\" 
                           placeholder=\"••••••••\" 
                           aria-describedby=\"password\" required>
                    <span class=\"input-group-text cursor-pointer\" id=\"togglePassword\">
                        <i class=\"bx bx-hide\"></i>
                    </span>
                </div>
            </div>
            
            <!-- Remember me -->
            <div class=\"mb-3\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"remember-me\">
                    <label class=\"form-check-label\" for=\"remember-me\">Remember Me</label>
                </div>
            </div>
            
            <!-- CSRF token -->
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
            
            <!-- Submit button -->
            <div class=\"mb-3\">
                <button class=\"btn btn-primary d-grid w-100\" type=\"submit\">
                    Sign in
                </button>
            </div>
        </form>
        
        <!-- Register link -->
        <p class=\"text-center\">
            <span>New on our platform?</span>
            <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-decoration-none\">
                <span>Create an account</span>
            </a>
        </p>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
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

        // line 100
        yield "<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password visibility toggle
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('inputPassword');
        
        if (togglePassword && password) {
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                
                // Toggle icon
                const icon = this.querySelector('i');
                icon.classList.toggle('bx-hide');
                icon.classList.toggle('bx-show');
            });
        }
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
        return "security/login.html.twig";
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
        return array (  263 => 100,  250 => 99,  232 => 91,  216 => 78,  189 => 54,  176 => 44,  168 => 38,  161 => 34,  158 => 33,  156 => 32,  152 => 30,  146 => 29,  136 => 25,  131 => 24,  126 => 23,  122 => 22,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/auth.html.twig\" %}

{% block title %}Login - Movable{% endblock %}

{% block body %}
<div class=\"card\">
    <div class=\"card-body\">
        <!-- Logo -->
        <div class=\"app-brand justify-content-center mb-4\">
            <a href=\"{{ path('app_front_home') }}\" class=\"app-brand-link\">
                <span class=\"app-brand-logo\">
                    <i class=\"bx bx-car text-primary fs-2\"></i>
                </span>
                <span class=\"app-brand-text fw-bold ms-2\">Movable</span>
            </a>
        </div>
        
        <h4 class=\"mb-2 text-center\">Welcome to Movable!</h4>
        <p class=\"mb-4 text-center\">Please sign in to your account</p>
        
        <!-- Flash messages -->
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}
        
        <!-- Error message -->
        {% if error %}
            <div class=\"alert alert-danger\" role=\"alert\">
                {{ error.messageKey|trans(error.messageData, 'security') }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endif %}
        
        <!-- Login Form -->
        <form id=\"formAuthentication\" method=\"post\" class=\"mb-3\">
            <!-- Email field -->
            <div class=\"mb-3\">
                <label for=\"inputEmail\" class=\"form-label\">Email</label>
                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" 
                       class=\"form-control form-control-lg\" 
                       placeholder=\"Enter your email\" 
                       autofocus required>
            </div>
            
            <!-- Password field -->
            <div class=\"mb-3 form-password-toggle\">
                <div class=\"d-flex justify-content-between\">
                    <label for=\"inputPassword\" class=\"form-label\">Password</label>
                    <a href=\"{{ path('app_forgot_password') }}\" class=\"text-decoration-none\">
                        <small>Forgot Password?</small>
                    </a>
                </div>
                <div class=\"input-group\">
                    <input type=\"password\" name=\"password\" id=\"inputPassword\" 
                           class=\"form-control form-control-lg\" 
                           placeholder=\"••••••••\" 
                           aria-describedby=\"password\" required>
                    <span class=\"input-group-text cursor-pointer\" id=\"togglePassword\">
                        <i class=\"bx bx-hide\"></i>
                    </span>
                </div>
            </div>
            
            <!-- Remember me -->
            <div class=\"mb-3\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"remember-me\">
                    <label class=\"form-check-label\" for=\"remember-me\">Remember Me</label>
                </div>
            </div>
            
            <!-- CSRF token -->
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            
            <!-- Submit button -->
            <div class=\"mb-3\">
                <button class=\"btn btn-primary d-grid w-100\" type=\"submit\">
                    Sign in
                </button>
            </div>
        </form>
        
        <!-- Register link -->
        <p class=\"text-center\">
            <span>New on our platform?</span>
            <a href=\"{{ path('app_register') }}\" class=\"text-decoration-none\">
                <span>Create an account</span>
            </a>
        </p>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password visibility toggle
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('inputPassword');
        
        if (togglePassword && password) {
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                
                // Toggle icon
                const icon = this.querySelector('i');
                icon.classList.toggle('bx-hide');
                icon.classList.toggle('bx-show');
            });
        }
    });
</script>
{% endblock %}
", "security/login.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\security\\login.html.twig");
    }
}
