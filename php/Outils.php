<?php
    function statsColorChange($info) {
        if ($info <= 50) {
            echo 'stats-rouge';
        } else if ($info > 51 && $info <= 70) {
            echo 'stats-orange';
        } else {
            echo 'stats-vert';
        };
    }
?>