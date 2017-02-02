<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_a05de6dfbd510ffb6dc83d7c4e6bc06a66ec35a126300f084cda68d90435ec09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b735ba0d4f0df528ebf56d81b8091d3bb2552dfd5a8216e47eba22c9da99a77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b735ba0d4f0df528ebf56d81b8091d3bb2552dfd5a8216e47eba22c9da99a77e->enter($__internal_b735ba0d4f0df528ebf56d81b8091d3bb2552dfd5a8216e47eba22c9da99a77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a44afc81c767916f4837e4b9ee9ee39c42ac525eb917d23ed1b25c792d03f34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44afc81c767916f4837e4b9ee9ee39c42ac525eb917d23ed1b25c792d03f34b->enter($__internal_a44afc81c767916f4837e4b9ee9ee39c42ac525eb917d23ed1b25c792d03f34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b735ba0d4f0df528ebf56d81b8091d3bb2552dfd5a8216e47eba22c9da99a77e->leave($__internal_b735ba0d4f0df528ebf56d81b8091d3bb2552dfd5a8216e47eba22c9da99a77e_prof);

        
        $__internal_a44afc81c767916f4837e4b9ee9ee39c42ac525eb917d23ed1b25c792d03f34b->leave($__internal_a44afc81c767916f4837e4b9ee9ee39c42ac525eb917d23ed1b25c792d03f34b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_eb7d23cb576ff03abfa80d91f20f80b7744cee04d8ea56394333e695955170a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7d23cb576ff03abfa80d91f20f80b7744cee04d8ea56394333e695955170a7->enter($__internal_eb7d23cb576ff03abfa80d91f20f80b7744cee04d8ea56394333e695955170a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_bb10ddc5ab490e61285d4d80d9ac7017c87574d3baaa5cc8561563895205826c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb10ddc5ab490e61285d4d80d9ac7017c87574d3baaa5cc8561563895205826c->enter($__internal_bb10ddc5ab490e61285d4d80d9ac7017c87574d3baaa5cc8561563895205826c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_bb10ddc5ab490e61285d4d80d9ac7017c87574d3baaa5cc8561563895205826c->leave($__internal_bb10ddc5ab490e61285d4d80d9ac7017c87574d3baaa5cc8561563895205826c_prof);

        
        $__internal_eb7d23cb576ff03abfa80d91f20f80b7744cee04d8ea56394333e695955170a7->leave($__internal_eb7d23cb576ff03abfa80d91f20f80b7744cee04d8ea56394333e695955170a7_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8abe829451d43a5ff40ad4d07ab6d1c134cdee4edaece52e6e173c303b7d23bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abe829451d43a5ff40ad4d07ab6d1c134cdee4edaece52e6e173c303b7d23bf->enter($__internal_8abe829451d43a5ff40ad4d07ab6d1c134cdee4edaece52e6e173c303b7d23bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_699e6b9b0344435e9463d81a10ab1d07bd65215a79cc8e752987e497466f7a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699e6b9b0344435e9463d81a10ab1d07bd65215a79cc8e752987e497466f7a58->enter($__internal_699e6b9b0344435e9463d81a10ab1d07bd65215a79cc8e752987e497466f7a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_699e6b9b0344435e9463d81a10ab1d07bd65215a79cc8e752987e497466f7a58->leave($__internal_699e6b9b0344435e9463d81a10ab1d07bd65215a79cc8e752987e497466f7a58_prof);

        
        $__internal_8abe829451d43a5ff40ad4d07ab6d1c134cdee4edaece52e6e173c303b7d23bf->leave($__internal_8abe829451d43a5ff40ad4d07ab6d1c134cdee4edaece52e6e173c303b7d23bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
