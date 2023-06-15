<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Algorithms\RandomForest; // Ganti dengan namespace Random Forest Anda
use App\Algorithms\KNearestNeighbors; // Ganti dengan namespace K-Nearest Neighbors Anda
use App\Algorithms\SVM; // Ganti dengan namespace SVM Anda
use App\Algorithms\MLR; // Ganti dengan namespace MLR Anda
use App\Algorithms\MNB; // Ganti dengan namespace MNB Anda
class HalamanController extends Controller
{
    public function index()
    {
        // Ambil data yang diperlukan untuk multiple dropdown
        // dan kirimkan ke view
        $options = [ 'K-Nearest Neigbors', 'Support Vector Machine', 'Multinomial Logistic Regression','Multinomial NB', 'Random Forest'];
        return view('home', compact('options'));
    }

    public function process(Request $request)
    {
        // Proses file yang diunggah dan
        // lakukan sesuatu sesuai dengan pilihan dropdown
        $selectedOption = $request->input('pilihan');
        $file = $request->file('file');

        // Inisialisasi variabel output
        $output = null;

        // Lakukan logika sesuai dengan pilihan
        if ($selectedOption === 'K-Nearest Neigbors') {
            switch($file){
                case 'K-Nearest Neigbors':
                    $output = KNearestNeighbors::process($selectedOption);
                    break;
            }
        } elseif ($selectedOption === 'Support Vector Machine') {
            switch ($file) {
            case 'Support Vector Machine':
                $output = SVM::process($selectedOption);
                
                break;
            }
        } elseif ($selectedOption === 'Multinomial Logistic Regression') {
            switch ($file) {
                case 'Multinomial Logistic Regression':
                    $output = MLR::process($selectedOption);
                    break;
                }
        } elseif ($selectedOption === 'Multinomial NB') {
            switch ($file) {
                case 'Multinomial NB':
                    $output = MNB::process($selectedOption);
                    break;
            }
        } elseif ($selectedOption === 'Random Forest') {
            switch ($file) {
                case 'Random Forest':
                    $output = RandomForest::process($selectedOption);
                    break;
                }       
        }

        // Mengirimkan output ke view
        return view('result', ['output' => $output]);
    }
}
