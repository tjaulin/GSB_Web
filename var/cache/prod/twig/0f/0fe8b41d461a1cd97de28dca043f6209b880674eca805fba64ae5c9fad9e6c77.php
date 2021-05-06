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

/* home/uneFiche.html.twig */
class __TwigTemplate_b54b468a62e522d4f0f96ab1c73b8895317518a73a08ca4bbddc0608f215da93 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/uneFiche.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "uneFichegsb";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo " <div class=\"row justify-content-md-center\">
</div>
</br>
</br>
</br>


<h3>Les dépenses forfaitaires</h3>
<table 
class =\"table table-hover\" 
id =\"table\" data-toggle=\"table\" 
data-search=\"true\";
data-ajax=\"ajaxRequest\"
";
        // line 20
        echo "    <thead>
        <tr>
          <th data-field=\"name\">Nom</th>
          <th data-field=\"price\">Prix</th>
          <th data-field=\"amount\">Quantité</th>
        </tr>
    </thead>
  <tbody>

  
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesDepensesForfetaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["uneLigne"]) {
            // line 31
            echo "    <tr>
    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uneLigne"], "idTyper", [], "any", false, false, false, 32), "libelle", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["uneLigne"], "idTyper", [], "any", false, false, false, 33), "montant", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigne"], "qte", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneLigne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    
    
  </tbody>
</table>
";
        // line 54
        echo "</br>
</br>
</br>

<h3>Les dépenses hors forfait</h3>
<table 
class =\"table table-hover\" 
id =\"table\" data-toggle=\"table\" 
data-search=\"true\";
";
        // line 65
        echo "    <thead>
        <tr>
          <th data-field=\"name\">Nom</th>
          <th data-field=\"price\">Prix</th>
          <th data-field=\"amount\">Date</th>
        </tr>
    </thead>
  <tbody>
  
    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lesDepensesNonForfetaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["uneLigne"]) {
            // line 75
            echo "    <tr>
    <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigne"], "libelle", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigne"], "montant", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigne"], "date", [], "any", false, false, false, 78), "d/m/Y"), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneLigne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    
  </tbody>
</table>


<script>
var postData = function(e) {

    //stop the browser form submit
    e.preventDefault();

    //grab the form data
    var data = {
        email: \$('#email-input').val(),
        referr: \$('#referr').val()
    }
    \$.post('subscribe.php',data,function(response) {
        //Not sure what your php script is returning 
        //json is good and it should indicate success or failure
        //so lets say you are returning a json object with a success flag
        if(response.success) {
            //use jquery to open the modal
            \$('#myModal').modal('show');
        } else {
            //display error message to user
            alert(\"Error subscribing\");
        }
    },'json');
}
</script>


";
    }

    public function getTemplateName()
    {
        return "home/uneFiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 81,  152 => 78,  148 => 77,  144 => 76,  141 => 75,  137 => 74,  126 => 65,  115 => 54,  109 => 37,  100 => 34,  96 => 33,  92 => 32,  89 => 31,  85 => 30,  73 => 20,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/uneFiche.html.twig", "C:\\data\\tjaulin\\Projet\\GSB\\templates\\home\\uneFiche.html.twig");
    }
}
