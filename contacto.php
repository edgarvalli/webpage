<?php  include "templates/header.php"; ?>
<div class="banner">
    <h1>Contactanos</h1>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-6 col-xs-12 p-4">

            <h2>Contáctanos</h2>
            <p>
                En caso de requerir mayor informacion sobre nuestros servicos
                o bien si require concertar una cita, estamos en la mejor dispoción
                de atenderlos.
            </p>
            <p>Favor de contactarnos en:</p>
            <div class="row">
                <div class="col-md-6">

                    <h4>Oficinas</h4>
                    <span>Dirección 123</span><br>
                    <span>Colonia</span><br>
                    <span>Monterrey, N.L.</span><br>
                    <span><strong>Telefono</strong>(81) 1122-4455</span><br>
                
                </div>

            </div>

            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1552463814910!6m8!1m7!1sCAoSLEFGMVFpcE5tVmdTWGdqX2Fnc3ZleDFHQ1M5OWNMa19qSTJYd2hPR0EzMUJF!2m2!1d25.6703293!2d-100.3096604!3f65.74774379158453!4f0!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.0621620866873!2d-100.3121079855059!3d25.66923401868765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662be2befc8f705%3A0xd57f9d9407bf5722!2sMacroplaza!5e0!3m2!1sen!2smx!4v1552463726142" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </div>
        <div class="col-md-6 col-xs-12 p-4">
            <h4>O si desea, llene la siguiente información:</h4>
            <form action="/scripts/sendmail.php" method="post" class="card" style="background: #e1e1e1">
                <div class="card-body">
                    <div class="form-group full-width">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                    
                    <div class="form-grup full-width">
                        <label for="mail" required>Correo</label>
                        <input type="text" id="mail" class="form-control">
                    </div>

                    <div class="form-grup full-width">
                        <label for="subjet">Asunto</label>
                        <input type="text" id="subjet" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    
                    <button class="btn btn-success">Enviar</button>
                </div>                
            </div>
        </div>


    </div>

</div>

<?php
    if(isset($_GET["sent"])) {
        include "templates/dialog.php";
    }
?>
<?php include "templates/footer.php"; ?>