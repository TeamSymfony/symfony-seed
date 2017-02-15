<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d2cb68099b3fe05741c41fd40c661f69a3aa1256a91caeea76fe0700544bfc54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_1f941ecc2001d64c583510b83780d2d239877bcb9f92873b962f0e1d6160ee7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f941ecc2001d64c583510b83780d2d239877bcb9f92873b962f0e1d6160ee7c->enter($__internal_1f941ecc2001d64c583510b83780d2d239877bcb9f92873b962f0e1d6160ee7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_43881186b19b6e9ccdc6a483c623195f8fec4420a9425431e70a514d66918024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43881186b19b6e9ccdc6a483c623195f8fec4420a9425431e70a514d66918024->enter($__internal_43881186b19b6e9ccdc6a483c623195f8fec4420a9425431e70a514d66918024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f941ecc2001d64c583510b83780d2d239877bcb9f92873b962f0e1d6160ee7c->leave($__internal_1f941ecc2001d64c583510b83780d2d239877bcb9f92873b962f0e1d6160ee7c_prof);

        
        $__internal_43881186b19b6e9ccdc6a483c623195f8fec4420a9425431e70a514d66918024->leave($__internal_43881186b19b6e9ccdc6a483c623195f8fec4420a9425431e70a514d66918024_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08d21f3d07b26714b46a15ef24aed5382dba028609a1087964e8d9a4da0e7bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d21f3d07b26714b46a15ef24aed5382dba028609a1087964e8d9a4da0e7bbc->enter($__internal_08d21f3d07b26714b46a15ef24aed5382dba028609a1087964e8d9a4da0e7bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b8e635bf8361420a5a0f39975a8206b98c1440603fa8c2247398087975c23fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e635bf8361420a5a0f39975a8206b98c1440603fa8c2247398087975c23fda->enter($__internal_b8e635bf8361420a5a0f39975a8206b98c1440603fa8c2247398087975c23fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b8e635bf8361420a5a0f39975a8206b98c1440603fa8c2247398087975c23fda->leave($__internal_b8e635bf8361420a5a0f39975a8206b98c1440603fa8c2247398087975c23fda_prof);

        
        $__internal_08d21f3d07b26714b46a15ef24aed5382dba028609a1087964e8d9a4da0e7bbc->leave($__internal_08d21f3d07b26714b46a15ef24aed5382dba028609a1087964e8d9a4da0e7bbc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
