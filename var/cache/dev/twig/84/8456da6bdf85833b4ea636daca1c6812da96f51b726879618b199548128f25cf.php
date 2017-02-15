<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_130f1aae5fb1f2edca868dca51bc325092dc39c0a8ac85fe6a9574f7ab9718a7 extends Twig_Template
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
        $__internal_70f75049c716b0c1a474fcf6ccf2e233745a69e467494ab285b5c2431c6a15dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f75049c716b0c1a474fcf6ccf2e233745a69e467494ab285b5c2431c6a15dc->enter($__internal_70f75049c716b0c1a474fcf6ccf2e233745a69e467494ab285b5c2431c6a15dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3e8a55f1fd863b15c107e4688d8e110b9e7572154c5302553164503d01ae9eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8a55f1fd863b15c107e4688d8e110b9e7572154c5302553164503d01ae9eec->enter($__internal_3e8a55f1fd863b15c107e4688d8e110b9e7572154c5302553164503d01ae9eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_70f75049c716b0c1a474fcf6ccf2e233745a69e467494ab285b5c2431c6a15dc->leave($__internal_70f75049c716b0c1a474fcf6ccf2e233745a69e467494ab285b5c2431c6a15dc_prof);

        
        $__internal_3e8a55f1fd863b15c107e4688d8e110b9e7572154c5302553164503d01ae9eec->leave($__internal_3e8a55f1fd863b15c107e4688d8e110b9e7572154c5302553164503d01ae9eec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
