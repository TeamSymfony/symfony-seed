<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_17c490066699502e69bb6beceb589e61795079c9b41ab7aee2b779ce4a04f654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_00374f82a2bc7003bcc1da07b6054ed004964240d5ae703a4b81241396a39a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00374f82a2bc7003bcc1da07b6054ed004964240d5ae703a4b81241396a39a59->enter($__internal_00374f82a2bc7003bcc1da07b6054ed004964240d5ae703a4b81241396a39a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_0b745d3b3f4e7c533f4c68859743b083463b4a9f6b5bcf74ebc5c53439a9089e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b745d3b3f4e7c533f4c68859743b083463b4a9f6b5bcf74ebc5c53439a9089e->enter($__internal_0b745d3b3f4e7c533f4c68859743b083463b4a9f6b5bcf74ebc5c53439a9089e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00374f82a2bc7003bcc1da07b6054ed004964240d5ae703a4b81241396a39a59->leave($__internal_00374f82a2bc7003bcc1da07b6054ed004964240d5ae703a4b81241396a39a59_prof);

        
        $__internal_0b745d3b3f4e7c533f4c68859743b083463b4a9f6b5bcf74ebc5c53439a9089e->leave($__internal_0b745d3b3f4e7c533f4c68859743b083463b4a9f6b5bcf74ebc5c53439a9089e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3dd5ba150c4bfd466a00dc4379340f1bc62bdd5486daba7c3b59a944dd99562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3dd5ba150c4bfd466a00dc4379340f1bc62bdd5486daba7c3b59a944dd99562->enter($__internal_e3dd5ba150c4bfd466a00dc4379340f1bc62bdd5486daba7c3b59a944dd99562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af6155254705e8bd907e0272f04d827b0e3d6b77303212bd72897346409943f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6155254705e8bd907e0272f04d827b0e3d6b77303212bd72897346409943f9->enter($__internal_af6155254705e8bd907e0272f04d827b0e3d6b77303212bd72897346409943f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_af6155254705e8bd907e0272f04d827b0e3d6b77303212bd72897346409943f9->leave($__internal_af6155254705e8bd907e0272f04d827b0e3d6b77303212bd72897346409943f9_prof);

        
        $__internal_e3dd5ba150c4bfd466a00dc4379340f1bc62bdd5486daba7c3b59a944dd99562->leave($__internal_e3dd5ba150c4bfd466a00dc4379340f1bc62bdd5486daba7c3b59a944dd99562_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
