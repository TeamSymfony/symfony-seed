<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3a23e5b3d4ec9ef94a09aaffb6956f1bd7905c26dc56ad3ee1165e6825344ab7 extends Twig_Template
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
        $__internal_9e0dcfe39eed35bbb64b6948787867d58edf63ffbbda099a6bf728f3198b199a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0dcfe39eed35bbb64b6948787867d58edf63ffbbda099a6bf728f3198b199a->enter($__internal_9e0dcfe39eed35bbb64b6948787867d58edf63ffbbda099a6bf728f3198b199a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5e9ba98ada3c91789231ddacc8ed6124f91651b1a1815546191de88ee9e16cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9ba98ada3c91789231ddacc8ed6124f91651b1a1815546191de88ee9e16cc4->enter($__internal_5e9ba98ada3c91789231ddacc8ed6124f91651b1a1815546191de88ee9e16cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9e0dcfe39eed35bbb64b6948787867d58edf63ffbbda099a6bf728f3198b199a->leave($__internal_9e0dcfe39eed35bbb64b6948787867d58edf63ffbbda099a6bf728f3198b199a_prof);

        
        $__internal_5e9ba98ada3c91789231ddacc8ed6124f91651b1a1815546191de88ee9e16cc4->leave($__internal_5e9ba98ada3c91789231ddacc8ed6124f91651b1a1815546191de88ee9e16cc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
