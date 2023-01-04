<?php

namespace Matthewbdaly\LaravelOpensearch\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * Controller for Opensearch XML file
 */
class OpensearchController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Return Opensearch XML file
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
             $config =  config('opensearch');
        $shortname = ((isset($config['shortname'])) ? $config['shortname']:null);
        $description = ((isset($config['description']))? $config['description']:null);
        $template = ((isset($config['template'])) ? $config['template']:null);

        $content = "<?xml version='1.0' encoding='UTF-8' ?>
<OpenSearchDescription xmlns:moz='http://www.mozilla.org/2006/browser/search/' xmlns='http://a9.com/-/spec/opensearch/1.1/'>
   <ShortName>$shortname</ShortName>
   <Description>$description</Description>
   <InputEncoding>UTF-8</InputEncoding>
   <Url method='get' type='text/html' template='$template'/>
</OpenSearchDescription>";
 
        return response($content, 200)->header('Content-Type', 'text/xml');

    }
}
