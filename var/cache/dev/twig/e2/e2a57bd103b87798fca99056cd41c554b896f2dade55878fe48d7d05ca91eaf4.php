<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b5199c97b17958c87e5849af707219510a9234343a67724600fd2b1a411e0642 extends Twig_Template
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
        $__internal_0e299de2e14d00dd201beb9c22606a20a8dd6ab3bec4ef4583f0119bbc919912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e299de2e14d00dd201beb9c22606a20a8dd6ab3bec4ef4583f0119bbc919912->enter($__internal_0e299de2e14d00dd201beb9c22606a20a8dd6ab3bec4ef4583f0119bbc919912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_2e851b8b06278fd535dcb3e7edff8d2a54852fa3cea5cc1f0510d6af7b60f929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e851b8b06278fd535dcb3e7edff8d2a54852fa3cea5cc1f0510d6af7b60f929->enter($__internal_2e851b8b06278fd535dcb3e7edff8d2a54852fa3cea5cc1f0510d6af7b60f929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0e299de2e14d00dd201beb9c22606a20a8dd6ab3bec4ef4583f0119bbc919912->leave($__internal_0e299de2e14d00dd201beb9c22606a20a8dd6ab3bec4ef4583f0119bbc919912_prof);

        
        $__internal_2e851b8b06278fd535dcb3e7edff8d2a54852fa3cea5cc1f0510d6af7b60f929->leave($__internal_2e851b8b06278fd535dcb3e7edff8d2a54852fa3cea5cc1f0510d6af7b60f929_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
