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

/* reclamation/show.html.twig */
class __TwigTemplate_e6742cd566318d704ebee343d5d1600a extends Template
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
            'footer' => [$this, 'block_footer'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "reclamation/show.html.twig", 1);
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

        yield "Claim Details - Movable";
        
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
.timeline-with-icons {
    position: relative;
    padding-left: 2.5rem;
}
.timeline-item {
    position: relative;
}
.timeline-icon {
    position: absolute;
    left: -2.5rem;
    width: 2rem;
    height: 2rem;
    border-radius: 50%;
    text-align: center;
    line-height: 2rem;
    background: #fff;
    border: 2px solid currentColor;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
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

        // line 30
        yield "<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <div>
                    <h5 class=\"mb-0\">Claim #";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "html", null, true);
        yield "</h5>
                    <span class=\"text-muted\">Submitted on ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 36, $this->source); })()), "createdAt", [], "any", false, false, false, 36), "M d, Y H:i"), "html", null, true);
        yield "</span>
                </div>
                <div>
                    <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"bx bx-arrow-back me-1\"></i> Back to List
                    </a>
                </div>
            </div>
            
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <!-- Main Claim Details -->
                        <div class=\"mb-4\">
                            <h4 class=\"text-primary mb-2\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 50, $this->source); })()), "title", [], "any", false, false, false, 50), "html", null, true);
        yield "</h4>
                            <div class=\"d-flex align-items-center mb-3\">
                                <span class=\"badge bg-label-primary me-2\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 52, $this->source); })()), "category", [], "any", false, false, false, 52), "html", null, true);
        yield "</span>
                                
                                ";
        // line 54
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54) == "Pending")) {
            // line 55
            yield "                                    <span class=\"badge bg-label-warning\">Pending</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 56
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 56, $this->source); })()), "status", [], "any", false, false, false, 56) == "Resolved")) {
            // line 57
            yield "                                    <span class=\"badge bg-label-success\">Resolved</span>
                                ";
        } else {
            // line 59
            yield "                                    <span class=\"badge bg-label-danger\">Rejected</span>
                                ";
        }
        // line 61
        yield "                            </div>
                            
                            <div class=\"mb-3\">
                                <h6 class=\"fw-semibold\">Description</h6>
                                <div class=\"p-3 bg-body-tertiary rounded\">
                                    ";
        // line 66
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), "html", null, true));
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-md-4\">
                        <!-- Meta Information -->
                        <div class=\"card mb-4\">
                            <div class=\"card-header\">
                                <h6 class=\"mb-0\">Claim Information</h6>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"list-group list-group-flush\">
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <span class=\"fw-semibold\">Status</span>
                                        ";
        // line 82
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 82, $this->source); })()), "status", [], "any", false, false, false, 82) == "Pending")) {
            // line 83
            yield "                                            <span class=\"badge bg-warning\">Pending</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 84
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 84, $this->source); })()), "status", [], "any", false, false, false, 84) == "Resolved")) {
            // line 85
            yield "                                            <span class=\"badge bg-success\">Resolved</span>
                                        ";
        } else {
            // line 87
            yield "                                            <span class=\"badge bg-danger\">Rejected</span>
                                        ";
        }
        // line 89
        yield "                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <span class=\"fw-semibold\">Category</span>
                                        <span>";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 92, $this->source); })()), "category", [], "any", false, false, false, 92), "html", null, true);
        yield "</span>
                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <span class=\"fw-semibold\">Created</span>
                                        <span>";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 96, $this->source); })()), "createdAt", [], "any", false, false, false, 96), "Y-m-d H:i"), "html", null, true);
        yield "</span>
                                    </li>
                                    ";
        // line 98
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 98, $this->source); })()), "resolutionDate", [], "any", false, false, false, 98)) {
            // line 99
            yield "                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <span class=\"fw-semibold\">Resolution Date</span>
                                        <span>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 101, $this->source); })()), "resolutionDate", [], "any", false, false, false, 101), "Y-m-d H:i"), "html", null, true);
            yield "</span>
                                    </li>
                                    ";
        }
        // line 104
        yield "                                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 105
            yield "                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <span class=\"fw-semibold\">User</span>
                                        <a href=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "fullName", [], "any", false, false, false, 107), "html", null, true);
            yield "</a>
                                    </li>
                                    ";
        }
        // line 110
        yield "                                </ul>
                            </div>
                        </div>
                        
                        <!-- Timeline -->
                        <div class=\"card mb-4\">
                            <div class=\"card-header\">
                                <h6 class=\"mb-0\">Timeline</h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"timeline-with-icons\">
                                    <div class=\"timeline-item mb-3\">
                                        <i class=\"bx bx-plus text-primary timeline-icon\"></i>
                                        <div class=\"ms-3\">
                                            <span class=\"fw-semibold d-block\">Created</span>
                                            <small class=\"text-muted\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 125, $this->source); })()), "createdAt", [], "any", false, false, false, 125), "Y-m-d H:i"), "html", null, true);
        yield "</small>
                                        </div>
                                    </div>
                                    
                                    ";
        // line 129
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 129, $this->source); })()), "status", [], "any", false, false, false, 129) != "Pending")) {
            // line 130
            yield "                                    <div class=\"timeline-item\">
                                        <i class=\"bx ";
            // line 131
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 131, $this->source); })()), "status", [], "any", false, false, false, 131) == "Resolved")) {
                yield "bx-check-circle text-success";
            } else {
                yield "bx-x-circle text-danger";
            }
            yield " timeline-icon\"></i>
                                        <div class=\"ms-3\">
                                            <span class=\"fw-semibold d-block\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 133, $this->source); })()), "status", [], "any", false, false, false, 133), "html", null, true);
            yield "</span>
                                            <small class=\"text-muted\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 134, $this->source); })()), "resolutionDate", [], "any", false, false, false, 134)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 134, $this->source); })()), "resolutionDate", [], "any", false, false, false, 134), "Y-m-d H:i")) : ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 134, $this->source); })()), "createdAt", [], "any", false, false, false, 134), "Y-m-d H:i"))), "html", null, true);
            yield "</small>
                                        </div>
                                    </div>
                                    ";
        }
        // line 138
        yield "                                </div>
                            </div>
                        </div>
                        
                        <!-- Actions -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h6 class=\"mb-0\">Actions</h6>
                            </div>
                            <div class=\"card-body\">
                                ";
        // line 148
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 148, $this->source); })()), "status", [], "any", false, false, false, 148) == "Pending")) {
            // line 149
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 149, $this->source); })()), "id", [], "any", false, false, false, 149)]), "html", null, true);
            yield "\" class=\"btn btn-primary w-100 mb-2\">
                                        <i class=\"bx bx-edit-alt me-1\"></i> Edit Claim
                                    </a>
                                    
                                    ";
            // line 153
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 154
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_resolve", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 154, $this->source); })()), "id", [], "any", false, false, false, 154)]), "html", null, true);
                yield "\" class=\"btn btn-success w-100 mb-2\">
                                            <i class=\"bx bx-check-circle me-1\"></i> Mark as Resolved
                                        </a>
                                        <a href=\"";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157)]), "html", null, true);
                yield "\" class=\"btn btn-warning w-100 mb-2\">
                                            <i class=\"bx bx-x-circle me-1\"></i> Reject Claim
                                        </a>
                                    ";
            }
            // line 161
            yield "                                    
                                    <button type=\"button\" class=\"btn btn-danger w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                        <i class=\"bx bx-trash me-1\"></i> Delete Claim
                                    </button>
                                ";
        } else {
            // line 166
            yield "                                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 167
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 167, $this->source); })()), "status", [], "any", false, false, false, 167) == "Resolved")) {
                    // line 168
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, false, 168)]), "html", null, true);
                    yield "\" class=\"btn btn-warning w-100 mb-2\">
                                                <i class=\"bx bx-x-circle me-1\"></i> Mark as Rejected
                                            </a>
                                        ";
                } else {
                    // line 172
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_resolve", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 172, $this->source); })()), "id", [], "any", false, false, false, 172)]), "html", null, true);
                    yield "\" class=\"btn btn-success w-100 mb-2\">
                                                <i class=\"bx bx-check-circle me-1\"></i> Mark as Resolved
                                            </a>
                                        ";
                }
                // line 176
                yield "                                        
                                        <button type=\"button\" class=\"btn btn-danger w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                            <i class=\"bx bx-trash me-1\"></i> Delete Claim
                                        </button>
                                    ";
            } else {
                // line 181
                yield "                                        <p class=\"text-muted mb-0\">This claim is ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 181, $this->source); })()), "status", [], "any", false, false, false, 181)), "html", null, true);
                yield " and cannot be modified.</p>
                                    ";
            }
            // line 183
            yield "                                ";
        }
        // line 184
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirm Deletion</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Are you sure you want to delete this claim? This action cannot be undone.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                <form action=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 206, $this->source); })()), "id", [], "any", false, false, false, 206)]), "html", null, true);
        yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 207, $this->source); })()), "id", [], "any", false, false, false, 207))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
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

    // line 216
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 217
        yield "    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
        <div class=\"mb-2 mb-md-0\">
            © ";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Movable, All rights reserved.
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
        return "reclamation/show.html.twig";
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
        return array (  485 => 219,  481 => 217,  468 => 216,  449 => 207,  445 => 206,  421 => 184,  418 => 183,  412 => 181,  405 => 176,  397 => 172,  389 => 168,  386 => 167,  383 => 166,  376 => 161,  369 => 157,  362 => 154,  360 => 153,  352 => 149,  350 => 148,  338 => 138,  331 => 134,  327 => 133,  318 => 131,  315 => 130,  313 => 129,  306 => 125,  289 => 110,  281 => 107,  277 => 105,  274 => 104,  268 => 101,  264 => 99,  262 => 98,  257 => 96,  250 => 92,  245 => 89,  241 => 87,  237 => 85,  235 => 84,  232 => 83,  230 => 82,  211 => 66,  204 => 61,  200 => 59,  196 => 57,  194 => 56,  191 => 55,  189 => 54,  184 => 52,  179 => 50,  165 => 39,  159 => 36,  155 => 35,  148 => 30,  135 => 29,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base1.html.twig\" %}

{% block title %}Claim Details - Movable{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.timeline-with-icons {
    position: relative;
    padding-left: 2.5rem;
}
.timeline-item {
    position: relative;
}
.timeline-icon {
    position: absolute;
    left: -2.5rem;
    width: 2rem;
    height: 2rem;
    border-radius: 50%;
    text-align: center;
    line-height: 2rem;
    background: #fff;
    border: 2px solid currentColor;
}
</style>
{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <div>
                    <h5 class=\"mb-0\">Claim #{{ reclamation.id }}</h5>
                    <span class=\"text-muted\">Submitted on {{ reclamation.createdAt|date('M d, Y H:i') }}</span>
                </div>
                <div>
                    <a href=\"{{ path('app_reclamation_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"bx bx-arrow-back me-1\"></i> Back to List
                    </a>
                </div>
            </div>
            
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <!-- Main Claim Details -->
                        <div class=\"mb-4\">
                            <h4 class=\"text-primary mb-2\">{{ reclamation.title }}</h4>
                            <div class=\"d-flex align-items-center mb-3\">
                                <span class=\"badge bg-label-primary me-2\">{{ reclamation.category }}</span>
                                
                                {% if reclamation.status == 'Pending' %}
                                    <span class=\"badge bg-label-warning\">Pending</span>
                                {% elseif reclamation.status == 'Resolved' %}
                                    <span class=\"badge bg-label-success\">Resolved</span>
                                {% else %}
                                    <span class=\"badge bg-label-danger\">Rejected</span>
                                {% endif %}
                            </div>
                            
                            <div class=\"mb-3\">
                                <h6 class=\"fw-semibold\">Description</h6>
                                <div class=\"p-3 bg-body-tertiary rounded\">
                                    {{ reclamation.description|nl2br }}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-md-4\">
                        <!-- Meta Information -->
                        <div class=\"card mb-4\">
                            <div class=\"card-header\">
                                <h6 class=\"mb-0\">Claim Information</h6>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"list-group list-group-flush\">
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <span class=\"fw-semibold\">Status</span>
                                        {% if reclamation.status == 'Pending' %}
                                            <span class=\"badge bg-warning\">Pending</span>
                                        {% elseif reclamation.status == 'Resolved' %}
                                            <span class=\"badge bg-success\">Resolved</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Rejected</span>
                                        {% endif %}
                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <span class=\"fw-semibold\">Category</span>
                                        <span>{{ reclamation.category }}</span>
                                    </li>
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <span class=\"fw-semibold\">Created</span>
                                        <span>{{ reclamation.createdAt|date('Y-m-d H:i') }}</span>
                                    </li>
                                    {% if reclamation.resolutionDate %}
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <span class=\"fw-semibold\">Resolution Date</span>
                                        <span>{{ reclamation.resolutionDate|date('Y-m-d H:i') }}</span>
                                    </li>
                                    {% endif %}
                                    {% if is_granted('ROLE_ADMIN') %}
                                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                        <span class=\"fw-semibold\">User</span>
                                        <a href=\"{{ path('app_user_view', {'id': reclamation.user.id}) }}\">{{ reclamation.user.fullName }}</a>
                                    </li>
                                    {% endif %}
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Timeline -->
                        <div class=\"card mb-4\">
                            <div class=\"card-header\">
                                <h6 class=\"mb-0\">Timeline</h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"timeline-with-icons\">
                                    <div class=\"timeline-item mb-3\">
                                        <i class=\"bx bx-plus text-primary timeline-icon\"></i>
                                        <div class=\"ms-3\">
                                            <span class=\"fw-semibold d-block\">Created</span>
                                            <small class=\"text-muted\">{{ reclamation.createdAt|date('Y-m-d H:i') }}</small>
                                        </div>
                                    </div>
                                    
                                    {% if reclamation.status != 'Pending' %}
                                    <div class=\"timeline-item\">
                                        <i class=\"bx {% if reclamation.status == 'Resolved' %}bx-check-circle text-success{% else %}bx-x-circle text-danger{% endif %} timeline-icon\"></i>
                                        <div class=\"ms-3\">
                                            <span class=\"fw-semibold d-block\">{{ reclamation.status }}</span>
                                            <small class=\"text-muted\">{{ reclamation.resolutionDate ? reclamation.resolutionDate|date('Y-m-d H:i') : reclamation.createdAt|date('Y-m-d H:i') }}</small>
                                        </div>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        
                        <!-- Actions -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h6 class=\"mb-0\">Actions</h6>
                            </div>
                            <div class=\"card-body\">
                                {% if reclamation.status == 'Pending' %}
                                    <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-primary w-100 mb-2\">
                                        <i class=\"bx bx-edit-alt me-1\"></i> Edit Claim
                                    </a>
                                    
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"{{ path('app_reclamation_resolve', {'id': reclamation.id}) }}\" class=\"btn btn-success w-100 mb-2\">
                                            <i class=\"bx bx-check-circle me-1\"></i> Mark as Resolved
                                        </a>
                                        <a href=\"{{ path('app_reclamation_reject', {'id': reclamation.id}) }}\" class=\"btn btn-warning w-100 mb-2\">
                                            <i class=\"bx bx-x-circle me-1\"></i> Reject Claim
                                        </a>
                                    {% endif %}
                                    
                                    <button type=\"button\" class=\"btn btn-danger w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                        <i class=\"bx bx-trash me-1\"></i> Delete Claim
                                    </button>
                                {% else %}
                                    {% if is_granted('ROLE_ADMIN') %}
                                        {% if reclamation.status == 'Resolved' %}
                                            <a href=\"{{ path('app_reclamation_reject', {'id': reclamation.id}) }}\" class=\"btn btn-warning w-100 mb-2\">
                                                <i class=\"bx bx-x-circle me-1\"></i> Mark as Rejected
                                            </a>
                                        {% else %}
                                            <a href=\"{{ path('app_reclamation_resolve', {'id': reclamation.id}) }}\" class=\"btn btn-success w-100 mb-2\">
                                                <i class=\"bx bx-check-circle me-1\"></i> Mark as Resolved
                                            </a>
                                        {% endif %}
                                        
                                        <button type=\"button\" class=\"btn btn-danger w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                                            <i class=\"bx bx-trash me-1\"></i> Delete Claim
                                        </button>
                                    {% else %}
                                        <p class=\"text-muted mb-0\">This claim is {{ reclamation.status|lower }} and cannot be modified.</p>
                                    {% endif %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirm Deletion</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Are you sure you want to delete this claim? This action cannot be undone.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                <form action=\"{{ path('app_reclamation_delete', {'id': reclamation.id}) }}\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block footer %}
    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
        <div class=\"mb-2 mb-md-0\">
            © {{ \"now\"|date(\"Y\") }} Movable, All rights reserved.
        </div>
    </div>
{% endblock %}
", "reclamation/show.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\reclamation\\show.html.twig");
    }
}
