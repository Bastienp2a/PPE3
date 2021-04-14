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

/* home/index.html.twig */
class __TwigTemplate_fa9764cbfeaf459df488e12c99f246929efb653ff6ffc620c95d6e39e3a30b38 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "TimeTimer";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<link rel=\"icon\" href=\"https://i.ibb.co/zFvrFrX/logo-tt.png\" />

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font:  1.2em , caption; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

 ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo " <center>
   </br>
        <div class=\"example-wrapper\">
            Vous êtes connecté en tant que ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "prenom", [], "any", false, false, false, 18), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> Se déconnecter</a>
        </div>
    </br>
</center>
 ";
        }
        // line 23
        echo " 


 ";
        // line 26
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo " <center>
 </br>
     <div class=\"example-wrapper\">
        <div class=\"mb-3\">
            Vous n'êtes pas connecté, merci de vous identifier ! :  <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Se connecter</a>
        </div>
        </br></br></br>
        <img src=\"https://i.ibb.co/zFvrFrX/logo-tt.png\"
    width=\"435\" height=\"400\">
    </br></br></br></br>
    <h5>Ce site est réservé aux Parents ayant leurs enfants dans un de nos centre \"iChildren\" en France Metropolitaine, ou bien au personnel médical et éducatif.</h5>
    <h5>Vous êtes obligé de vous connecter avec vos identifiants (préablement donné par votre médecin) pour accéder aux différents onglets du site, 
    qui vous permettrons par la suite d'inscrire un ou plusieurs de vos enfants dans notre programme TimeTimer, via lequel par la suite vous pourrez visualer l'activité de chacun de vos enfants. </h5>
 </br></br>
</center>
</div>
 ";
        }
        // line 44
        echo " 
 

";
        // line 47
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
            // line 48
            echo "<center>
<div class=\"example-wrapper\">
    <h1>Bienvenue sur TimeTimer</h1>
    <h1>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "prenom", [], "any", false, false, false, 51), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "nom", [], "any", false, false, false, 51), "html", null, true);
            echo "✅</h1>
    </br></br></br>
    <img src=\"https://i.ibb.co/zFvrFrX/logo-tt.png\"
    width=\"435\" height=\"400\">
    </br></br></br>
    <h5>Ce site est réservé aux Parents ayant leurs enfants dans un de nos centre \"iChildren\" en France Metropolitaine, ou bien au personnel médical et éducatif.</h5>
    <h5>Vous êtes maintenant connecté, vous pouvez donc explorer l'onglet vous concernant et naviquer comme vous le souhaitez, bonne navigation à voous.</h5>
    <h5>Pour tout problème technique merci de nous contacter via notre mail ichildren@gmail.com</h5>
</center>
";
        }
        // line 61
        echo "

   <!-- This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("C:/Users/SIO1/Documents/Symfony/mon_projet/src/Controller/HomeController.php", 0), "html", null, true);
        echo "\">src/Controller/HomeController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("C:/Users/SIO1/Documents/Symfony/mon_projet/templates/home/index.html.twig", 0), "html", null, true);
        echo "\">templates/home/index.html.twig</a></code></li>
    </ul> 
    -->
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 66,  179 => 65,  173 => 61,  158 => 51,  153 => 48,  151 => 47,  146 => 44,  130 => 31,  124 => 27,  122 => 26,  117 => 23,  105 => 18,  100 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}TimeTimer{% endblock %} 

{% block body %}

<link rel=\"icon\" href=\"https://i.ibb.co/zFvrFrX/logo-tt.png\" />

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font:  1.2em , caption; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

 {% if app.user %}
 <center>
   </br>
        <div class=\"example-wrapper\">
            Vous êtes connecté en tant que {{ app.user.prenom }} {{ app.user.nom }}, <a href=\"{{ path('app_logout') }}\"> Se déconnecter</a>
        </div>
    </br>
</center>
 {% endif %}
 


 {% if not app.user %}
 <center>
 </br>
     <div class=\"example-wrapper\">
        <div class=\"mb-3\">
            Vous n'êtes pas connecté, merci de vous identifier ! :  <a href=\"{{ path('app_login') }}\"> Se connecter</a>
        </div>
        </br></br></br>
        <img src=\"https://i.ibb.co/zFvrFrX/logo-tt.png\"
    width=\"435\" height=\"400\">
    </br></br></br></br>
    <h5>Ce site est réservé aux Parents ayant leurs enfants dans un de nos centre \"iChildren\" en France Metropolitaine, ou bien au personnel médical et éducatif.</h5>
    <h5>Vous êtes obligé de vous connecter avec vos identifiants (préablement donné par votre médecin) pour accéder aux différents onglets du site, 
    qui vous permettrons par la suite d'inscrire un ou plusieurs de vos enfants dans notre programme TimeTimer, via lequel par la suite vous pourrez visualer l'activité de chacun de vos enfants. </h5>
 </br></br>
</center>
</div>
 {% endif %}
 
 

{% if app.user %}
<center>
<div class=\"example-wrapper\">
    <h1>Bienvenue sur TimeTimer</h1>
    <h1>{{ app.user.prenom }} {{ app.user.nom }}✅</h1>
    </br></br></br>
    <img src=\"https://i.ibb.co/zFvrFrX/logo-tt.png\"
    width=\"435\" height=\"400\">
    </br></br></br>
    <h5>Ce site est réservé aux Parents ayant leurs enfants dans un de nos centre \"iChildren\" en France Metropolitaine, ou bien au personnel médical et éducatif.</h5>
    <h5>Vous êtes maintenant connecté, vous pouvez donc explorer l'onglet vous concernant et naviquer comme vous le souhaitez, bonne navigation à voous.</h5>
    <h5>Pour tout problème technique merci de nous contacter via notre mail ichildren@gmail.com</h5>
</center>
{% endif %}


   <!-- This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ 'C:/Users/SIO1/Documents/Symfony/mon_projet/src/Controller/HomeController.php'|file_link(0) }}\">src/Controller/HomeController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ 'C:/Users/SIO1/Documents/Symfony/mon_projet/templates/home/index.html.twig'|file_link(0) }}\">templates/home/index.html.twig</a></code></li>
    </ul> 
    -->
</div>
{% endblock %}
", "home/index.html.twig", "C:\\Symfony\\TimeTimer1.1\\templates\\home\\index.html.twig");
    }
}
