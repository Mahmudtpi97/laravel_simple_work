@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 card m-3 p-3">
            <div class="card-header">
                <h4 id="a">Laravel Ajax File Upload </h4>
            </div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="FileID" class="form-label"> Choose your File</label>
                            <input class="form-control" type="file" id="FileID" multiple>
                        </div>
                        <button onclick="fileUpload()" id="UploadBtnID" class="btn btn-primary mt-2" > Upload</button>
                        <p id="file-msg" style="display: none; color:red;">Please re-submit your file</p>
                    </div>
        </div>
    </div>
@endsection
@section('scripts')
<script type="text/javascript">
    function fileUpload(){
        let spinner    = "<div class='spinner-border spinner-border-sm' role='status'></div>";
        $('#UploadBtnID').html(spinner);

        let myFile     = document.getElementById("FileID").files[0];
        let myFileName = myFile.name;
        let myFileSize = myFile.size;
        let myFileEx   = myFileName.split(".").pop();

        // alert (myFileEx);

        let fileData = new FormData();
        fileData.append('fileImgg',myFile);

        let config = { headers:{ "Content-Type": "multipart/form-data" },}
        // alert(fileData);
        let url = "/fileUpload";

        axios.post(url,fileData,config)

        .then(function (response) {
            //handle success
            // alert(response.data);
            if (response.status==200) {
                // alert('aaaa');
                $('#UploadBtnID').html('Upload Success');
                setTimeout(() => {
                    $('#UploadBtnID').html('Upload');
                }, 3000);
            }
            else{
                // alert('error');
                $('#UploadBtnID').html('Upload Fail');
                $('#file-msg').show();
                setTimeout(() => {
                    $('#UploadBtnID').html('Upload');
                }, 3000);
            }
        }).catch(function (error) {
            $('#UploadBtnID').html('Upload Fail');
            $('#file-msg').show();
            setTimeout(() => {
                    $('#UploadBtnID').html('Upload');
                }, 3000);
        })
    }
</script>
@endsection
