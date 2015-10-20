<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c45fb7ee017fc99b97783d0820864df3ad0f079c4ab02b973feb9195fadb841f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27be2ca9e714acc943b23f29a054961b93f141ddc7aff0803716329afd234a75 = $this->env->getExtension("native_profiler");
        $__internal_27be2ca9e714acc943b23f29a054961b93f141ddc7aff0803716329afd234a75->enter($__internal_27be2ca9e714acc943b23f29a054961b93f141ddc7aff0803716329afd234a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27be2ca9e714acc943b23f29a054961b93f141ddc7aff0803716329afd234a75->leave($__internal_27be2ca9e714acc943b23f29a054961b93f141ddc7aff0803716329afd234a75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_553448b6d785307d4f10607c26c1664db75961e41180e6e9509457404eb55aa4 = $this->env->getExtension("native_profiler");
        $__internal_553448b6d785307d4f10607c26c1664db75961e41180e6e9509457404eb55aa4->enter($__internal_553448b6d785307d4f10607c26c1664db75961e41180e6e9509457404eb55aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_553448b6d785307d4f10607c26c1664db75961e41180e6e9509457404eb55aa4->leave($__internal_553448b6d785307d4f10607c26c1664db75961e41180e6e9509457404eb55aa4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40c751e3a25a1ee29bb8fcce0cfc6cf796a4c2e7951ad52413b311162e54115e = $this->env->getExtension("native_profiler");
        $__internal_40c751e3a25a1ee29bb8fcce0cfc6cf796a4c2e7951ad52413b311162e54115e->enter($__internal_40c751e3a25a1ee29bb8fcce0cfc6cf796a4c2e7951ad52413b311162e54115e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_40c751e3a25a1ee29bb8fcce0cfc6cf796a4c2e7951ad52413b311162e54115e->leave($__internal_40c751e3a25a1ee29bb8fcce0cfc6cf796a4c2e7951ad52413b311162e54115e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a87fc91233507bb9bfa89a25f0355dbad83ff17d9b42b67c714f7a89cd96e011 = $this->env->getExtension("native_profiler");
        $__internal_a87fc91233507bb9bfa89a25f0355dbad83ff17d9b42b67c714f7a89cd96e011->enter($__internal_a87fc91233507bb9bfa89a25f0355dbad83ff17d9b42b67c714f7a89cd96e011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a87fc91233507bb9bfa89a25f0355dbad83ff17d9b42b67c714f7a89cd96e011->leave($__internal_a87fc91233507bb9bfa89a25f0355dbad83ff17d9b42b67c714f7a89cd96e011_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
