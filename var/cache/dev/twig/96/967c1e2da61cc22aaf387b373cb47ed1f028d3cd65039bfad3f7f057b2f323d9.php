<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0161c191cb3db52c07e4d4b28ec2a649ba0873feebaa84b2b4ab6655afc723ad extends Twig_Template
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
        $__internal_fc02d9e450e4c87f312d0214b9547564617a9ade2924acf3218208795a4de301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc02d9e450e4c87f312d0214b9547564617a9ade2924acf3218208795a4de301->enter($__internal_fc02d9e450e4c87f312d0214b9547564617a9ade2924acf3218208795a4de301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a5729bc9f227e1b702594aba0a47dd286c3c7974820ec3fa8fd450cbf8b1db75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5729bc9f227e1b702594aba0a47dd286c3c7974820ec3fa8fd450cbf8b1db75->enter($__internal_a5729bc9f227e1b702594aba0a47dd286c3c7974820ec3fa8fd450cbf8b1db75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fc02d9e450e4c87f312d0214b9547564617a9ade2924acf3218208795a4de301->leave($__internal_fc02d9e450e4c87f312d0214b9547564617a9ade2924acf3218208795a4de301_prof);

        
        $__internal_a5729bc9f227e1b702594aba0a47dd286c3c7974820ec3fa8fd450cbf8b1db75->leave($__internal_a5729bc9f227e1b702594aba0a47dd286c3c7974820ec3fa8fd450cbf8b1db75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
