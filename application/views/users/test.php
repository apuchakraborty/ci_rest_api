<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>users/register">Add User</a>
<h2><?= $title ?></h2>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th> Name</th>
                <th>Email</th>
                <th>Role</th>
                 <th>status</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach($users as $us) : ?>
            <tr>
              <td><?php echo $us['name']; ?></td>
               <td><?php echo $us['email']; ?></td>
                <td><?php if ($us['user_role'] =='2') echo 'user'; else{
                	echo "admin";
                } ?></td>
                <td><a class="btn btn-danger" href="<?php echo base_url(); ?>users/delete/<?php echo $us['id']; ?>">delete</a></td>
            </tr>
        <?php endforeach; ?>
           
        </tbody>
      
    </table>
