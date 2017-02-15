<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9180ece55a1d6e178d05e18ba2cbbc42d59183df6c1aa11037f0ec8ef46ede2c extends Twig_Template
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
        $__internal_2e15cfda1a9ec7d8a67dc11eab697f5ee0ee4d93ca52f701fe6a72875b30c68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e15cfda1a9ec7d8a67dc11eab697f5ee0ee4d93ca52f701fe6a72875b30c68b->enter($__internal_2e15cfda1a9ec7d8a67dc11eab697f5ee0ee4d93ca52f701fe6a72875b30c68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9073dc3e43dfef07c9329e35deec6cc49b462e3f9c40a03d09383ecf5114ab92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9073dc3e43dfef07c9329e35deec6cc49b462e3f9c40a03d09383ecf5114ab92->enter($__internal_9073dc3e43dfef07c9329e35deec6cc49b462e3f9c40a03d09383ecf5114ab92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2e15cfda1a9ec7d8a67dc11eab697f5ee0ee4d93ca52f701fe6a72875b30c68b->leave($__internal_2e15cfda1a9ec7d8a67dc11eab697f5ee0ee4d93ca52f701fe6a72875b30c68b_prof);

        
        $__internal_9073dc3e43dfef07c9329e35deec6cc49b462e3f9c40a03d09383ecf5114ab92->leave($__internal_9073dc3e43dfef07c9329e35deec6cc49b462e3f9c40a03d09383ecf5114ab92_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
