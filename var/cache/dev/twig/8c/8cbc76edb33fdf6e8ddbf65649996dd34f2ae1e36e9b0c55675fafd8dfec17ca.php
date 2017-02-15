<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ca285f51b5370ebd0e275586e847e1530eafa096ae931c8b09873b59b0ae4b49 extends Twig_Template
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
        $__internal_5d0a5ed4f91fa65142430867d63167537ca2846f762327c514dd76e256d182fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0a5ed4f91fa65142430867d63167537ca2846f762327c514dd76e256d182fc->enter($__internal_5d0a5ed4f91fa65142430867d63167537ca2846f762327c514dd76e256d182fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_d08fff598bd8c188072e1eca3e3fb9bdc42ee1b1b428dff4a1e243a0ed6d132d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08fff598bd8c188072e1eca3e3fb9bdc42ee1b1b428dff4a1e243a0ed6d132d->enter($__internal_d08fff598bd8c188072e1eca3e3fb9bdc42ee1b1b428dff4a1e243a0ed6d132d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_5d0a5ed4f91fa65142430867d63167537ca2846f762327c514dd76e256d182fc->leave($__internal_5d0a5ed4f91fa65142430867d63167537ca2846f762327c514dd76e256d182fc_prof);

        
        $__internal_d08fff598bd8c188072e1eca3e3fb9bdc42ee1b1b428dff4a1e243a0ed6d132d->leave($__internal_d08fff598bd8c188072e1eca3e3fb9bdc42ee1b1b428dff4a1e243a0ed6d132d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
