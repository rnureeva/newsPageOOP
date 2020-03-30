<?php
include "data.php";
foreach ($publications as $item)
{
    $item->printItem();
}