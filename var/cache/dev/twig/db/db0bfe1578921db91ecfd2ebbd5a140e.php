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

/* emails/contact.html.twig */
class __TwigTemplate_69168bb68ebd7832a25ad05f39f7678d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>New Contact Form Submission</title>
</head>
<body style=\"font-family: Arial, sans-serif; line-height: 1.6; color: #333;\">
    <div style=\"max-width: 600px; margin: 0 auto; padding: 20px;\">
        <h2 style=\"color: #0066cc;\">New Contact Form Submission</h2>
        
        <div style=\"background: #f8f9fa; padding: 15px; border-radius: 5px; margin: 20px 0;\">
            <p><strong>Name:</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</p>
            <p><strong>Email:</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</p>
            <p><strong>Subject:</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</p>
        </div>

        <div style=\"margin-top: 20px;\">
            <h3 style=\"color: #555;\">Message:</h3>
            <p style=\"white-space: pre-wrap;\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</p>
        </div>

        <hr style=\"border: none; border-top: 1px solid #ddd; margin: 20px 0;\">
        
        <p style=\"color: #666; font-size: 12px;\">
            This is an automated message from your website's contact form.
        </p>
    </div>
</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/contact.html.twig";
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
        return array (  77 => 19,  69 => 14,  65 => 13,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>New Contact Form Submission</title>
</head>
<body style=\"font-family: Arial, sans-serif; line-height: 1.6; color: #333;\">
    <div style=\"max-width: 600px; margin: 0 auto; padding: 20px;\">
        <h2 style=\"color: #0066cc;\">New Contact Form Submission</h2>
        
        <div style=\"background: #f8f9fa; padding: 15px; border-radius: 5px; margin: 20px 0;\">
            <p><strong>Name:</strong> {{ name }}</p>
            <p><strong>Email:</strong> {{ email }}</p>
            <p><strong>Subject:</strong> {{ subject }}</p>
        </div>

        <div style=\"margin-top: 20px;\">
            <h3 style=\"color: #555;\">Message:</h3>
            <p style=\"white-space: pre-wrap;\">{{ message }}</p>
        </div>

        <hr style=\"border: none; border-top: 1px solid #ddd; margin: 20px 0;\">
        
        <p style=\"color: #666; font-size: 12px;\">
            This is an automated message from your website's contact form.
        </p>
    </div>
</body>
</html>

", "emails/contact.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\emails\\contact.html.twig");
    }
}
