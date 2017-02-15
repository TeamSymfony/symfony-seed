<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_464c6167f8ca2490d2a0afd51fb369b2b491bfb9f9e72d194875d9901ba2d706 extends Twig_Template
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
        $__internal_e5591206e4e108ffbd0707a6621f12d9827b13ff0dd8022fd56d4106d79462ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5591206e4e108ffbd0707a6621f12d9827b13ff0dd8022fd56d4106d79462ad->enter($__internal_e5591206e4e108ffbd0707a6621f12d9827b13ff0dd8022fd56d4106d79462ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f0952caf22217ad8529fce75ef9505805c7147ace8a02ed5ae5a5dcd0754281b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0952caf22217ad8529fce75ef9505805c7147ace8a02ed5ae5a5dcd0754281b->enter($__internal_f0952caf22217ad8529fce75ef9505805c7147ace8a02ed5ae5a5dcd0754281b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e5591206e4e108ffbd0707a6621f12d9827b13ff0dd8022fd56d4106d79462ad->leave($__internal_e5591206e4e108ffbd0707a6621f12d9827b13ff0dd8022fd56d4106d79462ad_prof);

        
        $__internal_f0952caf22217ad8529fce75ef9505805c7147ace8a02ed5ae5a5dcd0754281b->leave($__internal_f0952caf22217ad8529fce75ef9505805c7147ace8a02ed5ae5a5dcd0754281b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
