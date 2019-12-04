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

/* @Offre/Entreprise/modifier.html.twig */
class __TwigTemplate_49e99e25df9d292a9c4faa0bd9148fbf11041c7a128a4666dcd8c4876ddff6a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Entreprise/modifier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Entreprise/modifier.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/entreprisehome.html.twig", "@Offre/Entreprise/modifier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 6
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
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main2.css"), "html", null, true);
        echo "\">

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 22
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

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 39
        echo "    <section class=\"profile-detail\" >
        <div class=\"container\" >
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"basic-information\" align=\"center\">
                        <p style=\"font-weight: bold; font-size: 30px\"> Modifier une Offre:</p>
                        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["atr" => ["class" => "serach-form-area"]]);
        echo "
                            <table style=\"width: 450px; border-collapse:separate; border-spacing: 0 15px\">
                                <tbody>
                                <tr style=\"height: 22px; \">
                                    <td style=\"width: 300px; height: 22px;\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Titre"]);
        echo "</td>
                                    <td style=\"width: 425.2px; height: 22px;\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", []), 'widget', ["attr" => ["class" => "input-smartstart"]]);
        echo "</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveauEtude", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Niveau d'Etude"]);
        echo "</td>
                                    <td style=\"width: 200px; height: 22px;\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveauEtude", []), 'widget', ["attr" => ["class" => "input-smartstart"]]);
        echo "</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salaire", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Salaire"]);
        echo "</td>
                                    <td style=\"width: 200px; height: 22px;\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salaire", []), 'widget', ["attr" => ["class" => "input-smartstart"]]);
        echo "</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 3008px; height: 22px;\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "domaine", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Domaine"]);
        echo "</td>
                                    <td style=\"width: 425.2px; height: 22px;\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "domaine", []), 'widget', ["attr" => ["class" => "combobox-smartstart"]]);
        echo "</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typePost", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Type de Poste"]);
        echo "</td>
                                    <td style=\"width: 425.2px; height: 22px;\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typePost", []), 'widget', ["attr" => ["class" => "combobox-smartstart"]]);
        echo "</td>
                                    </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "skill1", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Compétence 1"]);
        echo "</td>
                                    <td style=\"width: 425.2px; height: 22px;\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "skill1", []), 'widget', ["attr" => ["class" => "combobox-smartstart"]]);
        echo "</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "skill2", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Compétence 2"]);
        echo "</td>
                                    <td style=\"width: 425.2px; height: 22px;\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "skill2", []), 'widget', ["attr" => ["class" => "combobox-smartstart"]]);
        echo "</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "skill3", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Compétence 3"]);
        echo "</td>
                                    <td style=\"width: 425.2px; height: 22px;\">";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "skill3", []), 'widget', ["attr" => ["class" => "combobox-smartstart"]]);
        echo "</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langueRef", []), 'label', ["label_attr" => ["class" => "label-smartstart"], "label" => "Langue"]);
        echo "</td>
                                    <td style=\"width: 425.2px; height: 22px;\">";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langueRef", []), 'widget', ["attr" => ["class" => "combobox-smartstart"]]);
        echo "</td>
                                </tr>
                                <tr style=\"height: 22.6px;\">
                                        <td style=\"width: 425.2px; height: 22.6px; padding-top: 50px\" align=\"right\">  <input class=\"submit-smartstart\" type=\"submit\" value=\"Confirmer\" ></td>
                                        <td style=\"width: 425.2px; height: 22.6px; padding-top: 50px\"  align=\"left\">  <input class=\"submit-smartstart\" type=\"submit\" value=\"Cancel\" ></td>
                                </tr>
                                </tbody>
                            </table>

                        ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
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
        return "@Offre/Entreprise/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 100,  292 => 99,  275 => 91,  263 => 82,  259 => 81,  253 => 78,  249 => 77,  243 => 74,  239 => 73,  233 => 70,  229 => 69,  223 => 66,  219 => 65,  213 => 62,  209 => 61,  203 => 58,  199 => 57,  193 => 54,  189 => 53,  183 => 50,  179 => 49,  172 => 45,  164 => 39,  155 => 38,  132 => 22,  123 => 21,  110 => 17,  106 => 16,  102 => 15,  98 => 14,  94 => 13,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  74 => 8,  70 => 7,  66 => 6,  63 => 5,  54 => 4,  32 => 1,);
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
                        <p style=\"font-weight: bold; font-size: 30px\"> Modifier une Offre:</p>
                        {{ form_start(form, {'atr' : {'class' : 'serach-form-area'}}) }}
                            <table style=\"width: 450px; border-collapse:separate; border-spacing: 0 15px\">
                                <tbody>
                                <tr style=\"height: 22px; \">
                                    <td style=\"width: 300px; height: 22px;\">{{ form_label(form.titre, \"Titre\", {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                    <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form.titre, {'attr' : {'class' :'input-smartstart'}})}}</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">{{ form_label(form.niveauEtude, 'Niveau d\\'Etude', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                    <td style=\"width: 200px; height: 22px;\">{{ form_widget(form.niveauEtude, {'attr' : {'class' :'input-smartstart'}})}}</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">{{ form_label(form.salaire, 'Salaire', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                    <td style=\"width: 200px; height: 22px;\">{{ form_widget(form.salaire, {'attr' : {'class' :'input-smartstart'}})}}</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 3008px; height: 22px;\">{{ form_label(form.domaine, 'Domaine', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                    <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form.domaine, {'attr' : {'class' :'combobox-smartstart'}})}}</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">{{ form_label(form.typePost, 'Type de Poste', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                    <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form.typePost, {'attr' : {'class' :'combobox-smartstart'}})}}</td>
                                    </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">{{ form_label(form.skill1, 'Compétence 1', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                    <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form.skill1, {'attr' : {'class' :'combobox-smartstart'}})}}</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">{{ form_label(form.skill2, 'Compétence 2', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                    <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form.skill2, {'attr' : {'class' :'combobox-smartstart'}})}}</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">{{ form_label(form.skill3, 'Compétence 3', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                    <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form.skill3, {'attr' : {'class' :'combobox-smartstart'}})}}</td>
                                </tr>
                                <tr style=\"height: 22px;\">
                                    <td style=\"width: 300px; height: 22px;\">{{ form_label(form.langueRef, 'Langue', {'label_attr' : {'class' : 'label-smartstart'}}) }}</td>
                                    <td style=\"width: 425.2px; height: 22px;\">{{ form_widget(form.langueRef, {'attr' : {'class' :'combobox-smartstart'}})}}</td>
                                </tr>
                                <tr style=\"height: 22.6px;\">
                                        <td style=\"width: 425.2px; height: 22.6px; padding-top: 50px\" align=\"right\">  <input class=\"submit-smartstart\" type=\"submit\" value=\"Confirmer\" ></td>
                                        <td style=\"width: 425.2px; height: 22.6px; padding-top: 50px\"  align=\"left\">  <input class=\"submit-smartstart\" type=\"submit\" value=\"Cancel\" ></td>
                                </tr>
                                </tbody>
                            </table>

                        {{ form_end(form) }}
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

        {% endblock %}", "@Offre/Entreprise/modifier.html.twig", "C:\\wamp64\\www\\pidev\\src\\OffreBundle\\Resources\\views\\Entreprise\\modifier.html.twig");
    }
}
