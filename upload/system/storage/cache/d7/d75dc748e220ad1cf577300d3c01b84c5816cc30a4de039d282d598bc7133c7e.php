<?php

/* default/template/extension/payment/kingspays.twig */
class __TwigTemplate_2b07b5aa07f3df86c629b06ccdb3d21188119596abbadb726ed9303c90d7c3f4 extends Twig_Template
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
        echo "<style>
/* Absolute Center Spinner */
.loading {
position: fixed;
z-index: 999;
height: 2em;
width: 2em;
overflow: show;
margin: auto;
top: 0;
left: 0;
bottom: 0;
right: 0;
}
/* Transparent Overlay */
.loading:before {
content: '';
display: block;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
  background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
/* hide \"loading...\" text */
font: 0/0 a;
color: transparent;
text-shadow: none;
background-color: transparent;
border: 0;
}

.loading:not(:required):after {
content: '';
display: block;
font-size: 10px;
width: 1em;
height: 1em;
margin-top: -0.5em;
-webkit-animation: spinner 150ms infinite linear;
-moz-animation: spinner 150ms infinite linear;
-ms-animation: spinner 150ms infinite linear;
-o-animation: spinner 150ms infinite linear;
animation: spinner 150ms infinite linear;
border-radius: 0.5em;
-webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
0% {
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}
100% {
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  transform: rotate(360deg);
}
}
@-moz-keyframes spinner {
0% {
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}
100% {
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  transform: rotate(360deg);
}
}
@-o-keyframes spinner {
0% {
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}
100% {
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  transform: rotate(360deg);
}
}
@keyframes spinner {
0% {
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}
100% {
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  transform: rotate(360deg);
}
}
</style>
<div class=\"loading\" style=\"display:none;\">Loading&#8230;</div>
<form id=\"kingspayssubmit\" name=\"kingspayssubmit\" action=\"";
        // line 124
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"POST\">
    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form_params"]) ? $context["form_params"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 126
            echo "        <input type=\"hidden\" name=\"";
            echo $context["key"];
            echo "\" id=\"";
            echo $context["key"];
            echo "\" value=\"";
            echo $context["value"];
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "</form>
<div class=\"buttons\">
    <div class=\"pull-right\">
        <input type=\"button\" value=\"";
        // line 131
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" id=\"button-confirm\" class=\"btn btn-primary\" />
    </div>
</div>
<script type=\"text/javascript\">
    \$('#button-confirm').on('click', function() {
        \$('.loading').show();
        \$.ajax({
        url:'index.php?route=extension/payment/kingspays/send',
        type:\"POST\",
        success: function (data) {
          var d = \$.parseJSON(data);
          var id = d.payment_id;
          if(d.message == \"Payment successfully initialized.\")
          {
            window.location= 'https://kingspay-gs.com/payment?id='+id;
          }
          else
          {
            window.location.reload();
          }
        }
      })

    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/kingspays.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 131,  165 => 128,  152 => 126,  148 => 125,  144 => 124,  19 => 1,);
    }
}
/* <style>*/
/* /* Absolute Center Spinner *//* */
/* .loading {*/
/* position: fixed;*/
/* z-index: 999;*/
/* height: 2em;*/
/* width: 2em;*/
/* overflow: show;*/
/* margin: auto;*/
/* top: 0;*/
/* left: 0;*/
/* bottom: 0;*/
/* right: 0;*/
/* }*/
/* /* Transparent Overlay *//* */
/* .loading:before {*/
/* content: '';*/
/* display: block;*/
/* position: fixed;*/
/* top: 0;*/
/* left: 0;*/
/* width: 100%;*/
/* height: 100%;*/
/*   background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));*/
/* */
/* background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));*/
/* }*/
/* */
/* /* :not(:required) hides these rules from IE9 and below *//* */
/* .loading:not(:required) {*/
/* /* hide "loading..." text *//* */
/* font: 0/0 a;*/
/* color: transparent;*/
/* text-shadow: none;*/
/* background-color: transparent;*/
/* border: 0;*/
/* }*/
/* */
/* .loading:not(:required):after {*/
/* content: '';*/
/* display: block;*/
/* font-size: 10px;*/
/* width: 1em;*/
/* height: 1em;*/
/* margin-top: -0.5em;*/
/* -webkit-animation: spinner 150ms infinite linear;*/
/* -moz-animation: spinner 150ms infinite linear;*/
/* -ms-animation: spinner 150ms infinite linear;*/
/* -o-animation: spinner 150ms infinite linear;*/
/* animation: spinner 150ms infinite linear;*/
/* border-radius: 0.5em;*/
/* -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;*/
/* box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;*/
/* }*/
/* */
/* /* Animation *//* */
/* */
/* @-webkit-keyframes spinner {*/
/* 0% {*/
/*   -webkit-transform: rotate(0deg);*/
/*   -moz-transform: rotate(0deg);*/
/*   -ms-transform: rotate(0deg);*/
/*   -o-transform: rotate(0deg);*/
/*   transform: rotate(0deg);*/
/* }*/
/* 100% {*/
/*   -webkit-transform: rotate(360deg);*/
/*   -moz-transform: rotate(360deg);*/
/*   -ms-transform: rotate(360deg);*/
/*   -o-transform: rotate(360deg);*/
/*   transform: rotate(360deg);*/
/* }*/
/* }*/
/* @-moz-keyframes spinner {*/
/* 0% {*/
/*   -webkit-transform: rotate(0deg);*/
/*   -moz-transform: rotate(0deg);*/
/*   -ms-transform: rotate(0deg);*/
/*   -o-transform: rotate(0deg);*/
/*   transform: rotate(0deg);*/
/* }*/
/* 100% {*/
/*   -webkit-transform: rotate(360deg);*/
/*   -moz-transform: rotate(360deg);*/
/*   -ms-transform: rotate(360deg);*/
/*   -o-transform: rotate(360deg);*/
/*   transform: rotate(360deg);*/
/* }*/
/* }*/
/* @-o-keyframes spinner {*/
/* 0% {*/
/*   -webkit-transform: rotate(0deg);*/
/*   -moz-transform: rotate(0deg);*/
/*   -ms-transform: rotate(0deg);*/
/*   -o-transform: rotate(0deg);*/
/*   transform: rotate(0deg);*/
/* }*/
/* 100% {*/
/*   -webkit-transform: rotate(360deg);*/
/*   -moz-transform: rotate(360deg);*/
/*   -ms-transform: rotate(360deg);*/
/*   -o-transform: rotate(360deg);*/
/*   transform: rotate(360deg);*/
/* }*/
/* }*/
/* @keyframes spinner {*/
/* 0% {*/
/*   -webkit-transform: rotate(0deg);*/
/*   -moz-transform: rotate(0deg);*/
/*   -ms-transform: rotate(0deg);*/
/*   -o-transform: rotate(0deg);*/
/*   transform: rotate(0deg);*/
/* }*/
/* 100% {*/
/*   -webkit-transform: rotate(360deg);*/
/*   -moz-transform: rotate(360deg);*/
/*   -ms-transform: rotate(360deg);*/
/*   -o-transform: rotate(360deg);*/
/*   transform: rotate(360deg);*/
/* }*/
/* }*/
/* </style>*/
/* <div class="loading" style="display:none;">Loading&#8230;</div>*/
/* <form id="kingspayssubmit" name="kingspayssubmit" action="{{ action }}" method="POST">*/
/*     {% for key, value in form_params %}*/
/*         <input type="hidden" name="{{ key }}" id="{{ key }}" value="{{ value }}"/>*/
/*     {% endfor %}*/
/* </form>*/
/* <div class="buttons">*/
/*     <div class="pull-right">*/
/*         <input type="button" value="{{ button_confirm }}" id="button-confirm" class="btn btn-primary" />*/
/*     </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/*     $('#button-confirm').on('click', function() {*/
/*         $('.loading').show();*/
/*         $.ajax({*/
/*         url:'index.php?route=extension/payment/kingspays/send',*/
/*         type:"POST",*/
/*         success: function (data) {*/
/*           var d = $.parseJSON(data);*/
/*           var id = d.payment_id;*/
/*           if(d.message == "Payment successfully initialized.")*/
/*           {*/
/*             window.location= 'https://kingspay-gs.com/payment?id='+id;*/
/*           }*/
/*           else*/
/*           {*/
/*             window.location.reload();*/
/*           }*/
/*         }*/
/*       })*/
/* */
/*     });*/
/*     </script>*/
/* */
