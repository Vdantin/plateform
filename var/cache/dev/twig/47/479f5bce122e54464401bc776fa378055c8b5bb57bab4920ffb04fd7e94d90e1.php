<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e1721a60dc789c3a6c99dca65dbac793c1f7da38caaf9309163e7e38eaf50e45 extends Twig_Template
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
        $__internal_963a7055726c729199d4eb19bf7611fffe4c9c3fb205ba7ece467d4cf02ff2fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963a7055726c729199d4eb19bf7611fffe4c9c3fb205ba7ece467d4cf02ff2fe->enter($__internal_963a7055726c729199d4eb19bf7611fffe4c9c3fb205ba7ece467d4cf02ff2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8c833d80bb49bb6456cb7b25b56ae1869166560c6824a8b5320268d08b6cbb4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c833d80bb49bb6456cb7b25b56ae1869166560c6824a8b5320268d08b6cbb4a->enter($__internal_8c833d80bb49bb6456cb7b25b56ae1869166560c6824a8b5320268d08b6cbb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_963a7055726c729199d4eb19bf7611fffe4c9c3fb205ba7ece467d4cf02ff2fe->leave($__internal_963a7055726c729199d4eb19bf7611fffe4c9c3fb205ba7ece467d4cf02ff2fe_prof);

        
        $__internal_8c833d80bb49bb6456cb7b25b56ae1869166560c6824a8b5320268d08b6cbb4a->leave($__internal_8c833d80bb49bb6456cb7b25b56ae1869166560c6824a8b5320268d08b6cbb4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
