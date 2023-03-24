<?php
// TODO: code to process add new artist data
?>

<div id="page-content-wrapper">
    <button style="margin-bottom: 16px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#artistModalCenter">
        Add Artist
    </button>

    <div class="modal fade" id="artistModalCenter" tabindex="-1" role="dialog" aria-labelledby="artistModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="artistModalTitle">
                        Artist
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">

                            <label for="idArtist" class="col-sm-2 control-label">
                                ID
                            </label>
                            <div class="col-sm-10 marginComp">
                                <input type="number" required class="form-control" id="idArtist" name="id">
                            </div>
                            <br>

                            <label for="idName" class="col-sm-2 control-label">
                                Name
                            </label>
                            <div class="col-sm-10 marginComp">
                                <input type="text" required class="form-control" id="idName" name="name">
                            </div>
                            <br>

                            <label for="idImage" class="col-sm-2 control-label">
                                Image
                            </label>
                            <div class="col-sm-10 marginComp">
                                <input type="file" required class="form-control" id="idImage" name="image">
                            </div>
                            <br>

                            <label for="idBirthDate" class="col-sm-2 control-label">
                                Birth Date
                            </label>
                            <div class="col-sm-10 marginComp">
                                <input type="date" required class="form-control" id="idBirthDate" name="birthDate">
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

    <table class="display" id="tableArtist">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Birth Date</th>
                <th style="width: 5%;">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- TODO: loop through artist table -->
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $("#tableArtist").DataTable();
    })
</script>