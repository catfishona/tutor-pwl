<?php
// TODO: code to process update existing artist data
?>

<div id="page-content-wrapper">
    <div style="align-items: center;padding: 100px">
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">

                <label for="idArtist" class="col-sm-2 control-label">
                    ID
                </label>
                <div class="col-sm-10 marginComp">
                    <input type="text" maxlength="50" readonly class="form-control" id="idArtist" name="id" value="idArtist">
                </div>
                <br>

                <label for="idName" class="col-sm-2 control-label">
                    Name
                </label>
                <div class="col-sm-10 marginComp">
                    <input type="text" required class="form-control" id="idName" name="name" value="artistName?>">
                </div>
                <br>

                <label for="idImage" class="col-sm-2 control-label">
                    Image
                </label>
                <div class="col-sm-10 marginComp">
                    <input type="file" class="form-control" id="idImage" name="image">
                </div>
                <br>

                <label for="idBirthDate" class="col-sm-2 control-label">
                    Birth Date
                </label>
                <div class="col-sm-10 marginComp">
                    <input type="date" required class="form-control" id="idBirthDate" name="birthDate" value="artistDob">
                </div>
                <br>

                <div class="col-sm-2 control-label">
                    <input name="buttonUpdateAction" type="submit" class="btn btn-primary" style="background: green;" />
                </div>
            </div>
        </form>
    </div>
</div>