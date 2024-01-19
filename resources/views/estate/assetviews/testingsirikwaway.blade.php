@extends('layouts.estate')

@section('estatecontent')
<div class="container"><br>
    <h2>{{ $assetName}} Assets</h2>
    <br>

    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"
        data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true"
        data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
        <thead>
            <tr>
                <th>ID</th>
                <th>DESCRIPTION</th>
                <th>CONDITION </th>
                <th>COST</th>
                <th>ACTIONS</th>
            </tr>


        </thead>
        <tbody>

            @foreach($assets as $asset)
            <tr>
                <td>{{ $asset->asset_id }}</td>
                <td>{{ $asset->asset_description }}</td>
                <td>{{ $asset->condition_id }}</td>
                <td>{{ $asset->cost }}</td>
                <td>
                    <button class="btn btn-primary" onclick="disposeAsset('{{ $asset->asset_description }}', '{{ $asset->asset_id }}', '{{ $asset->condition_id }}')">Dispose</button>
                    <button class="btn btn-info" onclick="viewAsset()">View</button>
                </td>
            </tr>
        @endforeach

        
        </tbody>
    </table>

    <div class="col-lg-9">
        <div class="row" style="justify-content:right;">
            <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                <button class="btn p-2 bg-primary w-100 mb-0 toast-btn" type="button"
                    data-target="warningToast"><b style="font-size: 1.5rem">PRINT</b></button>
            </div>
        </div>
    </div>
</div>

<script>
function viewAsset(url) {
    window.location.href = url;
}

function disposeAsset(assetDescription, assetNo, condition) {
    var confirmation = confirm("Do you want to dispose this asset?\n\nAsset No: " + assetNo + "\nAsset Description: " + assetDescription + "\nCondition: " + condition);

    if (confirmation) {
        // Perform the disposal action here, e.g., make an API request to mark the asset as disposed
        showAlert("Asset disposed successfully.", 3000); // Show the alert for 3 seconds (3000 milliseconds)
    } else {
        showAlert("Asset disposal canceled.", 3000); // Show the alert for 3 seconds (3000 milliseconds)
    }

    function showAlert(message, duration) {
        var alertBox = document.createElement("div");
        alertBox.style.position = "fixed";
        alertBox.style.top = "10px";
        alertBox.style.left = "50%";
        alertBox.style.transform = "translateX(-50%)";
        alertBox.style.backgroundColor = "#f2f2f2";
        alertBox.style.border = "1px solid #ddd";
        alertBox.style.padding = "10px";
        alertBox.style.zIndex = "9999";
        alertBox.innerText = message;

        document.body.appendChild(alertBox);

        setTimeout(function() {
            alertBox.style.display = "none";
        }, duration);
    }
}
</script>
@endsection
