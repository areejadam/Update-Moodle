<?php

class __Mustache_c2924ee6c3ef1ff46c48366152cba88f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'text' section
        $value = $context->find('text');
        $buffer .= $this->sectionBcbe1f534d447b3366a30a69b734503f($context, $indent, $value);

        return $buffer;
    }

    private function section6aff5b39481d5d347daaeead1b7c9a7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'restricted, core';
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
                
                $buffer .= 'restricted, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f89b533c6c2c6760901e83ba0e74b9c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="tag tag-info">{{#str}}restricted, core{{/str}}</span> {{{text}}}
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
                
                $buffer .= $indent . '    <span class="tag tag-info">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6aff5b39481d5d347daaeead1b7c9a7d($context, $indent, $value);
                $buffer .= '</span> ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcbe1f534d447b3366a30a69b734503f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="availabilityinfo {{classes}}">
    {{^isrestricted}}
    <span class="tag tag-info">{{{text}}}</span>
    {{/isrestricted}}
    {{#isrestricted}}
    <span class="tag tag-info">{{#str}}restricted, core{{/str}}</span> {{{text}}}
    {{/isrestricted}}
</div>
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
                
                $buffer .= $indent . '<div class="availabilityinfo ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'isrestricted' inverted section
                $value = $context->find('isrestricted');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    <span class="tag tag-info">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                }
                // 'isrestricted' section
                $value = $context->find('isrestricted');
                $buffer .= $this->section7f89b533c6c2c6760901e83ba0e74b9c($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
