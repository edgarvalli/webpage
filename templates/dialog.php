<div class="dialog success" id="dialog">
    <div class="card p-5">
        <div class="card-title">
            <h3>Mensaje Enviado</h3>
        </div>
        <div class="card-content">
            <p>Tu mensaje fue enviado, nosotros nos contactaremos lo mas pronto posible</p>
        </div>
        <div class="card-footer" id="card-footer">
            <!-- <button class="btn btn-danger" onclick="close(this)" type="reset">Cerrar</button> -->
        </div>
    </div>
</div>

<script>
    const close = () => document.querySelector("#dialog").remove();
    const button = document.createElement("button");
    button.classList.add("btn");
    button.classList.add("btn-danger");
    button.textContent = "Cerrar";
    button.addEventListener("click", close);
    document.querySelector("#card-footer").appendChild(button)
</script>