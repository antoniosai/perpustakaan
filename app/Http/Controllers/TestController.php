<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToImage\Pdf;

class TestController extends Controller
{
    public function genPdfThumbnail()
	{
		$loc = 'uploads/';
        $pdf = 'php_ebook.pdf';
        $format = "jpg";
        $dest = "$loc$pdf.$format";

        if (file_exists($dest))
                {
                $im = new \Imagick();
                $im->readImage($dest);
                header( "Content-Type: image/jpg" );
                echo $im;
                exit;
                }
        else
            {
                $im = new \Imagick($loc.$pdf.'[0]');
                $im->setImageFormat($format);

                $width = $im->getImageheight();
                $im->cropImage($width, $width, 0, 0);
                $im->scaleImage(110, 167, true);

                $im->writeImage($dest);

                header( "Content-Type: image/jpg" );
                echo $im;
                exit;
            }
	}

    public function test()
    {
        $pdf = new Pdf('public/uploads/pdf/test.pdf');
        $pdf->saveImage('uploads/pdf');
    }
}
