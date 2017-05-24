<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_df43c2877f53bd57c6cf030199639aa7baaa09093f1bc036bbd014bb05f79d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_b1b0e7e3b16dd2ac11898bb39ea3260e3db71c28df3dffa5313dac526d0722c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b0e7e3b16dd2ac11898bb39ea3260e3db71c28df3dffa5313dac526d0722c4->enter($__internal_b1b0e7e3b16dd2ac11898bb39ea3260e3db71c28df3dffa5313dac526d0722c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_2efc6f1c25acc27facb8d8dfb0edde1bc7a26aa045f83e653924e808e2bca27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efc6f1c25acc27facb8d8dfb0edde1bc7a26aa045f83e653924e808e2bca27a->enter($__internal_2efc6f1c25acc27facb8d8dfb0edde1bc7a26aa045f83e653924e808e2bca27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b0e7e3b16dd2ac11898bb39ea3260e3db71c28df3dffa5313dac526d0722c4->leave($__internal_b1b0e7e3b16dd2ac11898bb39ea3260e3db71c28df3dffa5313dac526d0722c4_prof);

        
        $__internal_2efc6f1c25acc27facb8d8dfb0edde1bc7a26aa045f83e653924e808e2bca27a->leave($__internal_2efc6f1c25acc27facb8d8dfb0edde1bc7a26aa045f83e653924e808e2bca27a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9eda65719cbdbd78a6dd1e4886bf9eec847c8fe923e5c6c2de31500e0f0b546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9eda65719cbdbd78a6dd1e4886bf9eec847c8fe923e5c6c2de31500e0f0b546->enter($__internal_c9eda65719cbdbd78a6dd1e4886bf9eec847c8fe923e5c6c2de31500e0f0b546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_973e59ba3a27e1cf38039ef4ba33ee773f8094a90058265600b4a76d6dd45acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973e59ba3a27e1cf38039ef4ba33ee773f8094a90058265600b4a76d6dd45acb->enter($__internal_973e59ba3a27e1cf38039ef4ba33ee773f8094a90058265600b4a76d6dd45acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_973e59ba3a27e1cf38039ef4ba33ee773f8094a90058265600b4a76d6dd45acb->leave($__internal_973e59ba3a27e1cf38039ef4ba33ee773f8094a90058265600b4a76d6dd45acb_prof);

        
        $__internal_c9eda65719cbdbd78a6dd1e4886bf9eec847c8fe923e5c6c2de31500e0f0b546->leave($__internal_c9eda65719cbdbd78a6dd1e4886bf9eec847c8fe923e5c6c2de31500e0f0b546_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
