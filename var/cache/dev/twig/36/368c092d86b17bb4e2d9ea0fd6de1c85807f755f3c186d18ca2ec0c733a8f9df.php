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
class __TwigTemplate_a8f80c45269e726b2e89f02b2cc42dcc9038a39a241b0b224e289ab279946541 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/FrontApp/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/FrontApp/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/FrontApp/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/Css/main.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_className($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "className"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "className"));

        echo "\"\"
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t";
        $this->displayBlock('nav', $context, $blocks);
        // line 37
        echo "\t";
        $this->displayBlock('navbar', $context, $blocks);
        // line 54
        echo "\t";
        $this->displayBlock('catalogue', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 44, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_catalogue($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalogue"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["sandwichs"]) || array_key_exists("sandwichs", $context) ? $context["sandwichs"] : (function () { throw new RuntimeError('Variable "sandwichs" does not exist.', 129, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  376 => 169,  365 => 163,  339 => 139,  334 => 137,  329 => 134,  324 => 130,  320 => 129,  244 => 55,  234 => 54,  221 => 50,  209 => 46,  206 => 45,  202 => 44,  194 => 38,  184 => 37,  173 => 35,  147 => 10,  137 => 9,  126 => 54,  123 => 37,  120 => 9,  110 => 8,  90 => 6,  78 => 4,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" href=\"{{asset('bower_components/Css/main.css')}}\">
{% endblock %}
{% block className %}\"\"
{% endblock %}
{% block body %}
\t{% block nav %}
\t\t<nav class=\"navPremenu\">
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
\t\t\t{# <img src=\"././images/crockLogo.png\" alt=\"logo\"> #}
\t\t</nav>
\t{% endblock %}
\t{% block  navbar %}
\t\t<nav class=\"navbar navbar-expand-lg navbar-light  navbarBackground\">
\t\t\t<button class=\"navbar-toggler btn-light\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\" style=\"color:#ffb900;\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
\t\t\t\t<ul class=\"navbar-nav\" style=\"margin-left:90px\">
\t\t\t\t\t{% for menu in menus  %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{menu.link}}\" style=\"color:#fff; font-size: 18px;\">{{menu.name}}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t{% endblock %}
\t{% block catalogue %}
\t\t<div class=\"container\">

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
\t{% for sandwich in sandwichs  %}
\t\t\t\t<div class=\"col-lg-4 col-md-6 mb-4\">
\t\t\t\t\t<div class=\"card h-100\" style=\"margin-bottom:40px; border-bottom:1px solid #f7c608; border-top:1px solid #000; \">
\t\t\t\t\t\t<a href=\"#link\"><img class=\"card-img-top\" src=\"#img\" alt=\"\"></a>
\t\t\t\t\t\t{# Debut #}
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t\t{{sandwich.name}}
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<h6>{{sandwich.price}}</h6>
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
\t\t\t\t\t\t{# Fin de la card body #}
\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t<small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>


\t\t</div>

\t\t<!-- /.col-lg-9 -->

\t</div>
\t<!-- /.row -->

</div>{% endblock %}{% endblock %}
", "pages/FrontApp/home.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\CROCK_SANDWICH\\CROCK_SANDWICH\\templates\\pages\\FrontApp\\home.html.twig");
    }
}
