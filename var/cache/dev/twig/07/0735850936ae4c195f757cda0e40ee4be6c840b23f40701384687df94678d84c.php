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

/* pages/BackApp/Menu/show.html.twig */
class __TwigTemplate_f41b05a9b361d376c36c1ed05957375f304b0b6d355c7cfd51b383ea851f96ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/BackApp/Menu/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/BackApp/Menu/show.html.twig"));

        $this->parent = $this->loadTemplate("pages/BackApp/admin.html.twig", "pages/BackApp/Menu/show.html.twig", 1);
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
          <h1 class=\"h3 mb-2 text-gray-800\">menu</h1>
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h6 class=\"m-0 font-weight-bold text-primary\">Table menu</h6>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-dark  table-hover table-info\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>nom</th>
                      <th>Lien</th>
                      <th>date d'ajout</th>
                      <th>Etat</th>
                    </tr>
                  </thead>
                  <tbody>

                  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            echo " 
                    <tr>

                      <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                      <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                      <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "link", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                      <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "createdAt", [], "any", false, false, false, 32), "d-m-Y | H:i:s"), "html", null, true);
            echo "</td> 

                      <td>";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["menu"], "statement", [], "any", false, false, false, 34) == 1)) {
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
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
        return "pages/BackApp/Menu/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  128 => 38,  124 => 37,  120 => 35,  118 => 34,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  93 => 26,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"pages/BackApp/admin.html.twig\" %}
{% block Container %}
     <div class=\"container-fluid\">

          <!-- Page Heading -->
          <h1 class=\"h3 mb-2 text-gray-800\">menu</h1>
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h6 class=\"m-0 font-weight-bold text-primary\">Table menu</h6>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-dark  table-hover table-info\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>nom</th>
                      <th>Lien</th>
                      <th>date d'ajout</th>
                      <th>Etat</th>
                    </tr>
                  </thead>
                  <tbody>

                  {% for menu in menus  %} 
                    <tr>

                      <td>{{menu.id}}</td>
                      <td>{{menu.name}}</td>
                      <td>{{menu.link}}</td>
                      <td>{{menu.createdAt|date(\"d-m-Y | H:i:s\")}}</td> 

                      <td>{% if menu.statement == 1 %}
                          <button type=\"button\" class=\"btn btn-danger\">Desactiver</button>
                      {% else %}
                          <button type=\"button\" class=\"btn btn-primary\">Activer</button>
                      {% endif %}</td> 
                    </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
{% endblock %}", "pages/BackApp/Menu/show.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\CROCK_SANDWICH\\CROCK_SANDWICH\\templates\\pages\\BackApp\\Menu\\show.html.twig");
    }
}
