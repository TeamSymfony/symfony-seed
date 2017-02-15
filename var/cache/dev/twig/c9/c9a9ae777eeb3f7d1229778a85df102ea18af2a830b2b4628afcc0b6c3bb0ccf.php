<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_4f05dcbd4c817ddb07af26aa0ae35cba553adb6f39679c4368779e4c723b559c extends Twig_Template
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
        $__internal_a3ab8ead7d9eb6ae2f22e32e5f1f221d81b6c5468bbe2290263f10e2ee90a6b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ab8ead7d9eb6ae2f22e32e5f1f221d81b6c5468bbe2290263f10e2ee90a6b4->enter($__internal_a3ab8ead7d9eb6ae2f22e32e5f1f221d81b6c5468bbe2290263f10e2ee90a6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_607266e7e31f3d6b60bcc3ead3ca7d8762cc2388771b8a6722ce168236dd054e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607266e7e31f3d6b60bcc3ead3ca7d8762cc2388771b8a6722ce168236dd054e->enter($__internal_607266e7e31f3d6b60bcc3ead3ca7d8762cc2388771b8a6722ce168236dd054e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_a3ab8ead7d9eb6ae2f22e32e5f1f221d81b6c5468bbe2290263f10e2ee90a6b4->leave($__internal_a3ab8ead7d9eb6ae2f22e32e5f1f221d81b6c5468bbe2290263f10e2ee90a6b4_prof);

        
        $__internal_607266e7e31f3d6b60bcc3ead3ca7d8762cc2388771b8a6722ce168236dd054e->leave($__internal_607266e7e31f3d6b60bcc3ead3ca7d8762cc2388771b8a6722ce168236dd054e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
