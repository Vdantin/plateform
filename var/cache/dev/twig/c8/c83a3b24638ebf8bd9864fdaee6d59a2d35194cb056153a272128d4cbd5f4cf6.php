<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_26a93cc247527f79bee9d39b85cbd041f3f38a5c2a02eca18162bbf7a9cce434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b226533b4debd36097233168e541ed1cb46000d228193b1898b1a792f27dec5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b226533b4debd36097233168e541ed1cb46000d228193b1898b1a792f27dec5b->enter($__internal_b226533b4debd36097233168e541ed1cb46000d228193b1898b1a792f27dec5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_1a9be13772f0f93c6cdd743ca223cf8b68fd6b76cffbcea8fc87889f36d97244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9be13772f0f93c6cdd743ca223cf8b68fd6b76cffbcea8fc87889f36d97244->enter($__internal_1a9be13772f0f93c6cdd743ca223cf8b68fd6b76cffbcea8fc87889f36d97244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b226533b4debd36097233168e541ed1cb46000d228193b1898b1a792f27dec5b->leave($__internal_b226533b4debd36097233168e541ed1cb46000d228193b1898b1a792f27dec5b_prof);

        
        $__internal_1a9be13772f0f93c6cdd743ca223cf8b68fd6b76cffbcea8fc87889f36d97244->leave($__internal_1a9be13772f0f93c6cdd743ca223cf8b68fd6b76cffbcea8fc87889f36d97244_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ef1b75b9833ac75cce49292a13283af9590ce1f92ef6c0256fa5475a23186750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1b75b9833ac75cce49292a13283af9590ce1f92ef6c0256fa5475a23186750->enter($__internal_ef1b75b9833ac75cce49292a13283af9590ce1f92ef6c0256fa5475a23186750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c604f026a2a5e9e4f6fa5fb5e9766883960e49637e7fdfe7b34eca23551dc77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c604f026a2a5e9e4f6fa5fb5e9766883960e49637e7fdfe7b34eca23551dc77d->enter($__internal_c604f026a2a5e9e4f6fa5fb5e9766883960e49637e7fdfe7b34eca23551dc77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c604f026a2a5e9e4f6fa5fb5e9766883960e49637e7fdfe7b34eca23551dc77d->leave($__internal_c604f026a2a5e9e4f6fa5fb5e9766883960e49637e7fdfe7b34eca23551dc77d_prof);

        
        $__internal_ef1b75b9833ac75cce49292a13283af9590ce1f92ef6c0256fa5475a23186750->leave($__internal_ef1b75b9833ac75cce49292a13283af9590ce1f92ef6c0256fa5475a23186750_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_25c14b97400265289a38ed9abcb59a1e0c02c2df322bbc73c8c92fc250d03cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c14b97400265289a38ed9abcb59a1e0c02c2df322bbc73c8c92fc250d03cfa->enter($__internal_25c14b97400265289a38ed9abcb59a1e0c02c2df322bbc73c8c92fc250d03cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7870a1280023ab3f4beaaf5212c3b813725afb581af69d243c82c33335844514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7870a1280023ab3f4beaaf5212c3b813725afb581af69d243c82c33335844514->enter($__internal_7870a1280023ab3f4beaaf5212c3b813725afb581af69d243c82c33335844514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7870a1280023ab3f4beaaf5212c3b813725afb581af69d243c82c33335844514->leave($__internal_7870a1280023ab3f4beaaf5212c3b813725afb581af69d243c82c33335844514_prof);

        
        $__internal_25c14b97400265289a38ed9abcb59a1e0c02c2df322bbc73c8c92fc250d03cfa->leave($__internal_25c14b97400265289a38ed9abcb59a1e0c02c2df322bbc73c8c92fc250d03cfa_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f99e9df58057c2eab41e6f2571d3eb627140e0add7d84d4312155abf7d29e0a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99e9df58057c2eab41e6f2571d3eb627140e0add7d84d4312155abf7d29e0a7->enter($__internal_f99e9df58057c2eab41e6f2571d3eb627140e0add7d84d4312155abf7d29e0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3abd19bb5e8ccc36b98f7b53ffdb0eb8bb26d14c2ed08b9e8b3aaa4f99f189b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abd19bb5e8ccc36b98f7b53ffdb0eb8bb26d14c2ed08b9e8b3aaa4f99f189b0->enter($__internal_3abd19bb5e8ccc36b98f7b53ffdb0eb8bb26d14c2ed08b9e8b3aaa4f99f189b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3abd19bb5e8ccc36b98f7b53ffdb0eb8bb26d14c2ed08b9e8b3aaa4f99f189b0->leave($__internal_3abd19bb5e8ccc36b98f7b53ffdb0eb8bb26d14c2ed08b9e8b3aaa4f99f189b0_prof);

        
        $__internal_f99e9df58057c2eab41e6f2571d3eb627140e0add7d84d4312155abf7d29e0a7->leave($__internal_f99e9df58057c2eab41e6f2571d3eb627140e0add7d84d4312155abf7d29e0a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
