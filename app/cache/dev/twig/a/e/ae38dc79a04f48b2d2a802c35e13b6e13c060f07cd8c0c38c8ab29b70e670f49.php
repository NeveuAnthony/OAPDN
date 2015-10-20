<?php

/* ::base.html.twig */
class __TwigTemplate_e3778b84e06a1b64e62274f7c84de8b5c8ecf45e72d988f8250af04baa1569d3 extends Twig_Template
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
            'style' => array($this, 'block_style'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37b0eefa6d64c40c4258b7b84e78a5ba2e7d1f8a4901b2c1d350b27ffad9987a = $this->env->getExtension("native_profiler");
        $__internal_37b0eefa6d64c40c4258b7b84e78a5ba2e7d1f8a4901b2c1d350b27ffad9987a->enter($__internal_37b0eefa6d64c40c4258b7b84e78a5ba2e7d1f8a4901b2c1d350b27ffad9987a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "        ";
        $this->displayBlock('style', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_37b0eefa6d64c40c4258b7b84e78a5ba2e7d1f8a4901b2c1d350b27ffad9987a->leave($__internal_37b0eefa6d64c40c4258b7b84e78a5ba2e7d1f8a4901b2c1d350b27ffad9987a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8cfe3e92ed23472746b13a1bd8578f0ffd3b31e01a6e650eca5701bec1a2de9 = $this->env->getExtension("native_profiler");
        $__internal_b8cfe3e92ed23472746b13a1bd8578f0ffd3b31e01a6e650eca5701bec1a2de9->enter($__internal_b8cfe3e92ed23472746b13a1bd8578f0ffd3b31e01a6e650eca5701bec1a2de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b8cfe3e92ed23472746b13a1bd8578f0ffd3b31e01a6e650eca5701bec1a2de9->leave($__internal_b8cfe3e92ed23472746b13a1bd8578f0ffd3b31e01a6e650eca5701bec1a2de9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca55d7fff0ce1f002afeae3600f669746bbfd5ff32b87493ac790c0c0cfbb6c5 = $this->env->getExtension("native_profiler");
        $__internal_ca55d7fff0ce1f002afeae3600f669746bbfd5ff32b87493ac790c0c0cfbb6c5->enter($__internal_ca55d7fff0ce1f002afeae3600f669746bbfd5ff32b87493ac790c0c0cfbb6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ca55d7fff0ce1f002afeae3600f669746bbfd5ff32b87493ac790c0c0cfbb6c5->leave($__internal_ca55d7fff0ce1f002afeae3600f669746bbfd5ff32b87493ac790c0c0cfbb6c5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcfa26079e0f6bd9b1adbb7a2589d3edabdcbee96c26517aa64f741f0e8e5c15 = $this->env->getExtension("native_profiler");
        $__internal_fcfa26079e0f6bd9b1adbb7a2589d3edabdcbee96c26517aa64f741f0e8e5c15->enter($__internal_fcfa26079e0f6bd9b1adbb7a2589d3edabdcbee96c26517aa64f741f0e8e5c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fcfa26079e0f6bd9b1adbb7a2589d3edabdcbee96c26517aa64f741f0e8e5c15->leave($__internal_fcfa26079e0f6bd9b1adbb7a2589d3edabdcbee96c26517aa64f741f0e8e5c15_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf916c75e12d703a880dde44001014aa9294c7bf8d68793f17b2e616ab6eb204 = $this->env->getExtension("native_profiler");
        $__internal_cf916c75e12d703a880dde44001014aa9294c7bf8d68793f17b2e616ab6eb204->enter($__internal_cf916c75e12d703a880dde44001014aa9294c7bf8d68793f17b2e616ab6eb204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cf916c75e12d703a880dde44001014aa9294c7bf8d68793f17b2e616ab6eb204->leave($__internal_cf916c75e12d703a880dde44001014aa9294c7bf8d68793f17b2e616ab6eb204_prof);

    }

    // line 12
    public function block_style($context, array $blocks = array())
    {
        $__internal_a6f336754476145eb89d733004f3e4a3f51c2bf7c5e42d630319ca966265879c = $this->env->getExtension("native_profiler");
        $__internal_a6f336754476145eb89d733004f3e4a3f51c2bf7c5e42d630319ca966265879c->enter($__internal_a6f336754476145eb89d733004f3e4a3f51c2bf7c5e42d630319ca966265879c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_a6f336754476145eb89d733004f3e4a3f51c2bf7c5e42d630319ca966265879c->leave($__internal_a6f336754476145eb89d733004f3e4a3f51c2bf7c5e42d630319ca966265879c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 12,  97 => 11,  86 => 10,  75 => 6,  63 => 5,  54 => 13,  51 => 12,  48 => 11,  46 => 10,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
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
/*         {% block style %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
