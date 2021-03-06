<?php
session_name('user');
session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <title>JKA Karate</title>
        <link rel="stylesheet" href="styles/basics.css">
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <div class="row">
                <article class="basics">
                    <h1 class="story_title">
                        Ιστορία &amp; Φιλοσοφία	
                    </h1>
                    <span class="inside_row col-12">
                        <p class="inside_row_left col-4">Αρχικά, η πολεμική τέχνη Te ("χέρι") αναπτύχθηκε στην Οkinawa ως σύστημα αυτό-άμυνας.<br>Λόγω των συχνών επαφών της Οkinawa και των διαφόρων ανταλλαγών της με την Κίνα, είναι σίγουρο ότι η πολεμική τέχνη Okinawan κατά τη διάρκεια της ανάπτυξής της επηρεάστηκε από το κινεζικό kempo, σε κάποιο σημείο. Εντούτοις, με την προφορική παράδοση μόνο και κανένα επίσημο σύγχρονο έγγραφο, δεν είναι σίγουρο ακριβώς πότε η τέχνη αποκαλούμενη kara-τe, προέκυψε.<br>Θεωρείται ότι αναπτύχθηκε κατά προσέγγιση 500 έτη πριν, όταν ο δυνάστης Βασιλιάς Shoha ενοποίησε τις διάφορες τοπικές κυβερνήσεις στην περιοχή, μετά από δεκαετίες εχθροπραξιών και εξέδωσε ένα διάταγμα απαγορεύοντας την κατοχή των όπλων στο νησί της Okinawa.</p>
                        <div class="funakoshi col-4">
                            <img class="funakoshi" src="media/basics/funakoshi.jpg" alt="funakoshi">
                            <p class="image_alt">Gichin Funakoshi</p>
                        </div>
                        <p class="inside_row_right col-4">Σύμφωνα με υπολογισμούς, ένας παρόμοιος νόμος που απαγόρευε την κατοχή ή τη χρήση των όπλων επανεκδόθηκε και επιβλήθηκε από τη γενιά Satsuma , η οποία είχε εισβάλει στην Okinawa νωρίς στα 1600 μ.χ και τον είχε φέρει σύμφωνα με τους κανόνες του Ιαπωνικού Shogunate.<br>Θεωρείται ότι σε αυτό το περιβάλλον το καράτε αναπτύχθηκε ως μορφή άοπλου αγώνα για την προστασία της ζωής κάποιου και διδάχθηκε και ασκήθηκε μυστικά.<br>Κατόπιν ήρθε η γέννηση το 1868 στην Οkinawa, του master Funakoshi Gichin. Αφιέρωσε ολόκληρη τη ζωή του στην προώθηση της τέχνης και εισήγαγε το καράτε στην Ιαπωνία, όπου το διέδωσε σε ολόκληρη τη χώρα. Το 1949 οι οπαδοί-μαθητές του, ίδρυσαν μια ομοσπονδία για την προώθηση του καράτε, την οποία και αποκάλεσαν Nihon karate Kyokai, ή Japan karate Association, δηλαδή Ιαπωνική Ομοσπονδία Καράτε. Ήταν η αρχή της J.K.A...</p>
                    </span>
                    <img class="logo" id="shotokan" src="media/basics/shotokan.png" alt="jka logo">
                    <p class="image_alt">(Tο παραδοσιακό σήμα του Shotokan, με τον τίγρη την εποχή του ιδρυτή G. Funakoshi.)</p>
                    <p class="story_title"><strong>Φιλοσοφία</strong></p>
                    <div class="inside_row">
                        <p class="col-4">Το καράτε δεν είναι ένα παιχνίδι να κερδίσεις στα σημεία, ή ένα παιχνίδι των κατηγοριών βάρους ή των επιδείξεων.<br>Είναι μια πολεμική τέχνη και τρόπος ζωής, που εκπαιδεύει τον καρατέκα για να είναι ‘’ειρηνικός’’. Εάν όμως η σύγκρουση είναι αναπόφευκτη, το αληθινό καράτε υπαγορεύει τη πτώση του αντιπάλου με ένα ενιαίο χτύπημα. Μια τέτοια δράση απαιτεί δύναμη, ταχύτητα, εστίαση και έλεγχο. Όμως αυτές οι φυσικές πτυχές είναι ένα μόνο μέρος της πρακτικής, είναι ακριβώς το ‘’μεταφορικό μέσο’’, όχι το ίδιο το ταξίδι.</p>
                        <p class="col-4">Στο αληθινό καράτε, το σώμα, το μυαλό και το πνεύμα ολόκληρο πρέπει να αναπτυχθούν ταυτόχρονα. Μέσω των kihon (τεχνικές), kumite (αγώνας μεταξύ αντιπάλων) και των katas (μορφές), μαθαίνουμε να ελέγχουμε τις κινήσεις μας. Αλλά το πιο σημαντικό, μαθαίνουμε να έχουμε control στα χτυπήματα. Μπορούμε να εκτελέσουμε τις τεχνικές χωρίς σκέψη και να παραμείνουμε σταθεροί χωρίς να πρέπει να επικεντρωθούμε σε οποιοδήποτε πράγμα. Στην ουσία, το σώμα θυμάται πώς να κινηθεί.</p>
                        <p class="col-4">Αυτή η αρμονική ενότητα του μυαλού και του σώματος είναι έντονα ισχυρή. Το αποτέλεσμα στο αληθινό καράτε είναι η φυσική και αβίαστη δράση. Η εμπιστοσύνη, η ταπεινότητα, η ειλικρίνεια και η ειρήνη είναι πιθανές μόνο μέσω της τέλειας ενότητας του μυαλού και του σώματος. Αυτό είναι ο πυρήνας, η βάση και η φιλοσοφία του καράτε της J.K.A.</p>
                    </div>
                </article>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script src='scripts/darkmode.js'></script>
</html>