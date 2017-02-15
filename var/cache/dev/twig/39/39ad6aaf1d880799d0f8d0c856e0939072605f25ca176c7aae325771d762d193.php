<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_3b5ec0524e6c87039bbe98e80026fade9ad6fb2f8dec838ca3d6b3163fbc4b88 extends Twig_Template
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
        $__internal_30ca29888dd419a78f8a36c8a585f7e1540ad339d6ee9a461ca5e842416907ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ca29888dd419a78f8a36c8a585f7e1540ad339d6ee9a461ca5e842416907ed->enter($__internal_30ca29888dd419a78f8a36c8a585f7e1540ad339d6ee9a461ca5e842416907ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_50075bf13c73cd11af2993a0c6fe6da152e54c5d831b517c6b3b9c9948bb3104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50075bf13c73cd11af2993a0c6fe6da152e54c5d831b517c6b3b9c9948bb3104->enter($__internal_50075bf13c73cd11af2993a0c6fe6da152e54c5d831b517c6b3b9c9948bb3104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_30ca29888dd419a78f8a36c8a585f7e1540ad339d6ee9a461ca5e842416907ed->leave($__internal_30ca29888dd419a78f8a36c8a585f7e1540ad339d6ee9a461ca5e842416907ed_prof);

        
        $__internal_50075bf13c73cd11af2993a0c6fe6da152e54c5d831b517c6b3b9c9948bb3104->leave($__internal_50075bf13c73cd11af2993a0c6fe6da152e54c5d831b517c6b3b9c9948bb3104_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
