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

/* property/show.html.twig */
class __TwigTemplate_081171a55bb70d1a5d7db93ee4a17f53d691d68d440552feea32ede24492d1e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"jumbotron jumbotron-fluid\">
     <div class=\"container\">
        
         ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "             <div class=\"alert alert-success\">
                 ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
             </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
        <div class=\"row\">
            <div class=\"col-md-8\">
            ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 18, $this->source); })()), "filename", [], "any", false, false, false, 18)) {
            // line 19
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 19, $this->source); })()), "imageFile"), "medium"), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"width: 100%; height: auto\">
                ";
        } else {
            // line 21
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/properties/empty.jpg", "medium"), "html", null, true);
            echo "\" class=\"card-img-top\" class=\"width: 100%; height: auto\">
                ";
        }
        // line 23
        echo "
           </div>
        
            <div class=\"col-md-4\"> 
                <h1>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), "html", null, true);
        echo "</h1>
                <h2>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 28, $this->source); })()), "rooms", [], "any", false, false, false, 28), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 28, $this->source); })()), "surface", [], "any", false, false, false, 28), "html", null, true);
        echo " m²</h2>
                <div class=\"text-primary\" style=\"font-size: 4rem; font-weight: bold;\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 29, $this->source); })()), "formattedPrice", [], "any", false, false, false, 29), "html", null, true);
        echo " €</div>
                <a href=\"#\" class=\"btn btn-primary\">Contacter l'agence</a>
                <div id=\"contactForm\" class=\"mt-4\">
                ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "firstname", [], "any", false, false, false, 34), 'row');
        echo "</div>
                <dic class=\"col\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "lastname", [], "any", false, false, false, 35), 'row');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "phone", [], "any", false, false, false, 38), 'row');
        echo "</div>
                <div class=\"col\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'row');
        echo "</div>
            </div>
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'rest');
        echo "
                <div class=\"form-group\">
                    <button class=\"btn btn-primary\">Envoyer</button>
                    </div>
                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "    
            </div>
        </div>
    </div>
    </div>
    <div class=\"container mt-4\">
       
           
        <p>
            ";
        // line 54
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), "html", null, true));
        echo "
        </p>
        

        <div class=\"row\">
            <div class=\"col-md-8\">
            
                <h2>Caractéristiques</h2>

                <table class=\"table table-striped\">
            
                   <tr>
                        <td>Surface habitable</td>
                        <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 67, $this->source); })()), "surface", [], "any", false, false, false, 67), "html", null, true);
        echo " m²</td>
                   </tr>
                   <tr>
                        <td>Pièces</td>
                        <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 71, $this->source); })()), "rooms", [], "any", false, false, false, 71), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 75, $this->source); })()), "bedrooms", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
                   </tr>
                   <tr>
                        <td>Etage</td>
                        <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 79, $this->source); })()), "floor", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
                   </tr>
                   <tr>
                        <td>Chauffage</td>
                        <td>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 83, $this->source); })()), "heatType", [], "any", false, false, false, 83), "html", null, true);
        echo "</td>
                    </tr>
                </table>         
            </div>
            <div class=\"col-md-4\">

                <h2>Spécificités</h2>

            </div>

        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 83,  230 => 79,  223 => 75,  216 => 71,  209 => 67,  193 => 54,  181 => 45,  174 => 41,  169 => 39,  165 => 38,  159 => 35,  155 => 34,  150 => 32,  144 => 29,  138 => 28,  134 => 27,  128 => 23,  122 => 21,  116 => 19,  114 => 18,  109 => 15,  100 => 12,  97 => 11,  93 => 10,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title property.title %}


{% block body %}
    <div class=\"jumbotron jumbotron-fluid\">
     <div class=\"container\">
        
         {% for message in app.flashes('success') %}
             <div class=\"alert alert-success\">
                 {{ message }}
             </div>
         {% endfor %}

        <div class=\"row\">
            <div class=\"col-md-8\">
            {% if property.filename %}
                    <img src=\"{{ vich_uploader_asset(property, 'imageFile')  | imagine_filter('medium') }}\" class=\"card-img-top\" style=\"width: 100%; height: auto\">
                {% else %}
                    <img src=\"{{ '/images/properties/empty.jpg'  | imagine_filter('medium') }}\" class=\"card-img-top\" class=\"width: 100%; height: auto\">
                {% endif %}

           </div>
        
            <div class=\"col-md-4\"> 
                <h1>{{ property.title }}</h1>
                <h2>{{ property.rooms }} pièces - {{ property.surface }} m²</h2>
                <div class=\"text-primary\" style=\"font-size: 4rem; font-weight: bold;\">{{ property.formattedPrice }} €</div>
                <a href=\"#\" class=\"btn btn-primary\">Contacter l'agence</a>
                <div id=\"contactForm\" class=\"mt-4\">
                {{form_start(form)}}
            <div class=\"row\">
                <div class=\"col\">{{ form_row(form.firstname)}}</div>
                <dic class=\"col\">{{ form_row(form.lastname)}}</div>
            </div>
            <div class=\"row\">
                <div class=\"col\">{{ form_row(form.phone)}}</div>
                <div class=\"col\">{{ form_row(form.email)}}</div>
            </div>
                {{form_rest(form)}}
                <div class=\"form-group\">
                    <button class=\"btn btn-primary\">Envoyer</button>
                    </div>
                {{form_end(form)}}    
            </div>
        </div>
    </div>
    </div>
    <div class=\"container mt-4\">
       
           
        <p>
            {{ property.description | nl2br }}
        </p>
        

        <div class=\"row\">
            <div class=\"col-md-8\">
            
                <h2>Caractéristiques</h2>

                <table class=\"table table-striped\">
            
                   <tr>
                        <td>Surface habitable</td>
                        <td>{{ property.surface }} m²</td>
                   </tr>
                   <tr>
                        <td>Pièces</td>
                        <td>{{ property.rooms }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ property.bedrooms }}</td>
                   </tr>
                   <tr>
                        <td>Etage</td>
                        <td>{{ property.floor }}</td>
                   </tr>
                   <tr>
                        <td>Chauffage</td>
                        <td>{{ property.heatType }}</td>
                    </tr>
                </table>         
            </div>
            <div class=\"col-md-4\">

                <h2>Spécificités</h2>

            </div>

        </div>

    </div>

{% endblock %}


", "property/show.html.twig", "C:\\Users\\amane\\Desktop\\Homeaway\\templates\\property\\show.html.twig");
    }
}
