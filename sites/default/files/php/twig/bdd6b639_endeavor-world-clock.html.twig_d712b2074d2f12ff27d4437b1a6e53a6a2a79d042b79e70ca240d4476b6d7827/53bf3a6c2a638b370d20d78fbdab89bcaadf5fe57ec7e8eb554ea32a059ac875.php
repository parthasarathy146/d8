<?php

/* modules/endeavorin_world_clock/templates/endeavor-world-clock.html.twig */
class __TwigTemplate_d6d5e8fbca82ef316c207681d3eca08d9a3641ccfcbac31aab5f44bc4a14ed11 extends Twig_Template
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
        $tags = array("for" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"clocks\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clocks"]) ? $context["clocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["clock"]) {
            // line 3
            echo "  <ul class=\"clock\"> 
    <li class=\"sec\"><input class=\"sec-value\" type=\"hidden\" value=\"";
            // line 4
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["clock"], "seconds", array()), "html", null, true));
            echo "\"></input></li>
    <li class=\"hour\"><input class=\"hour-value\" type=\"hidden\" value=\"";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["clock"], "hours", array()), "html", null, true));
            echo "\"></input></li>
    <li class=\"min\"><input class=\"min-value\" type=\"hidden\" value=\"";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["clock"], "minutes", array()), "html", null, true));
            echo "\"></input></li>
    <li class=\"meridiem\">";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["clock"], "meridiem", array()), "html", null, true));
            echo "</li>
    <li class=\"region-name\">";
            // line 8
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["clock"], "name", array()), "html", null, true));
            echo "</li>
  </ul>  
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  <div class=\"clearfix\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/endeavorin_world_clock/templates/endeavor-world-clock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 11,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }
}
/* <div id="clocks">*/
/*   {% for clock in clocks %}*/
/*   <ul class="clock"> */
/*     <li class="sec"><input class="sec-value" type="hidden" value="{{ clock.seconds }}"></input></li>*/
/*     <li class="hour"><input class="hour-value" type="hidden" value="{{ clock.hours }}"></input></li>*/
/*     <li class="min"><input class="min-value" type="hidden" value="{{ clock.minutes }}"></input></li>*/
/*     <li class="meridiem">{{ clock.meridiem }}</li>*/
/*     <li class="region-name">{{ clock.name }}</li>*/
/*   </ul>  */
/*   {% endfor %}*/
/*   <div class="clearfix"></div>*/
/* </div>*/
/* */
