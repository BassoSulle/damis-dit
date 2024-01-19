<?php

namespace App\Http\Livewire\HeadOfSection;

use App\Models\asset;
use App\Models\asset_type;
use App\Models\request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\employee;

class RequestsList extends Component
{
    public $asset_request, $asset_id, $assettype_id, $remarks, $headOfSection, $headOfSection_id, $OB_id, $request_cod, $section_id;

    public $quantity = 1;

    protected function rules() {
        return [
                'assettype_id' => ['required', 'integer'],
                'asset_id' =>  ['required', 'integer'],
                'remarks' => ['required', 'string'],
                'quantity' => ['required', 'integer'],
    
        ];

    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    // public function mount($asset_request, $asset_id) {
        
    // }

    public function requestAsset() {

        $validatedData = $this->validate();

           $request = request::create([
                'asset_id' =>  $validatedData['asset_id'],
                'remarks' => $validatedData['remarks'],
                'quantity' => $validatedData['quantity'],
                'receiver_id' => $this->headOfSection_id,
                'sender_id' => $this->OB_id,

            ]);

            if($request) {
                session()->flash('request-sent', 'Request sent successfully');
                $this->resetInput();
                $this->dispatchBrowserEvent('close-modal');
            
            } else {
                session()->flash('request-not-sent', 'An error occurred. Try again');
                $this->resetInput();
                $this->dispatchBrowserEvent('close-modal');

            }
            
    }

    public function closeModal() {
        $this->resetInput();

    }

    public function resetInput() {
        $this->asset_request = '';

        $this->reset(
            'asset_id',
            'assettype_id',
            'remarks',
            'quantity'

        );
    }

    public function render()
    {
        $OB = Auth::user();
        $this->OB_id = $OB->id;

        $HOSs = employee::where('section_id', $OB->section_id)->get();

        foreach ($HOSs as $employee) {
            if ($employee->role->name == 'head of section') {
                $this->headOfSection_id = $employee->id;
                $this->headOfSection = $employee->first_name . ' ' . $employee->last_name;
            }
        }
        
        $assetTypes = asset_type::latest()->get();
        $assets = asset::where('assettype_id', $this->assettype_id)->where('is_active', true)->get();
        $requests = request::where('is_active', true)->latest()->paginate(10);

        return view('livewire.head-of-section.requests-list',['requests' => $requests], [
            'assetTypes' => $assetTypes,
            'assets' => $assets,
        ]);
        
    }
}
