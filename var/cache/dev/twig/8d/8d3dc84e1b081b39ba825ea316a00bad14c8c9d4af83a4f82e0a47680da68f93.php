<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a7e71c1043e0b1f59fc3e0c6718ec1dd66847c68b4e800da2e25420f2560746b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad5eb82954770f36b47cb2c7e73bfb1effbec5fd9f4108bdac04e52fe9d03579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5eb82954770f36b47cb2c7e73bfb1effbec5fd9f4108bdac04e52fe9d03579->enter($__internal_ad5eb82954770f36b47cb2c7e73bfb1effbec5fd9f4108bdac04e52fe9d03579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_49b882e5905c155667b669cadb36cc4737710430712072342a08506e254b0ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b882e5905c155667b669cadb36cc4737710430712072342a08506e254b0ee0->enter($__internal_49b882e5905c155667b669cadb36cc4737710430712072342a08506e254b0ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5eb82954770f36b47cb2c7e73bfb1effbec5fd9f4108bdac04e52fe9d03579->leave($__internal_ad5eb82954770f36b47cb2c7e73bfb1effbec5fd9f4108bdac04e52fe9d03579_prof);

        
        $__internal_49b882e5905c155667b669cadb36cc4737710430712072342a08506e254b0ee0->leave($__internal_49b882e5905c155667b669cadb36cc4737710430712072342a08506e254b0ee0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23bc46251967b4edbf863274b2b5ae09cc7bdf2492bd75489ad8c3fe92ebc7b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bc46251967b4edbf863274b2b5ae09cc7bdf2492bd75489ad8c3fe92ebc7b3->enter($__internal_23bc46251967b4edbf863274b2b5ae09cc7bdf2492bd75489ad8c3fe92ebc7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac21af251ff3d9aa6bdddbe7de3ee366c2ce6fc6355bc830d6378104ac2ee80c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac21af251ff3d9aa6bdddbe7de3ee366c2ce6fc6355bc830d6378104ac2ee80c->enter($__internal_ac21af251ff3d9aa6bdddbe7de3ee366c2ce6fc6355bc830d6378104ac2ee80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ac21af251ff3d9aa6bdddbe7de3ee366c2ce6fc6355bc830d6378104ac2ee80c->leave($__internal_ac21af251ff3d9aa6bdddbe7de3ee366c2ce6fc6355bc830d6378104ac2ee80c_prof);

        
        $__internal_23bc46251967b4edbf863274b2b5ae09cc7bdf2492bd75489ad8c3fe92ebc7b3->leave($__internal_23bc46251967b4edbf863274b2b5ae09cc7bdf2492bd75489ad8c3fe92ebc7b3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b09781a52687460e0004d052c0a60c65be1e82d6861992b93912296c569ef0a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09781a52687460e0004d052c0a60c65be1e82d6861992b93912296c569ef0a3->enter($__internal_b09781a52687460e0004d052c0a60c65be1e82d6861992b93912296c569ef0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2008f6190d3015319e25efaa083d5b51c08eaf7e026eb70014508ea464041b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2008f6190d3015319e25efaa083d5b51c08eaf7e026eb70014508ea464041b5c->enter($__internal_2008f6190d3015319e25efaa083d5b51c08eaf7e026eb70014508ea464041b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2008f6190d3015319e25efaa083d5b51c08eaf7e026eb70014508ea464041b5c->leave($__internal_2008f6190d3015319e25efaa083d5b51c08eaf7e026eb70014508ea464041b5c_prof);

        
        $__internal_b09781a52687460e0004d052c0a60c65be1e82d6861992b93912296c569ef0a3->leave($__internal_b09781a52687460e0004d052c0a60c65be1e82d6861992b93912296c569ef0a3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63982a80db2513d724540c2ae1ccf3e50524e716f0db30c929d4cececf185d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63982a80db2513d724540c2ae1ccf3e50524e716f0db30c929d4cececf185d4a->enter($__internal_63982a80db2513d724540c2ae1ccf3e50524e716f0db30c929d4cececf185d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_010e25e6d6779be5be5fb0dbae2259b471ade6aabfa1e1d2de8860cba98aaa79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010e25e6d6779be5be5fb0dbae2259b471ade6aabfa1e1d2de8860cba98aaa79->enter($__internal_010e25e6d6779be5be5fb0dbae2259b471ade6aabfa1e1d2de8860cba98aaa79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_010e25e6d6779be5be5fb0dbae2259b471ade6aabfa1e1d2de8860cba98aaa79->leave($__internal_010e25e6d6779be5be5fb0dbae2259b471ade6aabfa1e1d2de8860cba98aaa79_prof);

        
        $__internal_63982a80db2513d724540c2ae1ccf3e50524e716f0db30c929d4cececf185d4a->leave($__internal_63982a80db2513d724540c2ae1ccf3e50524e716f0db30c929d4cececf185d4a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/metinet/Workspace/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
