<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6e1f96333f426509fce68fc6473b0cbcfb61c4f185043efcf8cd11e3eaa1f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e1f96333f426509fce68fc6473b0cbcfb61c4f185043efcf8cd11e3eaa1f3b->enter($__internal_f6e1f96333f426509fce68fc6473b0cbcfb61c4f185043efcf8cd11e3eaa1f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_e18b1d398c53cdadc97090466a1a0dd4e705dc0663195a8cce3fded2bb5f9e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18b1d398c53cdadc97090466a1a0dd4e705dc0663195a8cce3fded2bb5f9e19->enter($__internal_e18b1d398c53cdadc97090466a1a0dd4e705dc0663195a8cce3fded2bb5f9e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e1f96333f426509fce68fc6473b0cbcfb61c4f185043efcf8cd11e3eaa1f3b->leave($__internal_f6e1f96333f426509fce68fc6473b0cbcfb61c4f185043efcf8cd11e3eaa1f3b_prof);

        
        $__internal_e18b1d398c53cdadc97090466a1a0dd4e705dc0663195a8cce3fded2bb5f9e19->leave($__internal_e18b1d398c53cdadc97090466a1a0dd4e705dc0663195a8cce3fded2bb5f9e19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0859e59b95eb27fcb6504956c58b0ecb46b2d564632a0c757e50f5f4141af099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0859e59b95eb27fcb6504956c58b0ecb46b2d564632a0c757e50f5f4141af099->enter($__internal_0859e59b95eb27fcb6504956c58b0ecb46b2d564632a0c757e50f5f4141af099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cdeffb4181609df61ff674ca18bef25002e558ff4e323f2174b89390fd1c7f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdeffb4181609df61ff674ca18bef25002e558ff4e323f2174b89390fd1c7f61->enter($__internal_cdeffb4181609df61ff674ca18bef25002e558ff4e323f2174b89390fd1c7f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cdeffb4181609df61ff674ca18bef25002e558ff4e323f2174b89390fd1c7f61->leave($__internal_cdeffb4181609df61ff674ca18bef25002e558ff4e323f2174b89390fd1c7f61_prof);

        
        $__internal_0859e59b95eb27fcb6504956c58b0ecb46b2d564632a0c757e50f5f4141af099->leave($__internal_0859e59b95eb27fcb6504956c58b0ecb46b2d564632a0c757e50f5f4141af099_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa01045a8b70427d236ccd62ba8cbebcafab8489a8be4b8c87442a7f47e1e73d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa01045a8b70427d236ccd62ba8cbebcafab8489a8be4b8c87442a7f47e1e73d->enter($__internal_fa01045a8b70427d236ccd62ba8cbebcafab8489a8be4b8c87442a7f47e1e73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_30255768039844cd822ede585790f88364c6747574d5b550486f5290c5f3f447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30255768039844cd822ede585790f88364c6747574d5b550486f5290c5f3f447->enter($__internal_30255768039844cd822ede585790f88364c6747574d5b550486f5290c5f3f447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_30255768039844cd822ede585790f88364c6747574d5b550486f5290c5f3f447->leave($__internal_30255768039844cd822ede585790f88364c6747574d5b550486f5290c5f3f447_prof);

        
        $__internal_fa01045a8b70427d236ccd62ba8cbebcafab8489a8be4b8c87442a7f47e1e73d->leave($__internal_fa01045a8b70427d236ccd62ba8cbebcafab8489a8be4b8c87442a7f47e1e73d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee89a42023ebee42b435f4cc0158527726d30820dbe00c0b70077291cff5730d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee89a42023ebee42b435f4cc0158527726d30820dbe00c0b70077291cff5730d->enter($__internal_ee89a42023ebee42b435f4cc0158527726d30820dbe00c0b70077291cff5730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7574b321a636603c0571e98bdc597bd131bc1c11c78ebd3636b8d913b3e6ed88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7574b321a636603c0571e98bdc597bd131bc1c11c78ebd3636b8d913b3e6ed88->enter($__internal_7574b321a636603c0571e98bdc597bd131bc1c11c78ebd3636b8d913b3e6ed88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_7574b321a636603c0571e98bdc597bd131bc1c11c78ebd3636b8d913b3e6ed88->leave($__internal_7574b321a636603c0571e98bdc597bd131bc1c11c78ebd3636b8d913b3e6ed88_prof);

        
        $__internal_ee89a42023ebee42b435f4cc0158527726d30820dbe00c0b70077291cff5730d->leave($__internal_ee89a42023ebee42b435f4cc0158527726d30820dbe00c0b70077291cff5730d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
