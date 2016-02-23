<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f32820264c165f01e6e82c1a7e739a3088f0d9d09fa40fdd16fc1e0308014721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cd5199dd809e9e030a089b8201f973a45426904ee98508d8c43bc091adf2a41 = $this->env->getExtension("native_profiler");
        $__internal_3cd5199dd809e9e030a089b8201f973a45426904ee98508d8c43bc091adf2a41->enter($__internal_3cd5199dd809e9e030a089b8201f973a45426904ee98508d8c43bc091adf2a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cd5199dd809e9e030a089b8201f973a45426904ee98508d8c43bc091adf2a41->leave($__internal_3cd5199dd809e9e030a089b8201f973a45426904ee98508d8c43bc091adf2a41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5550155c6b53e15fd68e3f69508f31c51ef469a1cc629166f76c053facf67be = $this->env->getExtension("native_profiler");
        $__internal_b5550155c6b53e15fd68e3f69508f31c51ef469a1cc629166f76c053facf67be->enter($__internal_b5550155c6b53e15fd68e3f69508f31c51ef469a1cc629166f76c053facf67be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b5550155c6b53e15fd68e3f69508f31c51ef469a1cc629166f76c053facf67be->leave($__internal_b5550155c6b53e15fd68e3f69508f31c51ef469a1cc629166f76c053facf67be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_82e8d8bfcc31bf29eecee4d6f7270189c87e85fc58a24b3b6150a5d8c5e6c3b9 = $this->env->getExtension("native_profiler");
        $__internal_82e8d8bfcc31bf29eecee4d6f7270189c87e85fc58a24b3b6150a5d8c5e6c3b9->enter($__internal_82e8d8bfcc31bf29eecee4d6f7270189c87e85fc58a24b3b6150a5d8c5e6c3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_82e8d8bfcc31bf29eecee4d6f7270189c87e85fc58a24b3b6150a5d8c5e6c3b9->leave($__internal_82e8d8bfcc31bf29eecee4d6f7270189c87e85fc58a24b3b6150a5d8c5e6c3b9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_030f0eac887d3d569fa69572cee4d370c3cc66d21b0eca056f75d2f23f4d591b = $this->env->getExtension("native_profiler");
        $__internal_030f0eac887d3d569fa69572cee4d370c3cc66d21b0eca056f75d2f23f4d591b->enter($__internal_030f0eac887d3d569fa69572cee4d370c3cc66d21b0eca056f75d2f23f4d591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_030f0eac887d3d569fa69572cee4d370c3cc66d21b0eca056f75d2f23f4d591b->leave($__internal_030f0eac887d3d569fa69572cee4d370c3cc66d21b0eca056f75d2f23f4d591b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
