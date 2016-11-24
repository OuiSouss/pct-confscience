<?php

/* backoffice.html.twig */
class __TwigTemplate_28f1520738403c9f89db0ddae540ce043218a5a1d82fc029861e8a8eaabb8fb5 extends Twig_Template
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
        $__internal_8a58de8e023cdba98e4febc9942b8dcf644d2f6a619242071ce963f626ba74ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a58de8e023cdba98e4febc9942b8dcf644d2f6a619242071ce963f626ba74ce->enter($__internal_8a58de8e023cdba98e4febc9942b8dcf644d2f6a619242071ce963f626ba74ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backoffice.html.twig"));

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
        
        $__internal_8a58de8e023cdba98e4febc9942b8dcf644d2f6a619242071ce963f626ba74ce->leave($__internal_8a58de8e023cdba98e4febc9942b8dcf644d2f6a619242071ce963f626ba74ce_prof);

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
", "backoffice.html.twig", "/home/robin/projet_comm/science_infuse/app/Resources/views/backoffice.html.twig");
    }
}
