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

/* formations/index.html.twig */
class __TwigTemplate_46f4c2a57a7dcecdcd6a31b2fbc2ef8e8ee176bc0b4d938dde9138925df2274d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/index.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/entreprisehome.html.twig", "formations/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/linearicons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap2.css.map"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styleajout.css"), "html", null, true);
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
        echo "      <section class=\"banner-area relative\" id=\"home\">
          <div class=\"overlay overlay-bg\"></div>
          <div class=\"container\">
              <div class=\"row d-flex align-items-center justify-content-center\">
                  <div class=\"about-content col-lg-12\">
                      <h1 class=\"text-white\">
                          Mes Formation
                      </h1>
                  </div>
              </div>
          </div>
      </section>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "    <section class=\"counter \" >
        <div align=\"center\">
            <table class=\"t\">
                <tr>
                    <td>
                        <div class=\"counter-text\">
                            <h3>1000</h3>
                            <p>Formations</p>
                        </div>
                    </td>
                    <td>
                        <div class=\"counter-text\">
                            <h3>207</h3>
                            <p>Domaines</p>
                        </div>
                    </td>
                    <td>
                        <div class=\"counter-text\">
                            <h3>700+</h3>
                            <p>Total Inscrits</p>
                        </div>
                    </td>
                    <td>
                        <div class=\"counter-text\">
                            <h3>802+</h3>
                            <p>Happy membres</p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <br>

    <div class=\"col-8\">

        <h2>Recherche formation</h2>
        <br>
        <div class=\"sidebar-search\">

            <div class=\"input-group custom-search-form\">

                <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Taper formation\">
            </div>
            <!-- /input-group -->
        </div>
        <ul class=\"nav\" id=\"side-menu\">
            <li>
                ";
        // line 82
        echo "                <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                </ul>
            </li>
        </ul>

        <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">
            jQuery(document).ready(function() {
                var searchRequest = null;
                \$(\"#search\").keyup(function() {
                    var minlength = 1;
                    var that = this;
                    var value = \$(this).val();
                    var entitySelector = \$(\"#entitiesNav\").html('');
                    if (value.length >= minlength ) {
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
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_search");
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
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_show", ["ref" => "x"]);
        echo "'
                                                    path = path.replace(\"x\",id);



                                                    entitySelector.append(
                                                        \"<table class='table table-hover'>\"+
                                                        \"<tr style='color: saddlebrown'>\"+
                                                        \"<th>\"+\"nom formation\"+\"</th>\"+
                                                        \"<th>\"+\"domaine \"+\"</th>\"+
                                                        \"<th>\"+\"description\"+\"</th>\"+
                                                        \"<th>\"+\"duree\"+\"</th>\"+
                                                        \"<th>\"+\"nombres\"+\"</th>\"+
                                                        \"<th>\"+\"Action\"+\"</th>\"+
                                                        +\"<tr>\"
                                                        +\"<tr class='table-info'>\"+

                                                        \"<td>\" +value[1]+\"</td>\"+
                                                        \"<td>\" +value[2]+\"</td>\"+
                                                        \"<td>\" +value[3]+\"</td>\"+
                                                        \"<td>\" +value[4]+\"</td>\"+
                                                        \"<td>\" +value[5]+\"</td>\"+


                                                        \"<td><ul><li><a href='\"+ path + \"'>Afficher</a></li></li></td>\"+

                                                        \"</table>\");
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
    </div>
    </div>
    <br>
    <div class=\"row justify-content-center d-flex\" >
        <div class=\"col-lg-8 post-list\">
            <div id=\"hide\">
            <ul class=\"cat-list\">
                <li><a href=\"#\">Recent</a></li>
                <li><a href=\"#\">Full Time</a></li>
                <li><a href=\"#\">Intern</a></li>
                <li><a href=\"#\">part Time</a></li>
            </ul>

            ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 179
            echo "            ";
            if (($this->getAttribute($context["formation"], "etatFormation", []) == 1)) {
                // line 180
                echo "            ";
                if (($this->getAttribute($context["formation"], "etatNombres", []) == 2)) {
                    // line 181
                    echo "            ";
                    $context["b"] = "#9fcdff";
                    // line 182
                    echo "            <div class=\"single-post d-flex flex-row\"  style=\"background-color:";
                    echo twig_escape_filter($this->env, (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "html", null, true);
                    echo "\">
                ";
                } elseif (($this->getAttribute(                // line 183
$context["formation"], "etatNombres", []) == 1)) {
                    // line 184
                    echo "                <div class=\"single-post d-flex flex-row\">
                    ";
                }
                // line 186
                echo "

                    <div class=\"thumb col-2\">
                        <center>  <img src=\"";
                // line 189
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "image", []), "html", null, true);
                echo "\" alt=\"\" height=\"100px\"  ></center>

                    </div>
                    <div class=\"details\">
                        <div class=\"title d-flex flex-row justify-content-between\">
                            <div class=\"titles\">
                                <a href=\"single.html\"><h4>";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "nom", []), "html", null, true);
                echo "</h4></a>
                                <h6>";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", []), "html", null, true);
                echo "</h6>
                            </div>
                            <ul class=\"btns \"  >
                                <li><a  href=\"";
                // line 199
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_show", ["ref" => $this->getAttribute($context["formation"], "ref", [])]), "html", null, true);
                echo "\">Afficher</a></li>
                            </ul>
                        </div>
                        <p>
                            ";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "description", []), "html", null, true);
                echo "
                        </p>
                        <label class=\"address\"><span class=\"lnr lnr-map\"></span> Duree : </label><label>";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "duree", []), "html", null, true);
                echo " heures</label> <br>

                        <label class=\"address\"><span class=\"lnr lnr-database\"></span> Nbres restants : </label><label>";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "nombres", []), "html", null, true);
                echo " </label>
                    </div>
                </div>
                ";
            }
            // line 211
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "            </div>
            </div>
            <div class=\"col-lg-4 sidebar\">
                <div class=\"single-slidebar\">
                    <h4>Formations par domaine</h4>
                    <ul class=\"cat-list\">
                        ";
        // line 218
        $context["newArray"] = [];
        // line 219
        echo "                        ";
        $context["i"] = 0;
        // line 220
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 221
            echo "

                            ";
            // line 223
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", []), (isset($context["newArray"]) ? $context["newArray"] : $this->getContext($context, "newArray")))) {
                // line 224
                echo "                                ";
                $context["newArray"] = twig_array_merge((isset($context["newArray"]) ? $context["newArray"] : $this->getContext($context, "newArray")), [0 => $this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", [])]);
                // line 225
                echo "                                <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", []), "html", null, true);
                echo "</p><span>
                                     ";
                // line 226
                $context["i"] = 0;
                // line 227
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
                foreach ($context['_seq'] as $context["_key"] => $context["formationn"]) {
                    // line 228
                    echo "                                                ";
                    if (($this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", []) == $this->getAttribute($this->getAttribute($context["formationn"], "domaine", []), "nomDomaine", []))) {
                        // line 229
                        echo "                                                    ";
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 230
                        echo "                                                ";
                    }
                    // line 231
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formationn'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 232
                echo "                                            ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "

                                </span></a></li>

                            ";
            }
            // line 237
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                    </ul>
                </div>

                <div class=\"single-slidebar\">
                    <h4>Top Formations inscrits</h4>

                    <div class=\"active-relatedjob-carusel\">
                        ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["top"]) ? $context["top"] : $this->getContext($context, "top")));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 246
            echo "
                            <div class=\"single-rated\">
                              <center>  <img src=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "image", []), "html", null, true);
            echo "\" height=\"250px\"  alt=\"\"> </center>
                                <a href=\"";
            // line 249
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_index");
            echo "\"><h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "nom", []), "html", null, true);
            echo "</h4></a>
                                <h6>";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["k"], "domaine", []), "nomDomaine", []), "html", null, true);
            echo "</h6>
                                <p> <h6>Description :</h6>
                                ";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "description", []), "html", null, true);
            echo " </p>
                                <p class=\"address\"><span class=\"lnr lnr-map\"></span> Duree : ";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "duree", []), "html", null, true);
            echo "</p>
                                <p class=\"address\"><span class=\"lnr lnr-database\"></span> Nombres restant : ";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "nombres", []), "html", null, true);
            echo "</p>
                                <a href=\"formations_show\" class=\"btns text-uppercase\">Afficher</a>

                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "
                    </div>

                </div>






            </div>
        </div>

    </div>
    </div>
    </div>
    </section>
    <!-- End post Area -->


    <!-- Start callto-action Area -->
    <section class=\"callto-action-area section-gap\" id=\"join\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content col-lg-9\">
                    <div class=\"title text-center\">
                        <a class=\"primary-btn\" href=";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_new");
        echo ">Ajouter une formation</a>
                        <a class=\"primary-btn\" href=";
        // line 286
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_index");
        echo ">Retour au haut du page </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 347
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 349
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 350
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo " \" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
     <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 362,  616 => 361,  612 => 360,  608 => 359,  604 => 358,  600 => 357,  596 => 356,  592 => 355,  588 => 354,  584 => 353,  580 => 352,  576 => 351,  571 => 350,  562 => 349,  551 => 347,  542 => 286,  538 => 285,  510 => 259,  499 => 254,  495 => 253,  491 => 252,  486 => 250,  480 => 249,  475 => 248,  471 => 246,  467 => 245,  458 => 238,  452 => 237,  443 => 232,  437 => 231,  434 => 230,  431 => 229,  428 => 228,  423 => 227,  421 => 226,  416 => 225,  413 => 224,  411 => 223,  407 => 221,  402 => 220,  399 => 219,  397 => 218,  389 => 212,  383 => 211,  376 => 207,  371 => 205,  366 => 203,  359 => 199,  353 => 196,  349 => 195,  339 => 189,  334 => 186,  330 => 184,  328 => 183,  323 => 182,  320 => 181,  317 => 180,  314 => 179,  310 => 178,  254 => 125,  235 => 109,  210 => 87,  203 => 82,  153 => 33,  144 => 32,  122 => 19,  113 => 18,  100 => 12,  96 => 11,  92 => 10,  88 => 9,  84 => 8,  80 => 7,  76 => 6,  72 => 5,  68 => 4,  63 => 3,  54 => 2,  32 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/styleajout.css') }}\">

{% endblock %}



  {% block banner %}
      <section class=\"banner-area relative\" id=\"home\">
          <div class=\"overlay overlay-bg\"></div>
          <div class=\"container\">
              <div class=\"row d-flex align-items-center justify-content-center\">
                  <div class=\"about-content col-lg-12\">
                      <h1 class=\"text-white\">
                          Mes Formation
                      </h1>
                  </div>
              </div>
          </div>
      </section>
  {% endblock %}
{% block content %}
    <section class=\"counter \" >
        <div align=\"center\">
            <table class=\"t\">
                <tr>
                    <td>
                        <div class=\"counter-text\">
                            <h3>1000</h3>
                            <p>Formations</p>
                        </div>
                    </td>
                    <td>
                        <div class=\"counter-text\">
                            <h3>207</h3>
                            <p>Domaines</p>
                        </div>
                    </td>
                    <td>
                        <div class=\"counter-text\">
                            <h3>700+</h3>
                            <p>Total Inscrits</p>
                        </div>
                    </td>
                    <td>
                        <div class=\"counter-text\">
                            <h3>802+</h3>
                            <p>Happy membres</p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <br>

    <div class=\"col-8\">

        <h2>Recherche formation</h2>
        <br>
        <div class=\"sidebar-search\">

            <div class=\"input-group custom-search-form\">

                <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Taper formation\">
            </div>
            <!-- /input-group -->
        </div>
        <ul class=\"nav\" id=\"side-menu\">
            <li>
                {#  <a href=\"#\"> Entities<span class=\"fa arrow\"></span></a>#}
                <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                </ul>
            </li>
        </ul>

        <script type=\"text/javascript\" src=\"{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js')}}\"></script>

        <script type=\"text/javascript\">
            jQuery(document).ready(function() {
                var searchRequest = null;
                \$(\"#search\").keyup(function() {
                    var minlength = 1;
                    var that = this;
                    var value = \$(this).val();
                    var entitySelector = \$(\"#entitiesNav\").html('');
                    if (value.length >= minlength ) {
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
                            url: \"{{ path('ajax_search') }}\",
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

                                                    var path = '{{ path('formations_show',{'ref': 'x'}) }}'
                                                    path = path.replace(\"x\",id);



                                                    entitySelector.append(
                                                        \"<table class='table table-hover'>\"+
                                                        \"<tr style='color: saddlebrown'>\"+
                                                        \"<th>\"+\"nom formation\"+\"</th>\"+
                                                        \"<th>\"+\"domaine \"+\"</th>\"+
                                                        \"<th>\"+\"description\"+\"</th>\"+
                                                        \"<th>\"+\"duree\"+\"</th>\"+
                                                        \"<th>\"+\"nombres\"+\"</th>\"+
                                                        \"<th>\"+\"Action\"+\"</th>\"+
                                                        +\"<tr>\"
                                                        +\"<tr class='table-info'>\"+

                                                        \"<td>\" +value[1]+\"</td>\"+
                                                        \"<td>\" +value[2]+\"</td>\"+
                                                        \"<td>\" +value[3]+\"</td>\"+
                                                        \"<td>\" +value[4]+\"</td>\"+
                                                        \"<td>\" +value[5]+\"</td>\"+


                                                        \"<td><ul><li><a href='\"+ path + \"'>Afficher</a></li></li></td>\"+

                                                        \"</table>\");
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
    </div>
    </div>
    <br>
    <div class=\"row justify-content-center d-flex\" >
        <div class=\"col-lg-8 post-list\">
            <div id=\"hide\">
            <ul class=\"cat-list\">
                <li><a href=\"#\">Recent</a></li>
                <li><a href=\"#\">Full Time</a></li>
                <li><a href=\"#\">Intern</a></li>
                <li><a href=\"#\">part Time</a></li>
            </ul>

            {% for formation in formations %}
            {% if formation.etatFormation ==1 %}
            {% if formation.etatNombres == 2 %}
            {% set b=\"#9fcdff\" %}
            <div class=\"single-post d-flex flex-row\"  style=\"background-color:{{ b }}\">
                {% elseif formation.etatNombres == 1 %}
                <div class=\"single-post d-flex flex-row\">
                    {% endif %}


                    <div class=\"thumb col-2\">
                        <center>  <img src=\"{{ asset('images/') }}{{ formation.image }}\" alt=\"\" height=\"100px\"  ></center>

                    </div>
                    <div class=\"details\">
                        <div class=\"title d-flex flex-row justify-content-between\">
                            <div class=\"titles\">
                                <a href=\"single.html\"><h4>{{ formation.nom }}</h4></a>
                                <h6>{{ formation.domaine.nomDomaine }}</h6>
                            </div>
                            <ul class=\"btns \"  >
                                <li><a  href=\"{{ path('formations_show', { 'ref': formation.ref }) }}\">Afficher</a></li>
                            </ul>
                        </div>
                        <p>
                            {{ formation.description }}
                        </p>
                        <label class=\"address\"><span class=\"lnr lnr-map\"></span> Duree : </label><label>{{ formation.duree }} heures</label> <br>

                        <label class=\"address\"><span class=\"lnr lnr-database\"></span> Nbres restants : </label><label>{{ formation.nombres }} </label>
                    </div>
                </div>
                {% endif %}
                {% endfor %}
            </div>
            </div>
            <div class=\"col-lg-4 sidebar\">
                <div class=\"single-slidebar\">
                    <h4>Formations par domaine</h4>
                    <ul class=\"cat-list\">
                        {% set newArray = [] %}
                        {% set i=0 %}
                        {% for formation in formations %}


                            {% if formation.domaine.nomDomaine not in newArray %}
                                {% set newArray = newArray|merge([formation.domaine.nomDomaine]) %}
                                <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>{{ formation.domaine.nomDomaine }}</p><span>
                                     {% set i=0 %}
                                            {% for formationn in formations %}
                                                {% if formation.domaine.nomDomaine == formationn.domaine.nomDomaine %}
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
                    <h4>Top Formations inscrits</h4>

                    <div class=\"active-relatedjob-carusel\">
                        {% for k in top %}

                            <div class=\"single-rated\">
                              <center>  <img src=\"{{ asset('images/') }}{{ k.image }}\" height=\"250px\"  alt=\"\"> </center>
                                <a href=\"{{ path('formations_index') }}\"><h4>{{ k.nom }}</h4></a>
                                <h6>{{ k.domaine.nomDomaine }}</h6>
                                <p> <h6>Description :</h6>
                                {{ k.description }} </p>
                                <p class=\"address\"><span class=\"lnr lnr-map\"></span> Duree : {{ k.duree }}</p>
                                <p class=\"address\"><span class=\"lnr lnr-database\"></span> Nombres restant : {{k.nombres}}</p>
                                <a href=\"formations_show\" class=\"btns text-uppercase\">Afficher</a>

                            </div>
                        {% endfor %}

                    </div>

                </div>






            </div>
        </div>

    </div>
    </div>
    </div>
    </section>
    <!-- End post Area -->


    <!-- Start callto-action Area -->
    <section class=\"callto-action-area section-gap\" id=\"join\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content col-lg-9\">
                    <div class=\"title text-center\">
                        <a class=\"primary-btn\" href={{ path('formations_new')}}>Ajouter une formation</a>
                        <a class=\"primary-btn\" href={{ path('formations_index') }}>Retour au haut du page </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {#  <table>
          <thead>
              <tr>
                  <th>Nom</th>
                  <th>Domaine</th>
                  <th>Description</th>
                  <th>Duree</th>
                  <th>Datedebut</th>
                  <th>Datefin</th>
                  <th>Prix</th>
                  <th>Adresse</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Image</th>
                  <th>Nombres</th>
                  <th>Etatformation</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          {% for formation in formations %}
              <tr>
                  <td>{{ formation.nom }}</td>
                  <td>{{ formation.domaine.nomDomaine }}</td>
                  <td>{{ formation.description }}</td>
                  <td>{{ formation.duree }}</td>
                  <td>{% if formation.dateDebut %}{{ formation.dateDebut|date('Y-m-d') }}{% endif %}</td>
                  <td>{% if formation.dateFin %}{{ formation.dateFin|date('Y-m-d') }}{% endif %}</td>
                  <td>{{ formation.prix }}</td>
                  <td>{{ formation.adresse }}</td>
                  <td>{{ formation.email }}</td>
                  <td>{{ formation.contact }}</td>
                  <td>{{ formation.image }}</td>
                  <td>{{ formation.nombres }}</td>
                  <td>{{ formation.etatFormation }}</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"{{ path('formations_show', { 'ref': formation.ref }) }}\">show</a>
                          </li>
                          <li>
                              <a href=\"{{ path('formations_edit', { 'ref': formation.ref }) }}\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          {% endfor %}
          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"{{ path('formations_new') }}\">Create a new formation</a>
          </li>
      </ul>#}

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
     <script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }} \" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
     <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
 {% endblock %}
", "formations/index.html.twig", "C:\\wamp64\\www\\pidev\\app\\Resources\\views\\formations\\index.html.twig");
    }
}
