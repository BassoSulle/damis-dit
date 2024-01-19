<?php

namespace App\Http\Livewire\Store;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\asset;
use App\Models\asset_type;
use App\Models\condition;




class AssetRegister extends Component
{

    public $asset_no, $serial_no, $assettype_id, $condition_id, $acquisition_date, $acquisition_type, $description, $cost, $asset_id;

    // protected $listeners = ['editAsset' => 'EditAsset'];

    public $user_id, $assetData;

    public function mount()
    {
        // Get the authenticated user's ID and store it in the $userId property
        $this->user_id = Auth::user()->id;

        // $this->asset = asset::find($id);

        // dd($id);

        // dd($this->asset_id);

    }
    
    protected $rules = [
        'asset_no' => 'required',
        'serial_no' => 'required',
        'assettype_id' => 'required',
        'condition_id' => 'required',
        'acquisition_date' => 'required',
        'acquisition_type' => 'required',
        'description' => 'required',
        'cost' => 'required'
        // 'accumulated_depreciation' => 'required',
        // 'gfs_code' => 'required',
        // 'gfs_description' => 'required',
        // 'remarks' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function AddAsset() {

        $validatedData = $this->validate();

        asset::create($validatedData);

        $asset = asset::latest()->first();

        asset::where('id', $asset->id)->update([
            'registered_by' => $this->user_id
        ]);

        $this->resetInput();
        session()->flash('added', 'Asset Registered successfully');
        return redirect()->route('store.assetInformation');
        
    }

    // public $assetData = session('assetData');

    // public function EditAsset() {

        // $asset = asset::find($asset_id);

        // if ($asset){

        //     return [

        //         $this->asset_no => $asset->asset_no

        //     ];

        // dd($assetData);

        //     $this->asset_no = $assetData->asset_no;
        //     $this->serial_no = $assetData->serial_no;
        //     $this->serial_no = $assetData->serial_no;
        //     $this->assettype_id = $assetData->assettype_id;
        // // }
        

        // dd($this->asset_no);

        // return redirect()->route('store.registerAsset');
    // }

    public function resetInput() {
        $this->reset('asset_no');
        $this->reset('serial_no');        
        $this->reset('assettype_id');
        $this->reset('condition_id');
        $this->reset('acquisition_date');
        $this->reset('acquisition_type');
        $this->reset('description');
        $this->reset('cost');
        // $this->reset('accumulated_depreciation');
        // $this->reset('gfs_code');
        // $this->reset('gfs_description');
        // $this->reset('remarks');

    }

    public function render()
    {
        $asset_types=asset_type::latest()->get();
        $conditions=condition::latest()->get();

        // if (session()->has('asset_id')) {
        //     $this->asset_id = session('asset_id');

        //     $assetData = asset::find($this->asset_id);

        //     $this->asset_no = $assetData->asset_no;
        //     $this->serial_no = $assetData->serial_no;
        //     $this->serial_no = $assetData->serial_no;
        //     $this->assettype_id = $assetData->assettype_id;

        //     // dd($assetData);
        //     // $this->EditAsset($this->assetData);

        //     return view('livewire.store.asset-register',[
        //         'asset_types'=>$asset_types,
        //         'conditions'=>$conditions,
        //         'asset_no' => $this->asset_no,
        //         'assettype_id' => $this->assettype_id,
        //         'condition_id' => $this->condition_id,
        //         ]);
            
        // }

       

        // $assets = asset::latest()->paginate(5);

        return view('livewire.store.asset-register',[
            'asset_types'=>$asset_types,
            'conditions'=>$conditions
            ]);
    }
}
