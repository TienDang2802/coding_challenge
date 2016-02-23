<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_2aa83468d430d33f79dc7cdb624477104572dbb60927427695722438ff958661 extends Twig_Template
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
        $__internal_fabaef34e8c5847ce7186b0cbb729313ba9290f9fa3aac8ea85f9a823d0ac6fc = $this->env->getExtension("native_profiler");
        $__internal_fabaef34e8c5847ce7186b0cbb729313ba9290f9fa3aac8ea85f9a823d0ac6fc->enter($__internal_fabaef34e8c5847ce7186b0cbb729313ba9290f9fa3aac8ea85f9a823d0ac6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_fabaef34e8c5847ce7186b0cbb729313ba9290f9fa3aac8ea85f9a823d0ac6fc->leave($__internal_fabaef34e8c5847ce7186b0cbb729313ba9290f9fa3aac8ea85f9a823d0ac6fc_prof);

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
