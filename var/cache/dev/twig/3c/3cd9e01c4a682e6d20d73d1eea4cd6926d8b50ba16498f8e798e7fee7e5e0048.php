<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca659f843624e36b23a04e4b119e5c229bcf537324e9e9e44077b989c4c1663b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca659f843624e36b23a04e4b119e5c229bcf537324e9e9e44077b989c4c1663b->enter($__internal_ca659f843624e36b23a04e4b119e5c229bcf537324e9e9e44077b989c4c1663b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_28110554617a203e1f520aa0f8b54c17f12ee8fbcaba61776c72b0407e83a11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28110554617a203e1f520aa0f8b54c17f12ee8fbcaba61776c72b0407e83a11a->enter($__internal_28110554617a203e1f520aa0f8b54c17f12ee8fbcaba61776c72b0407e83a11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca659f843624e36b23a04e4b119e5c229bcf537324e9e9e44077b989c4c1663b->leave($__internal_ca659f843624e36b23a04e4b119e5c229bcf537324e9e9e44077b989c4c1663b_prof);

        
        $__internal_28110554617a203e1f520aa0f8b54c17f12ee8fbcaba61776c72b0407e83a11a->leave($__internal_28110554617a203e1f520aa0f8b54c17f12ee8fbcaba61776c72b0407e83a11a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9f61c768f06b6b782bffe210faae45cdb0397026fbe681f7cc23ce6c5a8e9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f61c768f06b6b782bffe210faae45cdb0397026fbe681f7cc23ce6c5a8e9eb->enter($__internal_c9f61c768f06b6b782bffe210faae45cdb0397026fbe681f7cc23ce6c5a8e9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_47750d77007a8df1c9079878114a2478bdf947caf0ddba291803f0a1f6dc052b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47750d77007a8df1c9079878114a2478bdf947caf0ddba291803f0a1f6dc052b->enter($__internal_47750d77007a8df1c9079878114a2478bdf947caf0ddba291803f0a1f6dc052b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_47750d77007a8df1c9079878114a2478bdf947caf0ddba291803f0a1f6dc052b->leave($__internal_47750d77007a8df1c9079878114a2478bdf947caf0ddba291803f0a1f6dc052b_prof);

        
        $__internal_c9f61c768f06b6b782bffe210faae45cdb0397026fbe681f7cc23ce6c5a8e9eb->leave($__internal_c9f61c768f06b6b782bffe210faae45cdb0397026fbe681f7cc23ce6c5a8e9eb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_265aed2500070e2e11f4c69334fe4170f5b66cc46b24082cd4f7f2aa8177ae7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265aed2500070e2e11f4c69334fe4170f5b66cc46b24082cd4f7f2aa8177ae7f->enter($__internal_265aed2500070e2e11f4c69334fe4170f5b66cc46b24082cd4f7f2aa8177ae7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_728ba5bb2ed3ae388db028e8a1fe135b6a2e615dd10a36aae1dd0fd3d2d89512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728ba5bb2ed3ae388db028e8a1fe135b6a2e615dd10a36aae1dd0fd3d2d89512->enter($__internal_728ba5bb2ed3ae388db028e8a1fe135b6a2e615dd10a36aae1dd0fd3d2d89512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_728ba5bb2ed3ae388db028e8a1fe135b6a2e615dd10a36aae1dd0fd3d2d89512->leave($__internal_728ba5bb2ed3ae388db028e8a1fe135b6a2e615dd10a36aae1dd0fd3d2d89512_prof);

        
        $__internal_265aed2500070e2e11f4c69334fe4170f5b66cc46b24082cd4f7f2aa8177ae7f->leave($__internal_265aed2500070e2e11f4c69334fe4170f5b66cc46b24082cd4f7f2aa8177ae7f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b12ef6838be713c8615a0e6837fd1f4f23d9ec5259c875267dd232f402fa042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b12ef6838be713c8615a0e6837fd1f4f23d9ec5259c875267dd232f402fa042->enter($__internal_7b12ef6838be713c8615a0e6837fd1f4f23d9ec5259c875267dd232f402fa042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b4c03f20dc2f1fb67ead7c4fe303dcc635d50eaaea14e5fddda4913fac660c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4c03f20dc2f1fb67ead7c4fe303dcc635d50eaaea14e5fddda4913fac660c8->enter($__internal_6b4c03f20dc2f1fb67ead7c4fe303dcc635d50eaaea14e5fddda4913fac660c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b4c03f20dc2f1fb67ead7c4fe303dcc635d50eaaea14e5fddda4913fac660c8->leave($__internal_6b4c03f20dc2f1fb67ead7c4fe303dcc635d50eaaea14e5fddda4913fac660c8_prof);

        
        $__internal_7b12ef6838be713c8615a0e6837fd1f4f23d9ec5259c875267dd232f402fa042->leave($__internal_7b12ef6838be713c8615a0e6837fd1f4f23d9ec5259c875267dd232f402fa042_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
