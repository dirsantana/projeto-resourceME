<?php require_once("header.php");?>
    <section id="banner">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/target-1506073.jpg" class="d-block w-75 mx-auto" alt="...">
                      </div>
                      <div id="teste" class="carousel-item">
                        <img src="img/studying.jpg" class="d-block w-75 mx-auto" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/now_hiring.jpg" class="nowhiring d-block w-75 mx-auto" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="mb-5">Services</h2>

          </div>
        </div>
        <div class="row">
          <?php listarServicos() ?>;
        </div>
      </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="img/Skooch-logo.png" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <h2>About</h2>
                    <p>
                        Mussum Ipsum, cacilds vidis litro abertis. Per aumento de cachacis, eu reclamis. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Contact Us</h2>
                        <form>
                                <div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" id="name" >
                                </div>
                                <div class="form-group">
                                  <label for="email">E-mail</label>
                                  <input type="text" class="form-control" id="email">
                                </div>
                              </form>
                              <div class="form-group">
                                  <label for="message">Message</label>
                                  <textarea name="message" id="message" class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                                  <button class="btn btn-primary">Send</button>
                              </div>
                </div>
                <div class="col">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.186626182062!2d-58.44586488515091!3d-34.54882986210219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436efe09303%3A0xfb39818e7624ac76!2sDigital%20House!5e0!3m2!1sen!2sbr!4v1569682139565!5m2!1sen!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>

            
        </div>
    </section>
    <?php require_once("footer.php"); ?>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>