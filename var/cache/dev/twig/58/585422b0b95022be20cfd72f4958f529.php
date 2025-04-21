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

/* admin/users.html.twig */
class __TwigTemplate_f8fe0e456b3404e48c0b27ae851d72bb extends Template
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
        // line 1
        return "admin/layouts/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/users.html.twig", 1);
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

        yield "User Management - Admin Dashboard";
        
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
        yield "<h4 class=\"fw-bold py-3 mb-4\">
    <span class=\"text-muted fw-light\">Admin /</span> User Management
</h4>

<!-- Flash Messages -->
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 12
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible\" role=\"alert\">
            ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
<div class=\"row\">
    <!-- Statistics Cards -->
    <div class=\"col-xl-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Total Users</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 29, $this->source); })()), "total", [], "any", false, false, false, 29), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-primary rounded p-2\">
                            <i class=\"bx bx-user-circle bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Administrators</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 48, $this->source); })()), "admin", [], "any", false, false, false, 48), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-success rounded p-2\">
                            <i class=\"bx bx-shield-quarter bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Drivers</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 67, $this->source); })()), "driver", [], "any", false, false, false, 67), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-info rounded p-2\">
                            <i class=\"bx bx-car bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Banned Users</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 86, $this->source); })()), "banned", [], "any", false, false, false, 86), "html", null, true);
        yield "</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-danger rounded p-2\">
                            <i class=\"bx bx-block bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- User Table -->
    <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5>Users List</h5>
            <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_create");
        yield "\" class=\"btn btn-primary\">
                <i class=\"bx bx-plus me-1\"></i> Add User
            </a>
        </div>

        <!-- Filters -->
        <div class=\"card-body\">
            <div class=\"row mb-3\">
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search users...\" value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 113, $this->source); })()), "html", null, true);
        yield "\">
                        <button class=\"btn btn-outline-primary\" type=\"button\" id=\"applyFilters\">
                            <i class=\"bx bx-search\"></i>
                        </button>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <select id=\"roleFilter\" class=\"form-select\">
                        <option value=\"\">All Roles</option>
                        <option value=\"USER\" ";
        // line 122
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 122, $this->source); })()) == "USER")) ? ("selected") : (""));
        yield ">User</option>
                        <option value=\"DRIVER\" ";
        // line 123
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 123, $this->source); })()) == "DRIVER")) ? ("selected") : (""));
        yield ">Driver</option>
                        <option value=\"ADMIN\" ";
        // line 124
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 124, $this->source); })()) == "ADMIN")) ? ("selected") : (""));
        yield ">Admin</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <button class=\"btn btn-outline-secondary w-100\" onclick=\"window.location.href='";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "'\">
                        <i class=\"bx bx-reset\"></i> Reset Filters
                    </button>
                </div>
            </div>

            <div class=\"table-responsive text-nowrap\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Last Login</th>
                            <th>Registered</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 147, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 148
            yield "                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar avatar-sm me-3\">
                                            <span class=\"avatar-initial rounded-circle bg-label-primary\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 152))), "html", null, true);
            yield "</span>
                                        </div>
                                        <div>
                                            ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 155), "html", null, true);
            yield "
                                            <div class=\"small text-muted\">";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 156), "html", null, true);
            yield "</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    ";
            // line 161
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 161) == "ADMIN")) {
                // line 162
                yield "                                        <span class=\"badge bg-label-success\">Administrator</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 163
$context["user"], "role", [], "any", false, false, false, 163) == "DRIVER")) {
                // line 164
                yield "                                        <span class=\"badge bg-label-info\">Driver</span>
                                    ";
            } else {
                // line 166
                yield "                                        <span class=\"badge bg-label-primary\">User</span>
                                    ";
            }
            // line 168
            yield "                                </td>
                                <td>
                                    ";
            // line 170
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBanned", [], "any", false, false, false, 170)) {
                // line 171
                yield "                                        <span class=\"badge bg-label-danger\">Banned</span>
                                    ";
            } else {
                // line 173
                yield "                                        <span class=\"badge bg-label-success\">Active</span>
                                    ";
            }
            // line 175
            yield "                                </td>
                                <td>
                                    ";
            // line 177
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastLogin", [], "any", false, false, false, 177)) {
                // line 178
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastLogin", [], "any", false, false, false, 178), "Y-m-d H:i"), "html", null, true);
                yield "
                                    ";
            } else {
                // line 180
                yield "                                        <span class=\"text-muted\">Never</span>
                                    ";
            }
            // line 182
            yield "                                </td>
                                <td>";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 183), "Y-m-d"), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 190)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-edit-alt me-1\"></i> Edit
                                            </a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_change_role", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 193)]), "html", null, true);
            yield "\">
                                                <i class=\"bx bx-transfer me-1\"></i> Change Role
                                            </a>
                                            ";
            // line 196
            if (($context["user"] != CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 196, $this->source); })()), "user", [], "any", false, false, false, 196))) {
                // line 197
                yield "                                                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBanned", [], "any", false, false, false, 197)) {
                    // line 198
                    yield "                                                    <a class=\"dropdown-item text-success\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_unban", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 198)]), "html", null, true);
                    yield "\">
                                                        <i class=\"bx bx-check-circle me-1\"></i> Unban User
                                                    </a>
                                                ";
                } else {
                    // line 202
                    yield "                                                    <a class=\"dropdown-item text-danger\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_ban", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 202)]), "html", null, true);
                    yield "\">
                                                        <i class=\"bx bx-block me-1\"></i> Ban User
                                                    </a>
                                                ";
                }
                // line 206
                yield "                                            ";
            }
            // line 207
            yield "                                        </div>
                                    </div>
                                    ";
            // line 209
            if (($context["user"] != CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 209, $this->source); })()), "user", [], "any", false, false, false, 209))) {
                // line 210
                yield "                                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBanned", [], "any", false, false, false, 210)) {
                    // line 211
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_unban", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 211)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-success ms-2\" title=\"Unban User\">
                                                <i class=\"bx bx-check-circle\"></i>
                                            </a>
                                        ";
                } else {
                    // line 215
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_ban", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 215)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-danger ms-2\" title=\"Ban User\">
                                                <i class=\"bx bx-block\"></i>
                                            </a>
                                        ";
                }
                // line 219
                yield "                                    ";
            }
            // line 220
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 223
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center\">No users found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        yield "                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            ";
        // line 232
        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 232, $this->source); })())) > 0) && array_key_exists("total_pages", $context)) && ((isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 232, $this->source); })()) > 1))) {
            // line 233
            yield "                <div class=\"card-footer\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            Showing ";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 236, $this->source); })())), "html", null, true);
            yield " users
                        </div>
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination mb-0\">
                                ";
            // line 240
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 240, $this->source); })()) > 1)) {
                // line 241
                yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 242, $this->source); })()) - 1), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 242, $this->source); })()), "q" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 242, $this->source); })())]), "html", null, true);
                yield "\">
                                            <i class=\"bx bx-chevron-left\"></i>
                                        </a>
                                    </li>
                                ";
            }
            // line 247
            yield "
                                ";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 248, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 249
                yield "                                    <li class=\"page-item ";
                yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 249, $this->source); })()) == $context["i"])) ? ("active") : (""));
                yield "\">
                                        <a class=\"page-link\" href=\"";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["page" => $context["i"], "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 250, $this->source); })()), "q" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 250, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            yield "
                                ";
            // line 254
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 254, $this->source); })()) < (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 254, $this->source); })()))) {
                // line 255
                yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 256, $this->source); })()) + 1), "role" => (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 256, $this->source); })()), "q" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 256, $this->source); })())]), "html", null, true);
                yield "\">
                                            <i class=\"bx bx-chevron-right\"></i>
                                        </a>
                                    </li>
                                ";
            }
            // line 261
            yield "                            </ul>
                        </nav>
                    </div>
                </div>
            ";
        }
        // line 266
        yield "        </div>
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
        return "admin/users.html.twig";
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
        return array (  542 => 266,  535 => 261,  527 => 256,  524 => 255,  522 => 254,  519 => 253,  508 => 250,  503 => 249,  499 => 248,  496 => 247,  488 => 242,  485 => 241,  483 => 240,  476 => 236,  471 => 233,  469 => 232,  462 => 227,  453 => 223,  446 => 220,  443 => 219,  435 => 215,  427 => 211,  424 => 210,  422 => 209,  418 => 207,  415 => 206,  407 => 202,  399 => 198,  396 => 197,  394 => 196,  388 => 193,  382 => 190,  372 => 183,  369 => 182,  365 => 180,  359 => 178,  357 => 177,  353 => 175,  349 => 173,  345 => 171,  343 => 170,  339 => 168,  335 => 166,  331 => 164,  329 => 163,  326 => 162,  324 => 161,  316 => 156,  312 => 155,  306 => 152,  300 => 148,  295 => 147,  273 => 128,  266 => 124,  262 => 123,  258 => 122,  246 => 113,  233 => 103,  213 => 86,  191 => 67,  169 => 48,  147 => 29,  135 => 19,  121 => 14,  116 => 13,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layouts/admin.html.twig' %}

{% block title %}User Management - Admin Dashboard{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">
    <span class=\"text-muted fw-light\">Admin /</span> User Management
</h4>

<!-- Flash Messages -->
{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }} alert-dismissible\" role=\"alert\">
            {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}
{% endfor %}

<div class=\"row\">
    <!-- Statistics Cards -->
    <div class=\"col-xl-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Total Users</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">{{ stats.total }}</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-primary rounded p-2\">
                            <i class=\"bx bx-user-circle bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Administrators</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">{{ stats.admin }}</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-success rounded p-2\">
                            <i class=\"bx bx-shield-quarter bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Drivers</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">{{ stats.driver }}</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-info rounded p-2\">
                            <i class=\"bx bx-car bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-3 col-sm-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"card-info\">
                        <p class=\"card-text\">Banned Users</p>
                        <div class=\"d-flex align-items-end mb-2\">
                            <h4 class=\"card-title mb-0 me-2\">{{ stats.banned }}</h4>
                        </div>
                    </div>
                    <div class=\"card-icon\">
                        <span class=\"badge bg-label-danger rounded p-2\">
                            <i class=\"bx bx-block bx-sm\"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- User Table -->
    <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5>Users List</h5>
            <a href=\"{{ path('app_admin_user_create') }}\" class=\"btn btn-primary\">
                <i class=\"bx bx-plus me-1\"></i> Add User
            </a>
        </div>

        <!-- Filters -->
        <div class=\"card-body\">
            <div class=\"row mb-3\">
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search users...\" value=\"{{ query }}\">
                        <button class=\"btn btn-outline-primary\" type=\"button\" id=\"applyFilters\">
                            <i class=\"bx bx-search\"></i>
                        </button>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <select id=\"roleFilter\" class=\"form-select\">
                        <option value=\"\">All Roles</option>
                        <option value=\"USER\" {{ role == 'USER' ? 'selected' : '' }}>User</option>
                        <option value=\"DRIVER\" {{ role == 'DRIVER' ? 'selected' : '' }}>Driver</option>
                        <option value=\"ADMIN\" {{ role == 'ADMIN' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <button class=\"btn btn-outline-secondary w-100\" onclick=\"window.location.href='{{ path('app_admin_users') }}'\">
                        <i class=\"bx bx-reset\"></i> Reset Filters
                    </button>
                </div>
            </div>

            <div class=\"table-responsive text-nowrap\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Last Login</th>
                            <th>Registered</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"table-border-bottom-0\">
                        {% for user in users %}
                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar avatar-sm me-3\">
                                            <span class=\"avatar-initial rounded-circle bg-label-primary\">{{ user.fullName|first|upper }}</span>
                                        </div>
                                        <div>
                                            {{ user.fullName }}
                                            <div class=\"small text-muted\">{{ user.email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    {% if user.role == 'ADMIN' %}
                                        <span class=\"badge bg-label-success\">Administrator</span>
                                    {% elseif user.role == 'DRIVER' %}
                                        <span class=\"badge bg-label-info\">Driver</span>
                                    {% else %}
                                        <span class=\"badge bg-label-primary\">User</span>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if user.isBanned %}
                                        <span class=\"badge bg-label-danger\">Banned</span>
                                    {% else %}
                                        <span class=\"badge bg-label-success\">Active</span>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if user.lastLogin %}
                                        {{ user.lastLogin|date('Y-m-d H:i') }}
                                    {% else %}
                                        <span class=\"text-muted\">Never</span>
                                    {% endif %}
                                </td>
                                <td>{{ user.createdAt|date('Y-m-d') }}</td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"{{ path('app_admin_user_edit', {'id': user.id}) }}\">
                                                <i class=\"bx bx-edit-alt me-1\"></i> Edit
                                            </a>
                                            <a class=\"dropdown-item\" href=\"{{ path('app_admin_user_change_role', {'id': user.id}) }}\">
                                                <i class=\"bx bx-transfer me-1\"></i> Change Role
                                            </a>
                                            {% if user != app.user %}
                                                {% if user.isBanned %}
                                                    <a class=\"dropdown-item text-success\" href=\"{{ path('app_admin_user_unban', {'id': user.id}) }}\">
                                                        <i class=\"bx bx-check-circle me-1\"></i> Unban User
                                                    </a>
                                                {% else %}
                                                    <a class=\"dropdown-item text-danger\" href=\"{{ path('app_admin_user_ban', {'id': user.id}) }}\">
                                                        <i class=\"bx bx-block me-1\"></i> Ban User
                                                    </a>
                                                {% endif %}
                                            {% endif %}
                                        </div>
                                    </div>
                                    {% if user != app.user %}
                                        {% if user.isBanned %}
                                            <a href=\"{{ path('app_admin_user_unban', {'id': user.id}) }}\" class=\"btn btn-sm btn-success ms-2\" title=\"Unban User\">
                                                <i class=\"bx bx-check-circle\"></i>
                                            </a>
                                        {% else %}
                                            <a href=\"{{ path('app_admin_user_ban', {'id': user.id}) }}\" class=\"btn btn-sm btn-danger ms-2\" title=\"Ban User\">
                                                <i class=\"bx bx-block\"></i>
                                            </a>
                                        {% endif %}
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center\">No users found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            {% if users|length > 0 and total_pages is defined and total_pages > 1 %}
                <div class=\"card-footer\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            Showing {{ users|length }} users
                        </div>
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination mb-0\">
                                {% if currentPage > 1 %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('app_admin_users', {'page': currentPage-1, 'role': role, 'q': query}) }}\">
                                            <i class=\"bx bx-chevron-left\"></i>
                                        </a>
                                    </li>
                                {% endif %}

                                {% for i in 1..total_pages %}
                                    <li class=\"page-item {{ currentPage == i ? 'active' : '' }}\">
                                        <a class=\"page-link\" href=\"{{ path('app_admin_users', {'page': i, 'role': role, 'q': query}) }}\">{{ i }}</a>
                                    </li>
                                {% endfor %}

                                {% if currentPage < total_pages %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('app_admin_users', {'page': currentPage+1, 'role': role, 'q': query}) }}\">
                                            <i class=\"bx bx-chevron-right\"></i>
                                        </a>
                                    </li>
                                {% endif %}
                            </ul>
                        </nav>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}

", "admin/users.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\users.html.twig");
    }
}
