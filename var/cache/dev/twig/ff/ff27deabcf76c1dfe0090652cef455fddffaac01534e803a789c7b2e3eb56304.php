<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c7cb01721a01044236d7c4aee55b1d09763d538a1adc24252dbbc4e85b4d2f73 extends Twig_Template
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
        $__internal_ad55c7a80c5bdc6ba9cd9c46020ed01854c0e38a7f5be70da923de67966ccc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad55c7a80c5bdc6ba9cd9c46020ed01854c0e38a7f5be70da923de67966ccc06->enter($__internal_ad55c7a80c5bdc6ba9cd9c46020ed01854c0e38a7f5be70da923de67966ccc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b3608055a2c5a4063d06ae4a9a222f45a2ef54af282186895b97d389cb8ba4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3608055a2c5a4063d06ae4a9a222f45a2ef54af282186895b97d389cb8ba4de->enter($__internal_b3608055a2c5a4063d06ae4a9a222f45a2ef54af282186895b97d389cb8ba4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ad55c7a80c5bdc6ba9cd9c46020ed01854c0e38a7f5be70da923de67966ccc06->leave($__internal_ad55c7a80c5bdc6ba9cd9c46020ed01854c0e38a7f5be70da923de67966ccc06_prof);

        
        $__internal_b3608055a2c5a4063d06ae4a9a222f45a2ef54af282186895b97d389cb8ba4de->leave($__internal_b3608055a2c5a4063d06ae4a9a222f45a2ef54af282186895b97d389cb8ba4de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
