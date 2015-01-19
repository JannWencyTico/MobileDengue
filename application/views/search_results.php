    <script>
    function goBack()
      {
      window.history.go(-1)
      }
    </script>
    <button onclick="goBack()" class="btn btn-primary"> Back </button>
    <br/><h2>Results</h2><br/>
    <table width="545" align="left" class="table table-striped sortable">
        <tr align="left">
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
           
        </tr>
        <?php
        if($results != NULL)
        {
            foreach ($results as $val)
            {
                echo '<tr>';
                echo "<td>".$val['lastname']."</td>";
                echo "<td>".$val['firstname']."</td>";
                echo "<td>".$val['middlename']."</td>";
             //  echo '<td><a href="'.base_url().'index.php/home/'.$val['patient_id'].'"><button class="btn btn-sm btn-primary">View</button></a></td>';
                echo '</tr>';
            }
        }
      
        ?>  
    </table>