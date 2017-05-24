<?php

/* base.html.twig */
class __TwigTemplate_5243e67711bac2fc0c14b6ec06976c49537ac5c99c8f4cd130d64480f977da94 extends Twig_Template
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
        $__internal_6f1805d087dc122880a0fc95c8abdea09d2023b1461573a29941ec51b690766e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1805d087dc122880a0fc95c8abdea09d2023b1461573a29941ec51b690766e->enter($__internal_6f1805d087dc122880a0fc95c8abdea09d2023b1461573a29941ec51b690766e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b07fbb6990833892b6fae09f26c3ba42e153b7f10ed1e45b056ee12cc81acbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07fbb6990833892b6fae09f26c3ba42e153b7f10ed1e45b056ee12cc81acbf8->enter($__internal_b07fbb6990833892b6fae09f26c3ba42e153b7f10ed1e45b056ee12cc81acbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6f1805d087dc122880a0fc95c8abdea09d2023b1461573a29941ec51b690766e->leave($__internal_6f1805d087dc122880a0fc95c8abdea09d2023b1461573a29941ec51b690766e_prof);

        
        $__internal_b07fbb6990833892b6fae09f26c3ba42e153b7f10ed1e45b056ee12cc81acbf8->leave($__internal_b07fbb6990833892b6fae09f26c3ba42e153b7f10ed1e45b056ee12cc81acbf8_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9524c345884ac5d82954255060b2bebba573a7d3f36a7d0f2698cb2d698ef615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9524c345884ac5d82954255060b2bebba573a7d3f36a7d0f2698cb2d698ef615->enter($__internal_9524c345884ac5d82954255060b2bebba573a7d3f36a7d0f2698cb2d698ef615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9f3180f7387c3a47707c99b29deb742430d5a1e50bd97a68c26eea491861b2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3180f7387c3a47707c99b29deb742430d5a1e50bd97a68c26eea491861b2b8->enter($__internal_9f3180f7387c3a47707c99b29deb742430d5a1e50bd97a68c26eea491861b2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9f3180f7387c3a47707c99b29deb742430d5a1e50bd97a68c26eea491861b2b8->leave($__internal_9f3180f7387c3a47707c99b29deb742430d5a1e50bd97a68c26eea491861b2b8_prof);

        
        $__internal_9524c345884ac5d82954255060b2bebba573a7d3f36a7d0f2698cb2d698ef615->leave($__internal_9524c345884ac5d82954255060b2bebba573a7d3f36a7d0f2698cb2d698ef615_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ef3b247c9be0f083eceae3b9b746240f7661f1818ed7676a11f9226d706fd51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef3b247c9be0f083eceae3b9b746240f7661f1818ed7676a11f9226d706fd51->enter($__internal_0ef3b247c9be0f083eceae3b9b746240f7661f1818ed7676a11f9226d706fd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ca282c367db934980f20b1122dab240cbacd649ffe39df6ff645f09d617692d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca282c367db934980f20b1122dab240cbacd649ffe39df6ff645f09d617692d->enter($__internal_6ca282c367db934980f20b1122dab240cbacd649ffe39df6ff645f09d617692d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ca282c367db934980f20b1122dab240cbacd649ffe39df6ff645f09d617692d->leave($__internal_6ca282c367db934980f20b1122dab240cbacd649ffe39df6ff645f09d617692d_prof);

        
        $__internal_0ef3b247c9be0f083eceae3b9b746240f7661f1818ed7676a11f9226d706fd51->leave($__internal_0ef3b247c9be0f083eceae3b9b746240f7661f1818ed7676a11f9226d706fd51_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f7ba3e58dc81f5a488838b5f88c2c4c0bf063571b7d5c0f6be767d193c9595d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7ba3e58dc81f5a488838b5f88c2c4c0bf063571b7d5c0f6be767d193c9595d->enter($__internal_3f7ba3e58dc81f5a488838b5f88c2c4c0bf063571b7d5c0f6be767d193c9595d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_017c18cc081ff86218ff0941017e896ddc89a9640936fd9ac642a1992a26c7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017c18cc081ff86218ff0941017e896ddc89a9640936fd9ac642a1992a26c7bd->enter($__internal_017c18cc081ff86218ff0941017e896ddc89a9640936fd9ac642a1992a26c7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_017c18cc081ff86218ff0941017e896ddc89a9640936fd9ac642a1992a26c7bd->leave($__internal_017c18cc081ff86218ff0941017e896ddc89a9640936fd9ac642a1992a26c7bd_prof);

        
        $__internal_3f7ba3e58dc81f5a488838b5f88c2c4c0bf063571b7d5c0f6be767d193c9595d->leave($__internal_3f7ba3e58dc81f5a488838b5f88c2c4c0bf063571b7d5c0f6be767d193c9595d_prof);

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
