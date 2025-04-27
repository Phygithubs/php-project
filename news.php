<?php include('header.php') ?>
<section class="news">
    <div class="container">
        <div class="top">
            <h2>News</h2>
            <form action="" method="post">
                <select name="filter" class="form-control">
                    <option selected disabled>Filter News</option>
                    <option value="">Sports</option>
                    <option value="">Technology</option>
                    <option value="">Entertainment</option>
                </select>
            </form>
        </div>
        <div class="row">
            <div class="col-4">
                <figure>
                    <div class="thumbnail">
                        <a href="">
                            <img src="https://placehold.co/300" alt="">
                        </a>
                    </div>
                </figure>
                <figcaption>
                    <h3>
                        <a href="">
                            1990 World Cup Finals 3rd Shirt
                        </a>
                    </h3>
                    <div>
                        <img src="assets/icons/date.svg" alt="">
                        <span>19 Jun, 2023</span>
                    </div>
                </figcaption>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul class="pagination">
                    <li class="active">
                        <a href="">1</a>
                    </li>
                    <li>
                        <a href="">2</a>
                    </li>
                    <li>
                        <a href="">3</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>
<?php include('footer.php') ?>