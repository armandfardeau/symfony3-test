<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_5bc6144de67c9da302b54201084db29cc0546225208f26807b2a537a97e013b4 extends Twig_Template
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
        $__internal_0a5059370bd9abe3626630b39e04d2d3a3da699a9c8c9542c1a40666336a040a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5059370bd9abe3626630b39e04d2d3a3da699a9c8c9542c1a40666336a040a->enter($__internal_0a5059370bd9abe3626630b39e04d2d3a3da699a9c8c9542c1a40666336a040a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0aff63f83696be91262e4eadec5bf271fe0d1b508569241c770ce5cd9a5b64fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aff63f83696be91262e4eadec5bf271fe0d1b508569241c770ce5cd9a5b64fc->enter($__internal_0aff63f83696be91262e4eadec5bf271fe0d1b508569241c770ce5cd9a5b64fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0a5059370bd9abe3626630b39e04d2d3a3da699a9c8c9542c1a40666336a040a->leave($__internal_0a5059370bd9abe3626630b39e04d2d3a3da699a9c8c9542c1a40666336a040a_prof);

        
        $__internal_0aff63f83696be91262e4eadec5bf271fe0d1b508569241c770ce5cd9a5b64fc->leave($__internal_0aff63f83696be91262e4eadec5bf271fe0d1b508569241c770ce5cd9a5b64fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
