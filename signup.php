<?php
    include_once('head.php');
?>


    <div class="container">

       <div style="margin-left:30%; width:500px;" class="jumbotron">
            <h3 style="color:#2F4F4F;">Sign Up</h3>
            <hr>
            <br>

            <form action="upload_donor.php" method="post">
                <div class="form-group">
                    <label for="email">First name:</label>
                    <input name="name" type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Last name:</label>
                    <input name="surname" type="text" class="form-control" id="email">
                </div>

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Password:</label>
                    <input name="password" type="password" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Age:</label>
                    <input name="age" type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Sex:</label>
                    <select name="sex" type="text" class="form-control" id="sel1">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Blood type:</label>
                    <input name="blood_type" type="text" class="form-control" id="email">
                </div>
                <button style="float:right; " type="submit" class="btn btn-primary btn-sm wd-25">Submit</button>
            </form>
       </div>

    </div>


</body>
</html>
