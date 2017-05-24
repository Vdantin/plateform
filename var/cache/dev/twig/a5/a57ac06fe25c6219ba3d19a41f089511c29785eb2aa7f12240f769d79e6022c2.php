<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a57e3beeace61d5ef344e7724bd92c52149f3194f5fd6da2181ecb0f563dd635 extends Twig_Template
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
        $__internal_301948077b673c97df07bbe80ce36c7fc2e3a24be59b6b06d60b8259d5673239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301948077b673c97df07bbe80ce36c7fc2e3a24be59b6b06d60b8259d5673239->enter($__internal_301948077b673c97df07bbe80ce36c7fc2e3a24be59b6b06d60b8259d5673239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1f400e4ead863ebd03690c69a00df8f54b8ec5707cfc69652902555eac105076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f400e4ead863ebd03690c69a00df8f54b8ec5707cfc69652902555eac105076->enter($__internal_1f400e4ead863ebd03690c69a00df8f54b8ec5707cfc69652902555eac105076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_301948077b673c97df07bbe80ce36c7fc2e3a24be59b6b06d60b8259d5673239->leave($__internal_301948077b673c97df07bbe80ce36c7fc2e3a24be59b6b06d60b8259d5673239_prof);

        
        $__internal_1f400e4ead863ebd03690c69a00df8f54b8ec5707cfc69652902555eac105076->leave($__internal_1f400e4ead863ebd03690c69a00df8f54b8ec5707cfc69652902555eac105076_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
