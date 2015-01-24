<head>
<title>Report</title>
</head>
<div id="body">
    <?php
    $gender = array(
                    'M' => 'Male',
                    'F' => 'Female');

    $months = array(    
                    '1'  => 'Jan',
                    '2'  => 'Feb',
                    '3'  => 'Mar',
                    '4'  => 'Apr',
                    '5'  => 'May',
                    '6'  => 'Jun',
                    '7'  => 'Jul',
                    '8'  => 'Aug',
                    '9'  => 'Sep',
                    '10' => 'Oct',
                    '11' => 'Nov',
                    '12' => 'Dec',
                    );
    for ($x=1; $x<=31; $x++)
    {
        $days[$x] = $x;
    }
    for ($x=date('o'); $x>=1940; $x--)
    {
        $year[$x] = $x;
    }
    for($x=0;$x<count($page_content1);$x++)
    {
        $barangay_option[$page_content1[$x]['brgy_id']] = $page_content1[$x]['brgy_desc'];
    }
    for($x=0;$x<count($page_content2);$x++)
    {
        $severity_option[$page_content2[$x]['severity_id']] = $page_content2[$x]['severity_desc'];
    }

        echo "<table class='table table-striped'>";
            $this->load->helper('form');
            echo form_open('report/send_new_report');
                echo "<tr><td>Name</td><td>".form_input('name', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Age</td><td>".form_input('age', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Gender</td><td>".form_dropdown('gender', $gender, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Severity</td><td>".form_dropdown('severity_id',$severity_option, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Date Start</td><td>".form_dropdown('ds_month',$months, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('ds_day',$days, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('ds_year',$year, NULL, 'class="span1" class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Date End</td><td>".form_dropdown('de_month',$months, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('de_day',$days, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('de_year',$year, NULL, 'class="span1" class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Date Admitted</td><td>".form_dropdown('da_month',$months, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('da_day',$days, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('da_year',$year, NULL, 'class="span1" class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Address</td><td>".form_input('address', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Barangay</td><td>".form_dropdown('brgy_id',$barangay_option, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td align='right' colspan=2>".form_submit('mysubmit', 'Send', 'class="btn btn-primary"')."</td></tr>";
            echo form_close();
        echo "</table>";
    ?>
    <br/>
</div>