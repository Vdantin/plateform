<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_9bd46ac6f6ba5cf53f2878b72e7a6fee8637c427eac5e9a70e3dbec3d22b0ee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fde5590dd25cd48807b9e6da67a3f60dc39b74f23c68cd6d64beb3493d5df4a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde5590dd25cd48807b9e6da67a3f60dc39b74f23c68cd6d64beb3493d5df4a2->enter($__internal_fde5590dd25cd48807b9e6da67a3f60dc39b74f23c68cd6d64beb3493d5df4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_8ed4b406fbde339d8690d43bdc74d2cd21202a6cbd2de488ab4c58799a2e4df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed4b406fbde339d8690d43bdc74d2cd21202a6cbd2de488ab4c58799a2e4df0->enter($__internal_8ed4b406fbde339d8690d43bdc74d2cd21202a6cbd2de488ab4c58799a2e4df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_fde5590dd25cd48807b9e6da67a3f60dc39b74f23c68cd6d64beb3493d5df4a2->leave($__internal_fde5590dd25cd48807b9e6da67a3f60dc39b74f23c68cd6d64beb3493d5df4a2_prof);

        
        $__internal_8ed4b406fbde339d8690d43bdc74d2cd21202a6cbd2de488ab4c58799a2e4df0->leave($__internal_8ed4b406fbde339d8690d43bdc74d2cd21202a6cbd2de488ab4c58799a2e4df0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
