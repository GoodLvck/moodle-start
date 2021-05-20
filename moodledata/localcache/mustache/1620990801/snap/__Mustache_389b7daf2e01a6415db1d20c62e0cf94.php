<?php

class __Mustache_389b7daf2e01a6415db1d20c62e0cf94 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'url' section
        $value = $context->find('url');
        $buffer .= $this->section9e78167a1ad86af64a452b294264b33c($context, $indent, $value);

        return $buffer;
    }

    private function section9e78167a1ad86af64a452b294264b33c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<a title="{{{title}}}" class="{{class}}" href="{{{url}}}" role="button" {{{ariapressed}}}></a>
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
                
                $buffer .= $indent . '<a title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('class'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" role="button" ';
                $value = $this->resolveValue($context->find('ariapressed'), $context);
                $buffer .= $value;
                $buffer .= '></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
