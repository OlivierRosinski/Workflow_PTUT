<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8f1dff7425525bc87243459f0b0f971b5749a6178d6594a893ed00cecfe44dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_fe13f7722c944e62750d5482be75393a38b64138417ea8e2f8849fc0198e04b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe13f7722c944e62750d5482be75393a38b64138417ea8e2f8849fc0198e04b8->enter($__internal_fe13f7722c944e62750d5482be75393a38b64138417ea8e2f8849fc0198e04b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_30cac609c42d95d22b6bc9286961b8019cbb58b35a5ff32a2306c88ea3fc0c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30cac609c42d95d22b6bc9286961b8019cbb58b35a5ff32a2306c88ea3fc0c8f->enter($__internal_30cac609c42d95d22b6bc9286961b8019cbb58b35a5ff32a2306c88ea3fc0c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe13f7722c944e62750d5482be75393a38b64138417ea8e2f8849fc0198e04b8->leave($__internal_fe13f7722c944e62750d5482be75393a38b64138417ea8e2f8849fc0198e04b8_prof);

        
        $__internal_30cac609c42d95d22b6bc9286961b8019cbb58b35a5ff32a2306c88ea3fc0c8f->leave($__internal_30cac609c42d95d22b6bc9286961b8019cbb58b35a5ff32a2306c88ea3fc0c8f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4dbff379840add7d497033f3026cf715baa1b0fe64933b9415bbc730293464b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbff379840add7d497033f3026cf715baa1b0fe64933b9415bbc730293464b2->enter($__internal_4dbff379840add7d497033f3026cf715baa1b0fe64933b9415bbc730293464b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aba15443211bcbeb56a8f2b9f422e1d96b2c52b11397145e757c5b45e304b8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba15443211bcbeb56a8f2b9f422e1d96b2c52b11397145e757c5b45e304b8d3->enter($__internal_aba15443211bcbeb56a8f2b9f422e1d96b2c52b11397145e757c5b45e304b8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aba15443211bcbeb56a8f2b9f422e1d96b2c52b11397145e757c5b45e304b8d3->leave($__internal_aba15443211bcbeb56a8f2b9f422e1d96b2c52b11397145e757c5b45e304b8d3_prof);

        
        $__internal_4dbff379840add7d497033f3026cf715baa1b0fe64933b9415bbc730293464b2->leave($__internal_4dbff379840add7d497033f3026cf715baa1b0fe64933b9415bbc730293464b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b97ca627f617d1eef98d1d0e5dcf84eb0fd47c6e50b05b38e68adafdbbfd0fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97ca627f617d1eef98d1d0e5dcf84eb0fd47c6e50b05b38e68adafdbbfd0fdd->enter($__internal_b97ca627f617d1eef98d1d0e5dcf84eb0fd47c6e50b05b38e68adafdbbfd0fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f446434888ad371b51ffdab28c952e970fc6152c44ef09a61f0afbe995ad2d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f446434888ad371b51ffdab28c952e970fc6152c44ef09a61f0afbe995ad2d2b->enter($__internal_f446434888ad371b51ffdab28c952e970fc6152c44ef09a61f0afbe995ad2d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f446434888ad371b51ffdab28c952e970fc6152c44ef09a61f0afbe995ad2d2b->leave($__internal_f446434888ad371b51ffdab28c952e970fc6152c44ef09a61f0afbe995ad2d2b_prof);

        
        $__internal_b97ca627f617d1eef98d1d0e5dcf84eb0fd47c6e50b05b38e68adafdbbfd0fdd->leave($__internal_b97ca627f617d1eef98d1d0e5dcf84eb0fd47c6e50b05b38e68adafdbbfd0fdd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_91728636967b9d7be96ce32528bce8a8b97472744664d862f0b3aaf99c128812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91728636967b9d7be96ce32528bce8a8b97472744664d862f0b3aaf99c128812->enter($__internal_91728636967b9d7be96ce32528bce8a8b97472744664d862f0b3aaf99c128812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_764f68fb635e6e88ceaba92d9633ac45c199579a678438a221d7302a49b92122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764f68fb635e6e88ceaba92d9633ac45c199579a678438a221d7302a49b92122->enter($__internal_764f68fb635e6e88ceaba92d9633ac45c199579a678438a221d7302a49b92122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_764f68fb635e6e88ceaba92d9633ac45c199579a678438a221d7302a49b92122->leave($__internal_764f68fb635e6e88ceaba92d9633ac45c199579a678438a221d7302a49b92122_prof);

        
        $__internal_91728636967b9d7be96ce32528bce8a8b97472744664d862f0b3aaf99c128812->leave($__internal_91728636967b9d7be96ce32528bce8a8b97472744664d862f0b3aaf99c128812_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/metinet/Workspace/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
