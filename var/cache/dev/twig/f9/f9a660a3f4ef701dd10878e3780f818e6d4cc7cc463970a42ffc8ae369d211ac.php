<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ad958e6b25f95e8e22d70cb7752af02f260df61969197f16ddc510b987aca6e4 extends Twig_Template
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
        $__internal_b7939e9bebe2eab3bd46a8db1940970cc6e2f7764c8aa364f3bbe92f0d5f4ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7939e9bebe2eab3bd46a8db1940970cc6e2f7764c8aa364f3bbe92f0d5f4ab2->enter($__internal_b7939e9bebe2eab3bd46a8db1940970cc6e2f7764c8aa364f3bbe92f0d5f4ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5406798e383557ad40b472381047325f604a3e95e14b369a15a0e0c64eed1c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5406798e383557ad40b472381047325f604a3e95e14b369a15a0e0c64eed1c24->enter($__internal_5406798e383557ad40b472381047325f604a3e95e14b369a15a0e0c64eed1c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b7939e9bebe2eab3bd46a8db1940970cc6e2f7764c8aa364f3bbe92f0d5f4ab2->leave($__internal_b7939e9bebe2eab3bd46a8db1940970cc6e2f7764c8aa364f3bbe92f0d5f4ab2_prof);

        
        $__internal_5406798e383557ad40b472381047325f604a3e95e14b369a15a0e0c64eed1c24->leave($__internal_5406798e383557ad40b472381047325f604a3e95e14b369a15a0e0c64eed1c24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
