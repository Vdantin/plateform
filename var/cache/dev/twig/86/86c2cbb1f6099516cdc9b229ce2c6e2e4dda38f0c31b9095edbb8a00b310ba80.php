<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_369231aa5baff8f1ad00ad1e424dae5b909a8b5d65124175ca3bfd9b94ad30da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_5784a5310c7256614c7ebd8f9a938b78f848a86e0f9cc385430fd9fb2c104e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5784a5310c7256614c7ebd8f9a938b78f848a86e0f9cc385430fd9fb2c104e17->enter($__internal_5784a5310c7256614c7ebd8f9a938b78f848a86e0f9cc385430fd9fb2c104e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_bcc4a7dd9d7e0d1b6d44fc7100ee4c73485852626b28c0e2be59551eff1c6841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc4a7dd9d7e0d1b6d44fc7100ee4c73485852626b28c0e2be59551eff1c6841->enter($__internal_bcc4a7dd9d7e0d1b6d44fc7100ee4c73485852626b28c0e2be59551eff1c6841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5784a5310c7256614c7ebd8f9a938b78f848a86e0f9cc385430fd9fb2c104e17->leave($__internal_5784a5310c7256614c7ebd8f9a938b78f848a86e0f9cc385430fd9fb2c104e17_prof);

        
        $__internal_bcc4a7dd9d7e0d1b6d44fc7100ee4c73485852626b28c0e2be59551eff1c6841->leave($__internal_bcc4a7dd9d7e0d1b6d44fc7100ee4c73485852626b28c0e2be59551eff1c6841_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55a1da0c98d5a195542f6136b1179ab1dcc9fea0720cb842ca148930cb568693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a1da0c98d5a195542f6136b1179ab1dcc9fea0720cb842ca148930cb568693->enter($__internal_55a1da0c98d5a195542f6136b1179ab1dcc9fea0720cb842ca148930cb568693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ccd9496d44c04d97fcf290fd7cac4b15315f2ecdd6580f5eccf1c7fb28469f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd9496d44c04d97fcf290fd7cac4b15315f2ecdd6580f5eccf1c7fb28469f07->enter($__internal_ccd9496d44c04d97fcf290fd7cac4b15315f2ecdd6580f5eccf1c7fb28469f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_ccd9496d44c04d97fcf290fd7cac4b15315f2ecdd6580f5eccf1c7fb28469f07->leave($__internal_ccd9496d44c04d97fcf290fd7cac4b15315f2ecdd6580f5eccf1c7fb28469f07_prof);

        
        $__internal_55a1da0c98d5a195542f6136b1179ab1dcc9fea0720cb842ca148930cb568693->leave($__internal_55a1da0c98d5a195542f6136b1179ab1dcc9fea0720cb842ca148930cb568693_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
