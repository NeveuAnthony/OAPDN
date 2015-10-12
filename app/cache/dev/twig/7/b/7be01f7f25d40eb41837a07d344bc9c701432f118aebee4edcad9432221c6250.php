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
        $__internal_b2070a73beee22e8ef00e1a2b548ac0a38e13b0b7aba7720f6ea474197c49b94 = $this->env->getExtension("native_profiler");
        $__internal_b2070a73beee22e8ef00e1a2b548ac0a38e13b0b7aba7720f6ea474197c49b94->enter($__internal_b2070a73beee22e8ef00e1a2b548ac0a38e13b0b7aba7720f6ea474197c49b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:view.html.twig"));

        // line 1
        echo "<p>
";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scenario"]) ? $context["scenario"] : $this->getContext($context, "scenario")), "id", array()), "html", null, true);
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
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scenario"]) ? $context["scenario"] : $this->getContext($context, "scenario")), "choice1", array()), "html", null, true);
        echo "
<br/>
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scenario"]) ? $context["scenario"] : $this->getContext($context, "scenario")), "choice2", array()), "html", null, true);
        echo "
</p>";
        
        $__internal_b2070a73beee22e8ef00e1a2b548ac0a38e13b0b7aba7720f6ea474197c49b94->leave($__internal_b2070a73beee22e8ef00e1a2b548ac0a38e13b0b7aba7720f6ea474197c49b94_prof);

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
        return array (  45 => 10,  40 => 8,  35 => 6,  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* <p>*/
/* {{ scenario.id }}*/
/* <br/>*/
/* {{ scenario.title }}*/
/* <br/>*/
/* {{ scenario.content }}*/
/* <br/>*/
/* {{ scenario.choice1 }}*/
/* <br/>*/
/* {{ scenario.choice2 }}*/
/* </p>*/
