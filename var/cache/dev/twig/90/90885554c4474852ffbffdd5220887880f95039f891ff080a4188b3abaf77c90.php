<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_57931331b04f06ed759dbabb0a918f76ce78c31cb74bd93e36ec32c7b7a46c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_a9214d80fe780cefffc5804eaadf2d62864ad4a61bde5bfb7e256202d152416f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9214d80fe780cefffc5804eaadf2d62864ad4a61bde5bfb7e256202d152416f->enter($__internal_a9214d80fe780cefffc5804eaadf2d62864ad4a61bde5bfb7e256202d152416f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_14244721e11e6c3728d165b3d8fccd66bf251a9835fdb41b005a766abbf0a18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14244721e11e6c3728d165b3d8fccd66bf251a9835fdb41b005a766abbf0a18c->enter($__internal_14244721e11e6c3728d165b3d8fccd66bf251a9835fdb41b005a766abbf0a18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9214d80fe780cefffc5804eaadf2d62864ad4a61bde5bfb7e256202d152416f->leave($__internal_a9214d80fe780cefffc5804eaadf2d62864ad4a61bde5bfb7e256202d152416f_prof);

        
        $__internal_14244721e11e6c3728d165b3d8fccd66bf251a9835fdb41b005a766abbf0a18c->leave($__internal_14244721e11e6c3728d165b3d8fccd66bf251a9835fdb41b005a766abbf0a18c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f821d260d939b7ceb7c2e8f78ce7818ca83a958a3e32df3ea4a77f32af2276a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f821d260d939b7ceb7c2e8f78ce7818ca83a958a3e32df3ea4a77f32af2276a->enter($__internal_3f821d260d939b7ceb7c2e8f78ce7818ca83a958a3e32df3ea4a77f32af2276a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_742440760d48afd1abe06ec7281745e8f203e7e5f06c8abc8d2890a6339e3a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742440760d48afd1abe06ec7281745e8f203e7e5f06c8abc8d2890a6339e3a28->enter($__internal_742440760d48afd1abe06ec7281745e8f203e7e5f06c8abc8d2890a6339e3a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_742440760d48afd1abe06ec7281745e8f203e7e5f06c8abc8d2890a6339e3a28->leave($__internal_742440760d48afd1abe06ec7281745e8f203e7e5f06c8abc8d2890a6339e3a28_prof);

        
        $__internal_3f821d260d939b7ceb7c2e8f78ce7818ca83a958a3e32df3ea4a77f32af2276a->leave($__internal_3f821d260d939b7ceb7c2e8f78ce7818ca83a958a3e32df3ea4a77f32af2276a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
