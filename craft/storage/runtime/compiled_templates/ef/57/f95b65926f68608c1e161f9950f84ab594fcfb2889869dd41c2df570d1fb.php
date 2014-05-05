<?php

/* index */
class __TwigTemplate_ef57f95b65926f68608c1e161f9950f84ab594fcfb2889869dd41c2df570d1fb extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["entry"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "entries"), "section", array(0 => "articles"), "method"), "first", array(), "method");
        // line 12
        $context["title"] = $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title");
        // line 15
        $context["mainBackground"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "featuredImage"), "first"), "url");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
\t";
        // line 20
        echo "  ";
        $this->env->loadTemplate("_partials/article.twig")->display($context);
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 21,  40 => 20,  37 => 18,  34 => 17,  29 => 15,  27 => 12,  25 => 9,);
    }
}
