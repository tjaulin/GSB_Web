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
class __TwigTemplate_861c40fe5708ff237cfcfac27f9cecd59bc16079f1c1f27e99a6feecb5f096b3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/AllFicheFrais.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des fiches de Frais";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

<table class=\"table table-striped\">
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesFiches"] ?? null));
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
        return array (  105 => 24,  98 => 22,  96 => 19,  90 => 17,  84 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/AllFicheFrais.html.twig", "C:\\data\\tjaulin\\Projet\\GSB\\templates\\home\\AllFicheFrais.html.twig");
    }
}
