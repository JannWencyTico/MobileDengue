<div class="body">
    <script>
        function goBack()
        {
            window.history.go(-1)
        }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><h2>Request Details</h2><br/>
    <table width="700" lign="left" class="table table-striped">

        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo '<tr>';
                    echo '<th>Username:</th> <td>'.$page_view_content[$x]['username'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Name:</th> <td>'.$page_view_content[$x]['name'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Mobile Number:</th> <td>'.$page_view_content[$x]['mobilenum'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Organization:</th><td>'.$page_view_content[$x]['organization'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Email:</th><td>'.$page_view_content[$x]['email'].'</td>';
                echo '</tr>';
            }
        ?>
    </table>
</div>