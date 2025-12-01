<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Excel;
use App\Exports\OrganizationExport;
use  Symfony\Component\HttpFoundation\BinaryFileResponse;

class OrganizationController extends Controller
{
    public function export(Excel $excel): BinaryFileResponse
    {
        return $excel->download(new OrganizationExport, 'organizations.xlsx');
    }
}
