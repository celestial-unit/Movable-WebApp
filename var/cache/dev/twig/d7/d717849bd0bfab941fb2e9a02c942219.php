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

/* admin/reclamation_dashboard.html.twig */
class __TwigTemplate_858dd520b9ddfa7d41b9af07fcd387bf extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "admin/layouts/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation_dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamation_dashboard.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/reclamation_dashboard.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Claims Dashboard - Movable";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"row\">
    <!-- Statistics Cards -->
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Pending Claims</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-warning rounded p-2\">
                            <i class=\"bx bx-time bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Resolved Claims</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resolvedCount"]) || array_key_exists("resolvedCount", $context) ? $context["resolvedCount"] : (function () { throw new RuntimeError('Variable "resolvedCount" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-success rounded p-2\">
                            <i class=\"bx bx-check-circle bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Rejected Claims</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rejectedCount"]) || array_key_exists("rejectedCount", $context) ? $context["rejectedCount"] : (function () { throw new RuntimeError('Variable "rejectedCount" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-danger rounded p-2\">
                            <i class=\"bx bx-x-circle bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Total Claims</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 74, $this->source); })()) + (isset($context["resolvedCount"]) || array_key_exists("resolvedCount", $context) ? $context["resolvedCount"] : (function () { throw new RuntimeError('Variable "resolvedCount" does not exist.', 74, $this->source); })())) + (isset($context["rejectedCount"]) || array_key_exists("rejectedCount", $context) ? $context["rejectedCount"] : (function () { throw new RuntimeError('Variable "rejectedCount" does not exist.', 74, $this->source); })())), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-primary rounded p-2\">
                            <i class=\"bx bx-list-ul bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Claims Management -->
    <div class=\"col-12 mb-4\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between\">
                <h5 class=\"m-0\">Claims Management</h5>
                <div>
                    <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_dashboard", ["status" => "Pending"]);
        yield "\" class=\"btn btn-outline-warning btn-sm me-1\">
                        Pending Claims
                    </a>
                    <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_dashboard", ["status" => "Resolved"]);
        yield "\" class=\"btn btn-outline-success btn-sm me-1\">
                        Resolved Claims
                    </a>
                    <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_dashboard", ["status" => "Rejected"]);
        yield "\" class=\"btn btn-outline-danger btn-sm me-1\">
                        Rejected Claims
                    </a>
                    <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_dashboard");
        yield "\" class=\"btn btn-primary btn-sm\">
                        View All Claims
                    </a>
                </div>
            </div>
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["claims"]) || array_key_exists("claims", $context) ? $context["claims"] : (function () { throw new RuntimeError('Variable "claims" does not exist.', 120, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["claim"]) {
            // line 121
            yield "                            <tr>
                                <td>#";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 122), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar avatar-sm me-2\">
                                            <span class=\"avatar-initial rounded-circle bg-primary\">
                                                ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "user", [], "any", false, false, false, 127), "firstName", [], "any", false, false, false, 127)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "user", [], "any", false, false, false, 127), "lastName", [], "any", false, false, false, 127)), "html", null, true);
            yield "
                                            </span>
                                        </div>
                                        <div>
                                            ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "user", [], "any", false, false, false, 131), "fullName", [], "any", false, false, false, 131), "html", null, true);
            yield "
                                            <div class=\"small text-muted\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "user", [], "any", false, false, false, 132), "email", [], "any", false, false, false, 132), "html", null, true);
            yield "</div>
                                        </div>
                                    </div>
                                </td>
                                <td>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "title", [], "any", false, false, false, 136), "html", null, true);
            yield "</td>
                                <td>
                                    <span class=\"badge bg-label-primary\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "category", [], "any", false, false, false, 138), "html", null, true);
            yield "</span>
                                </td>
                                <td>
                                    ";
            // line 141
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "status", [], "any", false, false, false, 141) == "Pending")) {
                // line 142
                yield "                                        <span class=\"badge bg-label-warning\">Pending</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 143
$context["claim"], "status", [], "any", false, false, false, 143) == "Resolved")) {
                // line 144
                yield "                                        <span class=\"badge bg-label-success\">Resolved</span>
                                    ";
            } else {
                // line 146
                yield "                                        <span class=\"badge bg-label-danger\">Rejected</span>
                                    ";
            }
            // line 148
            yield "                                </td>
                                <td>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "createdAt", [], "any", false, false, false, 149), "Y-m-d H:i"), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 151
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "status", [], "any", false, false, false, 151) == "Pending")) {
                // line 152
                yield "                                        <div class=\"d-flex\">
                                            <a href=\"";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 153)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-icon btn-outline-primary me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"View\">
                                                <i class=\"bx bx-show-alt\"></i>
                                            </a>
                                            <form method=\"POST\" action=\"";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_resolve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 156)]), "html", null, true);
                yield "\" class=\"d-inline me-1\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-icon btn-outline-success\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Resolve\" onclick=\"return confirm('Are you sure you want to resolve this claim?')\">
                                                    <i class=\"bx bx-check\"></i>
                                                </button>
                                            </form>
                                            <form method=\"POST\" action=\"";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 161)]), "html", null, true);
                yield "\" class=\"d-inline\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-icon btn-outline-danger\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Reject\" onclick=\"return confirm('Are you sure you want to reject this claim?')\">
                                                    <i class=\"bx bx-x\"></i>
                                                </button>
                                            </form>
                                        </div>
                                    ";
            } else {
                // line 168
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["claim"], "id", [], "any", false, false, false, 168)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-icon btn-outline-primary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"View\">
                                            <i class=\"bx bx-show-alt\"></i>
                                        </a>
                                    ";
            }
            // line 172
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 175
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center\">No claims found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['claim'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Statistics -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"card-title mb-0\">Category Distribution</h5>
            </div>
            <div class=\"card-body\">
                ";
        // line 192
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "categories", [], "any", true, true, false, 192)) {
            // line 193
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 193, $this->source); })()), "categories", [], "any", false, false, false, 193));
            foreach ($context['_seq'] as $context["category"] => $context["count"]) {
                // line 194
                yield "                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <div class=\"d-flex align-items-center\">
                                <span class=\"badge bg-label-primary me-2\">";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
                yield "</span>
                                <span>";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
                yield " claims</span>
                            </div>
                            <div class=\"progress w-50\" style=\"height: 8px;\">
                                <div class=\"progress-bar\" role=\"progressbar\" 
                                     style=\"width: ";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((($context["count"] / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 201, $this->source); })()), "total", [], "any", false, false, false, 201)) * 100)), "html", null, true);
                yield "%\"
                                     aria-valuenow=\"";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((($context["count"] / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 202, $this->source); })()), "total", [], "any", false, false, false, 202)) * 100)), "html", null, true);
                yield "\" 
                                     aria-valuemin=\"0\" 
                                     aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['category'], $context['count'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            yield "                ";
        } else {
            // line 209
            yield "                    <p class=\"text-muted mb-0\">No category statistics available</p>
                ";
        }
        // line 211
        yield "            </div>
        </div>
    </div>

    <div class=\"col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"card-title mb-0\">Status Distribution</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <div class=\"d-flex align-items-center\">
                        <span class=\"badge bg-label-warning me-2\">Pending</span>
                        <span>";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 224, $this->source); })()), "html", null, true);
        yield " claims</span>
                    </div>
                    <div class=\"progress w-50\" style=\"height: 8px;\">
                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" 
                             style=\"width: ";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 228, $this->source); })()) / (((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 228, $this->source); })()) + (isset($context["resolvedCount"]) || array_key_exists("resolvedCount", $context) ? $context["resolvedCount"] : (function () { throw new RuntimeError('Variable "resolvedCount" does not exist.', 228, $this->source); })())) + (isset($context["rejectedCount"]) || array_key_exists("rejectedCount", $context) ? $context["rejectedCount"] : (function () { throw new RuntimeError('Variable "rejectedCount" does not exist.', 228, $this->source); })()))) * 100)), "html", null, true);
        yield "%\"
                             aria-valuenow=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 229, $this->source); })()) / (((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 229, $this->source); })()) + (isset($context["resolvedCount"]) || array_key_exists("resolvedCount", $context) ? $context["resolvedCount"] : (function () { throw new RuntimeError('Variable "resolvedCount" does not exist.', 229, $this->source); })())) + (isset($context["rejectedCount"]) || array_key_exists("rejectedCount", $context) ? $context["rejectedCount"] : (function () { throw new RuntimeError('Variable "rejectedCount" does not exist.', 229, $this->source); })()))) * 100)), "html", null, true);
        yield "\" 
                             aria-valuemin=\"0\" 
                             aria-valuemax=\"100\"></div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <div class=\"d-flex align-items-center\">
                        <span class=\"badge bg-label-success me-2\">Resolved</span>
                        <span>";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resolvedCount"]) || array_key_exists("resolvedCount", $context) ? $context["resolvedCount"] : (function () { throw new RuntimeError('Variable "resolvedCount" does not exist.', 237, $this->source); })()), "html", null, true);
        yield " claims</span>
                    </div>
                    <div class=\"progress w-50\" style=\"height: 8px;\">
                        <div class=\"progress-bar bg-success\" role=\"progressbar\" 
                             style=\"width: ";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((((isset($context["resolvedCount"]) || array_key_exists("resolvedCount", $context) ? $context["resolvedCount"] : (function () { throw new RuntimeError('Variable "resolvedCount" does not exist.', 241, $this->source); })()) / (((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 241, $this->source); })()) + (isset($context["resolvedCount"]) || array_key_exists("resolvedCount", $context) ? $context["resolvedCount"] : (function () { throw new RuntimeError('Variable "resolvedCount" does not exist.', 241, $this->source); })())) + (isset($context["rejectedCount"]) || array_key_exists("rejectedCount", $context) ? $context["rejectedCount"] : (function () { throw new RuntimeError('Variable "rejectedCount" does not exist.', 241, $this->source); })()))) * 100)), "html", null, true);
        yield "%\"
                             aria-valuenow=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((((isset($context["resolvedCount"]) || array_key_exists("resolvedCount", $context) ? $context["resolvedCount"] : (function () { throw new RuntimeError('Variable "resolvedCount" does not exist.', 242, $this->source); })()) / (((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 242, $this->source); })()) + (isset($context["resolvedCount"]) || array_key_exists("resolvedCount", $context) ? $context["resolvedCount"] : (function () { throw new RuntimeError('Variable "resolvedCount" does not exist.', 242, $this->source); })())) + (isset($context["rejectedCount"]) || array_key_exists("rejectedCount", $context) ? $context["rejectedCount"] : (function () { throw new RuntimeError('Variable "rejectedCount" does not exist.', 242, $this->source); })()))) * 100)), "html", null, true);
        yield "\" 
                             aria-valuemin=\"0\" 
                             aria-valuemax=\"100\"></div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        <span class=\"badge bg-label-danger me-2\">Rejected</span>
                        <span>";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rejectedCount"]) || array_key_exists("rejectedCount", $context) ? $context["rejectedCount"] : (function () { throw new RuntimeError('Variable "rejectedCount" does not exist.', 250, $this->source); })()), "html", null, true);
        yield " claims</span>
                    </div>
                    <div class=\"progress w-50\" style=\"height: 8px;\">
                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" 
                             style=\"width: ";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((((isset($context["rejectedCount"]) || array_key_exists("rejectedCount", $context) ? $context["rejectedCount"] : (function () { throw new RuntimeError('Variable "rejectedCount" does not exist.', 254, $this->source); })()) / (((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 254, $this->source); })()) + (isset($context["resolvedCount"]) || array_key_exists("resolvedCount", $context) ? $context["resolvedCount"] : (function () { throw new RuntimeError('Variable "resolvedCount" does not exist.', 254, $this->source); })())) + (isset($context["rejectedCount"]) || array_key_exists("rejectedCount", $context) ? $context["rejectedCount"] : (function () { throw new RuntimeError('Variable "rejectedCount" does not exist.', 254, $this->source); })()))) * 100)), "html", null, true);
        yield "%\"
                             aria-valuenow=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((((isset($context["rejectedCount"]) || array_key_exists("rejectedCount", $context) ? $context["rejectedCount"] : (function () { throw new RuntimeError('Variable "rejectedCount" does not exist.', 255, $this->source); })()) / (((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 255, $this->source); })()) + (isset($context["resolvedCount"]) || array_key_exists("resolvedCount", $context) ? $context["resolvedCount"] : (function () { throw new RuntimeError('Variable "resolvedCount" does not exist.', 255, $this->source); })())) + (isset($context["rejectedCount"]) || array_key_exists("rejectedCount", $context) ? $context["rejectedCount"] : (function () { throw new RuntimeError('Variable "rejectedCount" does not exist.', 255, $this->source); })()))) * 100)), "html", null, true);
        yield "%
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
        return "admin/reclamation_dashboard.html.twig";
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
        return array (  490 => 255,  486 => 254,  479 => 250,  468 => 242,  464 => 241,  457 => 237,  446 => 229,  442 => 228,  435 => 224,  420 => 211,  416 => 209,  413 => 208,  401 => 202,  397 => 201,  390 => 197,  386 => 196,  382 => 194,  377 => 193,  375 => 192,  360 => 179,  351 => 175,  344 => 172,  336 => 168,  326 => 161,  318 => 156,  312 => 153,  309 => 152,  307 => 151,  302 => 149,  299 => 148,  295 => 146,  291 => 144,  289 => 143,  286 => 142,  284 => 141,  278 => 138,  273 => 136,  266 => 132,  262 => 131,  254 => 127,  246 => 122,  243 => 121,  238 => 120,  217 => 102,  211 => 99,  205 => 96,  199 => 93,  177 => 74,  155 => 55,  133 => 36,  111 => 17,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% extends \"admin/layouts/admin.html.twig\" %}

{% block title %}Claims Dashboard - Movable{% endblock %}

{% block body %}
<div class=\"row\">
    <!-- Statistics Cards -->
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Pending Claims</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">{{ pendingCount }}</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-warning rounded p-2\">
                            <i class=\"bx bx-time bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Resolved Claims</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">{{ resolvedCount }}</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-success rounded p-2\">
                            <i class=\"bx bx-check-circle bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Rejected Claims</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">{{ rejectedCount }}</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-danger rounded p-2\">
                            <i class=\"bx bx-x-circle bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Total Claims</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">{{ pendingCount + resolvedCount + rejectedCount }}</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-primary rounded p-2\">
                            <i class=\"bx bx-list-ul bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Claims Management -->
    <div class=\"col-12 mb-4\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between\">
                <h5 class=\"m-0\">Claims Management</h5>
                <div>
                    <a href=\"{{ path('app_reclamation_dashboard', {'status': 'Pending'}) }}\" class=\"btn btn-outline-warning btn-sm me-1\">
                        Pending Claims
                    </a>
                    <a href=\"{{ path('app_reclamation_dashboard', {'status': 'Resolved'}) }}\" class=\"btn btn-outline-success btn-sm me-1\">
                        Resolved Claims
                    </a>
                    <a href=\"{{ path('app_reclamation_dashboard', {'status': 'Rejected'}) }}\" class=\"btn btn-outline-danger btn-sm me-1\">
                        Rejected Claims
                    </a>
                    <a href=\"{{ path('app_reclamation_dashboard') }}\" class=\"btn btn-primary btn-sm\">
                        View All Claims
                    </a>
                </div>
            </div>
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for claim in claims %}
                            <tr>
                                <td>#{{ claim.id }}</td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar avatar-sm me-2\">
                                            <span class=\"avatar-initial rounded-circle bg-primary\">
                                                {{ claim.user.firstName|first }}{{ claim.user.lastName|first }}
                                            </span>
                                        </div>
                                        <div>
                                            {{ claim.user.fullName }}
                                            <div class=\"small text-muted\">{{ claim.user.email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ claim.title }}</td>
                                <td>
                                    <span class=\"badge bg-label-primary\">{{ claim.category }}</span>
                                </td>
                                <td>
                                    {% if claim.status == 'Pending' %}
                                        <span class=\"badge bg-label-warning\">Pending</span>
                                    {% elseif claim.status == 'Resolved' %}
                                        <span class=\"badge bg-label-success\">Resolved</span>
                                    {% else %}
                                        <span class=\"badge bg-label-danger\">Rejected</span>
                                    {% endif %}
                                </td>
                                <td>{{ claim.createdAt|date('Y-m-d H:i') }}</td>
                                <td>
                                    {% if claim.status == 'Pending' %}
                                        <div class=\"d-flex\">
                                            <a href=\"{{ path('app_reclamation_show', {'id': claim.id}) }}\" class=\"btn btn-sm btn-icon btn-outline-primary me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"View\">
                                                <i class=\"bx bx-show-alt\"></i>
                                            </a>
                                            <form method=\"POST\" action=\"{{ path('app_reclamation_resolve', {'id': claim.id}) }}\" class=\"d-inline me-1\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-icon btn-outline-success\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Resolve\" onclick=\"return confirm('Are you sure you want to resolve this claim?')\">
                                                    <i class=\"bx bx-check\"></i>
                                                </button>
                                            </form>
                                            <form method=\"POST\" action=\"{{ path('app_reclamation_reject', {'id': claim.id}) }}\" class=\"d-inline\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-icon btn-outline-danger\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Reject\" onclick=\"return confirm('Are you sure you want to reject this claim?')\">
                                                    <i class=\"bx bx-x\"></i>
                                                </button>
                                            </form>
                                        </div>
                                    {% else %}
                                        <a href=\"{{ path('app_reclamation_show', {'id': claim.id}) }}\" class=\"btn btn-sm btn-icon btn-outline-primary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"View\">
                                            <i class=\"bx bx-show-alt\"></i>
                                        </a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center\">No claims found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Statistics -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"card-title mb-0\">Category Distribution</h5>
            </div>
            <div class=\"card-body\">
                {% if stats.categories is defined %}
                    {% for category, count in stats.categories %}
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <div class=\"d-flex align-items-center\">
                                <span class=\"badge bg-label-primary me-2\">{{ category }}</span>
                                <span>{{ count }} claims</span>
                            </div>
                            <div class=\"progress w-50\" style=\"height: 8px;\">
                                <div class=\"progress-bar\" role=\"progressbar\" 
                                     style=\"width: {{ (count / stats.total * 100)|round }}%\"
                                     aria-valuenow=\"{{ (count / stats.total * 100)|round }}\" 
                                     aria-valuemin=\"0\" 
                                     aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                    {% endfor %}
                {% else %}
                    <p class=\"text-muted mb-0\">No category statistics available</p>
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"card-title mb-0\">Status Distribution</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <div class=\"d-flex align-items-center\">
                        <span class=\"badge bg-label-warning me-2\">Pending</span>
                        <span>{{ pendingCount }} claims</span>
                    </div>
                    <div class=\"progress w-50\" style=\"height: 8px;\">
                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" 
                             style=\"width: {{ (pendingCount / (pendingCount + resolvedCount + rejectedCount) * 100)|round }}%\"
                             aria-valuenow=\"{{ (pendingCount / (pendingCount + resolvedCount + rejectedCount) * 100)|round }}\" 
                             aria-valuemin=\"0\" 
                             aria-valuemax=\"100\"></div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <div class=\"d-flex align-items-center\">
                        <span class=\"badge bg-label-success me-2\">Resolved</span>
                        <span>{{ resolvedCount }} claims</span>
                    </div>
                    <div class=\"progress w-50\" style=\"height: 8px;\">
                        <div class=\"progress-bar bg-success\" role=\"progressbar\" 
                             style=\"width: {{ (resolvedCount / (pendingCount + resolvedCount + rejectedCount) * 100)|round }}%\"
                             aria-valuenow=\"{{ (resolvedCount / (pendingCount + resolvedCount + rejectedCount) * 100)|round }}\" 
                             aria-valuemin=\"0\" 
                             aria-valuemax=\"100\"></div>
                    </div>
                </div>
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"d-flex align-items-center\">
                        <span class=\"badge bg-label-danger me-2\">Rejected</span>
                        <span>{{ rejectedCount }} claims</span>
                    </div>
                    <div class=\"progress w-50\" style=\"height: 8px;\">
                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" 
                             style=\"width: {{ (rejectedCount / (pendingCount + resolvedCount + rejectedCount) * 100)|round }}%\"
                             aria-valuenow=\"{{ (rejectedCount / (pendingCount + resolvedCount + rejectedCount) * 100)|round }}%
</div>
{% endblock %}
", "admin/reclamation_dashboard.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\reclamation_dashboard.html.twig");
    }
}
