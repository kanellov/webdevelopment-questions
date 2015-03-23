<?php
        $name     = "Joe";
        $surname  = "Doe";
        $sayHello = function() {
            return sprintf("Hello %s", $name, $surname);
        };

        echo $sayHello($name, $surname);