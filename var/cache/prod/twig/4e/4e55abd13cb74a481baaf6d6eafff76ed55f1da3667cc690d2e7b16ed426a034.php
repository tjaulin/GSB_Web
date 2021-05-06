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
class __TwigTemplate_d3e79df2e67ba39056b1c4431516fa8e18a7b67484488ff2dd518f1f9828732b extends \Twig\Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.js\"></script>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link href=\"https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css\" rel=\"stylesheet\">
        <script src=\"https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js\"></script>
        <script src=\"https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js\"></script>
        <script src=\"https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table-locale-all.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>

    <nav class=\"navbar navbar-expand-lg navbar-light\" style=\"background-color: #0080ff;\">
        <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">Accueil</a>
        <div class=\"collapse navbar-collapse\" id=\"navbarText\">
            <ul class=\"navbar-nav mr-auto \">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allFicheFrais");
        echo "\">Fiche de Frais</a>
                </li>
            </ul>
            
            <ul class=\"navbar-nav \">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"\"></a>
                </li>
            </ul>

            <ul class=\"navbar-nav \">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"\"></a>
                </li>
            </ul>
            
            <ul class=\"navbar-nav \">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"\"></a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\" style=\"text-align: right;\">
                ";
        // line 49
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 50
            echo "                    <li><a\thref=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\" style=\"color: black;\">Se déconnecter</a></li>
                ";
        }
        // line 52
        echo "            </ul>
        </div>
    </nav>

    <body>
        ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
        </style>
        ";
    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        ";
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
        return array (  153 => 59,  149 => 58,  143 => 57,  135 => 15,  131 => 14,  124 => 13,  118 => 63,  115 => 58,  113 => 57,  106 => 52,  100 => 50,  98 => 49,  73 => 27,  66 => 23,  61 => 20,  59 => 14,  55 => 13,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\data\\tjaulin\\Projet\\GSB\\templates\\base.html.twig");
    }
}
