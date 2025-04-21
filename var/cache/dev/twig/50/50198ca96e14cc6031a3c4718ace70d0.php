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

/* event_registration/pdf.html.twig */
class __TwigTemplate_be0c3f01e6587d41cc12932734c68891 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_registration/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        .header { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Registration Details #";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</h1>
    </div>

    <h2>Event Information</h2>
    <table>
        <tr>
            <th>Event Title</th>
            <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 22, $this->source); })()), "event", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Event Date</th>
            <td>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 26, $this->source); })()), "RegistrationDate", [], "any", false, false, false, 26), "Y-m-d H:i"), "html", null, true);
        yield "</td>
        </tr>
    </table>

    <h2>Registration Details</h2>
    <table>
        <tr>
            <th>Registration Date</th>
            <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 34, $this->source); })()), "registrationDate", [], "any", false, false, false, 34), "Y-m-d H:i"), "html", null, true);
        yield "</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event_registration"]) || array_key_exists("event_registration", $context) ? $context["event_registration"] : (function () { throw new RuntimeError('Variable "event_registration" does not exist.', 38, $this->source); })()), "status", [], "any", false, false, false, 38), "html", null, true);
        yield "</td>
        </tr>
        
    </table>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "event_registration/pdf.html.twig";
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
        return array (  99 => 38,  92 => 34,  81 => 26,  74 => 22,  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        .header { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Registration Details #{{ event_registration.id }}</h1>
    </div>

    <h2>Event Information</h2>
    <table>
        <tr>
            <th>Event Title</th>
            <td>{{ event_registration.event.title }}</td>
        </tr>
        <tr>
            <th>Event Date</th>
            <td>{{ event_registration.RegistrationDate|date('Y-m-d H:i') }}</td>
        </tr>
    </table>

    <h2>Registration Details</h2>
    <table>
        <tr>
            <th>Registration Date</th>
            <td>{{ event_registration.registrationDate|date('Y-m-d H:i') }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ event_registration.status }}</td>
        </tr>
        
    </table>
</body>
</html>", "event_registration/pdf.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\event_registration\\pdf.html.twig");
    }
}
