@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 card m-3 p-3">
            <div class="card-header">
                <h4 id="a">Laravel Ajax File Upload </h4>
            </div>
                <div class="card-body">
                        <button onclick="getText()"  class="btn btn-primary mt-2">Upload</button>
                </div>
        </div>
    </div>
@endsection
@section('scripts')
 <script>
 function getText() {
    var txt = document.getElementById('a').innerHTML;
    alert(txt);
}
 </script>

@endsection
