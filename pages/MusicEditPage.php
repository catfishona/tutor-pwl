<?php
// TODO: code to update existing music data
?>

<div id="page-content-wrapper">
    <div style="align-items: center;padding: 100px">
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">


                <label for="idMusic" class="col-sm-2 control-label">
                    ID
                </label>
                <div class="col-sm-10 marginComp">
                    <input type="text" maxlength="50" readonly class="form-control" id="idMusic" name="id" value="idMusic">
                </div>
                <br>

                <label for="idTitle" class="col-sm-2 control-label">
                    Title
                </label>
                <div class="col-sm-10 marginComp">
                    <input type="text" required class="form-control" id="idTitle" name="title" value="musicTitle" ?>">
                </div>
                <br>

                <label for="idDuration" class="col-sm-2 control-label">
                    Duration
                </label>
                <div class="col-sm-10 marginComp">
                    <input type="number" required class="form-control" id="idDuration" name="duration" value="musicDuration">
                </div>
                <br>

                <label for="idArtist" class="col-sm-2 control-label">
                    Artist
                </label>
                <div class="col-sm-10 marginComp">
                    <select class="form-control" id="idArtist" name="artist" required>
                        <option selected disabled>Select Artist</option>
                        <?php
                        // TODO: fetch existing artist data 

                        ?>
                    </select>
                </div>
                <br>

                <div class="col-sm-2 control-label">
                    <input name="buttonUpdateAction" type="submit" class="btn btn-primary" style="background: green;" />
                </div>
            </div>
        </form>
    </div>
</div>