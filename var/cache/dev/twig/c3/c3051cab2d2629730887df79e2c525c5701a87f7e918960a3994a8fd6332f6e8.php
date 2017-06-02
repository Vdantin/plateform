<?php

/* base.html.twig */
class __TwigTemplate_9518c4095f01bbf0dc269fcffad791ecc9c6ef573dee8443b476fb2b9b5b806d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_124e13c6498eab61e3ab3f49f34e34f420c7bb9146ff8127056bc3e19c9f8076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124e13c6498eab61e3ab3f49f34e34f420c7bb9146ff8127056bc3e19c9f8076->enter($__internal_124e13c6498eab61e3ab3f49f34e34f420c7bb9146ff8127056bc3e19c9f8076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2ed619565f9262cb2bbc2bdf688a3d817c9c314a061e6243c70e1b118638ed0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed619565f9262cb2bbc2bdf688a3d817c9c314a061e6243c70e1b118638ed0a->enter($__internal_2ed619565f9262cb2bbc2bdf688a3d817c9c314a061e6243c70e1b118638ed0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Grayscale - Market place </title>

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
    <!-- Temporary navbar container fix -->
    <style>
      .navbar-toggler {
        z-index: 1;
      }
      @media (max-width: 576px) {
        nav > .container {
          width: 100%;
        }
      }

    </style>

  </head>

  <body id=\"page-top\">

    <!-- Navigation -->
    <nav id=\"mainNav\" class=\"navbar fixed-top navbar-toggleable-md navbar-light\">
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarExample\" aria-controls=\"navbarExample\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        Menu
        <i class=\"fa fa-bars\"></i>
      </button>
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#page-top\">Market Place</a>
        <div class=\"collapse navbar-collapse\" id=\"navbarExample\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
              <a class=\"nav-link \" href=\"#about\">About</a>
            </li>
            ";
        // line 57
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 58
            echo "<li class=\"dropdown nav-item \">
<a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\" role=\"button\" >  <span class=\"\"><i class=\"fa fa-user \"> </i> ";
            // line 59
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo " </span></a>
<ul class=\"dropdown-menu \" role=\"menu\"> 
";
            // line 61
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                echo " 
<li > <a href=\"";
                // line 62
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_admin_homepage");
                echo "\" class=\"text-success red\"> <i class=\"fa fa-dashboard red\"></i> Dashboard </a></li> 
<li ><a href=\"https://hp188.hostpapa.com:2096\"><i class=\"fa fa-envelope-o red \"></i><span class=\"red\">  Messagerie</span></a></li>
";
            }
            // line 64
            echo "    
<li > <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\" class=\"red\"  > <i class=\"fa fa-child red\"></i> Profil </a></li>
<li > <a href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" class=\"red\"> <i class=\"fa fa-cogs red\"></i> Configuration </a></li>
<li> <a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"red\"><i class=\"fa fa-sign-out red\"> </i> Déconnexion</a></li>
</ul>
</li>     

";
        } else {
            // line 73
            echo "<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"btn navbar-btn btn-white\">Connexion</a>
";
        }
        // line 75
        echo "            
            
            
          </ul>
        </div>
      </div>
    </nav>

    ";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "
    <!-- Footer -->
    <footer>
      <div class=\"container text-center\">
        <p>Copyright &copy; Your Website 2017</p>
      </div>
    </footer>

    ";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 108
        echo "
  </body>

</html>
";
        
        $__internal_124e13c6498eab61e3ab3f49f34e34f420c7bb9146ff8127056bc3e19c9f8076->leave($__internal_124e13c6498eab61e3ab3f49f34e34f420c7bb9146ff8127056bc3e19c9f8076_prof);

        
        $__internal_2ed619565f9262cb2bbc2bdf688a3d817c9c314a061e6243c70e1b118638ed0a->leave($__internal_2ed619565f9262cb2bbc2bdf688a3d817c9c314a061e6243c70e1b118638ed0a_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa5b930a4be2ff3912462b058631d754b409e5c0720f37b0ba7129438e32c86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5b930a4be2ff3912462b058631d754b409e5c0720f37b0ba7129438e32c86a->enter($__internal_fa5b930a4be2ff3912462b058631d754b409e5c0720f37b0ba7129438e32c86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_39a07bd912de0b991b92c1fbebf3216d250019307643940fb2da1002f6435044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a07bd912de0b991b92c1fbebf3216d250019307643940fb2da1002f6435044->enter($__internal_39a07bd912de0b991b92c1fbebf3216d250019307643940fb2da1002f6435044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "      <!-- Bootstrap core CSS -->
      <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

      <!-- Custom fonts for this template -->
      <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
      <link href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
      <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

      <!-- Custom styles for this template -->
      <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/grayscale.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_39a07bd912de0b991b92c1fbebf3216d250019307643940fb2da1002f6435044->leave($__internal_39a07bd912de0b991b92c1fbebf3216d250019307643940fb2da1002f6435044_prof);

        
        $__internal_fa5b930a4be2ff3912462b058631d754b409e5c0720f37b0ba7129438e32c86a->leave($__internal_fa5b930a4be2ff3912462b058631d754b409e5c0720f37b0ba7129438e32c86a_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_1be315e4376cfe908ff9ca3a53d8181d9e237b5bff45bf85e906861ddddce4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be315e4376cfe908ff9ca3a53d8181d9e237b5bff45bf85e906861ddddce4ce->enter($__internal_1be315e4376cfe908ff9ca3a53d8181d9e237b5bff45bf85e906861ddddce4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40721aad8d654305a11538542ea59d680bae8476a71b15ca67944fe35fbcae5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40721aad8d654305a11538542ea59d680bae8476a71b15ca67944fe35fbcae5f->enter($__internal_40721aad8d654305a11538542ea59d680bae8476a71b15ca67944fe35fbcae5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_40721aad8d654305a11538542ea59d680bae8476a71b15ca67944fe35fbcae5f->leave($__internal_40721aad8d654305a11538542ea59d680bae8476a71b15ca67944fe35fbcae5f_prof);

        
        $__internal_1be315e4376cfe908ff9ca3a53d8181d9e237b5bff45bf85e906861ddddce4ce->leave($__internal_1be315e4376cfe908ff9ca3a53d8181d9e237b5bff45bf85e906861ddddce4ce_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e35ef80174aae7b7d5cd614e193d95f7bb3ba29646180d54ca2744d27f0a1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e35ef80174aae7b7d5cd614e193d95f7bb3ba29646180d54ca2744d27f0a1f5->enter($__internal_1e35ef80174aae7b7d5cd614e193d95f7bb3ba29646180d54ca2744d27f0a1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7c2b53741d5db47f15ff46e9d6a15ac3404bac0dcf15de55b141980100ed28af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2b53741d5db47f15ff46e9d6a15ac3404bac0dcf15de55b141980100ed28af->enter($__internal_7c2b53741d5db47f15ff46e9d6a15ac3404bac0dcf15de55b141980100ed28af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "      <!-- Bootstrap core JavaScript -->
      <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/tether/tether.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

      <!-- Plugin JavaScript -->
      <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

      <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
      <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false\"></script>

      <!-- Custom scripts for this template -->
      <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/grayscale.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
    ";
        
        $__internal_7c2b53741d5db47f15ff46e9d6a15ac3404bac0dcf15de55b141980100ed28af->leave($__internal_7c2b53741d5db47f15ff46e9d6a15ac3404bac0dcf15de55b141980100ed28af_prof);

        
        $__internal_1e35ef80174aae7b7d5cd614e193d95f7bb3ba29646180d54ca2744d27f0a1f5->leave($__internal_1e35ef80174aae7b7d5cd614e193d95f7bb3ba29646180d54ca2744d27f0a1f5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 105,  245 => 99,  239 => 96,  235 => 95,  231 => 94,  228 => 93,  219 => 92,  202 => 83,  190 => 24,  182 => 19,  176 => 16,  172 => 15,  169 => 14,  160 => 13,  146 => 108,  144 => 92,  134 => 84,  132 => 83,  122 => 75,  116 => 73,  108 => 67,  104 => 66,  100 => 65,  97 => 64,  91 => 62,  87 => 61,  82 => 59,  79 => 58,  77 => 57,  44 => 26,  42 => 13,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Grayscale - Market place </title>

    {% block stylesheets %}
      <!-- Bootstrap core CSS -->
      <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
      <link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">

      <!-- Custom fonts for this template -->
      <link href=\"{{asset('vendor/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
      <link href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
      <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

      <!-- Custom styles for this template -->
      <link href=\"{{asset('css/grayscale.min.css')}}\" rel=\"stylesheet\">
    {% endblock %}

    <!-- Temporary navbar container fix -->
    <style>
      .navbar-toggler {
        z-index: 1;
      }
      @media (max-width: 576px) {
        nav > .container {
          width: 100%;
        }
      }

    </style>

  </head>

  <body id=\"page-top\">

    <!-- Navigation -->
    <nav id=\"mainNav\" class=\"navbar fixed-top navbar-toggleable-md navbar-light\">
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarExample\" aria-controls=\"navbarExample\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        Menu
        <i class=\"fa fa-bars\"></i>
      </button>
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#page-top\">Market Place</a>
        <div class=\"collapse navbar-collapse\" id=\"navbarExample\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
              <a class=\"nav-link \" href=\"#about\">About</a>
            </li>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
<li class=\"dropdown nav-item \">
<a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\" role=\"button\" >  <span class=\"\"><i class=\"fa fa-user \"> </i> {{ app.user.username |title }} </span></a>
<ul class=\"dropdown-menu \" role=\"menu\"> 
{% if  is_granted('ROLE_ADMIN') %} 
<li > <a href=\"{{path('site_admin_homepage')}}\" class=\"text-success red\"> <i class=\"fa fa-dashboard red\"></i> Dashboard </a></li> 
<li ><a href=\"https://hp188.hostpapa.com:2096\"><i class=\"fa fa-envelope-o red \"></i><span class=\"red\">  Messagerie</span></a></li>
{% endif %}    
<li > <a href=\"{{path('fos_user_profile_show')}}\" class=\"red\"  > <i class=\"fa fa-child red\"></i> Profil </a></li>
<li > <a href=\"{{path('fos_user_profile_edit')}}\" class=\"red\"> <i class=\"fa fa-cogs red\"></i> Configuration </a></li>
<li> <a href=\"{{ path('fos_user_security_logout')}}\" class=\"red\"><i class=\"fa fa-sign-out red\"> </i> Déconnexion</a></li>
</ul>
</li>     

{% else %}
{# <li><a href=\"{{ path('fos_user_registration_register') }}\"><i class=\"fa fa-user-plus\"></i> Inscription</a></li>#}
<a href=\"{{ path('fos_user_security_login') }}\" class=\"btn navbar-btn btn-white\">Connexion</a>
{% endif %}
            
            
            
          </ul>
        </div>
      </div>
    </nav>

    {% block body %}{% endblock %}

    <!-- Footer -->
    <footer>
      <div class=\"container text-center\">
        <p>Copyright &copy; Your Website 2017</p>
      </div>
    </footer>

    {% block javascripts %}
      <!-- Bootstrap core JavaScript -->
      <script src=\"{{asset('vendor/jquery/jquery.min.js')}}\"></script>
      <script src=\"{{asset('vendor/tether/tether.min.js')}}\"></script>
      <script src=\"{{asset('vendor/bootstrap/js/bootstrap.min.js')}}\"></script>

      <!-- Plugin JavaScript -->
      <script src=\"{{asset('vendor/jquery-easing/jquery.easing.min.js')}}\"></script>

      <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
      <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false\"></script>

      <!-- Custom scripts for this template -->
      <script src=\"{{asset('js/grayscale.min.js')}}\"></script>
      <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
    {% endblock %}

  </body>

</html>
", "base.html.twig", "/home/vincent/plateform/app/Resources/views/base.html.twig");
    }
}
