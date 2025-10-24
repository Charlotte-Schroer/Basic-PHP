<?php
function calculateSurfaceAreaCircle(float $radius): float
{
    return M_PI*$radius*$radius;
}

function calculateSurfaceAreaTriangle(float $width, float  $height): float
{
    return $width*$height/2;
}

function calculateSurfaceAreaRectangle(float $width, float $height): float
{
    return $width*$height;
}

function calculateSurfaceAreaSquare(float $width): float
{
    return calculateSurfaceAreaRectangle($width,$width);
}