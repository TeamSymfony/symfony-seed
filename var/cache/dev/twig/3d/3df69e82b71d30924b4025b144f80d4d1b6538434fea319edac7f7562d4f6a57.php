<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4637bdf881b03616502cff663e952e1de11fb13ee777e5412be7d6c409e8894f extends Twig_Template
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
        $__internal_64924410c9f8ed3f2131d751940ecf8175a99de8a57c8bb2f7c759c2c2eac8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64924410c9f8ed3f2131d751940ecf8175a99de8a57c8bb2f7c759c2c2eac8e3->enter($__internal_64924410c9f8ed3f2131d751940ecf8175a99de8a57c8bb2f7c759c2c2eac8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_266cc115b6746bc9e1791e5d41545c1692d972305b8e8efcffe8b5f45e65e07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266cc115b6746bc9e1791e5d41545c1692d972305b8e8efcffe8b5f45e65e07d->enter($__internal_266cc115b6746bc9e1791e5d41545c1692d972305b8e8efcffe8b5f45e65e07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_64924410c9f8ed3f2131d751940ecf8175a99de8a57c8bb2f7c759c2c2eac8e3->leave($__internal_64924410c9f8ed3f2131d751940ecf8175a99de8a57c8bb2f7c759c2c2eac8e3_prof);

        
        $__internal_266cc115b6746bc9e1791e5d41545c1692d972305b8e8efcffe8b5f45e65e07d->leave($__internal_266cc115b6746bc9e1791e5d41545c1692d972305b8e8efcffe8b5f45e65e07d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
