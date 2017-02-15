<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_285361a739a8e127b8c03d3a499dd21b25f1195b00a89a560601c42fb5ee6a98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_5070aeae64eedd75c97ea48709bee916114b8b218e76fbe352fddc90047d23bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5070aeae64eedd75c97ea48709bee916114b8b218e76fbe352fddc90047d23bc->enter($__internal_5070aeae64eedd75c97ea48709bee916114b8b218e76fbe352fddc90047d23bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_2ef787c77fb0c4f8e28d8a4519acda55874b194c1ee18b971b845e9fab81867f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef787c77fb0c4f8e28d8a4519acda55874b194c1ee18b971b845e9fab81867f->enter($__internal_2ef787c77fb0c4f8e28d8a4519acda55874b194c1ee18b971b845e9fab81867f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5070aeae64eedd75c97ea48709bee916114b8b218e76fbe352fddc90047d23bc->leave($__internal_5070aeae64eedd75c97ea48709bee916114b8b218e76fbe352fddc90047d23bc_prof);

        
        $__internal_2ef787c77fb0c4f8e28d8a4519acda55874b194c1ee18b971b845e9fab81867f->leave($__internal_2ef787c77fb0c4f8e28d8a4519acda55874b194c1ee18b971b845e9fab81867f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0036e0d2e144f2e1ac524e1fb7756288cf691934d604e583dd57246b63818100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0036e0d2e144f2e1ac524e1fb7756288cf691934d604e583dd57246b63818100->enter($__internal_0036e0d2e144f2e1ac524e1fb7756288cf691934d604e583dd57246b63818100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cd805aa61deef65889753f143e3b854fe936b4af2e3991cdf8dda73e72eee36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd805aa61deef65889753f143e3b854fe936b4af2e3991cdf8dda73e72eee36d->enter($__internal_cd805aa61deef65889753f143e3b854fe936b4af2e3991cdf8dda73e72eee36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_cd805aa61deef65889753f143e3b854fe936b4af2e3991cdf8dda73e72eee36d->leave($__internal_cd805aa61deef65889753f143e3b854fe936b4af2e3991cdf8dda73e72eee36d_prof);

        
        $__internal_0036e0d2e144f2e1ac524e1fb7756288cf691934d604e583dd57246b63818100->leave($__internal_0036e0d2e144f2e1ac524e1fb7756288cf691934d604e583dd57246b63818100_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
