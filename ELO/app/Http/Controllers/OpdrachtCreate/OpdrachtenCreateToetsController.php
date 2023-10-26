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
        $toetsHTML = $this->generateToetsHtml();

        return view('create_form', compact('toetsHTML'));
    }

    private function generateToetsHtml()
    {
        // Generate form HTML dynamically
        $toetsHTML = '<form>';
        $toetsHTML .= '<label for="fieldName">Field Name:</label>';
        $toetsHTML .= '<input type="text" name="fieldName">';
        $toetsHTML .= '<button type="submit">Submit</button>';
        $toetsHTML .= '</form>';

        return $toetsHTML;
    }
}