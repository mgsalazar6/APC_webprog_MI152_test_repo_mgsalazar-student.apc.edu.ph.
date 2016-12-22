<h2><?php echo $firstname; ?></h2>

 
<table border='5' cellpadding='4'>
    <tr>
        <td><strong>FIRST NAME</strong></td>
        <td><strong>LAST NAME</strong></td>
        <td><strong>MIDDLE NAME</strong></td>
        <td><strong>NICK NAME</strong></td>
        <td><strong>EMAIL ADDRESS</strong></td>
        <td><strong>HOME ADDRESS</strong></td>
        <td><strong>GENDER</strong></td>
        <td><strong>COMMENT</strong></td>
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
    background-color: #333;
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
    color: #DC143C;
    
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

            <br>

            <br>

            <p><a href="Summary Table.html">Click me for the summary </a></p>

            <br>
            <br>


        
            <h1>Did you know? (Trivia) </h1>


                <div class="center">
                <p>What scares me the most ?</p>

                </div>

                <p id="insect" style="display:none"><strong>I am scared of blood because back when i was little girl i got traumatize</strong></p>

                <p><button type="button" onclick="document.getElementById('insect').style.display='block'">Find out</button><p>


                 <br>
                 <br>
                  <br>
                 <br>
                 <br>
                <br>
                 <br>
              
               <h1>Did you know? (Trivia) </h1>
    
                  <div class="center">
                <p>what do you usually do when you have freetime?</p>

                </div>

                <p id="insects" style="display:none"><strong>I usually play Dota 2 with my friends and i usually watch movies especially horror movies </strong></p>

                <p><button type="button" onclick="document.getElementById('insects').style.display='block'">Find out</button><p>


                       <br>
                 <br>
                  <br>
                 <br>
                 <br>
                <br>
                 <br>

                  <h1>Did you know? (Trivia) </h1>


                  <div class="center">
                <p>one thing about yourself that makes you unique?</p>

                </div>

                <p id="insectss" style="display:none"><strong>I like cute things and whether i see cute animals i want to pet them</strong></p>

                <p><button type="button" onclick="document.getElementById('insectss').style.display='block'">Find out</button><p>

                     <br>
                 <br>
                  <br>
                 <br>
                 <br>
                <br>
                     <br>
                 <br>
                  <br>
                 <br>
                 <br>
                <br>
                 <br>


                   <h1>Did you know? (Trivia) </h1>


                  <div class="center">
                <p>Whats my favorite motto ? </p>

                </div>

                <p id="insectssss" style="display:none"><strong>once it is broken, you cannot fix it back</strong></p>

                <p><button type="button" onclick="document.getElementById('insectssss').style.display='block'">Find out</button><p>

    
                   


    <body>
  </html>
