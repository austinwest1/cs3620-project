<?php require_once('header.php'); ?>

<!-- Begin page content -->
<main role="main" class="container" id="cards">
    <h1 class="mt-5">Austin's Favorite Shows</h1>

    <input type="button" class="btn btn-outline-primary" id="addCard" value="Add a show">

    <div id="newCard">

    </div>

    <!-- <div id="newCard">
        <div class="card" id="showCard" style="width: 18rem;">
            <div class="card-body">
                <div class="row">
                    <form role="form" id="boostrap-overrides" class="col-md-9 go-right">
                        <h5>Add a show</h5>
                        <div class="form-group">
                            <input id="name" name="name" type="text" class="form-control" required>
                            <label for="name">Title</label>
                        </div>
                        <div class="form-group">
                            <input id="phone" name="phone" type="tel" class="form-control" required>
                            <label for="phone">Rating</label>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="phone" class="form-control" required></textarea>
                            <label for="message">Description</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-primary" value="Add show">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br />
    </div> -->

    <?php
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    require_once('./show/show.php');

    $show = new show();
    $shows = $show->getMyShows();

    $arrlength = count($shows);



    for ($x = 0; $x < $arrlength; $x++) {

        // displays by order added
        // echo '<div class="card" id ="showCard" style="width: 18rem;">
        //             <div class="card-body">
        //                 <h5 class="card-title">' . $shows[$x]->getShowName() . '</h5>
        //                 <h6 class="card-subtitle mb-2 text-muted">Rating: ' . $shows[$x]->getShowRating() . '</h6>
        //                 <p class="card-text">' . $shows[$x]->getShowDescription() . '</p>
        //                 <a href="#" class="card-link">Card link</a>
        //             </div>
        //           </div>
        //           <br />';
    }

    // displays by most recent additions first
    for ($x = $arrlength - 1; $x > 0; $x--) {
        echo '<div class="card" id ="showCard" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">' . $shows[$x]->getShowName() . '</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Rating: ' . $shows[$x]->getShowRating() . '</h6>
                        <p class="card-text">' . $shows[$x]->getShowDescription() . '</p>
                        <a href="#" class="card-link">Card link</a>
                    </div>
                  </div>
                  <br />';
    }

    ?>
    <!-- <script>
        var cardButton = document.getElementById("addCard");
        cardButton.onclick = function() {
            document.getElementById("newCard").innerHTML += "<div class='card' id='showCard' style='width: 18rem;'> <div class='card-body'> <form method='POST' action='show_create.php'><label>Title</label><input name='title' type='text'><br /><label>Rating</label><input name='rating' type='text'><br /><label>Description</label><textarea name='description' type='text'></textarea><br /><input type='submit' class='button' value='Add show'></form> </div></div>";
        };
    </script> -->


    <script>
        var cardButton = document.getElementById("addCard");
        cardButton.onclick = function() {
            document.getElementById("newCard").innerHTML += '<div id="newCard"><div class="card" id="showCard" style="width: 18rem;"><div class="card-body"><div class="row"><form method="POST" action="show_create.php" role="form" id="boostrap-overrides" class="col-md-9 go-right"><h5>Add a show</h5><div class="form-group"><input id="name" name="title" type="text" class="form-control" required><label for="name">Title</label></div><div class="form-group"><input id="phone" name="rating" type="text" class="form-control" required><label for="phone">Rating</label></div><div class="form-group"><textarea id="message" name="description" class="form-control" required></textarea><label for="message">Description</label></div><div class="form-group"><input type="submit" class="btn btn-outline-primary" value="Add show"></div></form></div></div></div></div><br /></div>';
        };
    </script>


    <style>
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600);

        .form-control {
            background: transparent;
        }

        #addCard {
            margin-bottom: 13px;
        }

        form {
            width: 320px;
            margin: 0px;
        }

        form>div {
            position: relative;
            overflow: hidden;
        }

        .col-md-9 {
            max-width: 100%;
            flex: none;
        }

        form input,
        form textarea {
            width: 100%;
            border: 2px solid gray;
            background: none;
            position: relative;
            top: 0;
            left: 0;
            z-index: 1;
            padding: 8px 12px;
            outline: 0;
        }

        form input:valid,
        form textarea:valid {
            background: white;
        }

        form input:focus,
        form textarea:focus {
            border-color: #357EBD;
        }

        form input:focus+label,
        form textarea:focus+label {
            background: #357EBD;
            color: white;
            font-size: 70%;
            padding: 1px 6px;
            z-index: 2;
            text-transform: uppercase;
        }

        form label {
            -webkit-transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
            transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
            position: absolute;
            color: #999;
            padding: 7px 6px;
            font-weight: normal;
        }

        form textarea {
            display: block;
            resize: vertical;
        }

        form.go-bottom input,
        form.go-bottom textarea {
            padding: 12px 12px 12px 12px;
        }

        form.go-bottom label {
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        form.go-bottom input:focus,
        form.go-bottom textarea:focus {
            padding: 4px 6px 20px 6px;
        }

        form.go-bottom input:focus+label,
        form.go-bottom textarea:focus+label {
            top: 100%;
            margin-top: -16px;
        }

        form.go-right label {
            border-radius: 0 5px 5px 0;
            height: 100%;
            top: 0;
            right: 100%;
            width: 100%;
            margin-right: -100%;
        }

        form.go-right input:focus+label,
        form.go-right textarea:focus+label {
            right: 0;
            margin-right: 0;
            width: 40%;
            padding-top: 5px;
        }
    </style>

</main>

<?php require_once('footer.php'); ?>