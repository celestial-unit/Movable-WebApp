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

/* driver/show.html.twig */
class __TwigTemplate_489c6f169a98e43d0dfe6c291c368ac8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "driver/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "driver/show.html.twig"));

        // line 1
        yield "<div class=\"card-footer d-flex justify-content-between\">
    <a href=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_driver_index");
        yield "\" class=\"btn btn-secondary\">
        <i class=\"bx bx-arrow-back\"></i> Back to list
    </a>
    
    <div>
        <a href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_driver_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        yield "\" class=\"btn btn-primary me-2\">
            <i class=\"bx bx-edit\"></i> Edit
        </a>
        
        <form method=\"post\" action=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_driver_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        yield "\" style=\"display: inline-block;\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12))), "html", null, true);
        yield "\">
            <button class=\"btn btn-danger\" onclick=\"return confirm('Are you sure?')\">
                <i class=\"bx bx-trash\"></i> Delete
            </button>
        </form>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "driver/show.html.twig";
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
        return array (  70 => 12,  66 => 11,  59 => 7,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card-footer d-flex justify-content-between\">
    <a href=\"{{ path('app_driver_index') }}\" class=\"btn btn-secondary\">
        <i class=\"bx bx-arrow-back\"></i> Back to list
    </a>
    
    <div>
        <a href=\"{{ path('app_driver_edit', {'id': driver.id}) }}\" class=\"btn btn-primary me-2\">
            <i class=\"bx bx-edit\"></i> Edit
        </a>
        
        <form method=\"post\" action=\"{{ path('app_driver_delete', {'id': driver.id}) }}\" style=\"display: inline-block;\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ driver.id) }}\">
            <button class=\"btn btn-danger\" onclick=\"return confirm('Are you sure?')\">
                <i class=\"bx bx-trash\"></i> Delete
            </button>
        </form>
    </div>
</div>", "driver/show.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\driver\\show.html.twig");
    }
}
