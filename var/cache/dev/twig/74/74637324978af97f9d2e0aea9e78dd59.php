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

/* registration/register.html.twig */
class __TwigTemplate_0675d341f4a66dd6c4a53eb26079f19d extends Template
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
        return "layouts/auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("layouts/auth.html.twig", "registration/register.html.twig", 1);
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

        yield "Register - Movable";
        
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
        yield "<style>
    .form-control-lg {
        min-height: calc(1.5em + 1rem + 2px);
        padding: 0.5rem 1rem;
        font-size: 1rem;
        border-radius: 0.5rem;
    }
    
    .form-label {
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
        font-weight: 500;
        color: #566a7f;
    }
    
    .form-password-toggle .input-group-text {
        cursor: pointer;
    }
    
    .form-check-input:checked {
        background-color: #696cff;
        border-color: #696cff;
    }
    
    .btn-primary {
        background-color: #696cff;
        color: #fff;
        border-color: #696cff;
    }
    
    .btn-primary:hover {
        background-color: #5f65f1;
        border-color: #5f65f1;
    }
    
    .app-brand {
        margin-bottom: 1.5rem;
    }
    
    .app-brand-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background-color: #696cff;
        color: #fff;
        font-size: 18px;
        font-weight: 700;
    }
    
    .text-primary {
        color: #696cff !important;
    }
    
    .authentication-wrapper {
        max-width: 500px; /* Wider for registration form */
    }
    
    .password-requirements {
        font-size: 0.75rem;
        color: #697a8d;
        margin-top: 0.5rem;
        padding: 0.5rem;
        background-color: #f9fafb;
        border-radius: 0.25rem;
    }
    
    .password-requirements ul {
        padding-left: 1.25rem;
        margin-bottom: 0;
    }
    
    .is-invalid {
        border-color: #ff4d4f !important;
    }
    
    .invalid-feedback {
        display: block;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 0.75rem;
        color: #ff4d4f;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 94
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

        // line 95
        yield "<div class=\"card\">
    <div class=\"card-body\">
        <!-- Logo -->
        <div class=\"app-brand justify-content-center mb-4\">
            <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\" class=\"app-brand-link gap-2\">
                <span class=\"app-brand-logo\">
                    <i class=\"bx bx-car text-primary fs-2\"></i>
                </span>
                <span class=\"app-brand-text fw-bold ms-2\">Movable</span>
            </a>
        </div>

        <h4 class=\"mb-2 text-center\">Adventure starts here 🚀</h4>
        <p class=\"mb-4 text-center\">Make your transportation easy and accessible!</p>

        <!-- Flash messages -->
        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "flashes", [], "any", false, false, false, 111));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 112
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 113
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "
        ";
        // line 120
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 120, $this->source); })()), 'form_start', ["attr" => ["class" => "mb-3"]]);
        yield "
            ";
        // line 121
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 121, $this->source); })()), 'errors')) {
            // line 122
            yield "                <div class=\"alert alert-danger\">
                    ";
            // line 123
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 123, $this->source); })()), 'errors');
            yield "
                </div>
            ";
        }
        // line 126
        yield "
            <!-- Email field -->
            <div class=\"mb-3\">
                ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 129, $this->source); })()), "email", [], "any", false, false, false, 129), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 130, $this->source); })()), "email", [], "any", false, false, false, 130), 'widget', ["attr" => ["class" => ("form-control form-control-lg" . ((        // line 132
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 132, $this->source); })()), "email", [], "any", false, false, false, 132), 'errors')) ? (" is-invalid") : (""))), "placeholder" => "Enter your email"]]);
        // line 135
        yield "
                ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 136, $this->source); })()), "email", [], "any", false, false, false, 136), 'errors');
        yield "
            </div>
            
            <!-- Password field -->
            <div class=\"mb-3 form-password-toggle\">
                ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 141, $this->source); })()), "plainPassword", [], "any", false, false, false, 141), "first", [], "any", false, false, false, 141), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Password"]);
        yield "
                <div class=\"input-group\">
                    ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 143, $this->source); })()), "plainPassword", [], "any", false, false, false, 143), "first", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => ("form-control form-control-lg" . ((        // line 145
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 145, $this->source); })()), "plainPassword", [], "any", false, false, false, 145), "first", [], "any", false, false, false, 145), 'errors')) ? (" is-invalid") : (""))), "placeholder" => "••••••••", "aria-describedby" => "password"]]);
        // line 149
        yield "
                    <span class=\"input-group-text cursor-pointer toggle-password\">
                        <i class=\"bx bx-hide\"></i>
                    </span>
                </div>
                ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 154, $this->source); })()), "plainPassword", [], "any", false, false, false, 154), "first", [], "any", false, false, false, 154), 'errors');
        yield "
                
                <!-- Password requirements -->
                <div class=\"password-requirements\">
                    <strong>Password must:</strong>
                    <ul>
                        <li>Be at least 8 characters long</li>
                        <li>Contain at least one uppercase letter</li>
                        <li>Contain at least one number</li>
                        <li>Contain at least one special character</li>
                    </ul>
                </div>
            </div>
            
            <!-- Confirm Password field -->
            <div class=\"mb-3 form-password-toggle\">
                ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 170, $this->source); })()), "plainPassword", [], "any", false, false, false, 170), "second", [], "any", false, false, false, 170), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Confirm Password"]);
        yield "
                <div class=\"input-group\">
                    ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 172, $this->source); })()), "plainPassword", [], "any", false, false, false, 172), "second", [], "any", false, false, false, 172), 'widget', ["attr" => ["class" => ("form-control form-control-lg" . ((        // line 174
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 174, $this->source); })()), "plainPassword", [], "any", false, false, false, 174), "second", [], "any", false, false, false, 174), 'errors')) ? (" is-invalid") : (""))), "placeholder" => "••••••••", "aria-describedby" => "password-confirm"]]);
        // line 178
        yield "
                    <span class=\"input-group-text cursor-pointer toggle-password\">
                        <i class=\"bx bx-hide\"></i>
                    </span>
                </div>
                ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 183, $this->source); })()), "plainPassword", [], "any", false, false, false, 183), "second", [], "any", false, false, false, 183), 'errors');
        yield "
            </div>
            
            <!-- Terms & Conditions -->
            <div class=\"mb-3\">
                <div class=\"form-check\">
                    ";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 189, $this->source); })()), "agreeTerms", [], "any", false, false, false, 189), 'widget', ["attr" => ["class" => ("form-check-input" . ((        // line 190
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 190, $this->source); })()), "agreeTerms", [], "any", false, false, false, 190), 'errors')) ? (" is-invalid") : ("")))]]);
        // line 191
        yield "
                    ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 192, $this->source); })()), "agreeTerms", [], "any", false, false, false, 192), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "I agree to privacy policy & terms"]);
        yield "
                </div>
                ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 194, $this->source); })()), "agreeTerms", [], "any", false, false, false, 194), 'errors');
        yield "
            </div>
            
            <!-- Submit button -->
            <button class=\"btn btn-primary d-grid w-100 mb-3\" type=\"submit\">
                Sign up
            </button>
        ";
        // line 201
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 201, $this->source); })()), 'form_end');
        yield "
        
        <!-- Login link -->
        <p class=\"text-center mt-4\">
            <span>Already have an account?</span>
            <a href=\"";
        // line 206
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-decoration-none\">
                <span>Sign in instead</span>
            </a>
        </p>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 214
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

        // line 215
        yield "<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password visibility toggle
        const togglePasswordButtons = document.querySelectorAll('.toggle-password');
        
        togglePasswordButtons.forEach(button => {
            button.addEventListener('click', function() {
                const input = this.previousElementSibling;
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                // Toggle icon
                const icon = this.querySelector('i');
                icon.classList.toggle('bx-hide');
                icon.classList.toggle('bx-show');
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
        return "registration/register.html.twig";
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
        return array (  422 => 215,  409 => 214,  391 => 206,  383 => 201,  373 => 194,  368 => 192,  365 => 191,  363 => 190,  362 => 189,  353 => 183,  346 => 178,  344 => 174,  343 => 172,  338 => 170,  319 => 154,  312 => 149,  310 => 145,  309 => 143,  304 => 141,  296 => 136,  293 => 135,  291 => 132,  290 => 130,  286 => 129,  281 => 126,  275 => 123,  272 => 122,  270 => 121,  266 => 120,  263 => 119,  257 => 118,  247 => 114,  242 => 113,  237 => 112,  233 => 111,  218 => 99,  212 => 95,  199 => 94,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/auth.html.twig' %}

{% block title %}Register - Movable{% endblock %}

{% block stylesheets %}
<style>
    .form-control-lg {
        min-height: calc(1.5em + 1rem + 2px);
        padding: 0.5rem 1rem;
        font-size: 1rem;
        border-radius: 0.5rem;
    }
    
    .form-label {
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
        font-weight: 500;
        color: #566a7f;
    }
    
    .form-password-toggle .input-group-text {
        cursor: pointer;
    }
    
    .form-check-input:checked {
        background-color: #696cff;
        border-color: #696cff;
    }
    
    .btn-primary {
        background-color: #696cff;
        color: #fff;
        border-color: #696cff;
    }
    
    .btn-primary:hover {
        background-color: #5f65f1;
        border-color: #5f65f1;
    }
    
    .app-brand {
        margin-bottom: 1.5rem;
    }
    
    .app-brand-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background-color: #696cff;
        color: #fff;
        font-size: 18px;
        font-weight: 700;
    }
    
    .text-primary {
        color: #696cff !important;
    }
    
    .authentication-wrapper {
        max-width: 500px; /* Wider for registration form */
    }
    
    .password-requirements {
        font-size: 0.75rem;
        color: #697a8d;
        margin-top: 0.5rem;
        padding: 0.5rem;
        background-color: #f9fafb;
        border-radius: 0.25rem;
    }
    
    .password-requirements ul {
        padding-left: 1.25rem;
        margin-bottom: 0;
    }
    
    .is-invalid {
        border-color: #ff4d4f !important;
    }
    
    .invalid-feedback {
        display: block;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 0.75rem;
        color: #ff4d4f;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"card\">
    <div class=\"card-body\">
        <!-- Logo -->
        <div class=\"app-brand justify-content-center mb-4\">
            <a href=\"{{ path(\"app_front_home\") }}\" class=\"app-brand-link gap-2\">
                <span class=\"app-brand-logo\">
                    <i class=\"bx bx-car text-primary fs-2\"></i>
                </span>
                <span class=\"app-brand-text fw-bold ms-2\">Movable</span>
            </a>
        </div>

        <h4 class=\"mb-2 text-center\">Adventure starts here 🚀</h4>
        <p class=\"mb-4 text-center\">Make your transportation easy and accessible!</p>

        <!-- Flash messages -->
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        {{ form_start(registrationForm, {\"attr\": {\"class\": \"mb-3\"}}) }}
            {% if form_errors(registrationForm) %}
                <div class=\"alert alert-danger\">
                    {{ form_errors(registrationForm) }}
                </div>
            {% endif %}

            <!-- Email field -->
            <div class=\"mb-3\">
                {{ form_label(registrationForm.email, \"Email\", {\"label_attr\": {\"class\": \"form-label\"}}) }}
                {{ form_widget(registrationForm.email, {
                    \"attr\": {
                        \"class\": \"form-control form-control-lg\" ~ (form_errors(registrationForm.email) ? ' is-invalid' : ''),
                        \"placeholder\": \"Enter your email\"
                    }
                }) }}
                {{ form_errors(registrationForm.email) }}
            </div>
            
            <!-- Password field -->
            <div class=\"mb-3 form-password-toggle\">
                {{ form_label(registrationForm.plainPassword.first, 'Password', {'label_attr': {'class': 'form-label'}}) }}
                <div class=\"input-group\">
                    {{ form_widget(registrationForm.plainPassword.first, {
                        'attr': {
                            'class': 'form-control form-control-lg' ~ (form_errors(registrationForm.plainPassword.first) ? ' is-invalid' : ''),
                            'placeholder': '••••••••',
                            'aria-describedby': 'password'
                        }
                    }) }}
                    <span class=\"input-group-text cursor-pointer toggle-password\">
                        <i class=\"bx bx-hide\"></i>
                    </span>
                </div>
                {{ form_errors(registrationForm.plainPassword.first) }}
                
                <!-- Password requirements -->
                <div class=\"password-requirements\">
                    <strong>Password must:</strong>
                    <ul>
                        <li>Be at least 8 characters long</li>
                        <li>Contain at least one uppercase letter</li>
                        <li>Contain at least one number</li>
                        <li>Contain at least one special character</li>
                    </ul>
                </div>
            </div>
            
            <!-- Confirm Password field -->
            <div class=\"mb-3 form-password-toggle\">
                {{ form_label(registrationForm.plainPassword.second, 'Confirm Password', {'label_attr': {'class': 'form-label'}}) }}
                <div class=\"input-group\">
                    {{ form_widget(registrationForm.plainPassword.second, {
                        'attr': {
                            'class': 'form-control form-control-lg' ~ (form_errors(registrationForm.plainPassword.second) ? ' is-invalid' : ''),
                            'placeholder': '••••••••',
                            'aria-describedby': 'password-confirm'
                        }
                    }) }}
                    <span class=\"input-group-text cursor-pointer toggle-password\">
                        <i class=\"bx bx-hide\"></i>
                    </span>
                </div>
                {{ form_errors(registrationForm.plainPassword.second) }}
            </div>
            
            <!-- Terms & Conditions -->
            <div class=\"mb-3\">
                <div class=\"form-check\">
                    {{ form_widget(registrationForm.agreeTerms, {
                        'attr': {'class': 'form-check-input' ~ (form_errors(registrationForm.agreeTerms) ? ' is-invalid' : '')}
                    }) }}
                    {{ form_label(registrationForm.agreeTerms, 'I agree to privacy policy & terms', {'label_attr': {'class': 'form-check-label'}}) }}
                </div>
                {{ form_errors(registrationForm.agreeTerms) }}
            </div>
            
            <!-- Submit button -->
            <button class=\"btn btn-primary d-grid w-100 mb-3\" type=\"submit\">
                Sign up
            </button>
        {{ form_end(registrationForm) }}
        
        <!-- Login link -->
        <p class=\"text-center mt-4\">
            <span>Already have an account?</span>
            <a href=\"{{ path('app_login') }}\" class=\"text-decoration-none\">
                <span>Sign in instead</span>
            </a>
        </p>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password visibility toggle
        const togglePasswordButtons = document.querySelectorAll('.toggle-password');
        
        togglePasswordButtons.forEach(button => {
            button.addEventListener('click', function() {
                const input = this.previousElementSibling;
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                // Toggle icon
                const icon = this.querySelector('i');
                icon.classList.toggle('bx-hide');
                icon.classList.toggle('bx-show');
            });
        });
    });
</script>
{% endblock %}
", "registration/register.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\registration\\register.html.twig");
    }
}
