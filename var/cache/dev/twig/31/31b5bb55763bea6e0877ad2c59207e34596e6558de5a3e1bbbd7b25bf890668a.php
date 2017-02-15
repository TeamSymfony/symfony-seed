<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_a6f555ef5decde6e746e50e97fdf645ccf24d9caaef91a3183da4cf2bf7c06b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_7683adba36ace9a448dc580a03265350ff46bb494e812f7343732dab7e422b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7683adba36ace9a448dc580a03265350ff46bb494e812f7343732dab7e422b9f->enter($__internal_7683adba36ace9a448dc580a03265350ff46bb494e812f7343732dab7e422b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_d52267048763e541dd1a3ac4b069e5a402ce0b5dd1b9d989cf58b056a85eb49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52267048763e541dd1a3ac4b069e5a402ce0b5dd1b9d989cf58b056a85eb49a->enter($__internal_d52267048763e541dd1a3ac4b069e5a402ce0b5dd1b9d989cf58b056a85eb49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7683adba36ace9a448dc580a03265350ff46bb494e812f7343732dab7e422b9f->leave($__internal_7683adba36ace9a448dc580a03265350ff46bb494e812f7343732dab7e422b9f_prof);

        
        $__internal_d52267048763e541dd1a3ac4b069e5a402ce0b5dd1b9d989cf58b056a85eb49a->leave($__internal_d52267048763e541dd1a3ac4b069e5a402ce0b5dd1b9d989cf58b056a85eb49a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26d70a4c164c78479f506409a1d5e24136a1a5e1847cb270f309f10df5e5e37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d70a4c164c78479f506409a1d5e24136a1a5e1847cb270f309f10df5e5e37a->enter($__internal_26d70a4c164c78479f506409a1d5e24136a1a5e1847cb270f309f10df5e5e37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fe2f8f0b30eb9a564ad83af351ec2820108c96fb89f0c1fb1ea92c8d4ed6753b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2f8f0b30eb9a564ad83af351ec2820108c96fb89f0c1fb1ea92c8d4ed6753b->enter($__internal_fe2f8f0b30eb9a564ad83af351ec2820108c96fb89f0c1fb1ea92c8d4ed6753b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_fe2f8f0b30eb9a564ad83af351ec2820108c96fb89f0c1fb1ea92c8d4ed6753b->leave($__internal_fe2f8f0b30eb9a564ad83af351ec2820108c96fb89f0c1fb1ea92c8d4ed6753b_prof);

        
        $__internal_26d70a4c164c78479f506409a1d5e24136a1a5e1847cb270f309f10df5e5e37a->leave($__internal_26d70a4c164c78479f506409a1d5e24136a1a5e1847cb270f309f10df5e5e37a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
