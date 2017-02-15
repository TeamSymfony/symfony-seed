<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_150ca7d995468e02789c19d70f5a82365301ecebc21b38fde8bc2214e9f04740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fbe991ed02c87cd0b73cab2c8aee650723f8ae001b99608bc39ea6158d8b2ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fbe991ed02c87cd0b73cab2c8aee650723f8ae001b99608bc39ea6158d8b2ed->enter($__internal_1fbe991ed02c87cd0b73cab2c8aee650723f8ae001b99608bc39ea6158d8b2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6044d4ec98e27d64a0d68bb708244a1b77c7c8d76f854b43b45395b3878c40e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6044d4ec98e27d64a0d68bb708244a1b77c7c8d76f854b43b45395b3878c40e6->enter($__internal_6044d4ec98e27d64a0d68bb708244a1b77c7c8d76f854b43b45395b3878c40e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fbe991ed02c87cd0b73cab2c8aee650723f8ae001b99608bc39ea6158d8b2ed->leave($__internal_1fbe991ed02c87cd0b73cab2c8aee650723f8ae001b99608bc39ea6158d8b2ed_prof);

        
        $__internal_6044d4ec98e27d64a0d68bb708244a1b77c7c8d76f854b43b45395b3878c40e6->leave($__internal_6044d4ec98e27d64a0d68bb708244a1b77c7c8d76f854b43b45395b3878c40e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a78454b816700187bd1532826059d0515fc66ea1298ee96f474122bd0934c6a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78454b816700187bd1532826059d0515fc66ea1298ee96f474122bd0934c6a0->enter($__internal_a78454b816700187bd1532826059d0515fc66ea1298ee96f474122bd0934c6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_557b62aa62262515642343b36a16ac41f9533543a32de0c05bc7d154deb73521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557b62aa62262515642343b36a16ac41f9533543a32de0c05bc7d154deb73521->enter($__internal_557b62aa62262515642343b36a16ac41f9533543a32de0c05bc7d154deb73521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_557b62aa62262515642343b36a16ac41f9533543a32de0c05bc7d154deb73521->leave($__internal_557b62aa62262515642343b36a16ac41f9533543a32de0c05bc7d154deb73521_prof);

        
        $__internal_a78454b816700187bd1532826059d0515fc66ea1298ee96f474122bd0934c6a0->leave($__internal_a78454b816700187bd1532826059d0515fc66ea1298ee96f474122bd0934c6a0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c43c211ea65bb201d2ae534e26fcd953e7b764ab893113a0a3e1439545e299ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43c211ea65bb201d2ae534e26fcd953e7b764ab893113a0a3e1439545e299ac->enter($__internal_c43c211ea65bb201d2ae534e26fcd953e7b764ab893113a0a3e1439545e299ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed2eb63b74a872358d5e4fd0b454121c0597480c761d9fbbf19e1675a9573d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2eb63b74a872358d5e4fd0b454121c0597480c761d9fbbf19e1675a9573d39->enter($__internal_ed2eb63b74a872358d5e4fd0b454121c0597480c761d9fbbf19e1675a9573d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_ed2eb63b74a872358d5e4fd0b454121c0597480c761d9fbbf19e1675a9573d39->leave($__internal_ed2eb63b74a872358d5e4fd0b454121c0597480c761d9fbbf19e1675a9573d39_prof);

        
        $__internal_c43c211ea65bb201d2ae534e26fcd953e7b764ab893113a0a3e1439545e299ac->leave($__internal_c43c211ea65bb201d2ae534e26fcd953e7b764ab893113a0a3e1439545e299ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
