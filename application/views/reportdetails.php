<div class="body">
    <script>
        function goBack()
        {
            window.history.go(-1)
        }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><h2>Report Details</h2><br/>
    <table width="700" lign="left" class="table table-striped">

        <?php
            for($x=0;$x<count($page_view_content);$x++)
            {
                echo '<tr>';
                    echo '<th>Lastname:</th> <td>'.$page_view_content[$x]['name'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Age:</th> <td>'.$page_view_content[$x]['age'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Gender:</th> <td>'.$page_view_content[$x]['gender'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Date Start:</th><td>'.$page_view_content[$x]['DSMonth'].' '.$page_view_content[$x]['DSDay'].', '.$page_view_content[$x]['DSYear'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Date End:</th><td>'.$page_view_content[$x]['DEMonth'].' '.$page_view_content[$x]['DEDay'].', '.$page_view_content[$x]['DEYear'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Date Admitted:</th><td>'.$page_view_content[$x]['DAMonth'].' '.$page_view_content[$x]['DADay'].', '.$page_view_content[$x]['DAYear'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Location:</th><td>'.$page_view_content[$x]['brgy_desc'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Outcome:</th><td>'.$page_view_content[$x]['severity_desc'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Sender:</th><td>'.$page_view_content[$x]['sender'].'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<th>Date Sent:</th><td>'.$page_view_content[$x]['DSendM'].' '.$page_view_content[$x]['DSendD'].', '.$page_view_content[$x]['DSendY'].'</td>';
                echo '</tr>';
            }
        ?>
    </table>
</div>