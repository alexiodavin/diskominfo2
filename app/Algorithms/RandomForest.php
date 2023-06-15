<?php

namespace App\Algorithms;

class RandomForest
{
    public static function process($selectedOption)
    {
        // Melakukan preprosesing atau pengolahan data inputData jika diperlukan
        // ...

        // Membuat instance RandomForest dengan 100 pohon keputusan (trees)
        $classifier = new RandomForest(100);

        // Melakukan pelatihan model dengan data training
        $classifier->train($trainingSamples, $trainingLabels);

        // Melakukan prediksi dengan menggunakan data inputData
        $prediction = $classifier->predict($selectedOption);

        // Mengembalikan hasil prediksi
        return $prediction;
    }
}
