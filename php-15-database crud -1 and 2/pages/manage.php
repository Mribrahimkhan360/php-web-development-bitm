<?php include 'includes/header.php';?>
<div class="container mt-custom mt-4">
    <div class="row w-100">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">All Student Info</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($students as $student){?>
                            <tr>
                                <td><?php echo $student['name'];?></td>
                                <td><?php echo $student['email'];?></td>
                                <td><?php echo $student['mobile'];?></td>
                                <td>
                                    <a href="action.php?edit=<?php echo $student['id']?>" class="btn btn-warning">edit</a>
                                    <a href="action.php?del=<?php echo $student['id']?>" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>
