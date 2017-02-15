<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a4e254d99350e31e2f1320a6b3258f61bc6876a0452cf5602c2a2eef09494fc extends Twig_Template
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
        $__internal_76bc7b1e4ff22087a570f3192efb83099f3cb888403bdc10a2ebbbc11004cac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76bc7b1e4ff22087a570f3192efb83099f3cb888403bdc10a2ebbbc11004cac3->enter($__internal_76bc7b1e4ff22087a570f3192efb83099f3cb888403bdc10a2ebbbc11004cac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_301f1786516c5477dd8807cdb74777c014e7d5d212b661a440725a64a90c7056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301f1786516c5477dd8807cdb74777c014e7d5d212b661a440725a64a90c7056->enter($__internal_301f1786516c5477dd8807cdb74777c014e7d5d212b661a440725a64a90c7056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_76bc7b1e4ff22087a570f3192efb83099f3cb888403bdc10a2ebbbc11004cac3->leave($__internal_76bc7b1e4ff22087a570f3192efb83099f3cb888403bdc10a2ebbbc11004cac3_prof);

        
        $__internal_301f1786516c5477dd8807cdb74777c014e7d5d212b661a440725a64a90c7056->leave($__internal_301f1786516c5477dd8807cdb74777c014e7d5d212b661a440725a64a90c7056_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
