<?php

class Fail {
    public function __construct() {
        $helper = new Helper();

        // Why doesn't it resolve the ::class in the Service const BAR?
        $thisShouldBeBar = $helper->newInstanceArgs(Service::BAR);



        $thisOneWorks = $helper->newInstanceArgs(Bar::class);


    }

}