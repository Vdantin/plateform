<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_26816c01ca78efad6bbaa73bef488ee38080f1f66c4c94340b1e737e763af70e extends Twig_Template
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
        $__internal_a225a8cb5f6f6e46a8cde219a784d9daa15fb7cfd3e1ef3eb48f8b1ce12f2276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a225a8cb5f6f6e46a8cde219a784d9daa15fb7cfd3e1ef3eb48f8b1ce12f2276->enter($__internal_a225a8cb5f6f6e46a8cde219a784d9daa15fb7cfd3e1ef3eb48f8b1ce12f2276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_80e2b9a3a1cdfb911668b2310f4bd94a7efbe39349ceb0bc1b71a0fd5e59b930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e2b9a3a1cdfb911668b2310f4bd94a7efbe39349ceb0bc1b71a0fd5e59b930->enter($__internal_80e2b9a3a1cdfb911668b2310f4bd94a7efbe39349ceb0bc1b71a0fd5e59b930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 25
        echo "
<div class =\"container\">
         <div class=\"row\">
             <div class=\"col-md-4 col-md-push-4\">
    
       <h3 class=\"text-uppercase\" >Inscrivez-vous :</h3>  
   
";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    
<div class=\"form-group \">
<label class=\" control-label\" >";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Nom d'utilisateur :"));
        echo "</label>  
";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control input-md ", "placeholder" => " ")));
        echo "
<span class=\"help-block\"> ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span> 
</div>

<div class=\"form-group \">
<label class=\" control-label\" >";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Votre adresse email:"));
        echo "</label>   
";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control input-md ", "placeholder" => " ")));
        echo "
<span class=\"help-block\"> ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span> 
</div>

<div class=\"form-group \">
<label class=\" control-label\" >";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Votre mot de passe :"));
        echo "</label>   
";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control input-md ", "placeholder" => " ")));
        echo "
<span class=\"help-block\"> ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "</span> 
</div>

<div class=\"form-group \">
<label class=\" control-label\" >";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Confirmer votre mot de passe :"));
        echo "</label>   
";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control input-md ", "placeholder" => " ")));
        echo "
<span class=\"help-block\"> ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "</span> 
</div>



";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "  
   
   
   


 
 <input type=\"submit\" value=\"Register\" class=\"btn btn-success pull-right\">
  <br>
 </input>



";
        // line 73
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

   


       
   </div>  
        
       

       
       

       <hr>
  
        </div>  

</div>



";
        
        $__internal_a225a8cb5f6f6e46a8cde219a784d9daa15fb7cfd3e1ef3eb48f8b1ce12f2276->leave($__internal_a225a8cb5f6f6e46a8cde219a784d9daa15fb7cfd3e1ef3eb48f8b1ce12f2276_prof);

        
        $__internal_80e2b9a3a1cdfb911668b2310f4bd94a7efbe39349ceb0bc1b71a0fd5e59b930->leave($__internal_80e2b9a3a1cdfb911668b2310f4bd94a7efbe39349ceb0bc1b71a0fd5e59b930_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 73,  104 => 60,  96 => 55,  92 => 54,  88 => 53,  81 => 49,  77 => 48,  73 => 47,  66 => 43,  62 => 42,  58 => 41,  51 => 37,  47 => 36,  43 => 35,  37 => 32,  28 => 25,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{#{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

        <div class=\"form-group\" id=\"fos_user_registration_form\">
        {{ form_widget(form.email, { 'attr': {'class': 'form-control', 'placeholder': 'form.email'|trans } }) }}
        {{ form_errors(form.email) }}

        {{ form_widget(form.username, { 'attr': {'class': 'form-control', 'placeholder': 'form.username'|trans } }) }}
        {{ form_errors(form.username) }}

        {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control', 'placeholder': 'form.password'|trans } }) }}
        {{ form_errors(form.plainPassword.first) }}

        {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control', 'placeholder': 'form.password_confirmation'|trans } }) }}
        {{ form_errors(form.plainPassword.second) }}

        {{ form_rest(form) }}
        
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
#}

<div class =\"container\">
         <div class=\"row\">
             <div class=\"col-md-4 col-md-push-4\">
    
       <h3 class=\"text-uppercase\" >Inscrivez-vous :</h3>  
   
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    
<div class=\"form-group \">
<label class=\" control-label\" >{{ form_label(form.username, \"Nom d'utilisateur :\") }}</label>  
{{ form_widget(form.username, { 'attr': {'class': 'form-control input-md ','placeholder':' '} }) }}
<span class=\"help-block\"> {{ form_errors(form.username) }}</span> 
</div>

<div class=\"form-group \">
<label class=\" control-label\" >{{ form_label(form.email, \"Votre adresse email:\") }}</label>   
{{ form_widget(form.email, { 'attr': {'class': 'form-control input-md ','placeholder':' '} }) }}
<span class=\"help-block\"> {{ form_errors(form.email) }}</span> 
</div>

<div class=\"form-group \">
<label class=\" control-label\" >{{ form_label(form.plainPassword.first, \"Votre mot de passe :\") }}</label>   
{{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control input-md ','placeholder':' '} }) }}
<span class=\"help-block\"> {{ form_errors(form.plainPassword.first) }}</span> 
</div>

<div class=\"form-group \">
<label class=\" control-label\" >{{ form_label(form.plainPassword.second, \"Confirmer votre mot de passe :\") }}</label>   
{{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control input-md ','placeholder':' '} }) }}
<span class=\"help-block\"> {{ form_errors(form.plainPassword.second) }}</span> 
</div>



{{ form_rest(form) }}  
   
   
   


 
 <input type=\"submit\" value=\"Register\" class=\"btn btn-success pull-right\">
  <br>
 </input>



{{form_end(form)}}

   


       
   </div>  
        
       

       
       

       <hr>
  
        </div>  

</div>



", "@FOSUser/Registration/register_content.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
