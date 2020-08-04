<html>
    <head>
        <title>table</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="js/form.js"></script>
    </head>
    <body>
        <div class="container">
           <h3>submit form using ajax php</h3>
            <button class="btn btn-success btn-md" data-toggle="modal" data-target="#modalForm">
                Submit Form
            </button>

            <div class="modal fade" id="modalForm" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Contact Form</h4>
                        </div>
            
                        <div class="modal-body">
                            <form role="form" id="insert" method="post" action="insert.php">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Enter your name"/>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Enter your email"/>
                                </div>
                                <div class="form-group">
                                    <label for="inputContact">Contact</label>
                                    <input type="tel" class="form-control" name="contact" id="inputContact" placeholder="Enter your contact no."/>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Enter your address"/>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Select Gender</label>
                                    <select name="gender" id="gender" name="gender" class="form-control">
                                    <option value="Male">Male</option>  
                                    <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputMessage">Message</label>
                                    <textarea class="form-control" name="message" id="inputMessage" placeholder="Enter your message"></textarea>
                                </div>
                                <div>
                                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success" />
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </body>
</html>

