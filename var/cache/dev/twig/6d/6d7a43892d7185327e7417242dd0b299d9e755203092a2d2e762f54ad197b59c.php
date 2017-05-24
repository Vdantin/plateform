<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_9a2569cae8efad0bfdc2174c22bbe4594db406fe0ec3b69388aac503fe11128b extends Twig_Template
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
        $__internal_a23fc21c5e7137eb90ec318c6df283a2ce879c1a9431cc2803fb17d24db489de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23fc21c5e7137eb90ec318c6df283a2ce879c1a9431cc2803fb17d24db489de->enter($__internal_a23fc21c5e7137eb90ec318c6df283a2ce879c1a9431cc2803fb17d24db489de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $__internal_720abe92100544c275b368daaa567c1ea1cdd0dab907333c696ee363ca659fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720abe92100544c275b368daaa567c1ea1cdd0dab907333c696ee363ca659fd0->enter($__internal_720abe92100544c275b368daaa567c1ea1cdd0dab907333c696ee363ca659fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a23fc21c5e7137eb90ec318c6df283a2ce879c1a9431cc2803fb17d24db489de->leave($__internal_a23fc21c5e7137eb90ec318c6df283a2ce879c1a9431cc2803fb17d24db489de_prof);

        
        $__internal_720abe92100544c275b368daaa567c1ea1cdd0dab907333c696ee363ca659fd0->leave($__internal_720abe92100544c275b368daaa567c1ea1cdd0dab907333c696ee363ca659fd0_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "UserBundle:Default:index.html.twig", "/home/vincent/plateform/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}
