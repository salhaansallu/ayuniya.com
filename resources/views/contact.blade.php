@extends('layouts.app')
@section('content')
    <style>
        .navigation {
            top: 0;
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: #fff;
        }

        .nav_menu {
            top: 0;
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #fff;
        }

        footer {
            margin-top: 0
        }
    </style>

    <section class="contact_hero site-container" style="background-image: url({{ asset('images/hero/contact_hero.jpg') }});">
        <div class="head">
            <h1>Contact Us</h1>
            <p>Our team is happy to answer your questions. Fill out this form and we'll contact you back as soon as possible
            </p>
        </div>

        <div class="contact">
            <form action="" id="contact-form" onsubmit="return false;">
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                        <b>Enter name</b>
                        <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <b>Enter email address</b>
                        <input type="email" name="email" class="form-control" placeholder="Enter email address"
                            required>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <b>Enter mobile number</b>
                        <input type="text" name="number" id="number" class="form-control"
                            placeholder="Enter mobile number" required>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                        <b>Select country</b>
                        <select name="country" class="form-control" required>
                            @foreach (countryVerify("get") as $country)
                                <option value="{{ $country }}">{{ $country }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                        <b>Enter message</b>
                        <textarea name="message" id="" class="form-control" cols="30" rows="3" required
                            placeholder="Enter the message you want to send"></textarea>
                    </div>
                    <button type="submit" id="contact-btn" class="primary-btn">Submit</button>
                    <div class="progress p-0 m-2" style="display: none;">
                        <div id="progress-bar" class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                            style="transition: all 0.3s;" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100" style="width: 0%"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
        function phonenumber(phone) {
            var filter = /^[0-9-+]+$/;
            if (filter.test(phone)) {
                return true;
            } else {
                return false;
            }
        }

        function progress(per = 'reset') {
            if (per == 'reset') {
                $("#progress-bar").removeClass("bg-danger");
                $("#progress-bar").addClass("bg-success");
                $(".progress-bar").css('width', '0%');
            } else if (per == 'hide') {
                $(".progress").hide();
            } else if (per == 'show') {
                $(".progress").show();
            } else if (per == 'error') {
                $("#progress-bar").removeClass("bg-success");
                $("#progress-bar").addClass("bg-danger");
            } else {
                $(".progress-bar").css('width', per + '%');
            }

        }

        $(document).ready(function() {
            $("#contact-form").submit(function() {
                if (phonenumber($("#number").val())) {
                    $("#contact-btn").prop('disabled', true);
                    progress("reset");
                    progress("show");
                    progress("40");

                    $.ajax({
                        type: "post",
                        url: "/send-message",
                        data: $("#contact-form").serialize(),
                        dataType: "json",
                        success: function(response, xhr) {
                            console.log(response)
                            console.log(xhr)
                            if (xhr == "success") {
                                progress("75");
                                if (response.error == "0") {
                                    progress("100");
                                    alert(response.msg);
                                    location.reload();

                                } else if (response.error == "1") {
                                    progress("error");
                                    alert(response.msg);
                                }
                            }
                            else {
                                progress("error");
                                alert("Sorry! Something went wrong")
                            }
                            $("#contact-btn").prop('disabled', true);
                        }
                    });
                } else {
                    alert("please enter a valid phone number");
                }
            });
        });
    </script>
@endsection
