<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e7c359efb39799d64ffb70cb0cbc72c1d3f76c80fcd65d7367a0169bfd0b0e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_573c05918ac1a0c169074ad2020a0ed665047e687c08861b843fe861fb981500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573c05918ac1a0c169074ad2020a0ed665047e687c08861b843fe861fb981500->enter($__internal_573c05918ac1a0c169074ad2020a0ed665047e687c08861b843fe861fb981500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6e1b80e2703551a287267cb19512bc192e61503af7ea062686c4e8814101b913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1b80e2703551a287267cb19512bc192e61503af7ea062686c4e8814101b913->enter($__internal_6e1b80e2703551a287267cb19512bc192e61503af7ea062686c4e8814101b913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_573c05918ac1a0c169074ad2020a0ed665047e687c08861b843fe861fb981500->leave($__internal_573c05918ac1a0c169074ad2020a0ed665047e687c08861b843fe861fb981500_prof);

        
        $__internal_6e1b80e2703551a287267cb19512bc192e61503af7ea062686c4e8814101b913->leave($__internal_6e1b80e2703551a287267cb19512bc192e61503af7ea062686c4e8814101b913_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_066042a9e2516ff021ab6efbf4e1665dd8aff00596eec5180ea2489ca197d815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066042a9e2516ff021ab6efbf4e1665dd8aff00596eec5180ea2489ca197d815->enter($__internal_066042a9e2516ff021ab6efbf4e1665dd8aff00596eec5180ea2489ca197d815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eb4b6c82b512f4568c4e08c71e811205f4e651540a277dbb6685ec94c09fe46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4b6c82b512f4568c4e08c71e811205f4e651540a277dbb6685ec94c09fe46d->enter($__internal_eb4b6c82b512f4568c4e08c71e811205f4e651540a277dbb6685ec94c09fe46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_eb4b6c82b512f4568c4e08c71e811205f4e651540a277dbb6685ec94c09fe46d->leave($__internal_eb4b6c82b512f4568c4e08c71e811205f4e651540a277dbb6685ec94c09fe46d_prof);

        
        $__internal_066042a9e2516ff021ab6efbf4e1665dd8aff00596eec5180ea2489ca197d815->leave($__internal_066042a9e2516ff021ab6efbf4e1665dd8aff00596eec5180ea2489ca197d815_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/metinet/Workspace/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
