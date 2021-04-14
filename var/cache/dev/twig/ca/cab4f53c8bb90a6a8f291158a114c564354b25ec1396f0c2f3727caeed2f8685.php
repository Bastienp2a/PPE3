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

/* pratiquer/show.html.twig */
class __TwigTemplate_da0912e3885bd0bcd1d688f5642797a97c0799837c01c08c6ed90f8ce0854cdd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pratiquer/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pratiquer/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pratiquer/show.html.twig", 1);
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

        echo "+ de détails sur l'activité";
        
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
    <h1>+ de détails sur l'activité</h1>
</br></br>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pratiquer"]) || array_key_exists("pratiquer", $context) ? $context["pratiquer"] : (function () { throw new RuntimeError('Variable "pratiquer" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 18
        ((twig_get_attribute($this->env, $this->source, (isset($context["pratiquer"]) || array_key_exists("pratiquer", $context) ? $context["pratiquer"] : (function () { throw new RuntimeError('Variable "pratiquer" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pratiquer"]) || array_key_exists("pratiquer", $context) ? $context["pratiquer"] : (function () { throw new RuntimeError('Variable "pratiquer" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>    
                <th>Activite Id</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pratiquer"]) || array_key_exists("pratiquer", $context) ? $context["pratiquer"] : (function () { throw new RuntimeError('Variable "pratiquer" does not exist.', 22, $this->source); })()), "activite", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>";
        // line 26
        ((twig_get_attribute($this->env, $this->source, (isset($context["pratiquer"]) || array_key_exists("pratiquer", $context) ? $context["pratiquer"] : (function () { throw new RuntimeError('Variable "pratiquer" does not exist.', 26, $this->source); })()), "duree", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pratiquer"]) || array_key_exists("pratiquer", $context) ? $context["pratiquer"] : (function () { throw new RuntimeError('Variable "pratiquer" does not exist.', 26, $this->source); })()), "duree", [], "any", false, false, false, 26), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pratiquer"]) || array_key_exists("pratiquer", $context) ? $context["pratiquer"] : (function () { throw new RuntimeError('Variable "pratiquer" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

</br></br>
    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pratiquer_index");
        echo "\">retourner en arrière</a>
    ou
    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pratiquer_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pratiquer"]) || array_key_exists("pratiquer", $context) ? $context["pratiquer"] : (function () { throw new RuntimeError('Variable "pratiquer" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\">modifier</a>
</br></br>
    ";
        // line 40
        echo twig_include($this->env, $context, "pratiquer/_delete_form.html.twig");
        echo "
</center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pratiquer/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 40,  140 => 38,  135 => 36,  126 => 30,  119 => 26,  112 => 22,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}+ de détails sur l'activité{% endblock %}

{% block body %}
<center>
</br></br></br>
    <h1>+ de détails sur l'activité</h1>
</br></br>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ pratiquer.id }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ pratiquer.date ? pratiquer.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>    
                <th>Activite Id</th>
            <td>{{ pratiquer.activite}}</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>{{ pratiquer.duree ? pratiquer.duree|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ pratiquer.description }}</td>
            </tr>
        </tbody>
    </table>

</br></br>
    <a href=\"{{ path('pratiquer_index') }}\">retourner en arrière</a>
    ou
    <a href=\"{{ path('pratiquer_edit', {'id': pratiquer.id}) }}\">modifier</a>
</br></br>
    {{ include('pratiquer/_delete_form.html.twig') }}
</center>
{% endblock %}
", "pratiquer/show.html.twig", "C:\\Users\\SIO1\\Documents\\Symfony\\TimeTimer1.1\\templates\\pratiquer\\show.html.twig");
    }
}
