<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>
<h2><?php echo $name; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('user/edit/'.$user_item['id']); ?>
    <table>
        <tr>
            <td><label for="name">First Name</label></td>
            <td><input type="input" name="firstname" size="50" value="<?php echo $user_item['name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="lastname">Last Name</label></td>
            <td><input type="input" name="lastname" size="50" value="<?php echo $user_item['lastname'] ?>" /></td>
		</tr>
        <tr>
            <td><label for="nickname">Nickname</label></td>
            <td><input type="input" name="nickname" size="50" value="<?php echo $user_item['nickname'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td><input type="input" name="email" size="50" value="<?php echo $user_item['email'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="address">Address</label></td>
            <td><input type="input" name="address" size="50" value="<?php echo $user_item['address'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="gender">Gender</label></td>
            <td><input type="input" name="gender" size="50" value="<?php echo $user_item['gender'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="comment">Comment</label></td>
            <td><textarea name="comment" rows="10" cols="40"><?php echo $user_item['comment'] ?></textarea></td>
        </tr>
        <tr>
		 <td><label for="cellphone">Cellphone</label></td>
            <td><input type="input" name="cellphone" size="50" value="<?php echo $user_item['cellphone'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>

 
