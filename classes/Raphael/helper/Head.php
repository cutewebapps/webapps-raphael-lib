<?php

class Raphael_HeadHelper extends App_ViewHelper_Abstract
{
    public function head( )
    {
        $this->getView()->broker()->headScript()->append(
            $this->getView()->staticpath() . '/raphael/js/raphael-min.js' );
    }
}