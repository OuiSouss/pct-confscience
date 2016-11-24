<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8b57dc04906e72f9410ed4c6a42f7515e47950d7fd1d41b70c28d42900688705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19ae05dd8cdcda2371751f483acd89b8c717859d4850145ba38b05ad1291c9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ae05dd8cdcda2371751f483acd89b8c717859d4850145ba38b05ad1291c9f5->enter($__internal_19ae05dd8cdcda2371751f483acd89b8c717859d4850145ba38b05ad1291c9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ae05dd8cdcda2371751f483acd89b8c717859d4850145ba38b05ad1291c9f5->leave($__internal_19ae05dd8cdcda2371751f483acd89b8c717859d4850145ba38b05ad1291c9f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8576b628e3dcac690a8e9f9d6da7ee0aa1b7e44acf4b81e8fc43a1504d77eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8576b628e3dcac690a8e9f9d6da7ee0aa1b7e44acf4b81e8fc43a1504d77eed->enter($__internal_b8576b628e3dcac690a8e9f9d6da7ee0aa1b7e44acf4b81e8fc43a1504d77eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8576b628e3dcac690a8e9f9d6da7ee0aa1b7e44acf4b81e8fc43a1504d77eed->leave($__internal_b8576b628e3dcac690a8e9f9d6da7ee0aa1b7e44acf4b81e8fc43a1504d77eed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc21e48b9cc3cdf0e39e1a8ab308970545b8fb21d2a47376daab9a220096cbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc21e48b9cc3cdf0e39e1a8ab308970545b8fb21d2a47376daab9a220096cbad->enter($__internal_bc21e48b9cc3cdf0e39e1a8ab308970545b8fb21d2a47376daab9a220096cbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc21e48b9cc3cdf0e39e1a8ab308970545b8fb21d2a47376daab9a220096cbad->leave($__internal_bc21e48b9cc3cdf0e39e1a8ab308970545b8fb21d2a47376daab9a220096cbad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d00b26438b503823cf908ed789595cb19e35d3d2ab21bc8ca3cc3764737a867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d00b26438b503823cf908ed789595cb19e35d3d2ab21bc8ca3cc3764737a867->enter($__internal_4d00b26438b503823cf908ed789595cb19e35d3d2ab21bc8ca3cc3764737a867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4d00b26438b503823cf908ed789595cb19e35d3d2ab21bc8ca3cc3764737a867->leave($__internal_4d00b26438b503823cf908ed789595cb19e35d3d2ab21bc8ca3cc3764737a867_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/robin/projet_comm/science_infuse/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
