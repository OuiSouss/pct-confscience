<?php

/* backoffice.html.twig */
class __TwigTemplate_27ef1976e2c7f01c3a0bc178985fb093942a83b0caef49b628e9593c958799be extends Twig_Template
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
        $__internal_30142261e76ab6b257e40f2c3c73ea49f81c30c512f923636e4c3e95ae4acd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30142261e76ab6b257e40f2c3c73ea49f81c30c512f923636e4c3e95ae4acd0e->enter($__internal_30142261e76ab6b257e40f2c3c73ea49f81c30c512f923636e4c3e95ae4acd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backoffice.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title> Back office </title>
    </head>
    <body>
    <h1> Back office </h1>
\t    <ul>
       \t<li>Créer un évènement : Robin</li>
       \t<li>Modifier un évènement : Robin</li>
       \t<li>Gestion du forum : Amélie</li>
       \t<li>Mode \"draft\", brouillon pour les évènements : Paul</li>
     \t</ul>
\t\t</body>
</html>
";
        
        $__internal_30142261e76ab6b257e40f2c3c73ea49f81c30c512f923636e4c3e95ae4acd0e->leave($__internal_30142261e76ab6b257e40f2c3c73ea49f81c30c512f923636e4c3e95ae4acd0e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
        <title> Back office </title>
    </head>
    <body>
    <h1> Back office </h1>
\t    <ul>
       \t<li>Créer un évènement : Robin</li>
       \t<li>Modifier un évènement : Robin</li>
       \t<li>Gestion du forum : Amélie</li>
       \t<li>Mode \"draft\", brouillon pour les évènements : Paul</li>
     \t</ul>
\t\t</body>
</html>
", "backoffice.html.twig", "/autofs/netapp/travail/rhardy/s5/projets_com/science_infuse/app/Resources/views/backoffice.html.twig");
    }
}
