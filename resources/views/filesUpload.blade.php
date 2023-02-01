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
                        <h5 id="UploadPercentangeID"></h5>
                        <p id="file-msg" style="display: none; color:red;">Please re-submit your file</p>
                    </div>
        </div>
    </div>
@endsection
@section('scripts')
<script type="text/javascript">
    function fileUpload(){
        let spinner    = "<div class='spinner-border spinner-border-sm' role='status'></div>";

        let myFile     = document.getElementById("FileID").files[0];
        let myFileName = myFile.name;
        let myFileSize = myFile.size;
        let myFileEx   = myFileName.split(".").pop();
        $('#UploadBtnID').html(spinner);

        // alert (myFileEx);

        let fileData = new FormData();
        fileData.append('fileImg',myFile);

        let config = {
            headers:{ "Content-Type": "multipart/form-data" },

            onUploadProgress:function(progressEvent){
              let UploadPercentage = Math.round((progressEvent.loaded * 100) / progressEvent.total)
              let totalMB = (progressEvent.total) / (1028 * 1028);
              let uploadMB = (progressEvent.loaded) / (1028 * 1028);
              let deuMB    = totalMB - uploadMB;
              $('#UploadPercentangeID').html(" <b>Total:</b> "+totalMB.toFixed(2)+" MB, <b>Upload</b> "+uploadMB.toFixed(2)+" MB, <b>Deu:</b> "+deuMB.toFixed(2)+"MB <br><b>Upload:</b> "+UploadPercentage+" % ");
            }
    }
        // alert(fileData);
        let url = "/fileUpload";

        axios.post(url,fileData,config)

        .then(function (response) {
            //handle success
            // alert(response.data);
            if (response.status==200) {
                $('#UploadBtnID').html('Upload');
                $('#UploadPercentangeID').html('Upload Success');
                setTimeout(() => {
                    $('#UploadPercentangeID').html(' ');
                }, 3000);
            }
            else{
                $('#UploadBtnID').html('Upload');
                $('#UploadPercentangeID').html('Upload Fail');
                $('#file-msg').show();
                setTimeout(() => {
                    $('#UploadPercentangeID').html(' ');
                }, 3000);
            }
        })
        .catch(function (error) {
            $('#UploadBtnID').html('Upload');
            $('#UploadPercentangeID').html('Upload Fail');
            $('#file-msg').show();
            setTimeout(() => {
                    $('#UploadPercentangeID').html(' ');
                }, 3000);
        })
    }
</script>
@endsection
