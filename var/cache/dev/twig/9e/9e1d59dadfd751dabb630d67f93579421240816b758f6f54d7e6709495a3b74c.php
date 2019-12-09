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

/* inscriptions/affichformations.html.twig */
class __TwigTemplate_fc354d18ddcc4a215a1cfe4fd64eb68a175edd02f9e9a4a1318fe3f5fc30027e extends \Twig\Template
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
        return "@User/Default/userhome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscriptions/affichformations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscriptions/affichformations.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/userhome.html.twig", "inscriptions/affichformations.html.twig", 1);
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

    // line 15
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 16
        echo "    <section class=\"banner-area relative\" id=\"home\">
        <div class=\"overlay overlay-bg\"></div>
        <div class=\"container\">
            <div class=\"row d-flex align-items-center justify-content-center\">
                <div class=\"about-content col-lg-12\">
                    <h1 class=\"text-white\">
                        <p> liste des Formation </p>


                    </h1>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "<section class=\"counter \" >
    <div align=\"center\">
        <table class=\"t\">
            <tr>
                <td>
                    <div class=\"counter-text\">
                        <h3>";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</h3>
                        <p>Formations</p>
                    </div>
                </td>
                <td>
                    <div class=\"counter-text\">
                        <h3>";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["totaldomaines"]) ? $context["totaldomaines"] : $this->getContext($context, "totaldomaines")), "html", null, true);
        echo "</h3>
                        <p>Domaines</p>
                    </div>
                </td>


            </tr>
        </table>
    </div>
</section>
<br>
<div >
    <div class=\" col-8\">

        <h2>Recherche formation </h2>
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
        // line 71
        echo "                <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                </ul>
            </li>
        </ul>

        <script type=\"text/javascript\" src=\"";
        // line 76
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
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_search_user");
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
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_show_all", ["ref" => "x"]);
        echo "'
                                                    path = path.replace(\"x\",id);



                                                    entitySelector.append(

                                                        \" <div class='single-post d-flex flex-row' style='background-color: #f5c6cb '>\"+
                                                        \"<div class='thumb col-1'>\"+

                                                        \"</div>\"+
                                                        \" <div class='details' >\"+
                                                        \"<div class='title d-flex flex-row justify-content-between'>\"+
                                                        \" <div class='titles'>\"+
                                                        \" <a href='\"+ path + \"'><h4>\"+ value[2] + \"</h4></a>\"+
                                                        \" <label>\"+ value[3] + \"</label>\"+\"<br>\"+
                                                        \" <label>\"+ value[4] + \"</label>\"+
                                                        \" </div>\"+
                                                        \" <ul class='btns '>\"+
                                                        \"<li><a href='\"+ path + \"' class='submit'>Afficher</a></li>\"+
                                                        \"</ul>\"+
                                                        \"</div>\"+

                                                        \"<label><h6>Date Debut :</h6> </label> \"+ value[5] + \"\"+\"<br>\"+
                                                        \"<label><h6>Date Fin :</h6> </label> \"+ value[6] + \"\"+
                                                        \" <h5><label>Duree : </label>\"+ value[7] + \" HEURES</h5>\"+
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
    </div>
</div>
<br>
<div class=\"row justify-content-center d-flex\" >
    <div class=\"col-lg-8 post-list\">


        ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 164
            echo "        ";
            $context["test"] = 0;
            // line 165
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")));
            foreach ($context['_seq'] as $context["_key"] => $context["inscriptio"]) {
                // line 166
                echo "            ";
                if ((($this->getAttribute($context["formation"], "ref", []) == $this->getAttribute($this->getAttribute($context["inscriptio"], "formationRef", []), "ref", [])) && ($this->getAttribute($context["inscriptio"], "etat", []) == 2))) {
                    // line 167
                    echo "                ";
                    $context["test"] = 1;
                    // line 168
                    echo "
            ";
                } elseif ((($this->getAttribute(                // line 169
$context["formation"], "ref", []) == $this->getAttribute($this->getAttribute($context["inscriptio"], "formationRef", []), "ref", [])) && ($this->getAttribute($context["inscriptio"], "etat", []) == 1))) {
                    // line 170
                    echo "                ";
                    $context["test"] = 2;
                    // line 171
                    echo "            ";
                }
                // line 172
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscriptio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "
        ";
            // line 174
            if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) == 1)) {
                // line 175
                echo "        <div class=\"single-post d-flex flex-row\"  style=\"background-color: #F3FFFA\">
            ";
            } elseif ((            // line 176
(isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) == 2)) {
                // line 177
                echo "            <div class=\"single-post d-flex flex-row\"  style=\"background-color: #FFF3E0 \">
                ";
            } else {
                // line 179
                echo "
                <div class=\"single-post d-flex flex-row\" >
                    ";
            }
            // line 182
            echo "                    ";
            // line 186
            echo "
                    <div class=\"thumb col-2\">
                        <center>       <img src=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "image", []), "html", null, true);
            echo "\" alt=\"\" height=\"100px\" ></center>

                    </div>
                    <div class=\"details\">
                        <div class=\"title d-flex flex-row justify-content-between\">
                            <div class=\"titles\">
                                <a href=\"single.html\"><h4>";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "nom", []), "html", null, true);
            echo "</h4></a>
                                <h6>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "entreprise", []), "fullname", []), "html", null, true);
            echo "</h6>
                                <h6>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", []), "html", null, true);
            echo "</h6>
                            </div>
                            <ul class=\"btns \">
                                <li><a href=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_show_all", ["ref" => $this->getAttribute($context["formation"], "ref", [])]), "html", null, true);
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
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "duree", []), "html", null, true);
            echo " heures</label> <br>

                       ";
            // line 210
            echo "
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "            </div>
            <div class=\"col-lg-4 sidebar\">
                <div class=\"single-slidebar\">
                    <h4>Formations par domaine</h4>
                    <ul class=\"cat-list\">
                        ";
        // line 219
        $context["newArray"] = [];
        // line 220
        echo "                        ";
        $context["i"] = 0;
        // line 221
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 222
            echo "

                            ";
            // line 224
            if (!twig_in_filter($this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", []), (isset($context["newArray"]) ? $context["newArray"] : $this->getContext($context, "newArray")))) {
                // line 225
                echo "                                ";
                $context["newArray"] = twig_array_merge((isset($context["newArray"]) ? $context["newArray"] : $this->getContext($context, "newArray")), [0 => $this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", [])]);
                // line 226
                echo "                                <li><a class=\"justify-content-between d-flex\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout_filtre", ["domaine" => $this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "id", [])]), "html", null, true);
                echo "\"><p>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", []), "html", null, true);
                echo "</p><span>
                                     ";
                // line 227
                $context["i"] = 0;
                // line 228
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")));
                foreach ($context['_seq'] as $context["_key"] => $context["formationn"]) {
                    // line 229
                    echo "                                                ";
                    if (($this->getAttribute($this->getAttribute($context["formation"], "domaine", []), "nomDomaine", []) == $this->getAttribute($this->getAttribute($context["formationn"], "domaine", []), "nomDomaine", []))) {
                        // line 230
                        echo "                                                    ";
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 231
                        echo "                                                ";
                    }
                    // line 232
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formationn'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "                                            ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "

                                </span></a></li>

                            ";
            }
            // line 238
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                    </ul>
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
                                <a class=\"primary-btn\" href=\"#\"> mes inscriptions</a>
                                <a class=\"primary-btn\" href=\"#\"> mes formations</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 271
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 272
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo " \" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscriptions/affichformations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 284,  581 => 283,  577 => 282,  573 => 281,  569 => 280,  565 => 279,  561 => 278,  557 => 277,  553 => 276,  549 => 275,  545 => 274,  541 => 273,  536 => 272,  527 => 271,  486 => 239,  480 => 238,  471 => 233,  465 => 232,  462 => 231,  459 => 230,  456 => 229,  451 => 228,  449 => 227,  442 => 226,  439 => 225,  437 => 224,  433 => 222,  428 => 221,  425 => 220,  423 => 219,  416 => 214,  407 => 210,  402 => 207,  395 => 203,  388 => 199,  382 => 196,  378 => 195,  374 => 194,  364 => 188,  360 => 186,  358 => 182,  353 => 179,  349 => 177,  347 => 176,  344 => 175,  342 => 174,  339 => 173,  333 => 172,  330 => 171,  327 => 170,  325 => 169,  322 => 168,  319 => 167,  316 => 166,  311 => 165,  308 => 164,  304 => 163,  253 => 115,  234 => 99,  208 => 76,  201 => 71,  172 => 44,  163 => 38,  155 => 32,  146 => 31,  122 => 16,  113 => 15,  100 => 12,  96 => 11,  92 => 10,  88 => 9,  84 => 8,  80 => 7,  76 => 6,  72 => 5,  68 => 4,  63 => 3,  54 => 2,  32 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/styleajout.css') }}\">

{% endblock %}
{% block banner %}
    <section class=\"banner-area relative\" id=\"home\">
        <div class=\"overlay overlay-bg\"></div>
        <div class=\"container\">
            <div class=\"row d-flex align-items-center justify-content-center\">
                <div class=\"about-content col-lg-12\">
                    <h1 class=\"text-white\">
                        <p> liste des Formation </p>


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
                        <h3>{{ total }}</h3>
                        <p>Formations</p>
                    </div>
                </td>
                <td>
                    <div class=\"counter-text\">
                        <h3>{{ totaldomaines }}</h3>
                        <p>Domaines</p>
                    </div>
                </td>


            </tr>
        </table>
    </div>
</section>
<br>
<div >
    <div class=\" col-8\">

        <h2>Recherche formation </h2>
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
                            url: \"{{ path('ajax_search_user') }}\",
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

                                                    var path = '{{ path('formations_show_all',{'ref': 'x'}) }}'
                                                    path = path.replace(\"x\",id);



                                                    entitySelector.append(

                                                        \" <div class='single-post d-flex flex-row' style='background-color: #f5c6cb '>\"+
                                                        \"<div class='thumb col-1'>\"+

                                                        \"</div>\"+
                                                        \" <div class='details' >\"+
                                                        \"<div class='title d-flex flex-row justify-content-between'>\"+
                                                        \" <div class='titles'>\"+
                                                        \" <a href='\"+ path + \"'><h4>\"+ value[2] + \"</h4></a>\"+
                                                        \" <label>\"+ value[3] + \"</label>\"+\"<br>\"+
                                                        \" <label>\"+ value[4] + \"</label>\"+
                                                        \" </div>\"+
                                                        \" <ul class='btns '>\"+
                                                        \"<li><a href='\"+ path + \"' class='submit'>Afficher</a></li>\"+
                                                        \"</ul>\"+
                                                        \"</div>\"+

                                                        \"<label><h6>Date Debut :</h6> </label> \"+ value[5] + \"\"+\"<br>\"+
                                                        \"<label><h6>Date Fin :</h6> </label> \"+ value[6] + \"\"+
                                                        \" <h5><label>Duree : </label>\"+ value[7] + \" HEURES</h5>\"+
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
    </div>
</div>
<br>
<div class=\"row justify-content-center d-flex\" >
    <div class=\"col-lg-8 post-list\">


        {% for formation in formations %}
        {% set test = 0 %}
        {% for inscriptio in inscription %}
            {% if formation.ref== inscriptio.formationRef.ref  and inscriptio.etat == 2 %}
                {% set test = 1 %}

            {% elseif formation.ref== inscriptio.formationRef.ref  and inscriptio.etat == 1 %}
                {% set test = 2 %}
            {% endif %}
        {% endfor %}

        {% if test == 1 %}
        <div class=\"single-post d-flex flex-row\"  style=\"background-color: #F3FFFA\">
            {% elseif test == 2 %}
            <div class=\"single-post d-flex flex-row\"  style=\"background-color: #FFF3E0 \">
                {% else %}

                <div class=\"single-post d-flex flex-row\" >
                    {% endif %}
                    {#  {% if inscription.etat == 2 %}
                      <div class=\"single-post d-flex flex-row\" style=\"background-color: #ffe8a1\" >
                          {% elseif inscription.etat == 1 %}
                              <div class=\"single-post d-flex flex-row\" style=\"background-color:#4e555b\" >#}

                    <div class=\"thumb col-2\">
                        <center>       <img src=\"{{ asset('images/') }}{{ formation.image }}\" alt=\"\" height=\"100px\" ></center>

                    </div>
                    <div class=\"details\">
                        <div class=\"title d-flex flex-row justify-content-between\">
                            <div class=\"titles\">
                                <a href=\"single.html\"><h4>{{ formation.nom }}</h4></a>
                                <h6>{{ formation.entreprise.fullname }}</h6>
                                <h6>{{ formation.domaine.nomDomaine }}</h6>
                            </div>
                            <ul class=\"btns \">
                                <li><a href=\"{{ path('formations_show_all', { 'ref': formation.ref }) }}\">Afficher</a></li>
                            </ul>
                        </div>
                        <p>
                            {{ formation.description }}
                        </p>


                        <label class=\"address\"><span class=\"lnr lnr-map\"></span> Duree : </label><label>{{ formation.duree }} heures</label> <br>

                       {# <label class=\"address\"><span class=\"lnr lnr-database\"></span> Nbres inscrits : </label><label>{{ formation.nombres }} </label>#}

                    </div>
                </div>
                {% endfor %}
            </div>
            <div class=\"col-lg-4 sidebar\">
                <div class=\"single-slidebar\">
                    <h4>Formations par domaine</h4>
                    <ul class=\"cat-list\">
                        {% set newArray = [] %}
                        {% set i=0 %}
                        {% for formation in domain %}


                            {% if formation.domaine.nomDomaine not in newArray %}
                                {% set newArray = newArray|merge([formation.domaine.nomDomaine]) %}
                                <li><a class=\"justify-content-between d-flex\" href=\"{{ path('ajout_filtre', { 'domaine': formation.domaine.id }) }}\"><p>{{ formation.domaine.nomDomaine }}</p><span>
                                     {% set i=0  %}
                                            {% for formationn in domain %}
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
                                <a class=\"primary-btn\" href=\"#\"> mes inscriptions</a>
                                <a class=\"primary-btn\" href=\"#\"> mes formations</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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
", "inscriptions/affichformations.html.twig", "C:\\wamp64\\www\\pidev2\\app\\Resources\\views\\inscriptions\\affichformations.html.twig");
    }
}
