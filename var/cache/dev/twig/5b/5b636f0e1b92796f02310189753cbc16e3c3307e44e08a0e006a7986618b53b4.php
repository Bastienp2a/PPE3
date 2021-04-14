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

/* enfant/show.html.twig */
class __TwigTemplate_c4be902915ef02d44fc6eb32775f4a59edbb14da5ea9880234194bceb4ecf38c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enfant/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enfant/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "enfant/show.html.twig", 1);
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

        echo "Enfant";
        
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
        echo "<center>
</br></br></br>
    <h1>+ de détails sur l'enfant</h1>
   </br>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enfant"]) || array_key_exists("enfant", $context) ? $context["enfant"] : (function () { throw new RuntimeError('Variable "enfant" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enfant"]) || array_key_exists("enfant", $context) ? $context["enfant"] : (function () { throw new RuntimeError('Variable "enfant" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enfant"]) || array_key_exists("enfant", $context) ? $context["enfant"] : (function () { throw new RuntimeError('Variable "enfant" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>";
        // line 26
        ((twig_get_attribute($this->env, $this->source, (isset($context["enfant"]) || array_key_exists("enfant", $context) ? $context["enfant"] : (function () { throw new RuntimeError('Variable "enfant" does not exist.', 26, $this->source); })()), "datenaiss", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enfant"]) || array_key_exists("enfant", $context) ? $context["enfant"] : (function () { throw new RuntimeError('Variable "enfant" does not exist.', 26, $this->source); })()), "datenaiss", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Pathologie</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enfant"]) || array_key_exists("enfant", $context) ? $context["enfant"] : (function () { throw new RuntimeError('Variable "enfant" does not exist.', 30, $this->source); })()), "pathologie", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            <tr>    
                <th>Parent</th>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enfant"]) || array_key_exists("enfant", $context) ? $context["enfant"] : (function () { throw new RuntimeError('Variable "enfant" does not exist.', 33, $this->source); })()), "parent", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            </tr>
        </tbody>
    </table>
    </br>
    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enfant_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["enfant"]) || array_key_exists("enfant", $context) ? $context["enfant"] : (function () { throw new RuntimeError('Variable "enfant" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">modifier</a>
    ou
    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\">retourner en arrière</a>
    </br></br>
    ";
        // line 43
        echo twig_include($this->env, $context, "enfant/_delete_form.html.twig");
        echo "
    
    </center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "enfant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 43,  146 => 41,  141 => 39,  132 => 33,  126 => 30,  119 => 26,  112 => 22,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Enfant{% endblock %}

{% block body %}
<center>
</br></br></br>
    <h1>+ de détails sur l'enfant</h1>
   </br>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ enfant.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ enfant.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ enfant.prenom }}</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>{{ enfant.datenaiss ? enfant.datenaiss|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Pathologie</th>
                <td>{{ enfant.pathologie }}</td>
            <tr>    
                <th>Parent</th>
            <td>{{ enfant.parent }}</td>
            </tr>
            </tr>
        </tbody>
    </table>
    </br>
    <a href=\"{{ path('enfant_edit', {'id': enfant.id}) }}\">modifier</a>
    ou
    <a href=\"{{ path('home_page') }}\">retourner en arrière</a>
    </br></br>
    {{ include('enfant/_delete_form.html.twig') }}
    
    </center>
{% endblock %}
", "enfant/show.html.twig", "C:\\Users\\SIO1\\Documents\\Symfony\\TimeTimer1.1\\templates\\enfant\\show.html.twig");
    }
}
