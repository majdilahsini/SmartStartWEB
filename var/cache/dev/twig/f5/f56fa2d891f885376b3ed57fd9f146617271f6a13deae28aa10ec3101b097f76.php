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

/* @Interviews/interview/afficherinterviewCTEST.html.twig */
class __TwigTemplate_843faf3cd85261f1fb5fcc1a7a4bc5a6b4ec1973ffa137663d938b570e224dfb extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Interviews/interview/afficherinterviewCTEST.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Interviews/interview/afficherinterviewCTEST.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Interviews/interview/afficherinterviewCTEST.html.twig", 1);
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

    // line 17
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 18
        echo "      <section class=\"banner-area relative\" id=\"home\">
          <div class=\"overlay overlay-bg\"></div>
          <div class=\"container\">
              <div class=\"row d-flex align-items-center justify-content-center\">
                  <div class=\"about-content col-lg-12\">
                      <h1 class=\"text-white\">
                          Mes entretiens
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
        echo "

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <h2>Recherche</h2>

            <div class=\"sidebar-search\">

                <div class=\"input-group custom-search-form\">

                    <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Par poste ou date(ex: 2019-01-02)\">
                </div>
                <!-- /input-group -->
            </div>
            <ul class=\"nav\" id=\"side-menu\">
                <li>
                    ";
        // line 51
        echo "                    <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                    </ul>
                </li>
            </ul><br><br><br><br>

            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

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
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_search_c");
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


                                                        var path1 = '";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_interview", ["refEnt" => "xx"]);
        echo "'
                                                        path1 = path1.replace(\"xx\",id);



                                                        entitySelector.append(
                                                            \"<div class='single-post d-flex flex-row'  style='background-color:#cbd4cc'>\"+
                                                            \" <div class='details'>\"+
                                                            \"<div class='title d-flex flex-row justify-content-between'>\"+
                                                            \"<div class='titles'>\"+
                                                            \"<h4>\"+value[1]+\"</h4>\"+
                                                            \"<label class='address'>\"+\"<span class='lnr lnr-bookmark'>\"+\"</span>\"+\" Poste : \"+\"</label>\"+\"<label>\"+ value[2]+\"</label>\"+ \"<br>\"+


                                                            \"</div>\"+
                                                            \"</div>\"+



                                                            \"<label class='address'>\"+\"<span class='lnr lnr-calendar-full'></span> Date : </label><label> \"+value[4]+\" </label> <br>\"+

                                                            \"<label class='address'><span class='lnr lnr-clock'></span> Heure : </label><label>\"+value[3]+\" </label>\"+
                                                            \"</div>\"+
                                                            \"<div class='d-flex flex-row-reverse '>\"+

                                                            \"<br><br>\"+\"<ul>\"+

                                                            \"<ul class='btns  ' >\"+
                                                            \"<li><a href='\"+ path1 + \"' >Effacer</a></li>\"+
                                                            \"</div>\"+
                                                            \"</div>\")
                                                        ;
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

            <br><br>
            <div id=\"hide\">
                <h3>LISTES DES ENTRETIENS</h3>
                <div class=\"row justify-content-center d-flex\" >
                    <div class=\"col-lg-8 post-list\">




                        ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 154
            echo "                            ";
            if (($this->getAttribute($context["e"], "etat", []) == 2)) {
                // line 155
                echo "                                ";
                $context["b"] = "#cbd4cc";
                // line 156
                echo "                            ";
            } elseif (($this->getAttribute($context["e"], "etat", []) == 1)) {
                // line 157
                echo "                                ";
                $context["b"] = "#bbff69";
                // line 158
                echo "                            ";
            }
            // line 159
            echo "                            <div class=\"single-post d-flex flex-row\"  style=\"background-color:";
            echo twig_escape_filter($this->env, (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "html", null, true);
            echo "\">

                                <div class=\"details\">
                                    <div class=\"title d-flex flex-row justify-content-between\">
                                        <div class=\"titles\">
                                            <h4>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "username", []), "html", null, true);
            echo "</h4>
                                            <label class=\"address\"><span class=\"lnr lnr-bookmark\"></span> Poste : </label><label> ";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "poste", []), "html", null, true);
            echo "</label> <br>


                                        </div>
                                    </div>



                                    <label class=\"address\"><span class=\"lnr lnr-calendar-full\"></span> Date : </label><label> ";
            // line 173
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "date_ent", []), "m/d/Y"), "html", null, true);
            echo " </label> <br>

                                    <label class=\"address\"><span class=\"lnr lnr-clock\"></span> Heure : </label><label>";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "heure_ent", []), "html", null, true);
            echo " </label>
                                </div>
                                <div class=\"d-flex flex-row-reverse \">

                                    <br><br>
                                    <ul>

                                        <a class=\"btn btn-danger\" href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_interview", ["refEnt" => $this->getAttribute($context["e"], "ref_ent", [])]), "html", null, true);
            echo "\" >Effacer</a>
                                    </ul> </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "
                    </div>
                    <div class=\"col-lg-4 sidebar\">








                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </section>
    <!-- End post Area -->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 211
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 212
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo " \" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
     <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Interviews/interview/afficherinterviewCTEST.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 224,  438 => 223,  434 => 222,  430 => 221,  426 => 220,  422 => 219,  418 => 218,  414 => 217,  410 => 216,  406 => 215,  402 => 214,  398 => 213,  393 => 212,  384 => 211,  350 => 186,  340 => 182,  330 => 175,  325 => 173,  314 => 165,  310 => 164,  301 => 159,  298 => 158,  295 => 157,  292 => 156,  289 => 155,  286 => 154,  282 => 153,  224 => 98,  204 => 81,  172 => 51,  153 => 33,  144 => 32,  122 => 18,  113 => 17,  100 => 13,  96 => 12,  92 => 11,  88 => 10,  84 => 9,  80 => 8,  76 => 7,  72 => 6,  68 => 5,  63 => 4,  54 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
                          Mes entretiens
                      </h1>
                  </div>
              </div>
          </div>
      </section>
  {% endblock %}

{% block content %}


    <div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <h2>Recherche</h2>

            <div class=\"sidebar-search\">

                <div class=\"input-group custom-search-form\">

                    <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Par poste ou date(ex: 2019-01-02)\">
                </div>
                <!-- /input-group -->
            </div>
            <ul class=\"nav\" id=\"side-menu\">
                <li>
                    {#  <a href=\"#\"> Entities<span class=\"fa arrow\"></span></a>#}
                    <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                    </ul>
                </li>
            </ul><br><br><br><br>

            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

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
                                url: \"{{ path('ajax_search_c') }}\",
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


                                                        var path1 = '{{ path('delete_interview', { 'refEnt': 'xx' }) }}'
                                                        path1 = path1.replace(\"xx\",id);



                                                        entitySelector.append(
                                                            \"<div class='single-post d-flex flex-row'  style='background-color:#cbd4cc'>\"+
                                                            \" <div class='details'>\"+
                                                            \"<div class='title d-flex flex-row justify-content-between'>\"+
                                                            \"<div class='titles'>\"+
                                                            \"<h4>\"+value[1]+\"</h4>\"+
                                                            \"<label class='address'>\"+\"<span class='lnr lnr-bookmark'>\"+\"</span>\"+\" Poste : \"+\"</label>\"+\"<label>\"+ value[2]+\"</label>\"+ \"<br>\"+


                                                            \"</div>\"+
                                                            \"</div>\"+



                                                            \"<label class='address'>\"+\"<span class='lnr lnr-calendar-full'></span> Date : </label><label> \"+value[4]+\" </label> <br>\"+

                                                            \"<label class='address'><span class='lnr lnr-clock'></span> Heure : </label><label>\"+value[3]+\" </label>\"+
                                                            \"</div>\"+
                                                            \"<div class='d-flex flex-row-reverse '>\"+

                                                            \"<br><br>\"+\"<ul>\"+

                                                            \"<ul class='btns  ' >\"+
                                                            \"<li><a href='\"+ path1 + \"' >Effacer</a></li>\"+
                                                            \"</div>\"+
                                                            \"</div>\")
                                                        ;
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

            <br><br>
            <div id=\"hide\">
                <h3>LISTES DES ENTRETIENS</h3>
                <div class=\"row justify-content-center d-flex\" >
                    <div class=\"col-lg-8 post-list\">




                        {% for e in list %}
                            {% if e.etat == 2 %}
                                {% set b=\"#cbd4cc\" %}
                            {% elseif e.etat == 1 %}
                                {% set b=\"#bbff69\" %}
                            {% endif %}
                            <div class=\"single-post d-flex flex-row\"  style=\"background-color:{{ b }}\">

                                <div class=\"details\">
                                    <div class=\"title d-flex flex-row justify-content-between\">
                                        <div class=\"titles\">
                                            <h4>{{ e.username }}</h4>
                                            <label class=\"address\"><span class=\"lnr lnr-bookmark\"></span> Poste : </label><label> {{ e.poste }}</label> <br>


                                        </div>
                                    </div>



                                    <label class=\"address\"><span class=\"lnr lnr-calendar-full\"></span> Date : </label><label> {{ e.date_ent  |date(\"m/d/Y\") }} </label> <br>

                                    <label class=\"address\"><span class=\"lnr lnr-clock\"></span> Heure : </label><label>{{ e.heure_ent  }} </label>
                                </div>
                                <div class=\"d-flex flex-row-reverse \">

                                    <br><br>
                                    <ul>

                                        <a class=\"btn btn-danger\" href=\"{{ path('delete_interview', { 'refEnt': e.ref_ent }) }}\" >Effacer</a>
                                    </ul> </div>
                            </div>
                        {% endfor %}

                    </div>
                    <div class=\"col-lg-4 sidebar\">








                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </section>
    <!-- End post Area -->



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
 {% endblock %}", "@Interviews/interview/afficherinterviewCTEST.html.twig", "C:\\wamp64\\www\\pidev2\\src\\InterviewsBundle\\Resources\\views\\interview\\afficherinterviewCTEST.html.twig");
    }
}
