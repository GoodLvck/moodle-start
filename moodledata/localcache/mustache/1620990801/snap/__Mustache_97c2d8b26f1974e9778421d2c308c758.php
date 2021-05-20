<?php

class __Mustache_97c2d8b26f1974e9778421d2c308c758 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form id="toc-search" onSubmit="return false;">
';
        $buffer .= $indent . '    <input search-enabled="true" id="toc-search-input" type="text" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBec198647490b4fd7cf2a5fed37757ce($context, $indent, $value);
        $buffer .= '" placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9bcc280557ab827fca0c09efda4babd8($context, $indent, $value);
        $buffer .= '" autocomplete="off" />
';
        $buffer .= $indent . '    <ul id="toc-search-results" class="list-unstyled" role="listbox" aria-label="search" aria-relevant="additions"></ul>
';
        $buffer .= $indent . '    <ul role="listbox" id="toc-searchables" aria-hidden="true">
';
        // 'modules' section
        $value = $context->find('modules');
        $buffer .= $this->sectionB92bd59270de630f8b21d77a0cf2ddf1($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }

    private function sectionBec198647490b4fd7cf2a5fed37757ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search';
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
                
                $buffer .= 'search';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9bcc280557ab827fca0c09efda4babd8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search, theme_snap';
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
                
                $buffer .= 'search, theme_snap';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section646337e43a5b6fb19d8abc64d59e2ff2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notpublished, theme_snap';
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
                
                $buffer .= 'notpublished, theme_snap';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB92bd59270de630f8b21d77a0cf2ddf1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li role=option data-id="{{cmid}}">
                <a href="{{url}}" tabindex="0">
                    <img src="{{iconurl}}" alt="" />
                    <span class="sr-only">{{srinfo}}</span>
                    {{{formattedname}}}
                    {{^uservisible}}
                    <span class="linkinfo">
                        {{#str}}notpublished, theme_snap{{/str}}
                    </span>
                    {{/uservisible}}
                </a>
            </li>
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
                
                $buffer .= $indent . '            <li role=option data-id="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" tabindex="0">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="" />
';
                $buffer .= $indent . '                    <span class="sr-only">';
                $value = $this->resolveValue($context->find('srinfo'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('formattedname'), $context);
                $buffer .= $value;
                $buffer .= '
';
                // 'uservisible' inverted section
                $value = $context->find('uservisible');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <span class="linkinfo">
';
                    $buffer .= $indent . '                        ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section646337e43a5b6fb19d8abc64d59e2ff2($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    </span>
';
                }
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
