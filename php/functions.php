<?php

    function transformToList($array)
    {
        $tempList = [];

        foreach ($array as $el) {
            $tempList[] = "\"$el\"";
        }

        $tempList = implode(",", $tempList);

        return $tempList;
    };
?>