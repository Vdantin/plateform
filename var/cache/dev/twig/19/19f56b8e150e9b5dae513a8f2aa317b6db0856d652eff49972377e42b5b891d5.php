<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a2c9496a9cdfbc8c5a8eb78f7043af9d8fbdcc59a6f6ae7edf5d62a165968ba2 extends Twig_Template
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
        $__internal_94e7cefa8c605a8d4d9d2ce5f3e7dc66b6fdd78d814d65ff0dc07b7bc4762365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e7cefa8c605a8d4d9d2ce5f3e7dc66b6fdd78d814d65ff0dc07b7bc4762365->enter($__internal_94e7cefa8c605a8d4d9d2ce5f3e7dc66b6fdd78d814d65ff0dc07b7bc4762365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_11e357d10badf246a5abda706dce29070dc3bc0cd421a36f9741a08c78108073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e357d10badf246a5abda706dce29070dc3bc0cd421a36f9741a08c78108073->enter($__internal_11e357d10badf246a5abda706dce29070dc3bc0cd421a36f9741a08c78108073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_94e7cefa8c605a8d4d9d2ce5f3e7dc66b6fdd78d814d65ff0dc07b7bc4762365->leave($__internal_94e7cefa8c605a8d4d9d2ce5f3e7dc66b6fdd78d814d65ff0dc07b7bc4762365_prof);

        
        $__internal_11e357d10badf246a5abda706dce29070dc3bc0cd421a36f9741a08c78108073->leave($__internal_11e357d10badf246a5abda706dce29070dc3bc0cd421a36f9741a08c78108073_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
