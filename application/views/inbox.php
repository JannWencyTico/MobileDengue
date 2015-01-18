<head>
    <title>Inbox</title>
</head>
<div class="body">
    <h3>Inbox</h3>
    <table width="700" lign="left" class="table table-striped">
        <tr align="left">
            <th>Sender</th>
            <th></th>
            <th>Diagnosis</th>           
        </tr>
        <?php
            for($x=0;$x<count($page_content);$x++)
            {
                
                    echo '<tr>';
                        echo "<td>".$page_content[$x]['number']."</td>";
                        echo "<td>".$page_content[$x]['org']."</td>";
                        echo "<td>".$page_content[$x]['type_desc']."</td>";
                        echo '<td><a href="'.base_url().'index.php/inbox/view_message/'.$page_content[$x]['tempmsg_id'].'"><button class="btn btn-primary btn-sm">View</button></a></td>';
                        echo '<td><a href="'.base_url().'index.php/inbox/confirm_message/'.$page_content[$x]['tempmsg_id'].'"><button class="btn btn-success btn-sm">Confirm</button></a></td>';
                        echo '<td><a href="'.base_url().'index.php/inbox/reject_message/'.$page_content[$x]['tempmsg_id'].'"><button class="btn btn-danger btn-sm">Reject</button></a></td>';
                    echo '</tr>';
                
                //echo '<td><a href="'.base_url().'index.php/view_faculty/view/'.$faculty[$x]['emp_id'].'">View</a></td>';
                //echo '<td><a href="'.base_url().'index.php/update_faculty/update_form/'.$faculty[$x]['emp_id'].'">Update</a></td>';
            }
        ?>    
    </table>
    <br/>
</div>