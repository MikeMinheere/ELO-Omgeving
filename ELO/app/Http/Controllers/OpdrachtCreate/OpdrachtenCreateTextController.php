<?php
namespace App\Http\Controllers\OpdrachtCreate;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OpdrachtenCreateToetsController extends Controller
{
    public function createToets()
    {
        $textHTML = $this->generateTextHtml();

        return view('create_form', compact('textHTML'));
    }

    private function generateTextHtml()
    {
        // Generate form HTML dynamically
        $textHTML = '<form>';
        $textHTML .= '<label for="fieldName">Field Name:</label>';
        $textHTML .= '<input type="text" name="fieldName">';
        $textHTML .= '<button type="submit">Submit</button>';
        $textHTML .= '</form>';

        return $textHTML;
    }
}