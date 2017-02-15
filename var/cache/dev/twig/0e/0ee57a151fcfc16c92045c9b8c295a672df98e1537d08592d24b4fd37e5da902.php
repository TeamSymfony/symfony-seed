<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_05e4ba2fd294fdec1729ead3147bccf54b5ac9a204e9543a8a9ab09d10e5ee8d extends Twig_Template
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
        $__internal_61f8ff06ad0f862c02b9af094b3f7cc98333bfdc553d69eb57cbbe29fb119ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f8ff06ad0f862c02b9af094b3f7cc98333bfdc553d69eb57cbbe29fb119ef7->enter($__internal_61f8ff06ad0f862c02b9af094b3f7cc98333bfdc553d69eb57cbbe29fb119ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_06ed028045e46dc8df6137dd0c7dcae17b1c43da88957918463b87bf324aff2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ed028045e46dc8df6137dd0c7dcae17b1c43da88957918463b87bf324aff2e->enter($__internal_06ed028045e46dc8df6137dd0c7dcae17b1c43da88957918463b87bf324aff2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_61f8ff06ad0f862c02b9af094b3f7cc98333bfdc553d69eb57cbbe29fb119ef7->leave($__internal_61f8ff06ad0f862c02b9af094b3f7cc98333bfdc553d69eb57cbbe29fb119ef7_prof);

        
        $__internal_06ed028045e46dc8df6137dd0c7dcae17b1c43da88957918463b87bf324aff2e->leave($__internal_06ed028045e46dc8df6137dd0c7dcae17b1c43da88957918463b87bf324aff2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
