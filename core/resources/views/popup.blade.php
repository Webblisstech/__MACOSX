<!-- resources/views/popup.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup</title>

    <!-- Your CSS styles go here -->

    <!-- Bootstrap CSS (example) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/css/bootstrap.min.css">

    <style>
        /* Add your custom styles for the popup here */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            max-width: 400px; /* Adjust the max-width as needed */
            width: 100%;
        }

        /* Add any other styles as needed */
    </style>
</head>
<body>

    <!-- Popup content goes here -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="popup col-md-8">

            <h4 class="my-3 text-center text-danger"> Welcome to Oprimeaccs</h4>
                        <p class="text-center"> The best shop for social media accounts and services.
                        </p>

                        <hr>


                        <p class="text-center"> Boost all your Social Media account with ease here 
                        </p>


                        <p class="text-center"><a href="https://oprimeboost.com">Click here to boost your account
                            </a>
                        </p>

                        </p>





                        <hr>


                        <p class="text-center"> DO NOT MISS AN UPDATE </p>
                        <p class="text-center"> Join our announcement group: </p>


                        </p>
                        <p class="text-center"> WhatsApp Group:<a href="https://chat.whatsapp.com/IrZvCzG5STtDCUiRZzJPjn">Join Whatsapp Group</a>
                        </p>

                        <p class="text-center"> Telegram Group:<a href="https://t.me/+fTn69pDmZuc1MjM0">Join Telegram
                                Group</a>
                        </p>
                        <hr>
                        <p class="text-center"> USA (#1,500) , UK (#2k) & OTHER COUNTRIES NUMBER FOR WHATSAPP, TELEGRAM AND OTHER VERIFICATION IS NOW AVAILBLE:<a href="https://wa.me/2348169581573?text=hey">Buy Now
                                </a>
                        </p>


<hr>





<!--              <h5 class="my-3 text-center text-danger">  <strong> NOTICE ! NOTICE !! NOTICE !!!</strong></h5>-->
                            <!--<p class="text-center"><strong> We have move buying of facebook and other social media account to our new website</strong> </p><br>-->
                            
<!--                                                        <div class="">-->

  <!--<a href="https://oprimeaccs.com" class="btn btn-lg btn-primary text-white mb-4"><strong class=" text-danger"><b>CLICK HERE</strong></b> TO FACEBOOK AND OTHER SOCIAL MEDIA ACCOUNTS <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">New</span></a>-->


<!--</div>-->
<!--                            <h3 class="text-center"><strong>DO NOT MISS AN UPDATE </strong> </h3>-->
<!--                            <p class="text-center"> Join our Update group: </p>-->
<!--                            <div class="d-flex justify-content-center">-->

<!--                                <link-->
<!--                                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"-->
<!--                                    rel="stylesheet" />-->
<!--                                <table class="">-->
<!--                                    <tr class="mr-2">-->
<!--                                        <td class="ml-2"><a href="https://t.me/+fTn69pDmZuc1MjM0"><i class="fa fa-telegram"-->
<!--                                                    style="font-size:40px"></i></a></td>-->
<!--                                        <td><a href="https://chat.whatsapp.com/IrZvCzG5STtDCUiRZzJPjn"><i class="fa fa-whatsapp fa-3x"-->
<!--                                                    aria-hidden="true"></i></a></td>-->
<!--                                    </tr>-->
<!--                                </table>-->


                          
                      
<!--                            </div>-->
<!--                            <br>-->
<!--                            <p style="text-align: center;"><strong>USA (#1,500) , UK (#2k) & OTHER COUNTRIES NUMBER FOR WHATSAPP, TELEGRAM AND OTHER VERIFICATION IS NOW AVAILBLE</strong>  </p>-->
<!--                            <div class="">-->
                                
                       

<!--  <a href="https://wa.me/2348169581573" class="btn btn-lg btn-primary text-white mb-4"><strong class=" text-danger"><b> BUY NOW <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">New</span></a>-->


<!--</div>-->
<!--<br>-->
                            <div class="text-center">
                <button id="closePopup" class="btn btn-danger">CLOSE</button>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Your JS scripts go here -->

    <!-- Bootstrap JS (example) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        // JavaScript to show the popup on page load
        $(document).ready(function () {
            $(".popup").show();
        });

        // JavaScript to close the popup
        $("#closePopup").click(function () {
            $(".popup").hide();
        });
    </script>

</body>
</html>
