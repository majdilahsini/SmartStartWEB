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

/* inscriptions/showformation.html.twig */
class __TwigTemplate_87a1519fcb25ab29fb07567c1dc2771c52288ef00c20bcad32655cf2e7711069 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscriptions/showformation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscriptions/showformation.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/userhome.html.twig", "inscriptions/showformation.html.twig", 1);
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

    // line 16
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 17
        echo "    <section class=\"banner-area relative\" id=\"home\">
        <div class=\"overlay overlay-bg\"></div>
        <div class=\"container\">
            <div class=\"row d-flex align-items-center justify-content-center\">
                <div class=\"about-content col-lg-12\">
                    <h1 class=\"text-white\">
                        <p>Détail Formation</p>
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
        echo "    <div style=\"background-color:#797979\">
        <br>
        <div class=\"card mb-3 container\">
            <h3 class=\"card-header\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nom", []), "html", null, true);
        echo "</h3>
            <div class=\"card-body\">
                <h6 class=\"card-subtitle text-muted\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "domaine", []), "nomDomaine", []), "html", null, true);
        echo "</h6>
            </div>
            <center> <img style=\"height: 250px; width: 30%; display: block;\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "image", []), "html", null, true);
        echo "\" alt=\"Card image\"></center>
            <div class=\"card-body\">
                <p class=\"card-text\"> <label><h5>Description : </h5></label>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description", []), "html", null, true);
        echo "</p>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"><label><h5>Duree : </h5></label> ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "duree", []), "html", null, true);
        echo " heures</li>
                <li class=\"list-group-item\"><label><h5>Date debut : </h5></label> ";
        // line 45
        if ($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "dateDebut", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "dateDebut", []), "Y-m-d"), "html", null, true);
        }
        echo "</li>
                <li class=\"list-group-item\"><label><h5>Date fin : </h5></label> ";
        // line 46
        if ($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "dateFin", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "dateFin", []), "Y-m-d"), "html", null, true);
        }
        echo "</li>
                <li class=\"list-group-item\"><label><h5>Prix : </h5></label> ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "prix", []), "html", null, true);
        echo " DT</li>
                <li class=\"list-group-item\"><label><h5>Adresse : </h5></label> ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "adresse", []), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><label><h5>Email : </h5></label> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "email", []), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><label><h5>Contact : </h5></label> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "contact", []), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><label><h5>Nbres inscrits : </h5></label> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nombres", []), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><label><h5>Etat formation : </h5></label> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "etatFormation", []), "html", null, true);
        echo "</li>
            </ul>



            <div class=\"card-body\">
                <div class=\"row align-items-center\">
                    <div class=\"col-3\">
                    </div>
                    <div class=\"col-4\">
                        <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_affich_all");
        echo "\" class=\"card-link\"> <button class=\"btn btn-outline-secondary\">Back to the list</button></a>

                    </div>


                    ";
        // line 68
        echo "                    ";
        if (((isset($context["count2"]) ? $context["count2"] : $this->getContext($context, "count2")) > 0)) {
            // line 69
            echo "                    <div class=\"col-4\">
                        <label class=\"input\">Annuler inscription</label>  ";
            // line 71
            echo "                    </div>
                    ";
        } else {
            // line 73
            echo "                    ";
            if (($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nombres", []) == 0)) {
                // line 74
                echo "                        <div class=\"col-4\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"formation est complet\">
                                Inscrire
                            </button>
                        </div>
                    ";
            } else {
                // line 80
                echo "                        <div class=\"col-4\">
                            <a  class=\"btn btn-outline-secondary\" data-toggle=\"modal\" data-target=\"#inscrip\" href=\"\"> Inscrire</a>
                            <!-- Modal -->
                            <div class=\"modal fade\" id=\"inscrip\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h4 class=\"modal-title\">Inscription aux formation  </h4>
                                        </div>
                                        <div class=\"modal-body\">
                                            <br class=\"card-body\"  style=\"font-size: 17px\">
                                            <div class=\"container\">
                                                <label><h5> Nom formation :</h5></label><label>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nom", []), "html", null, true);
                echo "</label><br>
                                                <label><h5> Domaine :</h5></label><label>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "domaine", []), "nomDomaine", []), "html", null, true);
                echo "</label><br><br>
                                                ";
                // line 94
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_inscip"]) ? $context["form_inscip"] : $this->getContext($context, "form_inscip")), 'form_start');
                echo "
                                                <strong><label><h5> specialité/service :</h5></label></strong> ";
                // line 95
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_inscip"]) ? $context["form_inscip"] : $this->getContext($context, "form_inscip")), "specialite", []), 'widget', ["attr" => ["type" => "text", "class" => "input"]]);
                echo " </br> </br>
                                                <strong><label> <h5>  ecole/entreprise :</h5></label></strong>";
                // line 96
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_inscip"]) ? $context["form_inscip"] : $this->getContext($context, "form_inscip")), "ecole", []), 'widget', ["attr" => ["type" => "text", "class" => "input"]]);
                echo " </br> </br>
                                                <strong> <h5>  lettre de motivation :</h5> </strong><br>
                                                ";
                // line 98
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_inscip"]) ? $context["form_inscip"] : $this->getContext($context, "form_inscip")), "lettreMotivation", []), 'widget', ["attr" => ["type" => "text", "class" => "input"]]);
                echo "  <br> <br>
                                                <strong> <label> <h5> Date de creation :</h5> </label></strong> ";
                // line 99
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "Y-m-d"), "html", null, true);
                echo " </br> </br>
                                                ";
                // line 100
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_inscip"]) ? $context["form_inscip"] : $this->getContext($context, "form_inscip")), 'widget');
                echo "
                                            </div>
                                        </div>

                                        <div class=\"modal-footer\">
                                            <div class=\"col-4\">
                                                ";
                // line 107
                echo "                                                <button class=\"btn btn-danger \">Annuler</button>  ";
                // line 108
                echo "                                            </div>
                                            <div class=\"col-4\">
                                            </div>
                                            <div class=\"col-4\">
                                                <input type=\"submit\" value=\"Confirmer\" class=\"btn btn-success\" >
                                                ";
                // line 113
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_inscip"]) ? $context["form_inscip"] : $this->getContext($context, "form_inscip")), 'form_end');
                echo "
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                    ";
            }
            // line 121
            echo "
                </div>
                ";
        }
        // line 124
        echo "            </div>

        </div>
    </div>
    <br>
    <div class=\"card\" style=\"background-color:#424242\" >

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo " \" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscriptions/showformation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 148,  409 => 147,  405 => 146,  401 => 145,  397 => 144,  393 => 143,  389 => 142,  385 => 141,  381 => 140,  377 => 139,  373 => 138,  369 => 137,  364 => 136,  355 => 135,  335 => 124,  330 => 121,  319 => 113,  312 => 108,  310 => 107,  301 => 100,  297 => 99,  293 => 98,  288 => 96,  284 => 95,  280 => 94,  276 => 93,  272 => 92,  258 => 80,  250 => 74,  247 => 73,  243 => 71,  240 => 69,  237 => 68,  229 => 62,  216 => 52,  212 => 51,  208 => 50,  204 => 49,  200 => 48,  196 => 47,  190 => 46,  184 => 45,  180 => 44,  174 => 41,  168 => 39,  163 => 37,  158 => 35,  153 => 32,  144 => 31,  122 => 17,  113 => 16,  100 => 12,  96 => 11,  92 => 10,  88 => 9,  84 => 8,  80 => 7,  76 => 6,  72 => 5,  68 => 4,  63 => 3,  54 => 2,  32 => 1,);
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
                        <p>Détail Formation</p>
                    </h1>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block content %}
    <div style=\"background-color:#797979\">
        <br>
        <div class=\"card mb-3 container\">
            <h3 class=\"card-header\">{{ formation.nom }}</h3>
            <div class=\"card-body\">
                <h6 class=\"card-subtitle text-muted\">{{ formation.domaine.nomDomaine }}</h6>
            </div>
            <center> <img style=\"height: 250px; width: 30%; display: block;\" src=\"{{ asset('images/') }}{{ formation.image }}\" alt=\"Card image\"></center>
            <div class=\"card-body\">
                <p class=\"card-text\"> <label><h5>Description : </h5></label>{{ formation.description }}</p>
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"><label><h5>Duree : </h5></label> {{ formation.duree }} heures</li>
                <li class=\"list-group-item\"><label><h5>Date debut : </h5></label> {% if formation.dateDebut %}{{ formation.dateDebut|date('Y-m-d') }}{% endif %}</li>
                <li class=\"list-group-item\"><label><h5>Date fin : </h5></label> {% if formation.dateFin %}{{ formation.dateFin|date('Y-m-d') }}{% endif %}</li>
                <li class=\"list-group-item\"><label><h5>Prix : </h5></label> {{ formation.prix }} DT</li>
                <li class=\"list-group-item\"><label><h5>Adresse : </h5></label> {{ formation.adresse }}</li>
                <li class=\"list-group-item\"><label><h5>Email : </h5></label> {{ formation.email }}</li>
                <li class=\"list-group-item\"><label><h5>Contact : </h5></label> {{ formation.contact }}</li>
                <li class=\"list-group-item\"><label><h5>Nbres inscrits : </h5></label> {{ formation.nombres }}</li>
                <li class=\"list-group-item\"><label><h5>Etat formation : </h5></label> {{ formation.etatFormation }}</li>
            </ul>



            <div class=\"card-body\">
                <div class=\"row align-items-center\">
                    <div class=\"col-3\">
                    </div>
                    <div class=\"col-4\">
                        <a href=\"{{ path('formations_affich_all') }}\" class=\"card-link\"> <button class=\"btn btn-outline-secondary\">Back to the list</button></a>

                    </div>


                    {#  <a href=\"{{ path('formations_edit', { 'ref': formation.ref }) }}\">S'inscrire</a> #}
                    {% if count2  > 0 %}
                    <div class=\"col-4\">
                        <label class=\"input\">Annuler inscription</label>  {#</a>#}
                    </div>
                    {% else %}
                    {%  if formation.nombres == 0 %}
                        <div class=\"col-4\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"formation est complet\">
                                Inscrire
                            </button>
                        </div>
                    {% else %}
                        <div class=\"col-4\">
                            <a  class=\"btn btn-outline-secondary\" data-toggle=\"modal\" data-target=\"#inscrip\" href=\"\"> Inscrire</a>
                            <!-- Modal -->
                            <div class=\"modal fade\" id=\"inscrip\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h4 class=\"modal-title\">Inscription aux formation  </h4>
                                        </div>
                                        <div class=\"modal-body\">
                                            <br class=\"card-body\"  style=\"font-size: 17px\">
                                            <div class=\"container\">
                                                <label><h5> Nom formation :</h5></label><label>{{ formation.nom }}</label><br>
                                                <label><h5> Domaine :</h5></label><label>{{ formation.domaine.nomDomaine }}</label><br><br>
                                                {{ form_start(form_inscip) }}
                                                <strong><label><h5> specialité/service :</h5></label></strong> {{ form_widget(form_inscip.specialite,{'attr':{'type':'text','class':'input'}}) }} </br> </br>
                                                <strong><label> <h5>  ecole/entreprise :</h5></label></strong>{{ form_widget(form_inscip.ecole,{'attr':{'type':'text','class':'input'}}) }} </br> </br>
                                                <strong> <h5>  lettre de motivation :</h5> </strong><br>
                                                {{ form_widget(form_inscip.lettreMotivation,{'attr':{'type':'text','class':'input'}}) }}  <br> <br>
                                                <strong> <label> <h5> Date de creation :</h5> </label></strong> {{ date |date('Y-m-d') }} </br> </br>
                                                {{ form_widget(form_inscip) }}
                                            </div>
                                        </div>

                                        <div class=\"modal-footer\">
                                            <div class=\"col-4\">
                                                {#  <a href=\"{{ path('ajout_show', { 'ref': formation.ref }) }}\" class=\"card-link\"> #}
                                                <button class=\"btn btn-danger \">Annuler</button>  {#</a>#}
                                            </div>
                                            <div class=\"col-4\">
                                            </div>
                                            <div class=\"col-4\">
                                                <input type=\"submit\" value=\"Confirmer\" class=\"btn btn-success\" >
                                                {{ form_end(form_inscip) }}
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                    {% endif %}

                </div>
                {% endif %}
            </div>

        </div>
    </div>
    <br>
    <div class=\"card\" style=\"background-color:#424242\" >

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
{% endblock %}", "inscriptions/showformation.html.twig", "C:\\wamp64\\www\\pidev2\\app\\Resources\\views\\inscriptions\\showformation.html.twig");
    }
}
