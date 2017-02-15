<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d74d8c725eac15e4fb152042b00cc910d59d819fe0c6a4d9c3d533751f8e7ea1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d39d0566f2e1a16d5863971c3bb4a067477b2efd29babf3ad5dbc2cefa11ef2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39d0566f2e1a16d5863971c3bb4a067477b2efd29babf3ad5dbc2cefa11ef2f->enter($__internal_d39d0566f2e1a16d5863971c3bb4a067477b2efd29babf3ad5dbc2cefa11ef2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_1a4671598e74b078e45c11b82b779988b7dc84838ddad628f1df48d9fb690ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4671598e74b078e45c11b82b779988b7dc84838ddad628f1df48d9fb690ced->enter($__internal_1a4671598e74b078e45c11b82b779988b7dc84838ddad628f1df48d9fb690ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d39d0566f2e1a16d5863971c3bb4a067477b2efd29babf3ad5dbc2cefa11ef2f->leave($__internal_d39d0566f2e1a16d5863971c3bb4a067477b2efd29babf3ad5dbc2cefa11ef2f_prof);

        
        $__internal_1a4671598e74b078e45c11b82b779988b7dc84838ddad628f1df48d9fb690ced->leave($__internal_1a4671598e74b078e45c11b82b779988b7dc84838ddad628f1df48d9fb690ced_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c923aac1e1701171357d84b437c40890331b78bf77b018557583841ff95c0495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c923aac1e1701171357d84b437c40890331b78bf77b018557583841ff95c0495->enter($__internal_c923aac1e1701171357d84b437c40890331b78bf77b018557583841ff95c0495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_45d095aaeaecd36e60aede4b734b3aa87f572398fdadd011ba05ceed3950908c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d095aaeaecd36e60aede4b734b3aa87f572398fdadd011ba05ceed3950908c->enter($__internal_45d095aaeaecd36e60aede4b734b3aa87f572398fdadd011ba05ceed3950908c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_45d095aaeaecd36e60aede4b734b3aa87f572398fdadd011ba05ceed3950908c->leave($__internal_45d095aaeaecd36e60aede4b734b3aa87f572398fdadd011ba05ceed3950908c_prof);

        
        $__internal_c923aac1e1701171357d84b437c40890331b78bf77b018557583841ff95c0495->leave($__internal_c923aac1e1701171357d84b437c40890331b78bf77b018557583841ff95c0495_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_80b3c1125d3bf0abe0bd2b45698adb3055d8dfee6b763fae6c782ae98b08e309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b3c1125d3bf0abe0bd2b45698adb3055d8dfee6b763fae6c782ae98b08e309->enter($__internal_80b3c1125d3bf0abe0bd2b45698adb3055d8dfee6b763fae6c782ae98b08e309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3ae43445a77475d3f6612f1b1ef29f19728dd7d67cf4d8ff5c0d2badf645dfe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae43445a77475d3f6612f1b1ef29f19728dd7d67cf4d8ff5c0d2badf645dfe6->enter($__internal_3ae43445a77475d3f6612f1b1ef29f19728dd7d67cf4d8ff5c0d2badf645dfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3ae43445a77475d3f6612f1b1ef29f19728dd7d67cf4d8ff5c0d2badf645dfe6->leave($__internal_3ae43445a77475d3f6612f1b1ef29f19728dd7d67cf4d8ff5c0d2badf645dfe6_prof);

        
        $__internal_80b3c1125d3bf0abe0bd2b45698adb3055d8dfee6b763fae6c782ae98b08e309->leave($__internal_80b3c1125d3bf0abe0bd2b45698adb3055d8dfee6b763fae6c782ae98b08e309_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ec30f7c9ff2d036cb248bd1afe40e6547e7daf478cc834085c9449b7cfbedbc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec30f7c9ff2d036cb248bd1afe40e6547e7daf478cc834085c9449b7cfbedbc9->enter($__internal_ec30f7c9ff2d036cb248bd1afe40e6547e7daf478cc834085c9449b7cfbedbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_68d817d8e22d99f269dfaa1496e42e8ad990f8ececd2abc9e0b91076cd24de66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d817d8e22d99f269dfaa1496e42e8ad990f8ececd2abc9e0b91076cd24de66->enter($__internal_68d817d8e22d99f269dfaa1496e42e8ad990f8ececd2abc9e0b91076cd24de66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_68d817d8e22d99f269dfaa1496e42e8ad990f8ececd2abc9e0b91076cd24de66->leave($__internal_68d817d8e22d99f269dfaa1496e42e8ad990f8ececd2abc9e0b91076cd24de66_prof);

        
        $__internal_ec30f7c9ff2d036cb248bd1afe40e6547e7daf478cc834085c9449b7cfbedbc9->leave($__internal_ec30f7c9ff2d036cb248bd1afe40e6547e7daf478cc834085c9449b7cfbedbc9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
