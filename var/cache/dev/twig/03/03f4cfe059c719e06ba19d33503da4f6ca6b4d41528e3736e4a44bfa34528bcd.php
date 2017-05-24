<?php

/* product/show.html.twig */
class __TwigTemplate_3de96d4951b6327e77f999e500442f0e48e27707a42be5962984e602fe448012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dfd3c2052bc0e53e38a2c786c07c5c5ea53c442adbce52f129951e499ef797d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfd3c2052bc0e53e38a2c786c07c5c5ea53c442adbce52f129951e499ef797d->enter($__internal_3dfd3c2052bc0e53e38a2c786c07c5c5ea53c442adbce52f129951e499ef797d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_a8ba3963b71874ce8688c98e99fd7f3a1613b027102d7dad727556e7c6d892c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ba3963b71874ce8688c98e99fd7f3a1613b027102d7dad727556e7c6d892c7->enter($__internal_a8ba3963b71874ce8688c98e99fd7f3a1613b027102d7dad727556e7c6d892c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dfd3c2052bc0e53e38a2c786c07c5c5ea53c442adbce52f129951e499ef797d->leave($__internal_3dfd3c2052bc0e53e38a2c786c07c5c5ea53c442adbce52f129951e499ef797d_prof);

        
        $__internal_a8ba3963b71874ce8688c98e99fd7f3a1613b027102d7dad727556e7c6d892c7->leave($__internal_a8ba3963b71874ce8688c98e99fd7f3a1613b027102d7dad727556e7c6d892c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b19ef74299102328dcabb0d59290edf8d6608c305502e0f64a74d4359ba457e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b19ef74299102328dcabb0d59290edf8d6608c305502e0f64a74d4359ba457e->enter($__internal_3b19ef74299102328dcabb0d59290edf8d6608c305502e0f64a74d4359ba457e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09388c3ab178c3cc026322744aeab6d2c3bacaadb109d9ba6b6112128258c0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09388c3ab178c3cc026322744aeab6d2c3bacaadb109d9ba6b6112128258c0cc->enter($__internal_09388c3ab178c3cc026322744aeab6d2c3bacaadb109d9ba6b6112128258c0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "categoryId", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_09388c3ab178c3cc026322744aeab6d2c3bacaadb109d9ba6b6112128258c0cc->leave($__internal_09388c3ab178c3cc026322744aeab6d2c3bacaadb109d9ba6b6112128258c0cc_prof);

        
        $__internal_3b19ef74299102328dcabb0d59290edf8d6608c305502e0f64a74d4359ba457e->leave($__internal_3b19ef74299102328dcabb0d59290edf8d6608c305502e0f64a74d4359ba457e_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  107 => 39,  101 => 36,  95 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ product.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ product.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ product.description }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ product.price }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ product.categoryId }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('product_edit', { 'id': product.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "product/show.html.twig", "/home/vincent/plateform/app/Resources/views/product/show.html.twig");
    }
}
