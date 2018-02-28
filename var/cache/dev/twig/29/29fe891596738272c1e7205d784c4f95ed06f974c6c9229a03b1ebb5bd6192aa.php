<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b7a198c608c6fcbe1cd25a086fdcd543e645bedff3923672f0fd2002d31f01fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c324819a4148c6b3cf7a405950d97c698f6bbcba6c6939f0ccfd312e1ff1a63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c324819a4148c6b3cf7a405950d97c698f6bbcba6c6939f0ccfd312e1ff1a63a->enter($__internal_c324819a4148c6b3cf7a405950d97c698f6bbcba6c6939f0ccfd312e1ff1a63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e378cfd97aaad626a635f601a2c18058aa03cc4f1f274a707b08b519245e7de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e378cfd97aaad626a635f601a2c18058aa03cc4f1f274a707b08b519245e7de3->enter($__internal_e378cfd97aaad626a635f601a2c18058aa03cc4f1f274a707b08b519245e7de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c324819a4148c6b3cf7a405950d97c698f6bbcba6c6939f0ccfd312e1ff1a63a->leave($__internal_c324819a4148c6b3cf7a405950d97c698f6bbcba6c6939f0ccfd312e1ff1a63a_prof);

        
        $__internal_e378cfd97aaad626a635f601a2c18058aa03cc4f1f274a707b08b519245e7de3->leave($__internal_e378cfd97aaad626a635f601a2c18058aa03cc4f1f274a707b08b519245e7de3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_96eda613ec1d2d2873e2eec7be8b53f7edb2ddcd04cd70f73e7a7ee8a29a8a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96eda613ec1d2d2873e2eec7be8b53f7edb2ddcd04cd70f73e7a7ee8a29a8a6d->enter($__internal_96eda613ec1d2d2873e2eec7be8b53f7edb2ddcd04cd70f73e7a7ee8a29a8a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_678a2f667acc3f220450a22d53f083b2fcc8cef9d8d84315bc9c335036657240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678a2f667acc3f220450a22d53f083b2fcc8cef9d8d84315bc9c335036657240->enter($__internal_678a2f667acc3f220450a22d53f083b2fcc8cef9d8d84315bc9c335036657240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_678a2f667acc3f220450a22d53f083b2fcc8cef9d8d84315bc9c335036657240->leave($__internal_678a2f667acc3f220450a22d53f083b2fcc8cef9d8d84315bc9c335036657240_prof);

        
        $__internal_96eda613ec1d2d2873e2eec7be8b53f7edb2ddcd04cd70f73e7a7ee8a29a8a6d->leave($__internal_96eda613ec1d2d2873e2eec7be8b53f7edb2ddcd04cd70f73e7a7ee8a29a8a6d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_76e17c31449f4943a6a952ec6055e576378c8b0d7757bd1e2cb15bd14037927d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e17c31449f4943a6a952ec6055e576378c8b0d7757bd1e2cb15bd14037927d->enter($__internal_76e17c31449f4943a6a952ec6055e576378c8b0d7757bd1e2cb15bd14037927d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c28ea2e8083bd23720ee1002f59baa293bdcfef9e0866e2349710d3045c7a335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28ea2e8083bd23720ee1002f59baa293bdcfef9e0866e2349710d3045c7a335->enter($__internal_c28ea2e8083bd23720ee1002f59baa293bdcfef9e0866e2349710d3045c7a335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c28ea2e8083bd23720ee1002f59baa293bdcfef9e0866e2349710d3045c7a335->leave($__internal_c28ea2e8083bd23720ee1002f59baa293bdcfef9e0866e2349710d3045c7a335_prof);

        
        $__internal_76e17c31449f4943a6a952ec6055e576378c8b0d7757bd1e2cb15bd14037927d->leave($__internal_76e17c31449f4943a6a952ec6055e576378c8b0d7757bd1e2cb15bd14037927d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ed6c89b359e8dbed043bdd1cb3f3cdd922039cf5eb674b895ac39ed6b799d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed6c89b359e8dbed043bdd1cb3f3cdd922039cf5eb674b895ac39ed6b799d21->enter($__internal_2ed6c89b359e8dbed043bdd1cb3f3cdd922039cf5eb674b895ac39ed6b799d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec54acbd5fa3d20df6740497a16a7c621812683c41320ae704aca607388a2c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec54acbd5fa3d20df6740497a16a7c621812683c41320ae704aca607388a2c04->enter($__internal_ec54acbd5fa3d20df6740497a16a7c621812683c41320ae704aca607388a2c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec54acbd5fa3d20df6740497a16a7c621812683c41320ae704aca607388a2c04->leave($__internal_ec54acbd5fa3d20df6740497a16a7c621812683c41320ae704aca607388a2c04_prof);

        
        $__internal_2ed6c89b359e8dbed043bdd1cb3f3cdd922039cf5eb674b895ac39ed6b799d21->leave($__internal_2ed6c89b359e8dbed043bdd1cb3f3cdd922039cf5eb674b895ac39ed6b799d21_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/metinet/Workspace/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
