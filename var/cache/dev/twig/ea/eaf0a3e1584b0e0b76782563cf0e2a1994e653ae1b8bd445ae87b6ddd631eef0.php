<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cf98befa34d6fd83c86761236c260b9a9d3e7c2c68dd45d3cce13b4178408a30 extends Twig_Template
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
        $__internal_a7534af27572facdb4158caf1a5d69631bdebfe18e0fef5be882fcaebe3edff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7534af27572facdb4158caf1a5d69631bdebfe18e0fef5be882fcaebe3edff8->enter($__internal_a7534af27572facdb4158caf1a5d69631bdebfe18e0fef5be882fcaebe3edff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_73d0773cb10206975d354f42eea51ec1b1a281def41c2f72f1f1fbf945587678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d0773cb10206975d354f42eea51ec1b1a281def41c2f72f1f1fbf945587678->enter($__internal_73d0773cb10206975d354f42eea51ec1b1a281def41c2f72f1f1fbf945587678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a7534af27572facdb4158caf1a5d69631bdebfe18e0fef5be882fcaebe3edff8->leave($__internal_a7534af27572facdb4158caf1a5d69631bdebfe18e0fef5be882fcaebe3edff8_prof);

        
        $__internal_73d0773cb10206975d354f42eea51ec1b1a281def41c2f72f1f1fbf945587678->leave($__internal_73d0773cb10206975d354f42eea51ec1b1a281def41c2f72f1f1fbf945587678_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
