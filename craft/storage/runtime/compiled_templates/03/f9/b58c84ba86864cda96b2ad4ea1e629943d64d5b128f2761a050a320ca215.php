<?php

/* assets */
class __TwigTemplate_03f9b58c84ba86864cda96b2ad4ea1e629943d64d5b128f2761a050a320ca215 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/elementindex");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/elementindex";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Assets");
        // line 3
        $context["elementType"] = "Asset";
        // line 5
        \Craft\craft()->templates->includeCssResource("css/assets.css");
        // line 6
        \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.ui.widget.js");
        // line 7
        \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.fileupload.js");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "assets";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  30 => 6,  28 => 5,  26 => 3,  24 => 2,);
    }
}
