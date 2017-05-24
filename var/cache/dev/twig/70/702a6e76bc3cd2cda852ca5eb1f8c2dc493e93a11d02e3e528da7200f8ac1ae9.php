<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_470af82c395534327fa4192cf28e5ca126e59715193e849734abd49f87d02b2d extends Twig_Template
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
        $__internal_07c09754ccd6a16c9d46b4430d251156095a488a5f2f28994e78a2561fc752be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c09754ccd6a16c9d46b4430d251156095a488a5f2f28994e78a2561fc752be->enter($__internal_07c09754ccd6a16c9d46b4430d251156095a488a5f2f28994e78a2561fc752be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ce3fd67add4c914ebe0349a1c613a66bec17bdc252ebc3d30cc25153a7ede964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3fd67add4c914ebe0349a1c613a66bec17bdc252ebc3d30cc25153a7ede964->enter($__internal_ce3fd67add4c914ebe0349a1c613a66bec17bdc252ebc3d30cc25153a7ede964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_07c09754ccd6a16c9d46b4430d251156095a488a5f2f28994e78a2561fc752be->leave($__internal_07c09754ccd6a16c9d46b4430d251156095a488a5f2f28994e78a2561fc752be_prof);

        
        $__internal_ce3fd67add4c914ebe0349a1c613a66bec17bdc252ebc3d30cc25153a7ede964->leave($__internal_ce3fd67add4c914ebe0349a1c613a66bec17bdc252ebc3d30cc25153a7ede964_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
