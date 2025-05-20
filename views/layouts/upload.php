
<div class="container" style="max-width: 500px; margin-top: 50px;">
    <div class="panel panel-primary">
        <div class="panel-heading"  style = "height:auto;background-color:blue" >
            <h3 class="panel-title" style="ont-size: 20px; font-family: Helvetica; color: white;">Chọn thời khoá biểu</h3>
        </div>
        <div class="panel-body" style="height: 100px;">
            <form action="upload_file.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                    <label for="myfile" class="col-sm-3 control-label">Chọn file</label>
                    <div class="col-sm-9">
                        <input type="file" name="myfile" id="myfile" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success">Tải lên</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
