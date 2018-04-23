<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="/INFS3202/Challenger/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Challenger</title>
    </head>

    <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/INFS3202/Challenger/Ladder.php">Ladder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/INFS3202/Challenger/Rules.php">Rules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/INFS3202/Challenger/AboutUs.php">About Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/INFS3202/Challenger/ContactUs.php">Contact Us</a>
                </li>
                </ul>
        </div>
          <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="/INFS3202/Challenger/home.php">Challenger</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="/INFS3202/Challenger/Profile.php">Profile</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/INFS3202/Challenger/Team.php">Team</a>
              </li>
          </ul>
        </div>
      </nav>
      <section id="page-content">
        <div class="container">
          <div class="row">
            <div class="col-sm text">
              <h1 align="center">Contact Us</h1>
              <p>If you have any feedback you want to send us or if you have some kind of issue/question then please fill out the form below</p>
              <p>If you have an urgent request (e.g. Something has happened in the game you are currently playing and you need an immediate response) then call us on 0400 000 000.</p>
              <p>If you have a less urgent enquiry then feel free to email us at Challenger@gmail.com or fill out the Contact Form.</p>
              <p><strong>Contact Form</strong></p>
              <div class="form">
                <form name="contactform" method="post" action="form_email.php">
                  <table width="450px">
                    <tr>
                      <td valign="top">
                        <label for="first_name">Name *</label>
                      </td>
                      <td valign="top">
                        <input  type="text" name="name" maxlength="50" size="30">
                      </td>
                    </tr>
                    <tr>
                      <td valign="top">
                        <label for="email">Email Address *</label>
                      </td>
                      <td valign="top">
                        <input  type="text" name="email" maxlength="80" size="30">
                      </td>
                    </tr>
                    <tr>
                      <td valign="top">
                        <label for="comments">Comments *</label>
                      </td>
                      <td valign="top">
                        <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="text-align:center">
                        <input type="submit" value="Submit">
                      </td>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

    </body>
