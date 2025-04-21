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

/* security/emails/reset_password.html.twig */
class __TwigTemplate_f2cf71a9d99a1f2fab2d7528a33ea7c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/emails/reset_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/emails/reset_password.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title>Reset your password</title>
    <style>
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #2b62ca !important;
            }

            .btn-primary a:hover {
                background-color: #2b62ca !important;
                border-color: #2b62ca !important;
            }
            
            .security-alert {
                background-color: #fff4e5;
                border-left: 4px solid #ff9800;
                padding: 12px;
                margin-bottom: 16px;
                border-radius: 4px;
            }
            
            .security-tips {
                background-color: #e8f4fd;
                padding: 12px;
                margin-top: 24px;
                margin-bottom: 16px;
                border-radius: 4px;
            }
            
            .security-tips ul {
                margin-top: 8px;
                margin-bottom: 0;
                padding-left: 24px;
            }
        }
    </style>
</head>
<body style=\"background-color: #f5f5f9; font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; -webkit-font-smoothing: antialiased; font-size: 16px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\">
    <span class=\"preheader\" style=\"color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;\">Reset your Movable account password</span>
    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f5f5f9; width: 100%;\" width=\"100%\" bgcolor=\"#f5f5f9\">
        <tr>
            <td style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top;\" valign=\"top\">&nbsp;</td>
            <td class=\"container\" style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top; max-width: 600px; padding: 0; padding-top: 24px; width: 600px; margin: 0 auto;\" width=\"600\" valign=\"top\">
                <div class=\"content\" style=\"box-sizing: border-box; display: block; margin: 0 auto; max-width: 600px; padding: 0;\">

                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role=\"presentation\" class=\"main\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border-radius: 8px; width: 100%;\" width=\"100%\">

                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class=\"wrapper\" style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top; box-sizing: border-box; padding: 24px;\" valign=\"top\">
                                <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\" width=\"100%\">
                                    <tr>
                                        <td align=\"center\" style=\"padding-bottom: 24px;\">
                                            <div style=\"font-size: 28px; color: #3f78e0; font-weight: bold; margin-bottom: 4px;\">
                                                Movable
                                            </div>
                                            <div style=\"width: 100px; height: 4px; background-color: #3f78e0; border-radius: 2px;\">&nbsp;</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top;\" valign=\"top\">
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;\">Hi ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 148, $this->source); })()), "firstName", [], "any", false, false, false, 148), "html", null, true);
        yield ",</p>
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;\">We received a request to reset your password for your Movable account. To reset your password, click on the button below:</p>
                                            
                                            <div class=\"security-alert\" style=\"background-color: #fff4e5; border-left: 4px solid #ff9800; padding: 12px; margin-bottom: 16px; border-radius: 4px; font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 14px;\">
                                                <strong>Security Notice:</strong> This link will expire in 1 hour for security reasons. If you did not request a password reset, please ignore this email or contact support immediately.
                                            </div>
                                            
                                            <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"btn btn-primary\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%;\" width=\"100%\">
                                                <tbody>
                                                    <tr>
                                                        <td align=\"center\" style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top; padding: 32px 0;\" valign=\"top\">
                                                            <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;\">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top; border-radius: 4px; text-align: center; background-color: #3f78e0;\" valign=\"top\" align=\"center\" bgcolor=\"#3f78e0\">
                                                                            <a href=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetUrl"]) || array_key_exists("resetUrl", $context) ? $context["resetUrl"] : (function () { throw new RuntimeError('Variable "resetUrl" does not exist.', 163, $this->source); })()), "html", null, true);
        yield "\" target=\"_blank\" style=\"border: solid 1px #3f78e0; border-radius: 4px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px; font-weight: bold; margin: 0; padding: 12px 24px; text-decoration: none; text-transform: capitalize; background-color: #3f78e0; border-color: #3f78e0; color: #ffffff;\">Reset Password</a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;\">If the button above doesn't work, you can copy and paste the following link into your browser:</p>
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 16px; word-break: break-all; background-color: #f0f0f0; padding: 12px; border-radius: 4px;\"><a href=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetUrl"]) || array_key_exists("resetUrl", $context) ? $context["resetUrl"] : (function () { throw new RuntimeError('Variable "resetUrl" does not exist.', 174, $this->source); })()), "html", null, true);
        yield "\" style=\"color: #3f78e0; text-decoration: underline;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetUrl"]) || array_key_exists("resetUrl", $context) ? $context["resetUrl"] : (function () { throw new RuntimeError('Variable "resetUrl" does not exist.', 174, $this->source); })()), "html", null, true);
        yield "</a></p>
                                            
                                            <div class=\"security-tips\" style=\"background-color: #e8f4fd; padding: 12px; margin-top: 24px; margin-bottom: 16px; border-radius: 4px; font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 14px;\">
                                                <strong>Security Tips:</strong>
                                                <ul style=\"margin-top: 8px; margin-bottom: 0; padding-left: 24px;\">
                                                    <li>Never share your password with anyone</li>
                                                    <li>Use a strong password that combines uppercase letters, lowercase letters, numbers, and special characters</li>
                                                    <li>Don't use the same password across multiple websites</li>
                                                    <li>Consider using a password manager for better security</li>
                                                </ul>
                                            </div>
                                            
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;\">If you did not request a password reset, someone might be trying to access your account. Please secure your account by changing your password immediately or contact our support team.</p>
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 8px;\">Best regards,</p>
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;\">The Movable Security Team</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->

                    <!-- START FOOTER -->
                    <div class=\"footer\" style=\"clear: both; margin-top: 10px; text-align: center; width: 100%;\">
                        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\" width=\"100%\">
                            <tr>
                                <td class=\"content-block\" style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #9a9ea6; font-size: 12px; text-align: center;\" valign=\"top\" align=\"center\">
                                    <span class=\"apple-link\" style=\"color: #9a9ea6; font-size: 12px; text-align: center;\">Movable Inc., 123 Transportation Avenue, Mobility District, Access City</span>
                                    <br> This is a security-related email and cannot be unsubscribed from.
                                </td>
                            </tr>
                            <tr>
                                <td class=\"content-block powered-by\" style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #9a9ea6; font-size: 12px; text-align: center;\" valign=\"top\" align=\"center\">
                                    © ";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Movable. All rights reserved.
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END FOOTER -->

                </div>
            </td>
            <td style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top;\" valign=\"top\">&nbsp;</td>
        </tr>
    </table>
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
        return "security/emails/reset_password.html.twig";
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
        return array (  270 => 210,  229 => 174,  215 => 163,  197 => 148,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title>Reset your password</title>
    <style>
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #2b62ca !important;
            }

            .btn-primary a:hover {
                background-color: #2b62ca !important;
                border-color: #2b62ca !important;
            }
            
            .security-alert {
                background-color: #fff4e5;
                border-left: 4px solid #ff9800;
                padding: 12px;
                margin-bottom: 16px;
                border-radius: 4px;
            }
            
            .security-tips {
                background-color: #e8f4fd;
                padding: 12px;
                margin-top: 24px;
                margin-bottom: 16px;
                border-radius: 4px;
            }
            
            .security-tips ul {
                margin-top: 8px;
                margin-bottom: 0;
                padding-left: 24px;
            }
        }
    </style>
</head>
<body style=\"background-color: #f5f5f9; font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; -webkit-font-smoothing: antialiased; font-size: 16px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\">
    <span class=\"preheader\" style=\"color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;\">Reset your Movable account password</span>
    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f5f5f9; width: 100%;\" width=\"100%\" bgcolor=\"#f5f5f9\">
        <tr>
            <td style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top;\" valign=\"top\">&nbsp;</td>
            <td class=\"container\" style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top; max-width: 600px; padding: 0; padding-top: 24px; width: 600px; margin: 0 auto;\" width=\"600\" valign=\"top\">
                <div class=\"content\" style=\"box-sizing: border-box; display: block; margin: 0 auto; max-width: 600px; padding: 0;\">

                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role=\"presentation\" class=\"main\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border-radius: 8px; width: 100%;\" width=\"100%\">

                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class=\"wrapper\" style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top; box-sizing: border-box; padding: 24px;\" valign=\"top\">
                                <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\" width=\"100%\">
                                    <tr>
                                        <td align=\"center\" style=\"padding-bottom: 24px;\">
                                            <div style=\"font-size: 28px; color: #3f78e0; font-weight: bold; margin-bottom: 4px;\">
                                                Movable
                                            </div>
                                            <div style=\"width: 100px; height: 4px; background-color: #3f78e0; border-radius: 2px;\">&nbsp;</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top;\" valign=\"top\">
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;\">Hi {{ user.firstName }},</p>
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;\">We received a request to reset your password for your Movable account. To reset your password, click on the button below:</p>
                                            
                                            <div class=\"security-alert\" style=\"background-color: #fff4e5; border-left: 4px solid #ff9800; padding: 12px; margin-bottom: 16px; border-radius: 4px; font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 14px;\">
                                                <strong>Security Notice:</strong> This link will expire in 1 hour for security reasons. If you did not request a password reset, please ignore this email or contact support immediately.
                                            </div>
                                            
                                            <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"btn btn-primary\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%;\" width=\"100%\">
                                                <tbody>
                                                    <tr>
                                                        <td align=\"center\" style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top; padding: 32px 0;\" valign=\"top\">
                                                            <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;\">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top; border-radius: 4px; text-align: center; background-color: #3f78e0;\" valign=\"top\" align=\"center\" bgcolor=\"#3f78e0\">
                                                                            <a href=\"{{ resetUrl }}\" target=\"_blank\" style=\"border: solid 1px #3f78e0; border-radius: 4px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px; font-weight: bold; margin: 0; padding: 12px 24px; text-decoration: none; text-transform: capitalize; background-color: #3f78e0; border-color: #3f78e0; color: #ffffff;\">Reset Password</a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;\">If the button above doesn't work, you can copy and paste the following link into your browser:</p>
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 16px; word-break: break-all; background-color: #f0f0f0; padding: 12px; border-radius: 4px;\"><a href=\"{{ resetUrl }}\" style=\"color: #3f78e0; text-decoration: underline;\">{{ resetUrl }}</a></p>
                                            
                                            <div class=\"security-tips\" style=\"background-color: #e8f4fd; padding: 12px; margin-top: 24px; margin-bottom: 16px; border-radius: 4px; font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 14px;\">
                                                <strong>Security Tips:</strong>
                                                <ul style=\"margin-top: 8px; margin-bottom: 0; padding-left: 24px;\">
                                                    <li>Never share your password with anyone</li>
                                                    <li>Use a strong password that combines uppercase letters, lowercase letters, numbers, and special characters</li>
                                                    <li>Don't use the same password across multiple websites</li>
                                                    <li>Consider using a password manager for better security</li>
                                                </ul>
                                            </div>
                                            
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;\">If you did not request a password reset, someone might be trying to access your account. Please secure your account by changing your password immediately or contact our support team.</p>
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 8px;\">Best regards,</p>
                                            <p style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;\">The Movable Security Team</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->

                    <!-- START FOOTER -->
                    <div class=\"footer\" style=\"clear: both; margin-top: 10px; text-align: center; width: 100%;\">
                        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\" width=\"100%\">
                            <tr>
                                <td class=\"content-block\" style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #9a9ea6; font-size: 12px; text-align: center;\" valign=\"top\" align=\"center\">
                                    <span class=\"apple-link\" style=\"color: #9a9ea6; font-size: 12px; text-align: center;\">Movable Inc., 123 Transportation Avenue, Mobility District, Access City</span>
                                    <br> This is a security-related email and cannot be unsubscribed from.
                                </td>
                            </tr>
                            <tr>
                                <td class=\"content-block powered-by\" style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #9a9ea6; font-size: 12px; text-align: center;\" valign=\"top\" align=\"center\">
                                    © {{ \"now\"|date(\"Y\") }} Movable. All rights reserved.
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END FOOTER -->

                </div>
            </td>
            <td style=\"font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', Arial, sans-serif; font-size: 16px; vertical-align: top;\" valign=\"top\">&nbsp;</td>
        </tr>
    </table>
</body>
</html>
", "security/emails/reset_password.html.twig", "C:\\xampp\\Movable-WebApp-integration\\templates\\security\\emails\\reset_password.html.twig");
    }
}
