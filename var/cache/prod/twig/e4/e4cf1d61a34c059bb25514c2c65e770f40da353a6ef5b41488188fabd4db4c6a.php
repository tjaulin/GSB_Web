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
class __TwigTemplate_186a882f9d3018e5db47bcf3baae8409a970427a9f5009315cd65fdab1d5ad4f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/uneFicheModif.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postHF", ["idAvoir1" => ($context["idAvoir1"] ?? null)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["lesDepensesNonForfetaires"] ?? null));
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
        return array (  205 => 181,  196 => 178,  192 => 177,  188 => 176,  185 => 175,  181 => 174,  161 => 156,  131 => 82,  128 => 81,  116 => 71,  89 => 45,  86 => 44,  83 => 43,  80 => 25,  69 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/uneFicheModif.html.twig", "C:\\data\\tjaulin\\Projet\\GSB\\templates\\home\\uneFicheModif.html.twig");
    }
}
