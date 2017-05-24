<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
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
        $__internal_31aa614f3ee4162dc460e4041b8b8e0367c7e5446a8dfc5bc22467442fa1481f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31aa614f3ee4162dc460e4041b8b8e0367c7e5446a8dfc5bc22467442fa1481f->enter($__internal_31aa614f3ee4162dc460e4041b8b8e0367c7e5446a8dfc5bc22467442fa1481f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3c97ae057393d0b3c8c07deaaa6b105243fe15c03ea71c0be04f902158d475b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c97ae057393d0b3c8c07deaaa6b105243fe15c03ea71c0be04f902158d475b5->enter($__internal_3c97ae057393d0b3c8c07deaaa6b105243fe15c03ea71c0be04f902158d475b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31aa614f3ee4162dc460e4041b8b8e0367c7e5446a8dfc5bc22467442fa1481f->leave($__internal_31aa614f3ee4162dc460e4041b8b8e0367c7e5446a8dfc5bc22467442fa1481f_prof);

        
        $__internal_3c97ae057393d0b3c8c07deaaa6b105243fe15c03ea71c0be04f902158d475b5->leave($__internal_3c97ae057393d0b3c8c07deaaa6b105243fe15c03ea71c0be04f902158d475b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84ff025529e5efcbbbf50ef0699e2e260dfc2d18472c059f6370791053305b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ff025529e5efcbbbf50ef0699e2e260dfc2d18472c059f6370791053305b15->enter($__internal_84ff025529e5efcbbbf50ef0699e2e260dfc2d18472c059f6370791053305b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_619156e81509a88b0d258634d837a0c4ec884b04a3fc7892deb4fb24a9c3285d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_619156e81509a88b0d258634d837a0c4ec884b04a3fc7892deb4fb24a9c3285d->enter($__internal_619156e81509a88b0d258634d837a0c4ec884b04a3fc7892deb4fb24a9c3285d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_619156e81509a88b0d258634d837a0c4ec884b04a3fc7892deb4fb24a9c3285d->leave($__internal_619156e81509a88b0d258634d837a0c4ec884b04a3fc7892deb4fb24a9c3285d_prof);

        
        $__internal_84ff025529e5efcbbbf50ef0699e2e260dfc2d18472c059f6370791053305b15->leave($__internal_84ff025529e5efcbbbf50ef0699e2e260dfc2d18472c059f6370791053305b15_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a275f65db2781191c6b7176f46f152f97662249690162c03ae784b187b43e1b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a275f65db2781191c6b7176f46f152f97662249690162c03ae784b187b43e1b9->enter($__internal_a275f65db2781191c6b7176f46f152f97662249690162c03ae784b187b43e1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a3ade4a2c6d57f015f53eda5e0e4a931e8ab62e604b15ecc3d37423a471c0da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ade4a2c6d57f015f53eda5e0e4a931e8ab62e604b15ecc3d37423a471c0da8->enter($__internal_a3ade4a2c6d57f015f53eda5e0e4a931e8ab62e604b15ecc3d37423a471c0da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a3ade4a2c6d57f015f53eda5e0e4a931e8ab62e604b15ecc3d37423a471c0da8->leave($__internal_a3ade4a2c6d57f015f53eda5e0e4a931e8ab62e604b15ecc3d37423a471c0da8_prof);

        
        $__internal_a275f65db2781191c6b7176f46f152f97662249690162c03ae784b187b43e1b9->leave($__internal_a275f65db2781191c6b7176f46f152f97662249690162c03ae784b187b43e1b9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07c12e985ab3dc5cb128f0a4158455ee3ebad4e0c699a9ae79bb5e8fd6d2e8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c12e985ab3dc5cb128f0a4158455ee3ebad4e0c699a9ae79bb5e8fd6d2e8ba->enter($__internal_07c12e985ab3dc5cb128f0a4158455ee3ebad4e0c699a9ae79bb5e8fd6d2e8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_44e404077ac3ee7a5bded420e7bc49bf96810646346e16bc4c06392eacd12fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e404077ac3ee7a5bded420e7bc49bf96810646346e16bc4c06392eacd12fb8->enter($__internal_44e404077ac3ee7a5bded420e7bc49bf96810646346e16bc4c06392eacd12fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_44e404077ac3ee7a5bded420e7bc49bf96810646346e16bc4c06392eacd12fb8->leave($__internal_44e404077ac3ee7a5bded420e7bc49bf96810646346e16bc4c06392eacd12fb8_prof);

        
        $__internal_07c12e985ab3dc5cb128f0a4158455ee3ebad4e0c699a9ae79bb5e8fd6d2e8ba->leave($__internal_07c12e985ab3dc5cb128f0a4158455ee3ebad4e0c699a9ae79bb5e8fd6d2e8ba_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
