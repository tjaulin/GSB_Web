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

/* home/uneFicheModif.html.twig */
class __TwigTemplate_203babf8426c0e5549dc57867a63e64b820221708036d599543087463003dd11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/uneFicheModif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/uneFicheModif.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/uneFicheModif.html.twig", 1);
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

<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#dfModal\" data-whatever=\"@mdo\">Ajouter une dépense forfaitaire</button>
<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#hfModal\" data-whatever=\"@fat\">Ajouter une dépense hors forfait</button>
</div>
</br>
</br>
</br>

";
        // line 16
        echo "<div class=\"modal fade\" id=\"dfModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\"> 
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Nouvelle Dépense</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\"> ";
        // line 25
        echo " 
      ";
        // line 43
        echo "      
        <form method=\"POST\" action=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postFF");
        echo "\"> ";
        // line 45
        echo "          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Type</label>
            <div class=\"dropdown\">
              <select class=form-control id='typeDF' name='typeDF'>
                <option value=1>Repas</option>
                <option value=2>Hôtel</option>
                <option value=3>Km</option>
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"message-text\" class=\"col-form-label\" required>Quantité</label>
            <input type=\"number\" min=\"1\" step=\"1\" id='qteDF' name='qteDF'>
          </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
      </div>
      </form>
    </div>
  </div>
</div>


";
        // line 71
        echo "<div class=\"text-center\">
<div class=\"modal fade\" id=\"hfModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\"> 
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Nouvelle Dépense</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\"> ";
        // line 81
        echo " 
        <form method=\"POST\" action=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postHF", ["idAvoir1" => (isset($context["idAvoir1"]) || array_key_exists("idAvoir1", $context) ? $context["idAvoir1"] : (function () { throw new RuntimeError('Variable "idAvoir1" does not exist.', 82, $this->source); })())]), "html", null, true);
        echo "\">
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\"><h5><p class=\"font-weight-bold\">Nom</p></h5></label>
            <input class=\"form-control\" type=\"text\" placeholder=\"Nom de la dépense\" id=\"libelleDHF\" name=\"libelleDHF\" required>
          <h5><p class=\"font-weight-bold\">Prix</p></h5>
          <div class=\"input-group\">
            <input type=\"number\" class=\"form-control\" aria-label=\"prix\" min=\"0\" id=\"montantDHF\" name=\"montantDHF\" required>
            <div class=\"input-group-append\">
              <span class=\"input-group-text\">€</span>
            </div>
          </div>
          <h5><p class=\"font-weight-bold\">Date</p></h5>
          <div class=\"input-group-center\">
            <input type=\"date\" data-date-defaultViewDate='today' data-date-end-date=\"0\" id = \"dateDHF\" name=\"dateDHF\" required>
          </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
        </form>
      </div> 
    </div>
  </div>
</div>
</div>


";
        // line 156
        echo "
<h3>Les dépenses hors forfait</h3>

<div class=\"container\">

<table 
class =\"table table-hover\" 
id =\"table\" data-toggle=\"table\" 
data-search=\"true\";
    <thead>
        <tr> 
          <th data-field=\"name\">Nom</th>
          <th data-field=\"price\">Prix</th>
          <th data-field=\"amount\" data-width=\"40\">Date</th>
        </tr>
    </thead>
  <tbody>
  
    ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesDepensesNonForfetaires"]) || array_key_exists("lesDepensesNonForfetaires", $context) ? $context["lesDepensesNonForfetaires"] : (function () { throw new RuntimeError('Variable "lesDepensesNonForfetaires" does not exist.', 174, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["uneLigne"]) {
            // line 175
            echo "    <tr>
    <td>";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigne"], "libelle", [], "any", false, false, false, 176), "html", null, true);
            echo "</td>
    <td>";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigne"], "montant", [], "any", false, false, false, 177), "html", null, true);
            echo "</td>
    <td>";
            // line 178
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigne"], "date", [], "any", false, false, false, 178), "d/m/Y"), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneLigne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "    
  </tbody>
</table>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/uneFicheModif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 181,  226 => 178,  222 => 177,  218 => 176,  215 => 175,  211 => 174,  191 => 156,  161 => 82,  158 => 81,  146 => 71,  119 => 45,  116 => 44,  113 => 43,  110 => 25,  99 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}uneFichegsb{% endblock %}

{% block body %}
 <div class=\"row justify-content-md-center\">

<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#dfModal\" data-whatever=\"@mdo\">Ajouter une dépense forfaitaire</button>
<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#hfModal\" data-whatever=\"@fat\">Ajouter une dépense hors forfait</button>
</div>
</br>
</br>
</br>

{# Modal dépense forfaitaire #}
<div class=\"modal fade\" id=\"dfModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\"> 
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Nouvelle Dépense</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\"> {# content #} 
      {#
        {{form_start(formulaire)}}
        {{form_widget(formulaire2._token)}}
        </br>
          <label for=\"libelle\">Type</label>  
          <select {{form_widget(formulaire2.libelle)}}>
            <option>Repas</option>
            <option>Hôtel</option>
            <option>Km</option>
          </select>  
        </br>
          <label for=\"dateDebut\">Quantité</label> 
        {{form_widget(formulaire.qte)}}
          <button type=\"submit\" class=\"btn btn-dark\">Valider</button>  
        {{form_end(formulaire)}}
      </div>
#}
      
        <form method=\"POST\" action=\"{{path('postFF')}}\"> {# Route envoi du form pour flush+persist #}
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Type</label>
            <div class=\"dropdown\">
              <select class=form-control id='typeDF' name='typeDF'>
                <option value=1>Repas</option>
                <option value=2>Hôtel</option>
                <option value=3>Km</option>
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"message-text\" class=\"col-form-label\" required>Quantité</label>
            <input type=\"number\" min=\"1\" step=\"1\" id='qteDF' name='qteDF'>
          </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
      </div>
      </form>
    </div>
  </div>
</div>


{# Modal dépense hors forfait #}
<div class=\"text-center\">
<div class=\"modal fade\" id=\"hfModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\"> 
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Nouvelle Dépense</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\"> {# content #} 
        <form method=\"POST\" action=\"{{path('postHF',{'idAvoir1':idAvoir1})}}\">
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\"><h5><p class=\"font-weight-bold\">Nom</p></h5></label>
            <input class=\"form-control\" type=\"text\" placeholder=\"Nom de la dépense\" id=\"libelleDHF\" name=\"libelleDHF\" required>
          <h5><p class=\"font-weight-bold\">Prix</p></h5>
          <div class=\"input-group\">
            <input type=\"number\" class=\"form-control\" aria-label=\"prix\" min=\"0\" id=\"montantDHF\" name=\"montantDHF\" required>
            <div class=\"input-group-append\">
              <span class=\"input-group-text\">€</span>
            </div>
          </div>
          <h5><p class=\"font-weight-bold\">Date</p></h5>
          <div class=\"input-group-center\">
            <input type=\"date\" data-date-defaultViewDate='today' data-date-end-date=\"0\" id = \"dateDHF\" name=\"dateDHF\" required>
          </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
        </form>
      </div> 
    </div>
  </div>
</div>
</div>


{#
<h3> Les dépenses forfaitaires </h3>
<table 
class =\"table table-hover\" 
id =\"table\" data-toggle=\"table\" 
data-search=\"true\";
data-ajax=\"ajaxRequest\"
{# data-url=\"https://raw.githubusercontent.com/wenzhixin/bootstrap-table-examples/master/json/data1.json\">#}
{#
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
{#
</br>
</br>
</br>
#}

<h3>Les dépenses hors forfait</h3>

<div class=\"container\">

<table 
class =\"table table-hover\" 
id =\"table\" data-toggle=\"table\" 
data-search=\"true\";
    <thead>
        <tr> 
          <th data-field=\"name\">Nom</th>
          <th data-field=\"price\">Prix</th>
          <th data-field=\"amount\" data-width=\"40\">Date</th>
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

</div>

{% endblock %}
", "home/uneFicheModif.html.twig", "C:\\data\\tjaulin\\Projet\\GSB\\templates\\home\\uneFicheModif.html.twig");
    }
}
