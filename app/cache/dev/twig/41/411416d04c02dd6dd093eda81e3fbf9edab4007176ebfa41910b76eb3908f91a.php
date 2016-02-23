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
        $__internal_4aaa96f33f49f7c8695f7f306bbcfde6751fb87bcefd1bec3bca718c19d881e3 = $this->env->getExtension("native_profiler");
        $__internal_4aaa96f33f49f7c8695f7f306bbcfde6751fb87bcefd1bec3bca718c19d881e3->enter($__internal_4aaa96f33f49f7c8695f7f306bbcfde6751fb87bcefd1bec3bca718c19d881e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aaa96f33f49f7c8695f7f306bbcfde6751fb87bcefd1bec3bca718c19d881e3->leave($__internal_4aaa96f33f49f7c8695f7f306bbcfde6751fb87bcefd1bec3bca718c19d881e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_661a56589f1ce0c35f4a2a62eb015826376c7430747e1c0485c9e29a20c50bbe = $this->env->getExtension("native_profiler");
        $__internal_661a56589f1ce0c35f4a2a62eb015826376c7430747e1c0485c9e29a20c50bbe->enter($__internal_661a56589f1ce0c35f4a2a62eb015826376c7430747e1c0485c9e29a20c50bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_661a56589f1ce0c35f4a2a62eb015826376c7430747e1c0485c9e29a20c50bbe->leave($__internal_661a56589f1ce0c35f4a2a62eb015826376c7430747e1c0485c9e29a20c50bbe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d816d251d43fec1ab24ea10b4238808d7bc0e9bc3ea13d5ecb158e26085bac4d = $this->env->getExtension("native_profiler");
        $__internal_d816d251d43fec1ab24ea10b4238808d7bc0e9bc3ea13d5ecb158e26085bac4d->enter($__internal_d816d251d43fec1ab24ea10b4238808d7bc0e9bc3ea13d5ecb158e26085bac4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d816d251d43fec1ab24ea10b4238808d7bc0e9bc3ea13d5ecb158e26085bac4d->leave($__internal_d816d251d43fec1ab24ea10b4238808d7bc0e9bc3ea13d5ecb158e26085bac4d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0fa42beaead68461c975b174b84bd43bc9d89ab6ee25821f1161031ad0714da = $this->env->getExtension("native_profiler");
        $__internal_a0fa42beaead68461c975b174b84bd43bc9d89ab6ee25821f1161031ad0714da->enter($__internal_a0fa42beaead68461c975b174b84bd43bc9d89ab6ee25821f1161031ad0714da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a0fa42beaead68461c975b174b84bd43bc9d89ab6ee25821f1161031ad0714da->leave($__internal_a0fa42beaead68461c975b174b84bd43bc9d89ab6ee25821f1161031ad0714da_prof);

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
