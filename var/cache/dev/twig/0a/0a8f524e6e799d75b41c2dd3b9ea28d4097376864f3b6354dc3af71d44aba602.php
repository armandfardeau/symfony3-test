<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1bcf04f79a07a7b747895dce410c4ed7d20be6d8d701c9c88b0e2ce8b2d7dc02 extends Twig_Template
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
        $__internal_822358870aef22bef852f5b23b901839e7958f9f77f0de0be3ff147a200fa527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822358870aef22bef852f5b23b901839e7958f9f77f0de0be3ff147a200fa527->enter($__internal_822358870aef22bef852f5b23b901839e7958f9f77f0de0be3ff147a200fa527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_660b86b658284f6bf29cb01f7308a83fb0115445f2338fc06e9ce93863301550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660b86b658284f6bf29cb01f7308a83fb0115445f2338fc06e9ce93863301550->enter($__internal_660b86b658284f6bf29cb01f7308a83fb0115445f2338fc06e9ce93863301550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_822358870aef22bef852f5b23b901839e7958f9f77f0de0be3ff147a200fa527->leave($__internal_822358870aef22bef852f5b23b901839e7958f9f77f0de0be3ff147a200fa527_prof);

        
        $__internal_660b86b658284f6bf29cb01f7308a83fb0115445f2338fc06e9ce93863301550->leave($__internal_660b86b658284f6bf29cb01f7308a83fb0115445f2338fc06e9ce93863301550_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
