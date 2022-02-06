<?php
    include('../Templates/Header.php');
    echo'
    <div class="container py-5 my-5">
        <div class="row align-items-md-stretch">
            <div class="col"></div>
                <div class="col-md-6">;
                    <div class="h-100 p-5 bg-light border border-3 border-secondary rounded-3">
                        <p class="testoBase text-center"> Pagina in costruzione! <br> Sarà disponibile a breve</p>
                    </div>
                </div>
            <div class="col"></div>
        </div>
    </div>';
    header("refresh:4; url=prod.php")
    include('../Templates/Footer.php');
?>