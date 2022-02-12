<?php include(VIEW . 'inc' . DS . 'header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center mt-5">
            <h1> User Page </h1>
        </div>

        <div class="col-lg-12">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">title</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($data['user'] as $key => $user) : ?>
                        <tr>
                            <th scope="row"><?= $key +1?></th>
                            <td><?= $user->name ?></td>
                            <td><?= $user->title; ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

    <?php include(VIEW . 'inc' . DS . 'footer.php'); ?>