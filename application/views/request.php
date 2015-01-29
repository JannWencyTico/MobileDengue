<head>
    <title>Request</title>
</head>
<div class="body">
    <script>
        function goBack()
        {
            window.history.go(-1)
        }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <h3>Registration Request</h3>
    <table width="700" lign="left" class="table table-striped">
        <tr align="left">
            <th>Name</th>
            <th>Mobile Number</th>
            <th>Organization</th>    
            <th>Details</th>
            <th>Confirm</th>       
        </tr>
        <?php
            for($x=0;$x<count($page_content);$x++)
            {
                
                    echo '<tr>';
                        echo "<td>".$page_content[$x]['name']."</td>";
                        echo "<td>".$page_content[$x]['mobilenum']."</td>";
                        echo "<td>".$page_content[$x]['organization']."</td>";
                        echo '<td><a href="'.base_url().'index.php/request/view_request/'.$page_content[$x]['request_id'].'"><button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></button></a></td>';
                        echo '<td><a href="'.base_url().'index.php/request/confirm_request/'.$page_content[$x]['request_id'].'"><button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></a></td>';
                        // echo '<td><a href="'.base_url().'index.php/request/reject_request/'.$page_content[$x]['request_id'].'"><button class="btn btn-danger btn-sm">Reject</button></a></td>';
                    echo '</tr>';
            }
        ?>    
    </table>
    <br/>
</div>