function verMaisAtividades() {
    let txtBtn = document.getElementById("p-btn");
    let opc = document.getElementById("opc-add-atividades");
    let iconeBtn = document.getElementById("btn-atv");

    // EXIBE AS OPCÕES ADICIONAIS
    if (opc.classList.contains("d-none")) {
        opc.classList.remove("d-none");
        iconeBtn.classList.add("rotacao");

        txtBtn.textContent = "Ver menos";
    }

    // RECOLHE AS OPCÕES ADICIONAIS
    else {
        opc.classList.add("d-none");
        iconeBtn.classList.remove("rotacao");
        txtBtn.textContent = "Ver mais";
    }
}

function setPreencherDia () {
    for (let i = 1; i < 32; i++) {
        let campo = document.getElementById("cad-niverDia");

        let opc = document.createElement("option");
        opc.textContent = i;
        opc.value = i;

        campo.appendChild(opc);
    }
}

function setPreencherMes () {
    for (let i = 1; i < 13; i++) {
        let campo = document.getElementById("cad-niverMes");

        let opc = document.createElement("option");
        opc.textContent = i;
        opc.value = i;

        campo.appendChild(opc);
    }
}

function setPreencherAno () {
    for (let i = 2022; i > 1950; i--) {
        let campo = document.getElementById("cad-niverAno");

        let opc = document.createElement("option");
        opc.textContent = i;
        opc.value = i;

        campo.appendChild(opc);
    }
}

setPreencherDia();
setPreencherMes();
setPreencherAno();