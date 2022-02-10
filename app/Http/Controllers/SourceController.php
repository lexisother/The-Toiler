<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class SourceController extends Controller
{
    public function dump()
    {
        // TODO: Please, for the love of God, define a data structure for the response as a class.
        $res = $this->getSourceData('https://cumcordplugins.github.io/Condom/plugins-large.json');
        return view('source', ['sourceData' => $res]);
    }

    public function aly()
    {
        return view('source', ['sourceData' => null]);
    }

    /**
     * Get the JSON data for a source.
     * @param string $sourceUrl
     * @return mixed
     */
    public function getSourceData($sourceUrl)
    {
        $sourceData = null;
        return Http::get($sourceUrl)->json();
    }
}
