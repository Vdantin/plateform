<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9b3d75d9857ca5d728ae6d599c01aa3590042d29e32328d63ad27fd0088645ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_219c7efa5127cc52b1718bce6d1b2dc706be938cb192a7e7471c409c8cb6fae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219c7efa5127cc52b1718bce6d1b2dc706be938cb192a7e7471c409c8cb6fae3->enter($__internal_219c7efa5127cc52b1718bce6d1b2dc706be938cb192a7e7471c409c8cb6fae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_11f23bff28a785404c9c231be7ca63a0a62002533c59ac5509b505a826a41fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f23bff28a785404c9c231be7ca63a0a62002533c59ac5509b505a826a41fe8->enter($__internal_11f23bff28a785404c9c231be7ca63a0a62002533c59ac5509b505a826a41fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_219c7efa5127cc52b1718bce6d1b2dc706be938cb192a7e7471c409c8cb6fae3->leave($__internal_219c7efa5127cc52b1718bce6d1b2dc706be938cb192a7e7471c409c8cb6fae3_prof);

        
        $__internal_11f23bff28a785404c9c231be7ca63a0a62002533c59ac5509b505a826a41fe8->leave($__internal_11f23bff28a785404c9c231be7ca63a0a62002533c59ac5509b505a826a41fe8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f358ddc2e206917850426664e29e33791c4671133987be1480dd51b93e78ed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f358ddc2e206917850426664e29e33791c4671133987be1480dd51b93e78ed9->enter($__internal_2f358ddc2e206917850426664e29e33791c4671133987be1480dd51b93e78ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_550a78cb6975b2b953040c1343aa2492b295eba39e937e8cce880c2708030585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550a78cb6975b2b953040c1343aa2492b295eba39e937e8cce880c2708030585->enter($__internal_550a78cb6975b2b953040c1343aa2492b295eba39e937e8cce880c2708030585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_550a78cb6975b2b953040c1343aa2492b295eba39e937e8cce880c2708030585->leave($__internal_550a78cb6975b2b953040c1343aa2492b295eba39e937e8cce880c2708030585_prof);

        
        $__internal_2f358ddc2e206917850426664e29e33791c4671133987be1480dd51b93e78ed9->leave($__internal_2f358ddc2e206917850426664e29e33791c4671133987be1480dd51b93e78ed9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2ad9265933dc1d93c08402a8b63ccd64ef40cfddd55fd90aa73f99881c810e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ad9265933dc1d93c08402a8b63ccd64ef40cfddd55fd90aa73f99881c810e1->enter($__internal_d2ad9265933dc1d93c08402a8b63ccd64ef40cfddd55fd90aa73f99881c810e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d9948cef262569b283c36dfd0f7da03b0fe190e44cf4a7ab7332c0c16bcbb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9948cef262569b283c36dfd0f7da03b0fe190e44cf4a7ab7332c0c16bcbb73->enter($__internal_2d9948cef262569b283c36dfd0f7da03b0fe190e44cf4a7ab7332c0c16bcbb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2d9948cef262569b283c36dfd0f7da03b0fe190e44cf4a7ab7332c0c16bcbb73->leave($__internal_2d9948cef262569b283c36dfd0f7da03b0fe190e44cf4a7ab7332c0c16bcbb73_prof);

        
        $__internal_d2ad9265933dc1d93c08402a8b63ccd64ef40cfddd55fd90aa73f99881c810e1->leave($__internal_d2ad9265933dc1d93c08402a8b63ccd64ef40cfddd55fd90aa73f99881c810e1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
