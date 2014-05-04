<?php

/* 404 */
class __TwigTemplate_8244788566df4cfd320ce71fa0c4a1de922162833379bbc37fcbfc277637ea15 extends Craft\BaseTemplate
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
        // line 20
        $context["title"] = "404";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "\t<h1>Page not found</h1>

\t<p>What’s worse, a hilarious 404 page can’t be found either.</p>
";
    }

    public function getTemplateName()
    {
        return "404";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 23,  30 => 22,  25 => 20,);
    }
}
