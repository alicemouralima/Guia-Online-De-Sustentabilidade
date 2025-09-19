function calcularConsumo() {
    // Obter valores dos inputs
    const aparelho = document.getElementById('aparelho').value;
    const potencia = parseFloat(document.getElementById('potencia').value);
    const horas = parseFloat(document.getElementById('horas').value);
    const custo = parseFloat(document.getElementById('custo').value);

    // Verificar se todos os campos estão preenchidos
    if (aparelho && potencia && horas && custo) {
        // Cálculo do consumo em kWh
        const consumoDiario = (potencia * horas) / 1000; // consumo diário em kWh
        const consumoMensal = consumoDiario * 30; // consumo mensal estimado
        const custoMensal = consumoMensal * custo; // custo total por mês

        // Exibir o resultado formatado em R$
        document.getElementById('resultado').innerHTML = 
            `O consumo mensal estimado do(a) <strong>${aparelho}</strong> é de <strong>${consumoMensal.toFixed(2)} kWh</strong>, 
            com um custo aproximado de <strong>R$${custoMensal.toFixed(2)}</strong>.`;
    } else {
        document.getElementById('resultado').innerHTML = "Por favor, preencha todos os campos corretamente.";
    }
}