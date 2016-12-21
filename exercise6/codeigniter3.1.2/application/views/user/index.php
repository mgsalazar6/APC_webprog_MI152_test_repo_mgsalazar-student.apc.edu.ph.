<h2><?php echo $name; ?></h2>

 
<table border='5' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Address</strong></td>
        <td><strong>Gender</strong></td>
        <td><strong>Comment</strong></td>
		<td><strong>phone</strong></td>
		
    </tr>
<?php foreach ($user as $user_item): ?>
        <tr>
            <td><?php echo $user_item['name']; ?></td>
              <td><?php echo $user_item['nickname']; ?></td>
               <td><?php echo $user_item['email']; ?></td>
                <td><?php echo $user_item['address']; ?></td>
                 <td><?php echo $user_item['gender']; ?></td>
                  <td><?php echo $user_item['comment']; ?></td>
				   <td><?php echo $user_item['cellphone']; ?></td>
            <td>
                <a href="<?php echo site_url('user/'.$user_item['slug']); ?>">View</a> |
                <a href="<?php echo site_url('user/edit/'.$user_item['id']); ?>">Edit</a> |
                <a href="<?php echo site_url('user/delete/'.$user_item['id']); ?>" onClick="return confirm('Deleted data cant be retrieve anymore.Do you still wanna perform the action?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>


<!DOCTYPE html>
<html>
  <head>
    <title>Informations</title>
  </head>

  

  </html>
