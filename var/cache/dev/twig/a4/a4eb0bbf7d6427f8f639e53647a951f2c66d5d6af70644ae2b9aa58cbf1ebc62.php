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

/* projet/index.html.twig */
class __TwigTemplate_dc776e37a56d02788802ac72ad9c04a8e9a056bf37a0ce62802a89441a5a44b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/entreprisehome.html.twig", "projet/index.html.twig", 1);
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
                                Liste des Projet
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Liste des Projet</a></p>
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
                    <center>
                        <ul class=\"cat-list\">
                            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index_domaine", ["idEtat" => 1]);
        echo "\" > en attent   </a></li>
                            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index_domaine", ["idEtat" => 2]);
        echo "\" > activ </a></li>
                            <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index_domaine", ["idEtat" => 3]);
        echo "\" > terminer </a></li>

                        </ul>
                    </center>
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
                            var searchRequest1 = null;



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
                                    if (searchRequest1 != null)
                                        searchRequest1.abort();
                                    searchRequest1 = \$.ajax({
                                        type: \"GET\",
                                        url: \"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherch_ajaxm");
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
                                                                console.log(value[0]);
                                                                var id=value[0];
                                                                var path = '";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", ["idProjet" => "x"]);
        echo "';
                                                                path = path.replace(\"x\",id);



                                                                entitySelector.append(

                                                                    \" <div class='single-post d-flex flex-row' style='background-color: #CFD8DC '>\"+
                                                                    \"<div class='thumb'>\"+
                                                                    \"<img src='imgs/\"+ value[12] +\"' alt='' style='height: 80px'>\"+

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
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 158
            echo "                        ";
            if (($this->getAttribute($context["projet"], "idEtat", []) == 3)) {
                // line 159
                echo "                         ";
                $context["a"] = "#ffebee";
                // line 160
                echo "                            ";
            } elseif (($this->getAttribute($context["projet"], "idEtat", []) == 1)) {
                // line 161
                echo "                                ";
                $context["a"] = " #CFD8DC";
                // line 162
                echo "                                ";
            } elseif (($this->getAttribute($context["projet"], "idEtat", []) == 2)) {
                // line 163
                echo "                                ";
                $context["a"] = "#E0F7FA";
                // line 164
                echo "                                    ";
            }
            // line 165
            echo "
                        <div class=\"single-post d-flex flex-row\"style=\"background-color: ";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
            echo " \">
                            <div class=\"thumb\">
                                <center>
                                <img src=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "image", []), "html", null, true);
            echo "\" alt=\"\" style=\"height: 80px\">
                                </center>
                            </div>





                            <div class=\"details\" >
                                <div class=\"title d-flex flex-row justify-content-between\">
                                    <div class=\"titles\">
                                        <a href=\"single.html\"><h4>";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", []), "html", null, true);
            echo "</h4></a>
                                        <h6>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idCategorie", []), "nom", []), "html", null, true);
            echo "</h6>
                                    </div>
                                    <ul class=\"btns\">
                                        <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                        <li><a href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", ["idProjet" => $this->getAttribute($context["projet"], "idProjet", [])]), "html", null, true);
            echo "\">Affich</a></li>
                                    </ul>
                                </div>
                                <p>
                                    <label>Description : </label> ";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "descriptionProjet", []), "html", null, true);
            echo "
                                </p>
                                <h5><label>Date debut : </label> ";
            // line 191
            if ($this->getAttribute($context["projet"], "dateDebutProjet", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebutProjet", []), "Y-m-d"), "html", null, true);
            }
            echo "</h5>

                                <p class=\"address\"><span class=\"lnr lnr-map\"></span> ";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "montant", []), "html", null, true);
            echo " DT </p>
                                <p class=\"address\"><span class=\"lnr lnr-database\"></span>";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "votreFinance", []), "html", null, true);
            echo "</p>
                            </div>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                    </div>
                    <a class=\"text-uppercase loadmore-btn mx-auto d-block\" href=\"category.html\">Load More job Posts</a>

                </div>
                <div class=\"col-lg-4 sidebar\">
                    <div class=\"single-slidebar\">
                        <h4>Jobs by Location</h4>
                        <ul class=\"cat-list\">
                            ";
        // line 207
        $context["newArray"] = [];
        // line 208
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proj"]) ? $context["proj"] : $this->getContext($context, "proj")));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 209
            echo "                                ";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["pro"], "idCategorie", []), "nom", []), (isset($context["newArray"]) ? $context["newArray"] : $this->getContext($context, "newArray")))) {
                // line 210
                echo "                                    ";
                $context["newArray"] = twig_array_merge((isset($context["newArray"]) ? $context["newArray"] : $this->getContext($context, "newArray")), [0 => $this->getAttribute($this->getAttribute($context["pro"], "idCategorie", []), "nom", [])]);
                // line 211
                echo "                                    <li><a class=\"justify-content-between d-flex\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_domaine", ["domaine" => $this->getAttribute($this->getAttribute($context["pro"], "idCategorie", []), "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pro"], "idCategorie", []), "nom", []), "html", null, true);
                echo "<p></p><span>
                                        ";
                // line 212
                $context["i"] = 0;
                // line 213
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["proj"]) ? $context["proj"] : $this->getContext($context, "proj")));
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 214
                    echo "                                                    ";
                    if (($this->getAttribute($this->getAttribute($context["pro"], "idCategorie", []), "nom", []) == $this->getAttribute($this->getAttribute($context["project"], "idCategorie", []), "nom", []))) {
                        // line 215
                        echo "                                                        ";
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 216
                        echo "                                                    ";
                    }
                    // line 217
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "
                                                ";
                // line 219
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "

                                         </span></a></li>
                                ";
            }
            // line 223
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "
                        </ul>
                    </div>


                </div></div>


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 235
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 236
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
           <script src=\"";
        // line 248
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
        return "projet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 248,  544 => 247,  540 => 246,  536 => 245,  532 => 244,  528 => 243,  524 => 242,  520 => 241,  516 => 240,  512 => 239,  508 => 238,  504 => 237,  499 => 236,  490 => 235,  472 => 225,  465 => 223,  458 => 219,  455 => 218,  449 => 217,  446 => 216,  443 => 215,  440 => 214,  435 => 213,  433 => 212,  426 => 211,  423 => 210,  420 => 209,  415 => 208,  413 => 207,  403 => 199,  392 => 194,  388 => 193,  381 => 191,  376 => 189,  369 => 185,  362 => 181,  358 => 180,  343 => 169,  337 => 166,  334 => 165,  331 => 164,  328 => 163,  325 => 162,  322 => 161,  319 => 160,  316 => 159,  313 => 158,  309 => 157,  254 => 105,  236 => 90,  187 => 44,  183 => 43,  179 => 42,  170 => 35,  161 => 34,  138 => 19,  129 => 18,  117 => 14,  113 => 13,  109 => 12,  105 => 11,  101 => 10,  97 => 9,  93 => 8,  89 => 7,  84 => 6,  75 => 5,  64 => 3,  55 => 2,  33 => 1,);
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
                                Liste des Projet
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Liste des Projet</a></p>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}

        {% block content %}



            <div class=\"row justify-content-center d-flex\">
                <div class=\"col-lg-8 post-list\">
                    <center>
                        <ul class=\"cat-list\">
                            <li><a href=\"{{ path('projet_index_domaine',{'idEtat': 1}) }}\" > en attent   </a></li>
                            <li><a href=\"{{ path('projet_index_domaine',{'idEtat': 2}) }}\" > activ </a></li>
                            <li><a href=\"{{ path('projet_index_domaine',{'idEtat': 3}) }}\" > terminer </a></li>

                        </ul>
                    </center>
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
                            var searchRequest1 = null;



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
                                    if (searchRequest1 != null)
                                        searchRequest1.abort();
                                    searchRequest1 = \$.ajax({
                                        type: \"GET\",
                                        url: \"{{ path('recherch_ajaxm') }}\",
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
                                                                console.log(value[0]);
                                                                var id=value[0];
                                                                var path = '{{ path('projet_show',{'idProjet': 'x'}) }}';
                                                                path = path.replace(\"x\",id);



                                                                entitySelector.append(

                                                                    \" <div class='single-post d-flex flex-row' style='background-color: #CFD8DC '>\"+
                                                                    \"<div class='thumb'>\"+
                                                                    \"<img src='imgs/\"+ value[12] +\"' alt='' style='height: 80px'>\"+

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

                        <div class=\"single-post d-flex flex-row\"style=\"background-color: {{ a }} \">
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
                                        <li><a href=\"{{ path('projet_show',{'idProjet':projet.idProjet}) }}\">Affich</a></li>
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

                    {% endfor %}
                    </div>
                    <a class=\"text-uppercase loadmore-btn mx-auto d-block\" href=\"category.html\">Load More job Posts</a>

                </div>
                <div class=\"col-lg-4 sidebar\">
                    <div class=\"single-slidebar\">
                        <h4>Jobs by Location</h4>
                        <ul class=\"cat-list\">
                            {% set newArray=[] %}
                            {% for pro in proj %}
                                {% if pro.idCategorie.nom not in newArray %}
                                    {% set newArray=newArray | merge ([pro.idCategorie.nom]) %}
                                    <li><a class=\"justify-content-between d-flex\" href=\"{{ path('projet_domaine',{'domaine':pro.idCategorie.id}) }}\">{{ pro.idCategorie.nom }}<p></p><span>
                                        {% set i=0 %}
                                                {% for project in proj %}
                                                    {% if pro.idCategorie.nom == project.idCategorie.nom %}
                                                        {% set i=i+1 %}
                                                    {% endif %}
                                                {% endfor %}

                                                {{ i }}

                                         </span></a></li>
                                {% endif %}

                            {% endfor %}

                        </ul>
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
", "projet/index.html.twig", "C:\\wamp64\\www\\pidev2\\app\\Resources\\views\\projet\\index.html.twig");
    }
}
