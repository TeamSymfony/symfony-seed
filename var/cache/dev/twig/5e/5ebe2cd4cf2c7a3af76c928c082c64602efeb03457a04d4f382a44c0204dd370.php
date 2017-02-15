<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_fc798587f5db9024bc481f64274ea504183d89f62fe124609595832b72c8d6c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_dfef74cd3b0071bbd183b672b9be37c633c027bf769004131872282102d7baed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfef74cd3b0071bbd183b672b9be37c633c027bf769004131872282102d7baed->enter($__internal_dfef74cd3b0071bbd183b672b9be37c633c027bf769004131872282102d7baed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_72c742a375a93cb81d5581b3d8ecf2e54da913388254c37c03ea4c8165c1c252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c742a375a93cb81d5581b3d8ecf2e54da913388254c37c03ea4c8165c1c252->enter($__internal_72c742a375a93cb81d5581b3d8ecf2e54da913388254c37c03ea4c8165c1c252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfef74cd3b0071bbd183b672b9be37c633c027bf769004131872282102d7baed->leave($__internal_dfef74cd3b0071bbd183b672b9be37c633c027bf769004131872282102d7baed_prof);

        
        $__internal_72c742a375a93cb81d5581b3d8ecf2e54da913388254c37c03ea4c8165c1c252->leave($__internal_72c742a375a93cb81d5581b3d8ecf2e54da913388254c37c03ea4c8165c1c252_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7294f25327cb98391ac20a08a37ec745168675d111358362fd392a297a7f7562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7294f25327cb98391ac20a08a37ec745168675d111358362fd392a297a7f7562->enter($__internal_7294f25327cb98391ac20a08a37ec745168675d111358362fd392a297a7f7562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c425f86cbc2e90113fcfe344ce16d170778f625d2772e461f6f227a51b2c77dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c425f86cbc2e90113fcfe344ce16d170778f625d2772e461f6f227a51b2c77dd->enter($__internal_c425f86cbc2e90113fcfe344ce16d170778f625d2772e461f6f227a51b2c77dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c425f86cbc2e90113fcfe344ce16d170778f625d2772e461f6f227a51b2c77dd->leave($__internal_c425f86cbc2e90113fcfe344ce16d170778f625d2772e461f6f227a51b2c77dd_prof);

        
        $__internal_7294f25327cb98391ac20a08a37ec745168675d111358362fd392a297a7f7562->leave($__internal_7294f25327cb98391ac20a08a37ec745168675d111358362fd392a297a7f7562_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
