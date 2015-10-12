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
        $__internal_4647094c13548d1cb844a301bec00ea995e225247ed4c611005bb736dd6f30b6 = $this->env->getExtension("native_profiler");
        $__internal_4647094c13548d1cb844a301bec00ea995e225247ed4c611005bb736dd6f30b6->enter($__internal_4647094c13548d1cb844a301bec00ea995e225247ed4c611005bb736dd6f30b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4647094c13548d1cb844a301bec00ea995e225247ed4c611005bb736dd6f30b6->leave($__internal_4647094c13548d1cb844a301bec00ea995e225247ed4c611005bb736dd6f30b6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_659203c14674c502059fb7c892347a1f99304b40c2266df3dec7ad26250203e9 = $this->env->getExtension("native_profiler");
        $__internal_659203c14674c502059fb7c892347a1f99304b40c2266df3dec7ad26250203e9->enter($__internal_659203c14674c502059fb7c892347a1f99304b40c2266df3dec7ad26250203e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_659203c14674c502059fb7c892347a1f99304b40c2266df3dec7ad26250203e9->leave($__internal_659203c14674c502059fb7c892347a1f99304b40c2266df3dec7ad26250203e9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85f47cb0990d2cbd001029e4d8cd502580aa3c44898e88c9cf24871728d3cb2d = $this->env->getExtension("native_profiler");
        $__internal_85f47cb0990d2cbd001029e4d8cd502580aa3c44898e88c9cf24871728d3cb2d->enter($__internal_85f47cb0990d2cbd001029e4d8cd502580aa3c44898e88c9cf24871728d3cb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_85f47cb0990d2cbd001029e4d8cd502580aa3c44898e88c9cf24871728d3cb2d->leave($__internal_85f47cb0990d2cbd001029e4d8cd502580aa3c44898e88c9cf24871728d3cb2d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_44e2531a7cccb3f54def3479f91497c56b153a7cc3292e3662013e75d984549f = $this->env->getExtension("native_profiler");
        $__internal_44e2531a7cccb3f54def3479f91497c56b153a7cc3292e3662013e75d984549f->enter($__internal_44e2531a7cccb3f54def3479f91497c56b153a7cc3292e3662013e75d984549f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_44e2531a7cccb3f54def3479f91497c56b153a7cc3292e3662013e75d984549f->leave($__internal_44e2531a7cccb3f54def3479f91497c56b153a7cc3292e3662013e75d984549f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24cf6eba4cbc4ba3414f022a96af8bd031e9ad194399116de1a42541793718ae = $this->env->getExtension("native_profiler");
        $__internal_24cf6eba4cbc4ba3414f022a96af8bd031e9ad194399116de1a42541793718ae->enter($__internal_24cf6eba4cbc4ba3414f022a96af8bd031e9ad194399116de1a42541793718ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_24cf6eba4cbc4ba3414f022a96af8bd031e9ad194399116de1a42541793718ae->leave($__internal_24cf6eba4cbc4ba3414f022a96af8bd031e9ad194399116de1a42541793718ae_prof);

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
