<?php

/* blog/_entry */
class __TwigTemplate_9069658a678a023c254fabf85575b5ddccce929c752017d1064a9802f261499a extends Craft\BaseTemplate
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "\t";
        $cacheService = \Craft\craft()->templateCache;
        $ignoreCache1 = (\Craft\craft()->request->isLivePreview());
        if (!$ignoreCache1) {
            $cacheBody1 = $cacheService->getTemplateCache('p0SkBkMq2ZOpu15ZuI72dVZCHswY99ed0wGc', false);
        }
        if (empty($cacheBody1)) {
            if (!$ignoreCache1) {
                $cacheService->startTemplateCache('p0SkBkMq2ZOpu15ZuI72dVZCHswY99ed0wGc');
            }
            ob_start();
            // line 21
            echo "    <article>
  \t\t<h1>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title"), "html", null, true);
            echo "</h1>
  \t\t<p>Posted on ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postDate"), "format", array(0 => "F d, Y"), "method"), "html", null, true);
            echo "</p>
  \t\t
  \t\t";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "articleBody"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 26
                echo "
      ";
                // line 27
                if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type") == "heading")) {
                    // line 28
                    echo "
          <";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "headingLevel"), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "headingTitle"), "html", null, true);
                    echo "</";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "headingLevel"), "html", null, true);
                    echo ">

      ";
                } elseif (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type") == "paragraph")) {
                    // line 32
                    echo "
          ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "paragraph"), "html", null, true);
                    echo "

      ";
                } elseif (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type") == "image")) {
                    // line 36
                    echo "
          ";
                    // line 37
                    $context["imageSource"] = $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "imageSource"), "first", array(), "method");
                    // line 38
                    echo "          ";
                    if ((isset($context["imageSource"]) ? $context["imageSource"] : $this->getContext($context, "imageSource"))) {
                        // line 39
                        echo "              <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imageSource"]) ? $context["imageSource"] : $this->getContext($context, "imageSource")), "getUrl", array(), "method"), "html", null, true);
                        echo "\" width=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imageSource"]) ? $context["imageSource"] : $this->getContext($context, "imageSource")), "getWidth", array(), "method"), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imageSource"]) ? $context["imageSource"] : $this->getContext($context, "imageSource")), "getHeight", array(), "method"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "caption"), "html", null, true);
                        echo "\">
          ";
                    }
                    // line 41
                    echo "
          ";
                    // line 42
                    $context["caption"] = $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "caption");
                    // line 43
                    echo "          ";
                    if ((isset($context["caption"]) ? $context["caption"] : $this->getContext($context, "caption"))) {
                        // line 44
                        echo "  \t\t\t\t\t<div class=\"caption\">";
                        echo twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : $this->getContext($context, "caption")), "html", null, true);
                        echo "
          ";
                    }
                    // line 46
                    echo "
      ";
                } elseif (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type") == "pullquote")) {
                    // line 48
                    echo "
          <blockquote>
              <p>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "pullquoteTitle"), "html", null, true);
                    echo "</p>
          </blockquote>

      ";
                }
                // line 54
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    </article>
  ";
            $cacheBody1 = ob_get_clean();
            if (!$ignoreCache1) {
                $cacheService->endTemplateCache('p0SkBkMq2ZOpu15ZuI72dVZCHswY99ed0wGc', false, null, null, $cacheBody1);
            }
        }
        echo $cacheBody1;
        // line 58
        echo "

";
    }

    public function getTemplateName()
    {
        return "blog/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 58,  142 => 56,  135 => 54,  128 => 50,  124 => 48,  120 => 46,  114 => 44,  111 => 43,  109 => 42,  106 => 41,  94 => 39,  91 => 38,  89 => 37,  86 => 36,  80 => 33,  77 => 32,  67 => 29,  64 => 28,  62 => 27,  59 => 26,  55 => 25,  50 => 23,  46 => 22,  43 => 21,  31 => 20,  28 => 19,);
    }
}
