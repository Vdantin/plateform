<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3e5e1a781825ca5e0f69fd0e9e9978e55bde34e58df75ce20b9837536167278a extends Twig_Template
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
        $__internal_c885d489bee695417a3f7f4628f40c3d9439c7414c70b713a8d2d80cc0c93e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c885d489bee695417a3f7f4628f40c3d9439c7414c70b713a8d2d80cc0c93e0c->enter($__internal_c885d489bee695417a3f7f4628f40c3d9439c7414c70b713a8d2d80cc0c93e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_84d5f0c2fd80da93e553522baa158f82416e855152bb18abc55db6152c9d6a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d5f0c2fd80da93e553522baa158f82416e855152bb18abc55db6152c9d6a79->enter($__internal_84d5f0c2fd80da93e553522baa158f82416e855152bb18abc55db6152c9d6a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c885d489bee695417a3f7f4628f40c3d9439c7414c70b713a8d2d80cc0c93e0c->leave($__internal_c885d489bee695417a3f7f4628f40c3d9439c7414c70b713a8d2d80cc0c93e0c_prof);

        
        $__internal_84d5f0c2fd80da93e553522baa158f82416e855152bb18abc55db6152c9d6a79->leave($__internal_84d5f0c2fd80da93e553522baa158f82416e855152bb18abc55db6152c9d6a79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
