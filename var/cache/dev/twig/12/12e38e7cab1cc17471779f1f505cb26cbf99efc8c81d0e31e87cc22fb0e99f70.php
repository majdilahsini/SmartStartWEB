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

/* @User/Default/monprofil.html.twig */
class __TwigTemplate_8994c9ed44309f71c324a9d546af70f838b59d2477aec426c7bd52e0af090e62 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'banner' => [$this, 'block_banner'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate((((        // line 1
($context["role"] ?? $this->getContext($context, "role")) == 0)) ? ("@User/Default/userhome.html.twig") : ("@User/Default/entreprisehome.html.twig")), "@User/Default/monprofil.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Default/monprofil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Default/monprofil.html.twig"));

        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 6
        echo "            <section class=\"banner-area relative\" id=\"home\">
                <div class=\"overlay overlay-bg\"></div>
                <div class=\"container\">
                    <div class=\"row d-flex align-items-center justify-content-center\">
                        <div class=\"about-content col-lg-12\">
                            <h1 class=\"text-white\">
                                Profil
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"../Default/index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a > Profil</a></p>
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "
            <section class=\"profile-detail\">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"basic-information\">

                                <div class=\"col-md-9 col-sm-9\">
                                    <div class=\"profile-content\">
                                        <h2>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "fullname", []), "html", null, true);
        echo "<span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", []), "html", null, true);
        echo "</span></h2>
                                        <ul class=\"information\">
                                            ";
        // line 33
        if ((($context["role"] ?? $this->getContext($context, "role")) == 0)) {
            // line 34
            echo "                                            <li><span>Type de Compte:</span>";
            echo "Utilisateur normale";
            echo "</li>
                                            ";
        } else {
            // line 36
            echo "                                            <li><span>Type de Compte:</span>";
            echo "Entreprise";
            echo "</li>
                                            ";
        }
        // line 38
        echo "                                            <li><span>Name:</span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "fullname", []), "html", null, true);
        echo "</li>
                                            <li><span>Email:</span>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", []), "html", null, true);
        echo "</li>
                                            <li><span>Mobile:</span>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "tel", []), "html", null, true);
        echo "</li>
                                            <li><span>Company:</span>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "adresse", []), "html", null, true);
        echo "</li>
                                            ";
        // line 42
        if ((($context["role"] ?? $this->getContext($context, "role")) == 0)) {
            // line 43
            echo "                                            <li><span>Compétences</span>
                                                ";
            // line 44
            if ( !twig_test_empty(($context["skills"] ?? $this->getContext($context, "skills")))) {
                // line 45
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? $this->getContext($context, "skills")));
                foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                    // line 46
                    echo "                                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["skill"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                        // line 47
                        echo "                                                            <span class=\"service-tag\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", []), "html", null, true);
                        echo "</span>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                                                ";
            } else {
                // line 51
                echo "                                                    <p>Vous n'avez pas encore ajouter des compétences</p>
                                                ";
            }
            // line 53
            echo "
                                            </li>
                                            <li><span>Langues</span>
                                                ";
            // line 56
            if ( !twig_test_empty(($context["langues"] ?? $this->getContext($context, "langues")))) {
                // line 57
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["langues"] ?? $this->getContext($context, "langues")));
                foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
                    // line 58
                    echo "                                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["langue"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                        // line 59
                        echo "                                                            <span class=\"service-tag\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", []), "html", null, true);
                        echo "</span>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                                                ";
            } else {
                // line 63
                echo "                                                    <p >Vous n'avez pas encore ajouter des langues</p>
                                                ";
            }
            // line 65
            echo "                                            </li>
                                            ";
        }
        // line 67
        echo "                                        </ul>
                                    </div>
                                </div>


                                    <div style=\"margin-top: 20px\" class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <i class=\"fa fa-cog fa-fw\"></i> Actions
                                        </div>

                                        <form>
                                            <div class=\"form-submit\">
                                                <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_profil", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
        echo "\"> <input style=\"margin-top: 10px; text-align: center\" value=\"Modifier\" class=\"submit\" id=\"submit\" name=\"submit\" /></a>

                                            </div>
                                        </form>



                            </div>
                        </div>
                    </div>
                </div>
            </section>


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/monprofil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 79,  225 => 67,  221 => 65,  217 => 63,  214 => 62,  208 => 61,  199 => 59,  194 => 58,  189 => 57,  187 => 56,  182 => 53,  178 => 51,  175 => 50,  169 => 49,  160 => 47,  155 => 46,  150 => 45,  148 => 44,  145 => 43,  143 => 42,  139 => 41,  135 => 40,  131 => 39,  126 => 38,  120 => 36,  114 => 34,  112 => 33,  105 => 31,  94 => 22,  85 => 21,  62 => 6,  53 => 5,  43 => 3,  31 => 1,  30 => 3,);
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

        {% block banner %}
            <section class=\"banner-area relative\" id=\"home\">
                <div class=\"overlay overlay-bg\"></div>
                <div class=\"container\">
                    <div class=\"row d-flex align-items-center justify-content-center\">
                        <div class=\"about-content col-lg-12\">
                            <h1 class=\"text-white\">
                                Profil
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"../Default/index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a > Profil</a></p>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}

        {% block content %}

            <section class=\"profile-detail\">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"basic-information\">

                                <div class=\"col-md-9 col-sm-9\">
                                    <div class=\"profile-content\">
                                        <h2>{{ user.fullname }}<span>{{ user.email }}</span></h2>
                                        <ul class=\"information\">
                                            {% if role == 0 %}
                                            <li><span>Type de Compte:</span>{{ \"Utilisateur normale\" }}</li>
                                            {% else %}
                                            <li><span>Type de Compte:</span>{{ \"Entreprise\" }}</li>
                                            {% endif %}
                                            <li><span>Name:</span>{{ user.fullname }}</li>
                                            <li><span>Email:</span>{{ user.email }}</li>
                                            <li><span>Mobile:</span>{{ user.tel }}</li>
                                            <li><span>Company:</span>{{ user.adresse }}</li>
                                            {% if role == 0 %}
                                            <li><span>Compétences</span>
                                                {% if skills is not empty%}
                                                    {% for skill in skills %}
                                                        {% for s in skill %}
                                                            <span class=\"service-tag\">{{ s.name }}</span>
                                                        {% endfor %}
                                                    {% endfor %}
                                                {% else %}
                                                    <p>Vous n'avez pas encore ajouter des compétences</p>
                                                {% endif %}

                                            </li>
                                            <li><span>Langues</span>
                                                {% if langues is not empty%}
                                                    {% for langue in langues %}
                                                        {% for s in langue %}
                                                            <span class=\"service-tag\">{{ s.nom }}</span>
                                                        {% endfor %}
                                                    {% endfor %}
                                                {% else %}
                                                    <p >Vous n'avez pas encore ajouter des langues</p>
                                                {% endif %}
                                            </li>
                                            {% endif %}
                                        </ul>
                                    </div>
                                </div>


                                    <div style=\"margin-top: 20px\" class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <i class=\"fa fa-cog fa-fw\"></i> Actions
                                        </div>

                                        <form>
                                            <div class=\"form-submit\">
                                                <a href=\"{{ path('modifier_profil', {'id':user.id}) }}\"> <input style=\"margin-top: 10px; text-align: center\" value=\"Modifier\" class=\"submit\" id=\"submit\" name=\"submit\" /></a>

                                            </div>
                                        </form>



                            </div>
                        </div>
                    </div>
                </div>
            </section>


        {% endblock %}

", "@User/Default/monprofil.html.twig", "C:\\wamp64\\www\\pidev\\src\\UserBundle\\Resources\\views\\Default\\monprofil.html.twig");
    }
}
