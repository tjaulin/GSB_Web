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
class __TwigTemplate_ba2739ec5ece338512729a8f1d60cbec084b28348867f91cda7cb7eec7e24c12 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "connexiongsbFrais";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
  <form method=\"post\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Connexion</h1>
    ";
        // line 9
        if (($context["errors"] ?? null)) {
            // line 10
            echo "      <div class=\"alert alert-danger\">
       ";
            // line 11
            echo twig_escape_filter($this->env, ($context["errors"] ?? null), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 14
        echo "    <div class=\"form-group\">
      <label for=\"inputUsername\">login</label>
      <input type=\"text\" name=\"_username\" value=\" ";
        // line 16
        echo twig_escape_filter($this->env, ($context["lastUsername"] ?? null), "html", null, true);
        echo "\" id= \"inputUsername\" class=\"form-control\" placeholder=\"login\" required autofocus>
    </div>
    <div class=\"form-group\">
      <label for=\"inputPassword\">Password</label>
      <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\" form-control\" placeholder=\"Password\" required>
    </div>
    <button class=\"btn btn-lg btn- primary\" type=\"submit\">Se connecter</button>

  </form>
</div>
";
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
        return array (  78 => 16,  74 => 14,  68 => 11,  65 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\data\\tjaulin\\Projet\\GSB\\templates\\home\\index.html.twig");
    }
}
