<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_176c3b77bb6e7b442eaefa1f3b26332bfe8c399e241c8f4eee9c507ce6423ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad2b75e1c8f9b5b6e84d3f10cc785b28e151bb861f83b64a37bd4fcd13f2be8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2b75e1c8f9b5b6e84d3f10cc785b28e151bb861f83b64a37bd4fcd13f2be8a->enter($__internal_ad2b75e1c8f9b5b6e84d3f10cc785b28e151bb861f83b64a37bd4fcd13f2be8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad2b75e1c8f9b5b6e84d3f10cc785b28e151bb861f83b64a37bd4fcd13f2be8a->leave($__internal_ad2b75e1c8f9b5b6e84d3f10cc785b28e151bb861f83b64a37bd4fcd13f2be8a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_931f060f23c336865eeefb408b18fb3878a162d6fb0c3ff7ddc1031d5f669d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931f060f23c336865eeefb408b18fb3878a162d6fb0c3ff7ddc1031d5f669d89->enter($__internal_931f060f23c336865eeefb408b18fb3878a162d6fb0c3ff7ddc1031d5f669d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_931f060f23c336865eeefb408b18fb3878a162d6fb0c3ff7ddc1031d5f669d89->leave($__internal_931f060f23c336865eeefb408b18fb3878a162d6fb0c3ff7ddc1031d5f669d89_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_55e0ee8a5d3d2ac2991000f05094c74206c1da2ce964511965e9e80f077c9b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e0ee8a5d3d2ac2991000f05094c74206c1da2ce964511965e9e80f077c9b63->enter($__internal_55e0ee8a5d3d2ac2991000f05094c74206c1da2ce964511965e9e80f077c9b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_55e0ee8a5d3d2ac2991000f05094c74206c1da2ce964511965e9e80f077c9b63->leave($__internal_55e0ee8a5d3d2ac2991000f05094c74206c1da2ce964511965e9e80f077c9b63_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_743c7ceb12cd5bae30412fbc09c88105927b19c8b5a24385a58e6935afcbbe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743c7ceb12cd5bae30412fbc09c88105927b19c8b5a24385a58e6935afcbbe9e->enter($__internal_743c7ceb12cd5bae30412fbc09c88105927b19c8b5a24385a58e6935afcbbe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_743c7ceb12cd5bae30412fbc09c88105927b19c8b5a24385a58e6935afcbbe9e->leave($__internal_743c7ceb12cd5bae30412fbc09c88105927b19c8b5a24385a58e6935afcbbe9e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/robin/projet_comm/science_infuse/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
