<!--  
David McDonald
February 9, 2021
Assignment 3
Purpose: POST vs GET.
-->
<html>
 <head>
  <title>Post Vs Get Login</title>
  <link href="../styleSheet.css" rel="stylesheet"/>
    <script type="text/javascript">
      function postOrGet(clickedId){
          //alert(clickedId);
          if(clickedId == "post"){
              //alert("in post if");
              document.getElementById("myForm").method = "post";
          }
          if(clickedId == "get"){
              //alert("in get if");
              document.getElementById("myForm").method = "get";  
                    }
      }

    </script>
 </head>
    <body>
    <?php echo '<h1>Post or Get? You decide.</h1>'; 
    ?>

    <div id="buttons">
        <button type="submit" id="post" name="post" value="post" onclick="postOrGet(this.id)">Post</button>
        <button type="submit" id="get" name="get" value="get" onclick="postOrGet(this.id)">Get</button>
    </div>

        <form id="myForm" action="" method="">
            <fieldset>
                <legend>Personal Information</legend>
                    
                <div class="info">
                    <label for="fName">First Name:</label>
                    <input id="fName" name="fName" type="text" placeholder="Enter First Name" required/>
                </div>

                <div class="info">
                    <label for="mName">Middle Name:</label>
                    <input id="mName" name="mName" type="text" placeholder="Enter Middle Name"/>
                </div>

                <div class="info">
                    <label for="lName">Last Name:</label>
                    <input id="lName" name="lName" type="text" placeholder="Enter Last Name" required/>
                </div>

                    <input type="hidden" id="myName" name="myName" value="Dave McDonald"/>
                    
                    <input id="submit" type="submit" value="Submit"/>
            </fieldset>
        </form> 

    <?php
        if(!empty($_POST)){
            echo "<div id='postMsg'>";
            echo "<script>alert('You sent a Post');</script>";
            echo "<h2>POST:</h2>";
            print_r($_POST);
            echo "<p>Data was sent via POST which prevents modification in the URL</p>";
            echo "</div>";
        }
        else if(!empty($_GET)){
                echo "<div id='postMsg'>";
                echo "<script>alert('You sent a Get');</script>";
                echo "<h2>GET:</h2>";
                print_r($_GET);
                echo "<p>Data was sent via GET which has the values right in the URL</p>";
                echo "</div>";
            }
    ?>
    </body>
</html>