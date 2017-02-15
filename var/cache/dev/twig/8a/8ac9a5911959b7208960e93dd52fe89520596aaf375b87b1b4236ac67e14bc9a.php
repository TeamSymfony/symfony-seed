<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_69bde7a4959f5fb7a99d738d0ef1204086a6e833743588d9deba24498f34dbba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69bde7a4959f5fb7a99d738d0ef1204086a6e833743588d9deba24498f34dbba->enter($__internal_69bde7a4959f5fb7a99d738d0ef1204086a6e833743588d9deba24498f34dbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ff83b36ebd7ded28e8b0fc6a9b136bb56700b8feead43e6ffd20f0f817f9fc8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff83b36ebd7ded28e8b0fc6a9b136bb56700b8feead43e6ffd20f0f817f9fc8f->enter($__internal_ff83b36ebd7ded28e8b0fc6a9b136bb56700b8feead43e6ffd20f0f817f9fc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69bde7a4959f5fb7a99d738d0ef1204086a6e833743588d9deba24498f34dbba->leave($__internal_69bde7a4959f5fb7a99d738d0ef1204086a6e833743588d9deba24498f34dbba_prof);

        
        $__internal_ff83b36ebd7ded28e8b0fc6a9b136bb56700b8feead43e6ffd20f0f817f9fc8f->leave($__internal_ff83b36ebd7ded28e8b0fc6a9b136bb56700b8feead43e6ffd20f0f817f9fc8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe7e87592bf76b65f048182f2d22046680d8ad56c90cee54e5d23d3e1ca7ac9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7e87592bf76b65f048182f2d22046680d8ad56c90cee54e5d23d3e1ca7ac9a->enter($__internal_fe7e87592bf76b65f048182f2d22046680d8ad56c90cee54e5d23d3e1ca7ac9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eeeac0c872da5b074540e0e95c53a1f105be1edc78f2b337399b92537f4cf592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeeac0c872da5b074540e0e95c53a1f105be1edc78f2b337399b92537f4cf592->enter($__internal_eeeac0c872da5b074540e0e95c53a1f105be1edc78f2b337399b92537f4cf592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_eeeac0c872da5b074540e0e95c53a1f105be1edc78f2b337399b92537f4cf592->leave($__internal_eeeac0c872da5b074540e0e95c53a1f105be1edc78f2b337399b92537f4cf592_prof);

        
        $__internal_fe7e87592bf76b65f048182f2d22046680d8ad56c90cee54e5d23d3e1ca7ac9a->leave($__internal_fe7e87592bf76b65f048182f2d22046680d8ad56c90cee54e5d23d3e1ca7ac9a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b72be810c9cba7e7da33e583a35e7e1192c2e194a0f7fd4b8daacffaca77df78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72be810c9cba7e7da33e583a35e7e1192c2e194a0f7fd4b8daacffaca77df78->enter($__internal_b72be810c9cba7e7da33e583a35e7e1192c2e194a0f7fd4b8daacffaca77df78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5f15d015df730382717ed3085568ea210766c6ec8aed51f27908c4b11d05d95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f15d015df730382717ed3085568ea210766c6ec8aed51f27908c4b11d05d95e->enter($__internal_5f15d015df730382717ed3085568ea210766c6ec8aed51f27908c4b11d05d95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5f15d015df730382717ed3085568ea210766c6ec8aed51f27908c4b11d05d95e->leave($__internal_5f15d015df730382717ed3085568ea210766c6ec8aed51f27908c4b11d05d95e_prof);

        
        $__internal_b72be810c9cba7e7da33e583a35e7e1192c2e194a0f7fd4b8daacffaca77df78->leave($__internal_b72be810c9cba7e7da33e583a35e7e1192c2e194a0f7fd4b8daacffaca77df78_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_428620c93d446231c6e02e328144cfe1947c37386a2a219c27b64b9bb2335a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428620c93d446231c6e02e328144cfe1947c37386a2a219c27b64b9bb2335a3f->enter($__internal_428620c93d446231c6e02e328144cfe1947c37386a2a219c27b64b9bb2335a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9926559d76b82a8c0d94843af07efaf0030f00f482303b9bed97e6184159d086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9926559d76b82a8c0d94843af07efaf0030f00f482303b9bed97e6184159d086->enter($__internal_9926559d76b82a8c0d94843af07efaf0030f00f482303b9bed97e6184159d086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9926559d76b82a8c0d94843af07efaf0030f00f482303b9bed97e6184159d086->leave($__internal_9926559d76b82a8c0d94843af07efaf0030f00f482303b9bed97e6184159d086_prof);

        
        $__internal_428620c93d446231c6e02e328144cfe1947c37386a2a219c27b64b9bb2335a3f->leave($__internal_428620c93d446231c6e02e328144cfe1947c37386a2a219c27b64b9bb2335a3f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
