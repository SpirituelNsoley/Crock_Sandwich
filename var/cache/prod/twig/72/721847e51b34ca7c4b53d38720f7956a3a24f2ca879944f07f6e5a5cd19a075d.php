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

/* pages/BackApp/Ingredients/show.html.twig */
class __TwigTemplate_e43dcdfb29c502de6bc92497e39d17ff5abbbb7c7307a633cc8f0c083c158923 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("pages/BackApp/admin.html.twig", "pages/BackApp/Ingredients/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_Container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "     <div class=\"container-fluid\">

          <!-- Page Heading -->
          <h1 class=\"h3 mb-2 text-gray-800\">ingredient</h1>
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h6 class=\"m-0 font-weight-bold text-primary\">Table ingredient</h6>
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
                      <th>Etat</th>
                    </tr>
                  </thead>
                  <tbody>

                  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            echo " 
                    <tr>

                      <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                      <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                      <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "price", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                      <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "createdAt", [], "any", false, false, false, 32), "d-m-Y | H:i:s"), "html", null, true);
            echo "</td> 

                      <td>";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["ingredient"], "statement", [], "any", false, false, false, 34) == 1)) {
                // line 35
                echo "                          <button type=\"button\" class=\"btn btn-danger\">Desactiver</button>
                      ";
            } else {
                // line 37
                echo "                          <button type=\"button\" class=\"btn btn-primary\">Activer</button>
                      ";
            }
            // line 38
            echo "</td> 
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
";
    }

    public function getTemplateName()
    {
        return "pages/BackApp/Ingredients/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  110 => 38,  106 => 37,  102 => 35,  100 => 34,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  75 => 26,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/BackApp/Ingredients/show.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\CROCK_SANDWICH\\CROCK_SANDWICH\\templates\\pages\\BackApp\\Ingredients\\show.html.twig");
    }
}
