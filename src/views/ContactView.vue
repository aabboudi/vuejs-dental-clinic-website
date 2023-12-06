<template>
  <div class="container-fluid contact">

    <!-- START OF FORM ROW -->
    <div class="row justify-content-center">
      <div class="col-10 col-md-8 col-lg-6">
        <div class="row contact-form justify-content-center align-items-center cstm-rounded p-4">
          <div class="col-12">
            <h1>Contactez-Nous !</h1>
          </div>
          <div class="col-12">
            <form action="" method="POST">

              <div class="row form-group">
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control" name="fname" placeholder="Prenom" required>
                </div>
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control" name="lname" placeholder="Nom" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-12 col-md-8">
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col-12 col-md-4">
                  <input type="tel" class="form-control" name="phone" placeholder="Telephone">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-12">
                  <select name="subject" class="form-control" required>
                    <option value="" disabled selected>Services</option>
                    <option value="consult">Consultation Generale</option>
                    <option value="chir">Chirurgie Dentaire</option>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-12">
                  <textarea name="msg" id="msg" rows="5" class="form-control" placeholder="Message..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
                <div class="col-6 ">
                  <button type="reset" class="btn btn-light">Annuler</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END OF FORM ROW -->

  </div>
</template>

<style scoped lang="scss">
.container-fluid.contact {
  margin-top: 60px;
  padding-block: 30px;
}

@media only screen and (max-width: 786px) {
  input[name="fname"], input[name="email"] {
    margin-bottom: 16px;
  }
}

.contact-form {
  border: 1px solid var(--vt-c-white-mute);
  background-color: var(--color-background);
}

option[value=""][disabled] {
  display: none;
}
</style>
