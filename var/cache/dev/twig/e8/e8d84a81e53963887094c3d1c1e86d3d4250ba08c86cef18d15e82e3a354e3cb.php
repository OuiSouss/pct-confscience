<?php

/* default/index.html.twig */
class __TwigTemplate_6e39c00515beb5a0d0025d0cfff976f099e7987e7b25bf0cc078f56809a6cbd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1a1495325b05bc5712a03f7353d8c31c472e5d968f79820b7adccde040c14cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a1495325b05bc5712a03f7353d8c31c472e5d968f79820b7adccde040c14cb->enter($__internal_e1a1495325b05bc5712a03f7353d8c31c472e5d968f79820b7adccde040c14cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1a1495325b05bc5712a03f7353d8c31c472e5d968f79820b7adccde040c14cb->leave($__internal_e1a1495325b05bc5712a03f7353d8c31c472e5d968f79820b7adccde040c14cb_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
", "default/index.html.twig", "/home/robin/projet_comm/science_infuse/app/Resources/views/default/index.html.twig");
    }
}
