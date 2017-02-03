<?php

/* default/trombinoscope.html.twig */
class __TwigTemplate_33b6394e41e1846affc84c9564e9dfe1461359c9c55bce9b57d1249ef4672406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bd50dd060047c431270a080b338d1230def487c18093f113bb45f54829c4da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd50dd060047c431270a080b338d1230def487c18093f113bb45f54829c4da2->enter($__internal_4bd50dd060047c431270a080b338d1230def487c18093f113bb45f54829c4da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/trombinoscope.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/twbs/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../web/css/main.css"), "html", null, true);
        echo "\" >
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
        
        <meta charset=\"UTF-8\" />
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

</head>
<header>
    
</header>
<body>
    ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_4bd50dd060047c431270a080b338d1230def487c18093f113bb45f54829c4da2->leave($__internal_4bd50dd060047c431270a080b338d1230def487c18093f113bb45f54829c4da2_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_759aafb4c15855f8d5ae9e6b3e9aec4c0acf13986a586a2e11d6184aa2537905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759aafb4c15855f8d5ae9e6b3e9aec4c0acf13986a586a2e11d6184aa2537905->enter($__internal_759aafb4c15855f8d5ae9e6b3e9aec4c0acf13986a586a2e11d6184aa2537905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BeWeb";
        
        $__internal_759aafb4c15855f8d5ae9e6b3e9aec4c0acf13986a586a2e11d6184aa2537905->leave($__internal_759aafb4c15855f8d5ae9e6b3e9aec4c0acf13986a586a2e11d6184aa2537905_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4acb48071168336ff2189958337d94f8d4d916e2ce69e456fbe42ec2504ec35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4acb48071168336ff2189958337d94f8d4d916e2ce69e456fbe42ec2504ec35->enter($__internal_f4acb48071168336ff2189958337d94f8d4d916e2ce69e456fbe42ec2504ec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f4acb48071168336ff2189958337d94f8d4d916e2ce69e456fbe42ec2504ec35->leave($__internal_f4acb48071168336ff2189958337d94f8d4d916e2ce69e456fbe42ec2504ec35_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d35a919b627f4a55a92ef0158427094bf1fa720ed3a5bb66c5a97777413b355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d35a919b627f4a55a92ef0158427094bf1fa720ed3a5bb66c5a97777413b355->enter($__internal_0d35a919b627f4a55a92ef0158427094bf1fa720ed3a5bb66c5a97777413b355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>                        
      </button>
     
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav text-center\">
        <li class=\"active col-md-6\"><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Retour au site</a></li>
        <li class=\"col-md-6\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homePromo");
        echo "\">Retour aux promotions</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
       
      </ul>
    </div>
</nav>
    <div class=\"container-fluid ecole\">
        <h2>Formulaire de Recherche</h2>
    </div>
    <div class=\"container-fluid ecole\">
        <div class=\"container\">
        <section>
            <h2>Lunel</h2>
        </section>
        </div>
        <div class=\"container promo\">
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apprennents"]) || array_key_exists("apprennents", $context) ? $context["apprennents"] : (function () { throw new Twig_Error_Runtime('Variable "apprennents" does not exist.', 49, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["apprennent"]) {
            // line 50
            echo "            
                <div class =\"col-xs-3\">
                    <ul>
                        <li><img src=\"http://40.media.tumblr.com/022bbb45b3257c3c494a1de93179bd8a/tumblr_n45cr8dmj61ty0km0o7_1280.png\" class=\"img-responsive\"></li>
                        <li>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["apprennent"], "nom", array()), "html", null, true);
            echo "</li>
                        <li>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["apprennent"], "prenom", array()), "html", null, true);
            echo "</li>
                        <li>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["apprennent"], "mail", array()), "html", null, true);
            echo "</li>
                    </ul>
                </div>
            
      ";
            // line 60
            echo " <style type=\"text/css\"> .back{background-color: red} ";
            echo "</style>
   
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprennent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "       </div>
    </div>
    </body>
    ";
        
        $__internal_0d35a919b627f4a55a92ef0158427094bf1fa720ed3a5bb66c5a97777413b355->leave($__internal_0d35a919b627f4a55a92ef0158427094bf1fa720ed3a5bb66c5a97777413b355_prof);

    }

    public function getTemplateName()
    {
        return "default/trombinoscope.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 63,  157 => 60,  150 => 56,  146 => 55,  142 => 54,  136 => 50,  132 => 49,  112 => 32,  108 => 31,  94 => 19,  88 => 18,  77 => 10,  65 => 9,  58 => 18,  47 => 11,  45 => 10,  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('../vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('../web/css/main.css') }}\" >
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
        
        <meta charset=\"UTF-8\" />
        <title>{% block title %}BeWeb{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

</head>
<header>
    
</header>
<body>
    {% block body %}
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>                        
      </button>
     
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav text-center\">
        <li class=\"active col-md-6\"><a href=\"{{path('home')}}\">Retour au site</a></li>
        <li class=\"col-md-6\"><a href=\"{{path('homePromo')}}\">Retour aux promotions</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
       
      </ul>
    </div>
</nav>
    <div class=\"container-fluid ecole\">
        <h2>Formulaire de Recherche</h2>
    </div>
    <div class=\"container-fluid ecole\">
        <div class=\"container\">
        <section>
            <h2>Lunel</h2>
        </section>
        </div>
        <div class=\"container promo\">
        {% for apprennent in apprennents %}
            
                <div class =\"col-xs-3\">
                    <ul>
                        <li><img src=\"http://40.media.tumblr.com/022bbb45b3257c3c494a1de93179bd8a/tumblr_n45cr8dmj61ty0km0o7_1280.png\" class=\"img-responsive\"></li>
                        <li>{{apprennent.nom}}</li>
                        <li>{{apprennent.prenom}}</li>
                        <li>{{apprennent.mail}}</li>
                    </ul>
                </div>
            
      {#Test scss#} <style type=\"text/css\"> .back{background-color: red} {#.promo{background-color: gold; }#}</style>
   
            {% endfor %}
       </div>
    </div>
    </body>
    {% endblock %}
", "default/trombinoscope.html.twig", "/var/www/html/tp/projet/beweb/app/Resources/views/default/trombinoscope.html.twig");
    }
}
