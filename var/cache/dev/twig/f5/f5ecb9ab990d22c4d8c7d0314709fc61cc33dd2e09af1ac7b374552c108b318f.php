<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_11fbc2198b9cff59e44d0de36bc9cd6575455705f2ca6dcc7421f23ea21bc1d0 extends Twig_Template
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
        $__internal_08d331c5f9012cfa4b9ab980882f10f4f569e025b76cc48210e29bb3d4cdd6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d331c5f9012cfa4b9ab980882f10f4f569e025b76cc48210e29bb3d4cdd6ce->enter($__internal_08d331c5f9012cfa4b9ab980882f10f4f569e025b76cc48210e29bb3d4cdd6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3b8378524bebba992d8a157ca983660c146526a26a21ef2fc5a4dc6a0c8e4af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8378524bebba992d8a157ca983660c146526a26a21ef2fc5a4dc6a0c8e4af6->enter($__internal_3b8378524bebba992d8a157ca983660c146526a26a21ef2fc5a4dc6a0c8e4af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_08d331c5f9012cfa4b9ab980882f10f4f569e025b76cc48210e29bb3d4cdd6ce->leave($__internal_08d331c5f9012cfa4b9ab980882f10f4f569e025b76cc48210e29bb3d4cdd6ce_prof);

        
        $__internal_3b8378524bebba992d8a157ca983660c146526a26a21ef2fc5a4dc6a0c8e4af6->leave($__internal_3b8378524bebba992d8a157ca983660c146526a26a21ef2fc5a4dc6a0c8e4af6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
