<footer class="container-fluid footer d-flex">
    <article class="col mb-3 footer">
        <p class="text-center mt-4">Projeto DH Social <sup><small>&copy;</small></sup> <?= date("Y"); ?></p>
        <a href="#"><i class="fab fa-facebook-square color-icon"></i></a>
        <a href="#"><i class="fab fa-twitter-square color-icon"></i></a>
        <a href="#"><i class="fab fa-linkedin color-icon"></i></a>
        <a href="#"><i class="fab fa-whatsapp-square color-icon"></i></a>
    </article>
    <div class="up" id="up">
            <i class="fas fa-chevron-up"></i>
        </div>
</footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <script>

  
    $(document).ready(function () {
        $(function () {
            $('.up').click(function () {//criando a funçao ação
                $('body,html').animate({
                    scrollTop: 0
                }, 200); //tempo para subir  
            });
        });
        });
</script>
</body>
</html>  