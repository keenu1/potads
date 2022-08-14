<?php

if (isset($_SESSION["alertsignup"])) { ?>
    <div class="container">
        <div class="row ">
            <div class="alert alert-danger alert-dismissible fade show text-white font-weight-bold " role="alert">
                <?php echo $_SESSION["alertsignup"] ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
    </div>
<?php
    unset($_SESSION["alertsignup"]);
}
?>