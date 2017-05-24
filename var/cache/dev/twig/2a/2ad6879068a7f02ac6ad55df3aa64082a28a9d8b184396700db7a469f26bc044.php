<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_bacf48ce4835ee77772131f4c48b914b2c049d738a366e49a4befef131d2d64e extends Twig_Template
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
        $__internal_80e8224aa955c4ac8dc62d9ae00ccbdaa0c08e734a529085daa0e286f425a079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e8224aa955c4ac8dc62d9ae00ccbdaa0c08e734a529085daa0e286f425a079->enter($__internal_80e8224aa955c4ac8dc62d9ae00ccbdaa0c08e734a529085daa0e286f425a079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ccb7eee7e033a99d04e33be8eca49be50f4f5c878ab045965ca2226e04dad6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb7eee7e033a99d04e33be8eca49be50f4f5c878ab045965ca2226e04dad6b4->enter($__internal_ccb7eee7e033a99d04e33be8eca49be50f4f5c878ab045965ca2226e04dad6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_80e8224aa955c4ac8dc62d9ae00ccbdaa0c08e734a529085daa0e286f425a079->leave($__internal_80e8224aa955c4ac8dc62d9ae00ccbdaa0c08e734a529085daa0e286f425a079_prof);

        
        $__internal_ccb7eee7e033a99d04e33be8eca49be50f4f5c878ab045965ca2226e04dad6b4->leave($__internal_ccb7eee7e033a99d04e33be8eca49be50f4f5c878ab045965ca2226e04dad6b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
