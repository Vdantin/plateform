<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_aa1cd6943fa9abe787c2a44e90ab83d820d0cb560028e7bdcc636d57e12bed77 extends Twig_Template
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
        $__internal_a8a590fffdbca48c450dc9e634603e00e87234720d7d9c4f72513b0439fa1d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a590fffdbca48c450dc9e634603e00e87234720d7d9c4f72513b0439fa1d99->enter($__internal_a8a590fffdbca48c450dc9e634603e00e87234720d7d9c4f72513b0439fa1d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_546719c5fd0f6a3a1ef1a43cdd22b70dde91e6586820c73ad58e3981c42ee475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546719c5fd0f6a3a1ef1a43cdd22b70dde91e6586820c73ad58e3981c42ee475->enter($__internal_546719c5fd0f6a3a1ef1a43cdd22b70dde91e6586820c73ad58e3981c42ee475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a8a590fffdbca48c450dc9e634603e00e87234720d7d9c4f72513b0439fa1d99->leave($__internal_a8a590fffdbca48c450dc9e634603e00e87234720d7d9c4f72513b0439fa1d99_prof);

        
        $__internal_546719c5fd0f6a3a1ef1a43cdd22b70dde91e6586820c73ad58e3981c42ee475->leave($__internal_546719c5fd0f6a3a1ef1a43cdd22b70dde91e6586820c73ad58e3981c42ee475_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_16fb3282712e4a174c581e2dc841402102c23f7c6328ecffeb80b802edfc4765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16fb3282712e4a174c581e2dc841402102c23f7c6328ecffeb80b802edfc4765->enter($__internal_16fb3282712e4a174c581e2dc841402102c23f7c6328ecffeb80b802edfc4765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d84b544531d323120f0cb1fed4fec65f9b37e630ad719257634f29c39630feae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84b544531d323120f0cb1fed4fec65f9b37e630ad719257634f29c39630feae->enter($__internal_d84b544531d323120f0cb1fed4fec65f9b37e630ad719257634f29c39630feae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d84b544531d323120f0cb1fed4fec65f9b37e630ad719257634f29c39630feae->leave($__internal_d84b544531d323120f0cb1fed4fec65f9b37e630ad719257634f29c39630feae_prof);

        
        $__internal_16fb3282712e4a174c581e2dc841402102c23f7c6328ecffeb80b802edfc4765->leave($__internal_16fb3282712e4a174c581e2dc841402102c23f7c6328ecffeb80b802edfc4765_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8049fa14087bbfbf2bcf173f338ef3029bdc83fc840f09d1fa2c23c85ebd56b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8049fa14087bbfbf2bcf173f338ef3029bdc83fc840f09d1fa2c23c85ebd56b1->enter($__internal_8049fa14087bbfbf2bcf173f338ef3029bdc83fc840f09d1fa2c23c85ebd56b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ffe1a254e946951986f599d32af689eadcc77db844b26c52acc1ac56d8b31199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe1a254e946951986f599d32af689eadcc77db844b26c52acc1ac56d8b31199->enter($__internal_ffe1a254e946951986f599d32af689eadcc77db844b26c52acc1ac56d8b31199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ffe1a254e946951986f599d32af689eadcc77db844b26c52acc1ac56d8b31199->leave($__internal_ffe1a254e946951986f599d32af689eadcc77db844b26c52acc1ac56d8b31199_prof);

        
        $__internal_8049fa14087bbfbf2bcf173f338ef3029bdc83fc840f09d1fa2c23c85ebd56b1->leave($__internal_8049fa14087bbfbf2bcf173f338ef3029bdc83fc840f09d1fa2c23c85ebd56b1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7c2b09ebc187b67c049cacf6029783c1c5e6db0dddd3138e5d61a2062227d9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2b09ebc187b67c049cacf6029783c1c5e6db0dddd3138e5d61a2062227d9ad->enter($__internal_7c2b09ebc187b67c049cacf6029783c1c5e6db0dddd3138e5d61a2062227d9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d600fecaa58dc8727363948dc918858ac4f78ffbe55e073b70dad04b96b2b203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d600fecaa58dc8727363948dc918858ac4f78ffbe55e073b70dad04b96b2b203->enter($__internal_d600fecaa58dc8727363948dc918858ac4f78ffbe55e073b70dad04b96b2b203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d600fecaa58dc8727363948dc918858ac4f78ffbe55e073b70dad04b96b2b203->leave($__internal_d600fecaa58dc8727363948dc918858ac4f78ffbe55e073b70dad04b96b2b203_prof);

        
        $__internal_7c2b09ebc187b67c049cacf6029783c1c5e6db0dddd3138e5d61a2062227d9ad->leave($__internal_7c2b09ebc187b67c049cacf6029783c1c5e6db0dddd3138e5d61a2062227d9ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
