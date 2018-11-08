<?php

/* home/home.html.twig */
class __TwigTemplate_160fe69a14322eaf1e45fd7997448c05c9c2779877ec7d2b5e73fea76516dc06 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Symfony!</title>

    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "


</head>
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        <link href=\"assets/css/style.css\" rel=\"stylesheet\" />

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div class=\"container\">

        <div class=\"nav\">
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
        echo "\">Registration </a> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_login");
        echo "\">Login</a>
        </div>

        <img alt=\"articleImg\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new Twig_Error_Runtime('Variable "img" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\"/>

        <div class=\"text-article\">

            <h2 class=\"title1\"> ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (isset($context["title2"]) || array_key_exists("title2", $context) ? $context["title2"] : (function () { throw new Twig_Error_Runtime('Variable "title2" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</h2>

            <h4 class=\"author1\"> Article written by/";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 29, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 29, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new Twig_Error_Runtime('Variable "date" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "</h4>

            <p> ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " </p>

            <h4 class=\"time1\"> Time for creating article/ ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["event2"]) || array_key_exists("event2", $context) ? $context["event2"] : (function () { throw new Twig_Error_Runtime('Variable "event2" does not exist.', 33, $this->source); })()), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new Twig_Error_Runtime('Variable "event" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " ms</h4>

        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 33,  128 => 31,  119 => 29,  112 => 27,  105 => 23,  97 => 20,  91 => 16,  82 => 15,  69 => 7,  60 => 6,  48 => 40,  46 => 15,  40 => 11,  38 => 6,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Symfony!</title>

    {% block stylesheets %}

        <link href=\"assets/css/style.css\" rel=\"stylesheet\" />

    {% endblock %}



</head>
{% block body %}

    <div class=\"container\">

        <div class=\"nav\">
            <a href=\"{{ path('app_user_register') }}\">Registration </a> <a href=\"{{ path('app_user_login') }}\">Login</a>
        </div>

        <img alt=\"articleImg\" src=\"{{ img }}\"/>

        <div class=\"text-article\">

            <h2 class=\"title1\"> {{ title }} / {{ title2 }}</h2>

            <h4 class=\"author1\"> Article written by/{{ author }} {{ name }}, {{ date }}</h4>

            <p> {{ article }} </p>

            <h4 class=\"time1\"> Time for creating article/ {{ event2 }}: {{ event }} ms</h4>

        </div>

    </div>

{% endblock %}
</html>

", "home/home.html.twig", "/home/artem/my-project/templates/home/home.html.twig");
    }
}
