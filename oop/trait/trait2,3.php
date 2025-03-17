<?php
trait FingerPrint
{
    public function fingerfeature()
    {
        echo "this has finger print feature<br>";
        return $this;
    }
}
trait ThreeDimensionTouch
{
    public function threeD()
    {
        echo "this is 3D touch feature<br>";
        return $this;
    }
}
trait facedetect
{
    public function FaceFeature()
    {
        echo "this is face detect feature<br>";
        return $this;
    }
}

trait allfeatures
{
    use FingerPrint, ThreeDimensionTouch, facedetect;
}


class samsung
{
    use allfeatures;
    public function sayhello()
    {
        echo "hello from samsung<br>";
        return $this;
    }
}
class poco
{
    use facedetect;
    public function sayhello()
    {
        echo "hello from poco<br>";
        return $this;
    }
}
class oppo
{
    public function sayhello()
    {
        echo "hello from OPPO<br>";
        return $this;
    }
}

$samsung = new samsung();
$samsung->fingerfeature()->FaceFeature()->threeD();
echo "<pre>";
print_r($samsung);
echo "</pre>";
$poco = new poco();
echo "<pre>";
print_r($poco);
echo "</pre>";
$oppo = new oppo();
echo "<pre>";
print_r($oppo);
echo "</pre>";