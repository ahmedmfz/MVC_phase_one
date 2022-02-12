<?php include(VIEW.'inc'.DS.'header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center mt-5"> Add User </h1>
                <p class="text-center mt-2"> MVC PROJECT </p>
                <?php if(isset($_SESSION['success'])):?>
                <div class="alert alert-success">
                    <?= $_SESSION['success']?>
                </div>
                <?php unset($_SESSION['success']);
                     endif;
                ?>
                <form action="store" method="POST" class="mt-4">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


<?php include(VIEW.'inc'.DS.'footer.php'); ?>