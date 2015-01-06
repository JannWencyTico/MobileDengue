<div id="body">
    <?php
    $gender = array(
                    'Male' => 'Male',
                    'Female' => 'Female');
    for($x=0;$x<count($district);$x++)
    {
        $dist_option[$district[$x]['dist_id']] = $district[$x]['dist_name'];
    }
    for($x=0;$x<count($sub_district);$x++)
    {
        $sub_dist_option[$sub_district[$x]['subdist_id']] = $sub_district[$x]['subdist_name'];
    }
    for($x=0;$x<count($barangay);$x++)
    {
        $barangay_option[$barangay[$x]['brgy_id']] = $barangay[$x]['brgy_name'];
    }
        echo "<table class='table table-striped'>";
            $this->load->helper('form');
            echo form_open('report/send_report');
                echo "<tr><td>Last Name</td><td>".form_input('lastname', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>First Name</td><td>".form_input('firstname', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Middle Name</td><td>".form_input('middlename', NULL, 'class="form-control input-sm"')."</td></tr>";;
                echo "<tr><td>Gender</td><td>".form_dropdown('gender', $gender, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>District</td><td>".form_dropdown('district',$dist_option, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Sub District</td><td>".form_dropdown('sub_dist',$sub_dist_option, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Barangay</td><td>".form_dropdown('barangay',$barangay_option, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td align='right' colspan=2>".form_submit('mysubmit', 'Register', 'class="btn btn-primary"')."</td></tr>";
            echo form_close();
        echo "</table>";
    ?>
    <br/>
</div>