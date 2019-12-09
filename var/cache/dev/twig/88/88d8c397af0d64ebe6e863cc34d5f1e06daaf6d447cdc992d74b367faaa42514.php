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

/* reclamation/indexuser.html.twig */
class __TwigTemplate_5db17c6162b4c09f1c1687f9e5d27f95267a4968809542bb37d8a96e3b036d8c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/indexuser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/indexuser.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/userhome.html.twig", "reclamation/indexuser.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/semantic.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/icon.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/linearicons.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main2.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@8\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/bootstrap3-typeahead.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/subjectrechercheajax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/semantic.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/autocompletsubject.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/deleterec.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://use.fontawesome.com/20cf2951f4.js\"></script>

    <script
            src=\"https://code.jquery.com/jquery-3.4.1.js\"
            integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"
            crossorigin=\"anonymous\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "
             <section class=\"jobs\">
                 <div class=\"container\">
                     <div class=\"heading\">
                         <ul>
                             <li>
                                 <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_new");
        echo "\"><button type=\"button\" class=\"btn btn-secondary\">send new reclamation</button></a>
                             </li>
                         </ul>
                     </div>

                     <div class=\"companies\">
                         ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 53
            echo "

                             <div class=\"company-list\">
                                 <div class=\"row\">
                                     <div class=\"col-md-2 col-sm-2\">
                                         <div class=\"company-logo\" align=\"center\" style=\"position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\">
                                             <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/o3.png"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\" />
                                         </div>
                                     </div>
                                     <div class=\"col-md-8 col-sm-8\">
                                         <div class=\"company-content\">
                                             <h3>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "subject", []), "html", null, true);
            echo "</h3>
                                             <p>
                      <span class=\"company-name\">
                      <i class=\"fa fa-weixin\" ></i>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "subject", []), "html", null, true);
            echo "</span>

                                                 <span class=\"company-name\">
                      <i class=\"fa fa-user-o\" ></i>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "iduser", []), "html", null, true);
            echo "</span>


                                             </p>
                                         </div>
                                     </div>
                                     ";
            // line 76
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", []), "pathinfo", []) == "/reclamation/indexuser")) {
                // line 77
                echo "                                         <div class=\"col-md-2 col-sm-2\">
                                             <a href=";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_delete_id", ["id" => $this->getAttribute($context["reclamation"], "id", [])]), "html", null, true);
                echo "><button type=\"submit\" value=\"Delete\" class=\"btn supprimer-offre\" name=\"View Job\">Supprimer</button></a>
                                             <a href=";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_show", ["id" => $this->getAttribute($context["reclamation"], "id", [])]), "html", null, true);
                echo "><button type=\"submit\" class=\"btn consulter-c\" style=\"align-self: center\" name=\"View Job\">Consulter</button></a>
                                         </div>
                                     ";
            }
            // line 82
            echo "                                 </div>

                             </div>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                     </div>
                 </div>

             </section>


         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/indexuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 86,  270 => 82,  264 => 79,  260 => 78,  257 => 77,  255 => 76,  246 => 70,  240 => 67,  234 => 64,  226 => 59,  218 => 53,  214 => 52,  205 => 46,  197 => 40,  188 => 39,  168 => 28,  164 => 27,  160 => 26,  156 => 25,  152 => 24,  148 => 23,  144 => 22,  141 => 21,  132 => 20,  119 => 17,  115 => 16,  111 => 15,  107 => 14,  103 => 13,  99 => 12,  95 => 11,  91 => 10,  87 => 9,  83 => 8,  79 => 7,  75 => 6,  71 => 5,  67 => 4,  62 => 3,  53 => 2,  31 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('/css/bootstrap.min.css')}}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/semantic.min.css')}}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/icon.min.css')}}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/font-awesome.min.css')}}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/linearicons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap2.css.map') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/nice-select.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/main2.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/common.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\" />
{% endblock %}
{% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@8\"></script>
    <script src=\"{{ asset('/js/bootstrap3-typeahead.min.js')}}\"></script>
    <script src=\"{{ asset('/js/jquery-2.2.3.min.js')}}\"></script>
    <script src=\"{{ asset('/js/subjectrechercheajax.js')}}\"></script>
    <script src=\"{{ asset('/js/jquery-3.1.1.min.js')}}\"></script>
    <script src=\"{{ asset('/js/semantic.min.js')}}\"></script>
    <script src=\"{{ asset('/js/autocompletsubject.js')}}\"></script>
    <script src=\"{{ asset('/js/deleterec.js')}}\"></script>
    <script src=\"https://use.fontawesome.com/20cf2951f4.js\"></script>

    <script
            src=\"https://code.jquery.com/jquery-3.4.1.js\"
            integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"
            crossorigin=\"anonymous\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js\"></script>
{% endblock %}

         {% block content %}

             <section class=\"jobs\">
                 <div class=\"container\">
                     <div class=\"heading\">
                         <ul>
                             <li>
                                 <a href=\"{{ path('reclamation_new') }}\"><button type=\"button\" class=\"btn btn-secondary\">send new reclamation</button></a>
                             </li>
                         </ul>
                     </div>

                     <div class=\"companies\">
                         {% for reclamation in reclamations %}


                             <div class=\"company-list\">
                                 <div class=\"row\">
                                     <div class=\"col-md-2 col-sm-2\">
                                         <div class=\"company-logo\" align=\"center\" style=\"position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\">
                                             <img src=\"{{asset('img/o3.png')}}\" class=\"img-responsive\" alt=\"\" />
                                         </div>
                                     </div>
                                     <div class=\"col-md-8 col-sm-8\">
                                         <div class=\"company-content\">
                                             <h3>{{ reclamation.subject }}</h3>
                                             <p>
                      <span class=\"company-name\">
                      <i class=\"fa fa-weixin\" ></i>{{ reclamation.subject}}</span>

                                                 <span class=\"company-name\">
                      <i class=\"fa fa-user-o\" ></i>{{reclamation.iduser}}</span>


                                             </p>
                                         </div>
                                     </div>
                                     {% if  app.request.pathinfo == \"/reclamation/indexuser\" %}
                                         <div class=\"col-md-2 col-sm-2\">
                                             <a href={{ path('reclamation_delete_id', {'id':reclamation.id}) }}><button type=\"submit\" value=\"Delete\" class=\"btn supprimer-offre\" name=\"View Job\">Supprimer</button></a>
                                             <a href={{ path('reclamation_show', {'id':reclamation.id}) }}><button type=\"submit\" class=\"btn consulter-c\" style=\"align-self: center\" name=\"View Job\">Consulter</button></a>
                                         </div>
                                     {% endif %}
                                 </div>

                             </div>
                         {% endfor %}
                     </div>
                 </div>

             </section>


         {% endblock %}

", "reclamation/indexuser.html.twig", "C:\\wamp64\\www\\pidev2\\app\\Resources\\views\\reclamation\\indexuser.html.twig");
    }
}
