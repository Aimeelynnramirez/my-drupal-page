<?php

/* themes/bootstrap/templates/input/form-element.html.twig */
class __TwigTemplate_9ef82bb2a2013e2635a101d43fd52b4b3bff265ca630ffa8d5336fd93685114b extends Twig_Template
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
        $tags = array("set" => 47, "if" => 70);
        $filters = array("clean_class" => 50);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 47
        $context["classes"] = array(0 => "form-item", 1 => "js-form-item", 2 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 50
($context["type"] ?? null))), 3 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 51
($context["type"] ?? null))), 4 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 52
($context["name"] ?? null))), 5 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 53
($context["name"] ?? null))), 6 => ((!twig_in_filter(        // line 54
($context["title_display"] ?? null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 7 => (((        // line 55
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 8 => ((        // line 56
($context["is_form_group"] ?? null)) ? ("form-group") : ("")), 9 => ((        // line 57
($context["is_radio"] ?? null)) ? ("radio") : ("")), 10 => ((        // line 58
($context["is_checkbox"] ?? null)) ? ("checkbox") : ("")), 11 => ((        // line 59
($context["is_autocomplete"] ?? null)) ? ("form-autocomplete") : ("")), 12 => ((        // line 60
($context["errors"] ?? null)) ? ("error has-error") : ("")));
        // line 63
        $context["description_classes"] = array(0 => "description", 1 => "help-block", 2 => (((        // line 66
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 69
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 70
        if (twig_in_filter(($context["label_display"] ?? null), array(0 => "before", 1 => "invisible"))) {
            // line 71
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 73
        echo "
  ";
        // line 74
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 75
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 76
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 79
        echo "
  ";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "

  ";
        // line 82
        if ((($context["label_display"] ?? null) == "after")) {
            // line 83
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 85
        echo "
  ";
        // line 86
        if ((twig_in_filter(($context["description_display"] ?? null), array(0 => "after", 1 => "invisible")) && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 87
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">
      ";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 91
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/input/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 91,  114 => 88,  109 => 87,  107 => 86,  104 => 85,  98 => 83,  96 => 82,  91 => 80,  88 => 79,  82 => 76,  77 => 75,  75 => 74,  72 => 73,  66 => 71,  64 => 70,  59 => 69,  57 => 66,  56 => 63,  54 => 60,  53 => 59,  52 => 58,  51 => 57,  50 => 56,  49 => 55,  48 => 54,  47 => 53,  46 => 52,  45 => 51,  44 => 50,  43 => 47,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap/templates/input/form-element.html.twig", "/Users/adapttech/Sites/devdesktop/lightning-8.x-3.105/themes/bootstrap/templates/input/form-element.html.twig");
    }
}
