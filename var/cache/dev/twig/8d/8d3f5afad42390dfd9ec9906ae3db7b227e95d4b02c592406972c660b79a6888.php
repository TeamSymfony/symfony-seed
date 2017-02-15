<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_e7081212769a60c26de484ba6ccababa88b354f06e09716a5d656b17f0684a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_68d2b78b0f05c95f4b2ed1e4b79c024d079a380d4f637602c82b52174e170266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d2b78b0f05c95f4b2ed1e4b79c024d079a380d4f637602c82b52174e170266->enter($__internal_68d2b78b0f05c95f4b2ed1e4b79c024d079a380d4f637602c82b52174e170266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_48db08f393007295669ccc3057f0f21888849ad2c47b19896eb8f5a5744f8a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48db08f393007295669ccc3057f0f21888849ad2c47b19896eb8f5a5744f8a43->enter($__internal_48db08f393007295669ccc3057f0f21888849ad2c47b19896eb8f5a5744f8a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d2b78b0f05c95f4b2ed1e4b79c024d079a380d4f637602c82b52174e170266->leave($__internal_68d2b78b0f05c95f4b2ed1e4b79c024d079a380d4f637602c82b52174e170266_prof);

        
        $__internal_48db08f393007295669ccc3057f0f21888849ad2c47b19896eb8f5a5744f8a43->leave($__internal_48db08f393007295669ccc3057f0f21888849ad2c47b19896eb8f5a5744f8a43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69fdabfdf62064e0a34acef26de4b6b2e1544f53ada559388d9540337e816fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69fdabfdf62064e0a34acef26de4b6b2e1544f53ada559388d9540337e816fc6->enter($__internal_69fdabfdf62064e0a34acef26de4b6b2e1544f53ada559388d9540337e816fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3df0ff4d548d008ce02986b6eb780a3f61bd3a68f2aa232cf918b53b9c2a4e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df0ff4d548d008ce02986b6eb780a3f61bd3a68f2aa232cf918b53b9c2a4e8f->enter($__internal_3df0ff4d548d008ce02986b6eb780a3f61bd3a68f2aa232cf918b53b9c2a4e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3df0ff4d548d008ce02986b6eb780a3f61bd3a68f2aa232cf918b53b9c2a4e8f->leave($__internal_3df0ff4d548d008ce02986b6eb780a3f61bd3a68f2aa232cf918b53b9c2a4e8f_prof);

        
        $__internal_69fdabfdf62064e0a34acef26de4b6b2e1544f53ada559388d9540337e816fc6->leave($__internal_69fdabfdf62064e0a34acef26de4b6b2e1544f53ada559388d9540337e816fc6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
