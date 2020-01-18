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

/* pages/FrontApp/home.html.twig */
class __TwigTemplate_a8a2f156d140c235c107a903534d14bc56b355b3fdada3d68e62969ccb48b215 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'className' => [$this, 'block_className'],
            'body' => [$this, 'block_body'],
            'nav' => [$this, 'block_nav'],
            'navbar' => [$this, 'block_navbar'],
            'catalogue' => [$this, 'block_catalogue'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/FrontApp/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/Css/main.css"), "html", null, true);
        echo "\">
";
    }

    // line 6
    public function block_className($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "\"\"
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t";
        $this->displayBlock('nav', $context, $blocks);
        // line 37
        echo "\t";
        $this->displayBlock('navbar', $context, $blocks);
        // line 54
        echo "\t";
        $this->displayBlock('catalogue', $context, $blocks);
    }

    // line 9
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t\t<nav class=\"navPremenu\">
\t\t\t<section class=\"info\">
\t\t\t\t<div class=\"infoDroite\">
\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t<span class=\"infoNumTel\">
\t\t\t\t\t\t+221 78 000 00 00 /
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"infoNumTel\">
\t\t\t\t\t\t+221 33 000 00 00
\t\t\t\t\t</span>

\t\t\t\t</div>
\t\t\t\t<div class=\"infoGauche\">
\t\t\t\t\t<i class=\"fab fa-facebook\"></i>
\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t<i class=\"fab fa-pinterest\"></i>
\t\t\t\t\t<span class=\"infoNumTel\">
\t\t\t\t\t\tFr/
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"infoNumTel\">
\t\t\t\t\t\tAn
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t";
        // line 35
        echo "\t\t</nav>
\t";
    }

    // line 37
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "\t\t<nav class=\"navbar navbar-expand-lg navbar-light  navbarBackground\">
\t\t\t<button class=\"navbar-toggler btn-light\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\" style=\"color:#ffb900;\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
\t\t\t\t<ul class=\"navbar-nav\" style=\"margin-left:90px\">
\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 45
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "link", [], "any", false, false, false, 46), "html", null, true);
            echo "\" style=\"color:#fff; font-size: 18px;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t";
    }

    // line 54
    public function block_catalogue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "\t\t<div class=\"container\">

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-3\">

\t\t\t\t\t<h1 class=\"navbar-brand\" style=\"color:#ffb900; font-size:34px; font-weight:bold; text-style:italic;\">Crock Sandwich</h1>
\t\t\t\t\t<div class=\"list-group bg-dark\">
\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\" style=\"border-bottom:none;\">Nos Sandwichs</a>
\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\" style=\"border-bottom:none;\">Les Sandwichs de la communauté</a>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t\t<br>

\t\t\t\t</div>
\t\t\t\t<!-- /.col-lg-3 -->
\t\t\t\t<!--Slider des Sandwichs-->
\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"title\" style=\"width:100%;\">
\t\t\t\t\t\t\t<h1 class=\"h1\" style=\"margin-bottom:40px; border-bottom:1px solid #f7c608; border-top:1px solid #000; width:100%; \">Sandwichs Crees
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4\">
\t\t\t\t\t\t\t<div class=\"card h-100\" style=\"margin-bottom:40px; border-bottom:1px solid #f7c608; border-top:1px solid #000; \">

\t\t\t\t\t\t\t\t<a href=\"#link\"><img class=\"card-img-top\" src=\"#img\" alt=\"\"></a>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Nom d'un Sandwich</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<h5>Prix d'un Sandwich</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Le sandwichs est composées
\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\tCompo
\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\tCompo
\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\tCompo
\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\tCompo
\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\tCompo
\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\tCompo
\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t<!-- Nos Menus -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"title\" style=\"width:100%;\">
\t\t\t\t\t<h1 class=\"h1\" style=\"margin-bottom:40px; border-bottom:1px solid #f7c608; border-top:1px solid #000; width:100%; \">Sandwichs Crees
\t\t\t\t\t</h1>
\t\t\t\t</div>
\t";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sandwichs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sandwich"]) {
            // line 130
            echo "\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4\">
\t\t\t\t\t<div class=\"card h-100\" style=\"margin-bottom:40px; border-bottom:1px solid #f7c608; border-top:1px solid #000; \">
\t\t\t\t\t\t<a href=\"#link\"><img class=\"card-img-top\" src=\"#img\" alt=\"\"></a>
\t\t\t\t\t\t";
            // line 134
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t\t";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sandwich"], "name", [], "any", false, false, false, 137), "html", null, true);
            echo "
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<h6>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sandwich"], "price", [], "any", false, false, false, 139), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t<p class=\"card-text\">Le sandwichs est composées
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCompo
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCompo
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCompo
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCompo
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCompo
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCompo
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 163
            echo "\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t<small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sandwich'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "\t\t\t</div>


\t\t</div>

\t\t<!-- /.col-lg-9 -->

\t</div>
\t<!-- /.row -->

</div>";
    }

    public function getTemplateName()
    {
        return "pages/FrontApp/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 169,  287 => 163,  261 => 139,  256 => 137,  251 => 134,  246 => 130,  242 => 129,  166 => 55,  162 => 54,  155 => 50,  143 => 46,  140 => 45,  136 => 44,  128 => 38,  124 => 37,  119 => 35,  93 => 10,  89 => 9,  84 => 54,  81 => 37,  78 => 9,  74 => 8,  66 => 6,  60 => 4,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/FrontApp/home.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\CROCK_SANDWICH\\CROCK_SANDWICH\\templates\\pages\\FrontApp\\home.html.twig");
    }
}
