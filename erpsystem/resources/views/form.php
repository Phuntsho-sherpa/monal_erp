

<DOCTYPE html>
    <html>
        <head>
            <title>Form</title>
            <link rel="icon" type="image/png" href="icon.png" width="512" height="512"/>
        <link href='form.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>
            
        <div class="container">
        <img src="https://elzero.org/images/challenges/person-blue-shirt.png">
        <div class="header">
            <h1>Job Application</h1>
            <h3>Our service is always open...</h3>
        </div>
        <hr>
        <div class="social">
           <form id="contact" class="form formulaire">
                   <!--Affiche message d'envoi-->

                    <!--Fin Affichage message d'envoi-->
                    <div class="row">
                        <div class="one">
                            <input type="text" class="form-control" name="name" id="name" 
                            placeholder="Full name" required>
                            <small class="text-danger name"></small>
                        </div>
                        <div class="one">
                            <input type="text" class="form-control" name="subname" id="subname" 
                            placeholder="Phone number" required>
                            <small class="text-danger subname"></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="one">
                            <input type="email" class="form-control" name="email" id="email" 
                            placeholder="Email" required>
                            <small class="text-danger email"></small>
                        </div>
                      
                  

                    <div class="two">
                    <textarea name="message" id="message"  rows="10" class="form-control" 
                    placeholder="Cover letter"></textarea>
                    <small class="text-danger message"></small>
                </div>
                    </div>
                  
                    
                    <div class="wrapper">
    <div class="box">
      <div class="input-bx">
        <h2 class="upload-area-title">Uploadfile</h2>
       

      

                        <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                    
    </div>
  </div>
                    <div class="two">
                    <p><a class="btn" href="/add" type="submit">Submit</a></p>
                    </div>
                    
                </form>
        </div>
    </div>
        </body>
        <script src="form.js"></script>
    </html>

   

