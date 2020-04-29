<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* emails/contact.html.twig */
class __TwigTemplate_4b3222d70a33a943d99acaffb8c77993df7571710396e32ec693d7975647d90c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
    </head>
    <body>
    <table>
            
                   <tr>
                        <td>Nom du bien</td>
                        <td><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("property.show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 12, $this->source); })()), "property", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 12, $this->source); })()), "property", [], "any", false, false, false, 12), "slug", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 12, $this->source); })()), "property", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</a></td>
                   </tr>
                   <tr>
                        <td>Prénom</td>
                        <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 16, $this->source); })()), "firstname", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Nom</td>
                        <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 20, $this->source); })()), "lastname", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                   </tr>
                   <tr>
                        <td>Téléphone</td>
                        <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 24, $this->source); })()), "phone", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                   </tr>
                   <tr>
                        <td>Email</td>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>message</td>
                        <td>";
        // line 32
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 32, $this->source); })()), "message", [], "any", false, false, false, 32), "html", null, true));
        echo "</td>
                    </tr>
                </table>         
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  86 => 28,  79 => 24,  72 => 20,  65 => 16,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
    </head>
    <body>
    <table>
            
                   <tr>
                        <td>Nom du bien</td>
                        <td><a href=\"{{ url('property.show', {id: contact.property.id, slug:contact.property.slug})}}\">{{ contact.property.title }}</a></td>
                   </tr>
                   <tr>
                        <td>Prénom</td>
                        <td>{{ contact.firstname }}</td>
                    </tr>
                    <tr>
                        <td>Nom</td>
                        <td>{{ contact.lastname }}</td>
                   </tr>
                   <tr>
                        <td>Téléphone</td>
                        <td>{{ contact.phone }}</td>
                   </tr>
                   <tr>
                        <td>Email</td>
                        <td>{{ contact.email }}</td>
                    </tr>
                    <tr>
                        <td>message</td>
                        <td>{{ contact.message | nl2br }}</td>
                    </tr>
                </table>         
    </body>
</html>", "emails/contact.html.twig", "C:\\Users\\amane\\Desktop\\Homeaway\\templates\\emails\\contact.html.twig");
    }
}
