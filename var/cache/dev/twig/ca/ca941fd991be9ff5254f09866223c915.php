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

/* front/contact/index.html.twig */
class __TwigTemplate_b2deaaae328fdf000361d89d7c17fa83 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/contact/index.html.twig", 1);
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

        yield "<title>Movable - Contact Us</title>";
        
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
        yield "<div class=\"container-xxl bg-primary page-header\">
    <div class=\"container text-center py-5 px-lg-5\">
        <h1 class=\"text-white animated zoomIn\">Contact Us</h1>
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb justify-content-center\">
                <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_home");
        yield "\">Home</a></li>
                <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Contact</li>
            </ol>
        </nav>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
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

        // line 21
        yield "<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
            <p class=\"section-title text-secondary justify-content-center\"><span></span>Contact Us<span></span></p>
            <h1 class=\"text-center mb-5\">Get In Touch</h1>
        </div>
        <div class=\"row g-5\">
            <div class=\"col-lg-5 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <p class=\"mb-4\">We're here to answer any questions about our services, provide a quote, or discuss your project requirements. Feel free to reach out through the form or using our contact details below.</p>
                <div class=\"d-flex align-items-center mb-3\">
                    <div class=\"d-flex align-items-center justify-content-center flex-shrink-0 bg-primary\" style=\"width: 50px; height: 50px;\">
                        <i class=\"fa fa-map-marker-alt text-white\"></i>
                    </div>
                    <div class=\"ms-3\">
                        <h5 class=\"text-primary\">Office</h5>
                        <p class=\"mb-0\">123 Street, New York, USA</p>
                    </div>
                </div>
                <div class=\"d-flex align-items-center mb-3\">
                    <div class=\"d-flex align-items-center justify-content-center flex-shrink-0 bg-primary\" style=\"width: 50px; height: 50px;\">
                        <i class=\"fa fa-phone-alt text-white\"></i>
                    </div>
                    <div class=\"ms-3\">
                        <h5 class=\"text-primary\">Phone</h5>
                        <p class=\"mb-0\">+012 345 67890</p>
                    </div>
                </div>
                <div class=\"d-flex align-items-center\">
                    <div class=\"d-flex align-items-center justify-content-center flex-shrink-0 bg-primary\" style=\"width: 50px; height: 50px;\">
                        <i class=\"fa fa-envelope-open text-white\"></i>
                    </div>
                    <div class=\"ms-3\">
                        <h5 class=\"text-primary\">Email</h5>
                        <p class=\"mb-0\">info@movable.com</p>
                    </div>
                </div>
                <div class=\"mt-4\">
                    <h5 class=\"text-primary mb-3\">Follow Us</h5>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-square btn-outline-primary me-2\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-square btn-outline-primary me-2\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-square btn-outline-primary me-2\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                        <a class=\"btn btn-square btn-outline-primary me-2\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-7 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "flashes", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 69
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 70
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                
                ";
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_start', ["attr" => ["class" => "contact-form"]]);
        yield "
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "valid", [], "any", false, false, false, 81)) ? ("") : (" is-invalid"))), "placeholder" => "Your Name"]]);
        yield "
                                ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "name", [], "any", false, false, false, 82), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "name", [], "any", false, false, false, 84), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "email", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "email", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "valid", [], "any", false, false, false, 90)) ? ("") : (" is-invalid"))), "placeholder" => "Your Email"]]);
        yield "
                                ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "email", [], "any", false, false, false, 91), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "email", [], "any", false, false, false, 93), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "title", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "title", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "valid", [], "any", false, false, false, 99)) ? ("") : (" is-invalid"))), "placeholder" => "Subject"]]);
        yield "
                                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "title", [], "any", false, false, false, 100), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "title", [], "any", false, false, false, 102), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "description", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "description", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "valid", [], "any", false, false, false, 108)) ? ("") : (" is-invalid"))), "placeholder" => "Message", "style" => "height: 150px;"]]);
        yield "
                                ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "description", [], "any", false, false, false, 109), 'label');
        yield "
                                <div class=\"invalid-feedback\">
                                    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "description", [], "any", false, false, false, 111), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Send Message</button>
                        </div>
                    </div>
                ";
        // line 119
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
";
        // line 125
        yield "
";
        // line 127
        yield "<div class=\"container-xxl pt-5 px-0 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container-xxl pt-5 px-0\">
        <div class=\"bg-dark\">
            <iframe
                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.4605733244885!2d-74.00592242339758!3d40.75828083646192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259ad18bcd261%3A0x70ec9978f4cb4658!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1716134343361!5m2!1sen!2sus\"
                frameborder=\"0\" style=\"width: 100%; height: 450px; border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                tabindex=\"0\">
            </iframe>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 141
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

        // line 142
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize WOW.js for animations
            new WOW().init();
            
            // Auto dismiss alert messages after 5 seconds
            setTimeout(function() {
                \$('.alert').alert('close');
            }, 5000);
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
        return "front/contact/index.html.twig";
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
        return array (  349 => 142,  336 => 141,  314 => 127,  311 => 125,  303 => 119,  292 => 111,  287 => 109,  283 => 108,  274 => 102,  269 => 100,  265 => 99,  256 => 93,  251 => 91,  247 => 90,  238 => 84,  233 => 82,  229 => 81,  222 => 77,  219 => 76,  213 => 75,  203 => 71,  198 => 70,  193 => 69,  189 => 68,  140 => 21,  127 => 19,  109 => 11,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}<title>Movable - Contact Us</title>{% endblock %}

{% block hero_banner %}
<div class=\"container-xxl bg-primary page-header\">
    <div class=\"container text-center py-5 px-lg-5\">
        <h1 class=\"text-white animated zoomIn\">Contact Us</h1>
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb justify-content-center\">
                <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_front_home') }}\">Home</a></li>
                <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">Contact</li>
            </ol>
        </nav>
    </div>
</div>
{% endblock %}

{% block content %}
{# Contact Start #}
<div class=\"container-xxl py-5\">
    <div class=\"container py-5 px-lg-5\">
        <div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
            <p class=\"section-title text-secondary justify-content-center\"><span></span>Contact Us<span></span></p>
            <h1 class=\"text-center mb-5\">Get In Touch</h1>
        </div>
        <div class=\"row g-5\">
            <div class=\"col-lg-5 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <p class=\"mb-4\">We're here to answer any questions about our services, provide a quote, or discuss your project requirements. Feel free to reach out through the form or using our contact details below.</p>
                <div class=\"d-flex align-items-center mb-3\">
                    <div class=\"d-flex align-items-center justify-content-center flex-shrink-0 bg-primary\" style=\"width: 50px; height: 50px;\">
                        <i class=\"fa fa-map-marker-alt text-white\"></i>
                    </div>
                    <div class=\"ms-3\">
                        <h5 class=\"text-primary\">Office</h5>
                        <p class=\"mb-0\">123 Street, New York, USA</p>
                    </div>
                </div>
                <div class=\"d-flex align-items-center mb-3\">
                    <div class=\"d-flex align-items-center justify-content-center flex-shrink-0 bg-primary\" style=\"width: 50px; height: 50px;\">
                        <i class=\"fa fa-phone-alt text-white\"></i>
                    </div>
                    <div class=\"ms-3\">
                        <h5 class=\"text-primary\">Phone</h5>
                        <p class=\"mb-0\">+012 345 67890</p>
                    </div>
                </div>
                <div class=\"d-flex align-items-center\">
                    <div class=\"d-flex align-items-center justify-content-center flex-shrink-0 bg-primary\" style=\"width: 50px; height: 50px;\">
                        <i class=\"fa fa-envelope-open text-white\"></i>
                    </div>
                    <div class=\"ms-3\">
                        <h5 class=\"text-primary\">Email</h5>
                        <p class=\"mb-0\">info@movable.com</p>
                    </div>
                </div>
                <div class=\"mt-4\">
                    <h5 class=\"text-primary mb-3\">Follow Us</h5>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-square btn-outline-primary me-2\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-square btn-outline-primary me-2\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-square btn-outline-primary me-2\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                        <a class=\"btn btn-square btn-outline-primary me-2\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-7 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}
                
                {{ form_start(form, {'attr': {'class': 'contact-form'}}) }}
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.name, {'attr': {'class': 'form-control' ~ (form.name.vars.valid ? '' : ' is-invalid'), 'placeholder': 'Your Name'}}) }}
                                {{ form_label(form.name) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.name) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.email, {'attr': {'class': 'form-control' ~ (form.email.vars.valid ? '' : ' is-invalid'), 'placeholder': 'Your Email'}}) }}
                                {{ form_label(form.email) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.email) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.title, {'attr': {'class': 'form-control' ~ (form.title.vars.valid ? '' : ' is-invalid'), 'placeholder': 'Subject'}}) }}
                                {{ form_label(form.title) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.title) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                {{ form_widget(form.description, {'attr': {'class': 'form-control' ~ (form.description.vars.valid ? '' : ' is-invalid'), 'placeholder': 'Message', 'style': 'height: 150px;'}}) }}
                                {{ form_label(form.description) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(form.description) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Send Message</button>
                        </div>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>
{# Contact End #}

{# Map Start #}
<div class=\"container-xxl pt-5 px-0 wow fadeInUp\" data-wow-delay=\"0.1s\">
    <div class=\"container-xxl pt-5 px-0\">
        <div class=\"bg-dark\">
            <iframe
                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.4605733244885!2d-74.00592242339758!3d40.75828083646192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259ad18bcd261%3A0x70ec9978f4cb4658!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1716134343361!5m2!1sen!2sus\"
                frameborder=\"0\" style=\"width: 100%; height: 450px; border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                tabindex=\"0\">
            </iframe>
        </div>
    </div>
</div>
{# Map End #}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize WOW.js for animations
            new WOW().init();
            
            // Auto dismiss alert messages after 5 seconds
            setTimeout(function() {
                \$('.alert').alert('close');
            }, 5000);
        });
    </script>
{% endblock %}

", "front/contact/index.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\front\\contact\\index.html.twig");
    }
}
