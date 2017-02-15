<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3bbb6c6803d3f6a382be84877d6b3883a0ab65186a35fac3f7b35f8c4c47b064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_61dd5a25a3dcffc641a46bdcecc90a5cb1006076c78c3f1afae931e741b2ee5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dd5a25a3dcffc641a46bdcecc90a5cb1006076c78c3f1afae931e741b2ee5e->enter($__internal_61dd5a25a3dcffc641a46bdcecc90a5cb1006076c78c3f1afae931e741b2ee5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_4c9259a241a9ed4de8f874e4882666d0d206de684726da1bf4d1f65f1ead1134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9259a241a9ed4de8f874e4882666d0d206de684726da1bf4d1f65f1ead1134->enter($__internal_4c9259a241a9ed4de8f874e4882666d0d206de684726da1bf4d1f65f1ead1134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61dd5a25a3dcffc641a46bdcecc90a5cb1006076c78c3f1afae931e741b2ee5e->leave($__internal_61dd5a25a3dcffc641a46bdcecc90a5cb1006076c78c3f1afae931e741b2ee5e_prof);

        
        $__internal_4c9259a241a9ed4de8f874e4882666d0d206de684726da1bf4d1f65f1ead1134->leave($__internal_4c9259a241a9ed4de8f874e4882666d0d206de684726da1bf4d1f65f1ead1134_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4efb5166eec20ab6cfcce76d1e4147593173ded6608f1a7e4051a317ada57af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4efb5166eec20ab6cfcce76d1e4147593173ded6608f1a7e4051a317ada57af->enter($__internal_f4efb5166eec20ab6cfcce76d1e4147593173ded6608f1a7e4051a317ada57af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8089e1e0a67c898e236dd4cd7855cc4b468f783bf8a78277ee8bbabcdf5228e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8089e1e0a67c898e236dd4cd7855cc4b468f783bf8a78277ee8bbabcdf5228e2->enter($__internal_8089e1e0a67c898e236dd4cd7855cc4b468f783bf8a78277ee8bbabcdf5228e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8089e1e0a67c898e236dd4cd7855cc4b468f783bf8a78277ee8bbabcdf5228e2->leave($__internal_8089e1e0a67c898e236dd4cd7855cc4b468f783bf8a78277ee8bbabcdf5228e2_prof);

        
        $__internal_f4efb5166eec20ab6cfcce76d1e4147593173ded6608f1a7e4051a317ada57af->leave($__internal_f4efb5166eec20ab6cfcce76d1e4147593173ded6608f1a7e4051a317ada57af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
