


<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>


<h2><?php echo $name; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('user/create'); ?>    
    <table>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="input" name="name" size="50" /></td>
        </tr>
        <tr>
            <td><label for="nickname">NickName</label></td>
            <td><input type="input" name="nickname" size="50" /></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td><input type="input" name="email" size="50" /></td>
        </tr>
        <tr>
            <td><label for="address">Address</label></td>
            <td><input type="input" name="address" size="50" /></td>
        </tr>
        <tr>
            <td><label for="gender">Gender</label></td>
            <td><input type="input" name="gender" size="50" /></td>
        </tr>
       <tr>
            <td><label for="comment">Comment</label></td>
            <td><textarea name="comment" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
			 <td><label for="cellphone">Cellphone</label></td>
            <td><input type="input" name="cellphone" size="50" value="<?php echo $user_item['cellphone'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="enter data" /></td>
        </tr>
    </table>    
</form>