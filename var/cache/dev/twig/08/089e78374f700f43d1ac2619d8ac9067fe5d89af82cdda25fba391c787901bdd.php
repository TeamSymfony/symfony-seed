<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_fef89038248cf2eac85b94082a3b9c132cd6cf08e42ff5ca5927b8449b15451f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db85baf2bef107fbf386c732716f7eea507ac43c1b4697337eb11abd78145eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db85baf2bef107fbf386c732716f7eea507ac43c1b4697337eb11abd78145eca->enter($__internal_db85baf2bef107fbf386c732716f7eea507ac43c1b4697337eb11abd78145eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_b7aa8383c0e2d2fff4cb0ab044cf466172d3daa23ab35f952466a3188ad86620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7aa8383c0e2d2fff4cb0ab044cf466172d3daa23ab35f952466a3188ad86620->enter($__internal_b7aa8383c0e2d2fff4cb0ab044cf466172d3daa23ab35f952466a3188ad86620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_db85baf2bef107fbf386c732716f7eea507ac43c1b4697337eb11abd78145eca->leave($__internal_db85baf2bef107fbf386c732716f7eea507ac43c1b4697337eb11abd78145eca_prof);

        
        $__internal_b7aa8383c0e2d2fff4cb0ab044cf466172d3daa23ab35f952466a3188ad86620->leave($__internal_b7aa8383c0e2d2fff4cb0ab044cf466172d3daa23ab35f952466a3188ad86620_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
