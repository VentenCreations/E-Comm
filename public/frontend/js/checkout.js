$(document).ready(function () {
    $('.place_btn').click(function (e) {
        e.preventDefault();

            var firstname = $('.firstname').val();
            var lastname  = $('.lastname').val();
            var email     = $('.email').val();
            var phone     = $('.phone').val();
            var address   = $('.address').val();
            var city      = $('.city').val();
            var country   = $('.country').val();


            if(!firstname)
            {
                fname_error = "First Name is required";
                $('#fname_error').html('');
                $('#fname_error').html(fname_error); //remove ")" for 

            }
            else
            {
                fname_error = ""
                $('#fname_error').html('');

            }
            if(!lastname)
            {
                lname_error = "Last Name is required";
                $('#lname_error').html('');
                $('#lname_error').html(lname_error); //remove ")" for 

            }
            else
            {
                fname_error = ""
                $('#lname_error').html('');

            }
            if(!email)
            {
                email_error = "Email is required";
                $('#email_error').html('');
                $('#email_error').html(email_error); //remove ")" for 

            }
            else
            {
                email_error = ""
                $('#email_error').html('');

            }
            if(!phone)
            {
                phone_error = "Phone number is required";
                $('#phone_error').html('');
                $('#phone_error').html(phone_error); //remove ")" for 

            }
            else
            {
                phone_error = ""
                $('#phone_error').html('');

            }
            if(!address)
            {
                address_error = "Address is required";
                $('#address_error').html('');
                $('#address_error').html(address_error); //remove ")" for 

            }
            else
            {
                address_error = ""
                $('#address_error').html('');

            }
            if(!city)
            {
                city_error = "City is required";
                $('#city_error').html('');
                $('#city_error').html(city_error); //remove ")" for 

            }
            else
            {
                city_error = ""
                $('#city_error').html('');

            }
            if(!country)
            {
                country_error = "Country is required";
                $('#country_error').html('');
                $('#country_error').html(country_error); //remove ")" for 

            }
            else
            {
                country_error = ""
                $('#country_error').html('');

            }


            if(fname_error != '' || lname_error !='' || email_error !='' || phone_error !='' || address_error !='' || city_error !='' || country_error !='')
            {
                return false;
            }
            else
            {   
                var data = {
                
                     'firstname':firstname,
                     'lastname':lastname,
                     'email':email,
                     'phone':phone,
                     'address':address,
                     'city':city,
                     'country':country,
                }

                $.ajax({
                    method: "POST",
                    url: "/proceed-to-pay",
                    data: data,
                    success: function (response) {
                        alert(response.total_price);
                       
                    }
         
                });
            }

        // alert("hello dattebayo");
    });

});