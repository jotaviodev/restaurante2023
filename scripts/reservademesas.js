const container = document.querySelector("div.container")

const data = [
    {
        status: false,
        nomeDaMesa: 'mesa 1',
        id: 1,
    },
    {               
        status: false,
        nomeDaMesa: 'mesa 2',
        id: 1,
    },
    {
        status: false,
        nomeDaMesa: 'mesa 3',
        id: 1,
    },
    {
        status: false,
        nomeDaMesa: 'mesa 4',
        id: 1,
    },
    
]

data.map((value) => {
    container.innerHTML += `
        <div class="box">
            <div class="parteesquerda">                    
                <h1>Mesa: ${value.nomeDaMesa}</h1>
            </div>
            <div class="partedireita">
                <div class="imagem">
                    
                </div>
            </div>
        </div>
    `
})