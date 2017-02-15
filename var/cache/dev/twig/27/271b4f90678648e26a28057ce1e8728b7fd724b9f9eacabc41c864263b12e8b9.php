<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_59d5d23cf80985ca05cf070524c716364a72aca249f7b2742bfcaa8407392ad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6e61d27bc23fdbec4e1e0075ddde5807045e93e27c74fc865fe49c6040336e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e61d27bc23fdbec4e1e0075ddde5807045e93e27c74fc865fe49c6040336e78->enter($__internal_6e61d27bc23fdbec4e1e0075ddde5807045e93e27c74fc865fe49c6040336e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c248d4f359c1a4318679cc766ccb75c2952ba48534f3c5d77db438e50291378b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c248d4f359c1a4318679cc766ccb75c2952ba48534f3c5d77db438e50291378b->enter($__internal_c248d4f359c1a4318679cc766ccb75c2952ba48534f3c5d77db438e50291378b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e61d27bc23fdbec4e1e0075ddde5807045e93e27c74fc865fe49c6040336e78->leave($__internal_6e61d27bc23fdbec4e1e0075ddde5807045e93e27c74fc865fe49c6040336e78_prof);

        
        $__internal_c248d4f359c1a4318679cc766ccb75c2952ba48534f3c5d77db438e50291378b->leave($__internal_c248d4f359c1a4318679cc766ccb75c2952ba48534f3c5d77db438e50291378b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d35672b8b21ae2dfd34e1046d7e8e7e32318e3dddece9be1b0f0303ae2ddf09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35672b8b21ae2dfd34e1046d7e8e7e32318e3dddece9be1b0f0303ae2ddf09d->enter($__internal_d35672b8b21ae2dfd34e1046d7e8e7e32318e3dddece9be1b0f0303ae2ddf09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d63d74075c7575d5296d7e1df69731da4785985c9922ef5c50d8145ce8d77b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63d74075c7575d5296d7e1df69731da4785985c9922ef5c50d8145ce8d77b01->enter($__internal_d63d74075c7575d5296d7e1df69731da4785985c9922ef5c50d8145ce8d77b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d63d74075c7575d5296d7e1df69731da4785985c9922ef5c50d8145ce8d77b01->leave($__internal_d63d74075c7575d5296d7e1df69731da4785985c9922ef5c50d8145ce8d77b01_prof);

        
        $__internal_d35672b8b21ae2dfd34e1046d7e8e7e32318e3dddece9be1b0f0303ae2ddf09d->leave($__internal_d35672b8b21ae2dfd34e1046d7e8e7e32318e3dddece9be1b0f0303ae2ddf09d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
