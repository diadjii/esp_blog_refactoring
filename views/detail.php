<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <title>ESP News</title>
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <?php require_once 'entete.php';?>
<div class="content-detail">
    <div class="first-column">
        <div>
            <h1 class="mt-4" id="article-title"></h1>
            <p class="lead">
                par
                <a href="#">Admin</a>
            </p>

            <p class="lead" id="article-content"></p>
            <p><img src="icons/comment.svg" width="20px" height="20px"> Posté le <small id="article-date"></small></p>
            <hr>
        </div>
            <!-- Comments Form -->
        <div class="comment">
            <h3 class="card-header">Laisser un commentaire</h3>
            <div class="card-body">
                <form id="form-create-comment">
                    <div class="form-group">
                        <input type="text" hidden id="article_id" name="article_id" value="">
                        <input class="input-form" type="text" name="pseudo" placeholder="Tapez votre pseudo...">
                        <br>
                        <textarea class="textarea-form" rows="3" required name="comment" placeholder="Tapez votre commentaire..."></textarea>
                    </div>
                    <input type="submit" value="Commenter" id="submit-btn">
                </form>
            </div>
            <br>
            <div id="comments"></div>
        </div>
    </div>

        <!-- Sidebar Widgets Column -->
        <div class="second-column">
            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Catégories</h5>
                <div class="card-body">
                    <div class="row" id="categorie">

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">
            <img src="img/logo.jpg" style="max-width:70px;" class="rounded-circle">
            Copyright &copy; ESP News 2019
        </p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/detail-article.js"></script>
</body>

</html>
