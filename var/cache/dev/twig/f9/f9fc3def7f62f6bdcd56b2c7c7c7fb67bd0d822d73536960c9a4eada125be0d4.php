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

/* projet/filtre.html.twig */
class __TwigTemplate_f864d5fe016664f3a18796b2f039c1928893d46de42fa57e2d19827a0ca18c5c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/filtre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/filtre.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/entreprisehome.html.twig", "projet/filtre.html.twig", 1);
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
                                Liste des PROJET
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Liste des PROJET</a></p>
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
        echo "    <br><br>
    <center><div class=\"row justify-content-center d-flex\">
        <div class=\" post-list\">
            <ul class=\"cat-list\">
                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show_invest");
        echo "\" id=\"mesInv\" value=\"ll\">mes investment de projet </a></li>
                <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show_mesprojet_invest");
        echo "\" id=\"mesProjInv\" value=\"llllll\">mes Projets investment </a></li>
            </ul>
        </div></div></center>

    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#mesProjInv\").click(function() {
                var minlength = 3;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
               // if (value.length >= minlength) {

                   // \$(\"#hide\").hide('fast');

              //  } else {
                //    \$(\"#hide\").show();
               // }

            });
        });
    </script>






























    <div class=\"album py-5 bg-light\" id=\"hide\" >
        <div class=\"container\">
            <div class=\"post-container\">
                <div class=\"row\">
                    <section class=\"featured section-padding\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <br><br>
                                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 104
            echo "                                    <br><br>
                                    <div class=\"card mb-3 col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <h3 class=\"card-header\"> ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nom_projet", []), "html", null, true);
            echo "</h3><br>
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "fullname", []), "html", null, true);
            echo "</h5><br>
                                            <h6 class=\"card-subtitle text-muted\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nom", []), "html", null, true);
            echo "</h6>
                                        </div>
                                        <img style=\"height: 200px; width: 100%; display: block;\" src=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgs/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "Image", []), "html", null, true);
            echo "\">
                                        <div class=\"card-body\">
                                            <p class=\"card-text\"></p>
                                        </div>
                                        <ul class=\"list-group list-group-flush\">

                                            <li class=\"list-group-item\"><label class=\"text-muted\">Montant </label> <br>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "montant", []), "html", null, true);
            echo "</li>
                                            <li class=\"list-group-item\"><label class=\"text-muted\">date_invesstissement  </label> <br>";
            // line 118
            if ($this->getAttribute($context["projet"], "date_invesstissement", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "date_invesstissement", []), "Y-m-d"), "html", null, true);
            }
            echo "</li>
                                        </ul>

                                    </div>
<div ></div>

                                   ";
            // line 155
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "
                            </div>
                        </div>

                    </section>



                </div>

            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 173
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo " \" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
     <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/filtre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 185,  378 => 184,  374 => 183,  370 => 182,  366 => 181,  362 => 180,  358 => 179,  354 => 178,  350 => 177,  346 => 176,  342 => 175,  338 => 174,  333 => 173,  324 => 172,  299 => 156,  293 => 155,  282 => 118,  278 => 117,  268 => 111,  263 => 109,  259 => 108,  254 => 106,  250 => 104,  246 => 103,  180 => 40,  176 => 39,  170 => 35,  161 => 34,  138 => 19,  129 => 18,  117 => 14,  113 => 13,  109 => 12,  105 => 11,  101 => 10,  97 => 9,  93 => 8,  89 => 7,  84 => 6,  75 => 5,  64 => 3,  55 => 2,  33 => 1,);
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
                                Liste des PROJET
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Liste des PROJET</a></p>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}

{% block content %}
    <br><br>
    <center><div class=\"row justify-content-center d-flex\">
        <div class=\" post-list\">
            <ul class=\"cat-list\">
                <li><a href=\"{{ path('projet_show_invest') }}\" id=\"mesInv\" value=\"ll\">mes investment de projet </a></li>
                <li><a href=\"{{ path('projet_show_mesprojet_invest') }}\" id=\"mesProjInv\" value=\"llllll\">mes Projets investment </a></li>
            </ul>
        </div></div></center>

    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#mesProjInv\").click(function() {
                var minlength = 3;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
               // if (value.length >= minlength) {

                   // \$(\"#hide\").hide('fast');

              //  } else {
                //    \$(\"#hide\").show();
               // }

            });
        });
    </script>






























    <div class=\"album py-5 bg-light\" id=\"hide\" >
        <div class=\"container\">
            <div class=\"post-container\">
                <div class=\"row\">
                    <section class=\"featured section-padding\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <br><br>
                                {% for projet in list %}
                                    <br><br>
                                    <div class=\"card mb-3 col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <h3 class=\"card-header\"> {{ projet.nom_projet }}</h3><br>
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">{{ projet.fullname }}</h5><br>
                                            <h6 class=\"card-subtitle text-muted\">{{ projet.nom }}</h6>
                                        </div>
                                        <img style=\"height: 200px; width: 100%; display: block;\" src=\"{{ asset('imgs/') }}{{ projet.Image }}\">
                                        <div class=\"card-body\">
                                            <p class=\"card-text\"></p>
                                        </div>
                                        <ul class=\"list-group list-group-flush\">

                                            <li class=\"list-group-item\"><label class=\"text-muted\">Montant </label> <br>{{ projet.montant }}</li>
                                            <li class=\"list-group-item\"><label class=\"text-muted\">date_invesstissement  </label> <br>{% if projet.date_invesstissement %}{{ projet.date_invesstissement|date('Y-m-d') }}{% endif %}</li>
                                        </ul>

                                    </div>
<div ></div>

                                   {# <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4 card border-danger mb-3\"  style=\"max-width: 20rem;\">
                                        <div class=\"featured-box\">
                                            <figure>
                                                <div class=\"homes-tag featured\">{{ projet.nom_projet }}</div>
                                                <div class=\"homes-tag rent\"><i class=\"lni-heart\"></i>{{ projet.fullname }}</div>

                                                <a ><img class=\"img-fluid\" src=\"{{ asset('imgs/') }}{{ projet.Image }}\"></a>
                                            </figure>
                                            <div class=\"content-wrapper\">
                                                <div class=\"feature-content\">
                                                    <h4><a >{{ projet.montant }}</a></h4>
                                                    <p class=\"listing-tagline\">{{ projet.nom }}</p>
                                                    <div class=\"meta-tag\">
                                                        <div class=\"listing-review\">
                                                            <span class=\"review-avg\">{% if projet.date_invesstissement %}{{ projet.date_invesstissement|date('Y-m-d') }}{% endif %}</span>

                                                        </div>


                                                    </div>
                                                </div>
                                                <div class=\"listing-bottom clearfix\">
                                                    <div class=\"btn-group\">



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>#}
                                {% endfor %}

                            </div>
                        </div>

                    </section>



                </div>

            </div>
        </div>
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
 {% endblock %}", "projet/filtre.html.twig", "C:\\wamp64\\www\\pidev2\\app\\Resources\\views\\projet\\filtre.html.twig");
    }
}
