<?php

class __Mustache_816d62e688a09efa5ba7fbcd434facbc extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="snap-media-object ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $value = $this->resolveValue($context->find('attributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $value = $this->resolveValue($context->find('image'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '<div class="snap-media-body">
';
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
