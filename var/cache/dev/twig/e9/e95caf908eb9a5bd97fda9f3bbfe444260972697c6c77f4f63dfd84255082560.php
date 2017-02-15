<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_72111f2bb34a4692c3c0a7e55cc41e467ad2b8c3530294bfd71f5611508f0b06 extends Twig_Template
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
        $__internal_99980cc03f93175ad50e9cbb3c595aa4d8b6c36674348e0fd131a948840669ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99980cc03f93175ad50e9cbb3c595aa4d8b6c36674348e0fd131a948840669ca->enter($__internal_99980cc03f93175ad50e9cbb3c595aa4d8b6c36674348e0fd131a948840669ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2e946f27c119fd649b135c158400d253a12e6dd6770ad4d1f0e3a2157a52b58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e946f27c119fd649b135c158400d253a12e6dd6770ad4d1f0e3a2157a52b58d->enter($__internal_2e946f27c119fd649b135c158400d253a12e6dd6770ad4d1f0e3a2157a52b58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_99980cc03f93175ad50e9cbb3c595aa4d8b6c36674348e0fd131a948840669ca->leave($__internal_99980cc03f93175ad50e9cbb3c595aa4d8b6c36674348e0fd131a948840669ca_prof);

        
        $__internal_2e946f27c119fd649b135c158400d253a12e6dd6770ad4d1f0e3a2157a52b58d->leave($__internal_2e946f27c119fd649b135c158400d253a12e6dd6770ad4d1f0e3a2157a52b58d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
