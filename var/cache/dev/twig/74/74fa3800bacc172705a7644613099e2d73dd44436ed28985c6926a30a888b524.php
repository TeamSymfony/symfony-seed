<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f902452bd4e2b5bd61051f47431cb025fc906d0603e67cac5f83a0eb7cfdef60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_21d0e78d0370ed142f52660d3c2902da3298a70e62dc15028694a15c12381d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d0e78d0370ed142f52660d3c2902da3298a70e62dc15028694a15c12381d6d->enter($__internal_21d0e78d0370ed142f52660d3c2902da3298a70e62dc15028694a15c12381d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_09abe5c11ca1e73a8378edac5660842307ef6bf3efe57b6921b5d463d0c2e105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09abe5c11ca1e73a8378edac5660842307ef6bf3efe57b6921b5d463d0c2e105->enter($__internal_09abe5c11ca1e73a8378edac5660842307ef6bf3efe57b6921b5d463d0c2e105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d0e78d0370ed142f52660d3c2902da3298a70e62dc15028694a15c12381d6d->leave($__internal_21d0e78d0370ed142f52660d3c2902da3298a70e62dc15028694a15c12381d6d_prof);

        
        $__internal_09abe5c11ca1e73a8378edac5660842307ef6bf3efe57b6921b5d463d0c2e105->leave($__internal_09abe5c11ca1e73a8378edac5660842307ef6bf3efe57b6921b5d463d0c2e105_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25aaac98069c5c54b057a9f1b1532f17d4888c2bc7586ef69da0fcd0ffbb526c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25aaac98069c5c54b057a9f1b1532f17d4888c2bc7586ef69da0fcd0ffbb526c->enter($__internal_25aaac98069c5c54b057a9f1b1532f17d4888c2bc7586ef69da0fcd0ffbb526c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_70d8033aed285fd98c34b36d71c9117409d0d56e80ee06246c414086167c3432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d8033aed285fd98c34b36d71c9117409d0d56e80ee06246c414086167c3432->enter($__internal_70d8033aed285fd98c34b36d71c9117409d0d56e80ee06246c414086167c3432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_70d8033aed285fd98c34b36d71c9117409d0d56e80ee06246c414086167c3432->leave($__internal_70d8033aed285fd98c34b36d71c9117409d0d56e80ee06246c414086167c3432_prof);

        
        $__internal_25aaac98069c5c54b057a9f1b1532f17d4888c2bc7586ef69da0fcd0ffbb526c->leave($__internal_25aaac98069c5c54b057a9f1b1532f17d4888c2bc7586ef69da0fcd0ffbb526c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
