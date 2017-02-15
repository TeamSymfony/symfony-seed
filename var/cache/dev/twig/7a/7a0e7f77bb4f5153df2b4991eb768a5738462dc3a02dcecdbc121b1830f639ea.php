<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0bebe7c164fe3ebbaa2bce1e7f6ccfc3da01ccfd2c6405be9584e3ab64fed520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_67fddabf115c705036d33f26da4350d139d48dad84600ca0fce795b86f72c5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fddabf115c705036d33f26da4350d139d48dad84600ca0fce795b86f72c5b5->enter($__internal_67fddabf115c705036d33f26da4350d139d48dad84600ca0fce795b86f72c5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_d797f9f0806d3188cfcc83b8186996ec6a373985a3c4558b2c2289c0c2830399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d797f9f0806d3188cfcc83b8186996ec6a373985a3c4558b2c2289c0c2830399->enter($__internal_d797f9f0806d3188cfcc83b8186996ec6a373985a3c4558b2c2289c0c2830399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67fddabf115c705036d33f26da4350d139d48dad84600ca0fce795b86f72c5b5->leave($__internal_67fddabf115c705036d33f26da4350d139d48dad84600ca0fce795b86f72c5b5_prof);

        
        $__internal_d797f9f0806d3188cfcc83b8186996ec6a373985a3c4558b2c2289c0c2830399->leave($__internal_d797f9f0806d3188cfcc83b8186996ec6a373985a3c4558b2c2289c0c2830399_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80abd96c33073f175e7290846326389c7eb28bf7c6b02d138d611c01910a5ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80abd96c33073f175e7290846326389c7eb28bf7c6b02d138d611c01910a5ec4->enter($__internal_80abd96c33073f175e7290846326389c7eb28bf7c6b02d138d611c01910a5ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_257d1c194993a0766fe4cd5b0fb8d6d3b0dcb1a5700c13346e99df19144140af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257d1c194993a0766fe4cd5b0fb8d6d3b0dcb1a5700c13346e99df19144140af->enter($__internal_257d1c194993a0766fe4cd5b0fb8d6d3b0dcb1a5700c13346e99df19144140af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_257d1c194993a0766fe4cd5b0fb8d6d3b0dcb1a5700c13346e99df19144140af->leave($__internal_257d1c194993a0766fe4cd5b0fb8d6d3b0dcb1a5700c13346e99df19144140af_prof);

        
        $__internal_80abd96c33073f175e7290846326389c7eb28bf7c6b02d138d611c01910a5ec4->leave($__internal_80abd96c33073f175e7290846326389c7eb28bf7c6b02d138d611c01910a5ec4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
