<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_20bcc801f96dfdc7fcf00788124282b86fb7c6d7a15ee8d97c1b4d5ad6b52b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_4d3eb0b4050d7c3f11ab873b9ebdeef20f146ae61a56723a416e38b9ebbd8d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3eb0b4050d7c3f11ab873b9ebdeef20f146ae61a56723a416e38b9ebbd8d36->enter($__internal_4d3eb0b4050d7c3f11ab873b9ebdeef20f146ae61a56723a416e38b9ebbd8d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_a04b5ed5d66a817618056834ae36d76699046cdf6a60a5066d9ec4204a4fc05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04b5ed5d66a817618056834ae36d76699046cdf6a60a5066d9ec4204a4fc05d->enter($__internal_a04b5ed5d66a817618056834ae36d76699046cdf6a60a5066d9ec4204a4fc05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d3eb0b4050d7c3f11ab873b9ebdeef20f146ae61a56723a416e38b9ebbd8d36->leave($__internal_4d3eb0b4050d7c3f11ab873b9ebdeef20f146ae61a56723a416e38b9ebbd8d36_prof);

        
        $__internal_a04b5ed5d66a817618056834ae36d76699046cdf6a60a5066d9ec4204a4fc05d->leave($__internal_a04b5ed5d66a817618056834ae36d76699046cdf6a60a5066d9ec4204a4fc05d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38d45612dc1fe6bb52393a0799b6c142b041f54575951bab53e2482f69ca3600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d45612dc1fe6bb52393a0799b6c142b041f54575951bab53e2482f69ca3600->enter($__internal_38d45612dc1fe6bb52393a0799b6c142b041f54575951bab53e2482f69ca3600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8f1efa7e33b14477f60db79a122ed63fcb1897b82603e7d3de292dc4137b4725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1efa7e33b14477f60db79a122ed63fcb1897b82603e7d3de292dc4137b4725->enter($__internal_8f1efa7e33b14477f60db79a122ed63fcb1897b82603e7d3de292dc4137b4725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8f1efa7e33b14477f60db79a122ed63fcb1897b82603e7d3de292dc4137b4725->leave($__internal_8f1efa7e33b14477f60db79a122ed63fcb1897b82603e7d3de292dc4137b4725_prof);

        
        $__internal_38d45612dc1fe6bb52393a0799b6c142b041f54575951bab53e2482f69ca3600->leave($__internal_38d45612dc1fe6bb52393a0799b6c142b041f54575951bab53e2482f69ca3600_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
