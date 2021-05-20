<?php

class __Mustache_a8671e1796cfd4fb01c85600c55590f5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section33f1e1f1b50095505bd8a10271860fc8($context, $indent, $value);

        return $buffer;
    }

    private function section450fd3995b8cf183ce079ba8703c617b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' guestconsentmessage, tool_policy ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' guestconsentmessage, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ae3501ccb6c69482d9f0047013ce325(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '&amp;returnurl={{.}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '&amp;returnurl=';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72a7f340492fa481f71321222bbde4ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '" +
                   "<li>" +
                   "<a href=\\"{{pluginbaseurl}}/view.php?versionid={{id}}{{#returnurl}}&amp;returnurl={{.}}{{/returnurl}}\\" " +
                   "   data-action=\\"view-guest\\" data-versionid=\\"{{id}}\\" data-behalfid=\\"1\\" >" +
                   "{{{name}}}" +
                   "</a>" +
                   "</li>" +
                   "';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '" +
';
                $buffer .= $indent . '                   "<li>" +
';
                $buffer .= $indent . '                   "<a href=\\"';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/view.php?versionid=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                // 'returnurl' section
                $value = $context->find('returnurl');
                $buffer .= $this->section0ae3501ccb6c69482d9f0047013ce325($context, $indent, $value);
                $buffer .= '\\" " +
';
                $buffer .= $indent . '                   "   data-action=\\"view-guest\\" data-versionid=\\"';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\\" data-behalfid=\\"1\\" >" +
';
                $buffer .= $indent . '                   "';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '" +
';
                $buffer .= $indent . '                   "</a>" +
';
                $buffer .= $indent . '                   "</li>" +
';
                $buffer .= $indent . '                   "';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section135bb0f329a8bd8199e0b9035aeeebe5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' guestconsent:continue, tool_policy ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' guestconsent:continue, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63ba8bde1fe6728d486e526c4a9243e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                // Get localised messages.
                var textmessage = "{{# str }} guestconsentmessage, tool_policy {{/ str }}" +
                   "<ul>{{#policies}}" +
                   "<li>" +
                   "<a href=\\"{{pluginbaseurl}}/view.php?versionid={{id}}{{#returnurl}}&amp;returnurl={{.}}{{/returnurl}}\\" " +
                   "   data-action=\\"view-guest\\" data-versionid=\\"{{id}}\\" data-behalfid=\\"1\\" >" +
                   "{{{name}}}" +
                   "</a>" +
                   "</li>" +
                   "{{/policies}}" +
                   "</ul>";
                var continuemessage = "{{# str }} guestconsent:continue, tool_policy {{/ str }}";

                // Initialize popup.
                $(document.body).addClass(\'eupopup\');
                if ($(".eupopup").length > 0) {
                    $(document).euCookieLawPopup().init({
                        popupPosition: \'bottom\',
                        popupTitle: \'\',
                        popupText: textmessage,
                        buttonContinueTitle: continuemessage,
                        buttonLearnmoreTitle: \'\',
                        compactStyle: true,
                    });
                }
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                // Get localised messages.
';
                $buffer .= $indent . '                var textmessage = "';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section450fd3995b8cf183ce079ba8703c617b($context, $indent, $value);
                $buffer .= '" +
';
                $buffer .= $indent . '                   "<ul>';
                // 'policies' section
                $value = $context->find('policies');
                $buffer .= $this->section72a7f340492fa481f71321222bbde4ef($context, $indent, $value);
                $buffer .= '" +
';
                $buffer .= $indent . '                   "</ul>";
';
                $buffer .= $indent . '                var continuemessage = "';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section135bb0f329a8bd8199e0b9035aeeebe5($context, $indent, $value);
                $buffer .= '";
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                // Initialize popup.
';
                $buffer .= $indent . '                $(document.body).addClass(\'eupopup\');
';
                $buffer .= $indent . '                if ($(".eupopup").length > 0) {
';
                $buffer .= $indent . '                    $(document).euCookieLawPopup().init({
';
                $buffer .= $indent . '                        popupPosition: \'bottom\',
';
                $buffer .= $indent . '                        popupTitle: \'\',
';
                $buffer .= $indent . '                        popupText: textmessage,
';
                $buffer .= $indent . '                        buttonContinueTitle: continuemessage,
';
                $buffer .= $indent . '                        buttonLearnmoreTitle: \'\',
';
                $buffer .= $indent . '                        compactStyle: true,
';
                $buffer .= $indent . '                    });
';
                $buffer .= $indent . '                }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33f1e1f1b50095505bd8a10271860fc8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

require([\'jquery\', \'tool_policy/jquery-eu-cookie-law-popup\', \'tool_policy/policyactions\'], function($, Popup, ActionsMod) {
        // Initialise the guest popup.
        $(document).ready(function() {
            // Only show message if there is some policy related to guests.
            {{#haspolicies}}
                // Get localised messages.
                var textmessage = "{{# str }} guestconsentmessage, tool_policy {{/ str }}" +
                   "<ul>{{#policies}}" +
                   "<li>" +
                   "<a href=\\"{{pluginbaseurl}}/view.php?versionid={{id}}{{#returnurl}}&amp;returnurl={{.}}{{/returnurl}}\\" " +
                   "   data-action=\\"view-guest\\" data-versionid=\\"{{id}}\\" data-behalfid=\\"1\\" >" +
                   "{{{name}}}" +
                   "</a>" +
                   "</li>" +
                   "{{/policies}}" +
                   "</ul>";
                var continuemessage = "{{# str }} guestconsent:continue, tool_policy {{/ str }}";

                // Initialize popup.
                $(document.body).addClass(\'eupopup\');
                if ($(".eupopup").length > 0) {
                    $(document).euCookieLawPopup().init({
                        popupPosition: \'bottom\',
                        popupTitle: \'\',
                        popupText: textmessage,
                        buttonContinueTitle: continuemessage,
                        buttonLearnmoreTitle: \'\',
                        compactStyle: true,
                    });
                }
            {{/haspolicies}}

            // Initialise the JS for the modal window which displays the policy versions.
            ActionsMod.init(\'[data-action="view-guest"]\');
        });
});

';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . 'require([\'jquery\', \'tool_policy/jquery-eu-cookie-law-popup\', \'tool_policy/policyactions\'], function($, Popup, ActionsMod) {
';
                $buffer .= $indent . '        // Initialise the guest popup.
';
                $buffer .= $indent . '        $(document).ready(function() {
';
                $buffer .= $indent . '            // Only show message if there is some policy related to guests.
';
                // 'haspolicies' section
                $value = $context->find('haspolicies');
                $buffer .= $this->section63ba8bde1fe6728d486e526c4a9243e4($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // Initialise the JS for the modal window which displays the policy versions.
';
                $buffer .= $indent . '            ActionsMod.init(\'[data-action="view-guest"]\');
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
