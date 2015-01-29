<head>
    <title>Inbox</title>
</head>
<div class="body">
    <h3>Inbox</h3>
    <table width="700" lign="left" class="table table-striped">
        <tr align="left">
            <th>Sender</th>
            <th>From</th>
            <th>Diagnosis</th>    
            <th>Details</th>    
            <th>Confirm</th>   
            <th>Reject</th>
        </tr>
        <?php
            for($x=0;$x<count($page_content);$x++)
            {
                
                    echo '<tr>';
                        echo "<td>".$page_content[$x]['sender']."</td>";
                        echo "<td>".$page_content[$x]['brgy_desc']."</td>";
                        echo "<td>".$page_content[$x]['diagnosis']."</td>";
                        echo '<td><a href="'.base_url().'index.php/inbox/view_message/'.$page_content[$x]['tempmsg_id'].'"><button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></button></a></td>';
                        echo '<td><a href="'.base_url().'index.php/inbox/confirm_message/'.$page_content[$x]['tempmsg_id'].'"><button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></a></td>';
                        echo '<td><a href="'.base_url().'index.php/inbox/reject_message/'.$page_content[$x]['tempmsg_id'].'"><button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>';
                    echo '</tr>';
            }
        ?>    
    </table>
    <br/>
</div>