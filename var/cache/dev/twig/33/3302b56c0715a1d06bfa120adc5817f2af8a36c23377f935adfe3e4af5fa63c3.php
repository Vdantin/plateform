<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_cfc8b37434bdf42d915cea81722885837d46c6f260f513b510f5477509a6434b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_f1b473d19184d54e9232ecb221bbf879ff0c8ba025476dfa8654d210060c76f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b473d19184d54e9232ecb221bbf879ff0c8ba025476dfa8654d210060c76f9->enter($__internal_f1b473d19184d54e9232ecb221bbf879ff0c8ba025476dfa8654d210060c76f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_9f8f444e21e0d7561b9aa987825b6004a06e47020d251c70e155213d126ecf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8f444e21e0d7561b9aa987825b6004a06e47020d251c70e155213d126ecf2a->enter($__internal_9f8f444e21e0d7561b9aa987825b6004a06e47020d251c70e155213d126ecf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1b473d19184d54e9232ecb221bbf879ff0c8ba025476dfa8654d210060c76f9->leave($__internal_f1b473d19184d54e9232ecb221bbf879ff0c8ba025476dfa8654d210060c76f9_prof);

        
        $__internal_9f8f444e21e0d7561b9aa987825b6004a06e47020d251c70e155213d126ecf2a->leave($__internal_9f8f444e21e0d7561b9aa987825b6004a06e47020d251c70e155213d126ecf2a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c491a79b58eb319a3defdf823ca9b292a863892781b2e29bf3aebd13d3555bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c491a79b58eb319a3defdf823ca9b292a863892781b2e29bf3aebd13d3555bb->enter($__internal_8c491a79b58eb319a3defdf823ca9b292a863892781b2e29bf3aebd13d3555bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c82ed36f68dd5928251b9ac34f0c72bbd0a32e80c917f763acb8651dca042d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c82ed36f68dd5928251b9ac34f0c72bbd0a32e80c917f763acb8651dca042d3->enter($__internal_2c82ed36f68dd5928251b9ac34f0c72bbd0a32e80c917f763acb8651dca042d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">Retour</a></p>
    ";
        }
        
        $__internal_2c82ed36f68dd5928251b9ac34f0c72bbd0a32e80c917f763acb8651dca042d3->leave($__internal_2c82ed36f68dd5928251b9ac34f0c72bbd0a32e80c917f763acb8651dca042d3_prof);

        
        $__internal_8c491a79b58eb319a3defdf823ca9b292a863892781b2e29bf3aebd13d3555bb->leave($__internal_8c491a79b58eb319a3defdf823ca9b292a863892781b2e29bf3aebd13d3555bb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block body %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">Retour</a></p>
    {% endif %}
{% endblock  %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
