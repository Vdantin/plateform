<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_3426591c39ef1a3eb1648b07be1c44322ee58d8ead5cffcc457135ffa0738c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_bbc07d85849254adc7f7819fac7d4111fbd44ff9a7fd0a4a3f4d6ef5c115a7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc07d85849254adc7f7819fac7d4111fbd44ff9a7fd0a4a3f4d6ef5c115a7e8->enter($__internal_bbc07d85849254adc7f7819fac7d4111fbd44ff9a7fd0a4a3f4d6ef5c115a7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_99bada394f4a97d68344476aa0bb24ed0bce2c7430b6d7f787fb1094eb7a4ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bada394f4a97d68344476aa0bb24ed0bce2c7430b6d7f787fb1094eb7a4ea1->enter($__internal_99bada394f4a97d68344476aa0bb24ed0bce2c7430b6d7f787fb1094eb7a4ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbc07d85849254adc7f7819fac7d4111fbd44ff9a7fd0a4a3f4d6ef5c115a7e8->leave($__internal_bbc07d85849254adc7f7819fac7d4111fbd44ff9a7fd0a4a3f4d6ef5c115a7e8_prof);

        
        $__internal_99bada394f4a97d68344476aa0bb24ed0bce2c7430b6d7f787fb1094eb7a4ea1->leave($__internal_99bada394f4a97d68344476aa0bb24ed0bce2c7430b6d7f787fb1094eb7a4ea1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34f9d6070b1e648a5a71983dee3fe1aa79d1e80bf9742d6c568e7452c102e783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f9d6070b1e648a5a71983dee3fe1aa79d1e80bf9742d6c568e7452c102e783->enter($__internal_34f9d6070b1e648a5a71983dee3fe1aa79d1e80bf9742d6c568e7452c102e783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb3c76391d84f09414d1959d51fe487e0681e816849e3c4f1d0813d5e4304aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3c76391d84f09414d1959d51fe487e0681e816849e3c4f1d0813d5e4304aa2->enter($__internal_eb3c76391d84f09414d1959d51fe487e0681e816849e3c4f1d0813d5e4304aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_eb3c76391d84f09414d1959d51fe487e0681e816849e3c4f1d0813d5e4304aa2->leave($__internal_eb3c76391d84f09414d1959d51fe487e0681e816849e3c4f1d0813d5e4304aa2_prof);

        
        $__internal_34f9d6070b1e648a5a71983dee3fe1aa79d1e80bf9742d6c568e7452c102e783->leave($__internal_34f9d6070b1e648a5a71983dee3fe1aa79d1e80bf9742d6c568e7452c102e783_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
