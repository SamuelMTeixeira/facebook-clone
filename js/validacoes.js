const validarPost = () => {
    const btn = document.getElementById('btnPublicar')
    btn.disabled = false
    btn.classList.remove('btn-secondary')
    btn.classList.add('btn-primary')
}

document.getElementById('enviar-imagem').addEventListener('change', validarPost)
document.getElementById('cmp-txt').addEventListener('keydown', validarPost)

// CRIA A PREVIEW DOS ARQUIVOS
const setPreviewPosts = () => {
    let inputImages = document.getElementById('enviar-imagem')
    let container = document.getElementById('container-preview')

    //REMOVE AS PREVIEWS ANTIGAS DE DENTRO DA DIV
    container.innerText = ""

    // DEIXA AS PREVIEWS VISIVEIS
    container.classList.remove('d-none')

    // CRIA A DIV QUE VAI FICAR A IMG DE PREVIEW E O BTN
    let divPreview = document.createElement('div')
    container.appendChild(divPreview)

    let txt = document.getElementById('n-arquivos')
    txt.textContent = `${inputImages.files.length} arquivos selecionados`;

    for (i of inputImages.files) {
        let reader = new FileReader()
        let div = document.createElement('div')

        // CRIA O BTN DE FECHAR
        div.innerHTML = "<button onclick='setApagar()' class='btn-excluir-img' type='button'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-lg' viewBox='0 0 16 16'>  <path d='M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z'  </svg> </button>";

        reader.onload = () => {
            let img = document.createElement('img')
            img.setAttribute('src', reader.result)
            div.appendChild(img)
        }
        container.appendChild(div)
        reader.readAsDataURL(i)
    }
}

document.getElementById('enviar-imagem').addEventListener('change', setPreviewPosts);

function setApagar () {
    document.getElementById('enviar-imagem').value = "";
    document.getElementById('container-preview').innerText = "";
    document.getElementById('n-arquivos').textContent = "";
}