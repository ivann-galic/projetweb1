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

    function powerColorChange($info) {
        if ($info === 0) {
            echo '';
        } else if ($info <= 70) {
            echo 'puissance-rouge';
        } else if ($info > 71 && $info <= 100) {
            echo 'puissance-orange';
        } else {
            echo 'puissance-vert';
        };
    }

?>