<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2cf74b8cd7eb0591a9e6765d17ae43815f8c6072c07cc911c8d91deff4d95972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d29fa2805e8fc19f5057c7ade9a8874bdc6c6ebb4de6b701d1b37964831cc8ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d29fa2805e8fc19f5057c7ade9a8874bdc6c6ebb4de6b701d1b37964831cc8ac->enter($__internal_d29fa2805e8fc19f5057c7ade9a8874bdc6c6ebb4de6b701d1b37964831cc8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_22c106b7184c588355fb05885f182c0c4703045993a9f27ab5139c3d0afb4d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c106b7184c588355fb05885f182c0c4703045993a9f27ab5139c3d0afb4d73->enter($__internal_22c106b7184c588355fb05885f182c0c4703045993a9f27ab5139c3d0afb4d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d29fa2805e8fc19f5057c7ade9a8874bdc6c6ebb4de6b701d1b37964831cc8ac->leave($__internal_d29fa2805e8fc19f5057c7ade9a8874bdc6c6ebb4de6b701d1b37964831cc8ac_prof);

        
        $__internal_22c106b7184c588355fb05885f182c0c4703045993a9f27ab5139c3d0afb4d73->leave($__internal_22c106b7184c588355fb05885f182c0c4703045993a9f27ab5139c3d0afb4d73_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_670cb887c730332c93aff8146150ceb369f3da045ef2bb78bbd939634cdc72ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670cb887c730332c93aff8146150ceb369f3da045ef2bb78bbd939634cdc72ff->enter($__internal_670cb887c730332c93aff8146150ceb369f3da045ef2bb78bbd939634cdc72ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_806c3792fd85e03fa9968cdbe42cb799870bf0c074fb5b4d05230bae66567efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806c3792fd85e03fa9968cdbe42cb799870bf0c074fb5b4d05230bae66567efb->enter($__internal_806c3792fd85e03fa9968cdbe42cb799870bf0c074fb5b4d05230bae66567efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_806c3792fd85e03fa9968cdbe42cb799870bf0c074fb5b4d05230bae66567efb->leave($__internal_806c3792fd85e03fa9968cdbe42cb799870bf0c074fb5b4d05230bae66567efb_prof);

        
        $__internal_670cb887c730332c93aff8146150ceb369f3da045ef2bb78bbd939634cdc72ff->leave($__internal_670cb887c730332c93aff8146150ceb369f3da045ef2bb78bbd939634cdc72ff_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_783a297bd33159d9b021d93b007599983ab368c9f4bda038579d6f97ede64920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783a297bd33159d9b021d93b007599983ab368c9f4bda038579d6f97ede64920->enter($__internal_783a297bd33159d9b021d93b007599983ab368c9f4bda038579d6f97ede64920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02b4b7e137319422fa350e8155be8322dc714796929ca619ad8c6647d2e99bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b4b7e137319422fa350e8155be8322dc714796929ca619ad8c6647d2e99bdc->enter($__internal_02b4b7e137319422fa350e8155be8322dc714796929ca619ad8c6647d2e99bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02b4b7e137319422fa350e8155be8322dc714796929ca619ad8c6647d2e99bdc->leave($__internal_02b4b7e137319422fa350e8155be8322dc714796929ca619ad8c6647d2e99bdc_prof);

        
        $__internal_783a297bd33159d9b021d93b007599983ab368c9f4bda038579d6f97ede64920->leave($__internal_783a297bd33159d9b021d93b007599983ab368c9f4bda038579d6f97ede64920_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_edb8af6feb0815bb4f588bf49a88a95964175f175ed85e0e8a889a1d18e46f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb8af6feb0815bb4f588bf49a88a95964175f175ed85e0e8a889a1d18e46f46->enter($__internal_edb8af6feb0815bb4f588bf49a88a95964175f175ed85e0e8a889a1d18e46f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a34b6d55c0403de73a561020c4b124bdc01b5b2212dc489bd4e5e3ba70e8214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a34b6d55c0403de73a561020c4b124bdc01b5b2212dc489bd4e5e3ba70e8214->enter($__internal_9a34b6d55c0403de73a561020c4b124bdc01b5b2212dc489bd4e5e3ba70e8214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9a34b6d55c0403de73a561020c4b124bdc01b5b2212dc489bd4e5e3ba70e8214->leave($__internal_9a34b6d55c0403de73a561020c4b124bdc01b5b2212dc489bd4e5e3ba70e8214_prof);

        
        $__internal_edb8af6feb0815bb4f588bf49a88a95964175f175ed85e0e8a889a1d18e46f46->leave($__internal_edb8af6feb0815bb4f588bf49a88a95964175f175ed85e0e8a889a1d18e46f46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/metinet/Workspace/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
