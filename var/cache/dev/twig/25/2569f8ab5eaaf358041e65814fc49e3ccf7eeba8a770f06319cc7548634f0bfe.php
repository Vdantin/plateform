<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_bb074e817472731b2f87ad5d39fccb04ca9f5fe7e572f5907a58b2b4cd030283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_891d09a60fff7848eb054dd5d35aeefa0b02ccc303dfda32e7283e7ca622eef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891d09a60fff7848eb054dd5d35aeefa0b02ccc303dfda32e7283e7ca622eef7->enter($__internal_891d09a60fff7848eb054dd5d35aeefa0b02ccc303dfda32e7283e7ca622eef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_284473d598ef8fc5b4d9596be33f66bff38bd6f20fd44100937c5c2130cda094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284473d598ef8fc5b4d9596be33f66bff38bd6f20fd44100937c5c2130cda094->enter($__internal_284473d598ef8fc5b4d9596be33f66bff38bd6f20fd44100937c5c2130cda094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_891d09a60fff7848eb054dd5d35aeefa0b02ccc303dfda32e7283e7ca622eef7->leave($__internal_891d09a60fff7848eb054dd5d35aeefa0b02ccc303dfda32e7283e7ca622eef7_prof);

        
        $__internal_284473d598ef8fc5b4d9596be33f66bff38bd6f20fd44100937c5c2130cda094->leave($__internal_284473d598ef8fc5b4d9596be33f66bff38bd6f20fd44100937c5c2130cda094_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f3c6956a5010d5006a72060b309ef076914419f475b0a0f3736d52e45fc0768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3c6956a5010d5006a72060b309ef076914419f475b0a0f3736d52e45fc0768->enter($__internal_2f3c6956a5010d5006a72060b309ef076914419f475b0a0f3736d52e45fc0768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e8053253d0efcd77d40cf00d273a4b09f8c4807f5df1ff7f64c82f0d34df5ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8053253d0efcd77d40cf00d273a4b09f8c4807f5df1ff7f64c82f0d34df5ccf->enter($__internal_e8053253d0efcd77d40cf00d273a4b09f8c4807f5df1ff7f64c82f0d34df5ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e8053253d0efcd77d40cf00d273a4b09f8c4807f5df1ff7f64c82f0d34df5ccf->leave($__internal_e8053253d0efcd77d40cf00d273a4b09f8c4807f5df1ff7f64c82f0d34df5ccf_prof);

        
        $__internal_2f3c6956a5010d5006a72060b309ef076914419f475b0a0f3736d52e45fc0768->leave($__internal_2f3c6956a5010d5006a72060b309ef076914419f475b0a0f3736d52e45fc0768_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
