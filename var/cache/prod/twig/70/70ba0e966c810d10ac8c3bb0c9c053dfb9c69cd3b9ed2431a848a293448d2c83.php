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

/* home/FicheFrais.html.twig */
class __TwigTemplate_cff1990884c0ae0717ba32ac27587c30bd91eccd25ccc2cd3dddde1ef85a0481 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/FicheFrais.html.twig", 1);
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
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

    .example-wrapperr { margin: 1em auto; max-width: 600px; width: 85%; font: 18px/1.11 sans-serif; }
    .example-wrapperr code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper text-center\">
    <img src=\"image/logo-gsb.png\" alt=\"logo\"></img>
</div>

";
        // line 32
        echo "
<div class=\"example-wrapperr\">
    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulaire"] ?? null), 'form_start');
        echo "
    </br>
    <label for=\"libelle\">Nom fiche de frais</label>
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulaire"] ?? null), "libelle", [], "any", false, false, false, 37), 'widget');
        echo "
    </br>
    <label for=\"dateDebut\">Date début fiche de frais</label> 
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulaire"] ?? null), "datedebut", [], "any", false, false, false, 40), 'widget');
        echo "
        <button type=\"submit\" class=\"btn btn-dark\">Valider</button>
    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulaire"] ?? null), 'form_end');
        echo "
    
</div>

";
    }

    public function getTemplateName()
    {
        return "home/FicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 42,  89 => 40,  83 => 37,  77 => 34,  73 => 32,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/FicheFrais.html.twig", "C:\\data\\tjaulin\\Projet\\GSB\\templates\\home\\FicheFrais.html.twig");
    }
}
