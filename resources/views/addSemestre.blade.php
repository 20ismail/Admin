<x-dashboard>
    <style>
        .input-group {
            margin-top: 20px;
        }
        .radio-group {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .radio-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
        .radio-item label {
            margin-left: 5px;
        }
        .hidden {
            display: none;
        }
        .input-group label {
            display: block;
            margin-top: 10px;
        }
        .input-group input {
            margin-bottom: 10px;
            display: block;
            padding: 10px;
            width: 200px;
            height: 30px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #45a049;
        }
        form {
            width: 1000px;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
             
        }
        h1 {
            text-align: center;
        }
    </style>

    <h1>Ajouter les semestres</h1>
    <form id="programForm" action="{{route('semestres.store')}}" method="POST">
        @CSRF
        <!-- CSRF Token for security, required in Laravel -->
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

        <div class="radio-group">
            <div class="radio-item">
                <input type="radio" id="DUT" name="program" value="DUT">
                <label for="DUT" style="margin-top: 7px">DUT</label>
            </div>
            <div class="radio-item">
                <input type="radio" id="LP" name="program" value="LP">
                <label for="LP" style="margin-top: 7px">LP</label>
            </div>
            <div class="radio-item">
                <input type="radio" id="MASTER" name="program" value="MASTER">
                <label for="MASTER" style="margin-top: 7px">MASTER</label>
            </div>
        </div>

        <div id="DUT-inputs" class="hidden input-group">
            <label for="S1">S1</label>
            <input type="number" style=" margin-top: 7px;" id="S1" name="S1">
            <label for="S2" style="margin-left: 12px;">S2</label>
            <input type="number" id="S2" name="S2" style=" margin-top: 7px;">
            <label for="S3" style="margin-left: 12px; " >S3</label>
            <input type="number" id="S3" style="margin-top: 7px; " name="S3">
            <label for="S4">S4</label>
            <input type="number" style="margin-left: 3px; margin-top: 7px;" id="S4" name="S4">
        </div>

        <div id="LP-inputs" class="hidden input-group">
            <label for="S5" >S5</label>
            <input type="number" id="S5" style=" margin-top: 7px;" name="S5">
            <label for="S6" style="margin-left: 20px">S6</label>
            <input type="number" id="S6" style=" margin-top: 7px;" name="S6">
        </div>

        <div id="MASTER-inputs" class="hidden input-group">
            <label for="S7">S7</label>
            <input type="number" id="S7" style="margin-right:9px; margin-top: 7px;" name="S7">
            <label for="S8" >S8</label>
            <input type="number" style="margin-left: 13px; margin-right:20px; margin-top: 7px;" id="S8" name="S8">
            <label for="S9" >S9</label>
            <input type="number" style="margin-left: 17px; margin-right:20px; margin-top: 7px;" id="S9" name="S9">
            <label for="S10">S10</label>
            <input type="number"  style=" margin-top: 7px;" id="S10" name="S10">
        </div>

        <button type="submit" style="background-color:#102C57;">Save</button>
       
        <a href="{{route('semestres.index')}}" style="margin-left: 10px;">
            <button style="background-color:#102C57;">Previous Page</button>
        </a>
    </form>

    <script>
        document.querySelectorAll('input[name="program"]').forEach(function (radio) {
            radio.addEventListener('change', function () {
                document.getElementById('DUT-inputs').classList.add('hidden');
                document.getElementById('LP-inputs').classList.add('hidden');
                document.getElementById('MASTER-inputs').classList.add('hidden');

                if (radio.checked) {
                    document.getElementById(radio.value + '-inputs').classList.remove('hidden');
                }
            });
        });
    </script>
</x-dashboard>
