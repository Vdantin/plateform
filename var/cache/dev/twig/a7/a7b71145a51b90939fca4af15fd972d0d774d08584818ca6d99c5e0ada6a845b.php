<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_65a3fe95d02e673f36238fefeb73b963cb369dff14abcdc2a171fed15fcca401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_228d0aac76624265bc9e3b7e3572ef7c475efe4307815bd7581779a96fc7d638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_228d0aac76624265bc9e3b7e3572ef7c475efe4307815bd7581779a96fc7d638->enter($__internal_228d0aac76624265bc9e3b7e3572ef7c475efe4307815bd7581779a96fc7d638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_ad9abd1044942fd89d34afea6f3ff7267fa089d087e12408e668f9c73d546bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9abd1044942fd89d34afea6f3ff7267fa089d087e12408e668f9c73d546bd3->enter($__internal_ad9abd1044942fd89d34afea6f3ff7267fa089d087e12408e668f9c73d546bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_228d0aac76624265bc9e3b7e3572ef7c475efe4307815bd7581779a96fc7d638->leave($__internal_228d0aac76624265bc9e3b7e3572ef7c475efe4307815bd7581779a96fc7d638_prof);

        
        $__internal_ad9abd1044942fd89d34afea6f3ff7267fa089d087e12408e668f9c73d546bd3->leave($__internal_ad9abd1044942fd89d34afea6f3ff7267fa089d087e12408e668f9c73d546bd3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2dce92464733f05390111c5e2ccb3c534e8c4a12ee61557f6367c529c04f28f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2dce92464733f05390111c5e2ccb3c534e8c4a12ee61557f6367c529c04f28f->enter($__internal_c2dce92464733f05390111c5e2ccb3c534e8c4a12ee61557f6367c529c04f28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_adfa3f732855d76011dc2980c76b9ec634de3055bd74a74944c3f3d6ea8710c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfa3f732855d76011dc2980c76b9ec634de3055bd74a74944c3f3d6ea8710c9->enter($__internal_adfa3f732855d76011dc2980c76b9ec634de3055bd74a74944c3f3d6ea8710c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_adfa3f732855d76011dc2980c76b9ec634de3055bd74a74944c3f3d6ea8710c9->leave($__internal_adfa3f732855d76011dc2980c76b9ec634de3055bd74a74944c3f3d6ea8710c9_prof);

        
        $__internal_c2dce92464733f05390111c5e2ccb3c534e8c4a12ee61557f6367c529c04f28f->leave($__internal_c2dce92464733f05390111c5e2ccb3c534e8c4a12ee61557f6367c529c04f28f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
