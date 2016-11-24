<?php

/* base.html.twig */
class __TwigTemplate_d099c39453b3932d25659cecfcad2389542aa083f750a7db3cc63b23c8ed34bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa8a4dd8f962bb6cc88088cf4cda18f0949001b97039d277ff22c2ecc0679628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8a4dd8f962bb6cc88088cf4cda18f0949001b97039d277ff22c2ecc0679628->enter($__internal_fa8a4dd8f962bb6cc88088cf4cda18f0949001b97039d277ff22c2ecc0679628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title> Science infuse </title>
    </head>
    <body>
    <ul>
     \t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back-office");
        echo "\">Back office</a></li>
     \t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
        echo "\">Qui sommes-nous ?</a></li>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Login</a></li>
\t\t</ul>
\t\t<br>
   \t<center><h1>Page d'accueil</h1></center>
   \t<br>
   \t<br>
   \t<ul>
      <li>Charte graphique / feuilles de style : Paul</li>
      <br>
      <li>Schéma relationnel de la base de données : Amélie</li>
      <br>
      <li>Partie responsive, intégration de la navigation circulaire : Alexis</li>
    </ul>
    \t
    <br>
\t\t<center>
\t\t\t<br>
\t\t\t<br>
\t\t\t<h2> Aperçu évènement 1 </h2>
\t\t\t<br>
\t\t\t<br>
\t\t\t<h2> Aperçu évènement 2 </h2>
\t\t\t<br>
\t\t\t<br>
\t\t\t<h2> Aperçu évènement 3 </h2>
\t\t\t<br>
\t\t\t<br>
\t\t\t<h2> ... </h2>
\t\t</center>
\t</body>
</html>
";
        
        $__internal_fa8a4dd8f962bb6cc88088cf4cda18f0949001b97039d277ff22c2ecc0679628->leave($__internal_fa8a4dd8f962bb6cc88088cf4cda18f0949001b97039d277ff22c2ecc0679628_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  38 => 12,  33 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title> Science infuse </title>
    </head>
    <body>
    <ul>
     \t<li><a href=\"{{ path('back-office') }}\">Back office</a></li>
     \t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li><a href=\"{{ path('presentation') }}\">Qui sommes-nous ?</a></li>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li><a href=\"{{ path('login') }}\">Login</a></li>
\t\t</ul>
\t\t<br>
   \t<center><h1>Page d'accueil</h1></center>
   \t<br>
   \t<br>
   \t<ul>
      <li>Charte graphique / feuilles de style : Paul</li>
      <br>
      <li>Schéma relationnel de la base de données : Amélie</li>
      <br>
      <li>Partie responsive, intégration de la navigation circulaire : Alexis</li>
    </ul>
    \t
    <br>
\t\t<center>
\t\t\t<br>
\t\t\t<br>
\t\t\t<h2> Aperçu évènement 1 </h2>
\t\t\t<br>
\t\t\t<br>
\t\t\t<h2> Aperçu évènement 2 </h2>
\t\t\t<br>
\t\t\t<br>
\t\t\t<h2> Aperçu évènement 3 </h2>
\t\t\t<br>
\t\t\t<br>
\t\t\t<h2> ... </h2>
\t\t</center>
\t</body>
</html>
", "base.html.twig", "/autofs/netapp/travail/rhardy/s5/projets_com/science_infuse/app/Resources/views/base.html.twig");
    }
}
