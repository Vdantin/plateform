<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7f6cf7cf6084033c205d6f2cf169d61a2d5840241930bb7df75097ff0f44f49d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bfdaab577767316673c0b41007d4dd6abb777d07e324a1a5b2e78218f669c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfdaab577767316673c0b41007d4dd6abb777d07e324a1a5b2e78218f669c77->enter($__internal_2bfdaab577767316673c0b41007d4dd6abb777d07e324a1a5b2e78218f669c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_19d8d925ea4aa59c62362a089ea4cb3d7687985878ceb5da98d9dabfe84f2502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d8d925ea4aa59c62362a089ea4cb3d7687985878ceb5da98d9dabfe84f2502->enter($__internal_19d8d925ea4aa59c62362a089ea4cb3d7687985878ceb5da98d9dabfe84f2502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bfdaab577767316673c0b41007d4dd6abb777d07e324a1a5b2e78218f669c77->leave($__internal_2bfdaab577767316673c0b41007d4dd6abb777d07e324a1a5b2e78218f669c77_prof);

        
        $__internal_19d8d925ea4aa59c62362a089ea4cb3d7687985878ceb5da98d9dabfe84f2502->leave($__internal_19d8d925ea4aa59c62362a089ea4cb3d7687985878ceb5da98d9dabfe84f2502_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad5fca9ee98750a7cb6512804c0a10ff7cbd2653a4a4a1dada25dd0160c2c6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5fca9ee98750a7cb6512804c0a10ff7cbd2653a4a4a1dada25dd0160c2c6d4->enter($__internal_ad5fca9ee98750a7cb6512804c0a10ff7cbd2653a4a4a1dada25dd0160c2c6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7c12fa394c77f59a08423e87f0e079181d026da6d2e556f08a15d7a0725692bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c12fa394c77f59a08423e87f0e079181d026da6d2e556f08a15d7a0725692bf->enter($__internal_7c12fa394c77f59a08423e87f0e079181d026da6d2e556f08a15d7a0725692bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_7c12fa394c77f59a08423e87f0e079181d026da6d2e556f08a15d7a0725692bf->leave($__internal_7c12fa394c77f59a08423e87f0e079181d026da6d2e556f08a15d7a0725692bf_prof);

        
        $__internal_ad5fca9ee98750a7cb6512804c0a10ff7cbd2653a4a4a1dada25dd0160c2c6d4->leave($__internal_ad5fca9ee98750a7cb6512804c0a10ff7cbd2653a4a4a1dada25dd0160c2c6d4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
