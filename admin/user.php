<?php include 'header.php'; ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data table</h4>
        <h2><a href="manage_user.php"> Add User</a></h2>
        <div class="row">
            <div class="col-12">
              
                <div class="table-responsive">
                    <table id="order-listing" class="table text-center">
                        <thead>
                            <tr>
                                <th># Sl no</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>password</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>jagdep</td>
                                <td>Doe@gmail.com</td>
                                <td>12345</td>
                                <td>
                                    <label class="badge badge-danger">Pending</label>
                                </td>

                                <td>
                                    <button class="btn btn-outline-primary">Edit</button>
                                    <button class="btn btn-outline-primary">View</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>