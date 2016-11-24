<?php

/* base.html.twig */
class __TwigTemplate_abeff00532ed50694123f3b3587353ae0bc5a9706e266d2bf26edce237b8ccb6 extends Twig_Template
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
        $__internal_296bf2970bb55df9ea65cedbcddc30080e73f4dcdacf613341274ed68076118a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296bf2970bb55df9ea65cedbcddc30080e73f4dcdacf613341274ed68076118a->enter($__internal_296bf2970bb55df9ea65cedbcddc30080e73f4dcdacf613341274ed68076118a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title> Science infuse </title>
    </head>
    <body>
    <center>
     \t<a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back-office");
        echo "\">Back office</a>
     \t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
        echo "\">Qui sommes-nous ?</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Login</a>
\t\t</center>
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
        
        $__internal_296bf2970bb55df9ea65cedbcddc30080e73f4dcdacf613341274ed68076118a->leave($__internal_296bf2970bb55df9ea65cedbcddc30080e73f4dcdacf613341274ed68076118a_prof);

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
    <center>
     \t<a href=\"{{ path('back-office') }}\">Back office</a>
     \t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href=\"{{ path('presentation') }}\">Qui sommes-nous ?</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href=\"{{ path('login') }}\">Login</a>
\t\t</center>
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
", "base.html.twig", "/home/robin/projet_comm/science_infuse/app/Resources/views/base.html.twig");
    }
}
