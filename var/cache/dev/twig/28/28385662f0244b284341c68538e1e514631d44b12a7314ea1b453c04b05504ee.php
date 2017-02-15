<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_29a02bedfe3cf26583b09ebb4c87ac7db56658eaf9c23ac541dea77d8510f7f8 extends Twig_Template
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
        $__internal_4b9b8be688b5cbeb6aeb24ac3c17ac47eb7c87c6b8c78f843e66f8a4e31a7b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b9b8be688b5cbeb6aeb24ac3c17ac47eb7c87c6b8c78f843e66f8a4e31a7b30->enter($__internal_4b9b8be688b5cbeb6aeb24ac3c17ac47eb7c87c6b8c78f843e66f8a4e31a7b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_81dedf2d295afbd5520e7a220220831d42f02e7b9f70100e9f3c06a7997f36d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81dedf2d295afbd5520e7a220220831d42f02e7b9f70100e9f3c06a7997f36d3->enter($__internal_81dedf2d295afbd5520e7a220220831d42f02e7b9f70100e9f3c06a7997f36d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4b9b8be688b5cbeb6aeb24ac3c17ac47eb7c87c6b8c78f843e66f8a4e31a7b30->leave($__internal_4b9b8be688b5cbeb6aeb24ac3c17ac47eb7c87c6b8c78f843e66f8a4e31a7b30_prof);

        
        $__internal_81dedf2d295afbd5520e7a220220831d42f02e7b9f70100e9f3c06a7997f36d3->leave($__internal_81dedf2d295afbd5520e7a220220831d42f02e7b9f70100e9f3c06a7997f36d3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_63b62fef0b285259b55ee1282d28d5bff2cdec033892c2ed2fa586f0ead4ac4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b62fef0b285259b55ee1282d28d5bff2cdec033892c2ed2fa586f0ead4ac4b->enter($__internal_63b62fef0b285259b55ee1282d28d5bff2cdec033892c2ed2fa586f0ead4ac4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_03af0712960015119feba713bb55618d6acd56370ddef5c63d555d10a254d86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03af0712960015119feba713bb55618d6acd56370ddef5c63d555d10a254d86a->enter($__internal_03af0712960015119feba713bb55618d6acd56370ddef5c63d555d10a254d86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_03af0712960015119feba713bb55618d6acd56370ddef5c63d555d10a254d86a->leave($__internal_03af0712960015119feba713bb55618d6acd56370ddef5c63d555d10a254d86a_prof);

        
        $__internal_63b62fef0b285259b55ee1282d28d5bff2cdec033892c2ed2fa586f0ead4ac4b->leave($__internal_63b62fef0b285259b55ee1282d28d5bff2cdec033892c2ed2fa586f0ead4ac4b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4091776ed31f83a4d0ac08e68e9445e546d8b1b862c0677af12b10967875d311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4091776ed31f83a4d0ac08e68e9445e546d8b1b862c0677af12b10967875d311->enter($__internal_4091776ed31f83a4d0ac08e68e9445e546d8b1b862c0677af12b10967875d311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b1c5c1e1f91090cd95a7e470f5181e68282d8c50bafc4b56eae7d508b55cd0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c5c1e1f91090cd95a7e470f5181e68282d8c50bafc4b56eae7d508b55cd0b2->enter($__internal_b1c5c1e1f91090cd95a7e470f5181e68282d8c50bafc4b56eae7d508b55cd0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b1c5c1e1f91090cd95a7e470f5181e68282d8c50bafc4b56eae7d508b55cd0b2->leave($__internal_b1c5c1e1f91090cd95a7e470f5181e68282d8c50bafc4b56eae7d508b55cd0b2_prof);

        
        $__internal_4091776ed31f83a4d0ac08e68e9445e546d8b1b862c0677af12b10967875d311->leave($__internal_4091776ed31f83a4d0ac08e68e9445e546d8b1b862c0677af12b10967875d311_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_58d4f8caaee1188f20cebaeadf6fee0a9278d68922451237c511834bde0fd13d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d4f8caaee1188f20cebaeadf6fee0a9278d68922451237c511834bde0fd13d->enter($__internal_58d4f8caaee1188f20cebaeadf6fee0a9278d68922451237c511834bde0fd13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_16e050860bd4ff6210d4cabf09b7c08b668f97584018743594085ea0e32e1aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e050860bd4ff6210d4cabf09b7c08b668f97584018743594085ea0e32e1aa7->enter($__internal_16e050860bd4ff6210d4cabf09b7c08b668f97584018743594085ea0e32e1aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_16e050860bd4ff6210d4cabf09b7c08b668f97584018743594085ea0e32e1aa7->leave($__internal_16e050860bd4ff6210d4cabf09b7c08b668f97584018743594085ea0e32e1aa7_prof);

        
        $__internal_58d4f8caaee1188f20cebaeadf6fee0a9278d68922451237c511834bde0fd13d->leave($__internal_58d4f8caaee1188f20cebaeadf6fee0a9278d68922451237c511834bde0fd13d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/brian/projects/tht/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
