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

/* @User/Default/modifierprofil.html.twig */
class __TwigTemplate_538b6471229637ba6d71747bc728702153554631959366064da2f735a5f284bd extends \Twig\Template
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
        // line 3
        return $this->loadTemplate((((        // line 1
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == 0)) ? ("@User/Default/userhome.html.twig") : ("@User/Default/entreprisehome.html.twig")), "@User/Default/modifierprofil.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Default/modifierprofil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Default/modifierprofil.html.twig"));

        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/linearicons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap2.css.map"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main2.css"), "html", null, true);
        echo "\">

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 24
        echo "            <section class=\"banner-area relative\" id=\"home\">
                <div class=\"overlay overlay-bg\"></div>
                <div class=\"container\">
                    <div class=\"row d-flex align-items-center justify-content-center\">
                        <div class=\"about-content col-lg-12\">
                            <h1 class=\"text-white\">
                                Ajouter Offre
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"../Default/index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Ajouter Offre</a></p>
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 41
        echo "    <section class=\"profile-detail\" >
        <div class=\"container\" >
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"basic-information\" align=\"center\">
                        <p style=\"font-weight: bold; font-size: 30px\"> Modifier votre Profil</p>
                        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', ["atr" => ["class" => "serach-form-area"]]);
        echo "
                            <table style=\"width: 450px; border-collapse:separate; border-spacing: 0 15px\">
                                <tbody>
                                <tr style=\"height: 22px; \">
                                    <td style=\"width: 300px; height: 22px;\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fullname", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Fullname"]);
        echo "</td>
                                    <td style=\"width: 425.2px; height: 22px;\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fullname", []), 'widget', ["attr" => ["class" => "input-smartstart"]]);
        echo "</td>
                                </tr>
                                <tr>
                                    <td style=\"width: 300px; height: 22px;\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Adresse"]);
        echo "</td>
                                    <td style=\"width: 425.2px; height: 22px;\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", []), 'widget', ["attr" => ["class" => "input-smartstart"]]);
        echo "</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Tel"]);
        echo "</td>
                                    <td style=\"width: 425.2px; height: 22px;\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "input-smartstart"]]);
        echo "</td>
                                </tr>
                                <tr style=\"height: 22.6px;\">
                                        <td colspan=\"2\" align=\"right\" style=\"width: 425.2px; height: 22.6px; padding-top: 50px\" align=\"right\">  <input class=\"submit-smartstart\" type=\"submit\" value=\"Confirmer\" ></td>

                                </tr>
                                </tbody>
                            </table>


                        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                        ";
        // line 72
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == 0)) {
            // line 73
            echo "                        <div style=\"margin-top: 100px\">
                        <p style=\"font-weight: bold; font-size: 30px\"> Modifier vos compétences</p>
                        ";
            // line 75
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_start', ["atr" => ["class" => "serach-form-area"]]);
            echo "
                        <table style=\"width: 450px; border-collapse:separate; border-spacing: 0 15px\">
                            <tbody>
                            <tr style=\"height: 22px; \">
                                <td style=\"width: 300px; height: 22px;\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "skill1", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Compétence 1"]);
            echo "</td>
                                <td style=\"width: 425.2px; height: 22px;\">";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "skill1", []), 'widget', ["attr" => ["class" => "combobox-smartstart"]]);
            echo "</td>
                            </tr>
                            <tr>
                                <td style=\"width: 300px; height: 22px;\">";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "skill2", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Compétence 2"]);
            echo "</td>
                                <td style=\"width: 425.2px; height: 22px;\">";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "skill2", []), 'widget', ["attr" => ["class" => "combobox-smartstart"]]);
            echo "</td>
                            </tr>
                            <tr style=\"height: 22px;\">
                                <td style=\"width: 300px; height: 22px;\">";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "skill3", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Compétence 3"]);
            echo "</td>
                                <td style=\"width: 425.2px; height: 22px;\">";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "skill3", []), 'widget', ["attr" => ["class" => "combobox-smartstart"]]);
            echo "</td>
                            </tr>
                            <tr style=\"height: 22.6px;\">
                                <td colspan=\"2\" align=\"right\" style=\"width: 425.2px; height: 22.6px; padding-top: 50px;\">  <input class=\"submit-smartstart\" type=\"submit\" value=\"Confirmer\" ></td>

                            </tr>
                            </tbody>
                        </table>

                        ";
            // line 97
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_end');
            echo "
                        </div>

                            <div style=\"margin-top: 100px\">
                                <p style=\"font-weight: bold; font-size: 30px\"> Modifier vos Langues</p>
                                ";
            // line 102
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_start', ["atr" => ["class" => "serach-form-area"]]);
            echo "
                                <table style=\"width: 450px; border-collapse:separate; border-spacing: 0 15px\">
                                    <tbody>
                                    <tr style=\"height: 22px; \">
                                        <td style=\"width: 300px; height: 22px;\">";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "langue1Ref", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Langue 1"]);
            echo "</td>
                                        <td style=\"width: 425.2px; height: 22px;\">";
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "langue1Ref", []), 'widget', ["attr" => ["class" => "combobox-smartstart"]]);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 300px; height: 22px;\">";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "langue2Ref", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Langue 2"]);
            echo "</td>
                                        <td style=\"width: 425.2px; height: 22px;\">";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "langue2Ref", []), 'widget', ["attr" => ["class" => "combobox-smartstart"]]);
            echo "</td>
                                    </tr>
                                     <tr style=\"height: 22.6px;\">
                                        <td colspan=\"2\" align=\"right\" style=\"width: 425.2px; height: 22.6px; padding-top: 50px;\">  <input class=\"submit-smartstart\" type=\"submit\" value=\"Confirmer\" ></td>

                                    </tr>
                                    </tbody>
                                </table>

                                ";
            // line 120
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_end');
            echo "
                            </div>
                        ";
        }
        // line 123
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>
         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        echo "            <script src=\"../../js/vendor/jquery-2.2.4.min.js\"></script>
            <script src=\"../../https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"../../js/vendor/bootstrap.min.js\"></script>
            <script type=\"../../text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
            <script src=\"../../js/easing.min.js\"></script>
            <script src=\"../../js/hoverIntent.js\"></script>
            <script src=\"../../js/superfish.min.js\"></script>
            <script src=\"../../js/jquery.ajaxchimp.min.js\"></script>
            <script src=\"../../js/jquery.magnific-popup.min.js\"></script>
            <script src=\"../../js/owl.carousel.min.js\"></script>
            <script src=\"../../js/jquery.sticky.js\"></script>
            <script src=\"../../js/jquery.nice-select.min.js\"></script>
            <script src=\"../../js/parallax.min.js\"></script>
            <script src=\"../../js/mail-script.js\"></script>
            <script src=\"../../js/main.js\"></script>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/modifierprofil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 132,  334 => 131,  318 => 123,  312 => 120,  300 => 111,  296 => 110,  290 => 107,  286 => 106,  279 => 102,  271 => 97,  259 => 88,  255 => 87,  249 => 84,  245 => 83,  239 => 80,  235 => 79,  228 => 75,  224 => 73,  222 => 72,  217 => 70,  204 => 60,  200 => 59,  194 => 56,  190 => 55,  184 => 52,  180 => 51,  173 => 47,  165 => 41,  156 => 40,  133 => 24,  124 => 23,  111 => 19,  107 => 18,  103 => 17,  99 => 16,  95 => 15,  91 => 14,  87 => 13,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  64 => 7,  55 => 6,  45 => 3,  33 => 1,  32 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends role == 0
    ? '@User/Default/userhome.html.twig'
    : '@User/Default/entreprisehome.html.twig' %}


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
            <link rel=\"stylesheet\" href=\"{{ asset('css/main2.css') }}\">

        {% endblock %}

        {% block banner %}
            <section class=\"banner-area relative\" id=\"home\">
                <div class=\"overlay overlay-bg\"></div>
                <div class=\"container\">
                    <div class=\"row d-flex align-items-center justify-content-center\">
                        <div class=\"about-content col-lg-12\">
                            <h1 class=\"text-white\">
                                Ajouter Offre
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"../Default/index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Ajouter Offre</a></p>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}


        {% block content %}
    <section class=\"profile-detail\" >
        <div class=\"container\" >
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"basic-information\" align=\"center\">
                        <p style=\"font-weight: bold; font-size: 30px\"> Modifier votre Profil</p>
                        {{ form_start(form, {'atr' : {'class' : 'serach-form-area'}}) }}
                            <table style=\"width: 450px; border-collapse:separate; border-spacing: 0 15px\">
                                <tbody>
                                <tr style=\"height: 22px; \">
                                    <td style=\"width: 300px; height: 22px;\">{{ form_label(form.fullname, \"Fullname\", {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                    <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form.fullname, {'attr' : {'class' :'input-smartstart'}})}}</td>
                                </tr>
                                <tr>
                                    <td style=\"width: 300px; height: 22px;\">{{ form_label(form.adresse, 'Adresse', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                    <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form.adresse, {'attr' : {'class' :'input-smartstart'}})}}</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">{{ form_label(form.tel, 'Tel', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                    <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form.tel, {'attr' : {'class' :'input-smartstart'}})}}</td>
                                </tr>
                                <tr style=\"height: 22.6px;\">
                                        <td colspan=\"2\" align=\"right\" style=\"width: 425.2px; height: 22.6px; padding-top: 50px\" align=\"right\">  <input class=\"submit-smartstart\" type=\"submit\" value=\"Confirmer\" ></td>

                                </tr>
                                </tbody>
                            </table>


                        {{ form_end(form) }}

                        {% if role == 0 %}
                        <div style=\"margin-top: 100px\">
                        <p style=\"font-weight: bold; font-size: 30px\"> Modifier vos compétences</p>
                        {{ form_start(form2, {'atr' : {'class' : 'serach-form-area'}}) }}
                        <table style=\"width: 450px; border-collapse:separate; border-spacing: 0 15px\">
                            <tbody>
                            <tr style=\"height: 22px; \">
                                <td style=\"width: 300px; height: 22px;\">{{ form_label(form2.skill1, \"Compétence 1\", {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form2.skill1, {'attr' : {'class' :'combobox-smartstart'}})}}</td>
                            </tr>
                            <tr>
                                <td style=\"width: 300px; height: 22px;\">{{ form_label(form2.skill2, 'Compétence 2', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form2.skill2, {'attr' : {'class' :'combobox-smartstart'}})}}</td>
                            </tr>
                            <tr style=\"height: 22px;\">
                                <td style=\"width: 300px; height: 22px;\">{{ form_label(form2.skill3, 'Compétence 3', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form2.skill3, {'attr' : {'class' :'combobox-smartstart'}})}}</td>
                            </tr>
                            <tr style=\"height: 22.6px;\">
                                <td colspan=\"2\" align=\"right\" style=\"width: 425.2px; height: 22.6px; padding-top: 50px;\">  <input class=\"submit-smartstart\" type=\"submit\" value=\"Confirmer\" ></td>

                            </tr>
                            </tbody>
                        </table>

                        {{ form_end(form2) }}
                        </div>

                            <div style=\"margin-top: 100px\">
                                <p style=\"font-weight: bold; font-size: 30px\"> Modifier vos Langues</p>
                                {{ form_start(form3, {'atr' : {'class' : 'serach-form-area'}}) }}
                                <table style=\"width: 450px; border-collapse:separate; border-spacing: 0 15px\">
                                    <tbody>
                                    <tr style=\"height: 22px; \">
                                        <td style=\"width: 300px; height: 22px;\">{{ form_label(form3.langue1Ref, \"Langue 1\", {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                        <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form3.langue1Ref, {'attr' : {'class' :'combobox-smartstart'}})}}</td>
                                    </tr>
                                    <tr>
                                        <td style=\"width: 300px; height: 22px;\">{{ form_label(form3.langue2Ref, 'Langue 2', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                        <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form3.langue2Ref, {'attr' : {'class' :'combobox-smartstart'}})}}</td>
                                    </tr>
                                     <tr style=\"height: 22.6px;\">
                                        <td colspan=\"2\" align=\"right\" style=\"width: 425.2px; height: 22.6px; padding-top: 50px;\">  <input class=\"submit-smartstart\" type=\"submit\" value=\"Confirmer\" ></td>

                                    </tr>
                                    </tbody>
                                </table>

                                {{ form_end(form3) }}
                            </div>
                        {% endif %}

                    </div>
                </div>
            </div>
        </div>
    </section>
         {% endblock %}

        {% block javascripts %}
            <script src=\"../../js/vendor/jquery-2.2.4.min.js\"></script>
            <script src=\"../../https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"../../js/vendor/bootstrap.min.js\"></script>
            <script type=\"../../text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
            <script src=\"../../js/easing.min.js\"></script>
            <script src=\"../../js/hoverIntent.js\"></script>
            <script src=\"../../js/superfish.min.js\"></script>
            <script src=\"../../js/jquery.ajaxchimp.min.js\"></script>
            <script src=\"../../js/jquery.magnific-popup.min.js\"></script>
            <script src=\"../../js/owl.carousel.min.js\"></script>
            <script src=\"../../js/jquery.sticky.js\"></script>
            <script src=\"../../js/jquery.nice-select.min.js\"></script>
            <script src=\"../../js/parallax.min.js\"></script>
            <script src=\"../../js/mail-script.js\"></script>
            <script src=\"../../js/main.js\"></script>

        {% endblock %}", "@User/Default/modifierprofil.html.twig", "C:\\wamp64\\www\\pidev2\\src\\UserBundle\\Resources\\views\\Default\\modifierprofil.html.twig");
    }
}
