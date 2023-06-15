<?php
namespace App\Algorithms;

use Phpml\Classification\LogisticRegression;
use Phpml\Dataset\ArrayDataset;
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WhitespaceTokenizer;

class MLR
{
    public static function process($selectedOption)
    {
        // Melakukan preprosesing atau pengolahan data inputData jika diperlukan
        // ...

        // Menginisialisasi vectorizer dengan tokenizer dan fitur yang diinginkan
        $vectorizer = new TokenCountVectorizer(new WhitespaceTokenizer(), ['ngram' => 1]);

        // Menghasilkan vektor fitur dari data training
        $vectorizer->fit($trainingSamples);
        $vectorizer->transform($trainingSamples);
        $vectorizer->transform($selectedOption);

        // Membuat dataset dengan vektor fitur dan label dari data training
        $dataset = new ArrayDataset($trainingSamples, $trainingLabels);

        // Membuat instance LogisticRegression dengan konfigurasi yang diinginkan
        $classifier = new LogisticRegression();

        // Melakukan pelatihan model dengan data training
        $classifier->train($dataset->getSamples(), $dataset->getTargets());

        // Melakukan prediksi dengan menggunakan data inputData
        $prediction = $classifier->predict($selectedOption);

        // Mengembalikan hasil prediksi
        return $prediction;
    }
}