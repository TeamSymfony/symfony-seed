<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2860e5c2f8c997d9d0dcb582a6c488d9a51615957c5bde6e68a1c68889f2393e extends Twig_Template
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
        $__internal_219f1b281f65823076bb4cba5c829e969353919bc39c58cac4bbfac4ec00f9ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219f1b281f65823076bb4cba5c829e969353919bc39c58cac4bbfac4ec00f9ac->enter($__internal_219f1b281f65823076bb4cba5c829e969353919bc39c58cac4bbfac4ec00f9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a31fc9fe7e5f8f113627958a30e821ec1eb54f9da07d1b60d58ce1079ff63a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31fc9fe7e5f8f113627958a30e821ec1eb54f9da07d1b60d58ce1079ff63a2e->enter($__internal_a31fc9fe7e5f8f113627958a30e821ec1eb54f9da07d1b60d58ce1079ff63a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_219f1b281f65823076bb4cba5c829e969353919bc39c58cac4bbfac4ec00f9ac->leave($__internal_219f1b281f65823076bb4cba5c829e969353919bc39c58cac4bbfac4ec00f9ac_prof);

        
        $__internal_a31fc9fe7e5f8f113627958a30e821ec1eb54f9da07d1b60d58ce1079ff63a2e->leave($__internal_a31fc9fe7e5f8f113627958a30e821ec1eb54f9da07d1b60d58ce1079ff63a2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
