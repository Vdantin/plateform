<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_acc8081fcaf1146b277ef1f3a48793869c4fc2a33e0ab88df9eae448cb9d44c4 extends Twig_Template
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
        $__internal_433a0e0c54662cbcc8c02d1ec2802e112abee3a88fd060fed6e4bb3dc48dced4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433a0e0c54662cbcc8c02d1ec2802e112abee3a88fd060fed6e4bb3dc48dced4->enter($__internal_433a0e0c54662cbcc8c02d1ec2802e112abee3a88fd060fed6e4bb3dc48dced4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0727014804deb457a4b0c89394a90b9195f493b00c1695ede32e7ba510b2ccac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0727014804deb457a4b0c89394a90b9195f493b00c1695ede32e7ba510b2ccac->enter($__internal_0727014804deb457a4b0c89394a90b9195f493b00c1695ede32e7ba510b2ccac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_433a0e0c54662cbcc8c02d1ec2802e112abee3a88fd060fed6e4bb3dc48dced4->leave($__internal_433a0e0c54662cbcc8c02d1ec2802e112abee3a88fd060fed6e4bb3dc48dced4_prof);

        
        $__internal_0727014804deb457a4b0c89394a90b9195f493b00c1695ede32e7ba510b2ccac->leave($__internal_0727014804deb457a4b0c89394a90b9195f493b00c1695ede32e7ba510b2ccac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
