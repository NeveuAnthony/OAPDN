<?php

/* snowballBundle:Default:index.html.twig */
class __TwigTemplate_49939be530bbca10722d1508177345cd4c83d1a9fa808c58c8c537b598984fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "snowballBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'style' => array($this, 'block_style'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80f72a3d937f7142eab94d17b6f72f145492c4e315e9d7e80d640d887cccaee1 = $this->env->getExtension("native_profiler");
        $__internal_80f72a3d937f7142eab94d17b6f72f145492c4e315e9d7e80d640d887cccaee1->enter($__internal_80f72a3d937f7142eab94d17b6f72f145492c4e315e9d7e80d640d887cccaee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "snowballBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f72a3d937f7142eab94d17b6f72f145492c4e315e9d7e80d640d887cccaee1->leave($__internal_80f72a3d937f7142eab94d17b6f72f145492c4e315e9d7e80d640d887cccaee1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa49966e1e83f5a176868fbf2fa85e1865ecfed4ea5b0dc91acfebf84e7e25ef = $this->env->getExtension("native_profiler");
        $__internal_fa49966e1e83f5a176868fbf2fa85e1865ecfed4ea5b0dc91acfebf84e7e25ef->enter($__internal_fa49966e1e83f5a176868fbf2fa85e1865ecfed4ea5b0dc91acfebf84e7e25ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <ul class=\"grid\">
        ";
        // line 6
        $context["n"] = 0;
        // line 7
        echo "        ";
        $context["y"] = $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "cols", array());
        // line 8
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "            <ul class=\"cols\">
                ";
            // line 10
            $context["x"] = $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "raws", array());
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["x"]) ? $context["x"] : $this->getContext($context, "x"))));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 12
                echo "                    <li>
                        <!--<img src={asset('uploads/logo/~company.getCompanyLogo)\"></img> -->
                        ";
                // line 14
                if ((($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 0, array(), "array"), "x", array()) == $context["i"]) && ($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 0, array(), "array"), "y", array()) == $context["j"]))) {
                    // line 15
                    echo "                            <image src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boxes/player.png"), "html", null, true);
                    echo "\"></image>
                        ";
                } elseif ((($this->getAttribute($this->getAttribute(                // line 16
(isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 1, array(), "array"), "x", array()) == $context["i"]) && ($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 1, array(), "array"), "y", array()) == $context["j"]))) {
                    // line 17
                    echo "                            ";
                    if ((($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 3, array(), "array"), "x", array()) == $context["i"]) && ($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 3, array(), "array"), "y", array()) == $context["j"]))) {
                        // line 18
                        echo "                                ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 2, array(), "array"), "x", array()) == $context["i"]) && ($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 2, array(), "array"), "y", array()) == $context["j"]))) {
                            // line 19
                            echo "                                    <image src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boxes/snow-lms.png"), "html", null, true);
                            echo "\">
                                ";
                        }
                        // line 21
                        echo "                            ";
                    } else {
                        // line 22
                        echo "                                <image src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boxes/snow-s.png"), "html", null, true);
                        echo "\"></image>
                            ";
                    }
                    // line 24
                    echo "                        ";
                } elseif ((($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 2, array(), "array"), "x", array()) == $context["i"]) && ($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 2, array(), "array"), "y", array()) == $context["j"]))) {
                    // line 25
                    echo "                            ";
                    if ((($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 3, array(), "array"), "x", array()) == $context["i"]) && ($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 3, array(), "array"), "y", array()) == $context["j"]))) {
                        // line 26
                        echo "                                <image src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boxes/snow-lm.png"), "html", null, true);
                        echo "\"></image>
                            ";
                    } else {
                        // line 28
                        echo "                                <image src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boxes/snow-m.png"), "html", null, true);
                        echo "\"></image>
                            ";
                    }
                    // line 30
                    echo "                        ";
                } elseif ((($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 3, array(), "array"), "x", array()) == $context["i"]) && ($this->getAttribute($this->getAttribute((isset($context["listBoxes"]) ? $context["listBoxes"] : $this->getContext($context, "listBoxes")), 3, array(), "array"), "y", array()) == $context["j"]))) {
                    // line 31
                    echo "                            <image src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boxes/snow-l.png"), "html", null, true);
                    echo "\"></image>
                        ";
                } else {
                    // line 33
                    echo "                            <image src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boxes/grass.png"), "html", null, true);
                    echo "\"></image>
                        ";
                }
                // line 35
                echo "
                    </li>
                    ";
                // line 37
                $context["n"] = ((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")) + 1);
                // line 38
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </ul>
    <hr/>
    ";
        // line 43
        $this->loadTemplate("snowballBundle:Default:HUD.html.twig", "snowballBundle:Default:index.html.twig", 43)->display($context);
        
        $__internal_fa49966e1e83f5a176868fbf2fa85e1865ecfed4ea5b0dc91acfebf84e7e25ef->leave($__internal_fa49966e1e83f5a176868fbf2fa85e1865ecfed4ea5b0dc91acfebf84e7e25ef_prof);

    }

    // line 46
    public function block_style($context, array $blocks = array())
    {
        $__internal_24f8573088bc8d97334570e16dc6ff53aadb5538c0428f336b4fbf063cf93b2f = $this->env->getExtension("native_profiler");
        $__internal_24f8573088bc8d97334570e16dc6ff53aadb5538c0428f336b4fbf063cf93b2f->enter($__internal_24f8573088bc8d97334570e16dc6ff53aadb5538c0428f336b4fbf063cf93b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 47
        echo "    <style>
        ul,li {
            list-style-type : none;
        }

        .cols{
            display: inline-block;
            margin:0px;
            padding:0px;
        }

        .grid{
            text-align:center;
        }

    </style>
";
        
        $__internal_24f8573088bc8d97334570e16dc6ff53aadb5538c0428f336b4fbf063cf93b2f->leave($__internal_24f8573088bc8d97334570e16dc6ff53aadb5538c0428f336b4fbf063cf93b2f_prof);

    }

    public function getTemplateName()
    {
        return "snowballBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 47,  162 => 46,  155 => 43,  151 => 41,  144 => 39,  138 => 38,  136 => 37,  132 => 35,  126 => 33,  120 => 31,  117 => 30,  111 => 28,  105 => 26,  102 => 25,  99 => 24,  93 => 22,  90 => 21,  84 => 19,  81 => 18,  78 => 17,  76 => 16,  71 => 15,  69 => 14,  65 => 12,  60 => 11,  58 => 10,  55 => 9,  50 => 8,  47 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {%  extends('::base.html.twig') %}*/
/* */
/* {% block body %}*/
/* */
/*     <ul class="grid">*/
/*         {% set n = 0 %}*/
/*         {% set y = grid.cols %}*/
/*         {% for i in 0..y %}*/
/*             <ul class="cols">*/
/*                 {% set x = grid.raws %}*/
/*                 {% for j in 0..x %}*/
/*                     <li>*/
/*                         <!--<img src={asset('uploads/logo/~company.getCompanyLogo)"></img> -->*/
/*                         {% if listBoxes[0].x == i and listBoxes[0].y == j %}*/
/*                             <image src="{{ asset('boxes/player.png') }}"></image>*/
/*                         {% elseif listBoxes[1].x == i and listBoxes[1].y == j %}*/
/*                             {% if listBoxes[3].x == i and listBoxes[3].y == j %}*/
/*                                 {% if listBoxes[2].x == i and listBoxes[2].y == j %}*/
/*                                     <image src="{{ asset('boxes/snow-lms.png') }}">*/
/*                                 {% endif %}*/
/*                             {% else %}*/
/*                                 <image src="{{ asset('boxes/snow-s.png') }}"></image>*/
/*                             {% endif %}*/
/*                         {% elseif listBoxes[2].x == i and listBoxes[2].y == j %}*/
/*                             {% if listBoxes[3].x == i and listBoxes[3].y == j %}*/
/*                                 <image src="{{ asset('boxes/snow-lm.png') }}"></image>*/
/*                             {% else %}*/
/*                                 <image src="{{ asset('boxes/snow-m.png') }}"></image>*/
/*                             {% endif %}*/
/*                         {% elseif listBoxes[3].x == i and listBoxes[3].y == j %}*/
/*                             <image src="{{ asset('boxes/snow-l.png') }}"></image>*/
/*                         {% else %}*/
/*                             <image src="{{ asset('boxes/grass.png') }}"></image>*/
/*                         {% endif %}*/
/* */
/*                     </li>*/
/*                     {% set n = n+1 %}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <hr/>*/
/*     {% include('snowballBundle:Default:HUD.html.twig') %}*/
/* {% endblock %}*/
/* */
/* {% block style %}*/
/*     <style>*/
/*         ul,li {*/
/*             list-style-type : none;*/
/*         }*/
/* */
/*         .cols{*/
/*             display: inline-block;*/
/*             margin:0px;*/
/*             padding:0px;*/
/*         }*/
/* */
/*         .grid{*/
/*             text-align:center;*/
/*         }*/
/* */
/*     </style>*/
/* {% endblock %}*/
