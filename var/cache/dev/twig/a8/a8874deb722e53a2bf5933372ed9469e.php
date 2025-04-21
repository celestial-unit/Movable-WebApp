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

/* admin/reservation/_reservations_table.html.twig */
class __TwigTemplate_02d7344f5a46b88f566bce8412ce7166 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/_reservations_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/_reservations_table.html.twig"));

        // line 1
        yield "<table class=\"table table-hover\">
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
            ";
        // line 12
        if ((isset($context["show_actions"]) || array_key_exists("show_actions", $context) ? $context["show_actions"] : (function () { throw new RuntimeError('Variable "show_actions" does not exist.', 12, $this->source); })())) {
            // line 13
            yield "                <th>Actions</th>
            ";
        }
        // line 15
        yield "        </tr>
    </thead>
    <tbody class=\"table-border-bottom-0\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 19
            yield "            <tr>
                <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                <td>
    <div class=\"d-flex align-items-center\">
        <div class=\"avatar avatar-sm me-3\">
            <span class=\"avatar-initial rounded-circle bg-primary\">
                ";
            // line 25
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 25) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, true, false, 25), "firstName", [], "any", true, true, false, 25)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, true, false, 25), "lastName", [], "any", true, true, false, 25))) {
                // line 26
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 26), "firstName", [], "any", false, false, false, 26)), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 26), "lastName", [], "any", false, false, false, 26)), "html", null, true);
                yield "
                ";
            } else {
                // line 28
                yield "                    ??
                ";
            }
            // line 30
            yield "            </span>
        </div>
        <div>
            <h6 class=\"mb-0\">
                ";
            // line 34
            if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 34)) {
                // line 35
                yield "                    ";
                (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, true, false, 35), "fullName", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, true, false, 35), "fullName", [], "any", false, false, false, 35)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, true, false, 35), "fullName", [], "any", false, false, false, 35), "html", null, true)) : (yield "[Deleted User]"));
                yield "
                ";
            } else {
                // line 37
                yield "                    [Deleted User]
                ";
            }
            // line 39
            yield "            </h6>
            <small class=\"text-muted\">
                ";
            // line 41
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 41) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, true, false, 41), "email", [], "any", true, true, false, 41))) {
                // line 42
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), "html", null, true);
                yield "
                ";
            } else {
                // line 44
                yield "                    N/A
                ";
            }
            // line 46
            yield "            </small>
        </div>
    </div>
</td>

                <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "destination", [], "any", false, false, false, 51)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "destination", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51)) : (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "location", [], "any", false, false, false, 51))), "html", null, true);
            yield "</td>
                <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 52), "Y-m-d H:i"), "html", null, true);
            yield "</td>
                <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "seats", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "price", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "price", [], "any", false, false, false, 54), "N/A")) : ("N/A")), "html", null, true);
            yield " TND</td>
                <td>";
            // line 55
            ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "transport", [], "any", false, false, false, 55)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "transport", [], "any", false, false, false, 55), "type", [], "any", false, false, false, 55), "html", null, true)) : (yield "N/A"));
            yield "</td>
                <td>
                    <span class=\"badge bg-";
            // line 57
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 57) == "approved")) ? ("success") : ("danger"));
            yield "\">
                        ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 58)), "html", null, true);
            yield "
                    </span>
                </td>
                ";
            // line 61
            if ((isset($context["show_actions"]) || array_key_exists("show_actions", $context) ? $context["show_actions"] : (function () { throw new RuntimeError('Variable "show_actions" does not exist.', 61, $this->source); })())) {
                // line 62
                yield "                    <td>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                            </button>
                            <div class=\"dropdown-menu\">
                                ";
                // line 68
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 68) == "pending")) {
                    // line 69
                    yield "                                    <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                    yield "\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("accept" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 70))), "html", null, true);
                    yield "\">
                                        <button type=\"submit\" class=\"dropdown-item text-success\">
                                            <i class=\"bx bx-check-circle me-1\"></i> Accept
                                        </button>
                                    </form>
                                    <form method=\"post\" action=\"";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                    yield "\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 76
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reject" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 76))), "html", null, true);
                    yield "\">
                                        <button type=\"submit\" class=\"dropdown-item text-danger\" 
                                                onclick=\"return confirm('Are you sure you want to reject this reservation?')\">
                                            <i class=\"bx bx-x-circle me-1\"></i> Reject
                                        </button>
                                    </form>
                                ";
                }
                // line 83
                yield "                                <a class=\"dropdown-item\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                yield "\">
                                    <i class=\"bx bx-show me-1\"></i> View Details
                                </a>
                            </div>
                        </div>
                    </td>
                ";
            }
            // line 90
            yield "            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            yield "            <tr>
                <td colspan=\"";
            // line 93
            yield (((isset($context["show_actions"]) || array_key_exists("show_actions", $context) ? $context["show_actions"] : (function () { throw new RuntimeError('Variable "show_actions" does not exist.', 93, $this->source); })())) ? (9) : (8));
            yield "\" class=\"text-center py-3\">
                    <div class=\"text-muted\">
                        <i class=\"bx bx-calendar-check fs-3 mb-2\"></i>
                        <p>No reservations found</p>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "    </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/reservation/_reservations_table.html.twig";
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
        return array (  246 => 101,  232 => 93,  229 => 92,  223 => 90,  212 => 83,  202 => 76,  198 => 75,  190 => 70,  185 => 69,  183 => 68,  175 => 62,  173 => 61,  167 => 58,  163 => 57,  158 => 55,  154 => 54,  150 => 53,  146 => 52,  142 => 51,  135 => 46,  131 => 44,  125 => 42,  123 => 41,  119 => 39,  115 => 37,  109 => 35,  107 => 34,  101 => 30,  97 => 28,  90 => 26,  88 => 25,  80 => 20,  77 => 19,  72 => 18,  67 => 15,  63 => 13,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table table-hover\">
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
            {% if show_actions %}
                <th>Actions</th>
            {% endif %}
        </tr>
    </thead>
    <tbody class=\"table-border-bottom-0\">
        {% for reservation in reservations %}
            <tr>
                <td>{{ reservation.id }}</td>
                <td>
    <div class=\"d-flex align-items-center\">
        <div class=\"avatar avatar-sm me-3\">
            <span class=\"avatar-initial rounded-circle bg-primary\">
                {% if reservation.user and reservation.user.firstName is defined and reservation.user.lastName is defined %}
                    {{ reservation.user.firstName|first }}{{ reservation.user.lastName|first }}
                {% else %}
                    ??
                {% endif %}
            </span>
        </div>
        <div>
            <h6 class=\"mb-0\">
                {% if reservation.user %}
                    {{ reservation.user.fullName ?? '[Deleted User]' }}
                {% else %}
                    [Deleted User]
                {% endif %}
            </h6>
            <small class=\"text-muted\">
                {% if reservation.user and reservation.user.email is defined %}
                    {{ reservation.user.email }}
                {% else %}
                    N/A
                {% endif %}
            </small>
        </div>
    </div>
</td>

                <td>{{ reservation.destination ? reservation.destination.name : reservation.location }}</td>
                <td>{{ reservation.date|date('Y-m-d H:i') }}</td>
                <td>{{ reservation.seats }}</td>
                <td>{{ reservation.price|default('N/A') }} TND</td>
                <td>{{ reservation.transport ? reservation.transport.type : 'N/A' }}</td>
                <td>
                    <span class=\"badge bg-{{ reservation.status == 'approved' ? 'success' : 'danger' }}\">
                        {{ reservation.status|capitalize }}
                    </span>
                </td>
                {% if show_actions %}
                    <td>
                        <div class=\"dropdown\">
                            <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                            </button>
                            <div class=\"dropdown-menu\">
                                {% if reservation.status == 'pending' %}
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
                                {% endif %}
                                <a class=\"dropdown-item\" href=\"{{ path('app_reservation_show', {'id': reservation.id}) }}\">
                                    <i class=\"bx bx-show me-1\"></i> View Details
                                </a>
                            </div>
                        </div>
                    </td>
                {% endif %}
            </tr>
        {% else %}
            <tr>
                <td colspan=\"{{ show_actions ? 9 : 8 }}\" class=\"text-center py-3\">
                    <div class=\"text-muted\">
                        <i class=\"bx bx-calendar-check fs-3 mb-2\"></i>
                        <p>No reservations found</p>
                    </div>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>", "admin/reservation/_reservations_table.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\admin\\reservation\\_reservations_table.html.twig");
    }
}
