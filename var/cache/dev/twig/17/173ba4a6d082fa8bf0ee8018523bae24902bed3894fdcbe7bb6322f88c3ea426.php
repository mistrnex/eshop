<?php

/* lecture8/about.html.twig */
class __TwigTemplate_1838dcef279a2ce16a9db9591caff46bf73103f67caffedb27b53125da7d85d8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lecture8/about.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lecture8/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lecture8/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class=\"jumbotron\">
        <div class=\"container\">
          <h1 class=\"display-3\">Pokusný eshop</h1>
         
          <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Přejít na Košík</a></p>
        </div>
        
         
        
      </div>

      <div class=\"container\">
        <!-- Example row of columns -->
        <div class=\"row\">
          <div class=\"col-md-4\">
            <h2>Kategorie produktů</h2>
            <p>Kategorie 1 </p>
             <p>Kategorie  2 </p>
              <p>Kategorie  3 </p>
            <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Vyhledávání v kategoriích</a></p>
          </div>
          <div class=\"col-md-4\">
            <h2>Seznam nabízených produktů</h2>
             <p>Produkt 1 </p>
             <p>Produkt  2 </p>
              <p>Produkt  3 </p>
            <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Vyhledávání v produktech</a></p>
          </div>
          <div class=\"col-md-4\">
            <h2>Doplňkové funkce</h2>
            <p>Košík</p>
            <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Přejít na Košík</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

      
      
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lecture8/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block body %}


      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class=\"jumbotron\">
        <div class=\"container\">
          <h1 class=\"display-3\">Pokusný eshop</h1>
         
          <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Přejít na Košík</a></p>
        </div>
        
         
        
      </div>

      <div class=\"container\">
        <!-- Example row of columns -->
        <div class=\"row\">
          <div class=\"col-md-4\">
            <h2>Kategorie produktů</h2>
            <p>Kategorie 1 </p>
             <p>Kategorie  2 </p>
              <p>Kategorie  3 </p>
            <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Vyhledávání v kategoriích</a></p>
          </div>
          <div class=\"col-md-4\">
            <h2>Seznam nabízených produktů</h2>
             <p>Produkt 1 </p>
             <p>Produkt  2 </p>
              <p>Produkt  3 </p>
            <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Vyhledávání v produktech</a></p>
          </div>
          <div class=\"col-md-4\">
            <h2>Doplňkové funkce</h2>
            <p>Košík</p>
            <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">Přejít na Košík</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

      
      
  
{% endblock %}
   ", "lecture8/about.html.twig", "/home/cabox/workspace/my-project/templates/lecture8/about.html.twig");
    }
}
