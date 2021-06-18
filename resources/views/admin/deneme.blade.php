

<!--Form Wizard-->
<script src="{{url('/')}}/assets/admin/adminox/libs/stepy/jquery.stepy.js"></script>

<!-- Validation init js-->
<script src="{{url('/')}}/assets/admin/adminox/js/pages/wizard.init.js"></script>




<!-- Vendor js -->
<script src="{{url('/')}}/assets/admin/adminox/js/vendor.min.js"></script>


<!-- App js -->
<script src="{{url('/')}}/assets/admin/adminox/js/app.min.js"></script>


<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title">Clickable Wizard</h4>
            <p class="sub-header">
                jQuery Stepy is a plugin based on FormToWizard that generates a customizable wizard.
            </p>

            <ul id="wizard-clickable-header" class="stepy-header"><li id="wizard-clickable-head-0" class="stepy-active"><div>1</div><span>Basic Information</span></li><li id="wizard-clickable-head-1"><div>2</div><span>About you</span></li><li id="wizard-clickable-head-2"><div>3</div><span>Social Profiles</span></li></ul><form id="wizard-clickable">
                <fieldset title="1" id="wizard-clickable-step-0" class="stepy-step">
                    <legend style="display: none;">Basic Information</legend>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname1">First Name</label>
                                <input type="text" class="form-control" id="firstname1" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username1">User Name</label>
                                <input type="text" class="form-control" id="username1" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="password11">Password</label>
                                <input type="password" class="form-control" id="password11" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname1">Last Name</label>
                                <input type="text" class="form-control" id="lastname1" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="emailaddress1">Email Address</label>
                                <input type="email" class="form-control" id="emailaddress1" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="password2">Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="">
                            </div>
                        </div>
                    </div>

                    <p class="stepy-navigator"><a href="#" class="button-next btn btn-primary waves-effect waves-light">Next <i class="mdi mdi-arrow-right-bold"></i></a></p></fieldset>

                <fieldset title="2" id="wizard-clickable-step-1" class="stepy-step" style="display: none;">
                    <legend style="display: none;">About you</legend>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phonenumber1">Phone Number</label>
                                <input type="text" class="form-control" id="phonenumber1" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="address1">Address</label>
                                <input type="text" class="form-control" id="address1" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="aboutme1">About Me</label>
                                <textarea class="form-control" rows="5" id="aboutme1"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="currentlocation1">Current Location</label>
                                <input type="text" class="form-control" id="currentlocation1" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="username">Freelance</label>
                                <select class="form-control">
                                    <option>Available</option>
                                    <option>Unavailable</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p class="stepy-navigator"><a href="#" class="button-back btn btn-secondary waves-effect float-left"><i class="mdi mdi-arrow-left-bold"></i> Back</a><a href="#" class="button-next btn btn-primary waves-effect waves-light">Next <i class="mdi mdi-arrow-right-bold"></i></a></p></fieldset>

                <fieldset title="3" id="wizard-clickable-step-2" class="stepy-step" style="display: none;">
                    <legend style="display: none;">Social Profiles</legend>

                    <div class="row mt-3">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Facebook</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-facebook"></i></span>
                                    <input type="text" class="form-control" placeholder="Facebook url">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Linkdin</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-linkedin"></i></span>
                                    <input type="text" class="form-control" placeholder="Linkdin url">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Instagram</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-instagram"></i></span>
                                    <input type="text" class="form-control" placeholder="Instagram url">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Twitter</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-twitter"></i></span>
                                    <input type="text" class="form-control" placeholder="Twitter url">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Skype</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-skype"></i></span>
                                    <input type="text" class="form-control" placeholder="Skype url">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Pinterest</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-pinterest"></i></span>
                                    <input type="text" class="form-control" placeholder="Pinterest url">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="stepy-navigator"><a href="#" class="button-back btn btn-secondary waves-effect float-left"><i class="mdi mdi-arrow-left-bold"></i> Back</a><button type="submit" class="btn btn-primary stepy-finish">Submit</button></p></fieldset>


            </form>

        </div>
    </div>
</div>
