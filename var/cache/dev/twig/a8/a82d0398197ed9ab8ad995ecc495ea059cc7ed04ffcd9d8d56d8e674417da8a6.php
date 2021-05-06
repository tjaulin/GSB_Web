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
class __TwigTemplate_2beea4b7a416a63559cb766bf3cb7319f10e52800aee25f2e912144f41f470cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/uneFiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/uneFiche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/uneFiche.html.twig", 1);
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

        echo "uneFichegsb";
        
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
        echo " <div class=\"row justify-content-md-center\">
</div>
</br>
</br>
</br>


<h3>   Les dépenses forfaitaires</h3>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["lesDepensesForfetaires"]) || array_key_exists("lesDepensesForfetaires", $context) ? $context["lesDepensesForfetaires"] : (function () { throw new RuntimeError('Variable "lesDepensesForfetaires" does not exist.', 30, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["lesDepensesNonForfetaires"]) || array_key_exists("lesDepensesNonForfetaires", $context) ? $context["lesDepensesNonForfetaires"] : (function () { throw new RuntimeError('Variable "lesDepensesNonForfetaires" does not exist.', 74, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  191 => 81,  182 => 78,  178 => 77,  174 => 76,  171 => 75,  167 => 74,  156 => 65,  145 => 54,  139 => 37,  130 => 34,  126 => 33,  122 => 32,  119 => 31,  115 => 30,  103 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}uneFichegsb{% endblock %}

{% block body %}
 <div class=\"row justify-content-md-center\">
</div>
</br>
</br>
</br>


<h3>   Les dépenses forfaitaires</h3>
<table 
class =\"table table-hover\" 
id =\"table\" data-toggle=\"table\" 
data-search=\"true\";
data-ajax=\"ajaxRequest\"
{# data-url=\"https://raw.githubusercontent.com/wenzhixin/bootstrap-table-examples/master/json/data1.json\">#}
    <thead>
        <tr>
          <th data-field=\"name\">Nom</th>
          <th data-field=\"price\">Prix</th>
          <th data-field=\"amount\">Quantité</th>
        </tr>
    </thead>
  <tbody>

  
    {% for uneLigne in lesDepensesForfetaires %}
    <tr>
    <td>{{uneLigne.idTyper.libelle}}</td>
    <td>{{uneLigne.idTyper.montant}}</td>
    <td>{{uneLigne.qte}}</td>
    </tr>
    {% endfor %}
    
    
  </tbody>
</table>
{#
<script>



  function ajaxRequest(params) {
    var url = 'https://raw.githubusercontent.com/wenzhixin/bootstrap-table-examples/master/json/data1.json'
    \$.get(url + '?' + \$.param(params.data)).then(function (res) {
      params.success(res)
    })
  }
</script>
#}
</br>
</br>
</br>

<h3>Les dépenses hors forfait</h3>
<table 
class =\"table table-hover\" 
id =\"table\" data-toggle=\"table\" 
data-search=\"true\";
{# data-ajax=\"ajaxRequest\"
data-url=\"https://raw.githubusercontent.com/wenzhixin/bootstrap-table-examples/master/json/data1.json\">#}
    <thead>
        <tr>
          <th data-field=\"name\">Nom</th>
          <th data-field=\"price\">Prix</th>
          <th data-field=\"amount\">Date</th>
        </tr>
    </thead>
  <tbody>
  
    {% for uneLigne in lesDepensesNonForfetaires %}
    <tr>
    <td>{{uneLigne.libelle}}</td>
    <td>{{uneLigne.montant}}</td>
    <td>{{uneLigne.date|date(\"d/m/Y\")}}</td>
    </tr>
    {% endfor %}
    
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


{% endblock %}
", "home/uneFiche.html.twig", "C:\\data\\tjaulin\\Projet\\GSB\\templates\\home\\uneFiche.html.twig");
    }
}
