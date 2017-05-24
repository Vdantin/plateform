<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_78ea1ca209167197aa98088a002fcd4f72b021c4fa777dacd0a0f67222a5b67b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_534452118891da084e5fb13eff95b6e0f0ba744c3f37339b595995a40d188afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534452118891da084e5fb13eff95b6e0f0ba744c3f37339b595995a40d188afd->enter($__internal_534452118891da084e5fb13eff95b6e0f0ba744c3f37339b595995a40d188afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_f6e2e3b1f7fbb7ff5f388cec268c6371876dc6ce5f995c29b499e66ab913ea7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e2e3b1f7fbb7ff5f388cec268c6371876dc6ce5f995c29b499e66ab913ea7b->enter($__internal_f6e2e3b1f7fbb7ff5f388cec268c6371876dc6ce5f995c29b499e66ab913ea7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_534452118891da084e5fb13eff95b6e0f0ba744c3f37339b595995a40d188afd->leave($__internal_534452118891da084e5fb13eff95b6e0f0ba744c3f37339b595995a40d188afd_prof);

        
        $__internal_f6e2e3b1f7fbb7ff5f388cec268c6371876dc6ce5f995c29b499e66ab913ea7b->leave($__internal_f6e2e3b1f7fbb7ff5f388cec268c6371876dc6ce5f995c29b499e66ab913ea7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_182090a559bf1c48d827023aead5e02960d0ba8306261f872109e952204ae74b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182090a559bf1c48d827023aead5e02960d0ba8306261f872109e952204ae74b->enter($__internal_182090a559bf1c48d827023aead5e02960d0ba8306261f872109e952204ae74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a47726e3001884f202ae61d33e34bace06e31c969bb538117703314f14367abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47726e3001884f202ae61d33e34bace06e31c969bb538117703314f14367abd->enter($__internal_a47726e3001884f202ae61d33e34bace06e31c969bb538117703314f14367abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a47726e3001884f202ae61d33e34bace06e31c969bb538117703314f14367abd->leave($__internal_a47726e3001884f202ae61d33e34bace06e31c969bb538117703314f14367abd_prof);

        
        $__internal_182090a559bf1c48d827023aead5e02960d0ba8306261f872109e952204ae74b->leave($__internal_182090a559bf1c48d827023aead5e02960d0ba8306261f872109e952204ae74b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
