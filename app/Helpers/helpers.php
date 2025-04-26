<?php
    function fechaActual($formato = 'Y-m-d')
    {
        return now()->format($formato);
    }
