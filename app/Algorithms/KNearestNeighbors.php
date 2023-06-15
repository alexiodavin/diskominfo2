<?php
namespace App\Algorithms;


class KNearestNeighbors
{
    
    public static function process($selectedOption)
    {
        // Melakukan preprosesing atau pengolahan data inputData jika diperlukan
        // ...

        // Membuat instance KNearestNeighbors
        $classifier = new KNearestNeighbors();

        // Melakukan pelatihan model dengan data training
        $classifier->train($trainingSamples, $trainingLabels);

        // Melakukan prediksi dengan menggunakan data inputData
        $prediction = $classifier->predict($selectedOption);

        // Mengembalikan hasil prediksi
        return $prediction;
    }
}