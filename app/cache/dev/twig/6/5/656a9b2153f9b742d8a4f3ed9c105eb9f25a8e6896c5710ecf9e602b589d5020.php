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
        $__internal_9fd22416a5931841e6e4e569f6dc1b2a9d3c811ee4af7f4d371e9ce351ec27c9 = $this->env->getExtension("native_profiler");
        $__internal_9fd22416a5931841e6e4e569f6dc1b2a9d3c811ee4af7f4d371e9ce351ec27c9->enter($__internal_9fd22416a5931841e6e4e569f6dc1b2a9d3c811ee4af7f4d371e9ce351ec27c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fd22416a5931841e6e4e569f6dc1b2a9d3c811ee4af7f4d371e9ce351ec27c9->leave($__internal_9fd22416a5931841e6e4e569f6dc1b2a9d3c811ee4af7f4d371e9ce351ec27c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df7402e3f2d01f5816d31e21820e5996580312b7e80d5ef4befbdb38853db990 = $this->env->getExtension("native_profiler");
        $__internal_df7402e3f2d01f5816d31e21820e5996580312b7e80d5ef4befbdb38853db990->enter($__internal_df7402e3f2d01f5816d31e21820e5996580312b7e80d5ef4befbdb38853db990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_df7402e3f2d01f5816d31e21820e5996580312b7e80d5ef4befbdb38853db990->leave($__internal_df7402e3f2d01f5816d31e21820e5996580312b7e80d5ef4befbdb38853db990_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b4b5d0c2e563d050353e674de61d2f1f6d8e3bc00ba6fcc06a1115e34666fa1 = $this->env->getExtension("native_profiler");
        $__internal_8b4b5d0c2e563d050353e674de61d2f1f6d8e3bc00ba6fcc06a1115e34666fa1->enter($__internal_8b4b5d0c2e563d050353e674de61d2f1f6d8e3bc00ba6fcc06a1115e34666fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8b4b5d0c2e563d050353e674de61d2f1f6d8e3bc00ba6fcc06a1115e34666fa1->leave($__internal_8b4b5d0c2e563d050353e674de61d2f1f6d8e3bc00ba6fcc06a1115e34666fa1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f297127dccaa9fa63347591866f7def18b61f2f6825e614c436b2f1a1eceb535 = $this->env->getExtension("native_profiler");
        $__internal_f297127dccaa9fa63347591866f7def18b61f2f6825e614c436b2f1a1eceb535->enter($__internal_f297127dccaa9fa63347591866f7def18b61f2f6825e614c436b2f1a1eceb535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f297127dccaa9fa63347591866f7def18b61f2f6825e614c436b2f1a1eceb535->leave($__internal_f297127dccaa9fa63347591866f7def18b61f2f6825e614c436b2f1a1eceb535_prof);

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
