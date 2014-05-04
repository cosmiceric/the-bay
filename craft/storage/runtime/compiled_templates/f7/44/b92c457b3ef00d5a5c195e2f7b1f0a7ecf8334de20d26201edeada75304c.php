<?php

/* {{object.slug}} */
class __TwigTemplate_f744b92c457b3ef00d5a5c195e2f7b1f0a7ecf8334de20d26201edeada75304c extends Craft\BaseTemplate
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
        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "slug"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{{object.slug}}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
