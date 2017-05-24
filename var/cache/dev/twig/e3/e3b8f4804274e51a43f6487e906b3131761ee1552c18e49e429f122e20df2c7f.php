<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_94dc0279a6d8e22bf237b0582aa864b73e2a8daa85e8f9a9df988553033f63d7 extends Twig_Template
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
        $__internal_efa8bb9b4019dd34ae2d38f66eb157ca770c0cc29309570ff7e1f15aaa0ece7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa8bb9b4019dd34ae2d38f66eb157ca770c0cc29309570ff7e1f15aaa0ece7f->enter($__internal_efa8bb9b4019dd34ae2d38f66eb157ca770c0cc29309570ff7e1f15aaa0ece7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_14019ef88885e10c3b20af929314ec605878fe49046dd71383ecc2e173997a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14019ef88885e10c3b20af929314ec605878fe49046dd71383ecc2e173997a7d->enter($__internal_14019ef88885e10c3b20af929314ec605878fe49046dd71383ecc2e173997a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_efa8bb9b4019dd34ae2d38f66eb157ca770c0cc29309570ff7e1f15aaa0ece7f->leave($__internal_efa8bb9b4019dd34ae2d38f66eb157ca770c0cc29309570ff7e1f15aaa0ece7f_prof);

        
        $__internal_14019ef88885e10c3b20af929314ec605878fe49046dd71383ecc2e173997a7d->leave($__internal_14019ef88885e10c3b20af929314ec605878fe49046dd71383ecc2e173997a7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
