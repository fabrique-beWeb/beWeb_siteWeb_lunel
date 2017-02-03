<?php

/* default/pagesAdmin/modifPromotion.html.twig */
class __TwigTemplate_876ed25350747870e785ac79cb1ce851094c1802a5c4265b2073f8f97ae37cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff6724178f31b70120f41d5cf40380dd1d5d512d8df96baa2868e00f79ea3d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6724178f31b70120f41d5cf40380dd1d5d512d8df96baa2868e00f79ea3d2e->enter($__internal_ff6724178f31b70120f41d5cf40380dd1d5d512d8df96baa2868e00f79ea3d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/pagesAdmin/modifPromotion.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("cssAdmin/mainAdmin.css"), "html", null, true);
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
        echo "

</head>
<header>

</header>
<body>



<div>

    ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formPromos"]) || array_key_exists("formPromos", $context) ? $context["formPromos"] : (function () { throw new Twig_Error_Runtime('Variable "formPromos" does not exist.', 23, $this->getSourceContext()); })()), 'form_start', array("attr" => array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updatePromos"))));
        echo " ";
        // line 24
        echo "
    <div class=\"container\">
        <div class=\"col-lg-offset-2 col-lg-8 col-lg-offset-2\">
            
                <div class=\"input-group\" >
                    <span class=\"input-group-addon\" >Numéro</span>

                    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formPromos"]) || array_key_exists("formPromos", $context) ? $context["formPromos"] : (function () { throw new Twig_Error_Runtime('Variable "formPromos" does not exist.', 31, $this->getSourceContext()); })()), "numero", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"input-group\" >
                    <span class=\"input-group-addon\" >Ville</span>

                    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formPromos"]) || array_key_exists("formPromos", $context) ? $context["formPromos"] : (function () { throw new Twig_Error_Runtime('Variable "formPromos" does not exist.', 37, $this->getSourceContext()); })()), "fkville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"input-group\" >
                    <span class=\"input-group-addon\" >Date début</span>

                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formPromos"]) || array_key_exists("formPromos", $context) ? $context["formPromos"] : (function () { throw new Twig_Error_Runtime('Variable "formPromos" does not exist.', 43, $this->getSourceContext()); })()), "datedebut", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                
                <div class=\"input-group\" >
                    <span class=\"input-group-addon\" >Date fin</span>

                    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formPromos"]) || array_key_exists("formPromos", $context) ? $context["formPromos"] : (function () { throw new Twig_Error_Runtime('Variable "formPromos" does not exist.', 49, $this->getSourceContext()); })()), "datefin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>


                <div class=\"input-group img\">
                    <span class=\"input-group-addon\" >Image</span>
                    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["formPromos"]) || array_key_exists("formPromos", $context) ? $context["formPromos"] : (function () { throw new Twig_Error_Runtime('Variable "formPromos" does not exist.', 55, $this->getSourceContext()); })()), "image", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                ";
        // line 58
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formPromos"]) || array_key_exists("formPromos", $context) ? $context["formPromos"] : (function () { throw new Twig_Error_Runtime('Variable "formPromos" does not exist.', 58, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>    
</div>
            <style>
                
            </style>
        <script src=";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/twbs/bootstrap/js/tests/vendor/jquery.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "></script>

</body>
</html>";
        
        $__internal_ff6724178f31b70120f41d5cf40380dd1d5d512d8df96baa2868e00f79ea3d2e->leave($__internal_ff6724178f31b70120f41d5cf40380dd1d5d512d8df96baa2868e00f79ea3d2e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_eec567c5d5ca7213521ced4afcf768539b43b3c54f6685387e0797485a7e4314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec567c5d5ca7213521ced4afcf768539b43b3c54f6685387e0797485a7e4314->enter($__internal_eec567c5d5ca7213521ced4afcf768539b43b3c54f6685387e0797485a7e4314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BeWeb";
        
        $__internal_eec567c5d5ca7213521ced4afcf768539b43b3c54f6685387e0797485a7e4314->leave($__internal_eec567c5d5ca7213521ced4afcf768539b43b3c54f6685387e0797485a7e4314_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2aa8923469f273e9025683d6ef385277d7b9dc4d7577b78cb92922d311568005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa8923469f273e9025683d6ef385277d7b9dc4d7577b78cb92922d311568005->enter($__internal_2aa8923469f273e9025683d6ef385277d7b9dc4d7577b78cb92922d311568005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2aa8923469f273e9025683d6ef385277d7b9dc4d7577b78cb92922d311568005->leave($__internal_2aa8923469f273e9025683d6ef385277d7b9dc4d7577b78cb92922d311568005_prof);

    }

    public function getTemplateName()
    {
        return "default/pagesAdmin/modifPromotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 10,  139 => 9,  128 => 66,  124 => 65,  114 => 58,  108 => 55,  99 => 49,  90 => 43,  81 => 37,  72 => 31,  63 => 24,  60 => 23,  46 => 11,  44 => 10,  40 => 9,  33 => 5,  29 => 4,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('../vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('cssAdmin/mainAdmin.css') }}\" >
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">

        <meta charset=\"UTF-8\" />
        <title>{% block title %}BeWeb{% endblock %}</title>
    {% block stylesheets %}{% endblock %}


</head>
<header>

</header>
<body>



<div>

    {{form_start(formPromos,{'attr':{'action':path('updatePromos')}})}} {#Methde pour valide #}

    <div class=\"container\">
        <div class=\"col-lg-offset-2 col-lg-8 col-lg-offset-2\">
            
                <div class=\"input-group\" >
                    <span class=\"input-group-addon\" >Numéro</span>

                    {{ form_widget(formPromos.numero, { 'attr': {'class': 'form-control'} })}}
                </div>
                
                <div class=\"input-group\" >
                    <span class=\"input-group-addon\" >Ville</span>

                    {{ form_widget(formPromos.fkville, { 'attr': {'class': 'form-control'} })}}
                </div>
                
                <div class=\"input-group\" >
                    <span class=\"input-group-addon\" >Date début</span>

                    {{ form_widget(formPromos.datedebut, { 'attr': {'class': 'form-control'} })}}
                </div>
                
                <div class=\"input-group\" >
                    <span class=\"input-group-addon\" >Date fin</span>

                    {{ form_widget(formPromos.datefin, { 'attr': {'class': 'form-control'} })}}
                </div>


                <div class=\"input-group img\">
                    <span class=\"input-group-addon\" >Image</span>
                    {{ form_widget(formPromos.image, { 'attr': {'class': 'form-control'} })}}
                </div>

                {{form_end(formPromos)}}
            </div>
        </div>    
</div>
            <style>
                
            </style>
        <script src={{ asset(\"../vendor/twbs/bootstrap/js/tests/vendor/jquery.min.js\")}}></script>
        <script src={{ asset(\"../vendor/twbs/bootstrap/dist/js/bootstrap.min.js\")}}></script>

</body>
</html>", "default/pagesAdmin/modifPromotion.html.twig", "/var/www/html/tp/projet/beweb/app/Resources/views/default/pagesAdmin/modifPromotion.html.twig");
    }
}
