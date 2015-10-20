<?php

/* snowballBundle:Default:HUD.html.twig */
class __TwigTemplate_1b29ef529d8e22a54649b9c3a55035e923fed5cf9d1a6e780697ca06b8eaff6f extends Twig_Template
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
        $__internal_5fed1b4aef50adec0dcbadd4a0765ce99fe1dae425147e305c45a0c7c2d15036 = $this->env->getExtension("native_profiler");
        $__internal_5fed1b4aef50adec0dcbadd4a0765ce99fe1dae425147e305c45a0c7c2d15036->enter($__internal_5fed1b4aef50adec0dcbadd4a0765ce99fe1dae425147e305c45a0c7c2d15036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "snowballBundle:Default:HUD.html.twig"));

        // line 1
        echo "<div class=\"hud\" style=\"text-align: center\">
    <div id=\"first-level\">
        <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("snowball_move", array("direction" => "up"));
        echo "\"><image src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boxes/up.png"), "html", null, true);
        echo "\"></image></a>
    </div>
    <div id=\"second-level\">
        <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("snowball_move", array("direction" => "left"));
        echo "\"><image src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boxes/left.png"), "html", null, true);
        echo "\"></image></a>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("snowball_move", array("direction" => "down"));
        echo "\"><image src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boxes/down.png"), "html", null, true);
        echo "\"></image></a>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("snowball_move", array("direction" => "right"));
        echo "\"><image src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boxes/right.png"), "html", null, true);
        echo "\"></image></a>
    </div>
</div>";
        
        $__internal_5fed1b4aef50adec0dcbadd4a0765ce99fe1dae425147e305c45a0c7c2d15036->leave($__internal_5fed1b4aef50adec0dcbadd4a0765ce99fe1dae425147e305c45a0c7c2d15036_prof);

    }

    public function getTemplateName()
    {
        return "snowballBundle:Default:HUD.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  40 => 7,  34 => 6,  26 => 3,  22 => 1,);
    }
}
/* <div class="hud" style="text-align: center">*/
/*     <div id="first-level">*/
/*         <a href="{{ path('snowball_move',{'direction': 'up'}) }}"><image src="{{ asset('boxes/up.png') }}"></image></a>*/
/*     </div>*/
/*     <div id="second-level">*/
/*         <a href="{{ path('snowball_move',{'direction': 'left'}) }}"><image src="{{ asset('boxes/left.png') }}"></image></a>*/
/*         <a href="{{ path('snowball_move',{'direction': 'down'}) }}"><image src="{{ asset('boxes/down.png') }}"></image></a>*/
/*         <a href="{{ path('snowball_move',{'direction': 'right'}) }}"><image src="{{ asset('boxes/right.png') }}"></image></a>*/
/*     </div>*/
/* </div>*/
