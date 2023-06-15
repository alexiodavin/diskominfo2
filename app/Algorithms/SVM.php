<?php
namespace App\Algorithms;
use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;

class SVM
{
    public static function process($selectedOptions)
    {
        // Melakukan preprosesing atau pengolahan data inputData jika diperlukan
        // ...

        // Membuat instance SVC dengan kernel RBF
        $classifier = new SVC(Kernel::RBF);

        // Melakukan pelatihan model dengan data training
        $classifier->train($trainingSamples, $trainingLabels);

        // Melakukan prediksi dengan menggunakan data inputData
        $prediction = $classifier->predict($selectedOptions);

        // Mengembalikan hasil prediksi
        return $prediction;
    }
}