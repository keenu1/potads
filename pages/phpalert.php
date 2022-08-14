<?php

if (isset($_SESSION["alert"])) { ?>
    <div class="container">
        <div class="row ">
            <div class="alert alert-<?php echo $_SESSION["jenisalert"] ?> alert-dismissible fade show text-white font-weight-bold " role="alert">
                <?php echo $_SESSION["alert"] ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
    </div>
<?php
    unset($_SESSION["alert"]);
    unset($_SESSION["alertsignup"]);
    unset($_SESSION["jenisalert"]);
}
?>