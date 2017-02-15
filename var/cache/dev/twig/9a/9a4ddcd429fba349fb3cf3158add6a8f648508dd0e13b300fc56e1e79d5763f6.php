<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d401b2ea7f9f5826572a5fdc03202bd23da31dfaacdc84a4d1e8c5e32af05440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_bc15ef34d42b6ef411d3d048cd54980028b1f443a29c2d15fa1c801fc288560c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc15ef34d42b6ef411d3d048cd54980028b1f443a29c2d15fa1c801fc288560c->enter($__internal_bc15ef34d42b6ef411d3d048cd54980028b1f443a29c2d15fa1c801fc288560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_2274e8eae12d1cd3099f500937f25cda627411817baae4343d7ac60cd13429fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2274e8eae12d1cd3099f500937f25cda627411817baae4343d7ac60cd13429fa->enter($__internal_2274e8eae12d1cd3099f500937f25cda627411817baae4343d7ac60cd13429fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc15ef34d42b6ef411d3d048cd54980028b1f443a29c2d15fa1c801fc288560c->leave($__internal_bc15ef34d42b6ef411d3d048cd54980028b1f443a29c2d15fa1c801fc288560c_prof);

        
        $__internal_2274e8eae12d1cd3099f500937f25cda627411817baae4343d7ac60cd13429fa->leave($__internal_2274e8eae12d1cd3099f500937f25cda627411817baae4343d7ac60cd13429fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a17bb9244e24ad20fde77fd1ef2525d9b51ec90a00237be71d1912be7f29761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a17bb9244e24ad20fde77fd1ef2525d9b51ec90a00237be71d1912be7f29761->enter($__internal_7a17bb9244e24ad20fde77fd1ef2525d9b51ec90a00237be71d1912be7f29761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b57c6000ae2f6b2d44e4fd7a1631b8ba7a85ac72942353f4783fc514f4e3c3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57c6000ae2f6b2d44e4fd7a1631b8ba7a85ac72942353f4783fc514f4e3c3b8->enter($__internal_b57c6000ae2f6b2d44e4fd7a1631b8ba7a85ac72942353f4783fc514f4e3c3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b57c6000ae2f6b2d44e4fd7a1631b8ba7a85ac72942353f4783fc514f4e3c3b8->leave($__internal_b57c6000ae2f6b2d44e4fd7a1631b8ba7a85ac72942353f4783fc514f4e3c3b8_prof);

        
        $__internal_7a17bb9244e24ad20fde77fd1ef2525d9b51ec90a00237be71d1912be7f29761->leave($__internal_7a17bb9244e24ad20fde77fd1ef2525d9b51ec90a00237be71d1912be7f29761_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
