<?php

/*  */
class __TwigTemplate_80d6fb8babf6fdcbcc7935eaa841f69adadf959f6cdaea32bf515b251ebe9048 extends Craft\BaseTemplate
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
        \Craft\craft()->request->redirect(\Craft\UrlHelper::getUrl("dashboard"));
    }

    public function getTemplateName()
    {
        return "";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
