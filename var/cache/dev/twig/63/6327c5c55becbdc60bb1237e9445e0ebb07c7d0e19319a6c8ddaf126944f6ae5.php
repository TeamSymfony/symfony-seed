<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3778406ef85a6637d2a2a0be9d378272396e22464ec59695638d364213c2a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3b4501fe2ed148bab654f16f3ba335107b1b421292adea02bed0fccd66ed3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b4501fe2ed148bab654f16f3ba335107b1b421292adea02bed0fccd66ed3ae->enter($__internal_d3b4501fe2ed148bab654f16f3ba335107b1b421292adea02bed0fccd66ed3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_30340a6808ed2d59be02cadd24da6d3ba6182db17e1aa45587928209b5cb69bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30340a6808ed2d59be02cadd24da6d3ba6182db17e1aa45587928209b5cb69bd->enter($__internal_30340a6808ed2d59be02cadd24da6d3ba6182db17e1aa45587928209b5cb69bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d3b4501fe2ed148bab654f16f3ba335107b1b421292adea02bed0fccd66ed3ae->leave($__internal_d3b4501fe2ed148bab654f16f3ba335107b1b421292adea02bed0fccd66ed3ae_prof);

        
        $__internal_30340a6808ed2d59be02cadd24da6d3ba6182db17e1aa45587928209b5cb69bd->leave($__internal_30340a6808ed2d59be02cadd24da6d3ba6182db17e1aa45587928209b5cb69bd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_785fd58a0b055ad02ccc9d87b34b4338c6528f9b508eb07c48673566f678cd00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785fd58a0b055ad02ccc9d87b34b4338c6528f9b508eb07c48673566f678cd00->enter($__internal_785fd58a0b055ad02ccc9d87b34b4338c6528f9b508eb07c48673566f678cd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a59aac89e938205e4a6c2cfd25ad675d11b43c8df207bcf90263f8b021f02e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a59aac89e938205e4a6c2cfd25ad675d11b43c8df207bcf90263f8b021f02e4->enter($__internal_6a59aac89e938205e4a6c2cfd25ad675d11b43c8df207bcf90263f8b021f02e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6a59aac89e938205e4a6c2cfd25ad675d11b43c8df207bcf90263f8b021f02e4->leave($__internal_6a59aac89e938205e4a6c2cfd25ad675d11b43c8df207bcf90263f8b021f02e4_prof);

        
        $__internal_785fd58a0b055ad02ccc9d87b34b4338c6528f9b508eb07c48673566f678cd00->leave($__internal_785fd58a0b055ad02ccc9d87b34b4338c6528f9b508eb07c48673566f678cd00_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
