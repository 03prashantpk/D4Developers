<?php include "./functions/includeAll.php";?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- head -->

<?php include "partials/dashboard-head.php"?>

<body>
    <input type="checkbox" id="check">
    <!--header area start-->
    <?php include "partials/dashboard-header.php"?>
    <!--header area end-->

    <!-- Sidebar -->
    <?php include "partials/dashboard-sidebar.php"?>
    <input type="hidden" id="userId" value="<?php echo $user_id; ?>">
    <!--sidebar end-->

    <div class="content post-section">
        <h1 class="post">All Posts</h1>
        
        <center><hr style="width: 10%;"></center>
        <br><br>
        <div class="flex-container shadow-2">
            <div class="flex-item-left">
                <img src="https://enally.in/live/DANL/images/blog-1.webp" alt="">
            </div>
            <div class="flex-item-right">
                <span>Lorem ipsum, dolor sit amet </span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam atque reiciendis mollitia non fuga consequatur reprehenderit, ipsum odit tempora! </p>
                <div class="blog-details">
                    by <span class="author"> Sergey Makashin | </span> Published: 22 Aug 2022  <span class="date"><span class="author"> | </span> <span style="color: #0D6EFD;">10K <i class="fas fa-thumbs-up" ></i></span></span>
                </div>              

            </div>
        </div>

        <br><br>

        <div class="flex-container shadow-2">
            <div class="flex-item-left">
                <img src="https://enally.in/live/DANL/images/blog-1.webp" alt="">
            </div>
            <div class="flex-item-right">
                <span>Lorem ipsum, dolor sit amet </span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam atque reiciendis mollitia non fuga consequatur reprehenderit, ipsum odit tempora! </p>
                <div class="blog-details">
                    by <span class="author"> Sergey Makashin | </span> Published: 22 Aug 2022  <span class="date"><span class="author"> | </span> <span style="color: #0D6EFD;">10K <i class="fas fa-thumbs-up" ></i></span></span>
                </div>              

            </div>
        </div>

        <br><br>

        <div class="flex-container shadow-2">
            <div class="flex-item-left">
                <img src="https://enally.in/live/DANL/images/blog-1.webp" alt="">
            </div>
            <div class="flex-item-right">
                <span>Lorem ipsum, dolor sit amet </span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam atque reiciendis mollitia non fuga consequatur reprehenderit, ipsum odit tempora! </p>
                <div class="blog-details">
                    by <span class="author"> Sergey Makashin | </span> Published: 22 Aug 2022  <span class="date"><span class="author"> | </span> <span style="color: #0D6EFD;">10K <i class="fas fa-thumbs-up" ></i></span></span>
                </div>              

            </div>
        </div>

        <br><br>

        <div class="flex-container shadow-2">
            <div class="flex-item-left">
                <img src="https://enally.in/live/DANL/images/blog-1.webp" alt="">
            </div>
            <div class="flex-item-right">
                <span>Lorem ipsum, dolor sit amet </span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam atque reiciendis mollitia non fuga consequatur reprehenderit, ipsum odit tempora! </p>
                <div class="blog-details">
                    by <span class="author"> Sergey Makashin | </span> Published: 22 Aug 2022  <span class="date"><span class="author"> | </span> <span style="color: #0D6EFD;">10K <i class="fas fa-thumbs-up" ></i></span></span>
                </div>              

            </div>
        </div>

    </div>

<?php include "partials/dashboard-footer.php"?>
</body>

</html>