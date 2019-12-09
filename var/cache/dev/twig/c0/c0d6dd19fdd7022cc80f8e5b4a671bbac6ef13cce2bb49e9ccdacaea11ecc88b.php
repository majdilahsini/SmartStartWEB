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

/* projet/indexAll.html.twig */
class __TwigTemplate_616b13391cf36e2d5489b0411e3e7c464ce3af3ce57915566491af21366aedca extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'banner' => [$this, 'block_banner'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/indexAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/indexAll.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/entreprisehome.html.twig", "projet/indexAll.html.twig", 1);
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
                                Liste des projet
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Liste des projet</a></p>
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "


            <div class=\"row justify-content-center d-flex\">
                <div class=\"col-lg-8 post-list\">
                    <ul class=\"cat-list\">
                        <li><a href=\"#\">Recent</a></li>
                        <li><a href=\"#\">Full Time</a></li>
                        <li><a href=\"#\">Intern</a></li>
                        <li><a href=\"#\">part Time</a></li>
                    </ul>
                    <div class=\"sidebar-search\">
                        <div class=\"input-group custom-search-form\">
                            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Suche...\">
                        </div>
                        <!-- /input-group -->
                    </div>
                    <ul class=\"nav\" id=\"side-menu\">
                        <li>
                            <a href=\"#\"> Entities<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                            </ul>
                        </li>
                    </ul>
                    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

                    <script type=\"text/javascript\">
                        jQuery(document).ready(function() {
                            var searchRequest = null;
                            \$(\"#search\").keyup(function() {
                                var minlength = 1;
                                var that = this;
                                var value = \$(this).val();
                                var entitySelector = \$(\"#entitiesNav\").html('');
                                if(value.length >= minlength) {

                                    \$(\"#hide\").hide('fast');

                                }
                                else
                                {
                                    \$(\"#hide\").show();
                                }

                                if (value.length >= minlength ) {
                                    if (searchRequest != null)
                                        searchRequest.abort();
                                    searchRequest = \$.ajax({
                                        type: \"GET\",
                                        url: \"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherch_ajax");
        echo "\",
                                        data: {
                                            'q' : value
                                        },
                                        dataType: \"text\",
                                        success: function(msg){
                                            //we need to check if the value is the same
                                            if (value===\$(that).val()) {
                                                var result = JSON.parse(msg);
                                                \$.each(result, function(key, arr) {
                                                    \$.each(arr, function(refEnt, value) {
                                                        if (key === 'ent') {
                                                            if (refEnt !== 'error') {
                                                                console.log(value[14]);
                                                                var idu=value[14];
                                                                console.log(value[11]);
                                                                var i=value[11];

                                                                if(idu==i) {
                                                                    console.log(value[0]);
                                                                    var id = value[0];
                                                                    var path = '";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", ["idProjet" => "x"]);
        echo "';
                                                                    path = path.replace(\"x\", id);

                                                                }
                                                                if(idu!=i) {
                                                                    console.log(value[0]);
                                                                    var id = value[0];
                                                                    var path = '";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show_visiteur_projet", ["idProjet" => "x"]);
        echo "';
                                                                    path = path.replace(\"x\", id);

                                                                }

                                                                entitySelector.append(

                                                                    \" <div class='single-post d-flex flex-row' style='background-color: #CFD8DC '>\"+
                                                                    \"<div class='thumb'>\"+
                                                                    \"<img src='imgs/\"+ value[12] + \"' alt='' style='height: 80px'>\"+

                                                                    \" </div>\"+





                                                                    \" <div class='details' >\"+
                                                                    \"<div class='title d-flex flex-row justify-content-between'>\"+
                                                                    \" <div class='titles'>\"+
                                                                    \" <a href='single.html'><h4>\"+ value[1] + \"</h4></a>\"+
                                                                    \" <h6>\"+ value[7] + \"</h6>\"+
                                                                    \" </div>\"+
                                                                    \"  <ul class='btns'>\"+
                                                                    \" <li><a href='#'><span class='lnr lnr-heart'></span></a></li>\"+
                                                                    \"<li><a href='\"+ path + \"'>Affich</a></li>\"+
                                                                    \"   </ul>\"+
                                                                    \"  </div>\"+
                                                                    \"    <p>\"+
                                                                    \"<label>Description : </label> \"+ value[5] + \"\"+
                                                                    \"   </p>\"+
                                                                    \" <h5><label>Date debut : </label>\"+ value[13] + \" </h5>\"+

                                                                    \" <p class='address'><span class='lnr lnr-map'></span> \"+ value[2] + \" DT </p>\"+
                                                                    \"  <p class='address'><span class='lnr lnr-database'></span>\"+ value[10] + \"</p>\"+
                                                                    \" </div>\"+
                                                                    \" </div>\");
                                                            } else {
                                                                entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                                            }
                                                        }
                                                    });
                                                });
                                            }
                                        }
                                    });
                                }
                            });
                        });
                    </script>
                    <div id=\"hide\">

                        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 165
            echo "                            ";
            if (($this->getAttribute($context["projet"], "idEtat", []) == 3)) {
                // line 166
                echo "                                ";
                $context["a"] = "#ffebee";
                // line 167
                echo "                            ";
            } elseif (($this->getAttribute($context["projet"], "idEtat", []) == 1)) {
                // line 168
                echo "                                ";
                $context["a"] = " #CFD8DC";
                // line 169
                echo "                            ";
            } elseif (($this->getAttribute($context["projet"], "idEtat", []) == 2)) {
                // line 170
                echo "                                ";
                $context["a"] = "#E0F7FA";
                // line 171
                echo "                            ";
            }
            // line 172
            if (($this->getAttribute($this->getAttribute($context["projet"], "idCategorie", []), "id", []) == $this->getAttribute($this->getAttribute((isset($context["topaimer"]) ? $context["topaimer"] : $this->getContext($context, "topaimer")), 0, []), "id_categorie", []))) {
                // line 173
                echo "
                            <div class=\"single-post d-flex flex-row\" style=\"background-color: ";
                // line 174
                echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
                echo " \">
                                <div class=\"thumb\">
                                    <center>
                                    <img src=\"";
                // line 177
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "image", []), "html", null, true);
                echo "\" alt=\"\" style=\"height: 80px\">
                                    </center>
                                </div>





                                <div class=\"details\" >
                                    <div class=\"title d-flex flex-row justify-content-between\">
                                        <div class=\"titles\">
                                            <a href=\"single.html\"><h4>";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", []), "html", null, true);
                echo "</h4></a>
                                            <h6>";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idCategorie", []), "nom", []), "html", null, true);
                echo "</h6>
                                        </div>
                                        <ul class=\"btns\">
                                            <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                            ";
                // line 193
                if (((isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")) == $this->getAttribute($this->getAttribute($context["projet"], "idEntreprise", []), "id", []))) {
                    // line 194
                    echo "                                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", ["idProjet" => $this->getAttribute($context["projet"], "idProjet", [])]), "html", null, true);
                    echo "\">Affich</a></li>
                                            ";
                } else {
                    // line 196
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show_visiteur_projet", ["idProjet" => $this->getAttribute($context["projet"], "idProjet", [])]), "html", null, true);
                    echo "\">Affich</a></li>
                                                ";
                }
                // line 198
                echo "                                        </ul>
                                    </div>
                                    <p>
                                        <label>Description : </label> ";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "descriptionProjet", []), "html", null, true);
                echo "
                                    </p>
                                    <h5><label>Date debut : </label> ";
                // line 203
                if ($this->getAttribute($context["projet"], "dateDebutProjet", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebutProjet", []), "Y-m-d"), "html", null, true);
                }
                echo "</h5>

                                    <p class=\"address\"><span class=\"lnr lnr-map\"></span> ";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "montant", []), "html", null, true);
                echo " DT </p>
                                    <p class=\"address\"><span class=\"lnr lnr-database\"></span>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "votreFinance", []), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                            ";
            }
            // line 210
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 212
            echo "                            ";
            if (($this->getAttribute($context["projet"], "idEtat", []) == 3)) {
                // line 213
                echo "                                ";
                $context["a"] = "#b71c1c";
                // line 214
                echo "                            ";
            } elseif (($this->getAttribute($context["projet"], "idEtat", []) == 1)) {
                // line 215
                echo "                                ";
                $context["a"] = " #CFD8DC";
                // line 216
                echo "                            ";
            } elseif (($this->getAttribute($context["projet"], "idEtat", []) == 2)) {
                // line 217
                echo "                                ";
                $context["a"] = "#1c7430";
                // line 218
                echo "                            ";
            }
            // line 219
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($context["projet"], "idCategorie", []), "id", []) != $this->getAttribute($this->getAttribute((isset($context["topaimer"]) ? $context["topaimer"] : $this->getContext($context, "topaimer")), 0, []), "id_categorie", []))) {
                // line 220
                echo "                            <div class=\"single-post d-flex flex-row\" style=\"background-color: ";
                echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
                echo " \">
                                <div class=\"thumb\">
                                    <center>
                                    <img src=\"";
                // line 223
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "image", []), "html", null, true);
                echo "\" alt=\"\" style=\"height: 80px\">
                                    </center>
                                </div>





                                <div class=\"details\" >
                                    <div class=\"title d-flex flex-row justify-content-between\">
                                        <div class=\"titles\">
                                            <a href=\"single.html\"><h4>";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", []), "html", null, true);
                echo "</h4></a>
                                            <h6>";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idCategorie", []), "nom", []), "html", null, true);
                echo "</h6>
                                        </div>
                                        <ul class=\"btns\">
                                            <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                            ";
                // line 239
                if (((isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")) == $this->getAttribute($this->getAttribute($context["projet"], "idEntreprise", []), "id", []))) {
                    // line 240
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", ["idProjet" => $this->getAttribute($context["projet"], "idProjet", [])]), "html", null, true);
                    echo "\">Affich</a></li>
                                            ";
                } else {
                    // line 242
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show_visiteur_projet", ["idProjet" => $this->getAttribute($context["projet"], "idProjet", [])]), "html", null, true);
                    echo "\">Affich</a></li>
                                            ";
                }
                // line 244
                echo "                                        </ul>
                                    </div>
                                    <p>
                                        <label>Description : </label> ";
                // line 247
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "descriptionProjet", []), "html", null, true);
                echo "
                                    </p>
                                    <h5><label>Date debut : </label> ";
                // line 249
                if ($this->getAttribute($context["projet"], "dateDebutProjet", [])) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebutProjet", []), "Y-m-d"), "html", null, true);
                }
                echo "</h5>

                                    <p class=\"address\"><span class=\"lnr lnr-map\"></span> ";
                // line 251
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "montant", []), "html", null, true);
                echo " DT </p>
                                    <p class=\"address\"><span class=\"lnr lnr-database\"></span>";
                // line 252
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "votreFinance", []), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                            ";
            }
            // line 256
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "                    </div>
                    <a class=\"text-uppercase loadmore-btn mx-auto d-block\" href=\"category.html\">Load More job Posts</a>

                </div>
                <div class=\"col-lg-4 sidebar\">
                    <div class=\"single-slidebar\">
                        <h4>Jobs by Location</h4>
                        <ul class=\"cat-list\">
                            ";
        // line 265
        $context["newArray"] = [];
        // line 266
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 267
            echo "                                ";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["projet"], "idCategorie", []), "nom", []), (isset($context["newArray"]) ? $context["newArray"] : $this->getContext($context, "newArray")))) {
                // line 268
                echo "                                    ";
                $context["newArray"] = twig_array_merge((isset($context["newArray"]) ? $context["newArray"] : $this->getContext($context, "newArray")), [0 => $this->getAttribute($this->getAttribute($context["projet"], "idCategorie", []), "nom", [])]);
                // line 269
                echo "                                    <li><a class=\"justify-content-between d-flex\" href=\"category.html\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idCategorie", []), "nom", []), "html", null, true);
                echo "<p></p><span>
                                        ";
                // line 270
                $context["i"] = 0;
                // line 271
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 272
                    echo "                                                    ";
                    if (($this->getAttribute($this->getAttribute($context["projet"], "idCategorie", []), "nom", []) == $this->getAttribute($this->getAttribute($context["project"], "idCategorie", []), "nom", []))) {
                        // line 273
                        echo "                                                        ";
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 274
                        echo "                                                    ";
                    }
                    // line 275
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 276
                echo "
                                                ";
                // line 277
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "

                                         </span></a></li>
                                ";
            }
            // line 281
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "
                        </ul>
                    </div>

                    <div class=\"single-slidebar\">
                        <h4>Top projet</h4>

                        <div class=\"active-relatedjob-carusel\">
                            ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["top"]) ? $context["top"] : $this->getContext($context, "top")));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 292
            echo "
                                <div class=\"single-rated\">
                                    <img class=\"img-fluid\" src=\"";
            // line 294
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "Image", []), "html", null, true);
            echo "\" alt=\"\">
                                    <a href=\"single.html\"><h4>";
            // line 295
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "nom_projet", []), "html", null, true);
            echo "</h4></a>
                                    <h6>";
            // line 296
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "montant", []), "html", null, true);
            echo "</h6>
                                    <p>
                                        ";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "description_projet", []), "html", null, true);
            echo "
                                    </p>
                                    <p class=\"address\"><span class=\"lnr lnr-map\"></span> ";
            // line 300
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "compte_bancaire", []), "html", null, true);
            echo "</p>
                                    <p class=\"address\"><span class=\"lnr lnr-database\"></span>";
            // line 301
            if ($this->getAttribute($context["k"], "date_fin_projet", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["k"], "date_fin_projet", []), "Y-m-d"), "html", null, true);
            }
            echo " </p>
                                    <a href=\"#\" class=\"btns text-uppercase\">Apply job</a>

                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        echo "
                        </div>

                        </div>
                    </div></div>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 314
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 315
        echo "           <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
           <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
           <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>



       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/indexAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 327,  721 => 326,  717 => 325,  713 => 324,  709 => 323,  705 => 322,  701 => 321,  697 => 320,  693 => 319,  689 => 318,  685 => 317,  681 => 316,  676 => 315,  667 => 314,  651 => 306,  638 => 301,  634 => 300,  629 => 298,  624 => 296,  620 => 295,  615 => 294,  611 => 292,  607 => 291,  597 => 283,  590 => 281,  583 => 277,  580 => 276,  574 => 275,  571 => 274,  568 => 273,  565 => 272,  560 => 271,  558 => 270,  553 => 269,  550 => 268,  547 => 267,  542 => 266,  540 => 265,  530 => 257,  524 => 256,  517 => 252,  513 => 251,  506 => 249,  501 => 247,  496 => 244,  490 => 242,  484 => 240,  482 => 239,  475 => 235,  471 => 234,  456 => 223,  449 => 220,  446 => 219,  443 => 218,  440 => 217,  437 => 216,  434 => 215,  431 => 214,  428 => 213,  425 => 212,  420 => 211,  414 => 210,  407 => 206,  403 => 205,  396 => 203,  391 => 201,  386 => 198,  380 => 196,  374 => 194,  372 => 193,  365 => 189,  361 => 188,  346 => 177,  340 => 174,  337 => 173,  335 => 172,  332 => 171,  329 => 170,  326 => 169,  323 => 168,  320 => 167,  317 => 166,  314 => 165,  310 => 164,  255 => 112,  245 => 105,  221 => 84,  170 => 35,  161 => 34,  138 => 19,  129 => 18,  117 => 14,  113 => 13,  109 => 12,  105 => 11,  101 => 10,  97 => 9,  93 => 8,  89 => 7,  84 => 6,  75 => 5,  64 => 3,  55 => 2,  33 => 1,);
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
                                Liste des projet
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Liste des projet</a></p>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}

        {% block content %}



            <div class=\"row justify-content-center d-flex\">
                <div class=\"col-lg-8 post-list\">
                    <ul class=\"cat-list\">
                        <li><a href=\"#\">Recent</a></li>
                        <li><a href=\"#\">Full Time</a></li>
                        <li><a href=\"#\">Intern</a></li>
                        <li><a href=\"#\">part Time</a></li>
                    </ul>
                    <div class=\"sidebar-search\">
                        <div class=\"input-group custom-search-form\">
                            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Suche...\">
                        </div>
                        <!-- /input-group -->
                    </div>
                    <ul class=\"nav\" id=\"side-menu\">
                        <li>
                            <a href=\"#\"> Entities<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                            </ul>
                        </li>
                    </ul>
                    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

                    <script type=\"text/javascript\">
                        jQuery(document).ready(function() {
                            var searchRequest = null;
                            \$(\"#search\").keyup(function() {
                                var minlength = 1;
                                var that = this;
                                var value = \$(this).val();
                                var entitySelector = \$(\"#entitiesNav\").html('');
                                if(value.length >= minlength) {

                                    \$(\"#hide\").hide('fast');

                                }
                                else
                                {
                                    \$(\"#hide\").show();
                                }

                                if (value.length >= minlength ) {
                                    if (searchRequest != null)
                                        searchRequest.abort();
                                    searchRequest = \$.ajax({
                                        type: \"GET\",
                                        url: \"{{ path('recherch_ajax') }}\",
                                        data: {
                                            'q' : value
                                        },
                                        dataType: \"text\",
                                        success: function(msg){
                                            //we need to check if the value is the same
                                            if (value===\$(that).val()) {
                                                var result = JSON.parse(msg);
                                                \$.each(result, function(key, arr) {
                                                    \$.each(arr, function(refEnt, value) {
                                                        if (key === 'ent') {
                                                            if (refEnt !== 'error') {
                                                                console.log(value[14]);
                                                                var idu=value[14];
                                                                console.log(value[11]);
                                                                var i=value[11];

                                                                if(idu==i) {
                                                                    console.log(value[0]);
                                                                    var id = value[0];
                                                                    var path = '{{ path('projet_show',{'idProjet': 'x'}) }}';
                                                                    path = path.replace(\"x\", id);

                                                                }
                                                                if(idu!=i) {
                                                                    console.log(value[0]);
                                                                    var id = value[0];
                                                                    var path = '{{ path('projet_show_visiteur_projet',{'idProjet': 'x'}) }}';
                                                                    path = path.replace(\"x\", id);

                                                                }

                                                                entitySelector.append(

                                                                    \" <div class='single-post d-flex flex-row' style='background-color: #CFD8DC '>\"+
                                                                    \"<div class='thumb'>\"+
                                                                    \"<img src='imgs/\"+ value[12] + \"' alt='' style='height: 80px'>\"+

                                                                    \" </div>\"+





                                                                    \" <div class='details' >\"+
                                                                    \"<div class='title d-flex flex-row justify-content-between'>\"+
                                                                    \" <div class='titles'>\"+
                                                                    \" <a href='single.html'><h4>\"+ value[1] + \"</h4></a>\"+
                                                                    \" <h6>\"+ value[7] + \"</h6>\"+
                                                                    \" </div>\"+
                                                                    \"  <ul class='btns'>\"+
                                                                    \" <li><a href='#'><span class='lnr lnr-heart'></span></a></li>\"+
                                                                    \"<li><a href='\"+ path + \"'>Affich</a></li>\"+
                                                                    \"   </ul>\"+
                                                                    \"  </div>\"+
                                                                    \"    <p>\"+
                                                                    \"<label>Description : </label> \"+ value[5] + \"\"+
                                                                    \"   </p>\"+
                                                                    \" <h5><label>Date debut : </label>\"+ value[13] + \" </h5>\"+

                                                                    \" <p class='address'><span class='lnr lnr-map'></span> \"+ value[2] + \" DT </p>\"+
                                                                    \"  <p class='address'><span class='lnr lnr-database'></span>\"+ value[10] + \"</p>\"+
                                                                    \" </div>\"+
                                                                    \" </div>\");
                                                            } else {
                                                                entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                                            }
                                                        }
                                                    });
                                                });
                                            }
                                        }
                                    });
                                }
                            });
                        });
                    </script>
                    <div id=\"hide\">

                        {% for projet in projets %}
                            {% if projet.idEtat==3 %}
                                {% set a=\"#ffebee\" %}
                            {% elseif projet.idEtat==1 %}
                                {% set a=\" #CFD8DC\" %}
                            {% elseif projet.idEtat==2  %}
                                {% set a=\"#E0F7FA\" %}
                            {% endif %}
{% if projet.idCategorie.id == topaimer.0.id_categorie %}

                            <div class=\"single-post d-flex flex-row\" style=\"background-color: {{ a }} \">
                                <div class=\"thumb\">
                                    <center>
                                    <img src=\"{{ asset('imgs/') }}{{ projet.image }}\" alt=\"\" style=\"height: 80px\">
                                    </center>
                                </div>





                                <div class=\"details\" >
                                    <div class=\"title d-flex flex-row justify-content-between\">
                                        <div class=\"titles\">
                                            <a href=\"single.html\"><h4>{{ projet.nomProjet }}</h4></a>
                                            <h6>{{ projet.idCategorie.nom }}</h6>
                                        </div>
                                        <ul class=\"btns\">
                                            <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                            {% if iduser == projet.idEntreprise.id  %}
                                            <li><a href=\"{{ path('projet_show',{'idProjet':projet.idProjet}) }}\">Affich</a></li>
                                            {% else %}
                                                <li><a href=\"{{ path('projet_show_visiteur_projet',{'idProjet':projet.idProjet}) }}\">Affich</a></li>
                                                {% endif %}
                                        </ul>
                                    </div>
                                    <p>
                                        <label>Description : </label> {{ projet.descriptionProjet }}
                                    </p>
                                    <h5><label>Date debut : </label> {% if projet.dateDebutProjet %}{{ projet.dateDebutProjet|date('Y-m-d') }}{% endif %}</h5>

                                    <p class=\"address\"><span class=\"lnr lnr-map\"></span> {{ projet.montant }} DT </p>
                                    <p class=\"address\"><span class=\"lnr lnr-database\"></span>{{ projet.votreFinance }}</p>
                                </div>
                            </div>
                            {% endif %}
                        {% endfor %}
                        {% for projet in projets %}
                            {% if projet.idEtat==3 %}
                                {% set a=\"#b71c1c\" %}
                            {% elseif projet.idEtat==1 %}
                                {% set a=\" #CFD8DC\" %}
                            {% elseif projet.idEtat==2  %}
                                {% set a=\"#1c7430\" %}
                            {% endif %}
                            {% if projet.idCategorie.id != topaimer.0.id_categorie %}
                            <div class=\"single-post d-flex flex-row\" style=\"background-color: {{ a }} \">
                                <div class=\"thumb\">
                                    <center>
                                    <img src=\"{{ asset('imgs/') }}{{ projet.image }}\" alt=\"\" style=\"height: 80px\">
                                    </center>
                                </div>





                                <div class=\"details\" >
                                    <div class=\"title d-flex flex-row justify-content-between\">
                                        <div class=\"titles\">
                                            <a href=\"single.html\"><h4>{{ projet.nomProjet }}</h4></a>
                                            <h6>{{ projet.idCategorie.nom }}</h6>
                                        </div>
                                        <ul class=\"btns\">
                                            <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                            {% if iduser == projet.idEntreprise.id  %}
                                                <li><a href=\"{{ path('projet_show',{'idProjet':projet.idProjet}) }}\">Affich</a></li>
                                            {% else %}
                                                <li><a href=\"{{ path('projet_show_visiteur_projet',{'idProjet':projet.idProjet}) }}\">Affich</a></li>
                                            {% endif %}
                                        </ul>
                                    </div>
                                    <p>
                                        <label>Description : </label> {{ projet.descriptionProjet }}
                                    </p>
                                    <h5><label>Date debut : </label> {% if projet.dateDebutProjet %}{{ projet.dateDebutProjet|date('Y-m-d') }}{% endif %}</h5>

                                    <p class=\"address\"><span class=\"lnr lnr-map\"></span> {{ projet.montant }} DT </p>
                                    <p class=\"address\"><span class=\"lnr lnr-database\"></span>{{ projet.votreFinance }}</p>
                                </div>
                            </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                    <a class=\"text-uppercase loadmore-btn mx-auto d-block\" href=\"category.html\">Load More job Posts</a>

                </div>
                <div class=\"col-lg-4 sidebar\">
                    <div class=\"single-slidebar\">
                        <h4>Jobs by Location</h4>
                        <ul class=\"cat-list\">
                            {% set newArray=[] %}
                            {% for projet in projets %}
                                {% if projet.idCategorie.nom not in newArray %}
                                    {% set newArray=newArray | merge ([projet.idCategorie.nom]) %}
                                    <li><a class=\"justify-content-between d-flex\" href=\"category.html\">{{ projet.idCategorie.nom }}<p></p><span>
                                        {% set i=0 %}
                                                {% for project in projets %}
                                                    {% if projet.idCategorie.nom == project.idCategorie.nom %}
                                                        {% set i=i+1 %}
                                                    {% endif %}
                                                {% endfor %}

                                                {{ i }}

                                         </span></a></li>
                                {% endif %}

                            {% endfor %}

                        </ul>
                    </div>

                    <div class=\"single-slidebar\">
                        <h4>Top projet</h4>

                        <div class=\"active-relatedjob-carusel\">
                            {% for k in top %}

                                <div class=\"single-rated\">
                                    <img class=\"img-fluid\" src=\"{{ asset('imgs/') }}{{ k.Image }}\" alt=\"\">
                                    <a href=\"single.html\"><h4>{{ k.nom_projet }}</h4></a>
                                    <h6>{{ k.montant }}</h6>
                                    <p>
                                        {{ k.description_projet }}
                                    </p>
                                    <p class=\"address\"><span class=\"lnr lnr-map\"></span> {{ k.compte_bancaire }}</p>
                                    <p class=\"address\"><span class=\"lnr lnr-database\"></span>{% if k.date_fin_projet %}{{ k.date_fin_projet|date('Y-m-d') }}{% endif %} </p>
                                    <a href=\"#\" class=\"btns text-uppercase\">Apply job</a>

                                </div>
                            {% endfor %}

                        </div>

                        </div>
                    </div></div>

        {% endblock %}

       {% block javascripts %}
           <script src=\"{{ asset('js/vendor/jquery-2.2.4.min.js') }}\"></script>
           <script src=\"{{ asset('js/vendor/bootstrap.min.js') }}\"></script>
           <script src=\"{{ asset('js/easing.min.js') }}\"></script>
           <script src=\"{{ asset('js/hoverIntent.js') }}\"></script>
           <script src=\"{{ asset('js/superfish.min.js') }}\"></script>
           <script src=\"{{ asset('js/jquery.ajaxchimp.min.js') }}\"></script>
           <script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
           <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
           <script src=\"{{ asset('js/jquery.sticky.js') }}\"></script>
           <script src=\"{{ asset('js/jquery.nice-select.min.js') }}\"></script>
           <script src=\"{{ asset('js/mail-script.js') }}\"></script>
           <script src=\"{{ asset('js/main.js') }}\"></script>
           <script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
           <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
           <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>



       {% endblock %}




   {# <h1>Projets list</h1>

    <table>
        <thead>
            <tr>
                <th>Idprojet</th>
                <th>Nomprojet</th>
                <th>Categorie</th>
                <th>Votrefinance</th>
                <th>Montant</th>
                <th>Comptebancaire</th>
                <th>Duree</th>
                <th>Datedebutprojet</th>
                <th>Adresseprojet</th>
                <th>Telprojet</th>
                <th>Nbreteam</th>
                <th>Descriptionprojet</th>
                <th>Emailprojet</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projet in projets %}
           {# <tr>
                <td><a href=\"{{ path('projet_show', { 'idProjet': projet.idProjet }) }}\">{{ projet.idProjet }}</a></td>
                <td>{{ projet.nomProjet }}</td>
                <td>{{ projet.categorie }}</td>
                <td>{{ projet.votreFinance }}</td>
                <td>{{ projet.montant }}</td>
                <td>{{ projet.compteBancaire }}</td>
                <td>{{ projet.duree }}</td>
                <td>{% if projet.dateDebutProjet %}{{ projet.dateDebutProjet|date('Y-m-d') }}{% endif %}</td>
                <td>{{ projet.adresseProjet }}</td>
                <td>{{ projet.telProjet }}</td>
                <td>{{ projet.nbreTeam }}</td>
                <td>{{ projet.descriptionProjet }}</td>
                <td>{{ projet.emailProjet }}</td>
                <td>{{ projet.image }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('projet_show', { 'idProjet': projet.idProjet }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('projet_edit', { 'idProjet': projet.idProjet }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
            <div class=\"details container\">
                <div class=\"title d-flex flex-row justify-content-between\">
                    <div class=\"titles\">
                        <a href=\"single.html\"><h4>{{projet.nomProjet}}</h4></a>
                        <h6>Premium Labels Limited</h6>
                    </div>
                    <ul class=\"btns\">
                        <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                        <li><a href=\"{{ path('projet_affich',{'id':projet.idProjet}) }}\">Apply</a></li>
                    </ul>
                </div>
                <p>{{ projet.descriptionProjet }}</p>
                <h5>{{ projet.dateDebutProjet | date(\"d-m-y\") }}</h5>
                <p class=\"address\"><span class=\"lnr lnr-map\"></span>{{ projet.adresseProjet }}</p>
                <p class=\"address\"><span class=\"lnr lnr-database\"></span> {{ projet.idEntreprise.username }}</p>
            </div>
            </div>
            <div class=\"single-post d-flex flex-row\">
                <div class=\"thumb\">
                    <img src=\"img/post.png\" alt=\"\">

                </div>
            </div>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('projet_new') }}\">Create a new projet</a>
        </li>
    </ul>#}



{#{% extends 'base.html.twig' %}

{% block content %}
    <h1>Projets list</h1>

    <table>
        <thead>
            <tr>
                <th>Idprojet</th>
                <th>Nomprojet</th>
                <th>Votrefinance</th>
                <th>Montant</th>
                <th>Comptebancaire</th>
                <th>Duree</th>
                <th>Datedebutprojet</th>
                <th>Adresseprojet</th>
                <th>Telprojet</th>
                <th>Nbreteam</th>
                <th>Descriptionprojet</th>
                <th>Emailprojet</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projet in projets %}
            <tr>
                <td><a href=\"{{ path('projet_show', { 'idProjet': projet.idProjet }) }}\">{{ projet.idProjet }}</a></td>
                <td>{{ projet.nomProjet }}</td>
                <td>{{ projet.votreFinance }}</td>
                <td>{{ projet.montant }}</td>
                <td>{{ projet.compteBancaire }}</td>
                <td>{{ projet.duree }}</td>
                <td>{% if projet.dateDebutProjet %}{{ projet.dateDebutProjet|date('Y-m-d') }}{% endif %}</td>
                <td>{{ projet.adresseProjet }}</td>
                <td>{{ projet.telProjet }}</td>
                <td>{{ projet.nbreTeam }}</td>
                <td>{{ projet.descriptionProjet }}</td>
                <td>{{ projet.emailProjet }}</td>
                <td>{{ projet.image }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('projet_show', { 'idProjet': projet.idProjet }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('projet_edit', { 'idProjet': projet.idProjet }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('projet_new') }}\">Create a new projet</a>
        </li>
    </ul>
{% endblock %}#}
", "projet/indexAll.html.twig", "C:\\wamp64\\www\\pidev2\\app\\Resources\\views\\projet\\indexAll.html.twig");
    }
}
