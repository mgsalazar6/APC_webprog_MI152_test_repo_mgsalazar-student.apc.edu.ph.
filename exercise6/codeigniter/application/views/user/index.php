<h2><?php echo $firstname; ?></h2>

 
<table border='5' cellpadding='4'>
    <tr>
        <td><strong>First Name</strong></td>
        <td><strong>Last Name</strong></td>
        <td><strong>Middle Initial</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Address</strong></td>
        <td><strong>Gender</strong></td>
        <td><strong>Comment</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($user as $user_item): ?>
        <tr>
            <td><?php echo $user_item['firstname']; ?></td>
            <td><?php echo $user_item['lastname']; ?></td>
             <td><?php echo $user_item['midname']; ?></td>
              <td><?php echo $user_item['nickname']; ?></td>
               <td><?php echo $user_item['email']; ?></td>
                <td><?php echo $user_item['homeadd']; ?></td>
                 <td><?php echo $user_item['gender']; ?></td>
                  <td><?php echo $user_item['comment']; ?></td>
            <td>
                <a href="<?php echo site_url('user/'.$user_item['slug']); ?>">VIEW</a> |
                <a href="<?php echo site_url('user/edit/'.$user_item['id']); ?>">EDIT</a> |
                <a href="<?php echo site_url('user/delete/'.$user_item['id']); ?>" onClick="return confirm('Deleted data cant be retrieve anymore.Do you still wanna perform the action?')">DELETE</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>


<!DOCTYPE html>
<html>
  <head>
    <title>MOTIVATION</title>

    <style> 
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000;
    position: fixed;
    top: 0;
    width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color:blue;
}

.active {
    background-color: violet;
}

.container {
    position: relative;
}

.center {
    position: absolute;
    left: 0;
    top: 10%;
    width: 100%;
    text-align: center;
    font-size: 18px;
}

img {
    width: 100%;
    opacity: 0.7;
}



h1 {
    text-align: center;
    text-transform: capitalize;
    color: #800080;
    
}

h3 {
    text-align: center;
    text-transform: capitalize;
    color: #000000;
    padding-bottom: 0%
    
}

h2 {
    text-align: center;
    text-transform: capitalize;
    color: #000000;
    padding: 100px 0px


    
}

.left {
    position: absolute;
    right: 300px;
    width: 400px;
    border: 3px solid #73AD21;
    padding: 100px;
}

p {

    text-indent:50px;
    text-align: center;
    letter-spacing: 2px
    direction:rt1;

}


.center {
    height: 200px;
    position: relative;
    border: 3px solid green;
}

.center p {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
 

a
{
    text-decoration: none;
}

a:hover{
  opacity: 0.7;
}





     </style>
  </head>

  

  <body>

    <ul>
      <li><a class="active" href="#home">HOME</a></li>
      
    </ul>
           <div class="container">
            <img src="" alt="" height="500">
            <div class="center">
                <h3>Welcome My Friend</h3>
            </div>

      

            <h1>MA AURORA SALAZAR</h1>

            <p>I'm Ma Aurora Salazar but you can call me Mau as well.I am a student in <stong>APC</strong> 
			I am 20 years old. but some say i looked 17 LOL! i am born on the 6th of December 1996. 
			My zodiac sign is sagittarius</p>
            <br>
            <br>
            <h1>Hobbies</h1>

            <p>Ive got plenty of hobbies. One of them is Playing Dota 2 with my friends (its such a good game tho. I recommend you that game lol) 
			the other one is reading wattpad stories, its like im the one who is directing the scene or making the movie inside my head or how should the scenario goes. And mostly my favorite hobby is
			singing. when im sad i sing. when im happy i sing and it also relieves my stress</p>

            <br>

            <br>


            <h1>Interest</h1>

            <p>I am interested in making friends. I love them so much. I treasure that I want to bury them in the ground joke! xD tho i am an introvert
			i am interested in animes, dota, learning new things. i am interseted in hanging out with my friends because i love them so much <3 even though they are harsh and bullies.
			</p>
    <body>
  </html>
