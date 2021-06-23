<?php
session_name('user');
session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>JKA Karate</title>
    <link rel="stylesheet" href="styles/addQuestions.css">
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
</head>

<body>
    <div class="container">
        <div class="header">
            <div id="logo">
                <a href="index.php"><img class="logo" src="media\logo.png"></a>
            </div>
            <?php
            if(isset($_SESSION['role'])&&$_SESSION['role']==3){
               echo" <hr style=\"width:75%;\" >";
            }
            else{
               echo "<hr>";
            }
            ?>
            <nav id="pages">
                <a class="pages" href="basics.php">Basics</a>
                <a class="pages" href="more.php">More</a>
                <a class="pages" href="quiz_start.php">Quiz</a>
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a class=\"pages\" href=\"login.php\">Login</a>";
                    echo "<a class=\"pages\" href=\"sign-up.html\">Sign Up</a>";
                }
                ?>
                <?php if (isset($_SESSION['username'])) { 
                    echo "<a class=\"pages\"href=\"profile.php\">Profile</a>";
                    echo "<a class=\"pages\" href=\"php/logout.php\">Logout</a>";
                    if($_SESSION['role']==2){
                        echo "<a class=\"pages\" href=\"edit-quests.php\">Edit</a>";
                    }
                    else if($_SESSION['role']==3){
                        echo "<a class=\"pages\" href=\"users.php\">Users</a>";
                        echo "<a class=\"pages\" href=\"edit-quests.php\">Edit</a>";
                    }
                }
                ?>
            </nav>
        </div>
        <div class="background">
            <img src='media/background.jpg' style="isolation:isolate;">
        </div>
        <div class="row" id='row'>
                <span class="col-6 info">
                <!--EDW THA MPEI TO FORM GIA EPEJERGASIA-->
                <form class='col-6' action="php/update-quest-info.php" id='form' method="post">
                        <div class='inside_form'>
                        <div class='question'>
                            <p>Ερώτηση</p>
                            <?php
                            $question = $_SESSION['question'];
                            echo "<input class='ans' type='text' name='quest' value=\"$question\">";
                        ?>
                        </div>
                        <?php 
                        if($_SESSION['type']=='1'){
                            echo "<div class='apantisis'>";
                            echo "<p>απαντηση 1</p>";
                                $ans1=$_SESSION['ans1'];
                                echo "<input class='ans' type='text' name='ans1' value='$ans1'>
                            <p>απαντηση 2</p>";
                                $ans2=$_SESSION['ans2'];
                                echo "<input class='ans' type='text' name='ans2' value='$ans2'>
                            <p>απαντηση 3</p>";
                                $ans3=$_SESSION['ans3'];
                                echo "<input class='ans' type='text' name='ans3' value='$ans3'>
                            <p>απαντηση 4</p>";
                                $ans4=$_SESSION['ans4'];
                                echo "<input class='ans' type='text' name='ans4' value='$ans4'>
                            </div>";
                        }
                        else if($_SESSION['type']==3){
                            echo'<p id="valid">True or False</p>
                            <select aria-label="valid" name="valid" class="valid"  id="select" title="valid">
                            <option class="option" value="1">True</option>
                            <option class="option" value="2">False</option>
                            </select>';
                        }
                        else{
                            echo '<p id="textarea">Απαντηση</p>
                            <input type="text" id="textarea" name="textarea" class="ans" style="height: 100px;">';
                        }
                        ?>
                        <?php  
                        if($_SESSION['type']==1){
                            echo"<p>Valid Question</p>";
                            if($_SESSION['valid']==1){
                                echo ' <select aria-label="valid" name="valid" class=\'valid\' id="valid" title="valid"> 
                                <option class="option" value="1" selected>1</option> 
                                <option class="option" value="2">2</option> 
                                <option class="option" value="3">3</option> 
                                <option class="option" value="4">4</option> 
                                    </select>';
                                }
                                else if($_SESSION['valid']==2){
                                    echo ' <select aria-label="valid" name="valid" class=\'valid\' id="valid" title="valid"> 
                                    <option class="option" value="1">1</option> 
                                    <option class="option" value="2" selected >2</option> 
                                    <option class="option" value="3">3</option> 
                                    <option class="option" value="4">4</option> 
                                        </select>';
                                    }
                                else if($_SESSION['valid']==3){
                                    echo ' <select aria-label="valid" name="valid" class=\'valid\' id="valid" title="valid"> 
                                    <option class="option" value="1">1</option> 
                                    <option class="option" value="2" >2</option> 
                                    <option class="option" value="3" selected>3</option> 
                                    <option class="option" value="4">4</option> 
                                        </select>';
                                    }    
                                    else if($_SESSION['valid']==4){
                                        echo ' <select aria-label="valid" name="valid" class=\'valid\' id="valid" title="valid"> 
                                        <option class="option" value="1">1</option> 
                                        <option class="option" value="2" >2</option> 
                                        <option class="option" value="3">3</option> 
                                        <option class="option" value="4" selected>4</option> 
                                            </select>';
                                        }   
                        }

                            ?>
                        <div class='dyskolia'>
                            <?php 
                            if($_SESSION['diff']==1){
                                echo "Easy<input type='radio' name='diff' value='1' checked>
                            Medium<input type='radio'  value='2' name='diff'>
                            Hard<input type='radio'  value='3' name='diff'>";
                            }
                            else if($_SESSION['diff']==2){
                                echo "Easy<input type='radio' name='diff' value='1'>
                            Medium<input type='radio'  value='2' name='diff' checked>
                            Hard<input type='radio'  value='3' name='diff'>";
                            }
                            else if($_SESSION['diff']==3){
                                echo "Easy<input type='radio' name='diff' value='1'>
                            Medium<input type='radio'  value='2' name='diff' >
                            Hard<input type='radio'  value='3' name='diff' checked>";
                            }  
                            ?>
                        </div>
                        <input type='submit'>

                        </div>

                    </form>
                </span>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script src='scripts/darkmode.js'></script>
<script src='scripts/fill_the_question_edit.js'></script>

</html>
