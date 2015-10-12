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
        $__internal_c12f55909c625bddb34807a7890d7c95f188c9381e3dcf9d2cc84b86b86eb947 = $this->env->getExtension("native_profiler");
        $__internal_c12f55909c625bddb34807a7890d7c95f188c9381e3dcf9d2cc84b86b86eb947->enter($__internal_c12f55909c625bddb34807a7890d7c95f188c9381e3dcf9d2cc84b86b86eb947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c12f55909c625bddb34807a7890d7c95f188c9381e3dcf9d2cc84b86b86eb947->leave($__internal_c12f55909c625bddb34807a7890d7c95f188c9381e3dcf9d2cc84b86b86eb947_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91c87f0b1af4404345cb247221f9a59a1bf3c6c64cf7cfc3a0507f5eb44bc9a8 = $this->env->getExtension("native_profiler");
        $__internal_91c87f0b1af4404345cb247221f9a59a1bf3c6c64cf7cfc3a0507f5eb44bc9a8->enter($__internal_91c87f0b1af4404345cb247221f9a59a1bf3c6c64cf7cfc3a0507f5eb44bc9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_91c87f0b1af4404345cb247221f9a59a1bf3c6c64cf7cfc3a0507f5eb44bc9a8->leave($__internal_91c87f0b1af4404345cb247221f9a59a1bf3c6c64cf7cfc3a0507f5eb44bc9a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_652e78ad66a72ebccdeb1dcdc03cc2115b79776e5110410e5ede96c9905041c2 = $this->env->getExtension("native_profiler");
        $__internal_652e78ad66a72ebccdeb1dcdc03cc2115b79776e5110410e5ede96c9905041c2->enter($__internal_652e78ad66a72ebccdeb1dcdc03cc2115b79776e5110410e5ede96c9905041c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_652e78ad66a72ebccdeb1dcdc03cc2115b79776e5110410e5ede96c9905041c2->leave($__internal_652e78ad66a72ebccdeb1dcdc03cc2115b79776e5110410e5ede96c9905041c2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b55526821d5be18f5d8f61fe37e5187c10ef816310c82e7d23001d5f0d6b16c = $this->env->getExtension("native_profiler");
        $__internal_1b55526821d5be18f5d8f61fe37e5187c10ef816310c82e7d23001d5f0d6b16c->enter($__internal_1b55526821d5be18f5d8f61fe37e5187c10ef816310c82e7d23001d5f0d6b16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1b55526821d5be18f5d8f61fe37e5187c10ef816310c82e7d23001d5f0d6b16c->leave($__internal_1b55526821d5be18f5d8f61fe37e5187c10ef816310c82e7d23001d5f0d6b16c_prof);

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
