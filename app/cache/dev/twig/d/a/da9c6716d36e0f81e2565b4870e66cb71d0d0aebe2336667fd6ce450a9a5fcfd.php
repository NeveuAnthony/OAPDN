<?php

/* SiteBundle:Default:portal.html.twig */
class __TwigTemplate_389010b7e6be7786e9fc474886d791d698eb4b90d775f0f8d3df6ff4429df798 extends Twig_Template
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
        $__internal_98afafa4d2b416b27c82564a3e7ac214e8d6c1b4805d4257e02df75281474c70 = $this->env->getExtension("native_profiler");
        $__internal_98afafa4d2b416b27c82564a3e7ac214e8d6c1b4805d4257e02df75281474c70->enter($__internal_98afafa4d2b416b27c82564a3e7ac214e8d6c1b4805d4257e02df75281474c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:portal.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>

<head>

    <title>Become a Hero</title>
    <meta charset=utf-8>

    <!-- Liens vers les feuilles de style -->
    <style>

        /**********
         * ETC... *
         **********/
        * {
            padding: 0;
            margin: 0;
        }

        html {
            background: url(http://mancap.shost.ca/oapdn/images/background.jpg) no-repeat center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        body {
            color: rgba(255,255,255,.6);
            font-family: 'Open Sans', sans-serif;
            font-size: 1em;
            font-weight: 100;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        /**************
         * Navigation *
         **************/
        nav {

            width: 100%;
            height: 50px;
            background: url(http://mancap.shost.ca/oapdn/images/backtop_R.png) no-repeat right,
            url(http://mancap.shost.ca/oapdn/images/backtop_L.png) no-repeat left,
            url(http://mancap.shost.ca/oapdn/images/backtop.jpg) no-repeat center;
        }

        /*********
         * Jumbo *
         *********/
        #jumbo {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
        }

        #begins{
            background: url(http://mancap.shost.ca/oapdn/images/Begins.png);
            width: 523px;
            height: 100px;
            text-align: center;
        }

        #begins a img{
            margin-top: 18px;
        }

        #begins a img:hover{
            background: url(http://mancap.shost.ca/oapdn/images/light.png);
        }

        .return{
            position: absolute;
            top: 20px;
            left: 20px;
        }

    </style>

    <!-- Polices  -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

</head>

<body>

<!-- NAVIGATION -->
<nav>

</nav>


<!-- JUMBO -->
<div id=\"jumbo\">
    <img src=\"http://mancap.shost.ca/oapdn/images/BaH.png\">
    <div id=\"begins\">
        <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("site_homepage");
        echo "\"><img src=\"http://mancap.shost.ca/oapdn/images/BeginsText.png\"></a>
    </div>
</div>

</body>

</html>";
        
        $__internal_98afafa4d2b416b27c82564a3e7ac214e8d6c1b4805d4257e02df75281474c70->leave($__internal_98afafa4d2b416b27c82564a3e7ac214e8d6c1b4805d4257e02df75281474c70_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:portal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 102,  22 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/* */
/*     <title>Become a Hero</title>*/
/*     <meta charset=utf-8>*/
/* */
/*     <!-- Liens vers les feuilles de style -->*/
/*     <style>*/
/* */
/*         /***********/
/*          * ETC... **/
/*          **********//* */
/*         * {*/
/*             padding: 0;*/
/*             margin: 0;*/
/*         }*/
/* */
/*         html {*/
/*             background: url(http://mancap.shost.ca/oapdn/images/background.jpg) no-repeat center fixed;*/
/*             -webkit-background-size: cover;*/
/*             -moz-background-size: cover;*/
/*             -o-background-size: cover;*/
/*             background-size: cover;*/
/*         }*/
/* */
/*         body {*/
/*             color: rgba(255,255,255,.6);*/
/*             font-family: 'Open Sans', sans-serif;*/
/*             font-size: 1em;*/
/*             font-weight: 100;*/
/*             letter-spacing: 0.1em;*/
/*             text-transform: uppercase;*/
/*         }*/
/* */
/*         /***************/
/*          * Navigation **/
/*          **************//* */
/*         nav {*/
/* */
/*             width: 100%;*/
/*             height: 50px;*/
/*             background: url(http://mancap.shost.ca/oapdn/images/backtop_R.png) no-repeat right,*/
/*             url(http://mancap.shost.ca/oapdn/images/backtop_L.png) no-repeat left,*/
/*             url(http://mancap.shost.ca/oapdn/images/backtop.jpg) no-repeat center;*/
/*         }*/
/* */
/*         /**********/
/*          * Jumbo **/
/*          *********//* */
/*         #jumbo {*/
/*             display: flex;*/
/*             flex-direction: column;*/
/*             justify-content: center;*/
/*             align-items: center;*/
/*             min-height: 90vh;*/
/*         }*/
/* */
/*         #begins{*/
/*             background: url(http://mancap.shost.ca/oapdn/images/Begins.png);*/
/*             width: 523px;*/
/*             height: 100px;*/
/*             text-align: center;*/
/*         }*/
/* */
/*         #begins a img{*/
/*             margin-top: 18px;*/
/*         }*/
/* */
/*         #begins a img:hover{*/
/*             background: url(http://mancap.shost.ca/oapdn/images/light.png);*/
/*         }*/
/* */
/*         .return{*/
/*             position: absolute;*/
/*             top: 20px;*/
/*             left: 20px;*/
/*         }*/
/* */
/*     </style>*/
/* */
/*     <!-- Polices  -->*/
/*     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* <!-- NAVIGATION -->*/
/* <nav>*/
/* */
/* </nav>*/
/* */
/* */
/* <!-- JUMBO -->*/
/* <div id="jumbo">*/
/*     <img src="http://mancap.shost.ca/oapdn/images/BaH.png">*/
/*     <div id="begins">*/
/*         <a href="{{ path('site_homepage') }}"><img src="http://mancap.shost.ca/oapdn/images/BeginsText.png"></a>*/
/*     </div>*/
/* </div>*/
/* */
/* </body>*/
/* */
/* </html>*/
