<?php

/* @App/Api/post.html.twig */
class __TwigTemplate_2809e49a168dc99851323628205c4b8f434d877d716ad8dafca4d968b450d9f2 extends Twig_Template
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
        $__internal_35716486f553b233b1d65abf0c6f31cbde0f3b7e6fc4e42bc7ed33e1caea9b4c = $this->env->getExtension("native_profiler");
        $__internal_35716486f553b233b1d65abf0c6f31cbde0f3b7e6fc4e42bc7ed33e1caea9b4c->enter($__internal_35716486f553b233b1d65abf0c6f31cbde0f3b7e6fc4e42bc7ed33e1caea9b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Api/post.html.twig"));

        // line 1
        echo "<h1>Offer date: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["offer_date"]) ? $context["offer_date"] : $this->getContext($context, "offer_date"))), "html", null, true);
        echo "</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offer_rooms"]) ? $context["offer_rooms"] : $this->getContext($context, "offer_rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 4
            echo "    <li>
        ";
            // line 5
            echo twig_escape_filter($this->env, $context["room"], "html", null, true);
            echo "
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>";
        
        $__internal_35716486f553b233b1d65abf0c6f31cbde0f3b7e6fc4e42bc7ed33e1caea9b4c->leave($__internal_35716486f553b233b1d65abf0c6f31cbde0f3b7e6fc4e42bc7ed33e1caea9b4c_prof);

    }

    public function getTemplateName()
    {
        return "@App/Api/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  35 => 5,  32 => 4,  28 => 3,  22 => 1,);
    }
}
/* <h1>Offer date: {{ offer_date | date }}</h1>*/
/* <ul>*/
/*     {% for room in offer_rooms %}*/
/*     <li>*/
/*         {{ room }}*/
/*     </li>*/
/*     {% endfor %}*/
/* </ul>*/
