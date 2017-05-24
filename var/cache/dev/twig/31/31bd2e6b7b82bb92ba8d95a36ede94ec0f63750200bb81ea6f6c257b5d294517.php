<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_30da7ad7b328d25e42683f2fbed74867e739c23ae9b246dee7985d4fe4953f05 extends Twig_Template
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
        $__internal_86372fc3b761b695c02d0bc680a47fa4f4fed8b00ac1be51eae84415c1ba2ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86372fc3b761b695c02d0bc680a47fa4f4fed8b00ac1be51eae84415c1ba2ac3->enter($__internal_86372fc3b761b695c02d0bc680a47fa4f4fed8b00ac1be51eae84415c1ba2ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c8f80620e31408d95b3ebfc0c8b947c49bf140bc3cad4e67e060a621872b2bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f80620e31408d95b3ebfc0c8b947c49bf140bc3cad4e67e060a621872b2bf4->enter($__internal_c8f80620e31408d95b3ebfc0c8b947c49bf140bc3cad4e67e060a621872b2bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_86372fc3b761b695c02d0bc680a47fa4f4fed8b00ac1be51eae84415c1ba2ac3->leave($__internal_86372fc3b761b695c02d0bc680a47fa4f4fed8b00ac1be51eae84415c1ba2ac3_prof);

        
        $__internal_c8f80620e31408d95b3ebfc0c8b947c49bf140bc3cad4e67e060a621872b2bf4->leave($__internal_c8f80620e31408d95b3ebfc0c8b947c49bf140bc3cad4e67e060a621872b2bf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
