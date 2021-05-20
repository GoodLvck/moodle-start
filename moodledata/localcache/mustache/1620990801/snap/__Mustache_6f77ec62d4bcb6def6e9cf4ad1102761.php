<?php

class __Mustache_6f77ec62d4bcb6def6e9cf4ad1102761 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<ol id="chapters" class="chapters ';
        $value = $this->resolveValue($context->find('listlarge'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" start="0">
';
        // 'chapters' section
        $value = $context->find('chapters');
        $buffer .= $this->section880d0fb3da7eefd07981be6a9b249f32($context, $indent, $value);
        $buffer .= $indent . '</ol>
';

        return $buffer;
    }

    private function sectionC40dcabf8b9933bed6b3fad0df6ecc25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="chapter-title" section-number="{{section}}" href="{{url}}">{{{title}}}</a>
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
                
                $buffer .= $indent . '            <a class="chapter-title" section-number="';
                $value = $this->resolveValue($context->find('section'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51ca031484bd84ad14ccccc985b7330f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'current, theme_snap';
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
                
                $buffer .= 'current, theme_snap';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06bdaf9e532b811d8fb284aed8d3cb8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="text text-success">
                <small>{{#str}}current, theme_snap{{/str}}</small>
            </span>
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
                
                $buffer .= $indent . '            <span class="text text-success">
';
                $buffer .= $indent . '                <small>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section51ca031484bd84ad14ccccc985b7330f($context, $indent, $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcc7e108e74d4b188d7053215ac1b844(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="text {{availabilityclass}}">
                <small class="published-status">{{availabilitystatus}}</small>
            </span>
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
                
                $buffer .= $indent . '            <span class="text ';
                $value = $this->resolveValue($context->find('availabilityclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <small class="published-status">';
                $value = $this->resolveValue($context->find('availabilitystatus'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0c3cd370929743306d05c2fd8071571(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completed, completion';
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
                
                $buffer .= 'completed, completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8fce76ab77a6fdc381759b5d578be226(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <img class="snap-section-complete" src="{{pixcompleted}}" alt="{{#str}}completed, completion{{/str}}" />
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
                
                $buffer .= $indent . '                <img class="snap-section-complete" src="';
                $value = $this->resolveValue($context->find('pixcompleted'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF0c3cd370929743306d05c2fd8071571($context, $indent, $value);
                $buffer .= '" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE41c48cfae31444530bac0efded47723(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' progresstotal, completion, { "complete":  {{progress.complete}}, "total": {{progress.total}} } ';
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
                
                $buffer .= ' progresstotal, completion, { "complete":  ';
                $value = $this->resolveValue($context->findDot('progress.complete'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', "total": ';
                $value = $this->resolveValue($context->findDot('progress.total'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5699ecaf86825548856166264a97b6ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="text completionstatus outoftotal">
                {{#completed}}
                <img class="snap-section-complete" src="{{pixcompleted}}" alt="{{#str}}completed, completion{{/str}}" />
                {{/completed}}
                <small>
                    {{#str}} progresstotal, completion, { "complete":  {{progress.complete}}, "total": {{progress.total}} } {{/str}}
                </small>
            </span>
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
                
                $buffer .= '
';
                $buffer .= $indent . '            <span class="text completionstatus outoftotal">
';
                // 'completed' section
                $value = $context->find('completed');
                $buffer .= $this->section8fce76ab77a6fdc381759b5d578be226($context, $indent, $value);
                $buffer .= $indent . '                <small>
';
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE41c48cfae31444530bac0efded47723($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </small>
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c41b76ccea24f8c8dbe45f97dde2209(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#progress.total}}
            <span class="text completionstatus outoftotal">
                {{#completed}}
                <img class="snap-section-complete" src="{{pixcompleted}}" alt="{{#str}}completed, completion{{/str}}" />
                {{/completed}}
                <small>
                    {{#str}} progresstotal, completion, { "complete":  {{progress.complete}}, "total": {{progress.total}} } {{/str}}
                </small>
            </span>
        {{/progress.total}}';
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
                
                // 'progress.total' section
                $value = $context->findDot('progress.total');
                $buffer .= $this->section5699ecaf86825548856166264a97b6ea($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section880d0fb3da7eefd07981be6a9b249f32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li class="{{classes}}">
        {{#outputlink}}
            <a class="chapter-title" section-number="{{section}}" href="{{url}}">{{{title}}}</a>
        {{/outputlink}}
        {{^outputlink}}
            <span class="chapter-title" section-number="{{section}}">{{title}}</span>
        {{/outputlink}}
        {{#iscurrent}}
            <span class="text text-success">
                <small>{{#str}}current, theme_snap{{/str}}</small>
            </span>
        {{/iscurrent}}
        {{#availabilitystatus}}
            <span class="text {{availabilityclass}}">
                <small class="published-status">{{availabilitystatus}}</small>
            </span>
        {{/availabilitystatus}}
        {{#progress}}{{#progress.total}}
            <span class="text completionstatus outoftotal">
                {{#completed}}
                <img class="snap-section-complete" src="{{pixcompleted}}" alt="{{#str}}completed, completion{{/str}}" />
                {{/completed}}
                <small>
                    {{#str}} progresstotal, completion, { "complete":  {{progress.complete}}, "total": {{progress.total}} } {{/str}}
                </small>
            </span>
        {{/progress.total}}{{/progress}}
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
                
                $buffer .= $indent . '    <li class="';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'outputlink' section
                $value = $context->find('outputlink');
                $buffer .= $this->sectionC40dcabf8b9933bed6b3fad0df6ecc25($context, $indent, $value);
                // 'outputlink' inverted section
                $value = $context->find('outputlink');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <span class="chapter-title" section-number="';
                    $value = $this->resolveValue($context->find('section'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('title'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                }
                // 'iscurrent' section
                $value = $context->find('iscurrent');
                $buffer .= $this->section06bdaf9e532b811d8fb284aed8d3cb8f($context, $indent, $value);
                // 'availabilitystatus' section
                $value = $context->find('availabilitystatus');
                $buffer .= $this->sectionFcc7e108e74d4b188d7053215ac1b844($context, $indent, $value);
                $buffer .= $indent . '        ';
                // 'progress' section
                $value = $context->find('progress');
                $buffer .= $this->section0c41b76ccea24f8c8dbe45f97dde2209($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
