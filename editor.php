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

        <script src="ckeditor/ckeditor.js"></script>
        <form action="">
            <textarea name="editor" id="editor" class="ckeditor"></textarea>

            <input type="submit" name="submit"> 
        </form>
    

    </div>

<?php include "partials/dashboard-footer.php"?>

</body>
</html>