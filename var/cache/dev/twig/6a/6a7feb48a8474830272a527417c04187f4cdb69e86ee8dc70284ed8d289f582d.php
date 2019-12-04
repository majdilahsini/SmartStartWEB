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

/* formations/indexall.html.twig */
class __TwigTemplate_b0e7fcf5c0d40e452105641ef8e32f5601b380abfb36e16583e1f3668b14af4b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/indexall.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/indexall.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/entreprisehome.html.twig", "formations/indexall.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"";
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
                          liste des Formation
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
    <div >
    <div class=\"col-8\">


            <h2>Recherche formation</h2>

            <div class=\"sidebar-search\">

                <div class=\"input-group custom-search-form\">

                    <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Taper formation \">
                </div>
                <!-- /input-group -->
            </div>
            <ul class=\"nav\" id=\"side-menu\">
                <li>
                    ";
        // line 83
        echo "                    <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                    </ul>
                </li>
            </ul>

            <script type=\"text/javascript\" src=\"";
        // line 88
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
                        if (value.length >=minlength){
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
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_search_all");
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
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_show", ["ref" => "x"]);
        echo "'
                                                        path = path.replace(\"x\",id);



                                                        entitySelector.append(

                                                            \"<table class='table table-hover'>\"+
                                                            \"<tr style='color: saddlebrown'>\"+
                                                            \"<th>\"+\"nom\"+\"</th>\"+
                                                            \"<th>\"+\"domaine \"+\"</th>\"+
                                                            \"<th>\"+\"description\"+\"</th>\"+
                                                            \"<th>\"+\"date debut\"+\"</th>\"+
                                                            \"<th>\"+\"date fin \"+\"</th>\"+
                                                            \"<th>\"+\"nombres\"+\"</th>\"+
                                                            \"<th>\"+\"Action\"+\"</th>\"+\"<tr>\"
                                                            +\"<tr class='table-info'>\"+

                                                            \"<td>\" +value[1]+\"</td>\"+
                                                            \"<td>\" +value[2]+\"</td>\"+
                                                            \"<td>\" +value[3]+\"</td>\"+
                                                            \"<td>\" +value[6]+\"</td>\"+
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
    </div><br><br>

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
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 182
            echo "        ";
            if (($this->getAttribute($context["formation"], "etatFormation", []) == 1)) {
                // line 183
                echo "            ";
                if (($this->getAttribute($this->getAttribute($context["formation"], "entreprise", []), "id", []) == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                    // line 184
                    echo "        ";
                    $context["b"] = "#9fcdff";
                    // line 185
                    echo "        <div class=\"single-post d-flex flex-row\"  style=\"background-color:";
                    echo twig_escape_filter($this->env, (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "html", null, true);
                    echo "\" >
            ";
                } else {
                    // line 187
                    echo "                <div class=\"single-post d-flex flex-row\" >
                    ";
                }
                // line 189
                echo "                <div class=\"thumb col-2\">
                    <center>  <img src=\"";
                // line 190
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "image", []), "html", null, true);
                echo "\" alt=\"\" height=\"100px\" ></center>

                </div>
                <div class=\"details\">
                    <div class=\"title d-flex flex-row justify-content-between\">
                        <div class=\"titles\">
                            <a href=\"single.html\"><h4>";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "nom", []), "html", null, true);
                echo "</h4></a>
                            <h6>";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "entreprise", []), "fullname", []), "html", null, true);
                echo "</h6>
                            <h6>";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", []), "html", null, true);
                echo "</h6>
                        </div>
                        <ul class=\"btns \">
                            <li><a href=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_show_alll", ["ref" => $this->getAttribute($context["formation"], "ref", [])]), "html", null, true);
                echo "\">Afficher</a></li>
                        </ul>
                    </div>
                    <p>
                        ";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "description", []), "html", null, true);
                echo "
                    </p>


                    <label class=\"address\"><span class=\"lnr lnr-map\"></span> Duree : </label><label>";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "duree", []), "html", null, true);
                echo " heures</label> <br>

                    <label class=\"address\"><span class=\"lnr lnr-database\"></span> Nbres inscrits : </label><label>";
                // line 211
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "nombres", []), "html", null, true);
                echo " </label>
                </div>
            </div>
            ";
            }
            // line 215
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "        </div>
    </div>
    <div class=\"col-lg-4 sidebar\">
        <div class=\"single-slidebar\">
            <h4>Formations par domaine</h4>
            <ul class=\"cat-list\">
                ";
        // line 222
        $context["newArray"] = [];
        // line 223
        echo "                ";
        $context["i"] = 0;
        // line 224
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 225
            echo "

                    ";
            // line 227
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", []), (isset($context["newArray"]) ? $context["newArray"] : $this->getContext($context, "newArray")))) {
                // line 228
                echo "                        ";
                $context["newArray"] = twig_array_merge((isset($context["newArray"]) ? $context["newArray"] : $this->getContext($context, "newArray")), [0 => $this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", [])]);
                // line 229
                echo "                        <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", []), "html", null, true);
                echo "</p><span>
                                     ";
                // line 230
                $context["i"] = 0;
                // line 231
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
                foreach ($context['_seq'] as $context["_key"] => $context["formationn"]) {
                    // line 232
                    echo "                                        ";
                    if (($this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", []) == $this->getAttribute($this->getAttribute($context["formationn"], "domaine", []), "nomDomaine", []))) {
                        // line 233
                        echo "                                            ";
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 234
                        echo "                                        ";
                    }
                    // line 235
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formationn'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 236
                echo "                                    ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "

                                </span></a></li>

                    ";
            }
            // line 241
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "            </ul>
        </div>

        <div class=\"single-slidebar\">
            <h4>Top rated job posts</h4>
            <div class=\"active-relatedjob-carusel\">
                <div class=\"single-rated\">
                    <img class=\"img-fluid\" src=\"img/r1.jpg\" alt=\"\">
                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                    <h6>Premium Labels Limited</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                    </p>
                    <h5>Job Nature: Full time</h5>
                    <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                    <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                    <a href=\"#\" class=\"btns text-uppercase\">Apply job</a>
                </div>
                <div class=\"single-rated\">
                    <img class=\"img-fluid\" src=\"img/r1.jpg\" alt=\"\">
                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                    <h6>Premium Labels Limited</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                    </p>
                    <h5>Job Nature: Full time</h5>
                    <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                    <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                    <a href=\"#\" class=\"btns text-uppercase\">Apply job</a>
                </div>
                <div class=\"single-rated\">
                    <img class=\"img-fluid\" src=\"img/r1.jpg\" alt=\"\">
                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                    <h6>Premium Labels Limited</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                    </p>
                    <h5>Job Nature: Full time</h5>
                    <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                    <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                    <a href=\"#\" class=\"btns text-uppercase\">Afficher plus</a>
                </div>
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
        // line 309
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_new");
        echo ">Ajouter une formation</a>
                        <a class=\"primary-btn\" href=";
        // line 310
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_index");
        echo ">Voir vos formations</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 372
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 373
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo " \" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
     <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formations/indexall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 385,  608 => 384,  604 => 383,  600 => 382,  596 => 381,  592 => 380,  588 => 379,  584 => 378,  580 => 377,  576 => 376,  572 => 375,  568 => 374,  563 => 373,  554 => 372,  537 => 310,  533 => 309,  464 => 242,  458 => 241,  449 => 236,  443 => 235,  440 => 234,  437 => 233,  434 => 232,  429 => 231,  427 => 230,  422 => 229,  419 => 228,  417 => 227,  413 => 225,  408 => 224,  405 => 223,  403 => 222,  395 => 216,  389 => 215,  382 => 211,  377 => 209,  370 => 205,  363 => 201,  357 => 198,  353 => 197,  349 => 196,  339 => 190,  336 => 189,  332 => 187,  326 => 185,  323 => 184,  320 => 183,  317 => 182,  313 => 181,  255 => 126,  236 => 110,  211 => 88,  204 => 83,  153 => 33,  144 => 32,  122 => 19,  113 => 18,  100 => 13,  96 => 12,  92 => 11,  88 => 10,  84 => 9,  80 => 8,  76 => 7,  72 => 6,  68 => 5,  63 => 4,  54 => 3,  32 => 1,);
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
                          liste des Formation
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
    <div >
    <div class=\"col-8\">


            <h2>Recherche formation</h2>

            <div class=\"sidebar-search\">

                <div class=\"input-group custom-search-form\">

                    <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Taper formation \">
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
                        if (value.length >=minlength){
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
                                url: \"{{ path('ajax_search_all') }}\",
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
                                                            \"<th>\"+\"nom\"+\"</th>\"+
                                                            \"<th>\"+\"domaine \"+\"</th>\"+
                                                            \"<th>\"+\"description\"+\"</th>\"+
                                                            \"<th>\"+\"date debut\"+\"</th>\"+
                                                            \"<th>\"+\"date fin \"+\"</th>\"+
                                                            \"<th>\"+\"nombres\"+\"</th>\"+
                                                            \"<th>\"+\"Action\"+\"</th>\"+\"<tr>\"
                                                            +\"<tr class='table-info'>\"+

                                                            \"<td>\" +value[1]+\"</td>\"+
                                                            \"<td>\" +value[2]+\"</td>\"+
                                                            \"<td>\" +value[3]+\"</td>\"+
                                                            \"<td>\" +value[6]+\"</td>\"+
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
    </div><br><br>

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
            {% if formation.entreprise.id  == id %}
        {% set b=\"#9fcdff\" %}
        <div class=\"single-post d-flex flex-row\"  style=\"background-color:{{ b }}\" >
            {% else %}
                <div class=\"single-post d-flex flex-row\" >
                    {% endif %}
                <div class=\"thumb col-2\">
                    <center>  <img src=\"{{ asset('images/') }}{{ formation.image }}\" alt=\"\" height=\"100px\" ></center>

                </div>
                <div class=\"details\">
                    <div class=\"title d-flex flex-row justify-content-between\">
                        <div class=\"titles\">
                            <a href=\"single.html\"><h4>{{ formation.nom }}</h4></a>
                            <h6>{{ formation.entreprise.fullname }}</h6>
                            <h6>{{ formation.domaine.nomDomaine }}</h6>
                        </div>
                        <ul class=\"btns \">
                            <li><a href=\"{{ path('formations_show_alll', { 'ref': formation.ref }) }}\">Afficher</a></li>
                        </ul>
                    </div>
                    <p>
                        {{ formation.description }}
                    </p>


                    <label class=\"address\"><span class=\"lnr lnr-map\"></span> Duree : </label><label>{{ formation.duree }} heures</label> <br>

                    <label class=\"address\"><span class=\"lnr lnr-database\"></span> Nbres inscrits : </label><label>{{ formation.nombres }} </label>
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
            <h4>Top rated job posts</h4>
            <div class=\"active-relatedjob-carusel\">
                <div class=\"single-rated\">
                    <img class=\"img-fluid\" src=\"img/r1.jpg\" alt=\"\">
                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                    <h6>Premium Labels Limited</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                    </p>
                    <h5>Job Nature: Full time</h5>
                    <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                    <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                    <a href=\"#\" class=\"btns text-uppercase\">Apply job</a>
                </div>
                <div class=\"single-rated\">
                    <img class=\"img-fluid\" src=\"img/r1.jpg\" alt=\"\">
                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                    <h6>Premium Labels Limited</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                    </p>
                    <h5>Job Nature: Full time</h5>
                    <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                    <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                    <a href=\"#\" class=\"btns text-uppercase\">Apply job</a>
                </div>
                <div class=\"single-rated\">
                    <img class=\"img-fluid\" src=\"img/r1.jpg\" alt=\"\">
                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                    <h6>Premium Labels Limited</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                    </p>
                    <h5>Job Nature: Full time</h5>
                    <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                    <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                    <a href=\"#\" class=\"btns text-uppercase\">Afficher plus</a>
                </div>
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
                        <a class=\"primary-btn\" href={{ path('formations_new') }}>Ajouter une formation</a>
                        <a class=\"primary-btn\" href={{ path('formations_index') }}>Voir vos formations</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        {# <table>
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
         </ul> #}
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
", "formations/indexall.html.twig", "C:\\wamp64\\www\\pidev\\app\\Resources\\views\\formations\\indexall.html.twig");
    }
}
