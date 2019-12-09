<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* commentaire/showcomentaire.html.twig */
class __TwigTemplate_eab8a3b84c7e00b9fd050df5db528d70e45025e8e7ac337e40d73b289350cf14 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@User/Default/userhome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/showcomentaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/showcomentaire.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/userhome.html.twig", "commentaire/showcomentaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/linearicons.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap2.css.map"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\">
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/commantaire.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/commantaireajax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "    <center>
        <h1>Commentaires list</h1>
        <center> <input  type=\"text\" id=\"sujet\" class=\"form-control\" placeholder=\"Search\" ></center>
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th><p class=\"text-primary\">Idcommentaire</p></th>
                <th><p class=\"text-primary\">Commentaire</p></th>
                <th><p class=\"text-primary\">Sujet</p></th>
                <th><p class=\"text-primary\">User</p></th>
                <th><p class=\"text-primary\">Actions</p></th>
            </tr>
            </thead>
            <tbody id=\"tbc\">
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 43
            echo "    <tr>
        <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "idCommentaire", []), "html", null, true);
            echo " </th>
        <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "commentaire", []), "html", null, true);
            echo " </th>
        <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "idSujet", []), "html", null, true);
            echo " </th>
        <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "idUser", []), "fullname", []), "html", null, true);
            echo " </th>
        <th>
            <ul>
                ";
            // line 53
            echo "                <li>
                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_edit", ["idCommentaire" => $this->getAttribute($context["commentaire"], "idCommentaire", [])]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-outline-primary\">edit</button></a>
                </li>
            </ul>


        </th>

    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_new");
        echo "\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\">
                        Create a new commentaire
                    </button></a>
            </li>
        </ul>
    </center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commentaire/showcomentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 68,  218 => 63,  203 => 54,  200 => 53,  194 => 47,  190 => 46,  186 => 45,  182 => 44,  179 => 43,  175 => 42,  159 => 28,  150 => 27,  137 => 24,  133 => 23,  129 => 22,  124 => 21,  115 => 20,  103 => 14,  99 => 13,  95 => 12,  91 => 11,  87 => 10,  83 => 9,  79 => 8,  75 => 7,  71 => 6,  67 => 5,  62 => 4,  53 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@User/Default/userhome.html.twig' %}

 {% block stylesheets %}
     <link rel=\"stylesheet\" href=\"{{ asset('css/linearicons.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap2.css.map') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('css/nice-select.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('css/animate.min.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\">
     <link rel=\"stylesheet\" href=\"{{ asset('css/common.css') }}\">
 {% endblock %}




{% block javascripts %}
    <script src=\"{{ asset('/js/jquery-2.2.3.min.js')}}\"></script>
    <script src=\"{{ asset('/js/commantaire.js')}}\"></script>
    <script src=\"{{ asset('/js/commantaireajax.js')}}\"></script>
    <script src=\"{{ asset('/js/jquery-3.1.1.min.js')}}\"></script>

{% endblock %}
{% block content %}
    <center>
        <h1>Commentaires list</h1>
        <center> <input  type=\"text\" id=\"sujet\" class=\"form-control\" placeholder=\"Search\" ></center>
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th><p class=\"text-primary\">Idcommentaire</p></th>
                <th><p class=\"text-primary\">Commentaire</p></th>
                <th><p class=\"text-primary\">Sujet</p></th>
                <th><p class=\"text-primary\">User</p></th>
                <th><p class=\"text-primary\">Actions</p></th>
            </tr>
            </thead>
            <tbody id=\"tbc\">
{% for commentaire in commentaires %}
    <tr>
        <th>{{commentaire.idCommentaire}} </th>
        <th>{{commentaire.commentaire}} </th>
        <th>{{commentaire.idSujet}} </th>
        <th>{{commentaire.idUser.fullname}} </th>
        <th>
            <ul>
                {#<li>
                    <a href=\"{{ path('commentaire_delete',  { 'idCommentaire': commentaire.idCommentaire }) }}\">delete</a>
                </li>#}
                <li>
                    <a href=\"{{ path('commentaire_edit',  { 'idCommentaire': commentaire.idCommentaire }) }}\"><button type=\"button\" class=\"btn btn-outline-primary\">edit</button></a>
                </li>
            </ul>


        </th>

    </tr>
{% endfor %}
            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"{{ path('commentaire_new') }}\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\">
                        Create a new commentaire
                    </button></a>
            </li>
        </ul>
    </center>
{% endblock %}
", "commentaire/showcomentaire.html.twig", "C:\\wamp64\\www\\pidev2\\app\\Resources\\views\\commentaire\\showcomentaire.html.twig");
    }
}
