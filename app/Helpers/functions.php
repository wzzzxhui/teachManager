<?php

function md5_2($str,$key='teachManager_')
{
    return md5(md5($str.$key));
}
