<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d09f5d001bdfae6a908da2fca527dcc57f94534cbb2a2fd4d8c1f862b601f725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9f625eda8a80013be64f39b4a344891c5984c4789a4715dda322412ad25cb9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f625eda8a80013be64f39b4a344891c5984c4789a4715dda322412ad25cb9b->enter($__internal_c9f625eda8a80013be64f39b4a344891c5984c4789a4715dda322412ad25cb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0153291b7b6925c868007cf58e834841704995301f5f8a737a38640ed18866df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0153291b7b6925c868007cf58e834841704995301f5f8a737a38640ed18866df->enter($__internal_0153291b7b6925c868007cf58e834841704995301f5f8a737a38640ed18866df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9f625eda8a80013be64f39b4a344891c5984c4789a4715dda322412ad25cb9b->leave($__internal_c9f625eda8a80013be64f39b4a344891c5984c4789a4715dda322412ad25cb9b_prof);

        
        $__internal_0153291b7b6925c868007cf58e834841704995301f5f8a737a38640ed18866df->leave($__internal_0153291b7b6925c868007cf58e834841704995301f5f8a737a38640ed18866df_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_58d52f461c594aa23286b0d353478d57ff047dba0abe6f25dbd0b92d5e02cdf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d52f461c594aa23286b0d353478d57ff047dba0abe6f25dbd0b92d5e02cdf9->enter($__internal_58d52f461c594aa23286b0d353478d57ff047dba0abe6f25dbd0b92d5e02cdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_626e2ef772b917c263123ac4b930b5485efaa314567a3da11996bce2cc81955b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626e2ef772b917c263123ac4b930b5485efaa314567a3da11996bce2cc81955b->enter($__internal_626e2ef772b917c263123ac4b930b5485efaa314567a3da11996bce2cc81955b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_626e2ef772b917c263123ac4b930b5485efaa314567a3da11996bce2cc81955b->leave($__internal_626e2ef772b917c263123ac4b930b5485efaa314567a3da11996bce2cc81955b_prof);

        
        $__internal_58d52f461c594aa23286b0d353478d57ff047dba0abe6f25dbd0b92d5e02cdf9->leave($__internal_58d52f461c594aa23286b0d353478d57ff047dba0abe6f25dbd0b92d5e02cdf9_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2260f1cd25a4a08b412b75a5b3caaf563cce2ca377f6093d8de40b110a459969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2260f1cd25a4a08b412b75a5b3caaf563cce2ca377f6093d8de40b110a459969->enter($__internal_2260f1cd25a4a08b412b75a5b3caaf563cce2ca377f6093d8de40b110a459969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6df2e7fbb8e9a5f6052df74b288b6d1b9c85e14736baa1483e0d96970d22d180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df2e7fbb8e9a5f6052df74b288b6d1b9c85e14736baa1483e0d96970d22d180->enter($__internal_6df2e7fbb8e9a5f6052df74b288b6d1b9c85e14736baa1483e0d96970d22d180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6df2e7fbb8e9a5f6052df74b288b6d1b9c85e14736baa1483e0d96970d22d180->leave($__internal_6df2e7fbb8e9a5f6052df74b288b6d1b9c85e14736baa1483e0d96970d22d180_prof);

        
        $__internal_2260f1cd25a4a08b412b75a5b3caaf563cce2ca377f6093d8de40b110a459969->leave($__internal_2260f1cd25a4a08b412b75a5b3caaf563cce2ca377f6093d8de40b110a459969_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
