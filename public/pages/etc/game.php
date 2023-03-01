<div class="row m-auto" style="max-width: 770px;">
    <div class="alert alert-primary mt-2 d-none" role="alert" id="alertSmall">
        👀 O número para ser encontrado é MENOR 😰
    </div>
    <div class="alert alert-primary mt-2 d-none" role="alert" id="alertBig">
        👀 O número para ser encontrado é MAIOR 😨
    </div>
</div>
<div class="m-auto" id="areaGame">
    <div class="row m-auto" style="max-width: 770px;">
        <div class="alert alert-danger d-none" role="alert" id="alertErro">
            Aposta invalida!
        </div>
        <div class="alert alert-success d-none text-center" role="alert" id="alertSuccess">
            Parabéns
        </div>
    </div>
    <div class="card areaGame m-auto">
        <div class="card-body m-5">
            <div class="row text-center h2">
                Descobrir o número de 1 a 100 🎲
            </div>
            <div class="row justify-content-center">
                <div class="row">
                    <input type="text" class="text-center" id="bet" placeholder="Digite um número" required>
                </div>
                <div class="row pt-3">
                    <button class="btn btn-primary w-50 m-auto" id="btn" onclick="verifyNumber()">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</div>