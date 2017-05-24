<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d9c6c9e6713a67ddf5f03c6f94393240017a44f86fecfe9b31577ebb6a15e61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_8297c6358544cf26a9e9daed1a9ecdfdde3049e7649f21c740b2430a270ef119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8297c6358544cf26a9e9daed1a9ecdfdde3049e7649f21c740b2430a270ef119->enter($__internal_8297c6358544cf26a9e9daed1a9ecdfdde3049e7649f21c740b2430a270ef119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_ac206ded5b6b0cb2acdef3999a7e6d7d7d3a089e915b610f778e78b9055c87a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac206ded5b6b0cb2acdef3999a7e6d7d7d3a089e915b610f778e78b9055c87a8->enter($__internal_ac206ded5b6b0cb2acdef3999a7e6d7d7d3a089e915b610f778e78b9055c87a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8297c6358544cf26a9e9daed1a9ecdfdde3049e7649f21c740b2430a270ef119->leave($__internal_8297c6358544cf26a9e9daed1a9ecdfdde3049e7649f21c740b2430a270ef119_prof);

        
        $__internal_ac206ded5b6b0cb2acdef3999a7e6d7d7d3a089e915b610f778e78b9055c87a8->leave($__internal_ac206ded5b6b0cb2acdef3999a7e6d7d7d3a089e915b610f778e78b9055c87a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8df5be94eeccea50137b4762b72ed4e148160a9eb81ecada0d288eb1848e781d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df5be94eeccea50137b4762b72ed4e148160a9eb81ecada0d288eb1848e781d->enter($__internal_8df5be94eeccea50137b4762b72ed4e148160a9eb81ecada0d288eb1848e781d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_30a56f247c730b2ccdfa60c06875079d20c698f4bec05a03f79fb1477f1425ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a56f247c730b2ccdfa60c06875079d20c698f4bec05a03f79fb1477f1425ce->enter($__internal_30a56f247c730b2ccdfa60c06875079d20c698f4bec05a03f79fb1477f1425ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_30a56f247c730b2ccdfa60c06875079d20c698f4bec05a03f79fb1477f1425ce->leave($__internal_30a56f247c730b2ccdfa60c06875079d20c698f4bec05a03f79fb1477f1425ce_prof);

        
        $__internal_8df5be94eeccea50137b4762b72ed4e148160a9eb81ecada0d288eb1848e781d->leave($__internal_8df5be94eeccea50137b4762b72ed4e148160a9eb81ecada0d288eb1848e781d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
