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

/* base.html.twig */
class __TwigTemplate_55d35d25fe50e434046a8de8415d529d3a6c1ebf7d3ec0a4fffc803341f90173 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">TimeTimer</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
         <ul class=\"navbar-nav\">
          ";
        // line 20
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "         <li class=\"nav-item active\">
         <a class=\"nav-link\" href=";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo " >Se connecter <span class=\"sr-only\">(current)</span></a>
          </li>
          ";
        }
        // line 25
        echo "
           ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "         <li class=\"nav-item active\">
         <a class=\"nav-link\" href=";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo " >Se déconnecter <span class=\"sr-only\">(current)</span></a>
          </li>
          ";
        }
        // line 31
        echo "            
            <li class=\"nav-item\">
             <a class=\"nav-link\" href=";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo " >Acceuil <span class=\"sr-only\">(current)</span></a>
            </li>

            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            
           ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MEDICAL")) {
            echo " ";
            // line 39
            echo "            <li class=\"dropdown\">
           <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
           Administration Medical
           </a>
           <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
           <a class=\"dropdown-item\" href=";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo ">Ajouter un utilisateur</a>
           <a class=\"dropdown-item\" href=";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo ">Gerer les utilisateur</a>
           <a class=\"dropdown-item\" href=";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enfant_index");
            echo ">Afficher tout les enfants</a>
           </li>
           ";
        }
        // line 49
        echo "
           &nbsp; &nbsp;
           
           ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PARENTS")) {
            // line 53
            echo "           <li class=\"dropdown\">
           <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
           Menu Parent
           </a>
           <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
           <a class=\"dropdown-item\" href=";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enfant_new");
            echo ">Ajouter un enfant</a>
           <a class=\"dropdown-item\" href=";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enfant_parent");
            echo ">Afficher ses enfants</a>
           </li>
           ";
        }
        // line 62
        echo "

           &nbsp; &nbsp;
           
           ";
        // line 66
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDUCATEUR")) {
            // line 67
            echo "           <li class=\"dropdown\">
           <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
           Menu Educateur
           </a>
           <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
           <a class=\"dropdown-item\" href=";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enfant_index");
            echo ">Afficher tout les enfants</a>
           <a class=\"dropdown-item\" href=";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_index");
            echo ">Gérer les types d'activités</a>
           <a class=\"dropdown-item\" href=";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pratiquer_new");
            echo ">Enregistrer une nouvelle activité</a>
           <a class=\"dropdown-item\" href=";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pratiquer_index");
            echo ">Gérer les activités de chaque enfants</a>
           </li>
           ";
        }
        // line 78
        echo "         
         </ul>
        </div>
        </nav>  
        
        ";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "
        

    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TimeTimer!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"https://www.icone-png.com/png/14/14467.png\" /> 
        ";
        // line 9
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 84
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "        <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        ";
        // line 88
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

        
              <script>
                    \$(function() {
                        // you may need to change this code if you are not using Bootstrap Datepicker
                        \$('.js-datepicker').datepicker({
                            format: 'MM/dd/yyyy'
                        });
                    });
            </script>



        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 88,  290 => 86,  280 => 85,  270 => 84,  260 => 83,  248 => 9,  244 => 7,  234 => 6,  215 => 5,  200 => 103,  197 => 85,  195 => 83,  188 => 78,  182 => 75,  178 => 74,  174 => 73,  170 => 72,  163 => 67,  161 => 66,  155 => 62,  149 => 59,  145 => 58,  138 => 53,  136 => 52,  131 => 49,  125 => 46,  121 => 45,  117 => 44,  110 => 39,  107 => 38,  99 => 33,  95 => 31,  89 => 28,  86 => 27,  84 => 26,  81 => 25,  75 => 22,  72 => 21,  70 => 20,  59 => 11,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}TimeTimer!{% endblock %}</title>
        {% block stylesheets %}

        <link rel=\"icon\" type=\"image/png\" href=\"https://www.icone-png.com/png/14/14467.png\" /> 
        {{ encore_entry_link_tags('app') }}
        {% endblock %}
    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">TimeTimer</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
         <ul class=\"navbar-nav\">
          {% if not app.user %}
         <li class=\"nav-item active\">
         <a class=\"nav-link\" href={{path('app_login')}} >Se connecter <span class=\"sr-only\">(current)</span></a>
          </li>
          {% endif %}

           {% if  app.user %}
         <li class=\"nav-item active\">
         <a class=\"nav-link\" href={{path('app_logout')}} >Se déconnecter <span class=\"sr-only\">(current)</span></a>
          </li>
          {% endif %}
            
            <li class=\"nav-item\">
             <a class=\"nav-link\" href={{path('home_page')}} >Acceuil <span class=\"sr-only\">(current)</span></a>
            </li>

            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            
           {% if is_granted('ROLE_MEDICAL')%} {# or is_granted('autre role') #}
            <li class=\"dropdown\">
           <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
           Administration Medical
           </a>
           <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
           <a class=\"dropdown-item\" href={{path('user_new')}}>Ajouter un utilisateur</a>
           <a class=\"dropdown-item\" href={{path('user_index')}}>Gerer les utilisateur</a>
           <a class=\"dropdown-item\" href={{path('enfant_index')}}>Afficher tout les enfants</a>
           </li>
           {% endif %}

           &nbsp; &nbsp;
           
           {% if is_granted('ROLE_PARENTS') %}
           <li class=\"dropdown\">
           <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
           Menu Parent
           </a>
           <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
           <a class=\"dropdown-item\" href={{path('enfant_new')}}>Ajouter un enfant</a>
           <a class=\"dropdown-item\" href={{path('enfant_parent')}}>Afficher ses enfants</a>
           </li>
           {% endif %}


           &nbsp; &nbsp;
           
           {% if is_granted('ROLE_EDUCATEUR') %}
           <li class=\"dropdown\">
           <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
           Menu Educateur
           </a>
           <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
           <a class=\"dropdown-item\" href={{path('enfant_index')}}>Afficher tout les enfants</a>
           <a class=\"dropdown-item\" href={{path('activite_index')}}>Gérer les types d'activités</a>
           <a class=\"dropdown-item\" href={{path('pratiquer_new')}}>Enregistrer une nouvelle activité</a>
           <a class=\"dropdown-item\" href={{path('pratiquer_index')}}>Gérer les activités de chaque enfants</a>
           </li>
           {% endif %}
         
         </ul>
        </div>
        </nav>  
        
        {% block body %}
        {% endblock %}
        {% block javascripts %}
        <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        {{ encore_entry_script_tags('app') }}

        
              <script>
                    \$(function() {
                        // you may need to change this code if you are not using Bootstrap Datepicker
                        \$('.js-datepicker').datepicker({
                            format: 'MM/dd/yyyy'
                        });
                    });
            </script>



        {% endblock %}

        

    </body>
</html>
", "base.html.twig", "C:\\Users\\SIO1\\Documents\\Symfony\\TimeTimer1.1\\templates\\base.html.twig");
    }
}
