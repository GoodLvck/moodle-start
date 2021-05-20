<?php

class __Mustache_ba0b60dc91a0c4b1978eeabcce51ec87 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="m-y-3 hidden-sm-down"></div>
';
        $buffer .= $indent . '<div class="row snap-login-row"  id="logins">
';
        $buffer .= $indent . '    <div class="snap-login snap-login-option snap-login-cell" id="base-login">
';
        // 'logourl' section
        $value = $context->find('logourl');
        $buffer .= $this->section0486d2ac7b52c0571959db837de5270f($context, $indent, $value);
        // 'logourl' inverted section
        $value = $context->find('logourl');
        if (empty($value)) {
            
            $buffer .= $indent . '        <h2 class="text-center">';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '</h2>
';
        }
        $buffer .= $indent . '
';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->sectionDb759266208bef41124cc7b308cf8f42($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <form action="';
        $value = $this->resolveValue($context->find('loginurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" method="post" id="login" ';
        // 'passwordautocomplete' inverted section
        $value = $context->find('passwordautocomplete');
        if (empty($value)) {
            
            $buffer .= 'autocomplete="off"';
        }
        $buffer .= ' class="snap-custom-form">
';
        $buffer .= $indent . '            <input type="hidden" name="logintoken" value="';
        $value = $this->resolveValue($context->find('logintoken'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <input id="anchor" type="hidden" name="anchor" value="">
';
        $buffer .= $indent . '            <script>document.getElementById(\'anchor\').value = location.hash;</script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <label for="username" class="sr-only">
';
        // 'canloginbyemail' inverted section
        $value = $context->find('canloginbyemail');
        if (empty($value)) {
            
            $buffer .= $indent . '                    ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section27e9419edc620e0e1872d2a6521f1533($context, $indent, $value);
            $buffer .= '
';
        }
        // 'canloginbyemail' section
        $value = $context->find('canloginbyemail');
        $buffer .= $this->sectionFecc44d36b1d26bcf00eabac676276bd($context, $indent, $value);
        $buffer .= $indent . '            </label>
';
        $buffer .= $indent . '            <input type="text" name="username" id="username"
';
        $buffer .= $indent . '                class="form-control"
';
        $buffer .= $indent . '                value="';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                placeholder=';
        // 'quote' section
        $value = $context->find('quote');
        $buffer .= $this->section4a2b2050243eb4dff6ce2b11212bbbcb($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '            <label for="password" class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <input type="password" name="password" id="password" value=""
';
        $buffer .= $indent . '                class="form-control"
';
        $buffer .= $indent . '                placeholder=';
        // 'quote' section
        $value = $context->find('quote');
        $buffer .= $this->section1e0c7d916e3932461ff09cf034c710f8($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        // 'passwordautocomplete' inverted section
        $value = $context->find('passwordautocomplete');
        if (empty($value)) {
            
            $buffer .= 'autocomplete="off"';
        }
        $buffer .= '>
';
        $buffer .= $indent . '            <br>
';
        $buffer .= $indent . '            <button type="submit" class="btn btn-primary btn-block" id="loginbtn">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            <a class="small btn btn-link btn-block" href="';
        $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6aa95a7e496f5307b40bee7262bd9321($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        </form>
';
        $buffer .= $indent . '    </div>
';
        // 'hasidentityproviders' section
        $value = $context->find('hasidentityproviders');
        $buffer .= $this->sectionC8fbbc6d3de2018c761af1a5ffcb271b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'hasinstructions' section
        $value = $context->find('hasinstructions');
        $buffer .= $this->section1ed41a2d11db8e3eeb7dab3b3808134d($context, $indent, $value);
        // 'cansignup' section
        $value = $context->find('cansignup');
        $buffer .= $this->section1964c3e64426aadf1825924f92acd4d0($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'canloginasguest' section
        $value = $context->find('canloginasguest');
        $buffer .= $this->section2cb06afb5d16bd230c23a2acf04db440($context, $indent, $value);
        $buffer .= $indent . '<span class="snap-log-in-more snap-log-in-loading-spinner"></span>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section8ff00f330c8591daeafe93f6afaf5eaa($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section0486d2ac7b52c0571959db837de5270f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h2 class="snap-logo-sitename text-center">{{sitename}}</h2>
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
                
                $buffer .= $indent . '        <h2 class="snap-logo-sitename text-center">';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb759266208bef41124cc7b308cf8f42(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="loginerrors">
                <a href="#" id="loginerrormessage" class="accesshide">{{error}}</a>
                <div class="alert alert-danger" role="alert">{{error}}</div>
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
                
                $buffer .= $indent . '            <div class="loginerrors">
';
                $buffer .= $indent . '                <a href="#" id="loginerrormessage" class="accesshide">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                <div class="alert alert-danger" role="alert">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27e9419edc620e0e1872d2a6521f1533(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' username ';
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
                
                $buffer .= ' username ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22141a6741c33f407ef6171795337eec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' usernameemail ';
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
                
                $buffer .= ' usernameemail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFecc44d36b1d26bcf00eabac676276bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#str}} usernameemail {{/str}}
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
                
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section22141a6741c33f407ef6171795337eec($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
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
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
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
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cfee3b9563446af7cf73b3dabe83fe5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}usernameemail{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a2b2050243eb4dff6ce2b11212bbbcb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^canloginbyemail}}{{#str}}username{{/str}}{{/canloginbyemail}}{{#canloginbyemail}}{{#str}}usernameemail{{/str}}{{/canloginbyemail}}';
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
                
                // 'canloginbyemail' inverted section
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                }
                // 'canloginbyemail' section
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section1cfee3b9563446af7cf73b3dabe83fe5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE056be559d6d01a9bd2bf6f760f8e3e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' password ';
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
                
                $buffer .= ' password ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
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
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e0c7d916e3932461ff09cf034c710f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}password{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
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
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6aa95a7e496f5307b40bee7262bd9321(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forgotten';
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
                
                $buffer .= 'forgotten';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE384f0e9b1fcc321a1a78dba1d43f63f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' potentialidps, auth ';
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
                
                $buffer .= ' potentialidps, auth ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fc38b71bab296fb0efdd08834d72587(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}';
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
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a7b5fc76aa4e5986dec1e094e4eb51d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <img class="auth-icon" src="{{iconurl}}" onerror="this.style.display=\'none\'"/>
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
                
                $buffer .= $indent . '                                    <img class="auth-icon" src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" onerror="this.style.display=\'none\'"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5985136443d4317aa1c2b657b8f036cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' /i/permissions, core ';
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
                
                $buffer .= ' /i/permissions, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0d5f93c9d8de1ea38d11403069332fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="potentialidp">
                            <a href="{{url}}"  class="btn btn-primary btn-block" title={{#quote}}{{name}}{{/quote}}>
                                {{#iconurl}}
                                    <img class="auth-icon" src="{{iconurl}}" onerror="this.style.display=\'none\'"/>
                                {{/iconurl}}
                                {{^iconurl}}
                                    {{#pix}} /i/permissions, core {{/pix}}
                                {{/iconurl}}
                                {{name}}
                            </a>
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
                
                $buffer .= $indent . '                        <div class="potentialidp">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"  class="btn btn-primary btn-block" title=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section5fc38b71bab296fb0efdd08834d72587($context, $indent, $value);
                $buffer .= '>
';
                // 'iconurl' section
                $value = $context->find('iconurl');
                $buffer .= $this->section0a7b5fc76aa4e5986dec1e094e4eb51d($context, $indent, $value);
                // 'iconurl' inverted section
                $value = $context->find('iconurl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->section5985136443d4317aa1c2b657b8f036cc($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8fbbc6d3de2018c761af1a5ffcb271b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="snap-login snap-login-option snap-login-cell" id="alt-login">
                <h5>{{#str}} potentialidps, auth {{/str}}</h5>
                <div class="potentialidplist">
                    {{#identityproviders}}
                        <div class="potentialidp">
                            <a href="{{url}}"  class="btn btn-primary btn-block" title={{#quote}}{{name}}{{/quote}}>
                                {{#iconurl}}
                                    <img class="auth-icon" src="{{iconurl}}" onerror="this.style.display=\'none\'"/>
                                {{/iconurl}}
                                {{^iconurl}}
                                    {{#pix}} /i/permissions, core {{/pix}}
                                {{/iconurl}}
                                {{name}}
                            </a>
                        </div>
                    {{/identityproviders}}
                </div>
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
                
                $buffer .= $indent . '        <div class="snap-login snap-login-option snap-login-cell" id="alt-login">
';
                $buffer .= $indent . '                <h5>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE384f0e9b1fcc321a1a78dba1d43f63f($context, $indent, $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '                <div class="potentialidplist">
';
                // 'identityproviders' section
                $value = $context->find('identityproviders');
                $buffer .= $this->sectionF0d5f93c9d8de1ea38d11403069332fa($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31b35200530620d18a8896098b070602(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'helpwithlogin, theme_snap';
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
                
                $buffer .= 'helpwithlogin, theme_snap';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e09b71e9fcfd1f6d7fa6e2d493f7aaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'help, theme_snap, {{#str}}helpwithlogin, theme_snap{{/str}} ';
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
                
                $buffer .= 'help, theme_snap, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section31b35200530620d18a8896098b070602($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a20f6a0c1e5f01649c33230170638b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closebuttontitle';
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
                
                $buffer .= 'closebuttontitle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ed41a2d11db8e3eeb7dab3b3808134d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="js-only snap-login  snap-login-box ">
        <div class="snap-login-instructions">
            <a class="btn btn-primary btn-block iconhelp" href="#" data-toggle="modal" data-target="#login-help-modal">
                {{#str}}helpwithlogin, theme_snap{{/str}} {{#pix}}help, theme_snap, {{#str}}helpwithlogin, theme_snap{{/str}} {{/pix}}
            </a>
            <!-- Modal -->
            <div class="modal fade" id="login-help-modal" tabindex="-1" role="dialog" aria-labelledby="login-help-modal-title" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{#str}}closebuttontitle{{/str}}">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="login-help-modal-title">{{#str}}helpwithlogin, theme_snap{{/str}}</h5>
                  </div>
                  <div class="modal-body summary">
                      <br>
                      {{{instructions}}}
                  </div>
                </div>
              </div>
            </div>
        </div>
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
                
                $buffer .= $indent . '    <div class="js-only snap-login  snap-login-box ">
';
                $buffer .= $indent . '        <div class="snap-login-instructions">
';
                $buffer .= $indent . '            <a class="btn btn-primary btn-block iconhelp" href="#" data-toggle="modal" data-target="#login-help-modal">
';
                $buffer .= $indent . '                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section31b35200530620d18a8896098b070602($context, $indent, $value);
                $buffer .= ' ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section1e09b71e9fcfd1f6d7fa6e2d493f7aaa($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <!-- Modal -->
';
                $buffer .= $indent . '            <div class="modal fade" id="login-help-modal" tabindex="-1" role="dialog" aria-labelledby="login-help-modal-title" aria-hidden="true">
';
                $buffer .= $indent . '              <div class="modal-dialog" role="document">
';
                $buffer .= $indent . '                <div class="modal-content">
';
                $buffer .= $indent . '                  <div class="modal-header">
';
                $buffer .= $indent . '                    <button type="button" class="close" data-dismiss="modal" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7a20f6a0c1e5f01649c33230170638b5($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                      <span aria-hidden="true">&times;</span>
';
                $buffer .= $indent . '                    </button>
';
                $buffer .= $indent . '                    <h5 class="modal-title" id="login-help-modal-title">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section31b35200530620d18a8896098b070602($context, $indent, $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                  <div class="modal-body summary">
';
                $buffer .= $indent . '                      <br>
';
                $buffer .= $indent . '                      ';
                $value = $this->resolveValue($context->find('instructions'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB681534bda1faeeb31506c30e72ff16e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firsttime';
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
                
                $buffer .= 'firsttime';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f819a53e4575a4e7767be1939ab3bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startsignup';
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
                
                $buffer .= 'startsignup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1964c3e64426aadf1825924f92acd4d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="snap-login snap-login-option snap-login-box">
        <h5>{{#str}}firsttime{{/str}}</h5>
        <p><a class="btn btn-primary btn-block" href="{{signupurl}}">{{#str}}startsignup{{/str}}</a></p>
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
                
                $buffer .= $indent . '    <div class="snap-login snap-login-option snap-login-box">
';
                $buffer .= $indent . '        <h5>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB681534bda1faeeb31506c30e72ff16e($context, $indent, $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '        <p><a class="btn btn-primary btn-block" href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</a></p>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93e4b62aaf677bf7878b06c5ac540671(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'someallowguest';
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
                
                $buffer .= 'someallowguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017c9686023b74877131737c59ff1162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loginguest';
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
                
                $buffer .= 'loginguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2cb06afb5d16bd230c23a2acf04db440(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="snap-login snap-login-option snap-login-box">
        <h5>{{#str}}someallowguest{{/str}}</h5>
        <form action="{{loginurl}}" method="post" id="guestlogin">
            <input type="hidden" name="username" value="guest" />
            <input type="hidden" name="password" value="guest" />
            <button class="btn btn-secondary btn-block" type="submit">{{#str}}loginguest{{/str}}</button>
        </form>
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
                
                $buffer .= $indent . '    <div class="snap-login snap-login-option snap-login-box">
';
                $buffer .= $indent . '        <h5>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section93e4b62aaf677bf7878b06c5ac540671($context, $indent, $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '        <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="post" id="guestlogin">
';
                $buffer .= $indent . '            <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '            <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '            <button class="btn btn-secondary btn-block" type="submit">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '        </form>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87d4cc44cef23dbc2d4678a71be62fe6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        $(function() {
            M.util.focus_login_error(Y);
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
                
                $buffer .= $indent . '        $(function() {
';
                $buffer .= $indent . '            M.util.focus_login_error(Y);
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5611ddd71cb2a428d666e18c4d5ac2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            $(function() {
                M.util.focus_login_form(Y);
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
                
                $buffer .= $indent . '            $(function() {
';
                $buffer .= $indent . '                M.util.focus_login_form(Y);
';
                $buffer .= $indent . '            });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ff00f330c8591daeafe93f6afaf5eaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\', \'core/yui\'], function($, Y) {
    {{#error}}
        $(function() {
            M.util.focus_login_error(Y);
        });
    {{/error}}
    {{^error}}
        {{#autofocusform}}
            $(function() {
                M.util.focus_login_form(Y);
            });
        {{/autofocusform}}
    {{/error}}
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
                
                $buffer .= $indent . '    require([\'jquery\', \'core/yui\'], function($, Y) {
';
                // 'error' section
                $value = $context->find('error');
                $buffer .= $this->section87d4cc44cef23dbc2d4678a71be62fe6($context, $indent, $value);
                // 'error' inverted section
                $value = $context->find('error');
                if (empty($value)) {
                    
                    // 'autofocusform' section
                    $value = $context->find('autofocusform');
                    $buffer .= $this->sectionF5611ddd71cb2a428d666e18c4d5ac2e($context, $indent, $value);
                }
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
