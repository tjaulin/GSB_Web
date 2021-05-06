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

/* home/AllFicheFrais.html.twig */
class __TwigTemplate_83a5f362027b4bd16fb94d8121cb43ae3fa90008b12521aa5e6569c361666c62 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/AllFicheFrais.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/AllFicheFrais.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/AllFicheFrais.html.twig", 1);
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

        echo "Gestion des fiches de Frais";
        
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

<table class=\"table table-striped\">
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesFiches"]) || array_key_exists("lesFiches", $context) ? $context["lesFiches"] : (function () { throw new RuntimeError('Variable "lesFiches" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["uneFiche"]) {
            // line 10
            echo "      <tr>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "libelle", [], "any", false, false, false, 11), "html", null, true);
            echo "</td>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "datedebut", [], "any", false, false, false, 12), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "idEtre", [], "any", false, false, false, 13), "libelle", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
        ";
            // line 14
            if ((twig_date_format_filter($this->env, "now", "m/Y") == twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneFiche"], "datedebut", [], "any", false, false, false, 14), "m/Y"))) {
                // line 15
                echo "          <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uneFicheModif", ["id" => twig_get_attribute($this->env, $this->source, $context["uneFiche"], "id", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Modifier</a></td>
        ";
            } else {
                // line 17
                echo "          <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uneFiche", ["id" => twig_get_attribute($this->env, $this->source, $context["uneFiche"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\" class=\"btn btn-success\">Consulter</a></td>
        ";
            }
            // line 19
            echo "        ";
            // line 22
            echo "      </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneFiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/AllFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 24,  128 => 22,  126 => 19,  120 => 17,  114 => 15,  112 => 14,  108 => 13,  104 => 12,  100 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des fiches de Frais{% endblock %}

{% block body %}


<table class=\"table table-striped\">
  {% for uneFiche in lesFiches %}
      <tr>
        <td>{{uneFiche.libelle}}</td>
        <td>{{uneFiche.datedebut|date('d/m/Y')}}</td>
        <td>{{uneFiche.idEtre.libelle}}</td>
        {% if (\"now\"|date('m/Y') == uneFiche.datedebut|date('m/Y')) %}
          <td><a href=\"{{ path('uneFicheModif',{'id':uneFiche.id} ) }}\" class=\"btn btn-info\">Modifier</a></td>
        {% else %}
          <td><a href=\"{{ path('uneFiche',{'id':uneFiche.id} ) }}\" class=\"btn btn-success\">Consulter</a></td>
        {% endif %}
        {#{% if (test) %}
          <a href=\"{{ path('uneFiche',{'id':uneFiche.id} ) }}\" class=\"btn btn-warning\">Consulter</a>
        {% endif %}#}
      </tr>
  {% endfor %}

  {% endblock %}", "home/AllFicheFrais.html.twig", "C:\\data\\tjaulin\\Projet\\GSB\\templates\\home\\AllFicheFrais.html.twig");
    }
}
