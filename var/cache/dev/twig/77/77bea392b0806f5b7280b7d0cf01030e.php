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

/* admin_transport/show.html.twig */
class __TwigTemplate_4121efda6028f739396910299f2bcba0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_transport/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_transport/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin_transport/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "<div class=\"container\">
    <h1>Transport Details</h1>

    <ul>
        <li><strong>ID:</strong> ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</li>
        <li><strong>Type:</strong> ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8), "html", null, true);
        yield "</li>
        <li><strong>Capacity:</strong> ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 9, $this->source); })()), "capacity", [], "any", false, false, false, 9), "html", null, true);
        yield "</li>
        <li><strong>Destination:</strong> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 10, $this->source); })()), "destination", [], "any", false, false, false, 10), "html", null, true);
        yield "</li>
        <li><strong>Disponibility:</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 11, $this->source); })()), "disponibility", [], "any", false, false, false, 11), "html", null, true);
        yield "</li>
    </ul>

    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_index");
        yield "\" class=\"btn btn-secondary\">Back to list</a>
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
        return "admin_transport/show.html.twig";
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
        return array (  104 => 14,  98 => 11,  94 => 10,  90 => 9,  86 => 8,  82 => 7,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"admin/layouts/admin.html.twig\" %}
{% block body %}
<div class=\"container\">
    <h1>Transport Details</h1>

    <ul>
        <li><strong>ID:</strong> {{ transport.id }}</li>
        <li><strong>Type:</strong> {{ transport.type }}</li>
        <li><strong>Capacity:</strong> {{ transport.capacity }}</li>
        <li><strong>Destination:</strong> {{ transport.destination }}</li>
        <li><strong>Disponibility:</strong> {{ transport.disponibility }}</li>
    </ul>

    <a href=\"{{ path('admin_transport_index') }}\" class=\"btn btn-secondary\">Back to list</a>
{% endblock %}
", "admin_transport/show.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin_transport\\show.html.twig");
    }
}
