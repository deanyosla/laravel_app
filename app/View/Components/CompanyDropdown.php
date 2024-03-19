<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Company;

class CompanyDropdown extends Component
{
    public $currentCompany;

    /**
     * Create a new component instance.
     */
    public function __construct($currentCompany)
    {
        $this->currentCompany = $currentCompany;
    }

    /**
     * Get the view / contents that represent the component.
     */

    public function render(): View|Closure|string
    {
        return view('components.company-dropdown', [
            'companies' => Company::all(),
            
        ]);
    }
}
