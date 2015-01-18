<head>
<title>Report</title>
</head>
<div id="body">
    <?php

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
        $barangay_option[$page_content1[$x]['bgry_id']] = $page_content1[$x]['brgy_name'];
    }
    for($x=0;$x<count($page_content2);$x++)
    {
        $gender_option[$page_content2[$x]['gender_id']] = $page_content2[$x]['gender_name'];
    }
    for($x=0;$x<count($page_content3);$x++)
    {
        $type_option[$page_content3[$x]['type_id']] = $page_content3[$x]['type_desc'];
    }
    for($x=0;$x<count($page_content4);$x++)
    {
        $class_option[$page_content4[$x]['class_id']] = $page_content4[$x]['class_desc'];
    }
    for($x=0;$x<count($page_content5);$x++)
    {
        $outcome_option[$page_content5[$x]['outcome_id']] = $page_content5[$x]['outcome_desc'];
    }
    
        echo "<table class='table table-striped'>";
            $this->load->helper('form');
            echo form_open('report/send_new_report');
                echo "<tr><td>Last Name</td><td>".form_input('lastname', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>First Name</td><td>".form_input('firstname', NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Middle Name</td><td>".form_input('middlename', NULL, 'class="form-control input-sm"')."</td></tr>";;
                echo "<tr><td>Age</td><td>".form_input('age', NULL, 'class="form-control input-sm"')."</td></tr>";;
                echo "<tr><td>Date Start</td><td>".form_dropdown('ds_month',$months, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('ds_day',$days, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('ds_year',$year, NULL, 'class="span1" class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Date End</td><td>".form_dropdown('de_month',$months, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('de_day',$days, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('de_year',$year, NULL, 'class="span1" class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Date Admitted</td><td>".form_dropdown('da_month',$months, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('da_day',$days, NULL, 'class="span1" class="form-control input-sm"') ." ". form_dropdown('da_year',$year, NULL, 'class="span1" class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Gender</td><td>".form_dropdown('gender',$gender_option, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Barangay</td><td>".form_dropdown('brgy',$barangay_option, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Type</td><td>".form_dropdown('type',$type_option, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Classification</td><td>".form_dropdown('classification',$class_option, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td>Outcome</td><td>".form_dropdown('outcome',$outcome_option, NULL, 'class="form-control input-sm"')."</td></tr>";
                echo "<tr><td align='right' colspan=2>".form_submit('mysubmit', 'Send', 'class="btn btn-primary"')."</td></tr>";
            echo form_close();
        echo "</table>";
    ?>
    <br/>
</div>