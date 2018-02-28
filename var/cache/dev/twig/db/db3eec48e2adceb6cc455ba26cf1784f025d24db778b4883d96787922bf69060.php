<?php

/* base.html.twig */
class __TwigTemplate_85e1cd9db41130f0827dd0abe3643eb6b7192bf49a26e7fa51b3e6c73589086e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f7cd6f9a755a510a9720c990d290598a79dd6a7f2c1faa43608e4b11c6fa9ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7cd6f9a755a510a9720c990d290598a79dd6a7f2c1faa43608e4b11c6fa9ca->enter($__internal_5f7cd6f9a755a510a9720c990d290598a79dd6a7f2c1faa43608e4b11c6fa9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ba3542b4d264ddc747867359dcca30f202d70a36ddd21967716e0a6fed86c7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3542b4d264ddc747867359dcca30f202d70a36ddd21967716e0a6fed86c7bf->enter($__internal_ba3542b4d264ddc747867359dcca30f202d70a36ddd21967716e0a6fed86c7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <nav class=\"nav\">
            <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a>
            <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coucou");
        echo "\">coucou</a>
        </nav>

        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_5f7cd6f9a755a510a9720c990d290598a79dd6a7f2c1faa43608e4b11c6fa9ca->leave($__internal_5f7cd6f9a755a510a9720c990d290598a79dd6a7f2c1faa43608e4b11c6fa9ca_prof);

        
        $__internal_ba3542b4d264ddc747867359dcca30f202d70a36ddd21967716e0a6fed86c7bf->leave($__internal_ba3542b4d264ddc747867359dcca30f202d70a36ddd21967716e0a6fed86c7bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fbb367cceeae68f91ea48c77a00b8373eac25fcb2ccbe370cac3d91b7936ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fbb367cceeae68f91ea48c77a00b8373eac25fcb2ccbe370cac3d91b7936ebe->enter($__internal_1fbb367cceeae68f91ea48c77a00b8373eac25fcb2ccbe370cac3d91b7936ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0edb52c6413fa718c83e53e6507eb16b02ee1e56d2a88b94e41020cc6cc5ed11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0edb52c6413fa718c83e53e6507eb16b02ee1e56d2a88b94e41020cc6cc5ed11->enter($__internal_0edb52c6413fa718c83e53e6507eb16b02ee1e56d2a88b94e41020cc6cc5ed11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0edb52c6413fa718c83e53e6507eb16b02ee1e56d2a88b94e41020cc6cc5ed11->leave($__internal_0edb52c6413fa718c83e53e6507eb16b02ee1e56d2a88b94e41020cc6cc5ed11_prof);

        
        $__internal_1fbb367cceeae68f91ea48c77a00b8373eac25fcb2ccbe370cac3d91b7936ebe->leave($__internal_1fbb367cceeae68f91ea48c77a00b8373eac25fcb2ccbe370cac3d91b7936ebe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f94db1499a849544cd65577e1afa54bad8968284b2469aa11548a6ddd8e6cc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f94db1499a849544cd65577e1afa54bad8968284b2469aa11548a6ddd8e6cc6f->enter($__internal_f94db1499a849544cd65577e1afa54bad8968284b2469aa11548a6ddd8e6cc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d428c0f5f5cbc4a7dfb801a9cab5b24b5cf25e176bb4fd095f4ec601749d7bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d428c0f5f5cbc4a7dfb801a9cab5b24b5cf25e176bb4fd095f4ec601749d7bf4->enter($__internal_d428c0f5f5cbc4a7dfb801a9cab5b24b5cf25e176bb4fd095f4ec601749d7bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d428c0f5f5cbc4a7dfb801a9cab5b24b5cf25e176bb4fd095f4ec601749d7bf4->leave($__internal_d428c0f5f5cbc4a7dfb801a9cab5b24b5cf25e176bb4fd095f4ec601749d7bf4_prof);

        
        $__internal_f94db1499a849544cd65577e1afa54bad8968284b2469aa11548a6ddd8e6cc6f->leave($__internal_f94db1499a849544cd65577e1afa54bad8968284b2469aa11548a6ddd8e6cc6f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd8e519a5f0f9a05d6456bec0b5a955f309be4ea03ec7ca5cf029c9c5f745909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8e519a5f0f9a05d6456bec0b5a955f309be4ea03ec7ca5cf029c9c5f745909->enter($__internal_dd8e519a5f0f9a05d6456bec0b5a955f309be4ea03ec7ca5cf029c9c5f745909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_796e48527b4ad5167cc67b7e21b0b8594569593845f56647d347b81a188aa1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796e48527b4ad5167cc67b7e21b0b8594569593845f56647d347b81a188aa1a0->enter($__internal_796e48527b4ad5167cc67b7e21b0b8594569593845f56647d347b81a188aa1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_796e48527b4ad5167cc67b7e21b0b8594569593845f56647d347b81a188aa1a0->leave($__internal_796e48527b4ad5167cc67b7e21b0b8594569593845f56647d347b81a188aa1a0_prof);

        
        $__internal_dd8e519a5f0f9a05d6456bec0b5a955f309be4ea03ec7ca5cf029c9c5f745909->leave($__internal_dd8e519a5f0f9a05d6456bec0b5a955f309be4ea03ec7ca5cf029c9c5f745909_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eca7bfcc21de3872ded016378e8eb159e95cd487bee1891c71f18cc8b1883551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca7bfcc21de3872ded016378e8eb159e95cd487bee1891c71f18cc8b1883551->enter($__internal_eca7bfcc21de3872ded016378e8eb159e95cd487bee1891c71f18cc8b1883551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ebd6b142167d908ccbc1ffc798d4995454d614d38433bf1c954eef6acbca11ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd6b142167d908ccbc1ffc798d4995454d614d38433bf1c954eef6acbca11ec->enter($__internal_ebd6b142167d908ccbc1ffc798d4995454d614d38433bf1c954eef6acbca11ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ebd6b142167d908ccbc1ffc798d4995454d614d38433bf1c954eef6acbca11ec->leave($__internal_ebd6b142167d908ccbc1ffc798d4995454d614d38433bf1c954eef6acbca11ec_prof);

        
        $__internal_eca7bfcc21de3872ded016378e8eb159e95cd487bee1891c71f18cc8b1883551->leave($__internal_eca7bfcc21de3872ded016378e8eb159e95cd487bee1891c71f18cc8b1883551_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 17,  112 => 16,  95 => 6,  77 => 5,  65 => 18,  62 => 17,  60 => 16,  54 => 13,  50 => 12,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <nav class=\"nav\">
            <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Accueil</a>
            <a class=\"nav-link\" href=\"{{ path('coucou') }}\">coucou</a>
        </nav>

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/metinet/Workspace/symfony/app/Resources/views/base.html.twig");
    }
}
