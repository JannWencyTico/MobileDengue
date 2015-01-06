<html>

    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">// <![CDATA[
            $(document).ready(function() {
                $('#country').change(function() { //any select change on the dropdown with id country trigger this code
                    $("#cities > option").remove(); //first of all clear select items
                    var country_id = $('#country').val(); // here we are taking country id of the selected one.
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/task/user/get_cities/" + country_id, //here we are calling our user controller and get_cities method with the country_id

                        success: function(cities) //we're calling the response json array 'cities'
                        {
                            $.each(cities, function(id, city) //here we're doing a foeach loop round each city with id as the key and city as the value
                            {
                                var opt = $('<option />'); // here we're creating a new select option with for each city
                                opt.val(id);
                                opt.text(city);
                                $('#cities').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                            });
                        }

                    });

                });
            });
            // ]]>
        </script>
    </head>
    <body>
        <?php $countries['#'] = 'Please Select'; ?>

        <label for="country">Country: </label><?php echo form_dropdown('country_id', $countries, '#', 'id="country"'); ?><br />
        <?php $cities['#'] = 'Please Select'; ?>
        <label for="city">City: </label><?php echo form_dropdown('city_id', $cities, '#', 'id="cities"'); ?><br />
    </body>
</html>