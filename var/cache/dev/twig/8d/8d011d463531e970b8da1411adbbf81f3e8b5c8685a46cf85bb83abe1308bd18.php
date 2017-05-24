<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_e07486e0c50b06f2dbb534994c5499b5f34a1ec0a6708809b603562fb99a8dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_fd387cfd18702af8d1efc6f879515d7f03ec6988a004dd356fe8d66201f8a76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd387cfd18702af8d1efc6f879515d7f03ec6988a004dd356fe8d66201f8a76d->enter($__internal_fd387cfd18702af8d1efc6f879515d7f03ec6988a004dd356fe8d66201f8a76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_baf09ff0ae19945878499136adc7148b5ab9bb03f9c7e6ba833cb4e780c5fdeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf09ff0ae19945878499136adc7148b5ab9bb03f9c7e6ba833cb4e780c5fdeb->enter($__internal_baf09ff0ae19945878499136adc7148b5ab9bb03f9c7e6ba833cb4e780c5fdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd387cfd18702af8d1efc6f879515d7f03ec6988a004dd356fe8d66201f8a76d->leave($__internal_fd387cfd18702af8d1efc6f879515d7f03ec6988a004dd356fe8d66201f8a76d_prof);

        
        $__internal_baf09ff0ae19945878499136adc7148b5ab9bb03f9c7e6ba833cb4e780c5fdeb->leave($__internal_baf09ff0ae19945878499136adc7148b5ab9bb03f9c7e6ba833cb4e780c5fdeb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7e94c14eed757557fb89c2d8687ebb5d1992488517845da9a21dc8447beefe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e94c14eed757557fb89c2d8687ebb5d1992488517845da9a21dc8447beefe6->enter($__internal_c7e94c14eed757557fb89c2d8687ebb5d1992488517845da9a21dc8447beefe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4393dfd4e03513ee60f403d2429e5f166dda8a16f2be69cf405e5f4c1da0eec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4393dfd4e03513ee60f403d2429e5f166dda8a16f2be69cf405e5f4c1da0eec6->enter($__internal_4393dfd4e03513ee60f403d2429e5f166dda8a16f2be69cf405e5f4c1da0eec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4393dfd4e03513ee60f403d2429e5f166dda8a16f2be69cf405e5f4c1da0eec6->leave($__internal_4393dfd4e03513ee60f403d2429e5f166dda8a16f2be69cf405e5f4c1da0eec6_prof);

        
        $__internal_c7e94c14eed757557fb89c2d8687ebb5d1992488517845da9a21dc8447beefe6->leave($__internal_c7e94c14eed757557fb89c2d8687ebb5d1992488517845da9a21dc8447beefe6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
