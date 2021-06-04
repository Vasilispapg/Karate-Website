<?php
session_start();?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>JKA Karate</title>
        <link rel="stylesheet" href="styles/more.css">
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" </head>

        <body>
            <div class="container">
                <div class="header">
                    <div id="logo">
                        <a href="index.html"><img class="logo" src="media\logo.png"></a>
                    </div>
                    <hr>
                    <nav id="pages">
                        <a class="pages" href="basics.php">Basics</a>
                        <a class="pages" href="more.php">More</a>
                        <a class="pages" href="quiz_start.php">Quiz</a>
                        <?php 
                            if(!isset($_SESSION['username'])){
                                echo "<a class=\"pages\" href=\"login.html\">Login</a>";
                                echo"<a class=\"pages\" href=\"sign-up.html\">Sign Up</a>"; 
                            }
                                ?>
                        <?php if(isset($_SESSION['username'])){
                                echo "<a class=\"pages\"href=\"logout.php\">Logout</a>"; 
                                echo $_SESSION['username'];
                        }
                        ?>
                    </nav>
                </div>

                <div class="row">
                    <article>
                        <span class="first_row">
                        <h1 class="title">Zenkutsu Dachi</h1>
                        <span class="dachi">
                            <p class="col-4 zenkutsu" id="zenkutsu">Αρχικά θα ξεκινήσουμε με την στάση που κρατάμε κατά την διάρκεια εξάσκησης
                                των τεχνικών ώστε να έχουμε καλύτερη ισορροπία και ταυτόχρονα να γυμνάζουμε τα πόδια μας και τον κορμό μας.<br>Η zenkutsu-dachi ή forward leaning stance είναι μία απο τις πολλές στάσεις που χρησιμοποιούνται στο παραδοσιακό καράτε 
                                και επίσης είναι αυτή που χρησιμοποιείται πιο συχνά στις προπονήσεις.<br>
                                Ο σωστός τρόπος για αυτή την στάση ειναι τα πόδια να είναι στο άνοιγμα των ώμων και να έχουν απόσταση περίπου 1.5 ώμους καθώς το πίσω ποδι τεντώνει και το μπροστά να είναι αρκετά λυγισμένο ώστε να μην μπορούμε να δούμε τα δάχτυλα μας.
                                Το σώμα μας πρέπει είναι ελαφρώς στα πλάγια, καθώς και το βάρος του σώματος μας να είναι προς τα πόδια μας και προς τα μπροστά. 
                            </p>
                            <div id="slider" class="col-6">
                                <input type="radio" name="slider" id="slide1" checked>
                                <input type="radio" name="slider" id="slide2">
                                <input type="radio" name="slider" id="slide3">
                                <div id="slides">
                                    <div id="overflow">
                                        <div class="inner">
                                            <div class="slide slide_1">
                                                <div class="slide-content">
                                                    <img class="col-5 slide1" style="height:auto;width:70%" src="media/more/zenkutsu-dachi-1.png">
                                                </div>
                                            </div>
                                            <div class="slide slide_2">
                                                <div class="slide-content">
                                                    <img class="col-5 slide2" style="height:auto;width:70%" src="media/more/zenkutsu-dachi-3.png">
                                                </div>
                                            </div>
                                            <div class="slide slide_3">
                                                <div class="slide-content">
                                                    <img class="col-5 slide3" style="height:auto;width:60%" src="media/more/zenkutsu-dachi-2.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="controls">
                                    <label for="slide1"></label>
                                    <label for="slide2"></label>
                                    <label for="slide3"></label>
                                </div>
                            </div>
                        </span>
                        </span>
                        <span class="sec_row">    
                        <h1 class="title">Zuki</h1>
                        <span class="zuki">
                            <p class="col-4 zenkutsu" id="zenkutsu">Zuki είναι η ιαπωνική ονομασίας της μπουνιάς, υπάρχουν πολλών ειδών zuki, αλλά θα αναφερθώ μόνο στα βασικά.
                            Αρχικά έχουμε το Oi-Zuki (χτυπάμε με το χέρι όπου έχουμε μπροστά το πόδι μας), και το Gyaku-Zuki(αντίθετο χέρι/πόδι), Tate-Zuki όπου είναι παρόμοιο με το Oi-Zuki αλλά γυρνάμε την γροθιά μας κάθετα.
                            Τέλος οι πλάγιες μπουνιές όπως η Mawashi-Zuki με την όποια το χέρι ξεκινάει από το άνοιγμα του ώμου μας και καταλήγει με κύκλικη κίνηση στον αντίπαλο. Υπάρχουν παραδείγματα στις φωτογραφίες.
                            </p>
                            <div id="slider" class="col-6">
                                <input type="radio" name="slider2" id="slide4"checked >
                                <input type="radio" name="slider2" id="slide5" >
                                <input type="radio" name="slider2" id="slide6">
                                <input type="radio" name="slider2" id="slide7">
                                <div id="slides">
                                    <div id="overflow">
                                        <div class="inner">
                                            <div class="slide slide_1">
                                                <div class="slide-content">
                                                    <img class="col-5 slide4" style="height:auto;width:90%" src="media/more/gyaku-zuki-1.png">
                                                </div>
                                            </div>
                                            <div class="slide slide_2b">
                                                <div class="slide-content">
                                                    <img class="col-5 slide5" style="height:auto;width:75%" src="media/more/zukis2.jpg">
                                                </div>
                                            </div>
                                            <div class="slide slide_3">
                                                <div class="slide-content">
                                                    <img class="col-5 slide6" style="height:auto;width:75%" src="media/more/zukis3.jpg">
                                                </div>
                                            </div>
                                            <div class="slide slide_4">
                                                <div class="slide-content">
                                                    <img class="col-5 slide7" style="height:auto;width:80%" src="media/more/zuki.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="controls">
                                    <label for="slide4"></label>
                                    <label for="slide5"></label>
                                    <label for="slide6"></label>
                                    <label for="slide7"></label>
                                </div>
                            </div>
                        </span>
                        </span>
                        <span class="third_row">    
                        <h1 class="title">Geri</h1>
                        <span class="geri">
                            <p class="col-4 geri" id="geri">Geri είναι η ιαπωνική ονομασίας της κλωτσιάς, όπως και στα Zuki έτσι και στις Geri υπάρχουν πολλές διαφορετικές χρήσεις. Οι βασικές τεχνικές που μαθαίνει ενας αρχάριο για τις geri είναι οι
                            Mae-Geri όπου είναι η κλώτσια προς ευθεία κατεύθυνση, η Mawashi-Geri οπου ξεκινάει απο τα πλάγια του σώματος μας και κατευθείνεται με κλίση στον αντίπαλο. Και τέλος η Kekomi-geri η οποία ξεκινάει όπως η Mae-Geri άπλα την 
                            στιγμή της εκτίναξης του ποδιου γύρναμε το σώμα προς τα πίσω για να δώσουμε όθηση. 
                            </p>
                            <div id="slider" class="col-6">
                                <input type="radio" name="slider3" id="slide8" checked >
                                <input type="radio" name="slider3" id="slide9" >
                                <input type="radio" name="slider3" id="slide10">
                                <input type="radio" name="slider3" id="slide11">
                                <div id="slides">
                                    <div id="overflow">
                                        <div class="inner">
                                            <div class="slide slide_1">
                                                <div class="slide-content"><!-- EDW EINAI TO 8-->
                                                    <img class="col-5 slide8" style="height:auto;width:120%;" src="media/more/maegeri.png">
                                                </div>
                                            </div>
                                            <div class="slide slide_9">
                                                <div class="slide-content"><!-- EDW EINAI TO 9-->
                                                    <img class="col-5 slide9" style="height:auto;width:100%" src="media/more/mawashigeri.png">
                                                </div>
                                            </div>
                                            <div class="slide slide_3">
                                                <div class="slide-content"><!-- EDW EINAI TO 10-->
                                                    <img class="col-5 slide10" style="height:auto;width:95%" src="media/more/geris2.jpg">
                                                </div>
                                            </div>
                                            <div class="slide slide_3">
                                                <div class="slide-content"><!-- EDW EINAI TO 10-->
                                                    <img class="col-5 slide10" style="height:auto;width:95%" src="media/more/geris3.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="controls">
                                    <label for="slide8"></label>
                                    <label for="slide9"></label>
                                    <label for="slide10"></label>
                                    <label for="slide11"></label>
                                </div>
                            </div>
                        </span>
                        </span>
                    </article>
                </div>
            </div>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
        <script src='scripts/darkmode.js'></script>

    </html>