<?php
namespace App\Algorithms;
use Phpml\Classification\NaiveBayes\MultinomialNB;

class MNB
{
    public static function process($selectedOption)
    {
        // Melakukan preprosesing atau pengolahan data inputData jika diperlukan
        // ...

        // Membuat instance MultinomialNB
        $classifier = new MultinomialNB();

        // Melakukan pelatihan model dengan data training
        $classifier->train($trainingSamples, $trainingLabels);

        // Melakukan prediksi dengan menggunakan data inputData
        $prediction = $classifier->predict($selectedOption);

        // Mengembalikan hasil prediksi
        return $prediction;
    }
}