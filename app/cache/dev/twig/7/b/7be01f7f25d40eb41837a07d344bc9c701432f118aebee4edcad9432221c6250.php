<?php

/* SiteBundle:Default:view.html.twig */
class __TwigTemplate_d9dc184f7b3307a28eb58ae6e7f3c3790507037b8aade30aeb7a74a757bfab0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5781a43e478b5946830c352428b4cdccca6c8cb1d7f8a104c0b19f6412334c93 = $this->env->getExtension("native_profiler");
        $__internal_5781a43e478b5946830c352428b4cdccca6c8cb1d7f8a104c0b19f6412334c93->enter($__internal_5781a43e478b5946830c352428b4cdccca6c8cb1d7f8a104c0b19f6412334c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:view.html.twig"));

        // line 1
        echo "<p>
";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scenario"]) ? $context["scenario"] : $this->getContext($context, "scenario")), "pageNumber", array()), "html", null, true);
        echo "
<br/>
";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scenario"]) ? $context["scenario"] : $this->getContext($context, "scenario")), "title", array()), "html", null, true);
        echo "
<br/>
";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scenario"]) ? $context["scenario"] : $this->getContext($context, "scenario")), "content", array()), "html", null, true);
        echo "
<br/>
<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_scenario_view", array("pageNumber" => $this->getAttribute((isset($context["scenario"]) ? $context["scenario"] : $this->getContext($context, "scenario")), "choice1", array()))), "html", null, true);
        echo "\">Lien</a>
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scenario"]) ? $context["scenario"] : $this->getContext($context, "scenario")), "choice1", array()), "html", null, true);
        echo "
<br/>
";
        // line 11
        if ( !(null === $this->getAttribute((isset($context["scenario"]) ? $context["scenario"] : $this->getContext($context, "scenario")), "choice2", array()))) {
            // line 12
            echo "\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scenario"]) ? $context["scenario"] : $this->getContext($context, "scenario")), "choice2", array()), "html", null, true);
            echo "
";
        }
        // line 14
        echo "</p>";
        
        $__internal_5781a43e478b5946830c352428b4cdccca6c8cb1d7f8a104c0b19f6412334c93->leave($__internal_5781a43e478b5946830c352428b4cdccca6c8cb1d7f8a104c0b19f6412334c93_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  51 => 12,  49 => 11,  44 => 9,  40 => 8,  35 => 6,  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* <p>*/
/* {{ scenario.pageNumber }}*/
/* <br/>*/
/* {{ scenario.title }}*/
/* <br/>*/
/* {{ scenario.content }}*/
/* <br/>*/
/* <a href="{{ path('site_scenario_view', {'pageNumber': scenario.choice1}) }}">Lien</a>*/
/* {{ scenario.choice1 }}*/
/* <br/>*/
/* {% if scenario.choice2 is not null%}*/
/* 	{{ scenario.choice2 }}*/
/* {% endif %}*/
/* </p>*/
