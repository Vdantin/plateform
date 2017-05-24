<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d73eb0827a759900e7561ec6bb50fee62aaeadf76beb4620a683399b86322d24 extends Twig_Template
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
        $__internal_0f4c590af12159c512312c497333bd7c839694d5cb6b6b9f1f04588b9c8d3d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4c590af12159c512312c497333bd7c839694d5cb6b6b9f1f04588b9c8d3d75->enter($__internal_0f4c590af12159c512312c497333bd7c839694d5cb6b6b9f1f04588b9c8d3d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2ebc1f79ec24a23fb11e94e116226fa8c4cbda32c0f24716067f8e8bd67ae65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebc1f79ec24a23fb11e94e116226fa8c4cbda32c0f24716067f8e8bd67ae65e->enter($__internal_2ebc1f79ec24a23fb11e94e116226fa8c4cbda32c0f24716067f8e8bd67ae65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0f4c590af12159c512312c497333bd7c839694d5cb6b6b9f1f04588b9c8d3d75->leave($__internal_0f4c590af12159c512312c497333bd7c839694d5cb6b6b9f1f04588b9c8d3d75_prof);

        
        $__internal_2ebc1f79ec24a23fb11e94e116226fa8c4cbda32c0f24716067f8e8bd67ae65e->leave($__internal_2ebc1f79ec24a23fb11e94e116226fa8c4cbda32c0f24716067f8e8bd67ae65e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
