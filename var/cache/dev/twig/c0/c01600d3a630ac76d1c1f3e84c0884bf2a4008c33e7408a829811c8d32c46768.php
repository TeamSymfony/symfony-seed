<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d9ffae65641b2646830901a5f86c06bf780d0129aa15524b0693f8abf9d9bfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_47318690584a2db5b8649b8f0ec8b32604102b00376c167fc9eff20983cc0d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47318690584a2db5b8649b8f0ec8b32604102b00376c167fc9eff20983cc0d8d->enter($__internal_47318690584a2db5b8649b8f0ec8b32604102b00376c167fc9eff20983cc0d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1604f7fdfb60da9b061ade26eb0cf06253dda059fc688084035539daf475643a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1604f7fdfb60da9b061ade26eb0cf06253dda059fc688084035539daf475643a->enter($__internal_1604f7fdfb60da9b061ade26eb0cf06253dda059fc688084035539daf475643a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47318690584a2db5b8649b8f0ec8b32604102b00376c167fc9eff20983cc0d8d->leave($__internal_47318690584a2db5b8649b8f0ec8b32604102b00376c167fc9eff20983cc0d8d_prof);

        
        $__internal_1604f7fdfb60da9b061ade26eb0cf06253dda059fc688084035539daf475643a->leave($__internal_1604f7fdfb60da9b061ade26eb0cf06253dda059fc688084035539daf475643a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39429ec28870dbfac0b63bc5f024a7181667b251755ae50039afcceabb5dcaa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39429ec28870dbfac0b63bc5f024a7181667b251755ae50039afcceabb5dcaa2->enter($__internal_39429ec28870dbfac0b63bc5f024a7181667b251755ae50039afcceabb5dcaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e91fcceeab0fb82b88cbadad91239921e5d6f1325a387c26d4f3d9047537d3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91fcceeab0fb82b88cbadad91239921e5d6f1325a387c26d4f3d9047537d3e3->enter($__internal_e91fcceeab0fb82b88cbadad91239921e5d6f1325a387c26d4f3d9047537d3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e91fcceeab0fb82b88cbadad91239921e5d6f1325a387c26d4f3d9047537d3e3->leave($__internal_e91fcceeab0fb82b88cbadad91239921e5d6f1325a387c26d4f3d9047537d3e3_prof);

        
        $__internal_39429ec28870dbfac0b63bc5f024a7181667b251755ae50039afcceabb5dcaa2->leave($__internal_39429ec28870dbfac0b63bc5f024a7181667b251755ae50039afcceabb5dcaa2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6af3907abd953e3216fbd2bf1f432423e55d0c6c33cbfc6ef3a74553b7f9865b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af3907abd953e3216fbd2bf1f432423e55d0c6c33cbfc6ef3a74553b7f9865b->enter($__internal_6af3907abd953e3216fbd2bf1f432423e55d0c6c33cbfc6ef3a74553b7f9865b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e185ee3b7fa090c8d0949be264f2de0d60cda6fb8c193d591f53e18004b2749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e185ee3b7fa090c8d0949be264f2de0d60cda6fb8c193d591f53e18004b2749->enter($__internal_1e185ee3b7fa090c8d0949be264f2de0d60cda6fb8c193d591f53e18004b2749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1e185ee3b7fa090c8d0949be264f2de0d60cda6fb8c193d591f53e18004b2749->leave($__internal_1e185ee3b7fa090c8d0949be264f2de0d60cda6fb8c193d591f53e18004b2749_prof);

        
        $__internal_6af3907abd953e3216fbd2bf1f432423e55d0c6c33cbfc6ef3a74553b7f9865b->leave($__internal_6af3907abd953e3216fbd2bf1f432423e55d0c6c33cbfc6ef3a74553b7f9865b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
