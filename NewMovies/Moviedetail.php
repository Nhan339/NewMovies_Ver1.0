<?php 
  include 'includes/header.php';
?>
<link rel="stylesheet" href="css/detail.css">   
    <div class="container-fluid pt-lg-5">
    <div class="detail">
        <div class="row">
            <div class="col-md-6">
                <img class="img-thumbnail" src="images/thor-love-and-thunder-poster.jpg" alt="">
                <div class="content">
                    <h1>Thỏ bay màu</h1>
                    <h3>
                    <span>
                    2022 ‧ Action/Adventures
                    </span>
                    </h3>
                    <br>
                    <p>
                    <span>
                        <button type="button" class="btn btn-outline-light" data-mdb-ripple-color="dark">Add to play-list</button>
                        <div class="alb">
                            <?php 
                            include "db_conn.php";
                            $sql = "SELECT * FROM movies ORDER BY movie_id DESC";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0) {
                                while ($video = mysqli_fetch_assoc($res)) { 
                            ?>
                                 
                                <?php echo "<a class='btn btn-outline-light' href='Watchmovie.php?id={$video['movie_id']}'>Watch Now</a>" ?>
                            <?php 
                            }
                            }else {
                                echo "<h1>Empty</h1>";
                            }
                            ?>
                        </div>
                    </span>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6"> 
                        <h2>Detail movie:</h2>
                    </div>
                <div class="w-100"></div>
                    <div class="col-md-12"> <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae reprehenderit tempora modi maiores minus nemo odio deserunt soluta similique, tenetur exercitationem quis delectus obcaecati sequi eaque a! Ullam, amet dicta?
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas accusamus, officia reiciendis necessitatibus quos possimus laudantium quam porro quaerat recusandae! Blanditiis consequuntur, incidunt totam earum veniam ducimus saepe. Aperiam, facilis?
                        Lorem ipsum dolor,<span id="blur">sit amet consectetur adipisicing elit.</span> <span id="dots">...</span><span id="more"> Quis temporibus suscipit consequatur, ratione sed ex, facere reiciendis in et nisi harum! Dolores non aut ex animi corrupti nostrum neque quam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, eos. Repellat molestias nisi cum incidunt aut natus rerum temporibus libero, dolorem tempora molestiae vitae dolores culpa expedita illo excepturi iste.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia explicabo quo ullam debitis enim mollitia voluptatem nostrum blanditiis cupiditate officiis, ab fuga, excepturi dolore perferendis adipisci quasi! Illo, minus consequuntur.</span></p>
                    </div>
                    <button onclick="myFunction()" id="myBtn" style="color: white;border: #141414;background-color: #141414;width: fit-content; margin-left: 42%">Read more</button>
                </div>
            </div>
        </div>
    </div>
        <div class="space" style="padding-top: 5rem;"></div>

    <div class="Similar-content">
        <div class="tile">
         <h2 style="color: orange;" >Similar content:</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="https://i.ytimg.com/vi/1EzCm1KEegU/maxresdefault.jpg" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");
            var opac = document.getElementById("blur");
        
            if (dots.style.display === "none") {
            dots.style.display = "inline";
            opac.style.opacity = "0.5";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
            } else {
            opac.style.opacity = "0";
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
            }
        }
   </script>

<?php 
  include 'includes/footer.php';
?>