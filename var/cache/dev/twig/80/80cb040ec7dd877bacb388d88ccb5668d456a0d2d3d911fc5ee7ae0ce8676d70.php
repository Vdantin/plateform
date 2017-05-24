<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_357a3709962281e74fff48f323d6a2a62b03fd37567cfddb832b7c576498d165 extends Twig_Template
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
        $__internal_43accb1a86d120fc3f481f6288b8413d5f781f4aa94db7b4342487157616b5ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43accb1a86d120fc3f481f6288b8413d5f781f4aa94db7b4342487157616b5ab->enter($__internal_43accb1a86d120fc3f481f6288b8413d5f781f4aa94db7b4342487157616b5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ad359a38ee96229b15d0f5285d7b72a8f6c57363e3e6772aae9380b3da393e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad359a38ee96229b15d0f5285d7b72a8f6c57363e3e6772aae9380b3da393e80->enter($__internal_ad359a38ee96229b15d0f5285d7b72a8f6c57363e3e6772aae9380b3da393e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_43accb1a86d120fc3f481f6288b8413d5f781f4aa94db7b4342487157616b5ab->leave($__internal_43accb1a86d120fc3f481f6288b8413d5f781f4aa94db7b4342487157616b5ab_prof);

        
        $__internal_ad359a38ee96229b15d0f5285d7b72a8f6c57363e3e6772aae9380b3da393e80->leave($__internal_ad359a38ee96229b15d0f5285d7b72a8f6c57363e3e6772aae9380b3da393e80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
