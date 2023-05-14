

<DOCTYPE html>
    <html>
        <head>
        <link href='form.css' rel='stylesheet'>
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
                        <div class="one">
                            <input type="text" class="form-control" name="tel" id="tel" 
                            placeholder="Attach file" required>
                            <small class="text-danger tel"></small>
                        </div>
                        <div class="one">
                            <input type="file" class="form-control" name="upload" accept=".doc,.docx,.pdf" id="upload" 
                           required>
                           <label for="upload" class="uploadlabel">
                            <p>Click To Upload</p>
                           </label>
                            <small class="text-danger tel"></small>
                        </div>
                    </div>
                    <div class="two">
                    <textarea name="message" id="message"  rows="10" class="form-control" 
                    placeholder="Cover letter"></textarea>
                    <small class="text-danger message"></small>
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

   

