<?php
// TODO: code to process add new music data
?>

<div id="page-content-wrapper">
    <button style="margin-bottom: 16px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#musicModalCenter">
        Add Music
    </button>

    <div class="modal fade" id="musicModalCenter" tabindex="-1" role="dialog" aria-labelledby="musicModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="musicModalTitle">
                        Music
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">

                            <label for="idMusic" class="col-sm-2 control-label">
                                ID
                            </label>
                            <div class="col-sm-10 marginComp">
                                <input type="number" required class="form-control" id="idMusic" name="id">
                            </div>
                            <br>

                            <label for="idTitle" class="col-sm-2 control-label">
                                Title
                            </label>
                            <div class="col-sm-10 marginComp">
                                <input type="text" required class="form-control" id="idTitle" name="title">
                            </div>
                            <br>

                            <label for="idDuration" class="col-sm-2 control-label">
                                Duration
                            </label>
                            <div class="col-sm-10 marginComp">
                                <input type="number" required class="form-control" id="idDuration" name="duration">
                            </div>
                            <br>

                            <label for="idArtist" class="col-sm-2 control-label">
                                Artist
                            </label>
                            <div class="col-sm-10 marginComp">
                                <select class="form-control" id="idArtist" name="artist" required>
                                    <option selected disabled>Select Artist</option>
                                    <!-- TODO: fetch existing artist data -->
                                </select>
                            </div>
                            <br>

                        </div>
                        <div class="modal-footer">
                            <input name="buttonAddAction" type="submit" class="btn btn-primary" style="background: green;" />
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class="display" id="tableMusic">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Duration</th>
                <th>Artist</th>
                <th style="width: 5%;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // TODO: fetch existing music data
            ?>

        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $("#tableMusic").DataTable();
    })
</script>