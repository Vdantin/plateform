<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a059dd6c7565efcfcd86138c2d357c4db3a23d120e1756affb9439ecd8680336 extends Twig_Template
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
        $__internal_01a6b711f45783c1c8061886f6b811b4235de6c8e1c01db09f009ac33ebb8bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a6b711f45783c1c8061886f6b811b4235de6c8e1c01db09f009ac33ebb8bec->enter($__internal_01a6b711f45783c1c8061886f6b811b4235de6c8e1c01db09f009ac33ebb8bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5e9192e2350c62784789ccacfad651457975c60a7fdbe08addd198c577d77cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9192e2350c62784789ccacfad651457975c60a7fdbe08addd198c577d77cb2->enter($__internal_5e9192e2350c62784789ccacfad651457975c60a7fdbe08addd198c577d77cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_01a6b711f45783c1c8061886f6b811b4235de6c8e1c01db09f009ac33ebb8bec->leave($__internal_01a6b711f45783c1c8061886f6b811b4235de6c8e1c01db09f009ac33ebb8bec_prof);

        
        $__internal_5e9192e2350c62784789ccacfad651457975c60a7fdbe08addd198c577d77cb2->leave($__internal_5e9192e2350c62784789ccacfad651457975c60a7fdbe08addd198c577d77cb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
