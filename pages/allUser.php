<?php include "pages/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row"> <!-- row Starts here-->
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user) {?>
                    <tr>
                        <td scope="col"><?php echo isset($user['id'])? $user['id'] : ''; ?></td>
                        <td scope="col"><?php echo isset($user['name'])? $user['name'] : ''; ?></td>
                        <td scope="col"><?php echo isset($user['email'])? $user['email'] : ''; ?></td>
                        <td scope="col"><?php echo isset($user['password'])? $user['password'] : ''; ?></td>

                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div> <!-- row Ends-->

    </div>  <!-- Container Ends-->
</section>






<?php include "pages/footer.php"; ?>

