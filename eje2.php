<?php

abstract class Painting
{
    public $style;
    public $yearOfInvention;

    public function __construct($style, $yearOfInvention)
    {
        $this->style = $style;
        $this->yearOfInvention = $yearOfInvention;
    }

    public function getStyle()
    {
        return $this->style;
    }

    public function getYearOfInvention()
    {
        return $this->yearOfInvention;
    }

    public function __destruct()
    {
        echo "The '" . $this->style . "' style is invented in " . $this->yearOfInvention . " <br>";
    }
}

class AcrylicPainting extends Painting
{
    public static $material = "acrylic resins";

    public function __destruct()
    {
        echo "The '" . $this->style . "' style is invented somewhere around " . $this->yearOfInvention . " using " .  self::$material . ". <br>";
    }
}

$acrylicPainting = new AcrylicPainting("Acrylic Painting", "1934");

