<?php

/* base.html.twig */
class __TwigTemplate_4da515ab7aca5a3914083d2327b3ec13dab4910dca5179a14770a1c2fddd242a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77d85a9161e79dc1187e25de3c7ec04816272bcd7bc7bb541d3a79716c6cb1b3 = $this->env->getExtension("native_profiler");
        $__internal_77d85a9161e79dc1187e25de3c7ec04816272bcd7bc7bb541d3a79716c6cb1b3->enter($__internal_77d85a9161e79dc1187e25de3c7ec04816272bcd7bc7bb541d3a79716c6cb1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_77d85a9161e79dc1187e25de3c7ec04816272bcd7bc7bb541d3a79716c6cb1b3->leave($__internal_77d85a9161e79dc1187e25de3c7ec04816272bcd7bc7bb541d3a79716c6cb1b3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a908372dd0d1041968fafff7b752b1834c24365ef9747421eff94e049a5a151 = $this->env->getExtension("native_profiler");
        $__internal_0a908372dd0d1041968fafff7b752b1834c24365ef9747421eff94e049a5a151->enter($__internal_0a908372dd0d1041968fafff7b752b1834c24365ef9747421eff94e049a5a151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0a908372dd0d1041968fafff7b752b1834c24365ef9747421eff94e049a5a151->leave($__internal_0a908372dd0d1041968fafff7b752b1834c24365ef9747421eff94e049a5a151_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90993e14d3d74c3f409af749b47838204d63e295c160c48c97b1ac355113ed86 = $this->env->getExtension("native_profiler");
        $__internal_90993e14d3d74c3f409af749b47838204d63e295c160c48c97b1ac355113ed86->enter($__internal_90993e14d3d74c3f409af749b47838204d63e295c160c48c97b1ac355113ed86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_90993e14d3d74c3f409af749b47838204d63e295c160c48c97b1ac355113ed86->leave($__internal_90993e14d3d74c3f409af749b47838204d63e295c160c48c97b1ac355113ed86_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f9ce46c901c99e9bd1296b03e2db55084b3052cec4d119677e89c2301f95d05 = $this->env->getExtension("native_profiler");
        $__internal_8f9ce46c901c99e9bd1296b03e2db55084b3052cec4d119677e89c2301f95d05->enter($__internal_8f9ce46c901c99e9bd1296b03e2db55084b3052cec4d119677e89c2301f95d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f9ce46c901c99e9bd1296b03e2db55084b3052cec4d119677e89c2301f95d05->leave($__internal_8f9ce46c901c99e9bd1296b03e2db55084b3052cec4d119677e89c2301f95d05_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bc6ef5465c54c0e56126463cad1f7a1169363d4ac3f73bf5b5c7d8865758578 = $this->env->getExtension("native_profiler");
        $__internal_5bc6ef5465c54c0e56126463cad1f7a1169363d4ac3f73bf5b5c7d8865758578->enter($__internal_5bc6ef5465c54c0e56126463cad1f7a1169363d4ac3f73bf5b5c7d8865758578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5bc6ef5465c54c0e56126463cad1f7a1169363d4ac3f73bf5b5c7d8865758578->leave($__internal_5bc6ef5465c54c0e56126463cad1f7a1169363d4ac3f73bf5b5c7d8865758578_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
