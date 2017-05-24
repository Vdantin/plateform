<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7e08034856465ba3a54647775b17648b52bc6f34fc698a0ece96e09d0c9fbadd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_bc146f4e089d47fef0ce6d09f2e3be3e776ac09be0f1e97136e802cbe33fa01a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc146f4e089d47fef0ce6d09f2e3be3e776ac09be0f1e97136e802cbe33fa01a->enter($__internal_bc146f4e089d47fef0ce6d09f2e3be3e776ac09be0f1e97136e802cbe33fa01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_046c3a1f1e35493218c30d41b02ccb51b3f021f8291e0a9cd361b5083b6b860c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046c3a1f1e35493218c30d41b02ccb51b3f021f8291e0a9cd361b5083b6b860c->enter($__internal_046c3a1f1e35493218c30d41b02ccb51b3f021f8291e0a9cd361b5083b6b860c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc146f4e089d47fef0ce6d09f2e3be3e776ac09be0f1e97136e802cbe33fa01a->leave($__internal_bc146f4e089d47fef0ce6d09f2e3be3e776ac09be0f1e97136e802cbe33fa01a_prof);

        
        $__internal_046c3a1f1e35493218c30d41b02ccb51b3f021f8291e0a9cd361b5083b6b860c->leave($__internal_046c3a1f1e35493218c30d41b02ccb51b3f021f8291e0a9cd361b5083b6b860c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f73a241734563d491ec0dc8d6976610773a4588ef74f20e38b167a69594f2f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f73a241734563d491ec0dc8d6976610773a4588ef74f20e38b167a69594f2f7->enter($__internal_6f73a241734563d491ec0dc8d6976610773a4588ef74f20e38b167a69594f2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c2c7e048dce0a13c5944a270b1a7cbb07379c656337156e7b03e4062787c62b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c7e048dce0a13c5944a270b1a7cbb07379c656337156e7b03e4062787c62b9->enter($__internal_c2c7e048dce0a13c5944a270b1a7cbb07379c656337156e7b03e4062787c62b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c2c7e048dce0a13c5944a270b1a7cbb07379c656337156e7b03e4062787c62b9->leave($__internal_c2c7e048dce0a13c5944a270b1a7cbb07379c656337156e7b03e4062787c62b9_prof);

        
        $__internal_6f73a241734563d491ec0dc8d6976610773a4588ef74f20e38b167a69594f2f7->leave($__internal_6f73a241734563d491ec0dc8d6976610773a4588ef74f20e38b167a69594f2f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
