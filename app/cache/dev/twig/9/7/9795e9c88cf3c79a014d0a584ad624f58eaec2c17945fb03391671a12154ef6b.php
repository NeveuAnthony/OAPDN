<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_a4b9fe372bb2ccec7c70c7a7df0b952f68dad5b885652fa0722508109547cdca extends Twig_Template
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
        $__internal_ef7a24f4909a8ffc0c39d12fe57d88b85284daa0ce6a91550aba7f33dc6fe9eb = $this->env->getExtension("native_profiler");
        $__internal_ef7a24f4909a8ffc0c39d12fe57d88b85284daa0ce6a91550aba7f33dc6fe9eb->enter($__internal_ef7a24f4909a8ffc0c39d12fe57d88b85284daa0ce6a91550aba7f33dc6fe9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ef7a24f4909a8ffc0c39d12fe57d88b85284daa0ce6a91550aba7f33dc6fe9eb->leave($__internal_ef7a24f4909a8ffc0c39d12fe57d88b85284daa0ce6a91550aba7f33dc6fe9eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
