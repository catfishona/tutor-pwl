<?php
// TODO: code to process login for user
?>

<div style="margin-top: 50px; margin-bottom: 80px; text-align:center">
    <div style="max-width: 480px;padding: 15px 35px 45px; margin: 0 auto; background-color: #fff; border: 1px solid rgba(0, 0, 0, 0.1); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
        <h2 style="margin-bottom: 20px;">Login</h2>
        <form action="" method="post" class="form-horizontal">
            <div class="form-group">

                <label for="idUsername" class="col-sm-2 control-label">
                    Username
                </label>
                <div class="col-sm-10 marginComp">
                    <input type="text" minlength="4" maxlength="100" required class="form-control" id="idUsername" name="username">
                </div>
                <br>
                <br>

                <label for="idPassword" class="col-sm-2 control-label">
                    Password
                </label>
                <div class="col-sm-10 marginComp">
                    <input type="password" minlength="5" maxlength="100" required class="form-control" id="idPassword" name="password">
                </div>
                <div class="text-right">
                    <input type="checkbox" onclick="togglePassword()">&nbsp;&nbsp;Show Password
                </div>
                <br />
                <div class="col-sm-12" style="align-items:center; justify-content:center; display:flex">
                    <input name="buttonLoginAction" type="submit" class="btn btn-primary" value="Login" />
                </div>
            </div>
        </form>

    </div>
</div>

<script>
    function togglePassword() {
        var func = document.getElementById("idPassword");
        if (func.type === "password") {
            func.type = "text";
        } else {
            func.type = "password";
        }
    }
</script>