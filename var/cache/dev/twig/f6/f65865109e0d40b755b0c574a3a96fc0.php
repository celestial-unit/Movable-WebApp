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

/* user/view.html.twig */
class __TwigTemplate_f14a9b7ce791ffd4995dd9d043e08926 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layouts/default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/view.html.twig"));

        $this->parent = $this->loadTemplate("layouts/default.html.twig", "user/view.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "fullName", [], "any", false, false, false, 3), "html", null, true);
        yield " - Movable";
        
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
        yield "<div class=\"row\">
    <!-- User Profile Overview -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Profile Overview</h5>
                ";
        // line 12
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12) == (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })())))) {
            // line 13
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_settings");
            yield "\" class=\"btn btn-primary btn-sm\">
                        <i class=\"bx bx-edit me-1\"></i> Edit Profile
                    </a>
                ";
        }
        // line 17
        yield "            </div>
            <div class=\"card-body\">
                <div class=\"d-flex align-items-start align-items-sm-center gap-4 mb-4\">
                    <div class=\"avatar avatar-xl\">
                        <span class=\"avatar-initial rounded-circle bg-primary\">
                            ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "firstName", [], "any", false, false, false, 22)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "lastName", [], "any", false, false, false, 22)), "html", null, true);
        yield "
                        </span>
                    </div>
                    <div>
                        <h5 class=\"mb-0\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "fullName", [], "any", false, false, false, 26), "html", null, true);
        yield "</h5>
                        <div class=\"text-muted\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), "html", null, true);
        yield "</div>
                        <div class=\"mt-1\">
                            ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "role", [], "any", false, false, false, 29) == "ADMIN")) {
            // line 30
            yield "                                <span class=\"badge bg-label-success\">Administrator</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "role", [], "any", false, false, false, 31) == "DRIVER")) {
            // line 32
            yield "                                <span class=\"badge bg-label-info\">Driver</span>
                            ";
        } else {
            // line 34
            yield "                                <span class=\"badge bg-label-primary\">User</span>
                            ";
        }
        // line 36
        yield "                        </div>
                    </div>
                </div>

                <div class=\"info-container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <small class=\"text-muted text-uppercase\">Member Since</small>
                            <div>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "createdAt", [], "any", false, false, false, 44), "M d, Y"), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <small class=\"text-muted text-uppercase\">Last Login</small>
                            <div>
                                ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "lastLogin", [], "any", false, false, false, 49)) {
            // line 50
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "lastLogin", [], "any", false, false, false, 50), "M d, Y H:i"), "html", null, true);
            yield "
                                ";
        } else {
            // line 52
            yield "                                    Never
                                ";
        }
        // line 54
        yield "                            </div>
                        </div>
                    </div>
                    ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "isBanned", [], "any", false, false, false, 57)) {
            // line 58
            yield "                        <div class=\"alert alert-danger d-flex align-items-center mb-0\" role=\"alert\">
                            <i class=\"bx bx-block me-2\"></i>
                            <div>
                                This account is currently banned
                                ";
            // line 62
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "banExpiryDate", [], "any", false, false, false, 62)) {
                // line 63
                yield "                                    until ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "banExpiryDate", [], "any", false, false, false, 63), "M d, Y H:i"), "html", null, true);
                yield "
                                ";
            }
            // line 65
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "banReason", [], "any", false, false, false, 65)) {
                // line 66
                yield "                                    <br>
                                    <small>Reason: ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "banReason", [], "any", false, false, false, 67), "html", null, true);
                yield "</small>
                                ";
            }
            // line 69
            yield "                            </div>
                        </div>
                    ";
        }
        // line 72
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Recent Claims -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Recent Claims</h5>
                ";
        // line 82
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 83
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">
                        View All Claims
                    </a>
                ";
        }
        // line 87
        yield "            </div>
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "reclamations", [], "any", false, false, false, 99), 0, 5));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 100
            yield "                            <tr>
                                <td>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "title", [], "any", false, false, false, 101), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 103
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "status", [], "any", false, false, false, 103) == "Pending")) {
                // line 104
                yield "                                        <span class=\"badge bg-label-warning\">Pending</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 105
$context["reclamation"], "status", [], "any", false, false, false, 105) == "Resolved")) {
                // line 106
                yield "                                        <span class=\"badge bg-label-success\">Resolved</span>
                                    ";
            } else {
                // line 108
                yield "                                        <span class=\"badge bg-label-danger\">Rejected</span>
                                    ";
            }
            // line 110
            yield "                                </td>
                                <td>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 111), "Y-m-d"), "html", null, true);
            yield "</td>
                                <td>
                                    <a href=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-sm btn-icon btn-text-secondary\">
                                        <i class=\"bx bx-show\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 120
            yield "                            <tr>
                                <td colspan=\"4\" class=\"text-center\">No claims found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Account Activity -->
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"mb-0\">Account Activity</h5>
            </div>
            <div class=\"card-body\">
                <ul class=\"timeline mb-0\">
                    <li class=\"timeline-item mb-4\">
                        <span class=\"timeline-point timeline-point-primary\">
                            <i class=\"bx bx-user\"></i>
                        </span>
                        <div class=\"timeline-event\">
                            <div class=\"timeline-header mb-1\">
                                <h6 class=\"mb-0\">Account Created</h6>
                                <small class=\"text-muted\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 145, $this->source); })()), "createdAt", [], "any", false, false, false, 145), "M d, Y"), "html", null, true);
        yield "</small>
                            </div>
                            <p class=\"mb-2\">Account registration completed</p>
                        </div>
                    </li>
                    ";
        // line 150
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 150, $this->source); })()), "lastLogin", [], "any", false, false, false, 150)) {
            // line 151
            yield "                        <li class=\"timeline-item mb-4\">
                            <span class=\"timeline-point timeline-point-info\">
                                <i class=\"bx bx-log-in\"></i>
                            </span>
                            <div class=\"timeline-event\">
                                <div class=\"timeline-header mb-1\">
                                    <h6 class=\"mb-0\">Last Login</h6>
                                    <small class=\"text-muted\">";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 158, $this->source); })()), "lastLogin", [], "any", false, false, false, 158), "M d, Y H:i"), "html", null, true);
            yield "</small>
                                </div>
                                <p class=\"mb-0\">Last successful login to the account</p>
                            </div>
                        </li>
                    ";
        }
        // line 164
        yield "                </ul>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 171
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

        // line 172
        yield "<style>
.timeline {
    margin: 0;
    padding: 0;
    list-style: none;
}

.timeline-item {
    position: relative;
    padding-left: 3rem;
}

.timeline-point {
    position: absolute;
    left: 0;
    width: 2rem;
    height: 2rem;
    border-radius: 50%;
    text-align: center;
    line-height: 2rem;
    background: #fff;
    border: 2px solid currentColor;
}

.timeline-point i {
    vertical-align: middle;
}

.timeline-point-primary {
    color: var(--bs-primary);
}

.timeline-point-info {
    color: var(--bs-info);
}

.timeline-event {
    position: relative;
    width: 100%;
    padding: 0;
}
</style>
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
        return "user/view.html.twig";
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
        return array (  399 => 172,  386 => 171,  370 => 164,  361 => 158,  352 => 151,  350 => 150,  342 => 145,  319 => 124,  310 => 120,  298 => 113,  293 => 111,  290 => 110,  286 => 108,  282 => 106,  280 => 105,  277 => 104,  275 => 103,  270 => 101,  267 => 100,  262 => 99,  248 => 87,  240 => 83,  238 => 82,  226 => 72,  221 => 69,  216 => 67,  213 => 66,  210 => 65,  204 => 63,  202 => 62,  196 => 58,  194 => 57,  189 => 54,  185 => 52,  179 => 50,  177 => 49,  169 => 44,  159 => 36,  155 => 34,  151 => 32,  149 => 31,  146 => 30,  144 => 29,  139 => 27,  135 => 26,  127 => 22,  120 => 17,  112 => 13,  110 => 12,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/default.html.twig\" %}

{% block title %}{{ user.fullName }} - Movable{% endblock %}

{% block body %}
<div class=\"row\">
    <!-- User Profile Overview -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Profile Overview</h5>
                {% if is_granted('ROLE_ADMIN') or app.user == user %}
                    <a href=\"{{ path('app_user_settings') }}\" class=\"btn btn-primary btn-sm\">
                        <i class=\"bx bx-edit me-1\"></i> Edit Profile
                    </a>
                {% endif %}
            </div>
            <div class=\"card-body\">
                <div class=\"d-flex align-items-start align-items-sm-center gap-4 mb-4\">
                    <div class=\"avatar avatar-xl\">
                        <span class=\"avatar-initial rounded-circle bg-primary\">
                            {{ user.firstName|first }}{{ user.lastName|first }}
                        </span>
                    </div>
                    <div>
                        <h5 class=\"mb-0\">{{ user.fullName }}</h5>
                        <div class=\"text-muted\">{{ user.email }}</div>
                        <div class=\"mt-1\">
                            {% if user.role == 'ADMIN' %}
                                <span class=\"badge bg-label-success\">Administrator</span>
                            {% elseif user.role == 'DRIVER' %}
                                <span class=\"badge bg-label-info\">Driver</span>
                            {% else %}
                                <span class=\"badge bg-label-primary\">User</span>
                            {% endif %}
                        </div>
                    </div>
                </div>

                <div class=\"info-container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <small class=\"text-muted text-uppercase\">Member Since</small>
                            <div>{{ user.createdAt|date('M d, Y') }}</div>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <small class=\"text-muted text-uppercase\">Last Login</small>
                            <div>
                                {% if user.lastLogin %}
                                    {{ user.lastLogin|date('M d, Y H:i') }}
                                {% else %}
                                    Never
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    {% if user.isBanned %}
                        <div class=\"alert alert-danger d-flex align-items-center mb-0\" role=\"alert\">
                            <i class=\"bx bx-block me-2\"></i>
                            <div>
                                This account is currently banned
                                {% if user.banExpiryDate %}
                                    until {{ user.banExpiryDate|date('M d, Y H:i') }}
                                {% endif %}
                                {% if user.banReason %}
                                    <br>
                                    <small>Reason: {{ user.banReason }}</small>
                                {% endif %}
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Claims -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"mb-0\">Recent Claims</h5>
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('app_reclamation_user', {'id': user.id}) }}\" class=\"btn btn-primary btn-sm\">
                        View All Claims
                    </a>
                {% endif %}
            </div>
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for reclamation in user.reclamations|slice(0, 5) %}
                            <tr>
                                <td>{{ reclamation.title }}</td>
                                <td>
                                    {% if reclamation.status == 'Pending' %}
                                        <span class=\"badge bg-label-warning\">Pending</span>
                                    {% elseif reclamation.status == 'Resolved' %}
                                        <span class=\"badge bg-label-success\">Resolved</span>
                                    {% else %}
                                        <span class=\"badge bg-label-danger\">Rejected</span>
                                    {% endif %}
                                </td>
                                <td>{{ reclamation.createdAt|date('Y-m-d') }}</td>
                                <td>
                                    <a href=\"{{ path('app_reclamation_show', {'id': reclamation.id}) }}\" 
                                       class=\"btn btn-sm btn-icon btn-text-secondary\">
                                        <i class=\"bx bx-show\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\" class=\"text-center\">No claims found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Account Activity -->
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"mb-0\">Account Activity</h5>
            </div>
            <div class=\"card-body\">
                <ul class=\"timeline mb-0\">
                    <li class=\"timeline-item mb-4\">
                        <span class=\"timeline-point timeline-point-primary\">
                            <i class=\"bx bx-user\"></i>
                        </span>
                        <div class=\"timeline-event\">
                            <div class=\"timeline-header mb-1\">
                                <h6 class=\"mb-0\">Account Created</h6>
                                <small class=\"text-muted\">{{ user.createdAt|date('M d, Y') }}</small>
                            </div>
                            <p class=\"mb-2\">Account registration completed</p>
                        </div>
                    </li>
                    {% if user.lastLogin %}
                        <li class=\"timeline-item mb-4\">
                            <span class=\"timeline-point timeline-point-info\">
                                <i class=\"bx bx-log-in\"></i>
                            </span>
                            <div class=\"timeline-event\">
                                <div class=\"timeline-header mb-1\">
                                    <h6 class=\"mb-0\">Last Login</h6>
                                    <small class=\"text-muted\">{{ user.lastLogin|date('M d, Y H:i') }}</small>
                                </div>
                                <p class=\"mb-0\">Last successful login to the account</p>
                            </div>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
.timeline {
    margin: 0;
    padding: 0;
    list-style: none;
}

.timeline-item {
    position: relative;
    padding-left: 3rem;
}

.timeline-point {
    position: absolute;
    left: 0;
    width: 2rem;
    height: 2rem;
    border-radius: 50%;
    text-align: center;
    line-height: 2rem;
    background: #fff;
    border: 2px solid currentColor;
}

.timeline-point i {
    vertical-align: middle;
}

.timeline-point-primary {
    color: var(--bs-primary);
}

.timeline-point-info {
    color: var(--bs-info);
}

.timeline-event {
    position: relative;
    width: 100%;
    padding: 0;
}
</style>
{% endblock %}
", "user/view.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\user\\view.html.twig");
    }
}
