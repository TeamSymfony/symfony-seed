<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_93e6d97fe1779f5e1ad3aeb45ba946d842a23dff8c07c99deb961e708599fd1c extends Twig_Template
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
        $__internal_c4a9e2e7409b5e1dcb7890c0bc8b02307cca8e21aff426df267a76e96e554249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a9e2e7409b5e1dcb7890c0bc8b02307cca8e21aff426df267a76e96e554249->enter($__internal_c4a9e2e7409b5e1dcb7890c0bc8b02307cca8e21aff426df267a76e96e554249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f206f1efc618ce5e25736f7a13d942baa54e87b845f3edd5a7f3b77dc80a5f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f206f1efc618ce5e25736f7a13d942baa54e87b845f3edd5a7f3b77dc80a5f8d->enter($__internal_f206f1efc618ce5e25736f7a13d942baa54e87b845f3edd5a7f3b77dc80a5f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c4a9e2e7409b5e1dcb7890c0bc8b02307cca8e21aff426df267a76e96e554249->leave($__internal_c4a9e2e7409b5e1dcb7890c0bc8b02307cca8e21aff426df267a76e96e554249_prof);

        
        $__internal_f206f1efc618ce5e25736f7a13d942baa54e87b845f3edd5a7f3b77dc80a5f8d->leave($__internal_f206f1efc618ce5e25736f7a13d942baa54e87b845f3edd5a7f3b77dc80a5f8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
