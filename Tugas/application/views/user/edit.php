<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User PABW</title>
</head>
<body>
    <center><h2>User Dashboard</h2></center>
    <p>Selamat datang <?= $this->session->userdata('username');?></p>
    <p>Klik disini untuk <a href="<?=base_url('user/logout');?>" tite="Logout">Logout.</a> </p> 
    <table border="1" cellpadding="10" cellspacing="1" width="100%">
        <thead>
            <tr>
                <th>No</th>    
                <th>Username</th>
                <th>fname</th>
                <th colspan="2">Edit Data</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        echo form_open('user/edit'); ?>
            <tr>
                <td style="text-align: center;"><?php echo $no; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><input type="text" name="fname" value="<?php echo $user['fname']; ?>"></td>
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                <td><input type="submit" name="" value="Save"></td>
            </tr>
        <?php echo form_close() ?>
        </tbody>
    </table>
    
</body>
</html>