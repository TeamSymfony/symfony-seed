<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_d6eb2c0cab69b0eadcfffdc44486046040fe0cc2e95383738185480afdad515d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac906b14a6a7828a0a7d41fb90ef51142c8b8fd94c5febaaca438a5555e70b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac906b14a6a7828a0a7d41fb90ef51142c8b8fd94c5febaaca438a5555e70b59->enter($__internal_ac906b14a6a7828a0a7d41fb90ef51142c8b8fd94c5febaaca438a5555e70b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_62522d348fd34a1024947d0929d41238bc74774886e72490ebb721372f51bd42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62522d348fd34a1024947d0929d41238bc74774886e72490ebb721372f51bd42->enter($__internal_62522d348fd34a1024947d0929d41238bc74774886e72490ebb721372f51bd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac906b14a6a7828a0a7d41fb90ef51142c8b8fd94c5febaaca438a5555e70b59->leave($__internal_ac906b14a6a7828a0a7d41fb90ef51142c8b8fd94c5febaaca438a5555e70b59_prof);

        
        $__internal_62522d348fd34a1024947d0929d41238bc74774886e72490ebb721372f51bd42->leave($__internal_62522d348fd34a1024947d0929d41238bc74774886e72490ebb721372f51bd42_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45f328e2dea839798fa04d88dd13993d31f74abdfc2fd706499205cd7f327930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f328e2dea839798fa04d88dd13993d31f74abdfc2fd706499205cd7f327930->enter($__internal_45f328e2dea839798fa04d88dd13993d31f74abdfc2fd706499205cd7f327930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ec6c36848e7a74a4bcd1ec5e84a59c75d4c8429a6d75ff9427cbeb64ff6afcf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6c36848e7a74a4bcd1ec5e84a59c75d4c8429a6d75ff9427cbeb64ff6afcf9->enter($__internal_ec6c36848e7a74a4bcd1ec5e84a59c75d4c8429a6d75ff9427cbeb64ff6afcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_ec6c36848e7a74a4bcd1ec5e84a59c75d4c8429a6d75ff9427cbeb64ff6afcf9->leave($__internal_ec6c36848e7a74a4bcd1ec5e84a59c75d4c8429a6d75ff9427cbeb64ff6afcf9_prof);

        
        $__internal_45f328e2dea839798fa04d88dd13993d31f74abdfc2fd706499205cd7f327930->leave($__internal_45f328e2dea839798fa04d88dd13993d31f74abdfc2fd706499205cd7f327930_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
