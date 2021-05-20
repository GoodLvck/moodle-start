<?php

class __Mustache_551b9e32158ac232560ab1cade91f404 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="section_footer">
';
        // 'previous' section
        $value = $context->find('previous');
        $buffer .= $this->section10696abb13f1c7f598e93f4dababd41e($context, $indent, $value);
        // 'next' section
        $value = $context->find('next');
        $buffer .= $this->section6c387c94a7e1693c2407969ec7e0d437($context, $indent, $value);
        $buffer .= $indent . '</nav>
';

        return $buffer;
    }

    private function sectionBf20dcc0ab9509c23a04cd0a689e9dde(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previoussection, theme_snap';
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
                
                $buffer .= 'previoussection, theme_snap';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10696abb13f1c7f598e93f4dababd41e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a class="previous_section {{classes}}" href="#section-{{section}}" section-number="{{section}}">
        <div class="nav_icon"><i class="icon-arrow-left" section-number="{{section}}"></i></div>
        <span class="text"><span class="nav_guide" section-number="{{section}}">{{#str}}previoussection, theme_snap{{/str}}</span><br>{{{title}}}</span>
    </a>
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
                
                $buffer .= $indent . '    <a class="previous_section ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" href="#section-';
                $value = $this->resolveValue($context->find('section'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" section-number="';
                $value = $this->resolveValue($context->find('section'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '        <div class="nav_icon"><i class="icon-arrow-left" section-number="';
                $value = $this->resolveValue($context->find('section'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i></div>
';
                $buffer .= $indent . '        <span class="text"><span class="nav_guide" section-number="';
                $value = $this->resolveValue($context->find('section'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBf20dcc0ab9509c23a04cd0a689e9dde($context, $indent, $value);
                $buffer .= '</span><br>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33dfbe9154c2c9bc90b1e9b9a9944fb3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nextsection, theme_snap';
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
                
                $buffer .= 'nextsection, theme_snap';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c387c94a7e1693c2407969ec7e0d437(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a class="next_section {{classes}}" href="#section-{{section}}" section-number="{{section}}">
        <div class="nav_icon"><i class="icon-arrow-right" section-number="{{section}}"></i></div>
        <span class="text"><span class="nav_guide" section-number="{{section}}">{{#str}}nextsection, theme_snap{{/str}}</span><br>{{{title}}}</span>
    </a>
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
                
                $buffer .= $indent . '    <a class="next_section ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" href="#section-';
                $value = $this->resolveValue($context->find('section'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" section-number="';
                $value = $this->resolveValue($context->find('section'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '        <div class="nav_icon"><i class="icon-arrow-right" section-number="';
                $value = $this->resolveValue($context->find('section'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i></div>
';
                $buffer .= $indent . '        <span class="text"><span class="nav_guide" section-number="';
                $value = $this->resolveValue($context->find('section'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section33dfbe9154c2c9bc90b1e9b9a9944fb3($context, $indent, $value);
                $buffer .= '</span><br>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
