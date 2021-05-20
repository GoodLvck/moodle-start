<?php

class __Mustache_e4df02a25c9ea25e16e2226092e7ab13 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- TODO - not sure this is useful as a template seperate from course_toc -->
';
        $buffer .= $indent . '<div class="toc-footer">
';
        // 'canaddnewsection' section
        $value = $context->find('canaddnewsection');
        $buffer .= $this->section5041cfa7d189893a4cb1dd8eeb4705b9($context, $indent, $value);
        $buffer .= $indent . '    <a href="#coursetools" id="snap-course-tools">
';
        $buffer .= $indent . '        <img src="';
        $value = $this->resolveValue($context->find('imgurltools'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="svg-icon" alt="" />';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionEbb4c8c810b5fd1ee97ff6e5fe010457($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section108d02d6da01ba4ae126081aa8d9e389(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addanewsection, theme_snap';
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
                
                $buffer .= 'addanewsection, theme_snap';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5041cfa7d189893a4cb1dd8eeb4705b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="#snap-add-new-section" id="snap-new-section">
        <img src="{{imgurladdnewsection}}" class="svg-icon" alt="" />{{#str}}addanewsection, theme_snap{{/str}}
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
                
                $buffer .= $indent . '    <a href="#snap-add-new-section" id="snap-new-section">
';
                $buffer .= $indent . '        <img src="';
                $value = $this->resolveValue($context->find('imgurladdnewsection'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="svg-icon" alt="" />';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section108d02d6da01ba4ae126081aa8d9e389($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbb4c8c810b5fd1ee97ff6e5fe010457(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursetools, theme_snap';
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
                
                $buffer .= 'coursetools, theme_snap';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
