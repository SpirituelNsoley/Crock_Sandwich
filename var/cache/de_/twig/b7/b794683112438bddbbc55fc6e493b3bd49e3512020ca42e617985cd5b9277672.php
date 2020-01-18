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

/* pages/BackApp/Sandwich/show.html.twig */
class __TwigTemplate_8fb86a7a9772171541e5965648ef532bbdddc13ff29bdaee332680e79f12777b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Container' => [$this, 'block_Container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "pages/BackApp/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/BackApp/Sandwich/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/BackApp/Sandwich/show.html.twig"));

        $this->parent = $this->loadTemplate("pages/BackApp/admin.html.twig", "pages/BackApp/Sandwich/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_Container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Container"));

        // line 3
        echo "     <div class=\"container-fluid\">

          <!-- Page Heading -->
          <h1 class=\"h3 mb-2 text-gray-800\">sandwich</h1>
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h6 class=\"m-0 font-weight-bold text-primary\">Table sandwich</h6>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-dark  table-hover table-info\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>nom</th>
                      <th>Prix</th>
                      <th>date d'ajout</th>
                      <th>Supprimer Ou Editer</th>

                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 26
        $context["i"] = 0;
        // line 27
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sandwichs"]) || array_key_exists("sandwichs", $context) ? $context["sandwichs"] : (function () { throw new RuntimeError('Variable "sandwichs" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sandwich"]) {
            echo " 
                 
                      <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sandwich"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                      <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sandwich"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                      <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new RuntimeError('Variable "prices" does not exist.', 31, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 31, $this->source); })()), [], "array", false, false, false, 31), "html", null, true);
            echo "</td>
                      <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sandwich"], "createdAt", [], "any", false, false, false, 32), "d-m-Y | H:i:s"), "html", null, true);
            echo "</td> 
                      <a class=\"btn btn-large btn-xs btn-danger m-2\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteSandwich", ["id" => twig_get_attribute($this->env, $this->source, $context["sandwich"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" onClick=\"return confirm('Voulez vous supprimmer ?');\" role=\"button\">Supprimer</a>
                      <a class=\"btn btn-large btn-xs btn-warning\" href=\"\" role=\"button\">Editer</a>
                   


                    </tr>
                    ";
            // line 39
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 39, $this->source); })()) + 1);
            // line 40
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sandwich'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/BackApp/Sandwich/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  130 => 40,  128 => 39,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  95 => 27,  93 => 26,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"pages/BackApp/admin.html.twig\" %}
{% block Container %}
     <div class=\"container-fluid\">

          <!-- Page Heading -->
          <h1 class=\"h3 mb-2 text-gray-800\">sandwich</h1>
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h6 class=\"m-0 font-weight-bold text-primary\">Table sandwich</h6>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-dark  table-hover table-info\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>nom</th>
                      <th>Prix</th>
                      <th>date d'ajout</th>
                      <th>Supprimer Ou Editer</th>

                    </tr>
                  </thead>
                  <tbody>
                    {% set i=0 %}
                  {% for sandwich in sandwichs  %} 
                 
                      <td>{{sandwich.id}}</td>
                      <td>{{sandwich.name}}</td>
                      <td>{{prices[i]}}</td>
                      <td>{{sandwich.createdAt|date(\"d-m-Y | H:i:s\")}}</td> 
                      <a class=\"btn btn-large btn-xs btn-danger m-2\" href=\"{{ path('deleteSandwich',{id: sandwich.id}) }}\" onClick=\"return confirm('Voulez vous supprimmer ?');\" role=\"button\">Supprimer</a>
                      <a class=\"btn btn-large btn-xs btn-warning\" href=\"\" role=\"button\">Editer</a>
                   


                    </tr>
                    {% set i=i+1 %}
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
{% endblock %}", "pages/BackApp/Sandwich/show.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\CROCK_SANDWICH\\CROCK_SANDWICH\\templates\\pages\\BackApp\\Sandwich\\show.html.twig");
    }
}
