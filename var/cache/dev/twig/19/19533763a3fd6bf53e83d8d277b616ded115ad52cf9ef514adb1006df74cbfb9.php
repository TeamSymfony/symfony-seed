<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_95d7afa5dccedf33d5c5855dd7cff6cece12ad2c9179c95e5f380d3d7bc24e66 extends Twig_Template
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
        $__internal_e977fc0574909971da0eec848a5e10784936365a01efa09e7ed0bd41a6d5018a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e977fc0574909971da0eec848a5e10784936365a01efa09e7ed0bd41a6d5018a->enter($__internal_e977fc0574909971da0eec848a5e10784936365a01efa09e7ed0bd41a6d5018a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d608e5d76bc6aff3d37bb60160b3b93ed8d1fbdd82a22f1119eb2e2c2dbac9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d608e5d76bc6aff3d37bb60160b3b93ed8d1fbdd82a22f1119eb2e2c2dbac9a3->enter($__internal_d608e5d76bc6aff3d37bb60160b3b93ed8d1fbdd82a22f1119eb2e2c2dbac9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e977fc0574909971da0eec848a5e10784936365a01efa09e7ed0bd41a6d5018a->leave($__internal_e977fc0574909971da0eec848a5e10784936365a01efa09e7ed0bd41a6d5018a_prof);

        
        $__internal_d608e5d76bc6aff3d37bb60160b3b93ed8d1fbdd82a22f1119eb2e2c2dbac9a3->leave($__internal_d608e5d76bc6aff3d37bb60160b3b93ed8d1fbdd82a22f1119eb2e2c2dbac9a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
