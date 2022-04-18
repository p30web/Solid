<?php

class Hello {
    public function say($lang): string
    {
        if($lang == 'pr'){
            return 'سلام';
        }
        elseif($lang == 'fa'){
            return 'سلام';
        }else {
            return 'no';
        }
    }
}

$hello = new Hello();
echo $hello->say('fa');

/* Ok : */

interface LanguageInterface {
    public function sayHello(): string;
}

class Persian implements LanguageInterface {
    public function sayHello(): string
    {
        return 'سلام';
    }
}

class English implements LanguageInterface {
    public function sayHello(): string {
        return 'hi';
    }
}

class Hi {
    public function say($lang){
        return $lang->sayHello();
    }
}


$helloService = new Hi();
echo $helloService->say(new Persian());
