<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_ad792c91016a914b9e9cf8dcf0fdcf2a7d265db7e0b42382f80d67c5b4e249e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_782a056bb7e942cfe590e22677ee40c638fe2e2e0daa99b207ab9bbb628a5ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782a056bb7e942cfe590e22677ee40c638fe2e2e0daa99b207ab9bbb628a5ca9->enter($__internal_782a056bb7e942cfe590e22677ee40c638fe2e2e0daa99b207ab9bbb628a5ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_0a4ac810c70338c1495dca808798a89469d5512b51f9da7eebaadef16d0d61dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4ac810c70338c1495dca808798a89469d5512b51f9da7eebaadef16d0d61dc->enter($__internal_0a4ac810c70338c1495dca808798a89469d5512b51f9da7eebaadef16d0d61dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_782a056bb7e942cfe590e22677ee40c638fe2e2e0daa99b207ab9bbb628a5ca9->leave($__internal_782a056bb7e942cfe590e22677ee40c638fe2e2e0daa99b207ab9bbb628a5ca9_prof);

        
        $__internal_0a4ac810c70338c1495dca808798a89469d5512b51f9da7eebaadef16d0d61dc->leave($__internal_0a4ac810c70338c1495dca808798a89469d5512b51f9da7eebaadef16d0d61dc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea1f3ccdad26d1403eab0e6851aee589482707918bb79bbdf1c8b84067a7d684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1f3ccdad26d1403eab0e6851aee589482707918bb79bbdf1c8b84067a7d684->enter($__internal_ea1f3ccdad26d1403eab0e6851aee589482707918bb79bbdf1c8b84067a7d684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_145dbc0d69e73d0b078780830c9086ff7078d4ebfa8558465c8ae9810d71d6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145dbc0d69e73d0b078780830c9086ff7078d4ebfa8558465c8ae9810d71d6e8->enter($__internal_145dbc0d69e73d0b078780830c9086ff7078d4ebfa8558465c8ae9810d71d6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_145dbc0d69e73d0b078780830c9086ff7078d4ebfa8558465c8ae9810d71d6e8->leave($__internal_145dbc0d69e73d0b078780830c9086ff7078d4ebfa8558465c8ae9810d71d6e8_prof);

        
        $__internal_ea1f3ccdad26d1403eab0e6851aee589482707918bb79bbdf1c8b84067a7d684->leave($__internal_ea1f3ccdad26d1403eab0e6851aee589482707918bb79bbdf1c8b84067a7d684_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
