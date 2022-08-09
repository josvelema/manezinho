<?php


include("delete_modal.php");

if (isset($_POST['checkBoxArray'])) {



    foreach ($_POST['checkBoxArray'] as $postValueId) {

        $bulk_options = $_POST['bulk_options'];

        switch ($bulk_options) {
            case 'published':

                $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = {$postValueId}  ";

                $update_to_published_status = mysqli_query($connection, $query);
                confirmQuery($update_to_published_status);



                break;


            case 'draft':

                $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = {$postValueId}  ";

                $update_to_draft_status = mysqli_query($connection, $query);

                confirmQuery($update_to_draft_status);






                break;



            case 'delete':

                $query = "DELETE FROM posts WHERE post_id = {$postValueId}  ";

                $update_to_delete_status = mysqli_query($connection, $query);

                confirmQuery($update_to_delete_status);



                break;


            case 'clone':


                $query = "SELECT * FROM posts WHERE post_id = '{$postValueId}' ";
                $select_post_query = mysqli_query($connection, $query);



                while ($row = mysqli_fetch_array($select_post_query)) {
                    $post_title         = $row['post_title'];
                    $post_category_id   = $row['post_cat_id'];
                    $post_date          = $row['post_date'];
                    $post_author        = $row['post_author'];
                    $post_status        = $row['post_status'];
                    $post_image         = $row['post_image'];
                    $post_tags          = $row['post_tags'];
                    $post_content       = $row['post_content'];
                }


                $query = "INSERT INTO posts(post_cat_id, post_title, post_author, post_date,post_image,post_content,post_tags,post_status) ";

                $query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}', '{$post_status}') ";

                $copy_query = mysqli_query($connection, $query);

                if (!$copy_query) {

                    die("QUERY FAILED" . mysqli_error($connection));
                }

                break;
        }
    }
}




?>



<div class="form-table-wrap">

    <form action="" method='post'>

        <table class="table table-bordered table-hover">


            <div class="col-xs-12" style="margin-bottom: 0.5em;"> 
                <a class="btn btn-primary" href="posts.php?source=add_post">Add New Event</a>

            </div>

            <div id="bulkOptionContainer" class="col-xs-4">

                <select class="form-control" name="bulk_options" id="bulk">
                    <option value="">Select Bulk operation</option>
                    <option value="published">Publish</option>
                    <option value="draft">Draft</option>
                    <option value="delete">Delete</option>
                    <option value="clone">Clone</option>
                </select>

            </div>

            <div class="col-xs-4">

                <input type="submit" name="submit" class="btn btn-success" value="Apply">


            </div>


            <thead>
                <tr>
                    <th><input id="selectAllBoxes" type="checkbox"></th>
                    <th>Id</th>
                    <th>Users</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Image</th>

                    <th>Content(english)</th>
                    <th>Content(portoguese)</th>

                    <th>URL</th>

                    <th>Date of Event</th>
                    <th>Time of Event</th>

                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <caption>Event posts</caption>


                <?php

                $query = "SELECT * FROM posts ORDER BY post_id DESC ";
                $select_posts = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_posts)) {
                    $post_id            = $row['post_id'];
                    $post_author        = $row['post_author'];
                    $post_user          = $row['post_author'];
                    $post_title         = $row['post_title'];
                    $post_cat_id        = $row['post_cat_id'];
                    $post_status        = $row['post_status'];
                    $post_image         = $row['post_image'];
                    // $post_tags          = $row['post_tags'];
                    // $post_comment_count = $row['post_comment_count'];
                    // $post_date          = $row['post_date'];
                    // $post_views         = $row['post_views'];

                    $post_event_date    = $row['post_event_date'];
                    $post_event_time    = $row['post_event_time'];
                    $post_content       = substr($row['post_content'], 0, 200) . '...';
                    $post_content_p     = substr($row['post_content_p'], 0, 200) . '...';
                    $post_url           = $row['post_url'];

                    echo "<tr>";

                ?>

                    <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $post_id; ?>'></td>


                    <?php

                    echo "<td>$post_id </td>";


                    if (!empty($post_author)) {

                        echo "<td>$post_author</td>";
                    } elseif (!empty($post_user)) {

                        echo "<td>$post_user</td>";
                    }








                    echo "<td>$post_title</td>";


                    $query = "SELECT * FROM categories WHERE cat_id = {$post_cat_id} ";
                    $select_categories_id = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($select_categories_id)) {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];


                        echo "<td>$cat_title</td>";
                    }



                    echo "<td>$post_status</td>";
                    echo "<td><img width='100' src='../images/$post_image' alt='image'></td>";
                    echo "<td>$post_content</td>";


                    // $query = "SELECT * FROM comments WHERE comment_post_id = $post_id";
                    // $send_comment_query = mysqli_query($connection, $query);

                    // $row = mysqli_fetch_array($send_comment_query);
                    // $comment_id = $row['comment_id'];
                    // $count_comments = mysqli_num_rows($send_comment_query);


                    echo "<td>$post_content</td>";


                    echo "<td>$post_url</td>";
                    echo "<td>$post_event_date </td>";
                    echo "<td>$post_event_time </td>";


                    echo "<td><a class='btn btn-info' href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";


                    ?>


                    <form method="post">

                        <input type="hidden" name="post_id" value="<?php echo $post_id ?>">

                        <?php

                        echo '<td><input class="btn btn-danger" type="submit" name="delete" value="Delete"></td>';

                        ?>


                    </form>


</div>


<?php




                    // echo "<td><a rel='$post_id' href='javascript:void(0)' class='delete_link'>Delete</a></td>";





                    // echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='posts.php?delete={$post_id}'>Delete</a></td>";

                    echo "</tr>";
                }



?>



</tbody>
</table>

</form>




<?php

if (isset($_POST['delete'])) {

    $the_post_id = escape($_POST['post_id']);

    $query = "DELETE FROM posts WHERE post_id = {$the_post_id} ";
    $delete_query = mysqli_query($connection, $query);
    header("Location: /manezinho/admin/posts.php");
}


if (isset($_GET['reset'])) {

    $the_post_id = escape($_GET['reset']);

    $query = "UPDATE posts SET post_views_count = 0 WHERE post_id = $the_post_id  ";
    $reset_query = mysqli_query($connection, $query);
    header("Location: posts.php");
}



?>


<script>
    $(document).ready(function() {


        $(".delete_link").on('click', function() {


            var id = $(this).attr("rel");

            var delete_url = "posts.php?delete=" + id + " ";


            $(".modal_delete_link").attr("href", delete_url);


            $("#myModal").modal('show');




        });



    });




    <?php if (isset($_SESSION['message'])) {

        unset($_SESSION['message']);
    }

    ?>
</script>