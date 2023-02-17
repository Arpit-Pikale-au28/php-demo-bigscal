<?php

$str = "Hello php";

(function () use ($str) {
    echo $str;
})();
