<!DOCTYPE html>
<html lang="fr-FR">
  <head>
  <title>Contactez-moi !</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script
      src="https://kit.fontawesome.com/d9d02b30db.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/script.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="divider"></div>
      <div class="heading">
        <h2>Contactez-moi</h2>
      </div>
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <form id="contact-form" method="post" action="" role="form">
            <div class="row">
              <div class="col-md-6">
                <label for="firstname"
                  >Prénom<span class="blue"> *</span></label
                >
                <input
                  type="text"
                  id="firstname"
                  name="firstname"
                  class="form-control"
                  placeholder="Votre prénom"
                />
                <p class="comments"></p>
              </div>

              <div class="col-md-6">
                <label for="name">Nom<span class="blue"> *</span></label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="form-control"
                  placeholder="Votre nom"                 
                />
                <p class="comments"></p>
              </div>

              <div class="col-md-6">
                <label for="email">Email<span class="blue"> *</span></label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="form-control"
                  placeholder="Votre email"
                />
                <p class="comments"></p>
              </div>

              <div class="col-md-6">
                <label for="phone">Téléphone</label>
                <input
                  type="tel"
                  id="phone"
                  name="phone"
                  class="form-control"
                  placeholder="Votre téléphone"
                />
                <p class="comments"></p>
              </div>

              <div class="col-md-12">
                <label for="message">Message<span class="blue"> *</span></label>
                <textarea
                  id="message"
                  name="message"
                  class="form-control"
                  placeholder="Votre message"
                  cols="30"
                  rows="4"
                ></textarea>
                <p class="comments"></p>
              </div>

              <div class="col-md-12">
                <p class="blue">
                  <strong>* Ces informations sont requises</strong>
                </p>
              </div>

              <div class="col-md-12">
                <input type="submit" class="button1" value="Envoyer" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
