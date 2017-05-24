<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b97731d559802610bf6f6cb9824bd603427add78143ee48518fd8ede0974a879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36c242b4066173f7396c41436023eb9f8dda7fa79a25e3a3c94ce79ae2bc5374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c242b4066173f7396c41436023eb9f8dda7fa79a25e3a3c94ce79ae2bc5374->enter($__internal_36c242b4066173f7396c41436023eb9f8dda7fa79a25e3a3c94ce79ae2bc5374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_aea57451c353773c039bcd20d8dab32e212469d4ec5a98ad645cbb90228bd9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea57451c353773c039bcd20d8dab32e212469d4ec5a98ad645cbb90228bd9eb->enter($__internal_aea57451c353773c039bcd20d8dab32e212469d4ec5a98ad645cbb90228bd9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36c242b4066173f7396c41436023eb9f8dda7fa79a25e3a3c94ce79ae2bc5374->leave($__internal_36c242b4066173f7396c41436023eb9f8dda7fa79a25e3a3c94ce79ae2bc5374_prof);

        
        $__internal_aea57451c353773c039bcd20d8dab32e212469d4ec5a98ad645cbb90228bd9eb->leave($__internal_aea57451c353773c039bcd20d8dab32e212469d4ec5a98ad645cbb90228bd9eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fda4f16ce67a72c72c96789bded40dec43ba43bc105b1a608eaa0a224d7551f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fda4f16ce67a72c72c96789bded40dec43ba43bc105b1a608eaa0a224d7551f->enter($__internal_7fda4f16ce67a72c72c96789bded40dec43ba43bc105b1a608eaa0a224d7551f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_486216a8cb4772b320fda72ad1dca895b57bf4cd319f0eaa0ca6e27574723f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486216a8cb4772b320fda72ad1dca895b57bf4cd319f0eaa0ca6e27574723f14->enter($__internal_486216a8cb4772b320fda72ad1dca895b57bf4cd319f0eaa0ca6e27574723f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_486216a8cb4772b320fda72ad1dca895b57bf4cd319f0eaa0ca6e27574723f14->leave($__internal_486216a8cb4772b320fda72ad1dca895b57bf4cd319f0eaa0ca6e27574723f14_prof);

        
        $__internal_7fda4f16ce67a72c72c96789bded40dec43ba43bc105b1a608eaa0a224d7551f->leave($__internal_7fda4f16ce67a72c72c96789bded40dec43ba43bc105b1a608eaa0a224d7551f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock %}
", "@FOSUser/Registration/register.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
