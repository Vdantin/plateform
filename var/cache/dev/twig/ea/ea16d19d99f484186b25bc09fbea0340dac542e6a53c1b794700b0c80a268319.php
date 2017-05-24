<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_1836612a0bba521a19216f834883a0ef7123a684e7589b853b2fa628dca27053 extends Twig_Template
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
        $__internal_d90545ab628f854e3868c7dd53be244d9a8a79b4f38c34752034283972ed7ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90545ab628f854e3868c7dd53be244d9a8a79b4f38c34752034283972ed7ea6->enter($__internal_d90545ab628f854e3868c7dd53be244d9a8a79b4f38c34752034283972ed7ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_a3a568f7a5cddc6c179f23b7c41a98d7d32bac90ce01995c9afe14af748deb2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a568f7a5cddc6c179f23b7c41a98d7d32bac90ce01995c9afe14af748deb2d->enter($__internal_a3a568f7a5cddc6c179f23b7c41a98d7d32bac90ce01995c9afe14af748deb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_d90545ab628f854e3868c7dd53be244d9a8a79b4f38c34752034283972ed7ea6->leave($__internal_d90545ab628f854e3868c7dd53be244d9a8a79b4f38c34752034283972ed7ea6_prof);

        
        $__internal_a3a568f7a5cddc6c179f23b7c41a98d7d32bac90ce01995c9afe14af748deb2d->leave($__internal_a3a568f7a5cddc6c179f23b7c41a98d7d32bac90ce01995c9afe14af748deb2d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
