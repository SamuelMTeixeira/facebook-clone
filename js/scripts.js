function verMaisAtividades(){
    let txtBtn = document.getElementById("p-btn");
    let opc = document.getElementById("opc-add-atividades");
    let iconeBtn = document.getElementById("btn-atv");
    
    // EXIBE AS OPCÕES ADICIONAIS
    if (opc.classList.contains("d-none")){
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