<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4939240c8d71e130601f08bbb4bda343dbe9f40335f5412a663449eadf909200 extends Twig_Template
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
        $__internal_12b3d7b5385616003ebfefcb0608adf8ccaf461013997403af0fc7eea37bdb69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b3d7b5385616003ebfefcb0608adf8ccaf461013997403af0fc7eea37bdb69->enter($__internal_12b3d7b5385616003ebfefcb0608adf8ccaf461013997403af0fc7eea37bdb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_860bc03e338a9d84f80f97b6f77f9ad26871bc08edba70f4bda036ee29b9188b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860bc03e338a9d84f80f97b6f77f9ad26871bc08edba70f4bda036ee29b9188b->enter($__internal_860bc03e338a9d84f80f97b6f77f9ad26871bc08edba70f4bda036ee29b9188b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_12b3d7b5385616003ebfefcb0608adf8ccaf461013997403af0fc7eea37bdb69->leave($__internal_12b3d7b5385616003ebfefcb0608adf8ccaf461013997403af0fc7eea37bdb69_prof);

        
        $__internal_860bc03e338a9d84f80f97b6f77f9ad26871bc08edba70f4bda036ee29b9188b->leave($__internal_860bc03e338a9d84f80f97b6f77f9ad26871bc08edba70f4bda036ee29b9188b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
