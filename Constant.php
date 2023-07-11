<?php
define("EMAIL", "pagnavathsok@gmail.com");
echo EMAIL."<br/>";

define("myCon", !false);
if (myCon) {
    echo EMAIL."<br/>";
}

define("ONECONSTANT", "some value");

define("CONSTANT", "Hello World!");
echo CONSTANT."<br/>";
?>