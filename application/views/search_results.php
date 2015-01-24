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
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
           
        </tr>
        <?php
        if($results != NULL)
        {
            foreach ($results as $val)
            {
                echo '<tr>';
                echo "<td>".$val['name']."</td>";
                echo "<td>".$val['age']."</td>";
                echo "<td>".$val['gender']."</td>";
                echo "<td>".$val['address']."</td>";
             //  echo '<td><a href="'.base_url().'index.php/home/'.$val['patient_id'].'"><button class="btn btn-sm btn-primary">View</button></a></td>';
                echo '</tr>';
            }
        }
      
        ?>  
    </table>