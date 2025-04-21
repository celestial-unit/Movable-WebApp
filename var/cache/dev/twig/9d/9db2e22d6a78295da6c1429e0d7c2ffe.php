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

/* admin/reservation_management.html.twig */
class __TwigTemplate_59c64a086eacf2e458459950fec89a2c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_management.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_management.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/admin.html.twig", "admin/reservation_management.html.twig", 1);
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

        yield "Reservation Management";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize date pickers
            const dateInputs = document.querySelectorAll('.date-picker');
            dateInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.type = 'date';
                });
                input.addEventListener('blur', function() {
                    if (!this.value) this.type = 'text';
                });
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
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

        // line 23
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <!-- Header with navigation buttons -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h4 class=\"fw-bold py-3 mb-0\">
            <span class=\"text-muted fw-light\">Admin /</span> Reservation Management
        </h4>
        <div class=\"btn-group\">
            <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservations_approved");
        yield "\" class=\"btn btn-success\">
                <i class=\"bx bx-check-circle me-1\"></i> Approved
            </a>
            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservations_rejected");
        yield "\" class=\"btn btn-danger\">
                <i class=\"bx bx-x-circle me-1\"></i> Rejected
            </a>
            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar");
        yield "\" class=\"btn btn-primary\">
                <i class=\"bx bx-calendar me-1\"></i> Calendar
            </a>
            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics");
        yield "\" class=\"btn btn-info\">
                <i class=\"bx bx-stats me-1\"></i> Statistics
            </a>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class=\"card mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">Search & Filter Reservations</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" action=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist_index");
        yield "\">
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label\">Date Range</label>
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control date-picker\" placeholder=\"From\" name=\"date_from\">
                            <input type=\"text\" class=\"form-control date-picker\" placeholder=\"To\" name=\"date_to\">
                        </div>
                    </div>
                   <div class=\"col-md-3\">
    <label class=\"form-label\">Destination</label>
    <select class=\"form-select\" name=\"destination\">
    <option value=\"\">All Destinations</option>
    ";
        // line 64
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["destinations"]) || array_key_exists("destinations", $context) ? $context["destinations"] : (function () { throw new RuntimeError('Variable "destinations" does not exist.', 64, $this->source); })()))) {
            // line 65
            yield "        <option value=\"\" disabled>No destinations available</option>
    ";
        } else {
            // line 67
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["destinations"]) || array_key_exists("destinations", $context) ? $context["destinations"] : (function () { throw new RuntimeError('Variable "destinations" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["destination"]) {
                // line 68
                yield "            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "iddestination", [], "any", false, false, false, 68), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["destination"], "name", [], "any", false, false, false, 68), "html", null, true);
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['destination'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "    ";
        }
        // line 71
        yield "</select>
</div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label\">Transport Type</label>
                        <select class=\"form-select\" name=\"transport\">
                            <option value=\"\">All Types</option>
                            <option value=\"bus\">Bus</option>
                            <option value=\"train\">Train</option>
                            <option value=\"plane\">Plane</option>
                            <option value=\"boat\">Boat</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label\">Agent Type</label>
                        <select class=\"form-select\" name=\"agent_type\">
                            <option value=\"\">All Agents</option>
                            <option value=\"regular\">Regular</option>
                            <option value=\"premium\">Premium</option>
                            <option value=\"vip\">VIP</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label\">Sort By</label>
                        <select class=\"form-select\" name=\"sort\">
                            <option value=\"price_asc\">Price (Low to High)</option>
                            <option value=\"price_desc\">Price (High to Low)</option>
                            <option value=\"date_asc\">Date (Oldest First)</option>
                            <option value=\"date_desc\">Date (Newest First)</option>
                        </select>
                    </div>
                    <div class=\"col-md-1 d-flex align-items-end\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">
                            <i class=\"bx bx-search\"></i> Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Pending</h5>
                    <h2 class=\"mb-0\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pending_reservations"]) || array_key_exists("pending_reservations", $context) ? $context["pending_reservations"] : (function () { throw new RuntimeError('Variable "pending_reservations" does not exist.', 117, $this->source); })())), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Approved</h5>
                    <h2 class=\"mb-0\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["approved_count"]) || array_key_exists("approved_count", $context) ? $context["approved_count"] : (function () { throw new RuntimeError('Variable "approved_count" does not exist.', 125, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Rejected</h5>
                    <h2 class=\"mb-0\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rejected_count"]) || array_key_exists("rejected_count", $context) ? $context["rejected_count"] : (function () { throw new RuntimeError('Variable "rejected_count" does not exist.', 133, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Reservations Table -->
    <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">Pending Reservations</h5>
            <small class=\"text-muted\">Showing ";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pending_reservations"]) || array_key_exists("pending_reservations", $context) ? $context["pending_reservations"] : (function () { throw new RuntimeError('Variable "pending_reservations" does not exist.', 143, $this->source); })())), "html", null, true);
        yield " records</small>
        </div>
        <div class=\"table-responsive text-nowrap\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Destination</th>
                        <th>Date</th>
                        <th>Seats</th>
                        <th>Price</th>
                        <th>Transport</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class=\"table-border-bottom-0\">
                    ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pending_reservations"]) || array_key_exists("pending_reservations", $context) ? $context["pending_reservations"] : (function () { throw new RuntimeError('Variable "pending_reservations" does not exist.', 161, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 162
            yield "                        <tr>
                            <td>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 163), "html", null, true);
            yield "</td>
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"avatar avatar-sm me-3\">
                                        <span class=\"avatar-initial rounded-circle bg-primary\">
                                            ";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 168), "firstName", [], "any", false, false, false, 168)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 168), "lastName", [], "any", false, false, false, 168)), "html", null, true);
            yield "
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class=\"mb-0\">";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 172), "fullName", [], "any", false, false, false, 172), "html", null, true);
            yield "</h6>
                                        <small class=\"text-muted\">";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 173), "email", [], "any", false, false, false, 173), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                            </td>
                            <td>";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "destination", [], "any", false, false, false, 177)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "destination", [], "any", false, false, false, 177), "name", [], "any", false, false, false, 177)) : (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "location", [], "any", false, false, false, 177))), "html", null, true);
            yield "</td>
                            <td>";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 178), "Y-m-d H:i"), "html", null, true);
            yield "</td>
                            <td>";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "seats", [], "any", false, false, false, 179), "html", null, true);
            yield "</td>
                            <td>";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "price", [], "any", true, true, false, 180)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "price", [], "any", false, false, false, 180), "N/A")) : ("N/A")), "html", null, true);
            yield " TND</td>
                            <td>";
            // line 181
            ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "transport", [], "any", false, false, false, 181)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "transport", [], "any", false, false, false, 181), "type", [], "any", false, false, false, 181), "html", null, true)) : (yield "N/A"));
            yield "</td>
                            <td>
                                <span class=\"badge bg-label-warning\">Pending</span>
                            </td>
                            <td>
                                <div class=\"dropdown\">
                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <form method=\"post\" action=\"";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 191)]), "html", null, true);
            yield "\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("accept" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 192))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"dropdown-item text-success\">
                                                <i class=\"bx bx-check-circle me-1\"></i> Accept
                                            </button>
                                        </form>
                                        <form method=\"post\" action=\"";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 197)]), "html", null, true);
            yield "\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reject" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 198))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"dropdown-item text-danger\" 
                                                    onclick=\"return confirm('Are you sure you want to reject this reservation?')\">
                                                <i class=\"bx bx-x-circle me-1\"></i> Reject
                                            </button>
                                        </form>
                                        <a class=\"dropdown-item\" href=\"";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 204)]), "html", null, true);
            yield "\">
                                            <i class=\"bx bx-show me-1\"></i> View Details
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 212
            yield "                        <tr>
                            <td colspan=\"9\" class=\"text-center py-3\">
                                <div class=\"text-muted\">
                                    <i class=\"bx bx-calendar-check fs-3 mb-2\"></i>
                                    <p>No pending reservations found</p>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        yield "                </tbody>
            </table>
        </div>
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
        return "admin/reservation_management.html.twig";
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
        return array (  446 => 221,  432 => 212,  419 => 204,  410 => 198,  406 => 197,  398 => 192,  394 => 191,  381 => 181,  377 => 180,  373 => 179,  369 => 178,  365 => 177,  358 => 173,  354 => 172,  346 => 168,  338 => 163,  335 => 162,  330 => 161,  309 => 143,  296 => 133,  285 => 125,  274 => 117,  226 => 71,  223 => 70,  212 => 68,  207 => 67,  203 => 65,  201 => 64,  185 => 51,  170 => 39,  164 => 36,  158 => 33,  152 => 30,  143 => 23,  130 => 22,  101 => 5,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layouts/admin.html.twig' %}

{% block title %}Reservation Management{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize date pickers
            const dateInputs = document.querySelectorAll('.date-picker');
            dateInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.type = 'date';
                });
                input.addEventListener('blur', function() {
                    if (!this.value) this.type = 'text';
                });
            });
        });
    </script>
{% endblock %}
{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <!-- Header with navigation buttons -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h4 class=\"fw-bold py-3 mb-0\">
            <span class=\"text-muted fw-light\">Admin /</span> Reservation Management
        </h4>
        <div class=\"btn-group\">
            <a href=\"{{ path('admin_reservations_approved') }}\" class=\"btn btn-success\">
                <i class=\"bx bx-check-circle me-1\"></i> Approved
            </a>
            <a href=\"{{ path('admin_reservations_rejected') }}\" class=\"btn btn-danger\">
                <i class=\"bx bx-x-circle me-1\"></i> Rejected
            </a>
            <a href=\"{{ path('admin_calendar') }}\" class=\"btn btn-primary\">
                <i class=\"bx bx-calendar me-1\"></i> Calendar
            </a>
            <a href=\"{{ path('admin_statistics') }}\" class=\"btn btn-info\">
                <i class=\"bx bx-stats me-1\"></i> Statistics
            </a>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class=\"card mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">Search & Filter Reservations</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" action=\"{{ path('admin_waitlist_index') }}\">
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label\">Date Range</label>
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control date-picker\" placeholder=\"From\" name=\"date_from\">
                            <input type=\"text\" class=\"form-control date-picker\" placeholder=\"To\" name=\"date_to\">
                        </div>
                    </div>
                   <div class=\"col-md-3\">
    <label class=\"form-label\">Destination</label>
    <select class=\"form-select\" name=\"destination\">
    <option value=\"\">All Destinations</option>
    {% if destinations is empty %}
        <option value=\"\" disabled>No destinations available</option>
    {% else %}
        {% for destination in destinations %}
            <option value=\"{{ destination.iddestination }}\">{{ destination.name }}</option>
        {% endfor %}
    {% endif %}
</select>
</div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label\">Transport Type</label>
                        <select class=\"form-select\" name=\"transport\">
                            <option value=\"\">All Types</option>
                            <option value=\"bus\">Bus</option>
                            <option value=\"train\">Train</option>
                            <option value=\"plane\">Plane</option>
                            <option value=\"boat\">Boat</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label\">Agent Type</label>
                        <select class=\"form-select\" name=\"agent_type\">
                            <option value=\"\">All Agents</option>
                            <option value=\"regular\">Regular</option>
                            <option value=\"premium\">Premium</option>
                            <option value=\"vip\">VIP</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label\">Sort By</label>
                        <select class=\"form-select\" name=\"sort\">
                            <option value=\"price_asc\">Price (Low to High)</option>
                            <option value=\"price_desc\">Price (High to Low)</option>
                            <option value=\"date_asc\">Date (Oldest First)</option>
                            <option value=\"date_desc\">Date (Newest First)</option>
                        </select>
                    </div>
                    <div class=\"col-md-1 d-flex align-items-end\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">
                            <i class=\"bx bx-search\"></i> Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Pending</h5>
                    <h2 class=\"mb-0\">{{ pending_reservations|length }}</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Approved</h5>
                    <h2 class=\"mb-0\">{{ approved_count }}</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Rejected</h5>
                    <h2 class=\"mb-0\">{{ rejected_count }}</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Reservations Table -->
    <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">Pending Reservations</h5>
            <small class=\"text-muted\">Showing {{ pending_reservations|length }} records</small>
        </div>
        <div class=\"table-responsive text-nowrap\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Destination</th>
                        <th>Date</th>
                        <th>Seats</th>
                        <th>Price</th>
                        <th>Transport</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class=\"table-border-bottom-0\">
                    {% for reservation in pending_reservations %}
                        <tr>
                            <td>{{ reservation.id }}</td>
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"avatar avatar-sm me-3\">
                                        <span class=\"avatar-initial rounded-circle bg-primary\">
                                            {{ reservation.user.firstName|first }}{{ reservation.user.lastName|first }}
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class=\"mb-0\">{{ reservation.user.fullName }}</h6>
                                        <small class=\"text-muted\">{{ reservation.user.email }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ reservation.destination ? reservation.destination.name : reservation.location }}</td>
                            <td>{{ reservation.date|date('Y-m-d H:i') }}</td>
                            <td>{{ reservation.seats }}</td>
                            <td>{{ reservation.price|default('N/A') }} TND</td>
                            <td>{{ reservation.transport ? reservation.transport.type : 'N/A' }}</td>
                            <td>
                                <span class=\"badge bg-label-warning\">Pending</span>
                            </td>
                            <td>
                                <div class=\"dropdown\">
                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <form method=\"post\" action=\"{{ path('admin_waitlist_accept', {'id': reservation.id}) }}\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('accept' ~ reservation.id) }}\">
                                            <button type=\"submit\" class=\"dropdown-item text-success\">
                                                <i class=\"bx bx-check-circle me-1\"></i> Accept
                                            </button>
                                        </form>
                                        <form method=\"post\" action=\"{{ path('admin_waitlist_reject', {'id': reservation.id}) }}\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reject' ~ reservation.id) }}\">
                                            <button type=\"submit\" class=\"dropdown-item text-danger\" 
                                                    onclick=\"return confirm('Are you sure you want to reject this reservation?')\">
                                                <i class=\"bx bx-x-circle me-1\"></i> Reject
                                            </button>
                                        </form>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_reservation_show', {'id': reservation.id}) }}\">
                                            <i class=\"bx bx-show me-1\"></i> View Details
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"9\" class=\"text-center py-3\">
                                <div class=\"text-muted\">
                                    <i class=\"bx bx-calendar-check fs-3 mb-2\"></i>
                                    <p>No pending reservations found</p>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %} ", "admin/reservation_management.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\reservation_management.html.twig");
    }
}
