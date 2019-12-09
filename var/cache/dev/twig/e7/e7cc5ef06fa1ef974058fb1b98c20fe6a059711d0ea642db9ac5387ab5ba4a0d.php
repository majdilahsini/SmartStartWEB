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

/* projet/affichevisiteurProjet.html.twig */
class __TwigTemplate_8835b63ddb7cf5de22c9accbebf36c473efe72bf090f83831a2c376b481e7cca extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'banner' => [$this, 'block_banner'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@User/Default/entreprisehome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/affichevisiteurProjet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/affichevisiteurProjet.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/entreprisehome.html.twig", "projet/affichevisiteurProjet.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_meta($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 3
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/linearicons.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap2.css.map"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 19
        echo "            <section class=\"banner-area relative\" id=\"home\">
                <div class=\"overlay overlay-bg\"></div>
                <div class=\"container\">
                    <div class=\"row d-flex align-items-center justify-content-center\">
                        <div class=\"about-content col-lg-12\">
                            <h1 class=\"text-white\">
                                Affiche Projet
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Affiche Projet</a></p>
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 39
        echo "

    <div style=\"background-color: #424242\">
    <div class=\"card mb-3 container \" >
        <h3 class=\"card-header\"> ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", []), "html", null, true);
        echo " </h3>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Categorie : ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "idCategorie", []), "nom", []), "html", null, true);
        echo "</h5>
            <h6 class=\"card-subtitle text-muted\">tel: ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "telProjet", []), "html", null, true);
        echo "</h6>
        </div>
        <img style=\"height: 200px; width: 100%; display: block;\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "image", []), "html", null, true);
        echo "\" alt=\"Card image\">
        <div class=\"card-body\">
            <p class=\"card-text\"><h3> Description : </h3>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "descriptionProjet", []), "html", null, true);
        echo "</p>
        </div>
        <ul class=\"list-group list-group-flush\">

            <li class=\"list-group-item\">
                <label class=\"lead\" >Votre finance     :    </label> ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "votreFinance", []), "html", null, true);
        echo "   <a href=\"#\" ><span class=\"lnr lnr-heart\"></span></a></li>

            <li class=\"list-group-item\"> <label class=\"lead\" >Montant           :    </label> ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "montant", []), "html", null, true);
        echo " </li>

            <li class=\"list-group-item\"> <label class=\"lead\" >Compte bancaire   :    </label>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "compteBancaire", []), "html", null, true);
        echo "</li>


            <li class=\"list-group-item\"> <label class=\"lead\" >Date debut projet :    </label>";
        // line 62
        if ($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateDebutProjet", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateDebutProjet", []), "Y-m-d"), "html", null, true);
        }
        echo "</li>

            <li class=\"list-group-item\"> <label class=\"lead\" >Adresse           :    </label>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "adresseProjet", []), "html", null, true);
        echo "</li>

            <li class=\"list-group-item\"><label class=\"lead\" >Nbre team         :    </label>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nbreTeam", []), "html", null, true);
        echo "</li>

            <li class=\"list-group-item\"><label class=\"lead\" >Email             :    </label> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "emailProjet", []), "html", null, true);
        echo "</li>

        </ul>
        <div class=\"card-body\">
            <div class=\"card-body\">
                <center>
                    <div class=\"row align-items-center\">
                        <div class=\"col-4\">
                            <a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_indexall");
        echo "\" class=\"card-link\">
                                <button class=\"btn btn-outline-secondary\">Back to the list</button></a>
                        </div>
                        <div class=\"col-4\">
                        </div>

                        <div class=\"col-4\">
                            ";
        // line 83
        if (($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "montant", []) < $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "votreFinance", []))) {
            // line 84
            echo "                            <a  class=\"btn btn-outline-secondary\" data-toggle=\"modal\" data-target=\"#con\" href=\"\"> investire </a>
                            <!-- Modal -->
                            <div class=\"modal fade\" id=\"con\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">

                                        <div class=\"modal-header\">
                                            <h4 class=\"modal-title\">investire Projet :";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", []), "html", null, true);
            echo "</h4>

                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"card-body\"  style=\"font-size: 17px\">
                                                ";
            // line 96
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInv"]) ? $context["formInv"] : $this->getContext($context, "formInv")), 'form_start');
            echo "
                                                ";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formInv"]) ? $context["formInv"] : $this->getContext($context, "formInv")), 'widget');
            echo "

                                            </div>
                                        </div>

                                        <div class=\"modal-footer\">
                                            <div class=\"col-4\">
                                                <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", ["idProjet" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "idProjet", [])]), "html", null, true);
            echo "\" class=\"card-link\">
                                                    <button class=\"btn btn-danger \">Annuler</button></a>
                                            </div>
                                            <div class=\"col-4\">
                                            </div>
                                            <div class=\"col-4\">

                                                <input type=\"submit\" value=\"Confirmer\" class=\"btn btn-success\" >
                                                ";
            // line 112
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInv"]) ? $context["formInv"] : $this->getContext($context, "formInv")), 'form_end');
            echo "
                                            </div>


                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            ";
        } else {
            // line 121
            echo "                                <label class=\"input\">le projet et biens comple merci</label>
                            ";
        }
        // line 123
        echo "                        </div>


                    </div>
                </center>
            </div>
            <div class=\"card-footer text-muted\">
                2 days ago
            </div>
        </div>
        <div class=\"card\" style=\"background-color: #424242\">

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/affichevisiteurProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 123,  313 => 121,  301 => 112,  290 => 104,  280 => 97,  276 => 96,  268 => 91,  259 => 84,  257 => 83,  247 => 76,  236 => 68,  231 => 66,  226 => 64,  219 => 62,  213 => 59,  208 => 57,  203 => 55,  195 => 50,  189 => 48,  184 => 46,  180 => 45,  175 => 43,  169 => 39,  160 => 38,  137 => 19,  128 => 18,  116 => 14,  112 => 13,  108 => 12,  104 => 11,  100 => 10,  96 => 9,  92 => 8,  88 => 7,  83 => 6,  74 => 5,  63 => 3,  54 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@User/Default/entreprisehome.html.twig' %}
{% block meta %}

{% endblock %}
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
            {% endblock %}


        {% block banner %}
            <section class=\"banner-area relative\" id=\"home\">
                <div class=\"overlay overlay-bg\"></div>
                <div class=\"container\">
                    <div class=\"row d-flex align-items-center justify-content-center\">
                        <div class=\"about-content col-lg-12\">
                            <h1 class=\"text-white\">
                                Affiche Projet
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Affiche Projet</a></p>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}





{% block content %}


    <div style=\"background-color: #424242\">
    <div class=\"card mb-3 container \" >
        <h3 class=\"card-header\"> {{ projet.nomProjet }} </h3>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Categorie : {{ projet.idCategorie.nom }}</h5>
            <h6 class=\"card-subtitle text-muted\">tel: {{ projet.telProjet }}</h6>
        </div>
        <img style=\"height: 200px; width: 100%; display: block;\" src=\"{{ asset('imgs/') }}{{ projet.image }}\" alt=\"Card image\">
        <div class=\"card-body\">
            <p class=\"card-text\"><h3> Description : </h3>{{ projet.descriptionProjet }}</p>
        </div>
        <ul class=\"list-group list-group-flush\">

            <li class=\"list-group-item\">
                <label class=\"lead\" >Votre finance     :    </label> {{ projet.votreFinance }}   <a href=\"#\" ><span class=\"lnr lnr-heart\"></span></a></li>

            <li class=\"list-group-item\"> <label class=\"lead\" >Montant           :    </label> {{ projet.montant }} </li>

            <li class=\"list-group-item\"> <label class=\"lead\" >Compte bancaire   :    </label>{{ projet.compteBancaire }}</li>


            <li class=\"list-group-item\"> <label class=\"lead\" >Date debut projet :    </label>{% if projet.dateDebutProjet %}{{ projet.dateDebutProjet|date('Y-m-d') }}{% endif %}</li>

            <li class=\"list-group-item\"> <label class=\"lead\" >Adresse           :    </label>{{ projet.adresseProjet }}</li>

            <li class=\"list-group-item\"><label class=\"lead\" >Nbre team         :    </label>{{ projet.nbreTeam }}</li>

            <li class=\"list-group-item\"><label class=\"lead\" >Email             :    </label> {{ projet.emailProjet }}</li>

        </ul>
        <div class=\"card-body\">
            <div class=\"card-body\">
                <center>
                    <div class=\"row align-items-center\">
                        <div class=\"col-4\">
                            <a href=\"{{ path('projet_indexall') }}\" class=\"card-link\">
                                <button class=\"btn btn-outline-secondary\">Back to the list</button></a>
                        </div>
                        <div class=\"col-4\">
                        </div>

                        <div class=\"col-4\">
                            {% if projet.montant < projet.votreFinance %}
                            <a  class=\"btn btn-outline-secondary\" data-toggle=\"modal\" data-target=\"#con\" href=\"\"> investire </a>
                            <!-- Modal -->
                            <div class=\"modal fade\" id=\"con\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">

                                        <div class=\"modal-header\">
                                            <h4 class=\"modal-title\">investire Projet :{{ projet.nomProjet }}</h4>

                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"card-body\"  style=\"font-size: 17px\">
                                                {{ form_start(formInv) }}
                                                {{ form_widget(formInv) }}

                                            </div>
                                        </div>

                                        <div class=\"modal-footer\">
                                            <div class=\"col-4\">
                                                <a href=\"{{ path('projet_show', { 'idProjet': projet.idProjet }) }}\" class=\"card-link\">
                                                    <button class=\"btn btn-danger \">Annuler</button></a>
                                            </div>
                                            <div class=\"col-4\">
                                            </div>
                                            <div class=\"col-4\">

                                                <input type=\"submit\" value=\"Confirmer\" class=\"btn btn-success\" >
                                                {{ form_end(formInv) }}
                                            </div>


                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            {% else %}
                                <label class=\"input\">le projet et biens comple merci</label>
                            {% endif %}
                        </div>


                    </div>
                </center>
            </div>
            <div class=\"card-footer text-muted\">
                2 days ago
            </div>
        </div>
        <div class=\"card\" style=\"background-color: #424242\">

        </div>
    </div>

{% endblock %}", "projet/affichevisiteurProjet.html.twig", "C:\\wamp64\\www\\pidev2\\app\\Resources\\views\\projet\\affichevisiteurProjet.html.twig");
    }
}
